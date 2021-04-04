<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <meta name="twitter:site" content="@chuoniAlumni">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="canonical" href="<?php echo "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" />
    <meta name="msapplication-TileColor" content="<?php echo THEME_COLOR ?>">
    <meta name="og:title" content="Chuoni Alumni | Chuoni Alumni" />
    <meta name="og:name" content="Chuoni Alumni | Chuoni Alumni" />
    <meta name="theme-color" content="<?php echo THEME_COLOR ?>">
    <meta name="og:url" content="<?php echo "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" />
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/stylesheets/css/style.css" />
    <link rel="icon" href="<?php echo URLROOT; ?>/public/images/icons/favicon.ico" type="image/ico" />
    <link rel="shortcut icon" href="<?php echo URLROOT; ?>/public/images/icons/favicon.ico" type="image/ico" />
    <title>if i knew then - Page Not Found </title>
</head>
<body class="notFound __notFound">
<header id="chuoni-header">
    <nav class="main_nav">
        <ul class="nav_items">
         <li class="nav_item"><a href="<?php echo URLROOT; ?>" class="nav_item_item" id="intro">introduction</a></li>
          <div class="dropdown" style="float:right;">
          <li class="nav_item dropbtn"><a href="<?php echo URLROOT; ?>/wisdom/chapters" id="chapters" class="nav_item_item">Chapters</a></li>
        <div class="dropdown-content">
                <a href="<?php echo URLROOT; ?>/wisdom/family_friends">Family &amp; Friends</a>
                <a href="<?php echo URLROOT; ?>/wisdom/careers">Careers</a>
                <a href="<?php echo URLROOT; ?>/wisdom/success">Success</a>
                <a href="<?php echo URLROOT; ?>/wisdom/leadership">Leadership</a>
                <a href="<?php echo URLROOT; ?>/wisdom/wealth">Wealth</a>
                <a href="<?php echo URLROOT; ?>/wisdom/age">Growing Old</a>
                <a href="<?php echo URLROOT; ?>/wisdom/life_lessons">Life Lessons</a>
                <a href="<?php echo URLROOT; ?>/wisdom/turning_points">Turning Points</a>
                <a href="<?php echo URLROOT; ?>/wisdom/wealth">Wealth</a>
            </div>
        </div>
         <li class="nav_item"><a href="<?php echo URLROOT; ?>/wisdom/participate" id="participate" class="nav_item_item">Participate</a></li>
         <li class="nav_item"><a href="<?php echo URLROOT; ?>/alumni/list" id="alumni" class="nav_item_item">Alumni</a></li>
         <li class="nav_item"><a href="<?php echo URLROOT; ?>external/donate" id="donate" class="nav_item_item">Donate</a></li>
        </ul>
    </nav>
</header>
<div class="container">
    <div class="illustration_">
    <img src="https://i.imgur.com/FOeYt4E.png" alt="not found">
    <h3 class="illustration_caption">This Page is Buried in the Sand</h3>
    <p>You have never seen an ostrich head. Whenever you’re around it seems ostriches are avoiding your gaze.
    You came on this trip specifically to see an ostrich head, but here is this ostrich right in front of you,
    head invisible. You may never see an ostrich head. Try using the links above
    </p>
    </div>
</div>
    
<?php require(APPROOT . '/views/inc/footer.php'); ?>
    <script type="text/javascript" src="<?php echo URLROOT; ?>/public/javascript/jquery.js"></script>
    <script type="text/javascript" src="<?php echo URLROOT; ?>/public/javascript/chuoni.min.js"></script>
</body>
</html>