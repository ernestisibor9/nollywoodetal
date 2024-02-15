<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            {{-- <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon"> --}}
        </div>
        <div>
            <h4 class="logo-text">NollywoodEtal</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
     </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{route('admin.dashboard')}}">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="fadeIn animated bx bx-film"></i>
                </div>
                <div class="menu-title">Movie</div>
            </a>
            <ul>
                <li> <a href="{{route('add.movie')}}"><i class='bx bx-radio-circle'></i>Add Movie</a>
                </li>
                <li> <a href="{{route('all.movie')}}"><i class='bx bx-radio-circle'></i>All Movie</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="fadeIn animated bx bx-user-plus"></i>
                </div>
                <div class="menu-title">Producer</div>
            </a>
            <ul>
                <li> <a href="{{route('add.producer')}}"><i class='bx bx-radio-circle'></i>Add Producer</a>
                </li>
                <li> <a href="{{route('all.producer')}}"><i class='bx bx-radio-circle'></i>All Producer</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="fadeIn animated bx bx-user-plus"></i>
                </div>
                <div class="menu-title">Cast</div>
            </a>
            <ul>
                <li> <a href="{{route('add.cast')}}"><i class='bx bx-radio-circle'></i>Add Cast</a>
                </li>
                <li> <a href="{{route('all.cast')}}"><i class='bx bx-radio-circle'></i>All Cast</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="fadeIn animated bx bx-user-plus"></i>
                </div>
                <div class="menu-title">Writer</div>
            </a>
            <ul>
                <li> <a href="{{route('add.writer')}}"><i class='bx bx-radio-circle'></i>Add Writer</a>
                </li>
                <li> <a href="{{route('all.writer')}}"><i class='bx bx-radio-circle'></i>All Writers</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="fadeIn animated bx bx-film"></i>
                </div>
                <div class="menu-title">Genre</div>
            </a>
            <ul>
                <li> <a href="{{route('add.genre')}}"><i class='bx bx-radio-circle'></i>Add Genre</a>
                </li>
                <li> <a href="{{route('all.genre')}}"><i class='bx bx-radio-circle'></i>All Genre</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-book'></i>
                </div>
                <div class="menu-title">Post</div>
            </a>
            <ul>
                <li> <a href="{{route('add.post')}}"><i class='bx bx-radio-circle'></i>Add Post</a>
                </li>
                <li> <a href="{{route('all.post')}}"><i class='bx bx-radio-circle'></i>All Post</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="fadeIn animated bx bx-comment-detail"></i>
                </div>
                <div class="menu-title">Comment</div>
            </a>
            <ul>
                <li> <a href="{{route('add.post')}}"><i class='bx bx-radio-circle'></i>Reply Comment</a>
                </li>
                <li> <a href="{{route('all.comment')}}"><i class='bx bx-radio-circle'></i>All Comment</a>
                </li>
            </ul>
        </li>
        <li class="menu-label">PROFILE</li>
                <li>
					<a href="{{ route('admin.profile') }}">
						<div class="parent-icon"><i class="fadeIn animated bx bx-user-circle"></i>
						</div>
						<div class="menu-title">Profile</div>
					</a>
				</li>
				<li>
					<a href="{{ route('admin.change.password') }}">
						<div class="parent-icon"><i class="fadeIn animated bx bx-key"></i>
						</div>
						<div class="menu-title">Change Password</div>
					</a>
				</li>
				<li>
					<a href="{{ route('admin.logout') }}">
						<div class="parent-icon"><i class="fadeIn animated bx bx-log-out-circle"></i>
						</div>
						<div class="menu-title">Logout</div>
					</a>
				</li>
    </ul>
    <!--end navigation-->
</div>