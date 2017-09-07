@extends('layouts.app')

@section('content')

<div class="panel panel-default">
	<div class="panel-body">
			@foreach($areas->chunk(4) as $chunk)
				<div class="row">
					@foreach($chunk as $division)
						<div class="col-md-3">
							<h3><a href="#"> <span class="text-muted">
								{{ $division->tag }} বিভাগ</span> </a>
							</h3>
							@foreach($division->children as $district)
								<h5>
									<a href="{{ route('areas.show', [$district]) }}">
										{{ $district->tag }} জেলা
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