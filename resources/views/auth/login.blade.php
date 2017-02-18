@extends('layouts._one_column')

@section('content')
<div class="row">
    <div class="col-sm-4 col-sm-offset-4">
        <div class="panel panel-info login-panel">
            <div class="panel-heading">
                <h3 class="panel-title">登录系统</h3>
            </div>
            <!-- /.panel-heading -->

            <div class="panel-body">
                <form id="loginForm" name="loginForm" action="{{ url('login') }}" role="form" method="post" class="form-horizontal">
                	{!! csrf_field() !!}
                    <fieldset>
                        <div class="form-group">
                            <label for="username" class="col-sm-3 control-label">用户名</label>
                            <div class="col-sm-9">
                                <input type="text" name="username" id="username" placeholder="用户名" class="form-control" autofocus required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-sm-3 control-label">密码</label>
                            <div class="col-sm-9">
                                <input type="password" name="password" id="password" placeholder="密码" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9 col-sm-offset-3">
                                <button type="submit" class="btn btn-info btn-block">登录</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-sm-4 -->
</div>
<!-- /.row -->
@stop
