***

# HarvesterTest





* Full name: `\Tests\HarvesterTest`
* Parent class: [`TestCase`](../PHPUnit/Framework/TestCase.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`APPLE_WEIGHT`|protected| |150|
|`PEAR_WEIGHT`|protected| |100|


## Methods


### testCount

Количество фруктов, имеющихся в саду,
должно совпадать с количеством собранных фруктов
для каждого типа PlantType

```php
public testCount(mixed $orchard): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$orchard` | **mixed** |  |




***

### testWeight

Суммарная масса фруктов, имеющихся в саду,
должна совпадать с суммарной массой собранных фруктов
для каждого типа PlantType

```php
public testWeight(\Orchard\Domain\Orchard $orchard): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$orchard` | **\Orchard\Domain\Orchard** |  |




***

### testHarvested

Массив ID фруктов, имеющихся в саду, должен совпадать
с массивом ID собранных фруктов

```php
public testHarvested(\Orchard\Domain\Orchard $orchard): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$orchard` | **\Orchard\Domain\Orchard** |  |




***

### testPerformHarvesting

После сбора в саду не должно оставаться несобранных фруктов

```php
public testPerformHarvesting(\Orchard\Domain\Orchard $orchard): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$orchard` | **\Orchard\Domain\Orchard** |  |




***

### orchardProvider

Провайдер создаёт четыре разных сада:
  - без деревьев
  - с одной яблоней и одной грушей
  - с сотней яблонь и без груш
  - со случаными количествами яблонь и груш

```php
public orchardProvider(): mixed
```

На каждом дереве растёт ровно один фрукт.









***

### orchardWithTrees

создать сад с указанным количеством яблонь и груш

```php
protected orchardWithTrees(int $numApples, int $numPears): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$numApples` | **int** |  |
| `$numPears` | **int** |  |




***

### mockOrchard

создать сад с указанным массивом деревьев

```php
protected mockOrchard(array $trees): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$trees` | **array** |  |




***

### mockTree

создать дерево указанного типа с указанным массивом фруктов

```php
protected mockTree(\Orchard\Domain\Plants\PlantType $plantType, array $fruits = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$plantType` | **\Orchard\Domain\Plants\PlantType** |  |
| `$fruits` | **array** |  |




***

### mockFruit

создать фрукт указанного типа с указанной массой

```php
protected mockFruit(\Orchard\Domain\Plants\PlantType $plantType, int $weight = 100): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$plantType` | **\Orchard\Domain\Plants\PlantType** |  |
| `$weight` | **int** |  |




***

### mockId

создать ID

```php
protected mockId(): mixed
```











***


***
> Automatically generated from source code comments on 2023-01-12 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
