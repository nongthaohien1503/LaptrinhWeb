<html>

<head>
    <title>Lịch sử mua hàng</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style/wqlnsstyle.css">
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
    <script src="java.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="menu default_font" id="action-menu">
            <nav class="navbar navbar-expand navbar-light fixed-top">
                <a class="navbar-brand" href="index.php"><img alt="The A.N.H Bookshop's Logo" src="../image/logo.png" width="115" /></a>
                <span style="color: rgb(4, 4, 4); font-weight:bold">The A.N.H Bookshop</span>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="../index.php">TRANG CHỦ</a></li>
                        <li class="nav-item active dropdown"><a class="nav-link drop-btn" href="./booklist.php?tl=TL001">SÁCH KINH TẾ</a></li>
                        <li class="nav-item active dropdown"><a class="nav-link drop-btn" href="./booklist.php?tl=2">SÁCH HỌC NGOẠI NGỮ</a>
                            <div class="dropdown-menu">
                                <a href="./booklist.php?tl=TL004">ANH</a>
                                <a href="./booklist.php?tl=TL005">HÀN</a>
                                <a href="./booklist.php?tl=TL006">NHẬT</a>
                            </div>
                        </li>
                        <li class="nav-item active dropdown"><a class="nav-link drop-btn" href="../View/booklist.php?tl=5"> SÁCH VĂN HỌC</a>
                            <div class="dropdown-menu">
                                <a href="./booklist.php?tl=TL002"> VIỆT NAM</a>
                                <a href="./booklist.php?tl=TL003"> NƯỚC NGOÀI</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a href="signin.php" title="Tài khoản">
                                <span class="material-symbols-outlined" style="color:black">person</span>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="shoppingcart.php" title="Giỏ hàng">
                                <span class="material-symbols-outlined" style="color:black">shopping_cart</span>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="#" title="Tìm kiếm" onClick="showsearchbar()">
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
            <form class="d-flex justify-content-center" method="get" action="./View/booklist.php">
                <input type="search" name="key" class="search-box" id="searchbar" placeholder="Tìm kiếm">
                <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <div class="titleofpage">
            <p class="titlee">ĐƠN HÀNG CỦA TÔI</p>
        </div>
        <div class="order-list">
            <div class="content-cart" id="or1">
                <div class="card headd">
                    <div class="myorders">
                        <div class="row firstline">
                            <div class="col-xs-6 col-md-8 date">
                                <p class="dateoforder">15/11/2022</p>
                                <p class="inforr">Tên: <br>SĐT: <br> Địa chỉ giao hàng: </p>
                            </div>
                            <div class="col-xs-6 col-md-4 state">
                                <p class="stateoforder">Chờ xác nhận</p>
                            </div>
                        </div>
                        <div class="card itemm" id="itemm1">
                            <div class="row items">
                                <div class="col-xs-4 col-md-2">
                                    <img class="picofitem" src="image/vimo.jpg" alt="" width=80px height=120px>
                                </div>
                                <div class="col-xs-4 col-md-8 aboutitem">
                                    <p class="nameofitem" id="nameofitem1">Kinh tế vi mô</p>
                                    <p class="quantityofitem" id="quantityofitem1">x1</p>

                                </div>
                                <div class="col-xs-4 col-md-2 price">
                                    <p class="priceofitem" id="priceofitem1">150,000</p>
                                </div>
                            </div>
                        </div>

                        <div class="card itemm" id="itemm2">
                            <div class="row items">
                                <div class="col-xs-4 col-md-2">
                                    <img class="picofitem" src="image/vimo.jpg" alt="" width=80px height=120px>
                                </div>
                                <div class="col-xs-4 col-md-8 aboutitem">
                                    <p class="nameofitem" id="nameofitem2">Kinh tế vi mô</p>
                                    <p class="quantityofitem" id="quantityofitem2">x1</p>

                                </div>
                                <div class="col-xs-4 col-md-2 price">
                                    <p class="priceofitem">150,000</p>
                                </div>
                            </div>
                        </div>

                        <div class="card itemm" id="itemm3">
                            <div class="row items">
                                <div class="col-xs-4 col-md-2">
                                    <img class="picofitem" src="image/vimo.jpg" alt="" width=80px height=120px>
                                </div>
                                <div class="col-xs-4 col-md-8 aboutitem">
                                    <p class="nameofitem" id="nameofitem3">Kinh tế vi mô</p>
                                    <p class="quantityofitem" id="quantityofitem3">x1</p>

                                </div>
                                <div class="col-xs-4 col-md-2 price">
                                    <p class="priceofitem" id="priceofitem3">150,000 </p>
                                </div>
                            </div>
                        </div>
                        <div class="totalprice">
                            <div class="row">
                                <div class="col-xs-4 col-md-10">
                                    <p class="tcont">Tổng cộng</p>
                                </div>
                                <div class="col-xs-4 col-md-2 valuee">
                                    <p class="tvalue">450,000 </p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <div class="content-cart" id="or2">
                <div class="card headd">
                    <div class="myorders">
                        <div class="row firstline">
                            <div class="col-xs-6 col-md-8 date">
                                <p class="dateoforder">15/11/2022</p>
                                <p class="inforr">Tên: <br>SĐT: <br> Địa chỉ giao hàng: </p>
                            </div>
                            <div class="col-xs-6 col-md-4 state">
                                <p class="stateoforder" id="stateoforder2">Đã nhận hàng</p>
                            </div>
                        </div>
                        <div class="card itemm" id="itemm1">
                            <div class="row items">
                                <div class="col-xs-4 col-md-2">
                                    <img class="picofitem" src="image/vimo.jpg" alt="" width=80px height=120px>
                                </div>
                                <div class="col-xs-4 col-md-8 aboutitem">
                                    <p class="nameofitem" id="nameofitem1">Kinh tế vi mô</p>
                                    <p class="quantityofitem" id="quantityofitem1">x1</p>

                                </div>
                                <div class="col-xs-4 col-md-2 price">
                                    <p class="priceofitem" id="priceofitem1">150,000</p>
                                </div>
                            </div>
                        </div>

                        <div class="card itemm" id="itemm2">
                            <div class="row items">
                                <div class="col-xs-4 col-md-2">
                                    <img class="picofitem" src="image/vimo.jpg" alt="" width=80px height=120px>
                                </div>
                                <div class="col-xs-4 col-md-8 aboutitem">
                                    <p class="nameofitem" id="nameofitem2">Kinh tế vi mô</p>
                                    <p class="quantityofitem" id="quantityofitem2">x1</p>

                                </div>
                                <div class="col-xs-4 col-md-2 price">
                                    <p class="priceofitem">150,000</p>
                                </div>
                            </div>
                        </div>

                        <div class="card itemm" id="itemm3">
                            <div class="row items">
                                <div class="col-xs-4 col-md-2">
                                    <img class="picofitem" src="image/vimo.jpg" alt="" width=80px height=120px>
                                </div>
                                <div class="col-xs-4 col-md-8 aboutitem">
                                    <p class="nameofitem" id="nameofitem3">Kinh tế vi mô</p>
                                    <p class="quantityofitem" id="quantityofitem3">x1</p>

                                </div>
                                <div class="col-xs-4 col-md-2 price">
                                    <p class="priceofitem" id="priceofitem3">150,000 </p>
                                </div>
                            </div>
                        </div>
                        <div class="totalprice">
                            <div class="row">
                                <div class="col-xs-4 col-md-10">
                                    <p class="tcont">Tổng cộng</p>
                                </div>
                                <div class="col-xs-4 col-md-2 valuee">
                                    <p class="tvalue">450,000 </p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>











        <div class="footer row text-center">
            <div class="col-md-4">
                <hr class="light" />
                <h5> Giới thiệu</h5>
                <hr class="light" />
                <p>Vài dòng giới thiệu</p>
            </div>
            <div class="col-md-4">
                <hr class="light" />
                <h5> Founder:</h5>
                <hr class="light" />
                <p>Đỗ Thị Phương Anh</p>
                <p>Nông Thảo Hiền</p>
                <p>Đặng Thị Kim Ngân</p>
            </div>
            <div class="col-md-4">
                <hr class="light" />
                <h5> Liên hệ</h5>
                <hr class="light" />
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

</body>

</html>