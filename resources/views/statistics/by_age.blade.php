@extends('layouts._two_columns_left_sidebar')

@section('content')
<div class="table-responsive">
    <table id="by-age-table" class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th class="active" rowspan="2">年龄段</th>

                @foreach ($types as $type)
                    <th class="active" colspan="2">{{ $type->mc }}</th>
                @endforeach

                <th class="active">合计</th>
            </tr>
            <tr>
                @foreach ($types as $type)
                    <th class="active">人数</th>
                    <th class="active">比例</th>
                @endforeach

                <th class="active">人数</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <?php $total = 0?>
                    @foreach ($types as $type)
                        <?php $count{$type->dm} = isset($item[$type->dm]) ? $item[$type->dm] : 0?>
                        <?php $total += $count{$type->dm}?>
                    @endforeach

                    <th>{{ $item['title'] }}</th>

                    @foreach ($types as $type)
                        <td>{{ $count{$type->dm} }}</td>
                        <td>{{ $total ? round($count{$type->dm} / $total * 100, 2) : $total }}%</td>
                    @endforeach

                    <td>{{ $total }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop