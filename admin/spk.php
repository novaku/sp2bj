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
    $templateProcessor->setValue('tgl_kontrak', htmlspecialchars(PhpToWord::dateFormatIndo($data['data_lelang']['tgl_kontrak'])));
    $templateProcessor->setValue('hari_kontrak', htmlspecialchars($data['data_lelang']['hari_kontrak']));
    $templateProcessor->setValue('bln_kontrak', htmlspecialchars($data['data_lelang']['bln_kontrak']));
    $templateProcessor->setValue('nama_kegiatan', htmlspecialchars($data['data_lelang']['nama_kegiatan']));
    $templateProcessor->setValue('panjang', htmlspecialchars($data['rka_skpd']['panjang']));
    $templateProcessor->setValue('lebar', htmlspecialchars($data['rka_skpd']['lebar']));
    $templateProcessor->setValue('lok_kegiatan', htmlspecialchars($data['rka_skpd']['lok_kegiatan']));
    $templateProcessor->setValue('masa_pemel', htmlspecialchars($data['data_lelang']['masa_pemel']));
    $templateProcessor->setValue('terbilang_pemel', htmlspecialchars($data['data_lelang']['terbilang_pemel']));
    $templateProcessor->setValue('harga_nego', htmlspecialchars(PhpToWord::numberFormatIndo($data['data_lelang']['harga_nego'])));
    $templateProcessor->setValue('harga_nego_95', htmlspecialchars(PhpToWord::numberFormatIndo($data['data_lelang']['harga_nego'] * 0.95)));
    $templateProcessor->setValue('harga_nego_5', htmlspecialchars(PhpToWord::numberFormatIndo($data['data_lelang']['harga_nego'] * 0.05)));
    $templateProcessor->setValue('terbilang_nego', htmlspecialchars($data['data_lelang']['terbilang_nego']));
    $templateProcessor->setValue('masa_pelaksanaan', htmlspecialchars($data['data_lelang']['masa_pelaksanaan']));
    $templateProcessor->setValue('terbilang_masa_pelaks', htmlspecialchars($data['data_lelang']['terbilang_masa_pelaks']));
    $templateProcessor->setValue('waktu_pelaksanaan', htmlspecialchars($data['data_lelang']['waktu_pelaksanaan']));
    $templateProcessor->setValue('nama_prsh', htmlspecialchars($data['penyedia']['nama_prsh']));
    $templateProcessor->setValue('alamat_prsh', htmlspecialchars($data['penyedia']['alamat']));
    $templateProcessor->setValue('nama_direktur', htmlspecialchars($data['penyedia']['nama_direktur']));
    $templateProcessor->setValue('tgl_akte', htmlspecialchars(PhpToWord::dateFormatIndo($data['penyedia']['tgl_akte'])));
    $templateProcessor->setValue('no_akte', htmlspecialchars($data['penyedia']['no_akte']));
    $templateProcessor->setValue('notaris', htmlspecialchars($data['penyedia']['notaris']));
    $templateProcessor->setValue('norek', htmlspecialchars($data['penyedia']['norek']));
    $templateProcessor->setValue('bank', htmlspecialchars($data['penyedia']['bank']));
    $templateProcessor->setValue('hari_splspmk', htmlspecialchars($data['data_lelang']['hari_splspmk']));
    $templateProcessor->setValue('bln_splspmk', htmlspecialchars($data['data_lelang']['bln_splspmk']));
    $templateProcessor->setValue('lingkup_kerja', htmlspecialchars($data['penyedia']['lingkup_kerja']));
    $templateProcessor->setValue('pejabat_kpa', htmlspecialchars(strtoupper($data['pejabat_kpa']['pejabat_kpa'])));
    $templateProcessor->setValue('nip', htmlspecialchars($data['pejabat_kpa']['nip']));

    PhpToWord::downloadFileTemplate($templateProcessor, 'spk');
}