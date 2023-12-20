<?php

use Acme\Users\Person;
use Acme\Business;
use Acme\Staff;

$akshay = new Person('Akshay Urankar');

$staff = new Staff([$akshay]);
$evilieswithin = new Business($staff);

$evilieswithin->hire(new Person('Vishal Urankar'));


var_dump($evilieswithin->getStaffMembers());


?>

<!-- <?php

        class Human
        {
            public  $age = 1;

            public function haveBirthday()
            {
                $this->age += 1;
            }
            public function age()
            {
                return $this->age;
            }
        }

        $akshay = new Human;
        $akshay->haveBirthday();
        $akshay->haveBirthday();

        echo $akshay->age();

        $jane = new Human;
        $jane->haveBirthday();
        echo "<br/>";
        echo $jane->age();

        ?> -->

<?php
class BankAccount
{
    const TAX = .09;
}

echo BankAccount::TAX
?>