<main class="">
    <div id="product" class="productDetail-page">
        <div class="container">
            <div class="row product-detail-wrapper">
                <?php
                foreach($detail_product as $key => $pro)
                {
                ?>
                <form action="<?php echo BASE_URL?>giohang/themgiohang" method="post" >
                <input type="hidden" value="<?php echo $pro['id_product']?>"name="product_id">
                <input type="hidden" value="<?php echo $pro['name_product']?>"name="product_name">
                <input type="hidden" value="<?php echo $pro['img_product']?>"name="product_img">
                <input type="hidden" value="<?php echo $pro['price_product']?>"name="product_price">
                <input type="hidden" value="1"name="product_quantity">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row product-detail-main pr_style_01">
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="product-gallery">
                                <div class="product-image-detail box__product-gallery
                                    scroll hidden-xs">
                                    <ul id="sliderproduct" class="site-box-content slide_product">
                                        <li class="product-gallery-item gallery-item
                                            current " id="imgg1a">
                                            <img class="product-image-feature " src="<?php echo BASE_URL?>public/uploads/product/<?php echo $pro['img_product']?>"
                                            alt="<?php echo $pro['name_product']?>" grape="">
                                        </li>
                                    </ul>
                                    <div class="product-image__button">
                      <div id="product-zoom-in" class="product-zoom
                        icon-pr-fix" aria-label="Zoom in" title="Zoom in">
                        <span class="zoom-in" aria-hidden="true">
                          <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36 36" style="enable-background:new 0 0 36 36; width:
                            30px; height: 30px;" xml:space="preserve">
                            <polyline points="6,14 9,11 14,16 16,14 11,9
                              14,6 6,6">
                            </polyline>
                            <polyline points="22,6 25,9 20,14 22,16 27,11
                              30,14 30,6">
                            </polyline>
                            <polyline points="30,22 27,25 22,20 20,22
                              25,27 22,30 30,30">
                            </polyline>
                            <polyline points="14,30 11,27 16,22 14,20 9,25
                              6,22 6,30">
                            </polyline>
                          </svg>
                        </span>
                      </div>
                      <div class="gallery-index icon-pr-fix"><span class="current">1</span>
                        / <span class="total">8</span></div>
                    </div>
                                </div>
                            </div>
                            <div class="product-gallery-slide">
                  <div class="owl-carousel owl-theme owl-product-gallery-slide"">
                    <div class=" item">
                    <div class="product-gallery__thumb" >
                      <a class=" product-gallery__thumb-placeholder" href="javascript:void(0);"
                      data-image="<?php echo BASE_URL?>public/uploads/product/<?php echo $pro['img_product']?>" data-zoom-image="<?php echo BASE_URL?>public/uploads/product/<?php echo $pro['img_product']?>">
                      <img src="<?php echo BASE_URL?>public/uploads/product/<?php echo $pro['img_product']?>" data-image="<?php echo BASE_URL?>public/uploads/product/<?php echo $pro['img_product']?>"
                        alt="Nike Air Max 90 Essential" grape="">
                      </a>
                    </div>
                  </div>
                  

                </div>
              </div>
                        </div>
                        <!--  -->
                        <div class="col-md-5 col-sm-12 col-xs-12
                            product-content-desc" id="detail-product">
                            <div class="product-content-desc-1">
                                <!-- name product -->
                            <div class="product-title">
                                <h1><?php echo $pro['name_product']?></h1>
                                <span id="pro_sku">Nhà Sản Xuất:</span> <a href="#"><?php echo $pro['id_producer']?></a>
                            </div>
                            <!-- price  -->
                            <div class="product-price" id="price-preview"><span class="pro-price"><?php echo number_format($pro['price_product'],0,',','.').'VNĐ' ?></span></div>
                            <form id="add-item-form" action="" method="post" class="variants clearfix">
                            <div class="selector-actions">
                    <div class="quantity-area clearfix">
                      <input type="button" value="-" onclick="minusQuantity()" class="qty-btn">
                      <input type="text" id="quantity" name="quantity" value="1" min="1" class="quantity-selector">
                      <input type="button" value="+" onclick="plusQuantity()" class="qty-btn">
                    </div>
                    <div class="wrap-addcart clearfix">
                      <div class="row-flex">
                        
                          <?php 
                  if(!Session::get('member')==true){
                    ?>
                    <button type="button" class="button btn-addtocart addtocart-modal">
                      <a href="<?php echo BASE_URL?>khachhang/dangnhap">
                    Thêm vào
                    </a>
                  </button>
                    <button type="button" class="buy-now button" style="display: block;">
                    <a href="<?php echo BASE_URL?>khachhang/dangnhap">
                    Mua Ngay
                    </a>
                    </button>
                  <?php
                    }else{
                  ?>
        
                    <button type="submit" class="buy-now button" style="display: block;">  
                    Mua Ngay
                    </button>
                    </form>
                              
        
        <?php
          }
        ?>
        </div>
                    </div>
                  </div>
                            </form>
                            <div class="product-description">
                  <div class="title-bl">
                    <h2>Mô tả</h2>
                  </div>
                  <div class="description-content">
                    <div class="description-productdetail">
                      <p><span><?php echo $pro['title_product']?></span><br><br></p>
                      
                    </div>
                    <!-- <div class="" >
                    <span></span>
                </div> -->
                  </div>
                </div>
                
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12 ">
                <div class="description-productdetail">
                  <h3>Thông Số Kỹ Thuật</h3>
                <p><span><?php echo $pro['parameter']?></span></p>
                </div>
                </div>
                        <div class="col-md-7 col-sm-12 col-xs-12 article-area">
                        <div class="article-pages" >
              <?php echo $pro['content_product']?>
            </div>
                    </div>
                </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>






    <div class="product-zoom11">
     <div class="product-zom">
      <div class="divclose">
        <i class="fa fa-times-circle"></i>
      </div>
      <div class="owl-carousel owl-theme owl-product1">

        <div class="item"><img src="<?php echo BASE_URL?>public/uploads/product/<?php echo $pro['img_product']?>" alt="">
        </div>
        <div class="item"><img src="images/detailproduct/2.jpg" alt="">
        </div>
        



      </div>
     </div>
    </div>

</main>