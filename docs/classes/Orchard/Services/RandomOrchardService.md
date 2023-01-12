***

# RandomOrchardService

Сервис, создающий фруктовый сад со случайными характеристиками,
учитывающими ограничения бизнес-логики



* Full name: `\Orchard\Services\RandomOrchardService`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`NUM_APPLE_TREES`|protected| |10|
|`NUM_PEAR_TREES`|protected| |15|
|`APPLE_WEIGHT_MIN`|protected| |150|
|`APPLE_WEIGHT_MAX`|protected| |180|
|`PEAR_WEIGHT_MIN`|protected| |130|
|`PEAR_WEIGHT_MAX`|protected| |170|
|`APPLES_PER_TREE_MIN`|protected| |40|
|`APPLES_PER_TREE_MAX`|protected| |50|
|`PEAR_PER_TREE_MIN`|protected| |0|
|`PEAR_PER_TREE_MAX`|protected| |20|

## Properties


### builder



```php
protected \Orchard\Factories\OrchardBuilder $builder
```






***

### appleFactory



```php
protected \Orchard\Factories\PlantFactories\AppleFactory $appleFactory
```






***

### pearFactory



```php
protected \Orchard\Factories\PlantFactories\PearFactory $pearFactory
```






***

## Methods


### __construct



```php
public __construct(\Orchard\Factories\OrchardBuilder $builder, \Orchard\Factories\PlantFactories\AppleFactory $appleFactory, \Orchard\Factories\PlantFactories\PearFactory $pearFactory): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$builder` | **\Orchard\Factories\OrchardBuilder** |  |
| `$appleFactory` | **\Orchard\Factories\PlantFactories\AppleFactory** |  |
| `$pearFactory` | **\Orchard\Factories\PlantFactories\PearFactory** |  |




***

### createRandomOrchard



```php
public createRandomOrchard(): \Orchard\Domain\Orchard
```











***

### createArrayOfApples



```php
protected createArrayOfApples(): \Orchard\Domain\Plants\Fruit[]
```











***

### createArrayOfPears



```php
protected createArrayOfPears(): \Orchard\Domain\Plants\Fruit[]
```











***

### getRandomAppleWeight



```php
protected getRandomAppleWeight(): int
```











***

### getRandomPearWeight



```php
protected getRandomPearWeight(): int
```











***


***
> Automatically generated from source code comments on 2023-01-12 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
