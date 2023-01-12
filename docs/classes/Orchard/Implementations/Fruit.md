***

# Fruit

Конкретная реализация класса фрукта



* Full name: `\Orchard\Implementations\Fruit`
* This class implements:
[`\Orchard\Domain\Plants\Fruit`](../Domain/Plants/Fruit.md)



## Properties


### ID



```php
protected \Orchard\Domain\VO\ID\ID $ID
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

### weight



```php
protected \Orchard\Domain\VO\Weight\Weight $weight
```






***

## Methods


### __construct



```php
protected __construct(\Orchard\Domain\VO\ID\ID $ID, \Orchard\Domain\VO\Name\Name $name, \Orchard\Domain\Plants\PlantType $type, \Orchard\Domain\VO\Weight\Weight $weight): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ID` | **\Orchard\Domain\VO\ID\ID** |  |
| `$name` | **\Orchard\Domain\VO\Name\Name** |  |
| `$type` | **\Orchard\Domain\Plants\PlantType** |  |
| `$weight` | **\Orchard\Domain\VO\Weight\Weight** |  |




***

### id

Вернуть ID фрукта

```php
public id(): \Orchard\Domain\VO\ID\ID
```











***

### name

Вернуть название фрукта

```php
public name(): \Orchard\Domain\VO\Name\Name
```











***

### type

Вернуть тип фрукта

```php
public type(): \Orchard\Domain\Plants\PlantType
```











***

### weight

Вернуть массу фрукта

```php
public weight(): \Orchard\Domain\VO\Weight\Weight
```











***


***
> Automatically generated from source code comments on 2023-01-12 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
