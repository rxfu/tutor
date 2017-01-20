@extends('layouts._two_columns_left_sidebar')

@section('subtitle')
添加{{ $title }}
@stop

@section('content')
<form action="{{ route('tutor.saveSelection') }}" method="post" role="form" class="form-horizontal">
	{{ csrf_field() }}
	<fieldset>
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
			<label for="csny" class="control-label col-sm-2">出生年月</label>
			<div class="col-sm-10">
				<p class="form-control-static">{{ date('Y年m月', strtotime(substr($id, 6, 8))) }}</p>
			</div>
		</div>
		<div class="form-group">
			<label for="zjhm" class="control-label col-sm-2">证件号码</label>
			<div class="col-sm-10">
				<input type="text" name="zjhm" id="zjhm" class="form-control" placeholder="证件号码" value="{{ $item->zjhm }}" readonly>
			</div>
		</div>
		<div class="form-group">
			<label for="xydm" class="control-label col-sm-2">所在部门</label>
			<div class="col-sm-10">
				<p class="form-control-static">{{ $item->college->mc }}</p>
			</div>
		</div>
		<div class="form-group">
			<label for="nsbxkzy" class="control-label col-sm-2">拟申报学科专业</label>
			<div class="col-sm-10">
				@inject('subdisciplines', 'Tis\Tutor\Repositories\SubdisciplineRepository')
				<select name="nsbxkzy" id="nsbxkzy" class="form-control">
					<option value="">无</option>
					@foreach ($subdisciplines->getAll() as $subdiscipline)
						{!! $subdiscipline->present()->option(old('nsbxkzy')) !!}
					@endforeach
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="sxzy" class="control-label col-sm-2">所学专业</label>
			<div class="col-sm-10">
				<input type="text" name="sxzy" id="sxzy" class="form-control" placeholder="所学专业" value="{{ old('sxzy') }}">
			</div>
		</div>
		<div class="form-group">
			<label for="yjfx" class="control-label col-sm-2">主要研究方向</label>
			<div class="col-sm-10">
				<input type="text" name="yjfx" id="yjfx" class="form-control" placeholder="主要研究方向" value="{{ $item->yjfx }}">
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
			<label for="zyjszw" class="control-label col-sm-2">专业技术职务</label>
			<div class="col-sm-10">
				<p class="form-control-static">{{ $item->position->mc }}</p>
			</div>
		</div>
		<div class="form-group">
			<label for="yjxkdm" class="control-label col-sm-2">一级学科</label>
			<div class="col-sm-10">
				@inject('disciplines', 'Tis\Tutor\Repositories\DisciplineRepository')
				<select name="yjxkdm" id="yjxkdm" class="form-control">
					@foreach ($disciplines->getAll() as $discipline)
						{!! $discipline->present()->option(old('yjxkdm')) !!}
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
						{!! $subdiscipline->present()->option(old('ejxkdm')) !!}
					@endforeach
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="dslb" class="control-label col-sm-2">导师大类</label>
			<div class="col-sm-10">
				<select name="dsdl" id="dsdl" class="form-control">
					<option value="1">科学学位</option>
					<option value="2">专业学位</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="dslb2" class="control-label col-sm-2">导师类别</label>
			<div class="col-sm-10">
				<select name="dslb" id="dslb" class="form-control">
					<option value="1">硕士生导师</option>
					<option value="2">博士生导师</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="sfjzds" class="control-label col-sm-2">是否兼职导师</label>
			<div class="col-sm-10">
				<label class="radio-inline">
					<input type="radio" name="sfjzds" value="1">&nbsp;是
				</label>
				<label class="radio-inline">
					<input type="radio" name="sfjzds" value="0" checked>&nbsp;否
				</label>
			</div>
		</div>
		<div class="form-group">
			<label for="jzdsdw" class="control-label col-sm-2">兼职导师单位</label>
			<div class="col-sm-10">
				<input type="text" name="jzdsdw" id="jzdsdw" class="form-control" placeholder="兼职导师单位" value="{{ old('jzdsdw') }}">
			</div>
		</div>
		<div class="form-group">
			<label for="txdz" class="control-label col-sm-2">通讯地址</label>
			<div class="col-sm-10">
				<p class="form-control-static">{{ $item->txdz }}</p>
			</div>
		</div>
		<div class="form-group">
			<label for="yzbm" class="control-label col-sm-2">邮政编码</label>
			<div class="col-sm-10">
				<p class="form-control-static">{{ $item->yzbm }}</p>
			</div>
		</div>
		<div class="form-group">
			<label for="lxdh" class="control-label col-sm-2">联系电话</label>
			<div class="col-sm-10">
				<p class="form-control-static">{{ $item->lxdh }}</p>
			</div>
		</div>
		<div class="form-group">
			<label for="dzyx" class="control-label col-sm-2">电子邮箱</label>
			<div class="col-sm-10">
				<p class="form-control-static">{{ $item->dzyx }}</p>
			</div>
		</div>
		<div class="form-group">
			<label for="jl" class="control-label col-sm-2">学习工作简历</label>
			<div class="col-sm-10">
				<textarea name="jl" cols="50" rows="10" class="form-control" placeholder="学习工作简历">{{ old('jl') }}</textarea>
			</div>
		</div>
		<div class="form-group">
			<label for="xzzdyjsqk" class="control-label col-sm-2">协助指导研究生情况</label>
			<div class="col-sm-10">
				<textarea name="xzzdyjsqk" cols="50" rows="10" class="form-control" placeholder="协助指导研究生情况">{{ old('xzzdyjsqk') }}</textarea>
			</div>
		</div>
		<div class="form-group">
			<label for="ksyjskc" class="control-label col-sm-2">开设研究生课程</label>
			<div class="col-sm-10">
				<textarea name="ksyjskc" cols="50" rows="10" class="form-control" placeholder="开设研究生课程">{{ old('ksyjskc') }}</textarea>
			</div>
		</div>
		<div class="form-group">
			<label for="bz" class="control-label col-sm-2">备注</label>
			<div class="col-sm-10">
				<textarea name="bz" cols="50" rows="10" class="form-control" placeholder="备注">{{ old('bz') }}</textarea>
			</div>
		</div>
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-success" title="下一步">下一步</button>
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