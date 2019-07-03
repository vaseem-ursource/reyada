<?php include('account_master_start.php');?>
<style>
#fileupload {
  display: none;
}

span[role=button] {
  display: table-cell;
  font-family: Arial;
  font-size: 1rem;
  padding: 15px 15px;
  border-top-left-radius: 0px;
  border-bottom-left-radius: 0px;
  border: 0.5px solid #707070;  
  color: #000;
  cursor: pointer;

  outline: none;
}
span[role=button]:hover,
span[role=button]:focus {
  box-shadow: 0 0 5px #000;
  background-color: #fff;
  border-color: #000;
  outline: 2px solid transparent;
}
.hide {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0,0,0,0);
  border: 0;
}
input[type=text] {
  display: table-cell;
  margin-left: 0px;
  width: 20rem;
  font-family: Arial;
  font-size: 1rem;
  padding: 15px 15px;
  
border:none;
  
  background-color: #ffffff;
}
input[type=text]:focus {
  box-shadow: 0 0 5px #fff;
  border-color: #fff;
  outline: 2px solid transparent;
}

</style>
<div style="border-bottom:1px solid black">
    <span class="text-left h4">Your Profile Page</span> 
</div>
<div class="col-12 p-0 row">
    <div class="col-3 p-3 text-center">
        <span class="p-5 rounded-circle h1" style="background-color:#F5F5F5;color:#707070;display: inline-grid">N</span>
    </div>
    <div class="col-9 p-3 row">
    <div class="col-12">
        <span class="h5 p-0 " style="letter-spacing: 2px;">YOUR PHOTO</span>
        <span class="p-0 pull-right">Delete <span class="h3">X</span></span>
        <div class="col-12">
            <label for="fileupload" id="buttonlabel">
                <span role="button" class="" aria-controls="filename" tabindex="0">
                CHOOSE FILE
                </span>
            </label>
            <input type="file" id="fileupload" >
            <label for="filename" class="hide">
                file
            </label>
            <input type="text" id="filename" autocomplete="off" readonly placeholder="No File " class="pull-right"> 
        </div>
    </div>
    <div class="col-12">
        <span class="h5 p-0 " style="letter-spacing: 2px;">YOUR PHOTO</span>
        <span class="p-0 pull-right">Delete <span class="h3">X</span></span>
        <div class="col-12">
            <label for="fileupload" id="buttonlabel">
                <span role="button" class="" aria-controls="filename" tabindex="0">
                CHOOSE FILE
                </span>
            </label>
            <input type="file" id="fileupload" >
            <label for="filename" class="hide">
                file
            </label>
            <input type="text" id="filename" autocomplete="off" readonly placeholder="No File " class="pull-right"> 
        </div>
    </div>
    </div>
</div>
<script>
// trigger upload on space & enter
// = standard button functionality
$('#buttonlabel span[role=button]').bind('keypress keyup', function(e) {
  if(e.which === 32 || e.which === 13){
    e.preventDefault();
    $('#fileupload').click();
  }    
});

// return chosen filename to additional input
$('#fileupload').change(function(e) {
  var filename = $('#fileupload').val().split('\\').pop();
  $('#filename').val(filename);
  $('#filename').attr('placeholder', filename);
  $('#filename').focus();
});
</script>
<?php include('account_master_end.php');?>
       

