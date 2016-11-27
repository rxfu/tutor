@extends('layouts._two_columns_left_sidebar')

@section('subtitle')
设置系统参数
@stop

@section('content')
<form action="{{ route('setting.update') }}" method="post" role="form" class="form-horizontal">
	{{ method_field('put') }}
	{{ csrf_field() }}
	<fieldset>
		<div class="form-group">
			<label for="is_open_tutor" class="control-label col-sm-2">是否开启导师信息编辑</label>
			<div class="col-sm-10">
				<label class="radio-inline">
					<input type="radio" name="is_open_tutor" value="1"{{ '1' == $items['is_open_tutor'] ? ' checked' : '' }}>&nbsp;是
				</label>
				<label class="radio-inline">
					<input type="radio" name="is_open_tutor" value="0"{{ '0' == $items['is_open_tutor'] ? ' checked' : '' }}>&nbsp;否
				</label>
			</div>
		</div>
		<div class="form-group">
			<label for="is_open_professor" class="control-label col-sm-2">是否开启专家信息编辑</label>
			<div class="col-sm-10">
				<label class="radio-inline">
					<input type="radio" name="is_open_professor" value="1"{{ '1' == $items['is_open_professor'] ? ' checked' : '' }}>&nbsp;是
				</label>
				<label class="radio-inline">
					<input type="radio" name="is_open_professor" value="0"{{ '0' == $items['is_open_professor'] ? ' checked' : '' }}>&nbsp;否
				</label>
			</div>
		</div>
		<div class="form-group">
			<label for="is_open_tutor" class="control-label col-sm-2">是否开启导师遴选</label>
			<div class="col-sm-10">
				<label class="radio-inline">
					<input type="radio" name="is_open_tutor" value="1"{{ '1' == $items['is_open_tutor'] ? ' checked' : '' }}>&nbsp;是
				</label>
				<label class="radio-inline">
					<input type="radio" name="is_open_tutor" value="0"{{ '0' == $items['is_open_tutor'] ? ' checked' : '' }}>&nbsp;否
				</label>
			</div>
		</div>
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-success">更新</button>
		</div>
	</fieldset>
</form>
@stop