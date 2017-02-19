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
                <th class="active">查看记录</th>
                <th class="active">编辑记录</th>
                <th class="active">删除记录</th>
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
                <th>查看记录</th>
                <th>编辑记录</th>
                <th>删除记录</th>
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
                        @cannot('tutor-access')
                            @if ('' === $item->jysshyj)
                                <a href="{{ route('tutor.getAuditSelection', [$item->id, 'jyssh']) }}" class="btn btn-primary" role="button" title="教研室审核">教研室审核</a>
                            @else
                                {{ $item->present()->jyssh }}
                            @endif
                        @else
                            {{ $item->present()->jyssh }}
                        @endcannot
                    </td>
                    <td>
                        @cannot('tutor-access')
                            @if ('' === $item->xwpdfwhshyj && 1 == $item->jysshyj)
                                <a href="{{ route('tutor.getAuditSelection', [$item->id, 'xwpdfwhsh']) }}" class="btn btn-success" role="button" title="学位评定分委会审核">学位评定分委会审核</a>
                            @else
                                {{ $item->present()->xwpdfwhsh }}
                            @endif
                        @else
                            {{ $item->present()->xwpdfwhsh }}
                        @endcannot
                    </td>
                    <td>
                        @cannot('tutor-access')
                            @if ('' === $item->xxwpdwyhshyj && 1 == $item->xwpdfwhshyj)
    					       <a href="{{ route('tutor.getAuditSelection', [$item->id, 'xxwpdwyhsh']) }}" class="btn btn-info" role="button" title="校学位评定委员会审核">校学位评定委员会审核</a>
                            @else
                                {{ $item->present()->xxwpdwyhsh }}
                            @endif
                        @else
                            {{ $item->present()->xxwpdwyhsh }}
                        @endcannot
                    </td>
                    <td><a href="{{ route('tutor.showSelection', $item->id) }}" class="btn btn-info" role="button" title="查看"><i class="fa fa-search fa-fw"></i></a></td>
                    <td><a href="{{ route('tutor.editSelection', $item->id) }}" class="btn btn-primary" role="button" title="编辑"><i class="fa fa-edit fa-fw"></i></a></td>
                    <td>
                        <form id="delete" name="delete" method="post" action="{{ route('tutor.deleteSelection', $item->id) }}" role="form" onsubmit="return confirm('你确定要删除这条记录吗？')">
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