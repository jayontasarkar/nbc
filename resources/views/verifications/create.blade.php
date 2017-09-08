@inject('areas', 'App\Services\AreaService')

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">বেসরকারি পাঠাগার যাচাই/পরিদর্শন  ফরম </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('verifications.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">গ্রন্থাগারের নাম </label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="libraby_name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('village') ? ' has-error' : '' }}">
                            <label for="village" class="col-md-4 control-label">গ্রাম/মহল্লা </label>

                            <div class="col-md-6">
                                <input id="village" type="text" class="form-control" name="vill" value="{{ old('village') }}" required autofocus>

                                @if ($errors->has('village'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('village') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('post_code') ? ' has-error' : '' }}">
                            <label for="post_code" class="col-md-4 control-label">পোস্ট ও কোড নং </label>

                            <div class="col-md-6">
                                <input id="" type="text" class="form-control" name="post_code" value="{{ old('post_code') }}" required autofocus>

                                @if ($errors->has('post_code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('upozila') ? ' has-error' : '' }}">
                            <label for="upozila" class="col-md-4 control-label">উপজেলা </label>

                            <div class="col-md-6">
                                <input id="upozila" type="text" class="form-control" name="upozila" value="{{ old('') }}" required autofocus>

                                @if ($errors->has('upozila'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('upozila') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('district_id') ? ' has-error' : '' }}">
                            <label for="district_id" class="col-md-4 control-label">জেলা </label>

                            <div class="col-md-6">
                                <select name="district_id" id="select2" class="select2 form-control">
                                    @foreach($areas->get() as $division)
                                        <optgroup label="{{ $division->tag }} বিভাগ">
                                            @if(count($division->children) > 0)
                                                @foreach($division->children as $district)
                                                    <option value="{{ $district->id }}"
                                                        {{ Request::input('district_id') == $district->id ? 'selected' : '' }}
                                                    >{{ $district->tag }} জেলা</option>
                                                @endforeach
                                            @endif
                                        </optgroup>
                                    @endforeach
                                </select>

                                @if ($errors->has('district_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('district_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="" class="col-md-4 control-label">গ্রন্থাগার প্রতিষ্ঠাকাল </label>

                            <div class="col-md-6">
                                <input id="" type="text" class="form-control" name="lib_foundtaion_year" value="{{ old('') }}" required autofocus>

                                @if ($errors->has(''))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="" class="col-md-4 control-label">গ্রন্থাগার ভবনের বিবরণ </label>

                            <div class="col-md-6">
                                <textarea id="" class="form-control" name="lib_description" value="{{ old('') }}" required autofocus>

                                </textarea>

                                @if ($errors->has(''))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="" class="col-md-4 control-label">গ্রন্থাগারের আসবাবপত্র, যন্ত্রপাতি ও কম্পিউটার ইত্যাদির বিবরণ </label>

                            <div class="col-md-6">
                                <textarea id="" class="form-control" name="asset_description" value="{{ old('') }}" required autofocus>

                                </textarea>

                                @if ($errors->has(''))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="" class="col-md-4 control-label">গ্রন্থাগারের বই সংখ্যা </label>

                            <div class="col-md-6">
                                <input id="" type="number" class="form-control" name="no_of_books" value="{{ old('') }}" required autofocus>

                                @if ($errors->has(''))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="" class="col-md-4 control-label">গ্রন্থাগারে গড়ে প্রতিদিন কতজন পাঠক আসে?</label>

                            <div class="col-md-6">
                                <input id="" type="number" class="form-control" name="visitors_per_day" value="{{ old('') }}" required autofocus>

                                @if ($errors->has(''))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="" class="col-md-4 control-label">পত্রিকা/সাময়িকীর সংখ্যা </label>

                            <div class="col-md-6">
                                <input id="" type="text" class="form-control" name="no_of_newspapers" value="{{ old('') }}" required autofocus>

                                @if ($errors->has(''))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="" class="col-md-4 control-label">গ্রন্থগার সপ্তাহে কতদিন খোলা থাকে? </label>

                            <div class="col-md-6">
                                <input id="" type="text" class="form-control" name="opening_days_week" value="{{ old('') }}" required autofocus>

                                @if ($errors->has(''))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="" class="col-md-4 control-label">গ্রন্থগার খোলের সময় </label>

                            <div class="col-md-6">
                                <input id="" type="text" class="form-control" name="opening_time" value="{{ old('') }}" required autofocus>

                                @if ($errors->has(''))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="" class="col-md-4 control-label">গ্রন্থগারে গণতন্ত্র, পরিচালনা কমিটি আছে কি না? </label>

                            <div class="col-md-6">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="committee" required value="1">&nbsp;হ্যাঁ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" name="committee" required value="0">&nbsp;না
                                    </label>
                                </div>

                                @if ($errors->has(''))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="" class="col-md-4 control-label">গ্রন্থাগারিকের নাম</label>

                            <div class="col-md-6">
                                <input id="" type="text" class="form-control" name="libarian_name" value="{{ old('') }}" required autofocus>

                                @if ($errors->has(''))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="" class="col-md-4 control-label"> শিক্ষাগত যোগ্যতা </label>

                            <div class="col-md-6">
                                <input id="" type="text" class="form-control" name="libarian_qualification" value="{{ old('') }}" required autofocus>

                                @if ($errors->has(''))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="" class="col-md-4 control-label">সভাপতির নাম </label>

                            <div class="col-md-6">
                                <input id="" type="text" class="form-control" name="chairman_name" value="{{ old('') }}" required autofocus>

                                @if ($errors->has(''))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="" class="col-md-4 control-label">সভাপতির মোবাইল নম্বর</label>

                            <div class="col-md-6">
                                <input id="" type="text" class="form-control" name="chairman_mobile" value="{{ old('') }}" required autofocus>

                                @if ($errors->has(''))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="" class="col-md-4 control-label">মন্তব্য </label>

                            <div class="col-md-6">
                                <textarea id="" class="form-control" name="comments" value="{{ old('') }}" required autofocus>

                                </textarea>

                                @if ($errors->has(''))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    আবেদন করুন
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
  $('select').select2();
</script>
@stop
