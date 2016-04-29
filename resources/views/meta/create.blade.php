@extends('layouts._two_columns_left_sidebar')

@section('subtitle')
添加{{ $title }}
@stop

@section('content')
<form action="{{ route('metadata.store', $type) }}" method="post" role="form" class="form-horizontal">
	{{ csrf_field() }}
	<fieldset>
		@foreach ($attributes as $attribute)
			<div class="form-group">
				<label for="{{ $attribute }}" class="control-label col-sm-2">{{ trans('database.' . $attribute) }}</label>
				<div class="col-sm-10">
					<input type="text" name="{{ $attribute }}" id="{{ $attribute }}" class="form-control" placeholder="{{ trans('database.' . $attribute) }}" value="{{ old($attribute) }}">
				</div>
			</div>
		@endforeach
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-success" title="添加"添加</button>
		</div>
	</fieldset>
</form>
@stop