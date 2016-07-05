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
                <td>{{ $items->sum('xnsdrs') }}</td>
                <td>{{ $items->sum('jzsdrs') }}</td>
                <td>{{ $items->sum('xnsdrs') + $items->sum('jzsdrs') }}</td>
                <td>{{ $items->sum('xnbdrs') }}</td>
                <td>{{ $items->sum('jzbdrs') }}</td>
                <td>{{ $items->sum('xnbdrs') + $items->sum('jzbdrs') }}</td>
                <td>{{ $items->sum('xnsdrs') + $items->sum('jzsdrs') + $items->sum('xnbdrs') + $items->sum('jzbdrs') }}</td>
            </tr>
        </tbody>
    </table>
</div>
@stop