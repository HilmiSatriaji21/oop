<html>
     <head><title>Form Array</title></head>
     <body>
     <center><h1>Form Array</h1></center>
     <fieldset>
     <legend>Form Array</legend>
     <br>
     <FORM ACTION ="" METHOD="GET">
     <label for="">Masukan Jumlah</label>
     <input type="number" min="1" name="jumlah" required>
     <br>
     <br>
     <input type="submit" name="Input" value="OK">
     <input type="reset" name="Reset" value="Reset"><br>
     <hr>
           </FORM>
           <FORM ACTION ="output.php" METHOD="POST">
     </html>      
      <?php
      if (isset($_GET['Input'])) {
          $b = $_GET['jumlah'];
      for ($a=0; $a < $b; $a++) { ?>
          <label for=>Nama</label>
          <input type="text" name="nama[]" required>
          <label for=>NIK</label>
          <input type="number" name="nik[]" required>
          <label for=>Alamat</label>
          <input type="text" name="alamat[]" required>
          <label for=>Umur</label>
          <input type="number" name="umur[]" required>
          <br>
          <br>
      <?php } ?>
      <input type="submit" name="sbm" value="OK">
      <input type="reset" value="Reset">
      </FORM> 
      <?php }?>
</fieldset>
</body>      