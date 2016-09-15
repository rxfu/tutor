@extends('layouts._two_columns_left_sidebar')

@section('subtitle')
添加{{ $title }}
@stop

@section('content')
<form action="{{ route('expert.store') }}" method="post" role="form" class="form-horizontal">
	{{ csrf_field() }}
	<fieldset>
		<div class="form-group">
			<label for="zjxm" class="control-label col-sm-2">专家姓名*</label>
			<div class="col-sm-10">
				<input type="text" name="zjxm" id="zjxm" class="form-control" placeholder="专家姓名" value="{{ isset($item) ? $item->xm . ' readonly' : '' }}">
			</div>
		</div>
		<div class="form-group">
			<label for="xb" class="control-label col-sm-2">性别</label>
			<div class="col-sm-10">
				{!! render_form_select('xb', ['男', '女'], '男') !!}
			</div>
		</div>
		<div class="form-group">
			<label for="csny" class="control-label col-sm-2">出生年月</label>
			<div class="col-sm-10">
				<input type="text" name="csny" id="csny" class="form-control" placeholder="出生年月" value="{{ date('Ym', strtotime(substr($id, 6, 6))) }}" readonly>
			</div>
		</div>
		<div class="form-group">
			<label for="gj" class="control-label col-sm-2">国籍*</label>
			<div class="col-sm-10">
				{!! render_form_select('gj', ['印度', '澳大利亚', '日本', '韩国', '俄罗斯', '法国', '德国', '英国', '加拿大', '美国', '中国台湾', '中国澳门', '中国香港', '中国', '其他'], '中国') !!}
			</div>
		</div>
		<div class="form-group">
			<label for="zjzl" class="control-label col-sm-2">证件种类*</label>
			<div class="col-sm-10">
				{!! render_form_select('zjzl', ['身份证', '护照', '军官证', '回乡证', '台胞证', '港澳通行证'], '身份证') !!}
			</div>
		</div>
		<div class="form-group">
			<label for="sfzh" class="control-label col-sm-2">证件号码*</label>
			<div class="col-sm-10">
				<input type="text" name="sfzh" id="sfzh" class="form-control" placeholder="证件号码" value="{{ isset($item) ? $item->zjhm : $id }}" readonly>
			</div>
		</div>
		<div class="form-group">
			<label for="xxdm" class="control-label col-sm-2">单位代码*</label>
			<div class="col-sm-10">
				<input type="text" name="xxdm" id="xxdm" class="form-control" placeholder="单位代码" value="10602" readonly>
			</div>
		</div>
		<div class="form-group">
			<label for="xxmc" class="control-label col-sm-2">单位名称*</label>
			<div class="col-sm-10">
				<input type="text" name="xxmc" id="xxmc" class="form-control" placeholder="单位名称" value="广西师范大学" readonly>
			</div>
		</div>
		<div class="form-group">
			<label for="szbm" class="control-label col-sm-2">所在部门*</label>
			<div class="col-sm-10">
				<input type="text" name="szbm" id="szbm" class="form-control" placeholder="所在部门" value="{{ isset($item) ? $item->szbm . ' readonly' : '' }}">
			</div>
		</div>
		<div class="form-group">
			<label for="xzzw" class="control-label col-sm-2">行政职务</label>
			<div class="col-sm-10">
				<input type="text" name="xzzw" id="xzzw" class="form-control" placeholder="行政职务" value="{{ isset($item) ? $item->szxw : '' }}">
			</div>
		</div>
		<div class="form-group">
			<label for="zyshjz" class="control-label col-sm-2">主要社会兼职</label>
			<div class="col-sm-10">
				<textarea name="zyshjz" cols="50" rows="10" class="form-control" placeholder="主要社会兼职">{{ old('zyshjz') }}</textarea>
			</div>
		</div>
		<div class="form-group">
			<label for="yjxkm" class="control-label col-sm-2">主要学科一级学科*</label>
			<div class="col-sm-10">
				@inject('disciplines', 'Tis\Tutor\Repositories\DisciplineRepository')
				<select name="yjxkm" id="yjxkm" class="form-control">
					@foreach ($disciplines->getAll() as $discipline)
						{!! $discipline->present()->option(old('yjxkm')) !!}
					@endforeach
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="ejxkm" class="control-label col-sm-2">主要学科二级学科</label>
			<div class="col-sm-10">
				@inject('subdisciplines', 'Tis\Tutor\Repositories\SubdisciplineRepository')
				<select name="ejxkm" id="ejxkm" class="form-control">
					@foreach ($subdisciplines->getAll() as $subdiscipline)
						{!! $subdiscipline->present()->option(old('ejxkm')) !!}
					@endforeach
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="yjxkm2" class="control-label col-sm-2">第二学科一级学科</label>
			<div class="col-sm-10">
				@inject('disciplines', 'Tis\Tutor\Repositories\DisciplineRepository')
				<select name="yjxkm2" id="yjxkm2" class="form-control">
					@foreach ($disciplines->getAll() as $discipline)
						{!! $discipline->present()->option(old('yjxkm2')) !!}
					@endforeach
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="ejxkm2" class="control-label col-sm-2">第二学科二级学科</label>
			<div class="col-sm-10">
				@inject('subdisciplines', 'Tis\Tutor\Repositories\SubdisciplineRepository')
				<select name="ejxkm2" id="ejxkm2" class="form-control">
					@foreach ($subdisciplines->getAll() as $subdiscipline)
						{!! $subdiscipline->present()->option(old('ejxkm2')) !!}
					@endforeach
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="mldm1" class="control-label col-sm-2">专业学位</label>
			<div class="col-sm-10">
				@inject('disciplines', 'Tis\Tutor\Repositories\DisciplineRepository')
				<select name="mldm1" id="mldm1" class="form-control">
					@foreach ($disciplines->getAll() as $discipline)
						{!! $discipline->present()->option(old('mldm1')) !!}
					@endforeach
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="lydm1" class="control-label col-sm-2">专业学位领域</label>
			<div class="col-sm-10">
				@inject('subdisciplines', 'Tis\Tutor\Repositories\SubdisciplineRepository')
				<select name="lydm1" id="lydm1" class="form-control">
					@foreach ($subdisciplines->getAll() as $subdiscipline)
						{!! $subdiscipline->present()->option(old('lydm1')) !!}
					@endforeach
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="ysfx1" class="control-label col-sm-2">研究方向1</label>
			<div class="col-sm-10">
				<input type="text" name="ysfx1" id="ysfx1" class="form-control" placeholder="研究方向1" value="{{ old('ysfx1') }}">
			</div>
		</div>
		<div class="form-group">
			<label for="ysfx2" class="control-label col-sm-2">研究方向2</label>
			<div class="col-sm-10">
				<input type="text" name="ysfx2" id="ysfx2" class="form-control" placeholder="研究方向2" value="{{ old('ysfx2') }}">
			</div>
		</div>
		<div class="form-group">
			<label for="ysfx3" class="control-label col-sm-2">研究方向3</label>
			<div class="col-sm-10">
				<input type="text" name="ysfx3" id="ysfx3" class="form-control" placeholder="研究方向3" value="{{ old('ysfx3') }}">
			</div>
		</div>
		<div class="form-group">
			<label for="ysfx4" class="control-label col-sm-2">研究方向4</label>
			<div class="col-sm-10">
				<input type="text" name="ysfx4" id="ysfx4" class="form-control" placeholder="研究方向4" value="{{ old('ysfx4') }}">
			</div>
		</div>
		<div class="form-group">
			<label for="zgxw" class="control-label col-sm-2">最高学位*</label>
			<div class="col-sm-10">
				{!! render_form_select('zgxw', ['博士', '硕士', '学士', '无'], '博士') !!}
			</div>
		</div>
		<div class="form-group">
			<label for="zyjszw" class="control-label col-sm-2">专业技术职务*</label>
			<div class="col-sm-10">
				{!! render_form_select('zyjszw', ['正高级', '副高级', '中级', '初级', '无'], '正高级') !!}
			</div>
		</div>
		<div class="form-group">
			<label for="dslb" class="control-label col-sm-2">学术学位研究生导师类别*</label>
			<div class="col-sm-10">
				{!! render_form_select('dslb', ['博士生导师', '硕士生导师', '兼职博士生导师', '兼职硕士生导师', '其他'], '博士生导师') !!}
			</div>
		</div>
		<div class="form-group">
			<label for="dslb2" class="control-label col-sm-2">专业学位研究生导师类别*</label>
			<div class="col-sm-10">
				{!! render_form_select('dslb2', ['博士生导师', '硕士生导师', '兼职博士生导师', '兼职硕士生导师', '其他'], '博士生导师') !!}
			</div>
		</div>
		<div class="form-group">
			<label for="rsgxsfbx" class="control-label col-sm-2">人事关系所在单位是否本校*</label>
			<div class="col-sm-10">
				<label class="radio-inline">
					<input type="radio" name="rsgxsfbx" value="是" checked>&nbsp;是
				</label>
				<label class="radio-inline">
					<input type="radio" name="rsgxsfbx" value="否">&nbsp;否
				</label>
			</div>
		</div>
		<div class="form-group">
			<label for="szdwsfsyxw" class="control-label col-sm-2">人事关系所在单位是否学位授予单位*</label>
			<div class="col-sm-10">
				<label class="radio-inline">
					<input type="radio" name="szdwsfsyxw" value="是" checked>&nbsp;是
				</label>
				<label class="radio-inline">
					<input type="radio" name="szdwsfsyxw" value="否">&nbsp;否
				</label>
			</div>
		</div>
		<div class="form-group">
			<label for="rsgxszdw" class="control-label col-sm-2">人事关系所在单位</label>
			<div class="col-sm-10">
				<input type="text" name="rsgxszdw" id="rsgxszdw" class="form-control" placeholder="人事关系所在单位" value="{{ old('rsgxszdw') }}">
			</div>
		</div>
		<div class="form-group">
			<label for="rdsny" class="control-label col-sm-2">任导师年月</label>
			<div class="col-sm-10">
				<input type="text" name="rdsny" id="rdsny" class="form-control" placeholder="任导师年月" value="{{ old('rdsny') }}">
			</div>
		</div>
		<div class="form-group">
			<label for="wgyzmc" class="control-label col-sm-2">外国语种名称</label>
			<div class="col-sm-10">
				{!! render_form_select('wgyzmc', ['阿拉伯语', '德语', '英语', '西班牙语', '法语', '印地语', '日语', '韩语', '俄语', '其他', '无'], '英语') !!}
			</div>
		</div>
		<div class="form-group">
			<label for="wgyzslcd" class="control-label col-sm-2">外语熟练程度</label>
			<div class="col-sm-10">
				{!! render_form_select('wgyzslcd', ['精通', '熟练', '良好', '一般'], '精通') !!}
			</div>
		</div>
		<div class="form-group">
			<label for="zjlb" class="control-label col-sm-2">专家类别</label>
			<div class="col-sm-10">
				{!! render_form_select('zjlb', ['中国科学院院士', '中国工程院院士', '万人计划杰出人才', '万人计划领军人才', '千人计划创新人才', '千人计划创业人才', '长江学者特聘教授', '长江学者讲座教授', '国家杰出青年基金获得者', '973项目首席科学家', '中宣部四个一批人才', '马工程首席专家', '百千万人才工程一二层次入选者或国家级人选', '教育部跨世纪人才', '中科院百人计划入选者', '青年千人计划入选者', '优秀青年基金获得者', '中组部青年拔尖人才', '青年973项目首席科学家', '全国百篇优博论文作者', '教育部新世纪人才', '万人计划青年拔尖人才', '其他'], '中国科学院院士') !!}
			</div>
		</div>
		<div class="form-group">
			<label for="txdz" class="control-label col-sm-2">通讯地址*</label>
			<div class="col-sm-10">
				<input type="text" name="txdz" id="txdz" class="form-control" placeholder="通讯地址" value="{{ old('txdz') }}">
			</div>
		</div>
		<div class="form-group">
			<label for="yzbm" class="control-label col-sm-2">邮政编码*</label>
			<div class="col-sm-10">
				<input type="text" name="yzbm" id="yzbm" class="form-control" placeholder="邮政编码" value="{{ old('yzbm') }}">
			</div>
		</div>
		<div class="form-group">
			<label for="yddh" class="control-label col-sm-2">移动电话*</label>
			<div class="col-sm-10">
				<input type="text" name="yddh" id="yddh" class="form-control" placeholder="移动电话" value="{{ old('yddh') }}">
			</div>
		</div>
		<div class="form-group">
			<label for="bgdh" class="control-label col-sm-2">办公电话</label>
			<div class="col-sm-10">
				<input type="text" name="bgdh" id="bgdh" class="form-control" placeholder="办公电话" value="{{ old('bgdh') }}">
			</div>
		</div>
		<div class="form-group">
			<label for="dzxx" class="control-label col-sm-2">电子信箱1*</label>
			<div class="col-sm-10">
				<input type="text" name="dzxx" id="dzxx" class="form-control" placeholder="电子信箱1" value="{{ old('dzxx') }}">
			</div>
		</div>
		<div class="form-group">
			<label for="dzxx2" class="control-label col-sm-2">电子信箱2</label>
			<div class="col-sm-10">
				<input type="text" name="dzxx2" id="dzxx2" class="form-control" placeholder="电子信箱1" value="{{ old('dzxx2') }}">
			</div>
		</div>
		<div class="form-group">
			<label for="bz" class="control-label col-sm-2">备注</label>
			<div class="col-sm-10">
				<textarea name="bz" cols="50" rows="10" class="form-control" placeholder="备注">{{ old('bz') }}</textarea>
			</div>
		</div>
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-success" title="添加">添加</button>
		</div>
	</fieldset>
</form>
@stop
