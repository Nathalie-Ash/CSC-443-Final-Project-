<?php
function VarExist($var){
    if (isset($var)){
        return $var;
    }else{
        header("location:../index.html");
    }
}
?>