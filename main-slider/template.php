<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?

// Получаю данные о каждом сервисе
$arSelect = array("ID", "NAME", "CODE");
$arFilter = array("IBLOCK_ID" => 19, "ACTIVE_DATE" => "Y", "ACTIVE" => "Y");
$res = CIBlockElement::GetList(array(), $arFilter, false, array("nPageSize" => 50), $arSelect);
$serviceItems = array();
while ($ob = $res->GetNextElement()) {
    array_push($serviceItems, $ob->GetFields());
}
?>
<section class="main-slider">
    <div class="main-slider__wrapper">
        <div class="f-carousel" id="myCarousel">
            <? foreach ($arResult["ITEMS"] as $slide) : ?>
                <div class="f-carousel__slide">
                    <picture>
                        <source media="(max-width: 576px)" srcset="<?= CFile::GetPath($slide["PROPERTIES"]["SLIDE_PHOTOS_MOBILE"]["VALUE"]) ?>">
                        <source media="(min-width: 577px)" srcset="<?= CFile::GetPath($slide["PROPERTIES"]["SLIDE_PHOTOS"]["VALUE"]) ?>">
                        <img id="<?= $slide["PROPERTIES"]["SLIDE_PHOTOS"]["VALUE"] ?>" class="slide-photo" src="<?= CFile::GetPath($slide["PROPERTIES"]["SLIDE_PHOTOS"]["VALUE"]) ?>" alt="<?= $slide["PROPERTIES"]["SLIDE_PHOTOS"]["NAME"] ?>">
                    </picture>

                    <div class="slider-text-wrapper" style="position:absolute;">
                        <div class="slider-text__sticker" style="<? if (!$slide["PROPERTIES"]["SLIDE_TEXT_STICKER"]["VALUE"]) : ?>display:none;<? endif; ?>">
                            <span><?= $slide["PROPERTIES"]["SLIDE_TEXT_STICKER"]["VALUE"] ?></span>
                        </div>
                        <div class="slider-text__above" style="<? if (!$slide["PROPERTIES"]["SLIDE_TEXT_ABOVE_MAIN"]["VALUE"]) : ?>display:none;<? endif; ?>">
                            <span><?= $slide["PROPERTIES"]["SLIDE_TEXT_ABOVE_MAIN"]["VALUE"] ?></span>
                        </div>
                        <div class="slider-text__main" style="<? if (!$slide["PROPERTIES"]["SLIDE_TEXT_MAIN"]["VALUE"]) : ?>display:none;<? endif; ?>">
                            <span><?= $slide["PROPERTIES"]["SLIDE_TEXT_MAIN"]["VALUE"] ?></span>
                        </div>
                        <div class="slider-text__button" style="<? if (!$slide["PROPERTIES"]["SLIDE_TEXT_BUTTON"]["VALUE"]) : ?>display:none;<? endif; ?>">
                            <a href="<?= $slide["PROPERTIES"]["BUTTON_LINK"]["VALUE"] ?>"><?= $slide["PROPERTIES"]["SLIDE_TEXT_BUTTON"]["VALUE"] ?></a>
                        </div>
                    </div>

                    <div class="above-brand" style="position:absolute; <? if (!$slide["PROPERTIES"]["BRAND_PHOTO_ABOVE"]["VALUE"]) : ?>display:none;<? endif; ?>">
                        <img src="<?= CFile::GetPath($slide["PROPERTIES"]["BRAND_PHOTO_ABOVE"]["VALUE"]) ?>" alt="<?= $slide["PROPERTIES"]["BRAND_PHOTO_ABOVE"]["NAME"] ?>">
                    </div>

                    <div class="under-brands" style="position:absolute; <? if (!$slide["PROPERTIES"]["BRAND_PHOTO_UNDER"]["VALUE"]) : ?>display:none;<? endif; ?>">
                        <? foreach ($slide["PROPERTIES"]["BRAND_PHOTO_UNDER"]["VALUE"] as $photoUnder) : ?>
                            <img src="<?= CFile::GetPath($photoUnder) ?>" alt="<?= $slide["PROPERTIES"]["BRAND_PHOTO_UNDER"]["NAME"] ?>">
                        <? endforeach; ?>
                    </div>
                </div>
            <? endforeach; ?>
        </div>
        <div class="main-slider__bottom-menu" style="position: absolute;">
            <? foreach ($serviceItems as $servItem) : ?>
                <a href="/service/<?= $servItem["CODE"] ?>/"><?= $servItem["NAME"] ?></a>
            <? endforeach; ?>
        </div>
    </div>
</section>

<script>
    const container = document.getElementById("myCarousel");
    const options = {
        infinite: true,
        Autoplay: {
            timeout: 4000,
        },
    };

    new Carousel(container, options, {
        Autoplay,
    });

    // Ccылка на слайдер с кирпичами
    let brickSlide = document.getElementById("44389");
    // console.log(brickSlide);

    brickSlide.style.cursor = "pointer";
    brickSlide.addEventListener("touchstart", (event) => {
        event.preventDefault();
        window.location.href =
            "https://www.xn----ftbnabif5aechhnj6ewg.xn--p1ai/about";
    });
    brickSlide.addEventListener("click", () => {
        window.location.href =
            "https://www.xn----ftbnabif5aechhnj6ewg.xn--p1ai/about";
    });
</script>