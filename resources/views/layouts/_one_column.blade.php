@extends('layouts.default')

@section('page')
<main class="container">
	@include('layouts._flash')

	@yield('content')
</main>
<!-- /.container -->
@stop