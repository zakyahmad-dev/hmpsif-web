<?php

// Paksa response header menjadi HTML agar tidak terunduh sebagai file statis
header('Content-Type: text/html; charset=utf-8');

// Muat entrypoint utama Laravel dari folder public
require __DIR__ . '/../public/index.php';