<?php
if ($_POST['username']=='achnouri' and $_POST['passwordsecure123']==''){
    header('location: thisnet.html');
}
else{
    header('location: error.html')
}
if ($_POST['username']=='user2' and $_POST['password']=='usersecurepass'){
    header('location: thisnet.html');
}
else{
    header('location: error.html')
}
?>
