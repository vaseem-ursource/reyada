
<!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix align-middle filter" style="background:url('<?= base_url()?>image/articles/article2.jpg') center  no-repeat;background-size: cover;height:60vh;">
    <div class="container d-flex h-100">
        <div class="row align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
        <div class="slideshow-container1" style="right:0px;">
        <div class="mySlides1 align-self-center" style="right:0px;">
              <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12 text-justify">
                      <h5 class="text-left text-uppercase">Latest New</h5>
                      <q>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's standard  </q><br>
                      <p class="py-2">22, Jan.19</p>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12" style="text-align:start">
                        <a class="prev1" style="left:0px" onclick="plusSlides1(-1)">❮</a>
                        <a class="next1"style="left:40px" onclick="plusSlides1(1)">❯</a>
                    </div>
                 </div>
            </div>
            
          <div class="mySlides1 align-self-center" style="right:0px;">
              <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12 text-justify">
                      <h5 class="text-left text-uppercase">News</h5>
                      <q>ext of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</q><br>
                      <p class="py-2">22, Jan.19</p>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12" style="text-align:start">
                        <a class="prev1" style="left:0px" onclick="plusSlides1(-1)">❮</a>
                        <a class="next1"style="left:40px" onclick="plusSlides1(1)">❯</a>
                    </div>
                </div>
            </div>
            
          <div class="mySlides1 align-self-center" style="right:0px;">
              <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12 text-justify">
                      <h5 class="text-left text-uppercase">News</h5>
                      <q>Lorem Ipsum is simply ing industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</q><br>
                      <p class="py-2">22, Jan.19</p>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12" style="text-align:start">
                        <a class="prev1" style="left:0px" onclick="plusSlides1(-1)">❮</a>
                        <a class="next1"style="left:40px" onclick="plusSlides1(1)">❯</a>
                    </div>
                </div>
            </div>
            <div class="dot-container text-left ml-3" style="background-color:transparent;">
                  <span class="dot bg-white active" onclick="currentSlide1(1)"></span> 
                  <span class="dot bg-white" onclick="currentSlide1(2)"></span> 
                  <span class="dot bg-white" onclick="currentSlide1(3)"></span> 
                </div>
            </div>
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
                    dots[i].className = dots[i].className.replace("active", "");
                }
                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active";
                }
            </script>
        </div>
    </div>

  </section><!-- #intro -->

  
   <!--==========================
      Article
    ============================-->
    <section id="team" class="">
      <div class="container">
        <div class="section-header col-md-9 pl-0">
          <h4 class="text-left text-dark">Last News</h4>
        </div>
        <div class="row">
            <div class="col-lg-9 col-md-9 wow fadeInUp px-3 text-justify">
                <div class="row">
                    <div class="col-lg-6 col-md-6 wow fadeInUp p-1 d-flex">
                        <div class="card shadow-sm">
                            <img class="card-img-top" src="<?= base_url()?>image/articles/a1.jpeg" height="250px" alt="Card image cap">
                            <div class="card-body">
                                <small>22, Jan 19</small>
                                <h6 class="card-title pt-1"><b>Lorem Ipsum Neque porro</b></h6>
                                <p class="card-text text-justify lap">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators</p>
                                <a href="Article.php"><i class="fa fa-angle-right fa-2x no-bottom position-absolute pb-1 text-dark"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 wow fadeInUp p-1 d-flex lap">
                        <div class="card shadow-sm">
                            <img class="card-img-top" src="<?= base_url()?>image/articles/a4.jpg" height="250px" alt="Card image cap">
                            <div class="card-body">
                                <small>22, Jan 19</small>
                                <h6 class="card-title pt-1"><b>Lorem Ipsum Neque porro</b></h6>
                                <p class="card-text text-justify lap">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                <a href="Article.php"><i class="fa fa-angle-right fa-2x no-bottom position-absolute pb-1 text-dark"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 wow fadeInUp p-1 d-flex lap">
                        <div class="card shadow-sm">
                            <img class="card-img-top" src="<?= base_url()?>image/articles/a2.jpg" height="250px" alt="Card image cap">
                            <div class="card-body">
                                <small>22, Jan 19</small>
                                <h6 class="card-title pt-1"><b>Lorem Ipsum Neque porro</b></h6>
                                <p class="card-text text-justify lap">Some quick example text to build on the card title and make up the bulk of the card's content.It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <a href="Article.php"><i class="fa fa-angle-right fa-2x no-bottom position-absolute pb-1 text-dark"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 wow fadeInUp p-1 d-flex lap">
                        <div class="card shadow-sm">
                            <img class="card-img-top" src="<?= base_url()?>image/articles/a3.jpg" height="250px" alt="Card image cap">
                            <div class="card-body">
                                <small>22, Jan 19</small>
                                <h6 class="card-title pt-1"><b>Lorem Ipsum Neque porro</b></h6>
                                <p class="card-text text-justify lap">Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32</p>
                                <a href="Article.php"><i class="fa fa-angle-right fa-2x no-bottom position-absolute pb-1 text-dark"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="center pt-5">
                    <ul class="pagination">
                        <li><a id="prev">❮</a></li>
                        <li><a id="test1" href="#">1</a></li>
                        <li><a id="test2" class="active" href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#" id="next">❯</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 wow fadeInUp p-1 lap">
                  <img class="" width="100%" height="200px" src="<?= base_url()?>image/articles/a2.jpg" alt="Card image cap">
                    <div class="container mt-3">
                      <div class="accordian">
                        <ul>
                          <li><input type="checkbox" checked=""><i></i>
                           <h6><span style="border-left:2px solid #343a40;padding:4px"></span> Category</h6>
                            <div class="artlist">
                              <a href="#"><div class="artlist_content" >All Categories</div></a>
                              <a href="#"><div class="artlist_content">Startup News</div></a>
                              <a href="#"><div class="artlist_content">Founder Talk</div></a>
                              <a href="#"><div class="artlist_content">Mentor Tips</div></a>
                              <a href="#"><div class="artlist_content">Business</div></a>
                              <a href="#"><div class="artlist_content">Events</div></a>
                              <a href="#"><div class="artlist_content">Reviews</div></a>
                            </div>
                          </li>
                          <li><input type="checkbox" checked=""><i></i>
                            <h6><span style="border-left:2px solid #343a40;padding:4px"></span> Popular Article</h6>
                            <div class="artlist">
                              <a href="#"><div class="artlist_content">Lorem Ipsum Neque porro<small>Co-Founder</small></div></a>
                              <a href="#"><div class="artlist_content"> Neque porro Ipsum</div></a>
                            </div>
                          </li>
                          <li><input type="checkbox" checked=""><i></i>
                            <h6><span style="border-left:2px solid #343a40;padding:4px"></span> Popular Tags</h6>
                            <div class="artlist">
                              <div class="artlist_content">
                                <a href="#"><span class="btn btn-outline-secondary text-uppercase mb-1">START UPS</span></a>
                                <a href="#"><span class="btn btn-outline-secondary text-uppercase mb-1">Tips</span></a>
                                <a href="#"><span class="btn btn-outline-secondary text-uppercase mb-1">FreeLance</span></a>
                                <a href="#"><span class="btn btn-outline-secondary text-uppercase mb-1">News</span></a>
                                <a href="#"><span class="btn btn-outline-secondary text-uppercase mb-1">START UPS</span></a>
                              </div>
                            </div>
                          </li>
                          <li><input type="checkbox" checked=""><i></i>
                            <h6><span style="border-left:2px solid #343a40;padding:4px"></span> Instagram</h6>
                            <div class="artlist">
                              <div class="artlist_content">Some content!</div>
                            </div>
                            <div class="artlist">
                              <div class="artlist_content">Some content!</div>
                            </div>
                          </li>
                        </ul>
                        <div class="text-center">
                            <a href="#"><i class="fa fa-facebook px-3 text-dark"></i></a>
                            <a href="#"><i class="fa fa-linkedin px-3 text-dark"></i></a>
                            <a href="#"><i class="fa fa-twitter px-3 text-dark"></i></a>
                            <a href="#"><i class="fa fa-instagram px-3 text-dark"></i></a>
                        </div>
                      </div>
                    </div>
            </div>
        </div>
      </div>
    </section><!-- #team -->


    <div id="qnimateblog" class="off">
        <div id="search" class="open" style="height:500px;background-color:#F8F8F8; ">
            <button data-widget="remove" id="removeClassblog" class="close text-dark" type="button">×</button>
            <div style="padding-top:5%;" class="">
                <form action="" method="" autocomplete="off" class="pl-0">
                    <div  class="lap">
                        <i class="fa fa-search fa-2x" aria-hidden="true" style="padding-top:25px;padding-right:15px"></i>
                        <input type="text" placeholder="search..." value="" name="term" >
                    </div>
                    <div style="padding-top:25%" class="mob">
                        <i class="fa fa-search fa-2x" aria-hidden="true" style="padding-top:25px;padding-right:15px"></i>
                        <input type="text" placeholder="search..." value="" name="term" >
                    </div>
                </form>
            </div>
        </div>
    </div>

<script>
  $(function(){
        $("#addClassBlog").click(function () {
            $('#qnimateblog').addClass('popup-box-on');
        });

        $("#addClassBlogMob").click(function () {
            $('#qnimateblog').addClass('popup-box-on');
        });
          
        $("#removeClassblog").click(function () {
           $('#qnimateblog').removeClass('popup-box-on');
        });
  })
</script>
