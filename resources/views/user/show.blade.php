@extends('layouts._two_columns_left_sidebar')

@section('subtitle')
{{ $title }}“{{ $item->username }}”详细信息
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
		<label class="control-label col-sm-2">用户名</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->username }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">姓名</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->xm }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">身份证号</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->sfzh }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">所属角色</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->role->name }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">所在学院</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->present()->college }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">是否超级管理员</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->present()->super }}</p>
		</div>
	</div>
	<div class="col-sm-offset-2 col-sm-10">
		<a href="{{ route('user.edit', $item->id) }}" title="编辑" class="btn btn-primary" role="button">编辑</a>
	</div>
</form>
@stop