***

# Weight

VO для массы



* Full name: `\Orchard\Domain\VO\Weight\Weight`
* Parent class: [`\Orchard\Domain\VO\AbstractVO`](../AbstractVO.md)



## Properties


### type

Тип (разный для разных единиц измерения)

```php
protected \Orchard\Domain\VO\Weight\Type $type
```






***

### value

Целочисленное значение

```php
protected int $value
```






***

## Methods


### __construct



```php
final protected __construct(int $value, \Orchard\Domain\VO\Weight\Type $type): mixed
```





* This method is **final**.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **int** |  |
| `$type` | **\Orchard\Domain\VO\Weight\Type** |  |




***

### getValue



```php
public getValue(): int
```











***

### getType



```php
public getType(): \Orchard\Domain\VO\Weight\Type
```











***

### performAddition

Выполнить сложение. Поскольку этот объект иммутабелен, создаётся новый объект массы.

```php
public performAddition(\Orchard\Domain\VO\Weight\Weight $weight): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$weight` | **\Orchard\Domain\VO\Weight\Weight** |  |




***


## Inherited methods


### __construct



```php
protected __construct(mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### getValue



```php
public getValue(): mixed
```




* This method is **abstract**.






***


***
> Automatically generated from source code comments on 2023-01-12 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
