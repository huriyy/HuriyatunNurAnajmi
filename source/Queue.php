<?php
require_once __DIR__ . '/QueueInterface.php';
require_once __DIR__ . '/LinkedList.php';

class Queue implements QueueInterface
{
    private $list;

    public function __construct()
    {
        $this->list = new LinkedList();
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
    public function contains($element): bool
    {
        return $this->list->contains($element);
    }
    public function add($element): bool
    {
        return $this->offer($element);
    }
    public function remove($element): bool
    {
        return $this->list->remove($element);
    }
    public function toArray(): array
    {
        return $this->list->toArray();
    }

    public function offer($element): bool
    {
        return $this->list->add($element);
    }

    public function poll()
    {
        if ($this->isEmpty()) return null;
        return $this->list->removeAt(0);
    }

    public function peek()
    {
        if ($this->isEmpty()) return null;
        return $this->list->get(0);
    }
}
