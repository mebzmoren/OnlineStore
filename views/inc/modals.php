  <!-- Guest Hamburger -->
  <div class="guest user-pop">
    <div class="user-header">
      <button class="exit" id="guest-exit-btn">
        <i class="fa-solid fa-xmark"></i>
      </button>
    </div>
    <div class="user-content">
      <img src="assets/images/cart.svg" alt="">
      <p>It looks you haven't started yet. Start shopping with us!</p>
      <div class="actions">
        <a href="member-register.php">Become a Member</a>
        <a href="seller-register.php">Become a Seller</a>
      </div>
    </div>
  </div>

  <!-- Logged Hamburger -->
  <div class="logged user-pop">
    <div class="user-header">
      <button class="exit" id="logged-exit-btn">
        <i class="fa-solid fa-xmark"></i>
      </button>
    </div>
    <div class="user-content">
      <div class="actions">
        <a href="#">Member Profile</a>
        <a href="core/member-logout.php">Logout</a>
      </div>
    </div>
  </div>

  <!-- Seller Hamburger -->
  <div class="seller user-pop">
    <div class="user-header">
      <button class="exit" id="seller-exit-btn">
        <i class="fa-solid fa-xmark"></i>
      </button>
    </div>
    <div class="user-content">
      <div class="actions">
        <a href="#">Seller Profile</a>
        <a href="core/seller-logout.php">Logout</a>
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
      <?php
        $category = getTable("category");

        if(mysqli_num_rows($category) > 0) {
          foreach ($category as $item) {
            ?>
              <a href="#">
                <?php echo $item['name']; ?>
              </a>
            <?php
          }
        } else {
          echo "There are no categories found.";
        }
      ?>
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
