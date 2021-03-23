<form method="post" autocomplete="off" action="Hasil.php">
    <?php 
        for ($i=1; $i<$jumlah+1 ; $i++) { 
    ?>
        <div>
            <hr /><hr />
            <table cellpadding="7">
                <?php 
                echo "<h2>Pasien ke-$i </h2>";
                ?>
                        <tr>
                            <td>ID Pasien</td>
                            <td>:</td>
                            <td></td>
                            <td><input type="text" name="id" placeholder="ID Pasien"></td>
                        </tr>
                        <tr>
                            <tr>
                            <td>Nama Pasien</td>
                            <td>:</td>
                            <td></td>
                            <td><input type="text" name="name" placeholder="Nama Pasien"></td>
                        </tr>
                        <tr>
                            <td>Jam Check-Up</td>
                            <td>:</td>
                            <td></td>
                            <td>
                                <select name="jam">
                                    <option>-Pilih-</option>
                                    <option>09:00 WIB</option>
                                    <option>10:00 WIB</option>
                                    <option>11:00 WIB</option>
                                    <option>13:00 WIB</option>
                                    <option>14:00 WIB</option>
                                    <option>15:00 WIB</option>
                                    <option>16:00 WIB</option>
                                </select>
                            </td>
                        </tr>
            </table>
        </div>
    <?php
        }
     ?>
    <hr size="10px" color="#00008B"/>
            <table align="center">
            <td><input type="submit" name="submit" value="Kirim"></td>
            <td><input type="reset" name="reset" value="Hapus"></td>
            </table>
    </div>
</form>
