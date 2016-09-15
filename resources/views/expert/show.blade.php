@extends('layouts._two_columns_left_sidebar')

@section('subtitle')
{{ $title }}“{{ $item->xm }}”详细信息
@stop

@section('content')
<form class="form-horizontal">
	<div class="form-group">
		<label class="control-label col-sm-2">姓名</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->zjxm }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">性别</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->xb }}</p>
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
			<p class="form-control-static">{{ $item->gj }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">证件种类</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->zjzl }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">证件号码</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->sfzh }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">单位代码</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->xxdm }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">单位名称</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->xxmc }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">所在部门</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->szbm }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">行政职务</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->xzzw }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">主要社会兼职</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->zyshjz }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">主要学科一级学科</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->yjxkmc }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">主要学科二级学科</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->ejxkmc }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">第二学科一级学科</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->yjxkmc2 }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">第二学科二级学科</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->ejxkmc2 }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">专业学位名称</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->mlmc1 }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">专业学位领域</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->lymc1 }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">研究方向1</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->ysfx1 }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">研究方向2</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->ysfx2 }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">研究方向3</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->ysfx3 }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">研究方向4</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->ysfx4 }}</p>
		</div>
	</div>
	<div class="form-group">
		<label  class="control-label col-sm-2">最高学位</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->zgxw }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">专业技术职务</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->zyjszw }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">学术学位研究生导师类别</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->dslb }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">专业学位研究生导师类别</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->dslb2 }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">人事关系所在单位是否本校</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->rsgxsfbx }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">人事关系所在单位是否学位授予单位</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->szdwsfsyxw }}</p>
		</div>
	</div>
	<div class="form-group">
		<label  class="control-label col-sm-2">人事关系所在单位</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->rsgxszdw }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">任导师年月</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->rdsny }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">外国语种名称</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->wgyzmc }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">外语熟练程度</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->wgyzslcd }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">专家类别</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->zjlb }}</p>
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
		<label class="control-label col-sm-2">移动电话</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->yddh }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">办公电话</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->bgdh }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">电子信箱1</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->dzxx }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">电子信箱2</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->dzxx2 }}</p>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">备注</label>
		<div class="col-sm-10">
			<p class="form-control-static">{{ $item->bz }}</p>
		</div>
	</div>
	<div class="col-sm-offset-2 col-sm-10">
		<a href="{{ route('expert.edit', $item->sfzh) }}" title="编辑" class="btn btn-primary" role="button">编辑</a>
	</div>
</form>
@stop