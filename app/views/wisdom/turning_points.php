<?php require(APPROOT . '/views/inc/header.php'); ?>

<body class="careers __careers">
    <?php include_once (APPROOT . '/views/inc/navbar.php') ?>
    <section class="categories_top">
        <h3>if i knew then</h3>
        <p><?php echo ABOUT_US; ?></p>
    </section>
    <hr>
    <section class="family_">
        <h2>chapter 8</h2>
        <h3>Turning Points</h3>
        <img src="https://cdn.pixabay.com/photo/2019/12/09/19/39/landscape-4684217_960_720.jpg"
            alt="Landscape climate change">
        <div class="next_chapter">
            <h3><i>chapter 9</i></h3>
            <h4><i><a href="<?php echo URLROOT; ?>/wisdom/spirituality">Spirituality</a></i></h4>
        </div>
        <div class="prev_chapter">
            <h3><i>chapter 7</i></h3>
            <h4><i><a href="<?php echo URLROOT; ?>/wisdom/life_lessons">Life Lessons</a></i></h4>
        </div>
    </section>
    <hr>
    <section class="container">
        <?php while($row = $data['row']->fetch_assoc()): ?>
        <div class="advice__">
            <h3 class="advice_owner"><?php echo isset($row['owner_name']) ? $row['owner_name']: '' ?>~
                <?php echo isset($row['owner_institution']) ? $row['owner_institution']: '' ?></h3>
            <p><?php echo isset($row['advice_text']) ? htmlspecialchars_decode($row['advice_text']): '' ?></p>
        </div>
        <?php endwhile ?>
        <hr>
    </section>
    <?php require(APPROOT . '/views/inc/footer.php'); ?>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/gh/harontaiko/chuoniAlumni@master/public/javascript/jquery.js"></script>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/gh/harontaiko/chuoniAlumni@master/public/javascript/chuoni.min.js"></script>
</body>

</html>