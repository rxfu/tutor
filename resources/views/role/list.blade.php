@extends('layouts._two_columns_left_sidebar')

@section('subtitle')
<a href="{{ route('role.create') }}" class="btn btn-success" role="button" title="添加{{ $title }}"><i class="fa fa-plus fa-fw"></i>添加{{ $title }}</a>
@stop

@section('content')
<div class="table-responsive">
    <table id="meta-table" class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th class="active">ID</th>
                <th class="active">标识符</th>
                <th class="active">名称</th>
                <th class="active">查看记录</th>
                <th class="active">编辑记录</th>
            	<th class="active">删除记录</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>标识符</th>
                <th>名称</th>
                <th>查看记录</th>
                <th>编辑记录</th>
                <th>删除记录</th>
            </tr>
        </tfoot>
        <tbody>
        	@foreach ($items as $item)
        		<tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->slug }}</td>
        			<td>{{ $item->name }}</td>
					<td><a href="{{ route('role.show', $item->id) }}" class="btn btn-info" role="button" title="查看"><i class="fa fa-search fa-fw"></i></a></td>
					<td><a href="{{ route('role.edit', $item->id) }}" class="btn btn-primary" role="button" title="编辑"><i class="fa fa-edit fa-fw"></i></a></td>
					<td>
						<form id="delete" name="delete" method="post" action="{{ route('role.delete', $item->id) }}" role="form" onsubmit="return confirm('你确定要删除“{{ $title }}：{{ $item->name }}”这条记录吗？')">
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
			$('#meta-table').dataTable({
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