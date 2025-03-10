<?php require(APPROOT . '/views/inc/header.php'); ?>

<body class="careers __careers">
    <?php include_once (APPROOT . '/views/inc/navbar.php') ?>
    <section class="categories_top">
        <h3>if i knew then</h3>
        <p><?php echo ABOUT_US; ?></p>
    </section>
    <hr>
    <section class="family_">
        <h2>chapter 2</h2>
        <h3>Careers</h3>
        <img src="https://cdn.pixabay.com/photo/2017/07/28/09/34/sand-2548132_960_720.jpg" alt="sand pit">
        <div class="next_chapter">
            <h3><i>chapter 3</i></h3>
            <h4><i><a href="<?php echo URLROOT; ?>/wisdom/success">Success</a></i></h4>
        </div>
        <div class="prev_chapter">
            <h3><i>chapter 1</i></h3>
            <h4><i><a href="<?php echo URLROOT; ?>/wisdom/family_friends">Family &amp; Friends</a></i></h4>
        </div>
    </section>
    <hr>
    <section class="container">
        <?php while($row = $data['row']->fetch_assoc()): ?>
        <div class="advice__">
            <h3 class="advice_owner"><?php echo isset($row['owner_name']) ? $row['owner_name']: '' ?> ~
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