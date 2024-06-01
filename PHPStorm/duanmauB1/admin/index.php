<?php
    include "../model/pdo.php";
    include "../model/danhmuc.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/css/admin.css" />
</head>

<body>
    <div class="container">
        <!-- header -->
        <?php include "header.php"; ?>
        <!-- menu -->
        <?php include "menu.php"; ?>

        <!-- main -->
        <div class="row mt-5 main-web">
            <?php
                // Controller
                if(isset($_GET['act']) && $_GET['act'] != ""){
                    $act = $_GET['act'];
                    switch($act){
                        case "trangchu":{
                            include "trangchu/trangchu.php";
                            break;
                        }
                        case "dsdm":{
                            $dsdm = danhsach_danhmuc();
                            include "danhmuc/list-danhmuc.php";
                            break;
                        }
                        case "adddm":{
                            if(isset($_POST['btnsubmit'])){
                                add_danhmuc($_POST['tendm']);
                                header("location: ?act=dsdm");
                            }
                            include "danhmuc/add-danhmuc.php";
                            break;
                        }
                        default:{
                            include "trangchu/trangchu.php";
                            break;
                        }
                    }
                }else{
                    include "trangchu/trangchu.php";
                }
            ?>
            <?php include "top10.php"; ?>
        </div>
        <!-- footer -->
        <?php include "footer.php"; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="../assets/js/admin.js"></script>
</body>

</html>