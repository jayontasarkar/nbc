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
                    @if(count($area->verifications))
                    <p class="text-muted text-center"> "{{ $area->tag }}" জেলার লাইব্রেরীসমূহের তালিকা নিম্নে দেয়া হলো </p>
                    <hr>
                    @foreach($area->verifications->chunk(2) as $chunk)
                    <div class="row">
                        @foreach($chunk as $verification)
                            <div class="col-md-6">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        {{ $verification->libraby_name }}
                                        <a href="{{ route('verifications.show', [$verification]) }}" class="btn-btn-xs pull-right">বিস্তারিত</a>
                                    </div>
                                    <div class="panel-body">
                                        <p>
                                            <strong>পাঠাগারের ঠিকানা : </strong> {{ $verification->vill }}, {{ $verification->post_code }}, {{ $verification->upozila }}
                                        </p>
                                        <p>
                                            <strong>পাঠাগারের বিবরণ : </strong> {{ $verification->lib_description }}
                                        </p>
                                        <p>
                                            <strong>পাঠাগারের প্রতিষ্টাকাল : </strong> {{ entobn($verification->lib_foundtaion_year) }}
                                        </p>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    @endforeach
                    @else
                    <h3 class="text-center">এই জেলায় কোনো লাইব্রেরির তালিকা খুঁজে পাওয়া যায় নি</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
