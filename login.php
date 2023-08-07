<?php

$email = $_POST['email'];
$password = $_POST['password']; 

if($email == "g211210037@sakarya.edu.tr"){
    if($password == "g211210037"){
        sleep(2);
        echo '<h1>Hoşgeldiniz G211210037! <a href="hakkımda.html"> Ana sayfaya buraya tıklayarak dönebilirsiniz </a></h1>';
        
    }
    else {
        
        
        header("Location: git.html");
        
       

    }
} 
else {
        
        header("Location: git.html");
}





?>