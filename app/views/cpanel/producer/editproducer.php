
<main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="#">nhà sản xuất</a></li>
        <li class="breadcrumb-item"><a href="#">Thêm nhà sản xuất</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Cập nhật Nhà Sản Xuất</h3>
          <div class="tile-body">
            <div class="row element-button">
            <?php
    foreach($prod as $key => $prod){
?>
            <form class="row"action="<?php echo BASE_URL?>producer/updateproducer/<?php echo $prod['id_producer'] ?>" method="post">
              <div class="form-group col-md-12">
                <label class="control-label">Tên nhà sản xuất</label>
                <input type="text" class="form-control" value="<?php echo $prod['name_producer'] ?>" placeholder="Nhập Tên Nhà Sản Xuất" id="name_producer" name="name_producer">
              </div>
              <div class="form-group col-md-12">
                                <label class="control-label">Mô tả sản phẩm</label>
                                <textarea class="form-control" name="content_producer" id="mota"><?php echo $prod['content_producer'] ?></textarea>
                                <script>
                                    CKEDITOR.replace('mota');
                                </script>
                            </div>
              <div class="form-group col-md-3">
          <button class="btn btn-save" type="submit">Lưu lại</button>
          <a class="btn btn-cancel" href="<?php echo BASE_URL?>producer">Hủy bỏ</a>
          <div>
        </div>
    </form>
    <?php 
}
 ?>
  </main>
