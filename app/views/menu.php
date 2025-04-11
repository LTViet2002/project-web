
<div class="header">
    <a style="color: #ffffff;text-decoration: none;" href="<?php echo BASE_URL ?>">Điện Máy Four Kính Chào Quý Khách</a>
  </div>

  <!--Navbar-->

  <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">

    <div class="container">
      <a class="navbar-brand" href="index.html">
        <img src="images/logo.png" class="logo-top" alt="">
      </a>
      <div class="desk-menu collapse navbar-collapse justify-content-md-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo BASE_URL?>">TRANG CHỦ</a>
          </li>
          
          <li class="nav-item lisanpham">
            <a class="nav-link" href="<?php echo BASE_URL?>sanpham/tatca"><span>SẢN PHẨM </span>
              <i class="fa fa-chevron-down" aria-hidden="true"></i>
            </a>
            <ul class="sub_menu">
              <li class="">
              <?php
                    foreach ($category as $key => $cate){
                  ?>
                <a href="<?php echo BASE_URL?>sanpham/danhmuc/<?php echo $cate['id_category'] ?>" > 
                <?php echo $cate['name_category'] ?>
                </a>
                <?php
            }
            ?>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL?>sanpham/tatcatintuc">Tin Tức
              <i class="fa fa-chevron-down" aria-hidden="true"></i>
            </a>
            <ul class="sub_menu">
              <li class="">
                  <?php
                    foreach ($category_blog as $key => $cate){
                  ?>
                <a href="<?php echo BASE_URL?>sanpham/tintuc/<?php echo $cate['id_category_blog'] ?>" title="Sản phẩm - Style 1"> 
                <?php echo $cate['name_category_blog'] ?>
                </a>
                <?php
            }
            ?>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL?>index/gioithieu">GIỚI THIỆU</a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL?>index/lienhe">LIÊN HỆ</a>
          </li>
        </ul>
      </div>
      <div id="offcanvas-flip1" uk-offcanvas="flip: true; overlay: true">
        <div class="uk-offcanvas-bar" style="background: white;
        width: 100%;">

          <button class="uk-offcanvas-close" style="color:#272727" type="button" uk-close></button>
          <h3 style="font-size: 14px;
          color: #272727;
          text-transform: uppercase;
          margin: 3px 0 30px 0;
          font-weight: 500; letter-spacing: 2px;">MENU</h3>
            <div class="justify-content-md-center">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo BASE_URL?>">TRANG CHỦ</a>
                </li>
                
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle aaaa"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" >
                    <p>SẢN PHẨM</p>
                    <i class="fa fa-angle-double-right"></i>

                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border:0;">
                  <?php
                    foreach ($category as $key => $cate){
                  ?>
                <a class="dropdown-item" href="<?php echo BASE_URL?>sanpham/danhmuc/<?php echo $cate['id_category'] ?>" > 
                <?php echo $cate['name_category'] ?>
                </a>
                <?php
            }
            ?>
                   
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle aaaa"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" >
                    <p>Tin Tức</p>
                    <i class="fa fa-angle-double-right"></i>

                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border:0;">
                  <?php
                    foreach ($category_blog as $key => $cate){
                  ?>
                <a class="dropdown-item" href="<?php echo BASE_URL?>sanpham/tintuc/<?php echo $cate['id_category_blog'] ?>" title="Sản phẩm - Style 1"> 
                <?php echo $cate['name_category_blog'] ?>
                </a>
                <?php
            }
            ?>
                   
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="introduce.html">GIỚI THIỆU</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="Contact.html">LIÊN HỆ</a>
                </li>
              </ul>
            </div>

        </div>
      </div>
      <div id="offcanvas-flip" uk-offcanvas="flip: true; overlay: true">
        <div class="uk-offcanvas-bar" style="    background: white;
            width: 350px;">

          <button class="uk-offcanvas-close" style="color:#272727" type="button" uk-close></button>

          <h3 style="font-size: 14px;
                color: #272727;
                text-transform: uppercase;
                margin: 3px 0 30px 0;
                font-weight: 500; letter-spacing: 2px;">Tìm kiếm</h3>
          <div class="search-box wpo-wrapper-search">
            <form action="search" class="searchform searchform-categoris ultimate-search">
              <div class="wpo-search-inner" style="display:inline">
                <input type="hidden" name="type" value="product">
                <input required="" id="inputSearchAuto" name="q" maxlength="40" autocomplete="off"
                  class="searchinput input-search search-input" type="text" size="20"
                  placeholder="Tìm kiếm sản phẩm...">
              </div>
              <button type="submit" class="btn-search btn" id="search-header-btn">
                <i style="font-weight:bold" class="fas fa-search"></i>
              </button>
            </form>
            <div id="ajaxSearchResults" class="smart-search-wrapper ajaxSearchResults" style="display: none">
              <div class="resultsContent"></div>
            </div>
          </div>
        </div>
      </div>
      
      
      <?php 
          if(!Session::get('member')==true){
            ?><a style="color: #272727; margin-right:10px;" href="<?php echo BASE_URL?>khachhang/dangnhap">
            Đăng Nhập
            
          </a>
              
        <?php
          }else{
        ?>
        
        <a style="color: #272727; margin-right:10px;" href="<?php echo BASE_URL?>khachhang/logout">
          Đăng Xuất
          
        </a>
        <div class="icon-ol">
        <a style="color: #272727" href="<?php echo BASE_URL?>giohang" >
          <i class="fas fa-shopping-cart"></i>
        </a>
        <?php
          foreach ($member as $key => $member) {
        ?>
        <a style="color: #272727" href="<?php echo BASE_URL?>khachhang/thongtincanhan/<?php echo $member['id_member']?>">
          <i class="fas fa-user-alt"></i>
        </a>
        <?php } ?>
        <?php
          }
        ?>
      
            
        
        <a href="#" class="" uk-toggle="target: #offcanvas-flip">
          <i class="fas fa-search" style="color: black"></i>
        </a>
        
        
        <button class="navbar-toggler" type="button" uk-toggle="target: #offcanvas-flip1" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
    </div>

  </nav>