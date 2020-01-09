<?php

session_start();
       
  if(!isset($_SESSION['uid']))
   {
    header('location:adminoperation.php');  
   }
  //  else
    //  {
    //  header('location:admin.html');
     //}
?>
 
<?php
  include('header.php');
  
  
  include('Adminoperation.php');
  ?>
  <section class="breadcrumbs-section">
   <div class="container p-1 p-sm-2">
     <div class="row">
       <div class="col-12">
         <h2>Add Student</h2>
         <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a> </li>
          <li class="breadcrumb-item"><a href="admin.html">Admin</a> </li>
          <li class="breadcrumb-item"><a href="admindash.php">Dashboard</a> </li>
          <li class="breadcrumb-item active">Add Student</li>
         </ol>
       </div>
     </div>
   </div>
</section>
<style>
    <?php
    include('Bootstrap/CSS/style.css');
    ?>
</style>
 <section class="addRecord">

<form  method="post" action="addstudent.php">
   <table  align='center' border='1' style="width:70%; margin-top:20px;">
        <tr>
           <th class="text-center">Roll No:</th>
           <td><input type="text" name="rollno"  placeholder="Enrollment No" required></td>
        </tr>
        <tr>
           <th class="text-center">Name:</th>
           <td><input type="text" name="Fname"  placeholder=" Full Name" required> </td>
        </tr>
        <tr>
           <th  class="text-center">Course</th>
           <td><input type="text" name="course"  placeholder="Course" required="required"> </td>
        </tr>
        <tr>
           <th class="text-center">Branch:</th>
           <td ><input type="text" name="branch"  placeholder="Branch" required> </td>
        </tr>
        <tr>
           <th class="text-center">Semester:</th>
           <td><input type="number" name="semester"  placeholder="Semester" required="required"> </td>
        </tr>
         <tr>
           <th class="text-center">Exam-Room No:</th>
           <td><input type="text" name="roomno"  placeholder="Exam-Room No" required> </td>
        </tr>
        <tr>
           <th class="text-center">Seat No:</th>
           <td> <input type="number" name="seatno"  placeholder="Seat No" required></td>
        </tr>
        <tr>

          <td id="btn2" colspan="2" align="center"><input  type="submit" name="submit" placeholder="submit"></td>
        </tr>
   </table>
  </form>
</section>
  
<?php
   if(isset($_POST['submit']))
     {
        include('dbcon.php');
        $roll=$_POST['rollno'];
        $name=$_POST['Fname'];
        $course=$_POST['course'];
        $branch=$_POST['branch'];
        $semester=$_POST['semester'];
        $examroom=$_POST['roomno'];
        $seatno=$_POST['seatno'];
         
         $qry="INSERT INTO `student`(`Rollno`, `Name`, `Course`, `Branch`, `Semester`, `ExamRoomNo`, `SeatNo`) VALUES ('$roll','$name','$course','$branch','$semester','$examroom','$seatno')";
      
          $run=mysqli_query($con,$qry);
           if($run == true )
              { 
                ?>
               <script>
                 alert('Data Inserted Successfully.');
               </script>
               <?php
                }
           
            
      
  }
?>
<?php
include('footer.php');

?>
 </body>
</html>
