@extends('layouts._two_columns_left_sidebar')

@section('content')
<div class="table-responsive">
    <table id="by-age-table" class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th class="active">学院</th>
                <th class="active">导师类别</th>
                <th class="active">导师大类</th>
                <th class="active">聘任专业</th>
                <th class="active">聘任人数</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <th>{{ $item->mc }}</th>
                    <td>{{ $item->dslb }}</td>
                    <td>{{ $item->dsdl }}</td>
                    <td>{{ $item->ejxkmc }}</td>
                    <td>{{ $item->rs }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop