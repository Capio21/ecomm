<?= $this->include('include/header')?>
<?= $this->include('include/nav-bar')?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="section-heading">
        <h2>Latest Products</h2>
        <a href="products.html">View all products <i class="fa fa-angle-right"></i></a>
      </div>
    </div>
<?php if(isset($products)): ?>
    <?php foreach ($products as $product): ?>
      <div class="col-md-4">
        <div class="product-item">
          <a href="#"><img src="<?= $product['image_url'] ?>" alt=""></a>
          <div class="down-content">
            <a href="#"><h4><?= $product['name'] ?></h4></a>
            <h6>$<?= $product['price'] ?></h6>
            <p><?= $product['description'] ?></p>
            <ul class="stars">
              <?php for ($i = 0; $i < $product['reviews']; $i++): ?>
                <li><i class="fa fa-star"></i></li>
              <?php endfor; ?>
            </ul>
            <span>Reviews (<?= $product['reviews'] ?>)</span>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
<?php endif; ?>
  </div>
</div>

<?= $this->include('include/footer')?>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Additional Scripts -->
<script src="assets/js/custom.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/accordions.js"></script>

<script language="text/Javascript">
  cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
  function clearField(t) { //declaring the array outside of the
    if (!cleared[t.id]) { // function makes it static and global
      cleared[t.id] = 1; // you could use true and false, but that's more typing
      t.value = ''; // with more chance of typos
      t.style.color = '#fff';
    }
  }
</script>
</body>
