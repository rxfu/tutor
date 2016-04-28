@extends('layouts._two_columns_left_sidebar')

@section('subtitle')
性别“{{ $title }}”详细信息
@stop

@section('content')
<table class="table table-striped">
	@foreach ($attributes as $attribute => $name)
		<tr>
			<th class="col-md-4 text-right">{{ $name }}：</th>
			<td class="col-md-8 text-left">{{ $gender->{$attribute} }}</td>
		</tr>
	@endforeach
</table>
<a href="{{ route('metadata.' . $type . '.edit', head(array_keys($attributes))) }}" title="编辑" class="btn btn-primary" role="button">编辑</a>
@stop