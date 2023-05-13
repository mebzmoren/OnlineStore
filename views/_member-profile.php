<!-- Profile Page -->
<main class="profile-container">
  <div class="profile-details">
    <div class="profile-pic"></div>
    <div class="name">
      <span class=""><?php echo $_SESSION['member_name'] ?></span>
    </div>
    <span class="email"><?php echo $_SESSION['member_email'] ?></span>
  </div>
  <div class="profile-actions">
    <ul class="selectors">
      <li>
        <span class="title" id="liked-selector">Liked Products</span>
        <!-- <span class="count">1</span> -->
      </li>
      <li>
        <span class="title" id="buy-selector">Buy Orders</span>
        <!-- <span class="count">1</span> -->
      </li>
    </ul>
    <div class="buy-order product-grid grid-main">
      <?php
      $member_id = $_SESSION['member_id'];
      $bill = getProdByMemberId('bill', $member_id);
      if (mysqli_num_rows($bill) > 0) {
        foreach ($bill as $item) {
      ?>
          <a href="view-products.php?product=<?php echo $item['product_name'] ?>" class="product-col">
            <div class="top">
              <img src="assets/uploads/<?php echo $item['image']; ?>" alt="<?php echo $item['product_name']; ?>" class="img">
            </div>
            <div class="bottom">
              <div class="product-details">
                <div class="title">
                  <h4><?php echo $item['product_name']; ?></h4>
                </div>
                <div class="rating-group">
                  <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <h5>5.0 (#)</h5>
                  </div>
                  <h2 class="price"><?php echo "$" . $item['total'] . '.00'; ?></h2>
                </div>
              </div>
            </div>
          </a>
      <?php
        }
      } else {
        echo '<span class="error-stmt"> You have not bought any products yet. </span>';
      }
      ?>
    </div>
  </div>
</main>
<script src="assets/javascript/selector.js"></script>