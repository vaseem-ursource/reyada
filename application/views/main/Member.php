<?php include('account_master_start.php');?>
<div style="border-bottom:1px solid black">
    <span class="text-left h4">Directory</span> 
    <span class="text-left pull-right px-2">All Members</span> 
    <span class="text-left pull-right px-2">Skill</span> 
</div>
<div class="col-12 p-0 row">
    <div class="col-4 p-3 text-center">
        <span class="p-5 rounded-circle h1" style="background-color:#F5F5F5;color:#707070;display: inline-grid">N</span>
        <p class="h6 p-0">Name Surname</p>
        <p class="p-0">Position/</p>
    </div>
    <div class="col-4 p-3 text-center">
        <span class="p-5 rounded-circle h1" style="background-color:#F5F5F5;color:#707070;display: inline-grid">N</span>
        <p class="h6 p-0">Name Surname</p>
        <p class="p-0">Position/</p>
    </div>
    <div class="col-4 p-3 text-center">
        <span class="p-5 rounded-circle h1" style="background-color:#F5F5F5;color:#707070;display: inline-grid">N</span>
        <p class="h6 p-0">Name Surname</p>
        <p class="p-0">Position/</p>
    </div>
    <div class="col-4 p-3 text-center">
        <span class="p-5 rounded-circle h1" style="background-color:#F5F5F5;color:#707070;display: inline-grid">N</span>
        <p class="h6 p-0">Name Surname</p>
        <p class="p-0">Position/</p>
    </div>
    <div class="col-4 p-3 text-center">
        <span class="p-5 rounded-circle h1" style="background-color:#F5F5F5;color:#707070;display: inline-grid">N</span>
        <p class="h6 p-0">Name Surname</p>
        <p class="p-0">Position/</p>
    </div>
    <div class="col-4 p-3 text-center">
        <span class="p-5 rounded-circle h1" style="background-color:#F5F5F5;color:#707070;display: inline-grid">N</span>
        <p class="h6 p-0">Name Surname</p>
        <p class="p-0">Position/</p>
    </div>
    <div class="col-12 text-center pt-5">
        <div id='pagination' class="pagination1"></div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type='text/javascript'>
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
        
      }
    });
   } 
 });
     </script>
<?php include('account_master_end.php');?>
       

