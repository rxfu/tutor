@extends('layouts._two_columns_left_sidebar')

@section('subtitle')
验证{{ $title }}
@stop

@section('content')
<form action="{{ route('tutor.createSelection') }}" method="get" role="form" class="form-horizontal">
	<fieldset>
		<div class="form-group">
			<label for="sfzh" class="control-label col-sm-2">证件号码</label>
			<div class="col-sm-10">
				<input type="text" name="sfzh" id="sfzh" class="form-control" placeholder="证件号码">
			</div>
		</div>
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-success" title="添加">添加</button>
		</div>
	</fieldset>
</form>
@stop
