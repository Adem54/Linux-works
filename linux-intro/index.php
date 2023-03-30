<?php 

/*
Linux egitimi ders kaynaklarina burdan erisebiliriz
linux-dersleri.github.io 

GNU/LINUX 
Daha once Unix isminde isletim sistemi vardi ve Unix lisans ucreti istiyordu ondan dolayi
sistemi kullanmak zorlasmisti ve insanlar kendi isletim sistemlerini yazdilar
Linus Torvalds-
Revolution Os documantation izelenebilir 
Linux bir cekirdekti ilk basta ve yaptigis su idi sadece :
Sistemde yuklu bulunan yazilimlar,araclar tarfindan gerceklestirilen islemleri donanimin anlayacagi
dilden ifade etmektir, bu sayede kullanicinin yapmak istdigi islem emirleri donanima kolayca yaptirilmaktadir
cekirdek-core veya kernel diye ifade edilir
Burdaki cekirdek sadece bir arabirimdir, tekbasina isletim sistemi degildir
Yani yazilm araclari olmadan kullanicilar dogrudan kernel e emir vererek islerini donanima yaptiramiyorlar
Kullanicilarin kolayca kullanabilecekleri araclar olmadan cekirdegi kullanmak mumkun degildir


Araclar                                         DONANIM-HARDWARE
metind-editoru                                  RAM
pencere yoneticileri      <=  CEKIRDEK =>       CPU
                                                AYGITLAR
grafik arabirimleri

GNU DA ISLETIM SISTEMI GELISTIRMEYE CALISIYORDU
GNU-GNU IS NOT UNIX 
FREE
ACIK KAYNAKLI
KARARLI BIR KERNELI YOKTU 

GNU ILE LINUX BIRLESTI VE GNU LINUX UN CEKIRDEGI ILE BIRLESEREK ORTAYA 
HARIK BIR GNU/LINUX ISLETIM SISTEMI CIKMIS OLDU
GNU/LINUX DEVRIMI BU SEKILDE GERCEKLESTI 
GPL LISANSI ACIK KAYNAKLI ARACLARI N YASALOLARAK LISANSLANABILMESI ICIN ORTAYA KONMUSTUR 
BU GPL LISANSI SAYESINDE BIZE CIDDI OZGURLUK SAGLIYOR

Linuxdistribusjon-LINUX DAGITIM-DISTRO
GNU/LINUX YAPISINI ANLAYALIM

ACIK KAYNAKLI ARACLAR
Araclar                                         DONANIM-HARDWARE
metind-editoru               LINUX-KERNEL       RAM
pencere yoneticileri      <=  CEKIRDEK =>       CPU
Acik kaynakli araclar                            AYGITLAR
grafik arabirimleri

GNU/LINUX 
INSANLARIN IHTIYACLARIN A GORE FARKI DAGITIMLAR ALTINDA OZELLESTIRILEREK COGALTILMISTIR

TUM GNU/LINUX DAGITIMLARI LINUX-KERNEL CEKIRDEGINI KULLANIR
ISLETIM SISTEMI BIZIM KULLANDIGMIZ ARACLARIN ISLEVSELLIGINI SAGLAYAN YAZILIMDIR ASLINDA

DAGITIMLAR ICINDE, YANI IHTIYACLARA GORE FARKLI ARACLAR, YUKLENMISTIR,VE KENDI ICINDE OZLLESTIRMISTIR

COOK ONEMLI MANTIGI ANLAYALIM
DISTRO-KAVRAMI-DAGITIM KAVRAMI ORTAYA CIKMISTIR 
ORNEGIN 
SUNUCU YONETIMINDE GRAFIKSSEL BIR ARABIRIM IHTIYACI OLMADIGI ICIN SUNUCU ICIN KULLANILAN DISTRO DA GRAFIKSEL BIR ARABIRIME IHTIYACI  YOKTUR
CUNKU GRAFIKSEL ARAYUZ HEM PERFORMANSI DUSURUR HEM DE YAPILABILECEK ISLERIN CESITLILIGINI AZALTIR,
BUNA BENZER BASKA BIR DURUM ISE, EV YA DA OFIS KULLANICILAR ICIN ISE GRAFIKSEL ARAYUZ COK ONEMLIDIR, VE BU KULLANICILARA HITAP EDEN DISTRO-DAGITIMLARDA BU DURUMU DIKKATE ALARAK GRAFIKSEL ARAYUZU EV-OFIS KULLANICILARI ICIN KULLANICILARIN RAHATCA KULLANABILECEKLERI SEKILDE AYARLARLAR
YANI PROFESYONEL SUNUCU YONETIMINDE YONETICILERIN HER TURLU ISLERINI KOMUTLARLA-CMD KOMUTLARI ILE COZMELERI BEKLENIRKEN SIRADAN KULLANICILAR 
HER ISINI KOMUTLARLA COZMEK ISTEMEYEBILIRLER,VE BUNA  YETERLI DONANIMA DA SAHIP OLMAYABILIRLER BU COK NORMALDIR
SIRADAN KULLANICI ORNEGIN, TARAYICIDA,BORWSER DA GEZINIP VIDEO ACMAK, YOUTUBE DA VIDEO IZLEMEK ISTEYEBILIR ANCAK BIR SERVER YONETICINDEN BOYLE ISTEKLER GELMESI BEKLENMEZ, VE BOYLE BIR IHTIYACI YOKTUR. SERVER YONETICILERI SERVERLARINA DAHA KOLAY ERISIP YAPMAK ISTEDIKLERI ISLEVLERI DAHA KOLAY YAPMAYA ODAKLANIRLAR
ISTE BU FARKLI AMACLARA YONELIK FARKLI DAGITIMLAR-DISTRO LAR ORTAYA CIKMISTIR
ISTE BU KADAR FARKLI KULLANIM IHTIYACLARINA YONELIK, FARKLI DAGITIIMLAR FARKLI DISTROLAR I OLUSTURMANIN EN KOLAY YOLU DA ACIK KAYNAK VE OZGUR YAZILIMDAN GECER
PIYASADA COK FARKLI DISTRO-DAGITIMLAR VARDIR
distrowatch.com dan farkli dagitimlari inceleyebiliriz
Populer olan farkli gnu-linux dagitimlari

UBUNTU
DEBIAN
FEDORO

BIZ HANGI DAGITIMI KULLANCAGIZ 
DEBIAN TABANLI DAGITIMLAR
DEBIAN DAGITIMLARI TEMEL ALARAK OLUSTURULAN DAGTIMLARDIR
COK STABIL CALISIYOR
DEBIAN DAGITIMLAR SIFIRDAN OLUSTURMAK YERINE KULLANIM AMACI DOGRULTUSUNDA DEGISTIRILERERK KULLANILABILIYOR ISTE BU SEKILDE KULLANILAN DISTRO-DAGITIMLARA DA DEBIAN TABANLI-DISTRO-DAGITIMLAR DENILIYOR
DEBIAN TABANLI DAGITMLARIN HEPSINDE ORTAK OLAN, ISLEMLERDE VARDIR TABI KI

SURUMLER VE DAGITIMLAR ARASINDAKI FARKLILIKLAR
Surum ve dagitimlar, distro lar bunlar tamamen kullanim ihtiyacina gore gelistirilip, ozellestirildikleri icin, farkli versiyon ve farkli distrolarda bazi farkliliklar  oldugunu gorebilirz ki bu cok normaldir ama cok buyuk bir problem degildir 
ki zaten server lar icin gelisitirilen, linux distrosunda ise grafik arayuzunun default olarak gelmedigi, cunku server islemleri yapan kullaniciilarinin boyle birseye ihtiyac duumadiigndan dolayidir ve grafik arayuzu uygulamalarinin server ile iligli calisacak linux larda distrolarda performansi gereksiz yere dusureceginden , server islemleri ile iligili gnu-linux un kal-linux distrosunu kullanacak kullanicilar icin, grafik arayuz varsayilan olarak gelmemektedir
Burda biz ne ogrenecegiz 
1-Komutlar ile sistemi yonetmemizi saglayacak olan bash shell i kullanmayi 
2-Debian tabanli sistemlerde standart olan temel yonetim araclarini 
3-Linux sistemi isleyisi ile ilgili temel standartlari

Ubuntu is a Linux distribution based on Debian and composed mostly of free and open-source software.
Difference Between Ubuntu and Kali Linux
Ubuntu is a Linux based Operating System and belongs to the Debian family of Linux.
	Ubuntu is used for daily use or on server.
Kali Linux is a Linux based open source Operating System which is freely available for use. It belongs to the Debian family of Linux
Kali is used by security researchers or ethical hackers for security purposes

Linux kullanicilari icin cok fazla secenek ve surekli gelisen ve degisen, arayuzlerin ozelliklerinden dolayi, linux kullanicilarinin bu degisiklige ayak uydurmasi ve arastirip yeni gelen ozellikleri nasil kullanabileceklerini ogrenmeleri gerekemektedir
Aslinda ogrenmeyi ogrenmek en onemlisidir yoksa bugun ogrenedimiz

LINUX
Oncelikle kavramlari kafamizda iyi oturtalim 
Linux tek basina bir isletim sistemi degildir nedir peki bir kernel-yani cekirdektir
GNU (Gnu is Not Unix/GNU Unix Değildir), açık kaynak hareketinin doğrultusunda geliştirilen araçların içinde bulunduğu ücretsiz ve herkes için ulaşılabilir bir işletim sistemidir.
GNU için her şey her daim güllük gülistanlık değildi. GNU, içerisinde kendine ait güçlü araçları bulundurmasının yanı sıra kararlı bir çekirdeğe sahip değildi. Çekirdek için denemeler yapılmış ancak kararlı bir çekirdek oluşturulamamıştı.

Tam da bu noktada Linus Torvalds’ın geliştirip topluluğa sunduğu ve topluluk doğrultusunda geliştirdiği çekirdek yazılımı, GNU ile tencere kapak uyumu olacak şekilde bir araya geldi.

Böylelikle ortaya bir GNU/Linux efsanesi çıktı. İşte GNU/Linux devrimi kısaca bu şekilde oldu. Hem GNU’nun hem de Linux’un topluluğa bağlı dönütlerle geliştirilmesi doğrultusunda herkese açık, ücretsiz ve sınırsız geliştirilme potansiyeline sahip, gerçek anlamda insana hizmet eden özgür bir işletim sistemi ortaya çıkmış oldu.

Sonuç Olarak
Linux bir işletim sistemi değil, çekirdektir(kernel). GNU/Linux bütünü bir işletim sistemidir. Ancak genellikle söylenmesi uzun veya zor geldiği için, zamanla sadece Linux olarak geçmeye başlamıştır. Ben de yazılarımda GNU/Linux yerine Linux kullanıyor olacağım. Ancak emin olun çekirdekten(kernel) yani Linux’tan bahsettiğimde ve GNU/Linux(işletim sistemi)’tan bahsettiğimde hangisini kastettiğimi anlıyor olacaksınız.

LINUX-KERNEL-(CEKIRDEK)
GNU-LINUX ISLETIM SISTEMININ KALBIDIR
GOREVI YAZILIM-KERNEL(CEKIRDEK)-DONANIM
YAZILIM ILE DONANIMIN HABERLESMESINI SAGLAR.
YAZILIM TARAFINDA ARACLAR ILE VERILEN KOMUTLARIN DONANIM TARAFINDAN ANLASILIP YERINE GETIRMESINI SAGLAR

LINUX KERNEL- SHELL(KABUK)
Biz ornegin bir dosyayi masaustunden alip baska bir klasor iceriisne tasiyoruz bunu surukle birak isleminin kullanilmasi ile(grafiksel arayuz sunuldugu icin boyle bir islem yapabiliriz) de yapaiblirz ya da bunu shell komutlari ile de yapaibliriz hangisi ile yaparsak yapalim arkada gerceklesen islem aslinda aynidir yani arka plan da bizim dosya ile ilgili  yaptgimiz islemin komutlarinin yorumlanarak, donanim(ram-cpu-vb) tafindan bu komutlarin anlasilip yerine getirilmesi ile gerceklesmektedir
Bu islemi gerceklestirmekle gorevli olan linux kernel-cekirdek kullanicidan gelen girdiler le birlitkte yani girdi-orneign bir dosya tasima isi ise bu bir emir dir input dur yani girdir  iste kernel bu girdiyi alir, bu emri alir ve sistemin, isleyebilmesi icin verilen emrin uygulanmasi icin donanima(ram-cpu..) bu emirleri  uygulattirmak ile gorevlidir linux kernel, ancak direk olarak kullanicidan alinan komutlar linux-kernele gecmez bundan once komutu satiri dedigmiz(lede-text-veya cmd) shell-kabuk programini temel alarak calisan bir yapi, kullanici ile cekirdek arasinda bir araci katman gorevi gorur...ANLAMAK COOOK ONEMLIDIR 
SHELL(KABUK)


Grafiksel arayuzun sunulmamasi demek, bizim windowsdaki gibi maus la karsimiza bir ekran gelmesi ile o ekran da iste dosya tasimasi, vs gibi herseyi maus ile araclar vasistasi ile veya direk icin de buludngumuz grafiksel arac ile yapabilmemizdir ancak iste server yonetim islmeleri gibi islemler  yaparken bize boyle bir grafiksel arayuz verilmeyecektir bu da su demektir ki, biz server islemleri yaparken tamamen komut satirinda islem yapcagiz baska turlu islem yapma olanagimiz yok ondan dolayi da komut satirlarini cok iyi bilmemiz gerekir server ile ilgili islemler yapacaksak eger


SHELL(KABUK)-LINUX-KERNEL KULLANICIDAN GELEN EMIRLERI DIREk ANLAYAMAZ ANCAK SHELL(KABUK) SAYESINDE KULLANICIDAN GELEN EMIRLERI ANLAYABILIR YANI KULLANICI ISTER ARAC KULLANSIN ISTER DIREK SHELL DE KOMUT YAZSIN ASLINDA ARKADA KULLANICI EMIRLERI SHELL-KABUK ARACILIGI ILE CEKIRDEGE ULASACAKTIR 

KULLNICI- SHELL-KERNEL
SHELL-KULLANICI ILE KERNEL ARASINDA ARACI BIR KATMANDIR
KULLANICIDAN GELEN EMIRLERI(HER TURLU GIRDILERI) KERNEL-CEKIRDEGE ILETMEK ILE GOREVLIDIR
SISTEM DE  YAPMAK ISTEKLERIMZ VE  YAPABILECEKLERIMIZ SHELL IN ESNEK VE KULLANISLI YAPISINA YANI YETENEKLERINE BAGLI OLARAK DEGISMEKTEEDIR, BU BAGLAMDA SHELL SISTEME HUKMETMEKTEKI EN ONEMLI ANAHTARLARDAN OLDUGUNU SOYELEBILIRIIZ

FARKLI YETENEK VE OZELLIKLERE SAHIP BIRDEN  FAZLA SHELL(KABUK) PROGRAMI VARDIR
LINUX SISTEMLERINDE BASH,KSH,TCSH,ZSH,FISH GIBI BIRCOK SHELL PROGRAMI MEVCUTTUR
ANCAK EN COK TERCIH EDILEN SHELL PROGRAMI BASH SHELL PROGRAMIDIR

PEKI KONSOL NEDIR
KULLANICI ILE SHELL ARASINDA YER ALARAK KULLANICININ KOMUT GIRMESNI SAGLAYAN GRAFIKSEL VE KOMUT SATIRI ARA YUZUNE SAHIP BIR ARACTIR
KULLANIICILAR KOMUTLARAINI BU KONSOL SAYESINDE SHELL E ULASTIRIR
SHELL ISE KULLANICIDAN GELEN GIRDILERI YORUMLAYARAK KERNEL A AKTARIR

ZSH-BASH SHELL HAKKKINDA..
KALI-LINUX ONCEDEN VARSAYILAN OLARAK BASH SHELL KULLANIRKEN ARTIK ZSH SHELL I DEFAULT OLARAK KULLANIYOR
AMA BASH SHELL DIGER DISTRO-DAGITIM LINUXLARDA DEFAULT OLARAK COK FAZLA KULLANILIYOR

NEDEN BASH SHELL KULLANIYORUZ
ZSH SHELL DAHA COK OZELLESTIRME IMKANI SUNUDUGU ICN TERCHIL EDILMIS
ZSH VARSAYILAN OLARAK  YUKLU GELSE BILE KALI-LINUX E SONRADAN KULLANICI KENDISI VARSAYILAN OLARAK BASH SHELL I AYARLAAYABILIR
AMA ZATEN HER IKI PROGRAMDA BENZER ISLERI YAPIYOR

ZSH-BASH SHELL ARASINDAKI FARKLILIKLAR-BENZERLILIKLER
HER IKI SHELL PROGRAMINA DA AYNI KOMUTLAR VEREBILIR MIYIZ

SHELL PROGAMININ ALABILECEGI KOMUT TURLERI
1-DAHILI KOMUTLAR(KENDISINE AIT OLAN)
SAHIP OLDUGU OZELLIIKLERIN CALISTIRILMASINI SAGLAR
2-HARICI KOMUTLAR
MEVCUT SISTEM UZERINDE YUKLU BULUNAN PROGRAMLARIN CALISTIRILMASINI SAGLAR
ORNEGIN BIZM SISTMEMIZDE FIREFOX ARACI VAR ISE VE CONSLE FIREFOX YAZARSAK HANGI SHELL PROGRAMINI KULLANIRSAK KULLANALIM FIREFOX ACILACAKTIR
ISTE SHELL PROGRAMLARININ BIRBIRINDEN AYRISTIGI NOKTA ILK TUR OLAKJ KENDI BUNYESINDE DAHILI BULUNAN KOMUTLARDIR
BU DAHILI KOMUTLAR SHELL PROGRAMLARI ARASINDA FARKLLIK GOSTERIR AMA BIRCOK KOMUTU BENZERDIR
AMA GENEL OLARAK BASH SHELL PROGRAMINI KULLANMAK OGRENILIRSE ZATEN DIGERLERI DE COK HIZLI KULLANILABILIR
YA DA HERHANGI BIR SHELL PROGRAMI OGRENILIR ISE BIR DIGER I COK DAHA KOLAY VE HIZLI BIR SKEILDE KULLANILABILECEKTIR
 
BIZ BURDA BASH SHELL PROGRAMI UZERINDEN ISLETIM SISTEMINI YONETECEGIZ
BU SAYEDE COK FARKLI DISTROLARI DA YONETEBILECEGIZ... 
BASSH SHELL PROGRAMINI KULLANACAGIZ

hangi shell programini kulandigimzi gormek istersek asagidaki kodu gireriz
echo "$SHELL"
/bin/bash
Bizim sistemimiizmde bash shell programi default olarak  calisiyor
Ozellikle shell programi ve konfigurasyonl ayar degisikliklerinde sistremin yeniden acilmasi gerekmektedir

KONSOL-TERMINALI
Google-window tusuna basarsak arama yapabiliyoruz linux da ve ornegin terminali acmak istersek arama kismina terminal yazarak acabilirz

Termial ekranini biz dikkat edersek grafiksel arayuzde aciyoruz yani linux-ubuntu nun bize sagladigi ekran uzerinde aciyoruz ki
biz terminal ekranimizi su an da kullandimgiiz linux-grafiksel ara yuz yani karsimia gelen ekran, menuler vs bu grafiksel arayuzdur bu olmadan da biz terminal i kullanabiliyoruz
Bunu nasil yapabilecegmizi gormek icin yani grafiksel arayuzden sadece komut satiri na gecmek icin ATL-CTRL-F3 E TIKLARIZ
TE
Burda direk console a gecegbiliyoruz ve 6 tane farkli komut   ekrani var ALT+F4  ile ornegin 4.ekrana gireriz bu sekilde ALT+F5  yaparsak da 5.ye geceriz f3 diyerek f3 consoluna gecebiliriz, TEKRAR GRAFIKSEL ARAYUZ ICIN ALT+F2 VEYA ALT+F1 YAPARZ

TTY1-TTYR BUNLAR GRAFIKSEL ARAYUZUN OLDUGU KISIMLAR
TTY3-TTY4-TTY5-TTY6 BUNLAR TAMAMEN KOMUT SATIRIIN OLDUGU GRAFIKSEL ARAYUZUN OLMADIGI KOMUT EKRANLARIDIR

linux de biz hem grafiksel arayuzden hem de komutsatirinin kullanarak islemler yapabiliyoruz

echo $SHELL - KULLANDIGMIZ LINUX DE VARSAYILAN OLARAK HANGI SHELL PROGRAMI KULLANILGIINI VERECEKTIR
/bin/bash 

Peki Linux biz echo $SHELL yazinca bunu nasil okudu ve yorumladi
Iste bu noktada environment variables lar devreye giriyor

ENVIRONMENT VARIABLE
Biz bazi programlari terminalden dogrudan yazarak calistirabilmemiz icin bunlarin adreslerinin path de yani environment variable da belirtilmeleri gerekir cunku isletim sistemi her bir program calistirmaya calistiginmzda path-environment variable da belirtilen yolu okuyarak geliyor kendiliginden, eger orada belirtilen bir uygulama ise calistirmaya calisgimgimiz o zaman herhangi ekstra yol belirtmeye de gerek kalmiyor, cunku isletim sistemi onun yolunu kolayca buluyor kenisine onceden environment ta belirtilmis ise eger

echo $PATH yazarsak environment variable u  karsimiza cikacaktir...
: ile ayrilmis dizinlere path yani path environmnnt variables deniyor

Simdi kendimiz bir tane klasor olusturup onu path-environment variable a ekleyerek, direk calistirilabilmesini saglayalim

adem/ademzeynep/ademzeynepzehra  isminde 3 tane ic ice klasor ile bir dizin olusturduk

1 tane icerisine echo "Running"; kodu yazarak bu dosyayi newfile.sh diye kaydederek ademzeynepzehra klasoru icerisine atariz

.sh
.sh bir betik dosyasi demektir...Console komutlarini icerisine kaydettikten sonra daha sonra bir butun halinde ayni anda bircok komutun calismasini saglayan bir dosya turudur

Dosyamizin tam yolu 
Home/Desktop/adem/adem-zeynep/adem-zeynep-zehra/new-file.sh
Bu yolu eger environment variable a path e eklersek o zaman istedigmz heryerde terminalden direk calistirabiliriz

SUDO
Artik sistem bizden yetki gerektiren her turlu islem icin komutlarin basinda sudo kullanmamizi istiyor sudo root anlamina geliyor yani yetkisi olan admin gibi, sudo komutu yetkilendirme islemi
Yetki gerektiren tum islemlerde komutlarin basina sudo kullanmamiz gerekiyor
Yetki gerektiren islemlerde sudo ile komutu verdigimz zaman ornegin
sudo apt update
sudo apt upgrade
sudo apt install apache2

bu islemlerin ilkini yaparken sistem bizden once parola istre parolayi dogru girince devam edebilriz
Ama illa ki sudo yu kullanmak istemezsek de yapabilriz bunu 
terminal de sudo passwd root  deriz ve yeni bir parola gireriz ve parolayi 2. kez girip onayladiktan sonra root kullanici hesabi
aktiflesmis olur ve artik belirledigmiz parola ile root kullanici hesabi uzerinden hic sudo kullanmadan komutlarimizi verebilriz
Sonra sistemi yeniden baslatalim ve root kullanicisi ve passwordu ile giris yapalim ve termianali acip artik 
apt update diyerek guncelleme yapabilriz istersek de boyle de kullanabiliriz ama biz y ine sudo kullanmaya devam ederek kullanalim

path-environment variable a dizin-klasor eklemek
Path yolu uzerine ekleyecegimz yeni dizini her oturum baslangicinda sistem tarafindan otomatik olarak
okunan bir dosya icerisinde belirtmeliyiz ki yaptigmiz degisiklik biz silene kadar gecerli olsun
Ekleme islemi icin kullanacgimz dosya oturum baslangicinda okunan herhangi bir dosya olabilir
Biz ornek olmasi acisindan /etc/bash.bashrc dosyasi uzerinden calismalarimizi yurutelim
Ilgili dosyada degisiklik yapabilmek icin once dosymizin tam konumunu belirtmemiz gerekkir

Biz ana root yoluna yani Desktop un da altinda oldugu daha dogrusu Desktop un da parent i olan home yoluna etc/bash.bashrc klasoru ekleriz ve sonra da ana home directorusunde iken terminalden dosya islemleri yapma araci olan nano ile direcotrumuzu tam olarak yazariz
sudo nano /etc/bash.bashrc diyerek , karsimiza bu dosya icerigi gelmis oluyor 
Dikkat edelim sudo nano etc/bash.bashrc dersek gelmez en basa / slash koymamiz gerekir 
sudo nano /etc/bash.bashrc
Simdi .sh uzantili betik dosyamizin konumunu bu dosyaya uygun sekilde eklemek demektir
Bu islem icin actimiz dosyanin en altina
COOOOOK ONEMLI DIKKKKAT ETMELIYZ..... 
PATH="/home/adem/Desktop/adem/adem-zeynep/adem-zeynep-zehra/":$PATH
COOOK ONEMLI...HOME BASINA / VE EN EON KLASOR ISMI OLAN adem-zeynep-zehra/ sonuna da slash koymayi unutmayalim...yoksa path de veridigmi adresi bulamaz... 

BURDA SUNA DIKKAT EDELIM...EN BAS HOME KOMUTUNDAN ITIBAREN YOLUNU DOGRU YAZMAMIZ VE BULMAMZ GEREKECEKTIR...  COK ONEMLI... 
dosyanin en altina bunu ekleriz
ctrl-x e tiklariz ve kaydedilsin mi sorusuna Y-YES diye cevap yazariz
y ye basinca da dosya ismini ayni isim ile kaydedip kaydetmmeyecegmiizi sorar ayni isimle kaydetmeyiz yoksa dosya yi sistem okuyamayacaktir
PERMISSION DENIED HATASI  VE SEBEBI....
Biz ctrl-x ile kaydetmeye calistik permission denied hatasi aldik bunun sebebi sudur 
Biz nano  yu acarken sudo ile yetkili root kullanici olarak acmadik ondan dolayi onun icin tekrar nano ile dosyamizi acarken bu sefer
sudo nano /etc/bash.bashrc diye acarak ayni islemi yapip ctrl-x ile kaydedip ayni dosya ismi ile cikariz
Bu sekilde path-environment variable  a eklenmis oldu yolumuz
ENVIRONMENT VARIABLE DAKI DEGISIKLIKLERIN TANINMASI ICIN YA OTURUMU YENIDEN BASLAT- YA DA SOURCE KOMUTU KULLAN...
Ancak yapilan ddegisikliklerin gecerli olmasi icin ya sistemin yeniden baslatilmasi gerekir ya da olustudugmuz degsikikliklerin tekrar source komut ile konfigure edilmesi gerekir
Bir dosya icinde yapilan degisikligin tekrar konfigure edilip bize yansitilmasi icn source komutu kullanilir
source /etc/bash.bashrc diyerek yaptigmiz degisikligin tekrar konfigure edilmesini saglayabilirz
isetrsek oturumu kapatip tekrar acadab ilriz...
Sonucta path-environment varibable la bir dosya yolumuzu giri p yapilan degisikligin sistem tarafindan taninacak hale gelmesini saglamis oluyorz
path ortam degiskenine bizim ekledigmiz path- eklenmis mi onu check edecek olursak 
echo $PATH YAZDIGMIZZ ZAMAN KARSIMIZA home/Desktop/adem/adem-zeynep/adem-zeynep-zehra/:.. bu sekilde gelecktir 
Demekki ekledimgz path environment variable  a eklenmis demektir
Simdi son bir ayar gerkiyor, bu da yetkilendirme islemi
PERMISSION DENIED.... HATASI
Bizim dosya komutunu bulmasinna ragmen permission denied hatasi verecektir ondan dolayi.. 
bizim bu durumu cozebilmemiz icin komut .sh dosyamizin bulundugu dosya konumuna giderek
home/adem/Desktop/adem/adem-zeynep/adem-zeynep-zehra chmod +x new-file.sh 
komutunu girmemiz gerekiyor
Bu sekilde dosyamiza calistirma izni de vermis olyoruz
DOSYA EXECUTABLE  YAPMAK
chmod +x ile executable yapmis oluyoruz o dosyayi
Dosyayi cagirmak su sekildedir
./new-file.sh   ./ demek bu dizin altindaki demektir direk yazarak calistiramayabiliriz mutlaka bu sekilde yazilmasi gerekir, ama biz path de kaydederken PATH="home/adem/Desktop/adem/adem-zeynep/adem-zeynep-zehra/":$PATH  bu sekilde kaydedip en son da / yaazdigimiz icin biz direk calistirabiliyoruz  new-file.sh diyerek 
bash new-file.sh dersek direk dosya icindeki kodu okur, calistirarak okur yani echo "hello world" var ise 
ekran hello world yazar ancak
cat new-file.sh dersek direk dosya icinde ne var ise onu ekrana yazar yani echo "hello world" var ise 
ekrana ehco "hello world" yazacaktir
env $path 

asagidaki 3 satir kodda environment variables lari verir
echo $PATH
env $PATH
printenv PATH

Simdi ozet olarak ornegin herhangi bir dosya yoluna geldik
Desktop/test.sh (icerisinde echo "hello myfriend"; yaziyor)
Oncelikle bu dosyayi dogrudan calistirabilmek icin executable yapmak gerek onun icinde
/Desktop  chmod +x test.sh     deriz 
sonra da su sekilde calitirmalyiz
./test.sh , yani /. demek bu dizin altindaki demektir...bunu kullanmamiz gerekir
hello myfriend        yazacaktir ekrana

cd Desktop yapip Desktop directory ye geliriz 
Bir.sh dosyasi executable degil iken onu nasil calistiririz 
bash test.sh, ./test.sh diyerek ve de cat test.sh diyerek de icerigini oldugu gibi okyabilriz

.SH NEW-FILE.SH DOSYAMIZMI PATH UZERINDE VAR OLAN BIR PATH ENVIRONMENT VARIABLE YOLUNA DA TASIYARAK KULLANABILIRZ
BU YUKARDA YAPTIGMIZ ILK ISLEME GORE COK DAHA GUVENLI BIR YOLDUR
OZELLIKLE SUNUCU YONETIMINDE ERISIM YETKILERIIN SAGLANMASI VE SUNUCU YONETIMINN SAGLANMASI ACISINDAN ISTISNAI DURUMLAR HARIC
BU YONTEM TERCIH EDILIYOR, YANI VAR OLAN PATH ENVIRONTMENT UZERINE DOSYAMIZI EKLEMEK
home/adem/Desktop/adem/adem-zeynep/adem-zeynep-zehra/ BU DIZINE GELIRIZ  ve 
burdaki dosyamizi path environmentta bulunan bir path directorye kopyalariz 
echo $PATH 
env $PATH dersek hangi yollarin environment variable da var oldugnu gorebilirz
Desktop/adem/adem-zeynep/adem-zeynep-zehra/  cp new-file.sh /usr/local/sbin 
diyerek dosyayi koypalamis oluruz
ya da direk dosya tasima islemi  yapariz
sudo mv Desktop/adem/adem-zeynep/adem-zeynep-zehra/new-file.sh /usr/local/bin
NOT UZERINDE BULUNDGUMUZ DIZINDEN COK GERIDE VAR OLAN DIZINLERI GORMEMIZ ICIN 
YANI 
Ana computer dizini altindaki diznler sunlar ki home da bunlar icinde bir dizindir
bin,boot,cdrom,dev,etc,home,usr... 
ve biz ise su an dizin olarak
/home/adem uzerindeyiz ve ordan 2 geride var ldigni surduren bir dizini cagirmaya caliyoruz yani kendi parenti olan home ile ayni dizinde olan baska bir dizini burda gormek icin 
cd /usr/local/bin  yazmamiz gerekiyor / belirtmezsek en basa acamayz ama ornegin
AYRICA BIZ PATH-ENVIRONMENTTE BULUNAN HERHANGI BIR YOL ICERISINE  
SUDO NANO MY-FILE.SH DIYEREK DOSYA ACIP ICINE ECHO KOMUTLARI YAZIP SONRA KAYDEDERIZ ARDINDAN DA EXECUTABLE YAPARAK CALISTIRABILIRIZ
YANI OLUSTURDUGMUZ DOSYA YOLUNA GELEREK 
CHMOD +X MY-FILE.SH DERSEK EXECUTABLE YAPARIZ
ARDINDAN DA ARTIK HER YERDE BIZ MY-FILE.SH I CALISTIRABILRIZ
DAHA ONCE DEN EXECUTABLE YAPILMIS BIR DOSYA EGER TASIMA ISLEMI YAPYORSAK PATH-ENVIRONMENT A O ZAMAN BIR DOSYA YETKILENDIRMESINE GEREK KALMADAN CALISACAKTIR ZATEN
ORTAM DEGISKENLERINI GORUNTULEMEK-PATH ENV VARIABLES 
ORTAM DEGISKENLERINI GORMEK ICIN 
set,env,printenv komutlarini kullanriz

set:Shell e ait olan degiskenlerin adini ve degerlerini veriyor
env:Sistemde bulunan butun "export" edilmis yani degistirilmis degiskenlerle beraber variables lari gosterir
printenv:Sistemde bulunan tum environement variables lari veriyor
Bu komutlari direk calistirirsak cok ciddi detayli bir bilgi aliyoruz
printenv i calistirirsak

Yani bu komutlari direk yazinca biz her turlu ortam degiskenini gorecegiz bunun iceriisnde PATH DE DAHIL
SU AN UZERINDE BULUNGUMUZ KONUM
PWD=/home/adem/Desktop 
ayrica 
HOME=/home/adem
USERNAME=adem

HOME Ddegiskenini aciklayacak olursak 
soyle dusunelim bir uygulamaya masa ustunde bir kisayol olusturmak istiyoruz ve masaustune giden yolun bilinmesi gerekir ve bu her pc de farkli olabilir, bir bilgisyardakki desktop dizinin bulabilmek icin o pc yi kullanan kisinin kullaniciadi-username ini biliyor olmamiz gerekir cunku desktop yolu, o pc yi kullanan kullanici adina bagli olark degisiklik gosteriyor

taylan kullanici sinda  home/taylan/Desktop 
adem kullanicidinda home/adem/Desktop
hatta masaustu dili bilgisyarin diline gore de farklilik gosterebilir
Bu kadar basit bir islem icin bile dogrudan tahmin edemedigmiz bu Desktop yolunun bilinmesi veya bulunmasi gerekiyor
Ancak masaustunde kisa yol olusturma cok olagan bir durum yani bir imkansiz degil
Iste tam bu noktada neden ortam degiskenlerinin var oldugunu daha iyi kavriyoruz

Ortam degiskenleri
Kullandigmiz isletim sisteminde belli degerlere daha sonra kolaylikla ve kararlilikla ulasabilmemiz ve isleyebilmemiz icin olusturulan ifadelerdir.
Yani biz ornegin cok fazla kullanacgimz bir dosyamiz oldugunu dusunelim o dosya icindeki datalri bir uygulamada hep okuyarak baslamamiz gerekiyor ve biz de ornegin bircok farkli pc de calismamiz gerekiyor her pc ye gelip de farkli farkli dosya yollari ile erismeye calismak yerine o uygulamada ki dosyayi biz ortam degiskenlerine atariz ve ordan cekeriz ve bu sekilde kullandigmiz tum pc lerde o dosya yi bir dizin icine atar ve o dizini de ortam degiskenlerine eklersek, biz o dosyayi okurken ornegin php dilinde ortam degiskenlerine erisme methodu uzerinden o dosyaya erisiriz ve artik ekstra hicbir islem yapmaya gerek kalmadan o uygualama baslarken okumamzi gereken veritabanin bilgilerinin oldugu dosyayi kullandimgiz her pc de kolaylikla uygulamamiz okuyabilecektir
HOME
ortam degiskeni, environment variable kullanicinin home dizinini direk olara veriyor
Yani ornek senaryo da yazilimci eger desktop konumuma erismek ister ise o zaman 
Once home dizinine eriseiblir (environment variable da da bulunuyyor) 
home/adem/Desktop

terminal de printenv yazinca asagida bircok deger siralaniyor
ve burda biz HOME ortam degiskeni ni sayesinde kullanicinin ismini bilmeden kullanicinin home dizinine kolaylikla erisebilyoruz
.
. 
. 
HOME=/home/adem
USERNAME=adem
LANG=en_US .UTF-8


/home/adem/Desktop
HOME/Desktop 
Yani terminal acilgidinda HOME a geliyor yani biz /home/adem bu dizinde geliyor default olarak cunku environment variable da da bu sekilde ayarlnamis
VE BIZ BU ORTAM DEGISKENLERINI echo $HOME,echo $SHELL,echo $USERNAME gibi ortam degiskenlerinde bulunan key lerin valu elerini yazdirarak degerlerini de alabliyoruz
BU ARADA BU ORTAM DEGISKENLERI HEP BUYUK HARFLE YAZILMIS
HOME:Kullancinin home dosya adresni verir. home/adem 
SHELL:CAlismakta olan kabuk programinin adini ve yerini verir- /bin/bash
PATH:Konsola komutlar girildiginde komut icin gerekli dosyalarin arnacagi dizinler, diger bir adi ile yol
USERNAME
LANG
TERM:Komut satiri uygulamalarinin hangi terminal de calisacagini belirtir-xterm-256color
ORTAM DEGISKENLERININ DEGERINI TEK TEK echo $ORTAMDEGISKENI ISMI  YAZARAK TEK TEK KONTROL EDEBILIRZI YUKARDAKIGIBI
echo $HOME,echo $SHELL,echo $USERNAME

echo $TERM xterm-256color 
gelir ve 
terminale direk xterm yazinca bir terminal acilmadliri siyah bir terminal ama eger acilmiyor veya boyle bir sey yok diyorsa o zaman xterm yuklenmemistir o zaman da 
sudo apt install xterm diyerek xterm i yukleriz... ve artik terminale xterm yazarak terminal acilacaktir

ORTAM DEGISKENLERI SABIT VE SINIRLI DEGILDIR SISTEMDE VAR OLANLARN DISINDA BIZDE KENDIMZ ORTAM DEGISKENLERI TANIMLAYABI LIRIZ
BU TANIMLAMALAR 3 KATEGORIYE AYRILIR 
1-CONSOLE A -TERMINALE OZEL TANIMLAMALAR
YALNIZCA GECERLI YANI ACIK OLAN TERMINALDEKI UYGULAMALAR ICIN KULLANILABILEN DEMEKTIR
2-KULLANICIYA(KULLANICI HESABI) OZEL
YALNIZCA TEK KULLANICI ICN GECERLI VE O KULLANICININ HER OTURUM ACTIGINDA KULLANABILDIGI
3-SISTEM GENELI(TUM KULLANICILAR)
SISTEMDE ON TANIMLI OLARAK AYARLANMIS SUREKLI KULLANILABILIR DEGISKENLER

1-CONSOLE A -TERMINALE OZEL TANIMLAMALAR
Sadece o anda kullanmak ta oldugmuz terminale yani console ozel bir degiskendir ve terminal ekranini kapattiktan sonra sifirlanan bir ortam degiskenidir

export LANG=C yaparsak gecerli terminal icin dil, english olacaktir
termnale bos birkac isleme basip sonuca basarsak hata mesaji inglizce verildgini gorebilirz

2-KULLANICIYA YANI OTURUMA OZEL DEGISIKLIKLER
SHELL programi olarak default olan bashi  kullaniyoruz

GIZLI DOSYA VE KLASORLER
GIZLI DOSYA=> .file_name
GIZI KLASOR=> .folder_name
Onunce nokta bulunan dosya ve dizin adlari gizli dosya gorevi gorurler
Bizim mevcut oturumumuzda ortam degiskenlerinde -environment variable da kalici bir degisiklik yapabilmemiz icin yapmak istedigimiz degisiklikleri her oturum acildiginda okunan ve ona gore baslangic degerleri alinan .bashrc isimli dosyaya eklememiz gerekiyor ki
oturum acgimizda ssistem burda ypatigimz degisiklikleri her seferinde gorebilsin
Degisiklikleri yapabilmek icin oncelikle bu .baschrc dosyasini acmamiz gerekiyor
Biz maus ile home klasorune gideriz ve orda sag ustteki 3 tane alt alta cizgi olan ayarlar ikonundan show hidden files dersek zaten gizli dosyalari gorebilecegiz orda ve orda .baschrc dosyasini gorebiliirz
Burda ki .bashrc dosyasini  home/adem bu ikisi HOME dur environment variable da ve bu home dan onceki ana yol altinda home un da icinde bulundugu ana yol altinda etc klasoru var onun altinda .bashbashrc dosyasi var bunun ile bizim simdi actimgiz HOME(home/adem) altindaki gizli dosya olan .bashrc nin bir alakasi  yok ikisi birbirnden farkli dosyalardir karisirmayalim..
COOOOK ONEMLI BUNU BILMEK GEREK
HOME(home/adem)..BURAYA DIKKAT HOME DENILDIGI ZAMAN HOME=>echo $HOME ciktisi /home/adem dir yani HOME linux-ubuntuda /home/adem demektir

ls / ls -l
direk ls dersek yanyana listeliyor var olan klasor ve dosyalari ama ls -l dersek alt alta line yani satir olarak listeleyecektir


ONEMLI... -ROOT KLASORLERINE GITMEK
AYRICA HOME YANI (/home/adem) uzerinde iken pwd ile gorebiliriz 
cd / dersek o zaman iste environment variable da bulunan klasor lerden usr gibi olan klasorlerin bulundugu konuma gelebiliriz...YANI ROOT A GELMIS OLURUZ
HOME(/home/adem) de iken  cd ../../ dedgmz zaman veya cd / dedigmiz zaman ayni yere yani ROOT a geliyoruz.. 
HOME(/home/adem) den / yaparak geldigmizde tekrar home/adem e gelmek icin cd /home/adem yapariz

Normalde bu konumu .. yaparak veya cd ile bir yukari klasore giderek bulamiyoruz buraya erismek icin ozellikle 
HOME(/home/adem) DA IKEN cd / yaparak erisebiliyoruz... 


SHOW HIDDEN FILES- ls -a veya ls -all 
hidden files lari listelemk icin 
ls -a veya ls -all deriz
simdi gizli dosya olan ve HOME altindaki dosyalarda bulunan .bashrc dosysasini nano ile acalim 
sudo nano .bashrc  ile 
burda biz kullanici olarak her oturum actimgzda degisikligin gecerli olmasi icin her oturum baslangicinda okunan bu dosyanin en altina 
export LANG=C diyerek dilin ingilizce olmasini saglayan degisikligii yapariz
CTRL-X ile yes deriz ve entere basarak kaydedip cikariz ve artik biz her oturum acildiginda dil seceneginn inglizce olarak gelmesini bekiiyoruz ancak degisikligi hemen alamiyoruz bunun nedeni .bashrc dosyasinin oturum acilirken tekrar okunyyor olmasi, yaptigmiz bu tarz degisikliklerin gecerli olabilmesi icin oncelikle oturum yenilememiz gerekir
PRATIK BILGI 
ls -l adem/adem-zeynep ile biz adem-zeynep klasoru altindaki dosyalari ve klasorleri listeleyebiliriz 

(parantez icinde pratik bir bilgi  ls -l adem/adem-zeynep) bu su an uzerinde buludngumuz dizinin altindaki adem klasorunun altindaki adem-zehra dizininin altinda bulunan dosya ve klasorleri bize listeler...
echo 
3-SISTEM GENELINDE TUM KULLANICILARI ETKILEYEN BIR DEGISIKLIK YAPMA

Yapacagmiz degisikliklerin tum kullanicilarda gecerli olabilmesi icin yapacagmz degisikligin etc/bash.bashrc iceriisnde  yapmamiz gerekiyor.. 

ana root da iken sudo nano /etc/basch.bashrc diyerek bu dosya icerisine giregbiliriz... 
ama dikkat edelim...  sudo nano etc/basch.bashrc bu  yol hatali sudo nano /etc/basch.bashrc bu yol dogrudur

Burda ornegin bir dil degisikligi yapcaksak o zaman sunu yapariz
export LANG=fr_FR;
BUU COOOK ONEMLI--ENVIRONMENT VARIABLE DA BIR DEGISIKLIK YAPILDIGI ZAMAN BU DEGISIKLIGIN ALGILANABILMESI ICIN OTURUMUN YENILENMESI GEREKIR---
BU degiskligi kaydedip ciktiktna sonra ypailan degisikligin algilanmasi icin oturumun yenilenmesi gerekir...cook onemli...

Yapilan degisikliig geri almak icin yapilan degisiklik dosyadan silinir ve sonra dosya kaydedlip oturum tekrar yenilenir ise o zaman yapilmis olan tum degisikler yenilenmis olacak... 

Konsol, kullanıcı ile Shell arasından yer alarak kullanıcının komut girmesini sağlayan grafiksel ve komut satırı arayüzüne sahip bir araçtır. Biz komutlarımızı bu araç aracılığı ile Shell'e ulaştırırız Shell ise kullanıcıdan gelen girdileri yorumlayarak Kernel'e aktarır.

UYGULAMALAR-BIZIM COMMAND BASH-PROGRAMINA YAZDIMGIZ TERMINAL KODLARI=>SHELL=>KERNEL=>CPU-RAM-AYGITLAR(DONANIM)

KISA YOLLAR... 
TERMINAL KISA YOLLARI 
COPY CTRL-SHIFT-C
PASTE CTRL-SHIFT-V

Biz bu kisa yollari eger istersek, ubuntu terminal menusunde kisa yollari bulunp onlari biz isetrsek eger CTRL-C/CTRL-V diye kopyala ve yapisitr kisa yollarini degistirebiliriiz
SISTEM KISA YOLLARI
Biz terminali acmak icin, bir kisa yol olusturmak istiyoruz.. 
Sistem ayarlari ayarlar-aygitlar-klavye ayarlari-sistem ayarlari
En altta + isareti var ordan kendimizi kisa yol olsuturabiliriz
Ayrica orda var olan tum kisa yollari da kendi istegimize gore degisebiliriz
BU ARADA BIZ SIMDILIK BUNLARLA COK UZUN ISMIZ OLMADIGI ICIN GECIYORUZ AMA, BUNLAR BAZEN COK CIDDI ISLEMLERIMIZI PRATIKLESTIREBILIECEGI DURUMLAR OLABILIR...ONUN ICIN NE ZAMANKI IHTYACIMZ OLURSA O ZAMAN DAHA DETAYLARINA INMELIYIZ... VE KULLANMALIYIZ... 

CTRL-A-IMLECI SATIR BASINA GETIRIR
CTR- E IMLEC SATIR SONUNA GELIR
CTRL-P DAHA ONCE CALISTIRIMDGIMIZ KOMUTLARI GOREBILIRIZ
CTRL-N DAHA SONRADAN CALISTIIDGIMIZ KOMUTLARI GOREBILIRIZ
ALT-B ILE IMLECI BIR KELIME SOLA KAYDIRILABILIYOR
ALT-F IMLEC BIR KELIME SAGA KAYAR
CTRL-B BIR KARAKTER IMLECI GERI GOTURUR
CTRL-F BIR KARAKTER ILERI GIDER IMLEC
CTRL-XX SATIR BASINA GIDER BULUNDUG KONUMDAN
DUZENLEME KISA YOLLARI
CTRL-L ILE CLEAR IN YAPTIGI AYNI ISI YAPAR EKRANI TEMIZLER
ALT-D IMLECTEN SONRA BIR KELIME SILER
CTRL-U IMLECIN SOL TARFINDA KALAN IFADELERI SILER
CTRL-K ILE IMLECIN SAG TARAFINDA KALAN TUM IFADELERI SILER
CTRL-Y ILE KISA YOLU ILE DE KESTIGMIZ IFADEYI EKRANA BASARIZ
MOUSE ILE SECIP MOUSE-SCROLL TUSU ILE KOPYALAYABILIRIZ..YA DA MOUSE SAGA TIKLAYARAK DA KOPLAYA SECENEGINI SECEREK 

KOMUTLARI AYNI ANDA YANYANA KULLANMAK
&& KULLANARAK YAPARIZ
echo $PATH && echo $TERM AYNI ANDA HER IKI KODU BIRLIKTE CALISITRABILIYORUZ
AYNI SEKILDE ; KULLANARAK DA CALISTIRABILIRZ IKI KODU DA

tail Komutu
cat’e benzer şekilde, tail bir dosyanın içeriğini tek bir önemli uyarıyla yazdırır: Yalnızca son satırları verir. Varsayılan olarak, son 10 satırı yazdırır, ancak bu sayıyı -n ile değiştirebilirsiniz.
Örneğin, büyük bir metin dosyasının son satırlarını yazdırmak için şunları kullanırsınız:

tail uzun_metin_dosyası.txt
Yalnızca son dört satırı görüntülemek için:
tail -n 4 uzun_metin_dosyası.txt

head Komutu 

Head komutu, tail komutunun tamamlayıcısıdır. head komutu, bir metin dosyasının ilk 10 satırını hızlıca göstermek içindir, ancak -n bayrağıyla görüntülemek istediğiniz satır sayısını ayarlayabilirsiniz:
head uzun_metin_dosyası.txt
head -n 5 uzun_metin_dosyası.txt

grep Komutu

Grep, metin dosyalarıyla çalışmak için en güçlü yardımcı programlardan biridir. Normal bir dizindeki dosyalar içinde grep komutuyla belirttiğiniz ifadeyle eşleşen satırları arar ve bunları gösterir:
	grep "linux" uzun_metin_dosyası.txt
	–c bayrağını kullanarak kalıbın kaç kez tekrarlandığını sayabilirsiniz:
	grep -c "linux" uzun.txt

find Komutu	
Find komutu, bir regex ifadesine dayalı olarak bir dizin hiyerarşisindeki dosyaları arar. Kullanmak için aşağıdaki sözdizimini izleyin:
	find ./ -name "uzun_metin_dosyası.txt"
ARANILAN DOSYA ISMIINDEN KAC TANE VAR ISE HEPSININ UZUN YOLUNU GETIRIR	
	Bu komutu kullandığınızda aradığınız dosyanın konumu dosya yoluyla beraber sonuç olarak karşınıza çıkacaktır.

ping Komutu	
ping komutu, ağ bağlantısını test etmek için kullanılan en popüler ağ terminali yardımcı programıdır. ping’in bir sürü seçeneği vardır, ancak çoğu durumda bir alan veya IP adresi istemek için kullanırsınız:


chmod Komutu
chmod komutu, bir dosyanın izinlerini (modunu) hızlı bir şekilde değiştirmenizi sağlar. Ayrıca bir çok seçeneğe sahiptir.
Bir dosyanın sahip olabileceği temel izinler şunlardır:

r (okuma)
w (yazma)
x (çalıştırma)

Chmod için en yaygın kullanım durumlarından biri, bir dosyayı kullanıcı tarafından çalıştırılabilir hale getirmektir. Bunu yapmak için, chmod ve +x işaretini ve ardından izinlerini değiştirmek istediğiniz dosyayı yazın:

chmod +x izini_değiştirilecek_dosya
Bunu, komutla dosyalarınızı çalıştırılabilir hale getirmek veya tam tersini yapmak için kullanabilirsiniz.
Bir dosyanın çalıştırma iznini iptal etmek için:
Yukarıdaki -x parametresini kullandığınızda bir dosyanın çalışma iznini iptal edersiniz o dosya tekrar izin verilene kadar çalıştırılamaz.

YARDIM ALMA KOMUTLARI
Bu cok onemlidir biz hatirlayamadigmiz her bir komut icin internete gitmemize gerek yok direk linux un bize vermis oldugu yardim komutlarini kullanarak da erisebiliriz

--help komutu--

hakkinda bilgi almak istedimg komut --help
chmod --help
help komutunun iki farkli kullanim yontemi vardir

echo gibi komutlar la kullanilamiyor cunku echo kendisi karsiina yazilan degeri ekrna basiyor ondan dolayi da bu durumda helpin 2 .kullanim sekli ile bilgi aliriz 

help echo  sekklinde kullaniriz

Ama genellikle en cok komut --help seklinde kullanmaliyiz

--man komutu -- kilavuz komutu
Cok genis capli bilgi sunar
man komut
man chmod
space tusuna basarak gelen aciklama sayfalari arasinda gecis yapabilirz
H tusuna basarak da yine MAN KOMUTU Hakkinda bilgi aliriz 
Q tusu ile de terminal den cikariz
NAME:kOMUT ISMI VE ACIKLAMA
SYNOPSIS:kOMUTUN NASIL KUllanilacagi-kullanim aciklamasi
DESCRIPTION:Komutun yaptigi is hakkinda aciklama
EXAMPLES:Komutun kullanimi ile ilgili ornekler

man komutu komutlarla ilgili bilgi sayfalarini /usr/share/man altinda tutuyor
root altinda yani home/adem de iken cd / yapinca ya da cd ../../ yapinca geldigimz dir root tur orda bulunyor /usr/share/man

MAN-h 
man sayfasinda iken h tusuna basarak man ile ilgili detayli bilgiyi elde edebiliyoruz

WHATIS KOMUTU
Bu komut sayesinde hangi komutun hangi man sayfasinda oldugunu bulabiliyoruz 
/usr/share/man altinda man1, man2,man3 dosyalari var bunlarin her biri belli komut turleri icin var
whatis  chmod dersek 
chmod(1) - change file mode bits
chmod(2) - change permissions of  a file
seklinde aciklama gelir bu da su demektir demekki chmoda a ait dosyolar man1 ve man2 sayfasinda bulunyor
Istersekde man1-man2 ye gidip check edebiliriz
Olur da komut ile ilgili detayli bilgiyi direk dosyasindan okumak istersek de yapabilirz 
man whatis diyerek de daha detayli bilgi elde edebiliriz 

APROPOS / MAN -K KOMUTLARI
APROPOS KOMUTU VEYA MAN -K KOMUTLARI  ILE HATIRLAYAMADIMGIZ KOMUT ISIMLERINE HARIKA BIR SEKILDE ERISEBILIYORUZ
man-h listelenince gelir APROPOS 
sorguladigi komutun gectigi uygulamalari listeler
man -k chmod ile approps chmod ayni islemi yapiyor
man kilavuz sayfalarinda detayli arastirma yapabilmis olyoruz komutun ismini hatirladik ama islevini hatirlamadik veya islevini hatirladik ama ismini hatirlamadik. Boyle durumlarda appropos ile

ornegin bir komut var di silme islemi yapiyordu ne idi ne idi deyip 
apropos remove yazarsak  veya /  man -k remove

aa-remove-unknown (8) - remove unknown AppArmor profiles
add-apt-repository (1) - Adds a repository into the /etc/apt/sources.list or /etc/apt/sources.list.d or removes an ex...
apt-add-repository (1) - Adds a repository into the /etc/apt/sources.list or /etc/apt/sources.list.d or removes an ex...
byobu-disable-prompt (1) - add and remove a nice color prompt to your shell configuration
byobu-enable-prompt (1) - add and remove a nice color prompt to your shell configuration
byobu-prompt (1)     - add and remove a nice color prompt to your shell configuration
colrm (1)            - remove columns from a file
cut (1)              - remove sections from each line of files
delgroup (8)         - remove a user or group from the system
deluser (8)          - remove a user or group from the system
git-clean (1)        - Remove untracked files from the working tree
git-prune-packed (1) - Remove extra objects that are already in pack files
git-rm (1)           - Remove files from the working tree and from the index
git-stripspace (1)   - Remove unnecessary whitespace
ipcrm (1)            - remove certain IPC resources
kernel-install (8)   - Add and remove kernel and initramfs images to and from /boot
lvremove (8)         - Remove logical volume(s) from the system
modprobe (8)         - Add and remove modules from the Linux Kernel
psfstriptable (1)    - remove the embedded Unicode character table from a console font
purge-old-kernels (1) - remove old kernel and header packages from the system
pvremove (8)         - Remove LVM label(s) from physical volume(s)
py3clean (1)         - removes .pyc and .pyo files
remove-shell (8)     - remove shells from the list of valid login shells
rescan-scsi-bus.sh (8) - script to add and remove SCSI devices without rebooting
rm (1)               - remove files or directories
rmdir (1)            - remove empty directories
rmmod (8)            - Simple program to remove a module from the Linux Kernel
sg_sanitize (8)      - remove all user data from disk with SCSI SANITIZE command
unlink (1)           - call the unlink function to remove the specified file
update-rc.d (8)      - install and remove System-V style init script links
vgreduce (8)         - Remove physical volume(s) from a volume group
vgremove (8)         - Remove volume group(s)

bize asagidaki gibi aciklama getirir ki bu harika birseydir biz aslinda ihtiyacimz olup da hatirlamadigmiz islevleri anahtar kelimeler uzerinden hangi komutlar var  diye bu sekilde arayabilirz

ORNEGIN KOMUTU

apropos kill / man -k kill

Aradgimiz yardimi bulamazsak man komutunu guncelleyerek bir daha arayabiliriz
bunu da 
mandb komutu ile yapariz

chmod --help  komutu ile help chmod  komutunun çıktıları aynı mıdır ?
Kesinlikle aynı değillerdir. `help chmod`komutu bilgi sayfasını vermez. Çünkü `chmod`komutu istisnai durum oluşturmadığı için bilgi sayfalarına ulaşmak için `chmod --help` komutu kullanılmalıdır. Bu durum tüm komutlar için geçerlidir. Eğer sorguladığınız-bilgi almak istediğiniz komut istisnai durumlara dahil değilse `help komut`şeklinde kullanım sonuç vermez. Özetle: help komutu kullanırken; istisnalar için : `help komut` , diğer komutlar için : `komut --help` şeklinde kullanılmalıdır. İstisnaları bilmek zorunda değilsiniz, gerekli durumda komutu her iki şekilde de deneyerek görebilirsiniz
help  komutunun iki farklı kullanım şekli olduğunu biliyoruz ( help komut ve komut --help ). Peki ya iki kullanım arasından hangisi öncelikli tercihimiz olmalı ?
Bazı linux komutlarının kullanım şekilleri nedeniyle bazen `komut --help`şeklinde girilen komut bizlere aradığımız komut hakkında yardım bilgisi vermeyebiliyor. Örneğin konsola `echo --help`yazdığımızda çıktı `--help`ifadesi olacaktır.`echo` komutu için yardım bilgisine ancak`help`komutunu `help echo`şeklinde kullanırsak ulaşabiliriz. Yani bazı istisnai durumların dışında `help` komutunun sağladığı genel olarak en yaygın bilgi içeriği`komut --help`kullanımı geçerlidir. Bu yüzden `help`komutunu kullanırken ilk önceliğiniz her zaman `komut --help`şeklindeki kullanım olmalıdır.

BILGI ALMA KOMUTLARI-SISTEMIMIZDE BULUNAN HERHANGI BIR PROGRAM VS HAKKINDA BILGI ALMAMIZI SAGLAR
BU KOMUTLARA COK SIKLIKLA BASVURUYORUZ GERCEK HAYATTA

uname komutu
bize cekirdek hakkinda bilgiler sunar
man uname dersek uname hakkinda detayli bilgi alabiliriz
man uname de uname i hangi parametrelerle kullanabilecegmizi gorebiliyoruz 

uname -a  (-all- tum bilgileri sunuyor)
bu bilgileri ayri ayri yazidirmak istersek
uname -s kernel ismini verir
uname de kernel ismini verir
uname -n host ismini bilgisyar ismin verir
uname -r derlenme surumu gelir 
uname -v kernel versiyon
uname -m veya uname machine ile  islemci-donanim bilgisi gelir - x86_64
uname -o isletim sistemi ismi verir

HOSTNAME KOMUTU 
Biz web sitesine request gonderdigimz de arama cubuguna -url-adress cubuguna yazdimgz zaman domain ismin yaziyoruz
cunku domain isimleri userfriendly dir ama aslinda o adres 127.2.. gibi ip adresini yazmamiz gerekirdi bu isi bizim icin kolaylastiran 
DNS - DOMAIN NAME SYSTEM YAPISIDIR. Dns yapisi olmasa idi web adreslerine kelimler uzerinden degilde web adresinin ip adresini dogru bir sekilde hatirlamamiz gerekirdi..  
Bunu ornek olarak telefon rehberinde egerr isim olarak kaydetmese idik direk numaralardan hangi numara kime ait hatirlayamazdik
Bunyesinde bulunan ip adresleri ile domain isimlerini eslestirerek bizim ip adresini hatirlamamiza gerek kalmadan direk domain ismini girerek web sitelerinin server larina request gonderebilmemizi ve onlardan gelen responsu da client ta local pc mizde goruntuleyebilmmeizi saglaniyor
DNS-DOMAIN NAME SYSTEM
172.217.4.132 -  google.com
77.88.55.80 - yandex.com
DNS ASLINDA BIR NEVI KAYIT DEFTERI ISLEVI GORUYOR 
ISTE HOSTNAME DE YEREL AG UZERINDE AYNI SEKILDE CALISIR
SISTEM UZERINDE CESITLI UYGULAMALAR CALISABILMEK ICIN HOSTNAME E IHTIYAC DUYARLAR
AYRICA YEREL AG UZERINDE AYGITLARIN ISIMLERI ARACILIGI ILE KOLAYCA AYIRT EDILEBILMESI SAGLANIR
BU HOSTNAME I BIZ ISTEDIGMIZ GIBI DEGISTIREBILIRIZ 
sudo hostname newname(istedimgi ismi veririz)
Bu gecici olarak hostname imizi degistirebilmemizi saglar,sistem yeniden baslayinca tekrar eski hostname ismi gelecektir
Ama kalicii olarak degistirmek istersek root ta etc klasorune geliriz orda hostname dosyamizi sudo ile acariz 
sudo nano /etc/hostname ile acip ismi degistirirsek o zaman kalici olarak hostname ismi degistirilmis olacaktir
Ayrica sorun yasamamak icin hostname ismini bir de etc/hosts isimli dosya icine de eklmememiz gerekir
etc/hosts un gorevi bir nevi loca-dns gibi davranarark ip adresleri ile hostname bilgilerini eslestirmektedir

hosts dosyasi

127.0.0.1 localhost
127.0.0.1 adem-HP-EliteOne-800-G1-AiO 

Burda yapacagimz degisiklik sayesinde pc ip adresi ile hostname bilgisini eslestirerek yerel ag genelinde yeni hostname in gecerli olmasii saglayacaktir

127.0.0.1 bu bizim pc mizin ip adresini temsil etmektedir
Normalde ip adersi sabitlenmedigi surece degisken oldugu icin, her defasinda buraya pc nin yeni ip adresini girmek yerine bu isi bizim icin yapan 127.0.0.1 adres bilgini kullanabiliyoruz..Yani bu adres bizim surekli degisen ip adresimizin yerini tutuyor, ama eger pc de ip adresi sabit ise tabi ki dogrudan o ip adresi de 127.0.0.1 yerine eklenebilir
Ayrica eger istersek burda birden fazla hostname tanimlamnasi yapabilirz, bu sekilde buraya ekledimgiz hostname lerden istedgimz bir tanesini sorunsuz bir sekilde kullanabiliriz

lsb_release -a komutu
man lsb_release ile de detyali bilgi elde edilebilir
Bizim mevcut dagitimizi ilgili bilgileri veriyor

whoami komutu - kimlik sorgu islevini gorur

Mevcut kullanicinin hangi kimlik ile calistigini verir
whoami komutu benim pc de adem sonucunu veriyor benim root olarak username olarak adem oldugu icin
username i  veriyor yani

who-komutu 
sistemde hangi kullanicilarin aktif oldugunu gosterir

w komutu
Hangi kullanicinin hangi islemi gerceklestirdigini gosterir

uptime komutu 
Bilgisyarimzin ne kadar suredir acik oldugunu bize bildirir
10:14:52 up 11 min, 1 user load average: 0,02, 0,07 ,0,08
11 dakikadir sistemin acik oldugunu gosteriyor. Linux e giris yaptigmiz andaki kismi gosterir

date- komutu tarih saat bilgilerini verir

DIKKATTT--
cal - yazarak takvim seklinde terminale yazdirabilirz
cal diyourz hicbirse gelmiyor hemen bulmak icn man -k veya cal --help yaziyoruz ama yine birsey gelmiyoir boyle durumlarda 
2 sey olabiilir ya guncelleme gelmis komut degismis olablir ki onda da komut islevi ni  yazarak man -k veya apropos ile arariz ya da bu aradigmiz ozellik sudo apt install ile installl edilmesi gereken birseydir ve bizim onu install etmemiz gerekecektir
Bu linux de cok fazla yasaniyor ondan dolayi da boyle durumlarda once hemen calender

Baska yila ait takvim icin ise 
cal 1 2002 dersek 2002 nin ocak ayi takvimini getir demis oluyoruz

WHICH KOMUTU 
kullandimgz komutlarin ilgili dosyalarinin nerde oldugunu gosterir

which date 
dersek bize
/usr/bin/date
seklinde date komutunun dosyasinin bulundugu adresi verecektir

whereis komutu
Ogrenmek istedgimz komutun daha ayrintili konumunu veriyor
ornegin uptime komutunun bilgi sayfalari, manuel sayfalari yani kilavuz sayfalarinin adresiini aliyoruz
whereis uptime 
uptime: /usr/bin/share/man/man1/uptime.1.gz

locate komutu 
yazdgimz dosya isminin gectigi tum dosyalari listeliyor bize cok harika efektif bir kullanim sunuyor.. 
Tam olarak dizin adresini bilmedigimiz ama ismini hatirladigmz bir dosyayi bulmamiza yardimci oluyor 
sudo apt update 
sudo apt install mlocate
During the installation of the mlocate package, a cron job is created that runs the updatedb command every 24 hours. This ensures the database is regularly updated. For more information about the cron job check the /etc/cron.daily/mlocate file.
The database can be manually updated by running updatedb as root or user with sudo privileges:

sudo updatedb

locate index2.sh
diye index2.sh dosyasini ararsak  bize dosya yolunu verecektir 

/home/adem/Desktop/adem1/index2.sh 
seklinde

find komutuna benziyor bu acidan 
find -name "index2.sh"
./Desktop/adem1/index2.sh 

dmidecode komutu

Sistemimizde bulunan donanim ile ilgili tum bilesenler le ilgili bilgi almamizi saglayan bir komuttur
Bios ve sistem ile ilgli detayli bilgileri veriyor 
DMI- Desktop Manangement Interface

dmidecode -t bios
sadece bios hakkinda bilgi verir 
man dmidecode dersek hangi numaralarin hangi sistem bilesenine denk geldigini bulabiilirz ve ordaki numarlar uzerinden de kullanabiliriz 

dmidecode -t 0 -bios ile ilgili detayli bilgi verir 
dmidecode -t 1  system ile ilgili detayli bilgi verir

fdisk -l komutu 
Bize sistemimizdeki diskler hakkinda bilgiler veriyor

df komutu
diskler ile iligli daha ayrintili bilgiler veriyor

du komutu
bulundugmuz dizindeki dosyalarin boyutlarini veriyor
 du -h komutu 
 buludngumuz dosya dizinindeki dosyalarin boyutlarini mg-kb cinsiinden degerlerini verir
 free komutu 
 o anlik kullanilan bellek ile ilgili bilgileri veriyor
 toplam bellek, kullanilan miktar vs gibi bilgileri veriyor ve ne kadar musati yer oldugnu da veriyor

 free -m  
 ile mb cinsinden o an kullanilan bellek durumunu verir
  free -g  
 ile gb cinsinden o an kullanilan bellek durumunu verir

stat komutu 
stat dosya-yolu 
seklinde belirlenir
Bir dosya veya dizin hakkinda bize genel bilgiler veriyor
Ornegin 
stat Desktop diyerek Desktop klasoru hakkinda detayli bilgil alabirzi HOME adresinde iken
Bizde klasor konumu, size i , directory su dosya izinleri, olusturulma tarihi vs herseyi veriyior

vmstat komutu 
sistemin o anki durumu hakkinda bir takim bilgiler veriyor 
islemci, hafiza vs gibi... 

vmstat 2 3 (2 yenilenme hizi-2 saniyede ve 3 defa yenilensin demektir)

history komutu 

Bizm linux terminalde calisirken kullandigmz komutlarin hepsini linux bir history de tutuyor onlari hemen silmiyor
Bu komutta history komutudur ve bizim daha onceden  yapmis oldgumuz kodlari listeli bir sekilde tutuyor ve ihtiyacimiz oldugu zaman bize getirir

Default olarak gecmise donuk 1000 adet komut getiriyor
Ama bunu biz azaltip artirabiliriz 

echo $HISTSIZE yazarsak 1000 olarak gelir sonuc
Burdaki default deger olan 1000 i degstirmek icin .bashrc dosyasi icinde degisiklik  yapmamiz gerekir

.bashrc dikkat edersek . ile basliyor yani bu gizli dosya demektir. 
Gizli dosyalara erismek icin biz 
ls -a veya ls -all yazariz 
home/adem/Desktop altinda gelir ve ls -a veya ls -all dersek gizli dosyalar la birlikte karsimiza gelecektir 
Orda 
HISTSIZE=1000 Var burayi degistirip sonra oturumu yeniden baslatmamiz gerekkiyor degisiklikleri almak icin 
tekrar history yazarsak son 100 komutun geldigni gorebilriz
HISTSIZE=100 yaparsak bize ilk bastaki 1000 komutun son 100 komutunu getirecektir

HARIKA AUTOCOMPLETE ISLEMI LINUX TERMINALDE
Ornegin cok uzun komut yaziyoruz ve surekli kullaniyorsak  bir kere kullanip sonra
Komutumuz ornegin stat Desktop/adem1/index2.sh ise 
!stat seklinde komutmuzun baslangic kismini yazmamiz  yeterlidir
Sadece baslangic kismini bu sekilde yazdimgizda gerisini o bize getirecektir bunun aynisi windows da tab ile yapariz 
Oncelikle history yazarak en son kullandigimz komutlari aliriz sonra da autocomplete islemi ile
!stat burda stat herhangi bir kodun ilk kelimesini temsil ediyor..yoksa ekstra dan stat in bir anlami yok onemli olan ! isareti ile bsalamaasidir
!stat yazarak en son kullandimgz komutlardan uzun komutlari tekrar yazmak zorunda kalmamiz oluruz

Birde yine history ile en son kullandgimiz komutlari getiririz 
Komutlarmiz gelirken hem numara hem de isimleri ile birlikte geliyorlar
Biz o numaralari kullanarak da komutlarmiz getirebiliriz

!1098 yazarsak en son kullandigmz komutlardan stat Desktop/adem1 komutu run edilerek gelecektir 

Birde son yazdgimiz komuta erismek icin ise 
!! kullaniriz en son hangi komutu kullandi isek onu bize getirecektir

COOK KULLANISLI BESTPRACTISE DIR ASAGIDA YAZDIKLARIM DA
Ayrica klavyemizden biz daha once kullandgimiz komutlara erismek istersek o zaman yukari ok tusu na basarak sirasi ile yukardaki komutlara dogru gecmiste kullanilan komutlara dogru cikarken alt-ok tusu ile de tekrar eskiden yeniye dogru yukardan asgiya dogru gelebiliriz.

LINUX DOSYA SISTEMI HIYERARSISI
Linux un dosya sistemi windowstan farklidir
Siniflandirma yapilarak bir hiyearsi olusturulur 
Tekil hiyerarsi yapisini benimsemistir
Yani hersey / tek slash root kok dizini ile baslayip asagi dogru iner
Root klasorunden baslayarak onem sirasina gore siralandirir
ic ice klasorlerde klasor leri birbirinden ayirmak icin / isareti kullanir
Herhangi bir dizin veya dosyanin sistemdeki adresi karsimiza gelirken once root-kok(/) diziinden baslar, sonra ulasmak istedigi klasor veya dosya ya kadar gecilmesi gereken hiyearsik klasorlerden tek tek gecilerek ve klasorler arasina / koyarak  elde edilir
/home/adem/Desktop/adem1/index2.sh

aenetsense@ADEM850:~$ bu sekilde kullanici adi ile gelir bu home yani HOME demektir pc  ye gore olan HOME(/home/aenetsense) ten olusur 
Yani  root dizininden HOME a kadar otomatik acilmis olarak geliyor
Yani terminal default olarak acildiginda biz bilemliyiz ki biz HOME dayiz 

/home/aenetsense en bastaki / slash ifadesi bizim root-kok dizinimizi temsil ediyor, diger slash lerde klasorler arasi gecisi temsil eder

Windowsta klasorler arasi gecisi temsil eden slah ters slashtir.. C:\Program Files\Java

LINUX DE 
echo $PATH yazarsak terminalde 
/usr/local/sbin:/usr/local/bin: bu sekilde ENVIRONMENT VARIABLES DAKI PATH DE BULUNAN ADRESLER YER ALIR VE HER BIR ADRES ARASINDA COLON BULUNUR :

WINDOWS DA 
echo %PATH% ile yazdirabiliriz winddows promp ta
C:\Program Files\ImageMagick-7.1.0-Q16-HDRI;C:\Program Files\Eclipse Adoptium\jdk-11.0.17.8-hotspot\bin;
Windows da adresler arasinda ; semicolon kullanilir

LINUX DE terminalde yaptimgz tum islemler case-sensitive dir yani buyuk-kucuk harf duyarliligina tabidir
Yazaagimiz komut un veya yazacagimiz dosyanin buyuk veya kucuk harfler olmasi tamamen farkli seylerdir linux da ayni isim ama buyuk kucuk harf farkliligi olan dosyalari farkli dosya olarak kabul eder LINUX SISTEMLERI

WINDOWSTA ISE CASEINSENSIVE DIR YANI WINDOWSTA BIR DOSYA OLUSTURDUGMUZ ZAMAN O DOSYA TAMAMEN KUCUK HARF ILE OLUSTURULMUS ISE BIZ AYNI DOSYA ISMINI TAMAMEN BUYUK HARF KULLANARAK BIR KEZ DAHA OLUSTURAMIYORUZ CUNKKU WINDOWS KUCUK HARFLE  YAZILMIS KLASOR ILE AYNI ISMIN BUYUK HARFLE YAZILMIS ISE BUNLARI AYNI KABUL EDIYOR 

LINUX ISLETIM SISTEMINDE ki hazir komutlara ait parametrelerdeki harflerde de kucuk harf ve buyuk harflerin farkli islevleri vardir 
ls -a 
ls -A

Windows isletim sisteminde sisteme yeni bir program yukledigmiz zaman yukledgimiz programin dosyalari C altinda ProgramFiles altinda yuklenen programin kendi adindaki klasor altina ekleniyordu. Yani windowsta yuklenen programin tum dosyalari ProgramFiles altinda programin isminin yer aldigi klasor altina toplanmistir 
Ama Linux da bu sekilde degildir, ornegin sistem otomatik olarak yuklenen program dokumanlarini usr/share/doc/yuklenenprogram_di seklinde  yerlestirirken eger var ise info dosyalari da /usr/share/info klasoru icerisina atar
Kisacasi Linux de yeni bir pgoram kurdugmuzda kurulan programin dosyalari otomatik olarak ilgili klasor  altina dagilacktir windows da oldugu gibi bir klasor altinda tum dosyalar tutulmuuyor
/usr/share demek root->usr->share demektir bunu bilelim
Cok kullanicili dagitik bir sistemi guvenli bir sekilde kurup y onetmek amaciyla bu sekilde yapilir
Dagitik kavrami da ornegn birden cok bilgisayarin oldugu bir agda bilgisayardan birisinin ag dizinine kok dosyalari altindaki dosyalar istenildigi gibi dagitilarak bolunebilir

/bin /boot /dev /etc /home /lib /media /mnt

Ornegin X_Pc /bin klasoru dagitilir
Y_Pc /home klasoru dagitilir

Bu sayede fiziksel olarak birden cok bilgisayara dagilmis olan sucunu sanki tek bir kok dosya sisteminden sanki tek bir pc gibi yonetilebilir. Bu sayede hem is yuku dagitilarak sistem performansi arttirilir hemde  yetkilendirme ve y onetim kisitlamalari dahilindee sistemin ayri ayri parcalara dagilimi ile sistemde ekstra guvenlik onlemi saglanmis olur

Bu dosya sistemi tekil kullanicilar icinde sagladigi guvenlik sistemi ile gereekli bir sistemdir
Tum kullanicilar kendi yetkileri dahilinde islemleri guvenli bir sekilde yerine getirirler, bu sekilde yonetim ve gunenli saglama isi kolaylasacaktir

Birseysel kullanici yetkisi yok ise kendi anar HOME(home/username) i nden daha ustteki dosyalara gidemez ya da gitse bile o dosyalari degistirme yetkisine sahip olamaz. Tum kullanicilar islemleri kendi yetkileri dahilinde yaparlar

Biz pc mize birden fazla kullanici olustrabilirz ve root yetkisi olmayan bir kullanici ekleyebilriiz.. o zaman bizim root kullanici olarak ornegin ekledgimz bir dosya yi acabilir okuyabilir ama degistiremez veya silemez
Kullanicilar sadece kendi  yetikleri dahilinde harekeet ediyorlar ve sizin dosyalariniza mudahele edemiyorlar buda guvenlik icin cok onemldir

HIYERARSIK DUZENDEKI DOSYALARIN ISLEVLERI
/bin klasoru isletim sistemin i kullanmak icin bircok komut bin klasoru altindadir
cp,cat,mv,ls,mkdir,m, gibi bircok komut
sistem boot edildiginde ilk olarak /bin klasoru calistirilir hale getirilir
Sistemde ne kadar sorun olursa olsun /bin klsaorundeki komutlar calismaya devame eder ki bu sayede sistemimizdeki arizalari da yine /bin klasoru altindkai komutlarla cozebiliriz
/boot klasoru sistemin yuklenme evresidir sistemin boot edilmesinde kullanilan dosyalar /boot klasorunde bulunur(sistem ilk acildiginda calisacak olan dosyalardir)
/dev klasoru , linux de hersey bir dosyadir donanim aygitlari da boyledir, USB girisleri seri paralel portlar, depolama ortamlari, CD roomlar ve bunun gibi butum aygitlar /dev klasoru altinda tutulan dosyalardan ibaretttir
Bunlari normalde programlar vasitasi ile kullaniriz ama dosya olarak da elimizde oldugu icin direk olarak da mudahele etme imkanimizda var 
/etc klsoru : Isletim sistemini bir vucuda benzetirsek, etc sistemin merkezi, sisteme dair tum ayarlari ve bilgisyaar ozel bir cok yapilanma bilgiis burdadir
/home klasoru : Burasi kullanicilarin kalesidir. Her bir kullanicinin kendi adinda bir alt klasor bulunur /home klasoru altinda
/home/adem   /home/zehra
Kullanicilarin kisisel degisiklik ve ayarlar ,yapilandirmalarin hepsi kendine ait subklasor altinda tutulur
Ayrica kullanicilar home klasorunu kendine ait belge vs de tutabilir

Tum kullanicilari gormek icin 
cut -d: -f1 /etc/passwd
Yeni kullanci eklemek icin sudo adduser new_username or sudo useradd new_username
Remove  user - sudo userdel username
modify user - usermod -l new_username old_username
change username password - sudo passwd username

/lib klasoru- Cekirdek modullleri ve paylasilan kutuphane klasorleri bu klasor altinda bulunur
Kutuphane dosyalari sistemi baslatmak ve bin ve sbin klasorleri icerisindeki komutlari clistrmak icin gereklidir
Bunlar windowsda dll klasorlerine karsilik gelir ve linux de lib dosyalari nin uzantisi .so dur

/lib64 lib32 / 64 luk bitlik bilgisyar 32 bitlik pc ye uyumluluk ile ilgili dosylara bu sayede erisebilir

lost/found 
Eger bir dosyamiz vs kayboldu ise buraya baklamk lazim
pc yi resetlerken veya aniden elektrik gitme durumunda dosyaslarin silinmesini onler
Eger duzeltemeye calisip da dosyayi duzeltemezse bu klasorleri veya dosyalari lost/found klasoru altina atar

/media
kaldirilabilir aygitlarin, 

mnt/
Donanim aygitlarinin baglanma noktasidir
windows isletim sistem i kullandigmiz pc mize eger linux-ubuntu kurup da linux e gecis yaptigimzda windowsdaki var olan dosyalara ordan erismek istersek  cd /mnt/c/Users

prox/
surecler sistembellegi, donanim yapilandirmalari 
sistem durumuna dair sanal dosyalari barindirir 
bir nevi bilgi alma merkezi gibi dusunebilriz

cat /proc/swaps 
sistem ile ilgili bilgiler alabiliriz
cat /proc/cpuinfo
islemci ozelliklerini ogreniriz
sistemde ayarlama yapmak icin de kullanilabilir

root/ 
root- linux da her turlu yetkisi olan root kullanicilaridir
Yani root kullanicilar icin home dizini root dizini iken normal root olmayan kullanicilar icin ise bu home/adem seklindedir

home/adem  adem kullancisinin bu sekildedir
/root  root kullanicisinin bu sekildedir

root hesabi ile sisteme giris yapilmasi linux dagitimlarda pek cogunda default olarak engellenmistir cunku bu bir guvenlik zaafiyetine  yol acacagi icin

/sbin 
root kullanicisi icin kullanilabilecek onemli komut ve programlar burda bulunurken 
daha az oneme ve normal kullanicilar tarafindan kullanilacak komutlar ise usr/sbin klasoru altinda tutulmaktadir
usr/local/sbin  kullandigmiz makineye ozel root tarafindan kullanilacak komutlari barindirir

/usr
Isletim sisteminde kullandigmiz bircok seyle iliskisi vardir. Kurdugumuz her program usr dizini icerisine atilir
usr dizini windows daki Program Files a benzer bir islevi vardir
opt klasoru sistemimize disardan gelen 3.part programlar icindir fakat paket yonetici ile yukledgimiz hersey usr dizini altina atilmaktadir

Tum kulllanicilarla paylasilan verileri iceren dizindir
usr/local sadece kullandigmiz makineye ozeldir

local ifadesi bunun sadece bizim makinemize ait oldugunu bilmeliyiz

/tmp gecici depolama alanidir. 
Bircok program /tmp klasorunu gecici depolama alani olarak kullanmaktadir

Genellikle isletim sistemi yeniden baslatildiginda icerisindeki dosyalar silinir
Bunun altindaki dosyalari kesinlikle silmemeliyz

ROOT-DIR => / yani tekbasina / slash root u temsil eder ki bunu da zaten 
cd / yaparak gorebiliriz ve de ayrica biz dizin olarak nerde olursak olalim cd /  yaptigmiz zaman hemen root dizinine gelebiliriz

DIZIN ISLEMLERI
pwd- o anda uzerinde bulundgumuz dizini verir

cd- change directory komutu 
directory degistirmemizi sagliyor
cd .. bir onceki diziine doneriz
cd -- veye sadece cd ile en bas dizine daha dogrusu home dizine doneriz home/adem
cd - iki dosya arasinda surekli gel - git yapiyorsak cd - ile yapabilirz bunu cunku cd - bir geri alir sonra cd - yaparsak bu seferde bir ileri alir yani gidip geline iki dosya var ise oyle durumlarda cok islevseldir

BURASI COOK ONEMLI BU FARKI BILELIM 
pwd - /home/adem  dizinindeyiz orgin ve (home/adem/Desktop) Desktop dizini adem dizinin altinda bulunuyor
biz Desktop dizinine gitmek icin 
cd /Desktop  dersek bize No such file or directory diyecektir cunku en basa koydugumuz / root u isaret eder ve root a gider ordan sonra Desktop u arar o zaman da zaten Desktop u bulamaycaktir... ama 
cd Desktop dersek uzerinde bulundugmuz dizin in altinda Desktop var mi ona bakar

KLASORLER ARASI  YAZDIGIMZ / SLASH-ISARETI ILE EN BASA YAZDIGIMZ SLASH-/ ISARETI BIRBIRINDEN TAMAMEN FARKLIDIR

ls -l  satir satir detayli olarak dosya ve dizinleri listeler
ls satir yapmadan dosya ve dizinleri listeler 
ls -la ile ayrinitili bir sekilde alabiliriz
ls -a  dersek gizli dosyalar ile birlikte gelir(Gizli dosyalar basinda . olan dosyalardir)
ls -A dersek de gelen dosya isimleri arasinda gelen  ., .. isaretlerini getirmez

ls -hl dersek tum dosyalarin boyutlari ile birlikte getirecektir
h parametresi human-readable demektir.. 

ls -i (inode degeri ile birlikte verir)
ls -Sl (l ile daha ayrintili listeler)-dosyalar boytularina gore buyukten kucuge siralanir

ls -tl () olusturulma tarihlerine gore listeliyor

ls -rl dosyalari terseten basabilirz(reverse-list)

Dosyalarimzi boyut olarak kucukten buyuge dogru nasil siralariz 
ls -Srl ile dosyalarimzi kucukten buyuge dogru siralayabiliriz

mkdir-rm ile klasor olusturma ve silme
make directory demektir 
mkdir a  a klasoru olusturur 
mkdir a,b,c,d     tek serferde 4 tnae klsor olusturur
IC ICE KLASORLER OLSUTRABILME 
mkdir -p adem1/adem2/adem3  bu sekilde ic ice klsorler de olusturabiliriz

SILME ISLEMI 
rm normalde dosya silmek icin kullanilir 
ama klasor silmek icin ise 
rm -r adem3 diye silebiliriz ancak rm -r ile silemk istedigmz klasor icinde dosya veya klasor var ise  o zaman silme islemini bu sekilde gerceklestiremez, yani rm -r ile biz icerisi bos olan klasoru silebilirz
Ama klasorun icerisi eger dolu ise o zaman da biz 
rm -rd adem1 dersek adem1 icindeki adem2 yi ve adem2 icindeki adem3 dosyalarn hepsini sileriz

Klasorun bizden izin alinark silinmesini saglayabilriz
rm -id a b c d  diyerek a,b,c,d klasorlerinin hepsinin silinmesini bize sorularak gerceklestirilmesini istyioruz ve her bir klasor icin bize soracaktir yes dersek silecektir 

Var olan bir klasor altina da yeni klasor eklemek istersek 
mkdir -p new/new2 diyerek mevcut new klaoru altina new2 klasoru eklemis oluruz

ls -tlr
ls -Slr
*/


?>

