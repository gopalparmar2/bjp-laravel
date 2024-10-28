<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="{{ route('admin.index') }}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Dashboard</span>
                    </a>
                </li>

                @canany(['user-list', 'role-list', 'permission-list'])
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-user"></i>
                            <span key="t-layouts"> Users Management </span>
                        </a>

                        <ul class="sub-menu" aria-expanded="true">
                            @can('role-list')
                                <li {{ (\Route::is('admin.role.index') || \Route::is('admin.role.edit') || \Route::is('admin.role.create')) ? 'class=mm-active' : '' }}>
                                    <a href="{{ route('admin.role.index') }}" key="t-light-sidebar"> Roles </a>
                                </li>
                            @endcan

                            @can('permission-list')
                                <li {{ (\Route::is('admin.permission.index') || \Route::is('admin.permission.edit') || \Route::is('admin.permission.create')) ? 'class=mm-active' : '' }}>
                                    <a href="{{ route('admin.permission.index') }}" key="t-light-sidebar"> Permissions </a>
                                </li>
                            @endcan

                            @can('user-list')
                                <li {{ (\Route::is('admin.user.index') || \Route::is('admin.user.edit') || \Route::is('admin.user.create')) ? 'class=mm-active' : '' }}>
                                    <a href="{{ route('admin.user.index') }}" key="t-light-sidebar"> Users </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcanany

                @canany(['category-list', 'profession-list', 'qualification-list', 'religion-list', 'state-list', 'district-list', 'assembly-constituency-list'])
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-grid-alt"></i>
                            <span key="t-layouts"> Master Management </span>
                        </a>

                        <ul class="sub-menu" aria-expanded="true">
                            @can('role-list')
                                <li {{ (\Route::is('admin.category.index') || \Route::is('admin.category.edit') || \Route::is('admin.category.create')) ? 'class=mm-active' : '' }}>
                                    <a href="{{ route('admin.category.index') }}" key="t-light-sidebar"> Category </a>
                                </li>
                            @endcan

                            @can('role-list')
                                <li {{ (\Route::is('admin.profession.index') || \Route::is('admin.profession.edit') || \Route::is('admin.profession.create')) ? 'class=mm-active' : '' }}>
                                    <a href="{{ route('admin.profession.index') }}" key="t-light-sidebar"> Profession </a>
                                </li>
                            @endcan

                            @can('role-list')
                                <li {{ (\Route::is('admin.qualification.index') || \Route::is('admin.qualification.edit') || \Route::is('admin.qualification.create')) ? 'class=mm-active' : '' }}>
                                    <a href="{{ route('admin.qualification.index') }}" key="t-light-sidebar"> Qualification </a>
                                </li>
                            @endcan

                            @can('role-list')
                                <li {{ (\Route::is('admin.religion.index') || \Route::is('admin.religion.edit') || \Route::is('admin.religion.create')) ? 'class=mm-active' : '' }}>
                                    <a href="{{ route('admin.religion.index') }}" key="t-light-sidebar"> Religion </a>
                                </li>
                            @endcan

                            @can('role-list')
                                <li {{ (\Route::is('admin.state.index') || \Route::is('admin.state.edit') || \Route::is('admin.state.create')) ? 'class=mm-active' : '' }}>
                                    <a href="{{ route('admin.state.index') }}" key="t-light-sidebar"> State </a>
                                </li>
                            @endcan

                            @can('role-list')
                                <li {{ (\Route::is('admin.district.index') || \Route::is('admin.district.edit') || \Route::is('admin.district.create')) ? 'class=mm-active' : '' }}>
                                    <a href="{{ route('admin.district.index') }}" key="t-light-sidebar"> District </a>
                                </li>
                            @endcan

                            @can('role-list')
                                <li {{ (\Route::is('admin.assemblyConstituency.index') || \Route::is('admin.assemblyConstituency.edit') || \Route::is('admin.assemblyConstituency.create')) ? 'class=mm-active' : '' }}>
                                    <a href="{{ route('admin.assemblyConstituency.index') }}" key="t-light-sidebar"> Assembly Constituency </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcanany
            </ul>
        </div>
    </div>
</div>
