<?php require(APPROOT . '/views/inc/header.php'); ?>
<body class="home __home">
    <?php include_once (APPROOT . '/views/inc/navbar.php') ?>
    <div class="next_bg">
        <img src="https://images.pexels.com/photos/6045234/pexels-photo-6045234.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="if i knew">
        <p class="inline-img-text">If only i knew then</p>
    </div>
    <div class="container">
    <div class="site_info"><?php echo ABOUT_US; ?></div>
    <hr>
    </div>
    <script type="text/javascript" src="<?php echo URLROOT; ?>/public/javascript/jquery.js"></script>
    <script type="text/javascript" src="<?php echo URLROOT; ?>/public/javascript/chuoni.min.js"></script>
</body>
</html>