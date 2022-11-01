<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$APPLICATION->IncludeComponent(
    "custom:form",
    "claimtoorder",
    array(
        'IBLOCK_ID' => FORM_IB,
        'IBLOCK_TYPE' => FORM_IB_TYPE,
        'MAIL_EVENT' => 'FORM_SENDED_1',
        'FORM_NAME' => "Заявка из формы - Остались вопросы?",
        'RECAPTCHA_ENABLED' => $GLOBALS['config']['recaptcha_enabled'],
        'RECAPTCHA_PUBLIC_KEY' => $GLOBALS['config']['recaptcha_public'],
        'RECAPTCHA_PRIVATE_KEY' => $GLOBALS['config']['recaptcha_private'],
        'ACTIVE' => 'Y',
        'TOKEN' => 'ask_answer',
        'PROPS' => array(
            'NAME',
            'EMAIL',
            'MESSAGE',
            'FILES,FILES',
            'DETAIL_URL',
        ),
    )
); ?>
