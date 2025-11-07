<?php
interface MapInterface
{
    public function put($key, $value);
    public function get($key);
    public function remove($key);
    public function containsKey($key): bool;
    public function keys(): array;
    public function values(): array;
    public function size(): int;
    public function isEmpty(): bool;
    public function clear(): void;
}
