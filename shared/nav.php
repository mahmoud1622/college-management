<?php

session_start();
if(isset($_GET['logout'])){
session_unset();
session_destroy();
}


?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand " href="/uni/index.php"><h1 class="navbar-brand wow animate__fadeInUp" style="color: white;"><i class="fas fa-university  " style="font-size: 30px;"></i> University </h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php if(isset($_SESSION['admin'])): ?>
      
      <ul class="navbar-nav mr-auto">
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Doctors
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <?php if($_SESSION['role']==0 || $_SESSION['role']==1 ): ?>
           <a class="dropdown-item" href="/uni/doctors/add.php">Add Doctors</a>
           <?php endif ; ?>
            <a class="dropdown-item" href="/uni/doctors/list.php">List Doctors</a>
         </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Courses
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <?php if($_SESSION['role']==0 || $_SESSION['role']==1 ): ?>
          <a class="dropdown-item" href="/uni/courses/add.php">Add Courses</a>
          <?php endif ; ?>
          <a class="dropdown-item" href="/uni/courses/list.php">List Courses</a>
          </div>
      </li>
   
      <li class="nav-item">
        <a  href="/uni/levels/list.php" class="nav-link">Levels</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Students
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <?php if($_SESSION['role']==0 || $_SESSION['role']==1 ): ?>
          <a class="dropdown-item" href="/uni/students/add.php">Add Students</a>
          <?php endif ; ?>
          <a class="dropdown-item" href="/uni/students/list.php">List Students</a>
          </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Registcourse
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <?php if($_SESSION['role']==0 || $_SESSION['role']==1 ): ?>
          <a class="dropdown-item" href="/uni/registcourse/add.php">Add </a>
          <?php endif ; ?>
          <a class="dropdown-item" href="/uni/registcourse/list.php">List </a>
          </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Course Doctor
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <?php if($_SESSION['role']==0 || $_SESSION['role']==1 ): ?>
          <a class="dropdown-item" href="/uni/coursedr/add.php">Add </a>
          <?php endif ; ?>
          <a class="dropdown-item" href="/uni/coursedr/list.php">List </a>
          </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
        <i class="fas fa-envelope" style="font-size: 25px;"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <?php if($_SESSION['role']==2 ): ?>
          <a class="dropdown-item" href="/uni/message/add.php">Add Message</a>
          <?php endif ; ?>
          <a class="dropdown-item" href="/uni/message/list.php">List Message</a>
          </div>
      </li>

 
     
    <?php if($_SESSION['role']==0 ): ?>  
      <li class="nav-item">
        <a  href="/uni/admin/add.php" class="nav-link"><i class="fas fa-user-lock" style="font-size: 20px;"></i> Add Admins</a> 
      </li>
     <?php endif ; ?>
 
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <button name="logout" class="btn btn-outline-danger my-2 my-sm-0" type="submit">LogOut</button> 
   
    </form> 
     <?php else : ?>
<a href="/uni/admin/login.php" class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</a>
<?php endif;?>
  </div>
</nav>