
<?php
    require_once('landing_header.php');
?>
    <!-- <body id="page"> -->

        <ul class="cb-slideshow">

            <li><span>Image 01</span><div><h3>Welcome·2·EventZ</h3></div></li>
            <li><span>Image 02</span><div><h3>Find·events</h3></div></li>
            <li><span>Image 03</span><div><h3>bal·ance</h3></div></li>
            <li><span>Image 04</span><div><h3>Share·events</h3></div></li>
            <li><span>Image 05</span><div><h3>Plan·All·Events</h3></div></li>
            <li><span>Image 06</span><div><h3>Enjoy·'em·All</h3></div></li>

        <div class="slide1" id="intro1">

        <div class="row">
            <div class="large-4 columns left">
                <h4 align="left">Welcome to EventZ</h4>
                <h3 align="left">Find events</h3>
                <h2 align="left">Share events</h2>
                <h1 align="left">Create events</h1><br/>
            </div>
            <br/><br/><br/><br/><br/><br/><br/>
            <a href="<?php echo $login_url; ?>" class="button">Login with Facebook</a>

            <div class="large-2 columns center">
                &nbsp;
            </div>

            <div class="large-6 columns right">
                &nbsp;
            </div>
        </div>

        </ul>
    </div>

    <?php
        require_once('footer.php');
    ?>
