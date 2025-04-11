
  <!-- Owl-Carousel -->
  <div class="owl-carousel owl-theme owl-carousel-setting">
    <div class="item"><img src="https://cdn.tgdd.vn/Files/2020/01/09/1230685/-ces-2020-tat-ca-cac-mau-tv-cua-sony-tai-su-kien-ces-2020.jpg" class="d-block w-100" alt="..."></div>
    <div class="item"><img src="https://cdn.tgdd.vn/Files/2020/01/09/1230685/-ces-2020-tat-ca-cac-mau-tv-cua-sony-tai-su-kien-ces-2020-1.jpg" class="d-block w-100" alt="..."></div>
</div>

  <!--Content-->
  
  <div class="content">
  <div class="container">
  <div class="hot_sp" style="padding-bottom: 10px;">
        <h2 style="text-align:center;padding-top: 10px">
          <a style="font-size: 28px;color: black;text-decoration: none" href="<?php echo BASE_URL?>sanpham/tatca">Sản phẩm Mới Nhất</a>
        </h2>
        
      </div>
</div>
<!--  -->

<div class="container" style="padding-bottom: 50px;">
<div class="row">
<?php
        foreach ($product_1 as $key => $pro)
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
<section class="">
  <div class="content">
    <div class="container">
    <div class="hot_sp">
            <h2 style="text-align:center;padding-top: 10px">
              <a style="font-size: 28px;color: black;text-decoration: none" href="<?php echo BASE_URL?>sanpham/tatcatintuc">Bài viết mới nhất</a>
            </h2>
            <br />
          </div>
    </div>
  </div>
</div>
<!--  -->
<div class="container">
<div class="row">
  <?php
  foreach ($blog as $key => $blog){
  ?>
<div class="col-md-4">
              <div class="post_item">
                <div class="post_featured">
                  <a href="<?php echo BASE_URL?>sanpham/chitiettintuc/<?php echo $blog['id_blog'] ?>" title="">
                  <img src="<?php echo BASE_URL?>/public/uploads/blog/<?php echo $blog['img']?>" style="width:300px" >
                  </a>
                </div>
                <div class="pro-text">
                  <span class="post_info_item">

                    Thứ Ba 11,06,2019

                  </span>
                </div>
                <div class="pro-text">
                  <h3 class="post_title">
                    
                    <a style=" color: black;
                                  font-size: 18px;text-decoration: none;" inspiration pack href="<?php echo BASE_URL?>sanpham/chitiettintuc/<?php echo $blog['id_blog'] ?>"><?php echo $blog['name_blogs']?></a>
                  </h3>
                </div>
                <div style="text-align:center; padding-bottom: 30px;">
                  <span><?php echo substr($blog['title_blog'],0,50).'...' ?></span>
                </div>
              </div>
            </div>
            <?php
  }
            ?>
      </div>
      </div>
</section>