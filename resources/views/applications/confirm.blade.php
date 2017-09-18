@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">

			</div>
			<div class="panel-body">
				{{ session()->get('success') }}
			</div>
		</div>
	</div>
</div>
@stop

@section('script')
<script type="text/javascript">
	$(document).ready(function() {
		$('.select2').select2();
		$( ".datepicker" ).datepicker({
			dateFormat : 'mm/dd/yy',
            changeMonth: true,
            changeYear: true
		});
	});
</script>
@endsection