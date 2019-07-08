<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="stylesheet" type="text/css" href=
    <?php
    if($content_view=="hero_view.php"){
        echo '"/css/hero_css.css"';
    }else{
        echo '"/css/main.css"';
    }
    ?>
    />
    <meta charset="utf-8">
    <script type="text/javascript" src="/js/main.js"></script>
    <title>The boys</title>
</head>
<body>
    <?php include 'application/view/'.$content_view; ?>
</div>
</body>
</html>