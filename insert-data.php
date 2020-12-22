<?php
    include "koneksi.php";

    $sql = "INSERT INTO user
    (
        id,
        nama,
        role,
        availability,
        age,
        location,
        years_experience,
        email
    )  VALUE
    (
        '1',
        'Dharma Agung',
        'Front End Developer',
        'Full Time',
        '30',
        'Tangerang',
        '3',
        'user@gmail.com'
    )";

    if($koneksi->query($sql) == TRUE){
        echo "Insert data telah berhasil";
    }else{
        echo "Insert data gagal";
    }
?>