<!DOCTYPE html> <!-- css tables- table borders at w3schools-->
<html>
<head>
  <meta charset="UTF-8">
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<table id="customers">
  <tr>
    <th>Ad Soyad</th>   <!-- paneldeki ana sütunlar-->
    <th>Telefon</th>
    <th>Email</th>
    <th>Konu</th>
    <th>Mesaj</th>
  </tr>

  <?php 

  session_start(); /*oturum başlatılır*/

  if($_SESSION["user"]=="") {  /*eğer kullanıcı ismi olmadan, direkt panel.phpye girmeye çalışırsa sistem çıkış yapsın*/
    echo"<script>window.location.href='cikis.php'</script>";  /*burda window.location.href ile başka php dosyasına yönlendirdik. cikis.phpdeki düzenleme ile sistemden çıkış yapacak*/
  }





  else{


    
echo "Kullanıcı Adınız :".$_SESSION['user']."<br>";
echo "<a href='cikis.php'>ÇIKIŞ YAP</a><br><br>";


include("baglanti.php");   /*bağlantı.php yi içeri çektik veritabanına bağlanmamızı sağlar*/

$sec="Select * From iletisim";   /*veritabanındaki iletisim tablosundan tamamını seç, tüm sutunları*/

$sonuc=$baglan->query($sec); /* $sec  işlemine ait sorguyu burda çalıştırıp ve $sonuç içerisine atılır*/

 
if($sonuc->num_rows>0) {   /*sonuc koşulu çalışıp, satır>0 ise yani verimiz varsa */   
    while($cek=$sonuc->fetch_assoc()) {    //burdaki fetch assoc ile tablomuzdaki tüm verileri alıp, $cek dizisi içine atıyoruz.Bu dizi sayesinde ekranda görüntü<lenebilir.

      echo "
  
      <tr>
        <td>".$cek['adsoyad']."</td>
        <td>".$cek['telefon']."</td>     
        <td>".$cek["email"]."</td>
        <td>".$cek["konu"]."</td>
        <td>".$cek["mesaj"]."</td>
      </tr>



      "; //*bunlar veritabanındaki sütunlar. Bu sütunlardan panelin içine veriyi çekecek*/

    }
    
}

else{
  echo "Veritabanında Kayıtlı Hiçbir Veri Bulunamamıştır";

   }

} 



?>



  <tr>                        <!--bu kendi eklediğimiz veri-->
      <td>Ali</td>
      <td>05539567412</td>
      <td>ali@ali.com</td>
      <td>TEST</td>
      <td>Teşekkür ederim</td>
  </tr>

  
</table>

</body>
</html>


