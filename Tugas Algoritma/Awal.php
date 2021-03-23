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
                <form method="POST">
                    <table cellpadding="7">
                        <tr>
                            <tr>
                            <td>Jumlah Pasien Hari Ini</td>
                            <td>:</td>
                            <td></td>
                            <td><input type="text" name="jumlah" placeholder="Jumlah Pasien"></td>
                        </tr>
                        <table align="center">
                            <td><input type="submit" name="submit" value="Submit"></td>
                            </table>
                    </table>
                </form>
                <div >
                  <?php 
                    $jumlah = @$_POST['jumlah'];
                    if ($jumlah) {
                        include 'perulangan.php';
                    }
                   ?>
                </div>
            </fieldset>
        </center>
</body>
</html>