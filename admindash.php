<?php

session_start();
       
 if(!isset($_SESSION['uid']))
      {
        header('location:adminlogin.php');
     }
?>
<?php
include('header.php');
?>
<style>
<?php
include('Bootstrap/CSS/style.css');
include('Bootstrap/CSS/bootstrap.min.css');
?>
</style>
<div class="bottomHeader">
        <div class="container-fluid">
            <nav class="navbar navbar-dark  navbar-expand-md" style="background-color:#5DADE2;width:100%;">
                    <a class="navbar-brand" href=" ">
                      <img  class="img-fluid" src="images/logo.png" width="250px" alt="Mylogo">
                    </a>
                    <button data-toggle="collapse" data-target="#navbarToggler" type="button" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarToggler">

          <div class="main_menu">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link"href="index.html">Home</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="adminlogin.php">Admin</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="student.html">Student</a>
               </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Log Out</a>
              </li>
            </ul>
          </div> 
        </div>
      </div>
  </div>
</div>
</div>
</header>

<Section class="admin-title">
  <div class="container-fluid">
    <div class="row">
      <h1 class=" col-12 text-center pt-5"><i>E-Exam </i>Cell Admin</h1>
    </section>
    <section class="breadcrumbs-section">
    <div class="container p-1 p-sm-2 ">
      <div class="row">
        <div class="col-12">
          <h2>AdminDashBoard</h2>
          <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="index.html">Home</a> </li>
             <li class="breadcrumb-item"><a href="admin.html">Admin</a> </li>
             <li class="breadcrumb-item active">Admin Dashboard </li>
          </ol>
        </div>
      </div>
     </div>
  </section>
<section class="record">
   <div class="container-fluid">
            <div class="row">
              <div class="col-12 pt-2">
               <ul style="text-align:center;list-style-type:none;">
                  <li><h2><a href="addstudent.php">Add Record</a></li></h2>
                  <li><h2><a href="deleterecord.php">Delete Record</a></li></h2>
                  <li><h2><a href="update.php">Update Record</a></li></h2>
                </ul>
            </div> 
        </div>
    </div>
</section>

 
<?php
include('footer.php');
?>
 
