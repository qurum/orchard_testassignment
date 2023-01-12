***

# Harvester

Конкретная реализация класса сборщика, хранящая фрукты в массивах в памяти



* Full name: `\Orchard\Implementations\Harvester`
* This class implements:
[`\Orchard\Domain\Harvester`](../Domain/Harvester.md)



## Properties


### harvested

Массив, в котором хранятся собранные фрукты.

```php
protected \Orchard\Domain\Plants\Fruit[] $harvested
```






***

### countByType

Количество собранных фруктов, сгруппированные по типу

```php
protected array&lt;string,int&gt; $countByType
```






***

### weightByType

Массы собранных фруктов, сгруппированные по типу

```php
protected array&lt;string,\Orchard\Domain\VO\Weight\Weight&gt; $weightByType
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
public __construct(\Orchard\Factories\VO\WeightFactory $weightFactory): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$weightFactory` | **\Orchard\Factories\VO\WeightFactory** |  |




***

### performHarvesting

Собрать все фрукты в указанном саду

```php
public performHarvesting(\Orchard\Domain\Orchard $orchard): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$orchard` | **\Orchard\Domain\Orchard** |  |




***

### harvested

Перечислить собранные фрукты

```php
public harvested(): \Traversable&lt;int,\Orchard\Domain\Plants\Fruit&gt;
```











***

### weight

Вернуть массу собранных фруктов каждого типа

```php
public weight(\Orchard\Domain\Plants\PlantType $plantType): \Orchard\Domain\VO\Weight\Weight
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$plantType` | **\Orchard\Domain\Plants\PlantType** |  |




***

### count

Вернуть количество собранных фруктов для каждого типа

```php
public count(\Orchard\Domain\Plants\PlantType $plantType): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$plantType` | **\Orchard\Domain\Plants\PlantType** |  |




***


***
> Automatically generated from source code comments on 2023-01-12 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
