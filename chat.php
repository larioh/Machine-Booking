<?php include('linker.php');?>
 <?php
require('dbconn.php');

  $id=$_GET['id'];
  $stts=1;
  //echo $id;
  $q1="update chat set status='$stts' WHERE from_id='$id'";
    $status1=mysqli_query($conn,$q1);


?>
<?php
            require('dbconn.php');


                                    //session_start();
                                   
            $query = "SELECT  *  FROM `chat`";
            $status = mysqli_query($conn, $query) or die(mysqli_error($conn));
               if($status)
            {
            
              $data = mysqli_fetch_assoc($status);
            }
             $ch=$_GET['id'];
             $q1="SELECT * from farmer where farmer_id='$ch'";
             $status3 = mysqli_query($conn,$q1)or die(mysqli_error($conn));
       
            
             
             if($status3)
           {
            
              $data3 = mysqli_fetch_assoc($status3);
            }
            $url  = "chat_send.php?id=".$_GET['id'];

            ?>
            <form action="<?php echo $url;?>" method="post">
 
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>CHAT</h2>
            </div>
            <!-- Input --><center>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                    <div class="body">
                         <div class="row clearfix">
                
                                    
                               
                        <input type="hidden" name="id" class="form-control" value="<?php echo $_GET['id']; ?>"/>

                            
        <!-- <div style="margin-left:90% " ><input class="btn btn-primary waves-effect" name="back" type="submit" value="BACK" formaction="./emp_chat.php" ></div> -->



        



        <div  id="chatwindow"  style="width:530px;border:3px solid #2196F3;padding:10px;border-radius:50px 50px 50px 50px">
        
        <div style="margin-right:350px"><h4><?php echo $data3['n_ame']; ?></h4></div>
        <div id="page-wrap">
        <p id="name-area"></p>
 
                    <div  id="chatwindow2"    style="background-image :;overflow-Y:auto;margin:0 auto;margin-bottom:25px;padding:10px;width:490px;border:1px solid #ACD8F0;position:bottom">


  

                    <?php 
            $n=$session_id;
            
            

            while($data=mysqli_fetch_assoc($status))
            {
                ?>
                
                <?php
                echo "\n\n\n";
                if($data['to_id']==$n && $data['from_id']==$id)
                {
                    // <p align="right"> <?php
                    ?>                                                                   <!--      1   2   4   3-->
                    <div style="color:black;margin-right:60%;text-align:left;border-radius:5px 50px 50px 5px">
                    <?php 
                    
                    echo $data['message'];
                     ?> 
                    </div>

                  <?php  
                  echo "\n\n\n";
                }
                
                if($data['from_id']==$n && $data['to_id']==$id)
                {
                    ?>
                    <div style="color:black;margin-left:60%;text-align:right;border-radius:50px 5px 5px 50px">
                    <?php
                    
                    echo $data['message']." ";
                    if($data['status']==1)
                    {
                      echo "<br><font color='brown'><small>R</small></font>";
                    }
                    ?> </div>

                    <?php
                    
                    
                    
                }
                                                     
            }
            ?>
                
             </div>
            
            <textarea id="sendie" name="mymsg" maxlength = "500"  rows="3" cols="50"  placeholder="Start typing..."></textarea>
			
            <br>
            <br>
            <input type="hidden" name="my_id" class="form-control" value="<?php echo "$session_id"; ?>"/>

            <!--<butoon class="btn btn-info btn-circle-lg waves-effect waves-circle' waves-float" name="submit" type="submit" >
             <i class='material-icons'>send</i>
             </button>-->
            <input class="btn btn-primary waves-effect" name="submit" type="submit" value="SEND" >
        </form>
   </div>
        </div> </div>
         </div>

<script type="text/javascript">
    var myDiv = document.getElementById('chatwindow2');
    myDiv.scrollTop = 330;

</script>
