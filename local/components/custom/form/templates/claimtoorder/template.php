<div class="hystmodal modal modal--size--md modal--form m-form-callback" id="form-callback" aria-hidden="true">
    <div class="hystmodal__wrap">
        <div class="hystmodal__window" role="dialog" aria-modal="true">
            <button data-hystclose class="hystmodal__close">
                <svg class="modal__close-icon">
                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/assets/icons/sprite-svg.svg#cross"/>
                </svg>
            </button>
            <div class="form-block">
                <div class="form-block__block-head">
                    <span class="form-block__title">Отправьте заявку на услугу</span>
                    <span class="form-block__subtitle">Наши специалисты свяжутся с вами в ближайшее время.</span>
                </div>
                <form class="form-block__form" novalidate="" data-validate-form="" data-validate-form-modal-window="#application-sent"
                      id="form_<?= $arParams['TOKEN'] ?>">
                    <div class="input" data-input="block-input">
                        <div class="input__block-input">
                            <input name="name" type="text" class="input__input" data-input="input" data-input-type="name" required minlength="2">
                            <span class="input__placeholder" data-input="placeholder">Имя</span>
                        </div>
                        <span class="input__message" data-input="message"></span>
                    </div>
                    <div class="input" data-input="block-input">
                        <div class="input__block-input">
                            <input name="phone" type="tel" class="input__input" data-input="input" data-input-type="tel" data-phone-mask="" required>
                            <span class="input__placeholder" data-input="placeholder">Телефон</span>
                        </div>
                        <span class="input__message" data-input="message"></span>
                    </div>
                    <input type="file" multiple name="files">
                    <button type="submit" class="btn btn--size--bg btn--theme--orange">
                        <span class="btn__text">Заказать</span>
                    </button>
                    <span class="form-block__privacy-policy">
                        Нажимая на кнопку, вы соглашаетесь с <a href="/privacy/" class="link-reset">Политикой конфиденциальности</a>
                    </span>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
if ($arParams['RECAPTCHA_ENABLED'] === 'Y') {
    include('script.recaptcha.php');
} else {
    include('script.php');
}
