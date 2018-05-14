<?
/*require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Подтверждение заявки на почту");*/
?><!DOCTYPE HTML>
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

<h1 class="">Жюри2</h1>


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

<h1>Регистрация</h1>
<div class="SOURCE">
	<form class="serg_form col-10">

		<label for="ClientName">Имя:</label>
		<input id="ClientName" type="text" name="ClientName" required>
	
		<label for="ClientEmail">Email:</label>
		<input id="ClientEmail" type="email" name="ClientEmail" required>
	
	
		<button class="serg_button form_sub" name="ClientWhat" type="submit">Зарегистрироваться</button>
	</form>
</div>

<br><br><br><br>


</div>





<!-- JQuery -->
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="sweetalert/sweetalert.min.js"></script>



<script>
$( document ).ready(function() {

    console.log("ready!");


	//САБМИТ ОТПРАВКИ ФОРМЫ START
	$( ".serg_form" ).on( "submit", function( event ) {
	  event.preventDefault();
	  
	  var thiss = $( this );
	  
	  var formdata = thiss.serialize();
	  var buttondata = thiss.find('button[name=ClientWhat]').text();
	  
	  console.log( formdata + "&ClientWhat=" + buttondata );
	 

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
	
	});





/*КЛИК ПО ОТПРАВКЕ ФОРМЫ ИЗ МОДАЛЬНОГО ОКОШКА*/
$(document).on('click', '.sweet-alert .form_sub', function (event) {
	event.preventDefault();
	
	console.log($( this ));
	var thiss = $( this ).closest("form");
	console.log(thiss);

});




var formHtml = $(".SOURCE").html();
$('.form_init').click(function () {

	swal({
		title: 'Регистрация',
		html: true,
		text: formHtml,
		showCancelButton: false,
		showConfirmButton: false,
		allowOutsideClick: true
	})


});




});
</script>


</body>
</html><?
/*
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
*/
?>
