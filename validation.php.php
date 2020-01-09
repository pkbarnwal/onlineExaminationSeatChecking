<?php
   include('dbcon.php');
   session_start();

   if(isset($_POST['Login']))
   {
     $username= $_POST['username'];
     $password= $_POST['password'];

     $qry="SELECt * FROM admin WHERE username='$username' AND password='$password';";
     $run=mysqli_query($con,$qry);
    
     $row=mysqli_num_rows($run);
     if($row  < 1 )
      {
        ?>
        <script>alert('Username or Password not match !!');
        window.open('adminlogin.php','_self');
        </script>
        <?php
      }
    else
      {
        $data=mysqli_fetch_assoc($run);
       
        $id=$data['id'];
       
       
        $_SESSION['uid']=$id;
       
         header('location:admindash.php');
     }
   }
  ?>