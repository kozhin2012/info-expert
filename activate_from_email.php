<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
\Bitrix\Main\Loader::includeModule('iblock');
$APPLICATION->SetTitle("Подтверждение регистрации");



function successAlert($msg){
	$successAlert = "<img src='img/success.png'><h2>Поздравляем!</h2><h4>".$msg."</h4>";
	echo $successAlert;
}

function errorAlert($msg){
	$errorAlert = "<img src='img/error.png'><h2>Ошибка!</h2><h4>".$msg."</h4>";
	echo $errorAlert;
}




//ПОЛУЧАЕМ SECRET и пытаемся найти его в базе.
if ($_GET['activation-code']){

	$secret = $_GET['activation-code'];

	//Получаем все записи. Пытаемся найти запись с совпадением значения свойства secret.
    $arSelect = array('ID', 'IBLOCK_ID','NAME','ACTIVE');
	$arFilter = array('IBLOCK_ID' => 9,'PROPERTY_69'=> $secret);

	$rsElement = CIBlockElement::GetList(array('SORT' => 'ASC'), $arFilter, false, false, $arSelect);
	$outElements = array();

	while ($ob = $rsElement->GetNextElement()) {
		$arFields = $ob->GetFields();
		$arFields['props'] = $ob->GetProperties();
		$outElements[] = $arFields;
	}



	//Если нашли, то активируем.
	if(count($outElements) > 0){

		if ($outElements[0]['ACTIVE'] == "N"){
			$el = new CIBlockElement;
		
			//Расшифруем ID записи
			$ELEMENT_ID = $outElements[0]['ID'];
		
			$arLoadProductArray = Array(
			  "ACTIVE" => "Y",  // Сделаем запись активной
			);
		
			if($res = $el->Update($ELEMENT_ID, $arLoadProductArray)){
				successAlert("Регистрация пройдена успешно!");
			}
			else{
				errorAlert("Для подтверждения регистрации свяжитесь с администрацией!");
			}
		}

		else{
			errorAlert("Запись уже подтверждена.");
		}

	}

	//Если не нашли, то пишем ошибку.
	else{
		errorAlert("Ссылка, по которой Вы совершили переход, не действительна.");
	}
}

//Если данные в GET не те, что ожидали
else{
	errorAlert("Ссылка, по которой Вы совершили переход, не действительна.");
}

?>

<style>
	.bx-content{
		display: flex;
		flex-direction: column;
		align-items: center;
		text-align: center;
	}

	.bx-content img{
		width: 120px;
    	margin-top: 40px;
		height:auto;
	}
</style>





<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>