<div class="container">
    <article class="single <?php echo($post_status); ?>">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 post">
                <h1><?php echo($post_title); ?></h1>
                <small><?php echo($published_date); ?> in <a href="<?php echo($post_category_link); ?>"><?php echo($post_category); ?></a> </small>

                <br><br>

                <?php echo($post_content); ?>
                
                <br>
                <a class="btn btn-default pull-right" href="<?php echo($blog_url); ?>">More Articles</a>
            </div>
        </div>
    </article>
</div>
