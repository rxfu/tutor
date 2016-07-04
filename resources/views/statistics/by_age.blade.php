@extends('layouts._two_columns_left_sidebar')

@section('content')
<div class="table-responsive">
    <table id="by-age-table" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th class="active" colspan="2">年龄段</th>
                <th class="active">30岁以下</th>
                <th class="active">30~34岁</th>
                <th class="active">35~39岁</th>
                <th class="active">40~44岁</th>
                <th class="active">45~49岁</th>
                <th class="active">50~54岁</th>
                <th class="active">55~59岁</th>
                <th class="active">60~64岁</th>
                <th class="active">65岁以上</th>
                <th class="active">合计</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <th class="active" rowspan="2">{{ $item->mc }}</th>
                    <th class="active">人数</th>
                    <td>{{ $item->under_30 }}</td>
                    <td>{{ $item->to_34 }}</td>
                    <td>{{ $item->to_39 }}</td>
                    <td>{{ $item->to_44 }}</td>
                    <td>{{ $item->to_49 }}</td>
                    <td>{{ $item->to_54 }}</td>
                    <td>{{ $item->to_59 }}</td>
                    <td>{{ $item->to_64 }}</td>
                    <td>{{ $item->over_65 }}</td>
                    <td>{{ $item->total }}</td>
                </tr>
                <tr>
                    <th class="active">比例</th>
                    <td>{{ $items->sum('under_30') ? round($item->under_30 / $items->sum('under_30') * 100, 2) : 0 }}%</td>
                    <td>{{ $items->sum('to_34') ? round($item->to_34 / $items->sum('to_34') * 100, 2) : 0 }}%</td>
                    <td>{{ $items->sum('to_39') ? round($item->to_39 / $items->sum('to_39') * 100, 2) : 0 }}%</td>
                    <td>{{ $items->sum('to_44') ? round($item->to_44 / $items->sum('to_44') * 100, 2) : 0 }}%</td>
                    <td>{{ $items->sum('to_49') ? round($item->to_49 / $items->sum('to_49') * 100, 2) : 0 }}%</td>
                    <td>{{ $items->sum('to_54') ? round($item->to_54 / $items->sum('to_54') * 100, 2) : 0 }}%</td>
                    <td>{{ $items->sum('to_59') ? round($item->to_59 / $items->sum('to_59') * 100, 2) : 0 }}%</td>
                    <td>{{ $items->sum('to_64') ? round($item->to_64 / $items->sum('to_64') * 100, 2) : 0 }}%</td>
                    <td>{{ $items->sum('over_65') ? round($item->over_65 / $items->sum('over_65') * 100, 2) : 0 }}%</td>
                    <td>{{ $items->sum('total') ? round($item->total / $items->sum('total') * 100, 2) : 0 }}%</td>
                </tr>
            @endforeach
            <tr>
                <th class="active">合计</th>
                <th class="active">人数</th>
                <td>{{ $items->sum('under_30') }}</td>
                <td>{{ $items->sum('to_34') }}</td>
                <td>{{ $items->sum('to_39') }}</td>
                <td>{{ $items->sum('to_44') }}</td>
                <td>{{ $items->sum('to_49') }}</td>
                <td>{{ $items->sum('to_54') }}</td>
                <td>{{ $items->sum('to_59') }}</td>
                <td>{{ $items->sum('to_64') }}</td>
                <td>{{ $items->sum('over_65') }}</td>
                <td>{{ $items->sum('total') }}</td>
            </tr>
        </tbody>
    </table>
</div>
@stop