<?php
class Rest extends CI_Controller {
    
    public function __construct(){
        //calls the contructor of its parent class CI_Controller
        parent::__construct(); 
        //loads the model, so it can be used in all other methods
        //in this controller
        $this->load->model('rest_model'); //need to make a model "polls_model"
    }

	public function polls($id=NULL) //view method that accept one argument
	{

        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->library('javascript');
        $this->load->library('javascript/jquery');
        
        $data['library_src'] = $this->jquery->script();
        $data['script_head'] = $this->jquery->_compile();
        
        if($id===NULL){
            $data['polls'] = $this->rest_model->get_polls();
        }
        else{
            $data['polls'] = $this->rest_model->get_polls($id);
            //$data['vote'] = $this->rest_model->get_voted($id);
        }
        
        //$data['title'] = "Poll Results"; // title; Capitalize the first letter
        //$data['content'] = $this->load->view('rest/pollResultView', $data, TRUE); //content
        //$this->load->view('templates/master', $data);  //master view

	}
    
    public function votes($id){
        
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->library('javascript');
        $this->load->library('javascript/jquery');
        
        $data['library_src'] = $this->jquery->script();
        $data['script_head'] = $this->jquery->_compile();
        
        $data['vote'] = $this->rest_model->get_voted($id);

    }
    
    public function voted($id, $q){
        
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->library('javascript');
        $this->load->library('javascript/jquery');
        
        $data['library_src'] = $this->jquery->script();
        $data['script_head'] = $this->jquery->_compile();
        
        //return int
        $data['vote'] = $this->rest_model->count_voted($id, $q);

    }
}
?>
