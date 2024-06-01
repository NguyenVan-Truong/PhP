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
      <div class="row mt-4 main-web">
        <div class="col-md-8">
          <div class="card mt-5">
            <div class="card-header">Xem thêm sản phẩm khác</div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">STT</th>
                  <th scope="col">Sản phẩm</th>
                  <th scope="col">Đơn giá</th>
                  <th scope="col">Số lượng</th>
                  <th scope="col">Thành tiền</th>
                  <th scope="col">Hành động</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>
                    <img
                      src="../assets/image/sp1.jpg"
                      alt=""
                      width="50"
                    /><br />
                    <span class="font-weight-bold"
                      >Xiaomi Redmi Note 12 8GB 128GB</span
                    >
                  </td>
                  <td>27.000.000 VNĐ</td>
                  <td>
                    <input
                      type="number"
                      value="0"
                      class="form-control"
                      min="0"
                    />
                  </td>
                  <td>27.000.000 VNĐ</td>
                  <td>
                    <button class="btn btn-danger">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        fill="currentColor"
                        class="bi bi-trash"
                        viewBox="0 0 16 16"
                      >
                        <path
                          d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"
                        />
                        <path
                          d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"
                        />
                      </svg>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="text-right">
              <button class="btn btn-success w-50">Thanh toán</button>
            </div>
          </div>
        </div>
        <div class="col-md-3 offset-md-1">
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
