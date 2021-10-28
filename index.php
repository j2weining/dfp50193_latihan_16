<?php
$program = [
    'Politeknik Ungku Omar' => [
        'Sarjana Muda Teknokologi Kejuruteraan Awam Dengan Kepujian'=>[
            '(A)' =>'STPM',
            '(B)' =>'Matrikulasi',
            '(C)' =>'Diploma'
        ],
        'Sarjana Muda Teknokologi Kejuruteraan Pembuatan (Pengurusan Rangkaian Bekalan) Dengan Kepujian'=>[
            'STPM',
            'Matrikulasi',
            'Diploma'
        ],
        'Diploma Kejuruteraan Awam'=>[
            'SPM',
            'Sijil Kolej Komuniti',
        ],
        'Diploma Seni Bina'=>[
            'SPM',
            'Sijil Kolej Komuniti',
        ],
    ],
    'Politeknik Sultan Haji Ahmad Shah' => [
        'Diploma Kejuruteraan Awam'=>[
            'SPM',
            'Sijil Kolej Komuniti',
        ],
        'Diploma Seni Bina'=>[
            'SPM',
            'Sijil Kolej Komuniti',
        ],
        'Diploma Geomatik'=>[
            'SPM',
            'Sijil Kolej Komuniti',
        ],
    ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulang Kaji Array</title>
    <style>
        * {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        li {
            line-height: 1.5;
        }
    </style>
</head>

<body>
    <h1>Senarai Porgram Di Politeknik</h1>
    <!-- <pre><?php print_r($program); ?></pre> -->

    <ul>
        <?php
        foreach ($program as $poli => $value) {
            echo "<li>$poli";
            echo "<ul>";
            // $value mempunyai value array yang ada dalam $program
            foreach ($value as $course => $test) {
                echo "<li>$course";
                echo "<ul>";
                foreach($test as $kelayakan){
                    echo "<li>$kelayakan</li>";
                }
                echo "</ul>";
                echo "</li>";
            }
            echo "</ul>";
            echo "</li>";
        }
        ?>
    </ul>
    <!-- <ul>
        <li>Politeknik Ungku Omar
            <ul>
                <li>Sarjana Muda Teknologi Kejuruteraan Awam Dengan Kepujian</li>
                <li></li>
            </ul>
        </li>
    </ul> -->
</body>

</html>