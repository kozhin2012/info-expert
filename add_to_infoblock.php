<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
\Bitrix\Main\Loader::includeModule('iblock');




//Генерация ссылки активации
function updateSecret($id, $date){
	$el = new CIBlockElement;
	$secret = $id * $date;
	$res = $el->SetPropertyValuesEx($id, false, array(69 => $secret, 68 => $date, 66 => $_POST['ClientName']));
	sendSecret($secret);
}


//Отправка письма с ссылкой активации
function sendSecret($secret){

	$email = $_POST['ClientEmail'];
	$title = "Подтверждение регистрации на http://demo32.info-expert.ru ".rand(1, 9999);
	$message = "Для подтверждения регистрации пройдите по ссылке: http://demo32.info-expert.ru/podtverzhdenie-zayavki-na-pochtu/activate_from_email.php?activation-code=" . (string)$secret;

	if(mail($email, $title, $message, "From: info-expert".rand(1, 9999).".ru")){
		echo "Для завершения регистрации пройдите по ссылке из письма.";
	}
	else{
		echo "Ошибка. Письмо с подтверждением не было отправлено. Для завершения регистрации свяжитесь с администратором.";
	}
}





if(isset($_POST['ClientEmail'])){

	$name = $_POST['ClientName'];
	$email = $_POST['ClientEmail'];
	$date = time();

	//Получаем все записи. Пытаемся найти запись с совпадением значения свойства email.
    $arSelect = array('ID', 'IBLOCK_ID','NAME','ACTIVE');
	$arFilter = array('IBLOCK_ID' => 9,'PROPERTY_67'=> $email);

	$rsElement = CIBlockElement::GetList(array('SORT' => 'ASC'), $arFilter, false, false, $arSelect);
	$outElements = array();

	while ($ob = $rsElement->GetNextElement()) {
		$arFields = $ob->GetFields();
		$arFields['props'] = $ob->GetProperties();
		$outElements[] = $arFields;
	}



	//Если нашли
	if(count($outElements) > 0){

		//Если нашли не активный, то перезаписываем $secret и дату и отправляем письмо.
		if($outElements[0]['ACTIVE'] == "N"){
			//echo "Нашли не активную запись";
			updateSecret($outElements[0]['ID'], $date);
		}
		//Если уже активный, ничего не делаем.
		else{
			echo "На указанный Вами email уже была произведена регистрация.";
		}
	}

	//Если не нашли, то делаем новую запись и отправляем письмо.
	else{
		$el = new CIBlockElement;

		$PROP = array();
		$PROP[66] = $name;
		$PROP[67] = $email;
		$PROP[68] = $date;
		$PROP[69] = "";
		
		$arLoadProductArray = Array(
		  "MODIFIED_BY"    => $USER->GetID(),
		  "IBLOCK_ID"      => 9,
		  "PROPERTY_VALUES"=> $PROP,
		  "NAME"           => "Регистрация",
		  "ACTIVE"         => "N"
		  );

		if($PRODUCT_ID = $el->Add($arLoadProductArray)){
			//echo "New ID: ".$PRODUCT_ID;
			updateSecret($PRODUCT_ID, $date);
		}
		else{
			echo "Ошибка. Не удалось создать запись на регистрацию. Попробуйте немного позже.";
		}
	}







}
?>