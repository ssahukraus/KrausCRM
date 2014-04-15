<?php

$viewdefs['Schedulers']['EditView'] = array(
    'templateMeta' => array('maxColumns' => '2',
                            'widths' => array(
                                            array('label' => '10', 'field' => '30'),
                                            array('label' => '10', 'field' => '30')
                                            ),
    ),
 'panels' =>array (
  
  array (
    
    array (
      
      array (
        'name' => 'hours',
        'customCode' => '<input name="hours" tabindex="4" maxlength="25" type="text" size="3" value="{$HOURS}">',
        'description' => 'This field was auto generated',
      ),
      
      array (
        'name' => 'months',
        'customCode' => '<input name="months" tabindex="6" maxlength="25" type="text" size="3" value="{$MONTHS}">',
        'description' => 'This field was auto generated',
      ),
    ),
  ),
  
  array (
    
    array (
      
      array (
        'name' => 'all',
        'customCode' => '<input type="checkbox" name="all" value="true" id="all" {$ONLY_ADV} {$ALL} onClick="allDays();">&nbsp;<i>{$MOD.LBL_ALL}</i>',
        'description' => 'This field was auto generated',
      ),
    ),
  ),
  
  array (
    
    array (
      
      array (
        'name' => 'time_hour_start',
        'fields' => 
        array (
          'time_hour_start',
          'time_minute_start',
        ),
      ),
    ),
    
    array (
      'time_format',
    ),
  ),
  
  array (
  ),
  
  array (
    
    array (
      
      array (
        'name' => 'time_hour_end',
        'fields' => 
        array (
          'time_hour_end',
          'time_minute_end',
        ),
      ),
    ),
  ),
  
  array (
  ),
)


);
?>