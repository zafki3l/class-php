<?php
class BankAccount
{
    private $soTaiKhoan;
    private $tenChuTaiKhoan;
    private $soDu;

    //Constructor
    public function __construct($soTaiKhoan, $tenChuTaiKhoan, $soDu)
    {
        $this->soTaiKhoan = $soTaiKhoan;
        $this->tenChuTaiKhoan = $tenChuTaiKhoan;
        $this->soDu = $soDu;
    }


    public function napTien($soTien)
    {
        $this->soDu += $soTien;
        echo "Bạn đã nạp {$soTien} vào tài khoản<br>\n";
        echo "Số dư sau khi nạp: " . $this->soDu;
    }

    public function rutTien($soTien)
    {
        if ($soTien > $this->soDu) {
            echo "Số dư của bạn không đủ để rút";
        } else {
            $this->soDu -= $soTien;
            echo "Bạn đã rút {$soTien}<br>\n";
            echo "Số dư sau khi rút: " . $this->soDu;
        }
    }

    public function hienThiThongTin()
    {
        echo "{$this->soTaiKhoan}, {$this->tenChuTaiKhoan}, {$this->soDu}<br>\n";
    }
}

$bankAccount = new BankAccount("12345", "Th41", 1000);

$bankAccount->napTien(1000);
echo "<br>\n";
$bankAccount->rutTien(500);
echo "<br>\n";
$bankAccount->hienThiThongTin();