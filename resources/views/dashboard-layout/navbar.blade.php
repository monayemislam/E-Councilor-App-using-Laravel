        <!--Navigation Bar Start-->
        <div class="d-flex justify-content-between align-items-center topbar py-1">
            <div>
                <i class="fa-solid fa-bars-staggered text-white toggleIcon" onclick="toggleBar()"></i>
            </div>

            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white d-flex align-items-center" href="#" id="userDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user-circle pe-2"></i>
                        {{ (isset(Auth::user()->name)) ? Auth::user()->name : 'Guest' }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-white user-dropdown" aria-labelledby="userDropDown">
                        <li><a class="dropdown-item" href="{{route('profile')}}">Profile</a></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                    </ul>
                </li>
            </ul>
        </div>
        <!--Navigation Bar End-->