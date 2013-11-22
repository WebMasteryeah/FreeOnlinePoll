<?php

// creates a new model by extending CI_Model and 
// loads the database library.
// This will make the database class available through the $this->db object
class Polls_model extends CI_Model{
    
    //****************Setting up your mode****************
    
    //load the database library
    public function __construct(){
        $this->load->database();
    }
    
    // get all of our post from our database
    //      to do this, the database abstraction layer that is included with 
    //      CodeIgniter - Active Recorde - is used
    //      This makes it possible to write your 'queries' once and make them work on 
    //      all supported database systems.     

    public function get_polls($id=NULL){
        if($id==NULL){
            $query = $this->db->get('polls'); //get polls record
            return $query->result_array();
        }
        else{
            $query = $this->db->get_where('polls',array('id'=>$id)); //get polls record
            return $query->result_array();
        }
    }
    
    //wrtie the data to database
    //inserting the new item into the database
    public function set_polls(){
        
        $this->load->helper('url'); //url helper
        
        $data = array(
            'ShortTitle' => $this->input->post('ShortTitle'),
            'question' => $this->input->post('question'),
            'answer1' => $this->input->post('answer1'),
            'answer2' => $this->input->post('answer2'),
            'answer3' => $this->input->post('answer3'),
            'answer4' => $this->input->post('answer4'),
            'answer5' => $this->input->post('answer5'),
            'answer6' => $this->input->post('answer6'),
            'answer7' => $this->input->post('answer7'),
            'answer8' => $this->input->post('answer8'),
            'answer9' => $this->input->post('answer9'),
            'answer10' => $this->input->post('answer10'),
            'answer11' => $this->input->post('answer11'),
            'answer12' => $this->input->post('answer12'),
            'answer13' => $this->input->post('answer13'),
            'answer14' => $this->input->post('answer14'),
            'answer15' => $this->input->post('answer15'),
            'answer16' => $this->input->post('answer16'),
            'answer17' => $this->input->post('answer17'),
            'answer18' => $this->input->post('answer18'),
            'answer19' => $this->input->post('answer19'),
            'answer20' => $this->input->post('answer20'),
        );

        return $this->db->insert('polls', $data);
    }
    
    
}
    
?>

