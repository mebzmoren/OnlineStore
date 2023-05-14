  <!-- Shop -->
  <main class="shop-container">
    <!-- Shop Filter -->
    <section class="filter">
      <div class="header-filter" id="filter-btn">
        <h4 class="header-filter-name">Filters</h4>
        <i class="fa-solid fa-filter"></i>
      </div>
      <div class="bottom-filter" id="filters">
        <ul class="categories-filter">
          <li>
            <h4>Category 1</h4>
            <i class="fa-solid fa-angle-right"></i>
          </li>
          <li>
            <h4>Category 2</h4>
            <i class="fa-solid fa-angle-right"></i>
          </li>
          <li>
            <h4>Category 3</h4>
            <i class="fa-solid fa-angle-right"></i>
          </li>
          <li>
            <h4>Category 4</h4>
            <i class="fa-solid fa-angle-right"></i>
          </li>
          <li>
            <h4>Category 5</h4>
            <i class="fa-solid fa-angle-right"></i>
          </li>
          <li>
            <h4>Category 6</h4>
            <i class="fa-solid fa-angle-right"></i>
          </li>
          <li>
            <h4>Category 7</h4>
            <i class="fa-solid fa-angle-right"></i>
          </li>
        </ul>
        <div class="filter">
          <button id="price-btn">
            <h3>Price</h3>
            <i class="fa-solid fa-angle-down" id="price-toggle"></i>
          </button>
          <input type="text" placeholder="Price" class="price-filter">
        </div>
        <div class="filter">
          <button id="color-btn">
            <h3>Colors</h3>
            <i class="fa-solid fa-angle-down" id="color-toggle"></i>
          </button>
          <div class="colors color-filter">
            <div class="group">
              <button class="select red"></button>
              <h4>Red</h4>
            </div>
            <div class="group">
              <button class="select blue"></button>
              <h4>Blue</h4>
            </div>
            <div class="group">
              <button class="select yellow"></button>
              <h4>Yellow</h4>
            </div>
            <div class="group">
              <button class="select green"></button>
              <h4>Green</h4>
            </div>
            <div class="group">
              <button class="select white"></button>
              <h4>White</h4>
            </div>
          </div>
        </div>
        <div class="filter">
          <button id="size-btn">
            <h3>Size</h3>
            <i class="fa-solid fa-angle-down" id="size-toggle"></i>
          </button>
          <div class="sizes size-filter">
            <button class="select">
              <h4>XXS</h4>
            </button>
            <button class="select">
              <h4>XS</h4>
            </button>
            <button class="select">
              <h4>S</h4>
            </button>
            <button class="select">
              <h4>M</h4>
            </button>
            <button class="select">
              <h4>L</h4>
            </button>
            <button class="select">
              <h4>XL</h4>
            </button>
            <button class="select">
              <h4>XXL</h4>
            </button>
          </div>
        </div>
      </div>

    </section>
    <!-- Shop Products -->
    <section class="products">
      <div class="header-details">
        <h2 class="title">Shop Products</h2>
        <div class="sort">
          <button>New</button>
          <button>Popular</button>
        </div>
      </div>
      <!-- Product Grid -->
      <div class="product-grid grid-main">
        <?php
        $products = getTable("product");
        // $length = sizeof(mysqli_fetch_assoc(($products)));
        if (mysqli_num_rows($products) > 0) {
          foreach ($products as $item) {
            $member_id = $_SESSION['member_id'];
            $res = getLikedProduct('liked_product', $member_id, $item['id']);
            $check = mysqli_fetch_assoc($res);
        ?>
            <div class="content">
              <a href="view-products.php?product=<?php echo $item['name'] ?>">
                <form action="" method="POST" class="product-col">
                  <input type="hidden" name="product_id" value="<?php echo $item['id'] ?>">
                  <?php
                  if (mysqli_num_rows($res) > 0) {
                  ?>
                    <button name="unlike-product" type="submit" class="fa-solid fa-heart like active"></button>
                  <?php
                  } else {
                  ?>
                    <button name="like-product" type="submit" class="fa-solid fa-heart like"></button>
                  <?php
                  }
                  ?>
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
          echo "There are no products found.";
        }
        ?>
      </div>
      <div class="pagination">
        <ul class="page-select">
          <li class="select">1</li>
          <li class="select">2</li>
          <li class="select">3</li>
          <li class="select">4</li>
        </ul>
      </div>
    </section>
  </main>