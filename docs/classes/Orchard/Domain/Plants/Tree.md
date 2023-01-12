***

# Tree

Интерфейс дерева



* Full name: `\Orchard\Domain\Plants\Tree`



## Methods


### id

Вернуть ID дерева

```php
public id(): \Orchard\Domain\VO\ID\ID
```











***

### name

Вернуть название дерева

```php
public name(): \Orchard\Domain\VO\Name\Name
```











***

### type

Вернуть тип дерева

```php
public type(): \Orchard\Domain\Plants\PlantType
```











***

### hasFruit

Есть ли на дереве фрукты

```php
public hasFruit(): bool
```











***

### getFruit

Сорвать с дерева фрукт; этот фрукт перестанет расти на дереве

```php
public getFruit(): \Orchard\Domain\Plants\Fruit
```











***

### fruits

Перечислить фрукты, имеющиеся на дереве, не срывая их

```php
public fruits(): \Traversable&lt;int,\Orchard\Domain\Plants\Fruit&gt;
```











***


***
> Automatically generated from source code comments on 2023-01-12 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
