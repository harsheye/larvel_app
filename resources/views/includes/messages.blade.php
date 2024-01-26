<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

@if(count($errors) > 0)
<div class="alert alert-danger" id="error-alert">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>Error! </strong>
    
        @foreach($errors->all() as $error)
             {{ $error }}
            
        @endforeach
    </div>
@endif



@if(session('success'))
    <div class="alert alert-success" id="success-alert">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>Success! </strong> {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger" id="error-alert">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>Error! </strong> {{ session('error') }}
    </div>
@endif

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
     $(document).ready(function () {
        // Function to handle the fade-out animation
        function fadeOutAlert(alertId) {
            $("#" + alertId).fadeOut(200, function () {
                $(this).remove();
            });
        }

        // Add event listener to all alerts for hiding on click
        $(".alert").click(function () {
            var alertId = $(this).attr("id");
            fadeOutAlert(alertId);
        });

        // Fade in success alert
        $("#success-alert").fadeIn(200, function () {
            // This will delay the fade-out for 5 seconds and then fade out
            setTimeout(function () {
                fadeOutAlert("success-alert");
            }, 1500);
        });

        // Fade in error alert
        $("#error-alert").fadeIn(200, function () {
            // This will delay the fade-out for 5 seconds and then fade out
            setTimeout(function () {
                fadeOutAlert("error-alert");
            }, 1500);
        });
    });
</script>
