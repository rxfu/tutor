@extends('layouts.print')

@section('content')
	<table id="printable" width="960px" align="center" border="1" cellpadding="0" cellspacing="0">
		<caption>
			<h1>{{ $title }}</h1>
		</caption>
		<thead>
			<tr>
				<th>专家编号</th>
				<th>姓名</th>
				<th>性别</th>
				<th>主要学科</th>
				<th>学术学位研究生导师类别</th>
				<th>专业学位研究生导师类别</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($items as $item)
				<tr>
					<td>{{ $item->zjbh }}</td>
					<td>{{ $item->zjxm }}</td>
					<td>{{ $item->xb }}</td>
					<td>{{ $item->yjxkmc }}</td>
					<td>{{ $item->dslb }}</td>
					<td>{{ $item->dslb2 }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop