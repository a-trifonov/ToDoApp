# Тестовое задание (Трифонов А.А.)

Написать приложение "todo app" на zend2 / vue

Приложение должно быть организовано как frontend на vue + restapi app на zend2

Структура записей todo - заголовок, дата, текст заметки

Операции: добавление, удаление, редактирование, вывод списка заметок

Требования к проекту в целом: github, нормальная история коммитов, README.md с описанием как запустить

Требования к бэкэнду: подключить codeception, faker, muffin; вся api функциональность должна быть покрыта тестами

Опционально: docker, docker-compose

### Установка и запуск приложения

cd /var/www

git clone https://github.com/a-trifonov/ToDoApp.git

composer install

docker-compose up -d --build

После запуска контейнеров переходим на адрес http://localhost:8080

### Что изучил в процессе выполнения тестового задания

Изучил основы применения vue.js и axios.js для запросов к api

Узнал, что такое Muffin и Faker, посмотрел документацию по Codeception (мало что понял)

Научился разворачивать zf2-skeleton-application с помощью composer и запускать его с помощью docker-compose

Познакомился с созданием собственного модуля внутри приложения на основе мануала в Интернете (zf2 modules, zf2 routing, DB), попытался применить в проекте (модуль Note)

На данном этапе получил ошибку (не смог исправить)

File:
/var/www/vendor/zendframework/zend-servicemanager/src/Factory/InvokableFactory.php:30
Message:
Class 'Note\Controller\NoteController' not found

