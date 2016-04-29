@extends('layouts._two_columns_left_sidebar')

@section('subtitle')
{{ $title }}“{{ $item->{$attributes[1]} }}”详细信息
@stop

@section('content')
<form class="form-horizontal">
	@foreach ($attributes as $attribute)
		<div class="form-group">
			<label class="control-label col-sm-2">{{ trans('database.' . $attribute) }}</label>
			<div class="col-sm-10">
				<p class="form-control-static">{{ $item->{$attribute} }}</p>
			</div>
		</div>
	@endforeach
	<div class="col-sm-offset-2 col-sm-10">
		<a href="{{ route('metadata.edit', [$type, $item->{$attributes[0]}]) }}" title="编辑" class="btn btn-primary" role="button">编辑</a>
	</div>
</form>
@stop