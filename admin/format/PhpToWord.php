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
        $row = array();
        $result = mysql_query('SELECT * FROM `data_lelang` WHERE `kode_kegiatan` = "' . $kode_kegiatan . '"');
        $row['data_lelang'] = mysql_fetch_assoc($result);

        $result = mysql_query('SELECT * FROM `rka_skpd` WHERE `kode_kegiatan` = "' . $kode_kegiatan . '"');
        $row['rka_skpd'] = mysql_fetch_assoc($result);

//        $result = mysql_query('SELECT * FROM `penyedia` WHERE `kode_kegiatan` = "' . $kode_kegiatan . '"');
//        $row['penyedia'] = mysql_fetch_assoc($result);

        return $row;
    }
}