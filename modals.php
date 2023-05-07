
  <!-- User Hamburger -->
  <div class="user-pop">
    <div class="user-header">
      <button class="exit" id="exit-btn">
        <i class="fa-solid fa-xmark"></i>
      </button>
    </div>
    <div class="user-content">
      <img src="assets/images/cart.svg" alt="">
      <p>It looks you haven't started yet. Start shopping with us!</p>
      <div class="actions">
        <button class="member" id="member-btn">Become a Member</button>
        <button id="seller-btn">Become a Seller</button>
      </div>
    </div>
  </div>

  <!-- Categories Hamburger -->
  <div class="categories">
    <div class="left">
      <div class="cate-item">
        <h3>Category 1</h3>
        <i class="fa-solid fa-arrow-right-long"></i>
      </div>
      <div class="cate-item">
        <h3>Category 2</h3>
        <i class="fa-solid fa-arrow-right-long"></i>
      </div>
      <div class="cate-item">
        <h3>Category 3</h3>
        <i class="fa-solid fa-arrow-right-long"></i>
      </div>
      <div class="cate-item">
        <h3>Category 4</h3>
        <i class="fa-solid fa-arrow-right-long"></i>
      </div>
      <div class="cate-item">
        <h3>Category 5</h3>
        <i class="fa-solid fa-arrow-right-long"></i>
      </div>
    </div>
    <div class="vertical-line"></div>
    <div class="right">
      <a href="#">Category 1</a>
      <a href="#">Category 2</a>
      <a href="#">Category 3</a>
      <a href="#">Category 4</a>
      <a href="#">Category 5</a>
      <a href="#">Category 6</a>
      <a href="#">Category 7</a>
      <a href="#">Category 8</a>
      <a href="#">Category 9</a>
      <a href="#">Category 10</a>
      <a href="#">Category 11</a>
      <a href="#">Category 12</a>
      <a href="#">Category 13</a>
      <a href="#">Category 14</a>
      <a href="#">Category 15</a>
      <a href="#">Category 16</a>
      <a href="#">Category 17</a>
    </div>
  </div>

  <!-- Shopping Cart Hamburger -->
  <div class="shopping-cart">
    <div class="shopping-cart-header">
      <span class="title">Buy Orders</span>
      <div class="total">
        <h5>Total:</h5>
        <h5>$575.00</h5>
      </div>
    </div>
    <div class="shopping-cart-items">
      <div class="item-row">
        <span class="img"></span>
        <div class="item-details">
          <span class="item-name">Lorem ipsum dolor sit amet.</span>
          <div class="group">
            <div class="details-group">
              <span class="detail-name">Size:</span>
              <span class="value">XL</span>
            </div>
            <span class="details-group">
              <span class="detail-name">Color:</span>
              <span class="value">Black</span>
            </span>
          </div>
          <div class="cancel-group">
            <span class="price">$115.00</span>
            <button class="cancel">Cancel Order</button>
          </div>
        </div>
      </div>
      <div class="item-row">
        <span class="img"></span>
        <div class="item-details">
          <span class="item-name">Lorem ipsum dolor sit amet.</span>
          <div class="group">
            <div class="details-group">
              <span class="detail-name">Size:</span>
              <span class="value">XL</span>
            </div>
            <span class="details-group">
              <span class="detail-name">Color:</span>
              <span class="value">Black</span>
            </span>
          </div>
          <div class="cancel-group">
            <span class="price">$115.00</span>
            <button class="cancel">Cancel Order</button>
          </div>
        </div>
      </div>
      <div class="item-row">
        <span class="img"></span>
        <div class="item-details">
          <span class="item-name">Lorem ipsum dolor sit amet.</span>
          <div class="group">
            <div class="details-group">
              <span class="detail-name">Size:</span>
              <span class="value">XL</span>
            </div>
            <span class="details-group">
              <span class="detail-name">Color:</span>
              <span class="value">Black</span>
            </span>
          </div>
          <div class="cancel-group">
            <span class="price">$115.00</span>
            <button class="cancel">Cancel Order</button>
          </div>
        </div>
      </div>
    </div>
    <div class="actions">
      <button id="order-exit">Back</button>
      <!-- <button>Place Order</button> -->
    </div>
  </div>

  <!-- Login Form -->
  <main class="login hero">
    <div class="wrapper">
      <form action="#">
        <div class="login-header">
          <span class="logo">TRIP.</span>
          <div class="exit" id="login-exit">
            <i class="fa-solid fa-xmark"></i>
          </div>
        </div>
        <div class="details">
          <div class="desc">
            <span class="title">Sign in</span>
            <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum exercitationem,
              libero possimus natus vel soluta.</p>
          </div>
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
            <span id="register-btn">Register</span>
          </div>
          <div class="actions">
            <button type="submit">Sign in</button>
          </div>
        </div>
      </form>
    </div>
  </main>

  <!-- Register Form -->
  <main class="register hero">
    <div class="wrapper">
      <form action="shop.php" method="post">
        <div class="login-header">
          <span class="logo">TRIP.</span>
          <div class="exit" id="register-exit">
            <i class="fa-solid fa-xmark"></i>
          </div>
        </div>
        <div class="details">
          <div class="desc">
            <span class="title">Becoming a Member</span>
            <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum exercitationem,
              libero possimus natus vel soluta.</p>
          </div>
          <div class="fields">
            <div class="field input">
              <label for="username">Username*</label>
              <input id="username" type="username" class="form-control" name="username" required autocomplete="email"
                placeholder="Enter Username" autofocus>
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
              <label for="pwdrepeat">Confirm Password*</label>
              <input id="pwdrepeat" type="confirmPassword" class="form-control" name="pwdrepeat" required autocomplete="pwdrepeated"
                placeholder="Re-Enter Password" autofocus>
            </div>
          </div>
          <div class="redirect">
            <span class="text">Already have an account?</span>
            <span class="sign-in" id="signin-btn">Sign in</span>
          </div>
          <div class="actions">
            <button type="submit">Register</button>
          </div>
        </div>
      </form>
    </div>
  </main>

  <!-- Seller Form -->
  <main class="seller hero">
    <div class="wrapper">
      <form action="#">
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
          <div class="fields">
            <div class="field input">
              <label for="username">Username*</label>
              <input id="username" type="email" class="form-control" name="username" required autocomplete="username"
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
              <label for="pwdrepeat">Confirm Password*</label>
              <input id="pwdrepeat" type="pwdrepeat" class="form-control" name="pwdrepeat" required autocomplete="pwdrepeated"
                placeholder="Re-Enter Password" autofocus>
            </div>
          </div>
          <div class="redirect">
            <span class="text">Already have an account?</span>
            <span class="sign-in" id="seller-redirect-btn">Sign in</span>
          </div>
          <div class="actions">
            <button type="submit">Register</button>
          </div>
        </div>
      </form>
    </div>
  </main>