# yii2-manav
manav
İnternet programcılığı projesi – manav modülü
Mehmet alperen onarır 180202083 


Bu modül meyveler ve üretici firmalar bilgilerini ilişkilendirmesi hedeflenmiştir.

Kurulum

Github*1 a yüklenen modül pagagist*2 e tanıtılmıştır. 
 

1.	Adım vagran up ile sanal sunucunuzu ayağa kaldırınız.
2.	Sanal makinenizin içine ssh yardımı ile giriniz  örn: ssh -i .vagrant/machines/webgece/virtualbox/private_key vagrant@webgece
3.	Backend veya frontend kullanımı için ilgili seçimin altında config/main.php dosyasında modules bölümünde modülü tanıtınız.
Örn 
'modules' => [
     
     'manav' => [
            'class' => 'mehmetalperen95\manav\Module',
        ],

   ],
   4. adım  “composer require mehmetalperen95/yii2-manav” kodu ile projenizin içerisine kurabilirsizin.
*1 https://github.com/mehmetalperen95/yii2-manav
*2 https://packagist.org/packages/mehmetalperen95/yii2-manav


genel bilgiler
cd vagrant   -> vagranta girer
vagrant up   -> makineyi ayağa kaldırır
vagrant halt -> makineyi kapatır
vagrant status -> run
vagrant reload -> degisiklikleri kaydeder
vagrant ssh 



migrate oluşturulmuştur.
meyveler için tablo oluşturulmuştur.
meyveler için controller oluşturulmuştur.

tedarikciler tablosu ve ilişkilendirme işlemi eksiktir.. 
