@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="font-size: large;">
                    জেলার নাম: {{ $area->tag }} জেলা
                </div>
                <div class="panel-body">
                    @if(count($area->verifications))
                    <p class="text-muted"> "{{ $area->tag }}" জেলার লাইব্রেরীসমূহের তালিকা নিম্নে দেয়া হলো </p>
                    @else
                    <h3 class="text-center">এই জেলায় কোনো লাইব্রেরির তালিকা খুঁজে পাওয়া যায় নি</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
