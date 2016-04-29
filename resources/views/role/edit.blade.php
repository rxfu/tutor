@extends('layouts._two_columns_left_sidebar')

@section('subtitle')
编辑{{ $title }}“{{ $item->name }}”信息
@stop

@section('content')
<form action="{{ route('role.update', $item->id) }}" method="post" role="form" class="form-horizontal">
	{{ method_field('put') }}
	{{ csrf_field() }}
	<fieldset>
		<div class="form-group">
			<label class="control-label col-sm-2">ID</label>
			<div class="col-sm-10">
				<p class="form-control-static">{{ $item->id }}</p>
			</div>
		</div>
		<div class="form-group">
			<label for="slug" class="control-label col-sm-2">标识符</label>
			<div class="col-sm-10">
				<input type="text" name="slug" id="slug" class="form-control" placeholder="标识符" value="{{ $item->slug }}">
			</div>
		</div>
		<div class="form-group">
			<label for="name" class="control-label col-sm-2">名称</label>
			<div class="col-sm-10">
				<input type="text" name="name" id="name" class="form-control" placeholder="名称" value="{{ $item->name }}">
			</div>
		</div>
		<div class="form-group">
			<label for="description" class="control-label col-sm-2">描述</label>
			<div class="col-sm-10">
				<textarea name="description" cols="50" rows="10" class="form-control" placeholder="描述">{{ $item->description }}</textarea>
			</div>
		</div>
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-success">更新</button>
		</div>
	</fieldset>
</form>
@stop