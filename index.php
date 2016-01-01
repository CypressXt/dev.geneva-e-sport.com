<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="markdown.css">
        <title>Dev @ GES</title>
        <style>
            body{
                max-width: 1000px;
                margin-left: auto;
                margin-right: auto;
            }
        </style>
    </head>
    <body>
        <article class="markdown-body">
<?php
    $url = 'https://github.com/CypressXt/IT_Geneva-e-sport/blob/master/readme.md';
    $content = file_get_contents($url);
    $first_step = explode('<article class="markdown-body entry-content" itemprop="mainContentOfPage">', $content);
    $second_step = explode("</div>", $first_step[1]);
    echo $second_step[0];
 ?>
        </article>
    </body>
</html>
