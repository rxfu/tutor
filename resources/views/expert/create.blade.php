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
				<input type="text" name="zjxm" id="zjxm" class="form-control" placeholder="专家姓名" value="{{ $item->xm }}" readonly>
			</div>
		</div>
		<div class="form-group">
			<label for="xb" class="control-label col-sm-2">性别</label>
			<div class="col-sm-10">
				<select name="xb" id="xb" class="form-control">
					<option value="男">男</option>
					<option value="女">女</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="csny" class="control-label col-sm-2">出生年月</label>
			<div class="col-sm-10">
				<input type="text" name="csny" id="csny" class="form-control" placeholder="出生年月" value="{{ date('Y-m-d', strtotime(substr($item->sfzh, 6, 8))) }}" readonly>
			</div>
		</div>
		<div class="form-group">
			<label for="gj" class="control-label col-sm-2">国籍*</label>
			<div class="col-sm-10">
				<select name="gj" id="gj" class="form-control">
					<option value="印度">印度</option>
					<option value="澳大利亚">澳大利亚</option>
					<option value="日本">日本</option>
					<option value="韩国">韩国</option>
					<option value="俄罗斯">俄罗斯</option>
					<option value="法国">法国</option>
					<option value="德国">德国</option>
					<option value="英国">英国</option>
					<option value="加拿大">加拿大</option>
					<option value="美国">美国</option>
					<option value="中国台湾">中国台湾</option>
					<option value="中国澳门">中国澳门</option>
					<option value="中国香港">中国香港</option>
					<option value="中国">中国</option>
					<option value="其他">其他</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="zjzl" class="control-label col-sm-2">证件种类*</label>
			<div class="col-sm-10">
				<select name="zjzl" id="zjzl" class="form-control">
					<option value="身份证">身份证</option>
					<option value="护照">护照</option>
					<option value="军官证">军官证</option>
					<option value="回乡证">回乡证</option>
					<option value="台胞证">台胞证</option>
					<option value="港澳通行证">港澳通行证</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="sfzh" class="control-label col-sm-2">证件号码*</label>
			<div class="col-sm-10">
				<input type="text" name="sfzh" id="sfzh" class="form-control" placeholder="证件号码" value="{{ $item->zjhm }}">
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
				<input type="text" name="xszbm" id="xszbm" class="form-control" placeholder="所在部门" value="{{ $item->szbm }}" readonly>
			</div>
		</div>
		<div class="form-group">
			<label for="xzzw" class="control-label col-sm-2">行政职务</label>
			<div class="col-sm-10">
				<input type="text" name="xzzw" id="xzzw" class="form-control" placeholder="行政职务" value="{{ $item->szxw }}">
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
			<label for="yjfx1" class="control-label col-sm-2">研究方向1</label>
			<div class="col-sm-10">
				<input type="text" name="yjfx1" id="yjfx1" class="form-control" placeholder="研究方向1" value="{{ old('yjfx1') }}">
			</div>
		</div>
		<div class="form-group">
			<label for="yjfx2" class="control-label col-sm-2">研究方向2</label>
			<div class="col-sm-10">
				<input type="text" name="yjfx2" id="yjfx2" class="form-control" placeholder="研究方向2" value="{{ old('yjfx2') }}">
			</div>
		</div>
		<div class="form-group">
			<label for="yjfx3" class="control-label col-sm-2">研究方向3</label>
			<div class="col-sm-10">
				<input type="text" name="yjfx3" id="yjfx3" class="form-control" placeholder="研究方向3" value="{{ old('yjfx3') }}">
			</div>
		</div>
		<div class="form-group">
			<label for="yjfx4" class="control-label col-sm-2">研究方向4</label>
			<div class="col-sm-10">
				<input type="text" name="yjfx4" id="yjfx4" class="form-control" placeholder="研究方向4" value="{{ old('yjfx4') }}">
			</div>
		</div>
		<div class="form-group">
			<label for="zgxw" class="control-label col-sm-2">最高学位*</label>
			<div class="col-sm-10">
				<select name="zgxw" id="zgxw" class="form-control">
					<option value="博士">博士</option>
					<option value="硕士">硕士</option>
					<option value="学士">学士</option>
					<option value="无">无</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="zyjszw" class="control-label col-sm-2">专业技术职务*</label>
			<div class="col-sm-10">
				<select name="zyjszw" id="zyjszw" class="form-control">
					<option value="正高级">正高级</option>
					<option value="副高级">副高级</option>
					<option value="中级">中级</option>
					<option value="初级">初级</option>
					<option value="无">无</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="dslb" class="control-label col-sm-2">学术学位研究生导师类别*</label>
			<div class="col-sm-10">
				<select name="dslb" id="dslb" class="form-control">
					<option value="博士生导师">博士生导师</option>
					<option value="硕士生导师">硕士生导师</op
					<option value="兼职博士生导师">兼职博士生导师</option>
					<option value="兼职硕士生导师">兼职硕士生导师</option>
					<option value="其他">其他</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="dslb2" class="control-label col-sm-2">专业学位研究生导师类别*</label>
			<div class="col-sm-10">
				<select name="dslb2" id="dslb2" class="form-control">
					<option value="博士生导师">博士生导师</option>
					<option value="硕士生导师">硕士生导师</op
					<option value="兼职博士生导师">兼职博士生导师</option>
					<option value="兼职硕士生导师">兼职硕士生导师</option>
					<option value="其他">其他</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="rsgxsfbx" class="control-label col-sm-2">人事关系所在单位是否本校*</label>
			<div class="col-sm-10">
				<label class="radio-inline">
					<input type="radio" name="rsgxsfbx" value="1" checked>&nbsp;是
				</label>
				<label class="radio-inline">
					<input type="radio" name="rsgxsfbx" value="0">&nbsp;否
				</label>
			</div>
		</div>
		<div class="form-group">
			<label for="szdwsfsyxw" class="control-label col-sm-2">人事关系所在单位是否学位授予单位*</label>
			<div class="col-sm-10">
				<label class="radio-inline">
					<input type="radio" name="szdwsfsyxw" value="1" checked>&nbsp;是
				</label>
				<label class="radio-inline">
					<input type="radio" name="szdwsfsyxw" value="0">&nbsp;否
				</label>
			</div>
		</div>
		<div class="form-group">
			<label for="rsgxszdw" class="control-label col-sm-2">人事关系所在单位</label>
			<div class="col-sm-10">
				<input type="text" name="rsgxszdw" id="rsgxszdw" class="form-control" placeholder="兼职导师单位" value="{{ old('rsgxszdw') }}">
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
				<select name="wgyzmc" id="wgyzmc" class="form-control">
					<option value="1">一般</option>
					<option value="2">熟练</option>
					<option value="3">精通</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="wgyzslcd" class="control-label col-sm-2">外语熟练程度</label>
			<div class="col-sm-10">
				<select name="wgyzslcd" id="wgyzslcd" class="form-control">
					<option value="1">一般</option>
					<option value="2">熟练</option>
					<option value="3">精通</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="zjlb" class="control-label col-sm-2">专家类别</label>
			<div class="col-sm-10">
				<select name="zjlb" id="zjlb" class="form-control">
					<option value="1">科学学位</option>
					<option value="2">专业学位</option>
				</select>
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
			<label for="dzxx" class="control-label col-sm-2">电子邮箱1*</label>
			<div class="col-sm-10">
				<input type="text" name="dzxx" id="dzxx" class="form-control" placeholder="电子邮箱1" value="{{ old('dzxx') }}">
			</div>
		</div>
		<div class="form-group">
			<label for="dzxx2" class="control-label col-sm-2">电子邮箱2</label>
			<div class="col-sm-10">
				<input type="text" name="dzxx2" id="dzxx2" class="form-control" placeholder="电子邮箱1" value="{{ old('dzxx2') }}">
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
