<?php include '../shared/header.php';
include '../shared/nav.php'; 
include '../genral/config.php';


if(isset($_POST['login'])){
    $name=$_POST['name'] ;
    $password=$_POST['password'] ;
    $select=" SELECT * FROM `admin` where name='$name' and password ='$password' ";
   $s=mysqli_query($iconn , $select);
$numRows = mysqli_num_rows($s);
$row = mysqli_fetch_assoc($s);
if($numRows>0 ){
$_SESSION['admin']= $name;
$_SESSION['role']=$row['role']; 
 header("location: /uni/index.php");
}else{
    echo "False Admin";
}

}


?>
 <h1 class="text-center text-info ">Login Page</h1>


<div class="container col-md-6 text-center">
       <div class="card">
           <div class="card-body">

               <form action="" method="POST">
                   <div action="" class="form-group">
                       <label for="">Name</label>
                         <input name="name" type="text" class="form-control">
                    </div>
                    <div action="" class="form-group">
                       <label for="">Password</label>
                         <input name="password" type="text" class="form-control">
                    </div>
                  
                <button name="login" class="btn btn-info"> Login</button>
              
               </form>
           </div>
       </div>
   </div> 


<?php include '../shared/script.php'?>
