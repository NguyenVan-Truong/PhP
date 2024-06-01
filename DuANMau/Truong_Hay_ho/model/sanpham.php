<?php
function loadall_sanpham_home(){
    $sql="select * from sanpham where 1 order by id asc limit 0,9";
    $listsanpham=pdo_query($sql);
    return  $listsanpham;
}
function loadall_sanpham_top10(){
    $sql="select * from sanpham where 1 order by luotxem desc limit 0,10";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham($keyw="",$iddm=0){
    $sql="select sanpham.*, count(binhluan.id) as sobinhluan 
          from sanpham
         left join binhluan on binhluan.idpro = sanpham.id
          where trangthai=0 ";
    if($keyw!=""){
        $sql.=" and name like '%".$keyw."%'";
    }
    if($iddm>0){
        $sql.=" and iddm ='".$iddm."'";
    }
    $sql.="group by sanpham.id";
    $sql.=" order by sanpham.id desc";
    $listsanpham=pdo_query($sql);
    return  $listsanpham;
}
//function loadall_sanpham1($keyw="",$iddm=0){
//    $sql="select * from sanpham where trangthai=0";
//    // where 1 tức là nó đúng
//    if($keyw!=""){
//        $sql.=" and name like '%".$keyw."%'";
//    }
//    if($iddm>0){
//        $sql.=" and iddm ='".$iddm."'";
//    }
//    $sql.=" order by id desc";
//    $listsanpham=pdo_query($sql);
//    return  $listsanpham;
//}
// 
function loadone_sanpham($id){
    $sql = "select * from sanpham where id = $id";
    $result = pdo_query_one($sql);
    return $result;
}
function load_sanpham_cungloai($id, $iddm){
    $sql = "select * from sanpham where iddm = $iddm and id <> $id";
    $result = pdo_query($sql);
    return $result;
}
function insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm,$luotxem){
    $sql = "insert into `sanpham`(`name`,`price`,`img`,`mota`,`iddm`,`luotxem`) values ('$tensp','$giasp','$hinh','$mota','$iddm','$luotxem');";
    pdo_execute($sql);
}
function update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh,$luotxem){
    if ($hinh !=""){
        $sql = "update `sanpham` set `name`='{$tensp}',`price`='{$giasp}',`mota`='{$mota}',`img`='{$hinh}',`iddm`='{$iddm}',`luotxem`='{$luotxem}' where `sanpham`.`id`=$id";

    }else{
        $sql = "update `sanpham` set `name`='{$tensp}',`price`='{$giasp}',`mota`='{$mota}',`img`='{$hinh}',`iddm`='{$iddm}',`luotxem`='{$luotxem}' where `sanpham`.`id`=$id";

    }
    pdo_execute($sql);
}
// truy van xoa cung
function hard_delete($id){
    $sql = "delete from sanpham where id=".$id;
    pdo_execute($sql);
}
// cau truy van xoa mem
function soft_delete($id){
    $sql="update `sanpham` set `trangthai`= 1 where `sanpham`.`id`=$id";
    pdo_execute($sql);
}