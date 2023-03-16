<?php
require 'C:\xampp\htdocs\mongodbphp\vendor\autoload.php'; 

$client = new MongoDB\Client('mongodb://localhost:27017/');
$prf_db = $client->prf_db;
$prf_collection = $prf_db->prf_collection;

$prf_collection=$client->selectCollection($prf_db,'prf_collection');

if(isset($_POST['submit'])){
    $userData=[
        $firstname = $_POST['firstname'],
        $lastname= $_POST['lastname'],
        $Mobile_Number = $_POST['Mobile_Number'],
        $DOB= $_POST['DOB'],
        $country = $_POST['country'],
        $state = $_POST['state']
    ];

    $result=$prf_collection->insertOne($userData);

    if($result->getInsertedCount()==1){
        echo'Created successfully';
    }else{
        echo'Failed';
}
}

?>
