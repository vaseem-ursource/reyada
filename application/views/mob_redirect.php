<script>
        document.addEventListener('DOMContentLoaded',function(){
                $("#myMenu").show();
        })
   
        $(document).ready(function() {
        $('.mobile-nav-toggle').click(function() {
                $(".mobile-nav").show();
        });
        });


        $(document).on("click", "#mobLogIn", function () {
         $("#mobModalLogin1").modal("hide");  
         });

         $(document).on("click", "#mobYesModalTour", function () {
         $("#mobModalIsRegisteredTour").modal("hide"); 
         $("#mobModalBooking").modal("hide"); 
         });

         $(document).on("click", "#mobTourSubmit", function () {
         $("#mobModalBookingTourRegistered").modal("hide");
         $("#mobModalBookingTourNonRegYES").modal("hide");          
         });

         $(document).on("click", "#mobNoModalTour", function () {
         $("#mobModalIsRegisteredTour").modal("hide");  
         $("#mobModalBooking").modal("hide"); 
         });

         $(document).on("click", "#mobTourSubmit", function () {
         $("#mobModalBookingTourRegistered").modal("hide");  
         $("#mobModalBookingTourNonRegNO").modal("hide");  
         });

         $(document).on("click", "#mobMeetReg", function () {
         $("#mobModalIsRegisteredMeeting").modal("hide"); 
         $("#mobModalBooking").modal("hide"); 
         });

         $(document).on("click", "#mobMeetSubmitReg", function () {
         $("#mobModalBookingMeetNonReg").modal("hide");
         $("#mobModalBookingMeetingRegistered").modal("hide");          
         });

         $(document).on("click", "#mobMeetNonReg", function () {
         $("#mobModalIsRegisteredMeeting").modal("hide");  
         $("#mobModalBooking").modal("hide"); 
         });

         $(document).on("click", "#mobTourSubmit", function () {
         $("#mobModalBookingTourRegistered").modal("hide");
         $("#mobModalBookingMeetNonRegNO").modal("hide");          
         });

         $(document).on("click", "#signupSuccess", function () {
         $("#mobModalSignup1").modal("hide");
         $("#mobModalLogin1").modal("hide");          
         });
</script>