<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<title>Каталог</title>
	<?php require_once('includes/links.php'); ?>
</head>
<body>

	<?php require_once('includes/header-inner.php'); ?>
	
	<div class="container">
		<h1>Средства для ухода</h1>
		<div class="brad-crumbs">
			<ul>
				<li><a href="#">Главная</a></li>
				<li><a href="#">Магазин</a></li>
				<li><span>Средства для ухода</span></li>
			</ul>
		</div>
	</div>
	
	<div class="container">	

		<div class="sidebar">
			<h3>Производители</h3>
			<div class="proprietor">
				<label>
					<input class="checkbox" type="checkbox" name="checkbox-side" checked>
					<span class="checkbox-custom"></span>
					<span class="label">Baxter of California</span>
				</label>
				<label>
					<input class="checkbox" type="checkbox" name="checkbox-side">
					<span class="checkbox-custom"></span>
					<span class="label">Mr Natty</span>
				</label>
				<label>
					<input class="checkbox" type="checkbox" name="checkbox-side">
					<span class="checkbox-custom"></span>
					<span class="label">Suavecito</span>
				</label>
				<label>
					<input class="checkbox" type="checkbox" name="checkbox-side">
					<span class="checkbox-custom"></span>
					<span class="label">Malin+Goetz</span>
				</label>
				<label>
					<input class="checkbox" type="checkbox" name="checkbox-side">
					<span class="checkbox-custom"></span>
					<span class="label">Murray's</span>
				</label>
				<label>
					<input class="checkbox" type="checkbox" name="checkbox-side">
					<span class="checkbox-custom"></span>
					<span class="label">American Crew</span>
				</label>
			</div><!-- proprietor -->

			<div class="group-product">
				<label>
					<input class="checkbox" type="radio" name="radio-side" checked>
					<span class="checkbox-custom"></span>
					<span class="label">Baxter of California</span>
				</label>
				<label>
					<input class="checkbox" type="radio" name="radio-side">
					<span class="checkbox-custom"></span>
					<span class="label">Mr Natty</span>
				</label>
				<label>
					<input class="checkbox" type="radio" name="radio-side">
					<span class="checkbox-custom"></span>
					<span class="label">Suavecito</span>
				</label>

				<button class="button-cont" type="button">показать</button>
			</div><!-- group-product -->

		</div><!-- sidebar -->

		<div class="catalog">

			<div class="catalog-item">
				<img src="#" alt="" width="" height="">
				<div class="product-title">
					<span>Набор для путешествий</span>
					<span>"Baxter of California"</span>
				</div>
				<div class="product-price">
					<span>2900 р</span>
					<button class="button-cont" type="button">купить</button>
				</div>
			</div>

			<div class="catalog-item">
				<img src="#" alt="" width="" height="">
				<div class="product-title">
					<span>Нувлажняющий кондиционер</span>
					<span>"Baxter of California"</span>
				</div>
				<div class="product-price">
					<span>2900 р</span>
					<button class="button-cont" type="button">купить</button>
				</div>
			</div>

			<div class="catalog-item">
				<img src="#" alt="" width="" height="">
				<div class="product-title">
					<span>Гель для волос</span>
					<span>"Suavesito"</span>
				</div>
				<div class="product-price">
					<span>2900 р</span>
					<button class="button-cont" type="button">купить</button>
				</div>
			</div>

			<div class="catalog-item">
				<img src="#" alt="" width="" height="">
				<div class="product-title">
					<span>Глина для укладки волос</span>
					<span>"American crew"</span>
				</div>
				<div class="product-price">
					<span>2900 р</span>
					<button class="button-cont" type="button">купить</button>
				</div>
			</div>

			<div class="catalog-item">
				<img src="#" alt="" width="" height="">
				<div class="product-title">
					<span>Глина для волос</span>
					<span>"American crew"</span>
				</div>
				<div class="product-price">
					<span>2900 р</span>
					<button class="button-cont" type="button">купить</button>
				</div>
			</div>

			<div class="catalog-item">
				<img src="#" alt="" width="" height="">
				<div class="product-title">
					<span>Набор для бритья</span>
					<span>"Baxter of California"</span>
				</div>
				<div class="product-price">
					<span>2900 р</span>
					<button class="button-cont" type="button">купить</button>
				</div>
			</div>

			<div class="pagination">
				<ul>
					<li><a href="#">1</a></li>
					<li><a class="active" href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
				</ul>
			</div>

		</div><!-- catalog -->

	</div><!-- container -->

	<?php require_once('includes/footer.php'); ?>

</body>
</html>
