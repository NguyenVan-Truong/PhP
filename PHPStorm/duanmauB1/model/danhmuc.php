<?php 
    function danhsach_danhmuc(){
        $sql = "select * from danhmuc";
        $result = pdo_query($sql);
        return $result;
    }


    function add_danhmuc($tendm){
        $sql = "insert INTO danhmuc(`name`) VALUES ('$tendm')";
        pdo_execute($sql);
    }
?>