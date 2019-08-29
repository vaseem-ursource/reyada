<style>
.comment-container {
  width: 100%;
  margin: 2rem auto;
}

a {
  color: #343a40;
  background-color: transparent;
  -webkit-text-decoration-skip: objects;
}

.v-btn {
  align-items: center;
  border-radius: 2px;
  display: inline-flex;
  height: 36px;
  flex: 0 0 auto;
  font-size: 14px;
  font-weight: 700;
  justify-content: center;
  margin: 6px 8px;
  min-width: 88px;
  outline: 0;
  text-transform: uppercase;
  text-decoration: none;
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1), color 1ms;
  position: relative;
  vertical-align: middle;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  padding: 0 16px;
}

.v-btn:before {
  border-radius: inherit;
  color: inherit;
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  opacity: 0.12;
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  width: 100%;
}

.v-btn:focus,
.v-btn:hover {
  position: relative;
}

.v-btn:focus:before,
.v-btn:hover:before {
  background-color: currentColor;
}

.v-btn__content {
  align-items: center;
  border-radius: inherit;
  color: inherit;
  display: flex;
  flex: 1 0 auto;
  justify-content: center;
  margin: 0 auto;
  position: relative;
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  white-space: nowrap;
  width: inherit;
}

.v-btn:not(.v-btn--depressed):not(.v-btn--flat) {
  will-change: box-shadow;
  box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14),
    0 1px 5px 0 rgba(0, 0, 0, 0.12);
}

.v-btn:not(.v-btn--depressed):not(.v-btn--flat):active {
  box-shadow: 0 5px 5px -3px rgba(0, 0, 0, 0.2),
    0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12);
}

.avatar {
  width: 50px;
  height: 50px;
  margin-left: -42px;
  border-radius: 50%;
}

.v-avatar {
  align-items: center;
  border-radius: 50%;
  display: inline-flex;
  justify-content: center;
  position: relative;
  text-align: center;
  vertical-align: middle;
}

.v-avatar img {
  border-radius: 50%;
  display: inline-flex;
  height: inherit;
  width: inherit;
  object-fit: cover;
}

.v-card {
  text-decoration: none;
}

.v-card > :first-child:not(.v-btn):not(.v-chip) {
  border-top-left-radius: inherit;
  border-top-right-radius: inherit;
}

.v-card > :last-child:not(.v-btn):not(.v-chip) {
  border-bottom-left-radius: inherit;
  border-bottom-right-radius: inherit;
}

.v-sheet {
  display: block;
  border-radius: 2px;
  position: relative;
}

.v-dialog__container {
  display: inline-block;
  vertical-align: middle;
}

.elevation-2 {
  box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14),
    0 1px 5px 0 rgba(0, 0, 0, 0.12) !important;
}



:after,
:before {
  text-decoration: inherit;
  vertical-align: inherit;
}

* {
  background-repeat: no-repeat;
  padding: 0;
  margin: 0;
}

a:active,
a:hover {
  outline-width: 0;
}

button {
  font: inherit;
  overflow: visible;
  text-transform: none;
  background-color: transparent;
  border-style: none;
  color: inherit;
}

[type="button"]::-moz-focus-inner,
button::-moz-focus-inner {
  border-style: 0;
  padding: 0;
}

[type="button"]::-moz-focus-inner,
button:-moz-focusring {
  outline: 0;
  border: 0;
}

button,
html [type="button"] {
  -webkit-appearance: button;
}

img {
  border-style: none;
}

::-ms-clear,
::-ms-reveal {
  display: none;
}

.headline {
  font-weight: 400;
  letter-spacing: normal !important;
  font-size: 24px !important;
  line-height: 32px !important;
}

.title {
  font-size: 20px !important;
  font-weight: 700;
  line-height: 1 !important;
  letter-spacing: 0.02em !important;
}

.caption {
  font-weight: 400;
  font-size: 12px !important;
}

.theme--light.v-btn {
  color: rgba(0, 0, 0, 0.87);
}

.theme--light.v-btn:not(.v-btn--icon):not(.v-btn--flat) {
  background-color: #f5f5f5;
}

.theme--light .v-card {
  box-shadow: rgba(0, 0, 0, 0.11) 0 15px 30px 0px,
    rgba(0, 0, 0, 0.08) 0 5px 15px 0 !important;
}

.theme--light.application .v-card {
  box-shadow: 0 15px 30px 0 rgba(0, 0, 0, 0.11),
    0 5px 15px 0 rgba(0, 0, 0, 0.08) !important;
  color: #102c3c !important;
}

.theme--light.v-card,
.theme--light.v-sheet {
  background-color: #fff;
  border-color: #fff;
  color: rgba(0, 0, 0, 0.87);
}

a,
a:hover {
  text-decoration: none !important;
}

.wrapper {
  overflow: auto;
}

.answers {
  padding-left: 64px;
}

.comment {
  overflow-y: auto;
  margin-left: 32px;
  margin-right: 16px;
}

.comment p {
  font-size: 14px;
  margin-bottom: 7px;
}

.displayName {
  margin-left: 24px;
}

.actions {
  display: flex;
  flex: 1;
  flex-direction: row;
  justify-content: flex-end;
}

.google-span[data-v-35838f51] {
  font-size: 14px;
  color: rgba(0, 0, 0, 0.54);
}

.google-button[data-v-35838f51] {
  background-color: #fff;
  height: 40px;
  margin: 0;
}

.headline {
  margin-left: 32px;
}

.sign-in-wrapper {
  margin-top: 16px;
  margin-left: 32px;
}


.error-message {
  font-style: oblique;
  color: #c40030;
}

::-moz-selection,
::selection {
  background-color: #b3d4fc;
  color: #000;
  text-shadow: none;
}

.card,
.card {
  padding: 18px 16px;
  margin-bottom: 15px;
  display: flex;
  flex-direction: column;
}

.application a,
[type="button"],
button {
  cursor: pointer;
}

@media screen and (max-width: 640px) {
  .comment-container {
    width: 90%;
  }
  .comments {
    padding: 32px;
  }
}
</style>
<!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix align-middle " style="background:url('<?= base_url()?>image/articles/article1.jpg') center  no-repeat;background-size: cover;height:60vh;-webkit-filter: brightness(75%); filter: brightness(75%);">
  </section><!-- #intro -->

   <!--==========================
      Article
    ============================-->
    <section id="team" class="">
      <div class="container">
        <div class="section-header pb-1 col-md-9 pl-0">
          <h3 class="text-left text-dark"><?= $Article->title;?></h3>
          <h5 class="text-left text-dark"><b><?= $Article->sub_title;?></b></h5>
          <?php 
          $date = explode("-",$Article->posted_date);
          $day = explode(" ",$date[2]);
          $dateObj   = DateTime::createFromFormat('!m', $date[1]); 
          $monthName = $dateObj->format('F');
          ?>
          <small><?= $day[0].', '.$monthName.' '.$date[0]?></small>
          <small class="pull-right"><?= $Article->author;?></small>
        </div>
        <div class="section-header p-1 col-md-9"></div>
        <div class="pt-4 row">
            <div class="col-lg-9 col-md-9 wow fadeInUp p-3 text-justify">
                <p><?= $Article->description;?></p>

                <img class="card-img-top py-1" style="max-height:500px" src="<?= base_url().'Admin/'.$Article->image_url;?>" alt="Card image cap">
                
                <!-- <p>Nam a turpis enim. Sed tempus at urna eu ultrices. Vivamus nibh orci, lobortis ut porttitor et, venenatis efficitur dolor. Vestibulum volutpat ac neque eu accumsan. Nam quis nunc vitae ex pellentesque pulvinar. Etiam lacinia dolor sed magna sagittis mollis. Proin ex tortor, pretium et iaculis sed, posuere et purus. Nulla facilisi. Morbi vitae metus id nibh dictum mollis sed ac metus.</p> -->

                <!-- <ul>
                    <li type="circle" class="py-3">
                        Aliquam pellentesque vitae ex vel viverra.
                    </li>
                    <li type="circle" class="py-3">
                        porttitor vehicula justo
                    </li>
                    <li type="circle" class="py-3">
                        Nunc egestas aliquam felis
                    </li>
                </ul>
                <p>Curabitur luctus vehicula est vel viverra. Aliquam pellentesque vitae ex vel viverra. Sed ac felis erat. Nulla vulputate rutrum blandit. Nam a ante vitae velit mollis feugiat. Pellentesque ut ipsum id dolor malesuada cursus. Proin non nulla maximus, sodales justo vel, iaculis nisl.</p>

                <p>Sed turpis sem, pulvinar eget risus a, porttitor vehicula justo. Pellentesque bibendum varius velit quis dictum. Ut eget tellus mauris. Proin eleifend eros vel lacinia pretium. Aenean pretium, est non vehicula dictum, mauris lorem consequat tortor, et condimentum velit ex nec sapien. Nunc egestas aliquam felis eu dignissim. Suspendisse lobortis aliquam finibus.</p> -->



                <div id="disqus_thread" class="mt-5"></div>
                <script>

                /**
                *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                /*
                var disqus_config = function () {
                this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                };
                */
                (function() { // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');
                s.src = 'https://sainxo.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
                })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

                <h3 class="text-center pt-3">Share this Article</h3>
                <div id="share" class="text-center pb-4"></div>
                <!-- <h4 class="text-center text-dark pb-5">
                    <a href="#"><i class="fa fa-facebook px-3 text-dark"></i></a>
                    <a href="#"><i class="fa fa-linkedin px-3 text-dark"></i></a>
                    <a href="#"><i class="fa fa-twitter px-3 text-dark"></i></a>
                    
                </h4> -->
               <span class="mb-1">Tags : </span>
               <span class="btn border border-secondary rounded text-uppercase mb-1 p-2">START UPS</span>
               <span class="btn border border-secondary rounded text-uppercase mb-1 p-2">Tips</span>
               <span class="btn border border-secondary rounded text-uppercase mb-1 p-2">FreeLance</span>
               <span class="btn border border-secondary rounded text-uppercase mb-1 p-2">News</span>
               <span class="btn border border-secondary rounded text-uppercase mb-1 p-2">START UPS</span>
               <span class="btn border border-secondary rounded text-uppercase mb-1 p-2">FreeLance</span>
               <span class="btn border border-secondary rounded text-uppercase mb-1 p-2">START UPS</span>
               <span class="btn border border-secondary rounded text-uppercase mb-1 p-2">Tips</span>
               <span class="btn border border-secondary rounded text-uppercase mb-1 p-2">FreeLance</span>
               <span class="btn border border-secondary rounded text-uppercase mb-1 p-2">News</span>
               <span class="btn border border-secondary rounded text-uppercase mb-1 p-2">START UPS</span>
               <span class="btn border border-secondary rounded text-uppercase mb-1 p-2">FreeLance</span>
            </div>

            <div class="col-lg-3 col-md-3 wow fadeInUp p-1 lap">
                  <img class="" width="100%" height="200px" src="<?= base_url()?>image/articles/a2.jpg" alt="Card image cap">
                    <div class="container mt-3">
                      <div class="accordian">
                        <ul>
                          <li><input type="checkbox" checked=""><i></i>
                            <h6><span style="border-left:2px solid #343a40;padding:4px"></span>Category</h6>
                            <div class="artlist">
                            <?php foreach($Categories->result() as $row){?>  
                              <a href="<?= base_url('Main/blog_category?id='.$row->cat_id)?>"><div class="artlist_content text-capitalize" ><?= $row->title;?></div></a>
                              <?php } ?>
                            </div>
                          </li>
                          <li><input type="checkbox" checked=""><i></i>
                            <h6><span style="border-left:2px solid #343a40;padding:4px"></span> Popular Article</h6>
                            <div class="artlist">
                            <?php $i=0; 
                            foreach($PopularArticle->result() as $row){ ?>
                            <?php if($i>0){?><hr class="w-25 ml-0" style="color:black;border:1px solid"><?php }  $i++;?>
                              <a href="<?= base_url('Main/Article?id='.$row->article_id);?>"><div class="artlist_content"><?= $row->title;?></div></a>
                              <?php } ?>
                            </div>
                          </li>
                          <li><input type="checkbox" checked=""><i></i>
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
                          </li>
                          <li><input type="checkbox" checked=""><i></i>
                            <h6><span style="border-left:2px solid #343a40;padding:4px"></span> Instagram</h6>
                            <div class="row" >
                              <div class="col-md-12" >
                                <?php if(isset($insta_user->data) && !empty($insta_user->data)){ ?>
                                  <table class="table" >
                                    <tr>
                                      <td>
                                        <img style="width:50px;" class="insta-profile border border-secondary" src="<?= base_url('img/ins/dp.jpg') ?>" />
                                      </td>
                                      <td>
                                        <span>
                                          <!-- <?= $insta_user->data->username ?> -->
                                          reyada_co
                                        </span>
                                        <br>
                                        <span>
                                          <!-- <?= $insta_user->data->counts->media ?> -->
                                          674
                                        </span>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span>
                                          <!-- <?= $insta_user->data->counts->followed_by ?> -->
                                          4,735
                                        </span>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td colspan="2" >
                                        <span>
                                          <!-- <?= $insta_user->data->bio; ?> -->
                                          Reyada | ريادة
                                          ‎نوفر مساحات و مكاتب للعمل المشترك لتطوير اعمالك
                                          A collaborative workspace offering business support for creative enterprises
                                          WA: 22970270
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
                                if(isset($insta_post) && !empty($insta_post)){
                                    $max_post = 8;
                                    $i = 1;

                                    foreach ($insta_post as $post) { ?>
                                    <a href="<?= $post ?>" target="_blank">
                                      <div class="insta-post-single" style="background-image:url('<?= base_url($post) ?>')" >
                                          
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