


<main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo BASE_URL?>blog">Bài Viết</a></li>
        <li class="breadcrumb-item"><a href="#">Cập nhật danh mục bài viết</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Thêm Danh Mục Bài Viết</h3>
          <div class="tile-body">
            <div class="row element-button">
            <?php
// gọi lại dữ liệu cũ để có thể edit lại
    foreach($blog as $key => $bl){
?>
            <form class="row" action="<?php echo BASE_URL?>blog/updateblog/<?php echo $bl['id_blog'] ?>" method="post" enctype="multipart/form-data">
              <div class="form-group col-md-12">
                <label class="control-label">Tên Bài Viết</label>
                <input type="name" value="<?php echo $bl['name_blogs'] ?>" class="form-control" placeholder="Nhập Tên Bài Viết" id="name_blogs" name="name_blogs">
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Hình Ảnh</label>
                <div id="myfileupload">
                   <input type="file" value="<?php echo $bl['img'] ?>" id="uploadfile" name="img" onchange="readURL(this);" />
                   <p><p><img src="<?php echo BASE_URL ?>/public/uploads/blog/<?php echo $bl['img'] ?>" height="100" width="100"></p></p>
                </div>
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Tiêu Đề</label>
                <textarea name="title_blog" id="title_blog"  rows="5" style="resize: none" class="form-control"><?php echo $bl['title_blog']?></textarea>
                <script>
                                    CKEDITOR.replace('title_blog');
                                </script>
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Nội Dung</label>
                <textarea name="content_blog" id="content_blog"  rows="5" style="resize: none" class="form-control"><?php echo $bl['content_blog']?></textarea>
                <script>
                                    CKEDITOR.replace('content_blog');
                                </script>
              </div>
              <div class="form-group col-md-12">
                <label for="id_category">Danh Mục Bài Viết:</label>
                <select class="form-control" name="id_category_blog" style="max-width: 50%;">
                <option><-- Chọn Danh Mục --></option>
                    <?php
                    foreach ($cate as $key => $cate){
                    ?>
                    <option <?php if($cate['id_category_blog']==$bl['id_category_blog']){ echo 'selected'; }?>
                        value="<?php echo $cate['id_category_blog']?>"
                        ><?php echo $cate['name_category_blog']?></option>
                        
                    <?php
                    }
                    ?>
                
              </select>
              </div>
              <div class="form-group col-md-3">
          <button class="btn btn-save" type="submit">Lưu lại</button>
          <a class="btn btn-cancel" href="<?php echo BASE_URL?>blog">Hủy bỏ</a>
          <div>
        </div>
        </form>
        <?php 
}
 ?>
  </main>
