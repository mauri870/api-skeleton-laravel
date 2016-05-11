<script type="text/javascript">
    jQuery(document).ready(function ($) {
        // Toastr Notifications
        var opts = {
            "closeButton": true,
            "debug": false,
            "positionClass": "toast-top-right",
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        {!! Notification::showAll() !!}

        @unless($errors->isEmpty())
            @foreach($errors->getMessages() as $error)
                toastr.error("{{ $error[0] }}", "Erro", opts);
        @endforeach
        @endunless
    }, 3000);
</script>