<?php require(APPROOT . '/views/inc/header.php'); ?>

<body class="careers __careers">
    <?php include_once (APPROOT . '/views/inc/navbar.php') ?>
    <section class="categories_top">
        <h3>if i knew then</h3>
        <p><?php echo ABOUT_US; ?></p>
    </section>
    <hr>
    <section class="family_">
        <h2>chapter 6</h2>
        <h3>Growing Old</h3>
        <img src="https://cdn.pixabay.com/photo/2013/11/28/10/02/camera-219958_960_720.jpg" alt="vintage film">
        <div class="next_chapter">
            <h3><i>chapter 7</i></h3>
            <h4><i><a href="<?php echo URLROOT; ?>/wisdom/life_lessons">Life Lessons</a></i></h4>
        </div>
        <div class="prev_chapter">
            <h3><i>chapter 5</i></h3>
            <h4><i><a href="<?php echo URLROOT; ?>/wisdom/wealth">Wealth</a></i></h4>
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