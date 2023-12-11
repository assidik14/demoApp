<?php
    include 'fungsi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo App</title>
</head>
<body>
    <div class="container" style="padding: 10px;">
        <h1>Simple Calculator using PHP</h1>
        <form method="POST" action="#">
            <input required type="number" name="numb1" style="margin-bottom: 5px;" placeholder="Masukkan Angka Pertama">
            <br>
            <input required type="number" name="numb2" style="margin-bottom: 10px;" placeholder="Masukkan Angka Kedua">
            <br>
            <button name="operator" type="submit" value="tambah">
                <img src="https://cdn-icons-png.flaticon.com/128/3524/3524388.png" alt="plus" style="width: 15px;">
            </button>
            <button name="operator" type="submit" value="kurang">
                <img src="https://cdn-icons-png.flaticon.com/128/6048/6048436.png" alt="minus" style="width: 15px;">
            </button>
            <button name="operator" type="submit" value="kali">
                <img src="https://cdn-icons-png.flaticon.com/128/43/43823.png" alt="multiply" style="width: 15px;">
            </button>
            <button name="operator" type="submit" value="bagi">
                <img src="https://cdn-icons-png.flaticon.com/128/43/43097.png" alt="distribute" style="width: 15px;">
            </button>
        </form>
        <?php
                if (isset($_POST['operator'])){
                    session_start();
                    if ($_POST['operator']=='tambah'){
                        $_SESSION['hasil'] = "Hasil penjumlahan = ";
                        $hasil = tambah($_POST['numb1'], $_POST['numb2']);
                    } elseif ($_POST['operator']=='kurang'){
                        $_SESSION['hasil'] = "Hasil pengurangan = ";
                        $hasil = kurang($_POST['numb1'], $_POST['numb2']);
                    } elseif ($_POST['operator']=='kali'){
                        $_SESSION['hasil'] = "Hasil perkalian = ";
                        $hasil = kali($_POST['numb1'], $_POST['numb2']);
                    } elseif ($_POST['operator']=='bagi'){
                        $_SESSION['hasil'] = "Hasil pembagian = ";
                        $hasil = bagi($_POST['numb1'], $_POST['numb2']);
                    }
                }
            ?>
           <?php
            if (isset($_SESSION['hasil'])):
                echo "<h3>".$_SESSION['hasil'].$hasil."</h3>";
                session_destroy();
            endif;
           ?> 
    </div>
</body>
</html>