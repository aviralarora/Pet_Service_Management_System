<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Checkout - Shopping Website</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="#">Shopping Website</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>    
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Cart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li> 
      </ul>
    </div>  
  </nav>
  
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-8">
        <h2>Billing Information</h2>
        <form>
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email">
          </div>
          <div class="form-group">
            <label for="address">Address:</label>
            <textarea class="form-control" id="address" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="card-number">Credit Card Number:</label>
            <input type="text" class="form-control" id="card-number" placeholder="Enter your credit card number">
          </div>
          <div class="form-group">
            <label for="expiry-date">Expiry Date:</label>
            <input type="text" class="form-control" id="expiry-date" placeholder="MM/YY">
          </div>
          <div class="form-group">
            <label for="cvv">CVV:</label>
            <input type="text" class="form-control" id="cvv" placeholder="Enter your CVV">
          </div>
          <button type="submit" class="btn btn-primary">Place Order</button>
        </form>
      </div>
      <div class="col-md-4">
        <h2>Order Summary</h2>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Product</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Product 1</td>
            <td>$10.99</td>
            <td>2</td>
            <td>$21.98</td>
            </tr>
            <tr>
            <td>Product 2</td>
            <td>$19.99</td>
            <td>1</td>
            <td>$19.99</td>
            </tr>
            <tr>
            <td>Product 3</td>
            <td>$7.99</td>
            <td>3</td>
            <td>$23.97</td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
            <td colspan="3">Total:</td>
            <td>$65.94</td>
            </tr>
            </tfoot>
            </table>
            </div>
            </div>

  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
