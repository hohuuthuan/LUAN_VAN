<div class="row border-bottom">
	<nav
		class="navbar navbar-static-top white-bg"
		role="navigation"
		style="margin-bottom: 0">
		<div class="navbar-header">
			<a
				class="navbar-minimalize minimalize-styl-2 btn btn-primary"
				href="#"><i class="fa fa-bars"></i>
			</a>
			<form
				role="search"
				class="navbar-form-custom"
				action="search_results.html">
				<div class="form-group">
					<!-- <input
						type="text"
						placeholder="Search for something..."
						class="form-control"
						name="top-search"
						id="top-search" /> -->
				</div>
			</form>
		</div>
		<ul class="nav navbar-top-links navbar-right">
			<li>
				<span class="m-r-sm text-muted welcome-message">Chào mừng bạn đến trang giao diện quản trị viên</span>
			</li>
			
			<li>
				<a href="<?php echo base_url('/'); ?>">
					<i class="fa fa-home"></i> Trở về trang chủ
				</a>
			</li>
			<li>
				<a href="<?php echo base_url('logout_admin'); ?>">
					<i class="fa fa-sign-out"></i> Đăng xuất
				</a>
			</li>
			<!-- <li>
				<a class="right-sidebar-toggle">
					<i class="fa fa-tasks"></i>
				</a>
			</li> -->
		</ul>
	</nav>
</div>