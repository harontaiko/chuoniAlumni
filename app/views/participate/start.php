<?php require(APPROOT . '/views/inc/header.php'); ?>

<body class="participate __participate">
    <?php include_once (APPROOT . '/views/inc/navbar.php') ?>
    <section class="categories_top">
        <h3>if i knew then</h3>
        <p><?php echo ABOUT_US; ?></p>
    </section>
    <hr>
    <section class="participate_">
        <h2>Participate</h2>
        <form action="" method="POST" id="participate_submit">
            <div class="input_wrapp">
                <label for="participate-category">Chapter Category</label>
                <select name="participate-category">
                    <option value="opt-1">Select chapter category</option>
                    <option value="family_friends">Family &amp; Friends</option>
                    <option value="careers">Careers</option>
                    <option value="success">Success</option>
                    <option value="leadership">Leadership</option>
                    <option value="wealth">Wealth</option>
                    <option value="growing_old">Growing Old</option>
                    <option value="life_lessons">Life Lessons</option>
                    <option value="turning_points">Turning Points</option>
                    <option value="spirituality">Spirituality</option>
                </select>
            </div>
            <div class="input_wrapp">
                <label for="fname">First Name</label>
                <input type="text" name="fname" placeholder="Provide your first name" class="input_item" required>
            </div>
            <div class="input_wrapp">
                <label for="lname">Last Name</label>
                <input type="text" name="lname" placeholder="Provide your last name" class="input_item" required>
            </div>
            <div class="input_wrapp">
                <label for="institution">Former Institution</label>
                <input type="text" name="institution" placeholder="Provide your former institution" class="input_item"
                    required>
            </div>
            <div class="input_wrapp">
                <label for="position">Current Position</label>
                <input type="text" name="position" placeholder="Enter your current position e.g accountant"
                    class="input_item" required>
            </div>
            <div class="input_wrapp">
                <label for="position">Your advice</label>
                <textarea name="advice-" id="advice-val" cols="30" rows="10"></textarea>
            </div>
            <input title="submit your advice" type="submit" value="Submit Your Advice" name="participate-submit"
                class="participate-btn">
        </form>
    </section>
    <?php require(APPROOT . '/views/inc/footer.php'); ?>
    <script type="text/javascript" src="<?php echo URLROOT; ?>/public/javascript/jquery.js"></script>
    <script type="text/javascript" src="<?php echo URLROOT; ?>/public/javascript/chuoni.min.js"></script>
</body>

</html>