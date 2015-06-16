<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

$kode_kegiatan = $_GET['kode_kegiatan'];
if(isset($kode_kegiatan) || !empty($kode_kegiatan)) {
    include_once './format/PhpToWord.php';
    $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('format/spk.docx');

    $data = PhpToWord::getData($kode_kegiatan);

//    die(json_encode($data));

    $templateProcessor->setValue('tahun', htmlspecialchars(date('Y')));
    $templateProcessor->setValue('tanggal', htmlspecialchars(date('d M Y')));
    $templateProcessor->setValue('nama_kegiatan', htmlspecialchars($data['data_lelang']['nama_kegiatan']));
    $templateProcessor->setValue('panjang', htmlspecialchars($data['rka_skpd']['panjang']));
    $templateProcessor->setValue('lebar', htmlspecialchars($data['rka_skpd']['lebar']));
    $templateProcessor->setValue('lok_kegiatan', htmlspecialchars($data['rka_skpd']['lok_kegiatan']));



    PhpToWord::downloadFileTemplate($templateProcessor, 'spk');
}