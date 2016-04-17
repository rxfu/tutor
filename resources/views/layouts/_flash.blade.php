@if (session('status'))
<!-- Status -->
<section class="row">
    <div class="col-sm-12">
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ session('status') }}
        </div>
    </div>
    <!-- /.col-sm-12 -->
</section>
<!-- /.row -->
@endif

@if (isset($info))
<!-- Information -->
<section class="row">
    <div class="col-sm-12">
        <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ $info }}
        </div>
    </div>
    <!-- /.col-sm-12 -->
</section>
<!-- /.row -->
@endif

@if ($errors->any())
<!-- Errors -->
<section class="row">
    <div class="col-sm-12">
        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>注意：出错啦！</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    <!-- /.col-sm-12 -->
</section>
<!-- /.row -->
@endif