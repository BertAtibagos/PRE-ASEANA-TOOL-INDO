<button onclick="topFunction()" id="myBtn" title="Back to top"><i class="fas fa-angle-double-up"></i></button>

<script>
// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>


<style>
    
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 70px;
  margin-bottom:20px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #27292C;
  opacity:0.5;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
</style>