<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Logika untuk membuat akun SSH atau memproses data
    // Misalnya menyimpan ke database atau API pihak ketiga
    
    echo "Akun SSH untuk $username berhasil dibuat.";
}
?>
