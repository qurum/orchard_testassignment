<?php

declare(strict_types=1);

namespace Tests;

use Orchard\Domain\Plants\Tree;
use Orchard\Domain\VO\ID\ID;
use Orchard\Implementations\Orchard;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

class OrchardTest extends TestCase
{
    /**
     * После добавления дерева
     * в саду должно появляться дерево
     */
    public function testAdd(): void
    {
        $reflector = new ReflectionClass(Orchard::class);
        /** @var Orchard $orchard */
        $orchard = $reflector->newInstanceWithoutConstructor();
        $tree = $this->createMock(Tree::class);
        $orchard->add($tree);
        $trees = iterator_to_array($orchard->trees());
        $this->assertEquals(
            [$tree],
            $trees,
            'After adding a tree, a tree should appear in the orchard.'
        );
    }

    /**
     * Сад должен корректно перечислять деревья,
     * которые имеются в саду
     */
    public function testTrees(): void
    {
        $reflector = new ReflectionClass(Orchard::class);
        $orchard = $reflector->newInstanceWithoutConstructor();

        $trees    = [];
        $numTrees = 10;

        for ($i = 0; $i < $numTrees; $i++) {
            $id = $this->createMock(ID::class);
            $id->method('getValue')
                ->willReturn(uniqid('', true));

            $tree = $this->createMock(Tree::class);
            $tree->method('id')
                ->willReturn($id);

            $trees[] = $tree;
            $orchard->add($tree);
        }

        $this->assertEqualsCanonicalizing(
            $trees,
            iterator_to_array($orchard->trees()),
            'The orchard should correctly enumerate the trees that are in the orchard.'
        );
    }
}
