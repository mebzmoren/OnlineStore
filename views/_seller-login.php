  <!-- Login Form -->
  <main class="login hero">
    <div class="wrapper">
      <form action="#" method="post">
        <div class="login-header">
          <span class="logo">TRIP.</span>
          <div class="exit" id="login-exit">
            <i class="fa-solid fa-xmark"></i>
          </div>
        </div>
        <div class="details">
          <div class="desc">
            <span class="title">Seller Log In</span>
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
              <label for="email">Email Address</label>
              <input id="email" type="email" class="form-control" name="email" required autocomplete="email"
                placeholder="Enter Email Address" autofocus>
            </div>
            <div class="field input">
              <label for="password">Password</label>
              <input id="password" type="password" class="form-control" name="password" required autocomplete="password"
                placeholder="Enter Password" autofocus>
            </div>
          </div>
          <div class="redirect">
            <span class="text">Don't have an account?</span>
            <a href="seller-register.php">Register</a>
          </div>
          <div class="actions">
            <button name="submit" type="submit">Sign in</button>
          </div>
        </div>
      </form>
    </div>
  </main>
