# Tengri News Clone by NURZHAN ZHUKESH
## Инструкции по настройке:
- Клонирование репозитория: Склонируйте репозиторий с помощью следующей команды: `git clone https://github.com/nurzhanzhukesh/nfactorial_project.git`
- Настройка базы данных: В файле database/connection.php укажите данные для подключения к вашей базе данных.
- Импорт базы данных: Импортируйте SQL-файл **news.sql** с данными новостей в свою базу данных.
- Запуск проекта: Запустите локальный сервер или разверните проект на хостинге.
## Описание файлов `index.php` и `article.php`
### index.php
Файл `index.php` является главной страницей веб-сайта и отображает краткую информацию о новостях в виде карточек.
#### Ключевые особенности
- **Отображение новостей**: С помощью PHP и PDO файл `index.php` получает данные о новостях из базы данных и отображает их в виде карточек на странице с помощью цикла `foreach`.
- На каждой карточке имеется информация: заголовок, дата публикации, количество просмотров и количество комментариев, информация о которых берется из базы данных.
- Данные для базы данных были добыты с помощью парсинга страниц веб сайта `zakon.kz` с помощью инфструментов библиотеки `BeautifulSoup`. Из-за сложной структуры страниц веб сайта tengrinews.kz, мне не удалось провести парсинг именно этого сайта.
- **Навигационное меню**: На странице присутствует навигационное меню, которое к сожалению пока не позволяет пользователям переходить между разделами сайта, так как их еще нет.
### article.php
Файл `article.php` представляет собой страницу с полной информацией о конкретной новости.
#### Ключевые особенности
- **Динамическое получение данных**: С помощью PHP и PDO страница `article.php` динамически получает данные о новости из базы данных в зависимости от переданного параметра `id`, который присвается каждой странице с новостью отдельно при ее открытии. Данный `id` равен значению первичного ключа записи.
- **Визуальное оформление**: Страница стилизована с использованием CSS в соответствии с дизайном оригинального сайта `tengrinews.kz`.
- Подключение осуществяется с помощью файла `connection.php`, где прописаны параметры для доступа к базе данных и метод для обработки ошибок для более удобного дебагинга
#### Используемые технологии
Оба файла используют следующие технологии:
- **PHP**: Для динамического получения данных о новостях и их отображения.
- **CSS**: Для стилизации внешнего вида страниц.
- **HTML**: Для разметки контента страниц.
### Пример использования
- Посетите главную страницу `index.php`, чтобы увидеть краткую информацию о новостях в виде карточек.
- Нажав на первую карточку, вы перейдете на страницу `article.php?id=1`, где `1` - это идентификатор конкретной новости, чтобы увидеть страницу с полной информацией о выбранной новости.
## Нынешние компромиссы и недостатки
- Разработано только две страницы для данного сайта, `index.php` и `article.php`. Поэтому, остальные кнопки, например "Реклама" или "Вакансии", отправляют пользователя на оригинальную страницу `tengrinews.kz`, либо на исходную страницу `index.php`.
- Информация о погоде и курсах валют статична
- html код требует оптимизации
