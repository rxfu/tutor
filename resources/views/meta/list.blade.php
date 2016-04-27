@extends('layouts._two_columns_left_sidebar')

@section('content')
<div class="table-responsive">
    <table id="meta-table" class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
            	@foreach ($columns as $column)
                	<th class="active">{{ $column }}</th>
            	@endforeach
            	<th class="active" colspan="3">操作</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
            	@foreach ($columns as $column)
                	<th>{{ $column }}</th>
            	@endforeach
            	<th colspan="3">操作</th>
            </tr>
        </tfoot>
        <tbody>
        	@foreach ($fields as $items)
        		<tr>
        			@foreach ($items as $item)
        				<td>{{ $item }}</td>
        			@endforeach
					<td><a href="{{ route('metadata.' . $type . '.show', reset($items)) }}" class="btn btn-info" role="button" title="查看"><i class="fa fa-search fa-fw"></i></a></td>
					<td><a href="{{ route('metadata.' . $type . '.edit', reset($items)) }}" class="btn btn-primary" role="button" title="编辑"><i class="fa fa-edit fa-fw"></i></a></td>
					<td>
						<form id="delete" name="delete" method="post" action="{{ route('metadata.' . $type . '.delete', reset($items)) }}" role="form" onsubmit="return confirm('你确定要删除这条记录吗？')">
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
				"language": {
					"url": "/tutor/js/plugins/dataTables/i18n/zh_cn.lang"
				}
			});
		});
	</script>
@stop