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
    <div class='form-grid'>
        <!-- Signup Form -->
        <form class="form-horizontal" action="">
            <div class="form-group">
                <label class="control-label col-sm-2" for="fname">First Name:</label>
                <div class="col-sm-10">          
                  <input type="firstname" class="form-control" id="fname" placeholder="First Name" name="fname">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="lname">Last Name:</label>
                <div class="col-sm-10">          
                  <input type="lastname" class="form-control" id="lname" placeholder="Last Name" name="lname">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="grade">Grade</label>
                <div class="col-sm-10">          
                  <select class="form-control" id="grade" placeholder="Grade" name="grade">
                    <option value="pre-k">Pre-K</option>
                    <option value="first grade">1</option>
                    <option value="second grade">2</option>
                    <option value="third grade">3</option>
                    <option value="fourth grade">4</option>
                    <option value="fifth grade">5</option>
                    <option value="sixth grade">6</option>
                    <option value="seventh grade">7</option>
                    <option value="eighth grade">8</option>
                    <option value="nineth grade">9</option>
                    <option value="tenth grade">10</option>
                    <option value="eleventh grade">11</option>
                    <option value="twelfth grade">12</option>
                </select>
                </div>
              </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Email:</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
              </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="phone">Phone Number:</label>
                <div class="col-sm-10">          
                  <input type="phonenumber" class="form-control" id="phone" placeholder="Phone Number" name="phone">
                </div>
              </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="pwd">Password:</label>
              <div class="col-sm-10">          
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
              </div>
            </div>
            <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                  <label><input type="checkbox" name="remember"> Remember me</label>
                  <!-- Inline Styles -->
                  <a class='right-text' href=''style='font-style: italic;'>Already have an account?</a>
                </div>
              </div>
            </div>
            <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
              </div>
            </div>
        </form>
        <!-- Signup Form -->
    </div>
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