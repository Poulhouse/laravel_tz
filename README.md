# laravel_tz
1. Развернуть Laravel версии 8. 
Развернуть можно где угодно. Можно создать аккаунт на бегете. Также можно это сделать на локальной машине. Все равно как (docker, open server, xampp и т.д.) . Обязательно подключаем Базу данных - MySQL. В проекте обязаны присутствовать миграции.

2. После того как будет развернут фреимворк, надо создать 2 страницы - это главная и страница новостей. Главная страница уже будет, но для новостей должен быть свой роут. 

- Ссылку на страницу новостей надо вывести на главную страницу. 
- Все новости, соответственно, должны храниться в базе данных в своей таблице. Новости должны содержать поля - заголовок  и описание. Обязательное поле - только название. 
- Соответсвенно, таблица новостей должна быть сделана через миграции.

- Детальную страницу делать не надо. 

3. Наполнить новости надо используя сиды, количеством штук - 20. 
