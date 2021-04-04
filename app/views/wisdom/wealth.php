<?php require(APPROOT . '/views/inc/header.php'); ?>

<body class="careers __careers">
    <?php include_once (APPROOT . '/views/inc/navbar.php') ?>
    <section class="categories_top">
        <h3>if i knew then</h3>
        <p><?php echo ABOUT_US; ?></p>
    </section>
    <hr>
    <section class="family_">
        <h2>chapter 5</h2>
        <h3>Wealth</h3>
        <img src="https://cdn.pixabay.com/photo/2017/08/30/07/52/money-2696219_960_720.jpg"
            alt="martin luther king junior">
        <div class="next_chapter">
            <h3><i>chapter 6</i></h3>
            <h4><i><a href="<?php echo URLROOT; ?>/wisdom/age">Growing Old</a></i></h4>
        </div>
        <div class="prev_chapter">
            <h3><i>chapter 4</i></h3>
            <h4><i><a href="<?php echo URLROOT; ?>/wisdom/leadership">Leadership</a></i></h4>
        </div>
    </section>
    <hr>
    <section class="container">
        <div class="advice__">
            <h3 class="advice_owner">Karl</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero omnis est esse minus eligendi optio
                nostrum vel rerum vitae earum.</p>
        </div>
        <hr>
    </section>
    <?php require(APPROOT . '/views/inc/footer.php'); ?>
    <script type="text/javascript" src="<?php echo URLROOT; ?>/public/javascript/jquery.js"></script>
    <script type="text/javascript" src="<?php echo URLROOT; ?>/public/javascript/chuoni.min.js"></script>
</body>

</html>