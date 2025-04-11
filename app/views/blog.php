<div class="container">
    <div class="row">
        <div class="col-md-9 col-sm-12 col-xs-12">
            <div class="heading-page clearfix">
                <h1>Tin tức</h1>
            </div>
            <div class="blog-content">  
                <div class="list-article-content blog-posts">
            <article class="blog-loop" >
            <?php 
                foreach($blog_id as $key => $blog){
            ?>
                <div class="blog-post row" style="margin-top: 10px">  
                  <div class="col-md-4 col-xs-12 col-sm-12">
                    <a href="<?php echo BASE_URL?>sanpham/chitiettintuc/<?php echo $blog['id_blog'] ?>" class="blog-post-thumbnail" rel="nofollow">
                      <img src="<?php echo BASE_URL?>/public/uploads/blog/<?php echo $blog['img']?>" >
                    </a>
                  </div>
                  <div class="col-md-8 col-xs-12 col-sm-12">
                    <h3 class="blog-post-title">
                      <a href="<?php echo BASE_URL?>sanpham/chitiettintuc/<?php echo $blog['id_blog'] ?>"><?php echo $blog['name_blogs']?></a>
                    </h3>
                    <p class="entry-content"><?php echo substr($blog['title_blog'],0,100).'...' ?></p>
                  </div>
                </div>	
            <?php } ?>					
            </article>
                </div>
            </div>
        </div>
    </div>
</div>