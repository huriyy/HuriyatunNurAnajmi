<?php
require_once __DIR__ . '/autoload.php';

echo "=== ArrayList ===\n";
$a = new ArrayList([1, 2, 3]);
$a->add(4);
$a->addAt(2, 99);
print_r($a->toArray());
echo "remove 2: ";
$a->remove(2);
print_r($a->toArray());
echo "indexOf 99: " . $a->indexOf(99) . "\n\n";

echo "=== LinkedList ===\n";
$l = new LinkedList(['a', 'b', 'c']);
$l->add('d');
$l->addAt(1, 'x');
print_r($l->toArray());
echo "removeAt(2): " . $l->removeAt(2) . "\n";
print_r($l->toArray());
echo "\n";

echo "=== HashMap ===\n";
$m = new HashMap();
$m->put('name', 'Andi');
$m->put('age', 30);
echo "name: " . $m->get('name') . "\n";
print_r($m->keys());
print_r($m->values());
$m->remove('age');
echo "size: " . $m->size() . "\n\n";

echo "=== Queue ===\n";
$q = new Queue();
$q->offer('first');
$q->offer('second');
$q->offer('third');
echo "peek: " . $q->peek() . "\n";
echo "poll: " . $q->poll() . "\n";
print_r($q->toArray());
echo "\n";

echo "=== Stack ===\n";
$s = new Stack();
$s->push('one');
$s->push('two');
echo "peek: " . $s->peek() . "\n";
echo "pop: " . $s->pop() . "\n";
print_r($s->toArray());
echo "\n";
