<?php include("nav_account.php");?>
<?php include("display_status.php");?>
<?php include("modals.php");?>
<?php include("mob_modals.php");?>
<?php include("bookingmodals.php");?>
<?php include("bookatourmodal.php");?>
<?php include("redirect.php");?>
<?php include("mob_redirect.php");?>

<script>
  $(document).ready(function(){
    var base_url = '<?= base_url(); ?>';
    $('#profile-form').submit(function(e){
      e.preventDefault();
      $('.whole_div').show();
      
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: base_url + 'main/update_profile',
            data: $(this).serialize(),
            success: function(data) {
                if(data.status != 200){
                  $('.whole_div').hide();
                  toastr.error(data.message);
                }else{
                  $('.whole_div').hide();
                  toastr.success(data.message);
                }
            },
            error: function(jqxhr, status, error) {
              $('.whole_div').hide();
              console.log(jqxhr);
              console.log(status);
              console.log(error);
            }
        });
    })
  })
</script>

