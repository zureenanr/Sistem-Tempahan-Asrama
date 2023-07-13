<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
			
				<li class="ts-label">Main</li>
				<?PHP if(isset($_SESSION['id']))
				{ ?>
					<li><a href="dashboard.php"><i class="fa fa-desktop"></i>Dashboard</a></li>

<li><a href="book-hostel.php"><i class="fa fa-file-o"></i>Tempah Asrama</a></li>
<li><a href="room-details.php"><i class="fa fa-file-o"></i>Butiran Bilik</a></li>
<li><a href="my-profile.php"><i class="fa fa-user"></i> Profil saya</a></li>
<li><a href="change-password.php"><i class="fa fa-files-o"></i>Change Password</a></li>
<li><a href="access-log.php"><i class="fa fa-file-o"></i>Log akses</a></li>
<?php } else { ?>
				
				<li><a href="registration.php"><i class="fa fa-files-o"></i> Pendaftaran Pengguna</a></li>
				<li><a href="index.php"><i class="fa fa-users"></i> Log masuk pengguna</a></li>
				<li><a href="admin"><i class="fa fa-user"></i> Log masuk Admin</a></li>
				<?php } ?>

			</ul>
		</nav>