<?php
function titelf(){
    global $Titel;
    if(isset($Titel)){
        echo $Titel;
    }else{
        echo "defult";
    }}
function r($messag,$time=6,$url=null){
    if($url==='localhost/islam/admin/department.php'){
        $url="home.php";
    }else{
        if(isset($_SERVER['HTTP_REFERER'])&& $_SERVER['HTTP_REFERER']!==''){
        $url=$_SERVER['HTTP_REFERER'];
    }else{
        $url="department.php";
        }
    }
    echo $messag;
    header("refresh:$time,url=$url");
    exit();
}
function chekitem($select,$tablename,$VALUE){
    global $con;
    $stmt=$con->prepare(" SELECT $select FROM $tablename WHERE $select=?");
    $stmt->execute(array ($VALUE) );
    $count=$stmt->rowCount();
    return($count);
}