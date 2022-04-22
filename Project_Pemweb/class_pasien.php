<?php
        require_once "class_bmiPasien.php";
        class Pasien extends BMI_Pasien{
            public $id, $kode, $nama, $tmp_lahir, $tgl_lahir, $email, $gender;

            function __construct($kode, $nama, $tmp_lahir, $tgl_lahir, $email, $gender, $id_pasien,$tanggal_daftar, $tinggi_p, $berat_p)
            {
                parent::__construct($id_pasien,$tanggal_daftar, $tinggi_p, $berat_p);
                $this->kode = $kode;
                $this->nama = $nama;
                $this->tmp_lahir = $tmp_lahir;
                $this->tgl_lahir = $tgl_lahir;
                $this->email = $email;
                $this->gender = $gender;
            }
            
        }

        $no = 1;
        $ps1 = new Pasien(12345, "P001", "Ahmad", "Jakarta", "10-3-2000", "ahmadyani@gmail.com", "L", 1, "3-4-2022", 169, 69.8);
        $ps2 = new Pasien(23456, "P002", "Rina", "Depok", "2-2-2001", "Rinariana@gmail.com", "P", 2, "3-5-2022", 165, 55.3);
        $ps3 = new Pasien(34567, "P003", "Lutfi", "Jogja", "3-4-2001", "Lutfinurjannah@gmail.com", "L", 3, "4-5-2022", 171, 45.2);

        $array_pasien = [$ps1, $ps2, $ps3];

        ?>
