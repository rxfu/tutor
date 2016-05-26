@extends('layouts._two_columns_left_sidebar')

@section('content')
<div class="table-responsive">
    <table id="by-age-table" class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th class="active" rowspan="2">年龄段</th>
                <th class="active" colspan="2">男</th>
                <th class="active" colspan="2">女</th>
                <th class="active">合计</th>
            </tr>
            <tr>
            	<th class="active">人数</th>
            	<th class="active">比例</th>
            	<th class="active">人数</th>
            	<th class="active">比例</th>
            	<th class="active">人数</th>
            </tr>
        </thead>
        <tbody>
        	@foreach ($items as $item)
        		<tr>
        			<?php $total = $item[1] + $item[2]?>
                    <th>{{ $item['title'] }}</th>
                    <td>{{ $item[1] }}</td>
        			<td>{{ $total ? round($item[1] / $total * 100, 2) : $total }}%</td>
                    <td>{{ $item[2] }}</td>
        			<td>{{ $total ? round($item[2] / $total * 100, 2) : $total }}%</td>
        			<td>{{ $total }}</td>
        		</tr>
        	@endforeach
        </tbody>
    </table>
</div>
@stop