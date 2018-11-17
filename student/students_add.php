<?php
/**
 * Created by PhpStorm.
 * User: Boqian
 * Date: 2018/11/17
 * Time: 19:48
 */
require '../server.php';
$age=trim($_GET['age']);
$name=trim($_GET['name']);
$dep=trim($_GET['dep']);
if($age==''||$name=''||$dep=='')
{
    echo "<script>alert('您的输入为空，请检查输入!');</script>";
    header("Location: ../index.html");
    exit;
}
AddStudent($age,$name,$dep);
function AddStudent($_age,$_name,$_dep)
{
    try {
        $_id = time();
        global $dbh;
        $data = [
            $_id,$_age,$_name,$_dep
        ];
        $pre = $dbh->prepare("INSERT INTO student value (?,?,?,?)");
        $pre->execute($data);
        echo "<h3>Insert Success!</h3>";
    }
    catch(PDOException $e)
    {
        echo "Insert failed!".$e->getMessage();
    }
}