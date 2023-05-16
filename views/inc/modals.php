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
        <a href="member-profile.php">Member Profile</a>
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
        <a href="seller-products.php">Seller Profile</a>
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
      $category = getTableData("category");

      if (mysqli_num_rows($category) > 0) {
        foreach ($category as $item) {
      ?>
          <a href="shop-category.php?category=<?= $item['id']; ?>">
            <?php echo $item['name']; ?>
          </a>
      <?php
        }
      } else {
        echo '<span class="error-stmt"> There are no categories found.. </span>';
      }
      ?>
    </div>
  </div>

  <!-- Bought Products Hamburger -->
  <div class="shopping-cart">
    <div class="shopping-cart-header">
      <span class="title">Buy Orders</span>
      <button class="exit" id="order-exit">
        <i class="fa-solid fa-xmark"></i>
      </button>
      <!-- <div class="total">
        <h5>Total:</h5>
        <h5>$575.00</h5>
      </div> -->
    </div>
    <form action="" method="post">
      <div class="shopping-cart-items">
        <?php
        if (isset($_SESSION['member_id'])) {
          $member_id = $_SESSION['member_id'];
          $bill = getProdByMemberId('bill', $member_id);
          global $total;
          if (mysqli_num_rows($bill) > 0) {
            foreach ($bill as $item) {
              $total += $item['total'];
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
      </div>
    </form>
    <!-- <div class="actions">
      <button id="order-exit">Back</button>
      <button>Place Order</button>
    </div> -->
  </div>

  <!-- Pop-up Rating -->
  <div class="rating-pop">
    <div class="wrapper">
      <form action="#" method="post">
        <div class="rating-header">
          <span class="title">Rate Product</span>
          <div class="exit" id="rating-exit">
            <i class="fa-solid fa-xmark"></i>
          </div>
        </div>
        <div class="rating-description">
          <?php
          if (isset($error)) {
            echo '<span class="error-msg"> Error: ' . $error . '</span>';
          }
          ?>
          <div class="rating-select">
            <span class="title">What do you think of the product?</span>
            <input type="hidden" name="product_id" value="<?php echo $product['id'] ?>">
            <div class="rate">
              <div class="radio">
                <input class="radio-input" type="radio" value="1" name="rating" id="star1">
                <label class="radio-label" for="star1">
                  <i class="fa-solid fa-star"></i>
                </label>
                <input class="radio-input" type="radio" value="2" name="rating" id="star2">
                <label class="radio-label" for="star2">
                  <i class="fa-solid fa-star"></i>
                </label>
                <input class="radio-input" type="radio" value="3" name="rating" id="star3">
                <label class="radio-label" for="star3">
                  <i class="fa-solid fa-star"></i>
                </label>
                <input class="radio-input" type="radio" value="4" name="rating" id="star4">
                <label class="radio-label" for="star4">
                  <i class="fa-solid fa-star"></i>
                </label>
                <input class="radio-input" checked type="radio" value="5" name="rating" id="star5">
                <label class="radio-label" for="star5">
                  <i class="fa-solid fa-star"></i>
                </label>
              </div>
            </div>
            <p class="rating-desc">It was awesome!</p>
          </div>
          <div class="field input">
            <label for="review_title">Review Title</label>
            <input name="review_title" id="review_title" autofocus required autocomplete="review_title" placeholder="Enter Review Title">
          </div>
          <div class="field description">
            <label for="review_message">Review Message</label>
            <textarea name="review_message" id="review_message" autofocus required autocomplete="review_message" placeholder="Enter Review Message"></textarea>
          </div>
          <div class="actions">
            <button name="rate-product" type="submit">Save</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!-- Confirm Product Modal -->
  <div class="modal-pop">
    <div class="wrapper">
      <form action="#" method="post">
        <div class="modal-header">
          <div class="left">
            <span class="title">Confirm Product Order</span>
            <span class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae illum nisi itaque cupiditate dignissimos.</span>
          </div>
          <div class="right">
            <img src="assets/images/shopping_bags.svg" alt="Buy Order Picture">
          </div>
        </div>
        <?php
        if (isset($error)) {
          echo '<span class="error-msg"> Error: ' . $error . '</span>';
        }
        ?>
        <!-- Product Buy Details -->
        <div class="product-content">
          <div class="selected">
            <div class="sub-header">
              <span class="sub-title">Product Selected</span>
              <div class="horizontal-line"></div>
            </div>
            <div class="product-buy-details">
              <div class="left">
                <img src="assets/uploads/<?php echo $product['image'] ?>" class="img"></img>
                <input type="hidden" name="product_image" value="<?php echo $product['image'] ?>">
                <input type="hidden" name="product_name" value="<?php echo $product['name'] ?>">
              </div>
              <div class="right">
                <?php
                $res = checkDiscountProduct('discount_product', $product['id']);
                if (isset($res)) {
                  $product_discount = mysqli_fetch_assoc($res);
                  if ($product_discount != null) {
                    $discount = intval($product_discount['discount']);
                    $price = $product['price'] * ($discount / 100);
                    if (mysqli_num_rows($res) > 0) {
                ?>
                      <div class="price">
                        <span class="original-price"><?php echo '$' . $product['price'] ?></span>
                        <span class="discount-price"><?php echo '$' . $price ?></span>
                        <input type="hidden" name="price" value="<?php echo $price ?>">
                      </div>
                    <?php
                    } else {
                    ?>
                      <input type="hidden" name="price" value="<?php echo $product['price'] ?>">
                      <span class="price"><?php echo '$' . $product['price'] ?></span>
                    <?php
                    }
                  } else {
                    ?>
                    <input type="hidden" name="price" value="<?php echo $product['price'] ?>">
                    <span class="price"><?php echo '$' . $product['price'] ?></span>
                  <?php
                  }
                } else {
                  ?>
                  <input type="hidden" name="price" value="<?php echo $product['price'] ?>">
                  <span class="price"><?php echo '$' . $product['price'] ?></span>
                <?php
                }
                ?>
                <div class="product-group" style="display: flex;">
                  <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
                  <span class="product-name"><?php echo $product['name'] ?></span>
                  <div class="group">
                    <div class="counter" id="qty-minus-btn">
                      <i class="fa-solid fa-minus"></i>
                    </div>
                    <div class="field-input">
                      <input id="quantity_bought" type="quantity_bought" name="quantity_bought" required autocomplete="quantity_bought" value="1" autofocus class="buy-qty">
                    </div>
                    <div class="counter">
                      <i class="fa-solid fa-plus" id="qty-plus-btn"></i>
                    </div>
                  </div>
                </div>
                <div class="buy-details">
                  <div class="content-col">
                    <span class="title">Color Selected</span>
                    <select name="colors" id="colors" required autocomplete="colors" autofocus>
                      <?php
                      $product_result = getProdByName('product', $product['name']);
                      $product = mysqli_fetch_assoc($product_result);
                      $product_colors = explode(',', $product['colors']);
                      foreach ($product_colors as $item) {
                      ?>
                        <option value="<?php echo $item ?>"><?php echo $item ?></option>
                      <?php
                      }
                      ?>
                    </select>
                  </div>
                  <div class="content-col">
                    <span class="title">Size Selected</span>
                    <select name="sizes" id="sizes" required autocomplete="sizes" autofocus>
                      <?php
                      $product_result = getProdByName('product', $product['name']);
                      $product = mysqli_fetch_assoc($product_result);
                      $product_sizes = explode(',', $product['sizes']);
                      foreach ($product_sizes as $item) {
                      ?>
                        <option value="<?php echo $item ?>"><?php echo $item ?></option>
                      <?php
                      }
                      ?>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Buy Product Delivery Information -->
        <div class="delivery-information">
          <div class="sub-header">
            <span class="sub-title">Delivery Information</span>
            <div class="horizontal-line"></div>
          </div>
          <div class="fields">
            <div class="field input">
              <label for="address">Address*</label>
              <input id="address" type="address" class="form-control" name="address" required autocomplete="address" placeholder="Enter Address" autofocus>
            </div>
            <div class="group">
              <div class="field input">
                <label for="city">City/Town*</label>
                <input id="city" type="city" class="form-control" name="city" required autocomplete="city" placeholder="Enter City/Town" autofocus>
              </div>
              <div class="field input">
                <label for="phone_number">Phone Number*</label>
                <input id="phone_number" type="phone_number" class="form-control" name="phone_number" required autocomplete="phone_number" placeholder="Enter Phone Number" autofocus>
              </div>
            </div>
          </div>
        </div>
        <!-- Buy Product Payment Method -->
        <div class="delivery-information">
          <div class="sub-header">
            <span class="sub-title">Payment Method</span>
            <div class="horizontal-line"></div>
          </div>
          <div class="fields">
            <div class="group">
              <div class="field input">
                <label for="city">Select Payment Type*</label>
                <select name="payment_type" id="payment_type" autocomplete="payment_type" autofocus>
                  <option value="BPI">BPI</option>
                  <option value="BDO">BDO</option>
                </select>
              </div>
              <div class="field input">
                <label for="payment_optional">Input Payment Type (Optional)</label>
                <input id="payment_optional" type="payment_optional" class="form-control" name="payment_optional" placeholder="Enter Payment Type" autofocus>
              </div>
            </div>
          </div>
        </div>
        <!-- Buy Product Actions -->
        <div class="buy-actions">
          <button name="buy-product" type="submit">Confirm Order</button>
          <button id="buy-exit">Discard Changes</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Discount Modal Pop- -->
  <div class="discount-modal modal-pop">
    <div class="wrapper">
      <div class="header-details">
        <span class="title">Set Discount</span>
        <div class="exit" id="discount-exit">
          <i class="fa-solid fa-xmark"></i>
        </div>
      </div>
      <div class="content">
        <form action="" method="POST">
          <?php
          if (isset($error)) {
            echo '<span class="error-msg"> Error: ' . $error . '</span>';
          }
          ?>
          <span class="item-name">Select an item to set discount:</span>
          <select class="item-select" name="item_id">
            <?php
            $products = getProdBySeller($seller_id);

            if (mysqli_num_rows($products) > 0) {
              foreach ($products as $item) {
            ?>
                <option value="<?php echo $item['id'] ?>"><?php echo $item['name'] ?></option>
            <?php
              }
            } else {
              echo '<span class="error-stmt"> There are no products found. </span>';
            }
            ?>
          </select>
          <div class="group">
            <div class="counter" id="minus-btn">
              <i class="fa-solid fa-minus"></i>
            </div>
            <div class="field-input">
              <input id="discount" type="discount" name="discount" required autocomplete="discount" autofocus class="num" value="10">
              <div class="percent">%</div>
            </div>
            <div class="counter">
              <i class="fa-solid fa-plus" id="plus-btn"></i>
            </div>
          </div>
          <p class="disc-set">on item price</p>
          <p class="description">
            By activating this discount, the item price for this product will be based on your discount percent set.
          </p>
      </div>
      <div class="actions">
        <button name="discount-product" type="submit">Activate Discount</button>
      </div>
      </form>
    </div>
  </div>