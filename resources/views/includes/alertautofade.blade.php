<div class="alert alert-danger" id="error-alert">
    <button type="button" class="close" data-dismiss="alert">x</button>
    
</div>


<div class="alert alert-success" id="success-alert">
    <button type="button" class="close" data-dismiss="alert">x</button>
    
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
     $(document).ready(function () {
        // Function to handle the fade-out animation
        function fadeOutAlert(alertId) {
            $("#" + alertId).fadeOut(500, function () {
                $(this).remove();
            });
        }

        // Fade in success alert
        $("#success-alert").fadeIn(500, function () {
            // This will delay the fade-out for 5 seconds and then fade out
            setTimeout(function () {
                fadeOutAlert("success-alert");
            }, 5000);
        });

        // Fade in error alert
        $("#error-alert").fadeIn(500, function () {
            // This will delay the fade-out for 5 seconds and then fade out
            setTimeout(function () {
                fadeOutAlert("error-alert");
            }, 5000);
        });

        // Close button click event for success and error alerts
        $(".close").click(function () {
            var alertId = $(this).closest(".alert").attr("id");
            fadeOutAlert(alertId);
        });
    });
</script>