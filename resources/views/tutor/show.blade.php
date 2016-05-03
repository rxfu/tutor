@extends('layouts._two_columns_left_sidebar')

@section('subtitle')
{{ $title }}“{{ $item->xm }}”详细信息
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
		<label class="control-label col-sm-2">姓名</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->xm }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">性别</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->gender->mc }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">出生年月</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->csny }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">国籍</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->country->mc }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">民族</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->nation->mc }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">政治面貌</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->party->mc }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">学校代码</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->xxdm }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">学校名称</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->xxmc }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">所在部门</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->college->mc }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">最高学历</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->present()->education }}</p>
		</div>
	</div>
	<div class="form-group">
		<label  class="control-label col-sm-2">最高学位</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->present()->degree }}</p>
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
			<p class="form-control-static">{{ $item->position->mc }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">现任职务</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->xzzw }}</p>
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
		<label class="control-label col-sm-2">外国语语种</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->wgyyz }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">外国语熟练程度</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->present()->skill }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">通讯地址</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->txdz }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">邮政编码</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->yzbm }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">联系电话</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->lxdh }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">电子邮箱</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->dzyx }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">申请年月</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->sqny }}</p>
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
	<div class="col-sm-offset-2 col-sm-10">
		<a href="{{ route('tutor.edit', $item->zjhm) }}" title="编辑" class="btn btn-primary" role="button">编辑</a>
	</div>
</form>
@stop