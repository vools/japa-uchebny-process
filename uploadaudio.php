<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Загрузка аудио файлов");
$APPLICATION->IncludeComponent(
	"japa:upload.audio", 
	".default", 
	array(
		"IBLOCK_ID" => "31",
		"COMPONENT_TEMPLATE" => ".default",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CLOUDSTORE_NAME" => "japaschool-mp3-storage"
	),
	false
);


require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>