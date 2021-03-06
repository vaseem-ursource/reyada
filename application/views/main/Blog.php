<style>
span.dot.active{
  background:#fff;
}
span.dot{
  background:#ababab;
}
</style>
<!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix align-middle filter" style="background:url('<?= base_url()?>image/articles/article2.jpg') center  no-repeat;background-size: cover;height:60vh;">
    <div class="intro-info order-md-first order-last position-absolute" style="bottom:0px;left:10%;">
      <!-- <h2 class="text-white text-left">Blogs</h2> -->
    </div>
  </section><!-- #intro -->

  
   <!--==========================
      Article
    ============================-->
    <section id="team" class="">
      <div class="container">
        <!-- <div class="section-header col-md-9 pl-0">
          <h4 class="text-left text-dark">Last News</h4>
        </div> -->
        <div class="row">
             <div class="col-lg-9 col-md-9 wow fadeInUp px-3 text-justify">
             <input type="text" name="main_search" id="main_search" value="<?= $search;?>" hidden>
                <div class="row" id="list1">
                  <?php 
                  if(!empty($Article)){
                    foreach($Article as $article){?>
                      <div class="col-lg-6 col-md-6 wow fadeInUp p-1 d-flex w-100">
                          <div class="card shadow-sm w-100">
                              <img class="card-img-top" src="<?= base_url().'admin/'.$article->image_url ?>" height="250px" alt="Card image cap">
                              <div class="card-body">
                                  <small><?= date('d, M Y',strtotime($article->posted_date)) ?></small>
                                  <div class="card-title pt-1"><b style="font-weight:4000 !important;font-size:17px;"><?= $article->title ?></b></div>
                                  <h6 class="card-title"  style="max-height:90px;font-size:16px !important;font-family:inherit;"><?= $article->sub_title ?></h6><br>
                                  <a href="<?=base_url().'Main/Article?id='.$article->article_id ?>" class="btn custom-button-bl" style="position:absolute;bottom:10px;">View</a>
                              </div>
                          </div>
                      </div>
                    <?php }
                  }
                  else{
                    echo 'No Blogs to display';
                  }
                  ?>
                </div>
                <?php 
                if(count($Article) > 6){
                  if(!empty($links)){ ?>
                    <div class="center pt-5">
                       <?= $links; ?>
                    </div> 
                  <?php }
                }
                ?>
                                 
                <!-- <div class="center pt-5">
                    <ul class="pagination">
                        <li><a id="prev">???</a></li>
                        <li><a id="test1" href="#">1</a></li>
                        <li><a id="test2" class="active" href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#" id="next">???</a></li>
                    </ul>
                </div> -->
            </div>

            <div class="col-lg-3 col-md-3 wow fadeInUp p-1 lap">
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
                            <h6><span style="border-left:2px solid #343a40;padding:4px"></span> Popular Articles</h6>
                            <div class="artlist"> 
                            <?php $i=0; 
                            foreach($PopularArticle->result() as $row){ ?>
                            <?php if($i>0){?><hr class="w-25 ml-0" style="color:black;border:1px solid"><?php }  $i++;?>
                              <a href="<?= base_url('Main/Article?id='.$row->article_id);?>"><div class="artlist_content"><?= $row->title;?></div></a>
                              <?php } ?>
                            </div>
                          </li>
                          <!-- <li><input type="checkbox" checked=""><i></i>
                            <h6><span style="border-left:2px solid #343a40;padding:4px"></span> Popular Tags</h6>
                            <div class="artlist">
                              <div class="artlist_content">
                                <a href="#"><span class="btn border border-secondary rounded text-uppercase mb-1 p-2">START UPS</span></a>
                                <a href="#"><span class="btn border border-secondary rounded text-uppercase mb-1 p-2">Tips</span></a>
                                <a href="#"><span class="btn border border-secondary rounded text-uppercase mb-1 p-2">FreeLance</span></a>
                                <a href="#"><span class="btn border border-secondary rounded text-uppercase mb-1 p-2">News</span></a>
                                <a href="#"><span class="btn border border-secondary rounded text-uppercase mb-1 p-2">START UPS</span></a>
                              </div>
                            </div>
                          </li> -->
                          <li><input type="checkbox" checked=""><i></i>
                            <h6><span style="border-left:2px solid #343a40;padding:4px"></span> Instagram</h6>
                            <div class="row artlist">
                              <div class="col-md-12" >
                                <?php if(isset($insta_user->data) && !empty($insta_user->data)){ ?>
                                  <table class="table" >
                                    <tr>
                                      <td>
                                        <img style="width:50px;" class="insta-profile border border-secondary" src="<?= $insta_user->data->profile_picture ?>" />
                                      </td>
                                      <td>
                                        <span>
                                          <?= $insta_user->data->username ?>
                                        </span>
                                        <br>
                                        <span>
                                          <?= $insta_user->data->counts->media ?>
                                        </span>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span>
                                          <?= $insta_user->data->counts->followed_by ?>
                                        </span>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td colspan="2" >
                                        <span>
                                          <?= $insta_user->data->bio; ?>
                                        </span>
                                        <br>
                                        <a href="https://www.instagram.com/reyada_co/"><span>www.reyada.co</span></a>
                                      </td>
                                    </tr>
                                  </table>
                                <?php } ?>
                              </div>
                              <div class="col-md-12" >
                                <?php
                                if(isset($insta_data->data) && !empty($insta_data->data)){
                                    $max_post = 8;
                                    $i = 1;

                                    foreach ($insta_data->data as $post) { ?>
                                    <a href="<?= $post->link?>" target="_blank">
                                      <div class="insta-post-single" style="background-image:url('<?= $post->images->low_resolution->url; ?>')" >
                                          
                                      </div>
                                    </a>

                                    <?php
                                        $i++;
                                        if($i > $max_post){ break; }
                                    }
                                  }
                                ?>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
            </div>
        </div>
      </div>
    </section><!-- #team -->


    <div id="qnimateblog" class="off">
        <div id="search" class="open" style="height:400px;background-color:#F8F8F8;position:absolute ">
            <button data-widget="remove" id="removeClassblog" class="close text-dark" type="button">??</button>
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
    //Mobile Search Bar
      $("#mob_search_article").keyup(function(){
      var search_text = this.value;
        loadPagination01(0,search_text);
      });
      //Search Bar
      $("#search_article").keyup(function(){
      var search_text = this.value;
        loadPagination01(0,search_text);
      });

       // Load pagination
     function loadPagination01(pagno,search_text){
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
                            '<img class="card-img-top" src="<?= base_url()?>admin/'+value.image_url+'" height="250px" alt="Card image cap">'+
                            '<div class="card-body">'+
                                '<small>'+postedday[0]+', '+GetMonthName(posteddate[1])+' '+posteddate[0]+'</small>'+
                                '<h6 class="card-title pt-1"><b>'+value.title+'</b></h6>'+
                                '<h6 class="card-title"><b>'+value.sub_title+'</b></h6>'+
                                '<div class="card-text text-justify lap" style="height:250px;overflow:hidden">'+value.description+'</div><br>'+
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
 
    //  loadPagination(0,'');

    

     // Load pagination
     function loadPagination(pagno,search_text){
       $.ajax({
         url: '<?=base_url()?>Main/loadRecord/'+pagno,
         type: 'get',
         dataType: 'json',
         data:{'search_text':search_text},
         success: function(response){
          console.log(response);
            $('#pagination').html(response.pagination);
            // createTable(response.result,response.row);
            var articleList="";
            $.each(response.result,function(key,value){
              var posteddate=value.posted_date;
              posteddate=posteddate.split('-');
              postedday=posteddate[2].split(' ');
            articleList = articleList+'<div class="col-lg-6 col-md-6 wow fadeInUp p-1 d-flex w-100">'+
                        '<div class="card shadow-sm w-100">'+
                            '<img class="card-img-top" src="<?= base_url()?>admin/'+value.image_url+'" height="250px" alt="Card image cap">'+
                            '<div class="card-body">'+
                                '<small>'+postedday[0]+', '+GetMonthName(posteddate[1])+' '+posteddate[0]+'</small>'+
                                '<h6 class="card-title pt-1"><b>'+value.title+'</b></h6>'+
                                '<h6 class="card-title"><b>'+value.sub_title+'</b></h6>'+
                                '<div class="card-text text-justify lap" style="height:250px;overflow:hidden">'+value.description+'</div><br>'+
                                '<a href="<?=base_url()?>Main/Article?id='+value.article_id+'" class="btn custom-button-bl" >'+'view'+'</a>'+
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
     var main_search = $('#main_search').val();
      if (main_search!=""){ 
      $.ajax({
         url: '<?=base_url()?>Main/loadRecord/0',
         type: 'get',
         dataType: 'json',
         data:{'search_text':main_search},
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
                            '<img class="card-img-top" src="<?= base_url()?>admin/'+value.image_url+'" height="250px" alt="Card image cap">'+
                            '<div class="card-body">'+
                                '<small>'+postedday[0]+', '+GetMonthName(posteddate[1])+' '+posteddate[0]+'</small>'+
                                '<h6 class="card-title pt-1"><b>'+value.title+'</b></h6>'+
                                '<h6 class="card-title"><b>'+value.sub_title+'</b></h6>'+
                                '<div class="card-text text-justify lap" style="height:250px;overflow:hidden">'+value.description+'</div><br>'+
                                '<a href="<?=base_url()?>Main/Article?id='+value.article_id+'" class="btn custom-button-bl" >'+'view'+'</a>'+
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
