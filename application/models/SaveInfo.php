<?php

class SaveInfo extends CI_Model{
    
	function saveData($clientinfo,$jobs,$payment,$timeschedule){
	     $data = array(
            'clientinfo'=>$clientinfo,
            'jobs'=>$jobs,
            'paymentinfo'=>$payment,
            'timeschedule'=>$timeschedule
         );
         $this->db->insert('workforce',$data);
	}
	
}