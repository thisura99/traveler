<?php

$connection = mysqli_connect("localhost","root","","traveler");

if($connection){
    echo 'db connected';
}
else{
    echo 'dn no connected';
}

?>



