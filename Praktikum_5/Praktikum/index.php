<?php

class Manusia {
    public $nama;
    public $umur;

    public function setNama ($nama)
    {
        $this->nama = $nama;
    }

    public function setUmur ($umur)
    {
        $this->umur = $umur;
    }

    public function getInfo()
    {
        return "Nama:" . $this->nama . ", Umur:" . $this->umur;
    }
}

// Membuat Objek
$raka = new Manusia();
$raka-> setNama("Raka Muhammad Rabbani");
$raka->setUmur(20);
echo $raka->getInfo();

echo "<br>";

$raya = new Manusia();
$raya-> setNama("Raya Rambu Rabbani");
$raya->setUmur(35);
echo $raya->getInfo();