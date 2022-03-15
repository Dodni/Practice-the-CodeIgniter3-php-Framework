<?php  
 defined('BASEPATH') OR exit('No direct script access allowed'); 

class PageController extends CI_Controller
{
    public function index()
    {
        echo "I am index Method - Page Controller - HOME in url";
    }

    public function aboutus()
     {
          echo "I am about the page";
     }

     public function blog($blog_url = '')
     {
          echo "$blog_url";

          $this->load->view('blogview');
     }

     public function demo()
     {
          $this->load->model('StudentModel');
          $title = $this->StudentModel->demo();
          //$data['title'] = "Hello. I am Donat of Web IT";
          $data['title'] = $title;
          $data['body'] = "Welcome to my chanel";
          $this->load->view('demopage', $data);
     }
}