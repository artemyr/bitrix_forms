<?php
/**
 * @global $APPLICATION
 * @global $arResult
 * @global $arParams
 */
?>

<script type="application/javascript">
    `use strict`

    document.addEventListener("DOMContentLoaded", function (event) {
        document.querySelector(`#form_<?=$arParams['TOKEN']?>`).addEventListener("submit", function (event){
            event.preventDefault();
        })

        document.querySelector(`#form_<?=$arParams['TOKEN']?> *[type="submit"]`).addEventListener("click",((e) => {
            e.preventDefault()

            var arErrors = [];

            document.querySelectorAll(`#form_<?=$arParams['TOKEN']?> *[required]`).forEach(
                function (node, index) {
                    if (node.type === 'checkbox' && !node.checked) {
                        node.style.border = 'solid 1px #f31726'
                        arErrors.push('empty required fields: ' + node.name)
                    } else if (node.value === '') {
                        node.style.border = 'solid 1px #f31726'
                        arErrors.push('empty required fields: ' + node.name)
                    }
                }
            );

            if(arErrors.length > 0) {
                console.error(arErrors);
                return;
            }

            const formData = new FormData();

            formData.append(`TOKEN`, `<?=$arParams['TOKEN']?>`)
            formData.append(`DETAIL_URL`, window.location.pathname)
            formData.append(`NAME`, document.querySelector(`#form_<?=$arParams['TOKEN']?> *[name="name"]`).value)
            formData.append(`PHONE`, document.querySelector(`#form_<?=$arParams['TOKEN']?> *[name="phone"]`).value)

            var ins = document.querySelector(`#form_<?=$arParams['TOKEN']?> *[name="files"]`).files.length;
            for (var x = 0; x < ins; x++) {
                formData.append("FILES[]", document.querySelector(`#form_<?=$arParams['TOKEN']?> *[name="files"]`).files[x]);
            }

            const url = window.location.pathname;

            fetch(url,{
                method: 'POST',
                body: formData,
            })
                .then(response => response.json())
                .then((json) => {
                    if (json.status) {
                        console.log('закрыть модалку допустим')
                        document.addEventListener('click', () => location.reload())
                    } else {
                        alert('Произошла ошибка')
                    }
                })
                .catch(() => {
                    alert('Произошла ошибка')
                })
        }))
    })
</script>
