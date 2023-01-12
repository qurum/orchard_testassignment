
***

# Documentation



This is an automatically generated documentation for **Documentation**.


## Namespaces


### \Orchard\Domain




#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`Harvester`](./classes/Orchard/Domain/Harvester.md) | Интерфейс сборщика|
| [`Orchard`](./classes/Orchard/Domain/Orchard.md) | Интерфейс фруктового сада|



### \Orchard\Domain\Plants




#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`Fruit`](./classes/Orchard/Domain/Plants/Fruit.md) | Интерфейс фрукта|
| [`Tree`](./classes/Orchard/Domain/Plants/Tree.md) | Интерфейс дерева|



### \Orchard\Domain\VO

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractVO`](./classes/Orchard/Domain/VO/AbstractVO.md) | Абстрактный базовый класс всех VO|




### \Orchard\Domain\VO\ID

#### Classes

| Class | Description |
|-------|-------------|
| [`ID`](./classes/Orchard/Domain/VO/ID/ID.md) | VO для ID|




### \Orchard\Domain\VO\Name

#### Classes

| Class | Description |
|-------|-------------|
| [`Name`](./classes/Orchard/Domain/VO/Name/Name.md) | VO для названия|




### \Orchard\Domain\VO\Weight

#### Classes

| Class | Description |
|-------|-------------|
| [`Weight`](./classes/Orchard/Domain/VO/Weight/Weight.md) | VO для массы|




### \Orchard\Exceptions

#### Classes

| Class | Description |
|-------|-------------|
| [`InvalidFruitType`](./classes/Orchard/Exceptions/InvalidFruitType.md) | Неверный тип фрукта|
| [`InvalidFruitWeight`](./classes/Orchard/Exceptions/InvalidFruitWeight.md) | Неверная масса фрукта|
| [`InvalidWeightValueException`](./classes/Orchard/Exceptions/InvalidWeightValueException.md) | Неверное значение веса|
| [`OrchardException`](./classes/Orchard/Exceptions/OrchardException.md) | Базовый класс всех исключений фруктового сада|
| [`TreeThereAreNoFruitsException`](./classes/Orchard/Exceptions/TreeThereAreNoFruitsException.md) | Попытка собрать фрукт при отсутствии фруктов|
| [`UnsupportedWeightTypeException`](./classes/Orchard/Exceptions/UnsupportedWeightTypeException.md) | Неподдерживаемый тип веса|




### \Orchard\Factories

#### Classes

| Class | Description |
|-------|-------------|
| [`OrchardBuilder`](./classes/Orchard/Factories/OrchardBuilder.md) | Строитель сада|


#### Traits

| Trait | Description |
|-------|-------------|
| [`Reflection`](./classes/Orchard/Factories/Reflection.md) | Позволяет создавать с помощью рефлексии объекты, имеющие не-public конструктор|




### \Orchard\Factories\PlantFactories

#### Classes

| Class | Description |
|-------|-------------|
| [`AppleFactory`](./classes/Orchard/Factories/PlantFactories/AppleFactory.md) | Конкретная фабрика для яблок|
| [`PearFactory`](./classes/Orchard/Factories/PlantFactories/PearFactory.md) | Конкретная фабрика для груш|
| [`PlantFactory`](./classes/Orchard/Factories/PlantFactories/PlantFactory.md) | Абстрактная фабрика для растений сада.|




### \Orchard\Factories\VO

#### Classes

| Class | Description |
|-------|-------------|
| [`IDFactory`](./classes/Orchard/Factories/VO/IDFactory.md) | Фабрика VO для ID.|
| [`NameFactory`](./classes/Orchard/Factories/VO/NameFactory.md) | Фадрика VO для названий|
| [`WeightFactory`](./classes/Orchard/Factories/VO/WeightFactory.md) | Фабрика VO масс|




### \Orchard\Implementations

#### Classes

| Class | Description |
|-------|-------------|
| [`Fruit`](./classes/Orchard/Implementations/Fruit.md) | Конкретная реализация класса фрукта|
| [`Harvester`](./classes/Orchard/Implementations/Harvester.md) | Конкретная реализация класса сборщика, хранящая фрукты в массивах в памяти|
| [`Orchard`](./classes/Orchard/Implementations/Orchard.md) | Конкретная реализация фруктового сада,<br />хранящая деревья в массиве|
| [`Tree`](./classes/Orchard/Implementations/Tree.md) | Конкретная реализация дерева,<br />хранящая фрукты в массиве|




### \Orchard\Services

#### Classes

| Class | Description |
|-------|-------------|
| [`PrintHarvesterService`](./classes/Orchard/Services/PrintHarvesterService.md) | Сервис, печатающий информацию о сборщике|
| [`RandomOrchardService`](./classes/Orchard/Services/RandomOrchardService.md) | Сервис, создающий фруктовый сад со случайными характеристиками,<br />учитывающими ограничения бизнес-логики|




### \Tests

#### Classes

| Class | Description |
|-------|-------------|
| [`HarvesterTest`](./classes/Tests/HarvesterTest.md) | |
| [`OrchardTest`](./classes/Tests/OrchardTest.md) | |




***
> Automatically generated from source code comments on 2023-01-12 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
