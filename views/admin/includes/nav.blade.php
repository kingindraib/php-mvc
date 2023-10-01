	<!-- nav section start -->
	<nav>
		
		<!-- right sidebar start -->
	<div class="right">
		<div class="top">
			<button id="menu-btn">
				<span class="material-symbols-sharp">menu</span>
			</button>
			<div class="theme-toggler">
				<span class="material-symbols-sharp active">light_mode</span>
				<span class="material-symbols-sharp">dark_mode</span>
			</div>
			<div class="profile">
				<div class="info">
					<p>Hey, <b>{{ auth()->first_name }}</b></p>
					<small class="text-muted">{{ auth()->last_name }}</small>
				</div>
				<div class="profile-photo">
					<img src="{{url('public/admin/images/profile-1.jpg')}}">
				</div>
			</div>
		</div>
	</div>
	<!-- right sidebar end -->

	</nav>
	<!-- nav section end -->