***

# OrchardBuilder

Строитель сада



* Full name: `\Orchard\Factories\OrchardBuilder`



## Properties


### trees



```php
protected \Orchard\Domain\Plants\Tree[] $trees
```






***

## Methods


### addTree

Запланировать посадку дерева

```php
public addTree(\Orchard\Domain\Plants\Tree $tree): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tree` | **\Orchard\Domain\Plants\Tree** |  |




***

### build

Создать сад

```php
public build(): \Orchard\Implementations\Orchard
```











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
