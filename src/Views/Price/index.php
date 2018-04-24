	<main class="container">
		<div class="inner-page-title">
			<h1>Прайс-лист</h1>
			<ul class="breadcrumbs">
				<li>
					<a href="indexhtmlacademy.html">Главная</a>
				</li>
				<li class="current">
					Прайс-лист
				</li>
			</ul>
		</div>
		<div class="inner-content">
			<div class="big-heading">
				<h2>Истинно мужская классика</h2>
			</div>
			<div class="inner-columns">


				<div>
					<?php

						foreach($data as $row)
						{
							echo '<tr><td>'.$row['Year'].'</td><td>'.$row['Site'].'</td><td>'.$row['Description'].'</td></tr>';
						}			
					?>
	
				</div>
				
				<div class="inner-column-left">
					<h2>Мы используем только<br> лучшие средства:</h2>
					<ul class="custom-list-1">
						<li>Baxter of California</li>
						<li>Mr Natty</li>
						<li>Suavecito</li>
						<li>Malin+Goetz</li>
					</ul>
				</div>
				
				<div class="inner-column-right">
					<h2>Цены на услуги<br> наших мастеров:</h2>
					<table class="prices-table">
						<tr>
							<td>Стрижка</td>
							<td>1500 р.</td>
						</tr>
						<tr>
							<td>Стрижка бороды</td>
							<td>500 р.</td>
						</tr>
						<tr>
							<td>Накрутка усов</td>
							<td>350 р.</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="inner-columns text-columns">
				<h2>Несколько слов о нас:</h2>
				<div class="inner-column-content">
					<div class="inner-column-left">	
						<p class="short-text">
							Наша парикмахерская занимается исключительно мужскими стрижками. Стрижка каждого клиента для нас - это уникальная и продуманная до мелочей работа. Мы не работаем на количество, мы делаем качество.
						</p>
					</div>
					<div class="inner-column-right">
						<p class="short-text">
							Наша мастерская расположена в центре города, поэтому сделать стильную стрижку можно в любое время, даже в обеденный перерыв. Здесь вы можете погрузиться в удобную для вас атмосферу, чувствовать себя комфортно и свободно!
						</p>
					</div>
				</div>
			</div>
		</div>
	</main>
