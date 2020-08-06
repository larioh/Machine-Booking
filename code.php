<?php
require('dbconn.php');
    if(isset($_POST['submit'])){
  $n_ame = $_POST['name'];
  $id_no = $_POST['idno'];
  $e_mail = $_POST['usermail'];
  $p_assword=$_POST['pass'];
  $random_string = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 6)), 0, 6);
  $salt = sha1(rand());
  $salt = substr($salt, 0, 10);
  $encrypted = password_hash($pass.$salt, PASSWORD_DEFAULT);
  $hash = array("salt" => $salt, "encrypted" => $encrypted);
  $encrypted_password = $hash["encrypted"];
  $salt = $hash["salt"];

      $insertaccountsql="INSERT INTO `farm_machines`.`farmer` (`n_ame`, `id_no`, `e_mail`, `p_assword`) VALUES ( '$n_ame', '$id_no', '$e_mail','$encrypted')";
      $insertuserrolesql="INSERT INTO `farm_machines`.`userroles` ( `username`, `Userrole`,`id_no`) VALUES ('$e_mail', 'User','$id_no')";
      $insertaccountresult=mysqli_query($conn,$insertaccountsql);
      if ($insertaccountresult) {
        if(mysqli_query($conn,$insertuserrolesql)){
            session_start();
        $_SESSION['filltaskinfo']=$e_mail;

        echo "New User Created for Account for ".$e_mail.'<br> Please use  your Email and Password assigned to login';
         header("Location:login.php");

        }
        else{
          echo "Could not Update your Role as a User";
        }
        
      }
      else{
        echo "New User for Account  ".$e_mail." Not Saved".mysqli_error($conn);
      }
    }
    else{
      echo "Data Not submitted";
    }

?>