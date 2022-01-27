
<?php include '../shared/header.php';
include '../shared/nav.php'; 
include '../genral/config.php';
include '../genral/function.php';

$select= " SELECT * FROM levels  ";
$S=mysqli_query($iconn ,$select);




?>

<h1 class="text-center text-info ">List Levels Page</h1>

<div class="container col-md-6 text-center">
       <div class="card">
           <div class="card-body">

           <table class="table table-dark">
                    <tr>
                        <th>Id</th>
                        <th>Level</th>
                      
                    </tr>
                   <?php foreach($S as $data){  ?>
                  <tr>
                        <th> <?php echo $data['id'] ?>    </th>
                        <th> <?php echo $data['year']  ?> </th>
                        
                       
                    </tr>
                    <?php  }?> 
                  
                </table>
           </div>
       </div>
   </div> 


<?php include '../shared/script.php'?>
