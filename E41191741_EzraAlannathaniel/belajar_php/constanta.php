<?php // file : belajar-konstanta.php

//membuat konstanta
define('VERSION', '1.0.0');

const SITE_NAME = "petani kode";
const BASE_URL = "https://www.petanikode.com";

//cetak nilai konstanta
echo "Site name:" , SITE_NAME , "<br/>";
echo "URL:", BASE_URL, "<br/>";
echo "version:", VERSION, "<br/>";
?>