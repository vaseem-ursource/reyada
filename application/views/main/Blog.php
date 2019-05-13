
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
                <div class="row" id="list1">
                                 
                </div>
                <div class="center pt-5">
                    <div id='pagination' class="pagination1"></div>
                </div>
                <!-- <div class="center pt-5">
                    <ul class="pagination">
                        <li><a id="prev">❮</a></li>
                        <li><a id="test1" href="#">1</a></li>
                        <li><a id="test2" class="active" href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#" id="next">❯</a></li>
                    </ul>
                </div> -->
            </div>

            <div class="col-lg-3 col-md-3 wow fadeInUp p-1 lap">
                  <img class="" width="100%" height="200px" src="<?= base_url()?>image/articles/a2.jpg" alt="Card image cap">
                    <div class="container mt-3">
                      <div class="accordian">
                        <ul>
                          <li><input type="checkbox" checked=""><i></i>
                           <h6><span style="border-left:2px solid #343a40;padding:4px"></span> Category</h6>
                            <div class="artlist">
                              <?php foreach($Categories->result() as $row){?>  
                              <a href="<?= base_url('Main/blog_category?id='.$row->cat_id)?>"><div class="artlist_content text-capitalize" ><?= $row->title;?></div></a>
                              <?php } ?>
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
                        <input type="text" placeholder="search..." value="" name="search_article" id="search_article">
                    </div>
                    <div style="padding-top:25%" class="mob">
                        <i class="fa fa-search fa-2x" aria-hidden="true" style="padding-top:25px;padding-right:15px"></i>
                        <input type="text" placeholder="search..." value="" name="mob_search_article"  id="mob_search_article">
                    </div>
                </form>
            </div>
        </div>
    </div>
    

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type='text/javascript'>
      //Search Bar
      $("search_article").keypress(function(){
        alert('dg');
      var search_text = $("search_article").text();
        loadPagination(0,search_text);
      });
   $(document).ready(function(){
    
     // Detect pagination click
     $('#pagination').on('click','a',function(e){
       e.preventDefault(); 
      //  var pageno = e.target.text;
       var length = $(this).prop('href').split("/").length;
      //  var pageno = e.target.text;
      var pageno = $(this).prop('href').split("/")[length-1];
      //  var pageno = $(this).attr('data-ci-pagination-page');
       loadPagination(pageno,'');
     });
 
     loadPagination(0,'');

    

     // Load pagination
     function loadPagination(pagno,search_text){
       $.ajax({
         url: '<?=base_url()?>Main/loadRecord/'+pagno,
         type: 'get',
         dataType: 'json',
         data:{'search_text':search_text},
         success: function(response){
            $('#pagination').html(response.pagination);
            // createTable(response.result,response.row);
            var articleList="";
            $.each(response.result,function(key,value){
              var posteddate=value.posted_date;
              posteddate=posteddate.split('-');
              postedday=posteddate[2].split(' ');
            articleList = articleList+'<div class="col-lg-6 col-md-6 wow fadeInUp p-1 d-flex w-100">'+
                        '<div class="card shadow-sm w-100">'+
                            '<img class="card-img-top" src="<?= base_url()?>Admin/'+value.image_url+'" height="250px" alt="Card image cap">'+
                            '<div class="card-body">'+
                                '<small>'+postedday[0]+', '+GetMonthName(posteddate[1])+' '+posteddate[0]+'</small>'+
                                '<h6 class="card-title pt-1"><b>'+value.title+'</b></h6>'+
                                '<p class="card-text text-justify lap">'+value.description+'</p>'+
                                '<a href="<?=base_url()?>Main/Article?id='+value.article_id+'"><i class="fa fa-angle-right fa-2x no-bottom position-absolute pb-1 text-dark"></i></a>'+
                            '</div>'+
                        '</div>'+
                   '</div>'

              });
              function GetMonthName(monthNumber) {
                    var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
                    return months[monthNumber - 1];
              }
              $('#list1').html(articleList);

         }
       });
     }
    });
  
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
