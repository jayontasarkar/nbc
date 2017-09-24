@extends('layouts.app')

@section('content')

<div class="panel panel-default">
	<div class="panel-heading" style="font-size: large;">
		সারাদেশব্যাপী বেসরকারি গ্রন্থাগারের তালিকা
		<a href="#" class="pull-right btn btn-info">সারাদেশের গ্রন্থাগারের তালিকা</a>
	</div>
	<div class="panel-body">
			@foreach($areas->chunk(4) as $chunk)
				<div class="row">
					@foreach($chunk as $division)
						<div class="col-md-3">
							<h3><a href="{{ route('division.show', [$division]) }}"> <span class="text-muted">
								{{ $division->tag }} বিভাগ</span> </a>
							</h3>
							@foreach($division->children as $district)
								<h5>
									<a href="{{ route('areas.show', [$district]) }}">
										{{ $district->tag }} জেলা ({{ entobn($district->applications->count()) }})
									</a>
								</h5>
							@endforeach
						</div>
					@endforeach
				</div>
				<hr>
			@endforeach
		</div>
	</div>
</div>

@endsection

@section('script')
	<script type="text/javascript">
		$(document).ready(function() {
			$('.select2').select2();
		});
	</script>
@endsection