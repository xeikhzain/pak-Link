
document.addEventListener("DOMContentLoaded", function () {
  var scrollToTopButton = document.querySelector('.btn');

  scrollToTopButton.addEventListener('click', function () {
    // Scroll to the top of the page smoothly
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });
});




document.querySelectorAll('.nav-link').forEach(link => {
  if (link.href === window.location.href) {
    link.setAttribute('aria-current', 'page')
  }
})



// function validateForm() {
//   var response = grecaptcha.getResponse();

//   if (response.length == 0) {
//     alert("Please complete the reCAPTCHA challenge.");
//     return false;
//   }

//   document.getElementById("myForm").submit();
// }



