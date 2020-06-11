<style>
	i {
		font-size: 200% !Important;
		color: white !Important;
	}

	li:hover {
		background-color: black !Important;
	}

	li:hover~i {
		color: blue Important;
	}
</style>
<nav class="ts-sidebar">
	<ul class="ts-sidebar-menu">

		<li class="ts-label">Main</li>
		<li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Panel</a></li>

		<li><a href="#"><i class="fa fa-files-o"></i> Marques</a>
			<ul>
				<li><a href="create-brand.php">Ajouter une marque</a></li>
				<li><a href="manage-brands.php">Gestion des marques</a></li>
			</ul>
		</li>
		<li><a href="#"><i class="fa fa-sitemap"></i> véhicules</a>
			<ul>
				<li><a href="post-avehical.php">Ajouet véhicules</a></li>
				<li><a href="manage-vehicles.php">Gestion des véhicules</a></li>
			</ul>
		</li>
		<li><a href="manage-bookings.php"><i class="fa fa-users"></i> Gestion réservation </a></li>
		<li><a href="manage-conactusquery.php"><i class="fa fa-desktop""></i> Gestion Contatez nous</a></li>
				<li><a href=" reg-users.php"><i class="fa fa-users"></i> Gestion uttilisateurs</a></li>
		<li><a href="update-contactinfo.php"><i class="fa fa-files-o"></i> Contact Info</a></li>
	</ul>
</nav>