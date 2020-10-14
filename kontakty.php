<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?><?$APPLICATION->IncludeComponent(
	"bitrix:crm.contact.menu",
	"",
	Array(
		"ELEMENT_ID" => $_REQUEST["contact_id"],
		"TYPE" => "list"
	)
);?><br>
<?$APPLICATION->IncludeComponent(
	"bitrix:crm.contact.list",
	"",
	Array(
		"CONTACT_COUNT" => "40"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>