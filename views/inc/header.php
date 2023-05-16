  <!-- Header -->
  <header>
    <div class="container">
      <div class="left">
        <a href="index.php" class="logo">TRIP</a>
        <ul class="nav">
          <li>
            <a href="index.php">Home</a>
          </li>
          <div class="sep">/</div>
          <li id="cate-btn" class="toggle-color">
            <span class="name">Categories</span>
            <i class="fa-solid fa-angle-up" id="cate-toggle"></i>
          </li>
          <div class="sep">/</div>
          <li>
            <a href="shop.php">Shop</a>
          </li>
        </ul>
      </div>
      <div class="right">
        <form class="search" method="get" action="shop.php">
          <input type="search" name="search" placeholder="Search Product">
          <button type="submit">
            <i class="fa-solid fa-magnifying-glass"></i>
          </button>
        </form>
        <?php
        if (isset($_SESSION['member_name'])) {
        ?>
          <div class="icons">
            <?php
            if (isset($_SESSION['member_name'])) {
            ?>
              <div class="icon" id="logged-btn">
                <i class="fa-regular fa-user"></i>
              </div>
              <div class="icon" id="shop-btn">
                <i class="fa-solid fa-scroll"></i>
                <div class="item-count">
                  <h4>0</h4>
                </div>
              </div>
            <?php
            } else {
            ?>
              <div class="icon" id="guest-btn">
                <i class="fa-regular fa-user"></i>
              </div>
            <?php
            }
            ?>
          </div>
        <?php
        } elseif (isset($_SESSION['seller_name'])) {
        ?>
          <div class="icons">
            <?php
            if (isset($_SESSION['seller_name'])) {
            ?>
              <div class="icon" id="seller-btn">
                <i class="fa-regular fa-user"></i>
              </div>
            <?php
            } else {
            ?>
              <div class="icon" id="guest-btn">
                <i class="fa-regular fa-user"></i>
              </div>
            <?php
            }
            ?>
          </div>
        <?php
        } else {
        ?>
          <div class="icons">
            <div class="icon" id="guest-btn">
              <i class="fa-regular fa-user"></i>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </header>

















  <div class="icon" id="logged-btn" style="display:none;">
    <i class="fa-regular fa-user"></i>
  </div>
  <div class="icon" id="seller-btn" style="display:none;">
    <i class="fa-regular fa-user"></i>
  </div>
  <div class="icon" id="shop-btn" style="display:none;">
    <i class="fa-solid fa-cart-shopping"></i>
    <div class="item-count">
      <h4>0</h4>
    </div>
  </div>
  <div style="display:none;" class="icon" id="guest-btn">
    <i class="fa-regular fa-user"></i>
  </div>