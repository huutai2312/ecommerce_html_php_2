<!DOCTYPE HTML>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <title>Suruchi Dashboard</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../public/assets_admin/imgs/favicon.ico">
    <!-- Template CSS -->
    <link href="../public/assets_admin/css/main.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="screen-overlay"></div>
    <aside class="navbar-aside" id="offcanvas_aside">
        <div class="aside-top">
            <a href="index.php" class="brand-wrap">
                <img src="../public/assets_admin/imgs/theme/nav-log.png" class="logo" alt="Suruchi Dashboard">
            </a>
            <div>
                <button class="btn btn-icon btn-aside-minimize"> <i class="text-muted material-icons md-menu_open"></i> </button>
            </div>
        </div>
        <nav>
            <ul class="menu-aside">
                <li class="menu-item active">
                    <a class="menu-link" href="index.php"> <i class="icon material-icons md-home"></i>
                        <span class="text">Trang Chủ</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="page-products-list.php"> <i class="icon material-icons md-shopping_bag"></i>
                        <span class="text">Sản Phẩm</span>
                    </a>
                    <!-- <div class="submenu">
                        <a href="page-products-list.php">Product List</a>
                        <a href="page-categories.php">Categories</a>
                    </div> -->
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="page-categories.php"><i class="icon material-icons md-category"></i>
                        <span class="text">Danh Mục</span> 
                    </a>
                    <!-- <div class="submenu">
                        <a href="page-sellers-list.php">Sellers list</a>
                    </div> -->
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="page-orders.php"><i class="icon material-icons md-shopping_cart"></i>
                        <span class="text">Đơn Hàng</span>
                    </a>
                    <!-- <div class="submenu">
                        <a href="page-orders.php">Order list</a>
                        <a href="page-orders-detail.php">Order detail</a>
                    </div> -->
                </li>
                <!-- <li class="menu-item">
                    <a class="menu-link" href="page-sellers-list.php"> <i class="icon material-icons md-store"></i>
                        <span class="text">Sellers</span>
                    </a>
                    <div class="submenu">
                        <a href="page-sellers-list.php">Sellers list</a>
                    </div>
                </li> -->
                <li class="menu-item">
                    <a class="menu-link" href="page-form-product-1.php"> <i class="icon material-icons md-add_box"></i>
                        <span class="text">Thêm Sản Phẩm</span>
                    </a>
                    <!-- <div class="submenu">
                        <a href="page-form-product-1.php">Add product</a>
                    </div> -->
                </li>
                <!-- <li class="menu-item has-submenu">
                    <a class="menu-link" href="page-transactions-1.php"> <i class="icon material-icons md-monetization_on"></i>
                        <span class="text">Transactions</span>
                    </a>
                    <div class="submenu">
                        <a href="page-transactions-1.php">Transaction 1</a>
                        <a href="page-transactions-2.php">Transaction 2</a>
                        <a href="page-transactions-details.php">Transaction Details</a>
                    </div>
                </li> -->
                <li class="menu-item">
                    <a class="menu-link" href="page-sellers-list.php"> <i class="icon material-icons md-person"></i>
                        <span class="text">Tài Khoản</span>
                    </a>
                    <!-- <div class="submenu">
                        <a href="page-account-login.php">User login</a>
                        <a href="page-account-register.php">User registration</a>
                    </div> -->
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="page-reviews.php"> <i class="icon material-icons md-comment"></i>
                        <span class="text">Đánh Giá</span>
                    </a>
                </li>
                <!-- <li class="menu-item">
                    <a class="menu-link" href="page-brands.php"> <i class="icon material-icons md-stars"></i>
                        <span class="text">Brands</span> </a>
                </li> -->
                <!-- <li class="menu-item">
                    <a class="menu-link" disabled href="#"> <i class="icon material-icons md-pie_chart"></i>
                        <span class="text">Statistics</span>
                    </a>
                </li> -->
            </ul>
            <!-- <hr> -->
            <!-- <ul class="menu-aside">
                <li class="menu-item has-submenu">
                    <a class="menu-link" href="#"> <i class="icon material-icons md-settings"></i>
                        <span class="text">Settings</span>
                    </a>
                    <div class="submenu">
                        <a href="page-settings-1.php">Setting sample 1</a>
                        <a href="page-settings-2.php">Setting sample 2</a>
                    </div>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="page-blank.php"> <i class="icon material-icons md-local_offer"></i>
                        <span class="text"> Starter page </span>
                    </a>
                </li>
            </ul> -->
            <br>
            <br>
        </nav>
    </aside>
    
    <main class="main-wrap">
        <header class="main-header navbar">
            <div class="col-search">
                <form class="searchform">
                    <div class="input-group">
                        <input list="search_terms" type="text" class="form-control" placeholder="Tìm kiếm">
                        <button class="btn btn-light bg btn-fix" type="button"> <i class="material-icons md-search"></i></button>
                    </div>
                    <datalist id="search_terms">
                        <option value="Products">
                        <option value="New orders">
                        <option value="Apple iphone">
                        <option value="Ahmed Hassan">
                    </datalist>
                </form>
            </div>
            <div class="col-nav">
                <button class="btn btn-icon btn-mobile me-auto" data-trigger="#offcanvas_aside"> <i class="material-icons md-apps"></i> </button>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link btn-icon" href="#">
                            <i class="material-icons md-notifications animation-shake"></i>
                            <span class="badge rounded-pill">0</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-icon darkmode" href="#"> <i class="material-icons md-nights_stay"></i> </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="requestfullscreen nav-link btn-icon"><i class="material-icons md-cast"></i></a>
                    </li>
                    <li class="dropdown nav-item">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" id="dropdownLanguage" aria-expanded="false"><i class="material-icons md-public"></i></a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownLanguage">
                            <a class="dropdown-item text-brand" href="#"><img src="../public/assets_admin/imgs/theme/flag-us.png" alt="English">English</a>
                            <a class="dropdown-item" href="#"><img src="../public/assets_admin/imgs/theme/flag-fr.png" alt="Français">Français</a>
                        </div>
                    </li>
                    <li class="dropdown nav-item">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" id="dropdownAccount" aria-expanded="false"> <img class="img-xs rounded-circle" src="../public/assets_admin/imgs/people/avatar2.jpg" alt="User"></a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownAccount">
                            <a class="dropdown-item" href="#"><i class="material-icons md-perm_identity"></i>Edit Profile</a>
                            <a class="dropdown-item" href="#"><i class="material-icons md-settings"></i>Account Settings</a>
                            <a class="dropdown-item" href="#"><i class="material-icons md-account_balance_wallet"></i>Wallet</a>
                            <a class="dropdown-item" href="#"><i class="material-icons md-receipt"></i>Billing</a>
                            <a class="dropdown-item" href="#"><i class="material-icons md-help_outline"></i>Help center</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#"><i class="material-icons md-exit_to_app"></i>Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </header>