

<head>
	<title>Dashboard with Icons</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
	<div class="container">
		<ul class="nav nav-tabs">
			<li class="nav-item">
				<a class="nav-link active" data-bs-toggle="tab" href="#home"><i class="fas fa-home"></i> Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="tab" href="#profile"><i class="fas fa-user"></i> Profile</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="tab" href="#messages"><i class="fas fa-envelope"></i> Messages</a>
			</li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane fade show active" id="home">
				<h3>Home</h3>
				<p>Welcome to the home tab!</p>
			</div>
			<div class="tab-pane fade" id="profile">
				<h3>Profile</h3>
				<p>This is your profile tab.</p>
			</div>
			<div class="tab-pane fade" id="messages">
				<h3>Messages</h3>
				<p>
					<div class="card">
						<div class="card-content">
							<span class="close-btn">&times;</span>
							<h2>Classes39 Team</h2>
							<p>If you have concerns or issues feel free to head over to the forum.</p>
						</div>
					</div>
				</p>
			</div>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
	<script>
		const closeBtn = document.querySelector('.close-btn');
		const card = document.querySelector('.card');

		closeBtn.addEventListener('click', () => {
			card.style.display = 'none';
		});
	</script>
</body>

</html>
