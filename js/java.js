  $(window).scroll(function(){
      if ($(this).scrollTop() > 500) {
          $('#cart').addClass('cart-fixed');
      } else {
          $('#cart').removeClass('cart-fixed');
      }
  });

function showDetails(id,name,salary,img) {
      // Get the modal
      var modal = document.getElementById('myModal');

      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close");

      // When the user clicks on the button, open the modal 
      this.onclick = function() {
          modal.style.display = "block";
      }

      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
          modal.style.display = "none";
      }
}
