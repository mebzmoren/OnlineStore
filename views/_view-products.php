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
  <main class="products-container" stlye="margin-top: 4em;">
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
        <div class="options">
          <div class="group">
            <h3>Select Size</h3>
            <div class="sizes">
              <button class="size-select">XXS</button>
              <button class="size-select">XS</button>
              <button class="size-select">S</button>
              <button class="size-select">M</button>
              <button class="size-select">L</button>
              <button class="size-select">XL</button>
              <button class="size-select">XXL</button>
            </div>
          </div>
          <div class="group">
            <h3>Select Color</h3>
            <div class="colors">
              <button class="select red">
                <div class="color"></div>
              </button>
              <button class="select blue">
                <div class="color"></div>
              </button>
              <button class="select yellow">
                <div class="color"></div>
              </button>
              <button class="select green">
                <div class="color"></div>
              </button>
              <button class="select white">
                <div class="color"></div>
              </button>
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
          <button>Buy Now</button>
          <button>Add to Cart</button>
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
              <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit nam eaque
                minima temporibus, iste, possimus obcaecati non dolorem modi quasi, eligendi sapiente fuga sunt cum!</p>
        </div>
      </div>
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
              <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit nam eaque
                minima temporibus, iste, possimus obcaecati non dolorem modi quasi, eligendi sapiente fuga sunt cum!</p>
        </div>
      </div>
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
              <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit nam eaque
                minima temporibus, iste, possimus obcaecati non dolorem modi quasi, eligendi sapiente fuga sunt cum!</p>
        </div>
      </div>
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
              <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit nam eaque
                minima temporibus, iste, possimus obcaecati non dolorem modi quasi, eligendi sapiente fuga sunt cum!</p>
        </div>
      </div>
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
              <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit nam eaque
                minima temporibus, iste, possimus obcaecati non dolorem modi quasi, eligendi sapiente fuga sunt cum!</p>
        </div>
      </div>
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
              <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit nam eaque
                minima temporibus, iste, possimus obcaecati non dolorem modi quasi, eligendi sapiente fuga sunt cum!</p>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/javascript/rating.js"></script>