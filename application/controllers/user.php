<?php
class User extends CI_Controller{
    
    public function __construct(){
        //calls the contructor of its parent class CI_Controller
        parent::__construct(); 
        //loads the model, so it can be used in all other methods
        //in this controller
        $this->load->model('polls_model'); //need to make a model "polls_model"
        $this->load->model('vote_model'); //need to make a model "vote_model"
    }
    
    //view all polls (default)
    public function vote($id=NULL){
        
        $this->load->library('table');  //for table->add_row() in master.php
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->helper('text');
        $this->load->helper('form');
        $this->load->library('form_validation'); // for validation_errors() in vote.php
        $this->form_validation->set_rules('radioB', 'radioB', 'required');
        
        if(isset($id)){
            //get data from Model
            $data['polls']=$this->polls_model->get_polls($id);
            
            //passing retrieved data to view
            $data['title'] = 'Vote'.$id;  //tab title
            $data['content'] = $this->load->view('polls/'.'vote', $data, TRUE); //content
                        $data['voteA'] = 'active' ;
            $data['createA'] = '';
            $data['resultA'] = '';
            $this->load->view('templates/master', $data);

        }
        if(isset($_POST['radioB'])===TRUE){
            $this->vote_model->set_vote(); 
            redirect('user/vote', 'refresh'); // view is loaded to display a success message
        }
        if(!isset($id)){
            //get data from Model
            $data['polls']=$this->polls_model->get_polls();
            
            //passing retrieved data to view
            $data['title'] = 'Vote';  //tab title
            $data['content'] = $this->load->view('polls/'.'index', $data, TRUE); //content
            $data['voteA'] = 'active' ;
            $data['createA'] = '';
            $data['resultA'] = '';
            $this->load->view('templates/master', $data);
        }
        
    }
    
    // In order to load "about.php"
	public function about($page = 'about') //view method that accept one argument
	{
        
        if ( ! file_exists('application/views/polls/'.$page.'.php')){
            
            show_404(); //is a buildt in CodeIgniter function that renders the default error page.
        }

        $this->load->helper('html');
        $this->load->helper('url');
        $data['title'] = ucfirst($page); // title; Capitalize the first letter
        $data['content'] = $this->load->view('polls/'.$page, $data, TRUE); //content
        $this->load->view('templates/master', $data);  //master view

	}
    
}
?>

