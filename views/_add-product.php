  <main class="seller-profile">
    <!-- Seller Sidebar -->
    <aside class="side-bar">
      <span class="title">
        <i class="fa-solid fa-store"></i>
        <h3 class="name">Order</h3>
      </span>
      <ul class="options">
        <li>
          <a href="#">My Products</a>
        </li>
        <li>
          <a href="#">Add New Product</a>
        </li>
      </ul>
    </aside>
    <!-- Add Product -->
    <div class="sell-container">
      <div class="header-details">
        <span class="title">Add New Product</span>
      </div>
      <div class="product-details">
        <form action="#" method="post" enctype="multipart/form-data">
          <?php
            if(isset($error)) {
              echo '<span class="error-msg"> Error: ' . $error . '</span>';
            }
          ?>
          <div class="field input">
            <label for="image">Image Pic*</label>
            <input id="image" type="file" class="custom-file-input no-padding" name="image" required autocomplete="image"
                placeholder="Select A Image" autofocus>
          </div>
          <div class="field input">
            <label for="name">Product Name*</label>
            <input id="name" type="name" class="form-control" name="name" required autocomplete="name"
                  placeholder="Enter Product Name" autofocus>
          </div>
          <div class="group">
            <div class="field input">
              <label for="quantity">Product Quantity*</label>
              <input id="quantity" type="quantity" class="form-control" name="quantity" required autocomplete="quantity"
                placeholder="Enter Product Quantity" autofocus>
            </div>
            <div class="field input">
              <label for="price">Product Price*</label>
              <input id="price" type="price" class="form-control" name="price" required autocomplete="price"
                placeholder="Enter Product Price" autofocus>
            </div>
            <div class="field input">
              <label for="category">Category Name*</label>
              <select name="category" id="category" required autocomplete="category" autofocus>
                <option value="Shirts">Shirts</option>
                <option value="Jeans">Jeans</option>
                <option value="Shoes">Shoes</option>
              </select>
            </div>
          </div>
          <div class="group">
            <div class="field input">
              <label for="color">Color*</label>
              <div class="colors">
                <div class="select">
                  <input type="checkbox" value="Red" name="colors[]">
                  <span>Red</span>
                </div>
                <div class="select">
                  <input type="checkbox" value="Blue" name="colors[]">
                  <span>Blue</span>
                </div>
                <div class="select">
                  <input type="checkbox" value="Yellow" name="colors[]">
                  <span>Yellow</span>
                </div>
                <div class="select">
                  <input type="checkbox" value="Green" name="colors[]">
                  <span>Green</span>
                </div>
                <div class="select">
                  <input type="checkbox" value="White" name="colors[]">
                  <span>White</span>
                </div>
              </div>
            </div>
            <div class="field input">
              <label for="size">Sizes*</label>
              <div class="sizes">
                <div class="select">
                  <input type="checkbox" value="XS" name="sizes[]">
                  <span>XS</span>
                </div>
                <div class="select">
                  <input type="checkbox" value="S" name="sizes[]">
                  <span>S</span>
                </div>
                <div class="select">
                  <input type="checkbox" value="M" name="sizes[]">
                  <span>M</span>
                </div>
                <div class="select">
                  <input type="checkbox" value="L" name="sizes[]">
                  <span>L</span>
                </div>
                <div class="select">
                  <input type="checkbox" value="XL" name="sizes[]">
                  <span>XL</span>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="group">
            <div class="field input">
              <label for="name">Color*</label>
              <select name="category" id="category" required autocomplete="category" autofocus>
                <option value="1">Red</option>
                <option value="2">Blue</option>
                <option value="3">Yellow</option>
                <option value="4">Green</option>
                <option value="5">White</option>
              </select>
            </div>
            <div class="field input">
              <label for="name">Size*</label>
              <select name="category" id="category" required autocomplete="category" autofocus>
                <option value="1">XS</option>
                <option value="2">S</option>
                <option value="3">M</option>
                <option value="4">L</option>
                <option value="5">XL</option>
              </select>
            </div>
          </div> -->
          <div class="field input">
            <label for="description">Product Description*</label>
            <textarea required autocomplete name="description" id="description" cols="30" rows="10"></textarea>
          </div>
          <div class="actions">
            <button name="submit" type="submit">Add Product</button>
          </div>
        </form>
      </div>
    </div>
  </main>