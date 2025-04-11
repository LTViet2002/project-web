<div class="container">
<div class="content">

<section class="signin ">
        <div class="container">
            <div class="signin-left">
                <div class="sign-title">
                    <h1>Cập Nhật Thông Tin</h1>
                </div>
            </div>
            <div class="signin-right " id="a-sign">
            <?php 
                    foreach($member as $key => $member){
                ?>
            <form accept-charset="UTF-8" auto-complete="off" action="<?php echo BASE_URL?>khachhang/update_khachhang/<?php echo $member['id_member']?>" enctype="multipart/form-data" class="contact-form" method="post">
            <div class="contact-form">
                
                  <div class="row">
                      <div class="col-sm-6 col-xs-12">
                      <div class="input-group">
                      <p><img src="<?php echo BASE_URL ?>/public/uploads/member/<?php echo $member['img_member'] ?>" height="100" width="100"></p>
                      <input type="file" id="uploadfile"  name="img_member" onchange="readURL(this);" />
                   
                      </div>
                    </div>    
            <div class="contact-form">
                  <div class="row">
                      <div class="col-sm-6 col-xs-12">
                      <div class="input-group">
                        <input required="" type="text" value="<?php echo $member['username_member']?>" class="form-control" required name="username_member" maxlength="40"
                          placeholder="Nhập Họ Tên">
                      </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                      <div class="input-group">
                        <input required="" type="text" value="<?php echo $member['phone_member']?>" class="form-control" required name="phone_member" maxlength="11"
                          placeholder="Nhập Số Điện Thoại">
                      </div>
                    </div>
                    
                    <div class="col-sm-12 col-xs-12">
                      <div class="input-group">
                        <input required="" type="text" value="<?php echo $member['address_member']?>" class="form-control" required name="address_member"
                          placeholder="Nhập Địa Chỉ Nhà">
                      </div>
                    </div>
                    
                    
                    <div class="col-sm-12">
                      <button class="button dark" name="capnhat" type="submit">Cập Nhật</button>
                      
                    </div>
                  </div>
                </div>
                <?php
                    }
                ?>
              </form>
            </div>
        </div>
    </section>    

</div>
</div>