<?php require(APPROOT . '/views/inc/header.php'); ?>

<body class="contact __contact">
    <?php include_once (APPROOT . '/views/inc/navbar.php') ?>
    <section class="categories_top">
        <h3>if i knew then</h3>
        <p><?php echo ABOUT_US; ?></p>
    </section>
    <hr>
    <section class="contact_us container">
        <div class="contact_info">
            <p>Any inquiries or questions can be addressed to:</p>
            <address>
                <p>Email: <span class="info_item">info@chuonialumni.co.ke</span></p>
                <p>Phone: <span class="info_item">254 790 108762</span></p>
            </address>
        </div>
    </section>
    <?php require(APPROOT . '/views/inc/footer.php'); ?>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/gh/harontaiko/chuoniAlumni@master/public/javascript/jquery.js"></script>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/gh/harontaiko/chuoniAlumni@master/public/javascript/chuoni.min.js"></script>
</body>

</html>