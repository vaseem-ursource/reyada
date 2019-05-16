<?php 
    if($status=$this->session->flashdata('contact')):   
    ?>
    <script>
    $(document).ready(function(){
        $("#contact_thankyou").modal();
    });
    </script>
 <?php endif; ?>