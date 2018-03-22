<?php
$ogrenci=($_POST["ogrencno"]);
echo substr($ogrenci,9);
echo "5 saniye sonra sayfaya yönlendiriliyorsunuz";
	if(strstr($ogrenci, "gmail" ))
 {
	 header("Refresh: 5; url=www.oys2.deu.edu.tr");
	
 }
	 
	 else if(strstr($ogrenci, "hotmail" ))
	{
		header("Refresh: 5;  url=www.oys.deu.edu.tr");
		
	}
	
	else
		echo "Doğru bir öğrenci numarası giriniz.";
	

?>
