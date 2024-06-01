
<?php

$servername="localhost"; //ten may
$username="truonghayho";//
$password="";//
$database="truonghayho  ";//

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database",$username,$password);
    //thiet lap loi PDO thanh ngoai le
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "connect successful";
}catch (PDOException $e){
    echo "connect failed" .$e->getMessage();
}
?>