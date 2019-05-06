<script>
         $(document).on("click", "#modalsignup", function () {
         $("#modalLogin").modal("hide"); 
        //  $("#modalsignup").modal("show"); 
         });

         $(document).on("click", "#homeModal", function () {
         $("#modalsigningup").modal("hide"); 
         $("#modalsignup").modal("hide"); 
         });

         $(document).on("click", "#yesModal", function () {
         $("#yesnomodal").modal("hide"); 
         $("#bookingmodal").modal("hide"); 
         });

         $(document).on("click", "#meetSubmit", function () {
         $("#yesmodal").modal("hide"); 
        //  $("#bookingmodal").modal("hide"); 
         });

         $(document).on("click", "#noModal", function () {
         $("#yesnomodal").modal("hide");  
         });

         $(document).on("click", "#pickDate", function () {
         $("#nomodal").modal("hide");  
         $("#bookingmodal").modal("hide");  
         });

         $(document).on("click", "#meetSubmitNonReg", function () {
         $("#pickdatemodal").modal("hide"); 
         });

         $(document).on("click", "#yesModalTour", function () {
         $("#yesnomodalfortour").modal("hide"); 
         $("#bookingmodal").modal("hide"); 
         });

         $(document).on("click", "#tourSubmit", function () {
         $("#yesmodalfortour").modal("hide"); 
         });

         $(document).on("click", "#noModalTour", function () {
         $("#yesnomodalfortour").modal("hide");  
         });

         $(document).on("click", "#pickDateTour", function () {
         $("#nomodalfortour").modal("hide");  
         $("#bookingmodal").modal("hide");  
         });

         $(document).on("click", "#tourSubmitNonReg", function () {
         $("#pickdatemodalfortour").modal("hide"); 
         });
</script>