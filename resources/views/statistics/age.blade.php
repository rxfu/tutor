@extends('layouts._two_columns_left_sidebar')

@section('content')
<div class="table-responsive">
    <table id="by-age-table" class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th class="active" rowspan="2">年龄段</th>

                @inject('types', 'Tis\Tutor\Repositories\GenderRepository')
                @foreach ($types->getAll() as $type)
                    <th class="active" colspan="2">{{ $type->xbmc }}</th>
                @endforeach

                <th class="active">合计</th>
            </tr>
            <tr>
                @foreach ($types->getAll() as $type)
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
                    @foreach ($types->getAll() as $type)
                        <?php $total += $item[$type->xbdm]?>
                    @endforeach

                    <th>{{ $item['title'] }}</th>

                    @foreach ($types->getAll() as $type)
                        <td>{{ $item[$type->xbdm] }}</td>
                        <td>{{ $total ? round($item[$type->xbdm] / $total * 100, 2) : $total }}%</td>
                    @endforeach

                    <td>{{ $total }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop