<style>
span.dot.active{
  background:#000;
}
</style>
  <section id="intro" class="clearfix align-middle" style="background:url('<?= base_url()?>image/home1.jpg') center  no-repeat;background-size: cover;height:100vh">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
          <h2 class="text-white text-left">Create.<br>Co-work.<br>Collaborate.</h2>
        </div>
  
        <div class="col-md-6 align-self-center lap" style="right:0px;">
          <div class="slideshow-container1" style="right:0px;">
            <div class="mySlides1" style="right:0px;">
              <div class="row">
                  <div class="col-md-9 col-sm-12 col-xs-12 text-justify">
                      <h3 class="text-left">News</h3>
                      <q>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</q><br>
                      <p>22, Jan.19</p>
                    </div>
                <div class="col-md-3 col-sm-12 col-xs-12" style="text-align:start">
                    <a class="prev1" onclick="plusSlides1(-1)">❮</a>
                    <a class="next1" onclick="plusSlides1(1)">❯</a>
                </div>
            </div>
          </div>
            
          <div class="mySlides1 align-self-center" style="right:0px;">
              <div class="row">
                  <div class="col-md-9 col-sm-12 col-xs-12 text-justify">
                      <h3 class="text-left">News</h3>
                      <q>ext of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</q><br>
                      <p>22, Jan.19</p>
                    </div>
                <div class="col-md-3 col-sm-12 col-xs-12" style="text-align:start">
                    <a class="prev1" onclick="plusSlides1(-1)">❮</a>
                    <a class="next1" onclick="plusSlides1(1)">❯</a>
                </div>
            </div>
          </div>
            
          <div class="mySlides1 align-self-center" style="right:0px;">
              <div class="row">
                  <div class="col-md-9 col-sm-12 col-xs-12 text-justify">
                      <h3 class="text-left">News</h3>
                      <q >Lorem Ipsum is simply ing industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</q><br>
                      <p>22, Jan.19</p>
                    </div>
                <div class="col-md-3 col-sm-12 col-xs-12" style="text-align:start">
                    <a class="prev1" onclick="plusSlides1(-1)">❮</a>
                    <a class="next1" onclick="plusSlides1(1)">❯</a>
                </div>
            </div>
          </div>
        </div>
        </div>
       
        <div class="col-md-6 position-absolute lap" style="bottom: 20px; left: 50px;">
          <h4 class="text-white" ><i class="fa fa-map-marker"></i> CRYSTAL TOWER</h4>
        </div>
        <div class="col-md-6 position-absolute"  style="bottom: 20px; right: 50px;color:white;">
            <h2 class="text-white text-right"><a style="color:white;" href="#" id="bookingbutton">Booking</a></h2>
        </div>
        <div class="col-md-6  position-absolute mob " style="bottom: 10%;">
            <h4 class="text-white  text-right" ><i class="fa fa-map-marker"></i> CRYSTAL TOWER</h4>
          </div>
          <!-- <div class="col-md-6 position-absolute mob"  style="bottom: 20%;right:5%">
              <h2 class="text-white text-right">B<a href="#"  data-toggle="modal" data-target="#mobModalBooking" class="anchor text-white">oo</a>king.</span></h2>
          </div> -->
    
  
        <!--<div class="col-md-6 intro-img order-md-last order-first">
          <img src="img/intro-img.svg" alt="" class="img-fluid">
        </div>-->
      </div>

    </div>
  </section><!-- #intro -->
  <script>
    var slideIndex = 1;
    showSlides1(slideIndex);
    
    function plusSlides1(n) {
      showSlides1(slideIndex += n);
    }
    
    function currentSlide1(n) {
      showSlides1(slideIndex = n);
    }
    
    function showSlides1(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides1");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
    }
  </script>
  <main id="main">

    <!--==========================
      Mission Section
    ============================-->
    <section id="about">
      <div class="container p-0 m-0">
        <div class="row p-0 m-0  align-middle" >

          <div class="col-md-6 p-0 m-0" style="height:200px">
            <span class='a'>تعاون </span>
            <span class='b'>مبادرة </span>
            <span class='c'>ابتكار </span>
            <span class='d'>سعادة </span>
            <span class='e'>تفاؤل </span>
            <span class='f'>نجاح </span>
            <span class='g'>شجاعة </span>
            <span class='h'>احترام  </span>
            <span class='i'>تطور  </span>
            <span class='j'>طموح  </span>
            <span class='k'>ريادة  </span>
           </div>

          <div class="col-md-6 col-sm-12 pl-5">
            <div class="about-content">
            <h4><b>Mission</b></h4>
              
              <p class="text-justify">Reyada Collaborative Workspace aims to provide for the rising generation of innovative thinkers. Our goal is to build a community of like-minded entrepreneurs and facilitate them with the necessities that a business needs to thrive. At Reyada, workspaces are designed to promote connectivity, enhance creativity and aid the growth of its community. Reyada’s collaborative environment generates endless opportunities for its members. 
              #TOGETHERWECREATE
              </p>
              <!-- <p class="pb-1 mb-1 text-justify ">Aut dolor id. Sint aliquam consequatur ex ex labore. Et quis qui dolor nulla dolores neque. Aspernatur consectetur omnis numquam quaerat. Sed fugiat nisi. Officiis veniam molestiae. Et vel ut quidem alias veritatis repudiandae ut fugit. Est ut eligendi aspernatur nulla voluptates veniam iusto vel quisquam. Fugit ut maxime incidunt accusantium totam repellendus eum error. Et repudiandae eum iste qui et ut ab alias.</p> -->
			 
             </div>
          </div>
        </div>
      </div>

    </section><!-- #about -->

    <!--==========================
      Amenities Title
    ============================-->
    <section id="services" class="section-bg py-5">
      <div class="container py-5">

        <header class="section-header">
          <h3 class="text-dark">Amenities</h3>
          <p>As a Reyada member, you will enjoy a wide range of premier amenities including onsite staff, fully equipped meeting rooms, lounges, multi-level parking and more.</p>
        </header>

      </div>
    </section><!-- #services -->

    <!--==========================
      Amenities
    ============================-->
    <section id="why-us" class="wow fadeIn">
      <div class="container">
		<div class="row px-5">
			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 w-50">
				 <div class="feature" style="padding:40px">
					<img src="<?= base_url()?>image/amenities/f1.png" class="img-fluid img-bottom position-relative" alt="Card Back">
					<img src="<?= base_url()?>image/amenities/f11.png" class="img-fluid img-top position-relative" alt="Card Front">
				</div>
				<h4 class="text-center position-relative pt-2" style="font-size:inherit">FULLY FURNISHED</h4>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 w-50">
				 <div class="feature" style="padding:40px">
					<img src="<?= base_url()?>image/amenities/f3.png" class="img-fluid img-bottom position-relative" alt="Card Back">
					<img src="<?= base_url()?>image/amenities/f31.png" class="img-fluid img-top position-relative" alt="Card Front">
				</div>
				<h4 class="text-center position-relative pt-2" style="font-size:inherit">HIGH SPEED INTERNET</h4>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 w-50">
				 <div class="feature" style="padding:40px">
					<img src="<?= base_url()?>image/amenities/f8.png" class="img-fluid img-bottom position-relative" alt="Card Back">
					<img src="<?= base_url()?>image/amenities/f81.png" class="img-fluid img-top position-relative" alt="Card Front">
				</div>
				<h4 class="text-center position-relative pt-2" style="font-size:inherit">PRINT, COPY, FAX, SCAN</h4>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 w-50">
				 <div class="feature" style="padding:40px">
					<img src="<?= base_url()?>image/amenities/f5.png" class="img-fluid img-bottom position-relative" alt="Card Back">
					<img src="<?= base_url()?>image/amenities/f51.png" class="img-fluid img-top position-relative" alt="Card Front">
				</div>
				<h4 class="text-center position-relative pt-2" style="font-size:inherit">REFRESHMENTS</h4>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 w-50">
				 <div class="feature" style="padding:40px">
					<img src="<?= base_url()?>image/amenities/f7.png" class="img-fluid img-bottom position-relative" alt="Card Back">
					<img src="<?= base_url()?>image/amenities/f71.png" class="img-fluid img-top position-relative" alt="Card Front">
				</div>
				<h4 class="text-center position-relative pt-2" style="font-size:inherit">MEETING ROOMS</h4>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 w-50">
				 <div class="feature" style="padding:40px">
					<img src="<?= base_url()?>image/amenities/f6.png" class="img-fluid img-bottom position-relative" alt="Card Back">
					<img src="<?= base_url()?>image/amenities/f61.png" class="img-fluid img-top position-relative" alt="Card Front">
				</div>
				<h4 class="text-center position-relative pt-2" style="font-size:inherit">MONTHLY SUBSCRIPTION</h4>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 w-50">
				 <div class="feature" style="padding:40px">
					<img src="<?= base_url()?>image/amenities/f4.png" class="img-fluid img-bottom position-relative" alt="Card Back">
					<img src="<?= base_url()?>image/amenities/f41.png" class="img-fluid img-top position-relative" alt="Card Front">
				</div>
				<h4 class="text-center position-relative pt-2" style="font-size:inherit">ONSITE PARKING</h4>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 w-50">
				 <div class="feature" style="padding:40px">
					<img src="<?= base_url()?>image/amenities/f2.png" class="img-fluid img-bottom position-relative" alt="Card Back">
					<img src="<?= base_url()?>image/amenities/f21.png" class="img-fluid img-top position-relative" alt="Card Front">
				</div>
				<h4 class="text-center position-relative pt-2" style="font-size:inherit">DAILY CLEANING</h4>
			</div>
        
        </div>

      </div>

     </section>

    <!--==========================
      Membership
    ============================-->
    <section id="services" class="p-0">
      <div class="container-fluid">
        <header class="section-header pb-4">
        <h3 style="color:#343a40">Membership</h3>
        </header>
            <div class="row">
              <div class="col-md-4 memberbox m-0 p-0">
                <img src="<?= base_url()?>image/membership/bg1.jpg" alt="Mountains" class="memberbox-layer_bottom">
                <h2 class=" px-5 position-absolute text-white text-bottom" style="bottom:5%">PAY AS YOU GO</h2>
                  <h4 class="px-5 position-absolute text-white text-bottom" style="bottom:0px">Perfect for</h4>
                <div class="memberbox-layer_top pt-5">
                  <h2 class="px-5 position-relative">PAY AS YOU GO</h2>
                  <h4 class="px-5 position-relative">Perfect for</h4>
                  <div class="text-center position-relative"><img src="<?= base_url()?>image/membership/m1.png" style="margin: 25%" width="25%" class="position-relative"></div>
                  <div style="bottom: 0px;position: absolute;">
                   <a href="<?= base_url('main/Services#payasyougo')?>"><h4 class="px-5 position-relative pt-5 text-white"><span class="align-middle">See </span><i class="fa fa-angle-right fa-2x align-middle"></i></h4></a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 memberbox m-0 p-0">
                <img src="<?= base_url()?>image/membership/bg2.jpg" alt="Mountains" class="memberbox-layer_bottom">
                <h2 class=" px-5 position-absolute text-white text-bottom" style="bottom:5%">HOT DESK</h2>
                  <h4 class="px-5 position-absolute text-white text-bottom" style="bottom:0px">Perfect for</h4>
                <div class="memberbox-layer_top pt-5">
                  <h2 class="px-5 position-relative">HOT DESK</h2>
                  <h4 class="px-5 position-relative">Perfect for</h4>
                  <div class="text-center position-relative"><img src="<?= base_url()?>image/membership/m2.png"  style="margin: 25%" width="25%" class="position-relative"></div>
                  <div style="bottom: 0px;position: absolute;">
                  <a href="<?= base_url('main/Services#hotdesk')?>"><h4 class="px-5 position-relative pt-5 text-white"><span class="align-middle">See </span><i class="fa fa-angle-right fa-2x align-middle"></i></h4></a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 memberbox m-0 p-0">
                <img src="<?= base_url()?>image/membership/bg3.jpg" alt="Mountains" class="memberbox-layer_bottom">
                <h2 class=" px-5 position-absolute text-white text-bottom" style="bottom:5%">PRIVATE OFFICE</h2>
                  <h4 class="px-5 position-absolute text-white text-bottom" style="bottom:0px">Perfect for</h4>
                <div class="memberbox-layer_top pt-5">
                  <h2 class="px-5 position-relative">PRIVATE OFFICE</h2>
                  <h4 class="px-5 position-relative">Perfect for</h4>
                  <div class="text-center position-relative"><img src="<?= base_url()?>image/membership/m3.png" style="margin: 25%" width="25%" class="position-relative"></div>
                  <div style="bottom: 0px;position: absolute;">
                  <a href="<?= base_url('main/Services#privateoffice')?>"><h4 class="px-5 position-relative pt-5 text-white"><span class="align-middle">See </span><i class="fa fa-angle-right fa-2x align-middle"></i></h4></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Highlight Section
    ============================-->
    <section id="features"  class="section-bg">
      <div class="container">

        <div class="row feature-item">
          
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
              <h4 class="pb-3 text-center" >Highlight on</h4>
           
            <div class="slideshow-container">
                <div class="mySlides">
                  <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 mob" style="text-align:start">
                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>
                    </div>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <img src="<?= base_url()?>image/autodesk.png" width="200px" height="auto">
                  </div>
                  <div class="col-md-6 col-sm-12 col-xs-12 lap">
                      <a class="prev" onclick="plusSlides(-1)">❮</a>
                      <a class="next" onclick="plusSlides(1)">❯</a>
                  </div>
                  <div class="col-md-12 text-justify">
                      <q>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</q>
                      <br>
                      <a href="#" class="author">Linktowebsite.com</a>
                  </div>
                </div>
              </div>
                
              <div class="mySlides">
                  <div class="row">
                  <div class="col-md-6">
                      <div class="col-md-6 col-sm-12 col-xs-12 mob" style="text-align:start">
                          <a class="prev" onclick="plusSlides(-1)">❮</a>
                          <a class="next" onclick="plusSlides(1)">❯</a>
                      </div>
                    <img src="<?= base_url()?>image/hbo.png" width="200px" height="auto">
                  </div>
                  <div class="col-md-6 col-sm-12 col-xs-12 lap">
                      <a class="prev" onclick="plusSlides(-1)">❮</a>
                      <a class="next" onclick="plusSlides(1)">❯</a>
                  </div>
                  <div class="col-md-12 text-justify">
                      <q>When an unknown printer took a galley of type and scrambled it</q>
                      <br>
                      <a href="#" class="author">Linktowebsite.com</a>
                  </div>
                </div>
              </div>
                
              <div class="mySlides">
                  <div class="row">
                  <div class="col-md-6">
                    <div class="col-md-6 col-sm-12 col-xs-12 mob" style="text-align:start">
                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>
                    </div>
                    <img src="<?= base_url()?>image/huawei.png" width="200px" height="auto">
                  </div>
                  <div class="col-md-6 col-sm-12 col-xs-12 lap">
                      <a class="prev" onclick="plusSlides(-1)">❮</a>
                      <a class="next" onclick="plusSlides(1)">❯</a>
                  </div>
                  <div class="col-md-12 text-justify">
                      <q>I love you the more in that I believe you had liked me for my own sake and for nothing else</q>
                      <br>
                      <a href="#" class="author">Linktowebsite.com</a>
                  </div>
                </div>
              </div>
            </div>
                
                <div class="dot-container pull-left ml-3">
                  <span class="dot" onclick="currentSlide(1)"></span> 
                  <span class="dot" onclick="currentSlide(2)"></span> 
                  <span class="dot" onclick="currentSlide(3)"></span> 
                </div>
           
          </div>
          <div class="col-lg-6 wow fadeInUp px-5 lap">
              <img src="<?= base_url()?>image/highlight.png" class="img-fluid center px-5" alt="">
          </div>
        </div>
     
        <script>
            var slideIndex = 1;
            showSlides(slideIndex);
            
            function plusSlides(n) {
              showSlides(slideIndex += n);
            }
            
            function currentSlide(n) {
              showSlides(slideIndex = n);
            }
            
            function showSlides(n) {
              var i;
              var slides = document.getElementsByClassName("mySlides");
              var dots = document.getElementsByClassName("dot");
              if (n > slides.length) {slideIndex = 1}    
              if (n < 1) {slideIndex = slides.length}
              for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";  
              }
              for (i = 0; i < dots.length; i++) {
                  dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
            }
          </script>
      </div>
    </section><!-- #about -->



    <!--==========================
      Latest Article
    ============================-->
    <section id="team" class="">
      <div class="container">
        <div class="section-header pb-2">
          <h3 style="color:#343a40">Latest Article</h3>
        </div>

        <div class="row">
           <?php 
         foreach ($RecentArticle->result() as $row){ 
            $posteddate=explode('-',$row->posted_date);
            $postedday=explode(' ',$posteddate[2]);
            $dateObj   = DateTime::createFromFormat('!m', $posteddate[1]); 
            $monthName = $dateObj->format('F'); 
        ?>

            <div class="col-lg-4 col-md-4 wow fadeInUp p-1 d-flex w-100">
                <div class="card shadow-sm w-100">
                <img class="card-img-top" src="<?= base_url()?>Admin/<?=$row->image_url?>" height="250px" alt="Card image cap">
                    <div class="card-body">
                        <small><?= $postedday[0].', '.$monthName.' '.$postedday[0];?></small>
                        <h6 class="card-title pt-1"><b><?= $row->title;?></b></h6>
                        <h6 class="card-title"><b><?= $row->sub_title;?></b></h6>
                        <div class="card-text text-justify lap" style="height:250px;overflow:hidden"><?= $row->description;?></div><br>
                        <a href="<?=base_url()?>Main/Article?id=<?=$row->article_id;?>"><i class="fa fa-angle-right fa-2x no-bottom position-absolute pb-1 text-dark"></i></a>
                    </div>
                </div>
            </div>
         <?php } ?>
        </div>

      </div>
    </section><!-- #Latest Article -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">
        <div class="owl-carousel clients-carousel">
          <img src="<?= base_url()?>image/clients/ceros.png" alt="Ceros">
          <img src="<?= base_url()?>image/clients/safari.png" alt="Safari">
          <img src="<?= base_url()?>image/clients/ceros.png" alt="Ceros">
          <img src="<?= base_url()?>image/clients/safari.png" alt="Safari">
        </div>

      </div>
    </section><!-- #clients -->

  </main>

  <script>
    const prev = document.querySelector('.demo-prev');
  const next = document.querySelector('.demo-next');

  const myCalendar = new HelloWeek({
      selector: '.hello-week',
      lang: 'en',
      langFolder: './dist/langs/',
      format: 'dd/mm/yyyy',
      weekShort: true,
      monthShort: false,
      multiplePick: false,
      defaultDate: false,
      todayHighlight: true,
      daysSelected: null, // ['2019-02-26', '2019-03-01', '2019-03-02', '2019-03-03']
      disablePastDays: false,
      disabledDaysOfWeek: false,
      disableDates: false,
      weekStart: 0, // 0 (Sunday) to 6 (Saturday).
      daysHighlight: false,
      range: false,
      rtl: false,
      locked: false,
      minDate: false,
      maxDate: false,
      nav: ['‹', '›'],
      onLoad: () => { /** callback function */ },
      onChange: () => { /** callback function */ },
      onSelect: () => { /** callback function */ },
      onClear: () => { /** callback function */ }
});
// End script for calender

// $('.modal-child').on('show.bs.modal', function () {
//     var modalParent = $(this).attr('data-modal-parent');
//     $(modalParent).css('opacity', 0);
// });
 
// $('.modal-child').on('hidden.bs.modal', function () {
//     var modalParent = $(this).attr('data-modal-parent');
//     $(modalParent).css('opacity', 1);
// });

$(document).on("click", "#bookingmodal", function () {
  $("#bookingmodal").modal("show"); 
});
</script>


 