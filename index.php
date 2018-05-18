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

<h1 class="">Жюри2</h1>



<div class="row-010 wrap-10 -top grid-5 GRID-notebook-3 GRID-tablet-2  GRID-mobile-1 gap-5 GAP-notebook-5 GAP-tablet-5 GAP-mobile-5 -wide">

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
				<div class="descr_h1">Иванов Иван Иванович</div>
				<div class="descr_date">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
			</div>
		</a>
	</div>
    <div>
		<a class="row-10 -top serg_item" href="#">
			<div class="frame_item_image" style="background-image:url(img/ico_04.png);"></div>
			<div class="frame_item_descr col-10 -left">
				<div class="descr_h1">Иванова Ангелина Абдурахмановна</div>
				<div class="descr_date">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
			</div>
		</a>
	</div>
    <div>
		<a class="row-10 -top serg_item" href="#">
			<div class="frame_item_image" style="background-image:url(img/ico_05.png);"></div>
			<div class="frame_item_descr col-10 -left">
				<div class="descr_h1">Апу Нахасапимапетилон</div>
				<div class="descr_date">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
			</div>
		</a>
	</div>
    <div>
		<a class="row-10 -top serg_item" href="#">
			<div class="frame_item_image" style="background-image:url(img/ico_06.png);"></div>
			<div class="frame_item_descr col-10 -left">
				<div class="descr_h1">Иванов Иван</div>
				<div class="descr_date">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
			</div>
		</a>
	</div>
    <div>
		<a class="row-10 -top serg_item" href="#">
			<div class="frame_item_image" style="background-image:url(img/ico_07.png);"></div>
			<div class="frame_item_descr col-10 -left">
				<div class="descr_h1">Иванов Иван Петрович</div>
				<div class="descr_date">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
			</div>
		</a>
	</div>


</div>




<style>
	.form_elem_container{
		margin:10px;
	}

	.inputError{
		border: solid red;
    	color: red;
	}

	.errorDescription{
		color:red;
		font-size:.7em;
	}
</style>




<button class="serg_button form_init">Подать заявку</button>

<br><br><br><br>


<div class="SOURCE">
	<form class="serg_form disableSelect col-10">
		<h1>Регистрация</h1>

		<div class="row-01010 COL-10">
			<div class="col-10 form_elem_container">
				<label for="ClientName">Имя*:</label>
				<input type="text" name="ClientName" required>
				<div class="errorDescription"></div>
			</div>

			<div class="col-10 form_elem_container">
				<label for="ClientEmail">Email*:</label>
				<input type="email" name="ClientEmail" required>
				<div class="errorDescription"></div>
			</div>
		</div>
	
	
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

    .disableSelect {
        -webkit-user-select: none;  /* Chrome all / Safari all */
        -moz-user-select: none;     /* Firefox all */
        -ms-user-select: none;      /* IE 10+ */
        user-select: none;          /* Likely future */
        cursor: wait;
        pointer-events: none;
    }

    .disableSelect input,
    .disableSelect button{
        background-color: #9c9c9c!important;
    }




</style>

<div id="SERG_modal" class="col-010 -hide">
	<form class="serg_form disableSelect col-10">
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
	function refreshModalState(){
		$('input').val("");
		$('#SERG_modal').removeClass('disableSelect');
		$('.serg_form').removeClass('disableSelect');
		$('#SERG_modal').addClass('-hide');
	}



	function afterFormSubmit(thiss){

	  validateEmail(thiss);

	  var formdata = thiss.serialize();
	  var buttondata = thiss.find('button[name=ClientWhat]').text();
	  
	  console.log( formdata + "&ClientWhat=" + buttondata );

	  //Фризим модалку до получения ответа от сервера
	  $('#SERG_modal').addClass('disableSelect');
	  $('.serg_form').addClass('disableSelect');


        $.ajax({
			type: "POST",
			url: "add_to_infoblock.php",
			timeout:5000,
			data: formdata + "&ClientWhat=" + buttondata
		}).done(function (response) {

			console.log(response);
			refreshModalState();

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

		}).fail(function(jqXHR, textStatus){

			refreshModalState();

			swal({
				type: "error",
				title: "<small>Ошибка!</small>",
				text: "Не удалось зарегистрироваться.",
				html: true
			});
		});

	}


	//Дополнительная валидация email
	function validateEmail(thiss){
		var emailvalue = thiss.find('input[name=ClientEmail]').val();
		var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
		if(pattern.test(emailvalue)){
			return "OK";
		}
		else{
			return "NO";
		}
	}



	//ВАЛИДАЦИЯ ФОРМЫ START
	$( ".serg_form" ).on( "submit", function( event ) {
		event.preventDefault();
		var thiss = $( this );

		if(validateEmail(thiss) == "OK"){
			afterFormSubmit(thiss);
		}
		else{
			swal({
				type: "error",
				title: "<small>Ошибка!</small>",
				text: "Введённый email не корректен.",
				html: true
			});
		}

	});
	//ВАЛИДАЦИЯ ФОРМЫ END









$( document ).ready(function() {

    console.log("ready!");

	//Когда всё загрузилось разблокируем формы
	refreshModalState();


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