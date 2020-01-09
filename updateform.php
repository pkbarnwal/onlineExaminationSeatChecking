<?php

session_start();
       
   if(!isset($_SESSION['uid']))
     {
      header('location:adminlogin.php');
     }
    // else
     // {
      //header('location:admin.html');
     //}
?>
<?php
  include('header.php');
  include('Adminoperation.php');
  include('dbcon.php');

  $sid=$_GET['sid'];

  $sql="SELECT * FROM student  WHERE id ='$sid'";
  $run=mysqli_query($con,$sql);

  $data=mysqli_fetch_assoc($run);
?>
<style>
<?php
include('Bootstrap/CSS/style.css');
include('Bootstrap/CSS/bootstrap.min.css');

?>
</style>

<form  method="post" action="updatedata.php">
   <table  align='center' border='1' style="width:70%; margin-top:20px;">
        <tr>
           <th class="text-center">Roll No:</th>
           <td><input type="text" name="rollno"  value="<?php echo $data['Rollno']; ?>" required="required"></td>
        </tr>
        <tr>
           <th class="text-center">Name:</th>
           <td><input type="text" name="Fname"  value="<?php echo $data['Name']; ?>" required= "required"> </td>
        </tr>
        <tr>
           <th  class="text-center">Course:</th>
           <td><input type="text" name="course"  value="<?php echo $data['Course']; ?>" required="required"> </td>
        </tr>
        <tr>
           <th class="text-center">Branch:</th>
           <td ><input type="text" name="branch"  value="<?php echo $data['Branch']; ?>" required="required"> </td>
        </tr>
        <tr>
           <th class="text-center">Semester</th>
           <td><input type="text" name="semester"  value="<?php echo $data['Semester']; ?>" required="required"> </td>
        </tr>
         <tr>
           <th class="text-center">Exam-Room No:</th>
           <td><input type="number" name="roomno"  value="<?php echo $data['ExamRoomNo']; ?>" required="required"> </td>
        </tr>
        <tr>
           <th class="text-center">Seat No:</th>
           <td> <input type="number" name="seatno"  value="<?php echo $data['SeatNo']; ?>" required="required"></td>
        </tr>
        <tr>

          <td id="btn2"colspan="2" align="center">
           <input type="hidden" name="sid" value="<?php echo $data['id']; ?>" />  
          <input  type="submit" name="Submit" placeholder="submit"></td>
        </tr>
   </table>
  </form>
 </body>
</html>