@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="font-size: large;">
                    জেলার নাম: {{ $area->tag }} জেলা
                </div>
                <div class="panel-body">
                    @if(count($area->applications))
                    <p class="text-muted text-center"> "{{ $area->tag }}" জেলার লাইব্রেরীসমূহের তালিকা নিম্নে দেয়া হলো </p>
                    <hr>
                    <table class="table table-hover table-bordered datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>রেজিস্ট্রেশন নম্বর</th>
                                <th>গ্রন্থাগারের নাম</th>
                                <th>গ্রন্থাগারের ঠিকানা</th>
                                <th>প্রতিষ্ঠার সাল ও তারিখ </th>
                                <th>রেজিস্ট্রেশনের তারিখ </th>
                                <th>বইয়ের সংখ্যা</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($area->applications as $key => $library)
                            <tr>
                                <td>{{ entobn($key + 1) }}</td>
                                <td>{{ entobn($library->registration_no) }}</td>
                                <td>{{ $library->library_name }}</td>
                                <td>{{ $library->library_address }}</td>
                                <td>{{ entobn($library->establishment_date->format('M d, Y')) }}</td>
                                <td>{{ entobn($library->registration_date->format('M d, Y')) }}</td>
                                <td>{{ entobn($library->library_book_qty) }}</td>
                                <td>
                                    <a href="{{ route('verifications.show', [$library]) }}" class="btn btn-info btn-xs">বিস্তারিত</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @else
                    <h3 class="text-center">এই জেলায় কোনো লাইব্রেরির তালিকা খুঁজে পাওয়া যায় নি</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
@include('layouts.common.dt-export', [
    'heading' => $area->tag . " জেলার লাইব্রেরীসমূহের তালিকা",
    'columns' => "0, 1, 2, 3, 4, 5"
])
@endsection