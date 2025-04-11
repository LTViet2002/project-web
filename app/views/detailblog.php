<div class="container">
    <div class="row">
        <div class="col-md-3 d-none d-sm-block d-sm-none d-md-block">
            <div class="sidebar-blog">
                <div class="news-latest">
                    <div class="sidebarblog-title title_block">
                        <h2>Bài viết mới nhất</h2>
                    </div>
                    <div class="list-news-latest layered">
                        <div class="item-article clearfix">
                            <?php
                                foreach($blog as $key => $blog)
                                {
                            ?>
                            <div class="post-image">
                                <a href="">
                                    <img src="<?php echo BASE_URL?>/public/uploads/blog/<?php echo $blog['img']?>">
                                </a>
                            </div>
                        <div class="post-content">
                            <h3>
                                <a href="<?php echo BASE_URL?>sanpham/chitiettintuc/<?php echo $blog['id_blog']?>"><?php echo $blog['name_blogs']?></a>
                            </h3>
                            <span><?php echo substr($blog['title_blog'],0,25).'...' ?></span>
                            <!-- <span class="author">
                                <a href="">Be Nguyen</a>
                            </span>
                            <span class="date">
                                11.06.2019
                            </span> -->
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9 col-sm-12 col-xs-12 article-area">
        <div class="content-page">
          <div class="article-content">
              <?php
                foreach ($detail_blog as $key => $blogs)
                {    
              ?>
            <div class="box-article-heading clearfix">
              <h1 class="sb-title-article"><?php echo $blogs['name_blogs'] ?></h1>
              <ul class="article-info-more" style="padding-left: 0">
                <!-- <li> Người viết: Be Nguyen lúc <time pubdate="" datetime="2019-06-11">11.06.2019</time></li> -->
                <li><i class="far fa-file-alt"></i><a style="color:black;text-decoration: none;" href="#"> Tin tức</a> </li>
              </ul>
            </div>
            <div class="article-pages">
              <?php echo $blogs['content_blog']?>
            </div>
            <?php   
        }
        ?>
          </div>
        </div>
      </div>
    </div>
</div>