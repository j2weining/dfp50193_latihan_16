<?php
$program = [
    'Politeknik Ungku Omar' => [
        'Sarjana Muda Teknokologi Kejuruteraan Awam Dengan Kepujian'=>[
            'STPM',
        ],
        'Sarjana Muda Teknokologi Kejuruteraan Pembuatan (Pengurusan Rangkaian Bekalan) Dengan Kepujian'=>[
            'STPM',
        ],
        'Diploma Kejuruteraan Awam'=>[
            'SPM',
        ],
        'Diploma Seni Bina'=>[
            'SPM',
        ],
    ],
    'Politeknik Sultan Haji Ahmad Shah' => [
        'Diploma Kejuruteraan Awam'=>[
            'SPM',
        ],
        'Diploma Seni Bina'=>[
            'SPM',
        ],
        'Diploma Geomatik'=>[
            'SPM',
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
    <title>Table</title>
    <style>
        table {
            width: 800px;
        }

        * {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        #poli {
            text-align: center;
            background-color: khaki;
            font-weight: bold;
        }

        #title {
            color: white;
            background-color: orangered;
            font-weight: bold;
            text-align: left;
        }
    </style>
</head>

<body>
    <!-- <table border="1" cellpadding="3" cellspacing="0">
        <tr id="title">
            <th>Program</th>
            <th>Kelayakan</th>
        </tr>

        <tr>
            <td colspan="2" id="poli">
                Politeknik Ungku Omar
            </td>
        </tr>

        <tr>
            <td>Sarjana Muda Teknologi Kejuruteraan Awam Dengan Kepujian</td>
            <td>STPM</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="2" id="poli">
                Politeknik Sultan Haji Ahmad Shah
            </td>
        </tr>
        <tr>
            <td rowspan="2">Diploma Kejuruteraan Awam</td>
            <td colspan="2">SPM</td>
        </tr>
        <tr>
            <td> Sijil Kolej Komuniti</td>
        </tr>
        <tr>
            <td rowspan="2">Diploma Seni Bina</td>
            <td>SPM</td>
        </tr>
        <tr>
            <td> Sijil Kolej Komuniti</td>
        </tr>
        <tr>
            <td rowspan="2">Diploma Geomatik</td>
            <td>SPM</td>
        </tr>
        <tr>
            <td> Sijil Kolej Komuniti</td>
        </tr>
    </table> -->

    <table border="1" cellpadding="3" cellspacing="0">
        <tr id="title">
            <td>PROGRAM</td>
            <td>KELAYAKAN</td>
        </tr>
        
    <?php
    foreach ($program as $poli => $value){
        echo '<tr>';
        echo "<th colspan=2 id=poli>$poli</th>";
        echo '</tr>';
        foreach ($value as $course =>$test){
            echo '<tr>';
            echo "<td rowspan=2>$course</td>";
            echo "</tr>";
            foreach($test as $kelayakan){
                echo '<tr>';
                echo "<td>$kelayakan</td>";
                echo "</tr>";
                
            }
        }
    }
    ?>
    </table>
</body>

</html>