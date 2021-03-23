<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Check-Up Pasien</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
        <center>
            <fieldset style="width: 50%;">
                <h3>Jadwal Pasien</h3>
                <form action="ihsort.php" method="POST">
                    <table cellpadding="7">
                        <tr>
                            <tr>
                            <td>Pasien awal</td>
                            <td>:</td>
                            <td></td>
                            <td><input type="text" name="inisialisasi" placeholder="ID Pasien"></td>
                        </tr>
                        <tr>
                            <td>Jumlah Pasien</td>
                            <td>:</td>
                            <td></td>
                            <td><input type="text" name="jumlah" placeholder="Jumlah Pasien"></td>
                        </tr>
                        <tr>
                            <td>Jenis Pengurutan</td>
                            <td>:</td>
                            <td></td>
                            <td>
                                <select name="jenis">
                                    <option value="">-Pilih-</option>
                                    <option value="Ascending">Urutan No. Dari Awal</option>
                                    <option value="Descending">Urutan No. Dari Akhir</option>
                                </select>
                            </td>
                        </tr>
                        <table align="center">
                            <td><input type="submit" name="submit" value="Kirim"></td>
                            <td><input type="reset" name="reset" value="Hapus"></td>
                            </table>
                    </table>
                </form>
            </fieldset>
        </center>
</body>
</html>