<main class="catalog  mb ">
    <div class="boxleft">
        <div class="banner">
            <img id="banner" src="./img/anh0.jpg" alt="">
<!--            <button class="pre" onclick="pre()">&#10094;</button>-->
<!--            <button class="next" onclick="next()">&#10095;</button>-->
<!--            -->
        </div>
        <h1 class="tieude"> Sản Phẩm Mới Về</h1>
        <div class="items">
            <?php
//              $i=0;
                foreach ($spnew as $sp){
                    extract($sp);
                    $hinh =  $img_path.$img;
//                    if(($i==2)||($i==5)||($i==8)){
//                        $mr="";
//                    }else{
//                        $mr="mr";
//                    }
                    $linksp="index.php?act=sanphamct&idsp=".$id;
                    
                    echo '<div class="box_items ">
                    <div class="box_items_img">
                <img src="'.$hinh.'" alt="">
                
             </div>
                  <div class="items_cach">
              <a class="item_name" href="'. $linksp .'">'.$name.'</a>
              </div>
                </div>';
//                    $i+=1;
                }
              ?>
        </div>
    </div>
    <?php
        include_once "view/boxright.php";
    ?>

</main>
<!--<div class="add" <a href="'. $linksp .'">Xem CHi Tiết Sản Phẩm</a></div>-->
<!-- BANNER 2 -->