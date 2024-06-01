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

      <!-- form login -->
      <div class="row mt-5 main-web">
        <div class="col-md-4 offset-md-4">
          <h5 class="text-center">Nhập thông tin đăng ký</h5>
          <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label"
                >Email address</label
              >
              <input
                type="email"
                class="form-control"
                id="exampleInputEmail1"
              />
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label"
                >Password</label
              >
              <input
                type="password"
                class="form-control"
                id="exampleInputPassword1"
              />
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword2" class="form-label"
                >Confirm Password</label
              >
              <input
                type="password"
                class="form-control"
                id="exampleInputPassword2"
              />
            </div>
            <div class="mb-3">
              <span>Đã có tài khoản? </span>
              <a href="login.html">Đăng nhập!</a>
            </div>
            <button type="submit" class="btn btn-success">Đăng ký</button>
          </form>
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
