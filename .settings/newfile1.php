<?php
class Person {
    public $name;
    public $age;
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}
$people = [
    new Person("Jay", 30),
    new Person("Sara", 20),
    new Person("Vini", 15)
];
function compareAge($a, $b) {
    if ($a->age == $b->age) {
        return 0;
    }
    return ($a->age < $b->age) ? -1 : 1;
}
usort($people, "compareAge");
foreach ($people as $person) {
    echo $person->name . " - " . $person->age . "\n";
}
?>