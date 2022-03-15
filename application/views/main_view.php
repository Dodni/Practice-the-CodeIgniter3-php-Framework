<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />  
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
     <title>Insert Data using Codeigniter</title> 
</head>
<body>
<div class="container">
     </br> </br> </br>
     <h3 align="center">Insert Data using Codeigniter</h3> <br/>
     <form method="post" action="<?php echo base_url()?>main/form_validation">
          <div class="form-group">
               <label>Enter First Name</label>
               <input type="text" name="first_name" class="form-control" />
          </div>
          <div class="form-group">
               <label>Enter Last Name</label>
               <input type="text" name="last_name" class="form-control" />
          </div>
          <div class="form-group">
               <input type="submit" name="insert" value="Insert" class="btn btn-info" />
          </div>

     </form>
</div>
</body>
</html>