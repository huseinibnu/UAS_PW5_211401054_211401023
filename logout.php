<?php
session_start();
session_destroy();
echo "<p align='center'>Terima Kasih Telah Berkunjung ke Website GuppyKita</p>";
echo "<p align='center'>Silahkan Berkunjung Kembali</p>";
echo "<meta http-equiv='refresh' content='2;url=login.php'>";