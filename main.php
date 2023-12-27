<div class="card">
	<div class="announcement">
		<p>This is an important announcement!</p>
		<button class="close-button">x</button>
	</div>
</div>

<style>
	.card {
		width: 300px;
		height: 150px;
		background-color: #f2f2f2;
		border-radius: 10px;
		padding: 20px;
		opacity: 1;
		transition: opacity 0.5s ease-in-out;
	}

	.card.fade-out {
		opacity: 0;
	}

	.announcement {
		font-family: Arial, sans-serif;
		font-size: 16px;
		color: #333;
	}

	.close-button {
		background-color: #ccc;
		border: none;
		color: #fff;
		font-size: 14px;
		padding: 5px 10px;
		border-radius: 5px;
		cursor: pointer;
	}
</style>

<script>
	const closeButton = document.querySelector('.close-button');
const card = document.querySelector('.card');

closeButton.addEventListener('click', () => {
  card.classList.add('fade-out');
  setTimeout(() => {
    card.style.display = 'none';
  }, 500);
});
</script>
