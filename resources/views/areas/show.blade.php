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
                    @foreach($area->applications as $chunk)

                    @else
                    <h3 class="text-center">এই জেলায় কোনো লাইব্রেরির তালিকা খুঁজে পাওয়া যায় নি</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
