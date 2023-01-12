***

# Orchard

Интерфейс фруктового сада



* Full name: `\Orchard\Domain\Orchard`



## Methods


### trees

Перечислить деревья, имеющиеся в саду

```php
public trees(): \Traversable&lt;int,\Orchard\Domain\Plants\Tree&gt;
```











***

### add

Добавить к саду дерево

```php
public add(\Orchard\Domain\Plants\Tree $tree): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tree` | **\Orchard\Domain\Plants\Tree** |  |




***


***
> Automatically generated from source code comments on 2023-01-12 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
