<!-- Topnav -->
<ul class="nav navbar-top-links navbar-right">
    <li>欢迎{{ $user->xm }}老师使用导师信息管理系统！</li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-user fa-fw"></i>
            <span>{{ $user->xm }}</span>
            <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
            <li><a href="{{ route('user.password') }}"><i class="fa fa-unlock fa-fw"></i> 修改密码</a></li>
            <!--
            <li class="divider"></li>
            <li><a href="{{ url('logout') }}"><i class="fa fa-sign-out fa-fw"></i> 退出</li>
            -->
        </ul>
    </li>
    <li><a href="{{ url('logout') }}"><i class="fa fa-sign-out fa-fw"></i> 退出</li>
</ul>
<!-- /.navbar-top-links -->