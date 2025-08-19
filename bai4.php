<?php 
    class DongVat {

        public function Keu() {}
    }

    class Meo extends DongVat {

        public function Keu() {
            echo "Meo meo";
        }
    }

    class Cho extends DongVat {
        public function Keu() {
            echo "Gau gau";
        }
    }

    class Ga extends DongVat {
        public function Keu() {
            echo "AAAAAAAAAA";
        }
    }

    $meo = new Meo();
    $cho = new Cho();
    $ga = new Ga();

    echo "Con meo keu: ";
    $meo->Keu();
    echo "<br>Con cho Keu: ";
    $cho->Keu();
    echo "<br>Con ga keu: ";
    $ga->Keu();

?>