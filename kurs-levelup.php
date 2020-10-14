<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Повышение курса");
$APPLICATION->IncludeComponent(
	"japa:kurs.levelup", 
	".default", 
	array(
		"IBLOCK_ID_GROUP" => "29",
		"IBLOCK_ID_LESSON" => "40",
		"IBLOCK_ID_MEET" => "60",
		"IBLOCK_ID_MEET_PERSON" => "42",
		"COMPONENT_TEMPLATE" => ".default",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600"
	),
	false
);


require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>