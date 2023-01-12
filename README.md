![PHP version](https://img.shields.io/badge/php-8.1-777bb3.svg?logo=php)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

# Тестовое задание - фруктовый сад

[Условие](task.md)

Предметная область состоит из сборщика (Harvester), Сада (Orchard), Дерева (Tree) и Фрукта (Fruit).
Harvester умеет обрабатывать Orchard, собирая все фрукты, и сообщать для каждого типа фруктов, 
сколько их собрано и какова суммарная масса.

Использован ООП-подход с некоторым влиянием DDD.

Сервисы: 
- Принтер
- Генератор рандомного сада

Подробная карта классов: [docs/index.md](docs/index.md)

Точка входа ([main.php](main.php)): 
```bash
composer install
php main.php
```

Инъекция зависимостей реализована с помощью [PHP DI](https://php-di.org/)  

Для [тестов](tests) используется PHPUnit. 

## Инструменты:
- phpunit
- phpcs
- phpstan
- github actions для их запуска

Документация сгенерирована phpDocumentor

----
| Проверка | Результат                                                                                           |
|----------|-----------------------------------------------------------------------------------------------------|
| PHPUnit  | ![PHPUnit](https://github.com/Qurum/orchard_testassignment/actions/workflows/phpunit.yml/badge.svg) |
| PHPCS    | ![PHPCs](https://github.com/Qurum/orchard_testassignment/actions/workflows/phpcs.yml/badge.svg)     |
| PHPStan  | ![PHPStan](https://github.com/Qurum/orchard_testassignment/actions/workflows/phpstan.yml/badge.svg) |
