
function showdetails($enrollno,$branch)
{
    include('dbcon.php');

    $sql="SELECT * FROM `student` WHERE `Rollno`='$enrollno' AND `Branch`='$branch'";
    $run=mysqli_query($con,$sql);

    if(mysqli_num_rows($run)>0)
    {
        $data=mysqli_fetch_assoc($run);
        ?>
        <table>
            <tr>
                <th colspan="3">Student Details</th>
           </tr>
           <tr>
               <th>Roll No:</th>
               <td><?php echo $data['Rollno']; ?></td>
           </tr>
           <tr>
               <th>E-Room No:</th>
               <td><?php echo $data['ExamRoomNo']; ?></td>
           </tr>
           <tr>
               <th>Seat No:</th>
               <td><?php echo $data['SeatNo']; ?></td>
           </tr>
       </table>
        <?php
    }
    else
    {
       echo "<script>alert('No Student Found.. '); </script>";
    }

} 
?>
