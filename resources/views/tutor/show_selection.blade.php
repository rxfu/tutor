@extends('layouts._two_columns_left_sidebar')

@section('subtitle')
{{ $title }}“{{ $item->tutor->xm }}”详细信息
@stop

@section('content')
<form class="form-horizontal">
	<div class="form-group">
		<label class="control-label col-sm-2">证件号码</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->zjhm }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">姓名</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->tutor->xm }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">性别</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->tutor->gender->mc }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">出生年月</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->tutor->csrq }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">国籍</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->tutor->country->mc }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">民族</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->tutor->nation->mc }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">政治面貌</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->tutor->party->mc }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">学校代码</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->tutor->xxdm }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">学校名称</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->tutor->xxmc }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">所在部门</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->tutor->college->mc }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">最高学历</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->tutor->present()->education }}</p>
		</div>
	</div>
	<div class="form-group">
		<label  class="control-label col-sm-2">最高学位</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->tutor->present()->degree }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">所学专业</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->sxzy }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">专业职称</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->tutor->position->mc }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">现任职务</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->tutor->xzzw }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">任导师年月</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->rdsny }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">研究方向</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->yjfx }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">导师类别</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->present()->type }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">一级学科</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->discipline->mc }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">二级学科</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->subdiscipline->mc }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">是否兼职导师</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->present()->is_part_time }}</p>
		</div>
	</div>
	<div class="form-group">
		<label  class="control-label col-sm-2">兼职导师单位</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->jzdsdw }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">导师大类</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->present()->category }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">外国语语种</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->tutor->wgyyz }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">外国语熟练程度</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->tutor->wgyslcd }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">通讯地址</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->tutor->txdz }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">邮政编码</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->tutor->yzbm }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">联系电话</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->tutor->lxdh }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">电子邮箱</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->tutor->dzyx }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">申请年月</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->tutor->sqny }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">是否培训</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->present()->is_train }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">批准日期</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->pzrq }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">批准单位</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->pzdw }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">提交状态</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->present()->is_submit }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">审核状态</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->present()->is_audit }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">通过状态</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->present()->is_pass }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">聘用状态</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->present()->is_employ }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">是否公示</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->present()->is_publicity }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">备注</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->bz }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">最具代表性成果</label>
		<div class="col-sm-10">
			<table id="result-table" class="table table-bordered table-striped table-hover">
		        <thead>
		            <tr>
		                <th class="active">序号</th>
		                <th class="active">成果名称</th>
		                <th class="active">刊物或出版单位及时间</th>
		                <th class="active">署名次序</th>
		            </tr>
		        </thead>
		        <tbody>
					@foreach ($item->results as $result)
		        		<tr>
							<td>{{ $result->xh }}</td>
							<td>{{ $result->mc }}</td>
							<td>{{ $result->sj }}</td>
							<td>{{ $result->pm }}</td>
						</tr>
					@endforeach
		        </tbody>
		    </table>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">主要获奖成果及专利</label>
		<div class="col-sm-10">
			<table id="adward-table" class="table table-bordered table-striped table-hover">
		        <thead>
		            <tr>
		                <th class="active">序号</th>
		                <th class="active">成果名称</th>
		                <th class="active">奖励名称、等级、时间</th>
		                <th class="active">署名次序</th>
		            </tr>
		        </thead>
		        <tbody>
					@foreach ($item->adwards as $adward)
		        		<tr>
							<td>{{ $adward->xh }}</td>
							<td>{{ $adward->mc }}</td>
							<td>{{ $adward->sj }}</td>
							<td>{{ $adward->pm }}</td>
						</tr>
					@endforeach
		        </tbody>
		    </table>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">主要科研项目</label>
		<div class="col-sm-10">
			<table id="project-table" class="table table-bordered table-striped table-hover">
		        <thead>
		            <tr>
		                <th class="active">序号</th>
		                <th class="active">项目名称</th>
		                <th class="active">项目来源</th>
		                <th class="active">起讫时间</th>
		                <th class="active">科研经费</th>
		                <th class="active">署名次序</th>
		            </tr>
		        </thead>
		        <tbody>
					@foreach ($item->projects as $project)
		        		<tr>
							<td>{{ $project->xh }}</td>
							<td>{{ $project->mc }}</td>
							<td>{{ $project->ly }}</td>
							<td>{{ $project->sj }}</td>
							<td>{{ $project->jf }}</td>
							<td>{{ $project->pm }}</td>
						</tr>
					@endforeach
		        </tbody>
		    </table>
		</div>
	</div>
	<div class="col-sm-offset-2 col-sm-10">
		<a href="{{ route('tutor.edit', [$item->zjhm, $item->dslb, $item->dsdl, $item->ejxkdm, $item->sfjzds]) }}" title="编辑" class="btn btn-primary" role="button">编辑</a>
	</div>
</form>
@stop