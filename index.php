<?php
require "controllers/dbConn.php";
require "views/header.html";
?>
<!-- Section HOME -->
<section id="home" class="home-content">
  <div id="wrap-video">
  <div id="video-box">
    <div id="video-overlay">
      <div class="container">
        <div class="text-center">
          <div class="top-content">
            <div class="row">
              <h1>Learn the job of your dreams by doing.</h1>
                  <p>Apprenticeship World brings together students and recruiters so you don't have to worry about boring paperwork. We match you with the perfect company where you can grow and develop new skills.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>
      <video id="player" autoplay muted loop poster="assets/images/working-space-poster.jpg" width="100%">
          <source src ="https://storage.googleapis.com/coverr-main/mp4/Working-Space.mp4" type = "video/mp4">
      </video>
    </div>
  </div>
</div>
</section>

<!-- Section SERVICES-->
<section id="services" class="service2 sections lightbg">
    <div class="container">
        <div class="row">
            <div class="main_service2">
                <div class="head_title text-center">
                    <h2>SERVICES WE PROVIDE</h2>
                    <p>condimentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                </div>
                <div class="service_content">
                    <div class="col-md-6 col-sm-6">
                        <div class="single_service2">
                            <div class="single_service_left">
                                <img src="assets/images/flaticon1.png" alt="" />
                            </div>
                            <div class="single_service_right">
                                <h2>MARKET RESEARCH</h2>
                                <p>We scan the market for new and exciting opportunities so you don't have to.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="single_service2">
                            <div class="single_service_left">
                               <img src="assets/images/flaticon2.png" alt="" />
                            </div>
                            <div class="single_service_right">
                                <h2>NETWORKING</h2>
                                <p>We want to provide you with all the tools you need to feel confident and succeed in the regular networking events that we organise.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="single_service2">
                            <div class="single_service_left">
                              <img src="assets/images/flaticon3.png" alt="" />
                            </div>
                            <div class="single_service_right">
                                <h2>EXCELLENCE</h2>
                                <p>We take pride in doing things differently and with passion. The judges at 'The Pioneer Recruiters Awards' 18' think the same!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="single_service2">
                            <div class="single_service_left">
                                <img src="assets/images/flaticon4.png" alt="" />
                            </div>
                            <div class="single_service_right">
                                <h2>HAPPY ENDINGS</h2>
                                <p>We're stubborn and reckless. If you put your trust in us we won't rest until we help you find your dreamed position.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End of Service2 Section -->

<!-- Section  TEAM -->
<section class="main-section team" id="team">
		<!--main-section team-start-->
		<div class="container">
      <div class="head_title text-center">
  			<h2>Amazing Team</h2>
  			<h6>Take a closer look into our amazing team. We won’t bite.</h6>
      </div>
			<div class="team-leader-block clearfix">

				<div class="team-leader-box">
					<div class="team-leader wow fadeInDown delay-03s animated" style="visibility: visible; animation-name: fadeInDown;">
						<div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
						<img src="assets/images/team-leader-pic1.jpg" alt="">
					</div>
					<h3 class="wow fadeInDown delay-03s animated" style="visibility: visible; animation-name: fadeInDown;">Jon Oringer</h3>
					<span class="wow fadeInDown delay-03s animated" style="visibility: visible; animation-name: fadeInDown;">Founder, Chairman and CEO</span>
					<p class="wow fadeInDown delay-03s animated" style="visibility: visible; animation-name: fadeInDown;">Jon founded Apprenticeship World in 2003. A serial entrepreneur, he recognized the need for a platform that would gather all the apprenticeships available in the market. Since then, Apprentceship World has grown exponentially. Jon holds an MS in Computer Science from Columbia University and a BS in Computer Science and Mathematics from The State University of New York.</p>
				</div>

				<div class="team-leader-box">
					<div class="team-leader  wow fadeInDown delay-06s animated" style="visibility: visible; animation-name: fadeInDown;">
						<div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
						<img src="assets/images/team-leader-pic3.jpg" alt="">
					</div>
					<h3 class="wow fadeInDown delay-06s animated" style="visibility: visible; animation-name: fadeInDown;">Lisa Nadler</h3>
					<span class="wow fadeInDown delay-06s animated" style="visibility: visible; animation-name: fadeInDown;">Chief Human Resources Officer</span>
					<p class="wow fadeInDown delay-06s animated" style="visibility: visible; animation-name: fadeInDown;">Lisa is the Chief Human Resources Officer of Apprenticeship World. In this role, she is focused on attracting and developing the best talent and building a culture of engagement, agility and innovation. Lisa has held leadership positions at Citibank, Gartner, Madison Square Garden, and most recently was the CHRO at Sotheby’s.</p>
				</div>

				<div class="team-leader-box">
					<div class="team-leader wow fadeInDown delay-09s animated" style="visibility: visible; animation-name: fadeInDown;">
						<div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
						<img src="assets/images/team-leader-pic2.jpg" alt="">
					</div>
					<h3 class="wow fadeInDown delay-09s animated" style="visibility: visible; animation-name: fadeInDown;">Marty Brodbeck</h3>
					<span class="wow fadeInDown delay-09s animated" style="visibility: visible; animation-name: fadeInDown;">Chief Technology Officer</span>
					<p class="wow fadeInDown delay-09s animated" style="visibility: visible; animation-name: fadeInDown;">As Chief Technology Officer, Marty manages the technology organization, partnering with the product and marketing teams to drive development and implementation of products that solve customers’ problems. Marty has extensive experience delivering solutions at scale during his tenure as CTO at companies including Pearson, Pfizer and Diageo.</p>
				</div>
			</div>
		</div>
	</section>

<!-- Section  APPRENTICESHIPS -->
<section id="apprenticeships" class="portfolio sections">
    <div class="container">
        <div class="head_title text-center">
            <h1>Our Apprenticeships</h1>
	          <p>In Apprenticeship World we specialise in the following fields. Our extensive expertise and wide network allow us to find the best vacancies for you to choose from</p>
        </div>
        <div class="row">
            <div class="portfolio-wrapper text-center">
              <?php
              if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                      echo
                      "<div class='col-md-4 col-sm-6 col-xs-12'>
                          <div class='community-edition'>
                            ". $row['icon'] ."
                            <div class='separator'></div>
                            <h4>". $row['name'] ."</h4>
                            <p>".$row['description']."</p>
                          </div>
                      </div>";
                  }
                  // set the pointer back to 0 so I can reuse $results later
                  mysqli_data_seek($result, 0);
              } else {
                  echo "0 results";
              }
              ?>
            </div>
        </div>
    </div> <!-- /container -->
</section>

<!-- Section CONTACT-->
<section id="contact" class="contact sections">
    <div class="container">
        <div class="row">
            <div class="main_contact whitebackground">
                <div class="head_title text-center">
                    <h2 id='thanksH2'>GET IN TOUCH</h2>
			              <p id='thanksP'>You can enquiry about vacancies in any of the areas of interest we offer. Fill in this form and we'll get back to you with those vacancies that match your selection</p>
                </div>
                <div class="contact_content">
                  <form action="controllers/dbInsert.php" method="post" role="form" class="contactForm" id="contactForm">
                    <div class="col-md-6">
                        <div class="single_left_contact">

                          <!-- FIRST NAME -->
                          <div class="form-group">
                              <input type="text" class="form-control input-text" name="firstName" id="firstName" placeholder="First Name" required="" data-rule="minlen:4" data-msg="Please enter at least 4 characters"/>
            									<div class="validation"></div>
                          </div>

                          <!-- LAST NAME -->
                          <div class="form-group">
                              <input type="text" class="form-control input-text" name="lastName" id="lastName" placeholder="Last Name" required="" data-rule="minlen:4" data-msg="Please enter at least 4 characters" />
                              <div class="validation"></div>
                          </div>

                          <!-- EMAIL -->
                          <div class="form-group">
                              <input type="email" class="form-control input-text" name="email" id="email" placeholder="Email" required="" data-rule="email" data-msg="Please enter a valid email" />
                              <div class="validation"></div>
                          </div>

                        </div>
                      </div>

                      <div class="col-md-6">
                          <div class="single_right_contact">

                            <!-- SELECT CATEGORY -->
                            <div class="form-group">
                                <select required="" class="form-control input-text" name="select" required="" data-rule="select" data-msg="Select one option">
                                    <option value="" selected disabled hidden>Choose your field of interest</option>
                                    <?php
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        $counter=1;
                                        while($row = $result->fetch_assoc()) {
                                            echo
                                            "<option value='".$counter."'>".$row['name']."                                 </option>";
                                            $counter++;
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    ?>
                                </select>
                            </div>

                            <!-- PHONE -->
                            <div class="form-group">
                                <input type="tel" class="form-control input-text" name="phone" placeholder="Telephone Number" required="" data-rule="phone" data-msg="Please enter a valid phone number" />
                                <div class="validation"></div>
                            </div>

                            <!-- POSTCODE -->
                            <div class="form-group">
                                <input type="text" class="form-control input-text" name="postcode" placeholder="Postcode" required="" data-rule="postcode" data-msg="Please enter a valid postcode" />
                                <div class="validation"></div>
                            </div>
                          </div>
                      </div>

                      <div class="center-content col-md-12">
                          <input type="submit" value="Submit" class="center btn btn-default">
                          <div id="sendmessage" class="hidden">Message sent!</div>
                      </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section><!-- End of Contact Section -->

<?php
require "views/footer.html";
?>
