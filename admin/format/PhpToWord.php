<?php
/**
 * Created by PhpStorm.
 * User: Nova  (Nova.Kusumah@mncgroup.com)
 * Date: 6/17/2015
 * Time: 5:33 AM
 */

include_once __DIR__ . '/../vendor/autoload.php';
include_once __DIR__ . '/../lib/dbcon.php';
dbcon();

class PhpToWord
{
    public static function makedir($dirpath, $mode = 0777)
    {
        return is_dir($dirpath) || mkdir($dirpath, $mode, true);
    }

    public static function downloadFileTemplate($templateProcessor, $filename)
    {
        $uploadDir = 'format/tmp';
        self::makedir($uploadDir);

        $output_file = $uploadDir . '/' . $filename . '.docx';
        $templateProcessor->saveAs($output_file);

        header("Content-Description: File Transfer");
        header('Content-Disposition: attachment; filename="' . $filename . '.docx"');
        header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
        header('Content-Transfer-Encoding: binary');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Expires: 0');

        readfile($output_file);
        exit;
    }

    public static function getData($kode_kegiatan)
    {
        $row = array(
            'data_lelang' => array(),
            'rka_skpd'    => array(),
            'pejabat_kpa' => array(),
            'penyedia'    => array(),
        );
        $result = mysql_query('SELECT * FROM `data_lelang` WHERE `kode_kegiatan` = "' . $kode_kegiatan . '"');
        if ($result) {
            $row['data_lelang'] = mysql_fetch_assoc($result);
        }

        $result = mysql_query('SELECT * FROM `rka_skpd` WHERE `kode_kegiatan` = "' . $kode_kegiatan . '"');
        if ($result) {
            $row['rka_skpd'] = mysql_fetch_assoc($result);
        }

        $result = mysql_query('SELECT * FROM `pejabat_kpa` WHERE `kode_kegiatan` = "' . $kode_kegiatan . '"');
        if ($result) {
            $row['pejabat_kpa'] = mysql_fetch_assoc($result);
        }

        $result = mysql_query('SELECT * FROM `penyedia` WHERE `id_penyedia` = "' . $row['data_lelang']['id_penyedia'] . '"'
        );
        if ($result) {
            $row['penyedia'] = mysql_fetch_assoc($result);
        }

        return $row;
    }

    public static function dateFormatIndo($date)
    {
        if($date == '0000-00-00') {
            return '';
        } else {
            $BulanIndo = array(
                "Januari",
                "Februari",
                "Maret",
                "April",
                "Mei",
                "Juni",
                "Juli",
                "Agustus",
                "September",
                "Oktober",
                "November",
                "Desember"
            );

            $tahun = substr($date, 0, 4);
            $bulan = substr($date, 5, 2);
            $tgl   = substr($date, 8, 2);

            $result = $tgl . " " . $BulanIndo[(int) $bulan - 1] . " " . $tahun;
            return ($result);
        }
    }

    public static function numberFormatIndo($number)
    {
        return number_format($number, 0, ',', '.');
    }
}