<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<title>Bsale</title>
</head>
<body>
	<nav class="navbar navbar-light bg-secondary mb-2">
		<div class="container d-flex">
			<a class="navbar-brand" href="http://localhost:8000">Bsale Test</a>
			<form class="d-flex" action="">
				<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name='search'>
				<button class="btn btn-success" type="submit" >Search</button>
			</form>
		</div>
	</nav>
	<div class="container mt-5">
		<div class='row' id="cards"></div>
	</div>
</body>
</html>

<script>
		const API_URL = 'https://bsaletest-backend.herokuapp.com/products'

		const filter = document.location.search;

		fetch(`${API_URL}/${filter}`)
		.then((response) => response.json())
		.then((products) => {
			let data = '';
			products.map((product) => {
				data +=
				`<div class="col-md-4">
					<div class="card">
							<div class="text-center"> <img src="${product.url_image}" width="250" alt="${product.name}"> </div>
							<div class="text-center">
									<h5>${product.name}</h5> <span class="text-success">$${product.price}</span>
							</div>
							<button class="btn btn-outline-primary mt-2">Buy</button>
					</div>
			</div>`;
			});
			document.getElementById('cards').innerHTML = data;
		});
</script>

<style>
	body {
	background-color: #f6f7f9
}

.custom-badge {
	background-color: #343a40 !important;
	color: #fff;
	font-size: 11px;
	padding: 5px;
	padding-left: 11px;
	padding-right: 11px;
	border-radius: 7px
}

.card {
	border: none;
	padding: 15px;
	cursor: pointer
}

.time i {
	color: #cacacaa3
}</style>
