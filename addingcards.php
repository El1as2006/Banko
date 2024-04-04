<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Modern, flexible and responsive Bootstrap 5 admin &amp; dashboard template">
	<meta name="author" content="Bootlab">

	<title>Spark - Bootstrap 5 Admin &amp; Dashboard Template</title>

	<!-- PICK ONE OF THE STYLES BELOW -->
	<!-- <link href="css/modern.css" rel="stylesheet"> -->
	<!-- <link href="css/classic.css" rel="stylesheet"> -->
	<!-- <link href="css/dark.css" rel="stylesheet"> -->
	<!-- <link href="css/light.css" rel="stylesheet"> -->

	<!-- BEGIN SETTINGS -->
	<!-- You can remove this after picking a style -->
	<style>
		body {
			opacity: 0;
		}
	</style>
	<script src="js/settings.js"></script>
	<!-- END SETTINGS -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120946860-7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-120946860-7');
</script></head>

<body>
	<div class="splash active">
		<div class="splash-icon"></div>
	</div>

	<div class="wrapper">
		<nav id="sidebar" class="sidebar">
			<a class='sidebar-brand' href='index.html'>
				<svg>
					<use xlink:href="#ion-ios-pulse-strong"></use>
				</svg>
				Spark
			</a>
			<div class="sidebar-content">
				<div class="sidebar-user">
					<img src="img/avatars/avatar.jpg" class="img-fluid rounded-circle mb-2" alt="Linda Miller" />
					<div class="fw-bold">Linda Miller</div>
					<small>Front-end Developer</small>
				</div>
				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Main
					</li>
					<li class="sidebar-item">
						<a data-bs-target="#dashboards" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle me-2 fas fa-fw fa-home"></i> <span class="align-middle">Dashboards</span>
						</a>
						<ul id="dashboards" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class='sidebar-link' href='dashboard-default.html'>Default</a></li>
							<li class="sidebar-item"><a class='sidebar-link' href='dashboard-analytics.html'>Analytics</a></li>
							<li class="sidebar-item"><a class='sidebar-link' href='dashboard-e-commerce.html'>E-commerce</a></li>
						</ul>
					</li>
					<li class="sidebar-item active">
						<a data-bs-target="#pages" data-bs-toggle="collapse" class="sidebar-link">
							<i class="align-middle me-2 fas fa-fw fa-file"></i> <span class="align-middle">Pages</span>
						</a>
						<ul id="pages" class="sidebar-dropdown list-unstyled collapse show" data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class='sidebar-link' href='pages-settings.html'>Settings</a></li>
							<li class="sidebar-item"><a class='sidebar-link' href='pages-clients.html'>Clients <span
										class="sidebar-badge badge rounded-pill bg-primary">New</span></a></li>
							<li class="sidebar-item"><a class='sidebar-link' href='pages-invoice.html'>Invoice</a></li>
							<li class="sidebar-item"><a class='sidebar-link' href='pages-pricing.html'>Pricing</a></li>
							<li class="sidebar-item"><a class='sidebar-link' href='pages-tasks.html'>Tasks</a></li>
							<li class="sidebar-item"><a class='sidebar-link' href='pages-chat.html'>Chat <span
										class="sidebar-badge badge rounded-pill bg-primary">New</span></a></li>
							<li class="sidebar-item active"><a class='sidebar-link' href='pages-blank.html'>Blank Page</a></li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a data-bs-target="#auth" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle me-2 fas fa-fw fa-sign-in-alt"></i> <span class="align-middle">Auth</span>
						</a>
						<ul id="auth" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class='sidebar-link' href='pages-sign-in.html'>Sign
									In</a></li>
							<li class="sidebar-item"><a class='sidebar-link' href='pages-sign-up.html'>Sign
									Up</a></li>
							<li class="sidebar-item"><a class='sidebar-link' href='pages-reset-password.html'>Reset Password</a></li>
							<li class="sidebar-item"><a class='sidebar-link' href='pages-404.html'>404
									Page</a></li>
							<li class="sidebar-item"><a class='sidebar-link' href='pages-500.html'>500
									Page</a></li>
						</ul>
					</li>

					<li class="sidebar-header">
						Elements
					</li>
					<li class="sidebar-item">
						<a data-bs-target="#ui" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle me-2 fas fa-fw fa-flask"></i> <span class="align-middle">User Interface</span>
						</a>
						<ul id="ui" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class='sidebar-link' href='ui-alerts.html'>Alerts</a></li>
							<li class="sidebar-item"><a class='sidebar-link' href='ui-buttons.html'>Buttons</a></li>
							<li class="sidebar-item"><a class='sidebar-link' href='ui-cards.html'>Cards</a></li>
							<li class="sidebar-item"><a class='sidebar-link' href='ui-general.html'>General</a></li>
							<li class="sidebar-item"><a class='sidebar-link' href='ui-grid.html'>Grid</a>
							</li>
							<li class="sidebar-item"><a class='sidebar-link' href='ui-modals.html'>Modals</a></li>
							<li class="sidebar-item"><a class='sidebar-link' href='ui-offcanvas.html'>Offcanvas</a></li>
							<li class="sidebar-item"><a class='sidebar-link' href='ui-placeholders.html'>Placeholders</a></li>
							<li class="sidebar-item"><a class='sidebar-link' href='ui-notifications.html'>Notifications</a></li>
							<li class="sidebar-item"><a class='sidebar-link' href='ui-tabs.html'>Tabs</a>
							</li>
							<li class="sidebar-item"><a class='sidebar-link' href='ui-typography.html'>Typography</a></li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a data-bs-target="#charts" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle me-2 fas fa-fw fa-chart-pie"></i> <span class="align-middle">Charts</span>
							<span class="sidebar-badge badge rounded-pill bg-primary">New</span>
						</a>
						<ul id="charts" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class='sidebar-link' href='charts-chartjs.html'>Chart.js</a></li>
							<li class="sidebar-item"><a class='sidebar-link' href='charts-apexcharts.html'>ApexCharts</a></li>
						</ul>
					</li>

					<li class="sidebar-item">
						<a data-bs-target="#forms" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle me-2 fas fa-fw fa-check-square"></i> <span class="align-middle">Forms</span>
						</a>
						<ul id="forms" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class='sidebar-link' href='forms-layouts.html'>Layouts</a></li>
							<li class="sidebar-item"><a class='sidebar-link' href='forms-basic-elements.html'>Basic Elements</a></li>
							<li class="sidebar-item"><a class='sidebar-link' href='forms-advanced-elements.html'>Advanced Elements</a></li>
							<li class="sidebar-item"><a class='sidebar-link' href='forms-floating-labels.html'>Floating Labels</a></li>
							<li class="sidebar-item"><a class='sidebar-link' href='forms-input-groups.html'>Input Groups</a></li>
							<li class="sidebar-item"><a class='sidebar-link' href='forms-editors.html'>Editors</a></li>
							<li class="sidebar-item"><a class='sidebar-link' href='forms-validation.html'>Validation</a></li>
							<li class="sidebar-item"><a class='sidebar-link' href='forms-wizard.html'>Wizard</a></li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a class='sidebar-link' href='tables-bootstrap.html'>
							<i class="align-middle me-2 fas fa-fw fa-list"></i> <span class="align-middle">Tables</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a data-bs-target="#datatables" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle me-2 fas fa-fw fa-table"></i> <span class="align-middle">DataTables</span>
						</a>
						<ul id="datatables" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class='sidebar-link' href='tables-datatables-responsive.html'>Responsive Table</a></li>
							<li class="sidebar-item"><a class='sidebar-link' href='tables-datatables-buttons.html'>Table with Buttons</a></li>
							<li class="sidebar-item"><a class='sidebar-link' href='tables-datatables-column-search.html'>Column Search</a></li>
							<li class="sidebar-item"><a class='sidebar-link' href='tables-datatables-fixed-header.html'>Fixed Header</a></li>
							<li class="sidebar-item"><a class='sidebar-link' href='tables-datatables-multi.html'>Multi Selection</a></li>
							<li class="sidebar-item"><a class='sidebar-link' href='tables-datatables-ajax.html'>Ajax Sourced Data</a></li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a data-bs-target="#icons" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle me-2 fas fa-fw fa-heart"></i> <span class="align-middle">Icons</span>
						</a>
						<ul id="icons" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class='sidebar-link' href='icons-feather.html'>Feather</a></li>
							<li class="sidebar-item"><a class='sidebar-link' href='icons-ion.html'>Ion
									Icons</a></li>
							<li class="sidebar-item"><a class='sidebar-link' href='icons-font-awesome.html'>Font Awesome</a></li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a class='sidebar-link' href='calendar.html'>
							<i class="align-middle me-2 far fa-fw fa-calendar-alt"></i> <span class="align-middle">Calendar</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a data-bs-target="#maps" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle me-2 fas fa-fw fa-map-marker-alt"></i> <span class="align-middle">Maps</span>
						</a>
						<ul id="maps" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class='sidebar-link' href='maps-google.html'>Google Maps</a></li>
							<li class="sidebar-item"><a class='sidebar-link' href='maps-vector.html'>Vector Maps</a></li>
						</ul>
					</li>

					<li class="sidebar-header">
						Extras
					</li>
					<li class="sidebar-item">
						<a data-bs-target="#documentation" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle me-2 fas fa-fw fa-book"></i> <span class="align-middle">Documentation</span>
						</a>
						<ul id="documentation" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class='sidebar-link' href='docs-getting-started.html'>Getting Started</a></li>
							<li class="sidebar-item"><a class='sidebar-link' href='docs-plugins.html'>Plugins</a></li>
							<li class="sidebar-item"><a class='sidebar-link' href='docs-changelog.html'>Changelog</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		<div class="main">
			<nav class="navbar navbar-expand navbar-theme">
				<a class="sidebar-toggle d-flex me-2">
					<i class="hamburger align-self-center"></i>
				</a>

				<form class="d-none d-sm-inline-block">
					<input class="form-control form-control-lite" type="text" placeholder="Search projects...">
				</form>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle position-relative" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
								<i class="align-middle fas fa-envelope-open"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
								<div class="dropdown-menu-header">
									<div class="position-relative">
										4 New Messages
									</div>
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Michelle Bilodeau">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Michelle Bilodeau</div>
												<div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
												<div class="text-muted small mt-1">5m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-3.jpg" class="avatar img-fluid rounded-circle" alt="Kathie Burton">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Kathie Burton</div>
												<div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
												<div class="text-muted small mt-1">30m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="Alexander Groves">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Alexander Groves</div>
												<div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Daisy Seger">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Daisy Seger</div>
												<div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all messages</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown ms-lg-2">
							<a class="nav-link dropdown-toggle position-relative" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<i class="align-middle fas fa-bell"></i>
								<span class="indicator"></span>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									4 New Notifications
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="ms-1 text-danger fas fa-fw fa-bell"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Update completed</div>
												<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="ms-1 text-warning fas fa-fw fa-envelope-open"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Lorem ipsum</div>
												<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
												<div class="text-muted small mt-1">6h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="ms-1 text-primary fas fa-fw fa-building"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Login from 192.186.1.1</div>
												<div class="text-muted small mt-1">8h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="ms-1 text-success fas fa-fw fa-bell-slash"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">New connection</div>
												<div class="text-muted small mt-1">Anna accepted your request.</div>
												<div class="text-muted small mt-1">12h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown ms-lg-2">
							<a class="nav-link dropdown-toggle position-relative" href="#" id="userDropdown" data-bs-toggle="dropdown">
								<i class="align-middle fas fa-cog"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-user"></i> View Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-comments"></i> Contacts</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-chart-pie"></i> Analytics</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-cogs"></i> Settings</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-arrow-alt-circle-right"></i> Sign out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
			<main class="content">
				<div class="container-fluid">

					<div class="header">
						<h1 class="header-title">
							Blank Page
						</h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href='dashboard-default.html'>Dashboard</a></li>
								<li class="breadcrumb-item"><a href="#">Blank</a></li>
								<li class="breadcrumb-item active" aria-current="page">Blank Page</li>
							</ol>
						</nav>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Empty card</h5>
								</div>
								<div class="card-body">
									<div class="my-5">&nbsp;</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>
			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-8 text-start">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="#">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Terms of Service</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Contact</a>
								</li>
							</ul>
						</div>
						<div class="col-4 text-end">
							<p class="mb-0">
								&copy; 2023 - <a class='text-muted' href='dashboard-default.html'>Spark</a>
							</p>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<svg width="0" height="0" style="position:absolute">
		<defs>
			<symbol viewBox="0 0 512 512" id="ion-ios-pulse-strong">
				<path
					d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z">
				</path>
			</symbol>
		</defs>
	</svg>
	<script src="js/app.js"></script>

</body>


<!-- Mirrored from spark.bootlab.io/pages-blank by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Mar 2024 03:35:27 GMT -->
</html>