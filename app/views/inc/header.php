<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
    <meta http-equiv="Cache-control" content="public">
    <meta http-equiv="Cache-control" content="private">
    <meta http-equiv="Cache-control" content="no-cache">
    <meta http-equiv="Cache-control" content="no-store">
    <meta name="description" content="<?php echo SITE_DESCRIPTION; ?>" />
    <meta name="author" content="<?php echo SITE_AUTHOR; ?>" />
    <meta name="creator" content="<?php echo SITE_AUTHOR; ?>" />
    <meta name="og:type" content="<?php echo SITE_TYPE; ?>" />
    <meta name="robots" content="index, follow">
    <meta property="og:image" content="<?php echo URLROOT; ?>/public/images/thumbnail/">
    <meta property="og:url" content="<?php echo OG_URL ?>">
    <meta name="twitter:site" content="@chuonialumni">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="canonical" href="<?php echo "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" />
    <meta name="msapplication-TileColor" content="<?php echo THEME_COLOR ?>">
    <meta name="og:title" content="Chuoni Alumni | Chuoni Alumni" />
    <meta name="og:name" content="Chuoni Alumni | Chuoni Alumni" />
    <meta name="theme-color" content="<?php echo THEME_COLOR ?>">
    <meta name="og:url" content="<?php echo "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" />
    <?php if (strpos($_SERVER['REQUEST_URI'], "participate/start") !== false) :  ?>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <?php endif ?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/stylesheets/css/style.css" />
    <link rel="icon" href="<?php echo URLROOT; ?>/public/images/icons/favicon.ico" type="image/ico" />
    <link rel="shortcut icon" href="<?php echo URLROOT; ?>/public/images/icons/favicon.ico" type="image/ico" />
    <title> <?php echo $data['title']; ?> </title>
</head>