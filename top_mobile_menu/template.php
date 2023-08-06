<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?
$arSelect = array("ID", "NAME");
$arFilter = array("IBLOCK_ID" => 2, "ACTIVE_DATE" => "Y", "ACTIVE" => "Y");
$res = CIBlockElement::GetList(array(), $arFilter, false, array("nPageSize" => 50), $arSelect);
$topMenuItems = array();

while ($prop_fields = $res->GetNextElement()) {
	array_push($topMenuItems, $prop_fields->GetFields());
}

$filledItems = array();
foreach ($topMenuItems as $id) {
	$arFilterLinks = array("IBLOCK_ID" => 2, "ID" => $id["ID"]);
	$res1 = CIBlockElement::GetList(array(), $arFilterLinks);
	if ($ob = $res1->GetNextElement()) {; // переходим к след элементу, если такой есть
		$arProps = $ob->GetProperties(); // свойства элемента
		array_push($id, $arProps);
		array_push($filledItems, $id);
	}
}

?>



<div class="menu_burger">
	<div class="menu_burger_container">
		<div class="close_menu">
			<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
				<path d="M13.8809 12.5008L24.7137 1.6679C25.0951 1.2865 25.0951 0.668141 24.7137 0.286794C24.3323 -0.0945524 23.714 -0.0946013 23.3326 0.286794L12.4997 11.1197L1.6669 0.286794C1.28551 -0.0946013 0.66715 -0.0946013 0.285803 0.286794C-0.0955443 0.66819 -0.0955931 1.28655 0.285803 1.6679L11.1186 12.5007L0.285803 23.3336C-0.0955931 23.715 -0.0955931 24.3334 0.285803 24.7147C0.476476 24.9054 0.726427 25.0007 0.976378 25.0007C1.22633 25.0007 1.47623 24.9054 1.66695 24.7147L12.4997 13.8819L23.3326 24.7147C23.5233 24.9054 23.7732 25.0007 24.0232 25.0007C24.2731 25.0007 24.523 24.9054 24.7137 24.7147C25.0951 24.3333 25.0951 23.715 24.7137 23.3336L13.8809 12.5008Z" fill="white" />
			</svg>
		</div>
		<a class="menu_burger_item" href="/">Главная</a>

		<div class="burger-top-menu">
			<? foreach ($filledItems as $index => $menuItem) : ?>
				<? if ($menuItem["NAME"] != "КИРПИЧИ") : ?>
					<details style="order:<?= $index ?>">
						<summary class="burger-menu-name"><?= $menuItem["NAME"] ?></summary>
						<div class="burger-menu-links">
							<a href="<?= $menuItem[0]["ATTR_URL_1"]["VALUE"] ?>" style="<? if ($menuItem[0]["ATTR_URL_1"]["VALUE"] == "") : ?>display:none;<? endif ?>"><? if (substr(trim($menuItem[0]["ATTR_NAME_URL_1"]["VALUE"]), 1, 1) == " ") : ?><?= substr(trim($menuItem[0]["ATTR_NAME_URL_1"]["VALUE"]), 1) ?><? else : ?><?= trim($menuItem[0]["ATTR_NAME_URL_1"]["VALUE"]) ?><? endif ?></a>
							<a href="<?= $menuItem[0]["ATTR_URL_2"]["VALUE"] ?>" style="<? if ($menuItem[0]["ATTR_URL_2"]["VALUE"] == "") : ?>display:none;<? endif ?>"><? if (substr(trim($menuItem[0]["ATTR_NAME_URL_2"]["VALUE"]), 1, 1) == " ") : ?><?= substr(trim($menuItem[0]["ATTR_NAME_URL_2"]["VALUE"]), 1) ?><? else : ?><?= trim($menuItem[0]["ATTR_NAME_URL_2"]["VALUE"]) ?><? endif ?></a>
							<a href="<?= $menuItem[0]["ATTR_URL_3"]["VALUE"] ?>" style="<? if ($menuItem[0]["ATTR_URL_3"]["VALUE"] == "") : ?>display:none;<? endif ?>"><? if (substr(trim($menuItem[0]["ATTR_NAME_URL_3"]["VALUE"]), 1, 1) == " ") : ?><?= substr(trim($menuItem[0]["ATTR_NAME_URL_3"]["VALUE"]), 1) ?><? else : ?><?= trim($menuItem[0]["ATTR_NAME_URL_3"]["VALUE"]) ?><? endif ?></a>
							<a href="<?= $menuItem[0]["ATTR_URL_4"]["VALUE"] ?>" style="<? if ($menuItem[0]["ATTR_URL_4"]["VALUE"] == "") : ?>display:none;<? endif ?>"><? if (substr(trim($menuItem[0]["ATTR_NAME_URL_4"]["VALUE"]), 1, 1) == " ") : ?><?= substr(trim($menuItem[0]["ATTR_NAME_URL_4"]["VALUE"]), 1) ?><? else : ?><?= trim($menuItem[0]["ATTR_NAME_URL_4"]["VALUE"]) ?><? endif ?></a>
							<a href="<?= $menuItem[0]["ATTR_URL_5"]["VALUE"] ?>" style="<? if ($menuItem[0]["ATTR_URL_5"]["VALUE"] == "") : ?>display:none;<? endif ?>"><? if (substr(trim($menuItem[0]["ATTR_NAME_URL_5"]["VALUE"]), 1, 1) == " ") : ?><?= substr(trim($menuItem[0]["ATTR_NAME_URL_5"]["VALUE"]), 1) ?><? else : ?><?= trim($menuItem[0]["ATTR_NAME_URL_5"]["VALUE"]) ?><? endif ?></a>
							<a href="<?= $menuItem[0]["ATTR_URL_6"]["VALUE"] ?>" style="<? if ($menuItem[0]["ATTR_URL_6"]["VALUE"] == "") : ?>display:none;<? endif ?>"><? if (substr(trim($menuItem[0]["ATTR_NAME_URL_6"]["VALUE"]), 1, 1) == " ") : ?><?= substr(trim($menuItem[0]["ATTR_NAME_URL_6"]["VALUE"]), 1) ?><? else : ?><?= trim($menuItem[0]["ATTR_NAME_URL_6"]["VALUE"]) ?><? endif ?></a>
							<a href="<?= $menuItem[0]["ATTR_URL_7"]["VALUE"] ?>" style="<? if ($menuItem[0]["ATTR_URL_7"]["VALUE"] == "") : ?>display:none;<? endif ?>"><? if (substr(trim($menuItem[0]["ATTR_NAME_URL_7"]["VALUE"]), 1, 1) == " ") : ?><?= substr(trim($menuItem[0]["ATTR_NAME_URL_7"]["VALUE"]), 1) ?><? else : ?><?= trim($menuItem[0]["ATTR_NAME_URL_7"]["VALUE"]) ?><? endif ?></a>
							<a href="<?= $menuItem[0]["ATTR_URL_8"]["VALUE"] ?>" style="<? if ($menuItem[0]["ATTR_URL_8"]["VALUE"] == "") : ?>display:none;<? endif ?>"><? if (substr(trim($menuItem[0]["ATTR_NAME_URL_8"]["VALUE"]), 1, 1) == " ") : ?><?= substr(trim($menuItem[0]["ATTR_NAME_URL_8"]["VALUE"]), 1) ?><? else : ?><?= trim($menuItem[0]["ATTR_NAME_URL_8"]["VALUE"]) ?><? endif ?></a>
							<a href="<?= $menuItem[0]["ATTR_URL_9"]["VALUE"] ?>" style="<? if ($menuItem[0]["ATTR_URL_9"]["VALUE"] == "") : ?>display:none;<? endif ?>"><? if (substr(trim($menuItem[0]["ATTR_NAME_URL_9"]["VALUE"]), 1, 1) == " ") : ?><?= substr(trim($menuItem[0]["ATTR_NAME_URL_9"]["VALUE"]), 1) ?><? else : ?><?= trim($menuItem[0]["ATTR_NAME_URL_9"]["VALUE"]) ?><? endif ?></a>
						</div>
					</details>
				<? else : ?>
					<a style="order:3 !important; color:white;" href="https://www.xn----ftbnabif5aechhnj6ewg.xn--p1ai/about">
						<summary class="burger-menu-name no-dropdown"><?= $menuItem["NAME"] ?></summary>
					</a>
				<? endif; ?>
			<? endforeach ?>
		</div>
		<?
		foreach ($arResult as $arItem) :
			if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
				continue;
		?>
			<a class="menu_burger_item" href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
		<? endforeach ?>
		<div class="menu_burger_item">
			<a class="menu_burger_number" href="tel:<? $APPLICATION->IncludeFile(SITE_DIR . "include/number/number_8800_wrap.php", array(), array("MODE" => "html", 'SHOW_BORDER' => false)); ?>">
				<? $APPLICATION->IncludeFile(SITE_DIR . "include/number/number_8800_wrap.php", array(), array("MODE" => "html", "NAME" => 'номер телефона', 'SHOW_BORDER' => false)); ?>
			</a>
			<div class="menu_burger_number info">Звонок бесплатный</div>
		</div>
		<div class="menu_burger_item">
			<div class="menu_burger_number info">Пятигорск</div>
			<a class="menu_burger_number" href="tel:<? $APPLICATION->IncludeFile(SITE_DIR . "include/number/number_8879_wrap.php", array(), array("MODE" => "html", 'SHOW_BORDER' => false)); ?>">
				<? $APPLICATION->IncludeFile(SITE_DIR . "include/number/number_8879_wrap.php", array(), array("MODE" => "html", "NAME" => 'номер телефона', 'SHOW_BORDER' => false)); ?>
			</a>
			<div class="menu_burger_number info">Ставрополь</div>
			<a class="menu_burger_number" href="tel:<? $APPLICATION->IncludeFile(SITE_DIR . "include/number/number_8652_wrap.php", array(), array("MODE" => "html", 'SHOW_BORDER' => false)); ?>">
				<? $APPLICATION->IncludeFile(SITE_DIR . "include/number/number_8652_wrap.php", array(), array("MODE" => "html", "NAME" => 'номер телефона', 'SHOW_BORDER' => false)); ?>
			</a>
		</div>
		<div class="menu_burger_item">
			<button class="btn btn-white" data-toggle="modal" data-target="#ModalFeedback">
				Заказать обратный звонок</button>
		</div>
		<div class="menu_burger_item">
			<? $APPLICATION->IncludeFile(SITE_DIR . "include/contacts/working_hours.php", array(), array("MODE" => "html", 'NAME' => 'график работы', 'SHOW_BORDER' => true)); ?>
		</div>
	</div>
</div>