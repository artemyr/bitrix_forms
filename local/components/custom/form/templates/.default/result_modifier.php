<?php

if (\Bitrix\Main\Loader::includeModule("iblock")) {
    $property_enums = CIBlockPropertyEnum::GetList(array("SORT" => "ASC"), array("IBLOCK_ID" => $arParams["IBLOCK_ID"], "CODE" => "SELECT"));
    while ($enum_fields = $property_enums->GetNext()) {
        $arResult["PROPERTY_SELECT"][$enum_fields["ID"]] = $enum_fields["VALUE"];
    }
};