<article class="<?php echo($post_status); ?>">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <h2><a href="<?php echo($post_link); ?>"><?php echo($post_title); ?></a></h2>

            <small><?php echo($published_date); ?> in <a href="<?php echo($post_category_link); ?>"><?php echo($post_category); ?></a> </small>

            <p>
                <?php echo strtr(substr($post_content,0,200), array(
                    '<strong>'=>'', '</strong>'=>'', '<em>'=>'', '</em>'=>'', '<b>'=>'', '</b>'=>'', '<i>'=>'', '</i>'=>'', '<h2>'=>'', '</h2>'=>'', '<h3>'=>'', '</h3>'=>''
                )); ?>...
            </p>

            <p>
                <a class="btn btn-default" href="<?php echo($post_link); ?>">Continue Reading</a>
            </p>

            <hr>
        </div>
    </div>
</article>
