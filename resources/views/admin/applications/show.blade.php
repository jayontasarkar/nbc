@extends('layouts.app')

@section('style')
<style>
    .non_headed_table thead {
        display: none;
    }
</style>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="font-size: large;">
                    বেসরকারী গ্রন্থাগারের বিবরণ
                </div>
                <div class="panel-body">
                    <table class="table table-hover table-bordered datatable non_headed_table">
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="width: 40%;">গ্রন্থাগারের নাম : </td>
                                <td style="width: 60%;">{{ $application->library_name }}</td>
                            </tr>
                            <tr>
                                <td style="width: 40%;">গ্রন্থাগারের ঠিকানা : </td>
                                <td style="width: 60%;">
                                    {{ $application->library_address }},
                                    {{ $application->area->tag }}
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 40%;">গ্রন্থাগার প্রতিষ্ঠাকাল : </td>
                                <td style="width: 60%;">{{ entobn($application->establishment_date->format('M d, Y')) }}</td>
                            </tr>
                            <tr>
                                <td style="width: 40%;">গ্রন্থাগার ভবনের বিবরণ : </td>
                                <td style="width: 60%;">{{ $application->library_has_own_room ? 'নিজস্ব ভবন' : $application->alternate_library_room }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        $('.datatable').DataTable({
            "iDisplayLength": 40,
            dom: 'Bfrti',
            responsive: true,
            "bSort": false,
            "searching": false,
            "bInfo" : false,
            "buttons": [
                {
                    extend: 'pdfHtml5',
                    title: "গ্রন্থাগারের বিবরণ"
                },
                {
                    extend: 'print',
                    title: "গ্রন্থাগারের বিবরণ"
                }
            ]
        });
    });
</script>
@endsection