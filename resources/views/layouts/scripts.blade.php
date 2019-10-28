<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>--}}
<script src="{{ asset('js/app.js') }}" defer></script>

<script>
    // $('#form-reservations').submit(function() {
    //    event.preventDefault();
    //     var $This = $('#form-reservations');
        grecaptcha.ready(function() {
            grecaptcha.execute('6Ldpd78UAAAAAOU_LmuYeNyhivmZwm1kjYE930PA', {action: 'saveinfo'}).then(function(token) {
                console.log(token);
                $('#google_recaptcha_token,#google_recaptcha_token_franchise').val(token);
                console.log($('#google_recaptcha_token_franchise').val());
                // var formValues = $This.serialize();
                // console.log(formValues);
                // // $("#google_recaptcha_token", $This).remove();
                // $.post($This.attr('action'), formValues, function(result) {
                //     if(result.success) {
                //         alert('Your enquiry has been submitted successfully! We will get back to your shortly.')
                //     } else {
                //         alert('You are spammer!');
                //     }
                // });
            });
        });
    // });
</script>
{{--<script src="https://www.google.com/recaptcha/api.js" async defer></script>--}}
{{--<script type="text/javascript">--}}
{{--    var onloadCallback = function() {--}}
{{--        alert("grecaptcha is ready!");--}}
{{--    };--}}
{{--</script>--}}
{{--<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"--}}
{{--        async defer>--}}
{{--</script>--}}
{{--<script type="text/javascript">--}}
{{--    var onloadCallback = function() {--}}
{{--        grecaptcha.render('html_element', {--}}
{{--            'sitekey' : '6Lc7er8UAAAAADkhSqdbgBMXnHaupBDPx7EU92k2'--}}
{{--        });--}}
{{--    };--}}
{{--</script>--}}