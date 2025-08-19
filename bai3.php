<?php 
    class NhanVien {
        public $name;
        private $salary;

        public function __construct($name, $salary) {
            $this->name = $name;
            $this->salary = $salary;
        }

        public function getSalary() {
            return $this->salary;
        }

        public function setSalary($newSalary) {
            $this->salary = $newSalary;
        }
    }

    $nhanVien = new NhanVien("Thái", 1000);

    print_r($nhanVien);
    echo "<br>";
    $nhanVien->setSalary(2000);
    print_r($nhanVien);
?>