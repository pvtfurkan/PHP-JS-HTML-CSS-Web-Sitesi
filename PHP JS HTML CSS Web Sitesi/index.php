<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="UTF-8">
        <title>Anasayfa | Paylaştıkça</title>
        <link rel="stylesheet" href="css/style.css">

        <script src= "https://kit.fontawesome.com/c20485228a.js"
        crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">  

       <link rel="stylesheet" href="owl/owl.carousel.min.css"> 
       <link rel="stylesheet"  href="owl/owl.theme.default.min.css"> <!--eğitimlerde kaydırma özelliği için css bağlantıları-->


</head>
<body>
  
    <section id="menu">
        <div id="logo">Paylaştıkça</div>
        <nav>
            <a href=""><i class="fas fa-home ikon"></i>Anasayfa</a>  <!--hepsine ikon classı eklendi çünkü hepsine birden düzenlemeyi kolaylaştırmak için-->
            <a href=""><i class="fas fa-info ikon"></i>Hakkımızda</a>
            <a href=""><i class="fas fa-graduation-cap ikon"></i>Eğitimler</a>
            <a href=""><i class="fas fa-users ikon"></i>Ekip</a>
            <a href=""><i class="fas fa-phone-square ikon"></i>İletişim</a>
        </nav>

</section> 


    <section id="anasayfa">  
       <div id="black">
       </div>

       <div id="icerik">
           <h2>Paylaştıkça</h2>
           <hr width=300 align=left >   <!-- hr çizgi oluşturur align left sola alır-->
           <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dicta molestiae, doloribus perferendis aliquid sequi voluptatum, magnam ab expedita itaque autem minima.</p>
       </div>
  
    </section>
    
    <section id="hakkimizda">
        <h3>Hakkımızda</h3>

        <div class="container"> <!--başlık dışındaki kısımları kapsayan div-->
            <div id="sol">
                <h5 id="h5sol">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere voluptates.
                </h5>
            </div>
            <div id="sag">
                <span>L</span>
                
                <p id="psag"> orem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem porro asperiores delectus. Ducimus magni quam, eaque quisquam voluptates saepe beatae, minima iusto molestiae ipsa aliquam debitis, a autem? Exercitationem, cupiditate?
                </p>
            </div>

            <img src="img/about.jpg" alt="" class="img-fluid mt100">
            
            <p id="pson">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum quam numquam beatae, ab, nostrum maiores itaque enim voluptatibus ipsa provident quaerat, consequuntur nulla molestias blanditiis sit quasi. Earum, beatae saepe.
            </p>


        </div>
    </section>

    <section id="egitimler">
        <div class="container">
           <!-- aynı isimde class olan container csste aynı işlemi görür ama onun altında başka bir değer varsa alttaki class  veya etiketle bunu değiştirebilirsin-->
            <h3>Eğitimler</h3>
             <!-- data merge bir buçuk kutuluk yer kaplamasını sağlar.Böylelikle cardlar birbirine girmez-->
            <div class="owl-carousel owl-theme">
                <div class="card item" data-merge=1.5>
                    <img src="img/r2.jpg" alt="" class="img-fluid">
                    <h5 class="baslikcard">HTML5 VE CSS3 Eğitimi</h5>
                    <p class="cardp">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="card item" data-merge=1.5>
                    <img src="img/r2.jpg" alt="" class="img-fluid">
                    <h5 class="baslikcard">HTML5 VE CSS3 Eğitimi</h5>
                    <p class="cardp">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="card item" data-merge=1.5>
                    <img src="img/r2.jpg" alt="" class="img-fluid">
                    <h5 class="baslikcard">HTML5 VE CSS3 Eğitimi</h5>
                    <p class="cardp">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
    

      <!--card item https://owlcarousel2.github.io/OwlCarousel2/demos/basic.html bu siteden alındı--> 




            </div>

        </div>
    </section>

    <section id="ekip">
        
            <div class="container">
                <h3 id="ekiph3">Ekip</h3>

                <div class="sutun-sol-sag">
                    <img src="img/ekip1.jpg" alt=""  class="img-fluid oval"> <!-- img fluid bulunduğu alanın içerisine oturmasını sağlar-->
                    <h4 class="ekipisim">Furkan Can</h4>
                    <p class="ekipp">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.Quae, illum.
                    </p>
                    
                    <div class="ekip-ikon">
                        <a href="#"><i class="fab fa-facebook social"></i></a>
                        <a href="#"><i class="fab fa-instagram social"></i></a>
                        <a href="#"><i class="fab fa-twitter-square social"></i></a>
                    </div>
                </div>


                
                <div class="sutun">
                    <img src="img/ekip2.jpg" alt=""  class="img-fluid oval"> <!-- img fluid bulunduğu alanın içerisine oturmasını sağlar-->
                    <h4 class="ekipisim">Büşra Yılmaz</h4>
                    <p class="ekipp">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.Quae, illum.
                    </p>
                    
                    <div class="ekip-ikon">
                        <a href="#"><i class="fab fa-facebook social"></i></a>
                        <a href="#"><i class="fab fa-instagram social"></i></a>
                        <a href="#"><i class="fab fa-twitter-square social"></i></a>
                    </div>
                </div>

                
                <div class="sutun-sol-sag">
                    <img src="img/ekip3.jpg" alt=""  class="img-fluid oval"> <!-- img fluid bulunduğu alanın içerisine oturmasını sağlar-->
                    <h4 class="ekipisim">Zuhal Acar</h4>
                    <p class="ekipp">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.Quae, illum.
                    </p>
                    
                    <div class="ekip-ikon">
                        <a href="#"><i class="fab fa-facebook social"></i></a>
                        <a href="#"><i class="fab fa-instagram social"></i></a>
                        <a href="#"><i class="fab fa-twitter-square social"></i></a>
                    </div>
                </div>

        

        


            </div>

        
    </section>

    <section id="iletisim">
        <div class="container">
            <h3 id="h3iletisim">İletişim</h3>

            <form action="index.php" method="POST"> <!--iletişimopak divininin içinde olan işlemler index.php'ye yönlendirilir-->

            <div id="iletisimopak">
                <div id="formgroup">
                    <div id="solform">
                        <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control"> <!--name=isim kısmı php için --> 
                        <input type="text" name="tel" placeholder="Telefon numarası" required class="form-control"> <!--placeholder yer tutuucu text kutusunda silik bir şekilde yazar-->
                    </div>    
                    <div id="sagform">
                        <input type="email" name="mail" placeholder="Email Adresiniz" required class="form-control"> <!--name=isim kısmı php için --> 
                        <input type="text" name="konu" placeholder="Konu Başlığı" required class="form-control"> 
                    </div>
                

                    <textarea name="mesaj" id="" cols="30"  placeholder="Mesaj Giriniz" rows="10" required class="form-control"></textarea>

                    <input type="submit" value="Gönder" name="button">
                 </div>

                 

                <div id="adres">

                    <h4 id="adresbaslik">Adres : </h4>
                    <p class="adresp">Büyükdere Mahallesi</p>
                    <p class="adresp">Kurtuluş Caddesi</p>
                    <p class="adresp">Tamirciler Sokak No:44/4</p>
                    <p class="adresp">Email : phpjshmtlcss@websitesi.com</p>
                </div>
             </div>
          </div>
       </form>

            <footer> <!--en alt kısım-->
                <div id="copyright">2021 Tüm Hakları Saklıdır</div>

                <div id="socialfooter"> <!--footerdaki sosyal medya ikonlarını bir arada tutacak div -->
                    <a href="#"><i class="fab fa-facebook social"></i></a>
                    <a href="#"><i class="fab fa-instagram social"></i></a>
                    <a href="#"><i class="fab fa-twitter-square social"></i></a>


                </div>

                <a href="#menu"><i class="fas fa-angle-up" id="up"></i></a>

            </footer>



        </div>
    </section>
    
        

<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script> <!-- jquerry kütüphanesi bağlandı-->

<script src="owl/owl.carousel.min.js"></script> <!--hazır js dosyası bağlandı. Bu eğitimlerdeki kaydırma özelliği için-->


<script src="owl/script.js"></script>
</body>



</body>

</html>

<?php

//baglanti.php dosyasını bu dosyanın içerisine çekicez.Bu veritabanına bağlanmamızı sağlar.

include("baglanti.php");

if(isset($_POST["isim"], $_POST["tel"], $_POST["mail"], $_POST["konu"],$_POST["mesaj"]))                        /*isset: verim var mı? */  /*name olarak verdiğimiz değerleri yazıyoruz*/ 
{
    $adsoyad=$_POST["isim"];  /*formgroup içerisindeki elemanların içerisindeki name değeri aldık ve bir değişkene atadık*/ 
    $telefon=$_POST["tel"];
    $email=$_POST["mail"];
    $konu=$_POST["konu"];
    $mesaj=$_POST["mesaj"];


            //veritabanına bu alanlara eklencek                               /bunlar phpden eklenecek değerler
    $ekle="INSERT INTO iletisim(adsoyad, telefon, email, konu, mesaj) VALUES ('".$adsoyad."','".$telefon."','".$email."','".$konu."','".$mesaj."')";   
     /* phpmyadmin->paylastikca->sql->insert kısmından veritabanına veriyi ekleme için INSERT INTO gerekli kodu alırsın */ 
     

     if($baglan->query($ekle)===TRUE) {  /*query=sorgula*/
         echo "<script>alert('Mesajınız Başarı ile Gönderildi.')</script>";  /*script ile üstte uyarı gelmesi sağlandı, php ile altta uyarı gelirdi*/
     }
     else{
         echo "<script>alert('Hata: Mesajınız Gönderilmedi')</script>";
     }
 }
     








?>