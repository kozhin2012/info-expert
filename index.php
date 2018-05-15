<?
/*require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Подтверждение заявки на почту");*/
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/framework.css" >
	<link rel="stylesheet" type="text/css" href="css/main.css" >
	<link rel="stylesheet" type="text/css" href="sweetalert/sweetalert.css" >

</head>
<body class="col-10 -helper1">


<div class="col-10 -wide">

<h1 class="">Жюри</h1>


<div class="row-10 wrap-10 grid-5 GRID-tablet-2  GRID-mobile-1 gap-5 GAP-tablet-5 GAP-mobile-5 -wide">

    <div>
		<a class="row-10 -top serg_item" href="#">
			<div class="frame_item_image" style="background-image:url(img/ico_01.png);"></div>
			<div class="frame_item_descr col-10 -left">
				<div class="descr_h1">Иванов Иван</div>
				<div class="descr_date">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
			</div>
		</a>
	</div>
    <div>
		<a class="row-10 -top serg_item" href="#">
			<div class="frame_item_image" style="background-image:url(img/ico_02.png);"></div>
			<div class="frame_item_descr col-10 -left">
				<div class="descr_h1">Иванов Иван</div>
				<div class="descr_date">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
			</div>
		</a>
	</div>
    <div>
		<a class="row-10 -top serg_item" href="#">
			<div class="frame_item_image" style="background-image:url(img/ico_03.png);"></div>
			<div class="frame_item_descr col-10 -left">
				<div class="descr_h1">Иванов Иван</div>
				<div class="descr_date">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
			</div>
		</a>
	</div>
    <div>
		<a class="row-10 -top serg_item" href="#">
			<div class="frame_item_image" style="background-image:url(img/ico_04.png);"></div>
			<div class="frame_item_descr col-10 -left">
				<div class="descr_h1">Иванов Иван</div>
				<div class="descr_date">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
			</div>
		</a>
	</div>
    <div>
		<a class="row-10 -top serg_item" href="#">
			<div class="frame_item_image" style="background-image:url(img/ico_05.png);"></div>
			<div class="frame_item_descr col-10 -left">
				<div class="descr_h1">Иванов Иван</div>
				<div class="descr_date">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
			</div>
		</a>
	</div>
	<div class="-HIDE"></div>
    <div>
		<a class="row-10 -top serg_item" href="#">
			<div class="frame_item_image" style="background-image:url(img/ico_06.png);"></div>
			<div class="frame_item_descr col-10 -left">
				<div class="descr_h1">Иванов Иван</div>
				<div class="descr_date">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
			</div>
		</a>
	</div>
	<div class="-HIDE"></div>
    <div>
		<a class="row-10 -top serg_item" href="#">
			<div class="frame_item_image" style="background-image:url(img/ico_07.png);"></div>
			<div class="frame_item_descr col-10 -left">
				<div class="descr_h1">Иванов Иван</div>
				<div class="descr_date">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
			</div>
		</a>
	</div>
	<div class="-HIDE"></div>

</div>









<button class="serg_button form_init">Подать заявку</button>

<br><br><br><br>


<div class="SOURCE">
	<form class="serg_form col-10">
		<h1>Регистрация</h1>

		<label for="ClientName">Имя:</label>
		<input type="text" name="ClientName" required>
	
		<label for="ClientEmail">Email:</label>
		<input type="email" name="ClientEmail" required>
	
	
		<button class="serg_button form_sub" name="ClientWhat" type="submit">Зарегистрироваться</button>
	</form>
</div>

<br><br><br><br>


</div>

<style>
	#SERG_modal{
    position: fixed;
    min-width: 300px;
    width: 100vw;
	max-width:100vw;
    min-height: 100%;
    background: rgba(0, 0, 0, 0.4);
    z-index: 9999999;
    margin: 0!important;
    padding: 0!important;
	}

	#SERG_modal form{
		max-width: 800px;
		width: 90%;
		background-color: white;
		border-radius: 10px;
		padding: 50px;
	}
</style>

<div id="SERG_modal" class="col-010 -hide">
	<form class="serg_form col-10">
		<h1>Регистрация</h1>

		<label for="ClientName">Имя:</label>
		<input type="text" name="ClientName" required>
	
		<label for="ClientEmail">Email:</label>
		<input type="email" name="ClientEmail" required>
	

		<button class="serg_button form_sub" name="ClientWhat" type="submit">Зарегистрироваться</button>

	</form>
</div>



<!-- JQuery -->
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="sweetalert/sweetalert.min.js"></script>




<script>
$( document ).ready(function() {

    console.log("ready!");


	function afterFormSubmit(thiss){

	  var formdata = thiss.serialize();
	  var buttondata = thiss.find('button[name=ClientWhat]').text();
	  
	  console.log( formdata + "&ClientWhat=" + buttondata );

	  $('#SERG_modal').addClass('-hide');
	  $('input').val("");


		$.ajax({
			type: "POST",
			url: "add_to_infoblock.php",
			data: formdata + "&ClientWhat=" + buttondata
		}).done(function (response) {
			console.log(response);

			if(response == "Для завершения регистрации пройдите по ссылке из письма."){
				swal({
					type: "success",
					title: "<small>Поздравляем!</small>",
					text: response,
					html: true
				});
			}
			else{
				swal({
					type: "error",
					title: "<small>Ошибка!</small>",
					text: response,
					html: true
				});
			}

		});

	}





	//САБМИТ ОТПРАВКИ ФОРМЫ START
	$( ".serg_form" ).on( "submit", function( event ) {
		event.preventDefault();
		var thiss = $( this );
		afterFormSubmit(thiss);
	});

	//Закрываем модалку при скролле
	$(window).scroll(function() {
		$('#SERG_modal').addClass('-hide');
	});



	//Вызываем модалку
	$('.form_init').click(function () {
		$('#SERG_modal').removeClass('-hide');
	});





	//Убираем модалку при клике вне формы
	$('#SERG_modal').click(function (e) {
		//e.preventDefault();

		var div = $("#SERG_modal .serg_form"); // тут указываем ID элемента
		if (!div.is(e.target) // если клик был не по нашему блоку
		    && div.has(e.target).length === 0) { // и не по его дочерним элементам
			$("#SERG_modal").addClass('-hide'); // скрываем его
		}
	});






});
</script>


</body>
</html>
<?
/*
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
*/
?>