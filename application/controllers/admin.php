<?php
class Admin extends CI_Controller{
    
    public function __construct(){
        //calls the contructor of its parent class CI_Controller
        parent::__construct(); 
        //loads the model, so it can be used in all other methods
        //in this controller
        $this->load->model('polls_model'); 
    }
    
    //create a news item
    public function create(){
        
        $this->load->helper('url');  //for base_url() in master.php
        $this->load->helper('html');  // for doctype('html5') in master.php
        $this->load->helper('form');  // for form_open() in create.php
        $this->load->library('form_validation'); // for validation_errors() in create.php
        $this->load->library('javascript');
        $this->load->library('javascript/jquery');
        
        //the actual library file will be loaded, as well as any subsequent plugin script calls
        $data['library_src'] = $this->jquery->script(); 
        //specific events, functions and other commands will be rendered
        $data['script_head'] = $this->jquery->_compile();
        
        $data['title'] = 'Create a news poll';
        
        //rules for the form validation are set
        //The set_rules() method takes three arguments; 
        //  the name of the input field - the exact name you've given the form field. 
        //  the name to be used in error messages - A "human" name for this field.
        //  the rule. 
        //http://localhost/Lab6/user_guide/libraries/form_validation.html
        $this->form_validation->set_rules('ShortTitle', 'ShortTitle', 'required');
        $this->form_validation->set_rules('question', 'Question', 'required');
        $this->form_validation->set_rules('answer1', 'Answer1', 'required');
        $this->form_validation->set_rules('answer2', 'Answer2', 'required');
        
        //condition that checks whether the form validation ran successfully
        if ($this->form_validation->run() === FALSE){  //if it did not
            //the form is diplayed
            $data['content'] = $this->load->view('admin/'.'create', $data, TRUE); //content
            $data['voteA'] = '' ;
            $data['createA'] = 'active';
            $data['resultA'] = '';
            $this->load->view('templates/master', $data);

        } else { //if it was submitted and passd all the rules,
                 //the model is called
            $this->polls_model->set_polls(); 
            redirect('user/vote', 'refresh'); // view is loaded to display a success message
        }
    }
    
}
?>

