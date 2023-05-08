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
        <form action="#">
          <div class="field input">
            <label for="image">Image Pic*</label>
            <input id="image" type="file" class="custom-file-input no-padding" name="image" required autocomplete="image"
                placeholder="Select A Image" autofocus>
          </div>
          <div class="group custom">
            <div class="field input">
              <label for="name">Product Name*</label>
              <input id="name" type="name" class="form-control" name="name" required autocomplete="name"
                  placeholder="Enter Product Name" autofocus>
            </div>
            <div class="field input">
              <label for="name">Category Name*</label>
              <select name="category" id="category" required autocomplete="category" autofocus>
                <option value="1">Shirts</option>
                <option value="2">Jeans</option>
                <option value="3">Shoes</option>
              </select>
            </div>
          </div>
          <div class="group">
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
          </div>
          <div class="field input">
            <label for="description">Product Description*</label>
            <textarea required autocomplete name="description" id="description" cols="30" rows="10"></textarea>
          </div>
          <div class="actions">
            <button type="submit">Add Product</button>
          </div>
        </form>
      </div>
    </div>
  </main>