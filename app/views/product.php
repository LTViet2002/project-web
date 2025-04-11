<div>
    <div>
      <img src="https://cdn.trangcongnghe.com/uploads/posts/2017-12/samsung-va-sony-se-trinh-dien-tv-8k-lg-ra-mat-crystal-sound-oled-tai-ces-2018_1.jpg" alt="Products">
    </div>
  </div>

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
                        <li class=""><a href="introduce.html" title="Giới thiệu"><span>Giới thiệu</span></a></li>
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
                        <li class=""><a href="contact.html" title="Liên hệ"><span>Liên hệ</span></a></li>
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
  <div class="wrap-collection-title row">
  <div class="col-md-8 col-sm-12 col-xs-12">
            <h1 class="title" >
              Tất cả sản phẩm
            </h1>
            <div class="alert-no-filter"></div>
          </div>
    </div>

    <div class="row">
      <?php
        foreach ($category_byid as $key => $pro)
        {
      ?>

          <div class="col-md-4 col-sm-6 col-xs-6 col-6" style="margin-top:10px">
            <div class="product-block">
              <div class="product-img fade-box">
                <a href="<?php echo BASE_URL?>sanpham/chitietsanpham/<?php echo $pro['id_product'] ?>" title="" class="img-resize">
                  <img
                    src="<?php echo BASE_URL?>public/uploads/product/<?php echo $pro['img_product']?>"
                    alt="Adidas EQT Cushion ADV" class="lazyloaded" >
                  <img
                    src="<?php echo BASE_URL?>public/uploads/product/<?php echo $pro['img1_product']?>"
                    alt="Adidas EQT Cushion ADV" class="lazyloaded">
                </a>
                
              </div>
              <div class="product-detail clearfix">
                <div class="pro-text">
                  <a style=" color: black;
                font-size: 14px;text-decoration: none;" href="<?php echo BASE_URL?>sanpham/chitietsanpham/<?php echo $pro['id_product'] ?>"
                    title="Adidas EQT Cushion ADV" inspiration pack>
                    <?php echo $pro['name_product']?>
                  </a>
                </div>
                <div class="pro-price">
                  <p class=""><?php echo number_format($pro['price_product'],0,',','.').'VNĐ' ?></p>
                </div>
                <button class="btn btn-primary btn-xs btn-info btn-block">
                <a href="<?php echo BASE_URL?>sanpham/chitietsanpham/<?php echo $pro['id_product'] ?>">Xem Thêm</a>
                </button>
              </div>
            </div>
          </div>
<?php
        }
?>


          
    </div>
  </div>
  </div> 
