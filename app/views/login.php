
<section>

    <div class="container">

      <div class="row">
      <div class="col-md-6 col-sm-12 col-xs-12  wrapbox-content-page-contact">
          <div class="header-page-contact clearfix">
            <h1>Đăng Ký</h1>
          </div>
          <div class="box-send-contact">
            <div id="col-left contactFormWrapper menuList-links">
            <?php
	if(!empty($_GET['msg'])){
		$msg = unserialize(urldecode($_GET['msg']));
		foreach ($msg as $key => $value){
			echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
		}
	}
	?> 
              <form accept-charset="UTF-8" auto-complete="off" action="<?php echo BASE_URL?>khachhang/insert_khachhang" class="contact-form" method="post">
                <div class="contact-form">
                  <div class="row">
                      <div class="col-sm-6 col-xs-12">
                      <div class="input-group">
                        <input required="" type="text" class="form-control" required name="username_member" maxlength="40"
                          placeholder="Nhập Họ Tên">
                      </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                      <div class="input-group">
                        <input required="" type="text" class="form-control" required name="phone_member" maxlength="11"
                          placeholder="Nhập Số Điện Thoại">
                      </div>
                    </div>
                    <div class="col-sm-12 col-xs-12">
                      <div class="input-group">
                        <input required="" type="text" class="form-control" required name="email_member"
                          placeholder="Nhập Email Đăng Nhập">
                      </div>
                    </div>
                    <div class="col-sm-12 col-xs-12">
                      <div class="input-group">
                        <input required="" type="text" class="form-control" required name="address_member"
                          placeholder="Nhập Địa Chỉ Nhà">
                      </div>
                    </div>
                    <div class="col-sm-12 col-xs-12">
                      <div class="input-group">
                        <input required="" type="password" class="form-control" required minlength="8" maxlength="30"  name="password_member"
                          placeholder="Nhập Mật Khẩu">
                      </div>
                    </div>
                    <div class="col-sm-12 col-xs-12">
                      <div class="input-group">
                        <input required="" type="password" class="form-control" required required minlength="8" maxlength="30"
                          placeholder="Nhập Lại Mật Khẩu">
                      </div>
                    </div>
                    
                    <div class="col-sm-12">
                      <button class="button dark" name="dangky" type="submit">Đăng Ký</button>
                      
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12  wrapbox-content-page-contact">
          <div class="header-page-contact clearfix">
            <h1>Đăng Nhập</h1>
          </div>
          <?php
	if(!empty($_GET['mg'])){
		$mg = unserialize(urldecode($_GET['mg']));
		foreach ($mg as $key => $value){
			echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
		}
	}
	?> 
          <div class="box-send-contact">
            <div id="col-left contactFormWrapper menuList-links">
              <form action="<?php echo BASE_URL?>khachhang/login_member" class="contact-form" method="post">
                <div class="contact-form">
                  <div class="row">
                    <div class="col-sm-12 col-xs-12">
                      <div class="input-group">
                        <input required="" type="text" class="form-control" required name="username"
                          placeholder="Nhập Email Đăng Nhập">
                      </div>
                    </div>
                    <div class="col-sm-12 col-xs-12">
                      <div class="input-group">
                        <input required="" type="password" class="form-control" required name="password"
                          placeholder="Nhập Mật Khẩu">
                      </div>
                    </div>
                    
                    <div class="col-sm-12">
                      <button class="button dark" type="submit">Đăng Nhập</button>
                      
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>


    </div>

  </section>