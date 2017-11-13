<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<title>Главная</title>
	<?php require_once('includes/links.php'); ?>
</head>
<body>

	<?php require_once('includes/header.php'); ?>

	<div class="content-wrap">

		<div class="container">

			<div class="cont-logo">
				<img src="" alt="" width="" height="">
			</div>

			<div class="advantage">
				<div class="advantage-box">
					<span>Быстро</span>
					<p>
						мы делаем свою работу быстро!
						два часа пролетят незаметно и Вы - счастливый
						обладатель стильной стрижки-минутки!
					</p>
				</div>	
				<div class="advantage-box">
					<span>Круто</span>
					<p>
						забудьте, как Вы стриглись раньше.
						мы сделаем из Вас звезду футбола или кино!
						во всяком случае внешне.
					</p>
				</div>	
				<div class="advantage-box">
					<span>Дорого</span>
					<p>
						наши мастера - профессионалы своего дела
						и не могут стоить дорого.
						к тому же, разве цена не дает определенный статус?
					</p>
				</div>	
			</div><!-- advantage -->
		</div><!-- container -->	

		<div class="container">
			<div class="infoblock">

				<div class="infoblock-item">
					<h3>Новости</h3>
					<p>
						<a href="#">
							Нам наконец завезли ягермайстер! теперь Вы можете
							пропустить стаканчик во время стрижки
						</a>
						<time datetime="2017-01-11">11 января</time>
					</p>
					<p>
						<a href="#">
							В нашей команде пополнение, Борис "Бритва", стригунец,
							обладатель множества титулов и наград пополнил наши стройные ряды
						</a>
						<time datetime="2017-01-18">18 января</time>
					</p>
					<a href="#">все новости</a>
				</div>

				<div class="infoblock-item">
					<h3>Фотогалерея</h3>
					<img src="" alt="" width="" height="">

					<div class="gallery-buttons">
						<button class="button-cont" type="button">назад</button>
						<button class="button-cont" type="button">вперед</button>
					</div>
				</div>

			</div><!-- infoblock -->

			<div class="infoblock">
				<div class="infoblock-item">
					<h3>Контактная информация</h3>
					<p>
						БАРБЕРШОП «БОРОДИНСКИЙ»<br>
						АДРЕС: Г. САНКТ-ПЕТЕРБУРГ, Б. КОНЮШЕННАЯ, Д. 19/8<br>
						<a href="tel:+74956660266">телефон: +7 (495) 666-02-66</a>
					</p>
					<p>
						Время работы:<br>
						пн - пт: с 10:00 до 22:00<br>
						сб - вс: с 10:00 до 19:00
					</p>
					<a class="button-cont" href="#">Как проехать</a>
					<a class="button-cont" href="#">Обратная связь</a>
				</div>

				<div class="infoblock-item">
					<h3>Записаться</h3>

					<p>
						Укажите желаемую дату и время и мы свяжемся
						с Вами для подтверждения брони
					</p>

					<form method="get" action="#">
						<span>Дата</span>
						<input type="text" name="date" placeholder="08.10.2017" required>

						<span>Время</span>
						<input type="text" name="time" placeholder="10:00" required>

						<span>Ваше имя</span>
						<input type="text" name="uname" placeholder="Борода" required>

						<span>Телефон</span>
						<input type="tel"  name="phone" placeholder="+7 123 456-78-90" required>

						<button class="button-cont" type="submit">Отправить</button>
					</form>

				</div>
			</div>

		</div><!-- container -->

	</div><!-- content-wrap -->




	<?php require_once('includes/footer.php'); ?>

</body>
</html>
