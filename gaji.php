<html>
     <head><title>Form Penggajian</title></head>
     <body>
     <li><kbd>Penggajian</kbd></li>
     <fieldset>
     <br>

     <FORM ACTION ="gajipro.php" METHOD="POST" NAME="input">
     <tr>
           <td>Nama Anda : </td><input type="text" name="nama"><br>
           <br>
     </tr>
     <tr>
           <td>NIP Anda : </td><input type="number" name="NIP"><br>
           <br>
     </tr>
     <tr>
           <td>Alamat Anda :<textarea name="alamat" cols="40"
            rows="5"></textarea></td><br>
            <br>
     </tr>
     <tr>
           <td>Jumlah Hari Kerja : </td><input type="number" name="jumlah" max="30"><br>
           <br>
     </tr>
     <tr>
     <td><input type="submit" name="Simpan" value="Simpan"></td>
     </tr>
     <tr>
     <td><input type="reset" name="Reset" value="Reset"></td>
                 </fieldset>
           </FORM>
     </body>
</html>                   
