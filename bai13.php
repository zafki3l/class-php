<?php 
    interface MayIn
    {
        public function inTaiLieu($noiDung);
    }

    class MayInDenTrang implements MayIn
    {
        public function inTaiLieu($noiDung)
        {
            echo $noiDung;
        }
    }

    class MayInMau implements MayIn
    {
        public function inTaiLieu($noiDung)
        {
            echo $noiDung;
        }
    }

    class MayInPDF implements MayIn
    {
        public function inTaiLieu($noiDung)
        {
            echo $noiDung;
        }
    }

    function xuLyIn(MayIn $mayIn, $noiDung)
    {
        $mayIn->inTaiLieu($noiDung);
        echo "\n";
    }

    xuLyIn(new MayInDenTrang, 'aaaaaaaaaaaaaa');
    xuLyIn(new MayInMau, '12345');
    xuLyIn(new MayInPDF, 'Đây là máy in pdf');
?>