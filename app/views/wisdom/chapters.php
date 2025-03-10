<?php require(APPROOT . '/views/inc/header.php'); ?>

<body class="chapters __chapters">
    <?php include_once (APPROOT . '/views/inc/navbar.php') ?>
    <section class="categories_top">
        <h3>if i knew then</h3>
        <p><?php echo ABOUT_US; ?></p>
    </section>
    <hr>
    <section class="categories_list">
        <h2>Chapters</h2>
        <div class="chapter_category_item">
            <h3>chapter 1</h3>
            <p><a href="<?php echo URLROOT; ?>/wisdom/family_friends">Family &amp; Friends</a></p>
        </div>
        <div class="chapter_category_item">
            <h3>chapter 2</h3>
            <p> <a href="<?php echo URLROOT; ?>/wisdom/careers">Careers</a></p>
        </div>
        <div class="chapter_category_item">
            <h3>chapter 3</h3>
            <p><a href="<?php echo URLROOT; ?>/wisdom/success">Success</a></p>
        </div>
        <div class="chapter_category_item">
            <h3>chapter 4</h3>
            <p><a href="<?php echo URLROOT; ?>/wisdom/leadership">Leadership</a></p>
        </div>
        <div class="chapter_category_item">
            <h3>chapter 5</h3>
            <p><a href="<?php echo URLROOT; ?>/wisdom/wealth">Wealth</a></p>
        </div>
        <div class="chapter_category_item">
            <h3>chapter 6</h3>
            <p><a href="<?php echo URLROOT; ?>/wisdom/age">Growing Old</a></p>
        </div>
        <div class="chapter_category_item">
            <h3>chapter 7</h3>
            <p><a href="<?php echo URLROOT; ?>/wisdom/life_lessons">Life Lessons</a></p>
        </div>
        <div class="chapter_category_item">
            <h3>chapter 8</h3>
            <p><a href="<?php echo URLROOT; ?>/wisdom/turning_points">Turning Points</a></p>
        </div>
        <div class="chapter_category_item">
            <h3>chapter 8</h3>
            <p><a href="<?php echo URLROOT; ?>/wisdom/spirituality">Spirituality</a></p>
        </div>
    </section>
    <?php require(APPROOT . '/views/inc/footer.php'); ?>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/gh/harontaiko/chuoniAlumni@master/public/javascript/jquery.js"></script>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/gh/harontaiko/chuoniAlumni@master/public/javascript/chuoni.min.js"></script>
</body>

</html>