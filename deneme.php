<form action="#" name="fav_animal" method="post">
    <input type="text" name="name_surname" placeholder="adınızı ve soyadınızı giriniz"><br><br>
    <input type="number" name="age" placeholder="yaşınızı giriniz"><br><br>
    <input type="text" name="animal" placeholder="en sevdiğiniz hayvanı giriniz"> <br><br>
    <input type="submit" name="gonder" value="Gönder">
</form>


<?php
    if(isset($_POST['gonder'])){
        $adsoyad=$_POST['name_surname'];
        $age=$_POST['age'];
        $animal=$_POST['animal'];
        if($age<18){
            echo  " sevgili $adsoyad; yasiniz $age oldugu icin bu sisteme katilamazsiniz";
        }else{
            echo "sevgili $adsoyad; yasiniz $age, en sevdiginiz hayvan $animal oldugunu belirttiniz";
        }
    }
?>
