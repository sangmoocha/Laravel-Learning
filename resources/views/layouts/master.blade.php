<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Laravel 5.7 Learning</title>

	<link rel="stylesheet" href="/css/master.css">
	<!-- Theme style -->

</head>

<body class="hold-transition sidebar-mini">
	<div class="wrapper" id="app">

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#">
						<i class="fa fa-bars"></i>
					</a>
				</li>
			</ul>

			<!-- SEARCH FORM -->
			<form class="form-inline ml-3">
				<div class="input-group input-group-sm">
					<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
					<div class="input-group-append">
						<button class="btn btn-navbar" type="submit">
							<i class="fa fa-search"></i>
						</button>
					</div>
				</div>
			</form>

			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">
				<li>
					<button type="button" class="btn btn-outline-success orangered" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
						<i class="fas fa-power-off red"></i>

					</button>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>
				</li>

			</ul>
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="/" class="brand-link">
				<img src="./img/offsec2.png" alt="Logo" class="brand-image img-circle " style="opacity: .8">
				<span class="brand-text font-weight-light">Beginner</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user panel (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="./img/master.png" class="img-circle " alt="User Image">
					</div>
					<div class="info">
						<router-link to="/profile" class="d-block">{{ Auth::user()->name }}</router-link>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>	대시 보드	</p>
							</a>
						</li>
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-cogs"></i>
								<p>
									시스템관리
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<router-link to="/users" class="nav-link">
										<i class="fas fa-users-cog"></i>
										<p>사용자관리</p>
									</router-link>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<router-link to="/profile" class="nav-link">
								<i class="nav-icon fas fa-address-card"></i>
								<p>	사용자 정보	</p>
							</router-link>
						</li>
					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		<div class="content-wrapper">
			<!-- Main content -->
			<div class="content">
				<div class="container-fluid">
					<router-view></router-view>
				</div>
			</div>
		</div>
	</div>
	<!--  App -->
	<script src="/js/master.js"></script>
</body>

</html>