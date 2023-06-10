<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
    <title>Manish Chauhan-  Personal Portfolio </title>
    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">
    <!-- Google Font-->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300italic,300,100italic,100,400italic,500,500italic,700,900,900italic,700italic%7COswald:400,300,700' rel='stylesheet' type='text/css'>
    <!-- Design Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/scroll.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}" />
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/font-awesome.css') }}" />
    <!-- Portfolio Thumbnail / Slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/portfolio.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/carousel.css') }}">
    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/responsive.css') }}" />
    <!-- Pie Chart / Skills -->
   
  </head>
  <body>
    <div id="container" class="container">
      <!-- Left Menu / Logo-->
      <aside class="menu" id="menu">
        <div class="logo">
          <!-- Logo image-->
          <!-- Logo name-->
          <span>Manish Chauhan</span>
        </div>
        <!-- Mobile Navigation-->
        <a href="{{ url('#menu1') }}" class="menu-link"></a>
        <!-- Left Navigation-->
        <nav id="menu1" role="navigation">
          <a href="{{ url('#chapterintroduction') }}">
            <span id="link_introduction" class="active">Home</span>
          </a>
          <a href="{{ url('#chapterabout') }}">
            <span id="link_about">About</span>
          </a>
          <a href="{{ url('#chapterskills') }}">
            <span id="link_skills">Skills</span>
          </a>
          <a href="{{ url('#chapterexperience') }}">
            <span id="link_experience">Experience</span>
          </a>
          <a href="{{ url('#chaptereducation') }}">
            <span id="link_education">Education</span>
          </a>
          <!-- <a href="{{ url('#chapterportfolio') }}">
            <span id="link_portfolio">Portfolio</span>
          </a> -->
          <a href="{{ url('#chaptercontact') }}">
            <span id="link_contact">Contact</span>
          </a>
          
        </nav>
        <div class="social">
          <a href="https://www.facebook.com/" target="_blank" class="facebook">
            <i class="fa fa-facebook"></i>
          </a>
          <a href="https://twitter.com/" target="_blank" class="twitter">
            <i class="fa fa-twitter"></i>
          </a>
          <a href="https://plus.google.com/" target="_blank" class="google-plus">
            <i class="fa fa-google-plus"></i>
          </a>
        </div>
        <!-- <div class="copyright"> © Andrew Smith. <br> All Rights Reserved. </div> -->
      </aside>
      <!-- Go to top link for mobile device -->
      <a href="{{ url('#menu') }}" class="totop-link">Go to the top</a>
      <div class="content-scroller">
        <div class="content-wrapper">
          <!-- Introduction -->
          <article class="content introduction noscroll" id="chapterintroduction">
            <div class="inner">
              <h2>
                <span>HEllo, I'm</span>
                <br> Manish Chauhan
              </h2>
              <span class="title">Laravel Doveloper</span>
            </div>
            <div id="owl-demo" class="owl-carousel">
              <div class="item">
                <img src="{{ asset('/images/mk1.jpg') }}" alt="" />
              </div>
              <div class="item">
                <img src="{{ asset('/images/mk2.jpg') }}" alt="" />
              </div>
              <div class="item">
                <img src="{{ asset('/images/mk3.jpg') }}" alt="" />
              </div>
            </div> 
          </article>
          <!-- About -->
          <article class="content about white-bg" id="chapterabout">
            <div class="inner">
              <h2>About</h2>
              <div class="title-divider"></div>
              <div class="about-con">
                <ul>
                  <li>Name: Manish Chahan</li>
                  <li>Email:  <a href="{{ url('mailto:manishchauhan3043@gmail.com') }}">manishchauhan3043@gmail.com</a>
                  </li>
                  <li>Phone: (+91)9628817592</li>
                  <li>Date of birth: 10 July 2004</li>
                  <li>Address: Bankati, Basti ,Uttar Pradesh</li>
                  <li>Nationality:Indian</li>
                </ul>
                <!--<h3>Professional Profile</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. <br>
                </p>-->
                <!-- <a href="{{ url('') }}" class="button">Download resume as PDF format</a> -->
                <!-- <img src="{{ asset("/images/signature.jpg") }}" class="signature" alt="" /> -->
              </div>
            </div>
          </article>
          <!-- Skills -->
          <article class="content skills gray-bg" id="chapterskills">
            <div class="inner">
              <h2>Skills</h2>
              <div class="title-divider"></div>
              <h3>Just My Awesome Skills</h3>
              <div class="skills-con">
                <div class="container-sub margin-top50">
                  <div class="row">
                    <div class="col-6 margin-bottom50">
                      <div class="col-6">
                        <span class="chart" data-percent="75">
                          <span class="percent"></span>
                        </span>
                      </div>
                      <div class="col-6 chart-text">
                        <h4>Front End</h4>
                        <p>HTML5, CSS, Bootstrap.</p>
                        <p>Expert, 8 years</p>
                      </div>
                    </div>
                    <div class="col-6 margin-bottom50">
                      <div class="col-6">
                        <span class="chart" data-percent="88">
                          <span class="percent"></span>
                        </span>
                      </div>
                      <div class="col-6 chart-text">
                        <h4>Back End</h4>
                        <P> MySQLI</p>
                        <p>Expert, 1 years</p>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="col-6">
                        <span class="chart" data-percent="90">
                          <span class="percent"></span>
                        </span>
                      </div>
                      <div class="col-6 chart-text">
                        <h4>Scripting Language</h4>
                        <p>Core PHP, Java Script.</p>
                        <p>Expert, 1 years</p>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="col-6">
                        <span class="chart" data-percent="96">
                          <span class="percent"></span>
                        </span>
                      </div>
                      <div class="col-6 chart-text">
                        <h4>Framework </h4>
                        <P>Laravel, </p>
                        <p>Expert, 1 years</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="full-divider"></div>
                <div class="container-sub skill-list">
                  <div class="row">
                    <h3>Knowledge</h3>
                    <div class="col-4 margin-top10">
                      <ul>
                        <li>Google Analythics & SEO</li>
                        <li>Instal and Configure</li>
                        <li>E-commerce Platform</li>
                        <li>Color theory knowledge</li>
                      </ul>
                    </div>
                    <div class="col-4 margin-top10">
                      <ul>
                        <li>Domain Management</li>
                        <li>Database Management</li>
                        <li>Project Management</li>
                        <li>Hosting Management.</li>
                      </ul>
                    </div>

                    <div class="col-4 margin-top10">
                      <ul>
                        <li>Web Usability</li>
                        <li>Grid & Layout</li>
                        <li>Portrait Retouching</li>
                        <li>C-Panel</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="full-divider"></div>
                <div class="container-sub">
                  <div class="row">
                    <h3>Language Skills</h3>
                    <div class="progressbar-main margin-top50">
                      <div class="progress-bar-description">English Experienced</div>
                      <div id="progressBar" class="progress">
                        <div class="progress-value"></div>
                      </div>
                    </div>
                    <div class="progressbar-main margin-top40">
                      <div class="progress-bar-description">French Advanced</div>
                      <div id="progressBar2" class="progress">
                        <div class="progress-value"></div>
                      </div>
                    </div>
                    <div class="progressbar-main margin-top40">
                      <div class="progress-bar-description">German Basic</div>
                      <div id="progressBar3" class="progress">
                        <div class="progress-value"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </article>
          <!-- Experience -->
          <article class="content experience white-bg" id="chapterexperience">
            <div class="inner">
              <h2>Experience</h2>
              <div class="title-divider"></div>
              <h3>1 Years Experience!</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.</p>
              <div class="experience-con">
                <div class="container-sub">
                  <div class="full-divider"></div>
                  <div class="row">
                    <div class="experience-details">
                      <div class="col-6 margin-bottom50 margin-top50">
                        <div class="col-3 icon-block">
                          <!--<i class="fa fa-send-o"></i>>-->
                        </div>
                        <div class="flot-left">
                          <h5> I-ZYSK Solution</h5>
                          <h4> Sowftwere Doveloper Developer(Tech Lead)</h4>
                          <span>19 May 2021 – Present</span>
                        </div>
                      </div>
                      <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                    </div>
                    <div class="full-divider"></div>
                    <div class="experience-details">
                      <div class="col-6 margin-bottom50 margin-top50">
                        <div class="col-3 icon-block">
                          <!--<i class="fa fa-briefcase"></i>-->
                        </div>
                        
                      </div>
                      <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                    </div>
                    <div class="full-divider"></div>
                    <div class="experience-details">
                      <div class="col-6 margin-bottom50 margin-top50">
                        <div class="col-3 icon-block">
                          <!--<i class="fa fa-arrows-alt"></i>-->
                        </div>
                       
                      </div>
                      <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                    </div>
                    <div class="full-divider"></div>
                    <div class="experience-details">
                      <div class="col-6 margin-bottom50 margin-top50">
                        <div class="col-3 icon-block">
                          <!--<i class="fa fa-quote-right"></i>-->
                        </div>
                        
                      </div>
                      <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                    </div>
                    <div class="full-divider"></div>
                    <div class="experience-details">
                      <div class="col-6 margin-bottom50 margin-top50">
                        <div class="col-3 icon-block">
                          <!--<i class="fa fa-bullhorn"></i>-->
                        </div>
                       
                      </div>
                      <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </article>
          <!-- Education -->
          <article class="content education gray-bg" id="chaptereducation">
            <div class="inner">
              <h2>Education</h2>
              <div class="title-divider"></div>
              <h3>Just My Education</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.</p>
              <div class="education-con">
                <div class="container-sub">
                  <div class="full-divider"></div>
                  <div class="row">
                    <div class="education-details">
                      <div class="col-6 margin-bottom50 margin-top50">
                        <div class="col-3 icon-block">
                          <!--<i class="fa fa-photo"></i>-->
                        </div>
                        <div class="flot-left">
                          <h5>University of Siddharth Nagar</h5>
                          <h4>Bachelor of Art</h4>
                          <span>2020 - 2023</span>
                        </div>
                      </div>
                      <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                    </div>
                    <div class="full-divider"></div>
                    <!-- <div class="education-details">
                      <div class="col-6 margin-bottom50 margin-top50">
                        <div class="col-3 icon-block">
                          <i class="fa fa-laptop"></i>
                        </div>
                        <div class="flot-left">
                          <h5>Boston State University</h5>
                          <h4>Visual Art & Design</h4>
                          <span>2006 - 2007</span>
                        </div>
                      </div>
                      <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                    </div> -->
                    <!-- <div class="full-divider"></div> -->
                    <!-- <div class="education-details">
                      <div class="col-6 margin-bottom50 margin-top50">
                        <div class="col-3 icon-block">
                          <i class="fa fa-life-bouy"></i>
                        </div>
                        <div class="flot-left">
                          <h5>Boston State University</h5>
                          <h4>Degree of Design</h4>
                          <span>2004 - 2005</span>
                        </div>
                      </div>
                      <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
          </article>
          <!-- Pportfolio -->
          <!--<article class="content portfolio white-bg" id="chapterportfolio">
            <div class="inner">
              <h2>Portfolio</h2>
              <div class="title-divider"></div>
              <h3>Our portfolio features a variety of projects and services</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.</p>
              <div class="portfolio-con">
                <div class="container-sub margin-top50">
                  <div class="row">
                    <div id="grid-gallery" class="grid-gallery">
                      <section class="grid-wrap">
                        <ul class="grid">
                          <li>
                            <figure>
                              <img src="{{ asset('/images/work1.jpg') }}" alt="" />
                              <figcaption>
                                <div class="figcaption-details">
                                  <img src="{{ asset('/images/icon-plus.png') }}" height="82" width="82" alt="" />
                                  <h3>The Flavour Restaurant</h3>
                                  <span>Website Design & Development</span>
                                </div>
                              </figcaption>
                            </figure>
                          </li>
                          <li>
                            <figure>
                              <img src="{{ asset('/images/work2.jpg') }}" alt="" />
                              <figcaption>
                                <div class="figcaption-details">
                                  <img src="{{ asset('/images/icon-plus.png') }}" height="82" width="82" alt="" />
                                  <h3>Herbal Beauty Salon</h3>
                                  <span>Photography</span>
                                </div>
                              </figcaption>
                            </figure>
                          </li>
                          <li>
                            <figure>
                              <img src="{{ asset('/images/work3.jpg') }}" alt="" />
                              <figcaption>
                                <div class="figcaption-details">
                                  <img src="{{ asset('/images/icon-plus.png') }}" height="82" width="82" alt="" />
                                  <h3>Kayra Modelleri</h3>
                                  <span>Branding and Identity</span>
                                </div>
                              </figcaption>
                            </figure>
                          </li>
                          <li>
                            <figure>
                              <img src="{{ asset('/images/work4.jpg') }}" alt="" />
                              <figcaption>
                                <div class="figcaption-details">
                                  <img src="{{ asset('/images/icon-plus.png') }}" height="82" width="82" alt="" />
                                  <h3>Fashion and You</h3>
                                  <span>APPS and Web Design</span>
                                </div>
                              </figcaption>
                            </figure>
                          </li>
                          <li>
                            <figure>
                              <img src="{{ asset('/images/work5.jpg') }}" alt="" />
                              <figcaption>
                                <div class="figcaption-details">
                                  <img src="{{ asset('/images/icon-plus.png') }}" height="82" width="82" alt="" />
                                  <h3>Whole Food Flour</h3>
                                  <span>Branding and Identity</span>
                                </div>
                              </figcaption>
                            </figure>
                          </li>
                        </ul>
                      </section>
                      <section class="slideshow">
                        <ul>
                          <li>
                            <figure>
                              <figcaption>
                                <h3>The Flavour Restaurant</h3>
                                <span>Website Design & Development</span>
                                <p>Kale chips lomo biodiesel stumptown Godard Tumblr, mustache sriracha tattooed cray aute slow-carb placeat delectus. Letterpress asymmetrical fanny pack art party est pour-over skateboard anim quis, ullamco craft beer.</p>
                              </figcaption>
                               <div id="owl-demo1" class="owl-carousel">
                                <div class="item">
                                  <img src="{{ asset("/images/work-details1.jpg") }}" alt="" />
                                </div>
                                <div class="item">
                                  <img src="{{ asset("/images/work-details2.jpg") }}" alt="" />
                                </div>
                                <div class="item">
                                  <img src="{{ asset("/images/work-details3.jpg") }}" alt="" />
                                </div>
                                <div class="item">
                                  <img src="{{ asset("/images/work-details4.jpg") }}" alt="" />
                                </div>
                                <div class="item">
                                  <img src="{{ asset("/images/work-details5.jpg") }}" alt="" />
                                </div>
                              </div>
                            </figure>
                          </li>
                          <li>
                            <figure>
                              <figcaption>
                                <h3>Herbal Beauty Salon</h3>
                                <span>Photography</span>
                                <p>Kale chips lomo biodiesel stumptown Godard Tumblr, mustache sriracha tattooed cray aute slow-carb placeat delectus. Letterpress asymmetrical fanny pack art party est pour-over skateboard anim quis, ullamco craft beer.</p>
                              </figcaption>
                              <img src="{{ asset('/images/work2.jpg') }}" alt="" />
                            </figure>
                          </li>
                          <li>
                            <figure>
                              <figcaption>
                                <h3>Kayra Modelleri</h3>
                                <span>Branding and Identity</span>
                                <p>Kale chips lomo biodiesel stumptown Godard Tumblr, mustache sriracha tattooed cray aute slow-carb placeat delectus. Letterpress asymmetrical fanny pack art party est pour-over skateboard anim quis, ullamco craft beer.</p>
                              </figcaption>
                              <div id="owl-demo2" class="owl-carousel">
                                <div class="item">
                                  <img src="{{ asset('/images/work3.jpg') }}" alt="" />
                                </div>
                                <div class="item">
                                  <img src="{{ asset('/images/work1.jpg') }}" alt="" />
                                </div>
                                <div class="item">
                                  <img src="{{ asset('/images/work2.jpg') }}" alt="" />
                                </div>
                                <div class="item">
                                  <img src="{{ asset('/images/work4.jpg') }}" alt="" />
                                </div>
                                <div class="item">
                                  <img src="{{ asset('/images/work5.jpg') }}" alt="" />
                                </div>
                              </div>
                            </figure>
                          </li>
                          <li>
                            <figure>
                              <figcaption>
                                <h3>Fashion and You</h3>
                                <span>APPS and Web Design</span>
                                <p>Kale chips lomo biodiesel stumptown Godard Tumblr, mustache sriracha tattooed cray aute slow-carb placeat delectus. Letterpress asymmetrical fanny pack art party est pour-over skateboard anim quis, ullamco craft beer.</p>
                              </figcaption>
                              <iframe width="854" height="480" src="http://www.youtube.com/embed/ZwzY1o_hB5Y" frameborder="0" allowfullscreen></iframe>
                            </figure>
                          </li>
                          <li>
                            <figure>
                              <figcaption>
                                <h3>Whole Food Flour</h3>
                                <span>Branding and Identity</span>
                                <p>Kale chips lomo biodiesel stumptown Godard Tumblr, mustache sriracha tattooed cray aute slow-carb placeat delectus. Letterpress asymmetrical fanny pack art party est pour-over skateboard anim quis, ullamco craft beer.</p>
                              </figcaption>
                              <img src="{{ asset('/images/work5.jpg') }}" alt="" />
                            </figure>
                          </li>
                        </ul>
                        <nav>
                          <span class="fa nav-prev"></span>
                          <span class="fa nav-next"></span>
                          <span class="fa nav-close"></span>
                        </nav>
                      </section>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </article>-->
          <!-- Contact -->
          <article class="content contact gray-bg" id="chaptercontact">
            <div class="inner">
              <h2>Contact</h2>
              <div class="title-divider"></div>
              <h3>Let's Keep In Touch</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.</p>
              <div class="full-divider"></div>
              <div class="contact-con margin-top50">
                <div class="container-sub">
                  <div class="row">
                    <div class="contact-details">
                      <div class="col-6">
                        <div class="contact-text">
                          <div class="col-2 icon-block address">
                            <i class="fa fa-map-marker"></i>
                          </div>
                          <div class="flot-left">
                            <strong>Manish Chauhan</strong>
                            <br>Address: Bankati, Basti,Uttar Pradesh, India.</li>

                          </div>
                        </div>
                        <div class="contact-text">
                          <div class="col-2 icon-block phone">
                            <i class="fa fa-phone"></i>
                          </div>
                          <div class="flot-left">
                            <strong>Phone</strong>
                            <br> (+91) 9628817592
                          </div>
                        </div>
                        <div class="contact-text">
                          <div class="col-2 icon-block email">
                            <i class="fa fa-envelope"></i>
                          </div>
                          <div class="flot-left">
                            <strong>Email</strong>
                            <br>
                            <a href="{{ url('mailto:manishchauhan3043@gmail.com') }}">manishchauhan3043@gmail.com</a>
                          </div>
                        </div>
                      </div>
                     
                    </div>
                  </div>
                </div>
                <div class="full-divider"></div>
             
              </div>
            </div>
          </article>
          <!-- Introduction -->
          <article class="content introduction-end" id="chapterthankyou">
            <div class="inner">
              <div class="introduction-end-con margin-top50">
                <h3>
                  <strong>Manish Chauhan</strong>
                </h3>
                <div id="rotate" class="rotate">
                  <div>
                    <span>awesome.</span>
                  </div>
                  <div>
                    <span>invincible.</span>
                  </div>
                  <div>
                    <span>unbeatable.</span>
                  </div>
                  <div>
                    <span>indestructible.</span>
                  </div>
                </div>
              </div>
            </div>
          </article>
        </div>
        <!-- content-wrapper -->
      </div>
      <!-- content-scroller -->
    </div>

</div>










<script type="text/javascript" src="{{ asset('/js/jquery-2.0.3.min.js') }}"></script>
    <!-- Send Email -->
    <script type="text/javascript" src="{{ asset('/js/sendemail.js') }}"></script>
    <!-- Progressbar / Skills-->
    <script type="text/javascript" src="{{ asset('/js/progressbar.js') }}"></script>
    <!-- Portfolio-->
    <script src="{{ asset('/js/modernizr.custom.js') }}"></script>




    <script type="text/javascript" src="{{ asset('/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/head.min.js') }}"></script>
    <!-- Portfolio Thumbnail -->
    <script type="text/javascript" src="{{ asset('/js/imagesloaded.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/masonry.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/class_helper.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/grid_gallery.js') }}"></script>
    <!-- Portfolio Grid -->
    <script>
      new CBPGridGallery(document.getElementById('grid-gallery'));
    </script>
    <!-- Portfolio Slider-->
    <script type="text/javascript" src="{{ asset('/js/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/jquery.easypiechart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/text.rotator.js') }}"></script>
    <!-- Page Scrolling -->
    <script>
      head.js({
        mousewheel: "js/jquery.mousewheel.js"
      }, {
        mwheelIntent: "js/mwheelIntent.js"
      }, {
        jScrollPane: "js/jquery.jscrollpane.min.js"
      }, {
        history: "js/jquery.history.js"
      }, {
        stringLib: "js/core.string.js"
      }, {
        easing: "js/jquery.easing.1.3.js"
      }, {
        smartresize: "js/jquery.smartresize.js"
      }, {
        page: "js/jquery.page.js"
      });
    </script>
    <!-- Fit Video -->
    <script type="text/javascript" src="{{ asset('/js/jquery.fitvids.js') }}"></script>
    <!-- All Javascript Component-->
    <script src="{{ asset('/js/settings.js') }}"></script>
  </body>
  <!-- Mirrored from themezaa.com/html/resume/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Feb 2023 07:37:28 GMT -->
</html>