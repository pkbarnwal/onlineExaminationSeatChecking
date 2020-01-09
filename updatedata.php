<?php

include('dbcon.php');
$roll=$_POST['rollno'];
$name=$_POST['Fname'];
$course=$_POST['course'];
$branch=$_POST['branch'];
$semester=$_POST['semester'];
$examroom=$_POST['roomno'];
$seatno=$_POST['seatno'];
$id=$_POST['sid'];
 
 $qry="UPDATE `student` SET `Rollno`='$roll',`Name`='$name',`Course`='$course',`Branch`='$branch',`Semester`='$semester',`ExamRoomNo`='$examroom',`SeatNo`='$seatno' WHERE `id`= $id;";

  $run=mysqli_query($con,$qry);
   if($run == true )
      { 
        ?>
       <script>
         alert('Data Updated  Successfully.');
         window.open('admindash.php?sid=<?php echo $id;?>','_self');
       </script>
       <?php
        }

?>