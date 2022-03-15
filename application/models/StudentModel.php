<?php

class StudentModel extends CI_Model
{
    public function student_data()
    {
        $studclass = $this->student_class();
        return $stud_name = "Rohit. His class is: " . $studclass;
        
    }

    private function student_class()
    {
        return $stud_class = "BCA";
    }

    public function student_show($id)
    {
        if($id == '1')
        {
            return $result = "User 1";
        }
        elseif($id == '2')
        {
            return $result = "User 1";
        }
    }

    public function demo()
    {
        return $title = "Hello. I am Donat of Web IT. I am inside Student Model";
    }

}

?>