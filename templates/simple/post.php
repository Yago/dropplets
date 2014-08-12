<div class="container">
    <article class="single <?php echo($post_status); ?>">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 post">
                <h1><?php echo($post_title); ?></h1>
                <small><?php echo($published_date); ?> in <a href="<?php echo($post_category_link); ?>"><?php echo($post_category); ?></a> </small>

                <br><br>

                <?php echo($post_content); ?>
                
                <hr>

                <div id="disqus_thread"></div>
                    <script type="text/javascript">
                        var disqus_shortname = 'yagosnotes'; // required: replace example with your forum shortname

                        /* * * DON'T EDIT BELOW THIS LINE * * */
                        (function() {
                            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                        })();
                    </script>
            </div>
        </div>
    </article>
</div>
