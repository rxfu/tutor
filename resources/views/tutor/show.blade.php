@extends('layouts._two_columns_left_sidebar')

@section('subtitle')
{{ $title }}“{{ $item->xm }}”基本信息
@stop

@section('content')
<form class="form-horizontal">
	<fieldset>
		<div class="form-group">
			<label for="zjhm" class="control-label col-sm-2">证件号码</label>
			<div class="col-sm-10">
				<p class="form-control-static">{{ $item->zjhm }}</p>
			</div>
		</div>
		<div class="form-group">
			<label for="xm" class="control-label col-sm-2">姓名</label>
			<div class="col-sm-10">
				<p class="form-control-static">{{ $item->xm }}</p>
			</div>
		</div>
		<div class="form-group">
			<label for="xb" class="control-label col-sm-2">性别</label>
			<div class="col-sm-10">
				<p class="form-control-static">{{ $item->gender->mc }}</p>
			</div>
		</div>
		<div class="form-group">
			<label for="csrq" class="control-label col-sm-2">出生日期</label>
			<div class="col-sm-10">
				<p class="form-control-static">{{ $item->csrq }}</p>
			</div>
		</div>
		<div class="form-group">
			<label for="gbm" class="control-label col-sm-2">国籍</label>
			<div class="col-sm-10">
				<p class="form-control-static">{{ $item->country->mc }}</p>
			</div>
		</div>
		<div class="form-group">
			<label for="mzm" class="control-label col-sm-2">民族</label>
			<div class="col-sm-10">
				<p class="form-control-static">{{ $item->nation->mc }}</p>
			</div>
		</div>
		<div class="form-group">
			<label for="zzmmm" class="control-label col-sm-2">政治面貌</label>
			<div class="col-sm-10">
				<p class="form-control-static">{{ $item->party->mc }}</p>
			</div>
		</div>
		<div class="form-group">
			<label for="xxdm" class="control-label col-sm-2">学校代码</label>
			<div class="col-sm-10">
				<p class="form-control-static">{{ $item->xxdm }}</p>
			</div>
		</div>
		<div class="form-group">
			<label for="xxmc" class="control-label col-sm-2">学校名称</label>
			<div class="col-sm-10">
				<p class="form-control-static">{{ $item->xxmc }}</p>
			</div>
		</div>
		<div class="form-group">
			<label for="szbm" class="control-label col-sm-2">所在部门</label>
			<div class="col-sm-10">
				<p class="form-control-static">{{ $item->college->mc }}</p>
			</div>
		</div>
		<div class="form-group">
			<label for="zgxl" class="control-label col-sm-2">最高学历</label>
			<div class="col-sm-10">
				<p class="form-control-static">{{ $item->present()->education }}</p>
			</div>
		</div>
		<div class="form-group">
			<label for="zgxw" class="control-label col-sm-2">最高学位</label>
			<div class="col-sm-10">
				<p class="form-control-static">{{ $item->present()->degree }}</p>
			</div>
		</div>
		<div class="form-group">
			<label for="zyzc" class="control-label col-sm-2">专业职称</label>
			<div class="col-sm-10">
				<p class="form-control-static">{{ $item->position->mc }}</p>
			</div>
		</div>
		<div class="form-group">
			<label for="xzzw" class="control-label col-sm-2">现任职务</label>
			<div class="col-sm-10">
				<p class="form-control-static">{{ $item->xzzw }}</p>
			</div>
		</div>
		<div class="form-group">
			<label for="wgyyz" class="control-label col-sm-2">外国语语种</label>
			<div class="col-sm-10">
				<p class="form-control-static">{{ $item->wgyyz }}</p>
			</div>
		</div>
		<div class="form-group">
			<label for="wgyslcd" class="control-label col-sm-2">外国语熟练程度</label>
			<div class="col-sm-10">
				<p class="form-control-static">{{ $item->wgyslcd }}</p>
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
				<p class="form-control-static">{{ $item->sqsj }}</p>
			</div>
		</div>
		<div class="form-group">
			<label for="bz" class="control-label col-sm-2">备注</label>
			<div class="col-sm-10">
				<p class="form-control-static">{{ $item->bz }}</p>
			</div>
		</div>
		<div class="col-sm-offset-2 col-sm-10">
			<a href="{{ route('tutor.edit', $item->zjhm) }}" title="编辑" class="btn btn-primary" role="button">编辑</a>
		</div>
	</fieldset>
</form>
@stop
