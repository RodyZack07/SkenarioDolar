<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambatron</title>
</head>
<body>
    <h1>Ngapain Belajar Dolar</1h>
        <?php
        
        //Grade Raport Start
        class GradeRaport {
            private $nilai;

            public function __construct($nilai)
            {
                $this->nilai = $nilai;
            }

            public function getGrade()
            {
                $nilai = $this->nilai;

                if ($nilai >= 90 && $nilai <= 100) {
                    return "A";
                } elseif ($nilai >= 80 && $nilai <= 89) {
                    return "B";
                } elseif ($nilai >= 70 && $nilai <= 79) {
                    return "C";
                } elseif ($nilai >= 0 && $nilai <= 69) {
                    return "D";
                } else {
                    return "Nilai wajib di antara 0 - 100";
                }
          }
        }

        $inputNilai = 85;
        $gradeRaport = new GradeRaport($inputNilai);
        echo "Nilai $inputNilai = ", $gradeRaport->getGrade();
        // Grade Raport End


        class Waktu {
            private $jam;

            public function __construct($jam)
            {
               $this->jam = $jam;
            }

            public function setJam()
            {
                $jam = $this->jam;

                if($jam >= "00:00" && $jam < "'04:00"){
                    return "Subuh";
                } elseif ($jam >= "04:00" && $jam < "10:00") {
                    return "Pagi";
                } elseif ($jam >= "10:00" && $jam < "15:00") {
                    return "Siang";
                } elseif ($jam >= "15:00" && $jam < "17:30") {
                    return "Sore";
                } elseif ($jam >= "17:30" && $jam < "18:30") {
                    return "Petang";
                } elseif ($jam >= "18:30" && $jam <= "24:00") {
                    return "Malam";
                } else {
                    return "Dunia lain";
                }
            }
        }
        //Call Waktu
        $jamInput = "18:25";
        $waktu = new Waktu($jamInput);
        echo "$jamInput = " . $waktu->setJam();

        function getJadwalAndi($waktu) {
            $jadwal = [
                ["15:45", "Mengaji (setelah mandi)"],
                ["16:15", "Mengerjakan tugas sekolah"],
                ["18:15", "Membeli bumbu masakan"],
                ["18:30", "Makan malam setelah sholat maghrib"],
                ["19:00", "Menghafalkan dialog festival"],
                ["19:30", "Chatting dengan Raya tentang festival"],
                ["20:00", "Mengobrol bersama keluarga"],
                ["20:30", "Waktu luang"],
                ["22:00", "Tidur"]
            ];
        
            foreach ($jadwal as $item) {
                if ($waktu == $item[0]) {
                    return "Pada pukul $waktu, kegiatan: {$item[1]}";
                }
            }
            return "Pada pukul $waktu, tidak ada kegiatan terjadwal.";
        }
        
        // Contoh input waktu
        $inputWaktu = "19:00";
        echo getJadwalAndi($inputWaktu);
    ?>
</body>
</html>