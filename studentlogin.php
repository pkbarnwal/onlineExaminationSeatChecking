<?php
if(isset($_POST['ShowInfo']))
{
    $enrollno=$_POST['rollno'];
    $branch=$_POST['branch'];

    include('dbcon.php');
    include('function.php');

    showdetails($enrollno,$branch);
}

?>