<!-- Seller Profile -->
<main class="seller-profile">
  <!-- Seller Sidebar -->
  <aside class="side-bar">
    <span class="title">
      <i class="fa-solid fa-store"></i>
      <h3 class="name">Order</h3>
    </span>
    <ul class="options">
      <li>
        <a href="seller-products.php" class="active">My Products</a>
      </li>
      <li>
        <a href="add-product.php">Add New Product</a>
      </li>
    </ul>
  </aside>
  <!-- Seller Products -->
  <div class="sell-container list">
    <!-- Shop Products -->
    <section class="products">
      <div class="header-details">
        <h2 class="title">Your List of Products</h2>
        <button id="discount-btn">Discount Products</button>
      </div>
      <!-- Product Grid -->
      <div class="product-grid">
        <?php
        $products = getProdBySeller($seller_id);

        if (mysqli_num_rows($products) > 0) {
          foreach ($products as $item) {
        ?>
            <div class="content">
              <a href="view-products.php?product=<?php echo $item['name'] ?>">
                <form action="" method="POST" class="product-col">
                  <input type="hidden" name="product_id" value="<?php echo $item['id'] ?>">
                  <div class="top">
                    <img src="assets/uploads/<?php echo $item["image"]; ?>" alt="<?php echo $item["name"]; ?>" class="img">
                  </div>
                  <div class="bottom">
                    <div class="product-details">
                      <div class="title">
                        <h4><?php echo $item["name"]; ?></h4>
                      </div>
                      <div class="rating-group" style="display:flex; gap:7em;">
                        <div class="rating">
                          <i class="fa-solid fa-star"></i>
                          <h5>5.0 (#)</h5>
                        </div>
                        <h2 class="price"><?php echo "$" . $item["price"]; ?></h2>
                      </div>
                    </div>
                  </div>
                </form>
              </a>
            </div>
        <?php
          }
        } else {
          echo '<span class="error-stmt"> There are no products found. </span>';
        }
        ?>
      </div>
      <!-- <div class="pagination">
          <ul class="page-select">
            <li class="select">
              <i class="fa-solid fa-angle-left"></i>
            </li>
            <li class="select">1</li>
            <li class="select">2</li>
            <li class="select">3</li>
            <li class="select">4</li>
            <li class="select">
              <i class="fa-solid fa-angle-right"></i>
            </li>
          </ul>
        </div> -->
    </section>
  </div>
</main>
