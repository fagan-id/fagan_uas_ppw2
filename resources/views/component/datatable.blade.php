@push('customcss')
<link rel="stylesheet" href="{{ asset('dataTables.bootstrap5.css') }}" />
@endpush

@push('customjs')
<script src="{{ asset('dataTables.js') }}"></script>
<script src="{{ asset('dataTables.bootstrap5.js') }}"></script>


<script>
    $(document).ready(function() {
        new DataTable('.datatable');
    });
</script>
@endpush
