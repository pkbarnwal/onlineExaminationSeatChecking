<?php

session_start();
       
   if(!isset($_SESSION['uid']))
    {
      header('location:adminlogin.php'); 
    }
    // else
     // {
    //  header('location:admin.html');
    // }
?>
<?php
  include('header.php');
  include('Adminoperation.php');
?>
<section class="breadcrumbs-section">
   <div class="container p-1 p-sm-2">
     <div class="row">
       <div class="col-12">
         <h2>Update Record</h2>
         <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a> </li>
          <li class="breadcrumb-item"><a href="admin.html">Admin</a> </li>
          <li class="breadcrumb-item"><a href="admindash.php">Dashboard</a> </li>
          <li class="breadcrumb-item active">Update Record</li>
         </ol>
       </div>
     </div>
   </div>
</section>
<style>
<?php
include('Bootstrap/CSS/style.css');
include('Bootstrap/CSS/bootstrap.min.css');

?>
</style>
<section class="update_record">
<table align="center" style="margin-top:8px;">
    <form action="update.php" method="post">
      <tr>
         <th>Enter Rollno: 
         </th style="padding:5px;">
           <td>
               <input class="ml-1 mr-4" type="text" name="roll" placeholder="Enter Rollno" required="required"/>
           </td>
      
         <th class="ml-2">Semester:
         </th>
          <td>
              <input class="ml-1 mr-4" type="number"  name="semester" placeholder="Semester" required="required"/>
          </td>
          <td colspan='3'> <input class="ml-1 mr-2" type="Submit" name="submit" Value="Search" /></td>
       </tr>
    </form>
</table>
<table align="center" width="80%" border="1" style="margin-top:10px;">

  <tr style="background-color:#000; color:#fff;">
        <th>Course:</th>
        <th>E-Room No:</th>
        <th>Seat No:</th>
        <th>Edit:</th>
     </tr>
     
<?php
  if(isset($_POST['submit']))
  {
      include('dbcon.php');
      
      $rollno = $_POST['roll'];
      $sem =  $_POST['semester'];

      $sql="SELECT * FROM student  WHERE Rollno ='$rollno' AND Semester ='$sem'";
      
      $run=mysqli_query($con,$sql);

            if(mysqli_num_rows($run) < 1 )
               {
              echo "<tr><td colspan='4'>No Record Found</td></tr>";
               }
            else
               {
                while($data=mysqli_fetch_assoc($run))
                 {
                 ?>
                  <tr align="center">
            
                      <td><?php echo $data['Course']; ?></td>
                      <td><?php echo $data['ExamRoomNo']; ?></td>
                      <td><?php echo $data['SeatNo']; ?></td>
                      <td><a href='updateform.php?sid=<?php echo $data["id"];?>'>Edit</a></td>
                  </tr>

               <?php
               }
      
         }
    }
?>
</table>
<br/><br/>
<?php
include('footer.php');

?>
</body>
</html>
