<?php
    require_once "mahasiswa.php";
    
    $mahasiswa1 = new mahasiswa("Anisa Bila Septiana","23.240.0033","3P41", "Teknik Informatika", 4.00, "Padukuhan Kraton");

    $mahasiswa1->nama = "Anisa Bila Septiana";
    $mahasiswa1->nim = "23.240.0033";
    $mahasiswa1->kelas = "3P41";
 

    echo "NAMA : $mahasiswa1->nama <br>";
    echo "NIM : $mahasiswa1->nim <br>";
    echo "KELAS : $mahasiswa1->kelas <br>";
    
    echo $mahasiswa1->infomahasiswa();
    echo "<br>";
    var_dump($mahasiswa1);
    $Mmahasiswa2 = new mahasiswa("Septi","23.240.0100","3P41", "Teknik Informatika", 3.90, "Buaran");

    $Mmahasiswa2->nama = "Septi";
    $Mmahasiswa2->nim = "23.240.0100";
    $Mmahasiswa2->kelas = "3P41";
    

    echo "NAMA : $Mmahasiswa2->nama <br>";
    echo "NIM : $Mmahasiswa2->nim <br>";
    echo "KELAS : $Mmahasiswa2->kelas <br>";
  
    echo $Mmahasiswa2->infomahasiswa();
    echo "<br>";
    var_dump($Mmahasiswa2);
?>