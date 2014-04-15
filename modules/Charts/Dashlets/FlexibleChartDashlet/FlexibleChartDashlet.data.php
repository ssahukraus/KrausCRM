<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$dashletData['FlexibleChartDashlet']['searchFields'] = array(
	'which_chart' => array(
                'name'  => 'which_chart',
                'vname' => translate('LBL_WHICH_CHART','Charts'),
                'type'  => 'enum',
                'options' => array(),
            ),
        'fcd_ids' => array(
                'name'  => 'fcd_ids',
                'vname' => 'LBL_USERS',
                'type'  => 'user_name',
            ),
        'fcd_date_start' => array(
                'name'  => 'fcd_date_start',
                'vname' => 'LBL_DATE_START',
                'type'  => 'datepicker',
            ),
        'fcd_date_end' => array(
                'name'  => 'fcd_date_end',
                'vname' => 'LBL_DATE_END',
                'type'  => 'datepicker',
            ),
        );
?>
