<nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="index.html">
                    <span class="align-middle">Blog Admin</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{route('admin.dashboard')}}">
                            <span class="align-middle">{{__('sidebar.admin.view')}}</span>
                        </a>
                    </li>

                    <li class="sidebar-header">
                    {{__('sidebar.admin.header.dashboard')}}
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{route('admin.dashboard')}}">
                            <i class="align-middle" data-feather="sliders"></i> <span
                                class="align-middle">{{__('sidebar.admin.dashboard')}}</span>
                        </a>
                    </li>

                    <li class="sidebar-header">
                        {{__('sidebar.admin.header.blog')}}
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{route('admin.blog.index')}}">
                            <i class="align-middle" data-feather="book"></i> <span
                                class="align-middle">Add Post</span>
                        </a>
                    </li>

                    @can('manage_user|manage_role')        
                    <li class="sidebar-header">
                        {{__('sidebar.admin.header.system')}}
                    </li>
                    @endcan
                    @can('manage_user')                    
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{route('admin.user.index')}}">
                            <i class="align-middle" data-feather="users"></i> <span
                                class="align-middle">{{__('sidebar.admin.user')}}</span>
                        </a>
                    </li>
                    @endcan

                    @can('manage_role')      
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{route('admin.role.index')}}">
                            <i class="align-middle" data-feather="user-check"></i> <span
                                class="align-middle">{{__('sidebar.admin.role')}}</span>
                        </a>
                    </li>
                    @endcan
                </ul>
            </div>
        </nav>
