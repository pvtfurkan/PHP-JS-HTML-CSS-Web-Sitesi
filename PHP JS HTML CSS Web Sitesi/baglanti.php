<?php 

$vt_sunucu="localhost";  /*değiş<ken> */
$vt_kullanici="root";  /* localhost kullanıcı adı*/
$vt_sifre="";  /*herhangi bir şifre olmadığı için localhostta boş*/
$vt_adi="paylastikca";  /*veri tabanı adı*/



$baglan=mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);  /*bağlantıyı neyle yaptığın, burda verilen değişkenleri çekersin */

//bağlantıda bir problem olursa diye if kullanılır

if(!$baglan) {  //eğer bağlantı olamamışsa
   die("Veritabanı bağlantı işlemi başarısız".mysqli_connect_error()); //bu mesaj görünür

}



?>