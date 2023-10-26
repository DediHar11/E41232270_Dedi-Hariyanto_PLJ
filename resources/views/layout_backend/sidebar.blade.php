<div class="left-side-bar">
    <div class="brand-logo">
        <a href="index.html">
            <img src="{{asset('backend/vendors/images/deskapp-logo.svg')}}" alt="" class="dark-logo">
            <img src="{{asset('backend/vendors/images/deskapp-logo-white.svg')}}" alt="" class="light-logo">
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li>
                    <a href="{{route('dashboard')}}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-house-1"></span><span class="mtext">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="invoice.html" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-user-1"></span><span class="mtext">Profile</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-invoice"></span><span class="mtext">Riwayat Hidup</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('pendidikan.index')}}">Pendidikan</a></li>
                        <li><a href="{{route('pengalaman.index')}}">Pengalaman Kerja</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
