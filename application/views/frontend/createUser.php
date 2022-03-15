<script>  
 $(document).ready(function(){  
      $('#email').change(function(){  
           var email = $('#email').val();  
           if(email != '')  
           {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>Frontend/UserController/check_email_avalibility",  
                     method:"POST",  
                     data:{email:email},  
                     success:function(data){  
                          $('#email_result').html(data);  
                     }  
                });  
           }  
      });  
 });
 
 
 </script>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card">
                        <div class="card-header">
                            <h5>
                                How to insert User data into database
                                <a href="<?php echo base_url('employee'); ?>" class ="btn btn-danger float-end">BACK</a>
                            </h5>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo base_url('user/store'); ?>" method="POST">
                                <div class="form-group">
                                    <label for="">User Name</label>
                                    <input type="text" id="username" name="username"class="form-control" >
                                    <small><?php echo form_error('username'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" name="password" class="form-control" id="psw"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                                    <small><?php echo form_error('password'); ?></small>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="">Password Again</label>
                                    <input type="password" name="password_again" class="form-control" id="psw-repeat" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                                    <small><?php echo form_error('password_again'); ?></small>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="">Email ID</label>
                                    <input type="text" id="email" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                                    <small><?php echo form_error('email'); ?></small>
                                    <span id="email_result"></span>
                                </div>
                                <br/>
                                <div class="form-group">
                                    <button type="submit" onclick="return emailValidate() &&  Validate()" class="btn btn-primary" >Register User</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                    <script type="text/javascript">
                    
                    function Validate() 
                    {
                        var password = document.getElementById("psw").value;
                        var confirmPassword = document.getElementById("psw-repeat").value;
                        //&& btnInvalid == false && btnRegister == false
                        
                        if (password != confirmPassword) {
                            alert("Passwords do not match.");
                            return false;
                        }
                        
                    }

                     
                    
                    </script>

                    