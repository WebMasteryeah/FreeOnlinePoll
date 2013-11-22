<?php

// creates a new model by extending CI_Model and 
// loads the database library.
// This will make the database class available through the $this->db object
class Vote_model extends CI_Model{
    
    //****************Setting up your mode****************
    
    //load the database library
    public function __construct(){
        $this->load->database();
    }
    
    //wrtie the data to database/
    //inserting the new item into the database
    public function set_vote(){
        
        $this->load->helper('url'); //url helper
        
        $field = $this->input->post('radioB');
        $this->db->get('polls');
        $this->db->select('Result'.$this->input->post('radioB'));
        $this->db->where('id',$this->input->post('id'));
        $this->db->set('Result'.$field, 'Result'.$field.'+1', FALSE);
        $this->db->update("polls");
        
        $data = array(
            'ipNum' =>  $this->input->ip_address(),
            'pollid' => $this->input->post('id'),
            'voted' => $this->input->post('radioB'),
        );
        
        return $this->db->insert('vote', $data);
    }
    
    
}
    
?>


