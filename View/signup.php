<!DOCTYPE html>

<head>
    <title>Sign in</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style/wqlnsstyle.css">
    <script src= "../script/java.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Itim|Lobster|Montserrat:500|Noto+Serif|Nunito|Patrick+Hand|Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i|Roboto+Slab|Saira" rel="stylesheet">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="plugins/uikit/uikit.min.css" />
</head>

<body>
    <div class="container-fluid">
        <div class="menu default_font" id="action-menu">
            <nav class="navbar navbar-expand navbar-light fixed-top">
                <a class="navbar-brand" href="index.php"><img alt="The A.N.H Bookshop's Logo" src="../image/logo.png" width="115" /></a>
                <span style="color: rgb(4, 4, 4); font-weight:bold">The A.N.H Bookshop</span>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="index.php">TRANG CH???</a></li>
                        <li class="nav-item active dropdown"><a class="nav-link drop-btn" href="booklist.php?tl=TL001">S??CH KINH T???</a></li>
                        <li class="nav-item active dropdown"><a class="nav-link drop-btn" href="#">S??CH H???C NGO???I NG???</a>
                            <div class="dropdown-menu">
                                <a href="booklist.php?tl=TL004">ANH</a>
                                <a href="booklist.php?tl=TL005">H??N</a>
                                <a href="booklist.php?tl=TL006">NH???T</a>
                            </div>
                        </li>
                        <li class="nav-item active dropdown"><a class="nav-link drop-btn" href="#"> S??CH V??N H???C</a>
                            <div class="dropdown-menu">
                                <a href="booklist.php?tl=TL002"> VI???T NAM</a>
                                <a href="booklist.php?tl=TL003"> N?????C NGO??I</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a href="shoppingcart.php" title="">
                                <span class="material-symbols-outlined" style="color:black"></span>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="#" title="">
                                <span class="material-symbols-outlined" style="color:black"></span>
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
            <form class="d-flex justify-content-center" method="get" action="booklist.php">
                <input type="search" name="key" class="search-box" id="searchbar" placeholder="T??m ki???m">
                <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <?php
            include_once($_SERVER['DOCUMENT_ROOT']."/LaptrinhWeb/Controller/DangkyController.php");
            if(isset($_POST['submit1']))
            {
                $ten_kh = $_POST['ten_kh'];
                $email = $_POST['email'];
                $matkhau = $_POST['matkhau'];
                $sdt = $_POST['sdt'];
                $diachi = $_POST['diachi'];
                $_SESSION['ten_kh'] = $ten_kh;
                $_SESSION['email'] = $email;
                $_SESSION['matkhau'] = $matkhau;
                $_SESSION['sdt'] = $sdt;
                $_SESSION['diachi'] = $diachi;
                signup_ctl($ten_kh, $matkhau, $sdt, $diachi, $email);
            }
        ?>
        <div class="content">
            <div class="row signup">
                <div class="col-md-6 col-xs-12 col-sm-12 signin-left">
                    <div class="logobrand">
                        <img alt="The A.N.H Bookshop's Logo" src="../image/logo.png" width="225" />
                    </div>
                    <div class="sign-title">
                        <h1>T???o t??i kho???n</h1>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 col-sm-12 signin-right">
                    <form action="../View/signup.php" method="post">
                        <div class="name form-control1 ">
                            <input type="text" id="ten_kh" placeholder="H??? v?? t??n" name="ten_kh">
                        </div>
                        <div class="email form-control1">
                            <input type="email" id="email" placeholder="Email" name="email" value="<?php echo isset($_GET['email'])?$_GET['email']:"";?>"/>
                        </div>
                        <div class="password form-control1">
                            <input type="password" id="matkhau" placeholder="Password" name="matkhau">
                        </div>
                        <div class="phonen-number form-control1">
                            <input type="text" id="sdt" placeholder="S??? ??i???n tho???i" name="sdt">
                        </div>
                        <div class="address form-control1">
                            <input type="text" id="diachi" placeholder="?????a ch???" name="diachi">
                        </div>
                        <div class="recaptcha form-control1">This site is protected by reCAPTCHA and the Google <a href="">Privacy Policy</a> and <a href="">Terms of Service</a> apply.</div>
                        <input type="submit" class="submit" value="????ng k??" name="submit1">
                        </input>
                        <div class="backto">
                            <a href="../LaptrinhWeb/View/index.php"><i class="fa fa-long-arrow-alt-left"></i> Quay l???i trang ch???</a>
                        </div>
                    </form>
                </div>
            </div>

            <div class="footer row text-center">
                <div class="col-md-4">
                    <hr class="light" />
                    <h5> Gi???i thi???u</h5>
                    <hr class="light" />
                    <p>V??i d??ng gi???i thi???u</p>
                </div>
                <div class="col-md-4">
                    <hr class="light" />
                    <h5> Founder:</h5>
                    <hr class="light" />
                    <p>????? Th??? Ph????ng Anh</p>
                    <p>N??ng Th???o Hi???n</p>
                    <p>?????ng Th??? Kim Ng??n</p>
                </div>
                <div class="col-md-4">
                    <hr class="light" />
                    <h5> Li??n h???</h5>
                    <hr class="light" />
                    <p>Phone-number</p>
                    <p>Address</p>
                    <p>Email</p>
                </div>
                <div class="col-12">
                    <hr class="light-100">
                    <p>????y l?? s???n ph???m m?? ph???ng ph???c v??? cho m??n h???c c???a sinh vi??n</p>
                    <h5>&copy; ?????i h???c Kinh t??? Th??nh ph??? H??? Ch?? Minh, 2022</h5>
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