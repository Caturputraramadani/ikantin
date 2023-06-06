<?php

class Produk
{
    public $bakwan;
    public $bakso;
    public $kopi;
    public $kue;
    public $jmlBakwan;
    public $jmlBakso;
    public $jmlKopi;
    public $jmlKue;
    public $hargaBakwan;
    public $hargaBakso;
    public $hargaKopi;
    public $hargaKue;
    public $totalSeluruh;
    public $totalHargaBakwan;
    public $totalHargaBakso;
    public $totalHargaKopi;
    public $totalHargaKue;

    function __construct()
    {
        $this->hargaBakwan = 2000;
        $this->hargaBakso = 10000;
        $this->hargaKopi = 12000;
        $this->hargaKue = 7000;
    }
}

class Jumlah extends Produk
{
    public function getJumlah($jmlBakwan, $jmlBakso, $jmlKopi, $jmlKue)
    {
        $this->jmlBakwan = $jmlBakwan;
        $this->jmlBakso = $jmlBakso;
        $this->jmlKopi = $jmlKopi;
        $this->jmlKue = $jmlKue;
    }

    public function setHarga()
    {
        $this->totalHargaBakwan = $this->hargaBakwan * $this->jmlBakwan;
        $this->totalHargaBakso = $this->hargaBakso * $this->jmlBakso;
        $this->totalHargaKopi = $this->hargaKopi * $this->jmlKopi;
        $this->totalHargaKue = $this->hargaKue * $this->jmlKue;
        $this->totalSeluruh = $this->totalHargaBakwan + $this->totalHargaBakso + $this->totalHargaKopi + $this->totalHargaKue;
    }

    public function cetakStruk()
    {
        echo "******* <b> $ iKantin Wikrama $ </b> ******* ";
        echo "<br>";
        echo "Bakwan: $this->jmlBakwan x Rp. $this->hargaBakwan : <b> $this->totalHargaBakwan</b>";
        echo "<br>";
        echo "Bakso: $this->jmlBakso x Rp. $this->hargaBakso : <b> $this->totalHargaBakso</b>";
        echo "<br><br>";
        echo "Coffe: $this->jmlKopi x Rp. $this->hargaKopi : <b> $this->totalHargaKopi</b>";
        echo "<br><br>";
        echo "Kue: $this->jmlKue x Rp. $this->hargaKue : <b> $this->totalHargaKue</b>";
        echo "<br><br>";
        echo "Total Bayar : Rp. <b> $this->totalSeluruh</b>";
        echo "<br>";
        echo "****************************************************";
    }
}
