<?php require(APPROOT . '/views/inc/header.php'); ?>

<body class="home __home">
    <?php include_once (APPROOT . '/views/inc/navbar.php') ?>
    <div class="next_bg">
        <img src="https://cdn.pixabay.com/photo/2021/04/01/20/49/trees-6143244_960_720.jpg" alt="if i knew">
        <p class="inline-img-text">If only i knew then</p>
    </div>
    <div class="container">
        <div class="site_info"><?php echo ABOUT_US; ?></div>
        <hr>
    </div>
    <div class="container">
        <p class="default_intro">
            Through out the years, unwitting freshmen join univerties in different parts of the country,
            the uncertainity ahead is usually overwhelming and many times it becomes a journey of
            balancing between unproductive relationships, getting meals and studying for exams while
            at the same time planning for the future, all of these is not easy, so i had to create this <q>catalogue</q>
            of advice and information that other past-students had to pass to the younger generation. And although
            one requires more than advice in this country, sometimes all you need is that `bit of information` to get
            you going.
        </p>
        <hr>
    </div>
    <div class="container">
        <div class="chapter_list">
            <h2>Chapters</h2>
            <div class="inner_chapter">
                <p><span class="chapter_title">chapter 1</span> <i class="chapter_items">Family &amp; Friends</i></p>
                <p><span class="chapter_title">chapter 2</span> <i class="chapter_items">Careers</i></p>
                <p><span class="chapter_title">chapter 3</span> <i class="chapter_items">Success</i></p>
                <p><span class="chapter_title">chapter 4</span> <i class="chapter_items">Leadership</i></p>
                <p><span class="chapter_title">chapter 5</span> <i class="chapter_items">Wealth</i></p>
                <p><span class="chapter_title">chapter 6</span> <i class="chapter_items">Growing Old</i></p>
                <p><span class="chapter_title">chapter 7</span> <i class="chapter_items">Life Lessons</i></p>
                <p><span class="chapter_title">chapter 8</span> <i class="chapter_items">Turning Points</i></p>
                <p><span class="chapter_title">chapter 9</span> <i class="chapter_items">Spirituality</i></p>
            </div>
            <hr>
        </div>
    </div>
    <div class="container">
        <div class="alumni_list">
            <h2>Alumni</h2>
            <div class="inner_alumni">
                <?php while($alumni = $data['alumni']->fetch_assoc()): ?>
                <p><span class="alumni_title">-</span> <i
                        class="alumni_items"><?php echo isset($alumni['owner_name']) ? htmlspecialchars($alumni['owner_name']): '' ?></i>
                </p>
                <?php endwhile ?>
            </div>
        </div>
        <hr>
    </div>
    <?php require(APPROOT . '/views/inc/footer.php'); ?>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/gh/harontaiko/chuoniAlumni@master/public/javascript/jquery.js"></script>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/gh/harontaiko/chuoniAlumni@master/public/javascript/chuoni.min.js"></script>
</body>

</html>