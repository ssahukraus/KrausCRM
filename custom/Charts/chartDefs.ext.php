<?php
$chartDefs['sales_by_month'] = array(
		'type' => 'code',
		'id' => 'Chart_sales_by_month',
		'label' => 'Sales by Month',
		'chartUnits' => 'Sales in R1K',				
		'chartType' => 'stacked group by chart',
		'groupBy' => array( 'm', 'channel_id', ),
		'base_url'=> 
			array('module' => 'tran_header',
					'action' => 'index',
					'query' => 'true',
					'searchFormTab' => 'advanced_search',
			),
		'url_params' => array( 'channel_id', 'date_closed' ),
		'query' => 'SELECT channel_id, DATE_FORMAT(h.date_entered,"%Y-%m") as m, sum(h.incl_amount/1000) as total, count(*) as opp_count FROM tran_header h  WHERE local_date(h.date_entered) >= DATE_FORMAT("{$fcd_date_start}", "%Y-%m-%d %H:%i:%s") AND local_date(h.date_entered) <= DATE_FORMAT("{$fcd_date_end}", "%Y-%m-%d %H:%i:%s") AND h.deleted=0 AND h.status=13 GROUP BY channel_id, m ORDER BY m, channel_id',
	 );

$chartDefs['cases_by_month'] = array(
		'type' => 'code',
		'id' => 'Cases_by_month',
		'label' => 'Cases by Month',
		'chartUnits' => 'Cases',				
		'chartType' => 'stacked group by chart',
		'groupBy' => array( 'm', 'type', ),
		'base_url'=> 
			array('module' => 'Cases',
					'action' => 'index',
					'query' => 'true',
					'searchFormTab' => 'advanced_search',
			),
		'url_params' => array( 'type' ),
		'query' => 'SELECT type, DATE_FORMAT(date_entered,"%Y-%m") as m, count(id) as total, count(*) as case_count FROM cases  WHERE local_date(date_entered) >= DATE_FORMAT("{$fcd_date_start}", "%Y-%m-%d %H:%i:%s") AND local_date(date_entered) <= DATE_FORMAT("{$fcd_date_end}", "%Y-%m-%d %H:%i:%s") AND deleted=0 GROUP BY type, m ORDER BY m, type',
	 );
