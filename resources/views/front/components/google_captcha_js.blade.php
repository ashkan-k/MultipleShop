<script type="text/javascript">
    grecaptcha.ready(function () {
        document.getElementById('{{ $form_id }}').addEventListener("submit", function (event) {
            event.preventDefault();
            grecaptcha.execute('{{ env('GOOGLE_RECAPTCHA_KEY') }}', { action: 'register' })
                .then(function (token) {
                    document.getElementById("{{ $field_id }}").value = token;
                    if (token){
                        document.getElementById('{{ $form_id }}').submit();
                    }else {
                        alert('{{ __('Invalid captcha! Reload the page and try again.') }}')
                    }
                });
        });
    });
</script>
