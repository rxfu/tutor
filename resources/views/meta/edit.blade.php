@extends('layouts._two_columns_left_sidebar')

@section('subtitle')
编辑{{ $title }}“{{ $item->{$attributes[1]} }}”信息
@stop

@section('content')
<form action="{{ route('metadata.update', [$type, $item->{$attributes[0]}]) }}" method="post" role="form" class="form-horizontal">
	{{ method_field('put') }}
	{{ csrf_field() }}
	<fieldset>
		@foreach ($attributes as $attribute)
			<div class="form-group">
				<label for="{{ $attribute }}" class="control-label col-sm-2">{{ trans('database.' . $attribute) }}</label>
				<div class="col-sm-10">
					<input type="text" name="{{ $attribute }}" id="{{ $attribute }}" class="form-control" placeholder="{{ trans('database.' . $attribute) }}" value="{{ $item->{$attribute} }}">
				</div>
			</div>
		@endforeach
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-success">更新</button>
		</div>
	</fieldset>
</form>
@stop