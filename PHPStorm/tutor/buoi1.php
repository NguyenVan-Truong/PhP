<?php
// cách khai báo cũ
//$arr_old = array(1,2,3,4,5,6);
// cach khai báo mảng mới
//$arr_new = [1,2,3,4,5];

// in mảng
//echo  '<pre>';
//echo print_r($arr_old);
//echo  '<pre>';

// duyêt mảng
//foreach ($arr_old as $key => $value){
//    echo "$key => $value"."<br>";
//}
// thay phân tử trong mảng
//$arr_new = [1,2,3,4,5];
//$arr_new["3"]=10;
//print_r($arr_new);

// thêm phần tử vào cuôi  mảng
//$arr_new[]=90;
//print_r($arr_new);

// tính toong các phân tử trong mảng
//$sum = array_sum($arr_new);
//echo "tong cac phan tu ".$sum."<br>";

// tìm số lớn nhất trong mảng
//$max = max($arr_new);
//echo " so lon nhat".$max;

// sắp xếp theo tang dần
//sort($arr_new);
//print_r($arr_new);

// mảng liên hợp
//$sinhvien = [
//    'ten' => "Trường Hay Ho",
//    "mon" => "PHP1",
//    "tuoi"=> 18
//];

//echo $sinhvien["ten"];

// duyêt mảng
//foreach ($sinhvien as $key => $value){
//    echo "$key => $value"."<br>";
//}
// mảng đa chiều
$data = [
    [1,2,3,4],
    [5,6,9,10],
    [12,14,15,16],
    [56,58,59,57]
];
$crush = [
    [
        'ten' => "trang",
        'tuoi'=> 14,
        'que'=>'hà noi'
    ],
    [
        'ten' => "minh",
        'tuoi'=> 18,
        'que'=>'hà noi'
    ],
    [
        'ten' => "my",
        'tuoi'=> 28,
        'que'=>'hà noi'
    ]
];
// duyệt mang
//foreach ($data as $key => $value){
//    foreach ($value as $key1 => $phantu){
//        echo "[$key][$key1] :$phantu".'<br>';
//    }
//}


foreach ($crush as $key => $value){
    echo "ten : ".$value['ten']."<br>";
    echo "tuoi : ".$value['tuoi']."<br>";
    echo "que : ".$value['que']."<br>";
    echo "<br>";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>Tên</th>
        <th>Tuổi</th>
        <th>Quê</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($crush as $crush1 => $value):
        $tencrush =$value["ten"];
        $tuoi = $value["tuoi"];
        $quequan = $value["que"];
        ?>
                <tr>
                    <td><?php echo $tencrush; ?></td>
                    <td><?php echo $tuoi; ?></td>
                    <td><?php echo $quequan; ?></td>
                </tr>
                <?php
    endforeach;
    ?>
    </tbody>
</table>
</body>
</html>
