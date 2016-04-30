@extends('layouts._two_columns_left_sidebar')

@section('subtitle')
编辑{{ $title }}“{{ $item->username }}”信息
@stop

@section('content')
<form action="{{ route('user.update', $item->id) }}" method="post" role="form" class="form-horizontal">
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
			<label for="username" class="control-label col-sm-2">用户名</label>
			<div class="col-sm-10">
				<input type="text" name="username" id="username" class="form-control" placeholder="用户名" value="{{ $item->username }}">
			</div>
		</div>
		<div class="form-group">
			<label for="xm" class="control-label col-sm-2">姓名</label>
			<div class="col-sm-10">
				<input type="text" name="xm" id="xm" class="form-control" placeholder="姓名" value="{{ $item->xm }}">
			</div>
		</div>
		<div class="form-group">
			<label for="sfzh" class="control-label col-sm-2">身份证号</label>
			<div class="col-sm-10">
				<input type="text" name="sfzh" id="sfzh" class="form-control" placeholder="身份证号" value="{{ $item->sfzh }}">
			</div>
		</div>
		<div class="form-group">
			<label for="role_id" class="control-label col-sm-2">所属角色</label>
			<div class="col-sm-10">
				@inject('roles', 'Tis\Account\Repositories\RoleRepository')
				<select name="role_id" id="role_id" class="form-control">
					@foreach ($roles->getAll() as $role)
						{!! $role->present()->option($item->role_id) !!}
					@endforeach
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="is_super" class="control-label col-sm-2">是否超级管理员</label>
			<div class="col-sm-10">
				{!! $item->present()->super_radio($item->is_super) !!}
			</div>
		</div>
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-success">更新</button>
		</div>
	</fieldset>
</form>
@stop