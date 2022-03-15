<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {
    
    public function getUser()
    {
       
    }

    public function insertUser($data)
    {
        return $this->db->insert('users', $data);
    }
    
    public function verify_user()
    {

    }

    function is_email_available($email)  
      {  
           $this->db->where('email', $email);  
           $query = $this->db->get("users");  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;  
           }  
      } 

    public function editUser($id)
    {
        
    }

    public function updateUser($data, $id)
    {
        
    }

    public function deleteUser($id)
    {
        
    }
}



?>