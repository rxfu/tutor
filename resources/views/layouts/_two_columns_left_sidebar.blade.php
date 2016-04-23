@extends('default')

@section('styles')
	<link rel="stylesheet" href="{{ asset('css/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/dataTables/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sb-admin-2.css') }}">
@stop

@section('scripts')
    <script src="{{ asset('js/bootstrap-paginator.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-typeahead.js') }}"></script>
    <script src="{{ asset('js/jquery.stacktable.js') }}"></script>
    <script src="{{ asset('js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('js/plugins/dataTables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins/dataTables/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
@stop

@section('sidebar')
	@include('layouts._sidebar')
@stop

@section('page')
<!-- Page wrapper -->
<main id="page-wrapper">
    @include('layouts._flash')

    <article class="row">
        <header class="col-sm-12">
            <h1 class="page-header">{{ isset($title) ? $title : ''}}</h1>
        </header>
        <!-- /.col-sm-12 -->

        <section class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    @if (isset($subtitle))
                        <div class="panel-heading">{{ $subtitle }}</div>
                    @endif

                    <div class="panel-body">
                        @yield('content')
                    </div>
                </div>
            </div>
        </section>
    </article>
    <!-- /.row -->
</main>
<!-- /#page-wrapper -->
@stop