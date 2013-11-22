<?php

class Rest_model extends CI_Model{
    
    //****************Setting up your mode****************
    
    //load the database library
    public function __construct(){
        $this->load->database();
    }

    public function get_polls($id=NULL){
        if($id===NULL){
            $query = $this->db->get('polls'); //get polls record
            $polls = $query->result_array();
            return $this->output->set_content_type('application/json')->set_output(json_encode($polls));
        }
        else{
            $query = $this->db->get_where('polls',array('id'=>$id)); //get polls record
            $polls = $query->result_array();
            return $this->output->set_content_type('application/json')->set_output(json_encode($polls));
        }
    }
    
    public function get_voted($id){
    
        $query = $this->db->get_where('vote',array('pollId'=>$id)); //get polls record
        $polls = $query->result_array();
        return $this->output->set_content_type('application/json')->set_output(json_encode($polls));
        
    }
    
    public function count_voted($id, $q){
        
        $query  = $this->db->query("SELECT * FROM vote WHERE pollId=$id AND voted=$q");
        echo $query->num_rows();
        return $query->num_rows();
    }

}
    
?>

