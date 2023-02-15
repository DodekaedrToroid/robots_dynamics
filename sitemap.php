<?php
    $_SERVER["DOCUMENT_ROOT"] = realpath(dirname(__FILE__)."/..");
    $DOCUMENT_ROOT = $_SERVER["DOCUMENT_ROOT"];
    define("NO_KEEP_STATISTIC", true);
    define("NOT_CHECK_PERMISSIONS", true);
    set_time_limit(0);
    $cities = array();

    require($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include/prolog_before.php");

//получение списка городов
    if (CModule::IncludeModule("iblock")) {
        $arFilter = array(
            "IBLOCK_ID" => 33,
            "ACTIVE" => "Y",
            "!PROPERTY_SUBDOMAIN_VALUE" => false,
        );
        $arSelect = array(
            "ID",
            "CODE",
            "NAME",
            "PROPERTY_SUBDOMAIN_VALUE"
        );
        $res = CIBlockElement::GetList(array("SORT"=>"asc"),$arFilter, false, false, $arSelect);
        while ($arEl = $res->Fetch()) {
            $cities[] = $arEl["PROPERTY_SUBDOMAIN_VALUE_VALUE"];
        }
    }

    echo "Get list city\n";

//получение карты сайта
    $sitemap_text = '<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
    $xml = simplexml_load_file($_SERVER['DOCUMENT_ROOT']."/sitemap.xml");
    $json = json_encode($xml);
    $array = json_decode($json,TRUE);

    foreach ($array['sitemap'] as $key => $value) {

        $validPath = changePath($value['loc']);

        $xml2 = simplexml_load_file($validPath);

        $json2 = json_encode($xml2);
        $array2 = json_decode($json2,TRUE);


        if ($array2['url'][0]['loc'] != ''){
            foreach ($array2['url'] as $key => $value) {

                $tmp = explode("/", $value['loc']);

                $sitemap_text .= "<url>";
                $sitemap_text .= "<loc>".$value['loc']."</loc>";
                $sitemap_text .= "<lastmod>".$value['lastmod']."</lastmod>";
                $sitemap_text .= "</url>";
            }
        }
    }

// замена на Document Root из за ошибки на этапе simplexml_load_file
    function changePath($path) {
        $path = str_replace('https://intexrussia.ru', $_SERVER['DOCUMENT_ROOT'], $path);
        return $path;
    }

    $sitemap_text .= "</urlset>";

    echo "Get sitemap\n";

//построение карт сайта для городов
    foreach ($cities as $city) {
        $dir = $_SERVER["DOCUMENT_ROOT"]."/sitemaps/".$city;
        $file = $dir."/sitemap.xml";
        if(!is_dir($dir)) mkdir($dir, 0755);
        $f = fopen($file,"w+");
        if ($city == "www") {

        } else {
            fwrite($f, str_replace("intexrussia.ru",$city,$sitemap_text));
        }
        fclose($f);
    }

    echo "Create dirs and sitemap for ru\n";

    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>