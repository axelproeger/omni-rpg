@if (session()->has('swal_msg'))
    <script type="text/javascript">

        $( document ).ready(function() {

        notification = @json(session()->pull("swal_msg"));

        Swal.fire({
            icon: notification.type,
            title: notification.title,
            text: notification.message
        });

        @php
            session()->forget('swal_msg');
        @endphp
    </script>
@endif
