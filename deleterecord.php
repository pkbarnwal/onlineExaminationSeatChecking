<?php

session_start();
       
    if(!isset($_SESSION['uid']))
     {
      header('location:admin.html');
    }
  ?>
<?php
  include('header.php');
  include('Adminoperation.php');
?>
<style>
<?php
include('Bootstrap/CSS/style.css');
include('Bootstrap/CSS/bootstrap.min.css');

?>
</style>
<section class="update_record">
<table align="center" style="margin-top:8px;">
    <form action="deleterecord.php" method="post">
      <tr>
         <th>Enter Rollno: 
         </th style="padding:5px;">
           <td>
               <input type="text" name="roll" placeholder="Enter Rollno" required="required"/>
           </td>
      
         <th>Semester:
         </th>
          <td>
              <input type="number" name="semester" placeholder="Semester" required="required"/>
          </td>
       
         <th>Name
         </th>
          <td>
              <input type="name" name="sname" placeholder="Student Name" required="required"/>
          </td>
          <td colspan='2'> <input type="Submit" name="submit" Value="Enter" /></td>
       </tr>
    </form>
</table>
<br/>
<table align="Center" width="80%" border="1" style="margin-top:10px;">

  <tr style="background-color:#000; color:#fff;">
        <th>Course:</th>
        <th>E-Room No:</th>
        <th>Seat No:</th>
        <th>Delete:</th>
     </tr>
     <?php
  if(isset($_POST['submit']))
  {
      include('dbcon.php');
      
      $rollno = $_POST['roll'];
      $sem =  $_POST['semester'];
      $name = $_POST['sname'];

      $sql="SELECT * FROM student  WHERE Rollno ='$rollno' AND Semester ='$sem' AND  Name LIKE '%$name%' ";
      //echo $sql;
      
      $run=mysqli_query($con,$sql);

      if(mysqli_num_rows($run)<1 )
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
                    <td><a href='deleteform.php?sid=<?php echo $data["id"];?>'>Delete</a></td>
             </tr>

                  <?php
              }
      
        }

     
  }
?>


</table>
<br/><br/><br/>

<?php
include('footer.php');
?>

