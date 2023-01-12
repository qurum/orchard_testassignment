***

# PearFactory

Конкретная фабрика для груш



* Full name: `\Orchard\Factories\PlantFactories\PearFactory`
* Parent class: [`\Orchard\Factories\PlantFactories\PlantFactory`](./PlantFactory.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`FRUIT_NAME`|protected| |&#039;груша&#039;|
|`TREE_NAME`|protected| |&#039;груша&#039;|
|`PLANT_TYPE`|protected| |\Orchard\Domain\Plants\PlantType::PEAR|
|`MIN_WEIGHT_IN_GRAM`|protected| |130|
|`MAX_WEIGHT_IN_GRAM`|protected| |170|




## Inherited methods


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
