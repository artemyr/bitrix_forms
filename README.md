# Модуль форм для битрикс

0. старый модуль отправки форм был написан на jquery, что требовало подключать его на сайт даже если он не нужен для других модулей
1. также дополнил класс компонента некоторым компонентом, который наполняет шаблон дополнительными переменными:
   1. адрес страницы с которой была отправлена форма
   2. название формы
   3. ссылка на элемент инфоблока, в котором находится запись, добавленная после отправки формы
   4. поля генерируются сами в переменную FIELDS

## Примеры
```
0. в скринах пример оформления почтового шаблона и не забудь создать тип события
1. в файле footer.php пример использования компонента
```