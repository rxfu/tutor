@extends('layouts._two_columns_left_sidebar')

@section('content')
<div class="table-responsive">
    <table id="by-age-table" class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th class="active" rowspan="2">学院</th>
                <th class="active" colspan="3">硕士生导师</th>
                <th class="active" colspan="3">博士生导师</th>
                <th class="active" rowspan="2">合计</th>
            </tr>
            <tr>
                @for ($i = 0; $i < 2; $i++)
                    <th class="active">校内</th>
                    <th class="active">兼职</th>
                    <th class="active">小计</th>
                @endfor
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <th>{{ $item->mc }}</th>
                    <td>{{ $item->xnsdrs }}</td>
                    <td>{{ $item->jzsdrs }}</td>
                    <td>{{ $item->xnsdrs + $item->jzsdrs }}</td>
                    <td>{{ $item->xnbdrs }}</td>
                    <td>{{ $item->jzbdrs }}</td>
                    <td>{{ $item->xnbdrs + $item->jzbdrs }}</td>
                    <td>{{ $item->xnsdrs + $item->jzsdrs + $item->xnbdrs + $item->jzbdrs }}</td>
                </tr>
            @endforeach
            <tr>
                <th>总计</th>
                <td>{{ array_sum(collect($items)->pluck('xnsdrs')->all()) }}</td>
                <td>{{ array_sum(collect($items)->pluck('jzsdrs')->all()) }}</td>
                <td>{{ array_sum(collect($items)->pluck('xnsdrs')->all()) + array_sum(collect($items)->pluck('jzsdrs')->all()) }}</td>
                <td>{{ array_sum(collect($items)->pluck('xnbdrs')->all()) }}</td>
                <td>{{ array_sum(collect($items)->pluck('jzbdrs')->all()) }}</td>
                <td>{{ array_sum(collect($items)->pluck('xnbdrs')->all()) + array_sum(collect($items)->pluck('jzbdrs')->all()) }}</td>
                <td>{{ array_sum(collect($items)->pluck('xnsdrs')->all()) + array_sum(collect($items)->pluck('jzsdrs')->all()) + array_sum(collect($items)->pluck('xnbdrs')->all()) + array_sum(collect($items)->pluck('jzbdrs')->all()) }}</td>
            </tr>
        </tbody>
    </table>
</div>
@stop