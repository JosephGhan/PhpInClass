<?php

    class User
    {
        //create a public property
        public $name;
        private $age;

        //static property
        public static $drinkingAge;

        function __construct($name=null, $age=null)
        {
            $this->name = $name;
            $this->age = $age;
        }

        function setName($newName)
        {
            $this->name = $newName;
        }

        function setAge($newAge)
        {
            $this->age = $newAge;
        }

        function getAge()
        {
            return $this->age;
        }

        public static function setDrinkingAge($newAge)
        {
            self::$drinkingAge = $newAge;
        }
    }

    $person = new User();
    $person->name = "Prisoner 24601";
    // echo  $person->name;
    $person->setName("Punky Brewster");
    // echo $person->name;

    $person->setAge(21);
    //echo $person->getAge();
    
    $person2 = new User("Indie", 32);
    echo $person2->name;

    //print the drinking age (static)
    User::setDrinkingAge(21);
    echo User::$drinkingAge;