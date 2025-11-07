<?php
require_once __DIR__ . '/CollectionInterface.php';

interface ListInterface extends CollectionInterface
{
    public function get(int $index);
    public function set(int $index, $element);
    public function addAt(int $index, $element): bool;
    public function removeAt(int $index);
    public function indexOf($element): int;
}
