<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../assets/css/user.css" />
  </head>
  <body>
    <div class="container">
      <!-- header -->
      <div class="header bg-success text-light p-4 text-center">
        SIÊU THỊ TRỰC TUYẾN
      </div>
      <!-- menu -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="dashboard.html">Trang chủ</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"
                  >Giới thiệu</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Liên hệ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Góp ý</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Hỏi đáp</a>
              </li>
            </ul>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">Đăng nhập</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- detail product -->
      <div class="row mt-4">
        <div class="col-md-3">
          <div class="card mt-5" style="width: 18rem">
            <div class="card-header">Xem thêm sản phẩm khác</div>
            <div class="list-group">
              <a
                href="#"
                class="list-group-item list-group-item-action list-item-link"
              >
                <img src="../assets/image/sp1.jpg" alt="" />
                Xiaomi Redmi Note 12 8GB 128GB
              </a>
              <a
                href="#"
                class="list-group-item list-group-item-action list-item-link"
              >
                <img src="../assets/image/sp2.jpg" alt="" />
                iPhone 13 128GB | Chính hãng VN/A
              </a>
              <a
                href="#"
                class="list-group-item list-group-item-action list-item-link"
              >
                <img src="../assets/image/sp3.jpg" alt="" />
                Samsung Galaxy Z Flip5 256GB
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-8 offset-md-1">
          <div class="container-fuild">
            <div class="row mt-4">
              <div class="col-md-3">
                <img
                  class="img-detail"
                  src="https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/t/_/t_m_18.png"
                  alt=""
                />
              </div>
              <div class="col-md-8">
                <ul>
                  <li>
                    Tên hàng: IPhone 14 pro max
                    <span class="badge bg-info">VNA</span>
                  </li>
                  <li>
                    Đơn giá:
                    <span class="line-through">18.000.000 VNĐ</span>
                    <span class="badge bg-danger">27.000.000 VNĐ</span>
                  </li>
                  <li>Nhà cung cấp: Apple</li>
                  <li>Hàng mới nhập</li>
                  <li>
                    Số lượng còn:
                    <span class="badge bg-warning">5</span> chiếc
                  </li>
                  <li>
                    Giảm giá:
                    <span class="badge bg-danger">5%</span>
                  </li>
                </ul>
                <a href="cart.html" class="btn btn-success"> Mua hàng </a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h4 class="mt-5">MÔ TẢ SẢN PHẨM</h4>
                <hr />
                <span>
                  iPhone 14 Pro được trang bị viên pin cho thời lượng sử dụng
                  lên tới 29 giờ, tương đương 2 ngày sử dụng bình thường. Thời
                  lượng sử dụng đủ dài để bạn có thể sử dụng thoải mái mà không
                  lo hết pin. Ngoài ra, máy cũng hỗ trợ sạc nhanh 20W, nhờ vậy
                  máy có thể sạc tới 50% trong khoảng 30 phút.
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- footer -->
      <div class="footer col-md-12">
        <nav class="navbar navbar-dark bg-secondary">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              @Bản quyền thuộc hệ thống siêu thị trực tuyến
            </a>
          </div>
        </nav>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
