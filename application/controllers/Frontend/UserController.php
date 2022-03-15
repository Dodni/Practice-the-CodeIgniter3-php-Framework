<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

     public function index()
     {
          
          
     }

     public function create()
     {
          $data["title"] = "This is a title";
          //$this->load->view('email_availibility', $data);
          $this->load->view('template/header');
          $this->load->view('frontend/createUser',$data);
          $this->load->view('template/footer');
          
     }

     public function store()
     {
          
        $this->form_validation->set_rules('username', 'User Name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password_again', 'Password Again', 'required');
        $this->form_validation->set_rules('email', 'Email Adress', 'required');
        
        if ($this->form_validation->run()) 
          {
               $data = [
                    'username' => $this->input->post('username'),
                    'password' => $this->input->post('password'),
                    //'password_again' => $this->input->post('password_again'),
                    'email' => $this->input->post('email')
               ];
               //for testing
               //var_dump($data);

               //for security
               $data = $this->security->xss_clean($data);

               $this->load->model('UserModel','usm');
               $this->usm->insertUser($data);
               $this->session->set_flashdata('status', 'User Data Inserted Successfully');

               redirect(base_url('employee'));
          }
          else
          {
                $this->create();
                //redirect(base_url('user/add'));
          }
     }

     public function edit($id)
     {
           
     }

     public function update($id)
     {
          

     }

     public function email_availability()
     {
          $data["title"] = "This is a title";

          $this->load->view('email_availibility', $data);
          
     }

     function check_email_avalibility()  
      {  
           if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))  
           {  
                echo '<label id="lblInvalid" value="1" class="text-danger"><span class="glyphicon glyphicon-remove"></span> Invalid Email</span></label>';  
                ?> <script>
                         $("#lblInvalid").ready(function () {
                              var a = -1 ;
                              console.log(a)

                              function emailValidate()
                              {
                                   if (a < 0) {
                                        alert("The email is used");
                                        console.log("I am in the cicle")
                                   return false;
                              }
                              return true;
                    }
                              
                              //alert(a);
                         }); 
                    </script> <?php
           }  
           else  
           {  
                $this->load->model("UserModel");  
                if($this->UserModel->is_email_available($_POST["email"]))  
                {  
                     echo '<label id="lblRegister" class="text-danger"><span class="glyphicon glyphicon-remove"></span> Email Already register</label>';
                    ?> <script>
                         $("#lblRegister").ready(function () {
                              var a = -1 ;
                              console.log(a);
                              function emailValidate() {
                                   if (a < 0) {
                                        alert("The email is used");
                                        console.log("bekerultem az ifbe")
                                        return false;
                                   }
                                   return true;  
                              }
                              //alert(a);
                         }); 
                    </script> <?php
                }  
                else  
                {  
                     echo '<label id="lblAvilable" class="text-success"><span class="glyphicon glyphicon-ok"></span> Email Available</label>';
                     ?> <script>
                         $("#lblAvilable").ready(function () {
                              var a = 1 ;
                              console.log(a)
                              //alert(a);
                              
                         }); 
                    </script> <?php
                }  
           }  
      }

      function check_username_avalibility()  
      {  
           if(!filter_var($_POST['username'], FILTER_VALIDATE_EMAIL))  
           {  
                echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Invalid Email</span></label>';  
           }  
           else  
           {  
                $this->load->model("UserModel");  
                if($this->UserModel->is_email_available($_POST["username"]))  
                {  
                     echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Email Already register</label>';  
                }  
                else  
                {  
                     echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> Email Available</label>';  
                }  
           }  
      }

     


}

/* End of file Controllername.php */
?>