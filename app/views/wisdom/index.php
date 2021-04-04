<?php require(APPROOT . '/views/inc/header.php'); ?>

<body class="home __home">
    <?php include_once (APPROOT . '/views/inc/navbar.php') ?>
    <div class="next_bg">
        <img src="https://images.pexels.com/photos/6045234/pexels-photo-6045234.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
            alt="if i knew">
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
            at the same time planning for future employment opportunities, so i had to create this <q>catalogue</q>
            of advice and information that other past-students had to pass to the younger generation
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
                <p><span class="alumni_title">1.</span> <i class="alumni_items"></i></p>
            </div>
        </div>
        <hr>
    </div>
    <?php require(APPROOT . '/views/inc/footer.php'); ?>
    <script type="text/javascript" src="<?php echo URLROOT; ?>/public/javascript/jquery.js"></script>
    <script type="text/javascript" src="<?php echo URLROOT; ?>/public/javascript/chuoni.min.js"></script>
</body>

</html>