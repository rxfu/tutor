@extends('layouts._two_columns_left_sidebar')

@section('subtitle')
{{ $title }}“{{ $item->name }}”详细信息
@stop

@section('content')
<form class="form-horizontal">
	<div class="form-group">
		<label class="control-label col-sm-2">ID</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->id }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">标识符</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->slug }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">名称</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->name }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">描述</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->description }}</p>
		</div>
	</div>
	<div class="col-sm-offset-2 col-sm-10">
		<a href="{{ route('role.edit', $item->id) }}" title="编辑" class="btn btn-primary" role="button">编辑</a>
	</div>
</form>
@stop