***

# Tree

Конкретная реализация дерева,
хранящая фрукты в массиве



* Full name: `\Orchard\Implementations\Tree`
* This class implements:
[`\Orchard\Domain\Plants\Tree`](../Domain/Plants/Tree.md)



## Properties


### id



```php
protected \Orchard\Domain\VO\ID\ID $id
```






***

### name



```php
protected \Orchard\Domain\VO\Name\Name $name
```






***

### type



```php
protected \Orchard\Domain\Plants\PlantType $type
```






***

### fruits



```php
protected array $fruits
```






***

## Methods


### __construct



```php
protected __construct(\Orchard\Domain\VO\ID\ID $id, \Orchard\Domain\VO\Name\Name $name, \Orchard\Domain\Plants\PlantType $type, \Orchard\Domain\Plants\Fruit[] $fruits): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **\Orchard\Domain\VO\ID\ID** |  |
| `$name` | **\Orchard\Domain\VO\Name\Name** |  |
| `$type` | **\Orchard\Domain\Plants\PlantType** |  |
| `$fruits` | **\Orchard\Domain\Plants\Fruit[]** |  |




***

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
