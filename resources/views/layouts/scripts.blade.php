<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>--}}
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://www.google.com/recaptcha/api.js?render=6Ldpd78UAAAAAOU_LmuYeNyhivmZwm1kjYE930PA"></script>
<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('6Ldpd78UAAAAAOU_LmuYeNyhivmZwm1kjYE930PA', {action: 'homepage'}).then(function(token) {
//
        });
    });
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