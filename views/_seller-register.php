  <!-- Seller Form -->
  <main class="seller hero">
    <div class="wrapper">
      <form action="#" method="post">
        <div class="login-header">
          <span class="logo">TRIP.</span>
          <div class="exit" id="seller-exit">
            <i class="fa-solid fa-xmark"></i>
          </div>
        </div>
        <div class="details">
          <div class="desc">
            <span class="title">Becoming a Seller</span>
            <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum exercitationem,
              libero possimus natus vel soluta.</p>
          </div>
          <?php
            if(isset($error)) {
              echo '<span class="error-msg"> Error: ' . $error . '</span>';
            }
          ?>
          <div class="fields">
            <div class="field input">
              <label for="username">Username*</label>
              <input id="username" type="username" class="form-control" name="username" required autocomplete="username"
                placeholder="Username" autofocus>
            </div>
            <div class="field input">
              <label for="email">Email Address*</label>
              <input id="email" type="email" class="form-control" name="email" required autocomplete="email"
                placeholder="Enter Email Address" autofocus>
            </div>
            <div class="field input">
              <label for="password">Password*</label>
              <input id="password" type="password" class="form-control" name="password" required autocomplete="password"
                placeholder="Enter Password" autofocus>
            </div>
            <div class="field input">
              <label for="confirmPassword">Confirm Password*</label>
              <input id="confirmPassword" type="password" class="form-control" name="confirmPassword" required autocomplete="pwdrepeated"
                placeholder="Re-Enter Password" autofocus>
            </div>
            <div class="field input type" style="display:none;">
              <label for="user_type">User Type*</label>
              <input id="user_type" type="text" class="form-control" name="user_type" required autocomplete="user_type" value="seller"
                placeholder="Re-Enter Password" autofocus>
            </div>
          </div>
          <div class="redirect">
            <span class="text">Already have an account?</span>
            <a href="login.php">Sign in</a>
          </div>
          <div class="actions">
            <button name="submit" type="submit">Register</button>
          </div>
        </div>
      </form>
    </div>
  </main>