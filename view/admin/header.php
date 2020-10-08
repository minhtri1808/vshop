<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Sawarabi+Gothic&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="view/admin/asset/fontawesome-free-5.14.0-web/css/Pop-Up.css">
    <link rel="stylesheet" href="view/admin/asset/fontawesome-free-5.14.0-web/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
    * {
        font-family: 'Sawarabi Gothic', sans-serif;
    }

    @media (min-width: 768px) {
        aside {
            width: 250px;
            float: left;
        }

        article {
            width: calc(100% - 250px);
            float: right;
            padding-top: 20px;
            padding-left: 30px;
            padding-right: 30px;
        }
    }

    @media (max-width: 767px) {
        aside {
            text-align: center;
        }

        .avatar {
            text-align: center;
        }

        .dropdown-item {
            text-align: center;
        }
    }

    aside ul {
        line-height: 3em;
    }

    .ml-auto .dropdown-menu {
        left: auto !important;
        right: 0px;
    }

    #customers {
        width: 100%;
    }

    #customers td,
    #customers th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #customers tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #customers tr:hover {
        background-color: #ddd;
    }

    #customers th {
        padding: 15px;
        text-align: center;
        background-color: #333;
        color: white;
        font-size: 18px;
    }

    #customers td {
        font-size: 16px;
    }

    #customers td input {
        font-size: 14px;
        padding: 4px;
    }
    </style>


</head>

<body class="bg-dark">
    <header class="navbar navbar-expand-md bg-dark navbar-dark">
        <a href="#" class="navbar-brand">
            <img src="upload/ddddddddd.png" alt="logo" width="150px">
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#collapsibleNavbar, #collapsibleSlidebar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto avatar">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <img src="upload/user1.png" alt="Avatar" class="rounded-circle" width="50px">
                    </a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Visit Site</a>
                        <a href="admin.php?act=logout" class="dropdown-item">Đăng xuất</a>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <aside class="navbar bg-dark navbar-dark">
        <div class="navbar-collapse" id="collapsibleSlidebar">
            <ul class="navbar-nav">
            
                <li class="nav-item active">
                    <a class="nav-link" href="admin.php">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php?act=user">Quản lý tài khoản</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="admin.php?act=product" data-toggle="dropdown">
                        Quản lý sản phẩm
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="admin.php?act=product">Tất cả Sản phẩm</a>
                        <a class="dropdown-item" href="admin.php?act=productDetail">Chi tiết Sản phẩm</a>
                        <a class="dropdown-item" href="admin.php?act=producer">Theo Thương hiệu</a>
                    </div>
                </li>
                
                
                <li class="nav-item">
                    <a class="nav-link" href="admin.php?act=catalog">Quản lý Catalog</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                        Quản lý layout
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="admin.php?act=banner">Banner</a>
                        <a class="dropdown-item" href="?act=slider">Slider</a>
                        <a class="dropdown-item" href="admin.php?act=color_board">Color Brand</a>
                    </div>
                </li>
                
                <li class="nav-item">
                    <a href="admin.php?act=comment" class="nav-link">Quản lý bình luận</a>
                </li>
                <li class="nav-item">
                    <a href="admin.php?act=order" class="nav-link">Quản lý đơn hàng</a>
                </li>
                
            </ul>
        </div>
    </aside>
    <!-- header -->