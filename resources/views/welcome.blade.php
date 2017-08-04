<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Hieu Tran</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700|Cardo:400,400italic,700">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font-awesome-animation.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- onepage scroll stylesheet-->
    <link rel="stylesheet" href="css/onepage-scroll.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    
</head>
<body>
    <div class="wrapper">
      <div class="main">
        <!-- page 1-->
        <section id="page1">
          <div class="overlay"></div>
          @if(Session::has('success'))
            <div class="alert alert-info">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>  
                {{Session::get('success')}}
            </div>
          @endif
          <div class="content">
            <div class="container clearfix">
              <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-12">
                  <p class="italic">Oh, hello, nice to meet you!</p>
                  <h1>My name is Hieu Tran.</h1>
                  <p class="italic">"Any fool can write code a computer can understand. Good programmers write code that humans can understand." -Martin Fowler </p>
                  <p class="italic">I am a Freelance Developer and Software Engineer</p>
                </div>
              </div>
            </div>
          </div>
          <div class="icon faa-float animated"><i class="fa fa-angle-double-down"></i></div>
        </section>
        <!-- page 2-->
        <section id="page2">
          <div class="content">
            <div class="container clearfix">
              <div class="row">
                <div class="col-md-6"> 
                  <h2 class="heading">About me</h2>
                  <p class="lead">
                    while(true) 
                  <br>  &emsp;if(hungry) 
                  <br>    &emsp;&emsp;eat 
                  <br>  &emsp;else if (tired) 
                  <br>    &emsp;&emsp;drink tea
                  <br>  &emsp;else
                  <br>    &emsp;&emsp;code
                  </p>
                  <p> Coding is my passion. When stress, I relax by working out, playing sports, or fishing. I love cooking, one day I will own a food truck. </p>
                  <p> My current job is a Field Prototype Engineer at Mercedes-Benz | Future Transportation North America </p>
                  <p> On my free time I work on iOS, Android, and Web projects. Please feel free to check out my portfolio. If need, <b>CONTACT ME.</b> </p>
                </div>
                <div class="col-md-5 col-md-offset-1">
                  <p><img src="img/headshot.jpg" alt="" class="img-responsive img-circle"></p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- page 3 - class section-gray adds gray background-->
        <section id="page3" class="section-gray">
          <div class="content">
            <div class="container clearfix">
              <div class="row services">
                <div class="col-md-12">
                  <h2 class="heading">Services</h2>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="box">
                        <div class="icon"><i class="fa fa-desktop"></i></div>
                        <h4 class="heading">WEB</h4>
                        <p><b>LAMP</b> is my cooking tools, but I can handle a <b>Python</b> or <b>Ruby</b> knife. To make a dish look presentable, I use <b>Javascript</b> and to garnish I use <b>CSS</b></p>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="box">
                        <div class="icon"><i class="fa fa-mobile"></i></div>
                        <h4 class="heading">iOS</h4>
                        <p><b>Swift</b> is my knife. <b>Objective-C</b> is my cutting board. With this combination my knife skills are near perfection.</p>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="box">
                        <div class="icon"><i class="fa fa-android"></i></div>
                        <h4 class="heading">ANDROID</h4>
                        <p>My stove is <b>Java</b>. I create wonderful Apps with this stove. </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section id="page4">
          <div class="content">
            <div class="container clearfix">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="heading">Portfolio</h2>
                  <p class="text-center">Browse my work!</p>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="box"><a href="https://reinvizion.com" title="" target="_blank"><img src="img/reinvizion.jpg" alt="" class="img-responsive"></a></div>
                    </div>
                    <div class="col-sm-4">
                      <div class="box"><a href="#" title=""><img src="img/zombie.jpg" alt="" class="img-responsive"></a></div>
                    </div>
                    <div class="col-sm-4">
                      <div class="box"><a href="#" title=""><img src="img/xblaster.jpg" alt="" class="img-responsive"></a></div>
                    </div>
                  </div>
{{--                   <div class="row">
                    <div class="col-sm-4">
                      <div class="box"><a href="#" title=""><img src="img/portfolio-4.jpg" alt="" class="img-responsive"></a></div>
                    </div>
                    <div class="col-sm-4">
                      <div class="box"><a href="#" title=""><img src="img/portfolio-5.jpg" alt="" class="img-responsive"></a></div>
                    </div>
                    <div class="col-sm-4">
                      <div class="box"><a href="#" title=""><img src="img/portfolio-6.jpg" alt="" class="img-responsive"></a></div>
                    </div>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- page 5-->
{{--         <section id="page5" class="section-gray">
          <div class="content">
            <div class="container clearfix">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="heading">Text page</h2>
                  <div class="row">
                    <div class="col-sm-6">
                      <p>Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh. </p>
                      <p>Betrayed cheerful declared end and. Questions we additions is extremely incommode. Next half add call them eat face. Age lived smile six defer bed their few. Had admitting concluded too behaviour him she. Of death to or to being other. </p>
                    </div>
                    <div class="col-sm-6">
                      <p>Effects present letters inquiry no an removed or friends. Desire behind latter me though in. Supposing shameless am he engrossed up additions. My possible peculiar together to. Desire so better am cannot he up before points. Remember mistaken opinions it pleasure of debating. Court front maids forty if aware their at. Chicken use are pressed removed. </p>
                      <p>Saw yet kindness too replying whatever marianne. Old sentiments resolution admiration unaffected its mrs literature. Behaviour new set existence dashwoods. It satisfied to mr commanded consisted disposing engrossed. Tall snug do of till on easy. Form not calm new fail. </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section> --}}
        <!-- page 6-->
        <section id="page6">
          <div class="content">
            <div class="container clearfix">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="heading">Contact</h2>
                  <div class="row">
                    <div class="col-md-6">
                      <form id="contact-form" method="post" action="sendMessage" class="contact-form">
                        {{ csrf_field() }}
                        <div class="controls">
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label for="name">Your firstname *</label>
                                <input type="text" name="name" placeholder="Enter your firstname" required="required" class="form-control">
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label for="surname">Your lastname *</label>
                                <input type="text" name="surname" placeholder="Enter your  lastname" required="required" class="form-control">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="surname">Your email *</label>
                            <input type="email" name="email" placeholder="Enter your  email" required="required" class="form-control">
                          </div>
                          <div class="form-group">
                            <label for="surname">Your message for me *</label>
                            <textarea rows="4" name="message" placeholder="Enter your message" required="required" class="form-control"></textarea>
                          </div>
                          <div class="text-center">
                            <input type="submit" name="submit" value="Send message" class="btn btn-primary btn-block">
                          </div>
                        </div>
                      </form>

                    </div>
                    <div class="col-md-6">
                      <p>If you have inquiry about work or a freelance project. Feel free to send me a message.</p>
                      <p>Checkout my LinkedIn and Github</p>
                      <p class="social">
                        <a href="https://www.linkedin.com/in/hdtran89/" title="" class="linkedin" target="_blank"><i class="fa fa-linkedin-square fa-lg"></i>
                        <a href="https://github.com/Hdtran89" title="" class="github"target="_blank"><i class="fa fa-github fa-lg"></i></a>
                      </p>
                    </div>
                  </div>
                  <div class="row copyright">
                    <div class="col-md-6">
                      <p>&copy;2016 Hieu Tran</p>
                    </div>
                    <div class="col-md-6">
                      <p class="credit">Code by Hieu Tran</p>
                      <p class="credit">Template by <a href="https://bootstrapious.com/portfolio-themes" target="_blank">Bootstrapious</a></p>
                       <!-- Not removing these links is part of the license conditions of the template. Thanks for understanding :) If you want to use the template without the attribution links, you can do so after supporting further themes development at https://bootstrapious.com/donate  -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    <!-- Javascript files-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/jquery.onepage-scroll.js"></script>
    <script src="js/front.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');

    </script>
  </body>
</html>
