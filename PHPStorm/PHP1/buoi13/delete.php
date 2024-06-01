<?php
//
//require_once 'connect.php';
//$id = $_GET['id'];
//$sql = "DELETE FROM courses WHERE courses_id = '$id'";
//$conn->exec($sql);
//
//header("location:list.php");
//?>
<?php
require_once 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    $sql = "DELETE FROM courses WHERE courses_id = '$id'";
    $conn->exec($sql);

    header("location:list.php");
}
?>

