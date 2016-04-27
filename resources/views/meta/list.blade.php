@extends('layouts._two_columns_left_sidebar')

@section('content')
<div class="table-responsive">
    <table id="meta-table" class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
            	@foreach ($columns as $column)
                	<th class="active">{{ $column }}</th>
            	@endforeach
            </tr>
        </thead>
        <tfoot>
            <tr>
            	@foreach ($columns as $column)
                	<th>{{ $column }}</th>
            	@endforeach
            </tr>
        </tfoot>
        <tbody>
        	@foreach ($fields as $items)
        		<tr>
        			@foreach ($items as $item)
        				<td>{{ $item }}</td>
        			@endforeach
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