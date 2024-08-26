<?php
    class Person
    {
        // Attributes
        private $name;
        private $age;

        // Constructor
        public function __construct($name, $age)
        {
            $this->name = $name;
            $this->age = $age;
        }

        // Method to introduce the person
        public function introduce()
        {
            echo "My name is {$this->name} and I am {$this->age} years old.";
        }
    }

    // Example usage
    $person = new Person("John", 30);
    $person->introduce();
    ?>
