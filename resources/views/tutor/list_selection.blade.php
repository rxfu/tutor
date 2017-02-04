@extends('layouts._two_columns_left_sidebar')

@section('content')
<div class="table-responsive">
    <table id="application-table" class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th class="active">身份证号</th>
                <th class="active">姓名</th>
                <th class="active">所在部门</th>
                <th class="active">导师大类</th>
                <th class="active">导师类别</th>
                <th class="active">拟申报学科专业</th>
                <th class="active">备注</th>
                <th class="active">教研室审核</th>
                <th class="active">学位评定分委会审核</th>
                <th class="active">校学位评定委员会审核</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>身份证号</th>
                <th>姓名</th>
                <th>所在部门</th>
                <th>导师大类</th>
                <th>导师类别</th>
                <th>拟申报学科专业</th>
                <th>备注</th>
                <th>教研室审核</th>
                <th>学位评定分委会审核</th>
                <th>校学位评定委员会审核</th>
            </tr>
        </tfoot>
        <tbody>
        	@foreach ($items as $item)
        		<tr>
                    <td>{{ $item->zjhm }}</td>
                    <td><a href="{{ route('tutor.showSelection', $item->id) }}">{{ $item->tutor->xm }}</a></td>
                    <td>{{ $item->tutor->college->mc }}</td>
                    <td>{{ $item->present()->category }}</td>
                    <td>{{ $item->present()->type }}</td>
                    <td>{{ $item->subdiscipline2->mc }}</td>
                    <td>{{ $item->tutor->present()->bz }}</td>
                    <td>
                        @if ('' === $item->jysshyj)
                            <a href="{{ route('tutor.getAuditSelection', [$item->id, 'jyssh']) }}" class="btn btn-primary" role="button" title="申请导师">教研室审核</a>
                        @else
                            {{ $item->present()->jyssh }}
                        @endif
                    </td>
                    <td>
                        @if ('' === $item->xwpdfwhshyj && 1 == $item->jysshyj)
                            <a href="{{ route('tutor.getAuditSelection', [$item->id, 'xwpdfwhsh']) }}" class="btn btn-success" role="button" title="学位评定分委会审核">学位评定分委会审核</a>
                        @else
                            {{ $item->present()->xwpdfwhsh }}
                        @endif
                    </td>
                    <td>
                        @if ('' === $item->xxwpdwyhshyj && 1 == $item->xwpdfwhshyj)
					       <a href="{{ route('tutor.getAuditSelection', [$item->id, 'xxwpdwyhsh']) }}" class="btn btn-info" role="button" title="校学位评定委员会审核">校学位评定委员会审核</a>
                        @else
                            {{ $item->present()->xxwpdwyhsh }}
                        @endif
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