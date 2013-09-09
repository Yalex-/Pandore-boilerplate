<!DOCTYPE html>
<html>
    <head>
        <title>Pandore-boilerplate</title>
        <meta charset='utf-8' />
        <link rel='stylesheet' href="<?php echo $this->url('css/markdown.css'); ?>" />
    </head>
    <body>
        <div id="Header">
            <img src="<?php echo $this->url('img/pandore.png'); ?>" alt='pandore' />
            <h1>Pandore-boilerplate</h1>
        </div>
        <?php echo $this->view->content; ?>
    </body>
</htlm