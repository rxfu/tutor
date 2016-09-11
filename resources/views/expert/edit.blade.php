@extends('layouts._two_columns_left_sidebar')

@section('subtitle')
编辑{{ $title }}“{{ $item->xm }}”信息
@stop

@section('content')
<form action="{{ route('tutor.update', [$item->zjhm, $item->dslb, $item->dsdl, $item->ejxkdm, $item->sfjzds]) }}" method="post" role="form" class="form-horizontal">
	{{ method_field('put') }}
	{{ csrf_field() }}
	<fieldset>
		<div class="form-group">
			<label for="zjhm" class="control-label col-sm-2">证件号码</label>
			<div class="col-sm-10">
				<input type="text" name="zjhm" id="zjhm" class="form-control" placeholder="证件号码" value="{{ $item->zjhm }}">
			</div>
		</div>
		<div class="form-group">
			<label for="dslb" class="control-label col-sm-2">导师类别</label>
			<div class="col-sm-10">
				<select name="dslb" id="dslb" class="form-control">
					<option value="1"{{ $item->dslb == 1 ? ' selected' : '' }}>硕士生导师</option>
					<option value="2"{{ $item->dslb == 2 ? ' selected' : '' }}>博士生导师</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="yjxkdm" class="control-label col-sm-2">一级学科</label>
			<div class="col-sm-10">
				@inject('disciplines', 'Tis\Tutor\Repositories\DisciplineRepository')
				<select name="yjxkdm" id="yjxkdm" class="form-control">
					@foreach ($disciplines->getAll() as $discipline)
						{!! $discipline->present()->option($item->yjxkdm) !!}
					@endforeach
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="ejxkdm" class="control-label col-sm-2">二级学科</label>
			<div class="col-sm-10">
				@inject('subdisciplines', 'Tis\Tutor\Repositories\SubdisciplineRepository')
				<select name="ejxkdm" id="ejxkdm" class="form-control">
					@foreach ($subdisciplines->getAll() as $subdiscipline)
						{!! $subdiscipline->present()->option($item->ejxkdm) !!}
					@endforeach
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="sfjzds" class="control-label col-sm-2">是否兼职导师</label>
			<div class="col-sm-10">
				<label class="radio-inline">
					<input type="radio" name="sfjzds" value="1"{{ $item->sfjzds == 1 ? ' checked' : '' }}>&nbsp;是
				</label>
				<label class="radio-inline">
					<input type="radio" name="sfjzds" value="0"{{ $item->sfjzds == 0 ? ' checked' : '' }}>&nbsp;否
				</label>
			</div>
		</div>
		<div class="form-group">
			<label for="jzdsdw" class="control-label col-sm-2">兼职导师单位</label>
			<div class="col-sm-10">
				<input type="text" name="jzdsdw" id="jzdsdw" class="form-control" placeholder="兼职导师单位" value="{{ $item->jzdsdw }}">
			</div>
		</div>
		<div class="form-group">
			<label for="dsdl" class="control-label col-sm-2">导师大类</label>
			<div class="col-sm-10">
				<select name="dsdl" id="dsdl" class="form-control">
					<option value="1"{{ $item->dsdl == 1 ? ' selected' : '' }}>科学学位</option>
					<option value="2"{{ $item->dsdl == 2 ? ' selected' : '' }}>专业学位</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="xm" class="control-label col-sm-2">姓名</label>
			<div class="col-sm-10">
				<input type="text" name="xm" id="xm" class="form-control" placeholder="姓名" value="{{ $item->xm }}" readonly>
			</div>
		</div>
		<div class="form-group">
			<label for="xb" class="control-label col-sm-2">性别</label>
			<div class="col-sm-10">
				@inject('genders', 'Tis\Tutor\Repositories\GenderRepository')
				<select name="xb" id="xb" class="form-control">
					@foreach ($genders->getAll() as $gender)
						{!! $gender->present()->option($item->xb) !!}
					@endforeach
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="csny" class="control-label col-sm-2">出生年月</label>
			<div class="col-sm-10">
				<input type="text" name="csny" id="csny" class="form-control" placeholder="出生年月" value="{{ $item->csny }}" readonly>
			</div>
		</div>
		<div class="form-group">
			<label for="gbm" class="control-label col-sm-2">国籍</label>
			<div class="col-sm-10">
				@inject('countries', 'Tis\Tutor\Repositories\CountryRepository')
				<select name="gbm" id="gbm" class="form-control">
					@foreach ($countries->getAll() as $country)
						{!! $country->present()->option($item->gbm) !!}
					@endforeach
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="mzm" class="control-label col-sm-2">民族</label>
			<div class="col-sm-10">
				@inject('nations', 'Tis\Tutor\Repositories\NationRepository')
				<select name="mzm" id="mzm" class="form-control">
					@foreach ($nations->getAll() as $nation)
						{!! $nation->present()->option($item->mzm) !!}
					@endforeach
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="zzmmm" class="control-label col-sm-2">政治面貌</label>
			<div class="col-sm-10">
				@inject('parties', 'Tis\Tutor\Repositories\PartyRepository')
				<select name="zzmmm" id="zzmmm" class="form-control">
					@foreach ($parties->getAll() as $party)
						{!! $party->present()->option($item->zzmmm) !!}
					@endforeach
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="xxdm" class="control-label col-sm-2">学校代码</label>
			<div class="col-sm-10">
				<input type="text" name="xxdm" id="xxdm" class="form-control" placeholder="学校代码" value="{{ $item->xxdm }}" readonly>
			</div>
		</div>
		<div class="form-group">
			<label for="xxmc" class="control-label col-sm-2">学校名称</label>
			<div class="col-sm-10">
				<input type="text" name="xxmc" id="xxmc" class="form-control" placeholder="学校名称" value="{{ $item->xxmc }}" readonly>
			</div>
		</div>
		<div class="form-group">
			<label for="szbm" class="control-label col-sm-2">所在部门</label>
			<div class="col-sm-10">
				@inject('colleges', 'Tis\Tutor\Repositories\CollegeRepository')
				<select name="szbm" id="szbm" class="form-control">
					@foreach ($colleges->getAll() as $college)
						{!! $college->present()->option($item->szbm) !!}
					@endforeach
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="zgxl" class="control-label col-sm-2">最高学历</label>
			<div class="col-sm-10">
				<select name="zgxl" id="zgxl" class="form-control">
					<option value="1"{{ $item->zgxl == 1 ? ' selected' : '' }}>本科</option>
					<option value="2"{{ $item->zgxl == 2 ? ' selected' : '' }}>硕士研究生</option>
					<option value="3"{{ $item->zgxl == 3 ? ' selected' : '' }}>博士研究生</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="zgxw" class="control-label col-sm-2">最高学位</label>
			<div class="col-sm-10">
				<select name="zgxw" id="zgxw" class="form-control">
					<option value="0"{{ $item->zgxw == 0 ? ' selected' : '' }}>无</option>
					<option value="1"{{ $item->zgxw == 1 ? ' selected' : '' }}>学士</option>
					<option value="2"{{ $item->zgxw == 2 ? ' selected' : '' }}>硕士</option>
					<option value="3"{{ $item->zgxw == 3 ? ' selected' : '' }}>博士</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="sxzy" class="control-label col-sm-2">所学专业</label>
			<div class="col-sm-10">
				<input type="text" name="sxzy" id="sxzy" class="form-control" placeholder="所学专业" value="{{ $item->sxzy }}">
			</div>
		</div>
		<div class="form-group">
			<label for="zyzc" class="control-label col-sm-2">专业职称</label>
			<div class="col-sm-10">
				@inject('positions', 'Tis\Tutor\Repositories\PositionRepository')
				<select name="zyzc" id="zyzc" class="form-control">
					@foreach ($positions->getAll() as $position)
						{!! $position->present()->option($item->zyzc) !!}
					@endforeach
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="xzzw" class="control-label col-sm-2">现任职务</label>
			<div class="col-sm-10">
				<input type="text" name="xzzw" id="xzzw" class="form-control" placeholder="现任职务" value="{{ $item->xzzw }}">
			</div>
		</div>
		<div class="form-group">
			<label for="rdsny" class="control-label col-sm-2">任导师年月</label>
			<div class="col-sm-10">
				<input type="text" name="rdsny" id="rdsny" class="form-control" placeholder="任导师年月" value="{{ $item->rdsny }}">
			</div>
		</div>
		<div class="form-group">
			<label for="yjfx" class="control-label col-sm-2">研究方向</label>
			<div class="col-sm-10">
				<input type="text" name="yjfx" id="yjfx" class="form-control" placeholder="研究方向" value="{{ $item->yjfx }}">
			</div>
		</div>
		<div class="form-group">
			<label for="wgyyz" class="control-label col-sm-2">外国语语种</label>
			<div class="col-sm-10">
				<input type="text" name="wgyyz" id="wgyyz" class="form-control" placeholder="外国语语种" value="{{ $item->wgyyz }}">
			</div>
		</div>
		<div class="form-group">
			<label for="wgyslcd" class="control-label col-sm-2">外国语熟练程度</label>
			<div class="col-sm-10">
				<select name="wgyslcd" id="wgyslcd" class="form-control">
					<option value="1"{{ $item->wgyslcd == 1 ? ' selected' : '' }}>一般</option>
					<option value="2"{{ $item->wgyslcd == 2 ? ' selected' : '' }}>熟练</option>
					<option value="3"{{ $item->wgyslcd == 3 ? ' selected' : '' }}>精通</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="txdz" class="control-label col-sm-2">通讯地址</label>
			<div class="col-sm-10">
				<input type="text" name="txdz" id="txdz" class="form-control" placeholder="通讯地址" value="{{ $item->txdz }}">
			</div>
		</div>
		<div class="form-group">
			<label for="yzbm" class="control-label col-sm-2">邮政编码</label>
			<div class="col-sm-10">
				<input type="text" name="yzbm" id="yzbm" class="form-control" placeholder="邮政编码" value="{{ $item->yzbm }}">
			</div>
		</div>
		<div class="form-group">
			<label for="lxdh" class="control-label col-sm-2">联系电话</label>
			<div class="col-sm-10">
				<input type="text" name="lxdh" id="lxdh" class="form-control" placeholder="联系电话" value="{{ $item->lxdh }}">
			</div>
		</div>
		<div class="form-group">
			<label for="dzyx" class="control-label col-sm-2">电子邮箱</label>
			<div class="col-sm-10">
				<input type="text" name="dzyx" id="dzyx" class="form-control" placeholder="电子邮箱" value="{{ $item->dzyx }}">
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