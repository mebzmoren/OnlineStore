<!-- Product Page -->
<main class="products-container">
  <div class="product">
    <aside class="product-pic">
      <img src="assets/uploads/<?php echo $product['image'] ?>" class="img"></img>
    </aside>
    <article class="product-details">
      <!-- Breadcrumbs -->
      <ul class="breadcrumbs">
        <li>
          <a href="index.php">
            <span class="name">Home</span>
            <i class="fa-solid fa-angle-right seperator"></i>
          </a>
        </li>
        <li>
          <a href="shop.php">
            <span class="name">Shop</span>
            <i class="fa-solid fa-angle-right seperator"></i>
          </a>
        </li>
        <li>
          <a href="view-products.php?product=<?php echo $product['name'] ?>" class="active">
            <span class="name"><?php echo $product['name'] ?></span>
          </a>
        </li>
      </ul>
      <!-- Product Details -->
      <div class="details">
        <h2 class="product-title">
          <?php echo $product['name'] ?>
        </h2>
        <div class="group">
          <div class="rating" style="display: flex; flex-direction: row;">
            <div class="stars">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4 class="value">5.0</h4>
          </div>
          <h4 class="reviews">2437 Reviews</h4>
          <h4 class="sold">4523 Sold</h4>
        </div>
        <div class="price">
          <div class="discount">no discount</div>
          <span>$<?php echo $product['price'] ?></span>
        </div>
        <hr>
      </div>

      <div class="bottom-details">
        <!-- Product Options -->
        <div class="product-options">
          <div class="row-col">
            <span class="title">Sizes Available</span>
            <div class="group">
              <?php
              $product_result = getProdByName('product', $product_name);
              $product = mysqli_fetch_assoc($product_result);
              $product_sizes = explode(',', $product['sizes']);
              foreach ($product_sizes as $item) {
              ?>
                <span class="icon"><?php echo $item; ?></span>
              <?php
              }
              ?>
            </div>
          </div>
          <div class="row-col color">
            <span class="title">Colors Available</span>
            <div class="group">
              <?php
              $product_result = getProdByName('product', $product_name);
              $product = mysqli_fetch_assoc($product_result);
              $product_colors = explode(',', $product['colors']);
              foreach ($product_colors as $item) {
                $lower_case_item = strtolower($item);
              ?>
                <span class="icon <?php echo $lower_case_item ?>"></span>
              <?php
              }
              ?>
            </div>
          </div>
        </div>

        <!-- Product Description -->
        <div class="description">
          <h3>Description</h3>
          <p><?php echo $product['description'] ?></p>
        </div>

        <!-- Product Extra Details -->
        <div class="extra-details">
          <div class="content-col">
            <div class="icon">
              <i class="fa-regular fa-credit-card"></i>
            </div>
            <h3>Secure Payment</h3>
          </div>
          <div class="content-col">
            <div class="icon">
              <i class="fa-solid fa-truck"></i>
            </div>
            <h3>Free Shipping</h3>
          </div>
          <div class="content-col">
            <div class="icon">
              <i class="fa-solid fa-tags"></i>
            </div>
            <h3>Size & Fit</h3>
          </div>
        </div>

        <!-- Product Actions -->
        <div class="actions">
          <button id="buy-btn">Buy Now</button>
        </div>
      </div>
    </article>
  </div>
</main>

<!-- Rating System -->
<div class="product-rating">
  <div class="title-group">
    <div class="title">Product Reviews</div>
    <div class="horizontal-line"></div>
  </div>
  <div class="rating-header">
    <button class="sub-header" id="rating-btn">Write a Review</button>
    <div class="rating-total">
      <span class="total">5.0</span>
      <div class="group">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
        </div>
        <p class="review-total">152 Reviews</p>
      </div>
    </div>
  </div>
  <!-- Review Rating Grid -->
  <div class="rating-grid">
    <?php
    $product_id = $product['id'];
    $reviews = getProdById("review", $product_id);

    if (mysqli_num_rows($reviews) > 0) {
      foreach ($reviews as $item) {
    ?>
        <div class="user-rating">
          <div class="heading-details">
            <div class="left">
              <div class="user-icon"></div>
              <div class="group">
                <span class="name"><?php echo $item['member_name'] ?></span>
                <p class="timestamp"><?php echo $item['last_modified'] ?></p>
              </div>
            </div>
            <div class="right">
              <div class="rate-group">
                <div class="stars">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
                <span class="num"><?php echo $item['rating'] . '.0' ?></span>
              </div>
            </div>
          </div>
          <div class="rating-details">
            <span class="title"><?php echo $item['review_title'] ?><span>
                <p class="description"><?php echo $item['review_message'] ?></p>
          </div>
        </div>

    <?php
      }
    } else {
      echo "There are no product ratings. Be the first!";
    }
    ?>
  </div>
</div>
<script src="assets/javascript/products.js"></script>
<script src="selector.js"></script>