<?php
// the following code illustrates how the SRP (Single Responsibility Principle) works in PHP

// the following user class holds students information only
class User{
    private $name;
    private $age;
    private $courses = array();

    public function __construct($name, $age, $courses){
        $this->name = $name;
        $this->age = $age;
        $this->courses = $courses;
    }

    public function get_name() : string {
        return $this->name;
    }

    public function get_age() : int {
        return $this->age;
    }

    public function get_courses() : array {
        return $this->courses;
    }

}

// StoreDB handle saving data to database
class StoreDB{
 
    public function store_user(User $user) : void {
        print_r($user);
    }

}
$user = new User("Mohammed", 25, array('CS423', 'IT352', 'MATH317'));

echo $user->get_name() . "\n";
echo $user->get_age() . "\n";

$storeUser = new StoreDB();
$storeUser->store_user($user);
