<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function amc_date_create($str_date, $amc_id) {
     $end_date = '';
     switch ($amc_id) {
	  case '1':
	       $end_date = date('Y-m-d H:i:s', strtotime("+1 years", strtotime($str_date)));
	       return $end_date;
	       break;

	  default:
	       $end_date = date('Y-m-d H:i:s', strtotime("+1 years", strtotime($str_date)));
	       return $end_date;
	       break;
     }
}

function amc_service_create($start_date, $amc_id) {

     $end_date = '';
     switch ($amc_id) {
	  case '1':
	       $end_date = date('Y-m-d H:i:s', strtotime("+1 month", strtotime($start_date)));
	       $start_date = date('Y-m-d H:i:s', strtotime("-5 day", strtotime($end_date)));
	       return array('start_date' => $start_date, 'end_date' => $end_date);
	       break;

	  default:
	       $end_date = date('Y-m-d H:i:s', strtotime("+1 month", strtotime($start_date)));
	       $start_date = date('Y-m-d H:i:s', strtotime("-5 day", strtotime($end_date)));
	       return array('start_date' => $start_date, 'end_date' => $end_date);
	       break;
     }
}
