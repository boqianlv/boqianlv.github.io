<?php
/**
 * Created by PhpStorm.
 * User: Boqian
 * Date: 2018/11/4
 * Time: 20:53
 */
require '../server.php';
//phpinfo();
Selname($_GET['name']);

function Selname ($name)
{
   try{
       global $dbh;
       $data = [
           $name

       ];
       $pre=$dbh->prepare("SELECT * FROM student where student_name=?");
       $pre->execute($data);
       echo json_encode($pre->fetchall(PDO::FETCH_ASSOC));
       $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   }
   catch(PDOException $e){
       echo "Error:".$e->getMessage();
   }
}