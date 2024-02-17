<footer class="footer">
    <div class="container footer-con">
        <div class="row">
            <div class="col-md-4">
                <img src="./assets/images/logo.png" class="img-fluid footer-logo" alt="">
            </div>
            <div class="col-md-8">
                <a href="" class="btn return">Return to top <img src="./assets/images/top-icon.png" alt=""></a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-5">
                <form action="code.php" method="POST" id="myForm">
                    <input type="email" class="mt-3" placeholder="@ Email" name="email" id="emailInput" required>
                    <div id="captchaContainer" style="display: none;">
                        <div class="g-recaptcha" data-sitekey="6LccklkpAAAAAMNUzTKQe64uQ-qUos3nSijhqUqy"></div>
                    </div>
                    <br>
                    <button type="submit" class="captchaBtn mx-2 mt-3" name="captchaBtn" onclick="validateForm()">Submit</button>
                </form>
                <ul class="socialList">
                    <li><a href="https://www.youtube.com/channel/UCLb5iq0x308x4ysS_xt8--w" target="_blank"><img
                                src="./assets/images/youtube.png" alt="" style="margin-top:5px;"></a></li>
                    <li><a href="https://twitter.com/paklinkshippin?lang=en" target="_blank"><img
                                src="./assets/images/twitter.png" alt=""></a></li>
                    <li><a href="https://www.facebook.com/paklinkshippingservices/" target="_blank"><img
                                src="./assets/images/facebook.png" alt=""></a></li>
                </ul>
            </div>

            <div class="col-sm-12 col-md-2 col-lg-2">
                <h3>SERVICES</h3>
                <ul class="footerList">
                    <li><a href="./services.php#air-freight">Air Freight</a></li>
                    <li><a href="./services.php#ocean-frieght">Ocean Freight</a></li>
                    <li><a href="./services.php#warehouse">Warehousing</a></li>
                    <li><a href="./services.php#consol">Consolidation</a></li>
                    <li><a href="./services.php#supply-chain">Supply Chain</a></li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-2 col-lg-2">
                <h3>COMPANY</h3>
                <ul class="footerList">
                    <li><a href="privacy-policy.php">Privacy Policy</a></li>
                    <li><a href="terms-and-conditions.php">Terms & Conditions</a></li>
                    <li>Security & Quality</li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3">
                <h3>CONNECTIONS</h3>
                <ul class="footerList">
                    <li><a href="tel:+971 4 554 3006">+971 4 554 3006</a></li>
                    <li><a href="mailto:marketing@starpacificshipping.com">marketing@starpacificshipping.com</a></li>
                    <li>Office 301, 3rd Floor Shipping Tower, Opp Port Rashid, Al Mina Road, Bur Dubai-UAE.</li>
                </ul>
            </div>
            <p class="bottomText">Copyright 2024<b> Star Pacific Shipping</b>, All rights reserved</p>
        </div>
    </div>
</footer>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="login-box">
                <form action="code.php" method="POST">
                    <div class="user-box">
                        <input type="text" name="fname" required>
                        <label>First Name</label>
                    </div>
                    <div class="user-box">
                        <input type="text" name="lname" required>
                        <label>Last Name</label>
                    </div>
                    <div class="user-box">
                        <input type="text" name="phone" required>
                        <label>Phone</label>
                    </div>
                    <div class="user-box">
                        <input type="email" name="email" required>
                        <label>Email</label>
                    </div>
                    <div class="user-box">
                        <input type="text" name="message" required>
                        <label>Message</label>
                    </div>
                    <button class="btn" name="getQuoteBtn">Submit<span></span></button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function toggleCaptchaVisibility() {
  var captchaContainer = document.getElementById('captchaContainer');
  captchaContainer.style.display = (captchaContainer.style.display === 'none' || captchaContainer.style.display ===
      '') ? 'block' : 'none';
  if (!window.grecaptcha) {
      var script = document.createElement('script');
      script.src = 'https://www.google.com/recaptcha/api.js';
      script.async = true;
      script.defer = true;
      document.head.appendChild(script);
  }
}
document.getElementById('emailInput').addEventListener('click', toggleCaptchaVisibility);


</script>

<!-- ------------Bootstrap CDN--------------- -->
<script src="./assets/js/bootstrap.js"></script>
<!-- ------------Bootstrap CDN--------------- -->
<script src="./assets/js/app.js"></script>

</body>

</html>