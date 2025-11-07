<?php
require_once __DIR__ . '/CollectionInterface.php';
require_once __DIR__ . '/ArrayList.php';

class Stack
{
    private $list;

    public function __construct()
    {
        $this->list = new ArrayList();
    }

    public function push($element): void
    {
        $this->list->add($element);
    }
    public function pop()
    {
        if ($this->list->isEmpty()) return null;
        return $this->list->removeAt($this->list->size() - 1);
    }
    public function peek()
    {
        if ($this->list->isEmpty()) return null;
        return $this->list->get($this->list->size() - 1);
    }
    public function size(): int
    {
        return $this->list->size();
    }
    public function isEmpty(): bool
    {
        return $this->list->isEmpty();
    }
    public function clear(): void
    {
        $this->list->clear();
    }
    public function toArray(): array
    {
        return $this->list->toArray();
    }
}
