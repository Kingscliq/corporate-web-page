<?php include 'header.php'?>

  

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                        
            <div class="row justify-content-center mb-4">
              <div class="col-md-8 text-center">
                <h1>Contact Us</h1>
                <p class="lead mb-5">We Make Beautiful Things</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>  


    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mb-5">

            

            <form action="contact_process.php" method="POST" class="p-5 bg-white" id="frmContact">
               <h2 class="h4 text-black mb-5">Contact Form</h2> 
  
                <div class="row form-group">
                  <div class="col-md-6 mb-3 mb-md-0">
                    <label class="text-black" for="fname">First Name</label>
                    <input type="text" id="fname" class="form-control" name="fname">
                  </div>
                  <div class="col-md-6">
                    <label class="text-black" for="lname">Last Name</label>
                    <input type="text" id="lname" class="form-control" name="lname">
                  </div>
                </div>
  
                <div class="row form-group">
                  
                  <div class="col-md-12">
                    <label class="text-black" for="email">Email</label> 
                    <input type="email" id="email" class="form-control" name="email">
                  </div>
                </div>
  
                <div class="row form-group">
                  
                  <div class="col-md-12">
                    <label class="text-black" for="subject">Subject</label> 
                    <input type="subject" id="subject" class="form-control" name="subject">
                  </div>
                </div>
  
                <div class="row form-group">
                  <div class="col-md-12">
                    <label class="text-black" for="message">Message</label> 
                    <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..." name="message"></textarea>
                  </div>
                </div>
  
                <div class="row form-group">
                  <div class="col-md-12">
                    <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                  </div>
                </div>
              </form>
              <span id="errorMessage" name= "error" style="color:red"></span>
              
            </div>
          <div class="col-md-5">
            
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Nigeria Branch</p>
              <p class="mb-4">Suite 34 Yasuha Plaza Wuse 2, Abuja.<br>
              No 39 Iworoko Road, Opp Total Filling Station Adebayo, Ado-Ekiti, Ekiti State</p>
              <p class="mb-0 font-weight-bold">USA Branch</p>
              <p class="mb-4">5342 Jamestown E CT Baltimore, MD 21229-3163</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="contact.html">+234 8035527581</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="contact.html">info@centurygateways.com</a></p>

            </div>
            
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">More Info</h3>
              <p>CENTURY GATEWAYS NIGERIA LIMITED was established to give professional service in the management of technology. The company was established in 2007 
                Under the companies and Allied Matters Act 1990 with Registration number RC 682466.
                </p>
              <p><a href="contact.html" class="btn btn-primary btn-md text-white">Learn More</a></p>
            </div>

          </div>
        </div>
      </div>
    </div>

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="a">About Us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Services</h2>
                <ul class="list-unstyled">
                  <li><a href="#">Trainings &amp; Certifications</a></li>
                  <li><a href="#">Consultancy</a></li>
                  <li><a href="#">Procurements</a></li>
                  <li><a href="#">Database Management</a></li>
                  <li><a href="#">Web design</a></li>
                  <li><a href="#">Mobile app</a></li>
                  <li><a href="#">PC Sales and Repairs</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Courses</h2>
                <ul class="list-unstyled">
                  <li><a href="#">Project Management</a></li>
                  <li><a href="#">Database (Oracle &amp; MySQL)</a></li>
                  <li><a href="#">Web design</a></li>
                  <li><a href="#">Human Resourse Mgt</a></li>
                  <li><a href="#">Cisco Networking</a></li>
                  <li><a href="#">Programming</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
            <form action="#" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-white" type="button" id="button-addon2">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
              Copyright &copy;<script>document.write(new Date().getFullYear());</script>&nbsp; Century Gateways Technologies | All rights reserved</a>
            
            </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>
  </div>
  <script type="text/javascript">
      document.getElementById('frmContact').onsubmit = function (){
    if ((document.getElementById('email').value == "") && (document.getElementById('fname').value == "")
    && (document.getElementById('lname').value == "") && (document.getElementById('subject').value == "")
    && (document.getElementById('message').value == "")){

      alert( "Please fill out all fields");
      }else alert ("Thank you for contacting us we will get in touch soon!");
    }
  
    </script>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

 
  <script src="js/main.js"></script>
    
  </body>
</html>