<?php  
 defined('BASEPATH') OR exit('No direct script access allowed'); 



 class Main extends CI_Controller {  
     
     public function index()
     {
          $this->load->database();
          $this->load->view("main_view");

          
          
     }

     public function demo()
     {
          //echo "I am here";
          $this->load->view("about");
     }
     
     public function form_validation()
     {
          echo 'OK';
          
     }

     function email_availibility()  
      {  
           $data["title"] = "Codeigniter Tutorial - Check Email availibility using Ajax";  
           $this->load->view("email_availibility", $data);  
      }  
      
 }  