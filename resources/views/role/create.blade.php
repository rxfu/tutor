@extends('layouts._two_columns_left_sidebar')

@section('subtitle')
添加{{ $title }}
@stop

@section('content')
<form action="{{ route('role.store') }}" method="post" role="form" class="form-horizontal">
	{{ csrf_field() }}
	<fieldset>
		<div class="form-group">
			<label for="id" class="control-label col-sm-2">ID</label>
			<div class="col-sm-10">
				<input type="text" name="id" id="id" class="form-control" placeholder="ID" value="{{ old('id') }}">
			</div>
		</div>
		<div class="form-group">
			<label for="slug" class="control-label col-sm-2">标识符</label>
			<div class="col-sm-10">
				<input type="text" name="slug" id="slug" class="form-control" placeholder="标识符" value="{{ old('slug') }}">
			</div>
		</div>
		<div class="form-group">
			<label for="name" class="control-label col-sm-2">名称</label>
			<div class="col-sm-10">
				<input type="text" name="name" id="name" class="form-control" placeholder="名称" value="{{ old('name') }}">
			</div>
		</div>
		<div class="form-group">
			<label for="description" class="control-label col-sm-2">描述</label>
			<div class="col-sm-10">
				<textarea name="description" cols="50" rows="10" class="form-control" placeholder="描述">{{ old('description') }}</textarea>
			</div>
		</div>
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-success" title="添加">添加</button>
		</div>
	</fieldset>
</form>
@stop