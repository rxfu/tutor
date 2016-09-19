@extends('layouts._two_columns_left_sidebar')

@section('subtitle')
编辑{{ $title }}“{{ $item->zjxm }}”信息
@stop

@section('content')
<form action="{{ route('expert.update', $item->sfzh) }}" method="post" role="form" class="form-horizontal">
	{{ method_field('put') }}
	{{ csrf_field() }}
	<fieldset>
		<div class="form-group">
			<label class="control-label col-sm-2">专家编号</label>
			<div class="col-sm-10">
				<p class="form-control-static">{{ $item->zjbh }}</p>
			</div>
		</div>
		<div class="form-group">
			<label for="zjxm" class="control-label col-sm-2 text-danger">专家姓名*</label>
			<div class="col-sm-10">
				<input type="text" name="zjxm" id="zjxm" class="form-control" placeholder="专家姓名" value="{{ $item->zjxm }}">
				<p class="help-block">“姓”与“名”之间不要加空格</p>
			</div>
		</div>
		<div class="form-group">
			<label for="xb" class="control-label col-sm-2">性别</label>
			<div class="col-sm-10">
				{!! render_form_select('xb', ['男', '女'], $item->xb) !!}
			</div>
		</div>
		<div class="form-group">
			<label for="csny" class="control-label col-sm-2">出生年月</label>
			<div class="col-sm-10">
				<input type="text" name="csny" id="csny" class="form-control" placeholder="出生年月" value="{{ $item->csny }}" readonly>
				<p class="help-block">6位数字，如“196803”</p>
			</div>
		</div>
		<div class="form-group">
			<label for="gj" class="control-label col-sm-2 text-danger">国籍*</label>
			<div class="col-sm-10">
				{!! render_form_select('gj', ['印度', '澳大利亚', '日本', '韩国', '俄罗斯', '法国', '德国', '英国', '加拿大', '美国', '中国台湾', '中国澳门', '中国香港', '中国', '其他'], $item->gj) !!}
			</div>
		</div>
		<div class="form-group">
			<label for="zjzl" class="control-label col-sm-2 text-danger">证件种类*</label>
			<div class="col-sm-10">
				{!! render_form_select('zjzl', ['身份证', '护照', '军官证', '回乡证', '台胞证', '港澳通行证'], $item->zjlb) !!}
			</div>
		</div>
		<div class="form-group">
			<label for="sfzh" class="control-label col-sm-2 text-danger">证件号码*</label>
			<div class="col-sm-10">
				<input type="text" name="sfzh" id="sfzh" class="form-control" placeholder="证件号码" value="{{ $item->sfzh }}" readonly>
			</div>
		</div>
		<div class="form-group">
			<label for="xxdm" class="control-label col-sm-2 text-danger">单位代码*</label>
			<div class="col-sm-10">
				<input type="text" name="xxdm" id="xxdm" class="form-control" placeholder="单位代码" value="10602" readonly>
			</div>
		</div>
		<div class="form-group">
			<label for="xxmc" class="control-label col-sm-2 text-danger">单位名称*</label>
			<div class="col-sm-10">
				<input type="text" name="xxmc" id="xxmc" class="form-control" placeholder="单位名称" value="广西师范大学" readonly>
			</div>
		</div>
		<div class="form-group">
			<label for="xydm" class="control-label col-sm-2 text-danger">所在部门*</label>
			<div class="col-sm-10">
				@if(Auth::user()->can('admin-access'))
					@inject('colleges', 'Tis\Tutor\Repositories\CollegeRepository')
					<select name="xydm" id="xydm" class="form-control">
						@foreach ($colleges->getAll() as $college)
							{!! $college->present()->option($item->xydm) !!}
						@endforeach
					</select>
				@else
					<input type="text" name="szbm" id="szbm" class="form-control" placeholder="所在部门" value="{{ $item->szbm }}" readonly>
				@endif
			</div>
		</div>
		<div class="form-group">
			<label for="xzzw" class="control-label col-sm-2">行政职务</label>
			<div class="col-sm-10">
				<input type="text" name="xzzw" id="xzzw" class="form-control" placeholder="行政职务" value="{{ $item->xzzw }}">
				<p class="help-block">“行政职务”应与“所在部门”对应，如所在部门填写“XXX学院”，此处可填写“院长”</p>
			</div>
		</div>
		<div class="form-group">
			<label for="zyshjz" class="control-label col-sm-2">主要社会兼职</label>
			<div class="col-sm-10">
				<textarea name="zyshjz" cols="50" rows="10" class="form-control" placeholder="主要社会兼职">{{ $item->zyshjz }}</textarea>
				<p class="help-block">按照兼职单位+职务的形式填写，不同社会兼职用分号间隔，如“XXX学会，会长；XXX协会，秘书长”</p>
			</div>
		</div>
		<div class="form-group">
			<label for="yjxkm" class="control-label col-sm-2 text-danger">主要学科一级学科*</label>
			<div class="col-sm-10">
				@inject('disciplines', 'Tis\Tutor\Repositories\DisciplineRepository')
				<select name="yjxkm" id="yjxkm" class="form-control">
					@foreach ($disciplines->getAll() as $discipline)
						{!! $discipline->present()->option($item->yjxkm) !!}
					@endforeach
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="ejxkm" class="control-label col-sm-2">主要学科二级学科</label>
			<div class="col-sm-10">
				@inject('subdisciplines', 'Tis\Tutor\Repositories\SubdisciplineRepository')
				<select name="ejxkm" id="ejxkm" class="form-control">
					<option value="">无</option>
					@foreach ($subdisciplines->getAll() as $subdiscipline)
						{!! $subdiscipline->present()->option($item->ejxkm) !!}
					@endforeach
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="yjxkm2" class="control-label col-sm-2">第二学科一级学科</label>
			<div class="col-sm-10">
				@inject('disciplines', 'Tis\Tutor\Repositories\DisciplineRepository')
				<select name="yjxkm2" id="yjxkm2" class="form-control">
					<option value="">无</option>
					@foreach ($disciplines->getAll() as $discipline)
						{!! $discipline->present()->option($item->yjxkm2) !!}
					@endforeach
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="ejxkm2" class="control-label col-sm-2">第二学科二级学科</label>
			<div class="col-sm-10">
				@inject('subdisciplines', 'Tis\Tutor\Repositories\SubdisciplineRepository')
				<select name="ejxkm2" id="ejxkm2" class="form-control">
					<option value="">无</option>
					@foreach ($subdisciplines->getAll() as $subdiscipline)
						{!! $subdiscipline->present()->option($item->ejxkm2) !!}
					@endforeach
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="mldm1" class="control-label col-sm-2">专业学位</label>
			<div class="col-sm-10">
				@inject('disciplines', 'Tis\Tutor\Repositories\DisciplineRepository')
				<select name="mldm1" id="mldm1" class="form-control">
					<option value="">无</option>
					@foreach ($disciplines->getAllByPMD() as $discipline)
						{!! $discipline->present()->option($item->mldm1) !!}
					@endforeach
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="lydm1" class="control-label col-sm-2">专业学位领域</label>
			<div class="col-sm-10">
				@inject('subdisciplines', 'Tis\Tutor\Repositories\SubdisciplineRepository')
				<select name="lydm1" id="lydm1" class="form-control">
					<option value="">无</option>
					@foreach ($subdisciplines->getAllByPMD() as $subdiscipline)
						{!! $subdiscipline->present()->option($item->lydm1) !!}
					@endforeach
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="ysfx1" class="control-label col-sm-2">研究方向1</label>
			<div class="col-sm-10">
				<input type="text" name="ysfx1" id="ysfx1" class="form-control" placeholder="研究方向1" value="{{ $item->ysfx1 }}">
			</div>
		</div>
		<div class="form-group">
			<label for="ysfx2" class="control-label col-sm-2">研究方向2</label>
			<div class="col-sm-10">
				<input type="text" name="ysfx2" id="ysfx2" class="form-control" placeholder="研究方向2" value="{{ $item->ysfx2 }}">
			</div>
		</div>
		<div class="form-group">
			<label for="ysfx3" class="control-label col-sm-2">研究方向3</label>
			<div class="col-sm-10">
				<input type="text" name="ysfx3" id="ysfx3" class="form-control" placeholder="研究方向3" value="{{ $item->ysfx3 }}">
			</div>
		</div>
		<div class="form-group">
			<label for="ysfx4" class="control-label col-sm-2">研究方向4</label>
			<div class="col-sm-10">
				<input type="text" name="ysfx4" id="ysfx4" class="form-control" placeholder="研究方向4" value="{{ $item->ysfx4 }}">
			</div>
		</div>
		<div class="form-group">
			<label for="zgxw" class="control-label col-sm-2 text-danger">最高学位*</label>
			<div class="col-sm-10">
				{!! render_form_select('zgxw', ['博士', '硕士', '学士', '无'], $item->zgxw) !!}
			</div>
		</div>
		<div class="form-group">
			<label for="zyjszw" class="control-label col-sm-2 text-danger">专业技术职务*</label>
			<div class="col-sm-10">
				{!! render_form_select('zyjszw', ['正高级', '副高级', '中级', '初级', '无'], $item->zyjszw) !!}
			</div>
		</div>
		<div class="form-group">
			<label for="dslb" class="control-label col-sm-2 text-danger">学术学位研究生导师类别*</label>
			<div class="col-sm-10">
				{!! render_form_select('dslb', ['博士生导师', '硕士生导师', '兼职博士生导师', '兼职硕士生导师', '其他'], $item->dslb) !!}
			</div>
		</div>
		<div class="form-group">
			<label for="dslb2" class="control-label col-sm-2 text-danger">专业学位研究生导师类别*</label>
			<div class="col-sm-10">
				{!! render_form_select('dslb2', ['博士生导师', '硕士生导师', '兼职博士生导师', '兼职硕士生导师', '其他'], $item->dslb2) !!}
			</div>
		</div>
		<div class="form-group">
			<label for="rsgxsfbx" class="control-label col-sm-2 text-danger">人事关系所在单位是否本校*</label>
			<div class="col-sm-10">
				<label class="radio-inline">
					<input type="radio" name="rsgxsfbx" value="是"{{ $item->rsgxsfbx == '是' ? ' checked' : '' }}>&nbsp;是
				</label>
				<label class="radio-inline">
					<input type="radio" name="rsgxsfbx" value="否"{{ $item->rsgxsfbx == '否' ? ' checked' : '' }}>&nbsp;否
				</label>
			</div>
		</div>
		<div class="form-group">
			<label for="szdwsfsyxw" class="control-label col-sm-2 text-danger">人事关系所在单位是否学位授予单位*</label>
			<div class="col-sm-10">
				<label class="radio-inline">
					<input type="radio" name="szdwsfsyxw" value="是"{{ $item->szdwsfsyxw == '是' ? ' checked' : '' }}>&nbsp;是
				</label>
				<label class="radio-inline">
					<input type="radio" name="szdwsfsyxw" value="否"{{ $item->szdwsfsyxw == '否' ? ' checked' : '' }}>&nbsp;否
				</label>
			</div>
		</div>
		<div class="form-group">
			<label for="rsgxszdw" class="control-label col-sm-2 text-danger">人事关系所在单位</label>
			<div class="col-sm-10">
				<input type="text" name="rsgxszdw" id="rsgxszdw" class="form-control" placeholder="人事关系所在单位" value="{{ $item->rsgxszdw }}">
				<p class="help-block">限兼职导师填写</p>
			</div>
		</div>
		<div class="form-group">
			<label for="rdsny" class="control-label col-sm-2">任导师年月</label>
			<div class="col-sm-10">
				<input type="text" name="rdsny" id="rdsny" class="form-control" placeholder="任导师年月" value="{{ $item->rdsny }}">
				<p class="help-block">6位数字，如“201103”</p>
			</div>
		</div>
		<div class="form-group">
			<label for="wgyzmc" class="control-label col-sm-2">外国语种名称</label>
			<div class="col-sm-10">
				{!! render_form_select('wgyzmc', ['阿拉伯语', '德语', '英语', '西班牙语', '法语', '印地语', '日语', '韩语', '俄语', '其他', '无'], $item->wgyzmc) !!}
			</div>
		</div>
		<div class="form-group">
			<label for="wgyzslcd" class="control-label col-sm-2">外语熟练程度</label>
			<div class="col-sm-10">
				{!! render_form_select('wgyzslcd', ['精通', '熟练', '良好', '一般'], $item->wgyzslcd) !!}
				<p class="help-block">“精通”和“熟练”是指能评阅该语种的论文</p>
			</div>
		</div>
		<div class="form-group">
			<label for="zjlb" class="control-label col-sm-2">专家类别</label>
			<div class="col-sm-10">
				{!! render_form_select('zjlb', ['中国科学院院士', '中国工程院院士', '万人计划杰出人才', '万人计划领军人才', '千人计划创新人才', '千人计划创业人才', '长江学者特聘教授', '长江学者讲座教授', '国家杰出青年基金获得者', '973项目首席科学家', '中宣部四个一批人才', '马工程首席专家', '百千万人才工程一二层次入选者或国家级人选', '教育部跨世纪人才', '中科院百人计划入选者', '青年千人计划入选者', '优秀青年基金获得者', '中组部青年拔尖人才', '青年973项目首席科学家', '全国百篇优博论文作者', '教育部新世纪人才', '万人计划青年拔尖人才', '其他'], $item->zjlb) !!}
			</div>
		</div>
		<div class="form-group">
			<label for="txdz" class="control-label col-sm-2 text-danger">通讯地址*</label>
			<div class="col-sm-10">
				<input type="text" name="txdz" id="txdz" class="form-control" placeholder="通讯地址" value="{{ $item->txdz }}">
				<p class="help-block">请填写详细 的地理信息，建议先填写“省市、地区、街道”信息，再填写“单位、部门”信息</p>
			</div>
		</div>
		<div class="form-group">
			<label for="yzbm" class="control-label col-sm-2 text-danger">邮政编码*</label>
			<div class="col-sm-10">
				<input type="text" name="yzbm" id="yzbm" class="form-control" placeholder="邮政编码" value="{{ $item->yzbm }}">
			</div>
		</div>
		<div class="form-group">
			<label for="yddh" class="control-label col-sm-2 text-danger">移动电话*</label>
			<div class="col-sm-10">
				<input type="text" name="yddh" id="yddh" class="form-control" placeholder="移动电话" value="{{ $item->yddh }}">
				<p class="help-block">手机号码前不要加“0”</p>
			</div>
		</div>
		<div class="form-group">
			<label for="bgdh" class="control-label col-sm-2">办公电话</label>
			<div class="col-sm-10">
				<input type="text" name="bgdh" id="bgdh" class="form-control" placeholder="办公电话" value="{{ $item->bgdh }}">
				<p class="help-block">固定电话格式为“区号-号码-分机号”（连字符为半角）</p>
			</div>
		</div>
		<div class="form-group">
			<label for="dzxx" class="control-label col-sm-2 text-danger">电子信箱1*</label>
			<div class="col-sm-10">
				<input type="text" name="dzxx" id="dzxx" class="form-control" placeholder="电子信箱1" value="{{ $item->dzxx }}">
				<p class="help-block">电子信箱中的“@”符号请使用“半角”方式填写</p>
			</div>
		</div>
		<div class="form-group">
			<label for="dzxx2" class="control-label col-sm-2">电子信箱2</label>
			<div class="col-sm-10">
				<input type="text" name="dzxx2" id="dzxx2" class="form-control" placeholder="电子信箱1" value="{{ $item->dzxx2 }}">
				<p class="help-block">电子信箱中的“@”符号请使用“半角”方式填写</p>
			</div>
		</div>
		<div class="form-group">
			<label for="bz" class="control-label col-sm-2">备注</label>
			<div class="col-sm-10">
				<textarea name="bz" cols="50" rows="10" class="form-control" placeholder="备注">{{ $item->bz }}</textarea>
			</div>
		</div>
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-success">更新</button>
		</div>
	</fieldset>
</form>
@stop

@section('scripts')
	@parent

    <script src="{{ asset('js/jquery.chained.min.js') }}"></script>
	<script>
		$(function() {
			$('#ejxkm').chained('#yjxkm');
			$('#ejxkm2').chained('#yjxkm2');
			$('#lydm1').chained('#mldm1');
		});
	</script>
@stop