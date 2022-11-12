<!DOCTYPE html>
<head>
    <title>Trang chủ</title> 
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="stylee.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
      <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="plugins/uikit/uikit.min.css" />

</head>
<body>
    <div class="container-fluid">
        <div class="header">
            <div class = "row text-center cursive"> 
            <div class = "col text-center">
                Welcome to The A.N.H Bookshop!
                <a href="#" class ="has-text-action-primary" style="font-weight:bold">
                <u>Learn more here!</u>
                </a>
            </div>
            </div>
        </div>
        <div class="menu" id="action-menu">
            <nav class="navbar navbar-expand navbar-light sticky-top">
            <a class = "navbar-brand" href="index.php"><img alt="The A.N.H Bookshop's Logo" src="image/logo.png" width="115"/></a>
            <span style="color: rgb(4, 4, 4); font-weight:bold">The A.N.H Bookshop</span>
            <div class="collapse navbar-collapse" id = "navbarResponsive">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a class="nav-link" href ="../View/index.php">TRANG CHỦ</a></li>
                <li class="nav-item active dropdown"><a class="nav-link drop-btn" href ="../View/booklist.php?nd=sachkt" >SÁCH KINH TẾ</a></li>

                <li class="nav-item active dropdown"><a class="nav-link drop-btn" href ="../View/booklist.php" >SÁCH HỌC NGOẠI NGỮ</a>
                <div class="dropdown-menu">
                    <a href="../View/booklist.php?nd=sachAnh">ANH</a>
                    <a href="../View/booklist.php?nd=sachHan">HÀN</a>
                    <a href="../View/booklist.php?nd=sachNhat">NHẬT</a>
                    </div>
                </li>
                <li class="nav-item active dropdown"><a class="nav-link drop-btn" href ="../View/booklist.php" > SÁCH VĂN HỌC</a>
                <div class="dropdown-menu">
                    <a href="../View/booklist.php?nd=vhVietNam"> VIỆT NAM</a>
                    <a href="../View/booklist.php?nd=vhnuocngoai"> NƯỚC NGOÀI</a>
                    </div>
                </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id = "navbarResponsive">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a href="../View/signin.php" title="Tài khoản">
                    <span class="material-symbols-outlined" style="color:black">person</span>
                    </a>
                </li>
                <li class="nav-item active">
                    <a href="../View/shoppingcart.php" title="Giỏ hàng">
                    <span class="material-symbols-outlined" style="color:black">shopping_cart</span>
                    </a>
                </li>
                <li class="nav-item active">
                    <a href="../View/booklist.php" title="Tìm kiếm" onClick="showsearchbar()">
                    <span class="material-symbols-outlined" style="color:black">search</span>
                    </a>
                </li>
                </ul>
            </div>
            </nav>
        </div> 
        <div class="searchbar" id="search-bar">
            <button id="close-bar" onClick="hidesearchbar()">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z" />
                <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z" />
            </svg>
            </button>
            <form class="d-flex justify-content-center" method="get" action="index.php">
            <input type="hidden" name="to" value="search">
            <input type="hidden" name="from" value="searchbar">
            <input type="search" name="key" class="search-box" id="searchbar" placeholder="Tìm kiếm">
            <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
            </form>
        </div>

        <div class="container-xl px-4 mt-4 profile">
            <hr class="mt-0 mb-4">
                    <!-- Account details card-->
                    <div class="card mb-4">
                        <div class="card-header">Tài khoản</div>
                        <div class="card-body">
                            <form>
                                <!-- Form Group (username)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputUsername">Họ tên</label>
                                    <input class="form-control" id="inputUsername" type="text" placeholder="Enterhoten" value="ABC">
                                </div>
                                <!-- Form Row        -->
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputemail">Email</label>
                                    <input class="form-control" id="inputemail" type="text" placeholder="Nhập email liên hệ" value="abc@gmail.com">
                                   
                                </div>
                                <div class=" mb-3">
                              
                                        <label class="small mb-1" for="inputphone1">Số điện thoại 1</label>
                                        <input class="form-control" id="inputphone1" type="text" placeholder="Nhập số điện thoại liên hê" value="">
                              
                                   
                                </div>

                                <div class=" mb-3">
                                        <label class="small mb-1" for="inputaddress1">Địa chỉ </label>
                                        <input class="form-control" id="inputaddress1" type="text" placeholder="Nhập địa chỉ nhận hàng" value="">
                                   

                                </div>
                                <div class="savebutton">
                                    <p>Lưu thay đổi</p>
                                  </div>
                            </form>
                        </div>
                    </div>
                </div>

        <div class="footer row text-center">
            <div class ="col-md-4">
              <hr class="light"/>
              <h5> Giới thiệu</h5>
              <hr class="light"/>
              <p>Vài dòng giới thiệu</p>
            </div>
            <div class ="col-md-4">
              <hr class="light"/>
              <h5> Founder:</h5>
              <hr class="light"/>
              <p>Đỗ Thị Phương Anh</p>
              <p>Nông Thảo Hiền</p>
              <p>Đặng Thị Kim Ngân</p>
            </div>
            <div class ="col-md-4">
              <hr class="light"/>
              <h5> Liên hệ</h5>
              <hr class="light"/>
              <p>Phone-number</p>
              <p>Address</p>
              <p>Email</p>
            </div>
            <div class="col-12">
              <hr class="light-100">
              <p>Đây là sản phẩm mô phỏng phục vụ cho môn học của sinh viên</p>
              <h5>&copy; Đại học Kinh tế Thành phố Hồ Chí Minh, 2022</h5>
            </div>
        </div>
    </div>

    <script async defer crossorigin="anonymous" src="plugins/sdk.js"></script>
    <script src="plugins/jquery-3.4.1/jquery-3.4.1.min.js"></script>
    <script src="plugins/bootstrap/popper.min.js"></script>
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <script src="plugins/owl.carousel/owl.carousel.min.js"></script>
    <script src="java/script.js"></script>
    <script src="plugins/uikit/uikit.min.js"></script>
    <script src="plugins/uikit/uikit-icons.min.js"></script>
</body>
</html>