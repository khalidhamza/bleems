<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/banners/2.png" alt="">
    </div>
    <div class="item">
      <img src="images/banners/1.png" alt="">
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-9 feature"><!-- FEATURE-->
      <legend> Featured Items </legend>
<?php
  for ($i=1; $i <=12 ; $i++) { 
    echo'<div class="col-lg-3 img-item">
            <div class="img">
                <a href="#myModal" id="myBtn'.$i.'" class="img-btn" onclick="showDetails(myBtn'.$i.',name,25,'.$i.');"><img src="images/'.$i.'.jpg"></a>
            </div>
            <div class="salary">25 KD</div>
        </div>';
  }
?>
    </div><!-- FEATURE-->
    <div class="col-lg-3 shop-cart" > <!-- shop cart-->
      <div class="cart" id="cart">
        <div class="cart-head"><i class="fa fa-shopping-bag" aria-hidden="true"></i>  Shopping cart</div>
        <div class="cart-content">Your cart is currently empty</div>
      </div>
    </div><!-- shop cart-->
  </div>
</div>




<!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span  class="close">&times;</span>
    <div class="row">
      <div class="col-lg-5 img-item ">
        <div class="img modal-img">
          <img src="images/1.jpg">
        </div> 

        <div class="modal-date">
        </div>
      </div>
      <div class="col-lg-7">
        <p> Balloony Land </p>
        <p> Happy Birthday Bunch </p>
        <p> 11" latex balloons flower bouquet . </p>
        <p> Length: 40cm / Height: 175cm / Width: 30cm </p>
        <button class="modal-btns col-lg-5"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i>  Delivery date & time </button>
        <button class="modal-btns col-lg-5"> <i class="fa fa-map-marker" aria-hidden="true"></i>  Delivery address </button>
        <button class="modal-btns col-lg-5"> <i class="fa fa-folder-open-o" aria-hidden="true"></i>  Card message </button>
      </div>
      <button class="btn btn-danger close"> close</button>
    </div>
  </div>
</div>