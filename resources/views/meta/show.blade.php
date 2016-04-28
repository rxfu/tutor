@extends('layouts._two_columns_left_sidebar')

@section('subtitle')
{{ $title }}“{{ $object->{array_keys($attributes)[1]} }}”详细信息
@stop

@section('content')
<form class="form-horizontal">
	@foreach ($attributes as $attribute => $name)
		<div class="form-group">
			<label for="{{ $attribute }}" class="control-label col-sm-2">{{ $name }}</label>
			<div class="col-sm-10">
				<p class="form-control-static">{{ $object->{$attribute} }}</p>
			</div>
		</div>
	@endforeach
	<div class="col-sm-offset-2 col-sm-10">
		<a href="{{ route('metadata.' . $type . '.edit', $object->{head(array_keys($attributes))}) }}" title="编辑" class="btn btn-primary" role="button">编辑</a>
	</div>
</form>
@stop