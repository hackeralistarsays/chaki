@extends('layouts.main')
  


@section('content')
  
<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <h6>Welcome to Winterfel HIGH</h6>
                <h2>We Provide <em>Excellent</em> &amp; <span>Accessible</span> Pedagogy</h2>
                <p>A Confluence of Elegance and excellence</p>
                <form id="search" action="#" method="GET">
                  <fieldset>
                    <input type="address" name="address" class="email" placeholder="How it works..." autocomplete="on" required>
                  </fieldset>
                  <fieldset>
                    <button type="submit" class="main-button">Learn More</button>
                  </fieldset>
                </form>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img style="border-radius:20%;" src="{{asset('assets/images/bg/student.png')}}" alt="team meeting">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="left-image wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <img src="{{asset('assets/images/bg/domestic.jpg')}}" alt="person graphic">
          </div>
        </div>
        <div class="col-lg-8 align-self-center">
          <div class="services">
            <div class="row">
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                  <div class="icon">
                    <img src="{{asset('assets/images/bg/side.png')}}" alt="reporting">
                  </div>
                  <div class="right-text">
                    <h4>Why Choose Us</h4>
                    <p>WinterFel High is a school committed to scholarly excellence. With competent teachers, are out to educate the 
                      students to attain their potential. Moreever, our focus in students' talents with the provision of amazing outdoor facilities to assertain the best environment.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                  <div class="icon">
                    <img src="{{asset('assets/images/bg/mtrain.jpg')}}" alt="">
                  </div>
                  <div class="right-text">
                    <h4>Motto</h4>
                    <p>Sophisticated Elegance for Quality Assurance </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
                  <div class="icon">
                    <img src="{{asset('assets/images/bg/training.jpg')}}" alt="">
                  </div>
                  <div class="right-text">
                    <h4>Core Values</h4>
                    <p>
                       Integrity, Team work, Excellence, Commitment, Professionalism
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="1.1s">
                  <div class="icon">
                    <img src="{{asset('assets/images/bg/new7.jpg')}}" alt="">
                  </div>
                  <div class="right-text">
                    <h4>Mission and Vision</h4>
                    <p>To facilitate Teaching, Learning and
                      provide Guidance and Counselling Based on Spiritual Teaching
                      To come up with an all Round person</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="our-services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
          <div class="left-image">
            <img src="{{asset('assets/images/bg/class.jpg')}}" alt="">
          </div>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
          <div class="section-heading">
            <h2>Secure a Brighter <em>future</em> &amp; <span>Soar Higher in Professions</span> With Us</h2>
            <p>We offer quality training recognised internationally, a key to employment oportunitys through quality skills delivery</p>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="first-bar progress-skill-bar">
                <h4>Sponsored Learning</h4>
                <span>84%</span>
                <div class="filled-bar"></div>
                <div class="full-bar"></div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="second-bar progress-skill-bar">
                <h4>Qualified Instructors</h4>
                <span>88%</span>
                <div class="filled-bar"></div>
                <div class="full-bar"></div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="third-bar progress-skill-bar">
                <h4>Comprehensive Curriculum</h4>
                <span>94%</span>
                <div class="filled-bar"></div>
                <div class="full-bar"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="portfolio" class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h2>What WinterFel <em>Offers</em> &amp; What We <span>Provide</span></h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <a href="#">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="hidden-content">
                <h4>Access To Resources</h4>
                <p>With our two Main Sophisticated Libraries with elegant space to accomodate all, comes with a wider collection of reading materials </p>
              </div>
              <div class="showed-content">
                <img src="{{asset('test/assets/images/portfolio-image.png')}}" alt="">
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-sm-6">
          <a href="#">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
              <div class="hidden-content">
                <h4>Guidance and Counselling</h4>
                <p>Well reputed personnels to guide and counsel our student for good moral conduct, blessing to the community.</p>
              </div>
              <div class="showed-content">
                <img src="{{asset('test/assets/images/portfolio-image.png')}}" alt="">
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-sm-6">
          <a href="#">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="hidden-content">
                <h4>Entertainment</h4>
                <p>Being a techno-oriented institution, we offer the most current info-systems for entertainment to satisfy our students.</p>
              </div>
              <div class="showed-content">
                <img src="{{asset('test/assets/images/portfolio-image.png')}}" alt="">
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-sm-6">
          <a href="#">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.6s">
              <div class="hidden-content">
                <h4>Co-curricular Activities </h4>
                <p>Learning outside the classrom, naturing talents with our internationall recognised coaches.</p>
              </div>
              <div class="showed-content">
                <img src="{{asset('test/assets/images/portfolio-image.png')}}" alt="">
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div id="blog" class="our-blog section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="section-heading">
            <h2>WinterFel's <em>Trending</em> And Latest <span>Training Courses</span></h2>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="top-dec">
            <img src="{{asset('test/assets/images/blog-dec.png')}}" alt="">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="left-image">
            <a href="#"><img src="{{asset('assets/images/bg/staff.jpg')}}" alt="Workspace Desktop"></a>
            <div class="info">
              <div class="inner-content">
                <ul>
                  <li><i class="fa fa-calendar"></i> 2020</li>
                  <li><i class="fa fa-users"></i> Winterfel</li>
                  <li><i class="fa fa-folder"></i>High</li>
                </ul>
                <a href="#"><h4>Elegance &amp; Pedagogy</h4></a>
                <p>Winterfel High is a scholarly excellence training facility committed to empowering students deliver and secure key to Professions....</p>
                <div class="main-blue-button">
                  <a href="#">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="right-list">
            <ul>
              <li>
                <div class="left-content align-self-center">
                  <span><i class="fa fa-calendar"></i> 18 Mar 2021</span>
                  <a href="#"><h4>French &amp; Spanish</h4></a>
                  <p>A course to achieve a status of fluency in speaking French and Spanish</p>
                </div>
                <div class="right-image">
                  <a href="#"><img src="{{asset('assets/images/bg/french.png')}}" alt=""></a>
                </div>
              </li>
              <li>
                <div class="left-content align-self-center">
                  <span><i class="fa fa-calendar"></i> 14 Mar 2021</span>
                  <a href="#"><h4>CPA &amp; Programming</h4></a>
                  <p>Technology enthusiastic and an introductiory to programming basics...</p>
                </div>
                <div class="right-image">
                  <a href="#"><img src="{{asset('assets/images/bg/programming.jpg')}}" alt=""></a>
                </div>
              </li>
              <li>
                <div class="left-content align-self-center">
                  <span><i class="fa fa-calendar"></i> 06 Mar 2021</span>
                  <a href="#"><h4>Music &amp; Violin</h4></a>
                  <p>A course on musicals and trsining in violin playing...</p>
                </div>
                <div class="right-image">
                  <a href="#"><img src="{{asset('assets/images/bg/violin.jpg')}}" alt=""></a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <div class="section-heading">
            <h2>Feel Free To Send Us a Message</h2>
            <p> For more information about the courses feel free to contact us</p>
            <div class="phone-info">
              <h4>For any enquiry, Call: <span><i class="fa fa-phone"></i> <a class="tel" href="#">+254-740-096-095</a></span></h4>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="">
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="surname" name="surname" id="surname" placeholder="Surname" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>  
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-button ">Send Message</button>
                </fieldset>
              </div>
            </div>
            <div class="contact-dec">
              <img src="{{asset('test/assets/images/contact-decoration.png')}}" alt="contact">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
  