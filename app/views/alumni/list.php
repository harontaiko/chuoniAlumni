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
            contributions. All form of verification is highly appreciated, e.g &#40;biography and profile photo&#41;
        </p>
        <?php while($alumni = $data['alumni']->fetch_assoc()): ?>
        <p class="alumni_title">
            <span>-</span>
            <i
                class="alumni_items"><?php echo isset($alumni['owner_name']) ? htmlspecialchars($alumni['owner_name']): '' ?></i>
        </p>
        <?php endwhile ?>
    </section>
    <?php require(APPROOT . '/views/inc/footer.php'); ?>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/gh/harontaiko/chuoniAlumni@master/public/javascript/jquery.js"></script>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/gh/harontaiko/chuoniAlumni@master/public/javascript/chuoni.min.js"></script>
</body>

</html>