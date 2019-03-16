{
        nama_lengkap": "syakur"
        "tanggal_lahir": "17 agustus 1995"
        "alamat": "semarang"
        "hobi": "jalan-jalan"
}

<?php
$json_object = json_decode();
echo "nama lengkap: " . $json_object->nama_lengkap . "<br/>";
echo  "tgl lahir: " . $json_object->tanggal_lahir . "<br />";
?>