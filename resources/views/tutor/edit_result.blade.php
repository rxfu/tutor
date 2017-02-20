@extends('layouts._two_columns_left_sidebar')

@section('subtitle')
编辑{{ $title }}
@stop

@section('content')
<form action="{{ route('tutor.updateResult', $items[0]->zjhm) }}" method="post" role="form" class="form-horizontal">
	{{ method_field('put') }}
	{{ csrf_field() }}
	<input type="hidden" name="zjhm" id="zjhm" value="{{ $items[0]->zjhm }}">
	<fieldset>
		<div class="table-responsive">
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
		        	@for($i = 0; $i < 5; ++$i)
		        		<tr>
							<input type="hidden" name="item[{{ $i }}][zjhm]" id="item[{{ $i }}][zjhm]"value="{{ $items[$i]->zjhm }}">
							<input type="hidden" name="item[{{ $i }}][id]" id="item[{{ $i }}][id]"value="{{ $items[$i]->id }}">
		        			<td>
								<input type="text" name="item[{{ $i }}][xh]" id="item[{{ $i }}][xh]" class="form-control" placeholder="序号" value="{{ $i + 1 }}" readonly>
		        			</td>
		                    <td>
		                    	<input type="text" name="item[{{ $i }}][mc]" id="item[{{ $i }}][mc]" class="form-control" placeholder="成果名称" value="{{ isset($items[$i]) ? $items[$i]->mc : '' }}">
		                    </td>
		                    <td>
		                    	<input type="text" name="item[{{ $i }}][sj]" id="item[{{ $i }}][sj]" class="form-control" placeholder="刊物或出版单位及时间" value="{{ isset($items[$i]) ? $items[$i]->sj : ''}}">
		                    </td>
		                    <td>
		                    	<input type="text" name="item[{{ $i }}][pm]" id="item[{{ $i }}][pm]" class="form-control" placeholder="署名次序" value="{{ isset($items[$i]) ? $items[$i]->pm : '' }}">
		                    </td>
		        		</tr>
		        	@endfor
		        </tbody>
		        <tfoot>
		        	<tr>
		        		<td colspan="4" align="right">
							<button type="submit" class="btn btn-success" title="下一步">下一步</button>
						</td>
		        	</tr>
		        </tfoot>
		    </table>
		</div>
	</fieldset>
</form>
@stop
