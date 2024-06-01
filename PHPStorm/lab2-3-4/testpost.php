<?php
$nhanVien=[
    [
        'hoTen'=>'Nguyễn Văn Trường',
        'mnv'=>'001',
        'luongCB'=>"1000000USD",
        'soGio'=>"8H"
    ],
    [
        'hoTen'=>'Trường Hay Ho',
        'mnv'=>'002',
        'luongCB'=>"1000000USD",
        'soGio'=>"8H"
    ],
    [
        'hoTen'=>'Minh Trường',
        'mnv'=>'003',
        'luongCB'=>"1000000USD",
        'soGio'=>"8H"
    ],
    [
        'hoTen'=>'Trương Trang',
        'mnv'=>'004',
        'luongCB'=>"1000000USD",
        'soGio'=>"8H"
    ],
    [
        'hoTen'=>'Trường Trường',
        'mnv'=>'005',
        'luongCB'=>"1000000USD",
        'soGio'=>"8H"
    ]
];
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách nhân viên</title>
    <style>
        table, th, td {
            border: 1px solid red;
            border-collapse: collapse;
        }
        th, td {
            padding: 20px;
        }
    </style>
</head>
<body>
<h1>Danh sách nhân viên</h1>
<?php
if(isset($_POST['mnv'])) {
    $manv = $_POST['mnv'];
    $found = false;

    echo '<table>';
    echo '<tr><th>Họ tên</th><th>Mã nhân viên</th><th>Lương cơ bản</th><th>Số giờ làm</th></tr>';

    // Duyệt qua mỗi phần tử trong mảng $nhanVien
    foreach($nhanVien as $nv) {
        // Kiểm tra mã nhân viên
        if($nv['mnv'] == $manv) {
            // Hiển thị thông tin nhân viên trong bảng
                echo '<td>' . $nv['hoTen'] . '</td>';
                echo '<td>' . $nv['mnv'] . '</td>';
                echo '<td>' . $nv['luongCB'] . '</td>';
                echo '<td>' . $nv['soGio'] . '</td>';

            $found = true;
        }
    }

//     Kiểm tra nếu không tìm thấy nhân viên
    if(!$found) {
        echo '<tr><td colspan="4">Không có nhân viên nào</td></tr>';
    }
}
?>
</body>
</html>
