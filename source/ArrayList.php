<?php
require_once __DIR__ . '/ListInterface.php';

class ArrayList implements ListInterface
{
    private $data = [];

    public function __construct(array $initial = [])
    {
        $this->data = array_values($initial);
    }

    public function size(): int
    {
        return count($this->data);
    }
    public function isEmpty(): bool
    {
        return $this->size() === 0;
    }
    public function clear(): void
    {
        $this->data = [];
    }
    public function contains($element): bool
    {
        return in_array($element, $this->data, true);
    }

    public function add($element): bool
    {
        $this->data[] = $element;
        return true;
    }

    public function remove($element): bool
    {
        $idx = $this->indexOf($element);
        if ($idx === -1) return false;
        $this->removeAt($idx);
        return true;
    }

    public function toArray(): array
    {
        return $this->data;
    }

    public function get(int $index)
    {
        if ($index < 0 || $index >= $this->size()) {
            throw new OutOfBoundsException("Index $index out of bounds");
        }
        return $this->data[$index];
    }

    public function set(int $index, $element)
    {
        if ($index < 0 || $index >= $this->size()) {
            throw new OutOfBoundsException("Index $index out of bounds");
        }
        $this->data[$index] = $element;
    }

    public function addAt(int $index, $element): bool
    {
        if ($index < 0 || $index > $this->size()) {
            throw new OutOfBoundsException("Index $index out of bounds");
        }
        array_splice($this->data, $index, 0, [$element]);
        return true;
    }

    public function removeAt(int $index)
    {
        if ($index < 0 || $index >= $this->size()) {
            throw new OutOfBoundsException("Index $index out of bounds");
        }
        $val = $this->data[$index];
        array_splice($this->data, $index, 1);
        return $val;
    }

    public function indexOf($element): int
    {
        foreach ($this->data as $i => $v) {
            if ($v === $element) return $i;
        }
        return -1;
    }
}
