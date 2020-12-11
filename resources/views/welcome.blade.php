<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ str_replace('_', '-', app()->getLocale()) }}</title>

    <!-- Styles -->


    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
        }

        .text-center {
            text-align: center
        }

        .text-left {
            text-align: left
        }

        .text-right {
            text-align: right
        }

        .text-bold {
            font-weight: 400;
        }

        table {
            width: 100%;
            table-layout: fixed;
            border-spacing: 0;
        }

        @page {
            margin: 2rem 2.5rem;
        }

        .d-flex {
            display: flex;
            justify-content: space-between;
        }

        .table th {
            background-color: rgba(110, 110, 110, 0.055);
        }

        .table th,
        .table td {
            border: 1px solid;
        }

        .p-0 {
            padding: 0px;
        }

        .m-0 {
            margin: 0px;
        }

        .remove-padding h1,
        .remove-padding h2,
        .remove-padding h3,
        .remove-padding p,
            {
            padding: 0;
            margin: 0;
        }

    </style>
</head>

<body>
    <table class="text-center remove-padding" cellspacing="0" cellpadding="0">
        <tr>
            <td rowspan="4" style="width: 15%">
                <img src="./Lambang-Kabupaten-Karimun.jpg" alt="Red dot" />
            </td>
            <td>
                <h1>PANITIA KHUSUS</h1>
            </td>
        </tr>
        <tr>
            <td>
                <h2>DEWAN PERWAKILAN RAKYAT DAERAH</h2>
            </td>
        </tr>
        <tr>
            <td>
                <h3>KABUPATEN KARIMUN</h3>
            </td>
        </tr>
        <tr>
            <td>
                <p>Jl. Canggal putri, Kecamatan Tebing Kabupaten Karimun</p>
            </td>
        </tr>
    </table>
    <hr>
    <div class="text-center">
        <h3 class="d-block">RAPAT DENGAN PENDAPAT (RDP)</h3>
        <h3 class="d-block">PANSUS ....................</h3>
    </div>

    <table>
        <tr>
            <td style="width: 15%">Hari / Tanggal</td>
            <td style="width: 1%">: </td>
            <td>kmdaks </td>
        </tr>
        <tr>
            <td style="width: 10%">Waktu</td>
            <td style="width: 1%">: </td>
            <td>kmdaks </td>
        </tr>
    </table>
    <br /><br />

    <h5>Undangan :</h5>
    <table>
        <tr>
            <td style="width: 2%">1. </td>
            <td>......................</td>
        </tr>
        <tr>
            <td>2. </td>
            <td>......................</td>
        </tr>
        <tr>
            <td>3. </td>
            <td>......................</td>
        </tr>
        <tr>
            <td>4. </td>
            <td>......................</td>
        </tr>
    </table>

    <br><br><br><br>
    <h5>Pinpinan rapat ...........................</h5>
    <br><br><br>
    <h5>.................... (Undangan)</h5>
    <br><br><br>
    <h5 style="text-decoration: underline">KESIMPULAN: </h5>
    <table>
        <tr>
            <td style="width: 1.5%">1. </td>
            <td>dsakmdka</td>
        </tr>
        <tr>
            <td>2. </td>
            <td>dsakmdka</td>
        </tr>
    </table>
    <br><br><br>
    <div class="text-center">
        <p>DEWAN PERWAKILAN RAKYAT</p>
        <p>KABUPATEN KARIMUN</p>
        <p>KETUA PANSUS</p>
    </div>
</body>

</html>
