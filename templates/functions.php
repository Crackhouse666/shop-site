<?php
function get_mass($id=FALSE){
    global $mysqli;
    $query="SELECT *FROM `shop`";
    
    $res=mysqli_query($mysqli,$query);
    $mass=array();
    while ($row=mysqli_fetch_assoc($res)) {
        $mass[]=$row;
        }
        return $mass;
    }
?>