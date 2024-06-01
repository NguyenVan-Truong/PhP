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
                <a class="nav-link" href="login.html">Đăng nhập</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- main -->
      <div class="row mt-5">
        <div class="col-md-12">
          <!-- slider -->
          <div
            id="carouselExampleControls"
            class="carousel slide"
            data-bs-ride="carousel"
          >
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="../assets/image/bg1.jpg"
                  class="d-block w-100"
                  alt="..."
                />
              </div>
              <div class="carousel-item">
                <img
                  src="../assets/image/bg2.jpg"
                  class="d-block w-100"
                  alt="..."
                />
              </div>
              <div class="carousel-item">
                <img
                  src="../assets/image/bg3.jpg"
                  class="d-block w-100"
                  alt="..."
                />
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleControls"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleControls"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <!-- list sản phẩm -->
        <div class="col-md-8">
          <div class="container-fuild">
            <div class="row">
              <div class="col-md-4 pl-3 pr-3">
                <!-- Sản phẩm -->
                <div class="card" style="width: 18rem">
                  <img
                    src="../assets/image/sp1.jpg"
                    class="card-img-top"
                    alt="..."
                  />
                  <div class="card-body">
                    <h5 class="card-title">Xiaomi Redmi Note 12 8GB 128GB</h5>
                    <p class="card-price">
                      <span>18000000 VNĐ</span>
                      <span>15000000 VNĐ</span>
                    </p>
                    <p class="card-text">
                      Trải nghiệm hình ảnh mượt mà và liền mạch nhờ tốc độ làm
                      mới cao 120Hz.
                    </p>
                    <a href="detail.html" class="btn btn-success">Mua ngay</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 pl-3 pr-3">
                <!-- Sản phẩm -->
                <div class="card" style="width: 18rem">
                  <img
                    src="../assets/image/sp2.jpg"
                    class="card-img-top"
                    alt="..."
                  />
                  <div class="card-body">
                    <h5 class="card-title">
                      iPhone 13 128GB | Chính hãng VN/A
                    </h5>
                    <p class="card-price">
                      <span>18000000 VNĐ</span>
                      <span>15000000 VNĐ</span>
                    </p>
                    <p class="card-text">
                      Hiệu năng vượt trội - Chip Apple A15 Bionic mạnh mẽ, hỗ
                      trợ mạng 5G tốc độ cao
                    </p>
                    <a href="#" class="btn btn-success">Mua ngay</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 pl-3 pr-3">
                <!-- Sản phẩm -->
                <div class="card" style="width: 18rem">
                  <img
                    src="../assets/image/sp3.jpg"
                    class="card-img-top"
                    alt="..."
                  />
                  <div class="card-body">
                    <h5 class="card-title">Samsung Galaxy Z Flip5 256GB</h5>
                    <p class="card-price">
                      <span>18000000 VNĐ</span>
                      <span>15000000 VNĐ</span>
                    </p>
                    <p class="card-text">
                      Thần thái nổi bật, cân mọi phong cách- Lấy cảm hứng từ
                      thiên nhiên với màu sắc thời thượng, xu hướng
                    </p>
                    <a href="#" class="btn btn-success">Mua ngay</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3 offset-md-1">
          <!-- Search -->
          <div class="card" style="width: 18rem">
            <div class="card-header">Tìm kiếm</div>
            <div class="card-body">
              <form action="">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Nhập tên sản phẩm"
                />
              </form>
            </div>
          </div>
          <!-- Danh mục -->
          <div class="card mt-5" style="width: 18rem">
            <div class="card-header">Danh mục</div>
            <div class="list-group">
              <a href="#" class="list-group-item list-group-item-action">
                Đồng hồ đeo tay
              </a>
              <a href="#" class="list-group-item list-group-item-action">
                Điện thoại
              </a>
              <a href="#" class="list-group-item list-group-item-action">
                Máy ảnh
              </a>
              <a href="#" class="list-group-item list-group-item-action">
                Laptop
              </a>
            </div>
          </div>

          <!-- Top 10 -->
          <div class="card mt-5" style="width: 18rem">
            <div class="card-header">Top 10 SP có nhiều view nhất</div>
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
