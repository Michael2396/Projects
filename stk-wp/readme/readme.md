# STK

## Система фалов
* public_html - публичная папка на сервере
* src - файлы исходники стилей для компиляции

## Доступы на тестовый сайт
* http://team.stk-wp.codevery.work//

#### Codevery DB
* url: http://phpmyadmin.codevery.com
* user: test     
* pass: ddf$4fd2gH
#### FTP
* host: pony.codevery.com
* user: test
*pass: test


## LIVE

#### DB
* url: http://team.stk-wp.codevery.work/
* user: team
* pass: team
* base: team_max_test

#### Site (админка)
* cms: WP
* url: https://greentube.com/wp-admin/
* user: drummermaaxm
* pass: 1q3q5q7q9qadmin







#### FTP 
* host: pony.codevery.work
* user: team
* pass: team



## Workflow
* src - запуск проекта
    ```bash
    cd src/
    npm install  
    ```
    * Файлы компилятся в *public_html/assets/*
* Ветки
  * **master** - Разработку тут не ведем! Эта ветка должна соответствовать лайву.
  * **dev** - Вся разработка тут
  * **server** -  мерджим в эту ветку когда полностью завершили задачу на **dev** (тестовый лайв)
