<!-- Sidebar -->
<aside class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul id="side-menu" class="nav">
            <li>
                <a href="{{ route('home') }}"><i class="fa fa-dashboard fa-fw"></i> 仪表盘</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-graduation-cap fa-fw"></i> 导师管理<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('tutor.list') }}">导师信息</a>
                        <a href="{{ route('tutor.application') }}">新增导师申请</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            @can('admin-access')
            <li>
                <a href="#"><i class="fa fa-graduation-cap fa-fw"></i> 导师遴选<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">导师遴选</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-graduation-cap fa-fw"></i> 导师信息公示<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('tutor.publicity') }}">导师信息公示</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-graduation-cap fa-fw"></i> 信息统计<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('statistics.gender') }}">按性别统计</a>
                    </li>
                    <li>
                        <a href="{{ route('statistics.college') }}">按学院统计</a>
                    </li>
                    <li>
                        <a href="{{ route('statistics.degree') }}">按学位统计</a>
                    </li>
                    <li>
                        <a href="{{ route('statistics.position') }}">按职称统计</a>
                    </li>
                    <li>
                        <a href="{{ route('statistics.discipline') }}">按一级学科统计</a>
                    </li>
                    <li>
                        <a href="{{ route('statistics.subdiscipline') }}">按二级学科统计</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-graduation-cap fa-fw"></i> 教育部专家库<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">教育部专家库</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-graduation-cap fa-fw"></i> 数据维护<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('metadata.list', 'gender') }}">性别</a>
                    </li>
                    <li>
                        <a href="{{ route('metadata.list', 'country') }}">国籍</a>
                    </li>
                    <li>
                        <a href="{{ route('metadata.list', 'nation') }}">民族</a>
                    </li>
                    <li>
                        <a href="{{ route('metadata.list', 'party') }}">政治面貌</a>
                    </li>
                    <li>
                        <a href="{{ route('metadata.list', 'college') }}">学院</a>
                    </li>
                    <li>
                        <a href="{{ route('metadata.list', 'position') }}">职称</a>
                    </li>
                    <li>
                        <a href="{{ route('metadata.list', 'discipline') }}">一级学科</a>
                    </li>
                    <li>
                        <a href="{{ route('metadata.list', 'subdiscipline') }}">二级学科</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            @endcan
            <li>
                <a href="#"><i class="fa fa-graduation-cap fa-fw"></i> 用户管理<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('user.list') }}">用户列表</a>
                    </li>
                    @can('admin-access')
                    <li>
                        <a href="{{ route('role.list') }}">角色列表</a>
                    </li>
                    @endcan
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-gear fa-fw"></i> 系统管理<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('user.password') }}">修改密码</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="{{ url('logout') }}"><i class="fa fa-sign-out fa-fw"></i> 退出</a>
            </li>
        </ul>
        <!-- /#side-menu -->
    </div>
    <!-- /.sidebar-nav -->
</aside>
<!-- /.navbar-sidebar -->