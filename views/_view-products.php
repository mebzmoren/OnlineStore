  <!-- Pop-up Rating -->
  <div class="rating-pop">
    <div class="wrapper">
      <form action="#">
        <div class="rating-header">
          <span class="title">Rate Product</span>
          <div class="exit" id="rating-exit">
            <i class="fa-solid fa-xmark"></i>
          </div>
        </div>
        <div class="rating-description">
          <div class="rating-select">
            <span class="title">What do you think of the product?</span>
            <div class="rate">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <p class="rating-desc">It was awesome!</p>
          </div>
          <div class="field input">
            <label for="title">Review Title</label>
            <input name="title" id="title" autofocus required autocomplete="title" placeholder="Enter Review Title">
          </div>
          <div class="field description">
            <label for="message">Review Message</label>
            <textarea name="message" id="message" autofocus required autocomplete="message" placeholder="Enter Review Message"></textarea>
          </div>
          <div class="actions">
            <button type="submit">Save</button>
          </div>
        </div>
    </div>
    </form>
  </div>
  </div>

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
            <a href="index.php">Home</a>
          </li>
          <li class="fa-solid fa-angle-right seperator"></li>
          <li>
            <a href="" class="active">Products</a>
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

          <!-- Product Options -->
          <div class="product-options">
            <div class="row-col">
              <span class="title">Sizes Available</span>
              <div class="group">
                <span class="icon">XS</span>
                <span class="icon">S</span>
                <span class="icon">M</span>
                <span class="icon">L</span>
                <span class="icon">XL</span>
              </div>
            </div>
            <div class="row-col color">
              <span class="title">Colors Available</span>
              <div class="group">
                <span class="icon red"></span>
                <span class="icon blue"></span>
                <span class="icon yellow"></span>
                <span class="icon green"></span>
                <span class="icon white"></span>
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
    <div class="rating-header">
      <div class="title-group">
        <div class="title">Product Reviews</div>
        <span class="sub-header" id="rating-btn">Write a Review</span>
      </div>
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
      <div class="user-rating">
        <div class="heading-details">
          <div class="left">
            <div class="user-icon"></div>
            <div class="group">
              <span class="name">Godwin Duliente</span>
              <p class="timestamp">01/13/2002</p>
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
              <span class="num">5.0</span>
            </div>
          </div>
        </div>
        <div class="rating-details">
          <span class="title">Review Title Placeholder<span>
          <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit nam eaqueminima temporibus, iste, possimus obcaecati non dolorem modi quasi, eligendi sapiente fuga sunt cum!</p>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/javascript/products.js"></script>


<!-- Product Options -->
          <!-- <div class="options">
            <div class="group">
              <h3>Select Size</h3>
              <div class="sizes">
                <div class="radio">
                  <input class="radio-input" type="radio" value="xtra-small" name="sizes" id="size1">
                  <label class="radio-label" for="size1">XS</label>
                  <input class="radio-input" type="radio" value="small" name="sizes" id="size2">
                  <label class="radio-label" for="size2">S</label>
                  <input class="radio-input" type="radio" value="medium" name="sizes" id="size3">
                  <label class="radio-label" for="size3">M</label>
                  <input class="radio-input" type="radio" value="large" name="sizes" id="size4">
                  <label class="radio-label" for="size4">L</label>
                  <input class="radio-input" type="radio" value="xtra-large" name="sizes" id="size5">
                  <label class="radio-label" for="size5">XL</label>
                </div>
              </div>
            </div>
            <div class="group">
              <h3>Select Color</h3>
              <div class="colors">
                <div class="color radio">
                  <input class="radio-input" type="radio" value="red" name="colors" id="color1">
                  <label class="radio-label red" for="color1"></label>
                  <input class="radio-input" type="radio" value="blue" name="colors" id="color2">
                  <label class="radio-label blue" for="color2"></label>
                  <input class="radio-input" type="radio" value="green" name="colors" id="color3">
                  <label class="radio-label green" for="color3"></label>
                  <input class="radio-input" type="radio" value="yellow" name="colors" id="color4">
                  <label class="radio-label yellow" for="color4"></label>
                  <input class="radio-input" type="radio" value="white" name="colors" id="color5">
                  <label class="radio-label white" for="color5"></label>
                </div>
              </div>
            </div>
          </div> -->