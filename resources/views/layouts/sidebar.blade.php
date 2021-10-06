<div class="sidebar">
	<div class="sidebar-background"></div>
	<div class="sidebar-wrapper scrollbar-inner">
		<div class="sidebar-content">
			<div class="user">
				<div class="avatar-sm float-left mr-2">
					<img src="{{asset('assets/img/profile.jpg')}}" alt="..." class="avatar-img rounded-circle">
				</div>
				<div class="info">
					<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
						<span>
							Hizrian
							<span class="user-level">Administrator</span>
						</span>
					</a>
					<div class="clearfix"></div>
				</div>
			</div>
			<ul class="nav">
				<li class="nav-item">
					<a href="/index">
						<i class="fas fa-home"></i>
						<p>Dashboard</p>
					</a>
				</li>
				<li class="nav-item">
					<a data-toggle="collapse" href="#user">
						<i class="fas fa-users-cog"></i>
						<p>Master User</p>
						<span class="caret"></span>
					</a>
					<div class="collapse" id="user">
						<ul class="nav nav-collapse">
							<li>
								<a href="/userMgmt">
									<span class="sub-item">Data User</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="nav-item">
					<a data-toggle="collapse" href="#pkm">
						<i class="fas fa-clinic-medical"></i>
						<p>Master Puskesmas</p>
						<span class="caret"></span>
					</a>
					<div class="collapse" id="pkm">
						<ul class="nav nav-collapse">
							<li>
								<a href="#">
									<span class="sub-item">Data Puskesmas</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>