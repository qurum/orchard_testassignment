***

# PlantFactory

Абстрактная фабрика для растений сада.

Умеет создавать:
- дерево
- фрукт

* Full name: `\Orchard\Factories\PlantFactories\PlantFactory`
* This class is an **Abstract class**


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`FRUIT_NAME`|protected| |&#039;&#039;|
|`TREE_NAME`|protected| |&#039;&#039;|
|`FRUIT_CLASS`|protected| |\Orchard\Implementations\Fruit::class|
|`TREE_CLASS`|protected| |\Orchard\Implementations\Tree::class|
|`PLANT_TYPE`|protected| |null|
|`MIN_WEIGHT_IN_GRAM`|protected| |0|
|`MAX_WEIGHT_IN_GRAM`|protected| |0|

## Properties


### IDFactory



```php
protected \Orchard\Factories\VO\IDFactory $IDFactory
```






***

### nameFactory



```php
protected \Orchard\Factories\VO\NameFactory $nameFactory
```






***

### weightFactory



```php
protected \Orchard\Factories\VO\WeightFactory $weightFactory
```






***

## Methods


### __construct



```php
public __construct(\Orchard\Factories\VO\IDFactory $IDFactory, \Orchard\Factories\VO\NameFactory $nameFactory, \Orchard\Factories\VO\WeightFactory $weightFactory): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$IDFactory` | **\Orchard\Factories\VO\IDFactory** |  |
| `$nameFactory` | **\Orchard\Factories\VO\NameFactory** |  |
| `$weightFactory` | **\Orchard\Factories\VO\WeightFactory** |  |




***

### type

Тип фабрики

```php
public type(): \Orchard\Domain\Plants\PlantType
```











***

### tree

Создать дерево

```php
public tree(\Orchard\Domain\Plants\Fruit[] $fruits): \Orchard\Domain\Plants\Tree
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fruits` | **\Orchard\Domain\Plants\Fruit[]** |  |




***

### fruit

Создать фрукт

```php
public fruit(int $weight): \Orchard\Domain\Plants\Fruit
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$weight` | **int** |  |




***

### validateFruits

Убедиться, что переданный массив действительно состоит из фруктов

```php
protected validateFruits(\Orchard\Domain\Plants\Fruit[] $fruits): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fruits` | **\Orchard\Domain\Plants\Fruit[]** |  |




***

### validateWeight

Убедиться, что фрукту разрешено иметь указанную массу

```php
protected validateWeight(int $weight): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$weight` | **int** |  |




***


## Inherited methods


### getInstance



```php
protected getInstance(class-string $className, array $params): object
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$className` | **class-string** |  |
| `$params` | **array** |  |




***


***
> Automatically generated from source code comments on 2023-01-12 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
