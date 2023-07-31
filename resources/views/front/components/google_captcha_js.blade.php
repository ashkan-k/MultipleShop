<script type="text/javascript">
    grecaptcha.ready(function () {
        document.getElementById('{{ $form_id }}').addEventListener("submit", function (event) {
            event.preventDefault();
            grecaptcha.execute('{{ env('GOOGLE_RECAPTCHA_KEY') }}', { action: 'register' })
                .then(function (token) {
                    document.getElementById("{{ $field_id }}").value = token;
                    console.log(token)
                    if (token){
                        document.getElementById('{{ $form_id }}').submit();
                    }
                });
        });
    });
</script>
