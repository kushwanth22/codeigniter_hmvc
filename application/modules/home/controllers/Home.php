<?php
    class Home extends MY_Controller{
        function __construct(){
            parent::__construct();
            
        }
        
        function index(){
            //echo "welcome to codeigniter hmvc.";
            $data['content_view'] = 'home/home_v';
            $this->template->sample_template($data);
        }
        
        function about(){
            //echo "welcome to codeigniter hmvc.";
            $data['content_view'] = 'home/about_v';
            $this->template->sample_template($data);
        }
        
      /*  function test(){
            echo "I have runned the test function.";
        }*/
    }
?>