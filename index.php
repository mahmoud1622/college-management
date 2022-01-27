
<?php 
include 'shared/header.php';
include 'shared/nav.php';
include './genral/config.php';
include './genral/function.php';

?>


<div style="background-color: white;
color: black; ">
<h1 class="text-center text-info ">Home Page</h1>
<button style="position: absolute;right: 0px;border-radius: 100%;margin-right: 20px;top:100px;"
type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">

<?php 
$query=" SELECT id FROM `message` ORDER BY id ";
$query_run = mysqli_query($iconn,$query);
$row=mysqli_num_rows($query_run);
echo '<i class="fas fa-bell" style="font-size: 15px;"></i><span>'.$row.'</span>';
$select= " SELECT * FROM `message`  ";
$S=mysqli_query($iconn ,$select);

?>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-list" style="font-size: 20px;"></i> List Message</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">

<div class="container col-md-12 text-center">
<div class="card">
 <div class="card-body">

 <table class="table table-dark">
          <tr>
              <th>Id</th>
              <th>Question</th>
              <th>Answer</th>
              
          </tr>
         <?php foreach($S as $data){  ?>
        <tr>
              <th> <?php echo $data['id'] ?>    </th>
              <th> <?php echo $data['question']  ?> </th>
              <th> <?php echo $data['answer']  ?> </th>   
         </tr>
          <?php  }?> 
        
      </table>
 </div>
</div>
</div> 

</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
<!--End Modal-->

<div class="container mt-5 ">
<div class="card-deck" >
  <div class="card mb-5  wow animate__fadeInLeft"  style="background-color: white;color: black; ">
    
    <img src="https://www2.ecust.edu.cn/_upload/article/images/9b/1a/f134f1e14bd9a8ec4ddda5249b7e/ae2d85da-3264-4964-86a4-5ee0699e11fb.jpg" style=" height: 50%;" class=" img-fluid " alt="...">
    <div class="card-body">
      <h4 class="card-title text-info">Future innovation depends on the generation of 'programming for young people'</h4>
      <p class="card-text"> 
            There's a new generation coming that won't just talk about dissatisfaction, they'll go off and build something better, says Matt Webb, global CTO of HeathWallace.</p>
    </div>
  </div>
  <div class="card mb-5 "  style="background-color: white;
    color: black; ">
    <img style=" height: 50%;" src="https://malaysiadateline.com/wp-content/uploads/2020/04/remote-degree-online.jpg" class="card-img-top img-fluid " alt="...">
    <div class="card-body">
      <h3 class="card-title text-info">allow students to create content for themselves,</h3>
      <p class="card-text">  share that content with each other, explore subject matter, and communicate with one another in ways that aren’t possible in a more traditional environment. We’ll provide an explanation and an example of each level of technology integration.</p>
    </div>
  </div>
  <div class="card mb-5 wow animate__fadeInRight"  style="background-color: white;
    color: black;">
    <img  src="http://www.news.uct.ac.za/cache/images/userfiles/images/news/2020/380x300/focus_point/45.9-63.5/2020-08-05_remote-learning.png" style=" height: 50%;" class=" img-fluid  " alt="...">
    <div class="card-body">
      <h3 class="card-title text-info">unversity operate  a functional and well-equipped library</h3>
      <p class="card-text">There adequate books, magazines, and other learning materials for students’ use. There computers with Internet connection for students who need to do online research.</p>
    </div>
  </div>
</div>
</div>
</div>
<?php include 'shared/script.php'?>
