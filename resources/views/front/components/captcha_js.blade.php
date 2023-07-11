<script type="text/javascript">
    $(document).ready(function () {
        $('.refresh_button').click(function () {
            $('#id_refresh_button').attr('disabled', true);
            $('#id_refresh_button').css('cursor', 'not-allowed');

            $.ajax({
                type: 'get',
                url: '{{ route('refresh_captcha', ['locale' => $lang]) }}',
                success: function (data) {
                    $('.captcha-image').html(data.captcha);
                    $('#id_refresh_button').attr('disabled', false);
                    $('#id_refresh_button').css('cursor', 'pointer');
                }
            });
        });
    });
</script>
