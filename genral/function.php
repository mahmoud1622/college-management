<?php
function testmessage($condation , $mess){
    if($condation ){
        echo "<div class='alert text-center alert-info w-50 mx-auto' > 
        <h5> $mess Process Is True </h5>
        </div>";
    }else{
        echo "<div class='alert text-center alert-danger w-50 mx-auto' > 
        <h5> $mess Process Is False </h5>
        </div>";
    }
}

function auth(){
    if($_SESSION['admin']){

    }else{
        header("location: /uni/admin/login.php");
    }
}
auth();
?>