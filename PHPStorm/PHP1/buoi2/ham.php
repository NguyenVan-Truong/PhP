<?php
//function là hàm
// hàm có 2 loại chính
// có sẵn và tự tạo
// hàm có 2 loại chính sử dụng
// hàm có trả về và hàm không trả về
// hàm có trả về thì có return
// hàm không trả về thì không có return

//function test_ham(){
//    // hàm không trả về
//    //echo "Các bạn đã trông mong về quê chưa?";
//
//    // hàm có trả về
//    return "Chúc các bạn buổi chiều học vui vẻ";
//}
//// dùng khi sử dụng hàm không trả về
////test_ham();
//// dùng khi sử dụng hàm có trả về (phải có echo)
//echo test_ham();



function Shinhtron($r,$pi){
    // nếu trong () có biến thì được hiểu là hàm có tham số
    // nếu trong () không có biến thì được hiểu là hàm không tham số

    //echo "Diện tích hình tròn là: ".($pi * pow($r,2));// hàm không trả về
    return $pi * pow($r,2); // hàm có trả về
}
//Shinhtron(5,3.14);// hàm không trả về
echo Shinhtron(3,3.14);// hàm có trả về


// làm bài tập
// tính diện tích, chu vi các hình
// tam giác, vuông, chữ nhật, thang
// lưu ý: sử dụng hàm có tham số và không tham số, hàm có trả về và không trả về