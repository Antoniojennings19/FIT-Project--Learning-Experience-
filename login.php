<?php
    include './View/header.php';
    include './View/navbar.php';
?>

<!-- Introduction -->
    <div class='intro-grid'>
        <img class='banner-pic' src='./View/Public/Images/Banner.jpg'>
    </div>
<!-- Introduction -->

<!-- Form -->
    <!-- Login Form -->
        <div class='login-form-grid'>
            <form action="#" method="post">
                <div class="log-form">
                    <div class="user">
                        <label for="uname"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="user" required>
                    </div>

                    <div class="pass">
                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="pass" required>
                    </div>

                    <div class="log">
                        <label>
                            <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label>

                        <button type="submit" name='login-submit'>Login</button>
                    </div>
                </div>

                <div class="forgot-password">
                    <span class="psw"><a href="#">Forgot password?</a></span>
                </div>
            </form>
        </div>
    <!-- Login Form -->
<!-- Form -->

<!-- Footer -->

    <div class='footer-grid'>
        <!-- Footer Left -->
            <div class='footer-left-grid'>
                <img class='cloud-pic'src='./View/Public/Images/cloud.png'>
            </div>
        <!-- Footer Left -->

        <!-- Footer Right -->
            <div class='footer-right-button-grid'>
                <button class='support-btn btn btn-primary'>Support</button>
            </div>
        <!-- Footer Right -->
    </div>
</div>
<!-- Footer -->
</body>
</html>