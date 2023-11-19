<?php
    # Aturan Penamaan Variabel
    //Nama variabel di dahului oleh tanda $
    //Nama variabel hanya boleh diawali oleh huruf dan garis bawah, namun tidak boleh diawali dengan angka
    //Nama variabel bersifat case sensitive
    //Deklarasi variabel diakhiri dengan simbol ;

    # Deklarasi Variabel
    $nama_variabel = "hello world";
    echo $nama_variabel;

    # Variabel Konstanta
    //Variabel konstanta dibuat dengan menggunakan perintah define atau kata kunci const
    //Nilai yang disimpan di variabel konstanta tidak dapat diubah
    //Deklarasi variabel konstanta tidak menggunakan simbol $
    //Format penamaan konstanta adalah HURUF_KAPITAL

    # Deklarasi variabel konstanta menggunakan define
    define("KONSTANTA_DEFINE", "isi variabel konstanta define");
    echo KONSTANTA_DEFINE;
    # Deklarasi variabel konstanta menggunakan kata kunci const
    const VARIABEL_KONSTANTA = "isi variabel konstanta dengan kata kunci const";
    echo VARIABEL_KONSTANTA;
?>