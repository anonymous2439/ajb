@extends('layouts.app')

@section('content')
 <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
          <span class="sr-only">Toggle Navigation </span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/"><img class="animated bounceInLeft" src="img/ajblogo.png" width="40%"></a>
      </div>
      <div class="collapse navbar-collapse" id="navbar-collapse-main">
        <ul class="nav navbar-nav navbar-right">
          <li class="nav-item"><a href="#home" class="nav-link scroll" >Home</a></li>
          <li class="nav-item"><a href="#aboutus" class="nav-link scroll" >About Us</a></li>
          <li class="nav-item"><a href="#goals" class="nav-link scroll">Goals</a></li>
          <li class="nav-item"><a href="#services" class="nav-link scroll">Services</a></li>
          <li class="nav-item"><a href="#team" class="nav-link scroll">Meet the Team</a></li>
          <li class="nav-item"><a href="#why" class="nav-link scroll">Why Us?</a></li>
          <li class="nav-item"><a href="#contact" class="nav-link scroll">Contact Us</a></li>
        </ul>
      </div>
    </div>
 </nav>

<div id="home">
  <div class="landing-text animated fadeIn">
        <form method="get" action="/jobsearch">
          <div class="form-box">
            <h1>AJB Human Resources & Consultancy</h1>
            <h3>Your trusted career partner.</h3>
            <button class="search-btn animated pulse" type="submit">Apply Now!</button>
          </div>
        </form>
  </div>
</div>

<section id="aboutus" style="background:#ededed">
<div class="padding">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
         <img src="img/aboutus.jpg" data-aos="fade-in">
      </div>
      <div class="col-sm-6 text-center" data-aos="fade-in">
        <h2>Welcome To AJB Human Resources & Consultancy</h2>
        <p class="lead">AJB Human Resources & Consultancy is a
                        rapid growing Human Resources Consultancy.
                        We are legally registered business that deals
                        with Recruitment Manpower Supply,
                        Selection, Technical and Marketing, HR
                        Consultancy. We offer a high caliber company
                        clients an end to end solutions in terms of
                        manpower development and supply. Our clients
                        cater various category and represents the entire
                        spectrum of Hospitality, Technical, Industrial,
                        and Management Industry.</p>
      </div>
    </div>
  </div>
</div>
</section>

<section id="goals">
<div class="padding">
  <div class="container">
    <!--mission-->
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <img src="img/missio.png" class="img-responsive" data-aos="fade-in">
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" data-aos="fade-in">
        <h4><b><u>Our Mission</u></b></h4>
        <p>Create Economic opportunity for our client of the global workforce through the ongoing development of the world's fastest economic growth in UAE. </p>
      </div>
	 </div>
   <br>
    <!--vision-->
    <div class ="row pt-2 pt-md-2">    
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" data-aos="fade-in">
        <h4><b><u>Our Vision</u></b></h4>
        <p>To be recognized as Trusted Career Partner and be the international model consulting company leading in Human Resource </p>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <img src="img/vision.png" class="img-responsive" data-aos="fade-in">
      </div>
    </div>
    <!--core values-->
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <img src="img/corevalues.png" class="img-responsive" style="width: 100%;" data-aos="fade-in">
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" data-aos="fade-in">
        <h4><b><u>Core Values</u></b></h4>
        <p><b>Commitment</b> - We dedicated to the success of our client and to one another.<br><br>  <b>Above and Beyond</b> - We continue to aim high above and beyond even the highest expectations.<br><br>  <b>Relationships</b> - We always care and value our relationship for our costumer and clients.<br><br>  <b>Efficiency</b> - We obtain the b est possible outcome by maintaining a dynamic relevant manpower demands in our clients.<br><br>  <b>Excellence</b> - We believe that Excellence is the main driver for achieving goals efficiently and effectively and to unleashing our potentials and stretching our limits.<br><br>  <b>Reliability</b> - To be a trusted and reliable partner in our clients. </p>
      </div>
      </div>
      <br>
      <!--goals-->
    <div class="row">
      
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" data-aos="fade-in">
        <h4> <b><u>Our Goals</u></b></h4>
        <p>Delivering you with the best Human Resource Consultancy needs, to ensure the successful of your business. In addition, we will access worldwide to gather different specialist and professionals who have extensive experienced in various fields of categories. We committed to make sure those categories are not just papers but they actually work and benefit your company. </p>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <img src="img/goal.png" class="img-responsive" style="padding-top: 70px; width: 100%;" data-aos="fade-in">
      </div>

    </div>
  </div>
</div>
</section>
<div id="fixed">

</div>
<section id="services" style="background:#ededed">
  <div class="padding">
    <div class="container" data-aos="fade-in">
      <div class="row">
        <h2><b><u>Services</u></b></h2>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
    <li data-target="#myCarousel" data-slide-to="6"></li>
    <li data-target="#myCarousel" data-slide-to="7"></li>
    <li data-target="#myCarousel" data-slide-to="8"></li>
    <li data-target="#myCarousel" data-slide-to="9"></li>
  </ol>

  <!-- Wrapper for slides -->
  <!--item1-->
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/industrial1.jpg" alt="Service">
    </div>

    <!--item2-->
    <div class="item">
      <img src="img/management1.jpg" alt="Service">
    </div>

    <!--item3-->
    <div class="item">
      <img src="img/construction1.jpg" alt="Service">
    </div>

    <!--item4-->
    <div class="item">
      <img src="img/beautyandwellness1.jpg" alt="Service">
    </div>


    <!--item5-->
    <div class="item">
      <img src="img/sales1.jpg" alt="Service">
    </div>


    <!--item6-->
    <div class="item">
      <img src="img/foodandbeverage1.jpg" alt="Service">
    </div>


    <!--item7-->
    <div class="item">
      <img src="img/hospitality1.jpg" alt="Service">
    </div>


    <!--item8-->
    <div class="item">
      <img src="img/cleaning&maintenance1.jpg" alt="Service">
    </div>


    <!--item9-->
    <div class="item">
      <img src="img/households1.jpg" alt="Service">
    </div>

      <!--item10-->
    <div class="item">
      <img src="img/safetyandsecurity.jpg" alt="Service">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      </div>
    </div>
  </div>

</section>

<section id="team">
        <div class="container">
          <h1><b><u data-aos="fade-in">Meet the Team</u></b></h1>
            <div class="row">

               <div class="col-md-offset-3 col-md-3 profile text-center">
                  <div class="img-box">
                    <img style="height: 350px; display: block; margin-left: auto; margin-right: auto;" src="img/group/emp1.jpg" class="img-responsive" data-aos="zoom-in-up" data-aos-duration="3000">
                      <ul>
                        <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                        <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                        <a href="#"><li><i class="fa fa-instagram"></i></li></a>
                      </ul>
                  </div>
                  <h2>Alma T. Sabares</h2>
                  <h3>C.E.O</h3>
                </div>

                <div class="col-md-3 profile text-center">
                  <div class="img-box">
                    <img style="height: 350px; display: block; margin-left: auto; margin-right: auto;" src="img/group/emp2.jpg" class="img-responsive" data-aos="zoom-in-up" data-aos-duration="3000">
                      <ul>
                        <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                        <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                        <a href="#"><li><i class="fa fa-instagram"></i></li></a>
                      </ul>
                  </div>
                  <h2>Ms. Eliza</h2>
                  <h3>Operation Manager</h3>
                </div>


            </div>
        </div>
    </section>

<section id="why" style="background:#ededed" class="animated fadeIn">
<div class="padding">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
         <img src="img/whyus.png" data-aos="fade-in">
      </div>
      </div>
    	<div class="row">
       <div class="col-sm-12">
        <h4> <b><u data-aos="fade-in">Why Choose Us</u></b></h4>
        <p data-aos="fade-in" class="lead">AJB Human Resource Consultancy   is made up of a team of human resources professionals  whose main goal is to quickly and effectively meet the needs  of both employers and job seekers. At AJB , there is not just a single consultant acting on your behalf, an entire team made up of people with different but complementary skills of work in synergy to evaluate and look the very best possible employee or employer for you. </p>
      </div>

    </div>
  </div>
</div>
</section>

<section id="contact">
<footer class="container-fluid text-center fixed-bottom">
  <div class="row">
    <div class="col-sm-4">
      <h3 style="padding-top: 25px;"><b><u>Contact Us</u></b></h3>
      <br>
      <h4>Whatsapp number</h4>
      <h4><i class="fa fa-mobile" aria-hidden="true"></i> +971 521230983</h4>

      <h4 style="margin-top: 15px;">Calling number</h4>
      <h4><i class="fa fa-phone" aria-hidden="true"></i> 0547548159</h4>
    </div>
    <div class="col-sm-4">
      <h3 style="padding-top: 25px;"><b><u>Connect</u></b></h3>
      <a href="https://www.facebook.com/AJB-Human-Resource-Consultancy-849476405445478/?modal=admin_todo_tour" class="fa fa-facebook"></a>
      <a href="https://l.messenger.com/l.php?u=https%3A%2F%2Ftwitter.com%2Fajbrhcnsultancy&h=AT0AV7KRqwXlOWjgX3wR6RorGy_Ww3fLoVi9XqlzWmiSJFei8WvnR63VqierSFpt4z1k4O_q5R6wZNBUe4m83Wynx9iMmDt3J-Y-VkTRqVqlQbau9uPizKE_U5cXWmp6EvvF" class="fa fa-twitter"></a>
      <a href="https://l.messenger.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2Fajbhrconsultancy19%2F&h=AT0AV7KRqwXlOWjgX3wR6RorGy_Ww3fLoVi9XqlzWmiSJFei8WvnR63VqierSFpt4z1k4O_q5R6wZNBUe4m83Wynx9iMmDt3J-Y-VkTRqVqlQbau9uPizKE_U5cXWmp6EvvF" class="fa fa-instagram"></a>
    </div>
    <div class="col-sm-4">
      <img src="img/ajblogo.png" class="icon" style="padding-top: 25px;">
    </div>
  </div>
</footer>
</section>


<script>
   $(".scroll").on('click', function(e) {
     e.preventDefault();
     var target = $(this).attr('href');
     $('html, body').animate({
       scrollTop: ($(target).offset().top)
     }, 1000);
  });

</script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
    AOS.init({
  // Global settings:
  disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
  initClassName: 'aos-init', // class applied after initialization
  animatedClassName: 'aos-animate', // class applied on animation
  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
  throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  offset: 120, // offset (in px) from the original trigger point
  delay: 0, // values from 0 to 3000, with step 50ms
  duration: 800, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations
  once: false, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

});
  </script>

@endsection
