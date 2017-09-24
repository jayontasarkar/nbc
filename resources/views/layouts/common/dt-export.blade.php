<script type="text/javascript">
    $(document).ready(function() {
        $('.datatable').DataTable({
            "pagingType": "full_numbers",
            dom: 'Bfrti',
            responsive: true,
            "bSort": false,
            "bPaginate": false,
            "paging": false,
            "bInfo" : false,
            "buttons": [
                {
                    extend: 'pdfHtml5',
                    title: "{{ $heading . ' (' . date('M d, Y') . ')' }}",
                    exportOptions: {
                        columns: [ {{ $columns }} ]
                    }
                },
                {
                    extend: 'excelHtml5',
                    title: "{{ $heading }}",
                    exportOptions: {
                        columns: [ {{ $columns }} ]
                    }
                },
                {
                    extend: 'print',
                    title: "{{ $heading }}",
                    exportOptions: {
                        columns: [ {{ $columns }} ],
                        modifier: {
                            page: 'current'
                        }
                    }
                }
            ]
        });
    });
</script>