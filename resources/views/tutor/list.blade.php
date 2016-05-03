@extends('layouts._two_columns_left_sidebar')

@section('content')
<div class="table-responsive">
    <table id="tutor-table" class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th class="active">证件号码</th>
                <th class="active">姓名</th>
                <th class="active">导师类别</th>
                <th class="active">二级学科</th>
                <th class="active">导师大类</th>
                <th class="active">是否兼职导师</th>
                <th class="active">查看记录</th>
                <th class="active">编辑记录</th>
            	<th class="active">删除记录</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>证件号码</th>
                <th>姓名</th>
                <th>导师类别</th>
                <th>二级学科</th>
                <th>导师大类</th>
                <th>是否兼职导师</th>
                <th>查看记录</th>
                <th>编辑记录</th>
                <th>删除记录</th>
            </tr>
        </tfoot>
        <tbody>
        	@foreach ($items as $item)
        		<tr>
                    <td>{{ $item->zjhm }}</td>
                    <td>{{ $item->xm }}</td>
                    <td>{{ $item->present()->type }}</td>
                    <td>{{ $item->subdiscipline->mc }}</td>
                    <td>{{ $item->present()->category }}</td>
        			<td>{{ $item->present()->is_part_time }}</td>
					<td><a href="{{ route('tutor.show', $item->id) }}" class="btn btn-info" role="button" title="查看"><i class="fa fa-search fa-fw"></i></a></td>
					<td><a href="{{ route('tutor.edit', $item->id) }}" class="btn btn-primary" role="button" title="编辑"><i class="fa fa-edit fa-fw"></i></a></td>
					<td>
						<form id="delete" name="delete" method="post" action="{{ route('tutor.delete', $item->id) }}" role="form" onsubmit="return confirm('你确定要删除“{{ $title }}：{{ $item->xm }}”这条记录吗？')">
							{{ method_field('delete') }}
							{{ csrf_field() }}
							<button type="submit" class="btn btn-danger" title="删除"><i class="fa fa-trash-o fa-fw"></i></button>
						</form>
					</td>
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
			$('#tutor-table').dataTable({
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