<?php require(APPROOT . '/views/inc/header.php'); ?>

<body class="family __family">
    <?php include_once (APPROOT . '/views/inc/navbar.php') ?>
    <section class="categories_top">
        <h3>if i knew then</h3>
        <p><?php echo ABOUT_US; ?></p>
    </section>
    <hr>
    <section class="family_">
        <h2>chapter 1</h2>
        <h3>family &amp; friends</h3>
        <img src="https://cdn.pixabay.com/photo/2015/07/27/18/32/siblings-862967_960_720.jpg" alt="siblings">
        <div class="next_chapter">
            <h3><i>chapter 2</i></h3>
            <h4><i><a href="<?php echo URLROOT; ?>/wisdom/careers">Careers</a></i></h4>
        </div>
    </section>
    <hr>
    <section class="container">
        <div class="advice__">
            <h3 class="advice_owner">Joan Bulkey</h3>
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