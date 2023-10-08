<div class="col-md-3">
    <div class="card my-account">
        <h1 class="">User Account</h1>
        <div class="sidebar">
            <div class="sidebar-item active">
                <a href="{{ url('user/dashboard') }}">User Detail</a>
            </div>
            <div class="sidebar-item">
                <a href="{{ url('user/dashboard/edit_profile') }}">Edit Profile</a>
            </div>
            <div class="sidebar-item">
                <a href="{{ url('user/dashboard/myticket') }}">My Ticket</a>
            </div>
            <div class="sidebar-item">
                <a href="{{ url('user/dashboard/user_history') }}">User History</a>
            </div>
            {{-- <div class="sidebar-item">
                <a href="">Change Password</a>
            </div> --}}
            <div class="sidebar-item">
                <a href="{{ url('faq') }}">FAQs</a>
            </div>
            <div class="sidebar-item">
                <a href="{{ url('logout') }}">Logout</a>
            </div>
        </div>
    </div>
</div>