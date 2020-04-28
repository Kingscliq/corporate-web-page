<?php include 'header.php'?>
  

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                        
            <div class="row justify-content-center mb-4">
              <div class="col-md-8 text-center">
                <h1>Computer Networking</h1>
                <p class="lead mb-5">We are Cisco Certified Network Professionals</p>
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

            

            <form action="contact.php" method="POST" class="p-5 bg-white" id="frmContact">
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

    <?php include 'footer.php'?>