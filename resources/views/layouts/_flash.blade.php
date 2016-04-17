@if (session('success'))
<!-- Success -->
<section class="row">
    <div class="col-sm-12">
        <div class="alert alert-success alert-dismissable" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
            <span class="sr-only">Success:</span>
            {{ session('success') }}
        </div>
    </div>
    <!-- /.col-sm-12 -->
</section>
<!-- /.row -->
@endif

@if (session('info'))
<!-- Information -->
<section class="row">
    <div class="col-sm-12">
        <div class="alert alert-info alert-dismissable" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
            <span class="sr-only">Information:</span>
            {{ session('info') }}
        </div>
    </div>
    <!-- /.col-sm-12 -->
</section>
<!-- /.row -->
@endif

@if (session('warning'))
<!-- Warning -->
<section class="row">
    <div class="col-sm-12">
        <div class="alert alert-warning alert-dismissable" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <span class="sr-only">Warning:</span>
            {{ session('warning') }}
        </div>
    </div>
    <!-- /.col-sm-12 -->
</section>
<!-- /.row -->
@endif

@if (session('error'))
<!-- Error -->
<section class="row">
    <div class="col-sm-12">
        <div class="alert alert-danger alert-dismissable" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
            <span class="sr-only">Error:</span>
            {{ session('error') }}
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
            <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
            <span class="sr-only">Error:</span>
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