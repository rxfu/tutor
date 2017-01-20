@extends('layouts._two_columns_left_sidebar')

@section('subtitle')
创建{{ $title }}
@stop

@section('content')
<form action="{{ route('tutor.saveProject') }}" method="post" role="form" class="form-horizontal">
	{{ csrf_field() }}
	<fieldset>
		<div class="table-responsive">
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
		        	@for($i = 0; $i < 5; ++$i)
		        		<tr>
							<input type="hidden" name="item[{{ $i }}][zjhm]" id="item[{{ $i }}][zjhm]"value="{{ $id }}">
		        			<td>
								<input type="text" name="item[{{ $i }}][xh]" id="item[{{ $i }}][xh]" class="form-control" placeholder="序号" value="{{ $i + 1 }}" readonly>
		        			</td>
		                    <td>
		                    	<input type="text" name="item[{{ $i }}][mc]" id="item[{{ $i }}][mc]" class="form-control" placeholder="项目名称" value="{{ isset($items[$i]) ? $items[$i]->mc : '' }}">
		                    </td>
		                    <td>
		                    	<input type="text" name="item[{{ $i }}][ly]" id="item[{{ $i }}][ly]" class="form-control" placeholder="项目来源" value="{{ isset($items[$i]) ? $items[$i]->ly : '' }}">
		                    </td>
		                    <td>
		                    	<input type="text" name="item[{{ $i }}][sj]" id="item[{{ $i }}][sj]" class="form-control" placeholder="起讫时间" value="{{ isset($items[$i]) ? $items[$i]->sj : ''}}">
		                    </td>
		                    <td>
		                    	<input type="text" name="item[{{ $i }}][jf]" id="item[{{ $i }}][jf]" class="form-control" placeholder="科研经费" value="{{ isset($items[$i]) ? $items[$i]->jf : ''}}">
		                    </td>
		                    <td>
		                    	<input type="text" name="item[{{ $i }}][pm]" id="item[{{ $i }}][pm]" class="form-control" placeholder="署名次序" value="{{ isset($items[$i]) ? $items[$i]->pm : '' }}">
		                    </td>
		        		</tr>
		        	@endfor
		        </tbody>
		        <tfoot>
		        	<tr>
		        		<td colspan="6" align="right">
							<button type="submit" class="btn btn-success" title="提交">提交</button>
						</td>
		        	</tr>
		        </tfoot>
		    </table>
		</div>
	</fieldset>
</form>
@stop
