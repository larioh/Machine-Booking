<?php
require('dbconn.php');
require('linker.php');
    if(isset($_POST['btn-save'])){
      $username=$_POST['email'];
      $password=$_POST['password'];
      // echo $username."<br>".$password;
      $query = "SELECT Userrole FROM `userroles` WHERE username='$username'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);
if ($count == 1){
  while ($row=mysqli_fetch_array($result)){
    $Userrole=$row['Userrole'];
    echo $Userrole;
switch ($Userrole) {
      case 'Admin':
      {
        $loginsql="SELECT * FROM `login` WHERE useremail='$username' && password='$password'";
          $loginresult=mysqli_query($conn,$loginsql);
          if ($loginresult) {
            if (mysqli_num_rows($loginresult)==1) {
              session_start();
              $_SESSION['adminusername']=$username;
              header("Location:admin/index.php");
            }
            else{
             header("Location:index.php?error=Username and Password do not match");
            }
          }
        break;
      }
      case 'User':
      {
        $loginsql="SELECT * FROM `account` WHERE e_mail='$username' && p_assword='$password'";
          $loginresult=mysqli_query($conn,$loginsql);
          if ($loginresult) {
            if (mysqli_num_rows($loginresult)==1) {
              ?> <script type="text/javascript">
                localStorage.clear();
              </script> 
               <?php
              session_start();
              $_SESSION['applicantusername']=$username;
              header("Location:profile.php");
            }
            else{
               header("Location:index.php?error=Username and Password do not match");
            }
          }
        break;
      }
      
      default:
        {
          header("Location:index.php?error=Userrole not assigned");
          break;
        }
      }
}
}
else
{
 header("Location:index.php?error=User do not exist,Please register to proceed".mysqli_error($conn));
}
}


?>
<!DOCTYPE html>
<html>
  <head><title>login</title>
   

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Birth Certificate Registration</title>
    

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" >

<script src="bootstrap/scripts/jquery.js"></script>
<script src="bootstrap/scripts/bootstrap.min.js"></script>


    <!-- Custom Fonts -->
    
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  </head>
     
<body style="background-color:;">
    
   <div class="container" style="padding-top: 2%;padding-bottom: 10%;width: 45%; height:480px; width:450px;border-radius: 15px 15px 15px 15px;background-color:#aceace;margin-top:0px;" >

           
                <div class="login-panel panel panel-default">
                    <div class="panel-heading" style="background-color:#aceace">
                        <h3 class="panel-title">Login</h3><br><br>
                    </div>
                    <div class="panel-body"style="background-color:#aceace" >
                  <form action="index.php" method="post" onsubmit="return validate();" >
                 <?php if (isset($_GET['error'])) {
                 echo ' <h3 style="color:red;">'.$_GET['error'].'</h3>';
                  
                 } ?>
  
                  <div class="form-group">
          <label>email: </label>
         <div class="form-group has-feedback">
         <input class="form-control" type="email" id="email" name="email" placeholder="email" required="true"> 
          <i class="glyphicon glyphicon-envelope icon form-control-feedback"></i>  
                  </div>
          
                  
                   <label>Password: </label>
           <div class="form-group has-feedback">
         <input class="form-control" type="password" id="pass" name="password" placeholder="Password" required='true'>
         <i class="glyphicon glyphicon-lock form-control-feedback"></i>
                  </div>
          
                  <button type="submit" class="btn btn-primary btn btn-block" id="login" name="btn-save"> login</button> 
                </div>
                

  </form>
                  <!--a type="button"><button class="btn btn-success btn btn-block" id="createaccount" > Register account</button></a-->

  </div>


<!-- Modal -->
<div class="modal fade" id="modalDetails" tabindex="-1" role="dialog" aria-labelledby="filldetails" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered" role="document" style="border-radius:10px 10px 10px 10px;">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#bdfbdf;">
        <h5 class="modal-title" id="filldetails">Fill the Details below</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modalBody">

        ...
      </div>
      <div class="modal-footer" style="background-color:#bdfbdf;">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

  </div>
  </dv>
  </diiv>
  </div>

  
</body>
</html>
    

  <script src="assets/js/jquery.js"></script>
    <script src="assets/jquery/jquery.min.js"></script>
    <!-- js-->
   <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $('#createaccount').click(function(){
        $('#exampleModalLongTitle').html('Create Parent Account');
        $('#modalBody').html('<div id="createparrent" class="panel-body"style="background-color:#aceace;margin-top: 1%;width: 96%;min-height: 250px;margin-left: 2%;border-radius:15px 15px 15px 15px;"><form action="code.php" method="post"><div class="form-group"><label> Name</label><div class="form-group has-feedback"><input class="form-control" type="text" name="name" placeholder="name" required="true"><i class="glyphicon glyphicon-edit icon form-control-feedback"></i><label> Id no</label><div class="form-group has-feedback"><input class="form-control" type="number" name="idno" placeholder="identification number" required="true"><i class="glyphicon glyphicon-edit icon form-control-feedback"></i><label> Email</label><div class="form-group has-feedback"><input class="form-control" type="email" name="usermail" placeholder="example@gmail.com" required="true"><i class="glyphicon glyphicon-edit icon form-control-feedback"></i><label> Password</label><div class="form-group has-feedback"><input class="form-control" type="password" name="pass" placeholder="Password" required="true"><i class="glyphicon glyphicon-lock icon form-control-feedback"></i></br></br><button type="submit" class="btn btn-success" name="submit"> submit</button> </div></div></div></div></div></form></div>');
         $('#modalDetails').modal('show');});
      $('#submit').click(function(){ alert("xvxx"); });
    </script>
</body>
 <div class="container-fluid" style="background-color: #00FFFF;margin-bottom: 1%;" >
    <footer class="page-footer font-small blue pt-2 mt-2" id="footer">

<!-- Copyright -->

  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="https://mdbootstrap.com/bootstrap-tutorial/"> Designed by Radiant Technologies ltd</a>
  </div>

</footer>
</div>
</html>

<!--creating account-->

