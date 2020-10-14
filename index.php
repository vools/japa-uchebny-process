<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Учёт посещаемости");
?><?$APPLICATION->IncludeComponent(
	"japa:app.attendance",
	".default", 
Array()
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
