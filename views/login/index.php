<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Promoflow</title>

    <!-- Link to Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Define the viewport settings for responsive design -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Include the CSS stylesheet for the home section -->
    <link rel="stylesheet" href="../../assets/css/login/sections/section-1-home.css?v=<?= $cssVersion ?>">
  </head>
  <body>
    <?php
    function get_file_version($relative_path) {
        $absolute_path = realpath(__DIR__ . '/' . $relative_path);
        return $absolute_path && file_exists($absolute_path) ? filemtime($absolute_path) : time();
    }

    $cssVersion = get_file_version('../../assets/css/login/sections/section-1-home.css');
    $jsVersion  = get_file_version('../../assets/js/user_manager/user.js');
    ?>

    <!-- Include the slider component for the index page using PHP -->
    <?php include "../../views/login/sections/section-1-home.php" ?>

    <!-- Include the JavaScript file for the home section -->
    <script src="../../assets/js/user_manager/user.js?v=<?= $jsVersion ?>" type="text/javascript"></script>
  </body>
</html>
