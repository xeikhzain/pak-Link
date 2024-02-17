<?php
include 'includes/header.php';
?>

  <!-- Section 1 -->

  <div class="container contactSec-1">
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-6 box-1">
        <h1>CONTACT US</h1>
        <div class="content">
          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
          <ul>
            <li>
              <span>Phone</span>
              <p><a href="tel:+971 58 806 0516">+971 58 806 0516</a> <br> <a href="tel:+971 56411 7645">+971 56411 7645</a></p>
            </li>
            <li>
              <span>Address</span>
              <p>Office 301, 3rd Floor Shipping Tower, Opp Port Rashid, Al Mina Road, Bur Dubai-UAE.</p>
            </li>
          </ul>
          <ul>
            <li>
              <span>Working Hours</span>
              <p>Mon - Sat: 9am - 5pm</p>
            </li>
            <li>
              <span>Email</span>
              <p>marketing &#64; starpacificshipping.com</p>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 box-2">
        <h1>REACH OUT</h1>
        <form action="code.php" method="POST">
          <div class="row">
            <div class="col-6 mb-4">
              <label for="">First Name</label>
              <input type="text" class="form-control" name="fname" required>
            </div>
            <div class="col-6 mb-4">
              <label for="">Last Name</label>
              <input type="text" class="form-control" name="lname" required>
            </div>
            <div class="col-6 mb-4">
              <label for="">Phone</label>
              <input type="text" class="form-control" name="phone" required>
            </div>
            <div class="col-6 mb-4">
              <label for="">Email</label>
              <input type="email" class="form-control" name="email" required>
            </div>
            <div class="col-12">
              <label for="">Message</label>
              <textarea class="form-control mt-4" cols="30" rows="3" placeholder="Writing something here" name="message" required></textarea>
            </div>
            <div class="col-12">
              <button type="submit" class="btn" name="contactBtn">SUBMIT</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>



  <!-- Section 2 -->

  <div class="container contactSec-2">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3620.4951708311264!2d66.99748197401134!3d24.846932145801297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e06598dfdb1%3A0x2079468b42c0ade0!2sPAKLINK%20SHIPPING%20SERVICES!5e0!3m2!1sen!2s!4v1705917026481!5m2!1sen!2s" width="600" height="450" style="border:0; width:100%; border-radius:20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

  
  <?php
include 'includes/footer.php';
?>