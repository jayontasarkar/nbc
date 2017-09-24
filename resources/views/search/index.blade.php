@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading" style="font-size: large;">
                    যাচাই/পরিদর্শনকৃত গ্রন্থাগার সার্চ করুন
                </div>
                <div class="panel-body">
                    <form action="#" method="POST" role="form">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="search">গ্রন্থাগার সিলেক্ট করুন</label>
                            <select name="search" id="search" class="form-control select2">
                                @foreach($areas as $area)
                                    @if(count($area->children))
                                        @foreach($area->children as $child)
                                        <optgroup label="{{ $child->tag }}">
                                            @if(count($child->applications))
                                                @foreach($child->applications as $application)
                                                    <option value="{{ $application->id }}">
                                                        {{ $application->library_name }} ({{ $application->library_address }})
                                                    </option>
                                                @endforeach
                                            @endif
                                        </optgroup>
                                        @endforeach
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">সার্চ করুন</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        $('.select2').select2({
            placeholder: "গ্রন্থাগার সিলেক্ট করুন",
            allowClear: true
        });
    });
</script>
@endsection