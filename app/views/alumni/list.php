<?php require(APPROOT . '/views/inc/header.php'); ?>
<body class="alumnilist __alumnilist">
<?php include_once (APPROOT . '/views/inc/navbar.php') ?>
<section class="categories_top">
    <h3>if i knew then</h3>
    <p><?php echo ABOUT_US; ?></p>
</section>
<hr>
<section class="categories_list">
    <h2>Contributing Alumni</h2>
    <p class="alumni_desc">
        All Alumni are welcome to share their thoughts and advice here
        visit the <a href="<?php echo URLROOT; ?>/participate/start">participate</a> page to make your
        contributions. All form of verification is highly appreciated, e.g &#40;biography and photo&#41;
    </p>
    <p><span class="alumni_title">1.</span> <i class="alumni_items"></i></p>
</section>
<?php require(APPROOT . '/views/inc/footer.php'); ?>
    <script type="text/javascript" src="<?php echo URLROOT; ?>/public/javascript/jquery.js"></script>
    <script type="text/javascript" src="<?php echo URLROOT; ?>/public/javascript/chuoni.min.js"></script>
</body>
</html>