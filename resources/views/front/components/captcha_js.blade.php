<script type="text/javascript">
    $(document).ready(function () {
        $('.refresh_button').click(function () {
            $('.refresh_button').attr('disabled', true);
            $('.refresh_button').css('cursor', 'not-allowed');

            $.ajax({
                type: 'get',
                url: '{{ route('refresh_captcha', ['locale' => $lang]) }}',
                success: function (data) {
                    $('.captcha-image').html(data.captcha);
                    $('.refresh_button').attr('disabled', false);
                    $('.refresh_button').css('cursor', 'pointer');
                }
            });
        });
    });
</script>
