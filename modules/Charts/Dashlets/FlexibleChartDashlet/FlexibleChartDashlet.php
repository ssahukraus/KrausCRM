<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/Dashlets/DashletGenericChart.php');

class FlexibleChartDashlet extends DashletGenericChart 
{
    public $fcd_ids = array();
    public $fcd_date_start;
    public $fcd_date_end;
    var $chartDefs;
    var $chartDefName;
    
    protected $_seedName = 'Opportunities';
    
    public function __construct($id, array $options = null) 
    {
        global $timedate;
        
	if(empty($options['fcd_date_start'])) 
           $options['fcd_date_start'] = date($timedate->get_db_date_time_format(), time());
            
        if(empty($options['fcd_date_end']))
            $options['fcd_date_end'] = date($timedate->get_db_date_time_format(), time()+86400*365);
            
        parent::__construct($id,$options);

	// Make a list of charts from the chartdef files
	require "modules/Charts/chartdefs.php";
	if (file_exists("custom/Charts/chartDefs.ext.php"))
		require("custom/Charts/chartDefs.ext.php");	
	$this->chartDefs = $chartDefs;
	foreach ($this->chartDefs as $key => $value)
		if (!empty($value['query']))
			$chart_list[$key] = $value['label'];
	$this->_searchFields['which_chart']['options'] = $chart_list;
    }
    
    public function displayOptions()
    {
	global $app_list_strings;

        if (!isset($this->fcd_ids) || count($this->fcd_ids) == 0)
		$this->_searchFields['fcd_ids']['input_name0'] = array_keys(get_user_array(false));

	$this->chartDefName = $this->which_chart[0];

	if (!empty($this->chartDefs[$this->chartDefName]['searchFields']))
		foreach ($this->chartDefs[$this->chartDefName]['searchFields'] as $key => $value)
			$this->_searchFields[$key] = $value;

        return parent::displayOptions();
    }
    
    public function display() 
    {
        $currency_symbol = $GLOBALS['sugar_config']['default_currency_symbol'];
        if ($GLOBALS['current_user']->getPreference('currency')){
            require_once('modules/Currencies/Currency.php');
            $currency = new Currency();
            $currency->retrieve($GLOBALS['current_user']->getPreference('currency'));
            $currency_symbol = $currency->symbol;
        }

	$this->chartDefName = $this->which_chart[0];
        $chartDef = $this->chartDefs[$this->chartDefName];

        require_once('include/SugarCharts/SugarChart.php');
        $sugarChart = new SugarChart();
        $sugarChart->setProperties('', $chartDef['chartUnits'], $chartDef['chartType']);
        $sugarChart->base_url = $chartDef['base_url'];
        $sugarChart->group_by = $chartDef['groupBy'];
        $sugarChart->url_params = array();

        $sugarChart->getData($this->constructQuery());

        //$sugarChart->data_set = $sugarChart->sortData($sugarChart->data_set, $chartDef['groupBy'][0], false,
	//			$chartDef['groupBy'][1], true, true);

        $xmlFile = $sugarChart->getXMLFileName($this->id);
        $sugarChart->saveXMLFile($xmlFile, $sugarChart->generateXML());
	
        return $this->getTitle('<div align="center"></div>') . 
            '<div align="center">' . $sugarChart->display($this->id, $xmlFile, '100%', '480', false) . '</div><br />';
	}
    
    protected function constructQuery()
    {
	$query = $this->chartDefs[$this->chartDefName]['query'];

	// Replace parameters
	foreach ($this->_searchFields as $key => $value)
		if (!is_array($this->$key))
			$query = str_replace('{$'.$key.'}',$this->$key,$query);
		else
			$query = str_replace('{$'.$key.'}',"'".implode("','",$this->$key)."'",$query);

	return ($query);
    }
}

?>
