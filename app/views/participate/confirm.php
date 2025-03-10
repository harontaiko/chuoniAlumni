<?php require(APPROOT . '/views/inc/header.php'); ?>

<body class="postSuccess __postSuccess">
    <?php include_once (APPROOT . '/views/inc/navbar.php') ?>
    <section class="categories_top">
        <h3>if i knew then</h3>
        <p><?php echo ABOUT_US; ?></p>
    </section>
    <hr>
    <section class="container">
        <div class="alert alert_confirm">
            Do you want to submit your thoughts/advice as it is below?
            <div class="inner_confirm">
                <span>
                    <form action="<?php echo URLROOT; ?>/participate/confirmp" method="POST">
                        <input title="submit my data as i wrote it" type="submit" value="Yes" name="submit-true"
                            class="input_true">
                    </form>
                </span>
                <span>
                    <a href="javascript:history.go(-1)" title="i want to change something" class="input_false">No</a>
                </span>
            </div>
        </div>
        <hr>

        <p>Name: <span><?php echo isset($data['uname']) ? $data['uname'] : '' ?></span></p>
        <p>Category:
            <span><?php echo isset($data['participate-category']) ? $data['participate-category'] : '' ?></span>
        </p>
        <p>Position: <span><?php echo isset($data['position']) ? $data['position'] : '' ?></span></p>
        <p>Institution: <span><?php echo isset($data['institution']) ? $data['institution'] : '' ?></span></p>
        <p>Advice:
        <div class="advice_confirm">
            <td data-column="Your advice"><?php echo isset($data['advice-']) ? $data['advice-'] : '' ?></td>
        </div>
        </p>

    </section>
    <?php require(APPROOT . '/views/inc/footer.php'); ?>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/gh/harontaiko/chuoniAlumni@master/public/javascript/jquery.js"></script>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/gh/harontaiko/chuoniAlumni@master/public/javascript/chuoni.min.js"></script>
</body>

</html>