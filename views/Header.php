<?php
require_once 'controllers/Session.php';
$user = isset($_SESSION['email']) ?  $_SESSION['email'] : [];
?>
<div class="user_option_box">
    <div class="logo">
        <a href="index.php"><img src="https://www.sieuthiruoungoai.com/themes/ruoungoai/assets/img/logo.png" alt=""></a>
        <div class="change-area">
            <img src="https://www.sieuthiruoungoai.com/themes/ruoungoai/assets/img/icon-suport.png" alt="">
            <a class="ct-area">
                <span>Chăm sóc</br>khách hàng</span>
            </a>

            <div class="ct-hotline">
                <p>Holine:</br>
                    <strong>
                        <a href="tel:0889269284">0889.269.284</a>
                    </strong>
                </p>
                <p>TP. Vinh:</br>
                    <strong>
                        <a href="tel:0839929303">0839.929.303</a>
                    </strong>
                </p>
            </div>
        </div>
    </div>
    <a class="account">
        <?php if (isset($user['email'])) { ?>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="https://hasaki.vn/images/graphics/icon_header_2.svg" alt=""><?php echo $user['email']; ?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="index.php?action=index">Quản lý sản phẩm</a></li>
                    <li><a href="index.php?action=logout">Đăng xuất</a></li>
                </ul>
            </li>
        <?php } else { ?>
            <a href="index.php?action=login" class="account-link"><img src="https://hasaki.vn/images/graphics/icon_header_2.svg" alt=""><button type="submit" name="sbm" class="btn btn-login btn-primary">Đăng nhập</button><b class="caret"></b></a>
        <?php } ?>
    </a>
</div>
<nav id="navbar_top" class="navbar navbar-expand-sm navbar-dark" style="background-color: #333; z-index: 100;">
    <div class="nav-container">
        <a class="navbar-brand" href="index.php">TRANG CHỦ</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="?category=1">RƯỢU COGNAC</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="?category=2">BLENDED SCOTCH WHISKY</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="?category=3">RƯỢU SINGLE MALT</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="?category=4">RƯỢU VODKA</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="?category=5">RƯỢU VANG</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="?category=6">BIA</a>
                </li>
            </ul>
        </div>
    </div>
</nav>