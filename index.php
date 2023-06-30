<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" href="./dist/css/index.css"> -->
    <link rel="stylesheet" type="text/less" href=<?php echo "./assets/less/index.less?a=".time()?>>
    <script>less = {env: 'development'};</script>
    <script src=<?php echo "./assets/js/less.js"?>></script>
    <script>
        less.watch();
        // !!! Open Dev tools in Chrome -> Network -> Disable cache to make it work
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Hello</title>
</head>
<body>
    
<?php 
    include 'header.php';
    include 'banner.php';
    include 'projects.php';
?>

<div style="height: 500px;"></div>

</body>

</html>