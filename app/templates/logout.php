<?php
session_start();
session_destroy();
echo "<script>alert('Berhasil logout dari Disciptabintar!'); window.location='../index.php';</script>";