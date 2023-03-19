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
NU için her şey her daim güllük gülistanlık değildi. GNU, içerisinde kendine ait güçlü araçları bulundurmasının yanı sıra kararlı bir çekirdeğe sahip değildi. Çekirdek için denemeler yapılmış ancak kararlı bir çekirdek oluşturulamamıştı.

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


SHELL(KABUK)-LINUX-KERNEL KULLANICIDAN GELEN EMIRLERI DIREN ANLAYAMAZ ANCAK SHELL(KABUK) SAYESINDE KULLANICIDAN GELEN EMIRLERI ANLAYABILIR YANI KULLANICI ISTER ARAC KULLANSIN ISTER DIREK SHELL DE KOMUT YAZSIN ASLINDA ARKADA KULLANICI EMIRLERI SHELL-KABUK ARACILIGI ILE CEKIRDEGE ULASACAKTIR 

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
PATH="home/adem/Desktop/adem/adem-zeynep/adem-zeynep-zehra/":$PATH

BURDA SUNA DIKKAT EDELIM...EN BAS HOME KOMUTUNDAN ITIBAREN YOLUNU DOGRU YAZMAMIZ VE BULMAMZ GEREKECEKTIR...  COK ONEMLI... 
dosyanin en altina bunu ekleriz
ctrl-x e tiklariz ve kaydedilsin mi sorusuna Y-YES diye cevap yazariz
y ye basinca da dosya ismini ayni isim ile kaydedip kaydetmmeyecegmiizi sorar ayni isimle kaydetmeyiz yoksa dosya yi sistem okuyamayacaktir
Biz ctrl-x ile kaydetmeye calistik permission denied hatasi aldik bunun sebebi sudur 
Biz nano  yu acarken sudo ile yetkili root kullanici olarak acmadik ondan dolayi onun icin tekrar nano ile dosyamizi acarken bu sefer
sudo nano /etc/bash.bashrc diye acarak ayni islemi yapip ctrl-x ile kaydedip ayni dosya ismi ile cikariz
Bu sekilde path-environment variable  a eklenmis oldu yolumuz
Ancak yapilan ddegisikliklerin gecerli olmasi icin ya sistemin yeniden baslatilmasi gerekir ya da olustudugmuz degsikikliklerin tekrar source komut ile konfigure edilmesi gerekir
Bir dosya icinde yapilan degisikligin tekrar konfigure edilip bize yansitilmasi icn source komutu kullanilir
source /etc/bash.bashrc diyerek yaptigmiz degisikligin tekrar konfigure edilmesini saglayabilirz
isetrsek oturumu kapatip tekrar acadab ilriz...
Sonucta path-environment varibable la bir dosya yolumuzu giri p yapilan degisikligin sistem tarafindan taninacak hale gelmesini saglamis oluyorz
path ortam degiskenine bizim ekledigmiz path- eklenmis mi onu check edecek olursak 
echo $PATH YAZDIGMIZZ ZAMAN KARSIMIZA home/Desktop/adem/adem-zeynep/adem-zeynep-zehra/:.. bu sekilde gelecktir 
Demekki ekledimgz path environment variable  a eklenmis demektir
Simdi son bir ayar gerkiyor, bu da yetkilendirme islemi
Bizim dosya komutunu bulmasinna ragmen permission denied hatasi verecektir ondan dolayi.. 
bizim bu durumu cozebilmemiz icin komut .sh dosyamizin bulundugu dosya konumuna giderek
home/adem/Desktop/adem/adem-zeynep/adem-zeynep-zehra chmod +x new-file.sh 
komutunu girmemiz gerekiyor
Bu sekilde dosyamiza calistirma izni de vermis olyoruz
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
bash test.sh diyerek ve de cat test.sh diyerek de icerigini oldugu gibi okyabilriz

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
hidden files lari listelemk icin 
ls -a veya ls -all deriz
simdi gizli dosya olan ve HOME altindaki dosyalarda bulunan .bashrc dosysasini nano ile acalim 
sudo nano .bashrc  ile 
burda biz kullanici olarak her oturum actimgzda degisikligin gecerli olmasi icin her oturum baslangicinda okunan bu dosyanin en altina 
export LANG=C diyerek dilin ingilizce olmasini saglayan degisikligii yapariz
CTRL-X ile yes deriz ve entere basarak kaydedip cikariz ve artik biz her oturum acildiginda dil seceneginn inglizce olarak gelmesini bekiiyoruz ancak degisikligi hemen alamiyoruz bunun nedeni .bashrc dosyasinin oturum acilirken tekrar okunyyor olmasi, yaptigmiz bu tarz degisikliklerin gecerli olabilmesi icin oncelikle oturum yenilememiz gerekir
(parantez icinde pratik bir bilgi  ls -l adem/adem-zeynep) bu su an uzerinde buludngumuz dizinin altindaki adem klasorunun altindaki adem-zehra dizininin altinda bulunan dosya ve klasorleri bize listeler...
echo 
3-SISTEM GENELINDE TUM KULLANICILARI ETKILEYEN BIR DEGISIKLIK YAPMA

Yapacagmiz degisikliklerin tum kullanicilarda gecerli olabilmesi icin yapacagmz degisikligin etc/bash.bashrc iceriisnde  yapmamiz gerekiyor.. 

ana root da iken sudo nano /etc/basch.bashrc diyerek bu dosya icerisine giregbiliriz... 
ama dikkat edelim...  sudo nano etc/basch.bashrc bu  yol hatali sudo nano /etc/basch.bashrc bu yol dogrudur

Burda ornegin bir dil degisikligi yapcaksak o zaman sunu yapariz
export LANG=fr_FR;
BU degiskligi kaydedip ciktiktna sonra ypailan degisikligin algilanmasi icin oturumun yenilenmesi gerekir...cook onemli...

Yapilan degisikliig geri almak icin yapilan degisiklik dosyadan silinir ve sonra dosya kaydedlip oturum tekrar y enilenir ise o zaman yapilmis olan tum degisikler yenilenmis olacak... 

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
*/


?>