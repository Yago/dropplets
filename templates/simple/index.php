<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        
        <title><?php echo($page_title); ?></title>
        
        <?php echo($page_meta); ?>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="<?php echo($template_dir_url); ?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo($template_dir_url); ?>css/dropplets.css">
        <link href='//fonts.googleapis.com/css?family=Merriweather:400,300,700' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
        
        <?php get_header(); ?>
    </head>

    <body>
        <div class="container">

            <?php if($is_home): ?>
                <h1 class="text-center">Yago's notes</h1>
            <?php endif ?>
        
            <?php echo($content); ?>
            
            <br><br><br>
            <?php get_footer(); ?>

        </div>

        <script src="<?php echo($template_dir_url); ?>js/rainbow.js"></script>
        <script src='//192.168.0.14:3000/socket.io/socket.io.js'></script>
<script>var ___socket___ = io.connect('http://192.168.0.14:3000');</script>
<script src='//192.168.0.14:3001/client/browser-sync-client.0.7.4.js'></script>
    </body>
</html>
