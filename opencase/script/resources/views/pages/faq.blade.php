
@extends('layout')

@section('content')
	<div class="width">
		<div class="steps">
			<div class="title">Как выиграть вещь?</div>
			<ul>
				<li><div>Шаг #1</div>Авторизуйтесь через Steam и перейдите на страницу аккаунта кликом по нику.</li>
				<li><div>Шаг #2</div>Разыграйте свой первый обучающий билет на <a href="#">главной странице</a>.</li>
				<li><div>Шаг #3</div>На <a href="#">странице аккаунта</a> введите Trade-ссылку (<a href="#">что это?</a>) — так вы сможете моментально получать выигранные предметы.</li>
				<li><div>Шаг #4</div><a href="#">Пополните счёт</a> на сайте любым удобным способом.</li>
				<li><div>Шаг #5</div>Откройте 3 из 9 одинаковых полей в билете и получите лучшую вещь в кейсе! При этом вы в любом случае получаете вещь из выбранного "кейса", т.к. только <span>на CARDUP.ONE вы можете открыть слот с гарантированным выигрышем</span>. На CARDUP.ONE решает не только удача, но и ваша интуиция.</li>
			</ul>
		</div>
		<div class="faq">
			<div class="title">FAQ - часто задаваемые вопросы</div>
			<div class="block">
				<div class="question" onclick="$('#nswr1').slideToggle('hide');">Пополнил счет, а деньги не пришли. Что делать?</div>
				<div class="answer" id="nswr1">Обычно баланс на сайте пополняется моментально, могут быть задержки на пополнение c QIWI (не пишите модераторам лишний раз, деньги точно поступят!). Но если через несколько часов вы так и не получили деньги на счёт, то сообщите модераторам подробные данные платежа.</div>
			</div>
			<div class="block">
				<div class="question" onclick="$('#nswr2').slideToggle('hide');">У меня есть деньги на Steam аккаунте, а тут они не отображаются. Почему?</div>
				<div class="answer" id="nswr2">Деньги Steam не действуют на CaseUp.One. Пополнять баланс необходимо отдельно.</div>
			</div>
			<div class="block">
				<div class="question" onclick="$('#nswr3').slideToggle('hide');">Открыл 3 слота, появился дополнительный ход, но не хватило денег. Положил на счёт, а билет пропал!</div>
				<div class="answer" id="nswr3">Билет не пропал - просто кликните по любому кейсу на главной странице и у вас откроется страница с недоигранным билетом.</div>
			</div>
			<div class="block">
				<div class="question" onclick="$('#nswr4').slideToggle('hide');">Не загружается билет/все слоты белого цвета, что делать?</div>
				<div class="answer" id="nswr4">Прежде всего, проверьте скорость подключения к сети Интернет или просто немного подождите, пока билет полностью прогрузится! Попробуйте открыть билет в другом браузере. Последний вариант - выйдите из аккаунта, перелогиньтесь в Steam и зайдите на сайт.</div>
			</div>
			<div class="block">
				<div class="question" onclick="$('#nswr5').slideToggle('hide');">После открытия слота предмет иногда показывается не сразу, почему?</div>
				<div class="answer" id="nswr5">Чтобы обеспечить абсолютную честность в отрытии слотов, весь набор билетов с их содержимым хранится на сервере. Таким образом, когда вы начинаете стирать слот, запрос на сервер о содержимом ячейки может выполняться с задержкой, и вы заметите некоторый лаг в появлении предмета.</div>
			</div>
			<div class="block">
				<div class="question" onclick="$('#nswr6').slideToggle('hide');">Почему некоторые билеты недоступны для открытия? Пишет ошибку "В данный момент на ботах нет вещей для выбранного билета. Попробуйте позже."</div>
				<div class="answer" id="nswr6">Для обеспечения лучшего дропа, билеты всегда должны содержать в себе ВСЕ предметы, которые перечислены на странице билета. Боты могут не успевать закупаться всеми нужными предметами в нужное время, либо на торговой площадке отсутствуют некоторые из необходимых для этого билета предметы.</div>
			</div>
			<div class="block">
				<div class="question" onclick="$('#nswr7').slideToggle('hide');">После открытия слота предмет иногда показывается не сразу, почему?</div>
				<div class="answer" id="nswr7">Обычно баланс на сайте пополняется моментально, могут быть задержки на пополнение c QIWI (не пишите модераторам лишний раз, деньги точно поступят!). Но если через несколько часов вы так и не получили деньги на счёт, то сообщите модераторам подробные данные платежа.</div>
			</div>
			<div class="block">
				<div class="question" onclick="$('#nswr8').slideToggle('hide');">Я выиграл, но вещь не приходит, что за развод?!</div>
				<div class="answer" id="nswr8">Зайдите в свой профиль и кликните по ссылке "ЗАБРАТЬ" на интересующем вас предмете.</div>
			</div>
			<div class="block">
				<div class="question" onclick="$('#nswr9').slideToggle('hide');">Не могу получить вещи с бота, пишет ошибку 11 (а также при других ошибках Steam, или если бот отменяет трейд сразу после того, как кинул обмен)</div>
				<div class="answer" id="nswr9">К сожалению, Steam не самая оптимизированная система и часто даёт сбои. 99.9% ошибок при передаче предмета происходит по вине неработающего функционала Steam. Стоит пробовать выводить вещь до тех пор, пока предмет не окажется в вашем инвентаре.</div>
			</div>
			<div class="block">
				<div class="question" onclick="$('#nswr10').slideToggle('hide');">При попытке обменяться мне показывается предупреждение, что другие пользователи пожаловались на бота. В чем проблема?</div>
				<div class="answer" id="nswr10">Наши недоброжелатели из сообщества Steam жалуются на ботов, что может приводить к подобным проблемам. Знайте, что данное предупреждение никак не влият на работу бота и ваш обмен, смело обменивайтесь и получайте свои предметы.</div>
			</div>
		</div>
	</div>
@endsection