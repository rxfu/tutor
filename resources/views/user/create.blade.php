@extends('layouts._two_columns_left_sidebar')

@section('subtitle')
添加{{ $title }}
@stop

@section('content')
<form action="{{ route('user.store') }}" method="post" role="form" class="form-horizontal">
	{{ csrf_field() }}
	<fieldset>
		<div class="form-group">
			<label for="username" class="control-label col-sm-2">用户名</label>
			<div class="col-sm-10">
				<input type="text" name="username" id="username" class="form-control" placeholder="用户名" value="{{ old('username') }}">
			</div>
		</div>
		<div class="form-group">
			<label for="xm" class="control-label col-sm-2">姓名</label>
			<div class="col-sm-10">
				<input type="text" name="xm" id="xm" class="form-control" placeholder="姓名" value="{{ old('xm') }}">
			</div>
		</div>
		<div class="form-group">
			<label for="sfzh" class="control-label col-sm-2">身份证号</label>
			<div class="col-sm-10">
				<input type="text" name="sfzh" id="sfzh" class="form-control" placeholder="身份证号" value="{{ old('sfzh') }}">
			</div>
		</div>
		<div class="form-group">
			<label for="role_id" class="control-label col-sm-2">所属角色</label>
			<div class="col-sm-10">
				@inject('roles', 'Tis\Account\Repositories\RoleRepository')
				<select name="role_id" id="role_id" class="form-control">
					@foreach ($roles->getAll() as $role)
						{!! $role->present()->option(old('role')) !!}
					@endforeach
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="xy" class="control-label col-sm-2">所在学院</label>
			<div class="col-sm-10">
				@inject('colleges', 'Tis\Tutor\Repositories\CollegeRepository')
				<select name="xy" id="xy" class="form-control">
					@foreach ($colleges->getAll() as $college)
						{!! $college->present()->option(old('xy')) !!}
					@endforeach
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="is_super" class="control-label col-sm-2">是否超级管理员</label>
			<div class="col-sm-10">
				<label class="radio-inline">
					<input type="radio" name="is_super" value="1">&nbsp;是
				</label>
				<label class="radio-inline">
					<input type="radio" name="is_super" value="0" checked>&nbsp;否
				</label>
			</div>
		</div>
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-success" title="添加">添加</button>
		</div>
	</fieldset>
</form>
@stop