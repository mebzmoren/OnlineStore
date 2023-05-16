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
      <?php
      $member_id = $_SESSION['member_id'];
      $bill = getProdByMemberId('bill', $member_id);
      $total_bought = 0;
      if (mysqli_num_rows($bill) > 0) {
        foreach ($bill as $item) {
          $total_bought += 1;
          ?>
          <?php
        }
      }
      ?>
      <li>
        <span class="buy-selector title">Buy Orders</span>
        <span class="count"><?php echo $total_bought ?></span>
      </li>
    </ul>
      <form action="" method="post"  class="grid-member">
          <?php
          if (isset($_SESSION['member_id'])) {
            $member_id = $_SESSION['member_id'];
            $bill = getProdByMemberId('bill', $member_id);
            if (mysqli_num_rows($bill) > 0) {
              foreach ($bill as $item) {
          ?>
              <div class="item-row">
                <img src="assets/uploads/<?php echo $item['image'] ?>" class="img"></img>
                <div class="item-details">
                  <div class="item-name">
                    <?php echo $item['product_name'] ?> *
                    <span class="qty"><?php echo $item['quantity_bought'] ?></span>
                  </div>
                  <div class="group">
                    <div class="details-group">
                      <span class="detail-name">Size:</span>
                      <span class="value"><?php echo $item['size'] ?></span>
                    </div>
                    <span class="details-group">
                      <span class="detail-name">Color:</span>
                      <span class="value"><?php echo $item['color'] ?></span>
                    </span>
                  </div>
                  <div class="cancel-group">
                    <input type="hidden" name="product_id" value="<?php echo $item['product_id'] ?>">
                    <input type="hidden" name="quantity" value="<?php echo $item['quantity_bought'] ?>">
                    <span class="price"><?php echo '$' . $item['total'] . '.00' ?></span>
                    <button name="cancel-order" class="cancel">Cancel Order</button>
                  </div>
                </div>
              </div>
              <?php
              }
              ?>
            <?php
            } else {
              echo '<span class="error-stmt"> You have not bought any products yet. </span>';
            }
            ?>
          <?php
          } else {
            echo '<span class="error-stmt"> You are not logged in. </span>';
          }
          ?>
      </form>
    </div>
  </div>
  <div class="profile-actions">
    <ul class="selectors">
      <?php
      $member_id = $_SESSION['member_id'];
      $liked_products = getProdByMemberId('liked_product', $member_id);
      $total_liked = 0;
      if (mysqli_num_rows($liked_products) > 0) {
        foreach ($liked_products as $item_check) {
          $total_liked += 1;
      ?>
      <?php
        }
      }
      ?>
      <li>
        <span class="liked-selector title">Liked Products</span>
        <span class="count"><?php echo $total_liked ?></span>
      </li>
    </ul>
    <div class="product-grid">
      <?php
      $member_id = $_SESSION['member_id'];
      $liked_products = getProdByMemberId('liked_product', $member_id);
      if (mysqli_num_rows($liked_products) > 0) {
        foreach ($liked_products as $item_check) {
          $res = getProductById('product', $item_check['product_id']);
          $product = mysqli_fetch_array($res);
      ?>
          <a href="view-products.php?product=<?php echo $product['name'] ?>" class="product-col">
            <form action="" method="POST">
              <input type="hidden" name="product_id" value="<?php echo $product['id'] ?>">
              <div class="top">
                <img src="assets/uploads/<?php echo $product["image"]; ?>" alt="<?php echo $product["name"]; ?>" class="img">
              </div>
              <div class="bottom">
                <div class="product-details">
                  <div class="title">
                    <h4><?php echo $product["name"]; ?></h4>
                  </div>
                  <div class="rating-group" style="display:flex; gap:7em;">
                    <div class="rating">
                      <i class="fa-solid fa-star"></i>
                      <h5>5.0 (#)</h5>
                    </div>
                    <h2 class="price"><?php echo "$" . $product["price"]; ?></h2>
                  </div>
                </div>
              </div>
            </form>
          </a>
        <?php
        }
        ?>

      <?php
      } else {
        echo '<span class="error-stmt"> You have not liked any products. </span>';
      }
      ?>
    </div>
</main>
  <!-- <script src="assets/javascript/selector.js" type="text/javascript"></script> -->