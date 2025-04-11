<div class="container" style="margin-top: 50px;">
  <div class="row">

  <div class="col-md-3 col-sm-12 col-xs-12 sidebar-fix">
  <div class="wrap-filter">
  <div class="box_sidebar">
  <div class="block left-module">
  <div class=" filter_xs">
  <div class="group-menu">
                  <div class="title_block d-block d-sm-none d-none d-sm-block d-md-none" data-toggle="collapse"
                  href="#collapseExample1" role="button" aria-expanded="false"
                  aria-controls="collapseExample1">
                    Danh mục sản phẩm
                    <span><i class="fa fa-angle-down" data-toggle="collapse"
                      href="#collapseExample1" role="button" aria-expanded="false"
                      aria-controls="collapseExample1"></i></span>
                  </div>
                  <div class="block_content layered-category collapse" id="collapseExample1">
                    <div class="layered-content card card-body"  style="border:0;padding:0">
                      <ul class="menuList-links">
                        <li class=""><a href="<?php echo BASE_URL ?>" title="Trang chủ"><span>Trang chủ</span></a></li>
                        <li class=" active "><a href="product.html" title="Bộ sưu tập"><span>Bộ sưu tập</span></a>
                        </li>
                        <li class="has-submenu level0 ">
                          <a title="Sản phẩm" >Sản phẩm<span class="icon-plus-submenu" data-toggle="collapse"
                              href="#collapseExample" role="button" aria-expanded="false"
                              aria-controls="collapseExample"></span></a>
                          <div class="collapse" id="collapseExample">
                            <div class="card card-body" style="border:0;padding-top:0;">
                              <ul class="menu-product">
                              <?php
                    foreach ($category as $key => $cate){
                          ?>
                        <a href="<?php echo BASE_URL?>sanpham/danhmuc/<?php echo $cate['id_category'] ?>" > 
                        <?php echo $cate['name_category'] ?>
                        </a>
                        <?php
                    }
                    ?>
                              </ul>
                            </div>
                          </div>
                        </li>
                        <li class=""><a href="<?php echo BASE_URL?>index/gioithieu " title="Giới thiệu"><span>Giới thiệu</span></a></li>
                        <li class="has-submenu level0 ">
                          <a title="Tin Tức" >Tin Tức<span class="icon-plus-submenu" data-toggle="collapse"
                              href="#collapseExample" role="button" aria-expanded="false"
                              aria-controls="collapseExample"></span></a>
                          <div class="collapse" id="collapseExample">
                            <div class="card card-body" style="border:0;padding-top:0;">
                              <ul class="menu-product">
                              <?php
                    foreach ($category as $key => $cate){
                  ?>
                <a href="<?php echo BASE_URL?>sanpham/danhmuc/<?php echo $cate['id_category'] ?>" > 
                <?php echo $cate['name_category'] ?>
                </a>
                <?php
            }
            ?>
                              </ul>
                            </div>
                          </div>
                        </li>
                        <li class=""><a href="<?php echo BASE_URL?>index/lienhe" title="Liên hệ"><span>Liên hệ</span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
</div>
</div>
</div>
</div>
</div>

<div class="col-md-9 col-sm-12 col-xs-12">
        <div class="page-wrapper">
          <div class="heading-page">
            <h1>Giới thiệu</h1>
          </div>
          <div class="wrapbox-content-page">
            <div class="content-page ">
              <p>Xin Chào đây là trang Website Four đang là trang xây dựng website đồ án Công Nghệ Web</p>
              
              <div>
                <ul>
                  <li><span>Four là trang web được xây dựng bởi Tấn Việt, Văn Tuyên, Đình Năng, Viết Hưng</span><br></li>
                  <li><span>Kinh doanh sản phẩm bán điện máy</span><br></li>
                  <li><span>Địa chỉ cửa hàng 470 Trần Đại Nghĩa, Phường Hòa Quý, Quận Ngũ Hành Sơn, TP Đà Nẵng</span><br></li>
                  <li><span>Bài Đồ Án Xây Dựng Cách Đây 1 Tháng</span><br></li>
                  
                  <li><span>Đội ngũ của bạn gồm Tấn Việt, Văn Tuyên, Đình Năng, Viết Hưng</span><br></li>
                  <li><span>Thông tin liên hệ</span><br></li>
                  
                </ul>
              </div>
              
            </div>
          </div>
        </div>
      </div>

</div>
</div>