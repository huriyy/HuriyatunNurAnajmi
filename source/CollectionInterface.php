<?php
interface CollectionInterface
{
    public function size(): int;
    public function isEmpty(): bool;
    public function clear(): void;
    public function contains($element): bool;
    public function add($element): bool;
    public function remove($element): bool;
    public function toArray(): array;
}
