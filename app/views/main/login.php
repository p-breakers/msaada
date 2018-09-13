<?php load::view("template::head") ?>
<?php load::view("template::navbar") ?>
<div class="inner_content">
    <!-- /inner_content_w3_agile_info-->
    <div class="inner_content_w3_agile_info">


        <div class="registration admin_agile">

            <div class="signin-form profile admin">
                <h2>Admin Login</h2>
                <div class="login-form">
                    <form action="main-page.html" method="post">
                        <input type="text" name="name" value="Username" required="">
                        <input type="password" name="password" value="Password" required="">
                        <div class="tp">
                            <input type="submit" value="LOGIN">
                        </div>

                    </form>
                </div>
                <div class="login-social-grids admin_w3">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    </ul>
                </div>

                <h6><a href="main-page.html">Back To Home</a><h6>


            </div>


        </div>
        <!-- //inner_content_w3_agile_info-->
    </div>
    <?php load::view("template::foot") ?>
