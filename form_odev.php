<form action="form_odev.php" method="post">
    <input type="number" name="sayi" id="" placeholder="sayı">
    <input type="submit" value="Gönder" name="gonder">
</form>

<?php

function bol($p){

    $sayi = $_POST["sayi"];
    if($sayi%3==0){
      echo "3'e tam bölünür";
    }else{
    $alt = $sayi - ($sayi % 3);
    $ust = ($sayi % 3 == 0) ? $sayi : $alt + 3;
    return "$sayi sayısı 3'e tam bölünemez. En yakın 3'e bölünebilen sayı: $ust";    
}

}

echo bol($p);
?>