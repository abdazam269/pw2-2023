<?php 

$grade = "A";
$keterangan = "";

switch ($grade) {
    case "A":
        $keterangan = "sangat puas";
        break;
    case "B":
        $keterangan = "puas";
        break;
    case "c":
        $keterangan = "tidak puas";
        break;
    case "D":
        $keterangan = "sangat tidak puas";
        break;
    default:
        $keterangan = "tidak lulus";
        break;
}
echo "<h1>$keterangan</h1>"

// $grade = "B";
// $predikat;

// switch ($grade) {
// 	case 'A':
// 		$predikat="Sangat Memuaskan";
// 		break;
// 	case "B":
// 		$predikat="Memuaskan";
// 		break;
// 	case "C":
// 		$predikat="Cukup";
// 		break;
// 	case "D":
// 		$predikat="Kurang";
// 		break;
// 	case "E":
// 		$predikat="Sangat Kurang";
// 		break;
// 	default:
// 		$predikat="Tidak Ada";
// 		break;
// }

// echo $predikat;

?>