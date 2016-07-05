@extends('layouts._two_columns_left_sidebar')

@section('content')
<div class="table-responsive">
    <table id="application-table" class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th class="active">申请时间</th>
                <th class="active">身份证号</th>
                <th class="active">姓名</th>
                <th class="active">公示</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>申请时间</th>
                <th>身份证号</th>
                <th>姓名</th>
                <th>公示</th>
            </tr>
        </tfoot>
        <tbody>
        	@foreach ($items as $item)
        		<tr>
                    <td>{{ $item->sqny }}</td>
                    <td>{{ $item->zjhm }}</td>
                    <td>{{ $item->xm }}</td>
					<td>{!! $item->present()->publish !!}</td>
        		</tr>
        	@endforeach
        </tbody>
    </table>
</div>
@stop

@section('scripts')
	@parent

	<script>
		$(function() {
			$('#application-table').dataTable({
				"lengthMenu": [
					[10, 25, 50, -1],
					[10, 25, 50, "全部"]
				],
				"pagingType": "full_numbers",
                "ordering": false,
				"language": {
					"url": "/tutor/js/plugins/dataTables/i18n/zh_cn.lang"
				}
			});
		});
	</script>
@stop