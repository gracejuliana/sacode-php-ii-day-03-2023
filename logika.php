<?php
    //Penulisan array yang lama
    $namaSiswa = array("Elia","Grace","Melpen");

    //Penulisan array yang baru
    $nama = ["Elia","Grace","Melpen","Jekson","Delpi","Obed"];

    //var_dump($namaSiswa[0]);

    echo "<br>". $nama[0];
    echo "<br>".  $nama[1];
    echo "<br>".  $nama[2];

    foreach($nama as $siswa)
    {
        echo "<br>". $siswa;
    }

        //ARRAY MULTI DIMENSI
        $namaSacode =[

            [
                "namadepan" =>"Jekson",
                "namabelakang" =>"Tabuni",
                "usia" => "30",
                "alamat" => "Doyo Kab. Sentani"
            ],
            [
                "namadepan" =>"Sam",
                "namabelakang" =>"Tabuni",
                "usia" => "30",
                "alamat" => "Doyo Kab. Sentani"
            ],
            [
                "namadepan" =>"Obed",
                "namabelakang" =>"Nauw",
                "usia" => "30",
                "alamat" => "Doyo Kab. Sentani"
            ]
        ];
        //Tampilkan Data 
        $i = 0;
        foreach($namaSacode as $nama)
        {
            echo "<br> <br> <br>Siwa No ". ++$i ." <br>";
            echo "Nama : ". $nama["namadepan"]." ".$nama["namabelakang"]. "<br>";
            echo " <br>alamat : ". $nama["alamat"];
            echo "<br>usia : ". $nama["usia"];
        }
?>