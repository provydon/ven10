{{-- Get CSRF --}}
<script>
   const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
</script>
{{-- End Get CSRF --}}


{{-- Import Main Scripts --}}
<script src="{{ asset('js/app.js')}}"></script>
{{-- <script src="{{ asset('js/jquery-3.5.1.js')}}"></script> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> --}}
{{-- End Import Main Scripts --}}


{{-- Initialize Tolltip --}}
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
{{-- End Initialize Tooltip --}}


