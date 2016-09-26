@extends('layouts._two_columns_left_sidebar')

@section('subtitle')
<a href="{{ route('expert.new') }}" class="btn btn-success" role="button" title="添加{{ $title }}"><i class="fa fa-plus fa-fw"></i>添加{{ $title }}</a>
<a href="{{ route('expert.print') }}" class="btn btn-primary" role="button" title="生成{{ $title }}报表" target="_blank"><i class="fa fa-print fa-fw"></i>生成{{ $title }}报表</a>
@stop

@section('content')
<div class="table-responsive">
    <table id="expert-table" class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th class="active">专家编号</th>
                <th class="active">所在部门</th>
                <th class="active">姓名</th>
                <th class="active">主要学科</th>
                <th class="active">最高学位</th>
                <th class="active">专业技术职务</th>
                <th class="active">移动电话</th>
                <th class="active">查看记录</th>
                <th class="active">编辑记录</th>
            	<th class="active">删除记录</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>专家编号</th>
                <th>所在部门</th>
                <th>姓名</th>
                <th>主要学科</th>
                <th>最高学位</th>
                <th>专业技术职务</th>
                <th>移动电话</th>
                <th>查看记录</th>
                <th>编辑记录</th>
                <th>删除记录</th>
            </tr>
        </tfoot>
        <tbody>
        	@foreach ($items as $item)
        		<tr>
                    <td>{{ $item->zjbh }}</td>
                    <td>{{ $item->szbm }}</td>
                    <td>{{ $item->zjxm }}</td>
                    <td>{{ $item->yjxkmc }}</td>
                    <td>{{ $item->zgxw }}</td>
                    <td>{{ $item->zyjszw }}</td>
        			<td>{{ $item->yddh }}</td>
					<td><a href="{{ route('expert.show', $item->sfzh) }}" class="btn btn-info" role="button" title="查看"><i class="fa fa-search fa-fw"></i></a></td>
					<td><a href="{{ route('expert.edit', $item->sfzh) }}" class="btn btn-primary" role="button" title="编辑"><i class="fa fa-edit fa-fw"></i></a></td>
					<td>
						<form id="delete" name="delete" method="post" action="{{ route('expert.delete', $item->sfzh) }}" role="form" onsubmit="return confirm('你确定要删除“{{ $title }}：{{ $item->zjxm }}”这条记录吗？')">
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
			$('#expert-table').dataTable({
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