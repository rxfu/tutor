@extends('layouts._two_columns_left_sidebar')

@section('subtitle')
<a href="{{ route('user.create') }}" class="btn btn-success" role="button" title="添加{{ $title }}"><i class="fa fa-plus fa-fw"></i>添加{{ $title }}</a>
@stop

@section('content')
<div class="table-responsive">
    <table id="user-table" class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th class="active">用户名</th>
                <th class="active">姓名</th>
                <th class="active">身份证号</th>
                <th class="active">角色</th>
                <th class="active">所在学院</th>
                <th class="active">是否超级管理员</th>
                <th class="active">重置密码</th>
                <th class="active">查看记录</th>
                <th class="active">编辑记录</th>
            	<th class="active">删除记录</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>用户名</th>
                <th>姓名</th>
                <th>身份证号</th>
                <th>角色</th>
                <th>所在学院</th>
                <th>是否超级管理员</th>
                <th>重置密码</th>
                <th>查看记录</th>
                <th>编辑记录</th>
                <th>删除记录</th>
            </tr>
        </tfoot>
        <tbody>
        	@foreach ($items as $item)
        		<tr>
                    <td>{{ $item->username }}</td>
                    <td>{{ $item->xm }}</td>
                    <td>{{ $item->sfzh }}</td>
                    <td>{{ $item->role->name }}</td>
                    <td>{{ $item->present()->college }}</td>
        			<td>{{ $item->present()->super }}</td>
                    <td>
                        <form id="reset" name="reset" method="post" action="{{ route('user.reset', $item) }}" role="form" onsubmit="return confirm('你确定要重置“{{ $title }}：{{ $item->username }}”密码吗？')">
                            {{ method_field('put') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-warning" title="重置密码"><i class="fa fa-random fa-fw"></i></button>
                        </form>
                    </td>
					<td><a href="{{ route('user.show', $item->id) }}" class="btn btn-info" role="button" title="查看"><i class="fa fa-search fa-fw"></i></a></td>
					<td><a href="{{ route('user.edit', $item->id) }}" class="btn btn-primary" role="button" title="编辑"><i class="fa fa-edit fa-fw"></i></a></td>
					<td>
						<form id="delete" name="delete" method="post" action="{{ route('user.delete', $item->id) }}" role="form" onsubmit="return confirm('你确定要删除“{{ $title }}：{{ $item->username }}”这条记录吗？')">
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
			$('#user-table').dataTable({
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