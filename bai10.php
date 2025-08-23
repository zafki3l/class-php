<?php 
    interface DangNhap
    {
        function login($username, $password);
    }

    class Admin implements DangNhap
    {
        public $username;
        private $password;

        public function __construct($username, $password)
        {
            $this->username = $username;
            $this->password = $password;
        }
	
        function login($username, $password)
        {
            if (!($username == $this->username)) {
                echo "Incorrect username";
            } else if(!($password == $this->password)) {
                echo "Incorrect password";
            } else {
                echo "Admin Login succesfully! Welcome\n";
            }
        }
    }

    class KhachHang implements DangNhap
    {
        public $username;
        private $password;

        public function __construct($username, $password)
        {
            $this->username = $username;
            $this->password = $password;
        }
        function login($username, $password)
        {
            $hash = hash('sha256', $this->password);
            if (!($username == $this->username)) {
                echo "Incorrect username";
            } else if(!(hash('sha256', $password) == $hash)) {
                echo "Incorrect password";
            } else {
                echo "Customer Login succesfully! Welcome\n";
            }
        }
    }

    $admin = new Admin('th41', '1234');
    $khachHang = new KhachHang('pham dinh thai', '54321');

    $admin->login('th41', '1234');
    $khachHang->login('pham dinh thai', '54321');
?>