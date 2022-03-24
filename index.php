<html>
<head>
    <title>Kalkulator Wahyu</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php 
        if(isset($_POST['hitung'])){
            $bil1    =$_POST['bil1'];
            $bil2    =$_POST['bil2'];
            $operasi=$_POST['operasi'];
        
            switch ($operasi) {
                case 'tambah':
                $hasil = $bil1+$bil2;
                break;
                case 'kurang':
                $hasil = $bil1-$bil2;
                break;
                case 'kali':
                $hasil = $bil1*$bil2;
                break;
                case 'bagi':
                $hasil = $bil1/$bil2;
                break; 
            }
        }
    ?>
    <div class="kalkulator">
        <h4 class="judul">KALKULATOR WAHYU</h4>
        <form method="post" action="./"> 
            <input type="text" name="bil1" class="bil" placeholder="Bilangan 1" required/>
            <input type="text" name="bil2" class="bil" placeholder="Bilangan 2" required/>
            <select class="opt" name="operasi">
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">x</option>
                <option value="bagi">/</option>
            </select>
            <input type="submit" name="hitung" value="Hitung" class="tombol"/> 
            <a href="./" style="text-decoration:none;"><input type="button" value="Hapus" class="tombol"/></a> 
        </form>
        <?php if(isset($_POST['hitung'])){
        ?>
            <input type="text" value="<?php echo $hasil; ?>" class="hasil"/>
        <?php
        }
        else{
        ?>
            <input type="text" value="0" class="hasil"/>
        <?php
        }
        ?> 
    </div>
</body>
</html>