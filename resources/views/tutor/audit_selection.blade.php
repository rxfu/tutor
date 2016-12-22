@extends('layouts._two_columns_left_sidebar')

@section('subtitle')
审核{{ $title }}
@stop

@section('content')
<form action="{{ route('tutor.auditSelection', $item->id) }}" method="post" role="form" class="form-horizontal">
	{{ method_field('put') }}
	{{ csrf_field() }}
	<fieldset>
		<div class="form-group">
			<label for="{{ $type }}qk" class="control-label col-sm-2">审核情况</label>
			<div class="col-sm-10">
				<textarea name="{{ $type }}qk" cols="50" rows="10" class="form-control" placeholder="审核情况">{{ old($type . 'qk') }}</textarea>
			</div>
		</div>
		<div class="form-group">
			<label for="{{ $type }}yj" class="control-label col-sm-2">审核意见</label>
			<div class="col-sm-10">
				<label class="radio-inline">
					<input type="radio" name="{{ $type }}yj" value="1"{{ '1' == $item->{ $type . 'yj' } ? ' checked' : '' }}>&nbsp;同意
				</label>
				<label class="radio-inline">
					<input type="radio" name="{{ $type }}yj" value="0"{{ '0' == $item->{ $type . 'yj' } ? ' checked' : '' }}>&nbsp;不同意
				</label>
			</div>
		</div>
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-success" title="提交审核">提交审核</button>
		</div>
	</fieldset>
</form>
@stop