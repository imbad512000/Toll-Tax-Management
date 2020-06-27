<?php 
$pdate = $_GET["pdate"];
$duration=$_GET["duration"];

if($duration == "1 month"){
    echo date('Y-m-d',strtotime("+30 days"));    
}elseif($duration == "3 month"){
    echo date('Y-m-d',strtotime("+90 days"));    
}
elseif($duration == "6 month"){
    echo date('Y-m-d',strtotime("+180 days"));    
}
elseif($duration == "1 year"){
    echo date('Y-m-d',strtotime("+365 days"));    
}
?>