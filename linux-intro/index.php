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
Biz burda path i yaziyoruz, dosyayi degil dikkat yani /home/adem/Desktop/adem/adem-zeynep/adem-zeynep-zehra/ burasi klaro path adresidir, burda herhangi bir dosya ismi vs yoktur zaten dosya ismi olsa idi uzantiis olmasi gerekirdi....

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
Sonucta path-environment varibable la bir dosya yolumuzu girip yapilan degisikligin sistem tarafindan taninacak hale gelmesini saglamis oluyorz
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

KIsacasi :Dosyanin ./demo2.sh denildiginde run edilmesini , execute edilmesi ni saglayan sudo chmod +x demo2.sh    komutudur, yoksa dosyamiz hicbir zamaan calistirilamaz 

 
adem@adem:~/test/demo2$ sudo ./demo2.sh 

sudo: ./demo2.sh: command not found 

adem@adem:~/test/demo2$ sudo chmod +x demo2.sh 

adem@adem:~/test/demo2$ ./demo2.sh 

 

Ama bu dosyamizi eger istedgimz her yerden calistirabilmek istersek ..ne demek istiyoruz..Normalde biz ornegin ~/test/demo/demo1.sh dosyasini executable yaptiktan sonra onu execute edebilmek icin o dosya yoluna gideriz...  ve   

~/test/demo/  ./demo2.sh deriz...ama yanlis dosya yolunda bunu yaparsak bize oyle bir dosya bulunamadi diyecektir...Iste environment path e eklersek /etc/bash.bashrc icinde o zaman bizim artik hangi dosya yolunda oldugmuz onemli degill istedgimz her yerden dogrudan demo2.sh yazarak execute edebiliriz...Tabi ki oncesinden chmod +x ile executable  yapilmis ise ve de /etc/bash.bashrc ye eklemmis ve de pc yeniden baslatilmis ise....BUNLARI UNUTMAYALIM!!!! 



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

printenv ile tum environment variables a erisebiliriz!!!!!!!!!!!!!!!! 

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
GIZLI DOSYALARI NASIL GOREBILIRIZ
1-bir klasor veya directory altindaki gizli dosyalari gormek icin  /home/adem ls -all   veya /home/adem ls -a yapariz
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
man -k chmod ile aprops chmod ayni islemi yapiyor
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
sudo apt install ncal ile once cal comutunu kullanabilmek icin kurariz
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
sudo apt install plocate
locate test2 dersek test2 nin gectigi tum dosyalari getiriyor
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

Bu sayede fiziksel olarak birden cok bilgisayara dagilmis olan sunucu sanki tek bir kok dosya sisteminden sanki tek bir pc gibi yonetilebilir. Bu sayede hem is yuku dagitilarak sistem performansi arttirilir hemde  yetkilendirme ve y onetim kisitlamalari dahilindee sistemin ayri ayri parcalara dagilimi ile sistemde ekstra guvenlik onlemi saglanmis olur

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
/etc klsoru : Isletim sistemini bir vucuda benzetirsek, etc sistemin merkezi, sisteme dair tum ayarlari ve bilgisyaar ozel bir cok yapilanma bilgiis burdadir, environment variables lari duzenledigmz environment dosyasi da burdadir
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

Linux da icinde bir veya birden cok komutlarin oldugu dosya sh dosyasidir ve ./compandroid.sh seklinde calistirilir 
Windowsda ise icinde bir veya birden cok komutlarin oldugu dosya .bat dosyasidir ve compandroid.bat seklinde calistirilir

htop komutu
Bu komut windowsdaki taskmanager islevini yerine getirir yani ne bilgisayarin hafizasinin ne kadari hangi uygulamalara kullaniliyor bunu bu komutla anlayabiliriz takip edebiliriz 

node.js i biz apt paket yoneticisi ile kurmamaliyz cunku eski surumu kuruyor..son surumu kurabilmek icin onu diger yontemlerle kuracagiz veya internette arastirip linux da node.js son surumu nasil kurabiliriz diye check ederek bulacagiz.. 

df komutu
diskler ile iligli daha ayrintili bilgiler veriyor
Disklerin ne kadar bos ne kadar dolu oldugunu burdan kontrol edebiliriz

uname -a komutu
kullandigimz linux systemi ile ilgili bilgileri aliriz

Linuxde dosya indirme vs islemlerinde kullanilan curl vs gibi tool lar i once sudo apt ile kurup ondan sonra bu araclari baskaislemler icin kullanmaliyiz

Linux de snap- curl gibi paket indirme islemlerinde kullanacagimz paketler vardir.. 

UBUNTU DA EGER ANDROID STUDIO GIBI WORKBENCH GIBI UYGULAMALARI DIREK DOWNLOAD A TIKLAYARAK DOSYALARINI INDIRIRSEK UBUNTU ICIN..BUNLAR DOSYALARININ ICERISINDE .SH EXECUTE EDILEBILIR .SH DOSYALARI ILE GELECEKTIR...BIZ NORMALDE WINDOWSDA .EXE DOSYALARI ILE GELIR VE DIREK CIFT TIKLAYARAK SETUP I UZERINDEN MANUEL OLARAK ELLE KURARDIK ISTE BU ISLEM LINUX DA SOYLE OLUYOR.... .SH DOSYASNI BULUP ONU CALISTIRIRZ YA DA 
SUDO APT INSTALL ./MYSQL-WORKBENCH-COMMUNITY
DOWNLOAD BOLUMUNDEN PAKETLER INDIRILDIKTEN SONRA LINUX DA BUNLARI KURMAK ICIN..
Downloads bolumune .deb paketi inder										
Simdi bu paketi terminalden install ederiz										
Bu inen paket zaten install edilebilecek bir paket… Ve linux de bir paket calistirilrken execute ederken o paketin oldugu dizine gidilir ve ./paketadi.deb dersek paketi install etmis oluruz..	
sudo apt install ./package_name.deb 
diyerek burda uzantisi .deb idi mysqlworkbench kurulumunun ama farkli farkli uzantlar da olabilir.. 
AMA BIR DOSYAYI LINUX-UBUNUTUDA EXECUTE EDERKEN ./packagename.deb seklinde ederiz ama windows da direk gidip setup dosyasina .exe ye cift tiklayarak yapardik bu islemi
Bir dosyayi download edip sonra da bunu sudo apt ./packagename.deb ile install ettikten sonra linux de sol en altta menu-iconu-(show applications) a tiklariz ve arama kutucugunda indirdigmiz paketi arariz workbench yazariz bu hep bu sekildedir... YANI biz sudo apt install ./packagename.deb yapinca kurulan workbench applications arasina gelmis oluyor

mysql-ile ilgili komutlar
sudo systemctl status mysql.service -  su an servis aktif mi degil mi check edilir
sudo systemctl start mysql.service
sudo systemctl stop mysql.service


EGER USER IN SIFRESI VAR ISE BU SEKILDE GIRILIR
sudo mysql -u root -p;			
password			
EGER USER IN SIFRESI YOKISE DE BU SEKILDE GIRILIR
sudo mysql -u root;
Enter ile girilir sifresiz


LINUX DE TYPESCRIPT KURARKEN ONCELIKLE.
NODE.JS KURULU OLMALIDIR..VERIYONU ONEMLI SON VERSIYONLAR OLMALIDIR 

sudo npm install -g typescript
tsc ile versiyon ve yuklenip yuklenmedigini de gorebiliriz

LINUX DE DOWNLOAD ISLEMI.. .ZIP DOSYALARI
Normalde uzerine tikladigmz zaman download islemini baslatan url e ihtiyacimiz var bizim yani download islemini gerceklestiren endpoint hangisi ise onu aliip linux terminal de 
wget https://... seklinde terminal uzerinden request gondererek download islemini gerceklestiririz.. 
Burda suna dikkat edelim..biz download kodlarini terminalde wget https:// nerde run ediyorsak hangi klasor uzerinde run ediyorsak oraya indirecektir ve de ismi bazen direk indirdgimz dosya ismi olmayabilir ismi ornegin download olabiliyor...

LINUX DE DOWLOADED EDILMIS .DEB UZANTILI BIR DOSYAYI NASIL INSTALL EDERIZ 

dpkg command is used for to install package... 

sudo dpkg -i package_name.deb 
AYRICA SUDO APT INSTALL ILE DE AYNI SEKILDE .DEB  UZANTILI DOSYAYI KURABILIYORUZ
sudo apt install ./package_name.deb 

Resolve dependencies..If the installation fails due to missing dependencies, you can use the following to fix it: 
sudo apt-get install -f 

BIR KURULUM DA LINUX DE ORNEGIN JAVA KURULUMU YAPMAK ISTIYORUZ JAVA-VERSION17 KURULUMU 
geoserver icin java jdk version 17 kurulumu yapacagimz zaman oracle in sitesine biz zaten geoserver kendisi kurulumu anlatirken yonlendirir ve biz orda version 17yi secince asagidaki secenekelri bizim linux icin kullanabilecegimzi goruruz biz boyle durumlarda .deb uzantili dosyalari indirecegiz her zaman unutmayalim

Product/file description	File size	Download
ARM64 Compressed Archive	172.12 MB	
https://download.oracle.com/java/17/latest/jdk-17_linux-aarch64_bin.tar.gz ( sha256)
ARM64 RPM Package	171.87 MB	
https://download.oracle.com/java/17/latest/jdk-17_linux-aarch64_bin.rpm ( sha256)
x64 Compressed Archive	173.30 MB	
https://download.oracle.com/java/17/latest/jdk-17_linux-x64_bin.tar.gz ( sha256)
x64 Debian Package	148.86 MB	
https://download.oracle.com/java/17/latest/jdk-17_linux-x64_bin.deb ( sha256)
x64 RPM Package	173.04 MB	
https://download.oracle.com/java/17/latest/jdk-17_linux-x64_bin.rpm ( sha256)



Biz indirme  yapacagimz dosya nin dir uzerine geliriz 
cd Downloads 
sudo wget https://download.oracle.com/java/17/latest/jdk-17_linux-x64_bin.deb seklinde bu dosyayi download ederiz 
Ardindan dosyamiz indigi zaman, bu dosyayi kurmak icin de 
dpkg .....deb ile installtion i  yapariz.. 

LINUX DE SERVICE LER LE CALISMAK--VERITABANI SERVICE
POSTGRESQL
MYSQL
GEOSERVER

Ornegin bir postgresql kuruldugu zaman, service lerin baslatilmasi gerekir 
sudo service postgresql start-UBUNTU - SUDO SYSTEMCTL START POSTGRESQL 
Service nin baslatilip baslatilmadigin i kontrol etmek icin  
sudo sercive postgresql status - SUDO SYSTEMCTL STATUS POSTGRESQL
Service yi yeniden baslatmak icin 
sudo service postgresql restart - SUDO SYSTEMCTL RESTART POSTGRESQL
Service yi durduracagimiz zaman 
sudo service postgresql stop - SUDO SYSTEMCTL STOP POSTGRESQL
*/


/*
Once java jdk  11 ya da 17.versiyon kurulumu onu check ederiz				
				
java --version ile				
				
Kurulu degil ise java jdk-17.versiyonu kurariz				
				
Ardindan ise, 				
				
To check Ubuntu version:				
uname -a				
				
ubuntu@ip-172-31-42-131:~$ uname -a Linux ip-172-31-42-131 5.15.0-1028-aws #32-Ubuntu SMP Mon Jan 9 12:28:07 UTC 2023 x86_64 x86_64 x86_64 GNU/Linux				
				
Step #1:Download and Install Oracle Java 17 on Ubuntu 22.04 LTS				
				
This link takes you to the Oracle home website Oracle Java JRE, go to Java SE 17 and Click on Download as shown below.				
				
				
				
After clicking on Download copy the link address from here				
Now run the command using wget:				
				
wget https://download.oracle.com/java/17/latest/jdk-17_linux-x64_bin.deb				
				
Finally, install Oracle Java JDK 17 using the dpkg command.				
				
sudo dpkg -i jdk-17_linux-x64_bin.deb			

				
Step #2:Reinstall Oracle Java 17 on Ubuntu 22.04 LTS				
				
If the Oracle Java 17 installation was NOT successful, run the following commands				
				
sudo apt-get update				
				
sudo apt-get clean				
				
 sudo apt-get autoremove				
				
  sudo apt --fix-broken install				
				
Run installation file again:				
				
sudo dpkg -i jdk-17_linux-x64_bin.deb				
				
Step #3:Update Java alternatives on Ubuntu 22.04 LTS				
				
In some cases, you may need to install Oracle JDK 17 on the PATH location.				
				
sudo update-alternatives --install /usr/bin/java java /usr/lib/jvm/jdk-17/bin/java 1				
				
sudo update-alternatives --install /usr/bin/javac javac /usr/lib/jvm/jdk-17/bin/javac 1				
				
Step #4:Verify Java Version on Ubuntu 22.04 LTS				
				
After installing JDK, use the below command to verify the version				
				
java -version				
				
java version "17.0.6" 2023-01-17 LTS Java(TM) SE Runtime Environment (build 17.0.6+9-LTS-190) Java HotSpot(TM) 64-Bit Server VM (build 17.0.6+9-LTS-190, mixed mode, sharing)				
				
javac -version				
				
ubuntu@ip-172-31-42-19:~$ javac -version javac 17.0.6				
				
Step #5:Set the Java Environment Variables on Ubuntu				
				
 sudo update-alternatives --config java				
				
   And copy the path till “jdk-17” (i.e. “/usr/lib/jvm/jdk-17/”)				
				
   Open Environment File				
				
sudo nano /etc/environment/				
				
  Get to the last line and add JAVA_HOME=”/usr/lib/jvm/jdk-17/”)				
				
Step #6:Load the Java Environment Variables on Ubuntu				
				
Load the Java Environment Variables in Ubuntu 22.04 LTS				
				
 source /etc/environment/				
				
Check JAVA_HOME and Oracle Java 11 path 				
				
echo $JAVA_HOME				
				
ubuntu@ip-172-31-42-19:~$ echo $JAVA_HOME				
/usr/lib/jvm/jdk-17				
				

ENVIRONMENT VARIABLES 

print env veya 
echo $JAVA_HOME seklinde environment variable e eklemis olan bir key in value sini okuyabiliriz dogru eklenmis ise eger..  

Environment variable a yeni bir data eklendiginde oturumun da  yenilenmesi gerekeir yapilan degisikligin dogru okunabilmesi icin

1- sudo nano /etc/environment/  diyerek biz environment sayfasini acariz ver orda bizim ornegin projelerimzde direk environment variable dan dogrudan erisilmesini istedigimiz, veritabani bilgileri gibi bilgiler ilk olarak proje ayaga kalkarken burdan alinir bu bilgiler ver burdaki isaret edilen dosyalar araciligi ile okunur ve veritabani baglantilari vs saglanarak islem ilerletilir
				


The main difference between /etc/environment and /etc/bash.bashrc is their scope and purpose:

Scope:

/etc/environment: This file sets system-wide environment variables that are accessible to all users and processes on the system. Changes made here will affect the entire system.
/etc/bash.bashrc: This file is specific to the Bash shell and is executed for each user when they open a Bash shell. It sets environment variables locally for that user's Bash sessions only.
Purpose:

/etc/environment: This file is typically used to define global system settings and environment variables that are required by all users and processes on the system. It is commonly used for configuring paths, language settings, and other system-wide variables.
/etc/bash.bashrc: This file is used to customize the user's Bash shell environment. It allows users to define aliases, functions, and user-specific environment variables for their interactive shell sessions.
Regarding precedence and the order of preference:

When a user opens a Bash shell, the first file loaded and executed is /etc/profile. This file usually sources the /etc/bash.bashrc file, which means the settings in bash.bashrc will be applied after the global settings from /etc/environment.

If the same environment variable is defined in both files, the value from /etc/bash.bashrc will take precedence for that specific user, overriding the value set in /etc/environment for that user's Bash sessions.

However, it's important to note that the environment variables set in /etc/environment will still be available to other non-Bash processes and system-wide operations, regardless of what is set in bash.bashrc.

Regarding the consequences of making mistakes:

If you make a mistake or introduce incorrect syntax in the /etc/environment file, it can potentially cause system-wide issues since it affects all users and processes. Therefore, it is important to be cautious when modifying this file.

On the other hand, if you make a mistake in the bash.bashrc file, it will only affect the specific user's Bash shell sessions. You can easily undo the changes by restoring the original contents of the bash.bashrc file.

In summary, /etc/environment sets system-wide environment variables for all users and processes, while /etc/bash.bashrc sets environment variables specific to a user's Bash shell sessions. The preference order is /etc/bash.bashrc first and then /etc/environment. Mistakes in /etc/environment can have broader consequences, while mistakes in bash.bashrc affect only the user's Bash sessions and can be easily undone.

Example- /etc/environment icinde biz linux de asagiki islemleri tutarak veritabani vs ilk olarak proje ayaga kalkarken okunacak bilgilier buraya yerlestiririz ki hicbir zaman proje ayaga kalkarken dosyalari bulma sorunu vs yasamayalim..Birde hem windows-hem linux vs kullanirken dosya konumlari ile ilgili bazi degisikliklerden dolayi en ufak bir hata da veritabani vs bilgileri okunmadiginda daha projemizi ayaga bile kaldiramayiz bu tarz seylerden, hatalardan kacinmak icin, environment variable e ekeriz sonra burdaki adres lere php uzerinden direk bir fonkiyon ile kolayca eriserek isimzi saglama ve garantiye almis oluyoruz... 
TABI DOSYA ERISME VS OLDUGUNDA LINUX DE AKLA DIREK DOSYA IZINLERI GELIR BUNLARA DA DIKKAT ETMEK GEREKIR
PATH="/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/>					
JAVA_HOME="/usr/lib/jvm/java-11-openjdk-amd64"					
ANDROID_HOME="/home/adem/Android/Sdk"					
nss_inipath=/home/adem/ini				

ANDROID STUDIO O YU YUKLEDIKTEN SONRA BAZI PROBLEMLER CIKMASI MUHTEMELDIR 
ORNEGIN EGER BIRDEN FAZLA KONUMDA JAVA JDK VAR ISE BU PROBLEM CIKARABILIR
Multiple Gradle daemons might be spawned because the Gradle JDK and JAVA_HOME locations are different. Project 'My Application' is using the following JDK location when running Gradle: '/home/adem/android-studio/jbr' The system environment variable JAVA_HOME is: '/usr/lib/jvm/java-11-openjdk-amd64' If you dont need to use different paths (or if JAVA_HOME is undefined), youcan avoid spawning multiple daemons by setting JAVA_HOME and the JDK locationto the same path. More info... Select the Gradle JDK location Do not show this warning again

BU TARZ HATALAR ALABILIRIZ...BUNLARI TEST ETMEK ICN ZATEN TSC DOCTOR YAZARAK TEST EDERIZ ... YUKARDAKI PROBLEMI COZMEK ICIN 

The warning message you received indicates that the Gradle JDK location and the system environment variable JAVA_HOME have different values. This can potentially result in multiple Gradle daemons being spawned.

To resolve this issue, you can set the Gradle JDK location to match the JAVA_HOME value. Here's how you can do it in Android Studio:

Open the settings for your project by navigating to "File" -> "Project Structure" in the Android Studio menu.

In the left sidebar, click on "SDK Location".

Under "JDK Location", you will see the current Gradle JDK location. Click on the "..." button next to it.

In the JDK selection dialog, navigate to the location specified in the system environment variable JAVA_HOME ("/usr/lib/jvm/java-11-openjdk-amd64" in your case).

Select the JDK location and click "OK" to confirm the change.

After setting the JDK location to match JAVA_HOME, Gradle should no longer spawn multiple daemons due to the mismatch.

Additionally, if you don't want to see this warning message again, you can check the "Do not show this warning again" checkbox.

By ensuring that the Gradle JDK location and JAVA_HOME are set to the same path, you should be able to avoid the issue of multiple Gradle daemons being spawned.

DIKKAT EDELIM BUTUN BUNMLARI YAPIP DIREK TSC DOCTOR YAZARSAK HATALAR DUZELMEMIS OLACAKTIR. ONDAN DOLAYI... PC YI OTURUMU YENIDEN BASLATTIKTEN SONRA TEST ETMEK DAHA MANTIKLIDIR... 
BIRDE ANDROID_STUDIO NUN TAM OLARAK DOGRU BIR SEKKILDE TUM KURULUMLARININ SONUNA KADAR BEKLENILMESI GEREKIR..

UBUNTU DA KURULUMDAN SONRA PROGRAMLARIN YUKLENMESI
VSCODE
CHROME 
1-Once linux-ubuntuya uyumlu bir sekilde .deb dosyasi download edilir 
sudo wget https...ile de yapilabilir direk terminal uzerinden eger, download url i biliniyorsa ya da direk ubuntuya gore download linki uzerinden indirilir debian uzantili dosya(.deb demek .exe demektir microsofttaki)
2-Sonra .deb uzantili indirilen dosya install edilir 
dpkg -i google-chrome....deb
3-Sonra da sol alttaki menu butonuna tiklanarak search arama kutucugundan install ettgimz ornegin chrom, vscode aranarak orda uzerine tiklanarak artik kullanabilmemiz saglanmis olur... 

ORNEGIN JAVA-17 YI UBUNTUYA KURDUK KI BUNUN ICIN GIDIP DE .DEB DOSYASINI BULUP DA KURALIM DEMEMIZE HIC GEREK YOK CUNKU ZATEN UBUNTU TERMINAL BUNU DESTEKLIYOR DIREK KENDISININ JAVA YI INDIRME KODUNU YAZABILIRIZ... 
ARDINDAN JAVA NIN NEREYE KURULDUGUNU GORMEK ICIN  
SUDO UDPATE-ALTERNATIVES --CONFIG JAVA
SONRA SUDO NANO /ETC/ENVIRONMENT
I ACIP 
JAVA_HOME = /USR/LIB/JVM/JAVA-17-OPENJDK-AMD64 

SONRA DIKKAT EDELIM BURAYA 
ENVIRONMENT VARIABLE DEGISIKLIGINDE 
1-YA OTURUMU YENIDEN BASLAT DEGISIKLIGI ALMAK ICIN 
YA DA 
2-SOURCE /ETC/ENVIRONMENT YAPARAK... DEGISIKLIGI UYGULA DIYEBILIRIZ..


.sh uzantili dosyalari 2 sekilde invoke ederiz, execute ederiz ubuntu da 
1- ./index.sh 
2- sh index.sh

BIZ ROOTA GITMEK ISTERSEK 
1-ROOT => cd / 
HOME A GITMEK ISTERSEK -HOME DAN KASIT USERNAME ADEM ISE ORNGIN 
2-HOME - cd /home/adem 
ya da 
cd ~/ => /home/adem  demektir yani..  bu sekilde home a gelebilirz.. 

BESTPRACTISE...  
LINUX UBUNTU TERMINAL SHELL ISLEMLERINDE DOSYA IZINLERI COK ONEMLIDIR... OZELLIKLE ORNEGIN BIR SERVER KURULUMU VS YAPIYORSAK SUNU UNUTMAYALIM KI EGER DOSYA IZINLERI VERILMEMEIS ISE O ZAMAN MUHTEMELEN BIZIM SERVER I CALISTIRMAYA CALISACAGIMZ LOKALHOST E ERISME HATASI ALACAGIZDIR..

GEOSERVER DA ALINAN HATA..VE COZUMU!!!!											
HTTP ERROR 503 Service Unavailable URI: /geoserver/ STATUS: 503 MESSAGE: Service Unavailable SERVLET: - in ubuntu..I have installed geoserver and I added JAVA_HOME, GEOSERVER_HOME AND GEOSERVER_DATA_DIR											
																
COZUM!!!!!!!!!!!					DOSYA IZINLERININ VERILMESI....COOOOK ONEMLI!!!!!!!!!!1						
1	Make yourself the owner of the 										
	geoserver										
	 folder. Type the following command in the terminal window, replacing 										
	USER_NAME										
	 with your own username :										
	sudo chown -R USER_NAME /usr/share/geoserver/
	
	IVAR IN TAVSIYESI!!!!!!!
	Ubuntu da her zaman yeni bir uygulama yuklerken bunu kendi kullanci adimiz olan /home/adem altina yukleyelim burasi cok onemli…..


	UBUNTU DA BAZI KURULUMLAR ILE ILGILI BILINMESI GEREKENLER

nativescript kurulumu							
Android Studio kurulumu 							
Jdk kurulumu ve JAVA_HOME ENV.VARIABLE A EKLENMESI							
ANDROID JDD KURUP ANDROID_HOME EKLENMESI							
NODE.JS SON SURUM KURULMASI							
PHP KURULMASI							
MYSQL KURULMASI							
APACHE KURULMASI							
nativescript kurulumu							
Android Studio kurulumu 							
Jdk kurulumu ve JAVA_HOME ENV.VARIABLE A EKLENMESI							
ANDROID JDD KURUP ANDROID_HOME EKLENMESI							
NODE.JS SON SURUM KURULMASI							
PHP KURULMASI							
MYSQL KURULMASI							
APACHE KURULMASI							


Android studio da sdk lokasyonu /opt icine kuruluyor olabilir bunu hemm android studio da hem de opt altinda inceleyelim… yani jdk ile ilgili 2 farkli adres var ama birisi dogru olanbunun birisi home/adem altinda birisi de opt altinda idi bunlari bir arastirip inceleyelim													
													
													
ANDROID JDK BULUNAMADI HATASI…..													
ANDROID_SDK /ETC/ENVIRONMENT TE YOLU YANLIS VERILMIS DE OLABILIR…DOGRU VERILDI ISE DE O ZAMAN GOREMIYORDUR UYGULAMA ONU YENIDEN BASLATMAK GEREK													
Sdk ve ANDROID_HOME VE JAVA_HOME U /ETC/ENVIRONMENT E YUKLMEME RAGMEN HALA JDK LAR YOK DIYE HATA ALIRSAK TNS DOCTOR U CALISTIRINCA O ZAMAN SISTEMI ACIP KAPATI ONDAN SONRA ECHO $ANDROID_HOME VE ECHO $JAVA_HOME TEST EDILMELI EGER GELIRSE ZATEN TEKRAR TNS DOCTOR ILEHATASIZ CALISACAKTIR....													
													
													
BIRDE ANDROID STUDIO DA TOOLS DA EN USTTE YUKLENMIS AMA VERSIYONU SON VERSIYON OLMAYABILIYOR ONUN UZERINDEKI - YE TIKLAYIP ONU SON VERSIYONU YUKLENEREK DENENEBILIR													
													
MYSQL - PHP-APACHE INSTALLSJON													
Digital Ocean- how to install Linux, Apache, Mysql, php(lamp)													
													
sudo ufw status													
inactive													
sudo ufw enable													
sudo ufw status													
active													
													
MYSQL PASSWORD													
ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'admin4334';													
bu syntaxin dogru olmasi gerekir….root kullanicisinin authenticate sifresi degismi bu sekilde olur													
													
CHANGE MYSQL PASSWORD POLICY 													
SHOW VARIABLES LIKE 'validate_password%';													
SET GLOBAL validate_password.policy=LOW;													
													
sudo mysql -u root -p;													
password													
													
eger password yok ise sudo mysql -u root ile dire girilebiliyor ama password var ise bu sekilde degil bir de -p eklemek gerek ondan dolayi da -p eklemezsek access denied for using password no gibi bir hata veriyor													
													
													
sudo mysql_secure_installation -p yi ALTER ILE YENI PASSWORD ATAMASI YAPTIKTAN SONRA DENEMELIYIZ EGER DENEMEK ISTERSEK YOKSA ILK DEFA PASSWORD AYARLAMAYI GIDIP DE mysql_secure_installtion dan yaparsak endless bir donguye giriyor passwordu 100% secure girsek bile ondan dolayi once ALTER ILE YENI PASSWORD ATAMASI YAP ARDINDAN O PASSWORDU LOW LEVEL SECIP ORDA TEKRAR GIR EGER MYSQL_SECURE INSTALLATION DAN SECURE YAPMAK ISTERSEK AMA ZORUDNDA DEGILIZ MYSQL_SECURE INSTALLATION YAPMAYA DA BILIRIZ...AMA MUHTEMELEN EGER ALTER ILE DEGISTIRIRKEN KONFIGURASYON HATALARI VS ALIRSAK O ZAMAN MYSQL_SECURE_INSTALLTION DENIYORDUK													
													
													
																						
.sql database dosyasini nasil import ederiz linux da buna bakalim simdide….													
uzak server dan nasil lokale indiririz nereye indigini nasil biliriz ve onu nasil kendi dataabase imize import ederiz													
nasil database olustururuz linux de													
nasil workbench indirip kullaniriz ubuntu da 													
													
SONRA DA TYPESCRTIP VE MANUEL COMPILE ISLEMI .BAT DOSYASI UZERINDEN..BUNA BAKALIM													
													
asagidakileri mysql workbanchi kurarken yapiyor													
mysql de yeni user olusturmak isterssek													
mysql> de iken yapilir													
create user 'abstract-programmer'@'localhost' identified by 'example-password';													
													
tum priviliges lerin bu  user icin verilmesi icin													
													
mysql>	grant all privileges on *.* to 'abstract-programmer'@'localhost';												
exit; ile mysql serverddan cikilir													
													
mysql in kendi sitesinde footer kisminda downloads bolumunde workbench e tiklariz ordan linux-ubuntu versiyonunu indiririz ardindan da download ile workbench paketini indiririz													
Downloads bolumune .deb paketi inder													
Simdi bu paketi terminalden install ederiz													
Bu inen paket zaten install edilebilecek bir paket… Ve linux de bir paket calistirilrken execute ederken o paketin oldugu dizine gidilir ve ./paketadi.deb dersek paketi install etmis oluruz..													
/Downloads da iken 													
sudo apt install ./patketname.deb													
													
sudo mysql -u root -p													
create user 'admin'@'localhost' identified by 'admin1499';													
grant all privileges on *.* to 'admin'@'localhost';													
exit ile mysql den cikariz													
													
mysql kurunca mysql isminde veritabani var ve onun altinda user isminde tablo var iste burda mysql de bizim olusturdugmuz users lari bulabiliriz ve de root kullanicisinin sifresini kaldirma islemini yapabiliriz													
Yine linux de unutmamamiz gereken bir durum mysql uzerinde yapilan bu tarz degisiklik sonra si mysql servisi bir acip kapatmak gerekebilir veya guncelllemek gerkeebilir													
1. Open your terminal.													
2. sudo mysql -u root.													
3. use mysql;													
4. SELECT user, plugin FROM user;													
5. UPDATE user SET plugin = "mysql_native_password" WHERE user = "root" ;													
6. SELECT user, plugin FROM user;													
7. exit.													
													
B													
													
workbench acildigi zaman mysql Connections '+' ya basarak yeni connectio olusturup username i olusturdugmuz username i girerirz ve artik bu username altinda new query olusturarak workbench de yeni bir veritabani olusturabiliriz													
													
Once sql dosyasi uzak server dan indirilir veritabani dir													
sonra o veritabani dosya ismi ne ise o veritabani workbench de olusturulur													
ardindan da… 													
sudo mysql -u admin -p databasename < file.sql													
password													
													
TYPESCRIPT ISLEMLERI													
													
LINUX DE TYPESCRIPT KURARKEN ONCELIKLE.													
NODE.JS KURULU OLMALIDIR..VERIYONU ONEMLI SON VERSIYONLAR OLMALIDIR 													
Version onemlidir…uygulamamizdaki node.js ve npm versiyonu na uyumlu bir sekilde olmalidir..													
sudo npm install -g typescript													
tsc ile versiyon ve yuklenip yuklenmedigini de gorebiliriz													
													
how to compile typescript with .bat file													
how to compile typescript with .sh file													
													
linux de .sh dosyasi icine tsc test.ts yi sudo nano test.sh diye acarak yazaraiz ardindan da .sh dosyasi executable yapilir													
chmod +x test.sh													
sonra da execute ediliri													
./test.sh													
Ve mevcut typescript dosyasindan bir javascript dosyasi olusturmasi beklenir													
Ve her yapilan degisiklikte .sh veya .bat dosyalari calistirilarak typescriptin compile etmesi beklenir													
													
													
	environment variable e da eklememiz gerekiyor												
	/etc/environment												
	nss_inipath=/home/adem/ini				diger etc/environmenttaki path lerden farki bu adresi tirnak isaretleri icerisine almadan koyduk								
	bunun altina dosyalari ekleyecegiz												
													
/home/adem 													
	altina ini klasoru ve onun da altina veritabani baglanti vs datlarini oldugu dosyalari koymamiz gerekir..Uygulama burdan okuyarak baslyacak												
													
	ini												
	logs 												
	klasorleri /home/adem altinda olusturulur												
	logs da 												
	chmod -R a+rw logs 												
		ile okunup y azilabilir yapilir											
													
How to change default apache "DocumentRoot" directory in linux													
ile uygulamamizin calisacagi klasoru default apache klasorune gore degistirmis oluruz													
													
/etc/apache2/apache2.config													
/etc/apache2/sites-enabled													
													
linux de log klasorunden calistigimz dosya ya ait hata  yi bulabilriiz								BURASI….COOOOOOK ONEMLI…..					
/var/log/apache2								BUNU LINUX E NOT AL					
								LOG DOSYALARI AYNI YERDE BULUNUYOR					
search permissions are missing on a component of the path								LINUX DE DOSYA SISTEMINI IYI BILMEK GEREKIYOR					
													
chmod +x adem													
													
													
													
Birde 													
NSS-hyttetjenester  git clone y aparken gelen uzantida hyttetjenester in h si kucuk olmali buyuk olmamalidir													
													
gitte sifre girmeden de clone y apabiliyoruz kendi git repostory mizden cekiyoruz .git config de passworde girince o ae_netsense:password/ seklinde geliyor													


Linux dosya yapisi ekstra incelenmeli aranilan dosyalar nerde bulunur vs bunlari ne kadar bilirsek o kadar linux u iyi kullaniriz														
														
Apache ve dosya okuma izinleri ini dosyasinin okunamamsi ve cozumleri burda gorebiliriz														
														
https://askubuntu.com/questions/325498/apache-cant-access-folders-in-my-home-directory														
16														
Apache runs as user 														
www-data														
. If it doesn't have execution permission on your home, apache will not be able to read any file.														
Change you home's group to 														
www-data														
:														
chgrp www-data /home/dbugger														
And give it permission only to traverse your home directory:														
chmod g+x /home/dbugger														
You can also restrict permisions of 														
/home/dbugger/html														
:														
chgrp www-data /home/dbugger/html														
chmod 750 /home/dbugger/html														
														
https://serverfault.com/questions/514128/allow-subdirectory-with-apache														
ou should not need to specifically allow access to a directory below one which is already configured within httpd.conf														
Since /var/www/html is configured with "AllowOverride None" then the problem is not due a .htaccess file changing the access rights.														
The only remaining reason is that the permissions on the files and directories do not permit the webserver uid to read from this directory. What they are, and what they should be depends on your security model. But as a quick fix you could try:														
# chmod a+rx /var/www/html/test														
# chmod a+r /var/www/html/*														
If this solves the problem then please take time to fix the ownership and permissions of the files to something more appropriate.														
														
														
/var/log/apache2 daki erro_log dosyasi acilarak neden girilemedigi neden forbidden oldugu burdan daha detayli gorulebilir														
														
[Tue Apr 04 11:12:00.829769 2023] [php:notice] [pid 55737] [client ::1:59350] Xdebug: [Step Debug] Could not connect to debugging client. Tried: localhost:9003 (through xdebug.client_host/xdebug.client_>														
[Tue Apr 04 11:12:07.532071 2023] [autoindex:error] [pid 55738] [client ::1:59362] AH01276: Cannot serve directory /home/adem/utv/NSS-hyttetjenester/: No matching DirectoryIndex (index.html,index.cgi,in>														
[Tue Apr 04 11:49:32.208127 2023] [autoindex:error] [pid 55740] [client ::1:44742] AH01276: Cannot serve directory /home/adem/utv/NSS-hyttetjenester/: No matching DirectoryIndex (index.html,index.cgi,in>														
[Tue Apr 04 11:50:28.756902 2023] [autoindex:error] [pid 55742] [client ::1:35758] AH01276: Cannot serve directory /home/adem/utv/NSS-hyttetjenester/: No matching DirectoryIndex (index.html,index.cgi,in>														
[Tue Apr 04 11:50:29.859484 2023] [autoindex:error] [pid 55742] [client ::1:35758] AH01276: Cannot serve directory /home/adem/utv/NSS-hyttetjenester/: No matching DirectoryIndex (index.html,index.cgi,in>														
[Tue Apr 04 11:50:31.410718 2023] [autoindex:error] [pid 55742] [client ::1:35758] AH01276: Cannot serve directory /home/adem/utv/NSS-hyttetjenester/: No matching DirectoryIndex (index.html,index.cgi,in>														
[Tue Apr 04 11:50:35.083837 2023] [php:notice] [pid 55742] [client ::1:35758] Xdebug: [Step Debug] Could not connect to debugging client. Tried: localhost:9003 (through xdebug.client_host/xdebug.client_>														
[Tue Apr 04 11:50:55.543585 2023] [mpm_prefork:notice] [pid 55736] AH00170: caught SIGWINCH, shutting down gracefully														
														
That seems like a standard .htaccess file. Is the index file also present in the directory?														
														
The error message "access to /index.php denied because search permission" suggests that the user or process attempting to access the "index.php" file does not have sufficient permissions to search for it in the directory.												
To resolve this issue, you can try the following steps:												
1	Check the file permissions: Make sure that the file permissions for the "index.php" file and the directory containing it are set correctly. The file should have read and execute permissions, while the directory should have execute permissions.											
2	Check the ownership of the file and directory: Ensure that the user or process attempting to access the file has the necessary ownership and permissions to do so.											
3	Check the location of the file: Make sure that the file is located in the correct directory and that the path to the file is correct.											
4	Check for any access control rules: There may be access control rules in place that are preventing access to the file. Check any applicable configuration files, such as Apache's .htaccess file, for any such rules.											
By following these steps, you should be able to resolve the "access to /index.php denied because search permission" error and gain access to the file.												
												
												
Tue Apr 04 12:44:16.340037 2023] [mpm_prefork:notice] [pid 58908] AH00163: Apache/2.4.52 (Ubuntu) configured -- resuming normal operations												
[Tue Apr 04 12:44:16.340087 2023] [core:notice] [pid 58908] AH00094: Command line: '/usr/sbin/apache2'												
[Tue Apr 04 12:44:22.415143 2023] [core:error] [pid 58909] (13)Permission denied: [client ::1:50444] AH00035: access to /NSS-hyttetjenester/web/front.php denied (filesystem path '/home/adem/utv') becaus>												
[Tue Apr 04 12:48:38.968644 2023] [core:error] [pid 58911] (13)Permission denied: [client ::1:42876] AH00035: access to /NSS-hyttetjenester/web/front.php denied (filesystem path '/home/adem/utv/NSS-hytt>												
[Tue Apr 04 12:48:40.244806 2023] [core:error] [pid 58911] (13)Permission denied: [client ::1:42876] AH00035: access to /NSS-hyttetjenester/web/front.php denied (filesystem path '/home/adem/utv/NSS-hytt>												
[Tue Apr 04 12:48:44.691041 2023] [core:error] [pid 58911] (13)Permission denied: [client ::1:42876] AH00035: access to /NSS-hyttetjenester/ denied (filesystem path '/home/adem/utv/NSS-hyttetjenester') >												
[Tue Apr 04 12:48:50.607567 2023] [core:error] [pid 58912] (13)Permission denied: [client ::1:42888] AH00035: access to /NSS-hyttetjenester/web/ denied (filesystem path '/home/adem/utv/NSS-hyttetjeneste>												
[Tue Apr 04 12:48:59.471138 2023] [core:error] [pid 58913] (13)Permission denied: [client ::1:46144] AH00035: access to /NSS-hyttetjenester/web/front denied (filesystem path '/home/adem/utv/NSS-hyttetje>												
[Tue Apr 04 12:49:07.539938 2023] [core:error] [pid 58925] (13)Permission denied: [client ::1:46234] AH00035: access to /NSS-hyttetjenester/web/front.php denied (filesystem path '/home/adem/utv/NSS-hytt>												
												
adem@adem-HP-EliteOne-800-G1-AiO:/home$ sudo chmod +x adem/utv												
adem@adem-HP-EliteOne-800-G1-AiO:/home$ sudo chmod +x adem/utv												
												
chmod -R 777 /home/user/xxx												
												
eOne-800-G1-AiO:~$ sudo chmod +x /home/												
adem@adem-HP-EliteOne-800-G1-AiO:~$ sudo chmod +x /home/adem/												
adem@adem-HP-EliteOne-800-G1-AiO:~$ sudo chmod +x /home/adem/NSS-hyttetjenester/												
chmod: cannot access '/home/adem/NSS-hyttetjenester/': No such file or directory												
adem@adem-HP-EliteOne-800-G1-AiO:~$ sudo chmod +x /home/adem/utv/												
adem@adem-HP-EliteOne-800-G1-AiO:~$ sudo service apache2 restart												
												
linux de loglardaki mesajlari okuyarak ancak apache2 deki forbidden problemlerinin tam olarak ne oldugunu bulup cozebiliriz															
															
linux da loglari /var/log altindaki klasorde bulup log mesajlarini okuyarak hatalari bulabiliriz															
															
Eger apahce de not found vs  soruunu yasiyorsak 															
1-	gidp log dosyasinda hatayi okuyalim														
	/var/log/apache2/error.log														
2-	Ya DocumentRoot da allgranted veya url i yanlis yazmisizdir														
	bunu var sayilan olarak 														
	/etc/epache2/sites-enabled/000-default.conf					Ama bunun yerini veya ismii degistirdi isek de nerye yerlestirdi isek orda olacak..ki benim kendi pc mde  yer i degismisti									
															
	<VirtualHost *:80>														
	   ServerAdmin webmaster@localhost														
	        DocumentRoot /home/adem/utv														
															
	        <Directory /home/adem/utv>														
	        														
	          Require all granted														
	                														
	         </Directory>														
	ErrorLog ${APACHE_LOG_DIR}/error.log														
	        CustomLog ${APACHE_LOG_DIR}/access.log combined														
															
	</VirtualHost>														
															
															
															
3	Dosya izinlerinin verilmesi...bu cok onemli..hangi dosya altinda calistiracaksak uygualmayi onun hem kendi hem de subfolder ina dosya izni vermemiz gerekir														
	eOne-800-G1-AiO:~$ sudo chmod +x /home/														
	adem@adem-HP-EliteOne-800-G1-AiO:~$ sudo chmod +x /home/adem/														
	adem@adem-HP-EliteOne-800-G1-AiO:~$ sudo chmod +x /home/adem/NSS-hyttetjenester/														
	chmod: cannot access '/home/adem/NSS-hyttetjenester/': No such file or directory														
	adem@adem-HP-EliteOne-800-G1-AiO:~$ sudo chmod +x /home/adem/utv/														
	adem@adem-HP-EliteOne-800-G1-AiO:~$ sudo service apache2 restart														
															
															
4	.htaccess dosyasindan dolayi calismiyor da olabilir..														
															
5	apache server i le ilgili herhangi bir degisiklik  yaptigimz zaman server i mutlaka restart yapmak gerek..bazen apache2 baslatilmamis da olabiliyor bunlari goz ardi etmemek gerek														
															
	ini dosyasini  okuyamama sorunu ve cozumu...														
	dosya okuyamama sorunu ve cozumu...														
	/home/adem/ini/cottageservice.ini dosyasini okuyamama sorunu ve cozumu....														
	adem@adem-HP-EliteOne-800-G1-AiO:/home$ chmod 777 /home/adem/ini/cottageservice.ini														
	chmod: changing permissions of '/home/adem/ini/cottageservice.ini': Operation not permitted														
	adem@adem-HP-EliteOne-800-G1-AiO:/home$ sudo chmod 777 /home/adem/ini/cottageservice.ini 														
	[sudo] password for adem: 														
															
															
												
UBUNTU DA HERHANGI BIR UYGULAMANIN GUNCELLENMESI GEREKIYOR ISE 
ORNEGIN CHROME ICIN ESKI KURULAN VERSIYONUN GUNCELLENMESI GEREKTIGI MESAJ I GELIYORSA BIZE 

sudo apt update
sudo apt upgrade 
 yapmamiz chrome un yeni surumunun kurulmasi icin yeterlidir


 POSTGRESQL - INSTALLATION
 sudo apt install postgresql postgresql-contrib

 Bu kurulumu yaptiktan sonra postgresql nereye geliyor bakacak olursak 
 ls /etc/postgresql/14/main yaparsak  asagidaki dosylarin listelendigini gorecegiz 
 conf.d pg_ctl.conf pg_ident.conf start.conf environment pg_hba.conf pstgresql.conf
 main configuration file is postgresql.conf 
 POSTGRESQL SERVICE I BSLATMAK ICIN HANGI KOMUTLARI KULLANACAGIMZI GORMEK ISTERSEK 
 service postgresql 
 Usage: /etc/init.d/postgresql {start|stop|restart|reload|force-reload|status} [version ..] 
 service postgresql status

 postgre nin default user i postgres dir..Yani ilk defa kullanirken postgres user i uzerinden kullaniriz

 sudo systemctl start postgresql
 VEYA
 sudo systemctl start postgresql.service

 Ornegin bir postgresql kuruldugu zaman, service lerin baslatilmasi gerekir 
sudo service postgresql start-UBUNTU - SUDO SYSTEMCTL START POSTGRESQL 
Service nin baslatilip baslatilmadigin i kontrol etmek icin  
sudo sercive postgresql status - SUDO SYSTEMCTL STATUS POSTGRESQL
Service yi yeniden baslatmak icin 
sudo service postgresql restart - SUDO SYSTEMCTL RESTART POSTGRESQL
Service yi durduracagimiz zaman 
sudo service postgresql stop - SUDO SYSTEMCTL STOP POSTGRESQL
SUDO SYSTEMCTL ENABLE POSTGRESQL

SUDO -I -U POSTGRES
 sudo -i -u postgres: This command is used to switch to the "postgres" user with administrative privileges. It allows you to execute subsequent commands as the "postgres" user, which is typically used for managing the PostgreSQL server and databases.

psql: This command opens the PostgreSQL interactive terminal, where you can run SQL commands to interact with the database server.

Bu user imizin sql komut satirina girmek icin psql kullaniriz, tabi ki sudo -i -u postgres diyerek, postgres kullanicisi uzerinden postgres e giris yaptigimz zaman

DATABASE LERI GORUNTULEMEK ICIN 
\l(database leri goruntulemek icin)
\du (user lari goruntulemek icin)

Default user olan postgres user inin passwordunu nasil degistririz

ALTER USER postgres WITH PASSWORD  'test123'; SONUN ; U UNUTMAYALIM
ALTER ROLE(Boyle bir sonuc aldi isek o zaman password degismis demektir)

postgres=# CREATE USER user_1 WITH PASSWORD 'admin'; 											
CREATE ROLE											
postgres=#\du											
											
 admin        | Superuser, Create role, Create DB                          | {}											
 gis_database |                                                            | {}											
 myUser       | Superuser, Create role, Create DB                          | {}											
 postgres     | Superuser, Create role, Create DB, Replication, Bypass RLS | {}											
 testUser     | Superuser, Create role, Create DB                          | {}											
 user_1       |   					Bu olusturuldu ama herhangi bir priviligies verilmedigi icin rolunun superuser mi yoksa iste diger rolller mi onu bilmiuyoruz onu da ayrica vermemiz gerekiyor....	
 
 postgres=# ALTER USER user_1 WITH SUPERUSER;						
ALTER ROLE						
postgres=# \du						
						
  Role name   |                         Attributes                         | Member of 						
--------------+------------------------------------------------------------+-----------						
 admin        | Superuser, Create role, Create DB                          | {}						
 gis_database |                                                            | {}						
 myUser       | Superuser, Create role, Create DB                          | {}						
 postgres     | Superuser, Create role, Create DB, Replication, Bypass RLS | {}						
 testUser     | Superuser, Create role, Create DB                          | {}						
 user_1       | Superuser   (PRIVILIGES VERMIS OLDUK..)                                               | {}						
						
(END)						

REMOVE-USER

postgres-# DROP USER user_1;
DROP ROLE 

USER SILERKEN KARSILASTIGIMZ HATA VE COZUMU!				
				
postgres=# DROP USER myUser;				
ERROR:  role "myuser" does not exist(bulamiyor cunku isimlendirme de buyuk harf kullandik isimlendirme hatasi var ..)				
postgres=# DROP USER testUser;				
ERROR:  role "testuser" does not exist				
postgres=# DROP USER myUser 'myUser';				
ERROR:  syntax error at or near "'myUser'"				
LINE 1: DROP USER myUser 'myUser';				
                         ^				
postgres=# DROP USER myUser "myUser";				
ERROR:  syntax error at or near ""myUser""				
LINE 1: DROP USER myUser "myUser";				
                         ^				
postgres=# DROP USER "myUser";				
DROP ROLE            				
postgres=# 			

YENI DATABASE OLUSTURURKEN ALDIGIMZ HATA... VE COZUMU!

postgres=#  createdb gis_db;			
ERROR:  syntax error at or near "createdb"			
LINE 1: createdb gis_db;			
        ^			
postgres=# \q			
postgres@adem-ThinkPad-13-2nd-Gen:~$ createdb gis_db;

HATA VE COZUMU!!!
\l bu komut postgresql in internal command i icinde calisiyor, postgresql in internal command
ina girebilmek icinde sudo -u postgres psql
postgres@adem-ThinkPad-13-2nd-Gen:~$ \l			
l: command not found			
postgres@adem-ThinkPad-13-2nd-Gen:~$ psql			
psql (14.8 (Ubuntu 14.8-0ubuntu0.22.04.1))			
Type "help" for help.			

				
NEDEN BIZ myUser ve testUser KULLANICILARINI TIRNAK ICINDE YAZMADIGMZDA SILMIYOR ONA BAKALIM SIMDI 

The error message suggests that the roles myUser and testUser do not exist in the PostgreSQL database. 
To drop a user, it is important to use the correct case-sensitive spelling of the user name.
In your case, it seems that the user names are not correctly capitalized. By default, PostgreSQL treats unquoted identifiers as case-insensitive(yani tirnak icinde yazdigin), so when you create a user with a specific casing, you need to use the same casing when referencing the user later.

To resolve the issue, try the following:
Connect to the PostgreSQL database as the postgres user:
sudo -u postgres psql
List the existing roles to verify the correct spelling and casing of the user names:
	\du
	Ensure that you are using the exact casing of the user names in the DROP USER command.
	Drop the user using the correct casing:
Drop the user using the correct casing:

DROP USER "myUser";
DROP USER "testUser";

By enclosing the user names in double quotes, you ensure that the casing is preserved and matched correctly.

Please note that if you created the users using single quotes (') instead of double quotes ("), you should use single quotes in the DROP USER command as well.

psql in tam olarak ne oldgunu anlamak icin ubuntu da 
man psql yazarak psql in islevlerini ve ne oldugunu anlayabilriz

						
sudo -i -u postgres: This command is used to switch to the "postgres" user. The sudo command is used to execute a command with administrative privileges, and the -i flag opens an interactive shell session as the specified user, which in this case is "postgres". This is typically done because the "postgres" user is created during the PostgreSQL installation and is used for managing the PostgreSQL server and databases.

createuser --interactive: This command is used to create a new PostgreSQL user. The --interactive flag prompts you for information interactively, allowing you to specify the username, password, and other options for the new user. This command is useful when you want to create a user with specific privileges and settings.

By combining these two commands, you can switch to the "postgres" user and then use the createuser --interactive command to create a new PostgreSQL user interactively.

Using these commands helps ensure that the necessary permissions and configurations are properly set up when working with PostgreSQL on Ubuntu.


DATABASE VE TABLO OLUSTURMA

sudo -i -u postgres
postges@dhani-ubuntu:~$ createuser --interactive
CREATEDB YI DIREK sudo -i -u postgres ISLEMDEN SONRA YAPARIZ YANI PSQL  YAZMADAN ONCE.. 
createdb gis_database: This command creates a new PostgreSQL database named "gis_database". The createdb command is used to create a new database, and "gis_database" is the name given to this particular database.

VERITABANI OLUSTURUKEN ALABILECEGIMZ HATA VE COZUMU!!

postgres@adem-HP-EliteOne-800-G1-AiO:/home/adem/Downloads/norge_roads$ psql     psql (14.8 (Ubuntu 14.8-0ubuntu0.22.04.1))                       											
Type "help" for help.											
											
postgres=# \du											
postgres=# \l											
postgres=# createdb gis_db											
postgres-# \l											
postgres-# psql											
postgres-# createdb gis_db;											
ERROR:  syntax error at or near "createdb"											
LINE 1: createdb gis_db											
        ^		
postgres=# \q											
postgres@adem-HP-EliteOne-800-G1-AiO:/home/adem/Downloads/norge_roads$ createdb gis_db		

COZUM-- \q ile psql ile oldugumz yerden cikarz yani 	 sudo -i -u postgres yapiinca geldigimiz seviyeye geliriz.. Sonra createdb gis_db diye yeni veritabani olusturuuz ya da psql yapip girersek o zaman da asagidaki gibi veritabani olusturabiliriz CREATE DATABASE gis_db;	CREATE DATABASE new_database;
GRANT ALL PRIVILEGES ON DATABASE new_database TO myUser;
									
$ sudo -i -u postgres: This command is used to switch to the "postgres" user with administrative privileges. It allows you to execute subsequent commands as the "postgres" user, which is typically used for managing the PostgreSQL server and databases.

psql: This command opens the PostgreSQL interactive terminal, where you can run SQL commands to interact with the database server.

postgres=# CREATE USER gis_database with password '12345';: This command creates a new PostgreSQL user named "gis_database" with the password '12345'. The CREATE USER statement is used to create a new user in PostgreSQL, and here we specify the username and password for the new user.

postgres=# CREATE DATABASE gis_database;: This command creates a new database named "gis_database" in PostgreSQL. The CREATE DATABASE statement is used to create a new database, and here we specify the name of the database.

postgres=# GRANT ALL PRIVILEGES ON DATABASE gis_database TO gis_database;: This command grants all privileges on the "gis_database" database to the "gis_database" user. The GRANT ALL PRIVILEGES statement is used to give specific privileges (in this case, all privileges) to a user on a particular database.

INSTALL POSTGIS

sudo apt install postgis

sudo -i -u postgres psql
postgres=#\CONNECT gis_database;
You are now connected to database "gis_database" as user "postgres".
postgres=#CREATE EXTENSION postgis;
CREATE EXTENSION

YENI USER OLUSTURURKEN AYNI ISIMDE DATABASE DE OLUSTURURUZ BUNLARI TABI POSTGRES USER I ICINE GIREREK  YAPTIK SONRA DA EXIT ILE POSTGRES USER INDAN CIKARAK sudo adduser gis_database diye bu user i eklememiz gerekir ancak ornegin sudo adduser myUser gibi bir isim postgresql icin dogru bir adlandirma olmadigi icin sorun cikaracaktir bize hepsi kucuk harf olmasi gerekiyor ama bunu da illa boyle yapmak istersek 
sudo adduser --force-badname myUser diyerek ekleyebilirz ve ardindan da zaten sudo -i -u myUser diyerek giris yapabilirz

 sudo -i -u postgres
postges@dhani-ubuntu:~$ createuser --interactive

createdb gis_database:

BIR USER IMIZA YENI BIR DATABASE OLUSTURURKEN ISE 

sudo -i -u postgres
psql
CREATE DATABASE new_database;
GRANT ALL PRIVILEGES ON DATABASE new_database TO myUser;
\q
exit

Step 4. Install PostGIS
Bu sudo ile bslayan kodu bizim herhangi bir veritabanina girerek degil de direk disarda yapmamiz gerekir yoksa hata aliriz zaten

sudo -i -u myUser - myUser a giris yaptik 
sudo apt install postgis--myUser is not in the sudoers file. This incident will be reported... uyari mesaji aliriz ondan dolayi exit diyerek bu user dan cikariz oncelikle

sudo apt install postgis 
i kurduiktan sonra 

Once the installation is completed, we need to enable the PostGIS extension on the database. We should enable the PostGIS extension on each database we want. Now we are going to enable the extension to the gis_database we created earlier.

sudo apt install postgis 
psql 

postgis kullanicisi altindan baska bir databas e baglaniyoruz 
\c gis_database
Your are connected to database "gis_database" as user "postgres" via socket in "/.... 
gis_database-# CREATE EXTENSION postgis;
CREATE EXTENSION(bu geliyorsa olusturulmus demektir)

PGADMIN4 KURULUMU 
Oncelikle curl i kullanacagimz icin eger curl yuklu degil ise curl yuklenir 
sudo apt install curl

Add the PostgreSQL repository key to your system:
curl https://www.pgadmin.org/static/packages_pgadmin_org.pub | sudo apt-key add
Add the PostgreSQL repository to the package manager:
sudo sh -c 'echo "deb https://ftp.postgresql.org/pub/pgadmin/pgadmin4/apt/$(lsb_release -cs) pgadmin4 main" > /etc/apt/sources.list.d/pgadmin4.list'
Update the package lists:
sudo apt update
Install pgAdmin:
sudo apt install pgadmin4
During the installation, you may be prompted to configure the web server. Choose the appropriate option based on your preference (Apache2 or pgAdmin's built-in web server).
kurulum sorunsuz gerceklestikten sonra
sudo /usr/pgadmin4/bin/setup-web.sh
Email address:adem5434e@gmail.com
Password:
Email ve passwordumuzu girereiz ve ardindan da bu email ve password uzerinden biz pgadmin kullaniriz...

BURASI DA DIREK PGADMIN SITESINDEN ALINTI- Y UKARDAKININAYNISI 
# Setup the repository
#

# Install the public key for the repository (if not done previously):
curl -fsS https://www.pgadmin.org/static/packages_pgadmin_org.pub | sudo gpg --dearmor -o /usr/share/keyrings/packages-pgadmin-org.gpg

# Create the repository configuration file:
sudo sh -c 'echo "deb [signed-by=/usr/share/keyrings/packages-pgadmin-org.gpg] https://ftp.postgresql.org/pub/pgadmin/pgadmin4/apt/$(lsb_release -cs) pgadmin4 main" > /etc/apt/sources.list.d/pgadmin4.list && apt update'

#
# Install pgAdmin
#

# Install for both desktop and web modes:
sudo apt install pgadmin4

# Install for desktop mode only:
sudo apt install pgadmin4-desktop

# Install for web mode only: 
sudo apt install pgadmin4-web 

# Configure the webserver, if you installed pgadmin4-web:
sudo /usr/pgadmin4/bin/setup-web.sh

Install qgis Using apt 
Update apt database with apt using the following command.

sudo apt update
After updating apt database, We can install qgis using apt by running the following command:
sudo apt -y install qgis


COK ONEMLI...POSTGREDE CALISIRKEN ROOT KULLANICI YA ERISMEK ICN 
sudo su -  komutu kullanilir..administrative islemlerde root kullanici olarak yapmamaiz gerekir ondan dolayi buna cok ihtiyacimiz oluyor


SHAPE FILE I NASIL UBUNTU DA POSTGRESQL E IMPORT EDERIZ..

1-Open a terminal and switch to the postgres user by running the following command:
sudo -u postgres -i
2-Once you are logged in as the postgres user, navigate to the directory that contains the shapefile.
Ama burda bir sorun var cunku postgres user ina girdigmz zaman ordan biz direk Downloads ve onun altindakki indirdigmiz shapefile a erisemiyourz bu onemli... Problem permission denied hatasi aliyoruz sudo keywordunu kullanmaiza ragemen... 
Yani bu su demek oluyor biz dosyz izinleri hatasi aliyoruz..KI UBUNTU DA BIR DOSYA YI LOCALHOST VEYA HERHANGI BIR YERDE GOSTERME OKUMA VS ISLEMI VAR ISE KESINLIKLE DOSYA IZINLERI ISLEMLERI KARSIMZA CIKACAKTIR BURDA DA CIKTIGI GIBI...
Bu problemi nasil cozecegiz ona bakalim simdi
COZUM YOLU-1
Copy the shapefiles to a location accessible by the postgres user

sudo su -

Create a directory in a location accessible by the postgres user. For example, you can create a directory in the /var/lib/postgresql directory:
mkdir /var/lib/postgresql/shape1
Change the ownership of the newly created directory to the postgres user:
chown -R postgres:postgres /var/lib/postgresql/shape1
Copy the shapefiles from the original location to the new directory:
cp -R /home/adem/Downloads/shape1/* /var/lib/postgresql/shape1/
Adjust the paths accordingly if your actual locations differ.
Exit the root user shell by typing exit.
Switch to the postgres user again by running the following command:
sudo -u postgres -i
cd /var/lib/postgresql/shape1
Now you should be able to access the shapefiles directory as the postgres user.

YA BU SEKILDE COZERIZ DOSYA IZIN PROBLEMINI YA DA DOGRUDAN DOWNLOADS ALTINDA BULUNAN SHAPE FILES LARA DOSYA IZNI VEREREK COZMEYE CALISIRIZ..
Option 1: Change the permissions of the shapefiles directory
Open a terminal and switch to the root user by running the following command:
	sudo su -
	Change the ownership of the shapefiles directory to the postgres user by running the following command:
chown -R postgres:postgres /home/adem/Downloads/shape1
Exit the root user shell by typing exit.
Switch to the postgres user again by running the following command:
sudo -u postgres -i
Navigate to the shapefiles directory:
cd /home/adem/Downloads/shape1
Now you should be able to access the shapefiles directory as the postgres user.

SHAPE FILE A ERISME PROBLEMIMIZI COZDUGUGMUZU VARSAYARAK--SIMDI DE AUTHENTICATION PROBLEMI  YASAYABILIORUZ ONU NASIL COZERIZ VE NASIL SHAPEFILE I YUKLERIZ ONA BAKALIM

Option 1: Switch to the postgres user before running the command
Open a terminal and switch to the postgres user by running the following command:
sudo -u postgres -i
Once you are logged in as the postgres user, navigate to the directory that contains the shapefile.
Run the shp2pgsql command to import the shapefile data into the database, specifying the database name with the -d option:
shp2pgsql -s 4326 -I NOR_adm1.shp NOR_adm1 | psql -d gis_db
.shp file dan sonra biz hangi ismi verirsek o isim ile veritabanina kaydedecek
Make sure to replace gis_db with the name of your target database.

 Modify the authentication method in PostgreSQL configuration

 Open the PostgreSQL configuration file for editing. In Ubuntu, it is located at /etc/postgresql/<version>/main/pg_hba.conf. Replace <version> with the actual PostgreSQL version installed on your system.

Look for the lines that specify the authentication rules, and locate the line that corresponds to the postgres user. It should look similar to this:
	local   all             postgres                                peer
	Change peer to md5, which will enable password authentication. After the modification, the line should look like this:
		local   all             postgres                                md5
		Save the changes and exit the editor.
Restart PostgreSQL for the changes to take effect by running the following command
sudo service postgresql restart
Now you should be able to run the shp2pgsql command with the postgres user as before:
shp2pgsql -s 4326 -I NOR_adm1.shp NOR_adm | psql -d gis_db -U postgres


SHAPE FILE YUKLENDIKTEN SONRA O SHAPE FILE I VERITABANINDA NASIL LISTELIYORUZ...							
postgres@adem-ThinkPad-13-2nd-Gen:~/shape2$ psql -d gis_db -U postgres							
psql (14.8 (Ubuntu 14.8-0ubuntu0.22.04.1))							
Type "help" for help.							
							
gis_db=# \d							
                List of relations							
 Schema |       Name        |   Type   |  Owner   							
--------+-------------------+----------+----------							
 public | geography_columns | view     | postgres							
 public | geometry_columns  | view     | postgres							
 public | nor_adm0          | table    | postgres							
 public | nor_adm0_gid_seq  | sequence | postgres							
 public | nor_roads         | table    | postgres							
 public | nor_roads_gid_seq | sequence | postgres							
 public | redlining         | table    | postgres							
 public | redlining_gid_seq | sequence | postgres							
 public | spatial_ref_sys   | table    | postgres							
(9 rows)							
							
gis_db=# \nor_roads							
invalid command \nor_roads							
Try \? for help.							
gis_db=# \d nor_roads							
gis_db=# SELECT * FROM nor_roads 10;							
ERROR:  syntax error at or near "10"							
LINE 1: SELECT * FROM nor_roads 10;							
                                ^							
gis_db=# SELECT * FROM nor_roads LIMIT 10;							


DOSYA IZINLERI ILE ILGILI ALDIGMIZ HATA VE COZUMU!! 

BIZ BU PROBLEMI YA POSTGRESQL IN LINUX ICINDE BULUNDUGU DOSYA ALTINDA KLASOR OLSUTURARAK MEVCUT SHAPEFILE LERIMZI TABI YANINDAKI BIRLIKTE OLDUGU .PRJ GIBI TUM DOSYALAR LA BIRLIKTE POSTGRESQL DOSYALARININ ALTINA TASIRIZ VE SONRA DA O TASIDGIMZ KLASOR E CHOWN -R ILE POSTGRES USER A HER TURLU SAHPLIK KULLANIM YETKISI VERIRIZ... 

'chown -R postgres:postgres /var/lib/postgresql/shape1: This command is similar to the previous one but targets a different directory (/var/lib/postgresql/shape1). It changes the ownership of this directory and its contents to the postgres user and the postgres group. This step is useful if you chose to copy the shapefile files to this directory to make them accessible to the postgres user.

YA DA BU KULLANIM  YETKISINI DIREKT OLARAK DOSYAYI INDIRDIMIGZ KLASOR OLAN DOWNLLOADS A VERIRIZ
chown -R postgres:postgres /home/adem/Downloads/: This command changes the ownership (chown) of the directory /home/adem/Downloads/ and all its contents recursively (-R) to the user postgres and the group postgres. By changing the ownership, it ensures that the postgres user has full ownership and control over the shapefile files in that directory. This is useful to ensure that the postgres user can access and manipulate the files.

postgres@adem-ThinkPad-13-2nd-Gen:~$ shp2pgsql -s 4326 -I NOR_adm0.shp nor_adm0 | psql -d gis_db -U postgres
Unable to open NOR_adm0.shp or NOR_adm0.SHP.
NOR_adm0.shp: dbf file (.dbf) can not be opened.

The error message indicates that the shp2pgsql command is unable to open the shapefile (NOR_adm0.shp) or the associated .dbf file. This could be due to various reasons, such as incorrect file paths or file permissions.
To resolve this issue, please double-check the following:

1-Ensure that you are running the shp2pgsql command from the correct directory where the shapefile is located. You can use the ls command to verify the presence of the shapefile and its associated files (NOR_adm0.dbf, NOR_adm0.shx, etc.) in the same directory.
2-Confirm that the shapefile files (NOR_adm0.shp, NOR_adm0.dbf, NOR_adm0.shx, etc.) have the necessary read permissions. You can use the ls -l command to check the permissions. If needed, you can modify the permissions using the chmod command. For example, to grant read permissions to everyone, you can run:
	chmod a+r NOR_adm0.*
	3-Ensure that the shapefile files have not been corrupted. Try opening the shapefile using a GIS software like QGIS to verify its integrity.
4-Double-check the file names and extensions. Make sure they are correct and match the actual names of the shapefile and associated files.
Double-check the file names and extensions. Make sure they are correct and match the actual names of the shapefile and associated files.



what is chmod a+r NOR_adm0.*

1-chmod a+r NOR_adm0.*: This command changes the permissions of all files matching the pattern NOR_adm0.* in the current directory. Here, a+r grants read (r) permission to all users (a stands for "all"). This ensures that all users on the system, including the postgres user, have read access to the shapefile files (NOR_adm0.shp, NOR_adm0.dbf, etc.). It allows the postgres user to read and access the shapefile files during the import process.

2-chown -R postgres:postgres /home/adem/Downloads/shape1: This command changes the ownership (chown) of the directory /home/adem/Downloads/shape1 and all its contents recursively (-R) to the user postgres and the group postgres. By changing the ownership, it ensures that the postgres user has full ownership and control over the shapefile files in that directory. This is useful to ensure that the postgres user can access and manipulate the files.

3-'chown -R postgres:postgres /var/lib/postgresql/shape1: This command is similar to the previous one but targets a different directory (/var/lib/postgresql/shape1). It changes the ownership of this directory and its contents to the postgres user and the postgres group. This step is useful if you chose to copy the shapefile files to this directory to make them accessible to the postgres user.

By using the chmod and chown commands as mentioned, you are adjusting the permissions and ownership of the shapefile files and directories, allowing the postgres user to access and import them successfully. These commands ensure that the required read permissions are granted to the shapefile files and that the postgres user has the necessary ownership to access and manipulate the files during the import process.

WHAT IS chmod 777
The number value corresponds to the sum of specific permission values:

4 represents "read" permission.
2 represents "write" permission.
1 represents "execute" permission.
Therefore, when you set the permission to 777, it means that the owner, group, and others all have full permissions, which includes read, write, and execute permissions.
In summary, chmod 777 sets full permissions for the owner, group, and others, allowing unrestricted access to the file or directory.

SIMDI DE KURULUMUNU YAPTIGMIZ PGADMIN-4 E BAGLANTI YAPIP POSTGRESQL E TERMINAL UZERINDEN IMPORT ETTGIMZ SHAPE FILE LARI BURDA GORUNTULEMEK!!!
http://127.0.0.1/pgadmin4/browser/

NEW SERVER GROUP OLUSTURUYORUZ 
ARDINDAN USERNAME - E POSTGRES DIYOURUZ 
PASSWORD E POSTGRES DIYORUZ NEDEN PASSWORD E POSTGRES DIYORUZ CUNKU...BURASI COK ONEMLI EGER PASSWORD SUREKLI YANLIS GERLIRSE DE BU SEKILDE COZECEGIZ...

I tried to create server and server connection on pgadmin on ubuntu. And I used to default user as postgres for username , but I don't know which password I must use, because when I use the postgres user on ubuntu terminal I did not need to use password... I got this error message.. Unable to connect to server : connection failed: FATAL:password authentication failed for user "postgres" connection to server at "localhost"(127.0.0.1), port 5432 failed: FATAL:password authentication failed for user "postgres"
The error message you encountered suggests that the password authentication for the PostgreSQL user "postgres" failed when attempting to connect through pgAdmin.

By default, PostgreSQL uses the "peer" authentication method on Ubuntu, which allows the system user with the same name to log in as the corresponding PostgreSQL user without requiring a password. However, when connecting through pgAdmin, it may require a password for authentication.
To resolve this issue, you can try the following steps:

Open a terminal and switch to the PostgreSQL user by running the command:
	sudo -u postgres psql
	Once you are in the PostgreSQL interactive terminal, set a password for the "postgres" user by executing the following SQL command:
ALTER USER postgres PASSWORD 'new_password';
Replace 'new_password' with the password you wish to set. Make sure to remember this password as you will need it to connect through pgAdmin.
Now, in pgAdmin, when creating the server connection, use the following credentials:

Username: postgres
Password: the password you set in step 2
By setting a password for the "postgres" user, you will be able to authenticate using that password when connecting through pgAdmin.

Yukardaki sekilde biz postgres default user ina yeni bir password atamasi yapariz ve bunu da pgadmin  baglantisinda user e postgres olarak veririz password e de burda hangi password verirsek onu verecegiz 
host : localhost yazacagiz
Name:
Description a biz kendimiz birseyler veririz...



GEOSERVER KURULUMU!

1-Make sure you have a Java Runtime Environment (JRE) installed on your system. GeoServer requires a Java 11 or Java 17 environment, available from OpenJDK, Adoptium, or provided by your OS distribution.

sudo apt update
Install the desired Java version. For example, to install OpenJDK 11:
sudo apt install openjdk-11-jdk
Once the installation is complete, you can verify the Java version by running:
java -version

ARDINDAN DA JAVA_HOME UN ADRES YOLUNU   ENVIRONMENT VARIABLE DA YANI  ETC/ENVIRONMENT TA KAYDEDERIZ 

sudo nano /etc/environment

jAVA_HOME="/usr/lib/jvm/java-11-openjdk-amd64"

Bu arada biz java dosyamizi bulmak icin de 
cd /usr/lib/jvm ye gelerek orda ls -l yaparsak bizim jdk larimizdan burda olanlardan java-11-openjdk-amd64 u environment variabel de belirtiriz

VE DE ENVIRONMENT VARIABEL DA KAYDETGIMIZ JAVA_HOME ADRES YOLUNU OKUNUP OKUNMADIGINI TEST ETMEK ICIN DE 

echo $JAVA_HOME
BU SEKILDE CHECK EDERIZ...  
COOOK ONEMLI...ENVIRONMENT VARIABLE DEGISIKLIKLERINDE MUTLAKA LOGOUT- YAPIP TEKRAR LOGIN YAPMALIYZ KI DEGISIKLIKLER TANINSIN...BAZEN HERSEY DOGRU OLMASINA RAGMEN GEOSERVER KURULUMUNDA JAVA HATASI VS ALABILIYORUZ BUNUN NEDENLERINDEN BIRISI DE ENVIRONMENT VARIABLE DEGISIKLIKLERININ SISTEM TARAFINDAN TANINMIYOR OLMASIDIR

2-Navigate to the GeoServer Download page.
https://geoserver.org/download/
bURAYA TIKLAYARAK 
geldgimiz sayfa nin menu elemanlarindan en sagdaki Archive ye tiklariz ve ordan 2.20.1 i seceriz ve tiklairz.. ve de ardindan... 
Platform Independent Binary ye tikladgimizda bizi https://sourceforge.net/projects/geoserver/files/GeoServer/2.20.1/geoserver-2.20.1-bin.zip/download bu url e goturecektir bu url zaten eger biz bu isi pc uzerinde yapiyorsak direk download edecektir browser uzerinden ama biz her zaman pc uzerinden yapmayacagiz ornegin server uzerinde islem yaparken bu download islemni bizim yapmamiz gerekecek

download islemini yapan url-endpoint i biz artik nereye indirmek istersek geoserver.zip dosyasini o direction a geliriz ve 

sudo wget https://sourceforge.net/projects/geoserver/files/GeoServer/2.20.1/geoserver-2.20.1-bin.zip/download seklinde geoserver zip dosyasini indiririz sonra da 

Biz geoserver i home-username olan /home/adem altina sudo mkdir /home/adem/geoserver diyerek geoserver klasoru olsuturuyoz /home/adem e ve de 
Sonra geoserver.zip dosyasini download ettikten sonra da 
/home/adem/Downloads sudo mv geoserver.zip ~/geoserver(/home/adem/geoserver) diyerek geoserver klsorumuz icerisine tasiriz 
Sonra /home/adem/geoserver  sudo unzip geoserver.zip diyerek zip icindeki klsorleri buraya acariz 
Sonra 
Add an environment variable to save the location of GeoServer by typing the following command:
echo "export GEOSERVER_HOME=/usr/share/geoserver" >> ~/.profile
. ~/.profile

Yeni bir terminal acariz 
sudo nano ~/.profile
This will open the .profile file in the nano text editor. Move the cursor to the end of the file.
Kodlarin en sonuna en alt satira
GEOSERVER_HOME=/home/adem/geoserver

Press Ctrl + X to exit nano. It will prompt you to save the changes. Press Y to confirm and Enter to save the file.
To make the changes take effect in the current terminal session, run the following command:
. ~/.profile
This will reload the .profile file and apply the new environment variable.

COOK ONEMLI BIR NOKTA DAHA 

Make yourself the owner of the geoserver folder. Type the following command in the terminal window, replacing USER_NAME with your own username :

sudo chown -R USER_NAME /home/adem/geoserver/(BU COOOK ONEMLIDIR..BIZIM KULLANACAGIMZ HER TURLU DISARDAN GELEN YENI DOSYA ICIN BU DOSYA IZINLERI MUTLAKA VERILMELIDIR YOKSA..GEOSERVER I LOCALHOSTTA YAYINLADIGMIZDA UNACCESSIABEL-IKKE TILGJENGELIG HATALARI ALIRIZ..)

Start GeoServer by changing into the directory geoserver/bin and executing the startup.sh script:

cd geoserver/bin
sh startup.sh

In a web browser, navigate to http://localhost:8080/geoserver.
If you see the GeoServer Welcome page, then GeoServer is successfully installed.

To shut down GeoServer, either close the persistent command-line window, or run the shutdown.sh file inside the bin directory.

Uninstallation
Stop GeoServer (if it is running).
Delete the directory where GeoServer is installed.


Windows uzerinden WSL veya window marketten.. ubntu  yu da indirip window uzerinden linux kullanabiliyoruz

BOLUM 9: KABUK GENISLETILMESI - JOKER KARAKTERLER

adem@adem-ThinkPad-13-2nd-Gen:~/Linux-works$ echo Hello
Hello 
adem@adem-ThinkPad-13-2nd-Gen:~/Linux-works$ echo *
linux-intro test1 
dikkat edelim... * bash kabugunda ozel bir anlami var
echo yu calistirmak yerine ondan once * i uzerinde bulundgumz dizindeki tum dosya ve dizinlerin isimleri ni getirmek icin konuldugunu zannnediyor ve onlari getiriyor...
  * karakterini uzerinde bulundgumz dizindeki dosya ve klasor isimleri olarak genisletiyor
echo nun onune de dosya ve dizinler geldigi icin dosya ve dizin isimleri yazdirilmis, konsola bastirilmis oluyor
Bash kabugumuz tamaen metinsel ifadeler olarak girdi yapiyoruz...BUNU DIKKAT EDELIMM.. 
KABUK GIRILEN STRING METINSEL IFADELERIN KABUGA GORE DEGERLENDIRILIP UYGUN DEGERLERE DONUSTURULMESI, YANI GENISLETILMESI DEMEKTIR..YANI KABUK ICIN OZEL ANLAM IFADE EDEN KARAKTERLERI KABUK DEGERLENDIRIP ONDAN SONRA CIKTI VERIYOR

SUSLU PARANTEZ GENISLETMESI-BRACE EXPANSION
Bu sayede sayi-karakter i kullanarakihtiyacimiza uygun tanimlar yaparak, kabuk tarafindan otomatik olarak uretilmesi saglanir
mkdir 1 2 3 4 5 yaparsak 1 2 3 4 5 ismnde klasorler olusturu
Burda basch-kernel soyle calisiyor mkdir bir fonksiyondur mkdir 1 2 3 denildiginde 1 2 3 mkdir e argumen olarak verilmis oluyor ve makedir komutu bu argumanlari gordgunde hemen gidip 1 2 3 isminde klasorleri olusturur

adem@adem-ThinkPad-13-2nd-Gen:~/Linux-works$ mkdir {1..5}
kabuk-bash {1..5} gorunce 1 den 5 e kadar sayi uretmesi gerektigini anliyor ve onlari da mkdir e argument olarak gonderiyor
1 den 5 e kadar klasorler olusturuyor...HARIKA BESTPRACTISE..
Yani aslinda her bir komut un karsina yazdigmz dosya isimleri klasor isimleri vs bunlar argumanlaridir onlarin ve bu sekilde calisan bash-kernel de bu sekilde calian hersey genisletilebilme ozellgine sahiptir

echo  a{d,l,t}a  yaparsak 
ada ala ata      ciktisini verir
adem@adem-ThinkPad-13-2nd-Gen:~/Linux-works$ echo a{d,l,t}a
ada ala ata

parantez disindaki onundeki ve arkasindaki harf ile birlestirilip, istedgimz gibi argumanlar uretebiliyoruz
adem@adem-ThinkPad-13-2nd-Gen:~/Linux-works$ echo a{bbb,dd,l,tttt}a
abbba adda ala atttta

Suslu parantezler icindeki argumanlar arasi bosluk karakteri olmamai aksi takdirde bash-kabugu yorumlayamaz
adem@adem-ThinkPad-13-2nd-Gen:~/Linux-works$ echo a{b bb,dd,l,tttt}a
a{b bb,dd,l,tttt}a
Bunun sebeb i sudur bash bu islemi suslu parantez icinde oldugunun yerine sanki a{b  bir karaketre bb bir karakter. seklinde degerlendiriyor bosluktan dolayi, ama biz o boslugun bosluk oldugnun bash tarafindan anlasilmasin istersek o zaman da kacis karaketri olan \ karakteri kullaniriz
Kacis karakteri(Ters slash)- \	
adem@adem-ThinkPad-13-2nd-Gen:~/Linux-works$ echo a{b\ bb,dd,l,tttt}a
ab bba adda ala atttta

Ne zaman biz bir karakterin, bash tarafindan gormezden gelinmesini istersek o zaman o karakter den once kacis karakteri yani \-ters slash karaketrini kullanabliriz

echo {a..z}
a b c d  den z ye kadar ekrana basacaktik

LInux da buyuk kucuk harf duyarliligi vardir ondan dolayi 

echo {A..Z}
A B C ...Z 
echo {1..20} 
1 2 3 ...20 ye kadar yazar 
echo {1..20..2}  2 ser araliklar ile bastiriliyor  
1  3 5 7 ... 19
echo {a..z..2}  2 ser sira ile ekrana basar
a c e g ....w y
Bu genisletme elemanlarin heps arguman oalrak echo ya iletiliyor...iste bash in calisma mantigi budur aslinda
adem@adem-ThinkPad-13-2nd-Gen:~/Linux-works$ echo test{1..9}
test1 test2 test3 test4 test5 test6 test7 test8 test9
adem@adem-ThinkPad-13-2nd-Gen:~/Linux-works$ echo test {1..9}
test 1 2 3 4 5 6 7 8 9
cunku bash kabuk bosluklara gore paraclaara ayirdigindan dolayi bu sekilde oluyor demekki bash-kabugu bosluklari dikkat e alarak, bosluiklara gore bolerek ondan sonra yorumluyor

adem@adem-ThinkPad-13-2nd-Gen:~/Linux-works$ echo {1..3}{a..c}
1a 1b 1c 2a 2b 2c 3a 3b 3c

adem@adem-ThinkPad-13-2nd-Gen:~/Linux-works$ echo {1..3}{a..c}{A..C}
1aA 1aB 1aC 1bA 1bB 1bC 1cA 1cB 1cC 2aA 2aB 2aC 2bA 2bB 2bC 2cA 2cB 2cC 3aA 3aB 3aC 3bA 3bB 3bC 3cA 3cB 3cC

adem@adem-ThinkPad-13-2nd-Gen:~/Linux-works$ echo {1..3} {a..c} {A..C}
1 2 3 a b c A B C
suslu parantezlerin arasina bosluklar birakinca, bash- bu genisletmeleri ayri ayri olarak algiliyor ve her birisini ayri ayri yazdirmis oluyor!!!

Dosya Ismi Genisletilmesi- Filename expansion

Bash kabugu girmis oldugumuz her bir argumana bakip *,? veya [] var mi diye kontrol ediyor
Bu karaketerlerden birini gorurse bu arguman dosya ismi genisletmesi olarak kabul ediliyor
Ve bu kalip ile eslesen dosya ve klasor isimleri alfabetik olarak genisletiliyor
Var olan dosya ve klasor isimleri ile eslesecek kalip lar olusturmamizi saglayan bir yapidir
Bu cok kullanisli ve cok ihtiyacimiz olacaktir 
Ornegin a ile baslayan ve sonu .txt ile biten tum dosyalari sil, getir vs demek istersek
Dosya genisletmesini yapabilmek icin de *,?,[] karakterlerinden uygun olan bir tanesini kullaniriz
Bu karaketerlere biz joker karakterler diyoruz-wildcards...     
* karakteri sifir veya sifirdan daha fazla sayida herhangi bir karakterle eslesebiliyor
? ise sadece herhangi tek bir karakter ile eslesebilioyr
[] karakter ise koseli parantez ile belirtilmis olan karakterler ile eslesebiliyor
Bu joker karakter olan *,?,[]  bunlar dosya ismi genisletmesi yalnizca var olan dosya ve dizin isimlerine genisletiliyor
Yani dosya ve klasor olusturmak gibi islemlerde kullanamayiz 
Sadece dosya ve klasor isimlerini secerken kullanabiliyorz, bunlar yalnizca var olan dosya ve klasor isimleri uzerinde islem yapilyor
Pattern matching - Desen-Oruntu eslesme olark da geciyor
Var olan dosya ve dizin isimleri ile eslesecek karakter desenler i olusturmamizi sagliyor

* Yildiz- ASterix karakteri 
cd /etc ye geliriz, burda bircok farkli turde dosya ve klasor mevcut oldugundan dolayi pratik yapmak cok daha kolaydir
echo *   dersek /etc altindaki gizli olmayan tum dosyalarin isimlerini consol a basacaktir
* bize gizli olmayan dosya lar ve dizin ler haric diger tum dosya ve dizin isimlerini arguman olarak echo ya verdigi icin o da console a o isimlerin basiyor
* karakteri gizli olan dosya ve klasorleri kapsamiyor..Yani ismini basinda . bulunan dosya ve klasorler gizli dosyalardir bunlari normalde ls -a dersek gorebilriiz...

echo * gizli olmayan tum dosya ve dizin isimleri(Cunku yanlislikla gizli dosyalarda degisiklik yapmamaiz icindir..bazi dosyalar gizlidir cunku bu dosyalar da yapilacak degisiklikler ciddi sonuclari oldugu icin bunlarda yanlislikla kolayca degisiklik yapilmamasi icindir.Ornegin .bashrc dosyasi cok kritiktir..bu dosya zarar gorurse kendi kullanici hesabimizdaki bazi etkilesimli kabuklari kullanma sorunu yasayabiliriz..Cunku configurasyonn dosyalaridir... )
echo .*  gizli olan tum dosya ve dizin isimleri
adem@adem-ThinkPad-13-2nd-Gen:/etc$ echo .*
. .. .java .pwd.lock

. tek nokta mevcut dizini temsil eden klasor veya dosyalar iken
ya da ./file.sh deyince uzerinde bulundgumz dizin altndaki dosya calistirilabilyordu.  
.Tek nokta kabuga-bash kabuguna tam uzerinde bulundugmz dizin adresini veriyor
.. 2 nokta ise bir ust dizini temsil eden klasor ve dosyalardir 
Hatirlarsak cd .. deyince bir ust dizine gidebilyoruz 
Yani soyle anlyalimm... biz nerece olursak olalim...Her dizin de mutlaka , 1 tane tek nokta(.) ve 1 tane 2 nokta(..) karakteri olacaktir cunku bash de bunlar tanimlanmistir ve bunlar uzerinden bash tek nokta ile uzerinde bulundugumuz dizin oldugunu anliyor ornegin ./file.sh ayni sekilde de cd .. deyince de bir ust dizine gitmesi gerektigini biliyor...
ASAGIDAKI ORNEKLERE BAKARSAK BASH DE OLUSTURULAN HER BIR KLASOR ALTINDA OTOMAIK OLARAK . VE .. KARAKTERLERI NIN GELDGINI GOREBILIRZ...

ORNEGE DIKKAT HANGI DIZINDE OLURSAK OLALIM HER DIZIIMIZDE MUTLAKA . VE .. MEVCUTTUR--START

adem@adem-ThinkPad-13-2nd-Gen:/etc$ echo .*
. .. .java .pwd.lock
adem@adem-ThinkPad-13-2nd-Gen:/etc$ cd ..
adem@adem-ThinkPad-13-2nd-Gen:/$ echo .*
. ..
adem@adem-ThinkPad-13-2nd-Gen:/$ cd home
adem@adem-ThinkPad-13-2nd-Gen:/home$ echo .*
. ..
adem@adem-ThinkPad-13-2nd-Gen:/home$ cd adem
adem@adem-ThinkPad-13-2nd-Gen:~$ echo .*
. .. .android .bash_history .bash_logout .bashrc .cache .config .dotnet .emulator_console_auth_token .gitconfig .gnome .gnupg .gradle .grass7 .java .jdks .lesshst .local .m2 .mozilla .node-gyp .npm .nvm .pki .profile .quokka .ssh .sudo_as_admin_successful .thunderbird .tnsrc .vscode .wallaby .wget-hsts .zoom .zshrc
adem@adem-ThinkPad-13-2nd-Gen:~$ ls
Android                demo1         Documents  Groceries   Linux-works       Pictures  snap       web
android-studio         demo1-server  Downloads  groceryapp  Music             projects  Templates
AndroidStudioProjects  Desktop       geoserver  index.html  nativescript-app  Public    Videos
adem@adem-ThinkPad-13-2nd-Gen:~$ cd demo1
adem@adem-ThinkPad-13-2nd-Gen:~/demo1$ echo .*
. .. .editorconfig .git .gitignore .vscode
adem@adem-ThinkPad-13-2nd-Gen:~/demo1$ 
ORNEGE DIKKAT HANGI DIZINDE OLURSAK OLALIM HER DIZIIMIZDE MUTLAKA . VE .. MEVCUTTUR--END

echo .* demek baslangici . nokta olan ve devaminda herhangi bir karakter bulunan tum dosya ve dizinleri getir demektir

echo host* demek ismi host ile bsalayan dosyalari echo ya arguman olarak ver demektir
adem@adem-ThinkPad-13-2nd-Gen:/etc$ echo host*
host.conf hostid hostname hosts hosts.allow hosts.deny
ismi host ile baslayan tum dosya ve dizinleri getir demektir, getiriyor ve echo aracina arguman olarak veriyor echo da onalri konsole a basmis oluyor
COK FAYDALI..OZELLIKLE VAR OLAN DOSYALARDAN KOPYALAMAK, KESMEK, SILMEK...VEYA HERHANGI BIR ISLEM YAPMAK ISTGEDGIMZ DE...BIR SURU DOSYA ICINDEN SECERKEN...COOOK FAYDALIDIR

echo *.conf  SONU .conf ile biten dosyalar i echo ya arguman olarak verecektir.. 
adem@adem-ThinkPad-13-2nd-Gen:/etc$ echo *.conf
adduser.conf apg.conf appstream.conf brltty.conf ca-certificates.conf debconf.conf deluser.conf e2scrub.conf fprintd.conf fuse.conf gai.conf hdparm.conf host.conf kernel-img.conf kerneloops.conf ld.so.conf libao.conf libaudit.conf logrotate.conf mke2fs.conf nftables.conf nsswitch.conf pam.conf pnm2ppa.conf resolv.conf rsyslog.conf rygel.conf sensors3.conf slim.conf sudo.conf sudo_logsrvd.conf sysctl.conf ucf.conf updatedb.conf usb_modeswitch.conf xattr.conf

OZELLIKLE GUNLUK HAYATTA BU SEKILDE KULLANIMLAR COK YAYGINDIR
scp exampleserver.com:*.jpg .  =>Bu su demektir git exampleserver.com a baglan orda ilk ana klasor altinda buluna butun sonu .jpg ile biten dosyaolari sen su an ki local pc de uzerinde bulundugmz dizin e kopyala indir demektir

echo rc*.d Baslangici rc ile baslayan sonu .d  ile biten tum dosya ve dizin isimlerini echo ya arguman olarak ver demektir
adem@adem-ThinkPad-13-2nd-Gen:/etc$ echo rc*.d
rc0.d rc1.d rc2.d rc3.d rc4.d rc5.d rc6.d rcS.d
adem@adem-ThinkPad-13-2nd-Gen:/etc$ 

echo *date* icerisinde herhangi bir yerinde date ifadesi gecen tum dosya ve dizinleri getir
adem@adem-ThinkPad-13-2nd-Gen:/etc$ echo *date*
updatedb.conf update-manager update-motd.d update-notifier
adem@adem-ThinkPad-13-2nd-Gen:/etc$ 

? KARAKTERI - 
Her zaman yalnizca tek bir karakteri temsil ediyor..dikkat edelim 0 degil

Baslangici ss olan ancak devamindaki karakterin herhangi bir karakte oldugu dosyalari echo aracina arguman olark vermek istersek
Bunun icin
adem@adem-ThinkPad-13-2nd-Gen:/etc$ echo ss?
ssh ssl
Yani soru isareti yalnizca tek bir karakteri kapsiyor, bu karakter herhangi bir karakteri kapsiyor ama yalnizca tek bir karakter

/etc$ echo rm?  demek rm ile baslayan ve sonrasin da sadece 1 karakter daha olan dosya ve dizinleri getir demektir
adem@adem-ThinkPad-13-2nd-Gen:/etc$ echo rm?
rmt

echo s??  s ile baslayan ve sonrasinda 2 tane daha karakter olan dosya ve dizin isimlerini arguman olarak echo  ya ver diyoruz
adem@adem-ThinkPad-13-2nd-Gen:/etc$ echo s??
ssh ssl

Kac soruisareti var ise yalnizca o sayi adedince karakter ile eslesme yapiliyor
NOT:? bosluk karakteri ile eslesmiyor, yani bosluk karakteri ile eslesmiyor o zaman oyle olsa idi o zaman ornegin echo s?? dedgmiz de sv isminde bir dosya var ise onu da almsi gerekirdi ama tabi ki bosluk karakteri ile "" eslesmediginden dolayi tabi ki oyle olmuyor

echo rc?.d isminin baslangicinde rc olan ama sonu .d ile biten ama ? nin bulundugu nokta da herhangi bir karakter olan(bosluk karakteri degil tabi ki) tum dosya ve dizin leri echo ya arguman olarak ver demis oluyor 
adem@adem-ThinkPad-13-2nd-Gen:/etc$ echo rc?.d
rc0.d rc1.d rc2.d rc3.d rc4.d rc5.d rc6.d rcS.d
adem@adem-ThinkPad-13-2nd-Gen:/etc$ 

echo ??? Ismi 3 karakterli olan tum dosya ve idizn isimleri listelemek istedgimz de bu sekilde yapariz
adem@adem-ThinkPad-13-2nd-Gen:/etc$ echo ???
apm apt gdb gss opt php pki ppp rmt rpc ssh ssl ufw vim X11 xdg xml

[] GENISLETMESI-[] EXPANSION
Eger [] icerisine soldan saga dogru bazi karakterler yazarsak bu karakterler, genisletilecek olan karakterler olarak kullaniliyor

echo [aczd]*  ismi a,c,z,d karakterlerinden biri ile baslayan ve devaminda herhangi karakter veya karakterler bulunan dosya veya dizin isimlerini echo ya arguman olarak veriyor
adem@adem-ThinkPad-13-2nd-Gen:/etc$ echo [aczd]*
acpi adduser.conf alsa alternatives anacrontab apache2 apg.conf apm apparmor apparmor.d apport appstream.conf apt avahi ca-certificates ca-certificates.conf ca-certificates.conf.dpkg-old chatscripts console-setup cracklib cron.d cron.daily cron.hourly cron.monthly crontab cron.weekly cups cupshelpers dbus-1 dconf debconf.conf debian_version default deluser.conf depmod.d dhcp dictionaries-common dpkg zsh_command_not_found

echo [a-d]*  baslangic harfleri a dan d ye kadar olan harf ile baslayan (yani a,b,c,d den birisi olan) ve sonrasinda herhangi karakter veya karakterler olan tum dosya ve dizinleri echo ya argument olarak verir

adem@adem-ThinkPad-13-2nd-Gen:/etc$ echo [a-d]*
acpi adduser.conf alsa alternatives anacrontab apache2 apg.conf apm apparmor apparmor.d apport appstream.conf apt avahi bash.bashrc bash_completion bash_completion.d bindresvport.blacklist binfmt.d bluetooth brlapi.key brltty brltty.conf ca-certificates ca-certificates.conf ca-certificates.conf.dpkg-old chatscripts console-setup cracklib cron.d cron.daily cron.hourly cron.monthly crontab cron.weekly cups cupshelpers dbus-1 dconf debconf.conf debian_version default deluser.conf depmod.d dhcp dictionaries-common dpkg


Isminin icinde 1 den 5 e kadar herhangi bir rakam olan dosya isimlerini listelemek istersek 
adem@adem-ThinkPad-13-2nd-Gen:/etc$ echo *[1-5]*
apache2 dbus-1 e2scrub.conf gdm3 gtk-2.0 gtk-3.0 iproute2 java-11-openjdk java-17-openjdk libnl-3 mke2fs.conf pnm2ppa.conf polkit-1 python2.7 python3 python3.10 rc1.d rc2.d rc3.d rc4.d rc5.d sensors3.conf udisks2 X11
adem@adem-ThinkPad-13-2nd-Gen:/etc$ 

a dan l ye kadar olan karakterlerden herhangi bir tanesi ile baslayan devaminda da 2 tane rastgele herhangi bir karakter bulunan tum dosya isimlerini getir 
adem@adem-ThinkPad-13-2nd-Gen:/etc$ echo [a-l]??
apm apt gdb gss
adem@adem-ThinkPad-13-2nd-Gen:/etc$ 

LINUX DE BUYUK KUCUK HARF DUYARLILIGI OLDUGUNDAN DOLAYI..EGER DOSYA ISMI BUYUK HARF OLACAK DOSYALAR VEYA DIZINLER ARAYACAKSAK BUNLARI OZELLIKLE BUYUK HARF OLARAK BELIRTMEMIZ GEREKIYOR

adem@adem-ThinkPad-13-2nd-Gen:/etc$ echo N*
NetworkManager

Baslangic harfi buyuk olan tum dosya ve klasor isimlerini listelemek  istersek
adem@adem-ThinkPad-13-2nd-Gen:/etc$ echo [A-Z]*
ModemManager NetworkManager ODBCDataSources PackageKit UPower X11
adem@adem-ThinkPad-13-2nd-Gen:/etc$ 

adem@adem-ThinkPad-13-2nd-Gen:/etc$ echo [A-z]*  Ama eger boyle yaparsak o zaman soyle demis oluyoruz.. Baslangicinda buyuk veya kucuk karakterle baslayan  sonrasinda ise rastgele bir veya daha fazla herhangi karakterlerden olusan tum dosya ve dizinleri getir demis oluyoruz

[] JOKER KARAKERI ILE HARIC TUTULMASI GEREKEN DOSYA VE DIZIN ISIMLERININ TANIMLAMA

echo [!a-y]* baslangicinda a dan y ye kadar olan karakterler haricindeki tum diger karakter ler ile baslayan ve sonrasinda da rastgele bir veya birden cok karakter barindirian tum dosya ve dizin isimlerini getirecektir
adem@adem-ThinkPad-13-2nd-Gen:/etc$ echo [!a-y]*
ModemManager NetworkManager ODBCDataSources PackageKit UPower X11 zsh_command_not_found
adem@adem-ThinkPad-13-2nd-Gen:/etc$ 


SONU .txt ile biten tum dizin(klasor) ve dosyalari silmek icin
adem@adem-ThinkPad-13-2nd-Gen:~/Desktop/adem$ sudo rm -rf *.txt
adem@adem-ThinkPad-13-2nd-Gen:~/Desktop/adem$ sudo touch {a..d}.txt
adem@adem-ThinkPad-13-2nd-Gen:~/Desktop/adem$ ls
a.txt  b.txt  c.txt  d.txt  git-works
adem@adem-ThinkPad-13-2nd-Gen:~/Desktop/adem$ sudo rm *.txt
adem@adem-ThinkPad-13-2nd-Gen:~/Desktop/adem$ ls
git-works

Ornegn sadece sonu .txt ile biten dosyalari listelemek istersek de 
adem@adem-ThinkPad-13-2nd-Gen:~/Desktop/adem$ ls *.txt
a.txt  b.txt  c.txt  d.txt


REGEX
Spesifik olarak belirli bir karakter kalibi ile eslesecek desenler olustrmamiza izin veren ozel karakterlerdir
Dogru sekilde kullanildiginda her turlu metinsel karakterin aranmasi, bulunmasi ve ayristirilmasi konusunda bize muthis kolayliklar sagliyor...Ve cok guclu dir

Regex de sadece var olan dosya ve dizin isimleri ile sinirli degiliz(joker karakterlerde oldugundan farkli olarak)
Metinsel veriyi girdi olarak verip, bu verilerin istedigmz sekilde ayristirilmasini saglayabiliyoruz

Regex ile kabuk genisletme yi birbirine karistirmayalim...
REGEX ICIN OZEL ANLAM IFADE EDEN KARAKTERLER 
+ * ? ^ $ () [] {} | \ 
bu karakterler kullanilarak, regex sayesinde metinsel veriler istenildigi gibi filtrelenebiliyor
Muthis esnek, kullanisli ve guclu yapidir
Burda farketmemiz gerkeen nokta su...Bash tarafindan kullanilan bazi genisletme karakterleri regex tarafindan da kullaliyor
BASH KABUGU TARAFINDAN KULLANILAN EXPANSION - GENISLETME KARAKTERLERI 
* ? [] {}
Regex te de kullanilan bu karakterler Regex icinde sanki bash kabugnda calistiklari gibi calismiyorlar(oyle calisiyor gibi gozukseler bile)
Bash-?- Yalnizca 1 karakteri kapsamak icn kullanilir(bosluk karakteri dahil degildir)
Regex-? 0 veya 1 karkeri kapsamak icn kullanilir(Yani bosluk karakteri dahildir)
COOK ONEMLI BIR FARKDIR!!!!!BUNU IYI FARKEDELIM!!!!
REGEX ILE BASH EXPANSION-GENISLETME KARAKTERLERI AYNI SEKILDE CALISMIYORLAR BUNU IYI BILELIM...COK ONEMLI KARISTIRIMAYALIM...

BASH KABUGU NORMALDE REGEX I DESTEKLEMIYOR ONDAN DOLAYI DA 
DOSYA ISMI GENISLETMESI(GLOBBING)* ? [] - BASH KABUGU BUNU KULLANIYOR
AMA BASH ILE REGEX I KULLANMAK ISTEDIGMZ DE sed, awk, grep gibi araclar ile regex i bash kabugunda da kullanabiliyoruz

Dosya Ismi Genisletmesi(* ? [])-Bash Kabugun kendisine ait gomulut-inbuilt ozelliklerididir 
Dolayisi ile biz dogrudan *?[] karakterleri kullandgimzda bash bunlari her zaman icin dosya genisletme karakteri olarak algiliyor. Eger harici olarak regex i kullanmak isteiyorsak, o zaman sed, awk, grep gibi regexi destekleyen araclari kullanarak metinsel verileri istedgimz gibi isleyebiliriz
Zaten bash-kabugunun amaci bize komut satirinda calisma ortami saglamaktir
Dolayisi ile bash in kendi icinde dogrudan regex i desteklemesi gerekmiyor cunku
BAsh in regex i desteklemiyor olmasi bir eksiklik veya unutulmus birsey degil, o bash in yapisinin bir parcasidir
Bash bize gerekli olan calisma ortamlari bize sagliyor.. Regex islemleri icin sed-awk-grep araclari ile kullaniriz

ALINTI KARAKTERLERI- TEK TIRNAK VE CIFT TIRNAK
Bash icin ozel anlami olan bazi karakterlerin var olduguni ifade etmistik
Ornegin *,?,[] ama biz bu karakterlerin kabuk-bash tarafindan normal karakter olarak, algilanmasini istersek o zaman da bu karakterleri tirnak icinde yazariz
mkdir newfolder   - newfolder isminde bir klasor olusturur
mkdir new folder - new ve folder isimlerinde 2 ayri klasor olusturur.. 
Aralarinda bosluk oldugui icin bash 2 ayri klasor olarak algiliyor
Bash bosluk karakterini komutu argumanlara ayirmak icin koydugmuz dusunuyyor
Bu durumu cozmek icin yani hem klasor olusturmak istiyoruz ama klasor ismimiz new folder olsun ama 1 klasor olsun istersek o zaman ne yapiyoruz tek tirnak icerisinde yazariz...

adem@adem-ThinkPad-13-2nd-Gen:~/Desktop/adem$ sudo mkdir new folder
[sudo] password for adem: 
adem@adem-ThinkPad-13-2nd-Gen:~/Desktop/adem$ ls
a.txt  b.txt  c.txt  d.txt  folder  git-works  new
adem@adem-ThinkPad-13-2nd-Gen:~/Desktop/adem$ sudo mkdir 'new folder'
adem@adem-ThinkPad-13-2nd-Gen:~/Desktop/adem$ ls
 a.txt   b.txt   c.txt   d.txt   folder   git-works   new  'new folder'
 Iste bu durum tek tirnak icinde 'new folder' yazarak tanimlamaya alintilama diyoruz...
Bash kabugu icinde tek tirnak icindeki hicbir karakter ozel anlami ile ele alinmaz, siradan bir karakter olarak gozukecektir

Bash kabugunda degiskenlerin basina $ isareti koyarak genisletiliyor
$SHELL - SHELL DEGISKENINE NE ATANDI ISE O NU VERECEKTIR
~ tilde isareti de home..yani /home/adem i isaret ediyor

NORMALDE TEK TIRNAK OLMADAN KULLANIRSAK ASAGIDAKI GIBI SONUC VERECEKTIR
adem@adem-ThinkPad-13-2nd-Gen:~/Desktop/adem$ echo {1..5} ~ $SHELL *
AMA TEK TIRNAK KULLANILARAK YAPARSAK AYNI ISLEMI O ZAMAN ISE... 
1 2 3 4 5 /home/adem /bin/bash a.txt b.txt c.txt d.txt folder git-works new new folder
adem@adem-ThinkPad-13-2nd-Gen:~/Desktop/adem$ echo '{1..5} ~ $SHELL *'
{1..5} ~ $SHELL *
AYNI ORNEGIN CIFT TIRNAK ICINDE DENEDGIMZ ZAMAN ISE
adem@adem-ThinkPad-13-2nd-Gen:~/Desktop/adem$ echo "{1..5} ~ $SHELL *"
{1..5} ~ /bin/bash *
Sadece degisken genisletmesi olan $SHELL uygulaniyor cift tirnak icinde , ama diger ozel karakterlerin hicbirisi uygulanmiyor
$SHELL =/bin/bash
Ayrica bir te \ ter slash(ESCAPE-KACIS KAREKTERI) isaretini de bash kabugu cift tirnak isareti icindfe kullanildiginda ozel islevlerinde kullaniliyor olarak algiliyor ayni degisken tanimlama islevi olan $SHELL deki gibi..
\-ESCAPE-KACIS KARAKTERI- KEDNISINDEN ONCE KULLANILDIGI KARAKTERIN OZEL ANLAMININ GECERSIZ OLMASINI SAGLAR 
ORNEGIN $SHELL IFADESININ ONUNE EGER KI \ KOYARSAK O ZAMAN CIFT TIRNAK ICINDE $ ISARETI DE OZEL ISLEVINI YITIRMIS OLARAK, NORMAL SIRADAN BIR $-DOLARAK KARAKTERI OLARAK ALGILANACAKTI
adem@adem-ThinkPad-13-2nd-Gen:~/Desktop/adem$ echo "$SHELL"
/bin/bash
adem@adem-ThinkPad-13-2nd-Gen:~/Desktop/adem$ echo "\$SHELL"
$SHELL
adem@adem-ThinkPad-13-2nd-Gen:~/Desktop/adem$ 

Yani kisacasi regex i kullanabilmek icin, bash in kendi genisletmelerinden ozel anlam ifade eden karakterlerin, siradan karakterler olarak algilandigi '' veya "" icerisinde kullanilmasi gerekir..

adem@adem-ThinkPad-13-2nd-Gen:~$ echo  mkdir a{b..e}a > text1.txt
> demek output.. yani sen echo ile gelen ciktiyi getir text1.txt ye yazdir diyor...Yani gelen output
> bu output redirection demektir - kendinden once olusturulan icerigin kendinden sonra verilen dosya icine 
It is used to redirect the output of a command (in this case, the output of the echo command) into a file. In this case, it will create a new file called "text1.txt" or overwrite it if it already exists, and the contents of the file will be the string generated by the echo command.

Sudo mysql –u admin –p cottageservice < cottageservice.sql 
< input redirection dir
< cottageservice.sql: The < symbol is used for input redirection in the command line. It tells the shell to take the contents of the file cottageservice.sql and use it as input for the command. In this case, it's using the SQL commands in cottageservice.sql to populate the cottageservice database within MySQL.

adem@adem-ThinkPad-13-2nd-Gen:~$ cat text1.txt
aba aca ada aea
adem@adem-ThinkPad-13-2nd-Gen:~$ echo a{f..k}a > text2.txt
adem@adem-ThinkPad-13-2nd-Gen:~$ cat text2.txt
afa aga aha aia aja aka
adem@adem-ThinkPad-13-2nd-Gen:~$ grep "a*a" text*.txt
text1.txt:aba aca ada aea
text2.txt:afa aga aha aia aja aka
adem@adem-ThinkPad-13-2nd-Gen:~$ grep a*a text*.txt
text1.txt:aba aca ada aea
adem@adem-ThinkPad-13-2nd-Gen:~$ ls
ada                    demo1         Downloads   index.html        Pictures  Templates  web
Android                demo1-server  geoserver   Linux-works       projects  text1.txt
android-studio         Desktop       Groceries   Music             Public    text2.txt
AndroidStudioProjects  Documents     groceryapp  nativescript-app  snap      Videos
adem@adem-ThinkPad-13-2nd-Gen:~$ grep ada text1.txt

Bash kabugu grep aracina komutu aktarmadan once, anlamlandirilp ondan sonra grep aracina aktariliyor BUNU UNUTMYALIM
Iste bundan dolayi 
adem@adem-ThinkPad-13-2nd-Gen:~$ grep a*a text*.txt - ilk olarak bash tarafindan anlamlandirilirarak 
grep ada text*.txt haline gelir...  cunku a*a yi gorunce dosya genislemesi olarak algilar ve dizinde bulunan dosya-dizinlerden a ile baslayip a ile biten leri alir o ada zaten 1 tane ada vardir , Ondan sonra grep araci calisir

adem@adem-ThinkPad-13-2nd-Gen:~$ grep "a*a" text*.txt 
Burda ise cift tirnak icerisinde oldugundan dolayi "a*a" yi oldugu gibi bu sekilde anlamlandiracktir ve de grep aracina da "a*a" olarak gelecektir, arguman olarak

KABUK GREP ARACINI CALISTIRMADAN ONCE KENDI UZERINE DUSEN BIRSEY VAR ISE DOSYA GENISLETMESI VS BUNLARI UYGULAYACAKTIR..

dikkat edelim kacis karakteri olan \ -tersslah ile asterix-* karakterinin ozel anlamini yok say, siradan karakter hali ile tani diyerek aslinda tirnak icinde yazdigmiz durum daki ile ayni sonucu alabilmis oluyoruz
adem@adem-ThinkPad-13-2nd-Gen:~$ grep a\*a text*.txt
text1.txt:aba aca ada aea
text2.txt:afa aga aha aia aja aka

\(Terssslah) Escape char- Ozel anlama gelen karakterlerin, ozel anlamlarinin gormezden gelinip, onlarin siradan character olarak ele alinmasini saglar

KOMUT IKAMESI GENISLETMESI!!!
Komutlarin uretmis oldugu sonuclarin, genisletmenin kullanildigi tanimlamann yerini almasidir
Komut ikamesi daha cok bash-programlama da kullanilyor
adem@adem-ThinkPad-13-2nd-Gen:~$ echo "mevcut dizin $(pwd)"  //pwd bulundugmz dizini veriyordu..Komut ikmasinden faydalandik
mevcut dizin /home/adem

test11
test12
test13
adem@adem-ThinkPad-13-2nd-Gen:~$ ls
ada                    demo1         Downloads    groceryapp   nativescript-app  snap       Videos
Android                demo1-server  folders.txt  index.html   Pictures          Templates  web
android-studio         Desktop       geoserver    Linux-works  projects          text1.txt
AndroidStudioProjects  Documents     Groceries    Music        Public            text2.txt
adem@adem-ThinkPad-13-2nd-Gen:~$ mkdir $(cat folders.txt)
adem@adem-ThinkPad-13-2nd-Gen:~$ ls
ada                    demo1         Downloads    groceryapp   nativescript-app  snap       test13     web
Android                demo1-server  folders.txt  index.html   Pictures          Templates  text1.txt
android-studio         Desktop       geoserver    Linux-works  projects          test11     text2.txt
AndroidStudioProjects  Documents     Groceries    Music        Public            test12     Videos
adem@adem-ThinkPad-13-2nd-Gen:~$ cat folders.txt
test11
test12
test13

folders.txt dosyasi icerisine yazdigmz ifadeler yeni olusturdugmz klasorlerin isimleri olarak kullanilmis!!!
mkdir aracina $(cat folders.txt) sonucu uzerinden is yaptirmis olduk
Normalde mkdri araci bu sekilde kendisi bir dosyadan icerik okuyup o icerik uzerinden klasor olusturmayi desteklemiyor ancak komut ikamesi sayesinde dosya icerigini cat araci ile okuyup mkdir e argument olarak iletilmesin saglamis olyyoruz..

adem@adem-ThinkPad-13-2nd-Gen:~$ rmdir $(cat folders.txt)
adem@adem-ThinkPad-13-2nd-Gen:~$ ls
ada                    demo1         Downloads    groceryapp   nativescript-app  snap       Videos
Android                demo1-server  folders.txt  index.html   Pictures          Templates  web
android-studio         Desktop       geoserver    Linux-works  projects          text1.txt
AndroidStudioProjects  Documents     Groceries    Music        Public            text2.txt

rmdir $(cat folders.txt) //folders.txt nin icerigi olan test11,test12,test13 ismindeki klasorler kaldirilacaktir  

$(cat folders.txt) test11 test12 test13   bu ciktilar komut ikamesinin yerine genisletilip rmdir aracina argument olarak verilecektir

Normalde mkdir ve rmdir komutlari bu sekilde bir dosya icerigini okuyarak okudug icerige karsilk gelen isimlerden klasor olusturma veya o isimlerdeki klasorleri silme gibi bir islem yapmiyorlar ama biz arac ikame yardimi ile bunu yapabiliyoruz

`` TERS TIRNAK ISARETI ICINE YAZILAN KODLAR DA KOMUT IKAMESI OLARAK GORULEBILIYORLAR

adem@adem-ThinkPad-13-2nd-Gen:~$ echo "mevcut dizin `pwd` dir"
mevcut dizin /home/adem dir
adem@adem-ThinkPad-13-2nd-Gen:~$ 

adem@adem-ThinkPad-13-2nd-Gen:~$ cat folders.txt
test11
test12
test13
adem@adem-ThinkPad-13-2nd-Gen:~$ mkdir `cat folders.txt`
adem@adem-ThinkPad-13-2nd-Gen:~$ ls
ada                    demo1         Downloads    groceryapp   nativescript-app  snap       test13     web
Android                demo1-server  folders.txt  index.html   Pictures          Templates  text1.txt
android-studio         Desktop       geoserver    Linux-works  projects          test11     text2.txt
AndroidStudioProjects  Documents     Groceries    Music        Public            test12     Videos
adem@adem-ThinkPad-13-2nd-Gen:~$ rmdir `cat folders.txt`
adem@adem-ThinkPad-13-2nd-Gen:~$ ls
ada                    demo1         Downloads    groceryapp   nativescript-app  snap       Videos
Android                demo1-server  folders.txt  index.html   Pictures          Templates  web
android-studio         Desktop       geoserver    Linux-works  projects          text1.txt
AndroidStudioProjects  Documents     Groceries    Music        Public            text2.txt
adem@adem-ThinkPad-13-2nd-Gen:~$ 


ORNEK:Başlangıcı sıfır veya birden fazla karakter olan “a” karakterini barındıran ve “a” karakterinden sonra tek bir karakter içeren dosya ismi genişletmesini nasıl tanımlarsınız ?
echo *a?  - Baslangicinda hic a karakteri de olmayabilir birden fazla a karakteri de olabilir, bu tanimlama *-asterix karakteridir..

METINSEL VERILERI ISLEMEK 
LINUX TEMEL MIMARISI 
Linux temel mimarisi herseyi bir dosya gibi ele aliyor
Bu sayede sistem uzerindeki tum yapilari son derece basit bir sekilde ele alma ve bu yapilar arasinda iletisim kurma imkani da sagliyor
Ornegin isletim sistemimize bir aygit bagladigimizda, bu aygit hakkinda bilgi almak icin ozel bir program kullanmamiza gerek kalmiyor, eger hangi dosyaya bakacagimzi biliyorsak cekirdek sanal olarak bu aygitin bir dosyasini sunuyor, ve bu dosyayi okuyarak o aygit hakkinda bilgi alabiliyoruz..
Burdan da sunu anliyoruz LInux de dosya yapisini bilmek, hangi dosya larin nerde bulundugnu ve ne ise yaradigini bilmek karsilastigimiz problemleri cozmek adina cok kritik ve ciddi onemlidir
Herseyi dosya olarak ele almasi ile isletim sistemi icindeki tum yapilar hakkinda ortak bir iletisim, haberlesme yolu gelistirilmis oluyor

ORNEGIN bir araci kullanarak, yani bir aracin dosyasini calistirarak bu aracin uretmis oldugu ciktilari baska bir araca baglayarak, cok spesifik gorevlerimizi cozebiliriz 
Simdi mesela grep komutunu kullaniyoruz, grep aslinda bir aractir ve ona ait bir dosya vardir...
Ornegin bir aracimiz bir dizin altindaki dosya ve klasorleri listeliyor baska bir aracimzda dosya ve klasor ler arasinda filtrleme yapiyor biz ilk aracimiz da listelen dosya lari 2. aracimiza arguman olarak vererek 2.aracimzin gelen dosya ve dizin isimleri icerisinden filtreleme yapabilmesini saglamis oluyoruz
LINUX ISLETIM SISTEMINDE HERSEY BIR DOSYA GIBI ELE ALINIYOR
DOLAYISI ILE DOSYALAR UZERINDE CALISIRKEN BIZ METINSEL VERILERLE CALISTIGIMZ ICIN ASLINDA TUM MESELE, METINSEL VERILERI ISLEMEK VE BYTE AKISINI KONTROL ETMEK..VE BYTE AKISINI NERDEN NEREYE, HANGI BICIMDE GONDERILECEGINI KONTROL ETTGIMZ ZAMAN, LINUX ISLETIM SISTEMINI ISTEDGIMIZ HER ANLAMDA KULLANABILIYORUZ
DOLAYISI ILE LINUX UZERINDE HERSEYIN BIR DOSYA OLARAK SUNULUYOR OLMASI ISLETIM SISTEMINDEKI ORTAK DILI TEMSIL EDIYOR
BIR ARACIN(KOMUTLARIN HER BIRISI ARACTIR ASLINDA) URETTIGI CIKTILARI BASKA BIR ARACA ARGUMAN OLARAK VEREBILIYORUZ VE BASKA BIR ARACTA CALISABILIYOR
ORNEGIN BIR AYGIT HAKKINDA BILGI ALMAK ISTIYORUZ, O ARACIN ILGILI DOSYASINI OKUYORAK VE BU CIKTILARI BIR ARACA YONLENDIREREK COK SPESIFIK BIR SORUNU COZEBILIRIZ... 
HARIKA..YAKLASIM  
OUTPUT REDIRECTION  > (SOLDAKI CIKTIIYI SAGDAKI NE GONDER) 
adem@adem-ThinkPad-13-2nd-Gen:~$ echo  a{b..e}a > text1.txt
> demek output.. yani sen echo ile gelen ciktiyi getir text1.txt ye (UZERINDE YAZDIR, BIR ONCEKI VERIYI SIL)yazdirdiyor...Yani gelen output
INPUT REDIRECTION < (SAGDAKI CIKTIYI-ICERIGI SOLDAKINE GONDER)
Sudo mysql –u admin –p cottageservice < cottageservice.sql 

LINUX ICINDE HER SEY BIR DOSYADIR..ASLINDA LINUX UZERINDE HERSEYIN BIR BYTE AKISI OLARAK ELE ALINMASINI TEMSIL EDIYOR. HERSEY METINSEL VERI OLARAK ELE ALINIP ISLENDIGI ICIN ASLINDA LINUX ISLETIM SISTEMINI YONETMEK DEMEK TAMAMEN BYTE AKISINI KONTROL ETMEK DEMEKTIR..

BYTE AKISINI KONTROL ETMENIN EN TEMEL NOKTASI BIR VERIYI BIR NOKTADAN BASKA BIR NOKTAYA YONLENDIRMEKTIR...YANI BIR YERDEN BIR CIKTIYI ALIP BASKA BIR YERDE KULLANMAK..

-YONLENDIRMELER-REDIRECTIONS
Linux uzerinde uretilmis olan ciktilari-bytleri bir noktadan baska bir noktaya iletmedir
Yonlendirmeler linux da en cok kullanacagmz islemlerden bir tanesidir

Linux uzerinde tum yapilar bir dosya gibi ele alindigi icin ornegin biz bir programi calistirdgmiz zaman, da bu program linux uzerinde bir dosya gibi ele alindigi icin ve linux uzerinde her bir dosyanin standart girdi, standart cikti ve standart hata olmak uzere 3 adet veri girisi ve cikis noktasi oldugunu bilmemiz yeterlidir. Bu noktalara da aslinda dosya tanimlayici deniyor.LInux uzerinde her bir yapi dosya olarak ele alindigi icin bu dosyalara ait olan 3 nokta da dosya tanimlayicisi tanimi ile ifade ediliyor

Ornegin biz bir x aracini calistirdigmz zaman, bu aracin alabilecegi ciktilar, yani bu araca gonderilebilecek ciktilar, isletiim sistemi uzerinde bu aracin temsil edildigi dosya uzerinde 0 numarali dosya tanimlayicisi ile temsil ediliyor. Dolayisi ile herhangi bir yapi veya arac bu araca bir cikti yonlendirmesi yapacagi zaman bu aracin 0 numarali dosya tanimlayicisina veriyi gondermesi gerekir
Benzer sekilde eger bu x aracinin uretmis oldugu hatasiz ciktilari baska bir yere yonlendirmemiz gerekirse o zaman da bu aracin 1 numarali dosya tanimlayicisini kullanmamzi gerekyor
Eger yalnizca hatali olan ciktilari iletmek istiyorsak o zaman da 2 numarali dosya tnaimlayisini kullanmamiz gerekiyor

Yani calisitrmis oldugmz bir arac var ve bu arac isletim sistemi uzerinde dosya gibi ele aliniyor ve bu arac in 3 noktaya sahip oluyor
0-> /dev/tty Araca disardan gelen verileri alir
1-> /dev/tty Bu aracin urettigi hatasiz ciktilar ise burdan gonderilir
2-> /dev/tty Bu aracin uretmis oldugu hatali ciktilar burdan gonderilir

Bu sayede girdi ciktilari(input-output) lari istedgimz noktadan istedigmz noktaya tasiyabiliyoruz

Ornegin biz echo "test"  yazdgimz da 
biz bir input veri girisi yapmis oluyoruz
echo "test" console a girdgimz bir text verisidir
Biz enter a basinca bu text veri girisi arka da calismakta olan bash kabuguna iletilecek
Nasil iletiliyor, bash kabugunun standart 0 numarali dosya tanimlayicisina gonderilmis olacak
Normalde biz ekstra bir yonlendirme yapmadigmz zaman komut satiri uzerinde calistirmis oldugmuz araclar default olarak, otomatik olarak console a bagli oluyor, console un temsil edildigi dosyaya bagli oluyor, dolayisi ile arka tarafta calismakta olan bash kabuguna console bagli oluyor, Console a yani komut satirina girilen komut 0 numarali dosya tanimlayicis uzerinden bash kabuguna iletiliyor.Bash kabugu da aldigi text komutlarini yorumluyor daha sonra standart hata ciktilarini 1 numarali dosya tanimlayicisi uzerinden yine /dev/tty dosyasina yani console u temsil eden dosyaya bu ciktiyi gonderiyor, bu sayede biz console da ciktimizi goruntuleyebiliyoruz
Eger hatali bir komut girse idik o zaman mesela biz 
adf isimli bir komut girdi ki boyle bir komut yok yani hatali komut sirasi ile islemler soyle gerceklesir 
adf->0 numarali dosya tanimlayicis i ile arka tarafta calisan bash kabuguna yonlendirilecek
Cunk bash kabugunun 0 numarali dosya tanimlayici /dev/tty konsoluna baglidir, dolayisi ile tty console undan gelecek olan veri girislerini bekliyor 
/dev/tty console u temsil eden dosyadir
Dolayisi ile adf isminde bir komut olmadigi icin asagidaki gibi sonuc aliyorz nasil oluyor bu sonuc, bash kabugunun hatali ciktilari ileten  2 numarali dosya tanimlayici uzeirnden, sonucu consola yonlendirilmis oldu, bu sayede biz bu hatali girdi sonucunu komut satirimzda goruntulemis olduk

adem@adem:/$ adf
Command 'adf' not found, did you mean:
  command 'kdf' from snap kdf (23.08.4)
  command 'aof' from snap aof (0.3.1)
  command 'adb' from deb adb (1:10.0.0+r36-9)
  command 'apf' from deb apf-firewall (9.7+rev1-6)
  command 'df' from deb coreutils (8.32-4.1ubuntu1)
  command 'alf' from deb seqan-apps (2.4.0+dfsg-14ubuntu1)
  command 'sadf' from deb sysstat (12.5.2-2ubuntu0.2)
  command 'adsf' from deb ruby-adsf (1.4.5+dfsg1-2)
  command 'wdf' from deb wit (3.01a-4)
  command 'kdf' from deb kdf (4:21.12.3-0ubuntu1)
  command 'adr' from deb adr-tools (3.0.0-2)
  command 'ad' from deb netatalk (3.1.12~ds-9ubuntu0.22.04.1)
  command 'sdf' from deb sdf (2.001+1-8)
See 'snap info <snapname>' for additional versions.
adem@adem:/$ 

KISACASI HER BIR DOSYA STANDART OLARAK 3 ADET DOSYA TANIMLAYICISINA SAHIPTIR

0->Veri girisi -veri alinmasini saglar-input
1->Standart hatasiz ciktilari iletir
2->Hatali ciktilari iletir-


cat > betik.sk
Burda cat araciginin benden alacagi ciktilari >(buyuktur) isareti araciligi ile betik.sk dosyasina yonlendirmesi gerektigni belirtiyorum
cat > betik.sk 
Biz boyle bir komut girince, cat araci dinlemey basliyor ve bizim veri girmemizi bekliyor ne zamana kadar biz CTRL-D ye basana kadar
Biz de bir hatasiz komut echo "hatasiz" diyerek bir de hatali komut yani olmayan asdf isminde bir komut giriyoruz ve CTRL-D ye  basarak kaydediyor
Bu arada once betik.sh dosyasi var mi ona bakar var ise daha onceki icerigin uzerine override eder,eger boyle bir dosya yok ise o zaman yeni bir dosya olusturur bu isimde

adem@adem:~$ cat > betik.sh
echo "hatasiz"
asdf
adem@adem:~$ 
CTRL-D ye  basarak kaydediyor ve bu sekilde bizden aldigi girdileri >(buyuktur-yonlendirme operatoru) sayesinde bizden aldigi verileri betik.sh dosyaisina yonlendirmss oldu
Simdi betik.sh dosyasini okuyacak olursak icerigini 

adem@adem:~$ cat betik.sh
echo "hatasiz"
asdf

echo "hatasiz" bu bize "hatasiz" ciktisiini verir 
asdf komutu ise boyle bir komut olmadigndan bize boyle bir komut bulunmadini sonucunu verecek

COOK ONEMLI BUNU BILMELIYUIZ
Oncelikle biz betik.sh dosyamizi calistirmak istiyoruz yani execute etmek istiyoruz 
Yani .sh dosyalarinin icerisine yazdigz komutlari biz .sh dosyalarini executable yaparak onlarin icindeki komutlarin execute edilebilmesini saglayabiliyoruz
betik.sh dosyamizin yetk i durumun gormek icin 
betik.sh in bulundugu dosya dizininde 
ls -l yaparak betik.sh dosyasini bulundugu satira bakariz 
ya da stat.betik.sh ile gorebiliriz 

betik.sh dosymizi executable yapmak cunku calistirmak istiyoruz
chmod +x betik.sh

Simdi artik betik.sh i calisitrabiliriz 
.sh dosyalarini linux de ./betik.sh diye calistiririz ki dosya konumunu belirtmis olmamiz gerekir, linux de ... 
./betik.sh diye calistiririsak

adem@adem:~$ ./betik.sh
hatasiz - 1 numarali dosya tanimlayici tarafindan gonderildi 
./betik.sh: line 2: asdf: command not found - 2 numarali hatali ciktilari vermek le gorevli dosya tanimlayicisi tarafindan gonderildi
adem@adem:~$ 

Bizim aldgimz tum sonuclar komut-satirimz yani console umz (/dev/tty) uzerinden gozukecektir
Cunku otomatik olarak /dev/tty dosyalarina bagli idi

Peki biz komutlarimizdan yalnizca hatasiz olan ciktilari bir dosyaya yonlendirmek istersek(Bir dosyaya yazmak gibi veya aktarmak)
./betik.sh i calstirinca biz aksini belirtmezsek kendisi otomatik olarak console a hem hatali hem de hatasiz sonuclari bastiriyordu
Ama biz yalnizca hatasiz ciktilari bir dosyaya yonlendirmesini istiyoruz


adem@adem:~$ ./betik.sh 1> hatasiz.txt
./betik.sh: line 2: asdf: command not found
adem@adem:~$ cat hatasiz.txt
hatasiz
adem@adem:~$ 

DIKKAT EDELIM - /betik.sh 1> hatasiz.txt DIYOURZ KI 1 NUMARALI  YANI HATASIZ OLAN CIKTILARI SEN hatasiz.txt dosyasi varsa onun ustune yaz yok ise bu dosyayi olustur ve bu dosyaya yaz diyoruz..Ve ne yapiyor devaminda sadece hatali olan ciktiyi veriyor ./betik.sh cunku hatasiz olan ciktiyi hatasiz.txt dosyasina aktardi

adem@adem:~$ ./betik.sh 2> hatali.txt
hatasiz
adem@adem:~$ cat hatali.txt
./betik.sh: line 2: asdf: command not found

./betik.sh 2> hatali.txt -  BURDA DA 2 NUMARALI YANI HATALI CIKTIYI hatali.txt ye aktardigi icin ./betik.sh o zaman da sadece hatasiz olan komut ciktisni veriyor, otomatik olarak console a yonlendirildigi icin sonuc..
 

./betik.sh 1> hatasiz.txt
yapildiginde su sekilde islem gerceklesiyor 

betik.sh  0 -> /dev/tty
betik.sh  1 -> hatasiz.txt
betik.sh  2 -> /dev/tty


adem@adem:~$ ./betik.sh 2> hatali.txt
yapildiginda ise su sekilde islem gerceklesiyor 

betik.sh  0 -> /dev/tty
betik.sh  1 -> /dev/tty
betik.sh  2 -> hatali.txt

/dev/null  SANAL DOSYASI 
/dev/null isimli bir sanal dosyamiz var ve kendisine gondeirlen tum dosyalari yutuyor, tamamen yok ediyor, yani bosluga gonderiyor bizde artik islem yapmak istemedgimz dosyalari buraya gonderebiliyoruz 
Dolayisi ile istemedgimz ciktilar var ise ki bu genellikle hata ciktilari oluyor bunlari /dev/null dosyasin a yonlendirebiliyoruz 

./betik.sh: line 2: asdf: command not found
adem@adem:~$ ./betik.sh 2> /dev/null
hatasiz
adem@adem:~$ cat /dev/null
adem@adem:~$ 

AYRICA Hem hatali hem de hatasiz ciktilari tek bir dosya ya yonlendirebiliriz
Bu mantik olarak soyle calisir, once hatali olan ciktilar hatasiz olan ciktilara yonlendirirz sonra hata ordan 2 sini birden bir adrese yonlendiririz
Bunun icin bir kisa yol bulunyor 
./betik.sh 2&>   2 numarali ciktilari al 1 numarali dosya tanimlayicisina gonder demis oluyoruz 
Aslinda normalde adem@adem:~$ ./betik.sh 1> hatasiz.txt biz boyle yapinca da standart hatasiz ciktilar hatasiz.txt ye yonlendirilir ayni sekilde 1 i hic kullanmazsak da yonlendiriiliyor ondan dolayi da 
adem@adem:~$ ./betik.sh > hatasiz.txt 
adem@adem:~$ ./betik.sh > hatasiz.txt
./betik.sh: line 2: asdf: command not found
adem@adem:~$ cat hatasiz.txt
hatasiz

Asagidaki gibi 2 numarali ciktialri alip 1 numarali dosya tanimlayicsina gonderip sonra her ikisinid e result.txt isimli dosyaya yazdiriyoruz

./betik.sh 2&> result.txt
./betik.sh 2&1> result.txt

adem@adem:~$ ./betik.sh 2&>result.txt
adem@adem:~$ cat result.txt
hatasiz
./betik.sh: line 2: asdf: command not found
adem@adem:~$ 

BURASI ARA BIR KONUDUR--YANI ARAYA SKISTIRILMISTIR--START
Bash-kabugunun DAHILI VE HARICI KOMUTLARI 
compgen -b  komutu ile bash kabugunun tum dahili komutlarini gorebiliriz
adem@adem:~$ compgen -b
Dahili olarak bulunan araclari temsil eden komutlar gelecektir
Her bir araca, her bir komuta ait bir dosya bulunmaktadir LINUX de
Ama harici komutlar ise, bash kabugu icinde gomulu olan araclar degildir dolayisi ile bu araclari kullanabilmek icin bash kabuguna install edilmeleri gerekir, install edilmeden eger kullanmaya calisirsak aracin yuklu olmadigi geri donusum mesajini aliriz, ne gibi mesela nano komutu gibi veya curl gibi bunlari kullanabilmemiz icin once bunlari bash de sudo apt install ile install etmemiz gerekiyor
Dahili komutlar genellikle sistem yonetimi icin kullanilan en temel araclari temsil ediyor.Bu komutlar sayesinde bash kabugunun oldugu her yerde temel sistem gorevimizi yerine getirebiliyoruz
Ornegin sistemiimiz coktugund sistemi kurtarmak icin bash kabugu icinde gomulu gelen dahili komutlardan faydalanabiliyoruz
Tum kabuklarda ki dahili komutlar birbrine cok yakindir, temel olarak bircok komut benzerdir
Linux icinde Bash,Zsh,Fish,Dash gibi cok farkli shell-kabuklar mevcuttur. Biz ubuntu da Bash kabugunu kullaniyoruz
Bash kabugu linux sistemlerinde yuklu geldigi icin biz default olarak bash kabugu kullanilmasini  kendimiz ayarlayabilyoruz
ya da zsh 
bash-zsh..shell(kabuklari) ile biz arkada calisan mekanizma yi ayarlamis oluyorz yani bizim kullandigmz ayni terminal veya console ama console a y azdigmz komutlar sonucta arkada bir mekanizma tarafindan input olarak aliniyor yorumlaniyor ve bir return-result olarak donduruluyor.Iste bu mekanizma dir aslinda bash kabugu..Yani bir nevi console programlamasi
Neden tum sistemler bash kabugunu kullanmiyor
Sebebi dagitim ozelinde neden bash degil de farkli shell ler kullanildigi icin, macos lisans kosularrina uymadiigndan dolayi zsh shell i kullaniyor 
kali linux dagitimi da zsh shell i daha etkilesimli kullanim icin.. kullaniyor
BURASI ARA BIR KONUDUR--YANI ARAYA SKISTIRILMISTIR--END

PEKI VERI GIRISIN NASIL YAPABILIRIZ
cat araci ile dosya icerigini goruntuleyebiliyoruz normalde 
adem@adem:~$ cat hatasiz.txt
hatasiz
Biz  yonlendirme araci olan <(kucuktur-input-redirction) aracini kullanarak bir dosya icerigini

/usr/bin/cat  < isareti  cat aracini temsil eden dosyanin standart girdisi olan 0 numarali dosya tanimlayicisina, sagdaki verilerin yonlendirilmesini sagliyor
adem@adem:~$ cat result.txt
hatasiz
./betik.sh: line 2: asdf: command not found
adem@adem:~$ cat < result.txt //Bu sekilde result.txt nin icerigin cat aracina yonlendirmis oluyorz
hatasiz
./betik.sh: line 2: asdf: command not found
adem@adem:~$ 

ONEMLI BIR DETAY!!!
Sistem uzerinde kullandgimz her arac standart girdi olan 0 numarali dosya tanimlayicisindan veriyi okumuyor olabilir
Yani kullanmakta oldugumz arac, standart girdiden veri kabul etmiyor olabilir
Bu duruma ornek olarak echo yu verebiliriz. Echo standart girdiden veri kabul eden bir arac degildir. Echo yalnizca kendisine arguman olarak verilmis(yani pesi sira verilen ifadeler) ifadeleri yankilamak icin tekrar komut satirina bastirmak icin kullanilir
Dolayis i ile 
echo merhaba - ekrana merhaba basar 
Ama
echo < result.txt dersek herhangi bir cikti alamayiz, cunku echo araci standart girdiden gelen verileri kabul etmiyor
Dolayisi ile biz < result.txt i echo aracina yonlendirsek bile bu result.txt dosyasi nin 0 numarali dosya tanimlayicisi echo araci tarafindan islenmiyor
Buna benzer durumlarin bilincinde olarak, veri girisini kabul eden araclar uzerinden veri girisi yapabiliyoruz 

DIKKAT ETMELIYIZ!!! - TEK BUYUKTUR ISARETI KULLANIRSAK ESKI VERILER SILINIR YENI VERILER UZERINE YAZILIR
Biz yonlendirmlerimizi > veya < ile yaptik, fakat dikkat etti isek ornegin
./betik.sh 2> hatali.txt
Boyle yaptigmiz zaman eger hatali.txt dosyasi var ve icerisinde veri var ise betik.sh 2 den gelen output- hatali.txt ye redirct edilerek, yani veri aktarilarak, hatali.txt icersinde daha onceden bulunan veriyi override ederek, uzerine yaziliyordu
Uzerine yazildigini gorebiliriz
adem@adem:~$ cat result.txt
hatasiz
./betik.sh: line 2: asdf: command not found
adem@adem:~$ cat < result.txt
hatasiz
./betik.sh: line 2: asdf: command not found
adem@adem:~$ ./betik.sh 2>result.txt
hatasiz
adem@adem:~$ cat result.txt
./betik.sh: line 2: asdf: command not found
adem@adem:~$ 

EGER ESKI VERILER SILINMESIN, YENI VERILER DE EN SONDAN ITIBAREN EKLENEMEYE BASLASIN ISTERSEK CIFT BUYUKTUR(>>) ISARETI KULLANMAMIZ GEREKIYOR!!!

adem@adem:~$ cat result.txt
./betik.sh: line 2: asdf: command not found
adem@adem:~$ ./betik.sh 2>>result.txt
hatasiz
adem@adem:~$ cat result.txt
./betik.sh: line 2: asdf: command not found
./betik.sh: line 2: asdf: command not found
adem@adem:~$ 
adem@adem:~$ ./betik.sh 2>>result.txt
hatasiz
adem@adem:~$ cat result.txt
./betik.sh: line 2: asdf: command not found
./betik.sh: line 2: asdf: command not found
./betik.sh: line 2: asdf: command not found
adem@adem:~$ 
HATASIZ CIKTILARI GONDERMEK IICN(1) HICBIRSEY YAZMASSAK DEFUALT OLARAK 1 OLARAK OKUYOR
adem@adem:~$ ./betik.sh >> result.txt
./betik.sh: line 2: asdf: command not found

adem@adem:~$ cat result.txt
./betik.sh: line 2: asdf: command not found
./betik.sh: line 2: asdf: command not found
./betik.sh: line 2: asdf: command not found
hatasiz
adem@adem:~$
HEM HATALI HEM HATASIZ CIKTILARI GONDERMEK ICINDE KULLANIRIZ

adem@adem:~$ ./betik 2>>result.txt
adem@adem:~$ cat result.txt
./betik.sh: line 2: asdf: command not found
./betik.sh: line 2: asdf: command not found
./betik.sh: line 2: asdf: command not found
hatasiz
bash: ./betik: No such file or directory
adem@adem:~$ 

CONCATENATE-CAT (BAGLMAK,BIRLESTIRMEK)
CAT ARACI
Bu arac sayesinde istedigmz dosya iceriklerini birlestirip tek bir cikti elde edebiliyoruz
En temel kullanimi:Herhangi bir dosya icerigini goruntulemektir

adem@adem:~$ cat result.txt
./betik.sh: line 2: asdf: command not found
./betik.sh: line 2: asdf: command not found
./betik.sh: line 2: asdf: command not found
hatasiz
bash: ./betik: No
Burda cat araci kendisine arguman olarak verilmis result.txt sini tek bir  yone, yani standart ciktiya birlestirip yonlendirmis oluyor.

adem@adem:~$ cat hatali.txt hatasiz.txt
./betik.sh: line 2: asdf: command not found
hatasiz
adem@adem:~$ 

Hem  hatali.txt hem de hatasiz.txt iceriklerin pes pese console a bastirmis oldu
Yani 2 farkli dosya icerigini okudu ve bize tek bir standart cikti olarak sunuuyor
Cat araci ile tek bir dosya yi da okuyabiliyoruz, birden fazla dosyayi da okuyarak, tek bir cikti olarak bize veriyor

BIRDEN FAZLA DOSYA ICERIGI OKUYUP BUNLARI TEK BIR DOSYA ICINDE BARINDIRABILIRIZ
adem@adem:~$ cat hatali.txt hatasiz.txt > result2.txt
adem@adem:~$ cat result2.txt
./betik.sh: line 2: asdf: command not found
hatasiz

hatali.txt ile hatasiz.txt dosya iceriklerini result2.txt dosyasinda birlestiriyor 

KENDIMIZ MANUELLE GIRDGIMZ VERILERI BIRLESTIRIP BIR DOSYA ICINE YAZABILIRI 

adem@adem:~$ cat > betik2.sh
echo "hatasiz2"
asdf2
(Bu verileri girdikten sonra artik girilen verileri kaydetmek ve sonlandirmak icin CTRL-D ye basariz)
adem@adem:~$ cat betik2.sh
echo "hatasiz2"
asdf2

CAT ARACI ILE OKUDGUMZ DOSYANIN BIR KOPYASINI ALABILIRZ 

adem@adem:~$ cat betik2.sh > betik2copy.sh
adem@adem:~$ cat betik2copy.sh
echo "hatasiz2"
asdf2
adem@adem:~$ cat betik2.sh
echo "hatasiz2"
asdf2
adem@adem:~$ 

cat araci ile betik2copy.sh isimli dosya ile betik2.sh dosyasinin bir kopyasini aldik
cat --help diyerek cat i daha detayli ogrenebiliriz                                                                                                                                                                                   

REV(REVERSE) ARACI
Eger verilermizi satir duzeyinde tersine cevirmek istersek reverse ifadesinin kisaltmsi olan rev komutunu kullanabilirz

adem@adem:~$ cat > newtext.txt
this is a test text
adem@adem:~$ cat newtext.txt
this is a test text
adem@adem:~$ rev newtext.txt
txet tset a si siht
adem@adem:~$ cat >>newtext.txt
Hello, this is Adem.
How are you?
God evening
adem@adem:~$ cat newtext.txt
this is a test text
Hello, this is Adem.
How are you?
God evening
adem@adem:~$ rev newtext.txt
txet tset a si siht
.medA si siht ,olleH
?uoy era woH
gnineve doG
adem@adem:~$ 

Eger 1 den 9 a kadar olan sayilari ters cevrilisin gormek istersk, echo ile 1 den 9 a kadar olan ciktiyi bir dosyaya yazdirip sonra rev komutu ile tersine cevirebiliriz
adem@adem:~$ echo {1..9}
1 2 3 4 5 6 7 8 9
adem@adem:~$ echo {1..9} > number1.txt
adem@adem:~$ cat number1.txt
1 2 3 4 5 6 7 8 9
adem@adem:~$ rev number1.txt
9 8 7 6 5 4 3 2 1
adem@adem:~$ 

TOUCH-STAT ARACLARI

touch araci normalde yeni dosya olusturmak icin kullaniyoruz ama tek isi bu degil tabi ki
touch ile biz iligli dosyalarin duzenlenme tarihlerini degistirebiliyoruz
Oncelikle bunu test edelim
Ama bunu test edebilmek icin biz oncelike ornegin number.txt dosyamizin bilgilerini gormemiz gerekiyor
boyutu
duzenlenme tarihi
erisim yetkileri vs gibi tum bilgileri bilmek istersek 
1-stat number.txt
2-ls -l number.txt 
ile gorebiliriz-adem@adem:~$ ls -l
-rw-rw-r--  1 adem     adem             18 des.  12 11:53 number1.txt

STAT KOMUTU MUTHIS ONEMLI BIR KOMUTTUR
adem@adem:~$ stat number1.txt
  File: number1.txt
  Size: 18        	Blocks: 8          IO Block: 4096   regular file
Device: 803h/2051d	Inode: 5690253     Links: 1
Access: (0664/-rw-rw-r--)  Uid: ( 1000/    adem)   Gid: ( 1000/    adem) //owner bilgisin vermis
Access: 2023-12-12 11:53:16.734732574 +0100//Burasi ara ara degistirilir genellikle sabit kalir, cunku dosya ya erisim cok fazla oalcaktir her erisimde burayi degistirmek bir yuk olacagi icin daha az sklikla degisir
Modify: 2023-12-12 11:53:09.330639289 +0100//modify edilme, duzenlenme tarihi-Dosyaya birsey eklenme ve silinme durumunda degisir
Change: 2023-12-12 11:53:09.330639289 +0100//Dosyanin oz niteliiklerinin(isminin, boyutunun) degismesi durumunda duzenlenen tarihdir.
 Birth: 2023-12-12 11:53:09.330639289 +0100//olusturulma tarihi

 Iste touch komutu sayesinde burdaki bilgilileri duzenleme imkanina sahip oluyoruz
Ornegin Access tarih verisini su an komutu girdgimz tarih ile degistirmek icin : adem@adem:~$ touch -a number1.txt
$ touch -a number1.txt // burdaki -a stat number1.txt yapinca gelen access ifadesinin kisaltilmis halidir


adem@adem:~$ stat number1.txt
  File: number1.txt
  Size: 18        	Blocks: 8          IO Block: 4096   regular file
Device: 803h/2051d	Inode: 5690253     Links: 1
Access: (0664/-rw-rw-r--)  Uid: ( 1000/    adem)   Gid: ( 1000/    adem)
Access: 2023-12-12 11:53:16.734732574 +0100
Modify: 2023-12-12 11:53:09.330639289 +0100
Change: 2023-12-12 11:53:09.330639289 +0100
 Birth: 2023-12-12 11:53:09.330639289 +0100
adem@adem:~$ touch -a number1.txt
adem@adem:~$ stat number1.txt
  File: number1.txt
  Size: 18        	Blocks: 8          IO Block: 4096   regular file
Device: 803h/2051d	Inode: 5690253     Links: 1
Access: (0664/-rw-rw-r--)  Uid: ( 1000/    adem)   Gid: ( 1000/    adem)
Access: 2023-12-12 14:39:09.082571877 +0100
Modify: 2023-12-12 11:53:09.330639289 +0100
Change: 2023-12-12 14:39:09.082571877 +0100
 Birth: 2023-12-12 11:53:09.330639289 +0100
adem@adem:~$ 

Modify oz nitelik degerini degistirmek icin ise:touch -m number1.txt

touch -m number1.txt / -m demek modify demektir

adem@adem:~$ touch -m number1.txt
adem@adem:~$ stat number1.txt
  File: number1.txt
  Size: 18        	Blocks: 8          IO Block: 4096   regular file
Device: 803h/2051d	Inode: 5690253     Links: 1
Access: (0664/-rw-rw-r--)  Uid: ( 1000/    adem)   Gid: ( 1000/    adem)
Access: 2023-12-12 14:39:09.082571877 +0100
Modify: 2023-12-12 14:42:28.609087450 +0100
Change: 2023-12-12 14:42:28.609087450 +0100
 Birth: 2023-12-12 11:53:09.330639289 +0100
adem@adem:~$ 
touch -m number1.txt//change bilgisini komutu gidrdigmz tarih bilgsi ile degistirdi

Change date bilgsini degistirmek icin ise : 

adem@adem:~$ touch -c number1.txt
adem@adem:~$ stat number1.txt
  File: number1.txt
  Size: 18        	Blocks: 8          IO Block: 4096   regular file
Device: 803h/2051d	Inode: 5690253     Links: 1
Access: (0664/-rw-rw-r--)  Uid: ( 1000/    adem)   Gid: ( 1000/    adem)
Access: 2023-12-12 14:44:29.674609488 +0100
Modify: 2023-12-12 14:44:29.674609488 +0100
Change: 2023-12-12 14:44:29.674609488 +0100
 Birth: 2023-12-12 11:53:09.330639289 +0100
adem@adem:~$ 

Dosyanin birth tarihini duzenlemek istersek
adem@adem:~$ touch -b number1.txt
touch: invalid option -- 'b'
Try 'touch --help' for more information.
Dosyanin birth tarihini degistiremedik..Hemen tam olarak anlamk icin touch --help ile inceleyebiliriz
Peki illa ki ben dosyamin olusturulma-birth tarihini de degistirmem gerek dersek o zamanda yeni bir dosya olusturup, bu mevcut dosya icerigini yeni dosyamiza  tasiyarak, yeni olustrudgumuz dosyanin birth-olusturlma tarihi artik guncel olmus olacaktir

EGER MODIFY DATE I SPESIFIK BIR TARIH ILE DEGISTIRMEK ISTERSEK DE 

adem@adem:~$ touch -md '2023-09-19 00:00:00' number1.txt
touch -md(modify date)

adem@adem:~$ stat number1.txt
  File: number1.txt
  Size: 18        	Blocks: 8          IO Block: 4096   regular file
Device: 803h/2051d	Inode: 5690253     Links: 1
Access: (0664/-rw-rw-r--)  Uid: ( 1000/    adem)   Gid: ( 1000/    adem)
Access: 2023-12-12 14:44:29.674609488 +0100
Modify: 2023-09-19 00:00:00.000000000 +0200
Change: 2023-12-12 15:13:11.027439714 +0100
 Birth: 2023-12-12 11:53:09.330639289 +0100
adem@adem:~$ 

adem@adem:~$ touch -ma '2023-09-19 00:00:00' number1.txt - Access date spesifik bir date ile  degistirmek icin
adem@adem:~$ touch -mc '2023-09-19 00:00:00' number1.txt - Change date spesifik bir date ile  degistirmek icin

DOSYA PROPERTIES(OZNITELIKLERI-OZELLIKLERI) DOGAL OLARAK NASIL-NE ZAMAN DEGISIR?

adem@adem:~$ cat number1.txt
1 2 3 4 5 6 7 8 9
adem@adem:~$ stat number1.txt
  File: number1.txt
  Size: 18        	Blocks: 8          IO Block: 4096   regular file
Device: 803h/2051d	Inode: 5690253     Links: 1
Access: (0664/-rw-rw-r--)  Uid: ( 1000/    adem)   Gid: ( 1000/    adem)
Access: 2023-12-12 15:17:34.022637553 +0100
Modify: 2023-09-19 00:00:00.000000000 +0200
Change: 2023-12-12 15:13:11.027439714 +0100
 Birth: 2023-12-12 11:53:09.330639289 +0100
adem@adem:~$ date
ti. 12. des. 15:18:50 +0100 2023
adem@adem:~$ date
ti. 12. des. 15:19:02 +0100 2023
adem@adem:~$ cat number1.txt
1 2 3 4 5 6 7 8 9
adem@adem:~$ stat number1.txt
  File: number1.txt
  Size: 18        	Blocks: 8          IO Block: 4096   regular file
Device: 803h/2051d	Inode: 5690253     Links: 1
Access: (0664/-rw-rw-r--)  Uid: ( 1000/    adem)   Gid: ( 1000/    adem)
Access: 2023-12-12 15:17:34.022637553 +0100
Modify: 2023-09-19 00:00:00.000000000 +0200
Change: 2023-12-12 15:13:11.027439714 +0100
 Birth: 2023-12-12 11:53:09.330639289 +0100
adem@adem:~$ 

Dikkat edersek ilk cat number1.txt ile icerigi okuyunca Access date degisti ama sonraki cat number1.txt ile icerigi okudugumzda Access tarihi, oz niteligi degismedi
Access bilgisi surekli olarak guncellenmiyor cunku cok dosyayi COK SIK OKUYUP ISLEM YAPTIMGZ ICIN VE BUSEKILDE DE GEREKSIZ YERE DISK UZERINDE READ-WRITE YAPILMAMIS OLUYOR!!!
TABI KI BIR DOSYA ICINDE KI TARIH DEGISINCE ARKA TARAFTA ONCE O DOSYA OKUNUR SONRA WRITE ILE ICINE YAZILACAK VEYA  GUNCELLENEK BILGI DEGISTIRILIR...
Modify-ozniteligi ozelligi ise dosya icerigine yeni bir veri eklendiginde veya cikartildiginda gerceklesiyor!

Dosyamize yeni veri ekleyerek MOdify tarihinin degistigini gorecek olursak 

adem@adem:~$ cat >> number1.txt
10
11
CTRL-D ile kaydederiz
adem@adem:~$ cat number1.txt
1 2 3 4 5 6 7 8 9
10
11
adem@adem:~$ stat number1.txt
  File: number1.txt
  Size: 24        	Blocks: 8          IO Block: 4096   regular file
Device: 803h/2051d	Inode: 5690253     Links: 1
Access: (0664/-rw-rw-r--)  Uid: ( 1000/    adem)   Gid: ( 1000/    adem)
Access: 2023-12-12 15:33:18.862311046 +0100
Modify: 2023-12-12 15:33:11.402215357 +0100
Change: 2023-12-12 15:33:11.402215357 +0100
 Birth: 2023-12-12 11:53:09.330639289 +0100
adem@adem:~$ 
Gordgumz gibi dosya duzenlenme tariihi de degisiyor
Change degisim tarihi de dosyanin oz nitelik bilgisidr cunku dosya da ornegin herhaangi bir sey degistiginde change tarihi de guncellendiginden anlayabiliriz bunu!!!!
BUNU DA GORELIM-CHANGE OZ NITELIGI DOSYA UZERINDE HERHANGI BIR OZELLIK DEGISIRSE O DEGISIM TARIHI ILE DEGISECEKTIR 

DOSYAMIZIN ISMINI DEGISTIRELIM ONCE-MV KOMUTU ILE DEGISTIRIZ DOSYA ISMINI!!! 

adem@adem:~$ mv number1.txt number2.txt
adem@adem:~$ cat number1.txt
adem@adem:~$ cat number2.txt
1 2 3 4 5 6 7 8 9
10
11
adem@adem:~$ stat number2.txt
  File: number2.txt
  Size: 24        	Blocks: 8          IO Block: 4096   regular file
Device: 803h/2051d	Inode: 5690253     Links: 1
Access: (0664/-rw-rw-r--)  Uid: ( 1000/    adem)   Gid: ( 1000/    adem)
Access: 2023-12-12 15:38:57.686613437 +0100
Modify: 2023-12-12 15:33:11.402215357 +0100
Change: 2023-12-12 15:38:40.414395783 +0100
 Birth: 2023-12-12 11:53:09.330639289 +0100
adem@adem:~$ 

Yani ozetle CHANGE bilgisi dosya nin herhangi size,name degisirse CHANGE date degisir
Dosyanin birth-olusturulma tarihi degismez, ancak o dosyayi baska bir doasyaya kopyalayarak o tarihi yeniden olusturmus oluruz
Modify date- dosya icine veri ekleme veya veri silme durumunda degisecektir
Access ise bu dosyaya herhangi bir arac yardmii ile erisildginde ornegin cat number2.txt o zaman degisiyor ama surekli olarak degismiyor, read-write yukunden kurtulmak icin surekli olarak degismiyor.Bu durum tabi degistirilebilir eger istenirse, sistemde konfigurasyon yaparak, dosya ya her erisildiginde date Access date degistirilebilir eger sistem konfigurasyonda ayarlanirsa(onerilmez-spesifik durumlar haric)

ECHO KOMUTU
Kendisine arguman olarak verilen, onune gelen ifadeyi ekrana bastirmak icin kullanilan bir aractir
adem@adem-ThinkPad-13-2nd-Gen:/etc$ echo argument
argument
echo-yankilamak demek yani ona verilen datayi ekrana yankiliyor
echo --help  dersek , ekrana --help yazdiracagi icin biz ya help echo ile ya da man echo ile echo nun tum islevlerini gorebilirz

echo standart input almiyor kesinlikle...Sadece standart verilen argumenti output olarak ekrkana basiyor.. 
Yani biz echo yu <(input-direction ) ile kullanamayiz 
echo < result.txt dersek herhangi bir cikti alamayiz, cunku echo araci standart girdiden gelen verileri kabul etmiyor
Dolayisi ile biz < result.txt i echo aracina yonlendirsek bile bu result.txt dosyasi nin 0 numarali dosya tanimlayicisi echo araci tarafindan islenmiyor

BIR DOSYA ICERISINE ASAGIDAKI SEKILLERDE VERI GIREBILIYORDUK..UNUTMAYALIM!!!!
Bir dosya icerisine echo yu kullanarak veri girebiliyoruz
adem@adem-ThinkPad-13-2nd-Gen:~$ echo a{f..k}a > text2.txt
Ayni sekilde biz bir dosya icerisine veriyi cat ile direk manuel olarak yazarak veri gidip en son CTRL-D yapiyorduk ya da herhangi bir dosya icerigini alip diger dosya ya aktrabiliyorduk, ya da 2-3 veya daha fazla dosyayi birlestirip, y eni bir dosya icine yazabiliyorduk
Mevcut dosya nin devamina da yazabiliyorduk, mevcut icerigin silip de y azabiliyorduk
Yeni bir dosya olusturarak icerik girebiliyorduk
Ya da mevcut dosya yi kopyalabiliyorduk...

Biz  yonlendirme araci olan <(kucuktur-input-redirction) aracini kullanarak bir dosya icerigini

/usr/bin/cat  < isareti  cat aracini temsil eden dosyanin standart girdisi olan 0 numarali dosya tanimlayicisina, sagdaki verilerin yonlendirilmesini sagliyor
adem@adem:~$ cat result.txt
hatasiz
./betik.sh: line 2: asdf: command not found
adem@adem:~$ cat < result.txt //Bu sekilde result.txt nin icerigin cat aracina yonlendirmis oluyorz
hatasiz
./betik.sh: line 2: asdf: command not found


adem@adem-ThinkPad-13-2nd-Gen:~$ echo *
ada ad.txt ae.txt af.txt ag.txt Android android-studio AndroidStudioProjects bd.txt be.txt bf.txt bg.txt cd.txt ce.txt cf.txt cg.txt demo1 demo1-server Desktop Documents Downloads folders.txt geoserver Groceries groceryapp index.html Linux-works Music nativescript-app Pictures projects Public snap Templates text1.txt text2.txt Videos web


Tum dosya ve klasor isimlerini ekrana basacaktir, cunku * isareti bir dosya ismi genisletme karakteri islevi joker karakter olarak taniyor bash-shell * ilk olarak 
Ama asgidaki gibi y aparak , bash-shell e sen * i siradan bir karakter olarak tani da diyebiliriz
adem@adem-ThinkPad-13-2nd-Gen:~$ echo \*
*
adem@adem-ThinkPad-13-2nd-Gen:~$ echo '*'
*
adem@adem-ThinkPad-13-2nd-Gen:~$ echo "*"
*

echo ozellikle bash-programlama yaparken cok kullanilyor $ ile variable tanimlayarak, bash-shell in icinde dahili olarak gelen gomulu olarak gelen pwd gibi komutlarin basina echo $(pwd) koyarak ve bu cikti ya da alip ornegin, bir dosya icerisine vs bastirrarak...yapmak istenilen islevler yapilabiliyor

echo yu nerelerde kullanacagimzi iyice anlamak icin help echo  ya ada man echo yazarak diger islevlerini okuyup kullanabiliriz 
Bu sekilde kullanmaya alismaliuyiz..cunku herseyi ogrenemeyiz kendi basimiza

dem@adem-ThinkPad-13-2nd-Gen:~$ help echo
echo: echo [-neE] [arg ...]
    Write arguments to the standard output.
    
    Display the ARGs, separated by a single space character and followed by a
    newline, on the standard output.
    
	HELP-MAN KOMUTUNDAN YARDIM ALARAK, ARACLARIN DIGER OZELLIKLERINI DE BULUP ONLARDAN FAYDALANABILMEK!!!!!!!
    Options:
      -n	do not append a newline
      -e	enable interpretation of the following backslash escapes
      -E	explicitly suppress interpretation of backslash escapes

	  echo onune girilen argumen in sonuna default olarak yeni satira gecme komutu ekliyor 
	        -n	do not append a newline bu ifade ile diyor ki istersen bunu kaldirabilirsin diyor!!!

	Yani esasinda biz, komutlarin bizim icin ayarlanmis default ozelliklerini kendi ihtiyaclarimza gore fleksibel olarak, kullanabilme imkanina sahibiz..		
	ASAGIDAKI GIBI -n ile kullanirsak artik bir satir bosluk birakmayacaktir
	adem@adem-ThinkPad-13-2nd-Gen:~$ echo hello
	hello
	adem@adem-ThinkPad-13-2nd-Gen:~$ echo -n hello
	helloadem@adem-ThinkPad-13-2nd-Gen:~$ 

	YANI KISACASI DIYOR KI SEN ECHO YU GEL ONUNE echo -n, echo -e, echo -E seklinde yazdiktan sonra argumen i girerek kullanrsan aciklamada ne diyorsa o sekilde sonuc alirsin diyor...ISTE BIZ BUNLARI KULLANMAYI DA OGRENMEMIZ GEREKIYOR KI KENDI IHTIYACLARIMZA GORE ECHO ARACI GIBI ARACLARI SEKILLENDIREBILELIM...BUNU YAPABILMEK COK CIDDI BIR SEVIYE YUKSELTECEKTIR
	-n	do not append a newline
      -e	enable interpretation of the following backslash escapes
      -E	explicitly suppress interpretation of backslash escapes


	  Simdi biz shell-bash kabugu uzerinde calisiyoruz bash-shell in de nasil calisgini neyi nasil taniyabildgini anlamamiz gerekiyor 
	  help echo yazinca gelen bilgi veri sinde biz \n  i oraya bakarak kullanmak istiyoruz ornegin 

	     `echo' interprets the following backslash-escaped characters:
      \a	alert (bell)
      \b	backspace
      \c	suppress further output
      \e	escape character
      \E	escape character
      \f	form feed
      \n	new line
      \r	carriage return
      \t	horizontal tab

	  Peki bu dokumana bakarak nasil kullanacagiz

	  adem@adem-ThinkPad-13-2nd-Gen:~$ echo -e hello \n world
	  hello n world
	  Bu sekilde calismayacaktir goruldugu gibi ama 
	  adem@adem-ThinkPad-13-2nd-Gen:~$ echo -e "This is the first line.\nThis is the second line."
		This is the first line.
		This is the second line.
	Bu sekilde calisacaktir neden boyle oldu CUNKU:	
	Bosluklar tirnak icinde kullanilmadiginda bosluklari echo araci her bir argumenti ayirmak icin kullanarak, her bir bosluktan sonraki ifadeyi bir argumen olarak kabul ediyor.. 
	The issue is that the backslash escape sequence \n is not being interpreted as a newline character because you used a space between hello and \n. In the shell, spaces are used to separate arguments, so the \n is treated as a literal string and not as an escape sequence.
	ONUN TAM OLARAK CALISMASI ICIN ASAGIDAKI GIBI KULLANMALI IDIK
	echo -e "hello\nworld"

	adem@adem-ThinkPad-13-2nd-Gen:~$ echo -e hello\nworld
	hellonworld
	Bu sekilde de \n new line characteri olarak yorumlanmayacaktir bash tarafindan cunku bash default oilarak \ ters-slash i escape-kacis karakteri olarak kullaniyor, neyden default olarak tanidi ozel dosya tanimlayici joker karatkerleri n bash icin ozel anlamlari var ornegin *,?,[] bunmlari siradan karakter olarak tanimasi icin biz \*, ya da \? seklinde kullaniyrduk..Ondan dolayi new line olarak taninmasi icin cift-tirnak icinde yazilmasi gerekiyor

	COMMON-PRACTISE LERI DE BILMEK GEREKIYOR!!!
	So, even though the documentation doesn't explicitly mention double quotes, it's a common practice to use them when working with escape sequences to ensure predictable behavior. This practice is not specific to the echo command but is a general best practice when dealing with command-line arguments that contain special characters or spaces.

	help echo ile gelen echo nun farkli sekillerde kullanim araclari daha cok bash-shlell programlama da ciktilari duzenlemek ve istenilen formatta cikti almak icin kulllaniliyor biz cok fazla kullanmayacagiz

	PEKI ECHO ILE ALT ALTA HER BIR SATIRA FARKLI IFADELER GIRMEK ISTERSEK NASIL YAPARIZ 
	adem@adem-ThinkPad-13-2nd-Gen:~$ echo "deneme
	> test
	> new
	> come
	> hello
	> world"
	deneme
	test
	new
	come
	hello
	world
	adem@adem-ThinkPad-13-2nd-Gen:~$ 

	Bunlari istersek var olan veya yeniden bir dosya olusturarak onun icine de yazabiliriz 
	adem@adem-ThinkPad-13-2nd-Gen:~$ echo "
	> hello
	> world
	> today
	> tomorrow" > newTest.txt
	adem@adem-ThinkPad-13-2nd-Gen:~$ cat newTest.txt

	hello
	world
	today
	tomorrow

	PASTE ARACI
	Paste araci sayesinde dosya iceriklerini yanyana bastirabiliyoruz
	Bu sayede yanyana kiyaslamak istedgimz dosya iceriklerini rahatlikla kiyaslayabiliyoruz!!!ONEMLI!!
	Bu aracin kullanimi cat aracina benziyor ama cat ile yanyana basamiyoruz
	KIYASLAMAK ICIN YANYANA ALMAK ISTERSEK PASTE KOMUTU ILE YAPARIZ

	adem@adem-ThinkPad-13-2nd-Gen:~$ cat text1.txt text2.txt
	aba aca ada aea
	afa aga aha aia aja aka
	adem@adem-ThinkPad-13-2nd-Gen:~$ paste text1.txt text2.txt
	aba aca ada aea	afa aga aha aia aja aka
	adem@adem-ThinkPad-13-2nd-Gen:~$ 

	Yani dosya iceriklerini satir satir karsilastirabiliyoruz!!!!DOGRU ANLAYALIM
	ISTERSEK DAHA FAZLA 3-4 FARKLI DOSYA ICERIGINI SATIR SATIR YANYAN YAZDIRABILIYORUZ

	adem@adem-ThinkPad-13-2nd-Gen:~$ paste text1.txt text2.txt text1.txt text2.txt
	aba aca ada aea	afa aga aha aia aja aka	aba aca ada aea	afa aga aha aia aja aka

	VE ISTERSEK KARSILASTIRIDGIMZ HALINI DE BIR DOSYA ICINE OUTPUT-REDIRECTION > YAPABILIRIZ
	adem@adem-ThinkPad-13-2nd-Gen:~$ paste text1.txt text2.txt text1.txt text2.txt > compare.txt
	adem@adem-ThinkPad-13-2nd-Gen:~$ cat compare.txt
	aba aca ada aea	afa aga aha aia aja aka	aba aca ada aea	afa aga aha aia aja aka

	Aralarina delimeter koyabilirz ornegin - isarti 

	adem@adem-ThinkPad-13-2nd-Gen:~$ paste -d "-" text1.txt text2.txt 
	aba aca ada aea-afa aga aha aia aja aka
	adem@adem-ThinkPad-13-2nd-Gen:~$ paste -d "|" text1.txt text2.txt 
	aba aca ada aea|afa aga aha aia aja aka


	aste -d "-|" yaparsak birden fazla delimeter-ayirici karakter kullanirsak sira ile bosliklara 1 -, sonra | kullanilir 

	Tum icerikleri birlestirmek icinde delimter yerine ayirici yerine cift tirnak icin bosluk birakiriz
Istersek alt alta da karsilastirmak icn alt alta da bastirabiliriz 
adem@adem-ThinkPad-13-2nd-Gen:~$ paste -s text1.txt text2.txt
aba aca ada aea
afa aga aha aia aja aka
adem@adem-ThinkPad-13-2nd-Gen:~$ 

SORT ARACI
Ozellikle duzensiz buyuk veriler uzerinde calisirken verileri duzenlemek icin bu arac kullanilabiliyor
Bir dosya icerigindeki verileri siniflandirip, siralayarak daha duzenli hale getirebiliyoruz

adem@adem:~$ cat test1.txt
b3
ba
B3
3B
a2
A1
a1
2a
1b
3b
adem@adem:~$ sort test1.txt
1b
2a
3b
3B
a1
A1
a2
b3
B3
ba
adem@adem:~$ 

Siralama mantigina gelince
Oncelikle ilk sutun-colondan baslar siralarken 
Ardindan siralam da her sort araci rakamlari harflerden once siralar
rakamlari kucukten buyuge dogru siralar
Ayni olan karakterlerden kucuk karakterler buyuk karakterlerden once geliyor harfleri de a-z ye dogru siraliyor
a1 A1 den once gelir ama A1 de a2 den once gelir cunku 2.sutun da 1 2 den once geliyor
Her bir sutundaki degerleri siraliyor ve bunlara bir agirlik degeri tanimliyor, daha sonra tum verileri agirlik degerine gore siraliyor

adem@adem:~$ cat > number1.txt
10
4
6
2
21
95
3
3
75
8
1
01
40
adem@adem:~$ cat > letter.txt
a
g
F
z
D
g
O 
p
l
k
S
C
E
n
M
h
t
N

number1.txt ve letter.txt yi birlikte siralayacak olursak eger:
adem@adem:~$ sort number1.txt letter.txt

01
1
10
2
21
3
3
4
40
6
75
8
95
a
C
D
E
F
g
g
h
k
l
M
n
N
O
p
S
t
z


Dikkat edelim sort  aracina gore 10 2 den once gelir cunku sort araci 10 un 1.satirda olan rakami olan 1 ile 2 yi kiyaslayarak 10 u 2 den onceya aliyor.Sort araci default oalrak bu sekilde siraliyor ama biz sort aracina ozellikle matematiksel siralama yap diye komutu ayarlarsak o zaman da matematiksel olarak siralayabilir

Siralamayi matematiksel olarak yapmak  istersek eger o zaman da:
Bu tarz durumlari gormek icin, yani bizim bu komutu hangi alternatif lerle kullanabilecegimzi gormek icin asagidaki gibi yardim komutlarindan faydalanmaliyiz.Biz tum komutlari ezberleyemeyiz..ondan dolayi yardim komutlarini herzaman aktif olarak kullanmasini cok iyi bilmeliyiz ve nasil kullanabilecegimizi de cok iyi bilmeliyiz

sort --help
help sort
man sort

 -n, --numeric-sort          compare according to string numerical value

adem@adem:~$ sort -n number1.txt
01
1
2
3
3
4
6
8
10
21
40
75
95
adem@adem:~$ 

sort --help
 -k, --key=KEYDEF          sort via a key; KEYDEF gives location and type
 -k ve kac numarali sutun-colon dikkat e alinmasini istersek onu yazarak sadece o sutunun siralanmasin saglayabiliriz

 adem@adem:~$ cat data1.txt
Ahmet Yaz 33
hasan mert 19
aylin uzun 24
32 mehmet KARA
naz 29 sabah
adem@adem:~$ 

adem@adem:~$ sort -k 3 data1.txt
hasan mert 19
aylin uzun 24
Ahmet Yaz 33
32 mehmet KARA
naz 29 sabah

2.sutundaki karakterlere gore siralama yapar

adem@adem:~$ sort -k 2 data1.txt
naz 29 sabah
32 mehmet KARA
hasan mert 19
aylin uzun 24
Ahmet Yaz 33
adem@adem:~$ 

SORT ARACININ AYRICA BENZERSIZ-UNIQ OLAN CIKTILARI ELDE ETMEK!
YANI OZELLIKLE AYNI ISIMDEN 2 TANE VAR ISE, AYNI DATA BIRDEN FAZLA KEZ KULLANILIYOR VE BIZ HER DEGER DEN 1 TANE UNIQ OLSUN ISTERSEK

adem@adem:~$ cat > names.txt
OZKAN
BERIL GULUS
Evren
yucel
Alisan
Tuba
Tevfik ozgun

SAADET
ELIF NUR
Cagdas
Vedan 
c KORKMAZ
Can Ahmet Polat
Canan Kahraman
Ahmet Can Yazar
ahmet can durmus
can ahmet furkan
Tevfik ozgun
BERIL GULUS
ELIF NUR
adem@adem:~$ sort -u names.txt

ahmet can durmus
Ahmet Can Yazar
Alisan
BERIL GULUS
Cagdas
can ahmet furkan
Can Ahmet Polat
Canan Kahraman
c KORKMAZ
ELIF NUR
Evren
OZKAN
SAADET
Tevfik ozgun
Tuba
Vedan 
yucel
adem@adem:~$ 

SHUF ARACI -YER DEGISTIRME-KATIP KARISTIRMA ANLAMINA GELIR
Kendisine verilmis olan verilerin sirlamaasini rastgelen olacak sekilde degistiriyor

adem@adem:~$ cat > number2.txt
1
2
3
4
5
6
10
14
23
45
51
65
adem@adem:~$ shuf number2.txt
10
65
14
1
6
23
2
51
3
45
4
5
adem@adem:~$ 

Her kullandgimizda rastgele olan siralmayi degistiriyor
Istersek karistirdigmz listeyi yeni bir dosya olusturup icine veya var olan bir dosya icerigin silip ustune yazabilirz ya da var olan dosya iceriginin sonuna da yazabiliriz 

shuf number2.txt > newfile.txt

Dosya icerigini karistirdiktan sonra icerigin belirli satirlari rastgel bize vermesin de soyleyebiliriz

adem@adem:~$ shuf -n 3 number2.txt
2
1
45
adem@adem:~$ 


NL(NUMBERLINE) ARACI
Verilen satirlarin tek tek numarlandirilmasini saglar

adem@adem:~$ cat names.txt
OZKAN
BERIL GULUS
Evren
yucel
Alisan
Tuba
Tevfik ozgun

SAADET
ELIF NUR
Cagdas
Vedan 
c KORKMAZ
Can Ahmet Polat
Canan Kahraman
Ahmet Can Yazar
ahmet can durmus
can ahmet furkan
Tevfik ozgun
BERIL GULUS
ELIF NUR
adem@adem:~$ nl names.txt
     1	OZKAN
     2	BERIL GULUS
     3	Evren
     4	yucel
     5	Alisan
     6	Tuba
     7	Tevfik ozgun
       
     8	SAADET
     9	ELIF NUR
    10	Cagdas
    11	Vedan 
    12	c KORKMAZ
    13	Can Ahmet Polat
    14	Canan Kahraman
    15	Ahmet Can Yazar
    16	ahmet can durmus
    17	can ahmet furkan
    18	Tevfik ozgun
    19	BERIL GULUS
    20	ELIF NUR
adem@adem:~$ 

Birden fazla dosya da verebiliyoruz

adem@adem:~$ nl number1.txt letter.txt

Biz nl aracinin yaptigi isin aynisini cat -n names.txt ile de  yapabiliyoruz ama kullanim olarak bu islev icin nl araci daha cok tercih ediliyor  

adem@adem:~$ cat -n names.txt
     1	OZKAN
     2	BERIL GULUS
     3	Evren
     4	yucel
     5	Alisan
     6	Tuba
     7	Tevfik ozgun
     8	
     9	SAADET
    10	ELIF NUR
    11	Cagdas
    12	Vedan 
    13	c KORKMAZ
    14	Can Ahmet Polat
    15	Canan Kahraman
    16	Ahmet Can Yazar
    17	ahmet can durmus
    18	can ahmet furkan
    19	Tevfik ozgun
    20	BERIL GULUS
    21	ELIF NUR
adem@adem:~$ 

WC(WORDCOUNT) ARACI

Arguman olarak vermis oldugumz dosya icindeki kelimeleri sayabilmemizi sagliyor,sadece kelimeleri degil, karakterleri, satirlari ve bytler i da sayabiliyoruz

adem@adem:~$ wc names.txt
 21  36 211 names.txt
21:KAC SATIR
36:KAC KELIME
211:KAC BYTE(kac character)

wc -c names.txt - sadece charcater(byte) uzunlugunu verir
wc -w names.txt - sadece kelime uzunlugunu verir
wc -l names.txt - sadece satir uzunlugunu verir
wc -lw names.txt  once line sonra word uzunlugunu verir
wc -wcl names.txt once word, sonra char , sonra da line uzunlugunu verir

METINLERI FILTRELEMEK

PIPE MEKANIZMASI

Linux de her sey bir dosya, her komut bir dosyadan ibaret oldugundan dolayi , sistemimizi biz linux de komut satiri uzerinden yonettgimz icin bizim isimiz gucumuz surekli olarak byte aksini yani data alisverisini dosyalar arasi data aktarim data alisveris, data search, data sort vs surekli olarak bu sekilde dosyalar arasi data giris cikislari ile ugrasmak olacaktir

Birden fazla araci birbirine baglayarak calistirabilmemizi saglayan pipe mekanizmasina da bakalim!!!!

Yonlendirme islemlerini ogrenmistik
Yonlendirme islevi ile bir aracin ciktilarini bir dosyaya output-redireacition(>) ile 
cat text1.txt > text2.txt veya manuel veri girisi yapip ctrl-d ile kaydeip onu bir dosyaya aktarabiliyorduk 
Tam tersi de bir dosya ciktilarini bir araca girdi olark aktarabiliiyorduk

ASAGIDAKI ORNEK GIBI!!!yapabilmesi
cat araci ile dosya icerigini goruntuleyebiliyoruz normalde 
adem@adem:~$ cat hatasiz.txt
hatasiz
Biz  yonlendirme araci olan <(kucuktur-input-redirction) aracini kullanarak bir dosya icerigini

/usr/bin/cat  < isareti  cat aracini temsil eden dosyanin standart girdisi olan 0 numarali dosya tanimlayicisina, sagdaki verilerin yonlendirilmesini sagliyor
adem@adem:~$ cat result.txt
hatasiz
./betik.sh: line 2: asdf: command not found
adem@adem:~$ cat < result.txt //Bu sekilde result.txt nin icerigin cat aracina yonlendirmis oluyorz

PIPE YAPISINA NEDEN IHTIYAC DUYARIZ
1-Hizli calismasi
2-Ayni anda paralel bir sekilde islemler arasinda veri aktarimi yapabilmesi

Pipe mekanizmasini komut satiri uzerinde temsil edebilmek icin | isaretini kullaniriz

Ornek:
komut1 | komut2 
Burda komut1 aracinin ciktilari komut2 aracina aktariliyor olacak, uretilme sirasina gore aninda komut2 aracina baglanip aktariliyor olacak
Bir de bu aktarim yalnizca tek yonlu oluyor, yani her zaman soldaki komut1 in ciktilari komut2 ye aktarilir, komut2 den herhangi bir cikti komut1 e aktarilmaz

ORNEK:
Biz 3 farkli islem yapmak istiyoruz 
1-/etc klasoru altindaki sonu .sh ile biten betik dosyalarine erismek
2-sonu .sh ile biten bu dosyalari alfa-numerik olarak siralamak
3-alfa numerik olarak siralanan bu dosyalari numarlandirmak istiyoruz

Normalde biz her bir islemi ayri ayri yapip her seferinde yaptgimiz islemi bir dosya icine yazarak nihayttinde tum istekleri gerceklestiirp sonucu bir dosyay yazdirabiliriz ama bunu pipe araci ile tek satirda bir kerede cok kolay birs sekildea yapabilecegiz

1- /etc klasoru altindaki sonu .sh ile biten betik dosyalarine erismek:
adem@adem:/$ find /etc/ -name "*.sh" -type f

2-sonu .sh ile biten bu dosyalari alfa-numerik olarak siralamak
sort
3-alfa numerik olarak siralanan bu dosyalari numarlandirmak 
nl


find /etc/ -name "*.sh" -type f 

/etc/ altindaki sonu .sh ile biten, sadece dosyalari, folder lari degil type-file olacak, ve dikkat edelim persmission denied  yani erisim yetkimiz olmadigindan bazi dosyalar sonucu error olmus oluyor, hatali yani aramayi yapamiyor erisim sorunundan dolayi, bazi satir lar permission denied geliyor. Bu satirlarin gelmemesi icn de sonuna  2> /dev/null   dedgimizde, 2 numarali sonuc error sonuclari idi, error sonuclarini bosluga gonder, kaldir dedgimzde artik boyle bir sonuc da gormeyiz..!!!!HARIKA BESPTPRACTISE!!!!

2 numarali dosya tanimlayicisi uzerinden yalnizca hatali olanlar yani permission denied olanlari, /dev/null a, gondererek kaldir
find /etc/ -name "*.sh" -type f 2> /dev/null

BU SEKILDE 3 FARKLI ISLEMI TEK SATIRDA  YAPABILIYORUZ..PIPE ARACI SAYESINDE!!HARIKA BESTPRACTISE!!
adem@adem:/$ find /etc/ -name "*.sh" -type f 2> /dev/null | sort | nl
| isareti pipe aracidir aslinda veya pipe isaretidir


find /etc/ -name "*.sh" -type f 2> /dev/null | sort | nl

find /etc/ -name "*.sh" -type f 2> /dev/null
1 numarali hatsiz ciktilar sort aracinin standart girdisine aktariliyor(0 standart dosya girdisi)
2 numarali hatali ciktilar ise /dev/null a gonderiliyor

sort araci da yine
1 numarali hatasiz ciktilar nl aracinini standar girdisine aktariliyor(nl nin 0 dosya girdisine aktraliyor)
2 numarali hatali ciktilar ise /dev/tty

nl aracinda ise 
1 hatasiz ciktilar /dev/tty
2 hatali ciktilar /dev/tty

/dev/tty console ekranina sonucu basan, aracin dosyalaridir
/dev/tty dosyasi console umuzu temsil ediyor!!!

find-sort-nl araclari ayni anda paralel olarak calisiyor
Bahsi gecen tum islemler ayni anda yapiliyor
Yani biz komutu girdigmz de bu uc arac ta ayni anda ayaga kalkiyor
Araclar ayni anda calisir ve paralel olark birbirlerine veri iletimi yaparlar
Dosyalar uzerinde read-write yapilmadiigi ve veri aktarimi RAM uzerinden paralele olarak gerceklestigi iicn islemler cok daha hizli oluyor

PIPE MEKANIZMA ILE SISTEMIN CALISMASI MANTIGI
BURDA ANLAMAMIZ GEREKEN NOKTA SUDUR KI FIND ARACI ORNEGIN 1 TANE DATA BULDUGU ANDA, O DATA YI SORT ARACINA GONDERIYOR HEPSINI TEK TEK BULMAYI BEKLEMIYOR SORT ARACI DA CALISMAK ICIN FIND ARACININ HEPSINI BULMASINI BEKLEMIYOR..YANI HEPSI AYNI ANDA PARALEL BIR SEKILDE COK HIZLI BIR SEKILDE CALISIYORLAR
BIRDE PIPE ARACINDA COK H IZLI CUNKU HERHANGI BIR OKUMA YAZMA ISLEMI GERCEKLESMIYOR,RAM UZERINDE GERCEKLESIYOR

PIPE ARACI ILE, COK PERFORMANSLI NETICLERE ALIYORUZ ANLIK OLARAK ALMAMIZ GEREKEN VERILERDE COK YUKSEK SEVIYE PERFORMANS ALIYORUZ PIPE ARACI SAYESINDE..PIPELINE..
PIPE MEKANZMASI SAYESINDE PEKCOK FARKLI ISLEVI OLAN ARACLARI COK KARMASIK VE FARKLI YAPILARDA KULLANMAK YERINE FARKLI ARACLARIIN ANA ISLEVLERI ILE KULLANARAK, COK DAHA HIZLI SONUCLAR ELDE EDEBILIRIZ

BU ISLEMIN AYNISINI BIZ...SU SEKILDE DE YAPABILIYORUZ ARAYA ;SEMICOLON-NOKTALI VIRGUL KOYARAK DA HER BIR ARACI YANYANA AYRI AYRI CALISTIRABILIRIZ
adem@adem:~$ find /etc/ -name "*.sh" -type f 2>/dev/null >test12.txt; sort < test12.txt > test13.txt; nl<test13.txt

BURAYA DIKKAT EDELIM.. SORT ARACI ARGUMEN OLARAK ALDIGI DOSYAYI DEFUALT OLARAK INPUT-OLARAK KABUL EDER AMA TABI KI BIZ AYRI BIR SEKILDE <-INPUT REDIRECTION I KULLANARAK TEST12.TXT NIN ICERIGINI INPUT OLARAK SORT ARACINA REDIRECT EDERSEK BU DAHA DOGRU BIR MANTIK OLACAKTIR...BU IKI FARKI AYIRT EDELIM!!!

adem@adem:~$ sort test12.txt > test20.txt
adem@adem:~$ sort < test12.txt > test21.txt


ARADA SEMICOLON-NOKTALI VIRGUL ILE ISLEMLERI ARD ARDA YAPARKEN
Burda arada noktali virgul oldugu icin, once find aracinin isi bitiyor, sonra sort aracinin isi bitiyor ardindan da nl araci calisyor yani birbirlerini bekliyorlarburda, bu pipe araci gibi calismiyor. Bir de biz burda tabi ki disk uzerinde read-writeislemerli yapiyoruz dosyalara yazarken ve dosyalardan okurken, dikkat edelim sort < test12.txt > test13.txt; burda sort ile test12.txt yi okuyoruz input olarak aliyoruz sonra da test13.txt ye cikti olarak output olarak veriyoruz..

HATA VE COZUM!!!!

adem@adem:~$ find /etc/ -name "*.sh" -type f 2>/dev/null > test12.txt
adem@adem:~$ cat test12.txt
/etc/init.d/console-setup.sh
/etc/init.d/hwclock.sh
/etc/init.d/keyboard-setup.sh
/etc/libreoffice/soffice.sh
/etc/wpa_supplicant/ifupdown.sh
/etc/wpa_supplicant/functions.sh
/etc/wpa_supplicant/action_wpa.sh
/etc/console-setup/cached_setup_keyboard.sh
/etc/console-setup/cached_setup_font.sh
/etc/console-setup/cached_setup_terminal.sh
/etc/profile.d/cedilla-portuguese.sh
/etc/profile.d/vte-2.91.sh
/etc/profile.d/bash_completion.sh
/etc/profile.d/01-locale-fix.sh
/etc/profile.d/debuginfod.sh
/etc/profile.d/im-config_wayland.sh
/etc/profile.d/apps-bin-path.sh
/etc/profile.d/xdg_dirs_desktop_session.sh
/etc/profile.d/gnome-session_gnomerc.sh
/etc/acpi/asus-keyboard-backlight.sh
/etc/acpi/ibm-wireless.sh
/etc/acpi/undock.sh
/etc/acpi/tosh-wireless.sh
/etc/acpi/asus-wireless.sh
/etc/gdm3/config-error-dialog.sh
adem@adem:~$ sort test12.txt
/etc/acpi/asus-keyboard-backlight.sh
/etc/acpi/asus-wireless.sh
/etc/acpi/ibm-wireless.sh
/etc/acpi/tosh-wireless.sh
/etc/acpi/undock.sh
/etc/console-setup/cached_setup_font.sh
/etc/console-setup/cached_setup_keyboard.sh
/etc/console-setup/cached_setup_terminal.sh
/etc/gdm3/config-error-dialog.sh
/etc/init.d/console-setup.sh
/etc/init.d/hwclock.sh
/etc/init.d/keyboard-setup.sh
/etc/libreoffice/soffice.sh
/etc/profile.d/01-locale-fix.sh
/etc/profile.d/apps-bin-path.sh
/etc/profile.d/bash_completion.sh
/etc/profile.d/cedilla-portuguese.sh
/etc/profile.d/debuginfod.sh
/etc/profile.d/gnome-session_gnomerc.sh
/etc/profile.d/im-config_wayland.sh
/etc/profile.d/vte-2.91.sh
/etc/profile.d/xdg_dirs_desktop_session.sh
/etc/wpa_supplicant/action_wpa.sh
/etc/wpa_supplicant/functions.sh
/etc/wpa_supplicant/ifupdown.sh

HATA-COZUM
adem@adem:~$ sort test12.txt>test12.txt
adem@adem:~$ cat test12.txt
SONUC BOS GELECEKTIR SEBEBI-CUNKU HEM INPUT OLARAK HEM DE OUTPUT OLARAK AYNI DOSYA KULLANILDIGI ICIN..DOSYA OKUNDUKTAN SONRA DOSYA BOSALTILIYOR...VE BOS BIR DOSYA SONUCU GELIYOR
As a result, at step 3, when the shell truncates the file, it effectively erases its contents. When you subsequently write the sorted result to the file in step 4, you're overwriting an empty file, not appending to the original content.

That's why you should use a different output file or a temporary file when you want to sort the content of a file and save it back to the same file. 
COZUM ISE ASAGIDAKI GIBI FARKLI BIR DOSYAYYA AKTARMALIYIZ OUTUPUT U O ZAMAN ALABILIYORUZ SONUCU
adem@adem:~$ sort test12.txt>test15.txt
adem@adem:~$ cat test15.txt

dem@adem:~$ cat test15.txt
/etc/acpi/asus-keyboard-backlight.sh
/etc/acpi/asus-wireless.sh
/etc/acpi/ibm-wireless.sh
/etc/acpi/tosh-wireless.sh
/etc/acpi/undock.sh
/etc/console-setup/cached_setup_font.sh
/etc/console-setup/cached_setup_keyboard.sh
/etc/console-setup/cached_setup_terminal.sh
/etc/gdm3/config-error-dialog.sh
/etc/init.d/console-setup.sh
/etc/init.d/hwclock.sh
/etc/init.d/keyboard-setup.sh
/etc/libreoffice/soffice.sh
/etc/profile.d/01-locale-fix.sh
/etc/profile.d/apps-bin-path.sh
/etc/profile.d/bash_completion.sh
/etc/profile.d/cedilla-portuguese.sh
/etc/profile.d/debuginfod.sh
/etc/profile.d/gnome-session_gnomerc.sh
/etc/profile.d/im-config_wayland.sh
/etc/profile.d/vte-2.91.sh
/etc/profile.d/xdg_dirs_desktop_session.sh
/etc/wpa_supplicant/action_wpa.sh
/etc/wpa_supplicant/functions.sh
/etc/wpa_supplicant/ifupdown.sh

adem@adem:~$ nl test15.txt
     1	/etc/acpi/asus-keyboard-backlight.sh
     2	/etc/acpi/asus-wireless.sh
     3	/etc/acpi/ibm-wireless.sh
     4	/etc/acpi/tosh-wireless.sh
     5	/etc/acpi/undock.sh
     6	/etc/console-setup/cached_setup_font.sh
     7	/etc/console-setup/cached_setup_keyboard.sh
     8	/etc/console-setup/cached_setup_terminal.sh
     9	/etc/gdm3/config-error-dialog.sh
    10	/etc/init.d/console-setup.sh
    11	/etc/init.d/hwclock.sh
    12	/etc/init.d/keyboard-setup.sh
    13	/etc/libreoffice/soffice.sh
    14	/etc/profile.d/01-locale-fix.sh
    15	/etc/profile.d/apps-bin-path.sh
    16	/etc/profile.d/bash_completion.sh
    17	/etc/profile.d/cedilla-portuguese.sh
    18	/etc/profile.d/debuginfod.sh
    19	/etc/profile.d/gnome-session_gnomerc.sh
    20	/etc/profile.d/im-config_wayland.sh
    21	/etc/profile.d/vte-2.91.sh
    22	/etc/profile.d/xdg_dirs_desktop_session.sh
    23	/etc/wpa_supplicant/action_wpa.sh
    24	/etc/wpa_supplicant/functions.sh
    25	/etc/wpa_supplicant/ifupdown.sh
adem@adem:~$ 


XARGS
Linux uzerindeki tum araclar standart girdi den 0 numarali dosya(input), veri kabul etmek zorunda degil...(echo gibi) kimi araclar yalnizca argumen alarak calisiyor, kendisine verilmis olan ilgili argumenlari kullaniyor.
Dolayisi ile bizim pipe mekanizmasi ile bu sekilde standart input- almayan, onun yerine sadece kendine verilen arugmentleri okuyan araclar i kullanabilmemiz icin ekstra bir mekanizmaya ihtiyacimz var..
Tam olarak bu sorunu cozen aracimizin ismi xargs isimli aractir
Bu aracimz standart girdiden okumus oldugu verileri, kendisinden sonraki komutun argumeni olarak iletebiliyor. Bu sayede standart girdiden-inputtan(0 no lu dosya) veri kabul etmeyen araclari(echo gibi) biz tipki sanki manuel oalrak elimizle o araca argumenler girmisiz gibi calistirabiliyoruz.
xargs(extended arguments-genisletilmis argumanlar)

echo ile dosya isimlermizi string icinde yazip readme1.txt dosyasina aktarip sonra da cat ile bu dosya isimlerini okuyiup touch araci ile bu dosya isimlerinin her birisi icin birer dosya olusturmayi planliyoruz..AMA ASAGIDAKI GIBI BIR PROBLEMLE KARSILASIYORUZ!!!!

adem@adem:~$ echo "myfile1 myfile2 myfile3" > readme1.txt
adem@adem:~$ cat readme1.txt
myfile1 myfile2 myfile3
adem@adem:~$ cat readme1.txt | touch
touch: missing file operand
Try 'touch --help' for more information.
adem@adem:~$ 

PROBLEM-CUNKU TOUCH ARACI STANDART VERI GIRSINDEN-0 NUMARALI INPUT VERI GIRSIJNDEN VERI OKUMYAN BIR ARACTIR..
YALNIZCA ARGUMAN ALARAK CALISAN BIR ARACTIR!!!!
ISTE BURDA O ZAMAN BIZ XARGS ARACINI KULLANARAK BU ISIN USTESINDEN GELECEGIZ!!!!!
XARGS SANKI BIZ TOUCH A ARGUMEN GIRMISIZ GIBI, ONCE GIDIP CAT ARACINDAN VERILERI OKUYUP TOUCH ARACINA ARGUMEN OLARAK AKTARACAK!!!!


adem@adem:~$ cat readme1.txt | touch
touch: missing file operand
Try 'touch --help' for more information.
HATA ALDIK(2 NUMARALI HATA DOSYASI OKUDU)

adem@adem:~$ cat readme1.txt | xargs touch
HATA ALMADIK CUNKU XARGS ILE KULLANDIK!!!-BESTPRACTISE
adem@adem:~$ cat readme1.txt
myfile1 myfile2 myfile3
adem@adem:~$ ls
Android                                    names.txt
android-studio                             network-manager_1.36.4-2ubuntu1_amd64.deb
AndroidStudioProjects                      newtext.txt
betik2copy.sh                              nohup.out
betik2.sh                                  number1.txt
betik.sh                                   number2.txt
commandlinetools-linux-6609375_latest.zip  Pictures
cottageservice.sql                         Public
data1.txt                                  readme1.txt
Desktop                                    result2.txt
Documents                                  result.txt
Downloads                                  snap
geoserver                                  Templates
google-chrome-stable_current_amd64.deb     test
hatali.txt                                 test12.txt
hatasiz.txt                                test13.txt
ini                                        test15.txt
letter.txt                                 test1.txt
logs                                       test20.txt
move2test2.sh                              test21.txt
Music                                      test2.txt
myfile1                                    text12.txt
myfile2                                    utv
myfile3                                    Videos
adem@adem:~$ 


adem@adem:~$ cat readme1.txt | xargs touch
cat readme1.txt yazildiginda cat aradinin standart girdisi(0 file) cat aracina iletiliyor, cat aracina standart output dosyasi olan 1 nujmarali dosya uzerinden, pipe bagli oldugu icin bu verileri pipe a iletiyor, pipe da xargs aracinin standart girsi olan 0 dosyasina bu verileri yonlendiiryor sonra xargs in standart veri output cikisi olan 1 numarali dosyasi uzerinden de bu cikti, touch a argument olarak veriliyor, touch araci da sanki biz argumanlari elle girmisiz gibi calistirildi, ve neticede dosyalarimiz olusturulmus oldu..

TEE ARACI
Pipe yapisinda verilerimz yalnizca soldan saga tek yonlu sekilde aktariliyordu. Eger biz hem bir sonrak isleme hem de bir dosyaya ayni verilerin yazilmasini istiyorsak, bu islem icin tee isimli araci kullaniriz. Cunku pipe mekanizmasi tek basina bu islemi desteklemiyor.....Pipeline aracini bir boru gibi dusunursek burdak tee araci da bizim gercek hayatta bildgimz te boru gorevi goruyor. Ilk islemden almis oldugu ciktiyi okuyor, istenilen dosyaya ve ayni zamanda bir sonraki islemin standart girdisine yonlendiriyor


adem@adem:~$ ls / head
ls: cannot access 'head': No such file or directory
/:
bin   cdrom  etc   lib    lib64   lost+found  mnt  proc  run   snap  swapfile  tmp  var
boot  dev    home  lib32  libx32  media       opt  root  sbin  srv   sys       usr
adem@adem:~$ ls / | head
bin
boot
cdrom
dev
etc
home
lib
lib32
lib64
libx32
adem@adem:~$ 

head araci bildgiimz gibi en ustten 10 veriyi getirir, veya 10 satir i getirir.Biz pipe yardimi ile ls in getirdigi tum verilerden sadece 10 tanesin getirmesini soylemis olduk bu sekilde..
Fakat burda bu ciktilar sadece standart ciktya aktarildi yani head in standart ciktisina aktarildi

Her bir aracin, her bir komutun 0-standart input- 1- standart-hatasiz-output 2-hatali-output olmak uzere 3 tane dosyasi vardir altinda ama tabi standart input her arac ta olmayabiliyor, touch, echo aracinda olmadigi gibi

adem@adem:~$ ls / | tee mylist.txt | head

Bu sayede listeledigmz ls / root altindaki dosya isimlerini tee araci sayesinde once bir mylist.txt dosyasina kaydedip sonra da head in standart inputuna(0) aktardik ve head da standart hatasi z output(1) dosyasi ile, tum listeden 10 tanesini siraladi, ekarna basti

adem@adem:~$ cat mylist.txt
bin
boot
cdrom
dev
etc
home
lib
lib32
lib64
libx32
lost+found
media
mnt
opt
proc
root
run
sbin
snap
srv
swapfile
sys
tmp
usr
var
adem@adem:~$ 

tee araci standart input dosyasi(0) uzerinden aldigi input verisini hem ilgili dosyaya yaziyor hem de 1 numarali standart hatasiz outputu da  head aracinin standart inputuna(0) aktariyor. head araci da 1-standart hatasiz cikti olarak , console u temsil eden dosya olan dev/tty dosyasina yani console u temsil eden dosyaya bu ciktiyi gonderiyor,


adem@adem:~$ ls / | tee mylist.txt | head

adem@adem:~$ ls /
Bu islemde ls aracinin standarrt input dosyasi olan 0'a input verisni /dev/tty dosyasindan yani console u temsil eden dosya nin 1' outuput dosyasindan aldi ve kendi yani ls aracinin hatasiz output ciktisini pipe mekanizmasi sayesinde tee aracina aktardi. Tee araci da bu aldigi ciktiyi(standart input dosya-0) sina aliyor ve bunu 1 hatasiz output ile redirection output > ile mylist.txt dosyasina yazdirdi..Bunu yaparken ayni zamanda elindeki tum verileri 1 hatasiz outuput u da head aracinin standart input dosyasi olan 0 a aktardi. Bu sayede head araci da kendi standart input(0) dosaysina aldigi tum verileri komut satirina yanni console a kendi hatasiz outputu ile console u tamsil eden /dev/tty ye aktarark console ekranina basmak zorunda kalmamiz oldu.

adem@adem:~$ ls / | tee mylist2.txt | tail

adem@adem:~$ ls / | head | tee mylist2.txt
Herhangi bir yere ekstra yonlendirme yapmadgimz icin standart ciktilari da , console umuzu temsil eden  /dev/tty dosyalarina gondermis oluyor

 ls / | head | tee mylist2.txt
 ls-0  / bunun sonucu root altindaki dosya isimlerini console dan /dev/tty den standart inputuna aliyor(0)
 Sonra da hatasiz output dosyasindan(1) sonucu pipe a iletiyor
sonra pipe araciligi ile head standart input 0-file i ile outputu aliyor ve head hatasiz output-1 dosyasindan tee nin standart inputuna-0 aktariyor. Tee araci da hem dosyaya yaziyor hem de standart ciktisi olan hatasiz ciktisi olan 1 dosyasindan, consolle u temsil eden /dev/tty nin standart input-0 in a yonlendirerek , console a da basilmasi saglaniyor

Birden fazla dosyaya da yazabilir bu sekilde...

ls / | head | tee mylist2.txt mylist3.txt mylist4.txt


TEE ARACININ UZERINE EKLEME OZELLIGI
Normalde biz cat uzerinden manuel girilen verileri ya da bir dosya icerigini baska bir dosyaya yazdirmak istersek, o zaman > output redirection ile yonlendirdgimz dosya eger mevcut oyle bir dosya var ise icerigini silip uzerine yaziyordu ama sonuna eklemesi icin ise biz >> seklinde kullanirdik output redirection operatorunu
Tee araci da buna benzer sekilde eger birsey belirtmezsek direk belirtilen dosyanin icerigini silip uzerine  yazar


UZERINE  YAZAR
 ls / | head | tee mylist2.txt
 
 DOSYA ICERIGNIN SONUNA EKLER tee -a(append) 
 ls / | head | tee -a mylist2.txt


 adem@adem:~$ echo "my new data1" | tee -a testfile.txt
my new data1
adem@adem:~$ echo "my new data1" | tee -a testfile1.txt
my new data1
adem@adem:~$ echo "my new data1" | tee -a testfile1.txt
my new data1
adem@adem:~$ cat testfile1.txt
my new data1
my new data1
my new data1
adem@adem:~$ 

tee aracinin kullanildigi baska bir alan: YAZMA YETKIMIZ OLMAYAN DOSYALARA SUDO YARDIMI ILE VERI YAZABILMEK!!
adem@adem-ThinkPad-13-2nd-Gen:~$ sudo echo "new data" >> /etc/apt/sources.list
bash: /etc/apt/sources.list: Permission denied
sudo komutunu kullanmamiza ragmen, persmission denied hatasi aliyoruz

COOK ONEMLI BASH KABUGU UZERINDE ISLEM GERCEKLESTIRIRKEN >> YONLENDIRME OPERATORLERINE SUDO ILE YETKI VEREMIYORUZ
DOLAYISI ILE DE PERMISSION DENIED HATASI ALIYORUZ NORMAL OLARAK. ISTE BU NOKTA DA TEE ARACINI KULLANABILIYORUZ
BU SEKILDE KOMUT SATIRI UZERINDEN output-redirection ile > veya >> ile veri ekledigmz durumlarda bu sekilde yazma yetkisini sudo ile yapabilmek icin tee araci kullanilir
Dosya icerigini tahrip etmemek icin "####" ekleriz cunku yorum satiri olarak taniyacaktir # karkteri
 echo "####" |sudo tee -a /etc/apt/sources.list

 echo "####" ile sudo tee -a /etc/apt/sources.list komutu pipe ile ayrilmis komutlar yani aslinda ayri islemlerdir..Ondan dolayi sudo nun tee den once mutlaka kullanilmasi gerekir, cunku sudo echo dan once kullanilmis olsa da o,  tee komutuna etki etmez ondan dolayi tee komutundan once ozellikle kullanmak gerekiyor
 Bu sekilde artik bu datayi dosya nin sonuna ekleyebiliriz

 GREP ARACI(GLOBAL REGULAR EXPRESSION PRINT)GREP
 KISACASI REGEX SAYESINDE BIZIM ONA VERDIGMZ DOSYA ICERIKLERINI FILTRELEME KONUSUNDA BIZE YARDIMCI OLUYOR

 Bir dosya icinde aradgmz bir ifade nin bulundugu satirlari gorebiliriz 

 adem@adem-ThinkPad-13-2nd-Gen:~$ grep "false" /etc/passwd
 adem@adem-ThinkPad-13-2nd-Gen:~$ grep "false" /etc/passwd
tss:x:106:112:TPM software stack,,,:/var/lib/tpm:/bin/false
whoopsie:x:117:124::/nonexistent:/bin/false
speech-dispatcher:x:119:29:Speech Dispatcher,,,:/run/speech-dispatcher:/bin/false
gnome-initial-setup:x:126:65534::/run/gnome-initial-setup/:/bin/false
hplip:x:127:7:HPLIP system user,,,:/run/hplip:/bin/false
gdm:x:128:134:Gnome Display Manager:/var/lib/gdm3:/bin/false
mysql:x:130:139:MySQL Server,,,:/nonexistent:/bin/false
adem@adem-ThinkPad-13-2nd-Gen:~$ 

BUNU ANLAYALIM....TAM OLARAK!!!!!!!!!!!!
cat /etc/passwd yaptigimzda cat araci passwd dosyasinini icerigini input dosyasi-0 alacak ve standart ciktisi olan hatasiz cikti dosyasi 1 numarali dosyaya yollayacak , eger biz bu ciktiyi bir yere yonlendirmez sek  > veya >> file2.txt gibi bir dosyaya yonlendirmezsek standart ciktisini default olarak console a gonderecek , console u temsil eden dosya olan dev/tty ye gonderiyor ve de ekrana basilmis oluyor!!

AMA BIZ PIPE ARACI ILE DEFAULT HALINE BIRAKMAK YERINE GREP ARACINA GONDEREREK GREP ARACI ILE YAZDGIMZ "FALSE" IFADESNIN ARANMASINI SAGLAYACAGIZ

adem@adem-ThinkPad-13-2nd-Gen:~$ cat /etc/passwd | grep "false"
tss:x:106:112:TPM software stack,,,:/var/lib/tpm:/bin/false
whoopsie:x:117:124::/nonexistent:/bin/false
speech-dispatcher:x:119:29:Speech Dispatcher,,,:/run/speech-dispatcher:/bin/false
gnome-initial-setup:x:126:65534::/run/gnome-initial-setup/:/bin/false
hplip:x:127:7:HPLIP system user,,,:/run/hplip:/bin/false
gdm:x:128:134:Gnome Display Manager:/var/lib/gdm3:/bin/false
mysql:x:130:139:MySQL Server,,,:/nonexistent:/bin/false
adem@adem-ThinkPad-13-2nd-Gen:~$ 

GREP ARACI ILE YUKARDAKI MANTIKTA BIR IFADENIN, BIR DOSYA ICERIGINDE ARANMASI MANTIGI IDI

GREP ILE TERS ARAMA | HARIC TUTMA 

       -v, --invert-match
              Invert the sense of matching, to select non-matching lines.

/etc/passwd dosyasi icerisinde "false" ifadesinin gecmedigi icerigi getir demis oluyoruz			  
grep -v "false" /etc/passwd 

BIRDEN FAZLA DOSYAYI DA ARGUMEN OLARAK VEREBILIRZ

grep "root" /etc/passwd  /etc/group


DIZINLERDE OZ YINELEMELI ARASTIRMA YAPMAK
Biz bir dizin adresi verip, o dizin alitndaki tum dizin ve dosyalara bakip aradigmzi ifade geciyor mu diye bakacaktir

grep -r(oz yineleme yapsin diye) bu kullanilmalidir

/etc/apparmor.d/abstractions/bash:  # run out of /etc/bash.bashrc
grep: /etc/cups/ssl: Permission denied
grep: /etc/cups/subscriptions.conf.O: Permission denied
grep: /etc/cups/subscriptions.conf: Permission denied
grep: /etc/shadow-: Permission denied
grep: /etc/ufw/user6.rules: Permission denied
grep: /etc/ufw/after.init: Permission denied
grep: /etc/ufw/before6.rules: Permission denied
grep: /etc/ufw/after.rules: Permission denied
grep: /etc/ufw/user.rules: Permission denied
grep: /etc/ufw/after6.rules: Permission denied
grep: /etc/ufw/before.init: Permission denied
grep: /etc/ufw/before.rules: Permission denied
grep: /etc/brlapi.key: Permission denied
grep: /etc/gshadow: Permission denied
grep: /etc/.pwd.lock: Permission denied
grep: /etc/postgresql/14/main/pg_hba.conf: Permission denied
grep: /etc/postgresql/14/main/pg_ident.conf: Permission denied
grep: /etc/NetworkManager/system-connections/Nixus.nmconnection: Permission denied
grep: /etc/NetworkManager/system-connections/AndroidAPE.nmconnection: Permission denied
grep: /etc/profile.d/debuginfod.csh: Permission denied
grep: /etc/profile.d/debuginfod.sh: Permission denied
/etc/bash.bashrc:# System-wide .bash

BIRCOK PERMISSION DENIED SONUCU GELDI HATALI SONUC..CUNKU ARAMA YAPAMADI!!!
PEKI BEN PERMISSION DENIED SONUCLARINI YANI HATALI CIKTI SONUCLARIN NASIL KALDIRABILIRIM

BESTPRACTISE- HATALI CIKTILARI KALDIRMAK!!!!!!!!!

grep -r "bashrc" /etc/ 2> /dev/null
HATALI CIKTILAR KALDIRMAK ICIN DIZIN YOLU SONUNA  - 2> /dev/null EKLERSEK 2 NUMARA-HATALI CIKTILARI BOSLUGA GONDER KALDIR DEMIS OLUYORZ
-r sayesinde dizin altindaki tum dosyalar oz yinelemeli bir sekilde aranacaktir...!!!

adem@adem-ThinkPad-13-2nd-Gen:~$ grep -r "bashrc" /etc/ 2> /dev/null
/etc/skel/.profile:    # include .bashrc if it exists
/etc/skel/.profile:    if [ -f "$HOME/.bashrc" ]; then
/etc/skel/.profile:	. "$HOME/.bashrc"
/etc/skel/.bashrc:# ~/.bashrc: executed by bash(1) for non-login shells.
/etc/skel/.bashrc:# this, if it's already enabled in /etc/bash.bashrc and /etc/profile
/etc/skel/.bashrc:# sources /etc/bash.bashrc).
/etc/profile:    # The file bash.bashrc already sets the default PS1.
/etc/profile:    if [ -f /etc/bash.bashrc ]; then
/etc/profile:      . /etc/bash.bashrc
/etc/apparmor.d/abstractions/bash:  @{HOME}/.bashrc                  r,
/etc/apparmor.d/abstractions/bash:  /etc/bashrc                      r,
/etc/apparmor.d/abstractions/bash:  /etc/bash.bashrc                 r,
/etc/apparmor.d/abstractions/bash:  /etc/bash.bashrc.local           r,
/etc/apparmor.d/abstractions/bash:  # run out of /etc/bash.bashrc

   grep -r "bashrc" /etc/  2>/dev/null
    "bashr" yi git /etc/ dizini altinda ara(mutlaka -r kullanmaliyiiz dizin altinda arama  yapabilmek icin )
    Ama hatali olan sonuclari listeden cikar diyrouz 2 > dev/null(hatali sonuc-permission denied olanlari)
    
    grep -r(-r secenegini belirtmeden dizin altinda arama yapmaya calisirsak asagidaki sonuc elde edilir..)
    adem@adem:~$ grep  "bashrc" /etc/
    grep: /etc/: Is a directory
    adem@adem:~$ 

    Yalnizca Arana Ifadenin Icinde Oldugu Dosya Isimlerini Almak!
    Aranan ifadenin icinde gectigi satir yerine sadece dosya ismini almak

    adem@adem:~$ grep -rl "bashrc" /etc/ 2>/dev/null
    /etc/skel/.profile
    /etc/skel/.bashrc
    /etc/bash.bashrc
    /etc/apparmor.d/abstractions/bash
    /etc/profile
    adem@adem:~$ 

    TIRNAK KULLANIMI
    Aranacak ifadeyi tirnak icinde yaziyouruz, bu sayede hangi ifade arastirilacak ifade hangi ifade dosya ismi bunu bash-shell-kabugu ayirt edeebiliyor
    grep mehmet can isimler.txt 
    Burda ahmet i arastirilacak ifade, can ve isimler.txt yi de ifadenini arastirilacagi dosya olarak aliyor , cunku Bash kabugu tirnaksiz bosluklari argumanlar arasi bosluk olarak kabul eder!!!!
    adem@adem:~$ grep mehmet can names.txt
    grep: can: No such file or directory
    adem@adem:~$ 

    UNUTMA!!!!:Bash kabugu tirnaksiz bosluklari argumanlar arasi bosluk olarak kabul eder!!!!

    adem@adem:~$ grep "mehmet can" names.txt
    Bu sekilde sorunsuz bir sekilde "mehmet can" i aramasi gerektigini anlayacaktir

    KUCUK BUYUK HARF DUYARLILIGI
    Bildigmz gibi Linux un kucuk-buyuk harf duyarliligi var(windows da yok bu)
    Regex araci da yani grep , arastirilacak ifadenin buyuk harf kucuk harf olmasina gore arastirma ozelliklerini degistiriyor
    adem@adem:~$ grep "ahmet can" names.txt
    ahmet can durmus
    KUCUK BUYUK HARF DUYARLILIGI OLMADAN ARASTIR DERSEK-INSENSITIVE(DUYARSIZ)
    adem@adem:~$ grep -i "ahmet can" names.txt
    Ahmet Can Yazar
    ahmet can durmus
    adem@adem:~$ 

    SPESIFIK KELIME ARASTIRMASI
    Bazen bizim aradgimz kelime daha uzun bir keliimenin icinde gecebiliyor vaya uzun bir kelimenin sadece basinda olabiliyor ve sonunda olabiliyor ama biz sadece aradgimz kelimenin mustakil kendi basina bulundugu kelimeleri almak istersek o zaman da

    adem@adem:~$ grep "Can" names.txt
    Can Ahmet Polat
    Canan Kahraman
    Ahmet Can Yazar
    adem@adem:~$ 
    
    grep -word(Tam olarak kelimeyi) ile arastiririz
    adem@adem:~$ grep -w "Can" names.txt
    Can Ahmet Polat
    Ahmet Can Yazar
    adem@adem:~$ 

    Satirlari Numaralari ile Almak! Aradigmz ifadenin dosya icinde hangi numarali satirlarda oldugunu da gorebiliyoruz!!!

    adem@adem:~$ grep -wn "Can" names.txt
    14:Can Ahmet Polat
    16:Ahmet Can Yazar
    adem@adem:~$ 
    
    COKLU FILTRELEME  YAPMAK!

    adem@adem:/var/log$ cat /var/log/bootstrap.log | grep "service" | grep "Error"

    Bu sekilde bir dosya icerigini arguman olarak, grep aracina veriyor sonra o grep aracinda "service" gecen satirlari alip o ciktiyi da tekrar grep aracina verip o cikti icinden de icinde "Error" gecen ifadeler i cikti olarak ver diyoruz(Herhangi bir yere aktar demezsek default olarak console dosyalarinin standart inputuna vererek conosle a basilmasi saglaniyor)

    GREP ARACI ILE REGEX IFADELERI KULLANMAK
    BASIT REGEX KURALLARI 
    .=Herhangi bir tek karakter,satir sonu karakteri haric, yeni bir satir a gecme karakteri haric 
    *=Bir onceki karakterin sifir veya daha fazla kez tekrari
    +=Bir onceki karakterin bir veya daha fazla kez tekrari
    ?=Bir onceki karakterin sifir veya bir kez tekrari
    ^=Baslangic karakteri
    $=Bitis karakteri
    []=Karakteri kumesi
    [a-z]=Yalnizca kucuk harfler
    [A-Z]=Yalnizca buyuk harfler
    [0-9]=Yalnizca rakamlar
    \=Ozel karakterlerin(regexin bu ozel karakteri) gormezden gelme
    | = Kosul(Ya da kosulu)

    SATIR BASINDA-'Ber' gecenleri getir.olacak dikkat edelim..
    ^  
    adem@adem:~$ grep "^Ber" names.txt
    Berkan
    Beril
    Bertay
    adem@adem:~$ 

    adem@adem:~$ grep "^Ber" names.txt
    Berkan
    Beril
    Bertay

    Dikkat edelim normal aramada aranilan kelime satir basinda degil 2. kelime de onu getiriyor ama satir basinda olmasini istersek.. o zaman..bu sembolu kullanriz ^
    adem@adem:~$ grep "Ber" names.txt
    Berkan
    Beril
    Bertay
    Kamil Berman
    adem@adem:~$ 

    SATIR SONUNDA "an" olan lari getir dersek gercekten de satirin sonkelimesine bakiyor ve 'an' ile bitenlere bakiyor 
    adem@adem:~$ grep "an$" names.txt
    Alisan
    Canan Kahraman
    can ahmet furkan
    Berkan
    Adnan
    Kamil Berman
    adem@adem:~$ 

    "an." an ifadesinden sonraki tek karakteri filterlemis oluyorz..
    adem@adem:~$ grep "an." names.txt

    Vedan 
    Can Ahmet Polat
    Canan Kahraman
    Ahmet Can Yazar
    ahmet can durmus
    can ahmet furkan
    adem@adem:~$ 

    '..an' an dan once 2 karakter i getir diyoruz, an dan onceki 2 karakteri kirmizi renkli olarak getirecektir

    adem@adem:~$ grep "..an" names.txt
    Alisan
    Vedan 
    Canan Kahraman
    Ahmet Can Yazar
    ahmet can durmus
    can ahmet furkan
    Berkan
    Adnan
    Kamil Berman
    kamilcan
    adem@adem:~$ 

    a ile baslayan ve icerisinde k, l , r karakterlerinden herhangi birini bulunduran satiri getir diyoruz burda 
    adem@adem:~$ grep "a[klr]" names.txt
    Ahmet Can Yazar
    adem@adem:~$ 
    
    a ile baslayan ama icerisinde k,l, r karakterleri bulundurmayan satirlari getir diyoruz!!!burda da 
    ^ isareti koseli parantez [^] icerisinde kullanildiginda haric anlamina geliyor!!!

    adem@adem:~$ grep "a[^klr]" names.txt
    Alisan
    Cagdas
    Vedan 
    Can Ahmet Polat
    Canan Kahraman
    Ahmet Can Yazar
    ahmet can durmus
    can ahmet furkan
    Berkan
    Bertay
    Adnan
    Kamil Berman
    kamilcan
    adem@adem:~$ 

    a ile baslayan, icinde k,l,r karakterlerini bulundurmayan ama a,b,c karakterlerini bulunduranlari getir diyoruz!!!

    adem@adem:~$ grep "a[^klr][abc]" names.txt
    Canan Kahraman
    Ahmet Can Yazar
    adem@adem:~$ 
    
BURAYA KADAR OLAN ORNEKLER TEMEL REGEX KULLANIMININ BASIT ORNEKLERIDIR!

BUNUN DISINDA GREP UZERINDE KULLANABILECEGIMIZ GENISLETILMIS REGEX KARAKTERLERI BULUNUYOR
Bunlar cok fazla gunluk islemlerde ihtiyacimiz olmuyor..Spesifik ihtyac durumlarinda kullanilabilir

grep araci standart kullanimda basit regex kurallarini kullaniyor, genisletilmis regex kullanacagimiz zaamn kullanacagimz karakterleri grep aracina tanitmamiz gerekiyor

grep -E diyerek grep e soylememiz gerekiyor.
grep -E(extended regex)

adem@adem:~$ grep -E "ahmet|can" names.txt
ahmet can durmus
can ahmet furkan
kamilcan
adem@adem:~$ 

bosluk karakterlerini de dikkat aldigi icin bizim, "ahmet|can" derken araya bosluk birakmamamiz gerekiyor!

BIZ GENISLETILMIS REGEX KARAKTERLERININ TANINMASI ICIN -E YERINE \-TERS SLASH KULLANARAK DA BUNU SAGALAYABILIRIZ

adem@adem:~$ grep  "ahmet\|can" names.txt
ahmet can durmus
can ahmet furkan
kamilcan
adem@adem:~$ 

FIND ARACI-DOSYA VE KLASOR KONUMU OGRENME ARACIA!! 

adem@adem:~$ find ./ -name "findme" 2>/dev/null
./Documents/findme
./Pictures/findme
adem@adem:~$ 
2>/dev/null permission denied olanlari cikar, yani hatali sonuc lari kaldir(2numarali)

FIND ARACI HEM DOSYA HEM KLASOR NE BULURSA GETIRIR NORMALDE ARANAN ISME UYAN 

AMA BIZ ONA ISTERSEK ARANAN ISME UYAN SADECE DOSYALARI GETIR DIYEBILIRIZ

adem@adem:~$ find ./ -name "findme" -type f 2>/dev/null
./Documents/findme
adem@adem:~$ 

AYNI SEKILDE DIRECTORY-DIZIN-KLASORLERI GETIRMESINI ISTERSEK DE  -type d kullaniriz 

adem@adem:~$ find ./ -name "findme" -type d 2>/dev/null
./Pictures/findme
adem@adem:~$ 

FARKLI DOSYA YOLLARINDA VE DIREK TUM SISTEMDE(/ KOK DIZIN ALTINDA) ARAMA YAPMAK
adem@adem:~$ find /etc/ -name "conf"
find: ‘/etc/cups/ssl’: Permission denied
find: ‘/etc/polkit-1/localauthority’: Permission denied
find: ‘/etc/ssl/private’: Permission denied
adem@adem:~$ find / -name "conf" 2>/dev/null
/home/adem/.vscode/extensions/ritwickdey.liveserver-5.7.9/node_modules/eslint/conf
/home/adem/android-studio/jbr/conf
/usr/share/speech-dispatcher/conf
/usr/share/groovy/conf

adem@adem:~$ find / -name "conf" 2>/dev/null
BU SEKILDE DIREK KOK DIZINDE TUM SISTEM ALTINDA ARAMA YAPILIYOR

ISTERSEK BOYUTA GORE FILTRELEME DE YAPABILIRIZ-SIZE

adem@adem:~$ find . -type f -size +1M
type i file olan, ve size i da 1M dan daha buyuk olan(+1M + DEMEK DAHA BUYUK 1M DAN DAHA BUYUK) 

find ./ -type f -size +1M
find . -type f -size +1M
BURDA HERHANGI BIR DOSYA ISMI BELIRTILMEMIS AMA NERDE ARANACAGI BELIRTILMIS ./ O ZAMAN ./ BULUNDUGUMZ KLASOR ALTINDA KI TUM DOSYALARDAN SARTLARA UYANLARI GETIRECEK

find ./ -type f -size -1M
find . -type f -size -1M
BOYUTU 1MB DAN KUCUK OLAN DOSYA LARI GETIRECEK
-size filtrelemesi yaparken, size i asagidaki gibi kullanabiliriz

byte -b 
kilobyte -k 
megabyte -M 
Gigabyte -G 

SISTEMIMIZ ICINDE 1GB DAN DAHA BUYUK OLAN DOSYALARI LISTELEDIK!!!

adem@adem:~/utv/NSS-serviceapp$ find / -type f -size +1G 2>/dev/null
/home/adem/Android/Sdk/system-images/android-31/google_apis/x86_64/system.img
/home/adem/Android/Sdk/system-images/android-32/google_apis/x86_64/system.img
/home/adem/.android/avd/Pixel_5_API_31.avd/snapshots/default_boot/ram.img
/home/adem/.android/avd/Pixel_5_API_31.avd/userdata-qemu.img
/home/adem/.android/avd/Pixel_5_API_31.avd/userdata-qemu.img.qcow2
/home/adem/.android/avd/Galaxy_Nexus_API_32.avd/snapshots/default_boot/ram.img
/home/adem/.android/avd/Galaxy_Nexus_API_32.avd/userdata-qemu.img
/home/adem/.android/avd/Galaxy_Nexus_API_32.avd/userdata-qemu.img.qcow2
/home/adem/cottageservice.sql
/proc/kcore
/swapfile
adem@adem:~/utv/NSS-serviceapp$ 

DOSYA-KLASORLERIN TARIHLERINE GORE FILTRELEME DE YAPABILIRIZ

Biz biliyoruz ki dosyalarimza ait farkli turde date bilgileri mevcut..ve onlari biz stat komutu ile gorebiliyorduk!

adem@adem:~$ stat names.txt
  File: names.txt
  Size: 274       	Blocks: 8          IO Block: 4096   regular file
Device: 803h/2051d	Inode: 5687537     Links: 1
Access: (0664/-rw-rw-r--)  Uid: ( 1000/    adem)   Gid: ( 1000/    adem)
Access: 2023-12-14 13:47:09.060429013 +0100
Modify: 2023-12-14 13:47:06.300396317 +0100
Change: 2023-12-14 13:47:06.300396317 +0100
 Birth: 2023-12-13 09:28:27.873505766 +0100
adem@adem:~$ 

modify-date degisimi icin mtime
change-date degisimi icin ctime
access-date degisimi atime

Tam olarak 2 gun once ~/utv/test   bu klasor altinda, modify edilmis olan dosya ve klasorleri getir diyoruz

adem@adem:~$ find ~/utv/test -mtime 2
/home/adem/utv/test/Linux-works/.git/objects/20
/home/adem/utv/test/Linux-works/.git/objects/20/7fb7696f597dcbc65415799d0273e7ee7e7b94
/home/adem/utv/test/Linux-works/.git/objects/15
/home/adem/utv/test/Linux-works/.git/objects/15/dd1d7ca101e9833efc8e2a78c355d927d4dab2
/home/adem/utv/test/Linux-works/.git/objects/5a
/home/adem/utv/test/Linux-works/.git/objects/5a/5c5403774448a92b6aff563745efc7830ecdf0
/home/adem/utv/test/Linux-works/.git/objects/27
/home/adem/utv/test/Linux-works/.git/objects/27/e625c870f7228028e7bd1573c54b9751f50d01
adem@adem:~$ 

Tam olarak 2 gun once ~/utv/test   bu klasor altinda, modify edilmis olan klasorleri getir diyoruz
adem@adem:~$ find ~/utv/test -mtime 2 -type d
/home/adem/utv/test/Linux-works/.git/objects/20
/home/adem/utv/test/Linux-works/.git/objects/15
/home/adem/utv/test/Linux-works/.git/objects/5a
/home/adem/utv/test/Linux-works/.git/objects/27
adem@adem:~$ 

Ama son 2 gun icinde ve daha kisa sure icinde duzenlenmis leri gormek istersek

find ~/utv/test -mtime -2 

Duzenlenme suresi 2 den gerideki, 2 den daha onceki tarihleri gormek icinde 

find ~/utv/test -mtime +2 - uzerinden 2 gun gecmis olan dosyalar

find ~/utv/test -atime 2 Tam olarak 2 gunc once erisilmis olan dosyalardir

find ~/utv/test -atime -2 Son 2 gun icinde erisilimis olanlar  
find ~/utv/test -atime +2 Erisim olduktan sonra uzerinden en az 2 gun gecmis dosyalardir 

find ~/utv/test -atime -1 Son 24 saat icinde erisilmis olan dosyalar 

EGER ZAMAN OLARAK DAKIKALARI GORMEK ISTERSEK 
cmin  amin mmin seklinde komutlari kullaniriz 
cmin :change minutes
amin :access minutes  
mmin : modify minutes

NOT: find aracina eger arayacagi klasor veya dosya konumunu vermezsek o default olarak, uzerinde bulundugumuz dizini alacaktir.YANI . VEYA ./

adem@adem:~$ find ~/utv/test -amin -60
/home/adem/utv/test/Linux-works/linux-intro/index.html
adem@adem:~$ 
Son 1 saatte erisilmis olan dosya 
1 saatten once erisilmis olan dosyalar, dikkat 1 saat once degil 1 saat ve oncesinde, erisildikten sonra uzerinden en az 1 saat gecmis dosyalar demektir

LINUX U OGRENIRKEN ANA MANTGIMIZ BU OLMALIDIR!!!
find araci cok guclu bir aractir.Ondan dolayi bir find aracinin nelerde kullanilabilecegini anlamaya calisiyoruz ama herseyi bilemeyiz ondan dolayi mantik olarak biz araclarin genel olarak hangi amac icin kullanildigni bilecegiz sonra spesifik ihtiyaclarimzda gelip man find, veya find --help yazarak, gelip dokumantasyondan ihtiyacimiza uyacak optionslari bulup onlari kullanacagiz! GENEL OLARAK BIZIM LINUX KULLANICISI OLARAK ANA YAKLASIMIMIZ BU SEKILDE OLMALIDIR!!!AMA ARACLARI GENEL OLARAK REFLEKSLERINI GENEL OLARAK, NASIL KULLANILDIKLARINI AMACLARINI BULMALIYIZ!!!! 

DOSYA VE KLASORLERI YETKILERINE GORE SIRALANDIRMAk ISTERSEK DE PERM, USER KEYWORDLERINI KULLANABILIRZ BUNLAR ICIN YINE MAN FIND, FIND --HELP DEN FAYDLANABILRIZ 

OLUMSUZ LAMA YANI OLMAYAN I ARAMA - NOT IFADESI 
FILTRELEME NIN TERSI SEKILDE CALISMASI

isminin sonunda .webp olan tum dosyalari uzerinde bulundgumz dizinde getir diyoruz
adem@adem:~$ find ./ -name "*.webp"

isminin sonunda .webp olmayan tum dosyalari uzerinde bulundgumzu dizinde getir diyoruz
adem@adem:~$ find ./ -not  -name "*.webp"

DUZENLENME TARIHI 2 DEN ONCE OLMAYANLAR 
find ./ -not  -mtime -2

DUZENLENME TARIHI 2 DEN ONCE OLANLAR-UZERINDEN 2 GUN VE DAHA FAZLA GECMEYENLER, DUZENLENME TARIHINDEN SONRA!! 
find ./ -not  -mtime +2

AND-OR KOSUL IFADESI FIND ILE KULLANIMI
and-or kosul ifadesini find filtrelemesinde kullanma

.txt yada .webp ile biten dosya lari  getir diyoruz!
adem@adem:~$ find ./ -name "*.txt" -or -name "*.webp"
DIKKAT EDELIM HER BIR DOSYA TARIFI ICIN -NAME FLAG I NI KULLANMAMIZ GEREKIYOR 

.webp uzantili dosyalar ve boyutu 10kilobyte tan buyuk olan dosyalar diyoruz 
adem@adem:~$ find ./ -name "*.webp" -and -size +10k

BIZ FIND ARACININ KULLANIRKEN DE REGEX I KULLANABILIRZ AMA BURDA ONEMLI BIR DETAY VAR 
Normalde find komutu biz aksini -regex secenegi ile belirtmedigimz surece daha once uzerinde durdugmuz wildcard yaklasimini(yani dosya ismi genisletmesindeki *,?,[]) kullaniyor. 

find ./ -name "*.webp"
BURAYA COK DIKKAT burdaki "*.webp" burdaki * isareti regex degil, wildcard-yani dosya genisletmesi joker karakterlerinden olan * dir..BU GREP ILE ARASINDAKI COK ONEMLI BIR FARKTIR FIND ARACININ

Regex i kullanabilmek icn -regex ifadesinin kullanmaliyiz
find -regex  ".*.webp"
* isareti regex de kendinden onceki karakteri 0 veya daha fazla kez tekrar ediyor!
find -regex  "*.webp" * isaretinden once birsey olmazsa hicbirsey getirmeyebilir.

Dosya ismi genisletme kuralina gore, yani bash in default unda, yani joker karatker olarak, * karakteri 0 veya 0 dan daha fazla sayida herhangi bir karakter ile eslesebiliyor
Regex kuralina gore ise * karakteri  kendisinden onceki karakteri 0 veya daha fazla kez tekrar eden oruntuler ile eslesir
Biz ozellikle -regex flag ini veya option unu kullanmadigmz surece, -name secenegi sayesinde


LOCATE ARACI
find aracindaki gibi dosya ve dizin isimleri uzerinden sistemimizde arastirma yapmamizi saglar
Locate araci find aracindan farkli olarak, canli dosya sistemi uzerinde arastirma yapmiyor
Her seferinde dosya sistemi uzerinde arastirma yapmiyor kendi database de tuttugu dosya kaydi uzerinden arastirma yapiyor
Dolayisi ile de sistemimz uzerinde en son, ve en guncel olusturulmus olan dosyalari arastirma konusunda pek basarili degil
Bu arastirma isleminden once ilgili database dosyasinin guncellenmesi gerekiyor

adem@adem-ThinkPad-13-2nd-Gen:~/Documents$ sudo touch findme
[sudo] password for adem: 
adem@adem-ThinkPad-13-2nd-Gen:~/Documents$ ls
findme
adem@adem-ThinkPad-13-2nd-Gen:~/Documents$ cd ..
adem@adem-ThinkPad-13-2nd-Gen:~$ locate findme
SONUC GELMIYOR CUNKU locate kendi database ini kontrol edip arastirma yaptgi iicn database i guncellemeden yapilan arastirma son eklene datalari bulamaz, onun iicin once datgabase i asagidaki gibi guncellememiz gerekiyor
adem@adem-ThinkPad-13-2nd-Gen:~$ sudo updatedb
adem@adem-ThinkPad-13-2nd-Gen:~$ locate findme
/home/adem/Documents/findme

locate araci find aracina gore daha hizlidir, cunku find araci canli olarak dogrudan gercekten tum dizinleri tek tek kontrol ediyor ama locate araci daha onceden kendi db si uzerinde ekledigi isim listesi uzerinden, kontrol ediyror ve dosyalarai tek tek okumuyyor
Ama tabi ki locate araci find araci kadar da genis bir arastirma yapamiyor

LOCATE INSENSITIVE SEARCH YAPMA -i(insensitive)
locate -i ABC

INSENSITIVE COUNT-YANI CAKISAN DOSYA VE KLSOR SAYSINI SAYSINI VERIR
locate -ic ABC

--regex GENISLETILMIS REGEX I KULLANMAK ICIN BU SEKILDE BELIRTIRIZ REGEX I VE DE | IFADESI GENISLETILMIS REGEX DE GECERLIDIR
LOCATE ARACINDA REGEX DE KULLANILABILIR, AMA --REGEX OPTION I EKLEMEK GEREKLIDIR 
locate --regex "(.\rar|\.zip)"
| YA DA KOMUTU OLARAK TANINDA GENISLETILMIS REGEX KOMUTLARI ARASINDA
locate --regex  ".*.rar"
BASIT REGEX I KULLANMAK ICIN ISE -r diye kullanmamiz yeterlidir
locate -r "(.*.rar)"  BU BASIT REGEX DE CALISIR AMA | YADA IFADESI BASIT REGEX DE DEGIL GENISLETILMIS REGEX(EXTENTED REGEX) DE CALISIYOR..YAI --REGEX DIYE BELIRTMEK GEREKKYOR | YA DA REGEX IFADESINI KULLANABILMEK ICN

FIND:Gelismis filtreleme, oz niteliklere gore filtreleme(dosya adi, size, date)
LOCATE:Yalnizca dosya-dizin ismi ve database uzerinden arama yapilabilir, find dan daha hizlidir


CUT ARACI 
Elimzde yer alan metinsel verileri istedigmz satir araliginda kesmemiz mumkun oluyor, cut araci sayesinde
Okunabilir formatta olan her turlu metinsel veriyi kesmemiz mumkundur

cut araci ile biz satir araligina gore kesecegjmiz icin neye gore yani bosluga gore mi, bir harfe gore mi, virgule gore mi, oldugunu delimeter i belirtmemiz gerekiyor

-d delimeter
-f fields
" " ise satirlar arasindaki boslukalrdan kesilecegi icin bosluga gore kes diyruz
cut -d " " -f

adem@adem-ThinkPad-13-2nd-Gen:~$ cat > folders.txt
satir1sutun1 satir1sutun2 satir1sutun3 satir1sutun4                   
satir2sutun1 satir2sutun2 satir2sutun3 satir2sutun4
satir3sutun1 satir3sutun2 satir3sutun3 satir3sutun4
satir4sutun1 satir4sutun2 satir4sutun3 satir4sutun4
adem@adem-ThinkPad-13-2nd-Gen:~$ 
adem@adem-ThinkPad-13-2nd-Gen:~$ cut -d " " -f 1-3 folders.txt
1 ile 3.sutunlar ararsini kesip almis oldu!!!
satir1sutun1 satir1sutun2 satir1sutun3
satir2sutun1 satir2sutun2 satir2sutun3
satir3sutun1 satir3sutun2 satir3sutun3
satir4sutun1 satir4sutun2 satir4sutun3

1.ve 2. satirlari ; semicolon a gore bolerek kes ve getir
adem@adem-ThinkPad-13-2nd-Gen:~$ cut -d ";" -f 1-2 text1.txt
row1column1;row1column2
row2column1;row2column2
row3column1;row3column2
row4column1;row4column2
adem@adem-ThinkPad-13-2nd-Gen:~$ 

EGer spesifik 3 farkli sutun istersek yani 1,3,4.sutunu aralarina virgul koyarak belirtiriz
adem@adem-ThinkPad-13-2nd-Gen:~$ cut -d ";" -f 1,3,4 text1.txt
Sadece 4.sutunu da alabiliriz
adem@adem-ThinkPad-13-2nd-Gen:~$ cut -d ";" -f 4 text1.txt

adem@adem-ThinkPad-13-2nd-Gen:~$ cut -d ";" -f 4 text1.txt --complement
4.bolum haric diger tum sutunlari getir diyoruz
Elde ettigimz dosya ciktilari ni istedigmz dosyalara yazdirabiliriz
Daha fazla bilgi icin man cut veya cut --help diyerek inceleyebilirz

tr ARACI- TRANSLATE ARACI -DONUSTURMEK, DEGISTIRMEK
Temelde mevcut veriler icindeki karakterleri degistirmek veya silmek icin bu araci kullanabiliyoruz
Ozellikle kucuk buyuk harf degisimi, tekrar eden karakterlerin silinmesi, ozel karakterlerin silinmesi veya bu karakterlerin bulunup degistirilmesi gibi bircok islev icin kullanabiliyoruz

echo "linux dersleri" ciktisi olan "linux dersleri"  u tr ye arguman olarak veriyor ve bu veri icinde "ie" karakterleri "IE" olarak donsturuluyor.Siralama onemli  burda, ie 1.sirada i, 2.sirada e var ve yerlerine gelecek de 1.sirada I yani i yerine, 2.sirada E yani e yerine gelecek demektir
adem@adem-ThinkPad-13-2nd-Gen:~$ echo "linux dersleri" | tr "ie" "IE"
lInux dErslErI

METINDEKI KUCUK HARFLERIN TAMAMINI BUYUK HARFE CEVIRMEK
adem@adem:~$ echo "linux dersleri" | tr "a-z" "A-Z"
LINUX DERSLERI
adem@adem:~$ 

tr --help 

[:alnum:]       all letters and digits
  [:alpha:]       all letters
  [:blank:]       all horizontal whitespace
  [:cntrl:]       all control characters
  [:digit:]       all digits
  [:graph:]       all printable characters, not including space
  [:lower:]       all lower case letters
  [:print:]       all printable characters, including space
  [:punct:]       all punctuation characters
  [:space:]       all horizontal or vertical whitespace
  [:upper:]       all upper case letters
  [:xdigit:]      all hexadecimal digits
  [=CHAR=]        all characters which are equivalent to CHAR

  BUREDA MESELA [:lower:]       all lower case letters. KUCUK KARAKTERLERI TEMSIL EDIYOR. ASLINDA BUNLAR BASH UZERINDE BU YAKLASIMI KULLANAN PEK COK ARAC ILE KARSILASABILIYORUZ

   ASAGIDAKI IKI KOD DA AYNI SEYDIR ASLINDA 
  adem@adem:~$ echo "linux dersleri" | tr "a-z" "A-Z"
  LINUX DERSLERI
  [:lower:] "a-z"
  [:upper:] "A-Z"
  adem@adem:~$ echo "linux dersleri" | tr [:lower:] [:upper:]
  LINUX DERSLERI

  BIZ ARALARINDA : OLAN UZUN BIR SATIR I : " E GORE AYIRARAK ALT ALTA YAZABILIYORUZ ASAGIDAKI GIBI 

  adem@adem:~$ echo $PATH
/home/adem/test/demo1/:/home/adem/test/mytest/:/home/adem/test/test2/:/home/adem/Desktop/test2/:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/games:/snap/bin:/snap/bin
adem@adem:~$ echo $PATH | tr ":" "\n"
/home/adem/test/demo1/
/home/adem/test/mytest/
/home/adem/test/test2/
/home/adem/Desktop/test2/
/usr/local/sbin
/usr/local/bin
/usr/sbin
/usr/bin
/sbin
/bin
/usr/games
/usr/local/games
/snap/bin
/snap/bin
adem@adem:~$ 

TEKRAR EDEN KARAKTLERI KALDIRABILIRZ VE UNIQ HALE GETIREBILIRZ
adem@adem:~$ echo "www.linuxdersleri.net" | tr -s "w"
w.linuxdersleri.net
adem@adem:~$ 


adem@adem:~$ echo "bbbuuu bbiiir dddeenneemmee yazziisiiidir112223443433354555" |tr -s [:graph:]
bu bir deneme yazisidir1234343545
adem@adem:~$ 
[:graph:] ifadesi tum karakterleri temsil ediyor, normal harf ve sayi tamamini temsil ediyor

EGER SADECE SAYILARIN TEKRARLARINI KALDIRMAK ISTERSEK
adem@adem:~$ echo "bbbuuu bbiiir dddeenneemmee yazziisiiidir112223443433354555" |tr -s [:digit:]
bbbuuu bbiiir dddeenneemmee yazziisiiidir1234343545
adem@adem:~$ 
[:digit:] sayilari temsil ediyor

SILME ISLEMI DE YAPABILIRZ
-d delete
adem@adem:~$ echo "www.linuxdersleri.net" | tr -d "."
wwwlinuxderslerinet
adem@adem:~$ 

DIKKAT EDELIM "de" ifadesini verince tr araci hem "d" hem de "e" harflerinin gectigi tum karakterleri siliyor!!!yani "de" yi ifade olarak almak yerine ayri ayri tek tek harf olarak siliyor
adem@adem:~$ echo "www.linuxdersleri.net" | tr -d "de"
www.linuxrslri.nt
adem@adem:~$

ONEMLI!!!!
BIZ EGER BITISIK YAPIDA, BIRDEN FAZLA KARAKTERI KAPSAYACAK IFADELERDE DEGISIKLIK YAPMAK ISTERSEK O ZAMAN SED ARACI VAR ONU KULLANMALIYIZ!!!!
tr ARACI YALNIZCA TEK BIR KARAKTER DONUSTURME, SILME, SADELESTIRME, TEKRAR EDENLERI KALDIRMA GIBI ISLEMLER ICIN BULUNUYOR.DAHA KOMPLEKS ISLEMLER ICIN SED ARACINI KULLANMALIYIZ

tr ARACI STANDART GIRDIDEN VERI KABUL ETTIGI ICIN VERILERIMIZI BIZ  tr aracina pipe(|) olmadan da gonderebiliriz

ONCE testt dosyasina icerigi yazdik..
adem@adem:~$ echo "bbbuuu biiir dddenenemme yyyaziissiii111222333444">testt

SONRA testt dosyasinin icerigini tr aracina input standart girdisine aktardik(< INPUT REDIRECTION ILE)...BURDA..DIKKAT EDELIM!!!!!COOK ONEMLI...
adem@adem:~$ tr -s [:graph:] < testt
bu bir deneneme yazisi1234

STANDART GIRDI(INPUT-O) ALAN ARACLARIN STANDART GIRDISINE VERI GONDERMEYI BIZ (INPUT-REDIRECTION OPERATORU OLAN < KUCUKTUR) ILE YAPIYROUZ BUNU UNUTMAYALIM!!!

BU CIKTILARI BASKA BIR DOSYA YA GONDERMEK ISTERSEKKK DE ASAGIDAK GIBI YAPARIZ
adem@adem:~$ tr -s [:graph:] < testt > testt1
adem@adem:~$ cat testt1
bu bir deneneme yazisi1234
adem@adem:~$ 

SED ARACI- STREAM EDITOR KISALTMASIDIR
COK GUCLU BIR METIN MANIPULASYON ARACIDIR
STREAM-AKIS LINUX DE HERSEY BYTE AKISI, DOSYALAR ARASI VERI AKISIDIR DEMISTIK..ISTE BURDA DA O ISIM KULLANILMIS

BU ARACIMZ ILE REGEX IN BASIT VE GENISLETILMIS KURALLARI YADIMI ILE SEARCH-EDIT-DELETE GIBI PEK COK ISLEMI YERINE GETIREBILIYORUZ 

BUL DEGISTIR ISLEMI
adem@adem:~$ sed 's/bulunacakifade/yerine-gec-ifade/g(global-metinselveridekihertekrarda yerine gececek)


adem@adem:~$ sed 's/satir/bolum/g' readme1.txt
bu ilk bolum bu ikinci bolum bu da son bolum
bolum iki ve bolum sonu
yeni bolum ve son bolum
yeni veri ve son veri
adem@adem:~$ 
sed 's/satir/bolum/g' readme1.txt
global /g nin varlik sebebi odur
Bu degiskligi ise her yerde yapmak istiyorum, yani satir ifadesini gordugm her yerde yapmak istiyorum, o zaman global kullaniriz

global /g  yi girmezsek yalnizca ilk buldugu yerde,kini degistirecekti
adem@adem:~$ sed 's/satir/bolum/' readme1.txt
bu ilk bolum bu ikinci satir bu da son satir
bolum iki ve satir sonu
yeni bolum ve son satir
yeni veri ve son veri
adem@adem:~$ sed 's/bolu

ISTENILEN DEGISIKLIK SPESIFIK SATIR OLMASINI SA SAGLAYABILIRZ
adem@adem:~$ sed '3s/satir/bolum/g' readme1.txt
bu ilk satir bu ikinci satir bu da son satir
satir iki ve satir sonu
yeni bolum ve son bolum
yeni veri ve son veri
adem@adem:~$ 
adem@adem:~$ sed '3s/satir/bolum/g' readme1.txt
burdaki sed '3s/satir/bolum/g' g secenegi ile biz 3.satirda bulunan 
'3s ifadesi ile 3.satir demis oluyoruz..
tum satir ifadelerini bolum e cevir diyoruz yoksa 3.satirda ilk buldugu ifadeyi cevirir sadece

ISTEDIGIMZ  SATIR ARALIGI DA BELIRTEBILIRIZ
1 ile 3.satirlar i degistirsin diyebiliriz..
adem@adem:~$ sed '1,3s/satir/bolum/g' readme1.txt
bu ilk bolum bu ikinci bolum bu da son bolum
bolum iki ve bolum sonu
yeni bolum ve son bolum
yeni veri ve son ver

ISTERSEK ISTEDIGMZ IFADEYI SILMEBILIRIZ!!!

KOMPLE 2.SATIRI SILMEK ICIN
adem@adem:~$ sed '2d' readme1.txt
bu ilk satir bu ikinci satir bu da son satir
yeni satir ve son satir
yeni veri ve son veri
adem@adem:~$ 

2.SATIRDAN 4.SATIRA KADAR OLAN KISIMLARI SIL DIYORUZ

adem@adem:~$ sed '2,4d' readme1.txt
bu ilk satir bu ikinci satir bu da son satir
adem@adem:~$ 

SPESIFIK IFADELERIN BULUDUGU SATIRLARIN  SILINMESI

/d delete
adem@adem:~$ sed '/yeni/d' readme1.txt
bu ilk satir bu ikinci satir bu da son satir
satir iki ve satir sonu
adem@adem:~$ 
yeni ifadesinin bulundugu satirlar silindi

SPESIFIK IFADELERIN BULUDUGU SATIRLARIN HARICINDEKILERIN  SILINMESI
adem@adem:~$ sed '/yeni/!d' readme1.txt
yeni satir ve son satir
yeni veri ve son veri
adem@adem:~$ 

ISTEDGIIMZ BIR VERININ EKLENMESI
adem@adem:~$ sed '/veri/i\oncesi' readme1.txt
bu ilk satir bu ikinci satir bu da son satir
satir iki ve satir sonu
yeni satir ve son satir
oncesi
yeni veri ve son veri
adem@adem:~$ 
veri ifadesinin bulundugu satirdan onceki satira belirttigm ifadeyi ekliyor 
\i:input demektir
sed '/veri/i\oncesi' readme1.txt
veri ifadesini buldugun satirdan onceki satir a oncesi ifadesini ekle diyoruz 
\oncesi ifadesini ters slash ile yazmamiz gerekiyor

SONUNA DA EKLEYEBILIRIZ 
\a append 
adem@adem:~$ sed '/veri/a\sonrasi' readme1.txt
bu ilk satir bu ikinci satir bu da son satir
satir iki ve satir sonu
yeni satir ve son satir
yeni veri ve son veri
sonrasi
adem@adem:~$ 

sed araci script yazarken, bash programlamada da kullanilabiliyor ihtiyac durumunda

BUL DEGISTIR ISLEM I ILE DAHA KOMPLEKS BIR ISLEM YAPACAKSAK O ZAMANDA AWK ISIMLI ARACI KULLANIRIZ

AWK ARACI 
Metinsel veriler uzerinde sed aracindan cok daha etkili manupulasyonlar yapmamizi sagliyor
gawk-Gunu awk kullanacagiz
biz awk aracina giriyoruz arka planda gawk calisiyor olacak

awk araci metinleri records-fields olmak uzere 2 parca halinde ele aliyor
KAYITLAR(RECORDS)-ALANLAR(FIELDS)

awk araci kendisine verilmis olan veri girisinin sonuna ulasana kadar her seferinde yalnizca tek bir kayit uzerinde calisiyor

(record1) ilk satir
(record2) ikinci satir
(record3) ucuncu satir
(record4) dorduncu satir

Her bir satir record olarak el aliyor awk araci
Her bir satirdaki her bir kelime de bir field olarak ele aliyor awk araci

Diger araclarda oldugu gibi her bir satiri ayircan ozel bir karatker var \n biz bunlari dogrudan gormuyoruz ama aslinda her bir satir dan sonra yeni satira gecis karakteri bulunuyor

ilk satir \n
ikinci satir \n
ucuncu satir \n
dorduncu satir \n

iste awk araci da yeni bir satir e gecme aracini gordugunde , yeni bir satira gecildigini yani aslinda yeni bir record a gecildigini ogreniyor. Yeni satira gecis yerine, bu recordlari(satirlari) birbirinden ayirmak icin farkli degerlerde belirtebiliriz.. Ama bizim temel kullanimda boyle birseye ihtiyacimiz yok
Bizim ozel metinsel verimizde satirlar ornegin birbirinden \n degil de nokta . ile ayriliyorsa bunu awk aracina ozellikle belirtebilirz 

awk araci her bir yeni satira gecisi yeni bir kayit-record olarak ele aliyor

awk araci uzerinde records lar uzerindeki fields bolumlerine $ isareti sayesinde erisebiliyoruz
Ilk kelime $1
2.kelime $2
Son kelime $NF ile erisebiliyoruz
Recordun tamamina erismek icin ise yani tum satira $0 ile erisiriz

AWK ASLINDA SCRIPT DILIDIR
Islenecek veriler icin cesitli programlar yazmamiza, scriptler olusturmamiz a olanak sagliyor
Biz onu cok fazla uzerinde durmadan temel kullanima odaklanacagiz
awk araci metinsel verileri islemek ve programlamak ve surekli ihtiyac duydugumuz durumlarda kullanmak icin bir script dili aslinda

AWK KULLANIM
awk desen{aksiyon}
desen bulunursa aksiyon yerine getirilir
aksiyonlarin berlitilmesi gerekiyir
{print} aksiyonunu kullanacagiz cogunlukla, ama daha fazlasi icin awk --help veya man awk den ogrenebiliriz
{print} kayitlari(records-satirlari), alanlari(fields-kelimeleri), ozel metinleri, degisklenleri konsolumuza yazdirmamizi sagliyor

HER BIR KAYITTAKI ILK ALANLARI YAZDIRMAK ISTIYORUZ!!!!

adem@adem:~$ cat data1.txt
Ahmet Yaz 33
hasan mert 19
aylin uzun 24
32 mehmet KARA
naz 29 sabah

$1 1.field i temsil ediyor

adem@adem:~$ awk '{print $1}' data1.txt
Ahmet
hasan
aylin
32
naz
adem@adem:~$ 

{print} sayesinde konsole bastirma aksiyonunu yaptik burda

$3 kullanark 3.siradaki field-yani kelimeleri de bastirabilriz

adem@adem:~$ awk '{print $3}' data1.txt
33
19
24
KARA
sabah
adem@adem:~$ 

HER ZAMAN SON SUTUNUN KACINCI STUUN OLDUGUNU BILEMEYEBLIRIZ ONUN ICIN DE SON SUTUNU ALMAK ICIN ISE $NF diye belirtiriz

adem@adem:~$ awk '{print $NF}' data1.txt
33
19
24
KARA
sabah
adem@adem:~$ 

TEK TEK BASTIRMAK YERINE BIRDEN FAZLA FIELD I DA BASTITRABILIRZ 

adem@adem:~$ awk '{print $1 " " $3}' data1.txt
Ahmet 33
hasan 19
aylin 24
32 KARA
naz sabah
adem@adem:~$ 
1 VE 3.ALAN ARASINA BOSLUK BIRAKARAK BASTIRMIS OLDUK

SPESIFIK OLARK BELIRLI BIR SATIR-REOCORD DA DA ISLEM YAPABILIRZ
HER BIR RECORD NR seklinde temsil ediliyor. 

adem@adem:~$ awk 'NR==2 {print $1 " " $3 }' data1.txt
hasan 19
adem@adem:~$ 

YALNIZCA 2.SATIRDA(2.RECORDDA) KI ALANLARDAN 1 VE 3. ALANLARI BASTIRMIS OLDUK

SUBSTRING OZELLIGI-FIELD LAR ICINDE FIELDLARI PARCALAYARAK ISTEDIGMZ KISIMLARI INI ELDE ETMEK

Ilk alandaki fieldlarin 2.karakterden itibaren getir ve bastir demis oluyoruz
adem@adem:~$ awk {'print substr($1,2)}' data1.txt
hmet
asan
ylin
2
az
adem@adem:~$ 

Ilk alandaki fieldlarin 1.karakterden baslayip 3 karakter bastir diyebilirz
adem@adem:~$ awk {'print substr($1,1,3)}' data1.txt
hmet
asan
ylin
2
az
adem@adem:~$ 

Her bir field i : ya gore ayir dedik
-F field 
1.ve 2. satiri bastir dedik ve aralarina bir alta gecme isareti koy dedik 
adem@adem:~$ echo $PATH | awk -F':' '{print $1 "\n" $2}'

adem@adem:~$ echo $PATH;
/home/adem/test/demo1/:/home/adem/test/mytest/:/home/adem/test/test2/:/home/adem/Desktop/test2/:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/games:/snap/bin:/snap/bin
adem@adem:~$ echo $PATH | awk -F':' '{print $1 "\n" $2}'
/home/adem/test/demo1/
/home/adem/test/mytest/
adem@adem:~$ 

ILK DIZIN VE SON DIZINI VER DEMIS OLUYORUZ

adem@adem:~$ echo $PATH | awk -F':' '{print $1 "\n" $NF}'
/home/adem/test/demo1/
/snap/bin
adem@adem:~$ 

AWK ARACININ REGEX ILE KULLANIMI
Yalnizca satir sonunda rakam bulunan lari filtrelemek istersem
[0-9]$ rakam bulunan ve sonda olan demek..yani satir icinde sonda olan ve rakam olan veriler
adem@adem:~$ cat data1.txt
Ahmet Yaz 33
hasan mert 19
aylin uzun 24
32 mehmet KARA
naz 29 sabah
adem@adem:~$ awk '/[0-9]$/{print $NF}' data1.txt
33
19
24
adem@adem:~$ 

SONU SAYI ILE BITEN SATIRLARIN TUM ALANLARINI BASTIR DERSEK DE 
$0 tum record-satir i temsil ediyor

[0-9]$ rakam bulunan ve sonda olan demek..yani satir icinde sonda olan ve rakam olan veriler
adem@adem:~$ awk '/[0-9]$/{print $0}' data1.txt
Ahmet Yaz 33
hasan mert 19
aylin uzun 24
adem@adem:~$ 

SPESIFIK BOLUMLARI DE BELIRTIREBILIRIZ
YALNIZCA 2.ALAN-SUTUN-FIELDDA RAKAM BULUNDURAN RECORD UN 1.ALANINI BASTIR DERSEK

adem@adem:~$ cat data1.txt
Ahmet Yaz 33
hasan mert 19
aylin uzun 24
32 mehmet KARA
naz 29 sabah
adem@adem:~$ awk '$2 ~ /[0-9]/{print $1}' data1.txt
naz
$2 ~ tilde isaretini kullanma sebebimz ozellikle uzerinde calisilacak olan alanin spesifik olarak belirtilmesini sagliyor

TAM TERSI ISLEM- 2. ALANINDA RAKAM BULUNDURANLAR HARICINDEKI RECORDLARIN 1.FIELD LARINI BASTIRALIM
adem@adem:~$ awk '$2 !~ /[0-9]/{print $1}' data1.txt
Ahmet
hasan
aylin
32
adem@adem:~$ 

OKUNAKLI CIKTI ALMAK
Bazen okudugmuz icerik cok uzun olabiliyor ve ekrana sigmiyor normalde grafiksel arayuz terminal i kullanince kaydirma cubugu ile yukari cikip goruyoruz ama biz herzaman bu sekilde kaydirma cubugumz olmayablir, bazi komut sarirlarinda olmadigi gibi..Onun icinde ekranda okunabilir sekilde uzun metinleri nasil cikti aliriz ona bakalim 

MORE ARACI KOMUTU
Console ekranina sigmayacak uzunluktaki metinleri, ekrana sigacak sekilde ekrana basar

adem@adem:~$ ls -l | more
ile ekrana sigdigi kadar olan ilkk bolum u listleer sonra da more buton gibi gelir space tusuna bastikca karsimiza gelecektir
adem@adem:~$ cat /etc/passwd | more

Verileri sonuna kadar gormeden cikmak istersek Q tusuna basariz

LESS ARACI
Verileri geriye donuk olarak da incelemek icinkullanilir 

adem@adem:~$ less /etc/passwd
Ilk once ekrana sigacak kadar kismi gosterir sonra da , asagi ve yukari ok tuslari ile 1 er satir asagi veya yukari gidebilirz ve de space tusu ile de istersek 1 sayfa sonrasini yani 1 satir degil de 1 ekran kadar ileriki satirlari goruruz..ve Q  ile de cikariz

B tusu ile 1 sayfa geri gidebilirim-Back
F tusu ile de 1 sayfa iler i gidebilirim-Forward

HEAD ARACI
Dosya icerigini en basindan itibaren ilk 10 satiri getirir varsayilan olarak ama biz satir sayisi belirtirsek o zaman da kendisi belirtilen satir kadarini bize gosterecektir

adem@adem:~$ head -n 3 /etc/passwd
root:x:0:0:root:/root:/bin/bash
daemon:x:1:1:daemon:/usr/sbin:/usr/sbin/nologin
bin:x:2:2:bin:/bin:/usr/sbin/nologin


adem@adem:~$ ls -l /etc/ | head


TAIL-KUYRUK 
En sondan itibaren default olarak ilk 10 satiri getirir ama biz spesifik satir saysi belirtirsek de o kadar satiri bize getirir
adem@adem:~$ tail -n 3 /etc/passwd
mysql:x:129:137:MySQL Server,,,:/nonexistent:/bin/false
postgres:x:130:138:PostgreSQL administrator,,,:/var/lib/postgresql:/bin/bash
admin:x:1001:1001:,,,:/home/admin:/bin/bash
adem@adem:~$ 

adem@adem:~$ ls -l /etc/ | tail -n 4
total 1300
drwxr-xr-x  3 root     root      4096 feb.  23  2023 acpi
-rw-r--r--  1 root     root      3028 feb.  23  2023 adduser.conf
drwxr-xr-x  3 root     root      4096 feb.  23  2023 alsa
adem@adem:~$ 

tail aracinin ANLIK VERI TAKIBI DE YAPAR AYRICA

-f following
tail -f secenegi sayesinde bir dosyaya en son eklenen verileri anlik olarak takip edebiliyoruz

Yani biz bir taraftan bir dosya icine manuel olarak veri girerken baska bir console dan da o dosyaya anlik olarak girilen veriyi gorebiliyoruz tail -f secenegi sayesin de


adem@adem:~$ cat > text12.txt
Hello
world
what is
your
name

adem@adem:~$ tail -f text12.txt
/etc/profile.d/im-config_wayland.sh
/etc/profile.d/apps-bin-path.sh
/etc/profile.d/xdg_dirs_desktop_session.sh
/etc/profile.d/gnome-session_gnomerc.sh
/etc/acpi/asus-keyboard-backlight.sh
/etc/acpi/ibm-wireless.sh
/etc/acpi/undock.sh
/etc/acpi/tosh-wireless.sh
/etc/acpi/asus-wireless.sh
/etc/gdm3/config-error-dialog.sh
tail: text12.txt: file truncated
Hello
world
what is
your
name

TAKIP ISLEMINI DURDURMAK ICIN DE CTRL-C KULLANIRIZ

BU TAIL -f KULLANIMINI OZELLILE LOG DOSYALARINI INCELERKEN, SON ANDA DEGISIKLIGE UGRAMIS DOSYALAR HAKKINDA BILGI ALMAK ICIN , VE O DOSYA ICERIGINI ANLIK OLARAK TAKIP ETMEK ICIN KULLANIYORUZ...

KOPYALAMA - TASIMA ISLEMLERI

cp test12.txt test122.txt
ayni bulundugu konuma(konum belirtilmedigi icin) ismi degistirilerek kopyalanmis oldu

cp test12.txt /tmp/
/tmp/ bu dizin altina ayni orjinal ismi ile kopyalanir, kopyalancak isim belirtilmediginden dolayi

adem@adem:~/Documents$ cp test12.txt ~/Documents/
isim vermezsek kendi ismi  ile kopyalar
adem@adem:~/Documents$ ls
findme  test12.txt

BIRDEN FAZLA DOSYAYI DA AYNI ANDA KOPYALAYABILIRIZ 

dem@adem:~$ cp myfile1 myfile2 myfile3 ~/Documents/

cp araci en son girilen argumen i hedef dizin olarak tanir, yani kopyalancak dizin

BURAYA DIKKAT!!!
Yalniz cp aracinin soyle bir handikabi var, biz kopyalacagimiz dosylar ile ayni isimde dosya eger kopyalanacak hedef dizin de var ise o zaman gider o ayni isimdeki dosyanin bir onceki verilerini silip yeni gelen dosya verilerini uzerine yazar!!!!

cp -i secenegini kullanarak, yapilan kopya isleminde eger ayni isimde dosya var ise bizim onaymizidan gecmesini saglayabiliriz

adem@adem:~/Documents$ cat > ~/myfile
Hi, god dag!
adem@adem:~/Documents$ cp -i  ~/myfile ~/Documents/
cp: overwrite '/home/adem/Documents/myfile'? N
adem@adem:~/Documents$ paste myfile
Selam
adem@adem:~/Documents$ cp -i ~/myfile ~/Documents/
cp: overwrite '/home/adem/Documents/myfile'? Y
adem@adem:~/Documents$ paste myfile
Hi, god dag!
adem@adem:~/Documents$ 

BIZ SADECE DOSYALARI DEGIL, DIZINLERI DE KOPYALABILIRIZ... 
KOPYALAMANIN RECURSIVE SEKILDE GERCEKLESTIRILMESI, OZELLIKLER BELIRTILMESI!!!
-r  recursive

cp -r ~/Documents/ /temp/  
Documents dizini altindaki tum dizi ve dosyalar, altlarindaki doysa ve dizinler ile birlikte /temp/ klasoru altina kopyalanacktir.

KENDIMZ ISIM VERIP DE ISIM VERDGMIZ KLASOR E DE KOPYLANAMASINI SAGLAYABILIRIZ 
cp -r ~/Documents/ /temp/Doc
Doc klasoru altina kopyalanacaktir.. 

MV ARACI - DOSYA TASIMA

adem@adem:~/Documents$ mv ~/Documents/myfile ~/myfilee
mv ~/Documents/myfile ~/myfilee 
~/Documents/myfile bu dosyayi ~/myfilee bu dizine bu isimle kaydet demis oluyoruz.. 

MV-BIR DOSYA ISMINI DEGISTIRMEK  ISTEDGIMZ DE DE KULLANABILIRIZ 
bir dosyayi ismini degistirmek icn , eger ayni dizinden ayni dizine yani bulundugu yerden bulundugu yere ismini degistirerek tasirsak, icerik zaten ayni oldugui icin dosyanin sadece ismi degismis olacaktir

adem@adem:~$ mv myfilee myfil
myfilee isimli dosyayi myfil ismi ile degistirmis olduk...yani rename yapmis olduk aslida

BIRDEN FAZLA DOSYAMIZI DA AYNI ANDA TASIYABILIRIZ

adem@adem:~/Documents$ mv ~/test{12..13}.txt ~/Documents/
test12.txt ve test13.txt dosyalarini al ve Documents klasoru altina tasi diyoruz

MV ILE BIZ KLASORLERI DE TASIYABILIRZ TABI KI 
VE CP ARACINDAKI GIBI EKSTRA -r belirtmeden yapabilirz
adem@adem:~$ mv ~/Documents/doc ~/
TASIRKEN KLASOR ISMI DEGISTIRMEK ISTERSEK DE ASAGIDAKI GIBI ISIM BELIRTEREK TASIRIZ
adem@adem:~$ mv ~/Documents/doc ~/myloc

DIKKAT ETMEMIZ GERKEN NOKTA
KLASOR TASIMA ISLEMINDE EGER KLASORU TASIMAK ISTEDGIMZ YERDE BIZIM YENI VERDGIMIZ ISIM ILE AYNI ISIMDE BASKA BIR KLASOR VAR ISE GIDIP O VAR OLAN KLASORUN ALTINA YERLESTIRECEKTIR

OLASI VERI KAYIPLARINI ONLEMEK ICIN, UZERINE YAZMA DURUMUNA DIKKAT EDLEIM

COKLU TASIMA ISLEMLERInde TASINAN DOSYA ILE AYNI ISIMDE DOSYA TASINAN DISIN DE VAR ISE
Coklu dosya tasima islemerinde eger tasinan yerde ayni isimde bir dosya var ise uzerine yazacagi icin, verikayiplari yasayabliriz ondan da dolayi, tasidgimiz dizinde tasidigmz dosya ile ayni isimde dosya var ise tasima islemini tamamlamadan bize sormasini isteyebiliriz

mv -i ~/myfile ~/Documents/
overwrite? diye bize soracaktir
Y Ye basarsak onay vermis olacagiz 
N ye basarsak onay vermemis oluruz tasima islemini yapmaz


EN BASTAN TASINAN DOSYA ILE AYNI ISIMDE DOSYA TASINDIGI YERDE VAR ISE OVERWRITE OLMASIN UZERIJNE YAZMA OLMASIN DIYE EN BASTAN BELIRTEDEBILIRIZ

mv -n test{1..4}.txt myfile1.txt myfile2.txt ~/Documents/
Bu sekilde , test1.txt,test2.txt,test3.txt,test4.txt,myfile1.txt myfile2.txt dosyalarini ~/Documents/ bu dizine tasi ama eger bu dizin de tasiana dosyalar ile ayni isimde dosya var ise o zaman tasimayi reddet, tasima, yani bana sormadan direk o ayni isimde olan dosyalarin tasima islemini durdur demis oluruz -n option ini kullanarak

TEK TEK HEPSINI YES-Y NO-N SEKLINDE ONAYLAMAK VEYA REDDETMEK ISTERSEK DE...
mv -i  dersek o zaman da ayni isimde dosya var ise bizim onaymizdan gecerek tasima tamamlansin deriz ve ? bize sorar Y dersek tasir, N DERSEK TASIMAZ

RM ARACI- (REMOVE ARACI-DOSYA VE KLASOR SILME) 
Dosya ve klasorlerin silinmesi icin kullanilir

rm komutu ile tek bir dosya yi da silebilirz istersek ayni anda birden fazla dosyayi da silebiliriz!!!!
adem@adem-ThinkPad-13-2nd-Gen:~$ rm ae.txt af.txt
adem@adem-ThinkPad-13-2nd-Gen:~$ rm ae.txt af.txt

SILME ISLEMINI KONTROLLU SEKILDE HER SILMNE ISLEMINDE BIZDEN ONAY SORULMASINI ISTERSEK!
adem@adem-ThinkPad-13-2nd-Gen:~$ rm -i ag.txt bd.txt
rm: remove regular empty file 'ag.txt'? Y
rm: remove regular empty file 'bd.txt'? N

KLASOR-DIZIN SILME ISLEMI

Normalde rm komutu yalin hali ile sadece dosyalari siler.
Ici bos olan dizinleri silmek icin -d option i ile kullanmaliyz 
ada isimli klasoru silmek icin kullaniriz!!

adem@adem-ThinkPad-13-2nd-Gen:~$ rm -d ada

ICERISI DOLU OLAN KLSOR SILMEK ICIN ISE:
Bizim ada/ada1/ada1.txt klasorler ve dosyalarimz var 
Icin dolu olan, klasor-dizinleri silmek icin:
Tum alt klasorleri ozyinelemeli sekilde yani -recursive sekilde silmek icin -r option i ni kullanabilirz
adem@adem-ThinkPad-13-2nd-Gen:~$ rm -r ada

Toplu Sekilde Silme Yaparken Bize bilgi verilmesini istersek eger!
Bazen biz, hangi dosyalarin silindiginin kaydini tutmak isteyebiliriz...Bunun icin scirpt yazarken boyle seyler cok lazim oluyor!!!!
adem@adem-ThinkPad-13-2nd-Gen:~$ rm -v {1..5} 
rm: cannot remove '1': Is a directory
rm: cannot remove '2': Is a directory
rm: cannot remove '3': Is a directory
rm: cannot remove '4': Is a directory
rm: cannot remove '5': Is a directory
adem@adem-ThinkPad-13-2nd-Gen:~$ 

SHRED ARACI KALISIC SILME ISLEMI!
Silme Islemi Nasil Gerceklestirilir?
Normalde bilgisayarimiz uzerinde bir dosya sildgimiz de o dosya tamamen yok olmuyor
 Isletim sistemleri dosya silme komutu aldiklarinda o dosyayi diskten silmek yerine, o dosyay ulasilmasini saglayan yolun bilgsini siliyorlar, yani ilgili dosya hala fiziksel olark disk uzerinde tutuluyor, olmasina ragmen, dosya ya giden yolun baglantisi silindigi icin ilgili dosyaya ulasilamiyor. Bu yontemin kullanilma amaci, bu yontem dosyayi fiziksel olarak silme ye oranla cok daha hizli olmasidir

 DOSYA Kalici olarak Nasil Silinir?
 Gercek silme dedgimiz kavram, disk uzerinde yer kaplayan her turlu verinin ancak uzerine yeni veriler yazilarak, ortadan kaldirilabilecek olmasi demektir. Cunku diskte fiziksel olarak tutulan bu veriler uzerine  yazilarak tahrip edilmedikleri zaman cesitli kurtarilma yontemleri ile kurtarilmalari mumkundur
 Ozetle bir dosyayi kalici olarak geri getirilemeyecek sekilde silinmesini isterseniz o dosyanin uzerine defalarca, rastgele verilerek yazarak bunu yapabilirsiniz
 Pekcok isletim sisteminde bu uzerine yazarak silem islemini harici yazilimlarla yapilabilirken Linux da bu, varsayilan olarak kullanilabilen shred araci ile mumkun olmaktadir

 shred araci ile biz linux de dosya uzerine rastele veriler yazilarak dosya icerigini tahrip edebiliyoruz ve ondan sonra da artik dosyayi guvenle silebiliriz. Cunku dosya gercekten geri getirilse bile orjinali tahrip edildigi icin, orjinal icerige erisilemiyor tabi ki

 shred aracinin varsayilan olarak kullanlmasi 
 Dogrudan kullanildiginda 3 kez rastgele verilen dosya icerigine bitler yazilmasini saglar
 3 den fazla yazilmsini saglamak icin de bunu -n option i ile belirtmeliyiz

adem@adem-ThinkPad-13-2nd-Gen:~$ shred readme
adem@adem-ThinkPad-13-2nd-Gen:~$ cat readme
����-��v)�����bҮ^�pb�����&TԽ��o�Ś��_ bu sekilde rastgele uzun uzn icerikleri 3 kez yazarak orjinal iceirigi tamamen tahrip edecektir

UZEIRNE RASTGELE VERILER YAZILMASINI ISTIYROUZ AMA AYRITILI BILGI ALMAK VE BU ISLEMI TAKIP ETMEK ISTERSEK!
-v(verbose)
adem@adem-ThinkPad-13-2nd-Gen:~$ shred -v  readme

Hem ayrintli bilgi verilsiin hem de dosya uzerine 5 kez rastgele veirler yazilsin istersek 
-n(number) option 
-v(verbose) option - ayrintli
adem@adem-ThinkPad-13-2nd-Gen:~$ shred -vn 5  readme
shred: readme: pass 1/5 (random)...
shred: readme: pass 2/5 (ffffff)...
shred: readme: pass 3/5 (random)...
shred: readme: pass 4/5 (000000)...
shred: readme: pass 5/5 (random)...
adem@adem-ThinkPad-13-2nd-Gen:~$ 

Ayrica shred komutuna biz uzerine rastgele veriler yazdiktan sonra bu dosyayi silmesini de soyeleyebiliriz

-u() islem tamamlandigind ilgili dosyayi silmesini soyler

adem@adem-ThinkPad-13-2nd-Gen:~$ shred -uvn 5 readme
shred: readme: pass 1/5 (random)...
shred: readme: pass 2/5 (000000)...
shred: readme: pass 3/5 (random)...
shred: readme: pass 4/5 (ffffff)...
shred: readme: pass 5/5 (random)...
shred: readme: removing
shred: readme: renamed to 000000
shred: 000000: renamed to 00000
shred: 00000: renamed to 0000
shred: 0000: renamed to 000
shred: 000: renamed to 00
shred: 00: renamed to 0
shred: readme: removed
adem@adem-ThinkPad-13-2nd-Gen:~$ 

silerken dosya ismini de surekli degistire degistire sildigi icin dosya ismini de tahrp ettigi icin, birisi bu dosyayi kurtarmaya calissa, dosyanin ismine dahi ulasamayacktir
Islem biraz uzun sureibliyor, islem tamamlana kadar beklemek gerekiyor

SEMBOLIK VE KATI LINK 

Link Yapisi ve inode kavrami
Isletim sistemini olusturan dosya sistemindeki tum veriler depolama birimlerinde-fiziksel diskte bloklar halinde tutuluyuorlar
Biz bir dosya ya erisecegimiz zaman bloklar halinde diskte tutulan o dosyaya ait verinin bulunmasini saglayan index node isimli bir yapi bulunuyor, buna da kisaca inode deniyor
Diskteki bir verinin hangi dosyanin verisinin hangi blokta oldugu bilgisine inode uzerinden erisebiliyoruz
Ornegin bir dosya olusturuldugunda bu dosya icerigi o an icin diskte bos olan bir blok veya bloklara yerlestirildginde o dosynin yerlestirildigi blok veya bloklarin numarasi, uniq numarasi inode a ataniyor ve bu olusturulan dosya da inode degerine link olarak baglaniyor!!!!ki inode degeri ile bu olusurulan dosya nin hangi bloklarda bulundugu bilgisine erisilebilsin
Bu sayede ornegin yeni olusurulmus bir dosya okunmak istendiginde aslinda, bu dosyanin bagli oldugu inode degerine bakiliyor, inode degerinin disk uzerinde isaret ettigi bloklardan bu veriler getiriliyor

DIKKAT COK IYI ANLAYALIM!!ISIN MANTIGI ANLATILIYOR BURDA
Yani aslinda ornegin text.txt dosyasi uniq bir inode degerine bagli olan bir linktir!!!! inode degeri de ilgili verinin diskteki yerini bildigi icin, text.txt linki uzerinden bu verilere kolaylikla ulasabiliyoruz
Dosya sistemimizdeki her bir dosya ya iste bu uniq inode degerleri uzerinden erisiliyor arka planda
Bizim gordugmz dosya ve klasor isimleri yalnizca inode degerlerine yonlendirme yapan linklerdir!!!!!!
Bu dosya isimlerinin var olmasi ve tamamen aslinda link gorevi gormesi, biz insanlarin disk uzerindeki verilere kolaylkla erisebilmesi icin okunakli isimlerden olusan baglanti noktalaridir aslinda

SEMBOLIK LINK (SOFT LINK)
Sembolik linkleri siradan kisayollara benzetebiliriz
 Gorevleri yalnizca orjinal dosya iceriklerine yonlendirme yapmaktir

Sembolik link olusturmak icin ln araci kullanilir 
ln araci

adem@adem-ThinkPad-13-2nd-Gen:~$ ln -s links/mytext mySembText2
Sembolik link olustururken kesin yolu belirtmk cok onemlidir, goreceli yolu degil!!!! Cunku biz bu mySembText2 kisa yol dosyasini baska bir yere tasiyabiliriz, kendisine goreceli yol calismayabilir,ama absulute-kesin yolu belirtirsek sorun olmaz
mytext dosya icerigine mySembText2 uzerinden erisebiliyor olacagiz!!
Yani olusrda sembilikdosya olan mySembText2 dosyasinin konumu degistirilirse, mySembText2 uzerinden, ona kisa yol olsuturulan dosyaay erisebilmemiz icin goreceli yol ile degil kesin adres-yolu ile mySembText2 olusturulmalidir

adem@adem-ThinkPad-13-2nd-Gen:~$ ln -s ~/links/mytext mySembText2
adem@adem-ThinkPad-13-2nd-Gen:~$ cat mySembText2
deneme-deneme
ls -l ile mySembText2 nin de oldugu dosyalari listelersek eger 
lrwxrwxrwx  1 adem adem   23 des.  17 21:46 mySembText2 -> /home/adem/links/mytext
l-link demektir

adem@adem-ThinkPad-13-2nd-Gen:~$ mv mySembText2 ~/Documents/
adem@adem-ThinkPad-13-2nd-Gen:~$ cd Documents
adem@adem-ThinkPad-13-2nd-Gen:~/Documents$ ls -l
total 0
-rw-r--r-- 1 root root  0 des.  14 23:48 findme
lrwxrwxrwx 1 adem adem 23 des.  17 21:46 mySembText2 -> /home/adem/links/mytext
Dikkat edersek, yolu dogru bir sekilde bulabiliyor: mySembText2 -> /home/adem/links/mytext
adem@adem-ThinkPad-13-2nd-Gen:~/Documents$ cat mySembText2
deneme-deneme

GORELI(RELATIVE) YOL : links/mytext mySembText2 - Bu sadece o dizinde gecerli olacaktir... 
KESIN YOL(ABSOLUTE) YOL: ~/links/mytext mySembText2 - Bu ise linux dosya sistemi uzerindde hangi dizine gidersek gidelim heryerden erisilebilecektir

SEMBOLIK LINK(KISA YOL LINKI GIBI) UZERINDEN ORJINAL DOSYAYA VERI YONLENDIRMEK

adem@adem-ThinkPad-13-2nd-Gen:~/Documents$ echo "new data" >> ~/Documents/mySembText2
adem@adem-ThinkPad-13-2nd-Gen:~/Documents$ cat ~/Documents/mySembText2
deneme-deneme
new data
adem@adem-ThinkPad-13-2nd-Gen:~/Documents$ cat ~/links/mytext
deneme-deneme
new data
adem@adem-ThinkPad-13-2nd-Gen:~/Documents$ 

sembolik link uzerinden olsuturulan dosya olan mySembText2 dosyasina ekleme yaptgimzda, orjinal dosya uzerinden, inode -uniq indexnode uzerinden disk uzerine yaziliyor ve bu sayede direk orjinal dosya uzerine ekleme yapmis gibi, hem mySembText2 sembolik linkd dosyasinda hem de ~/links/mytext orjinal dosyasinda degisiklik gerceklesmis oluyor

KISACA, SEMBOLIK BAGLANTILAR-mySembText2 aslinda orjinal dosyay yoneldirma yapan kisayol dosyalaridir. Bu sebeple orjinal dosyalar eger silirse, sembolik dosya uzerinden orjinal dosya verisine ulasmamiz mumkun olmuyor
Silme isleminde de bahsedildigi uzere bir dosya silindiginde arka planda o dosya uzerinden diskteki verileri bulunmasini saglayan inode baglanti uniq-id si silinmis oluyor, diskte veriler duruyor ama, artik o dosya uzerinden o verilere erisilemiyor
Bu sekilde normal silinen dosyalar a da sonra dan erisilebilnir aslinda, sadece o dosyaya ait yolun- inode nin tekrar dan kesfedilmesi gerekiyor

ORJINAL DOSYAMIZI SILIP TEKRARDAN O DIZIN ICIN SEMBOLIK BIR DIZIN OLUSTURMAK!!!!

adem@adem-ThinkPad-13-2nd-Gen:~/Documents$ rm ~/links/mytext
adem@adem-ThinkPad-13-2nd-Gen:~/Documents$ ls
findme  mySembText2
adem@adem-ThinkPad-13-2nd-Gen:~/Documents$ cat ~/Documents/mySembText2
cat: /home/adem/Documents/mySembText2: No such file or directory
adem@adem-ThinkPad-13-2nd-Gen:~/Documents$ cat ~/links/mytext
cat: /home/adem/links/mytext: No such file or directory
adem@adem-ThinkPad-13-2nd-Gen:~/Documents$ 

adem@adem-ThinkPad-13-2nd-Gen:~/Documents$ ln -s ~/links/ links-symbolic
adem@adem-ThinkPad-13-2nd-Gen:~/Documents$ ls -l
total 0
-rw-r--r-- 1 root root  0 des.  14 23:48 findme
lrwxrwxrwx 1 adem adem 17 des.  17 22:23 links-symbolic -> /home/adem/links/
lrwxrwxrwx 1 adem adem 23 des.  17 21:46 mySembText2 -> /home/adem/links/mytext
adem@adem-ThinkPad-13-2nd-Gen:~/Documents$ 

links-symbolic artik /home/adem/links/ buraya yonlendirilecek, biz links-symbolic icerisine bir dosya atarsak, hemen /home/adem/links/ buraya yonlendirilmis olacaktir

adem@adem-ThinkPad-13-2nd-Gen:~/Documents$ echo "Hello, world- test" > links-symbolic
bash: links-symbolic: Is a directory
adem@adem-ThinkPad-13-2nd-Gen:~/Documents$ echo "Hello, world- test" > links-symbolic/text.txt
adem@adem-ThinkPad-13-2nd-Gen:~/Documents$ cd links-symbolic
adem@adem-ThinkPad-13-2nd-Gen:~/Documents/links-symbolic$ ls
text.txt
adem@adem-ThinkPad-13-2nd-Gen:~/Documents/links-symbolic$ cat text.txt
Hello, world- test
SEMBOLIK LINK ICINE OLUSTURULAN DOSYA NIN , SEMBOLIK LINKIN YONLENDIRILDIGI DIZINDE DE OLSTURULDUGUNU GOREBILIRIZ
adem@adem-ThinkPad-13-2nd-Gen:~/Documents/links-symbolic$ cd ~/links
adem@adem-ThinkPad-13-2nd-Gen:~/links$ ls
text.txt
adem@adem-ThinkPad-13-2nd-Gen:~/links$ cat text.txt
Hello, world- test

AMA SUNU BILMELIYIZ KI, ORJINAL DIZIN SILINIR ISE, ARTIK BIZ links-symbolic UZERINDEN, ORJINAL DIZIN VE DOSYA YA DA ERISEMEYIZ
SEMBOLIK LINKLERI DE SILMEK ICIN YINE rm, rm -d, rm -r araclarini kullanabiliriz!!!!

KATI LINK(HARD LINK) 
Kati linkleri olusturmak icin ln komutunu kullanmamiz yeterlidir

adem@adem-ThinkPad-13-2nd-Gen:~$ ln links/text.txt hard-text
adem@adem-ThinkPad-13-2nd-Gen:~$ ls -l
-rw-rw-r--  2 adem adem   19 des.  17 22:27 hard-text
kati-hard linklerde diger standart dosyalar gibi oldugu icin bunlarda -l ile baslamaiyor normal diger dosyalar gibi rw-rw-r--  2 adem adem   19 des.  17 22:27 hard-text
hard-link denilen kavram, sistemimiz uzerindeki tum standart dosya ve dizinleri temsil ediyor
Aslinda olusturdugmuz orjinal metin dosyasi da disk uzerinde verilere yonlendirme yapan bir kati linktir
Biz yeni bir kati-link olustrudgumz zaman tipki orjinal dosya gibi, bizi diskteki verilere yonlendiren inode degerine baglanti olusturmus oluyoruz aslinda, hatirlayacak olursak sembolik linkler, orjinal linklere, yani aslinda kati linkli dosyalara yonlendirme yapiyordu, ordan da disk uzerindeki verilere ulasabiliyordu. Kati linkte ise hem orjinal dosya hem de yeni olusturdugumuz bu, kati link dosyasi ayni inode degerine bagli oldugu icin, ayni disk  verisinin yerini biliyor ve bizi oraya yonlendirebiliyor, yani aslinda hem orjinal dosya hem de hard-link dosyasi birere kati-baglantidir, birer hard-link tir.
Dolayisi ile biz hard-link dosyasi veya orjinal dosya uzerinde birisinde degisklik yapinca bu degisikligi her iki dosyadan da alabiliyoruz.
HATTA, ORJINAL DOSYA SILINSE BILE, YENI OLUSTURMUS OLDUGUM KATI-LINK DOSYASI YINE AYNI INODE DEGERINE SAHIP OLDUGU ICIN, DISK UZERINDE TAM OLARAK HANGI BLOKLAR UZERINDE OLDUGUNU BILIYOR VE BENIM BU VERILERE ULASMAMI SAGLIYOR

HARD-LINK DOSYASI UZEIRNDEN YENI VERI EKLEYIP TEST EDELIM
adem@adem-ThinkPad-13-2nd-Gen:~$ echo "new-data" >> hard-text
adem@adem-ThinkPad-13-2nd-Gen:~$ cat hard-text
Hello, world- test
new-data
adem@adem-ThinkPad-13-2nd-Gen:~$ cd links
adem@adem-ThinkPad-13-2nd-Gen:~/links$ ls
text.txt
adem@adem-ThinkPad-13-2nd-Gen:~/links$ cat text.txt
Hello, world- test
new-data
adem@adem-ThinkPad-13-2nd-Gen:~/links$ 

ORJINAL DOSYA UZEIRNDEN VERI EKLEYIP TEST EDELIM
adem@adem-ThinkPad-13-2nd-Gen:~/links$ cat >> text.txt
additional data from text.txt
adem@adem-ThinkPad-13-2nd-Gen:~/links$ 
adem@adem-ThinkPad-13-2nd-Gen:~/links$ cat text.txt
Hello, world- test
new-data
additional data from text.txt
adem@adem-ThinkPad-13-2nd-Gen:~/links$ cat ~/hard-text
Hello, world- test
new-data
additional data from text.txt
adem@adem-ThinkPad-13-2nd-Gen:~/links$ 

ORJINAL DOSYAYI SILIP KATI-LINK I TEST EDELIM
adem@adem-ThinkPad-13-2nd-Gen:~/links$ ls
text.txt
adem@adem-ThinkPad-13-2nd-Gen:~/links$ rm text.txt
adem@adem-ThinkPad-13-2nd-Gen:~/links$ ls
adem@adem-ThinkPad-13-2nd-Gen:~/links$ cat ~/hard-text
Hello, world- test
new-data
additional data from text.txt
adem@adem-ThinkPad-13-2nd-Gen:~/links$ 
GORULDUGU UZERE ORJINAL DOSYA SILINMESINE RAGMEN KATI-LINK DOSYASI  UZERINDEN BIZ VERILERE ERISEBILIYORUZ!!!!CUNKU KATI LINK DOSYASI DOGURDAN INODE-INDEX NODE BAGLANTI ID SINE BAGLANIYORDU, DISK UZERINDEKI VERILERIIN HANGI BLOK DA OLDUGUNU BELIRTEN

KISACASI KATI LINK SAYESINDE - HARIKA BIR MANTIK...COK IYI ANLAYALIM!!!!
Ayni veriler icin , tekrar tekrar disk alaninin harcanmasina gerek kalmadan dosya yedeklerinin alinmasi mumkun oluyor!!! BU MANTIK TAM OLARAK, REFERANS TIPLER ILE AYNI MANTIKTA VE TAM OLARAK REFERANS TIPLERE ORNEK OLARAK VERILEBILECEK BIR YAPIDIR!!!!!COOOK ONEMLI!!!!
TABI KI BURDA KATI-LINK LER UZERINDEN DOSYALAR ZARAR GORUR ISE EGER DOSYALARIN YEDEGI DOSYA KAYBOLMUS OLUR!!!!!!
YANI YALNIZCA NORMAL RM ILE SILINDIGINDE DOSYAMIZIN INODE ILISKININ KOPARILMASI ILE DISKTE SILINMEYEN AMA BIZIM MEVCUT DOSYAMIZ IN DISK ILE BAGLANTISI OLAN INODE KOPARILDIGINDAN DOLAYI ARTIK O DOSYA LINK OZELLIGINI KAYBETTIGI ICIN, VERILERE ERISEMIYOR..ISTE BOYLE DURUMLRDAKI SILEM ISLEMLERNE KATI-LINK ILE ONLEM ALABILIYORUZ YOKSA , SHRED ILE DOSYA UZERINE RASTGELE BIRCOK KEZ YAZARAK DOSYA ICERIGININ TAHRIP EDILMESI DEGIL
VERILERIN TAHRIP EDILME RISKI VAR ISE TABI KI BUNLARI NORMAL KOPYALAMA ISLEMI ILE KOPYALAYIP, YENI BIR BAGLATNI INODE NUMARASI OLUSTURULARAK FARKLI YERLERDE YEDEKLEMEMIZ GEREKIYOR

KLASORLER ICIN KATI LINK OLUSTURMAK MUMKUN DEGILDIR..DIKKAT EDELIM SEMBOLINK LINKLERDE BUNU YAPABILIYORDUK!!!
adem@adem-ThinkPad-13-2nd-Gen:~$ ln links/ links-hard
ln: links/: hard link not allowed for directory
adem@adem-ThinkPad-13-2nd-Gen:~$ 

METIN EDITORLERI
Biz eger grafiksel ara  yuz uzerinde calisiyorsak, her grafiksel arayuzun kendisine ait grafik arayuzu mevcuttur. 
Ama bizim ihtiyacimiz olan grafiksel arayuz  olmadiginda, ozellikle serverlarda islem yaparken, dosyalarimizin iceriklerine dogrudan mudahele edebilmek, edit leyebilmek

TEMEL DUZEYDE METIN EDITORLERINI KULLANABILME YETENEGI COK KRITIK ONEME SAHIPTIR!!!!!BUNLARIN KESINLIKLE BILINMESI GEREKIYOR!!!
SOZ KONUSU SISTEMI KOMUT SATIRI UZERINDEN YONETMEK OLDUGUNDA..KOMUT SAITRINDAKI ISLEMLERIMIZI ETKILI SEKILDE HAHLLEDEBILMEK COK KRITIK ONEME SAHIPTIR!!!! 

NANO ARACI 

adem@adem-ThinkPad-13-2nd-Gen:~$ nano newfile.txt

nano araci gidi newfile.txt dosyasi var mi diye bakar, eger var ise var olan dosya nin icerigini bize acar, eger yok ise o zamanda yeni bir newfile.txt dosyasi olustur ve o olusturdugu dosyayi bize acar.. ve dosyanin en altinda 
^G Help ^O Write OUt ^Where Is
^X Exit ^R Read File ^\Replace
^ isareti CTRL anlamina gelmektedir
M isaretleri de ALT tusun anlamina gelmektedir

^X Exit demek CIKMAK ICIN CTRL-X E BAS DEMEKTIR
^O WRITE OUT -(CTRL-O)-YAZDIGIM VERILERI KAYDETMEK ICIN, bize dosya ismini degistirmek isteyip istemedigmzi sorar, yani degistirirsek, farkli kaydet yapmis gibi olur aslinda, ve bize tekrardan sorar, dosya ismini degistirmek istiyor musun diye biz de YES-Y ye basarsak bundan sonra biz dosya ismini orneign newfile.txt den newfile1.txt olsun dedi isek ilk basta biz newfile.txt dosyasinin iceriginie girmistik ama simdi dosya ismini degistrdigmz icin artik degistridgmz dosya yi bize acacaktir1!!!!!
^O WRITE OUT-(CTRL-O)
Biz dosys yi bu sekilde kaydederken dosya ismini degistirmek istersek dosya nin konumunu da degstirerek yazabiliyoruz
yani isim yerine ~/Documents/newfile11.txt yazarsak, artik iceriginii ve ismini ve yolunu degistirdigmz sekilde verdgimz adres e kaydedilecektir
Biz yine dosyayi kaydederken ^T-CTRL-T ile dizin-dosyalar uzerinde gezinebiliyoruz, klavye yukari asagi tuslari ile dizinler arasinda gezebiliyorz, ornegin ust dizine cikmak iicn de .. dosyasina gelince enter a basariz ya da alt klasorlere gitmek istersek de Documents  e gelince entter a basarsak da Documents icine girerriz!!!!  Yani dogrudan dizinler arasindan secerek de kayit yapabiliriz

Veri kaydetmek icin CTRL-X  e basarak BIZE YES-Y , NO-N , CANCEL-C SECENKELRI GELIR
AYRICA Dosya icine girdigimizde eger dosya iceriginde degisiklik  yaparsak, dosyanin ustte isminin bulundug yerde * iconu olusuyor, bu o dosya da dgisiklik  yapildigini ifade eder

^R-Read File- CTRL-R ile BASKA BIR DOSYA ICERIGINI OKUYUP O AN UZERINDE ISLEM YAPTIGMZ DOSYAYA AKTARABILIYORUZ!!!
Bir dosaymizi nano newfile.txt ile actiktan sonra
CTRL-R yapinca bize hangi dosyanin iceriye aktarilacagi soruluyor, biz burda istersek direk olarak ~/test.txt diye yazarak dosya yolunu belitererk istersek de CTR-T Ile browser yaparak, dogrudan .. aracina gelince enter ile basarak bir uste, direk dizinlere tiklayinca da o dizinin icine girerek, yon tuslari ile istedgimz dosyayi secebiliriz ve biz en son mouse imlecimizi nerde birakti isek ordan itibaren sectigimz dosya icerigini getirecektir, veya ekleyecektir
Icergini getirdgimiz dosya iceriginde ornegin bazi spesifik icerikler ariyoruz, cunku uzun bir icerik getirmis isek muhtemelen arayacigimz spesifik icerikler olacaktir!!!!!BUNUN ICIN ISE, BASKA BIR DOSYANIN ICERIGINI GTEIRDIKTEN SONRA.. 
^W WHERE IS - CTRL-W secenegi ile spesifik kelimleri arama yapabiliriz, Search diye bir secenek geliyor alta oraya aramak istedigm kelimeyi  yazarak arama yapabilirim
Ornegin aradigmz kelimeden birden fazla var ise bir sonraki kelimeye gecmek icin tekrardan CTRL-W YAPARZ
SEARCH WORD:CTRL-W geoserver
NEXT SEARCHED WORD: CTRL-W -geoserver
PREVIOU SEARCHED WORD: CTRL-SHIFT-W
GO OUT OF THE SEARCH MODE: CTRL-C

^\ REPLACE - CTRL-\
Replace Moduna gecer 
Search (to replace) : geoserver  ENTER A BASARIZ
Replace with: geoseverr ENTERA BASARIZ
Replace this instance? 
Y Yes-(Sadece o an bize gosterilen geoserver kelimesi degistirilsin )  A All - Tum o kelimenin oldugu  yerler degistirilsin
N No Degistirilmesin   ^C Cancel Islemi iptal et
TEK TEK DEGISTIRIP DEGISITRMEYECEGMZI SORACAKTIR Y YE BASTIGMZ KELIMEYI YENI YAZDIGMZ ILE DEGISTIRIP BIR SONRAKIN ATLAR, N-NO YA BASARASAK DA DEGISTIRMEZ VE BIR SONRAKINE ATLAR!

^K-CUT- CTRL-K - IMLECIN UZERINDE BULUNDGUMZU SATIRI KESER
^U PASTE-CTRL-U  - IMLECIN AKTIF OLDUGU SATIRA YAPISTIRIR

M-U UNDO - ALT-U  - BIR GERIYE ALIR
M-E REDO - ALT-E   - BIR ILERIYE ALIR

EGER BIR  KOMUT CALISTIRIP BU KOMUTUN SONUCUNU DOSYAMIZA EKLEMEK ISTERSEK
^T -EXECUTE -  CTRL-T
CTRL-T YE BASARSAK BIZE CALISTIRMAK ISTEDGIMZ KOMUTU SORACAKTIR
echo "this is my command" dersek this is my command i mouse imlecimiz en son dosya uzerinde nerde ise oryaa ekleyecektir
ya da 
ls yazarsak da bizim uzerinde islem yaptgmimz dosya konumunda ls yapinca gelecek olan dosya isimleirni getirecektir


BURDA SUNU ANLAYALIM 
DOSYA UZERINDE YAPACAGMIZ ISLEME GORE DOSYA MODU AYARLANIYOR VE KISA YOL ISLEM YAPMA TUSLARI DA AYNI TUS MODA GORE FARKLI ISLEVLERDE KULLANILIYOR
EGER CTRL-R ILE READ, BASKA BIR DOSYA ICERIGNI DOSYAMIZA EKLEME MODUNA GELIRSEK ORDA CTRL-T BROWSER ISLEMI YAPARAK BIZIM DOSYA, KLASOR LER UZERINDEN GEZINIP ISTEDGIMZ DOSYAYI SECEBILMEMIZI SAGLARKEN,
EGER BIZ DIREK DOSYAMIZ UZERINDE IKEN, BIR KOMUT CALISTIRIP SONUCU DOSYAYA EKLEYCEK ISEK BU SEFER DE CTRL-T KOMUTU EXECUTE ISLEMI YAPACAKTIR!!!

^/ Go To Line  - CTRL-/ - Istedgimz satira dogrudan atlayabilme
Bunu yapmadan once ALT-N ile satir numaralarini aktif gorunur hale getirebiliriz
CTRL-/  yaptigimz zaman, bize Enter line number, column number: 
soruyor, biz Alt-N ile satir numaralarini da getirdigmz icin, artik hangi satir numarasini girersek o satir numarasina bizim imlecimizi getirecektir

M-U  - ALT-U - UNDO - GERI ALMA
M-E  - ALT-E - REDO - GERI ALINANLARI ILERI ALMA

Console ekrani buyudukce, alt taraftaki kisa yol tuslarinin tamamini gorebiliriz

M-A - Set Mark - Alt-A - Mouse yardimi ile istedgimz kismi secebiliyoruz,isaretleyebiliyoruz!! YALNIZ SECERKEN, MOUSE IMLECI, YANI KLAVYE ILE DE OYNATABILDIGMZ IMLEC IN OLDUGU YERDE, IMLEC ILE SECIM YAPMAMIZ GEREKIYOR, BU MOUSE ILE SECMEYE CALISIRSAK, O ZAMAN MOUSE KLAVYE IMLECINDEN BAGIMISIZ SECEBILIYOR O ZAMAN TAM SECILMIS OLMUYOR,  ONDAN DOLAYI MUMKUN OLDUGUNCA SECIM ISLERINI MOUSE ILE DEGIL DE KLAVYE ILE YAPALIM- klavye ile  secim islemi yaparken sag-sol ok tuslarindan biri ile shift e ayni anda basarak yapariz, normal text i nasil seciyorsak klavye aracilig ile ayni sekilde yapariz burda da
M-6 - COPY- ALT-6 - Isaretlenen kelimeleri kopyalama
^-K  - CUT - CTRL-K - ISARETLENEN KELIMELERI KESME

Nano araci ile ilgili daha detayli bilgi icini ise ^-G - CTRL-G tuslamasi yapilabilir
^A-Go to beginning of current line 
^E- Go to end of current line 
..gibi daha cok isimiza yaryacak, isimizi kolaylastiracak kisa yol tuslari gorebiliriz CTRL-G help tusu ile,  nano araci ile herhangi bir dosyamizi acinca gorebilirz  bunlari

VI METIN EDITORU
Nerdeyse tum linux dagitimlarinda varsayilan olarak bulunur

VIM-vi improved
vi editoru VIM editorunun yalin halidir
Vi editoru standart editorlerden biraz daha farkli calisiyor

Vi editoru ile dosya acmak!
sudo vi readme.txt

Dosya ilk acildiginda vi araci komut modunda calisir
Yani biz bu dosyaya yeni veriler ekleme yapmak istersek bu modda ekleme yapamayiz
Cunku komut modunda yalnizca duzenlemeler, dosya icerisinde gezinti gibi islemleri yerine getiriyoruz

INSERT MODUNA GECMEK - "i" tusuna basarak modu degistirmek!!!!
Ekleme yapmak icin "i" tusuna basarak insert moduna gecebiliriz
i tusuna basinca en altta :-- INSERT --  ifadesini goruruz zaten
Simdi artik istedigmz satira istedigmiz verileri ekleyebiliriz

INSERT MODUNDA IKEN ESC ILE COMMAND MODNA GECMEK!
Ekleme islemin yaptiktan sonra dosya icinde hizlica gezinmek, sil, kopyala vs gibi islemler yapmak istersek o zaman tekrardan command-komut moduna gecmemiz gerekir
Gecis yapmak icinde, insert modunda iken ESC tusuna basarak command moduna gecebiliriz

COMMAND MODU KISA YOLLARI 
KLAVYEMIZDEKI NORMAL OK TUSLARI ILE YAPABILIRZ ONCELIKLE -> <- 
H - SOLA GITMEK ICIN OK TUSU 
L- SAGA GITMEK ICIN OK TUSU  
K-UST OK TUSU 
J- ALT OK TUSU 

^- SATIR EN BASINA DON 
$-SATIR SONUNA GETIRIR
GG-dosya nin en basindaki satira gelir
SHIFT-G ile de dosyamizin en sonundaki satira gelir!!!
Sag altta imlecin pozisyonunu row-column surekli dinamik olarak gosterilir

Sayfa sayfa gezinti imkani - Yani mevcut ekranmiz a sigmayan veri diger sayfaya atacaktir, sayfalar arasi gezinti yapmak icin 
CTRL-B(BACK) -  BIR ONCEKI SAYFA YI GOREBILIRIZ 
CTRL-F(FORWARD) - BIR SONRAKI SAYFAYI GOREBILIRZ

KARAKTER SILME ISLEMI
X tusu ile tek bir karakter siliyoruz
3X tusu ile imlecin bulundug yerden itibaren 3 karakter sil

KELIME SILME ISLEMI
DW-DELETE WORD - bir kelime silmek icin
2DW -  2 kelime birden silmek icin
DD-1 satirin tamamini silmek icin
3DD-3 satir silmek icin kullanilir

Silme islemin vi aracinda aslinda kesme islemi ile silinmis oluyor
Yani x,DW,DD char,word,row silme islemi kesme islemi neticesinde siliiyordu aslinda kesme islemi y apilmis oluyor hemen ardindan yapistir dersek 

Yapistirmak icin 
Y-yank- kopyalama 
P-put - yapistirma

1P-1 KEZ YAPISTIRIR
3P-3 KEZ YAPISTIRIR

YW(YANK-WORD)-KELIMENIN HEPSINI KOPYALA 
YALNIZCA 3 KARAKTER KOPYALAMAK ICIN - 3Y-SPACE 

2YW-2 KELIMME KOPYALA 
YY - TUM SATIRI KOPYALAMAK ICIN

KELIME ARAMAK 
/arastirilacak kelime

/aylin yazariz 
aranan kelime de bir sonraki aranan kelimeyi gormek icin 

Enter ile onayladktan sonra N TUSU ILE BIRSONRAKI ARANAN KELIME YI GOREBILIRIZ
BIR ONCEKI ARAM IIN ISE ENTER DAN SONRA SHIFT-N 

VIA ARACINDAN CIKMAK ICIN
Oncelikle Insert modunda isek ESC ile command moduna geceriz 

:w -yalnizca kaydetmek

:qw Hem kaydetmek hem dosyadan cikmak icin 

:q! Dosyayi kaydetmeden cikmak icin 

ARSIVLEME VE SKSTRMA ISLEMLERI 

Bir group dosya veya klasor u bir arsiv dosyasi icersinde toparlamaya genel olarak arsivleme denir 
Veri butunlugu saglamak, dosya kayiplarini onlemek icin yapilir 

TAR(TAPE ARCHIVE) ARACI - ARSIVLEME ARACI 

tar -cf(create file) options larini kullanmamiz gerekiyor 

Arsivleme isleminde biz ozellikle belirtmedigmz surece dosya boyutlarinda herhangi bir degisiklik olmuyor, cunku biz belirtmedigmz surece herhangi bir skstirma islemi uygulanmiyor dosyalara
Arsivleme islemi yalnizca ilgili dosya ve klasorlerin tek bir arsiv dosyasi altinda toplanmasini sagliyor 
Bunu teyit etmek icin klasorun kapladigi disk alanini gormek icin 

du -h linux-dersleri/ diye kontrol ederiz 

adem@adem:~$ du -h linux-tutorial/
508K	linux-tutorial/Test/meldank
512K	linux-tutorial/Test
524K	linux-tutorial/
adem@adem:~$ 
Toplam boyut 525K(kilobyte)

Arsiv dosyasini boyutunu mevcut dosya ile kiyaslayabiliriz

tar -cf(create-file) dan sonra ilk olarak arsiv dosyasina verecegimz ismi girmemiz gerekiyor buu cooook onemlidir!!!
Sonrasinda da hangi klasor  yolundaki klasorleri vereceksek onun adresini girmemiz gerekiyor
adem@adem:~$ tar -cf linux-tutorial.tar linux-tutorial/

Alternatif olarak da asagida ki gibi de kullanabiilriz 
tar -c linux-turorial/  -f linux-tutorial.tar 

Dikkat edecek olursak -f seceneginden sonra mutlaka olusturulacak olan, arsiv dosyasinin ismi verilmis!!!!
Herzaman icin -f den sonra olusturulacak olan arsiv dosyasi ismi verilmelidir

.TAR UZANTISINI ARSIV DOSYA ISMINDE KULLANMAK ZORUNDA MIYIZ?
.tar uzantisi, arsiv dosyalarinin standart uzantisidir 
Bunu kullanmak zorunda degiliz ama sistem uzerinde arsiv dosayalarimizi, ayirt edici kilmak icin ve belli bir standart i takip etmek islerimizi daha kolay ayirt etmek icin cook onemlidir!!!
Ornegin tum arsiv dosyalarini kullanmak istersek, joker karakterden yararlanirsak 1 kere de birsuru .tar u zantili dosyayi secebilirz... dolayis ile arsiv dosy alari icin .tar uzantili olarak dosyalari olusturmak aslinda onemlidir!!!!!


adem@adem:~$ tar -cf linux-tutorial.tar linux-tutorial/  dan linux-tutorial.tar boyle bir dosya olusturulur(arsiv dosyasi kirmizi sekilde gelir )

ls *.tar seklinde de girerek sadece .tar dosyalarini listele diyebiliriz!!

adem@adem:~$ ls *.tar
linux-tutorial.tar
adem@adem:~$ 

Hem linux-tutorial hem de linux-tutorial.tar dosyalarinin kapladigi alani gormek istersek 
adem@adem:~$ du -h linux-tutorial*
508K	linux-tutorial/Test/meldank
512K	linux-tutorial/Test
524K	linux-tutorial
512K	linux-tutorial.tar
adem@adem:~$ 
DIKKAT EDELIM BU KOMUT HEM linux-tutorial klasorunun hem de linux-tutorial.tar dosyasinin yerini aliyor * sayesind.. 
linux-tutorial ile baslayan ve sonunda 1 veya daha fazla karakter olan klasor dosya ne varsa getir demis oluyoruz!!!
adem@adem:~$ du -h linux-tutorial*

Arsiv dosyasi ile orjinal dosya nin boyuttu nerde ise ayndidir
524K	linux-tutorial
512K	linux-tutorial.tar

Arsiv ledgimz dosyalar orjinallerine gore biraz daha az yer kapladi cunku, arsivlenen dosya datalari disk te standart sekilde oldugu gibi bloklar halinde degilde, bir arada tutuluyor olmasidir

Standart olarak diske kaydedilen dosyalar da her bir blok 4KB tir ama bazen kaydedilen veri 1kb lik olabiliyor..Icinde 1 kb lik data var ama blok 4kb lik yer kapliyor..
Iste tar araci, bloklama yerine tum verileri pespese siralayarak bir arada tuttugu icin arsiv dosyasi normalden daha az yer kaplayacaktir. Yani skstirma algoritmasi vs uygulanmiyor yalnizca veriler pespese siralandigi icin, genel olarak blok mantigna gore daha az bos alan kalmis oluyor

TUM ARSIV ISLEMINI CONSOLE UZERINDEN ADIM ADIM TAKIP ETMEK ICIN VERBOSE-V ILE DETAYLI ISLEM CIKTISI ALMAK ISTEDGIMZI BELIRTEBILIRIZ 
AYRICA ARSIVE BIZ ISTEDGIMIZ KADAR DOSYA EKLEYEBLIRIZ
 
cf-create file , cvf-create verbose file 
verbose ile, a-f arasindaki dosyalari myletters.tar isimli arsiv dosyasina kaydederken de tum adim adim arsivledigi dosyalari da bize gosteriyor asagidaki gibi
adem@adem:~$ tar -cvf myletters.tar {a..f}
a
b
c
d
e
f
adem@adem:~$ 

Benzer sekilde klasorleri arsive alirken de -verbose secenegini kulanarak, tar aracinin arsivleme prosessini takip edebiliriz 

adem@adem:~$ tar -cvf myarch1.tar linux-tutorial
linux-tutorial/
linux-tutorial/Test/
linux-tutorial/Test/meldank/
linux-tutorial/Test/meldank/normal_bestilling_fra_kveld3.png
linux-tutorial/Test/meldank/normal_bestilling_fra_kveld1.png
linux-tutorial/Test/meldank/normal_bestilling_fra_kveld2.png
linux-tutorial/result2.txt
linux-tutorial/readme1.txt
adem@adem:~$ ls

Buyuk boyutlu dosyalarda bu -verbose secenegi cokc kritik bi roneme sahptir

ARSIV DOSYASINI DISARIYA CIKARMAYA GEREK KALMADAN GORUNTULEMEK!

Arsiv dosyasinin ismini de yazacagmiz icin, f secenegini kullanmamiz gerekir
tar -tf
f secenegini kullanmazsak, arsiv dosyasinin icerigi okunamaz hata aliriz!!!!
adem@adem:~$ tar -t myletters.tar
tar: Refusing to read archive contents from terminal (missing -f option?)
tar: Error i

ASAGIDAKI GIBI IKI FARKLI SEKILDE .TAR DOSYALARININ ICINDE BULUNAN DOSYALARI GOREBILIRIZ!!
adem@adem:~$ tar -tf linux-tutorial.tar
linux-tutorial/
linux-tutorial/Test/
linux-tutorial/Test/meldank/
linux-tutorial/Test/meldank/normal_bestilling_fra_kveld3.png
linux-tutorial/Test/meldank/normal_bestilling_fra_kveld1.png
linux-tutorial/Test/meldank/normal_bestilling_fra_kveld2.png
linux-tutorial/result2.txt
linux-tutorial/readme1.txt
adem@adem:~$ tar --list -f linux-tutorial.tar
linux-tutorial/
linux-tutorial/Test/
linux-tutorial/Test/meldank/
linux-tutorial/Test/meldank/normal_bestilling_fra_kveld3.png
linux-tutorial/Test/meldank/normal_bestilling_fra_kveld1.png
linux-tutorial/Test/melda


DAHA AYRINTLI LISTELEMEK ISTERSEK -t veya -list secenegi yerine, ek olarak verbose-v secenegini de kullanabilriiz

adem@adem:~$ tar -tvf linux-tutorial.tar
drwxrwxr-x adem/adem         0 2023-12-18 10:22 linux-tutorial/
drwxrwxr-x adem/adem         0 2023-12-18 10:16 linux-tutorial/Test/
drwxrwxr-x adem/adem         0 2023-12-18 10:16 linux-tutorial/Test/meldank/
-rw-rw-r-- adem/adem    450972 2023-12-18 10:16 linux-tutorial/Test/meldank/normal_bestilling_fra_kveld3.png
-rw-rw-r-- adem/adem     30008 2023-12-18 10:16 linux-tutorial/Test/meldank/normal_bestilling_fra_kveld1.png
-rw-rw-r-- adem/adem     27237 2023-12-18 10:16 linux-tutorial/Test/meldank/normal_bestilling_fra_kveld2.png
-rw-rw-r-- adem/adem        52 2023-12-12 11:23 linux-tutorial/result2.txt
-rw-rw-r-- adem/adem       185 2023-12-18 09:23 linux-tutorial/readme1.txt
adem@adem:~$ 

Dikkat edelim, arsiv dosyasinin icindeki, dosyalari gormek icinde arsiv dosyasini disariya aktarmamiz vs gerekmemis oldu!
Bu yaklasim sayesinde spesifik olarak aradigimz bir dosya var ise bu arsiv icerisinde mi degil mi diye kontrol etmek icin, arsivi disari cikarmadan bu durumu rahatlikla kontrol edebiliyoruz

tar aracini grep araci ile pipe i da kullanarak bu islemi yapabiliriz-HARIKA BESTPRACTISE!!!!
ORNEGIN .tar dosyamiz icinde readme dosyasi var mi diye kontrol edecek olursak eger....
adem@adem:~$ tar -tvf linux-tutorial.tar | grep "readme"
-rw-rw-r-- adem/adem       185 2023-12-18 09:23 linux-tutorial/readme1.txt
adem@adem:~$ 

NETICE DE CONSOLE UZERINDEN ALDGMIZ TUM CIKTILAR 

ARSIV I NASIL DISARI CIKARIRIZ?
2 SECENEKTE ELE ALABLIRIZ
1-ARSIV DOSYASININ TAMAMINI DISARI CIKARMAK!
2-SPESIFIK OLARAK BELIRTILEN DOSYA VE KLASORLERI DISARI CIKR

extract - x option i kullanirsak, arsiv dosyasinda bulunan tum dosya ve klasorleri disari cikaracaktir

Eger -C ile arsiv dosyasini cikaracagimz klasorun adini belirtmezsek, arsiv dosyalari mevcut uzerinde bulunudgumuz dizine cikarilacaktir
tar araci ile spesifik olarak bir dizin belirtirken, -C option i ve gonderilecek klasor ismi mutlaka belirtilmelidir


adem@adem:~$ tar -xf linux-tutorial.tar -C linux-tut
adem@adem:~$ cd linux-tut
adem@adem:~/linux-tut$ ls
linux-tutorial

AYRICA SUNA DIKKAT EDELIM BIZ BURDA GORELI YOL BELIRTTIK ONU DA ABSOLUTE YAPMAMIZ SURDURULEBILIRLIK ACISINDAN COK DAHA IYI OLACAKTIR 
adem@adem:~$ tar -xf linux-tutorial.tar -C linux-tut 
YERINE ORNEGIN 
adem@adem:~$ tar -xf linux-tutorial.tar -C ~/linux-tut/
YA DA 
adem@adem:~$ tar -xf linux-tutorial.tar -C /usr/share/doc

YINE CONSOOLE DA ATILAN DOSYALARI GORMEK ISTERSEK -V VERBOOSE OPTION I KULLANABILIRIZ

RECURSIVE-ONYINELEMELI BIR SEKILDE-AYNI KLASOR LERIN ALTINDA BULUNAN KLASORLERI DE EN ASAGIDKINE GOSTERILEREK BIZE LISTELENMESINI ISTERSEK DE !!!!!!!BESTPRACTISE

adem@adem:~$ ls -R linux-tut
linux-tut:
linux-tutorial

linux-tut/linux-tutorial:
readme1.txt  result2.txt  Test

linux-tut/linux-tutorial/Test:
meldank

linux-tut/linux-tutorial/Test/meldank:
normal_bestilling_fra_kveld1.png  normal_bestilling_fra_kveld3.png
normal_bestilling_fra_kveld2.png
adem@adem:~$ 

Arsiv Dosyasini Icerigini Istedigmz Dizine Cikarmak Icin Alternatif YOLLAR

Arsiv dosyasini cikarmak istedgimz dizine gecis  yapariz ve biz o dizin uzerinde iken, bu arsiv dosyasini bulundugmuz dizine cikarabiliriz
tar araci arsiv dosyasini var sayilan olarak komutun girildigi, dosya komutuna cikaracaktir

adem@adem:~$ cd ~/Downloads
adem@adem:~/Downloads$ tar -xf ~/linux-tutorial.tar 

linux-tutorial isminde bir klasor ile beraber Downloads klasoru altina cikaracaktir

BIR BASKA ALTERNATIF OLARAK DA ARSIV DOSYASINI CIKARMAK ISTEDIGMIZ DOSYA DIZININE ONCE TASIRIZ ARDINDAN DA TASIDGIMZ YERDE DOGRUDAN DISARI CIKARARAK, BULUNDUGU YERE CIKARILMASINI SAGLAMIS OLURUZ!!!!

CIKTILARI DAHA AYRINTILI GORMEK ICIN -VERBOSE-V SECENEGINI DE EKLERIZ!! 
adem@adem:~/Downloads$ tar -xvf ~/linux-tutorial.tar 

ARSIV DOSYASI ICINDEN SPESIFIK BAZI DOSYA VE KLASORLERI NASIL CIKARIRIZ!!! 
Once .tar dosyamiz icinde ki dosylari bir gorelim 

adem@adem:~$ tar -tf linux-tutorial.tar
linux-tutorial/
linux-tutorial/Test/
linux-tutorial/Test/meldank/
linux-tutorial/Test/meldank/normal_bestilling_fra_kveld3.png
linux-tutorial/Test/meldank/normal_bestilling_fra_kveld1.png
linux-tutorial/Test/meldank/normal_bestilling_fra_kveld2.png
linux-tutorial/result2.txt
linux-tutorial/readme1.txt
adem@adem:~$ 

Ben sadece result2.txt,readme1.txt dosyalarini cikarmak istiyorum ornegin disari

Burda en oenmli sey spesifik oalrak disari cikaracagimiz dosya ve klasorlerin tam ismini belirtmemiz gerekiyor! Yani demek istedgimz disari cikarmak istedgimz dosya ve klasorler o arsiv icindeki dosyada tutuldugu icin tam olarak yeri de o arsiv icindeki yeridir
linux-tutorial/result2.txt
linux-tutorial/readme1.txt

wildcards charactlerden(joker karakterler(*,?,[])) biri olan * i klasor ler icin kullandigimizda boyle hatalar alabiliriz..

adem@adem:~$ tar -xf linux-tutorial.tar  *result2.txt */readme1.txt 

/*
tar: Pattern matching characters used in file names
tar: Use --wildcards to enable pattern matching, or --no-wildcards to suppress this warning
tar: *result2.txt: Not found in archive

wildcard(joker karakter) lari bu sekilde kullanmak icin!!!!!

adem@adem:~$ tar --wildcards -xf linux-tutorial.tar  *result2.txt */readme1.txt 

/*
Burda icerikleri mevcut dizine cikarmak istedgimz icin, klasor ismi ve konumu vermedik!!Dikkat edelim, biz ozellikle bir isim vermezsek islemi  yaparken bulundgumz dizine archiv dosya isimli klasor icine cikaracaktir 

Spesifik olarak cikarttgimz dosyalari kontrol etmek icin
adem@adem:~$ ls -R linux-tutorial
linux-tutorial:
readme1.txt  result2.txt
adem@adem:~$ 

MEVCUT ARSIVE YENI BIR DOSYA EKLEMEK!

adem@adem:~$ tar --append -f linux-tutorial.tar my-text.txt

Ekledigmz dosyanin .tar-arsiv dosyamiza eklenip eklenmedigini gormek icin: 

adem@adem:~$ tar -tf linux-tutorial.tar
linux-tutorial/
linux-tutorial/Test/
linux-tutorial/Test/meldank/
linux-tutorial/Test/meldank/normal_bestilling_fra_kveld3.png
linux-tutorial/Test/meldank/normal_bestilling_fra_kveld1.png
linux-tutorial/Test/meldank/normal_bestilling_fra_kveld2.png
linux-tutorial/result2.txt
linux-tutorial/readme1.txt
my-text.txt
adem@adem:~$ 


adem@adem-ThinkPad-13-2nd-Gen:~$ tar --append -vf myfolder.tar ~/mynewfolder

Bu sekilde arsivlenmis olan .tar dosyamiz icine icinde dosyalar olan klasor de atabiliriz

HERZAMAN -f den sonra .tar dosyasinin gelmesine dikkat etmeliyiz!!!!

adem@adem-ThinkPad-13-2nd-Gen:~$ tar -tf myfolder.tar
home/adem/myfolder/
home/adem/myfolder/text1.txt
home/adem/myfolder/text2.txt
home/adem/myfolder/text.txt
newfile11.txt
home/adem/mynewfolder/
home/adem/mynewfolder/newfilee.txt
home/adem/mynewfolder/newfile.txt
home/adem/mynewfolder/newfile1.txt

DIKKAT EDELIM EKLEDIGMZ KLASOR UN DIZIN ADRESINI ~/mynewfolder EKLEMEK ILE mynewfolder/ BU SEKILDE EKLEMEK FARKLI SEKILDE ARSIV DOSYASI ICINE YERLESIYOR!!!


adem@adem-ThinkPad-13-2nd-Gen:~$ tar --append -vf myfolder.tar mynewfolder/
mynewfolder/
mynewfolder/newfilee.txt
mynewfolder/newfile.txt
mynewfolder/newfile1.txt
adem@adem-ThinkPad-13-2nd-Gen:~$ tar -tf myfolder.tar
home/adem/myfolder/
home/adem/myfolder/text1.txt
home/adem/myfolder/text2.txt
home/adem/myfolder/text.txt
newfile11.txt
home/adem/mynewfolder/
home/adem/mynewfolder/newfilee.txt
home/adem/mynewfolder/newfile.txt
home/adem/mynewfolder/newfile1.txt
mynewfolder/
mynewfolder/newfilee.txt
mynewfolder/newfile.txt
mynewfolder/newfile1.txt

MEVCUT ARSIV DEN DOSYA SILMEK!!

tar --delete 

newfile11.txt dosyasini silmek icin!!!!!!!!!!!!!

adem@adem-ThinkPad-13-2nd-Gen:~$ tar -f myfolder.tar --delete newfile11.txt
adem@adem-ThinkPad-13-2nd-Gen:~$ tar --delete -f myfolder.tar  newfile11.txt

BU IKI SEKILDE DE KULLANILABILIR!!!

adem@adem-ThinkPad-13-2nd-Gen:~$ tar -tf myfolder.tar
home/adem/myfolder/
home/adem/myfolder/text1.txt
home/adem/myfolder/text2.txt
home/adem/myfolder/text.txt
home/adem/mynewfolder/
home/adem/mynewfolder/newfilee.txt
home/adem/mynewfolder/newfile.txt
home/adem/mynewfolder/newfile1.txt
mynewfolder/
mynewfolder/newfilee.txt
mynewfolder/newfile.txt
mynewfolder/newfile1.txt

Dosya silecegimz zaman hangi dosyayi silecegimzden emin degil isek,
silinmesi gereken icerigi belirtecegimz arguman-parametre kisminda isek 2 kez tab tusuna basip, arsiv dosyasi icerigi hakkinda bilgi alabiliriz 

tar --delete -f myfolder.tar 
Buraya kadar yazdiktan sonra, TAB TAB yaparsak myfolder.tar icindeki tum dosyalar listelenir
adem@adem-ThinkPad-13-2nd-Gen:~$ tar --delete -f myfolder.tar mynewfolder/newfile.txt 

Ayrica biz ornegin icerige bakarak silmek istedigmiz dosya ismini girerken TAB tusu otomatik tamamlama ozellig icin calisarak bizim isimzi oldukca kolaylastiriyor!!!

Silmek istedgimz dosya veya klasoru yolunu dogru bir sekilde girerek kolayca silebiliyoruz

SKSTIRMA ISLEMLERI

Dosya tasima islemlerinde, ve surekli dosya transferi yapacagmiz icin, bu islemlerin bilinmesi cook onemlidir!!!

GZIP SIKISTIRMA ISLEMLERI VE GZIP ARACI ILE SIKISTIRMA ISLEMLERI

Nerdeyse her linux dagitimlarinda default olarak kullanilan bir aractir
Normal dosyalari skstirabiliyor ve skstirilmis dosyalari da disari cikarabiliyoruz

Once arsiv dosyamizin boyutunu ogrenmek icin ls -sh komutunu kullarniz
ARSIV DOSYA BOYUTU OGR ICIN  LS -SH KOMUTU

adem@adem-ThinkPad-13-2nd-Gen:~$ ls -sh myfolder.tar
5,7M myfolder.tar
adem@adem-ThinkPad-13-2nd-Gen:~$ 

adem@adem-ThinkPad-13-2nd-Gen:~$ du -h myfolder.tar
5,7M	myfolder.tar
adem@adem-ThinkPad-13-2nd-Gen:~$ 

DOSYAMIZI  GZIP ARACI ILE SIKISTIRACAK OLURSAK EGER!
Gzip algoritmasi ile dosyalarimzi skstirilmasini saglar
Mevcut icinde dosyalar bulunan klasorumuzun isminin sonuna .gz uzantisi getirerek skstirilmis halini bize verir
Hem .tar(arsiv dosyalarini) hem de normal veya farkli turdeki dosyalari gzip ile skstirabiliriz

adem@adem-ThinkPad-13-2nd-Gen:~$ gzip myfolder.tar
Direk bu sekilde yaparsak orjijnal dosyayi korumdan skstrmis oluyourz yani orjinal dosyanin kendisi uzerinde skstirmis oluruz
Ama istersek orjinal dosyayi da koruyarak skstirma islemi yapabiliriz
-k(keep) option i ile kullanarak orjinal dosyayi koruruz

adem@adem-ThinkPad-13-2nd-Gen:~$ gzip -k myfolder.tar

adem@adem-ThinkPad-13-2nd-Gen:~$ ls -sh myfolder.tar.gz
5,6M myfolder.tar.gz
adem@adem-ThinkPad-13-2nd-Gen:~$ ls -sh myfolder.tar
5,7M myfolder.tar
adem@adem-ThinkPad-13-2nd-Gen:~$ 

COKLU SEKILDE SIKSTIRMA DA YAPAIBLIRIZ

adem@adem-ThinkPad-13-2nd-Gen:~$ gzip -k myfolder.tar myfolder1 myfolder2 myfolder3


GZIP ILE SIKISTIRILMIS DOSYALARIN ACILMASI | DECOMPRESS
-d(decompress) option i kullanilmasi

Ayni isimde myfolder klasorunun orjinali var oldugu icin uzerine yazip yazmama yi bize soruyor

adem@adem-ThinkPad-13-2nd-Gen:~$ gzip -d myfolder.tar.gz
gzip: myfolder.tar already exists; do you wish to overwrite (y or n)? y

adem@adem-ThinkPad-13-2nd-Gen:~$ du -h myfolder.tar
5,7M	myfolder.tar

ISLEMLERIN DETAYLARINI TAKIP ETMEK ICIN VERBOSE -V OPTION I KULLANABILIRIZ

SIKISTIRMA ISLEMLER ASLINDA HER BIR DOSYA DA AYRI AYRI UYGULANDIGINI BILMEMIZ GEREKIYOR
GZIP ARACINA BIRDEN FAZLA DOSYA VERILDGINDE GZIP ARACI HER BIR DOSYAYI AYRI AYRI SIKISTIRIYOR

adem@adem-ThinkPad-13-2nd-Gen:~/myfolder$ ls
text1.txt  text2.txt  text.txt
adem@adem-ThinkPad-13-2nd-Gen:~/myfolder$ cd ..
adem@adem-ThinkPad-13-2nd-Gen:~$ gzip myfolder/*.txt
adem@adem-ThinkPad-13-2nd-Gen:~/myfolder$ ls
text1.txt.gz  text2.txt.gz  text.txt.gz

Gordgumuz gibi hepsi bir araya getirilip de degil de ayri ayri skstiriliyor. Arsiv gibi bir araya toplanip da skstirilmiyor.
Iste bundan da dolayi biz , dogrudan bir klasoru skstirmak icin komut giremiyoruz cunku klasorler kendi icerisinde, birden fazla dosya ve alt klasorleri barindirdigi icin tek bir dosya nin skstirilmasi mumkun olmuyor.
Klasorleri skstirmak icin oncelikle klsorleri arsiv-leyerek, arsiv dosyasi formatina getirip ardinda da bircok klasor ve dosyayi tek bir arsiv dosyasi olarak arsivledikten sonra arsivlenen dosya tek bir dosya haline gelmis oluyor ve iste arsivlenmis formatta iken biz, SIKISTIRABILIYORUZ!!!BESPTPRACTISE...COOOOK ONEMLI

DOGRUDAN DOSYALARI GZIP ILE SIKISTIRAMAYIZ....ASAGIDAKI ORNEKTE GIBI
adem@adem-ThinkPad-13-2nd-Gen:~$ gzip myfolder
gzip: myfolder is a directory -- ignored
adem@adem-ThinkPad-13-2nd-Gen:~$ 

AMA AYNI KLASOR UN ARSVILENMIS HALINI SIKISTIRABILIRIZ GZIP ILE

adem@adem-ThinkPad-13-2nd-Gen:~$ gzip myfolder.tar
 myfolder.tar.gz SEKLINDE GZ UZANTILI SIKISTIRILMS DOSYA OLUSACAKTIR

 AMA EGER AMACIMIZ KLASORU SIKISTIRMAK YERINE KLASOR ALTINDAKI TUM DOSYALARI RECURSIVE OLARAK YANI IC ICE DOSYALARI AYRI AYRI SIKISTIRMAK ISE O ZAMAN BUNU RECURSIVE -r option i ile YAPABILIRIZ 

adem@adem-ThinkPad-13-2nd-Gen:~$ gzip -r mynewfolder/

RECURSIVE BIR SEKILDE TUM ALT DOSYA VE KLASORLERI GORMEK ISTERSEK!!!!
adem@adem-ThinkPad-13-2nd-Gen:~$ ls -R mynewfolder
mynewfolder:
newfile1.txt.gz  newfilee.txt.gz  newfile.txt.gz  newfolder1

mynewfolder/newfolder1:
newfolder11.txt.gz
adem@adem-ThinkPad-13-2nd-Gen:~$ 

SIKISTIRDIGMZ KLASOR ALTINDAKI TUM DOSYALARI SIKISTIRMA ISLEMINDEN CIIKARMAK ISTERSEK DE 
-vdr(verbose-ayrintili-izleyerek/decompress-recursive) option i kullanark yapabilirz

adem@adem-ThinkPad-13-2nd-Gen:~$ gzip -vdr mynewfolder/
mynewfolder/newfilee.txt.gz:	 30.8% -- replaced with mynewfolder/newfilee.txt
mynewfolder/newfile.txt.gz:	 -5.6% -- replaced with mynewfolder/newfile.txt
mynewfolder/newfolder1/newfolder11.txt.gz:	-16.7% -- replaced with mynewfolder/newfolder1/newfolder11.txt
mynewfolder/newfile1.txt.gz:	  0.0% -- replaced with mynewfolder/newfile1.txt
adem@adem-ThinkPad-13-2nd-Gen:~$ 


adem@adem-ThinkPad-13-2nd-Gen:~$ ls -R mynewfolder
mynewfolder:
newfile1.txt  newfilee.txt  newfile.txt  newfolder1

mynewfolder/newfolder1:
newfolder11.txt
adem@adem-ThinkPad-13-2nd-Gen:~$ 

GZIP SIKISTIRMA SEVIYELERI
DEFAULT OLARAK 6.SEVIYE SKSTIRMA YAPAR
1 DEN 9 A KADAR SIKSTIRMA SEVIYELERI VARDIR
1 EN AZ SIKISTIRMA VE HIZLICA BITIRIYOR AMA ACARKEN DAHA YAVAS
9 EN COK SIKISTIRMA AMA DAHA ZAMAN ALIYOR, AMA ACARKEN DAHA HIZLI

SIKISTIRMA SEVIYESINI NASIL BELIRTIRIZ
gzip -9 filename
gzip -1 filename

seklinde  yapabiliriz

TIME ARACI - ARACLARIN PERFORMANS INI OLCME!!
TIME ARACI ILE DIGER ARACLARIN CALISMA SURELERINI OGRENME!
time araci ile time aracinndan sonra kullandgiimz araclarin calisma sureleri hakkinda bilgi alabiliyoruz!!


SIKISTIRILMIS DOSYALARA SPEISIFIK ISIM VEREBILMEK!!!!
Dosyalari istedgimz isimde disarya cikartmak icin -c secenegi ile birlikte yonlendirme operatorlerini de kullanacagiz!! c secenegi SIKISTIRMA islemi sonrasinda elde edilen ciktilarin standart ciktiya bastirilmasini sagliyor. Bizde yonlendirme operatorlerini kullanarak, standart ciktilari istedgimz bir dosyaya yonlendirebiliriz

linux-tutorial.tar dosyasini /temp altina tasiriz once 
adem@adem:/tmp$ time gzip -c linux-tutorial.tar > standart.tar.gz

real	0m0,022s
user	0m0,022s - cpu yu
sys	0m0,000s
adem@adem:/tmp$ 

En alt skstirma seviyesinde yaparsak skstirma islemini: 

adem@adem:/tmp$ time gzip -1 -c linux-tutorial.tar > min1.tar.gz

real	0m0,024s
user	0m0,020s - cpu yu bu kadar mesgul ediyor cunku en dusuk skstirma seviyesi
sys	0m0,004s
adem@adem:/tmp$ 

Ust seviye skstirma seviyesinde yaparsak skstirma seviyesini:

adem@adem:/tmp$ time gzip -9 -c linux-tutorial.tar > max.tar.gz

real	0m0,029s
user	0m0,028s -  cpu yu bu kadar mesgul ediyor cunku en yuksek skstirma seviyesi
sys	0m0,001s
adem@adem:/tmp$ 

sikistirilan dosya boyutu, turu, testin yapildigi pc nin ozellikleri de etkilidir

SIKISTIRMA ORANLARI HAKKINDA BILGI ALMAK


adem@adem:/tmp$ gzip -l *.gz
         compressed        uncompressed  ratio uncompressed_name
             502603              532480   5.6% max.tar 
             501685              532480   5.8% min1.tar
             501685              532480   5.8% min.tar
             502673              532480   5.6% standart.tar
            2008646             2129920   5.7% (totals)
adem@adem:/tmp$ 

time i kullanarak, skstriilmis dosyalarin ne kadar surede acildigina inlceyeybiliriz

adem@adem:/tmp$ time gzip -d min.tar.gz

real	0m0,010s
user	0m0,004s
sys	0m0,007s
adem@adem:/tmp$ time gzip -d max.tar.gz

real	0m0,008s
user	0m0,007s
sys	0m0,001s
adem@adem:/tmp$ tim

BZIP2 ARACI VE BZIP2 SIKISTIRMA ALGORITMASI

gzip araci ile yaptigmiz herseyi ve ayni secenekleri kullanarak, bzip2 aracini kullanabiliyoruz
uzantisi .bz2 dur

DIREK ORJINAL DOSYAYI DEGISTIREREK BZIP2 SIKISTIRMASI YAPMAK
adem@adem:~$ bzip2 linux-tutorial.tar
ORJINAL DOSYAYI KORUYARAK BZIP2 SIKISTIRMASI YAPARSAK 

adem@adem:~$ bzip2 -k linux-tutorial.tar

Detayli bilgi alarak, skstirma islemini yapmak icin 

adem@adem:~$ bzip2 -kv linux-tutorial.tar

ls -sh VEYA du -h ILE skstirilmis dosya ile orinal dosya boyutuna bakacak olursak!

4,0K linux-tutorial.tar.bz2
12K mylinux-tutorial.tar


SPESIFIK ISIMDEKI BIR DOSYAYA SIKISTIRMA YAPMAK ICIN

adem@adem:~$ bzip2 -c linux-tutorial.tar > mylinux-tutorial.tar.bz2

SONRA SIKISTIRILMIS OLAN DOSYAYI CIKARMAK ICIN
adem@adem:~$ bzip2 -d mylinux-tutorial.tr.bz2

.TAR VEYA .BZ2 VEYA .GZ UZANTILARI SIKISTIRMA VEYA ARSIVLEME YAPMAK ICIN KULLANILMAK ZORUNDA DEGIL AMA DAHA ONCEDE BAHSEDILDIGI UZERE, BU SEKILDE KULLANMAK, STANDART KULLANIMLARA AYAK  UYDURMAK, DOSYALARI BIRBIRINDEN KOLAYCA AYIRT ETMEK VE JOKER-WILCARD KARAKTERLERI KULLANARAK, DAHA PRATIK ISLEMLER YAPABILMEK ICIN COK KULLANISLIDIR!!!

BZIP ALGORITMA SIKISTIRMA SEVIYELERI

gzip default-level:6 - optimum level gzip icin 6
bzip2 default-level:9 -  optimum level bzip2 icin 9 dur

BZIP2 DAKI SIKISTIRMA SEVIYESI ISTENILDIGI GIBI AYARLAMA YAPILABILIR
DAHA AZ, VE DAHA HIZLI OLSUN ISTERSEK 1 
DAHA FAZLA SIKISTIRMA VE DAHA YAVAS OLUSUN ISTERSEK DE 9

adem@adem:/tmp$ time bzip2 -1 -c linux-tutorial.tar > min1.tar.gz
adem@adem:/tmp$ time bzip2 -9 -c linux-tutorial.tar > min1.tar.gz

BZIP2 NIN GZIP DEN FARKLARINDAN BIRI!!!
bzip2 araci kendi icinde DAHILI OLARAK RECURSIVE OZELLIGINI SUNMUYOR, BUNDAN DOLAYI FARKLI ARACLARI KULLANARAK, DOSYA ISIMLERINI RECURSIVE BIR SEKILDE BZIP2 ARACINA AKTARIP YINE HEPSININ SIKSTIRILMASIN SAGLYABILIRIZ!!!!

BIZ SIKISTIRMA ISLEMLERI ICIN BIRCOK FARKLI ARAC VE ALGORITMA BULABLIRIZ!!!!

SIKISTIRILMIS ARSIV DOSYALARI OLUSTURMAK!!

tar aracini kullanarak, birden fazla dosyamiz bir dosya altinda arsivlendikten sonra, sikistiriladabiliyor
Biz tar aracina eger arsivleme isleminden hemen sonra, bir de skstirma algoritmasi aracini kullanmasini soylersek, tek seferde skstirilmis olan arsiv dosyalari olsuturabiliyoruz

tar aracinin hemen arkasindan gzip - bzip2 araclarini kullanarak , skstriilmis arsiv dosyalari olusturabilecegiz
tar aracinda gzip ve bzip2 araclarini kullanabilecegimz cesitli algoritmalar bulunmaktadir

tar --help ile bakacak olursak
-I, --use-compress-program=PROG
                             filter through PROG (must accept -d)
  -j, --bzip2                filter the archive through bzip2
  -J, --xz                   filter the archive through xz
      --lzip                 filter the archive through lzip
      --lzma                 filter the archive through xz
      --lzop                 filter the archive through lzop
      --no-auto-compress     do not use archive suffix to determine the
                             compression program
      --zstd                 filter the archive through zstd
  -z, --gzip, --gunzip, --ungzip   filter the archive through gzip
  -Z, --compress, --uncompress   filter the archive through compress

  OZELLIKLERLE BU SATIRLARA DIKKAT EDELIM!!

    -j, --bzip2                filter the archive through bzip2

   -Z, --compress, --uncompress   filter the archive through compress

   ya da asagidaki gibi kullanabiliriz!!!

   HEM ARSIVLEME HEM DE SKSTMRA YAPACAK OLURSAK

   -c ile spesifik bir skstirma dosya ismi veririz -f file demk -f denhemen sonra skstirilmis veya arsivlenmis dosyas ismi gelmeli idi hemen.
   z- tar, arsivleme isleminden sonra, skstirma da yapmasi icin kullaniliyor
   adem@adem:~$ tar -czf linux-zip.tar.gz linux-zip

adem@adem:~$ du sh linux*

du -sh linux* yaparsak : 
84	linux-zip 
4	linux-zip.tar.gz

linux-zip.tar.gz dosyasi hakkinda dah genis bilgi almak icn file aracini kullanirsak eger
DAHA GENIS BILGI ICIN FILE ARACI
adem@adem:~$ file linux-zip.tar.gz
linux-zip.tar.gz: gzip compressed data, from Unix, original size modulo 2^32 30720
adem@adem:~$ 


TAR ARACI ILE BIRLIKTE BZIP2 ARACININI KULLANILMASI.. 

 -j, --bzip2  filter the archive through bzip2
-c create 
-j bzip2 ile skstirilmasini saglar
-f yeni olsuturulan arsiv-skstirilmis dosya nin olustuturlmasini saglar

adem@adem:~$ tar -cjf linux-zip.tar.bz2 linux-zip

ONEMLI OLAN TAR ARACI ILE BIZ SIKISTIRILMIS ARSIV DOSYALARI OLUSTURABILIYORUZ BUNU BILMEK COK KRITIK ONEME SAHIPTIR..YOKSA HANGI KOMUTLAR IN KULLANILACAGINIZ ZATEN TAR --HEP VEYA MAN TAR DAN DA BULABILIRIZ!

SIKSTIRILMIS OLAN ARSIV DOSYALARININ ACILMASI

-x(extract) f -file optionslarini kullanabiliriz

adem@adem:~$ tar -xf linux-zip.tar.gz

adem@adem:~$ tar -xf linux-zip.tar.bz2


COK SIK KULLANDIGMZ KOMUTLAR BUNLAR!!
ls -R linux-zip - DIYEREK linux-zip klasorunun recursive bir sekilde listelenmesini saglariz..yani alt klasorin her birisi icinde en son dosyalar acilana kadar listelenecek sekilde
ls -sh  burda da her bir dosya ve klasorun ne kadar alan kapladigini gosterir

ZCAT-ZGREP ARACI ILE SIKISTIRILMIS DOSYALAR UZERINDE ISLEM YAPABILMEK!
SIKISTIRILMIS OLAN dosyalar  uzerinde dogrudan, cat,grep,less, more gibi araclari dogrudan kullanamiyoruz.
Bunlarin yerine gzip arsiv-skstirma dosyalari icin kullanabilecegimz zcat,zgrep,zless,zmore araclarini kullaniyoruz.. Her sktirma aracina karsilik olarak bu sekilde zcat,zgrep,zless,zmore gibi araclar bulunmaktadir

adem@adem:~$ echo "Deneme-test-hello-world" > test-file.txt
adem@adem:~$ cat test-file.txt
Deneme-test-hello-world
adem@adem:~$ grep "test" test-file.txt
Deneme-test-hello-world
adem@adem:~$ gzip test-file.txt

Normal cat ile test-file.txt.gz dosyasini okuyamiyoruz ama zcat araci ile okuyabiliyoruz
adem@adem:~$ cat test-file.txt.gz
��etest-file.txtsI�K�M�-I-.��H����-�/�I���҄adem@adem:~$ zcat test-file.txt.gz
Deneme-test-hello-world
adem@adem:~$ 

SONUUCN RENKLI GELMESI ICIN --color option i zgrep aracinda kullanilmalidir
adem@adem:~$ zgrep --color "hello" test-file.txt.gz
Deneme-test-hello-world

BZIP2 ARACI ICIN ISE : bzcat,bzgrep araclarini kullanabiliyoruz
Her skstirma araci ile skstirilmis dosya icin bu sekilde o skstirma aracina has kullanilabilecek araclar mevcuttur..

bz yazdiktan sonra TAB-TAB(2kez Tab tusuna basarsak) hangi araclari bu skstirma algoritmasi ile kullanabilecegimzi goruruz
adem@adem:~$ bz
bzcat         bzegrep       bzgrep        bzless        
bzcmp         bzexe         bzip2         bzmore        
bzdiff        bzfgrep       bzip2recover  
adem@adem:~$ bz


ZIP-RAR 
Linux de bu algoritmalar ile cok karsilasmayiz
Bu araclar da lisans ve dosya ozellkler i korunmuyor
Rar-zip kullanmak cok mantiikli degil linux de
Cunku rar-zip dosya ozelliklerini kaybediyor biz linux de dosya ozelliklerinin korunmasini istiyoruz

ZIP 
Farkli isletim sistemlerinde ortak olarak kullanabiliyoruz

-r olmazsa alt dosya ve klasorleri skstirma islemine dahil etmeyecektir!!!
adem@adem:~$ zip -r linux1.zip linux-zip

SIKISTIRILAN DOSYALARI UNZIP ARACI ILE DISARI CIKARTMA!

adem@adem:~$ unzip linux1.zip

BILGI ALMA KOMUTLARI 
BILGI ALMA KOMUTLARI KENDI LOCAL UBUNTU YUKLU PC MIZDE ANLAMSIZ GOZUKEBILIR CUNKU SAAT I ZATEN PC DE EN USTTE GOSTERIYOR VS, GIBI ANCAK SUNU IYI ANLAYALIM KI UBNTU-LINUX COGUNLUKLA SERVER YONETIMLERINDE KULLANILAN ISLETIM SISTEMIDIR VE NORMAL LOCAL PC UZERINDEKI BIR TERMINAL DE UZAK SERVER A BAGLANTI OLUSTURDUKTAN SONRA BIZIM LOCAL PC MIZDEKI TERMINALIMIZ ARTIK SERVER IMIZ ILE ILGILI TUM BILGIYI BIZE VERECEKTIR VE BU BILGILEERI TAMAMEN, LINUX-COMMAND LARI  UZERINDEN BULABILIRZ, BASKA SECENEGIMIZ YOK, SERVER YONETIMLERINDE!!!!! BU COOOK ONEMLIDIR!!!!

DATA-TAKVIM-SAAT BILGILERI
adem@adem:~$ date
on. 20. des. 14:44:57 +0100 2023
adem@adem:~$ 

adem@adem:~$ date +%r
02:53:12 
adem@adem:~$ date +%R
14:53
adem@adem:~$ 

DATE ARACI ILE TARIH DEGISTIRILEBILIYOR AMA DATE DEGISTIRMEK ICIN SISTEM SERVISLERINI KULLANMAK COK DAHA MANTIKLI BIR YAKLASIMDIR
DATE KOMUTU YALNIZCA MEVCUT SISTEM SAATINI DEGISTIRIYOR, RTS-TIME-DONAMISAL GERCEK ZAMANLI SAATI DEGISTIRMIYOR, BUNU DA DEGISITRMEK ICIN BIR AYRI ARAC DAHA GEREKIYOR, 2 ARACLA  UGRASMAMK ICIN, ZAMAN DEGISITRMEK ICIN ILGILI SERVISI KULLANMAK DAHA MANTIKLDIR

CAL-ARACI ILE TAKVIM BILGISINE ULASMAK!

Sistemlerde bazen varsayilan olarak gelmiyor ama biz sonradan bu araci yukleyerek kullanabliriz

cal yazinca eger boyle bir komut yok diye uyari alirsak yeniden yuklyerek kullanabilirz
sudo apt install ncal 
diyerek kurabiliriz

adem@adem:~$ cal
   Desember 2023      
sø ma ti on to fr lø  
                1  2  
 3  4  5  6  7  8  9  
10 11 12 13 14 15 16  
17 18 19 20 21 22 23  
24 25 26 27 28 29 30  
31             

ncal ile de bu sekilde gorebiliriz
adem@adem:~$ ncal
    Desember 2023     
ma     4 11 18 25   
ti     5 12 19 26   
on     6 13 20 27   
to     7 14 21 28   
fr  1  8 15 22 29   
lø  2  9 16 23 30   
sø  3 10 17 24 31   
adem@adem:~$ 

Gecmisteki ay ve yili vererek o ay ve yila ait takvim i de kullanabiliriz

adem@adem:~$ ncal 1 2002
    Januar 2002       
ma     7 14 21 28   
ti  1  8 15 22 29   
on  2  9 16 23 30   
to  3 10 17 24 31   
fr  4 11 18 25      
lø  5 12 19 26      
sø  6 13 20 27      
adem@adem:~$ 

adem@adem:~$ apropos calendar
cal (1)              - displays a calendar and the date of Easter
ncal (1)             - displays a calendar and the date of Easter
adem@adem:~$ 


WHICH KOMUTU KOMUTLARIN(ARACLARIN) HANGI KONUMDA BULUNDUGUNU BULABILIRIZ

Biz ls komutu yazdigmiz da , biz Bach-shell kabugunu kullandigmz icin Bash kabugu yorumluyor yazdigiz komutlari 
BAsh kabugu once ls komutu kendi icinde dahili olarak-inbuild olarak, gomulu olarak icinde bu isimde bir dosya var mi diye kontrol eder, eger  yok ise PATH yolu uzerinde bu isimli bir dosya var mi onu kontrol eder ve eger bulabilirse bu dosyayi calistiriyor
Iste bash kabugunun bu bulup calistirmasina benzer birsekilde calisiyor, which komutu

ls aracinin dosya konumunu asgidaki gibi gorebiliriz!!!
adem@adem:~$ which ls
/usr/bin/ls
adem@adem:~$ 

Path uzerindeki tum araclarin dosya dizin adreslerini, which komtu ile kolaylikla ogrenebiliriz
Ozellikle bir aracin calistirilabilmesi icin tam dizin adresinin girilmesi gerektigi durumlarda, bizi dizin bilgisi gerekebiliyor

Bash kabuk programlama da sklikla kullaniliyor

TYPE | COMMAND | BUILTIN

Bash kabuguna vermis oldugmz komutlarin kabuk tarafindan nasil algilandigini gormemizi saglar

adem@adem:~$ type ls
ls is aliased to `ls --color=auto'
adem@adem:~$ 
Bash kabugu ls olarak takma isim haline gelmis ama arkada ls --color=auto komutunu calistirdigini belirtiyor

Bizim kullandigmz ls ismi ile ayni isimde bir takma isim bulundugu icin, kabuk girilen ls komutunu takma isim olarak el aliyor, takma isme karsilik gelen `ls --color=auto' komutu calistiiryor
Niye takma isim cunku kabugun yerlesik bir komutu degil bu

Normalde bu ls in dosya konumu bu ama biz type ls yazinca anliyoruz ki, ls komutu alias a karsilk gelen komutu calisitiryor...Direk dosya komutunu calistirmadigi icin
adem@adem:~$ which ls
/usr/bin/ls
adem@adem:~$ 
Yani Bash-shell kabugum, ls komutunu bu sekilde algiliyor mus:ls is aliased to `ls --color=auto' 


adem@adem:~$ type cd
cd is a shell builtin
adem@adem:~$ 

console a bash komutu girildiginde mevcut dosya bu dizindeki dosyayi calisitiryor mus!!!
adem@adem:~$ type bash
bash is /usr/bin/bash
adem@adem:~$ 
Bash kabugu bash komutunu /usr/bin/bash bu dosyadan calistiriyor direk, ve bu dosya ismi olarak goruyormus 

type KOMUTU ILE GIRILEN ARAC(KOMUT) ISIMLERININ KABUK TARAFINDAN NASIL ALGILANDIGINI OGRENEBILIYORUZ!!
PEKI NEDEN BU BILGIYE IHTIYACIMIZ VAR 

YERLESIK VE HARICI KOMUTLAR LA AYNI ISIMDE TAKMA ISIMLER TANIMLI OLABILIYOR AYNI LS KOMUTUNDA OLDUGU GIBI
TAKMA ISIMLER YERLESIK VE HARICI KOMUTLARDAN DAHA ONCELIKLI OOLARAK DEGERLENDIRILDIKLERI ICIN , GIRMIS OLDUGUMZ KOMUTLAR BIZIM BEKLEDGIMZDEN DAHA FARKLI SONUCLAR VEREBIYOR CUNKU TAKMA ISIMLER
TAKMA ISIM > DAHILI-HARIICI KOMUTLAR

ORNEK VERECEK OLURSAK 
adem@adem:~$ alias ls="echo I am a nickname"
adem@adem:~$ ls
I am a nickname
adem@adem:~$ 

Bizim kullandgiimz komutlarin bash-shell tarafindan nasil algilandigini type komutu ile ogreniyoruz tamama ama bu bilgiye neden ihtiyacimz var?
Cunku ls komutunda oldugu
Kabuga girilmis olan komutlarda bash kabugu ilk once takma isim var mi onu kontrol eder var ise takma ismi calistirir once!!!
Iste type komutu ile bash kabugunun girmis oldugmuz komutu nasil algiladigini gorebilioruz

EGER GIRDGIMIZ KOMUTUN TAKMA ISMININ ONCELIK OLARAK CALISTIRIMA OZELLIGINI KAYBETMESINI ISTERSEK!!!
command ls
COMMAND KOMUTU ILE YAZINCA, KABUK ALIAS ISMI GORMEZDEN GELECEK VE ONCE YERLESIK KOMUTLARA BAKACAK, DAHA SONRA DA LS ISMININ GECTIGI PATH YOLLARINA BAKARAK, /usr/bin/ls dosyamizi buludugu zaman bu dosyamizi calistirabiliyor

adem@adem:~$ alias cd="echo I am a cd command"
adem@adem:~$ cd
I am a cd command
adem@adem:~$ type cd
cd is aliased to `echo I am a cd command'

Her iki sekilde de alias-takma ismi gormezden gelir
adem@adem:/$ builtin cd ~
adem@adem:~$ command cd /

BUILTIN KOMUTU YALNIZCA YERLESIK KOMUTLARI NITELERKEN, COMMAND TUM KOMUT TURLERINDE YERLESIK KOMUTLARIN CALISTIRILMASINI SAGLIYOR

adem@adem:~$ builtin ls
bash: builtin: ls: not a shell builtin
adem@adem:~$ 

ls builtin-yerlesik ollmadigi icin ls komutunda builtin komutu calismaz

TYPE ARACI YALNIZCA CALISTIRILACAK OLAN ARACLARI  TEMSIL EDEN KOMUTLARIN BASH TARAFINDAN NASIL ELE ALINDIGINI GORMEMIZI SAGLIYOR

ALIAS I DENEMEK ICIN ALIAS UYGULADGIMZ KOMUTLARI DA ESKI HALINE ALMAK ICIN UNALIAS KOMUTUNU KULLANIRIZ!!!!

adem@adem:~$ alias cd="echo I am a cd command"
adem@adem:~$ cd
I am a cd command
adem@adem:~$ type cd
cd is aliased to `echo I am a cd command'

unalias cd

FILE ARACI 
Dosya turu hakkinda , dosya uzantisi bulunmayan ve turunu bilmedigimz dosyalar icin kullaniriz..

adem@adem:~$ file ~/.bashrc
/home/adem/.bashrc: ASCII text
adem@adem:~$ 

adem@adem:~$ file mylinux-tutorial.tar
mylinux-tutorial.tar: POSIX tar archive (GNU)
adem@adem:~$

adem@adem:~$ file /usr/bin/ls
/usr/bin/ls: ELF 64-bit LSB pie executable, x86-64, version 1 (SYSV), dynamically linked, interpreter /lib64/ld-linux-x86-64.so.2, BuildID[sha1]=897f49cafa98c11d63e619e7e40352f855249c13, for GNU/Linux 3.2.0, stripped
adem@adem:~$ 

ELF-EXECUTABLE AND LINKABLE KISALTMASINDAN GELIYOR, YURUTULEBILIR, RUN EDILEBILIR DOSYALARI TEMSIL EDIYOR

STAT ARACI
adem@adem:~$ stat mylinux-tutorial.tar
  File: mylinux-tutorial.tar
  Size: 10240     	Blocks: 24         IO Block: 4096   regular file
Device: 803h/2051d	Inode: 5690399     Links: 1
Access: (0664/-rw-rw-r--)  Uid: ( 1000/    adem)   Gid: ( 1000/    adem)
Access: 2023-12-20 13:01:03.888056763 +0100-En son erisim(dosya okunmasi veya calistirilmasi gibi) tarihi
Modify: 2023-12-20 12:59:41.000000000 +0100-En son duzenllenme(en son ekleme-cikarma, dosya iceriginin degistirildigi) tarihi 
Change: 2023-12-20 13:00:42.039792543 +0100-(meta verilerinin en son ne zaman degistirildigi-ismi,bulundugu konum, dosya icerigi)
 Birth: 2023-12-20 13:00:42.039792543 +0100(dosyanin ilk olusturuldugu tarih)
adem@adem:~$ 

Dosya ve klasorlerin bize sundugu, oz nitelikleri, meta verileri, yani o dosyaya ait size,yetki,isim, bulundugu konum bircok meta veriyi bize sunuyor

LSB_RELEASE(LINUX STANDART BASE) ARACI

Mevcut linux dagitimi hakkinda bilgi verir
Linux Standart Base in amaci farkli dagitimlarda ortak standartlari olusturmak ve kullanilmasini saglamak. Mevcut dagitmimizin bu standartlardaki isim ve surumunun gorebiliriz

adem@adem:~$ lsb_release -a
No LSB modules are available.(Bu hata lsb_release aracinin sistemimizde kurulu ama LSB cekirden modulunun kurulu olmadini gosteriyor ama zaten kurmak sart degil)
Distributor ID:	Ubuntu
Description:	Ubuntu 22.04.3 LTS
Release:	22.04
Codename:	jammy
adem@adem:~$ 


lsb_release --help  ile de ekstra ihtiyacimz olan bilgilere bakabilirz

UNAME

Mevcut isletim sistemi ve donanim ile ilgili bilgilerer erismemizi saglar

adem@adem:~$ uname -a
Linux adem 6.2.0-37-generic #38~22.04.1-Ubuntu SMP PREEMPT_DYNAMIC Thu Nov  2 18:01:13 UTC 2 x86_64 x86_64 x86_64 GNU/Linux
adem@adem:~$ 

Linux:cekirdek adi
hostname:adem
sistemin cekirdek surumu:6.2.0-37-generic
cekirdek versiyonu:#38~22.04.1-Ubuntu
Makinenin donanim mimarisi:2 x86_64 x86_64 x86_64
Isletim sistemi adi:GNU/Linux

Bu bilgileri ayri ayri da bastiabilirz

uname --help
uname -s -yalnizca kernel ismini gorebilriz

UPTIME ARACI 
Sistemin ne kadar suredir calistigi konuusunda bilgi almamizi saglar

adem@adem:~$ uptime
 09:53:29 up 12 days, 23:05,  1 user,  load average: 1,43, 1,26, 0,99
adem@adem:~$ 

09:53:29 : Mevcut sistemin saati
up 12 days,: Sistemin ne kadar suredir acik oldugu
1 user,:sistemde acik olan kullanici oturum sayisi
load average: 1,43, 1,26, 0,99: Sistemin 1,5 ve 15 dakikalik periyotlardaki sistemin yuk ortalamalarini veriyor

echo {1..99999}   yaparak sistemi biraz zorlayacak, yuk bindirecek  olursak

adem@adem:~$ uptime
 09:58:35 up 12 days, 23:10,  1 user,  load average: 1,32, 1,15, 1,02
adem@adem:~$ 

1,43, 1,26, 0,99
1,32, 1,15, 1,02

Bu sekilde degismims oldu!!!!!dikkat edelim
Yakin zamandaki yuk orani uzak zamana gore artik gosteriyor

Linux de yuk ortamalari sadece islemci-cpu lara degil, disk kaynaklarina olan talebi de yansitiyor!!!
Disk uzerindeki okuma yazma da sistem uzerindeki yuk ortlamasini etkilendiriyor

Sistem  yuku aldigmz sonuclarda cok dusuk veya 0 ollarak geliyor ise o zaman bu sistemin kisa periotta beklemede oldugunu gosteriyor.

Sadece sistemin ne kadar suredir acik oldugu bilgisi icin: 
uptime -p komutu nu kulanabiliriz

adem@adem:~$ uptime -p
up 1 week, 5 days, 23 hours, 19 minutes
adem@adem:~$ 

SISTEMINI ILK ACILIS TARIHINI, NE ZAMAN BASLATILDIGINI GORMEK ICN 
uptime -s
adem@adem:~$ uptime -s
2023-12-08 10:47:59
adem@adem:~$ 


FREE ARACI

Mevcut bellek kullanimi hakkinda bilgi alabildigimz temel bir aractir

adem@adem:~$ free
               total        used        free      shared  buff/cache   available
Mem:        16278532     4631960     1952252      632648     9694320    10678592
Swap:        2097148      229888     1867260
adem@adem:~$ 

birim belirtmezsek KB CINSINDEN GETIRIR
free -m :MB CINSINDEN VERIR
free-g:GB CINSINDEN VERIR

free -h(humanreadabel)

adem@adem:~$ free -h
               total        used        free      shared  buff/cache   available
Mem:            15Gi       4,4Gi       1,9Gi       571Mi       9,2Gi        10Gi
Swap:          2,0Gi       224Mi       1,8Gi
adem@adem:~$ 

total:Toplam bellek
Mem:Ram
Swap:Takas alani(virtual bellek)
used:Anlik olarak kullanilan bellek
free:Bostaki alan
shared:Geriye donuk uyumluluk-su anda cok gecerliligi yok 


BU ISTATISTIKLERI BELLI ARALIKLARLA GORMEK ISTERSEK-MESELA 3 SANIYE DE BIR
adem@adem:~$ free -s 3

3 SANIYE DE BIR DEGERLERI BASTIRIR

CTRL-C ILE DURDURURUZ

BIZ HEM NE SIKLIKLA HEM DE KAC KEZ BASILACAGINI DA BELIRTEBILIRIZ

free -s 2 -c 4(2 saniye de  -c(count) 4 kez basilsin)

DU(DISK USAGE) ARACI
Sistemde kullanilan tahmini disk alanini gorebiliyoruz
du direk calistirirsak, o zaman uzeirnde bulundugmz dosya ve klasorlerin, kilobyte cinsinden ne kadar yer kapladigni gorebiliriz

adem@adem:~$ du mylinux-tutorial.tar
12	mylinux-tutorial.tar

DU -H(HUMAN READABLE)
adem@adem:~$ du -h logs
8,0K	logs
adem@adem:~$ 

adem@adem:~$ du -h Desktop
4,0K	Desktop/test/test2/test21/test211/test2111
8,0K	Desktop/test/test2/test21/test211
4,0K	Desktop/test/test2/test21/test2112
16K	Desktop/test/test2/test21
20K	Desktop/test/test2
4,0K	Desktop/test/test3
108K	Desktop/test/img
4,0K	Desktop/test/test4
152K	Desktop/test
8,0K	Desktop/test2
176K	Desktop

AYRICA DIKKKAT EDERSEK DU -H DESKTOP DA SONUCUNDA DESKTOP ALTINDAKI TUM DOSYA VE KLASORLERIN KAPLADIGI ALANI VERIR VE LISTENIN EN ALTINDA DA DESKTOP OLARAK TOPLAM NE KADAR ALAN KAPLADINGI GOSTERIR

DU -H DESKTOP- BURDA KLASOR ISIMLERI ILE GELIYOR SADECE, EGER DOSYA ISIMLERI DE GELSIN ISTERSEK 
DU -A DESKTOP DERIZ

adem@adem:~$ du -h Desktop
4,0K	Desktop/test/test2/test21/test211/test2111
8,0K	Desktop/test/test2/test21/test211
. 
. 
176K	Desktop
adem@adem:~$ du -a Desktop
4	Desktop/note.txt
4	Desktop/test/test1.txt
.
.
176	Desktop
adem@adem:~$ 

-S VEYA -SH ILE KULLANARAK SADECE TUM DESKTOP KLASORUNUN NE KADAR ALAN KAPLADIGINI DA GOREBILIRIZ!!
-S(SUMMARIZE)
-H(HUMAN READABLE)

adem@adem:~$ du -s Desktop
176	Desktop
adem@adem:~$ du -sh Desktop
176K	Desktop
adem@adem:~$ 

SPESIFIK OLARAK BELIRTTIGIZ DOSYA VE KLASORLERI BELIRTEBILIRIZ


DU -H ILE YAPTGMIZ AYNI ISLEMI LS -SH ILE DE YAPABILIRIZ

s(summarize) h(humanreadable)
adem@adem:~$ ls -sh Desktop
total 20K
4,0K note.txt  4,0K note.txt.save  4,0K test  4,0K test2  4,0K test3.txt
adem@adem:~$ ls -l -sh Desktop
total 20K
4,0K -rwxr-x--- 1 root root 2,3K april  5  2023 note.txt
4,0K -rwxr-x--- 1 root root 2,5K april  6  2023 note.txt.save
4,0K drwxrwxr-x 6 adem adem 4,0K okt.  23 13:45 test
4,0K drwxrwxrwx 2 root root 4,0K juni  13  2023 test2
4,0K -rw-rw-r-- 1 adem adem   20 april  5  2023 test3.txt

DIKKAT EDELIM NORMLALDE DU -H DESKTOP YAZINCA DESKTOP ALTINDAKI HER BIR DOSYA VE KLASORUN BOYUTUNU AYRI AYRI VERIRKEN DU -SH DESKTOP SEKLINDE KULLANINCA DESKTOP KLASORUNU BIR BUTUN OLARAK NE KADAR YER KAPLADIGNI VERIYOR

adem@adem:~$ du -sh Desktop
176K	Desktop
adem@adem:~$ du -sh Downloads/geoserver1
117M	Downloads/geoserver1
adem@adem:~$ 

Access denied hatali sonuclarini gostermek istemezsek de bu sekilde yapariz 
2 numara hatali cikti sonuclari 
/dev/null da bolsuga gonder, kaldir, yokluga gonder gibi birsey

adem@adem:~$ du -s ~/D* 2>/dev/null
176	/home/adem/Desktop
12	/home/adem/Documents
2671160	/home/adem/Downloads
adem@adem:~$ du -sh ~/D* 2>/dev/null
176K	/home/adem/Desktop
12K	/home/adem/Documents
2,6G	/home/adem/Downloads

shc(summarize-humanreadable-count)-Toplam alani gormek icinde 
adem@adem:~$ du -shc ~/D* 2>/dev/null
176K	/home/adem/Desktop
12K	/home/adem/Documents
2,6G	/home/adem/Downloads
2,6G	total


LSUSB | LSPCI | LSHW

lsusb:Sistemimiz uzerinde usb uzerinden bagli olan aygitlari gosteriyor

adem@adem:~$ lsusb
Bus 002 Device 002: ID 8087:8000 Intel Corp. Integrated Rate Matching Hub
Bus 002 Device 001: ID 1d6b:0002 Linux Foundation 2.0 root hub
Bus 001 Device 002: ID 8087:8008 Intel Corp. Integrated Rate Matching Hub
Bus 001 Device 001: ID 1d6b:0002 Linux Foundation 2.0 root hub
Bus 004 Device 001: ID 1d6b:0003 Linux Foundation 3.0 root hub
Bus 003 Device 005: ID 1b3f:2008 Generalplus Technology Inc. USB Audio Device
Bus 003 Device 003: ID 093a:2510 Pixart Imaging, Inc. Optical Mouse
Bus 003 Device 004: ID 0bda:5730 Realtek Semiconductor Corp. HP 2.0MP High Definition Webcam
Bus 003 Device 002: ID 03f0:064a HP, Inc HP USB Keyboard
Bus 003 Device 001: ID 1d6b:0002 Linux Foundation 2.0 root hub
adem@adem:~$ 

Ornegin sisteme usb uzerinden harici bir wifi karti  taktigimzda, aygit hakkinda burdan bilgi alabiliriz. Wifi aygiti sistem tarafindan dogru sekilde taninmiyorsa o zaman aygiti takip lsusb komutu ile liste uzerinden burdaki aygitin id sine bakip bu id uzerinden internetten arastirma yapip uygun aygit surucusu olup olmadigini sorulayabilirsiniz

Yine de wifi kartini kullanamiyorsunuz ama, surucusunun mevcut oldugunu biliyorsunuz, formlar uzerinden, github vs gibi harici kaynaklaridan da arastirabiliriz

PCI VERI  YOLU ILE BAGLI OLAN AYGITLARI DA LISTEYEBILIRIZ
LSPCI

SISTEME BAGLI OLAN TUM AYGITLARI GORMEK ICIN LSHW(HARDWARE)

Eger bash-shell kabugunda yuklu degil ise bu araci apt araci ile yukleriz 
sudo apt install lshw -y seklinde kurariz

adem@adem:~$ lshw
WARNING: you should run this program as super-user.
adem  

Burda araci sudo lshw ile calistirirsak ciktilarin tamamini alabiliriz


PAKET YONETIMI!

LINUX PAKET YONETIMI

Linux dagitimlarinin birbrinden ayrildigi nokta, basta paket yonetim araclari olmak uzere,dagitimlarda varsayilan olarak yuklu bulunan araclardir 
Dagitimlari birbirinden ayiran temel noktalardan biridir, paket yonetimi

Sistemi kullanirken sisteme yukledigmz araclari kullaniyoruz

Paket dedgimz yapi, ilgili aracin kurulacagi sisteme tam olarak uygun sekilde onceden hazirlanmis olan dosyalarinin bir paket haline getirilip kullanicilara sunulmasi
Bizim kaynak koddan derleme, bagimliliklari ekleme vs ile ugrasmamiza gerek kalmiyor. Zaten paket yonetimii ile yuklenen araclar icinde kaynak kodlar derlenmis ve tum bagimlilklar dahil edilmis ve hazir bir sekilde getiriliyor

Dagitim repo sunda ise hazir calistirilabilir dosyalar mevcut, bunlar bizlere paketler halinde sunuluyor
Biz aslinda bu paketleri Gelistirici Repo-Devlopment repo adresinden alioyruz

Dagitimlarini en buyuk sorumluluklarindna bir tanesi de kullaniciilara yazilimlarin tum bagimliliklari ile birlikte, guncel, guvenilir, paketleirn repo uzrerinde sunulmasi..Bu sayde biz, kurulm icin cok zaman harcamadan direk paket kurulumu yaparak yapabiliyoruz

PAKET YONETICILERI UZERINDEN, PAKET KURMA,SILME,UPDATE ETME ISLEMLERINI YAPABILIYORUZ

DEBIAN  TABANLI DAGITIMLAR
apt, dpkg araclari ni kullanir
RED HAT
yum, rpm araclarini kullanir

Cunku yazilimlar ilgili dagitimlarda calismaya uygun sekilde derlenip paketlendigi icin, bu paketleiri acmak icinde, yine uygun paket yoneticilerinin kullanilmasi gerekiyor. Ornegin debian tabanli dagitimlarda kullanilmasi gereken paketler .deb uzantili sunuluyorken, redhat dagitimlarda bu .rpm oluyor

DEBIAN TABANLI DAGITIMLAR ICIN GECERLI OLAN PAKET YONETIM ARACLARI
APT-DPKG ARACLARI

debian tabanli sistemlerde .deb uzantili dosyalar birer kurulabilecek veya calistirilabilir paket dosyasidir.Windows da .exe ye karsilik gelendosyalardir 
.deb uzantlili paket dosyalarini kurmak-calistirmak icin dpkg aracini kullaniriz

dpkg-(telaffuzu - dipekic veya di pi key ci)

dpkg araci debian a ozel olan .deb paketlerinin kurulmasi, konfigure edilmesi ve silinmesi gibi temel paket yonetiminden sorumludur

dpkg-(DEBIAN PACKAGE KISALTMASIDIR)

APT ARACI(ADVANCE PACKAGE TOOL)
Bir de APT ARACIMIZ VARDIR PAKET YONETIMLERINDE LINUX-DEBIAN TABANLI DAGITIMDA
apt-(Advance package tool) 

apt araci dpkg ye oranla kullanicilarin islerini kolaylastirmak icin hazirlanmis, cok daha ust seviye bir paket yoneticisidir

apt araci paketlerin uzak sunucudan bagimliliklari ile birlikte otomatik olarak indirilip kurulmasini sagliyor. Diger paket yonetimi isleri icin de bu aracimzi rahatlikla kullanabiliyoruz

apt araci kurulum ve kaldirma isleri icin arka planda dpkg aracini kullaniyor
Burda apt aracini kullaniyor olma nedenimiz, bu aracin varlik nedeni , kurmak istedgimz aracin paketini repo uzerinden, otomatik olarak bulmasi, ve bu aracin ihtiyac duydugu diger tum ek paketleri, yani bagimliliklarini da cozumleyip, bunlari da kurabiliyor olmasidir
Bu sayede biz bagli oldugmuz uzak sunucu depolarinda, aradigmiz paket oldugu surece, istedgimz araci kolaylikla kurabiliyoruz.
Zaten genellikle istisnai durumlar haric repolarda bir aracin kurulmasi icin gerekli olan tum bagimliliklar vs apt araci vasilatsiyla kuruluyor

DPKG ARACI ILE APT ARACINI KARISTIRMAYALIM..BIRBIRINDEN COK FARKLI SEKILDE CALISIYORLAR!!!!!!

NORMALDE BIZ DPKG ARACINI KULLANIRSAK, YALNIZCA LOKAL OLARAK INDIRMIS OLDUGUMUZ, .DEB UZANTILI TEK BIR PAKETI KURABILIYORUZ
KURMUS OLDUGUMZ BU PAKETIN-ARACIN CALISMASI ICIN GEREKLI OLAN HARICI PAKETLER VAR ISE DPKG TARAFINDAN BUNLAR OTOMATIK OLARAK BULUNUP INDIRILMIYOR, BUNU YAPAN ARACIMIZ BURDA BAHSI GECEN APT ARACIDIR. BIZLER DPKG ARACINI YALNIZCA LOKAL OLARAK, PAKET YONETIMI ICIN KULLANIYORUZ
OZETLE BU DURUMDA DPKG ARACINI KULLANARAK KURULUM YAPACAKSAK, KURUDGUMZ PAKETIN IHTIYAC DUYDUGU EK PAKETLERI DE TEK TEK BULUP INDIRMEMIZ, VE ONLARI DA DPKG ARACINI KULLANARAK TEK TEK KURMAMIZ GEREKIYOR


DPKG(DEBIAN PACKAGE) ARACI
COK DIKKAT EDELIM, BIZ GENELLIKLE LOKAL PC MIZE KURACAGIMZ CHROM,ZOOM, VE GUNLUK KULLANIMDA IHTIYAC DUYDUGMZU BU PROGRAMLARIN KENDI SITLERINE GITTGIMZDE, BIZE LINUX DE KRUULUM ICIN GEREKLI OLAN .DEB DOSYALARINI DA VERECEKLER BIZ BU DEB ARACLARINI INDIRIRIZ BU INDIRME ISLEMINI DE WGET UZAKTAN DOSYA INDIRME ARACI ILE YAPIP .DEB DOSYALARINI SISTEMIMIZE DPKG ARACI ILE  KURABILIRIZ

ORNEGIN ZOOM KU KURARKEN 

ZOOM DEBIAN - ZOOM DOWNLOAD LINUX YAZARAK ARAMA YAPARIZ 
SONRA ZOOM ICIN INDIRILECEK DOWNLOAD BUTONA SAGA TIKLAYIP COPY LINK DERIZ 
SONRA 
wget https://zoom.us/client/5.17.0.1682/zoom_amd64.deb
diyerek zoom kurulumun saglayacak olan zoom_amd64.deb kurulum-calistirilabilir windows daki .exe dosyasinin karsiligi olan dosyayi indirmis oluruz.
Artik bundan sonra bu dosyayi lokal de kurabilmek icin 

dpkg -i(installl) zoom_amd64.deb 

seklinde kullanarak .deb uzantili dosyamizi kurabiliriz!!!
ONEMLI AYRINTI KURULUM ISLEMINI ANCAK ADMIN  YETKSINDE OLANLAR KURABILIR ONDAN DOLAYI DA SUDO ILE KURMALIYIZ MUTLAKA, YOKSA KURAMAYIZ!!

sudo dpkg -i zoom_amd64.deb

adem@adem:~/Downloads$ sudo dpkg -i zoom_amd64.deb
Selecting previously unselected package zoom.
(Reading database ... 300428 files and directories currently installed.)
Preparing to unpack zoom_amd64.deb ...
Unpacking zoom (5.17.0.1682) ...
dpkg: dependency problems prevent configuration of zoom:
 zoom depends on libxcb-xtest0; however:
  Package libxcb-xtest0 is not installed.
 zoom depends on libxcb-cursor0; however:
  Package libxcb-cursor0 is not installed.

dpkg: error processing package zoom (--install):
 dependency problems - leaving unconfigured
Processing triggers for mailcap (3.70+nmu1ubuntu1) ...
Processing triggers for gnome-menus (3.36.0-1ubuntu3) ...
Processing triggers for desktop-file-utils (0.26-1ubuntu3) ...
Processing triggers for shared-mime-info (2.1-2) ...
Errors were encountered while processing:
 zoom
adem@adem:~/Downloads$ 

ARACIMIZI KURARKEN ASAGIDAKI GIBI DEPENDENCY PROBLEMLERI YASANDIGI ERROR-FEEDBACKLERI ALDIK!!!!
BU ARACIMZ TAM OLARAK KURULMAMIS OLDU ASLINDA, HATIRLARSAK DPKG ILE KURULUM YAPARKEN, KURDUGUMZU .DEB UZANTILI ARACIN HARIICI-DEPENDENCIES LERININ DE AYRI AYRI KURULMASI GEREKTIGI, APT ARACI GIBI OLMADIGINI BELIRTMISTIK!!!!!

Unpacking zoom (5.17.0.1682) ...
dpkg: dependency problems prevent configuration of zoom:
 zoom depends on libxcb-xtest0; however:
  Package libxcb-xtest0 is not installed.
 zoom depends on libxcb-cursor0; however:
  Package libxcb-cursor0 is not installed.


 DOLAYISI ILE ERROR ALINAN TUM DEPENDENCIES PAKETLERINI ARAYIP BULUP ONLARI DA DPKG ILE KURMAMIZ GEREKIYOR KI ZOOM TAM OLARAK KURULABILMIS OLSUN!!! 
 AYNI .DEB DOSYAMIZI BULDUGMZ GIBI YUKLENMEYEN DEPENDENCIES DOSYLARININ DA GIDIP BULUUP ONLARI DA YUKLEMEMIZ GEREKIYOR. 
 ZATEN BU HALI ILE ZOOM ARACI DA CALISMAYACAKTIR!!!!

 PEKI BU EKSIK ARACLARI NERDEN BULACAGIZ?????
 BU ARASTIRMA ISLEMI ICIN DE 
 debian packages yazarak internette arayacak olursak

 Debian Packages linkine tiklariz
 https://www.debian.org/distrib/packages
Bu web sitesinde
Søk i pakkekatalogene Nøkkelord:
Søk i pakkenes innhold

YUKLENMEYEN DEPENDENCY PAKETLERIMIZ BU SEKILDE IDI:
Unpacking zoom (5.17.0.1682) ...
dpkg: dependency problems prevent configuration of zoom:
 zoom depends on libxcb-xtest0; however:
  Package libxcb-xtest0 is not installed.
 zoom depends on libxcb-cursor0; however:
  Package libxcb-cursor0 is not installed.

  libxcb-xtest0 
  libxcb-cursor0

  Bu paketleri arariz ve ustteki paketi karsimiza paket i bulur ve gelen link tiklanildiginda, o paket ile ilgili download linkleri goruruz

  how can I understand which is ok for my linux-ubuntu :Download libxcb-xtest0
Architecture	Package Size	Installed Size	Files
amd64	102.2 kB	126.0 kB	[list of files]
arm64	102.3 kB	177.0 kB	[list of files]
armel	102.2 kB	177.0 kB	[list of files]
armhf	102.3 kB	177.0 kB	[list of files]
i386	102.2 kB	125.0 kB	[list of files]
mips64el	102.2 kB	178.0 kB	[list of files]
mipsel	102.1 kB	177.0 kB	[list of files]
ppc64el	102.4 kB	177.0 kB	[list of files]
s390x	102.1 kB	121.0 kB	[list of files]

Bu download linklerinden hangisi bizim ubuntu isletim sistemine uygun bunu ogrenmekk icn de 
uname -a 
veya 
uname -m deriz ve 

adem@adem:~/Downloads$ uname -m
x86_64
adem@adem:~/Downloads$ uname -a
Linux adem 6.2.0-37-generic #38~22.04.1-Ubuntu SMP PREEMPT_DYNAMIC Thu Nov  2 18:01:13 UTC 2 x86_64 x86_64 x86_64 GNU/Linux
adem@adem:~/Downloads$ 
Bu da demek oluyor ki :

If your system is 64-bit (x86_64 or amd64), you should choose the amd64 package.

DOLAYISI ILE TEK TEK BAGIMLIKLIK DOWNLOAD LINKLERINI DE YINE WGET ILE .DEB UZANTILI DOSYALARI INDIRIP ONLARI DA YINE 
dpkg -i ile tum bagimlilik .deb dosyalarnin kurduktan sonra bastan bir kez daha

adem@adem:~/Downloads$ sudo dpkg -i zoom_amd64.deb
bu sekilde kurulumumuzu yapariz ve o zaman problemsiz bir sekilde kurulumun gerceklestigini gorebiliriz!!!

ANCAK BU SEKILDE KURULUM YAPMAK COK UZUN VE ZAHMETLIDIR
GENELLIKLE DPKG INTERNET BAGLANTISININ OLMADIGI DURUMLARDA LOKALDEKI DOSYALARIMZI KURMAK ICIN KULLANILIYOR
AMA INTERNET BAGLANTIMIZ VAR IKEN DPKG YI KURULUM ICIN KULLANMAK COK DA MANTIKLI DEGIL, APT ARACI VARKEN

YUKLENMIS PAKETLERI NASIL DPKG UZERINDEN SILEBILIRIZ!
-r (remove)
adem@adem:~/Downloads$ sudo dpkg -r zoom
[sudo] password for adem: 
(Reading database ... 301949 files and directories currently installed.)
Removing zoom (5.17.0.1682) ...
run post uninstall script, action is remove ...
Processing triggers for shared-mime-info (2.1-2) ...
Processing triggers for mailcap (3.70+nmu1ubuntu1) ...
Processing triggers for gnome-menus (3.36.0-1ubuntu3) ...
Processing triggers for desktop-file-utils (0.26-1ubuntu3) ...
adem@adem:~/Downloads$ zoom
Command 'zoom' not found, but can be installed with:
sudo apt install zoom-player
adem@adem:~/Downloads$ 

Biz bir paketi dpkg ile yukledigmz zaman o pakete ait dosyalar, linux e indriliyor ve inen paket te bir arac-yani komut olarak kullanilabiliyor ve komut uzerinden calistirilabiliyor
Ama suna dikkkat edelim.Eger silmeye calistigimz paket in ek bagimliliklari var ise, o zaman iligli paketi dogrudan bu sekilde silemeyiz

Baska araclar tarafindan kullanildigindan dolayi, baska araclari bozulmamasi icin bize uyyari verecektir 
sudo dpkg -r apt 
dpkg: dependency problems prevent removal of apt:
tasksel depends on apt.
apt-utils depends on apt (= 2.3.)

AMA PAKETI HERSEYE RAGMEN SILMEK ISTERSEK, AMA BU COK TEHLIKELIDIR VE BIRCOK SEYI BIRDEN BOZABILIRIZ 

--force-all 
ZORLAYARAK SILMEK COK MANTIKLI DEGILDIR

BIZ BIR ARACI SILDGIMZDE BU ARACIN KONFIGURASYON DOSYALARI GERIDE KALIYOR KI, BU ARAC TEKRAR KURULURSA ILERDE O ZAMAN BU KONFIGURASYON DOSYALARI KULLANILIYOR

AMA KONFIGURASYON DOSYALARINI DA SILMEK ISTERSEK O ZAMAN 
sudo dpkg -P zoom 
ile sileriz

EN BASTAN SILERKEN DOGRUDAN sudo dpkg -P zoom ile silersek eger o zaman, zaten hem paketi hem de konfigurasyon dosyalarini silecektir

BUNLAR DPKG NIN EN TEMEL KULLANIMLARIDIR

KURMADAN ONCE PAKET HAKKINDA BILGI ALMAK ICIN
dpkg -I zoom_amd64.deb 

SISTEMIMIZDE KURULU OLAN PAKETLER HAKKINDA BILIGI ALMAK ICIN
KURULU OLAN DEBIAN PAKETLERINI LISTELE DEMIS OLUYORZ

dpkg -l
cok uzun bir liste gelecektir, space e basarak diger sayfalar a da gecebiliriz
Q TUSU ILE DE CIKABILIRIZ

SPESIFIK BIR ARAC HAKKINDA BILGI ALMAK ICIN ISE:

Ornegin apt araci hakkinda bilgi almak istersek
dpkg -l apt

DPKG ARACI ILE KURULU OLAN PAKETLERIN YENIDEN YAPILANDIRILMASI 

ILGII PAKETLERIN KONFIGURE EDILMESI GEREKIYOR BAZEN 
KONFIGURASYONLAR ARACLARIN DOGRU BIR SEKILDE CALISABILMESI ICIN COK ONEMLIDIR

BU KONFIGURASYONLAR NORMALDE ARACI BIZ EN BASTAN KURARKEN GERCEKLESIIYOR, AMA BAZEN KONFIGURASYON HATALII KURULABILIYOR, VEYA BAZEN BIZ BIR SEKILDE KONFIGURAYSONNLARI BOZDU ISEK O ZAMAN TEKRAR ARACI KURMAYA GEREK KALMADAN YENIDEN KONFIGURASYON YAPABILIYORUZ

sudo dpkg-reconfigure firefox-esr

COK FAZLA KULLANMAYACAGIMMZ BIR KOMUT
BU KOMUT BIZE KONFIGURASYON IMKANI VEREN PAKETLER ICIN GECERLIDIR, EGER BIZ BU KOMUTU KULLANDIGMZ DA HER HANGIB IR CIKTI ALMIYORSAK DEMEKKI BIZ O ARACI KONFIGURE EDEMIYORUZ

sudo dpkg-reconfigure locales
locales araci icin ama dil secenegi tekrar konfigure edilmesine bize imkan saglaniyor


APT APT-GET- APT-CACHE HAKKINDA

apt(advance package tool)

apt araci repolarda paket arama, ve otomatik bagimlilik cozumleri sayesinde paket yonetimini bizler icin oldukca kolay hale getiren bir aracimizdir 

APT ARACI SAYESINDE, INDIRMAK ISTEDGIMZ PAKET REPO OLARAK, ISIMLENDIRILMIS OLAN PAKETTEN ALINIYOR, BU SAYEDE PAKETLERIN BULUNUP YUKLENMESI HEM GUVENLI HEM DE TUTARLI HALE GELIYOR
REPO DEDGIMZ I SADECE UZAK SUNUCUDA BULUNAN INTERNETE ACIK OLAN REPO OLARAK DEGIL, ORNEGIN INTERNETE BAGLI OLMAYAN LOKAL AGDA DISKIMIZI REPO OLARAK TANIMLAYIP ICERISINE ISTEDGIMZ PAKETLERI YERLESTIREBILIRIZ, BU SAYEDE LOKAL AGDAKI TUM CIHAZLARIIN BU DISKTE BULUNAN PAKETLERE APT ARACI UZERINDEN ULASMASI, APT ARACINI KULLANARAK BU PAKETLERI YUKLEMESI DE MUMKUN OLMUS OLUR!!!!

BU REPO YU ANLAMAK COK ONEMLI-INTERNET BAGLANTISI OLMAYAN YEREL AGDAKI BIR DISK TE REPO OLABILIYOR VE APT O YEREL AGDAKI DISKTEN PAKETLERI YUKLEYEBILIYORMUS!!!

YANI OZETLE APT ARACI ILE YUKLEME YAPACAGIMZ ZAMAN, BU REPO ADRESLERINE IHTIYACIMIZ VAR. BU REPOLAR LOKAL VEYA INTERNET UZERINDE BIR ADRESTE TUTULUYOR OLABILIR
APT ARACINI KULLANACAKSAK REPOYA IHTIYACIMZ VAR

APT ARACI SADECE APT TEN IBARET DEGIL 

apt-get:Bu araci kullanarak paketleri indirme, kurma, guncelleme ve silme gibi islemleri gerceklestirebiliyoruz
apt-cache: Bu araci kullanarak da repolarda paket arastirmasi yapabiliyoruz, arama motoru gibi kullanabiliyoruz
apt-file:Ilgili paketin icindeki dosylari aramak icin kullaniliyor.

AYRICA apt-get ve apt-cache komutlarini tek bir aracta birlesiren apt komutunu da kullanabiliyoruz 

APT-GET VE APT-CACHE ILE KOMUT GIRMEK YERINE YALNIZCA, APT KOMUTU ILE DE AYNI ISLEVLERI YERINE GETIREBILIIYORUZ

-- APT(ADVANCE PACKAGE TOOL) ARACI --
Apt araci repolar uzerinden paketi cekip ilgili araci yukluyordu
Yani apt araci linux-ubuntu-debian repolari sayesinde calisiyor
apt aracinin dogru sekilde calismasi icin, ki bu cok onemlidir, paketleri cektigi bu repolarin en guncel hallerinin haberdar edilmesi gerekiyor. Yoksa hangi paketlerin en son hangi surumlerinin bu repoya eklenmis oldugu ve bu paketlere tam olarak hangi dizinden ulasilabilecegi bilinemez, bilinemezse de ilgli paketler kurulamaz.
Yani bu repolar surekli guncellendigi ve iceriisnde surekli deigisiklikler yapildigi icin, bir paket kurulmadan once  paketlerin isimleri ve dizin adresleri hakkinda en guncel repo bilgisinin alinmasi gerekiyor, bu isleme de index guncelleme deniyor.
 Yani guncelleme yapiyorum dedgimzde repolardaki en guncel bilgilerin, apt araci tarafindan ogrenilmesini saglamis oluyoruz. Bir nevi paket listesinin en guncel halini almis oluyuoruz aslinda..
ISTE BU IS ICN REPOLARDAKI EN GUNCEL BILGILERI APT ARACININ BILMESI ICIN 

SUDO APT-GET UPDATE VEYA
SUDO APT UPDATE 

KOMUTUNU CALISTIRMAMIZ GEREKIYOR SIKLIKLA
YANI BIZ YENI BIR PAKET KURACAGIMZ ZAMAN ILK YAPACAGIMZ IS HER ZAMAN 
SUDO APT UPDATE  KOMUTUNU CALISTIRMAK OLMALIDIR!!!!!BU COOOOK ONEMLIDIR!!!!!!!!!!!!


adem@adem-ThinkPad-13-2nd-Gen:~$ sudo apt update
[sudo] password for adem: 
Hit:1 http://no.archive.ubuntu.com/ubuntu jammy InRelease
Hit:2 http://packages.microsoft.com/repos/code stable InRelease                
Hit:3 http://no.archive.ubuntu.com/ubuntu jammy-updates InRelease              
Hit:4 http://no.archive.ubuntu.com/ubuntu jammy-backports InRelease            
Hit:5 https://dl.google.com/linux/chrome/deb stable InRelease                  
Hit:6 http://security.ubuntu.com/ubuntu jammy-security InRelease               
Hit:7 https://ftp.postgresql.org/pub/pgadmin/pgadmin4/apt/jammy pgadmin4 InRelease
Ign:8 https://deb.nodesource.com/node jammy InRelease
Err:9 https://deb.nodesource.com/node jammy Release

Burda, linux-ubunutu dagitima ait, repostroy adreslerini guncellemis oluyor!!!
Kullanilmakta olan dagitima gore(ubuntu,kali...) repo adresleri degisiklik gosterecektir.

APT Ile paket yuklerken conflict ler cikabiliyor neden?
1-Linux un ubuntuya degilde ornegin kali versiyonuna ait bir repostory den gidip node.js i ubuntu da indirmeye calisildiginda, veya farkli versiyonlari indriliyor once, daha sonra da zaten farkli versiyon, yanlis versiyon yuklenmis, sonra da yeniden dogru versiyon yuklenmeye calisiliyor ve ne oluyor, confclict oluyor.
Bu durumlarda genellikle paket once tamamaen kaldirilir, ardindan, cache vs de birseyler kaldi ise onlar da silinir 
Ve sonra da sudo apt update ile tekrardan bir yenilenir!!!!


sudo apt autoremove
sudo apt autoclean

sudo apt clean 
sudo apt update


ve artik sudo apt update 
ile en guncel, repo  bilgilerini aldigmiiza gore , yeni bir paket kurarken artik en guncel repolardan kurmak istedigmz paketimz, sorunsuz bir sekilde kurabiliriz!!!!

sudo apt update  komutu sistemimizi guncellemiyor, repolardaki index bilgisini guncelliyor. Bu sayede sistemimizde geri kalmis paketler varmi, yeni paket kurmak istedgimz de bu paketin adresi nedir gibi bilgilier apt araci ogrenebiliyor!!

APT ILE YENI BIR PAKETI NASIL KURABILIRIZ
Kurma isleminden once, kurmak istedgimz paketin repolarda nasil tutuldugunu, hangi isimle tutuldugunu ogrenmemiz gerekiyor
Bunun icinde apt search leafpad komutunu kullanabilirz
Ornegin leafpad isimli bir arac kurmak istiyoruz

Repo da leafpad ismi ile eslesen tum paketleri bize listeleyecektir

adem@adem-ThinkPad-13-2nd-Gen:~$ apt search leafpad
Sorting... Done
Full Text Search... Done
l3afpad/jammy 0.8.18.1.11-3 amd64
  Simple text editor forked from Leafpad

libmousepad-dev/jammy 0.5.8-1 amd64
  development files for libmousepad

libmousepad0/jammy 0.5.8-1 amd64
  mousepad plugins library

mousepad/jammy 0.5.8-1 amd64
  simple Xfce oriented text editor

adem@adem-ThinkPad-13-2nd-Gen:~$ 

Burdan ornegin biz 
l3afpad/jammy 0.8.18.1.11-3 amd64
  Simple text editor forked from Leafpad
Bu paketi kurmak istiyoruz, yani paket ismini burdan orgenmis olduk mesela!  
ARACIN ISMI  l3afpad/jammy 0.8.18.1.11-3 amd64
l3afpad oldugunu burdan anlariz

adem@adem-ThinkPad-13-2nd-Gen:~$ sudo apt install l3afpad

Oncelikle, leafpad isminde bir paket apt-repostorilerinde olmadingin anliyoruz, apt search leafpad sonuclarindan
onun yerine l3afpad paketi mevcut, illa ki apt respostory lerinden kurmak istersek o zaman, biz l3afpad paketini kurabiirz
asagidaki gibi
adem@adem-ThinkPad-13-2nd-Gen:~$ sudo apt install l3afpad


Peki biz leafpad yazinca bize neden asagidaki gibi bir sonuc verdi!!
adem@adem-ThinkPad-13-2nd-Gen:~$ leafpad
Command 'leafpad' not found, but can be installed with:
sudo snap install leafpad

SNAP NEDIR?
Ubuntu nun arkasindaki sirket olan Canonical tarafindan gelistiirlen, bir paket yonetimi ve yazilim gelistirme sisteminidir
Snap , bagimliklilari kendi icinde getiriyor direk olarak, sonra dan kurulan bir paketin ekstra dan bagimliliklarini kurmamiza gerek yok
Bazi yazilimlar, paketler sadece snap uzerinden kurulabilir, apt repstorylerinde aranilan paket dogrudan artik bulunmuyyor olabilir, ama boyle durumlarda apt repostrylerinde o paketin alternatifi mevcut oluyor genelde, ama biz illa ki o paketi kuralim dersek o zaman snap a basvurabiliriz!!!!Bazi paketler Snap store,yani snap in depolarinda, ubuntu repostorylerinden daha guncel olarak bulunabilir
Bu genellikle resmi depolarda artık bakımı yapılmayan veya güncellenmeyen yazılımlar için geçerlidir.

snap de leafpad i kurmak istersek - snap paket yoneticisi ile 
adem@adem-ThinkPad-13-2nd-Gen:~$ sudo snap install leafpad

TEKRAR HATIRLATMAKTA FAYDA VAR BIZ SUDO APT ILE BIR PAKET KURMADAN ONCE MUTLAKA, UBUNTU REPO INDEX LERININ GUNCEL OLDUGUNDAN EMIN OLMALIYZ BUNUN ICINDE MUTLAKA, sudo apt update ile oncesinde, en guncel repo indexlerini getirmemiz gerekiyor!!!!

Guncellemeyi yapmadan paket kurulumu yapmaya calisirsak ne gibi durumlar ortaya cikabilir?
1-Oncelikle aranan paket bulunmayabilir
2-Aranilan paket bulunsa bile farkli veya eski versiyonlarda olabilir bu da uymusuzluk, compatibale olmama sorunlari verebilir!!!!

Aranilan paket bulunmazsa ilk yapmamiz gereken islem
sudo apt update 
yaptikdan sonra o paketi bir kez daha kurmaya calisalim!!

APT ILE KURULAN PAKETIN KALDIRILMASI
sudo apt remove l3afpad  -  sudo apt-get remove l3afpad ile de yapabilirdik
Bize Y/N diye sorar Y dersek l3afpad aracini silecektir

Biz paket silerken su sekilde mesajlar gorecegiz 
The following packages were autumatically installed and are no longer required:
............................
............................
Use 'sudo apt autoremove' to remove them
The following packages will be removed:
l3afpad
Yalnizca l3afpad i siliyor, ama bu arac ile birlikte gelen bagimliliklar sistem de kalmaya devam ediyor
Eger biz bu arac ile gelen ve baska araclarinda kullanmadigi diger bagimliliklari da tamaman silmek istersek: 
sudo apt remove l3afpad YERINE sudo apt autoremove l3afpad ile de sileblirdik
Ama tabi sonradan da yine  biz 
sudo apt autoremove l3afpad
komutunnju calistirarak, tum bagimliklari da silebiliriz

APT ILE SILINEN ARACIN KONFIGURASYON DOSYALARI
apt araci da ayni dpkg aracinda oldugu gibi remove veya autoremove ile bir araci sildiklari zaman, ilgli aracin, konfigurasyon doslarini silmiyor.Cunku ilerde silinen araci tekrar yukleyip ayni konfigurasyonu kullanabilme ihtimalimz var.
EGer biz bilincli bir sekilde, bu konfigurasyonlari bir daha kullanmayacagimzdan emin isek, bu konfigurasyon dosyaolarinin da silinmesini talep edebiliriz
Bunun icin --perge option i ekleriz!!!

adem@adem-ThinkPad-13-2nd-Gen:~$ sudo apt autoremove --purge l3afpad
Reading package lists... Done
Building dependency tree... Done
Reading state information... Done
Package 'l3afpad' is not installed, so not removed
0 upgraded, 0 newly installed, 0 to remove and 11 not upgraded.
adem@adem-ThinkPad-13-2nd-Gen:~$ 
Tabi biz l3afpad aracini daha once sildigmiz ve bu araca dair herhangi bir konfigurasyon yapmadimgz icin herhangi birsey silinmemis oldu

Ya da direk asagidaki gibi komutu calistirirsak eger, zaten direk olarak, aracin kendsi, konfigurasyon dosyalarini ve , bagimliliklari herseyini silmis oluruz!
sudo apt autopurge l3afpad

PAKET BAGIMLILIKLARININ DUZELTILMESI 

Bir aracin calismasi icin birden fazla ek pakete ihtiyac duyuluyor normalde.
Bu bagimliliklar hatali islemlerimiz sonucu bazen silineibiliyor

Bu tarz bagimlilik hatalarinin cozulmesi icin yine apt aracini kullanabiliriz
apt aracinin baggimlilik sorununu cozebilmek icin: 

adem@adem-ThinkPad-13-2nd-Gen:~$ sudo apt install -f
ya da asagidaki gibi de yapabiliriz ayni islemi....
dem@adem-ThinkPad-13-2nd-Gen:~$ sudo apt --fix-broken install

BIR DAHA HATIRLATMAKTA FAYDA VAR, EGER SUDO APT UPDATE YAPMAZSAK BAGIMLILIK SORUNLARI DA COZULEMEYEBILIR, CUNKU SUDO APT INSTALL -F ILE GIDIP GUNCELLENMIS REPO DA PROBLEMI COZEBILIR, ESKI REPO DA PROBLEMI COZEMEYEBILIR...ONDAN DA DOLAYI  SUDO APT UPDATE COOK ONEMLIDIR, REPO INDEXLERININ GUNCELLENMESI ICIN!!!!

PAKETLERIN UPGRADE EDILMESI!!!!

Her hangi bir pakette guncelleme yapmadan once repo indexlerini mutlaka guncellemeliyiz!!!!!

sudo apt update
SONRASINDA ARTIK UPGRADE KOMUTU CALISTIRILABILIR!

sudo apt upgrade 
Once yukseltilebilecek paketleri listeler sonra da bize yukseltmek isteyip istemedgimzi sorar, topluca hepsini birden yukseletmek icin
Eger biz paketler in hepsini degil de spesifik olarak bir kac tanesini yukseltecek olursak eger,

sudo apt upgrade komutu calistirilinca, Y-N sorusuna kadar hangi paketlerin yukseltilebilecegini veriyor o yukseltilebilecek paketlerden 1 tanesinin ismini aliriz ve 

sudo apt install zsh  (paket ismi zsh dir)
YANI BIZ SPESIFIK BIR PAKETIN EN GUNCEL SURUMUNU YUKLEMEK ISTERSEK ONU TEKRARDAN KURARAK BUNU YAPABILIRIZ!!!!!
EGER KI TUM PAKETLERIN SURUMUNU AYNI ANDA TOPLU OLARAK, YUKSELTMEK ISTEMEZ ISEK, VE SPESIFIK OLARAK BAZI PAKETLERI TEKER TEKER YUKSELTMEK ISTERSEK O ZAMAN SADECE O PAKETI ILK DEFA KURAR GIBI NORMAL , sudo apt install zsh  KOMUTUNU CALISTIRIRSAK O ZAMAN, ZATEN O PAKETI SON SURUMUNE YUKSELTMIS OLURUZ!!!!

YANI BIZ VAR OLAN BIR ARAC I TEKRARDAN SUDO APT INSTALL DIYE YUKLEDIGMZDE, O ILGILI ARACIN UZERINE YAZMIS OLMUYOURUZ VEYA O ARACI SILMIS DE OLMUYORUZ, SADECE ILGILI ARACI BIR UST SURUME YUKSELTMIS OLUYORUZ!!!

SADECE KURULU BIR ARAC I TEKRAR KURDUGMUZDA-YANI YUKSELTTIGIMZDE BIZE BU ARAC ILE ILGILI BAZI KONFIGURASYON SORULARI SORULABILIR
BUNLARA DOGRU CEVAPLAR VERMELIYZ

KAPSAMLI GUNCELLEME-YUKSELTME ISLEMI

sudo apt upgrade ile biz
sadece sistemimizde yuklu bulunan paketlerin-araclarin, ubuntu repolarindaki, en son surumlerine yukseltilmesi saglanmis oluyor 
Ancak, eger paketlerden bazilarinin yeni surumlerinde, eskiden var olan bazi bagimliliklara artik ihtiyaci yok ise bunlari silmiyor, ya da yeni bagimliliklar var ise bunlari eklemiyor, veya bunlar ile ilgili herhangi birsey yapmiyor.  
Bunun yerine  
sudo apt dist-upgrade  komutunu kullanmamiz gerekiyor!!!!!
BU KOMUT SAYESINDE GUNCELLEME YAPILIRKEN VAR ISE YENI BAGIMLILIK PAKETLERININ KURULMASI, VE AYRICA GEREKSIZ PAKETLERINDE KALDIRILMASI SAGLANIYOR

adem@adem-ThinkPad-13-2nd-Gen:~$ sudo apt dist-upgrade

BU KOMUT, GEREKSIZ PAKETLERIN SILINMESI,VE UPGRADE EDILEN ARACA EK OLARAK EKLENMESI GEREKEN BAGIMLILIKLAR I DA EKLEYECEKTIR
BU SEKILDE COK DAHA GENIS KAPSAMLI, SISTEM GUNCELLEMESI YAPMAK ISTERSEK O ZAMAN, DIST-UPGRADE KOMUTUNU KULLANMAMIZ GEREKIYOR

ISLETIM SISTEMINI BIR UST SURUMUNE YUKSELTMEK ISTEDIGMZDE DE 
SUDO APT DIST-UPGRADE YAPARAK SISTE ILE ILGILI EN GUNCEL EN YUKSEK SURUMLERE ERISEBILIRIZ

EGER SISTEM YUKSELTEME YAPACAKSAK, KULLANILACAK OLAN DAGITIM, IN UBUNTUNUN DEVELOPER LARI TARAFINDAN SUNULAN, DOKUMANTASYONDAN INCELYEREK YAPMALIYZ!!!

APT UZERINDEN KURULAN  ARACLAR IN KURULUM DOSYALARI, YANI .DEB UZANTILI DOSYALARI TUTULUYOR NERDE TUTULUYOR 
ls /var/cache/apt/archives
adresinde tutulyor.
Olur da internet in olmadigi ortamda calisacak olursak burdan, .deb uzantili dosyalari dpkg ile kurararak kullanabiliriz 
Ama burda her kurulan paketin kurulum dosyasi da tutuldugunda zamanla burasi iyice sisecektir
Burayi da temizlemek istersek o zaman 

sudo apt clean 

ARADA BIR BU KOMUTU CALISTIRARAK, /var/cache/apt/archives burdaki sismeyi onleyebiliriz!!

adem@adem-ThinkPad-13-2nd-Gen:~$ ls /var/cache/apt/archives/
lock  nodejs_16.20.2-deb-1nodesource1_amd64.deb  partial
adem@adem-ThinkPad-13-2nd-Gen:~$ sudo apt clean
adem@adem-ThinkPad-13-2nd-Gen:~$ ls /var/cache/apt/archives/
lock  partial

IHTIYACIMZA YONELIK COZUM SUNAN PEKCOK FARKLI REPO BULUNYYOR
DAGITIM GELISTIRICILERIN RESMI OLARAK SUNDUGU REPOLARDAN GELISTIRICILERIN KISISEL OLARAK GELISTIRDIGI REPOLARA KADAR PEKCOK REPO ADRESI BULUNMAKTADIR
NETICE DE TEK BIR REPO ADRESI BULUNMADIGI ICIN, APT ARACI REPO ARACININ KENDISINE DOGRU BIR SEKILDE BELIRTILMESINI ISTIYOR
BUNU DA /etc/apt/sources.list  dosyasi icerisinde tutuluyor

sudo nano /etc/apt/sources.list 
# See http://help.ubuntu.com/community/UpgradeNotes for how to upgrade to
# newer versions of the distribution.
deb http://no.archive.ubuntu.com/ubuntu/ jammy main restricted

Bu dosyalarda dagitimlara ait resmi deoplar /etc/apt/sources.list  dosya icerisinde, default olarak geliyor

YENI BIR REPO ADRESI NASIL EKLEYEBILIRIZ!! 
Her zaman icin gelistiricilerin sundugu resmi repo larin dokumantasyonu incelemmemiz gerekiyor!
Ubuntu repo ile ilgil resmi sayfalari okuyarak, arastirma yaparak bu islemi halledebiliriz 
ubuntu linux repository diye chrokme da arayabiliriz

GRAFIKSEL ARAYUZLU PAKET YONETIM ARACLARI

apt, dpkg yi kullanarak, komut satirinda nasil yapildigini ogrendik
ama grafiksel arayuzlu paket yonetimi icin kendimzi arastirmamiz gerekiyori



DEBIAN DAGITIM  REDHAT DAGTIMLAR 
dpkg                  rpm
apt                   yum
.deb                 .rpm


KAYNAK KODDAN DERLEMEK!!
Her zaman mevcut sistem icin hazirlanmis olan paket dosyalari bulunmayabiliyor
Bu durumda bizim kaynak kodlari kullanarak, araci mevcut sistemimizde calisabilir hale getirmemiz yani bu aracimizi derlememiz gerekiyor
Yani kaynak koddan derlemeye de cok az da olsa ihtiyac duyabiliriz

GELISTIRICILER MUTLAKA, KAYNAK KODDAN KURULUM GEREKTGIGINDE DE ADIM ADIM NELER YAPMAK ISTEDIGI DOKUMANLARDA IZAH EDILIYOR!

wget source code 
diye arayabiliriz wget in source code 
Burda kaynak kodlari hangi websitesinden okudugmz cok onemli...Cok dikkatli olmak gerek, guvenilirligi ile ilgili

Tam emin olmadan, kaynaklari kullanmamliyiz 
Mumkun ise github, veya developer larin kendi sitelerinden indirmemiz daha guvenilirdir

wget source code 
GNU download server linkine tiklayinca, skstirilmis indirilebilir dosya listesini gorebiliriz

Ordan en guncel skstirilmis dosyayi indiririz
wget2-2.0.1.tar.gz

wget https://ftp.gnu.org/gnu/wget/wget2-2.0.1.tar.gz 
O an uzerinde bulundgmz dizine inmis oldu 

wget2-2.0.1.tar.gz

Aracimiz arsiv dosyasinda bulunuyyor
Once bu skstirilmis arasiv dosyasindan cikarmamiz gerekiyor 

SKSTIRILMIS .GZIP DOSYASINI DISARI CIKARMAK
-d(decompress) option i kullanilmasi
adem@adem-ThinkPad-13-2nd-Gen:~$ gzip -d myfolder.tar.gz

Arsiv dosyasini disari cikarmak ORNEGI!!
-x(extract) 
adem@adem:~$ tar -xf linux-tutorial.tar -C linux-tut


adem@adem-ThinkPad-13-2nd-Gen:~$ gzip -d wget2-2.0.1.tar.gz 
adem@adem-ThinkPad-13-2nd-Gen:~$ tar -xf wget2-2.0.1.tar


adem@adem-ThinkPad-13-2nd-Gen:~/wget2-2.0.1$ ls
Baktigmz zaman README dosyalari da mevcuttur bu dosyalari cok iyi okumamiz gerekir
Ve read me dosyasinda adim adim kurulumu inceleyip takip edebiliriz
Kurulma esnasinda hata veren, kurulum gerceklesmeyen, bazi bagimlilik paket-araclari ni da biz, tekrardan kuracak sekilde adim adim, readme yi takip ederek kurulumu kendimiz kaynak kodlari uzerinden yapaiblirz

Bu tarz kaynak koddan kurulum prosesslerinde, illa ki bazi hatalar olacaktir, onemli olan bizim bu hatalari arastirmak... 

KULLNICI VE GRUP YONETIMI

Kullnici:
1-super(Super User)
2-sistem(System User)
3-Normal(Normal User)

SUPER USER-ROOT
Sistem uzerinde tum haklara sahip olan en yetkili kullanicidir, root kullanici olarak da bilinir.
Biz root hesabinin kullanirken, sistemimiz uzerindeki en yetkili kullanici hesabin  yonetiyor olacagiz

SYSTEM USER

Bu yazilim veya uygulamalar tarafindan olusturulan ve yonetilen kullanicilara verilen isimdir
Sistemdeki araclar tarafindan kullanilan hesaplar
Mevcut sistemimizde saat senkronizasyonunu saglayan NTP ISIMLI BIR ARAC YUKLU ISE,
BU ARACIN GOREVINI YERINE GETIREBILMESI ICIN KENDISINE AIT BIR SISTEM KULLANICI HESABI BULUNUYORDUR- NTP USER
BU SAYEDE GEREKTIGINDE BU KULLANICI HESABI UZERINDEN, GOREVINI YERINE GETIREBILIYOR
SISTEMDEKI CESITLI YAZILIMLARIN(NTP GIBI) ISLERINI GORMEK ICIN KENDILERINE AIT KULLANICI HESAPLARI OLABILIYOR.
YETKILERI GOREVLERI DAHILINDE SINIRLIDIR
BURDA BAHSI GECEN HESAPLAR INSANLARIN DEGIL, YAZILIMLARIN SISTEMI YONETMEK ICIN SINIRLI OLAN YETKILERI DAHILINDE SISTEMI YONETMEK ICIN KULLANDIKLARI TURDEN HESAPLARDIR

NORMAL USER
root(super user) tarafindan olusturulan standart hesaplardir.
Temel sistem yonetimi icin kullanilirlar

Kisisel dosyalar icin /home/adem dizini altinda, kendi dizinine sahip oluyorlar
Normal kullanicilar /home/ dizini altinda kendilerine ait dizine sahip oluyorlar, tipki benim sahp oldugumn gibi /home/adem/  seklinde!!!!!

Kendi dosyalarini duzenli sekilde tutabilmeleri
Kendi kisisel calisma duzenini, olusturabilmeleri acisindan onemli bir yaklasim
Yazilimlarin kullanmalari icin var olan system user larin /home/ dizinleri yoktur
Cunku yazilimlarin insanlar gibi kisisel islemlerini barindirmak icin, bir /home/ dizinine ihtiyac duymuyorlar. Yalnizca gorevleri dahilinde islevleri yerine getirmek icin varlar

SUDO KOMUTUNU ANLAMAK!!

Sistemde en yetkili kullanici root-super user dir. Sistemi yonetirken, de yetkiler gerektiren islemler le karsilasiriz.
Bu durumda gorevi yerine getirebilmek icin root-super user hesabina gecis yapabiliriz. Ancak root hesabina gectigmiz zaman, en yetkili kullanici olacagimz ve onumuzde hicbirsey duramayacagi icin, hatali sekilde kritik dosyalari silmeyi onleyecek, veya sistemin isleyisine zarar verecek bir eylemde root user u durduracak hicbir mekanizme bulunmuyor. 
Root kullanici hesabini yalnizca gerektiginde kullandgimiz, ve ne yaptigimiz bilerek kullandigimz varsayiliyor sistem tarafindan.
Root hesabini kullanmak tehlikeli olabildigi icinde cogu sistemde root hesabi pasif olarak geliyor, varsayilan olarak aktif gelmiyor. Biz aktiflestirmedigmiz muddetce de, root hesabi aktif olmuyor. Buna karsilik root hesabi aktif olmasa bile yetki gerektiren islerimiz icin gecici olarak root yetkileri ile hareket edebilmemizi saglayan sudo komutunu, sudo aracini kullanabiliyoruz.
Sudo sayesinde, root hesabi aktif degil iken veya root hesabi aktif ise bile root kullanici hesabinin sifresini bilmeden, yonetici ayricaliklari ile ilgili isimizi yurutmemiz mumkun oluyor

NOT:
SUDO YU CD KOMUTU ILE BIRLIKTE KULLANAMAYIZ CUNKU CD KOMUTU SHELL-ENVIRONEMNTS DA INBUILT BIR COMMANDDIR. SUDO YU CALISTIRDIGMIZDA, BIZ DISARDAN, SUPERUSER-ROOT YETKISINE SAHIP OLAN BIR PROGRAM EXECUTE EDIYORUZ VE SUDO KENDISI DE EXTERNAL-DISARDAN PROGRAMLARI CALISTIRABILIYOR, AMA SHELL IN INBUILT ARACLARINI DIREK OLARAK CALISTIRAMIYOR!!!!

YENI KULLANICI OLUSTURMAK! adduser-useradd-passwd
Yeni bir kullanici olusturmak icin, yeni kullaniciya olusturacak yetkiye sahip olmamiz gerekiyor.
Bu yetki de sadece sistem uzerindeki superuser-root yetkili kullancisinda bulunuyor
Daha onceden de bahsettigmiz gibi, sudo komutu yardimi ile, root user ina gecis yapmadan, da yetki gerektiren islemleri yapabiliyoruz

useradd veya adduser dan herhangi birini kullanarak y apabiliirz

adem@adem:~$ sudo adduser adem54
Adding user `adem54' ...
Adding new group `adem54' (1002) ...
Adding new user `adem54' (1002) with group `adem54' ...
Creating home directory `/home/adem54' ...
Copying files from `/etc/skel' ...
New password: (Yeni sifre girmemiz gerekiyor)
Retype new password: 
passwd: password updated successfully
Changing the user information for adem54
Enter the new value, or press ENTER for the default
	Full Name []: Adem Erbas

 Yeni bir kullanici olsuturulacagi zaman,  /etc/skel  (skeleton) dan dosyalar kopyalanip, o kullanici ismi ile ayni isimde home dizin i altinda olusturualn dizin altina kopyalaniyor!!!

adem@adem:/home$ ls
adem  adem54  admin
adem@adem:/home$ 

SIMDI, HEM /ETC/SKEL I HEM DE /home/adem54 KONTROL EDECEK OLURSAK 
ICERISINDE GIZLI DOSYALAR OLDUGU ICIN . ILE BASLAYAN DOSYALAR, ONLARI GORMEK ICIN 
LS -A KOMUTU ILE LISTELEMEK GEREKIYOR
adem@adem:~$ ls -a /etc/skel
.  ..  .bash_logout  .bashrc  .profile
adem@adem:~$ ls /home/adem54
ls: cannot open directory '/home/adem54': Permission denied
adem@adem:~$ sudo ls -a /home/adem54
.  ..  .bash_logout  .bashrc  .profile
adem@adem:~$ 

useradd i kullanarak yeni bir kullanici olsutururken ise
sudo useradd -m adem54
-m secenegi ile belirtmezsek, kendisi adem54 kullcisi icin olusturulacak dizini /home dizini altina olusturmuyor...BUNA DIKKAT ONDAN DOLAYI BIZ GENELLIKLE, adduser ile yeni bir kullanici olustururuz

sudo useradd -m adem54
komut calistirilinca , bize herhangi bir password vs sormadan, kullaniciyi olusturuyor. Ama bizim bu kullaniciya password olusturmaiz gerekiyor, ki bu kullanici hesabinda oturum acabilelim!!
Biz parola olsuturma islemini useradd araci yeni kullanici olustururken yapamadigmiz icin, bizim bunu kendimzin ozellikle olsturmasi gerekiyor
Bunun icinde passwd aracimzi kullanabiliyoruz

PASSWD ARACI ILE PASSWORD OLUSTURMAK!

sudo passwd adem54
ile gerceklestirebiliriz
New password:
Retype passowrd: 

passwd ARACI, YENI KULLANICILARA PASSWORD OLUSTURMAK, VE MEVCUT KULLANICILARINDA PASSWORDLERINI DEGISTIRMEK ICIN KULLANILAN BIR ARACTIR 
ARGUMAN OLARAK KULLANICI ISMINI ALIR

/ETC/PASSWD HAKKINDA!!!! 

adem@adem:~$ cat /etc/passwd
postgres:x:130:138:PostgreSQL administrator,,,:/var/lib/postgresql:/bin/bash
admin:x:1001:1001:,,,:/home/admin:/bin/bash
adem54:x:1002:1002:Adem Erbas,,,:/home/adem54:/bin/bash
adem@adem:~$ 
En son 3 satira bakacak olursak eger
En  son olusturdugmz kullanici yi gorebiliyoruz, cunku ona da password olusturmustuk.
adem54:x:1002:1002:Adem Erbas,,,:/home/adem54:/bin/bash
adem54:kullanici ismi
x:kullanici parolasi
1002:1002: kullanici hesap numarasi:kullanici grup numarasi
Adem Erbas,,,:kullanici ad,soyad vs gibi kisisel bilgileri
/home/adem54: kullaniciya ait home dizini
/bin/bash:kullanicinin varsayilan shell-kabugu

BU DOSYANIN ICINDEKI VERILER KULLANICI HESAPLARINI ETKILIYOR, BIZ GELIP DE BURDA ORNEGIN KISISEL VERILER ILE ILGILI VEYA VARSAYILAN KABUK-SHELL-BASH ILE ILGILI DEGISIKLIKLER YAPARSAK, BU KULLANICIYA AIT BILGILERI ETKILEMIS OLACAK. 

YANI KISACASI ASLINDA BIZ HIC adem@adem:~$ sudo adduser adem54 komutunu kullanmadan, uygun dosyalari ornegin /etc/passwd dosyasi gibi, dosyalari duzenleyecek olursak, sistemimize yeni bir kullanici olusturabiliriz
Ornegin yeni kullanicimiz /etc/passwd dosyasina ekleriz
Daha sonra, /etc/group dosyasina da ekleriz ve bu kullaniciya bir parola-password tanimlariz, ve daha sonra bu kullaniciya bir home dizini olustururuz
Yani tek tek butun dosyalari uygun sekilde duzenlersek yeni bir kullanici hesabinin adem@adem:~$ sudo adduser adem54 komutu kullanmadan da olusturabiliriz

AMA TEK TEK MANUEL SEKILDE UGRASMAYA GEREK YOK, ADDUSER ARACI BIZIM ICIN ARKA PLANDA BUNLARI ZATEN YAPACAK

KULLANICILAR ARASI SWITCH ISLEMI ICIN 
su - adem54  komutunu kullaniriz
passowrd:
- ifadesi adem54 kullanicisinin home dizininde calismaya baslamasini sagliyor
su - adem  diyerek tekrardan adem kullancisina gecis yapabiliriz


adem@adem:~$ adduser --help
adduser [--home DIR] [--shell SHELL] [--no-create-home] [--uid ID]
[--firstuid ID] [--lastuid ID] [--gecos GECOS] [--ingroup GROUP | --gid ID]
[--disabled-password] [--disabled-login] [--add_extra_groups]
[--encrypt-home] USER

Biz kullanici olusturma asamasinda, kullanicinin ornegin home dizinin spesifik olarak baska bir yer belirtmek istersek , ayni sekilde shell-kabuk varsayilan olarak bash degil de baska bir shell olmasini istersek, ve kisisel bilgiler, grup bilgileri vs bunlari da custom yapabiliyoruz, adduser ile yeni bir kullanici olusturma esnasinda, option olarak vererek

/ETC/PASSWD DOSYASI KULLANICILAR  UZERINDEN ETKILI BIR DOSYA, KULLANICI HESAP BILGILERININ TUTULDUGU BIR DOSYADIR. DOLAYISI ILE BU DOSYA UZERINDE DEGISIKLIK YAPTTIGIMZDA ELBETTE KULLANICILARI ETKILIYOR!!!!

MEVCUT BIR KULLANICI HESABINI DEAKTIF HALE GETIRMEK!!!!
exit - ile bir kullanici hesabindan cikis yapaibliyoruz
Bir kullaniciyi deaktif hale getirmek icin, o kullanici hesabindan oturum acmasi engellenerek yapilabilir

sudo nano /etc/passwd dosyasine gidecek olursak eger!!!!
Bazi kullanici hesap bilgilerini asagidaki gibi gorebiliriz

games:x:5:60:games:/usr/games:/usr/sbin/nologin
man:x:6:12:man:/var/cache/man:/usr/sbin/nologin
.
. 
admin:x:1001:1001:,,,:/home/admin:/bin/bash
adem54:x:1002:1002:Adem Erbas,,,:/home/adem54:/bin/bash


games isiml i kullanici bilgilerine dikkat edecek olursak eger, varsayilan bash kabugu /bin/bash yerine /usr/sbin/nologin olarak verilmis ve bu sekilde varsayilan shell-kabuk verildigi zaman
kullanici oturum acmaya calistiginda, bu sekilde sistemde hata alacak oturum acamayacak
adem54 kullanicisinin shell-kabugunu da /usr/sbin/nologin olarak degistirecek olursak eger o zaman su - adem54 e gecmeye calistigmizda gecis yapilamayacak, yani login-olamayacak, oturum acilamayacak!!!!

Baska bir alternatif de yine sudo nano /etc/passwd dosyasindaki bir ornege bakacak olursak 
mysql:x:129:137:MySQL Server,,,:/nonexistent:/bin/false
bu da yine varsayilan bash i /bin/false yaparak, kullanicinin login olmasini engelleiyor ama hata mesaji da vermiyor...

adem54 kullanicisini deaktif hale getirmek istersek!!!!

adem54:x:1002:1002:Adem Erbas,,,:/home/adem54:/usr/sbin/nologin

adem@adem:~$ su - adem54
Password: 
This account is currently not available.
adem@adem:~$ 

adem54 kullanicisini bu seferde mesaj vermeden login olmasini engelleyecek olursak eger!!!

adem54:x:1002:1002:Adem Erbas,,,:/home/adem54:/bin/false
adem@adem:~$ su - adem54
Password: 
adem@adem:~$ 

/ETC/PASSWD ICINDE X:KULLANICI PAROLASI /ETC/SHADOW ISIMLI DOSYA DA SIFRELENMIS BIR SKEILDE TUTULDUGUNA ISARET EDIYOR!!!!
TUM KULLANICILARIN PAROLA BILGILIERI /ETC/SHADOW ICERISINDE SIFRELENMIS BIR SEKILDE TUTULUYOR

adem54:x:1002:1002:Adem Erbas,,,:/home/adem54:/bin/bash
adem@adem:~$ 
En son 3 satira bakacak olursak eger
En  son olusturdugmz kullanici yi gorebiliyoruz, cunku ona da password olusturmustuk.
adem54:x:1002:1002:Adem Erbas,,,:/home/adem54:/bin/bash
adem54:kullanici ismi
x:kullanici parolasi 

/ETC/SHADOW DOSYASI 

sudo nano /etc/shadow

root:!:19447:0:99999:7:::
daemon:*:19411:0:99999:7:::
.
. 
adem:$y$j9T$sWcNPGWVQJqltfq2HQOgu0$BnqMO.Rtaxr7b5A5pFBBIJiAQsXew03tyefj3n3XLX3:>
mysql:!:19450:0:99999:7:::
postgres:*:19517:0:99999:7:::
admin:$y$j9T$MT3kFlDVnV.BM5.iC9fN01$Hmgvxx/tJ.BU9B5PTnNifciPqBo7848/5SaD/C3MEHA>
adem54:$y$j9T$DEGJEQg.v3LPQ6/aGc2VP0$u.3lsrX8RdoyX/RspnhqoC2FI3D0rwO5vJZUw3JiPO>

Gordugmz gibi, sonradan olsuturdugmz kullaniclara ait parolalar da burda sifrelenmis bir sekilde bulunuyor!!!
Biz burdaki kullanici hesaplarindan birisi ile giris yaptigimzda bizden parola ister biz parolayi girereiz girdigmz parola sifrelenerek, /etc/shadow dosyasi icerisindeki sifrelenmis hali ile eslesiyor ise biz o kullanici uzerinden login olabiliyoruz, yok ise parola hatali mesaji aliyruz

GRUPLAR HAKKINDA!!!

Grup  yapisi sayesinde, ortak izinlere sahip olmasini istedgimiz kullanicilari, ayni grupta derleyip bireysel kullanici yetkileri disinda toplu sekilde bu kullanicilara erisim yetkileri de tanimlayabiliyoruz!!!!

Normalde yeni bir kullanici olusturdugmzda, her bir kullaniciya ait olarak bu kullanici hesabi ile iliskili olarak, kullanici hesabi ile ayni isimde yer alan bir grup olusturuluyor. Iste bu grup o kullanicinin birincil grubu olarak geciyor
Ilk olarak bu kullanici olusturudldugu icin ve yalnica o kullanici o grupta var oldugu icn

groups komutu ile bir kullanicinin grubunu sorgulayabiliriz
adem@adem:~$ groups adem54
adem54 : adem54

adem54 kullanicisinin kendi ismi ile olsuturulms olan birincil gruba dahil oldugunu goreibiliriz

adem kullanici icin groups komutu ile grubu sorgulayacak olursak

adem@adem:~$ groups adem
adem : adem adm cdrom sudo dip plugdev lpadmin lxd sambashare

adem kullanicisi ile root yetkisi gerektiren islemlerde sudo, kullanilirken, sudo grubuna dahil oldugui icin, sudo komutu kullndiginda, yetkisinin olup olmadigi kontrol edilirken, sudo grubuna dahil oldugundan yetkisi oldugu anlasiliyor 
adem kullanicisinin 1.-birincil grubu yine adem ismindki grubudur ve onun disinda da bircok farkli grubu vardir
Bu sekilde bircok farkli gruba dahil olarak, o kullanici o dahil edildgi grupta var olan diger kullancilarin da sahip oldugu  ile ortak yetkiler dogrultusunda hareket edebiliyor. 

/ETC/GROUP DOSYASI INCELEME

adem@adem:~$ cat /etc/group

adem@adem:~$ cat /etc/group
root:x:0:
daemon:x:1:
bin:x:2:
sys:x:3:
adm:x:4:syslog,adem

postgres:x:138:
admin:x:1001:
adem:x:1000:
adem54:x:1002:

admin kullanicisi 1001 numarali gruba sahip
adem54 kullanicisi 1002 numarali gruba sahip

Bu numaralar her bir grubu birbrinden benzersip yapan numaralardir
Ayrica bazi grup numarlarinin karsisinda kullanici isimler i var , bir gruba birden fazla kullanici dahil olabildig iicin de 

sudo:x:27:adem- sudo grubu 27 numarali gruptur ve  adem isimli kulllanici sudo grubuna dahil mis
adem:x:1000:

dip:x:30:adem
Bu x de gruplarin parolasini temsil ediyor ama gunumuzde genellikle gruplara parola koyulmasi tercih edilmiyor ondan dolayi da gruplarin kendine ait parolasi olmuyor
Burdaki x ler eger var ise parolayi temsil ediyor...

Sonuc olarak /etc/group dosyasi kullanilarak, demekki kullanicilari gruba dahil etme cikarma da yapaiblirz fakat bunu manuel olarak yapmak cok saglikli degil onun  yerine bu islemi yapabilecegimz araclar kullanarak yapilmasi daha mantiklidir


YENI GRUP OLUSTURMAK"!!
adem@adem:~$ sudo groupadd new-group

cat /etc/group a bakacak olursak! 
Ya da en sonuncu satira bakacakolursak eeger
adem@adem:~$ tail -n 1 /etc/group
new-group:x:1003:

GRUBA YENI KULLANIC eklemek!!!

sudo gpasswd -a adem54 new-group

adem@adem:~$ sudo gpasswd -a adem54 new-group
Adding user adem54 to group new-group
adem@adem:~$ tail -n 1 /etc/group
new-group:x:1003:adem54(burdan da gorebiliriz)
adem@adem:


BIR KULLANICININ DAHIL OLDUGU GRUPOLARI GORMEK ICIN ISE
groups adem54

adem@adem:~$ groups adem54
adem54 : adem54 new-group
adem@adem:~$ 

EKLEDIGIMZ KULLANICIYI GRUPTAN SILMEK ICIN ISE 

adem@adem:~$ sudo gpasswd -d adem54 new-group
Removing user adem54 from group new-group
adem@adem:~$ groups adem54
adem54 : adem54
adem@adem:~$ tail -n 1 /etc/group
new-group:x:1003:
adem@adem:~$ 


MEVCUT GRUBU SILMEK!!!

adem@adem:~$ sudo groupdel new-group
adem@adem:~$ grep 'new-group' /etc/group
adem@adem:~$ tail -n 3 /etc/group
admin:x:1001:
plocate:x:139:
adem54:x:1002:
adem@adem:~$ 


ERISIM  YETKILERI

Bir dizin altindaki erisim yetkilerini gorebilmek icin o dizin altnda
ls -l yapariz 
Spesifik bir dosyaya ait erisim yetkilerini gormek icin de 
stat komutunu kullaniriz

dem@adem:~$ ls -l
total 3853068
-rw-rw-r--  1 adem     adem              0 des.  19 15:12 a
drwxr-x---  3 adem     adem           4096 mars  31  2023 Android

adem@adem:~$ stat myfil
  File: myfil
  Size: 13        	Blocks: 8          IO Block: 4096   regular file
Device: 803h/2051d	Inode: 5690334     Links: 1
Access: (0664/-rw-rw-r--)  Uid: ( 1000/    adem)   Gid: ( 1000/    adem)
Access: 2023-12-15 13:06:28.561026045 +0100
Modify: 2023-12-15 13:06:23.244957322 +0100
Change: 2023-12-15 13:25:47.795637447 +0100
 Birth: 2023-12-15 13:02:44.154095325 +0100
adem@adem:~$ 


dem@adem:~$ ls -l
total 3853068
ErsmYet  NumbHardlink  Owner   Group    FileSize   Last-modified  File-Dir-Name 
drwxr-x---    3        adem     adem    4096       mars  31  2023 Android

d:directory-klasor oldugu icin
-r standart dosyalar da yalnizca - ile belirtiliyor

ls -l ile mySembText2 nin de oldugu dosyalari listelersek eger 
lrwxrwxrwx  1 adem adem   23 des.  17 21:46 mySembText2 -> /home/adem/links/mytext
Burdaki l de bu dosyanin sembolik 

DESKTOP KLASORUNUN ERISIM YETKILERINI INCELEYELIM SIMDI
drwxr-x---  4 adem(kullanici)   adem(group ismi)   4096 des.  12 14:04 Desktop 

d
rwx
rwx bu dosyanin sahibi olan adem(hemen 4 ten sonraki) kullanicisinin sahip oldugu  yetkilerdir
r-read
w-write
x-execute

r-x  ise 
Desktop klasorunun grubundaki, yani adem grubundaki kullanicilarin
sahip oldugu yetkilerdir
adem grubuna kimler dahil ise r-x yetkileri ile hareket edebilir mis

---: Others have no permissions for this directory.

-: Bu kısa çizgi veya kısa çizgi, belirli bir iznin bulunmadığını gösterir. İzin dizesinde kısa çizgi görüyorsanız bu, ilgili iznin verilmediği anlamına gelir.


ORNEK!!!
-rwxrwxr-x  1 adem(KULLANICI)     adem(ADEM GRUBUNA SAHIP OLAN KULLANICILAR)             20 des.  11 10:00 betik.sh

-rwx rwx r-x
rwx-(READ-WRITE-EXECUTE) kullanicininn kendisinini sahpi olduugu  yetkiler
rwx(READ-WRITE-EXECUTE)  kullanicinin ait oldugu gruptakilerin sahip oldugu yetkiler
r-x(READ-EXECUTE)  OTHER- ne kullanicinin kendisi ne de kullanicinin dahil oldugu grupta olmayan kullanicilar icin gecerlidir bu yetkilerde!!!!


-rw-rw-r--  1 adem     adem             33 des.  26 15:51 testfile.sh

EGER YETKI OLARAK EXECUTABLE HALE DE GETIRECEK OLURSAK!!!!
adem@adem:~$ chmod +x testfile.sh
4 -rwxrwxr-x  1 adem     adem             33 des.  26 15:51 testfile.sh

YETKILERI TEST EDERSEK
-rw-rw-r--  1 adem     adem             45 des.  26 15:59 testfile1.sh

adem@adem:~$ ./testfile1.sh
-bash: ./testfile1.sh: Permission denied
adem@adem:~$ 
Executable x yetkisi olmadigindan dolayi boyle bir hata aliriz

r-cat ile acip okuuyabiliriz
w-sudo nano ile acip icerisine birseyler yazabiliriz 
ama dosyayi execute edemiyoruz 
adem@adem:~$ ./testfile1.sh
-bash: ./testfile1.sh: Permission denied

dosyamizi execute edebilmek icin execute yetkisi asagidaki gibi veririz

adem@adem:~$ chmod +x testfile1.sh
adem@adem:~$ ./testfile1.sh
This is test file and I will check it
adem@adem:~$ 


CHMOD ILE ERISIM YETKILERI TANIMLAMAK!

ls -l
-rwxrwxr-x  1 adem     adem             27 des.  26 15:54 testfile.sh

ONCELIKLE DOSYAMIZA AIT TUM YETKILERI SIFIRLAYALIM VEYA CIKARALIM
r-read
w-write
x-execute 

yetkilerini sifirlamak veya cikarmak istiyoruz

adem@adem:~$ chmod -rwx testfile.sh (read-write-execute yetkilerini kaldirdik cunku basina - koyduk, basina + koyarsak o yetkileri veririz, basina - koyarsak o  yetkileri kaldiririz)

----------  1 adem     adem             27 des.  26 15:54 testfile.sh

DOSYASNIN SAHIBI ILE ILGILI YETKILER EKLEYECEKSEK EGER CHMODDAN SONRA U(USER) ILE BASLARIZ
user(dosyanin sahibi-owner) a executable yetkisi verildi
chmod u+x testfile.sh

---x------  1 adem     adem             27 des.  26 15:54 testfile.sh
1.KARAKTER- D ISE DIRECOTRY, - ISE FILE, L ISE DE SYMBOLINK LINK DEMEKTI
234. KARAKTERLER, --X(- DEMEK YETKI YOK DEMEKTIR, X I GORDGUMZE GORE EXECUTABLE Y ETKISI VAR, AMA READ-WRITE YETKILERI OWNER ICIN YANI DOSYA HANGI KULLLANICI UZERINDE OLUSTURULDU ISE SAHIBI ODUR!!!)
567.KARAKTERLER OWNER IN DA AIT OLDUGU GRUP ICINDEKI KULLANICILARA AIT YETKILER ICINDIR(---) HICBIR YETKI VERILMEMIS
8910.KARAKTERLER ISE OTHER YANI NE OWNER, NE DE GROUP ICINDE OLMAYAN KULLANICILAR ICINDIR(---)  

user(owner-adem) dosya sahibi kullanicisina +read-write yetkilerini ekliyor
adem@adem:~$ chmod u+rw testfile.sh
-rwx------  1 adem     adem             27 des.  26 15:54 testfile.sh
adem@adem:~$ chmod u-x testfile.sh
-rw-------  1 adem     adem             27 des.  26 15:54 testfile.sh

adem grubuna ait kullanicilar icin read yetkisini de ekliyoruz
chmod g+r testfile.sh
-rw-r-----  1 adem     adem             27 des.  26 15:54 testfile.sh

Other kullanici(yani ne user(owner-adem) ne de group kullanicilarindan degil ise)
adem@adem:~$ chmod o+r testfile.sh

-rw-r--r--  1 adem     adem             27 des.  26 15:54 testfile.sh

- ilk karakter(- file, d directory, l Symbollink)
rw- (234.karakterler user(owner) adem in dosya uzerijndeki yetkileridir read,write yetkisi var ama executablle yetkisi yok)
r--(567.karakterler ise adem group unda bulunan kullanicilarin dosya uzerindeki yetkileridir, r:read, -- write ve executable yetkileri yok)
r--(8910. karakterler ise user(owne-adem) ve group kullanicilari haricnde kalan other kullanicilar in dosya uzerindeki yetkilerdir!!!!)

HEM USER, HEM GROUP HEM DE OTHER HEPSINE BIRDEN YETKI EKLEMEK ISTERSEK

adem@adem:~$ chmod a+x testfile.sh
a(all=>user(owner), group, other)
-rwxr-xr-x  1 adem     adem             27 des.  26 15:54 testfile.sh

TUM KULLANICILARIN-HERKESIN-ALL YALNIZCA CALISTIRMA YETKISI OLSUN ISTERSEK
adem@adem:~$ chmod a=x testfolder(a=x denildiginde, a-all-tum kullanicilara x-executable yapar, ve diger yetkileri de kaldirir)
d--x--x--x  3 adem     adem           4096 des.  26 17:17 testfolder



PEKI AYNI ANDA HEM BIR YETKI YI CIKARIRKEN BASKA BIR YETKIYI EKLEYEBILIRIZ
              user     group 
-rwxr-xr-x  1 adem     adem             27 des.  26 15:54 testfile.sh

user(owner) kullanicisina read ve write yetkilerini ver onun disindaki yetkileri kaldir demis oluyoruz =(esittir) ile yapinca!!!
adem@adem:~$ chmod u=rw testfile.sh

-rw-r-xr-x  1 adem     adem             27 des.  26 15:54 testfile.sh

YETKI TANIMLAMANIN RAKAMLARLA KISA YOLDAN YAPILMASI

r:4(READ)  
w:2 (WRITE)
x:1(EXECUTE)
 sayilarin a karsilik geliyorlar ve biz yetkileri tanimlamak icin bu sayilarin toplamlarini kullanabiliyoruz

mkdir testfolder

drwxrwxr-x  2 adem     adem           4096 des.  26 16:51 testfolder

adem@adem:~$ chmod 000 testfolder/
0 DEMEK, YETKI  YOK DEMEKTIR!

TUM YETKILERI SIFIRLIYORUZ
1.0 USER(OWNER)
2.0 GROUP
3.0 OTHERS 
A AIT YETKILERI TEMSIL EDER!!!!

USER,GROUP VE OTHER HEPSI ICINDE YETKILER KALDIRILSIN DENMIS OLUYOR

d---------  2 adem     adem           4096 des.  26 16:51 testfolder

SADECE USER(OWNER) ICIN READ YETKISI VERECEK OLURSAK
adem@adem:~$ chmod 400 testfolder
dr--------  2 adem     adem           4096 des.  26 16:51 testfolder

SADECE USER(OWNER) ICIN HEM READ, HEM WRITE YETKISI VERECEK OLURSAK

adem@adem:~$ chmod 600 testfolder
drw-------  2 adem     adem           4096 des.  26 16:51 testfolder

USER(OWNER) KULLANICISINA SADECE EXECUTE YETKISI,VE GROUP KULLANICILARINA VE OTHER KULLANICILARA DA TUM YETKILERI VERMEK ISTERSEK!

chmod 177 testfolder
d--xrwxrwx  2 adem     adem           4096 des.  26 16:51 testfolder

RAKAMLARLA KULLANICILARDAN YETKI CIKARMA NASIL YAPILIR
adem@adem:~$ chmod -033 testfolder
033-
0-USER(OWNER) KULLANICISINDA HICBIRSEY CIKARMA, HICBIR DEGISIKLIK YAPMA
3-GROUP KULLANICILARINDAN 3-(2(WRITE)+1(EXECUTE)) YETKILERINI CIKART
3-OTHER KULLANICILARINDAN 3-(2(WRITE)+1(EXECUTE)) YETKILERINI CIKART

d--xr--r--  2 adem     adem           4096 des.  26 16:51 testfolder

RAKAMLARLA VAR OLAN  YETKILERE YETKI EKLEMEK ISTERSEK DE 
USER(OWNER) KULLANICISINA WRITE, GROUP VE OTHER KULLANICILARINA DA EXECUTABLE EKLEYECEK OLURSAK 

adem@adem:~$ chmod +211 testfolder

d-wxr-xr-x  2 adem     adem           4096 des.  26 16:51 testfolder


CHMOD 777 testfolder NEDIR?
777
7:USER(OWNER) A READ(4)+WRITE(2)+EXECUTE(1) YETKILERI VERILIYOR
7:GROUP READ(4)+WRITE(2)+EXECUTE(1) YETKILERI VERILIYOR
7:OTHER READ(4)+WRITE(2)+EXECUTE(1) YETKILERI VERILIYOR

Bir betik dosyasi icin ornegin, yani .sh dosasyi icin tum kullanici type larina tumn yetkiler veriliyor.
.sh dosyasi demek execute edilecek dosya demektir

Bu sekilde bizim execute edecegjmiz bir dosyaya gidip de tum group ve other kullanicilarina da tum yetkileri vermeye gerek yok onun yerine sadece user-owner kullanicisina tum yetkileri versek yeterlidir

CHMOD 700
 testfolder 

YETKILERIN ALT DIZINLERDE GECERLI OLACAK SEKILDE DEGISTIRMEK
ONEMLI!!!

testfolder klasoru icindeki tum dosya ve klasorler ve o klasoerlerin de alt klasorlerini listeleyecek olursak eger

adem@adem:~/testfolder$ sudo ls -lR
.:
total 8
-rw-rw-r-- 1 adem adem   17 des.  26 17:17 subfile.txt
drwxrwxr-x 2 adem adem 4096 des.  26 17:19 subfolder

./subfolder:
total 4
-rw-rw-r-- 1 adem adem 32 des.  26 17:19 subfile2.txt
adem@adem:~/testfolder$ 

testfolder klasorunun yetkilerine de bakacak olursak eger: 

d-wxr-xr-x  3 adem     adem           4096 des.  26 17:17 testfolder

testfolder klasoru ve onun altindaki tum dosya ve klasorler icin gecerli olmasini istedgimz, tum yetkileri kaldirmak istiyrouz!!!!
-R(recursive) option unu R(buyuk R ) kullanmaliyiz!!!!!


adem@adem:~$ sudo chmod -R 000 testfolder


ASAGIDA GORECEGMIZ UZERE, HEM testfolder klasorunun hem de bu klasor altindaki tum dosya ve klasorlerin yetkilerini sifirlanmasini saglayacaktir -R(RECURSIVE) option i kullanildigi icin!!!!!!!!!!!!!!!!!1

adem@adem:~$ ls -l

d---------  3 adem     adem           4096 des.  26 17:17 testfolder

adem@adem:~$ ls -lR ~/testfolder
ls: cannot open directory '/home/adem/testfolder': Permission denied
adem@adem:~$ sudo ls -lR ~/testfolder
/home/adem/testfolder:
total 8
---------- 1 adem adem   17 des.  26 17:17 subfile.txt
d--------- 2 adem adem 4096 des.  26 17:19 subfolder

/home/adem/testfolder/subfolder:
total 4
---------- 1 adem adem 32 des.  26 17:19 subfile2.txt
adem@adem:~$ 


testfolder klasoru ve altindaki tum dosya ve klasorlerin hepsine tum yetkileri vermek istersek eger: 
adem@adem:~$ sudo chmod -R 777 testfolder

adem@adem:~$ sudo chmod -R 777 testfolder

adem@adem:~$ ls -l
drwxrwxrwx  3 adem     adem           4096 des.  26 17:17 testfolder


adem@adem:~$ sudo ls -lR ~/testfolder
/home/adem/testfolder:
total 8
-rwxrwxrwx 1 adem adem   17 des.  26 17:17 subfile.txt
drwxrwxrwx 2 adem adem 4096 des.  26 17:19 subfolder

/home/adem/testfolder/subfolder:
total 4
-rwxrwxrwx 1 adem adem 32 des.  26 17:19 subfile2.txt
adem@adem:~$ 


ERISIM YETKILERININ DOSYALAR VE DIZINLER UZERINDEKI GERCEK ETKISI!!!

-rwxr-xr-x  1 adem     adem             27 des.  26 15:54 testfile.sh

adem user-owner kullanicisi rwx(read write execute)  yetkilerine sahptir
adem ismindeki group kullanicilari testfile.sh dosyasi uzerinde r-x(read-executable) yetksine sahptir
other kullanicilar ise, r-x(read-execute)  yetkilerine sahiptir

Bizim zaten adem user-owner kullanicimz tum yetkilere sahiptir
Biz farkli bir kullanici adem grubunda dahil ederek, adem ismindeki grouba dahil olan kullanici olarak islemlerimizi gerceklestirmek istiyoruz
adem54 isimli kullaniciyi once adem isimli gruba dahil edelim

adem@adem:~$ sudo gpasswd -a adem54 adem
Adding user adem54 to group adem
adem@adem:~$ 

adem54 kullanicis i uzerinden grup yetkierini test edebiliyor olacagiz!!!

-rwxr-xr--  1 adem adem       30 des.  26 23:06 testfile.sh

adem@adem-ThinkPad-13-2nd-Gen:~$ sudo gpasswd -a ademtest adem
Adding user ademtest to group adem
adem@adem-ThinkPad-13-2nd-Gen:~$ groups ademtest
ademtest : ademtest adem


              
-rwxr-xr--  1 adem(user-owner) adem(group-name)       30 des.  26 23:06 testfile.sh

- file oldugunu gosterir(d-olsa idi directory, l olsa idi systemlink olurdu)
rwx (user-owner in read-write-execute yetkisi oldugunu gosterir)
r-x (group kullanicilarinin dosya uzerinde read, execute yetkisi var ama write yetkisi yok)
r--(other kullanicilarinin sadece read yetkisi var)

O zaman, biz adem grubunda olan bir kullanci, olan ademtest kullanicisinin yetkisini test edecegiz!!!!!
ademtest kullanicisi adem grubunun kullanicisidr, ve r-x yani read, ve execute yetkilerine sahpitir

ademtest kullanicisina gecis yapiyoruz oncelikle asagidaki gibi :
adem@adem-ThinkPad-13-2nd-Gen:~$ su - ademtest
Password: 
ademtest@adem-ThinkPad-13-2nd-Gen:~$ 
ademtest@adem-ThinkPad-13-2nd-Gen:~$ whoami(current user i gormek icin kullaniriz)
ademtest

Once grup kullanicilarin i sadece okuma yetkisi olacak sekilde degistirelim, yetkilerini

adem@adem-ThinkPad-13-2nd-Gen:~$ chmod 744 testfile.sh
744
7(user-owner- read(4)write(2)execute(1))
4(group- read(4))
4(other- read(4))
adem@adem-ThinkPad-13-2nd-Gen:~$ ls -l
YADA
chmod g=r testfile.sh (group kullanicilarina read yetkisi ver digerlerini de kaldir demektir)
-rwxr--r--  1 adem adem       30 des.  26 23:06 testfile.sh
adem grubuna dahil olan kullanicilar sadece read-okuma yapabilirler
Yani ademtest kujllanicisi adem grubuna dahil olan bir kullanici olarak

ademtest@adem-ThinkPad-13-2nd-Gen:~$ groups ademtest
ademtest : ademtest adem
ademtest@adem-ThinkPad-13-2nd-Gen:~$ 

ademtest kullanicisina switch olalim m

su - ademtest
Ardindan da adem kullanicsinin altinda bulunan, testfile.sh dosyasinin uzerinde degisklik yapmaya calisacagiz, ademtest kullanicisi ile!!!!

ademtest@adem-ThinkPad-13-2nd-Gen:/home/adem$ nano testfile.sh
Icinde degisiklik yapip da ctrl-x ile kaydetmeye calistigimda permission denied hatasi aliyoruz!!!!!!!!!!!!
Sonra tekrar adem kullancisina gecis yaparsak 
su - adem

Ve chmod g=+w testfile.sh
-rwxrw-r--  1 adem adem       30 des.  26 23:06 testfile.sh
ve ardindna tekrardan ademtest e gecis yap

su - ademtest
Sonra sudo nano /home/adem/testfile.sh 
icine girip degisiklik yapip ctrl-x yapinca sorunsuz bir sekilde kaydolmus oluyor!!!!


cat-head-tail ile read islemini yapariz
sudo nano ile write islemin yapariz

adem kullanisinda iken sorun  yok cunku onun yetkisinde sorn yok
adem@adem-ThinkPad-13-2nd-Gen:~$ ./testfile.sh
Hello,  this is my testfile.sh

Ama ademtest kullanisinin execute  yetkisi olmadigindan persmission denied hatasi aliriz asagida!!!!!
ademtest@adem-ThinkPad-13-2nd-Gen:/home/adem$ ./testfile.sh
-bash: ./testfile.sh: Permission denied
ademtest@adem-ThinkPad-13-2nd-Gen:/home/adem$ 

GORULDUGU UZERE BIZ KULLANICILAR ARASINDA GECIS YAPABILIYORUZ VE BIR KULLANICIDAN DIGERINE GECTIGIMZDE, O KULLANICIDA IKEN DIGER KULLANICILARINI DOSYALARINA DA HOME/ ALTINDA KULLANICILARIN ISIMLERINNIN OLDUGU KLASOR-LER UZERINDEN ERISEBILIRIZ...VE DE AYNI GROUP TA OLAN, FARKLI KULLANICILARIN YETKILERINI DE BU SEKIDLE TEST ETME FIRSATI BULMUS OLURUZ



read: cat-head-tail
write-sudo nano
execute: ./testfile.sh  seklinde execute edilir..

COOK ONEMLI BIR BILGI!!!!
EGER BIR DOSYA DA READ YETKIMZI YUOK ISE O DOSYA DA EXECUTE YETKIMZ OLSA BILE, O DOSYAYI CALISTIRAMAYIZ!!!!BUNU UNUTMAYALIM!!!!
DOSYA ICERIGINI GOREMIYORSAK ICINDEKI VERILERE ERISEMEYIZ, YANI READ  YETKISI YOK ISE EXECUTE YETKISI OLSA BILE O DSOSYAYI CALISTIRAMAYIZ

adem@adem-ThinkPad-13-2nd-Gen:~$ chmod 714 testfile.sh
adem@adem-ThinkPad-13-2nd-Gen:~$ su - ademtest
Password: 
ademtest@adem-ThinkPad-13-2nd-Gen:~$ cd /home/adem
ademtest@adem-ThinkPad-13-2nd-Gen:/home/adem$ ls -l

-rwx--xr--  1 adem adem       38 des.  26 23:28 testfile.sh
ademtest@adem-ThinkPad-13-2nd-Gen:/home/adem$ ./testfile.sh
bash: ./testfile.sh: Permission denied 
DOLSYISI ILE TEK BASINA EXECUTE YETKISI CALISTIRMAK ICIN YETERLI OLMAZ, MUTLAKA READ YETKISI DE OLMALIDIR EXECUTE EDILEBILMESI ICIN

ERISIM YETKISININ KLASORLER UZERINDEKI ETKISI!!!

KLASOR DE READ YETKISI VAR ISE:
KLASOR ALTINDAKI DOSYA-KLASORLERIN LISTELENEBILMESI ICIN-READ  YETKISI GEREKIR
KLasor altindaki dosyalari listeyebilmemiz icin o klasor uzerinde read-okuma yetkisi olmak zorundadir

KLASOR DE WRITE YETKISI VAR ISE: 
Dizin icinde; yeni dosya, klasor olusturma ve silme, yeniden isimlendirme islemlerini yapabiliyoruz

KLASOR DE EXECUTE YETKISI VAR ISE DE:
Dizine gecis yapabiliyoruz ve icerisindeki dosya ve klasorlere ayni sekilde, erisebiliyoruz

KLASOR VE TUM ALTKLASORLERE AYNI YETKILERIN UYGULANMASI ICIN -R(recursive) opotion i kullanilmalidir
testfolder klasoru ve tum alt dosya ve klasorlere tum y etkileri veririiz once
-R(recursive) option unun kullanilmasi gerekrir
adem@adem-ThinkPad-13-2nd-Gen:~$ chmod -R 777 testfolder
adem@adem-ThinkPad-13-2nd-Gen:~$ ls -lR testfolder
testfolder:
total 8
drwxrwxrwx 2 adem adem 4096 des.  27 00:08 subfolder
-rwxrwxrwx 1 adem adem   35 des.  27 00:09 test1.txt

testfolder/subfolder:
total 4
-rwxrwxrwx 1 adem adem 50 des.  27 00:09 test2.sh
adem@adem-ThinkPad-13-2nd-Gen:~$ 

ls -ld testfolder (-ld sadece kendisini, directory olarak bize goster demektir)
adem@adem-ThinkPad-13-2nd-Gen:~$ ls -ld testfolder
drwxrwxrwx 3 adem adem 4096 des.  27 00:09 testfolder

testfolder klasorunun kendisine, sadece read okuma izni verecegiz, kim icin adem grubunundaki kullanicilar icin:

drwxrwxrwx 3 adem adem 4096 des.  27 00:09 testfolder
adem@adem-ThinkPad-13-2nd-Gen:~$ chmod g=r testfolder
adem@adem-ThinkPad-13-2nd-Gen:~$ ls -ld testfolder
drwxr--rwx 3 adem adem 4096 des.  27 00:09 testfolder
d-directory
rwx:adem(owner-read-write-execute yetkilerine sahip)
r--:group(read yetkisine sahip)
rwx:other(read-write-execute yetkilerine sahip)

adem kullanicisi owner oldugu icin ve read-write-execute yetkileri oldugu icin, cd ile testfolder in alt tindaki klasorlere gecis yapaibliyor
adem@adem-ThinkPad-13-2nd-Gen:~$ cd testfolder
adem@adem-ThinkPad-13-2nd-Gen:~/testfolder$ cd ..

Ancak ademtest kullanicisi adem grobunun bir kullanicisidr ve sadece read yetkisi vardir testfolder icin, ama execute yetkisi olmadigi icin testfolder dan alt klasorlere gecis yapamiyor..Alt klosorler e gecis execute yetkisi oldugunda yapilabiliyor!!!
adem@adem-ThinkPad-13-2nd-Gen:~$ su - ademtest
Password: 
ademtest@adem-ThinkPad-13-2nd-Gen:~$ cd /home/adem/testfolder
-bash: cd: /home/adem/testfolder: Permission denied
ademtest@adem-ThinkPad-13-2nd-Gen:~$ 

TEKRARDAN ademtest bir grup a dahil olan bir kullanicidir, ve group yetksiine read in yaninda execute u de vererek b ir daha deneyelim!!

adem@adem-ThinkPad-13-2nd-Gen:~$ chmod 757 testfolder; chmod g=rx testfolder; chmod g+x testfolder;
adem@adem-ThinkPad-13-2nd-Gen:~$ ls -ld testfolder
drwxr-xrwx 3 adem adem 4096 des.  27 00:09 testfolder

ARTIK ademtest kullanicisi uzerinden, cd ile alt klasoerlere gecis yapabiliyoruz CUNKU ademtest group kullanicisinin, execute yetkisi vardir artik 
adem@adem-ThinkPad-13-2nd-Gen:~$ su - ademtest
Password: 
ademtest@adem-ThinkPad-13-2nd-Gen:~$ cd /home/adem/testfolder
ademtest@adem-ThinkPad-13-2nd-Gen:/home/adem/testfolder$ 

testfolder in icerigi listelyebilyoruz!!!cunku ademtest grup kullanicisinin read yetkisi de vardir!!!!!
adem@adem-ThinkPad-13-2nd-Gen:~$ su - ademtest
Password: 
ademtest@adem-ThinkPad-13-2nd-Gen:~$ cd /home/adem/testfolder
ademtest@adem-ThinkPad-13-2nd-Gen:/home/adem/testfolder$ 

CUNKU BIZIM, NEWFOLDER KLASORU UZERINDE, WRITE YETKIMZ YOK!!! YENI KLASOR,YENI DOSYA OLUSUTRMA, SILME, DOSYA ISMI DEGISTIRME, KOPYALAMA VS YAPAMAYIZ WRITE YETKISI OLMADAN!!!
ademtest@adem-ThinkPad-13-2nd-Gen:/home/adem/testfolder$ mkdir newfolder
mkdir: cannot create directory ‘newfolder’: Permission denied
ademtest@adem-ThinkPad-13-2nd-Gen:/home/adem/testfolder$ touch newfile.txt
touch: cannot touch 'newfile.txt': Permission denied

TEKRARDAN adem kullanicisina gecip, TESTFOLDER A SADECE READ YETKISI VERELIM!!!

adem@adem-ThinkPad-13-2nd-Gen:~$ chmod 747 testfolder
adem@adem-ThinkPad-13-2nd-Gen:~$ ls -ld testfolder
drwxr--rwx 3 adem adem 4096 des.  27 00:09 testfolder
adem@adem-ThinkPad-13-2nd-Gen:~$ 

adem@adem-ThinkPad-13-2nd-Gen:~$ su - ademtest
Password: 
ademtest@adem-ThinkPad-13-2nd-Gen:~$ ls /home/adem/testfolder
ls: cannot access '/home/adem/testfolder/subfolder': Permission denied
ls: cannot access '/home/adem/testfolder/test1.txt': Permission denied
subfolder  test1.txt
ademtest@adem-ThinkPad-13-2nd-Gen:~$ 
NEDEN, READ OKUMA YETKIMZ OLDUGU HALDE ls ILE BIZ ADEMTEST GROUP KULLANICISI ILE ADEM KULLNICISININ ALTINDAKI, TESTFOLDER I N ALT DOSYA VE KLASORLERINI LISTELEYEMEDIK VE PERMISSION DENIED HAATASI ALDIK
COOOK ONEMLI---CUNKU:

BU BIRAZ LS KOMUTUNUN YAPISI ILE ILGILIDIR!! 
ademtest@adem-ThinkPad-13-2nd-Gen:/home/adem/testfolder$ alias ls
alias ls='ls --color=auto'(ls ile calistirilan dizin icinde renklendirmeyi sagliyor..VE ONDAN SONRA GIDIP NORMAL LS KOMUTUNU CALISTIRIYOR,ONCE, BU ALIAS KOMUTU CALISTIRIR SONRA, ANA, /usr/bin/ls komutunu calistirir!!!!!!!!!!!)
LS KOMUTU CALISTIRILDIGINDA, 'ls --color=auto' execute ediliyor..DOLAYISI ILE LS KOMUTUNUN CALISABILMESI ICIN ADEMTEST KULLANICSINDA READ YETKISI OLMASI YETERLI DEGIL AYNI ZAMANDA, EXECUTE YETKISIDE OLMALIDIR!!!COOOOK ONEMLI!!!
ls --color=auto  burda --color=auto argumani execute edilmeye calisiliyor!!!!

BUNU ANLAMAK ISTERSEK SURDAN DA ANLAYABLIIRZ!!
ls komutunu yalin sekilde calistirirsak direk dosyasindan o zaman sorun yasanmiyor cunku, direk dosyasindan csalisitirilinca herhangi bir execute a gerek kalammis oluyor :

ademtest@adem-ThinkPad-13-2nd-Gen:~$ whereis ls
ls: /usr/bin/ls /usr/share/man/man1/ls.1.gz
ademtest@adem-ThinkPad-13-2nd-Gen:~$ /usr/bin/ls /home/adem/testfolder
subfolder  test1.txt
ademtest@adem-ThinkPad-13-2nd-Gen:~$ 

VEYA DIREK COMMAND ILE DE CALISTIRABILIRIZ LS KOMUTUNU:
ademtest@adem-ThinkPad-13-2nd-Gen:~$ command ls /home/adem/testfolder
subfolder  test1.txt
ademtest@adem-ThinkPad-13-2nd-Gen:~$ 

EGER GIRDGIMIZ KOMUTUN TAKMA ISMININ ONCELIK OLARAK CALISTIRIMA OZELLIGINI KAYBETMESINI ISTERSEK!!!
command ls
COMMAND KOMUTU ILE YAZINCA, KABUK ALIAS ISMI GORMEZDEN GELECEK VE ONCE YERLESIK KOMUTLARA BAKACAK, DAHA SONRA DA LS ISMININ GECTIGI PATH YOLLARINA BAKARAK, /usr/bin/ls dosyamizi buludugu zaman bu dosyamizi calistirabiliyor
Yani command komutu, ls komutunu orjinal hali ile calistiriyor 

DEMEKKI BIZ HERSEYDEN ONCE CALISTIRMAYA CALISTIGIMZ KOMUT ARKADA NEYI CALISITIYOR BUNU DA KIMI ZAMAN KONTROL ETMEMIZ GEREKEN DURUMLAR OLUSABILIYOR AYNI LS KOMUTUNDA OLDUGU GIBI O ZAMAN BIZ 

ALIAS LS
COMMAND LS
WHEREIS LS

LINUX - DE CALISIRKEN BU MANTIGI COK IYI BILMELIYIZ!!!!!!

GIBI KOMUTLARI KULLANARAK, KULLANDIGMIZ KOMUT ARKADA NEYI CALISTIRIYOR ONU GORMELIYIZ VE ALDIGMIZ SONUCUN NEDEN OLDUGUNUN TAM OLARK, ARKA PLANINDA NELER DONDUGUNU IYICE OGRENIP ANLAAMLIYIZ

SIMDI TEKRARDAN READ-WRITE YETKISI VERELIM TESTFOLDER A VE ADEM54 GROUP KULLANCISI ILE ADEM KULLANICIS ALTINDAKI TESTFOLDER UZERINDEKI YETKILERINI TEST EDELIM!

adem@adem:~$ chmod 767 testfolder
adem@adem:~$ ls -ld testfolder
drwxrw-rwx 3 adem adem 4096 des.  26 17:17 testfolder
adem@adem:~$ su - adem54
Password: 
adem54@adem:~$ cd /home/adem/testfolder
-bash: cd: /home/adem/testfolder: Permission denied
adem54@adem:~$ ls /home/adem/testfolder
ls: cannot access '/home/adem/testfolder/subfolder': Permission denied
ls: cannot access '/home/adem/testfolder/subfile.txt': Permission denied
subfile.txt  subfolder

BURASININI SEBEBINI YUKARDA ACIKLAMISTIK, EXECUTE YETKISI OLMADIGINDAN DOLAYI VE LS KOMUTUN ONCE ALIAS KOMUTUNU CALISTIRIYOR DU ARKADA VE alias komutu execute edilmesi gerekiyor du once(ls --color=auto)
adem54@adem:~$ alias ls
alias ls='ls --color=auto'
adem54@adem:~$ 

adem54@adem:~$ command ls /home/adem/testfolder
subfile.txt  subfolder
adem54@adem:~$ 

TESTFOLDER ALTINDAKI SUBFILE.TXT DOSYASINI OKUYAMIYORUZ, TESTFOLDER UZERINDE READ-WRITE YETKIMIZ OLSA BILE
READ-TESTFOLLDER ALTINDAKI DOSYA VE KLASORLERI LISTELEMEYI SAGLAR
WRITE-TESTFOLDER ALTINDAKI DOSYALAR I OKUMA,YAZMA, RENAME YAPMA, COPYALAMA,CREATE FILE,CREATE FOLDER, DELETE FOLDER,DELETE FILE... 
EXECUTE-CD ILE TESTFOLDER DAN ALT DOSYA VE KLASORLERE GECISI SAGLAR

PEKI BURDA NEDEN HALA ALT DOSYA YI OKUYAMIYORUZ CUNKU EXECUTE YETKIMZ HALA YOK, YANI TEK BASINA READ-WRITE YETKIMZ OLMASI ILE ASLNDA WRITE YETKISI ILE  YAPILABILIR DEDGIMZ TUM ISLEMLERI YINE EXECUTE YETKISI OLMADAN YAPAMIYORUZ, EXECUTE YETKISI OLDUKTAN SONRA BIZ O ISLEMLERI WRITE YETKISI ILE BERABER, YAPABILIYROUZ!!!!!

adem54@adem:~$ cat /home/adem/testfolder/subfile.txt
cat: /home/adem/testfolder/subfile.txt: Permission denied
adem54@adem:~$ 

SIMDI TUM YETKILERI VERELIM TESTFOLDER A ONDAN SONRA BAKALIM  BIRDE 

adem@adem:~$ chmod g=rwx testfolder
adem@adem:~$ ls -ld testfolder
drwxrwxrwx 3 adem adem 4096 des.  26 17:17 testfolder
adem@adem:~$ su - adem54
Password: 
adem54@adem:~$ cat /home/adem/testfolder/subfile.txt
this is the file
adem54@adem:~$ 

TESTFOLDER KLASORUNUN ALTINDAKI TUM DOSYA VE KLASORLERDE TUM YETKILER OLMASINA RAGMEN, TESTFOLDER KLASORUNDE SADECE READ,WRITE YETKISI OLDUGU ZAMAN, EXECUTE YETKISI OLMADIGINDAN DOLAYI, BIZ TESTFOLDER ALTINDAKI SUBFILE.TXT DOSYASINI ADEM54 GROUP KULLANICISINA GECIS YAPIP DA OKUMAK ISTEDGIMIZ ZAMAN YETKI HATA SI ALIYORUZ-PERMISSION DENIED..BUNU ANLAYALIM!!!!! 


adem54@adem:~$ su - adem
Password: 
adem@adem:~$ chmod g=rw testfolder
adem@adem:~$ ls -ld testfolder
drwxrw-rwx 3 adem adem 4096 des.  26 17:17 testfolder
adem@adem:~$ ls -lR testfolder
testfolder:
total 8
-rwxrwxrwx 1 adem adem   17 des.  26 17:17 subfile.txt
drwxrwxrwx 2 adem adem 4096 des.  26 17:19 subfolder

testfolder/subfolder:
total 4
-rwxrwxrwx 1 adem adem 32 des.  26 17:19 subfile2.txt
adem@adem:~$ su - adem54
Password: 
adem54@adem:~$ cat /home/adem/testfolder/subfile.txt
cat: /home/adem/testfolder/subfile.txt: Permission denied
adem54@adem:~$ 

GROUP KULLANICILARINA RWX YETKILERININ TAMAMINI VERINCE, ARTIK YENI ADEM54 GROPU KULLANICISI ILE TESTFOLDER ALTINDA YENI DOSYA OLUSTURMA ISLEMI  YAPABILDIK
adem54@adem:~$ su - adem
Password: 
adem@adem:~$ chmod g=rwx testfolder; chmod 777 testfolder;
adem@adem:~$ ls -ld testfolder
drwxrwxrwx 3 adem adem 4096 des.  26 17:17 testfolder
adem@adem:~$ su - adem54
Password: 
adem54@adem:~$ cd /home/adem/testfolder
adem54@adem:/home/adem/testfolder$ echo "new textfile1" > newtextfile1.txt
adem54@adem:/home/adem/testfolder$ ls 
newtextfile1.txt  subfile.txt  subfolder
adem54@adem:/home/adem/testfolder$ 

YALNIZCA WRITE-EXECUTE YETKISI ILE GROUP KULANIICISI NE YAPABLIR ONA BAKALIM

adem54@adem:/home/adem/testfolder$ su - adem
Password: 
adem@adem:~$ chmod 737 testfolder; chmod g=wx testfolder;
adem@adem:~$ ls -ld testfolder
drwx-wxrwx 3 adem adem 4096 des.  27 09:27 testfolder
adem@adem:~$ 

READ YETKISI OLMADIGI ICIN DIZIN ICERISINI LISTELEYEMEDIK!!!!

adem@adem:~$ su - adem54
Password: 
adem54@adem:~$ ls /home/adem/testfolder
ls: cannot open directory '/home/adem/testfolder': Permission denied
adem54@adem:~$ 
adem54@adem:~$ command ls /home/adem/testfolder
ls: cannot open directory '/home/adem/testfolder': Permission denied
adem54@adem:~$ 

TESTFOLDER ALTINDAKI SUBFILE.TXT DOSYASINI CAT ILE OKUYABILIYORUZ, EXECUTE YETKISI OLDUGUNDAN DOLAYI, BUNU YAPABILIYORUZ
adem54@adem:~$ cat /home/adem/testfolder/subfile.txt
this is the file
adem54@adem:~$ 
EXECUTE YETKISI OLDUGUNDAN DOLAYI,
- ALT DOSYA VE KLASORLERE CD ILE GECIS YAPABILIYORUZ
- CAT ILE KLASOR ALTINDAKI HERHANGI BIR DOSYAYI OKUYABILIYORUZ
-ECHO "DENEME" >> SUBFILE.TXT , KLASOR UN ALT DOSYASI ICERIGINE VERI EKLEYEBILIYORUZ!!!!!

WRITE-EXECUTE YETKISI OLDUGNDAN DOLAYI,testfolder klasoru altindaki dosya icerisine girip degistirme yapabiliryouz, ve dosyayi silme de yapabiliyoruz
adem54@adem:/home/adem/testfolder$ nano newtextfile1.txt
adem54@adem:/home/adem/testfolder$ rm newtextfile1.txt

EXECUTE YETKIMIZ OLDUGU ICIN, ALT KLASORE GECIS YAPABILIYROUZ AMA READ YETKMIZ OLMADIGI ICIN LISTELEYEMEDIK
adem54@adem:~$ cd /home/adem/testfolder
adem54@adem:/home/adem/testfolder$ ls
ls: cannot open directory '.': Permission denied

KLASOR UZERINDE EGER SADECE EXECUTE YETKISI OLDUGU ZAMAN DA
NOT:TESTFOLDER UZERINDE EXECUTE YETKISI VAR ISE, O KLASOR ALTINDAKI DOSYALARI CAT ILE SADECE EXECUTE YETKISI ILE OKUYABILIRIZ
SADECE EXECUTE YETKISI ILE CD ILE BIR ALT KLASORE GECIS YAPABILIRIZ!!!!
echo  ILE OKUYABILDGMIZ DOSYA NIN UZERINE , VERI EKLERKEN DE SORUN YASAMIYORUZ
AMA RM ILE SILME ISLEMI YAPAMIYORUZ, LS ILE DIZIN IN ALTINDKAI DOSYA VE KLASORLERI LISTELEYEMIYORUZ


adem@adem:~$ chmod g=x testfolder; chmod 717 testfolder;
adem@adem:~$ ls -ld testfolder;
drwx--xrwx 3 adem adem 4096 des.  27 09:35 testfolder
adem@adem:~$ 

adem54@adem:~$ cd /home/adem/testfolder
adem54@adem:/home/adem/testfolder$ echo "and I added this " >> subfile.txt
adem54@adem:/home/adem/testfolder$ cat subfile.txt
this is the file
and I added this 
adem54@adem:/home/adem/testfolder$ 

SIMDI BURAYA KADAR BIZ TESTFOLDER ALTINDAKI TUM DOSYA VE KLASORLER ICIN USER-GROUP-OTHER KULLANICILARI ICIN READ-WRITE-EXECUTE YETKILERININ TAMAMINI VERDIGMIZ ICIN, SADECE TESTFOLDER IN YETKILERINI KISITLAYARAK TESTLER YAPMISTIK
AMA EGER BIZ TESTFOLDER IN ALTINDAKI DOSYA VE KLASORLERIN DE YETKILERINI KISITLAR ISEK O ZAMAN ZATEN, TESTFOLDER  TUM Y ETKILERE SAHIP OLSA BILE, UZERINDE READ-(CAT),WRITE, EXECUTE ISLEMLERI  YAPILACAK OLAN SUBFOLDER VEYA SUBFILE UZERNDE KULLANICLARIN YETKILERINE GORE ISLEMLER YAPILABILECEKTIR!!!!

ESASEN KLASORLER YETKILERI, 
KLASORLER E GECIS,
 KLASOR ICERIGINI LISTELEME VE 
 KLASOR ICERIISNDE DUZENLEME YAPMA KAPSAMINDA GECERLI OLAN YETKILERDIR!!!!

DOSYA YETKILERI ISE DOSYALARI CALISTIRMA, VE ICERISINDE DUZENLEME YAPMA KAPSAMNDAKI YETKILERDIR
DOLAYISI ILE BIR KLASOR ALTINDA BULUNAN ALT KLASOR VE DOSYALR UZERNDE ISLEM  YAPACAKSAK, HEM KLASOR DUZEYINDE HEM DE ONUN ALTINDA BULUNAN KLASORLER VE DOSYALR DUZEYINDE YETKILERIN TAM OLMASI SARTTIR!

!!!!BURAYI TAM OLARAK ANLAYALIM!!!!!!
YANI BIZ ORNEGIN TESTFOLDER KLASORU ALTINDAKI BIR DOSYAYI CAT ILE OKUMAK ICIN TESTFOLDER KLASORUNE EXECUTE YETKISI OLMALIDIR DEDIK AMA BU NE ZAMAN GECERLI, BURDA TESTFOLDER KLASORU ALTINDAKI CAT ILE OKUNACAK DOSYA ICIN DE READ-WRITE-EXECUTE YETKILERININ TAMAMI VERILDIGNI VARSAYARAK BUNU KONUSUYORUZ!!!!! YANI HERSEYDEN ILK ONCE CAT ILE OKUNACAK DOSYA ICIN READ-WRITE-EXECUTE YETKILERI TAM VERILMELIDIR KI ONDAN SONRA BIZ BU DOSYA YI BARINDIRAN KLASOR UZERINDEN BU DOSYAYI OKURKEN DE BU PARENT POZISYONUNDAKI KLASOR E DE EXECUTE YETKISI VERILDIGI TAKDIRDE, CAT ILE TESTFOLDER ALTINDAKI DOSYA OKUNABILIR...BUNU BILELIM VE TAM OLARAK NE YAPILDIGNI ANLAYALIM!!!!


BIR DOSYA ICIN 
READ: O DOSYAYI CAT ILE OKUMA YETKISI 
WRITE: O DOSYA ICERISINE VERI EKLEME, VERI CIKARMA, EDIT YAPMA... 
EXECUTE: O DOSYAYI CALISTIRMA YANI ORNEGIN test.sh dosyasni ./test.sh diyerek calistiriliyor linux de ..

.SH DOSYALARI KISACA
Linux de shell script dosyalari dir .sh uzantili dosyalar
Ve bu dosdyalar icerisine birden fazla bash komutlari yazip , tum komutlari bir kere de .sh dosyasi iceriisnde calistirabiliriz
Bash komutlarini, direk olarak .sh dosyasini execute ederek yani ./test.sh diyerek  calistirabiliriz

Özetle, Linux'taki .sh dosyaları, Linux sisteminde görevleri otomatikleştirmenin ve çeşitli işlemleri gerçekleştirmenin bir yolu olan kabuk komut dosyalarını yazmak için kullanılır. Bir .sh dosyasını çalıştırmak için, onu yürütülebilir hale getirmeniz ve ardından ./ notasyonunu ve ardından betiğin adını kullanarak yürütmeniz gerekir.

!!!SIMDI BURAYA DA COOOK DIKKAT!!!!
!!DOSYA VE KLASOERLERIN IZINLERINI SADECE VE SADECE O DOSYA VE KLASORLERIN USER I YANI OWNER I KIM ISE O DEGISTIREBILIYOR, YANI ORNEGIN /HOME/ADEM/TESTFOLDER  ADEM KULLANICISI ALTINDA BULUNAN TESTFOLDER KLASORU ADEM KULLANICISINA AITTIR YANI ADEM KULLANICISI BU TESTFOLDER IN USER-OWNER IDIR...AMA /HOME/ADEMTEST   ADEMTEST KULLANICISI NA SU - ADEMTEST ILE GECIS YAPILDIGINDA, /HOME/ADEM/TESTFOLDER ADEMTEST KULLANICISINA GECIS YAPILDIGINDA ACILABILIR, VE O ZAMAN ADEMTEST KULLANCISI GIDIP DE /HOME/ADEM/TESTFOLDER UZERINDE BIR YETKI DEGISIKLIGI YAPAMAYACAKTIR BUNU UNUTMAYALIM!!!! BUNU BILMEK COOOOK ONEMLI!!!
!! YANI NETICE OLARAK, BIR DOSYA VE KLASOR UZERINDE KI YETKI DEGISIKLIGIINI ANCAK O DOSYA VE KLASOR UN USER-OWNER I OLAN KULLANICI YAPABILIR!!!!!!BUNU DOGRU ANLAMAK VE BILMEK COOOOOK KRITIK ONEME SAHIPTIR!!!!!!


BUNU TEST EDECEK OLURSAK ASAGIDAKI GIBI:

adem@adem-ThinkPad-13-2nd-Gen:~$ chmod 777 testfolder; chmod g=rwx testfolder;
adem@adem-ThinkPad-13-2nd-Gen:~$ ls -ld testfolder
drwxrwxrwx 3 adem adem 4096 des.  27 00:09 testfolder
adem@adem-ThinkPad-13-2nd-Gen:~$ su - ademtest
Password: 
ademtest@adem-ThinkPad-13-2nd-Gen:~$ chmod g=x /home/adem/testfolder
chmod: changing permissions of '/home/adem/testfolder': Operation not permitted

ademtest@adem-ThinkPad-13-2nd-Gen:~$ chmod o-rwx /home/adem/testfolder
chmod: changing permissions of '/home/adem/testfolder': Operation not permitted
ademtest@adem-ThinkPad-13-2nd-Gen:~$ 

DIKKAT EDERSEK OPERASYONA IZIN VERILMEDI!!!CUNKU  ADEMTEST KULLANICISI TESTFOLDER IN OWNER I DEGILDIR VE ONDAN DOLAYI DA TESTFOLDER UZERINDE YETKI DEGISTIRME IZNI YOKTUR!!
NOT PERMITTED

!! BU SOYLEDIGMIZ ISLEM ICIN YALNIZCA TEK BIR ISTISNA VAR O DA ROOT KULLANICISIDR. ROOT KULLANCISI SISTEM UZERINDEKI TUM DOSYA VE KLASORLER IN YETKILERINI DGEISTIRME YETKISIN E SAHIPTIR!
!!PEKI BU NE DEMEK, YANI  BIZ ADEMTEST KULLANICISI UZERINDEN, EGER ROOT YETKILERINE SUDO UZERINDEN ERISECEK OLURSAM EGER, O ZAMAN ADEM KULLANICISINA AIT OLAN TESTFOLDER KLASORU VE ONUN ALTINDAKI KLASOR VE DOSYA YETKLILERINI DEGISTIRMEM MUMKUN HALE GELECEKTIR!!!

! ademtest kullanicisi uzerinde olusturdugmz newtest.txt dosya izinlerini adem kullanicisi uzerinden sudo kullanarak nasil degistirebiliyoruz!!ASAGIDA BUNUN ORNEGINI GOREBILIRIZ---BU DA COK KRITIKTIR... !  
adem@adem-ThinkPad-13-2nd-Gen:~$ su - ademtest
Password: 
ademtest@adem-ThinkPad-13-2nd-Gen:~$ ls
ademtest@adem-ThinkPad-13-2nd-Gen:~$ echo "This is the newtestfile in ademtest user" >  newtest.txt
ademtest@adem-ThinkPad-13-2nd-Gen:~$ ls
newtest.txt
ademtest@adem-ThinkPad-13-2nd-Gen:~$ ls -l
total 4
-rw-rw-r-- 1 ademtest ademtest 41 des.  28 00:18 newtest.txt
ademtest@adem-ThinkPad-13-2nd-Gen:~$ exit
logout
adem@adem-ThinkPad-13-2nd-Gen:~$ chmod a-rwx /home/ademtest/newtest.txt
chmod: cannot access '/home/ademtest/newtest.txt': Permission denied
adem@adem-ThinkPad-13-2nd-Gen:~$ sudo chmod a-rwx /home/ademtest/newtest.txt
[sudo] password for adem: 
adem@adem-ThinkPad-13-2nd-Gen:~$ ls -l /home/ademtest/newtest.txt
ls: cannot access '/home/ademtest/newtest.txt': Permission denied
adem@adem-ThinkPad-13-2nd-Gen:~$ sudo ls -l /home/ademtest/newtest.txt
---------- 1 ademtest ademtest 41 des.  28 00:18 /home/ademtest/newtest.txt
adem@adem-ThinkPad-13-2nd-Gen:~$ 

! AMA BURDA BIRSEY VAR DIKKAT EDECEGIMZ BIZ AYNI MANTIKTAKI ISLEMI YANI SUDO KULLANARAK ADEMTEST KULLANICISI UZERINDEN, ADEM KULLANICISINA AIT TESTFOLDER YETKILERINI SUDO KULLANARAK DEGISTIREMEDIK!!!! VE ASAGIDAKI GIBI BIR MESAJ GERI BILDIRMI ALDIK BU NEDEN OLDDU  !

ademtest@adem-ThinkPad-13-2nd-Gen:~$ chmod o-rwx /home/adem/testfolder
chmod: changing permissions of '/home/adem/testfolder': Operation not permitted
ademtest@adem-ThinkPad-13-2nd-Gen:~$ sudo chmod o-rwx /home/adem/testfolder
[sudo] password for ademtest: 
ademtest is not in the sudoers file.  This incident will be reported.

SOLUTION:
message stating that "ademtest is not in the sudoers file." This means that your user account ademtest is not configured in the sudoers file, and therefore, it's not allowed to run commands with superuser privileges using sudo.
BURDA 2 SEKILDE BU ISI COZERIZ
1- USER-KULLANICILARDAN SUDO KULLANMA YETKISI OLAN, YANI SUDOERS DOSYASINA SAHIP  OLAN KULLANICI UZERINDEN BU ISI YAPMAK
2- PEKI BIZ ADEMTEST KULLANICISININ SUDO YU KULLANMA YETKISI YOK ISE YANI SUDOERS DOSYASINA SAHIP DEGIL AMA BEN ISLEMIMIZ ILLA KI ADEMTEST KULLANISI UZERINDEN YAPMAK ISTIYORUM , NASIL ADEMTEST KULLANICISI ILE SUDO KOMUTUNU KULLANABILECEK HALE GETIRIRIZ?
ADEMTEST KULLANICISINA SUDOERS DOSYASINI EKLEMEMIZ GERKEKIR

ONCELIKLE SUDO KULLANMA YETKISI OLAN ADEM KULLANICISINDA OLMAMIZ GEREKIR
SUDO KULLANMA YETKISI OLAN ADEM KULLANICINDA IKEN 

1-Log in as a user with administrative privileges, such as the adem user.
Eger baska bir kullanici da isek o zaman su - adem  diyerek adem kullanicisna login olabiliriz, ama zaten adem kullanicsindan isek o zaman zaten birsey yapmamiza gerek yok
adem kullancisinda oldugjmzu ise terminal de komut yazdigmz satir in en solunda kullanici adi yazar zaten.. 
ya da echo $USER  ile de gorebiliriz current user ismini
adem@adem-ThinkPad-13-2nd-Gen:~$ echo $USER
adem

2-Run the following command to edit the sudoers file using the visudo command:
adem@adem-ThinkPad-13-2nd-Gen:~$ sudo visudo
3-In the editor that opens, navigate to the section of the file that specifies user privileges. You'll typically find a section that looks like this:
# User privilege specification
root    ALL=(ALL:ALL) ALL 
4-To grant ademtest sudo privileges, add the following line below the root line:
ademtest    ALL=(ALL:ALL) ALL
It should look like this:
# User privilege specification
root    ALL=(ALL:ALL) ALL
ademtest    ALL=(ALL:ALL) ALL

Save the file and exit the editor. In most cases, you can save and exit the editor by pressing Ctrl+X, then Y, and finally Enter.

! ARTIK SUDO YU KULLANARAK, ADEMTEST KULLANICISINDA IKEN ADEM KULLANICISININ USER-OWNER OLDUGU TESTFOLDER UZERINDEKI YETKILERI DEGISTIREBILMIS OLDUK!!!!
adem@adem-ThinkPad-13-2nd-Gen:~$ su - ademtest
Password: 
ademtest@adem-ThinkPad-13-2nd-Gen:~$ ls -ld /home/adem/testfolder
drwxrwxrwx 3 adem adem 4096 des.  27 00:09 /home/adem/testfolder
ademtest@adem-ThinkPad-13-2nd-Gen:~$ sudo chmod a-rwx /home/adem/testfolder
[sudo] password for ademtest: 
ademtest@adem-ThinkPad-13-2nd-Gen:~$ ls -ld /home/adem/testfolder
d--------- 3 adem adem 4096 des.  27 00:09 /home/adem/testfolder

! PEKI DOSYA VE USER-OWNER LIGI NASIL DEGISTIREBILIRIZ!!!! CHOWN KOMUTU !

ISTERSEK DOSYA NIN SAHIBINI, VEYA GRUBUNU YA DA IKISINI BIRDEN DEGISTIRMEMIZ MUMKUNDUR

adem@adem-ThinkPad-13-2nd-Gen:~$ ls -ld testfolder

d--------- 3 adem(user-owner) adem(grupname) 4096 des.  27 00:09 testfolder
adem@adem-ThinkPad-13-2nd-Gen:~$ 
DOSYA SAHIBINI VE GROUP U DEGISTIRMEK ISTERSEK EGER:

adem@adem-ThinkPad-13-2nd-Gen:~$ chown ademtest testfolder
chown: changing ownership of 'testfolder': Operation not permitted
adem@adem-ThinkPad-13-2nd-Gen:~$ 

Bu testfolder klasorunun sahibi adem kullanicisi olmasina ragmen, kendi sahibi oldugu dosya ya bile kendi basina sahipligini, degistiremiyor. 
!BUNUN YAPILABILMESI ICIN YINE ROOT YETKILERINE SAHIP OLUNMASI GEREKIYOR YANI SUDO KOMUTU KULLANARAK, ROOT YETKILERINI KULLANARAK YAPILABILIR!

adem@adem-ThinkPad-13-2nd-Gen:~$ sudo chown ademtest testfolder
[sudo] password for adem: 
adem@adem-ThinkPad-13-2nd-Gen:~$ ls -ld testfolder
d--------- 3 ademtest(user-owner) adem(groupname) 4096 des.  27 00:09 testfolder
adem@adem-ThinkPad-13-2nd-Gen:~$ 

! GORDUGMUZ GIBI SUDO KULLANARAK, KLASORUN SAHIPLIK DURUMUNU ADEM KULLANICISINDAN ADEMTEST KULLANICISINA GECIRMIS OLDUK!

SIMDI DE GROUP ISMINI DEGISTIRECEGIZ

adem@adem-ThinkPad-13-2nd-Gen:~$ sudo chown :ademtest testfolder
: ile biz testfolder i ademtest grubuna dahil et demis oluyoruz!!!!
adem@adem-ThinkPad-13-2nd-Gen:~$ ls -ld testfolder
d--------- 3 ademtest ademtest 4096 des.  27 00:09 testfolder

!AYNI ANDA HEM SAHIPLIGI HEM DE GROUP ISMINI NASIL DEGISTIREBILIRIZ! 
! : bu iki nokta ust uste grubu ayrimak icin kullaniliyor!!!!!
adem@adem-ThinkPad-13-2nd-Gen:~$ sudo chown adem:adem testfolder
adem@adem-ThinkPad-13-2nd-Gen:~$ ls -ld testfolder
d--------- 3 adem adem 4096 des.  27 00:09 testfolder
adem@adem-ThinkPad-13-2nd-Gen:~$ 

! EVET BIZ SUNU ANLAMALIYZ KI, DOSYA VEYA KLASOR SAHIPLIGI DEGISTIGI ICIN, DE YETKI TANIMLAMA, DEGISTIRME YI DE O KLASORUN SAHIBI YAPABILDIGI ICIN, ONA GORE YETKI TANIMLAYABILECEK KULLANICIDA DEGISMIS OLUYOR. BUNU ANLAYALIM!!!! !

! PEKI TAMAM BIZ TESTFOLER IN SAHIPLIGINI DEGISTIRIYORUZ AMA, PEKI YA BU FOLDER IN ALT FOLDER VE DOSYALARIN SAHIPLIGI NE OLACAK
!
!BIZ NASIL BIR KLASORUN ALTINDAKI TUM KLASOR VE DOSYALARI DA KAPSAYACAK SEKILDE SAHIPLIGI DEGISTIREBILIRIZ!

adem@adem-ThinkPad-13-2nd-Gen:~$ sudo ls -lR testfolder/
testfolder/:
total 8
drwxrwxrwx 2 adem adem 4096 des.  27 00:08 subfolder
-rwxrwxrwx 1 adem adem   35 des.  27 00:09 test1.txt

testfolder/subfolder:
total 4
-rwxrwxrwx 1 adem adem 50 des.  27 00:09 test2.sh
adem@adem-ThinkPad-13-2nd-Gen:~$ chmod 777 testfolder; chmod a=rwx testfolder; chmod a+rwx testfolder;
adem@adem-ThinkPad-13-2nd-Gen:~$ ls -lR testfolder
testfolder:
total 8
drwxrwxrwx 2 adem adem 4096 des.  27 00:08 subfolder
-rwxrwxrwx 1 adem adem   35 des.  27 00:09 test1.txt

testfolder/subfolder:
total 4
-rwxrwxrwx 1 adem adem 50 des.  27 00:09 test2.sh
! -R(recursive) option i kullanarak, bir klasorun tum alt klasor ve dosyalari ile birlikte sahipligini degistirebiliriz!!!! !
adem@adem-ThinkPad-13-2nd-Gen:~$ sudo chown -R ademtest  testfolder
adem@adem-ThinkPad-13-2nd-Gen:~$ ls -ld testfolder
drwxrwxrwx 3 ademtest adem 4096 des.  27 00:09 testfolder
adem@adem-ThinkPad-13-2nd-Gen:~$ ls -lR testfolder
testfolder:
total 8
drwxrwxrwx 2 ademtest adem 4096 des.  27 00:08 subfolder
-rwxrwxrwx 1 ademtest adem   35 des.  27 00:09 test1.txt

testfolder/subfolder:
total 4
-rwxrwxrwx 1 ademtest adem 50 des.  27 00:09 test2.sh
adem@adem-ThinkPad-13-2nd-Gen:~$ 

! Bir klasorun alt klasor ve dosyalarinin tamamminin grupu ismini degistirmek istersek yine -R(recursive) option i kullanarak yapabiliriz !
adem@adem-ThinkPad-13-2nd-Gen:~$ sudo chown -R :ademtest testfolder
adem@adem-ThinkPad-13-2nd-Gen:~$ ls -ld testfolder
drwxrwxrwx 3 ademtest ademtest 4096 des.  27 00:09 testfolder
adem@adem-ThinkPad-13-2nd-Gen:~$ ls -lR testfolder
testfolder:
total 8
drwxrwxrwx 2 ademtest ademtest 4096 des.  27 00:08 subfolder
-rwxrwxrwx 1 ademtest ademtest   35 des.  27 00:09 test1.txt

testfolder/subfolder:
total 4
-rwxrwxrwx 1 ademtest ademtest 50 des.  27 00:09 test2.sh
adem@adem-ThinkPad-13-2nd-Gen:~$ 

! Bir klasorun tum alt klasorleri ve dosyalarinin tamaminin b irden hem sahipligi hem de grup ismini degistirmek icin, de yine -R(recursive) option i kullaniriz!
adem@adem-ThinkPad-13-2nd-Gen:~$ sudo chown -R adem:adem testfolder
adem@adem-ThinkPad-13-2nd-Gen:~$ ls -ld testfolder
drwxrwxrwx 3 adem adem 4096 des.  27 00:09 testfolder
adem@adem-ThinkPad-13-2nd-Gen:~$ ls -lR testfolder
testfolder:
total 8
drwxrwxrwx 2 adem adem 4096 des.  27 00:08 subfolder
-rwxrwxrwx 1 adem adem   35 des.  27 00:09 test1.txt

testfolder/subfolder:
total 4
-rwxrwxrwx 1 adem adem 50 des.  27 00:09 test2.sh
adem@adem-ThinkPad-13-2nd-Gen:~$ 

!BU YAKLASIM SAYESINDE ORNEGIN ILGILI DOSYA VE KLASORE ERISMESINI ISTEDGMIZ KULLANICILAR ICIN OZEL BIR GRUP OLUSTURUP, O GRUBU DA BU DOSYA VEYA KLASORUN GRUBU OLARAK DEGISTIREREK O GRUBA AIT TUM KULLANICILARIN BU DOSYA VE KLASORE DE HANGI ERISIM YETKILERINE SAHIP OLMALARINI ISTERSEK ONA GORE AYARLAMA YAPABILIRZ...AYNI ANDA BIRCOK KULLANICININ BU DOSYA VEYA KLASORE ERISIM YETKILERINI AYARLAYABILIYORUZ!

SUDO ARACI 

Herhangi bir kullaniciya root yetkisi vererek calistirmak istedgimizde kullandigmiz bir aractir


SUDO ARACI NASIL CALISIYOR
sudo aracinin kendine ait konfigurasyon dosyasi vardir, yani her olusturulan kullaniciya sudo yu kullanma yetkisi dogrudan verilmiyor
sudo araci sudoers isimli konfigurasyon dosyasina sahiptir. Sudo araci calistirildiginda, sudoers dosyasini kontrol eder, ve o an sudo yu kullanan kullaniciya sudo yu yani root yetkilerini sudo yu kullanarak kullanma yetkisi verilmis mi buna bakilir, eger verilmis ise tamam o zaman sudo komutu, olmasi gerektigi gibi, o yetkiyi vererek kullandiririlir

sudoers dosyasi ve kontrol edilen icerik asagida ki gibidir!!!!
/etc/sudoers.tmp

# User privilege specification
root    ALL=(ALL:ALL) ALL
ademtest ALL=(ALL:ALL) ALL

! ONCELIKLE BIZ, NASIL O AN KI KULLANICIYI OGRENEBILIRIZ !

adem@adem-ThinkPad-13-2nd-Gen:~$ whoami
adem
adem@adem-ThinkPad-13-2nd-Gen:~$ echo $USER
adem
adem@adem-ThinkPad-13-2nd-Gen:~$ 
DIKKAT EDELIM SUDO WHOAMI YAZARSAK, ROOT OLARAK GELIYOR KULLANICI
adem@adem-ThinkPad-13-2nd-Gen:~$ sudo whoami
root
adem@adem-ThinkPad-13-2nd-Gen:~$ 
Burda bazen sudo whoami denildigi zaman password isteyebilir, bu password, root un passwordu degildir, bu password o an uzerinde bulunan kullanicidir, yani whoami denildiginde gelen kullanicinin login giris sifresidir... 

! SUDOERS DOSYASINI DUZENLEYMEK | SUDO KONFIGURASYONU !

/etc/sudoers

Sudoers dosyasini, dogrudan nano araci  ile acmak yerine bu araca ozel, olarak acmak icin visudo aracini kullaniriz
sudoers dosdyasi uzerinde gerceklestirdigmz degisikliklerin kontrol edilmesi icin bu ise ozgu visudo araci ile bu isi yapariz
Ama yetkili bir sekilde bu araci kullanabilmek icin, sudo visudo diyerek kullaniriz!

sudo visudo


# Host alias specification

# User alias specification

# Cmnd alias specification

# User privilege specification
root    ALL=(ALL:ALL) ALL
ademtest ALL=(ALL:ALL) ALL


root    ALL(Tum hostlari temsil ediyor)=(ALL(root kullanicsinin tumkullanicilar gibi komutlar calistirabilecegi):ALL(tum gruplar gibi calisitrma yapabilecegiini gosteriyor)) ALL(Tum komutlari calistirabilecegi anlamina geliyor)
Zaten biz chown ile bir klasor veya dosya sahibi ve grup ismin degistirirken de benzer sekilde kullanmistik ayni mantik gecerli burda da 
adem@adem-ThinkPad-13-2nd-Gen:~$ sudo chown -R adem(user-owner):adem(groupname) testfolder

ademtest ALL=(ALL:ALL) ALL
(ALL:ALL) bu kisim root kullanicisinin tum kullanici-owner ve gruplar gibi komut calistirabilecegi anlamina geliyor

# User privilege specification
root    ALL=(ALL:ALL) ALL
root kullanicisi tum hostlarda, tum user(owner)larda, tum gruplarda ve tum komutlar ile calistirilabilecegi anlamina geliyor
ademtest ALL=(ALL:ALL) ALL
rooademtest  kullanicisi tum hostlarda, tum user(owner)larda, tum gruplarda ve tum komutlar ile calistirilabilecegi anlamina geliyor

!PEKI NEDEN root kullanicisi tekrardan privilege veriliyor ki zaten root kullanicis degil mi?
Cunku normalde biz evet root  kullanicisinda  iken tum komutlari, yetkili olarak calistirabiliyoruz ama, biz eger ki gidip de root kullanicisinda iken aliskanlik geregi sudo root seklinde kullanirsak, o an icin root kullanicisinda olsa bile yine gidip sudoers dosyasini kontrol edecek ve orda root kullanicisina privileges lar verilmis mi diye, root    ALL=(ALL:ALL) ALL ondan dolayi da sudoers dosyasinda root kullanicisi icin tekrardan tanimlanmistir

!Sistemimizde root hesabi varsayilan olarak aktif olarak gelmiyor, root hesabinin kullanabilmek icin once onu aktiflestirmemiz gerekiyor
!Root hesabini aktiflestirmek icin de root hesabina yeni bir parola tanimlamamiz yeterlidir, cunku sistemimizde zaten root hesabi tanimli ama sadece parolasi olmadigi icin giris yapamiyoruz
!Bunun icin: sudo passwd root    komutunu gireriz, o anki uzerinde oldugmuz kullanicinin passwordunu girdikten sonra bizden new password girmemizi isteyecek root kullanicisi icin

adem@adem-ThinkPad-13-2nd-Gen:~$ sudo passwd root
[sudo] password for adem: 
New password: 
BAD PASSWORD: The password is shorter than 8 characters
Retype new password: 
passwd: password updated successfully
!ROOT ICIN PASSWORD TANIMLAYARAK, ROOT KULLANICISI NI ARTIK AKTIFLESTIRMIS OLUYORUZ!!!!VERDGIMZ SIFRE YI KULLANARAK ARTIK, ROOT KULLANICISINA GECIS YAPABILIRIZ!!!
adem@adem-ThinkPad-13-2nd-Gen:~$ su root
Password: 
root@adem-ThinkPad-13-2nd-Gen:/home/adem# 
root@adem-ThinkPad-13-2nd-Gen:/home/adem# whoami 
root
root@adem-ThinkPad-13-2nd-Gen:/home/adem# 
root@adem-ThinkPad-13-2nd-Gen:/home/adem# sudo whoami
root
root, sudoers dosyasinda privilges lar verildiginden dolayi, sudoers dosyasina gidiyor ve orda root u buldugu icin, root u getiriyor tabi ki /etc/sudoers icinde:  root    ALL=(ALL:ALL) ALL
root kullanicisinda bile olsak eger sudoers dosyasinda root icin privileges ler tanimlanmaz ise, sudo whoami diye tanimladigimzda, sudoers dosyasini kontrol edecegi icin, orda root kullanicisina privilges ler verilmis olarak bulamaz ise o zaman root u getirmeyecektir

Bu durum dikkat edelim, biz root kullanicisinda olasak bile, herhangi bir .sh dosyasi, script dosyasi yani run-execute edilebilir bir dosya calistiriyor ise sudo ile, /etc/sudoers dosyasi icinde kontrol eder eger orda root u bulamaz ise o zaman o .sh dosyasini calistirmaz ve hata mesaji verecektir, su sekilde: root is not in the sudoers file. This incident will be reported.

! sudo visudo ile dosyayi acarsak
CTRL-O ile dosya ya ornegin yeni bir kullanici icin, sudo yetkilerini kullanabilsin diye  
!ademtest ALL=(ALL:ALL) ALL
Bu sekilde belirtirsek, belirtince yani bu dosyada degisiklik yaptimgzdan dolayi dosya nin en ust kisminda 
! sudoers.tmp *  olarak goruruz, birincisi .tmp o an uzerinde degisklik yaptimgz dosya .tmp dosyasina kaydediyor onu gosteriyor, * ise o duzenleme halinde, modunda oldugunu gosteriyor!!!!
!BU DEGISIKLIKLERI YAPTIGMIZDA BU DEGISIKLIKLER ANINDA O AN UZERINDE OLDUGMZU KULLANICIDA YAPMIS ISEK DEGISIKLIGI HEMEN GECERLI OLMAYACAKTIR , ONDAN DOLAYI DA SUDO KOMUTU YETKILERINI VERDIGMZ VE SUDOERS DOSYASINA EKLEDGIMZ KULLANICI HESABINDAN CIKIP TEKRAR GIRIS YAPARAK DENEMELIYIZ SUDO KOMUTUNUN O ARACTA CALISIP CALISMADIGNI

!SUDOERS DOSYASINDA, TEK BIR KULLANICI ICIN KONFIGURASYON NASIL YAPILIYOR GORDUK:!ademtest ALL=(ALL:ALL) ALL
!PEKI SUDOERS DE BIZ BIR GRUB ICIN, BOYLE BIR YETKILENDIRME VERECEKSEK, SUDO KOMUTU GRUP ICIN KULLANILABILSIN ISTERSEK O ZAMAN SUDOERS DOSYASINDA NASIL DEGISIKLIK YAPACAGIZ??? 

# Allow members of group sudo to execute any command
%sudo   ALL=(ALL:ALL) ALL
!Group icin bu privileges leri vereceksek de o zaman basina % isareti ve sonra da grup ismi yazilir 
!%sudo   ALL=(ALL:ALL) ALL

HATIRLAYACAK OLURSAK adem kullanicisi SUDO GRUBUNA DAHIL DI!! 
adem@adem-ThinkPad-13-2nd-Gen:~$ groups adem
adem : adem adm cdrom sudo dip plugdev lpadmin lxd sambashare

adem@adem-ThinkPad-13-2nd-Gen:~$ sudo visudo
[sudo] password for adem: 

# Allow members of group sudo to execute any command
%sudo   ALL=(ALL:ALL) ALL

!adem kullanicisina dikkat edersek, adem kullanicisi ile ilgili sudoers dosyasinda herhangi bir dogrudan kullanici sudo kullanma izni verilmemis! Yani ademtest kullancisina verildigi gibi verilmemis:ademtest ALL=(ALL:ALL) ALL
!Ama, adem kullanicsinin hangi grup lara dahil oldugunu groups adem komutu ile kontrol ettigimzde, sudo grubuna dahil oldugunu gorebilriz ve bu sudo grubunun da sudoers dosyasinda sudo komutunu kullanmak icin tum  yetkilerin verildigini gorebiliriz!!! 
# Allow members of group sudo to execute any command
%sudo   ALL=(ALL:ALL) ALL
!ISTE BU DURUMDAN DOLAYI, yani adem kullanicisina kullanici olarak dogrudan sudoers dosyasinda sudo kullanma yetkisi verilmese bile, adem kullanicisinin dahil oldugu sudo isimli gruba, sudoers dosyasinda, sudo kullanma yetkisi verildigi icin, bu sudo grubuna dahil olan kullanicilar sudo komutunu root yetkisi ile kullanabilir demektir, iste bu sebepten adem kullanicisi sudo ile root yetkilerini  kullanabiliyor
adem@adem-ThinkPad-13-2nd-Gen:~$ sudo whoami
root 

!KULLANICIMIZ SUDO VEYA ADMIN GRUBUNA DAHIL OLABILIR VE BU HER IKI GRUP ISMI DE SUDOERS DOSYASINDA, SUDO KOMUTUNU ROOT YETKILERI ILE KULLANABILECEK AYRICALIKLAR TANIMLANDIGI ICIN, ADMIN VEYA SUDO GURUBUNDAN BIRINE DAHIL ISE BIR KULLANICI, ARTIK SUDO KOMUTUNU ROOT YETKISLERI ILEK KULLANABILIR DEMEKTIR

# Members of the admin group may gain root privileges
%admin ALL=(ALL) ALL
# Allow members of group sudo to execute any command
%sudo   ALL=(ALL:ALL) ALL

BIZ KENDIMIZ BIR GRUB ICIN SUDO KULLANMA YETKISI VERMEK ISTERSEK AYNI SEKILDE
SUDO VISUDO ILE SUDOERS DOSYASINI ACARAIZ VE ASAGIDAKI GIBI O GRUPA SUDO KULLANMA  YETKILERI VEREREK O GRUP UYELERININDE SUDO KOMUTUNU ROOT YETKILERI ILE KULLANABILMESINI SAGLAMIS OLURUZ
%mygroup   ALL=(ALL:ALL) ALL

! SUDOERS DOSYASI ICINDEKI @includedir /etc/sudoers.d NE DEMEKTIR!
Bu tanimlamada konfigurasyon dosyasinin ayrica nerden alinabilecegini gosteriyor
/etc/sudoers.d  
Bu dizin altinda bulunan konfigurasyon dosyalarini al, konfigurasyonlarini oku, ve gecerli kil, dahil et demektir.
Yeni daha kapsamli konfiguraysonlar yapilacaksa, dogrudan sudoers dosyasina mudahele etmek yerine /etc/sudoers.d buraya eklemeler yapiliyor bu sayede ana dosyada degisiklik yapilmamis oluyor, bu daha duzenli bir yapi olusturulmasini saglamis oluyor
.d uzantili dizinler genellikle ana dosyasinda konfigurasyon yapmak istemediginden dolayi bu tarz dizinler le yeni konfigurasyon dosyalari olusturup bunlari ana dosyalarina include ederek kullanirlar
sudoers.d  ile sudoers dosyasinin konfigurasyonlarini bu dosya icinde yapar ve sudoers.d yi de sudoers dosyasina dahil ederek kullanir
sudoers.d(directory)
Araclar birden fazla konfigurasyon dosyasi oldugunda ve bu dosyalara bir dizinde ulasmak istediginde, bu sekilde tanimlamalar gerceklestirebiliyorlar
adem@adem-ThinkPad-13-2nd-Gen:~$ ls /etc/sudoers.d
README
adem@adem-ThinkPad-13-2nd-Gen:~$ 

yine visudo araci ile sudo yu kullanarak acabilirz bu dosyayi
VISUDO ARACI SUDOERS DOSYALARINI ACMAYA OZEL BIR METIN EDITORU IDI
sudo visudo /etc/sudoers.d/README 

! %mygroup   ALL=(ALL:ALL) ALL
% ile basliyorsa grup ismidir demistik. Boyle birsey gordgmzde bunun grup oldugnu anlamaliyz

HATIRLARSAK 
/etc/group  dosyasi icerisinde tum grup isimleri bulunuyordu!!!!!
Ve biz bir grup ismine, veya bir gruba hangi kullanicilar dahil oldugunu check etmek istersek gelip 

grep "sudo" /etc/group diye
arama yapabiliriz!!!!!

/etc/group 
postgres:x:137:
admin:x:1001:
gis_database:x:1002:
myUser:x:1003:
plocate:x:138:
mysql:x:139:
ademtest:x:1004:

adem@adem-ThinkPad-13-2nd-Gen:~$ grep "sudo" /etc/group
sudo:x:27:adem

YANI BIZ, ORNEGIN SUDO GRUBUNA HERHANGI BIR KULLANICIMZI DAHIL EDEREK ARTIK O KULLANCIMZINDA SUDO KULLARNARAK ROOT YETKISI ILE,
(ALL(TUM HOSTLARDA)(ALL(TUM KULLANICILARA):ALL(TUM GRUPLARA) : ALL(TUM KOMUTLARDA)) GECERLI OLMASINI SAGALAYABILIRZ) komutlari calistirabilmesi saglanmis olur

adem@adem-ThinkPad-13-2nd-Gen:~$ sudo whoami
root
Biz sudo aracina whoami dedmigz de ozellikle hangi kullanici ile kullanacagimzi eger belirtmezsek o zaman varsayilan olarak default olarak root kullanicisi ile o islemi yapacaktir, ONDAN DOLAYI BIZ sudo whoami dedgimzde root kullanici ismini aliyoruz

! BURASI ANLASILMASI ONEMLI BR NOKTADIR!!!
AMA BIZ adem kullanicisinda iken sudo aracina mevcut uzerinde olunan kullanici haricinde ademtest kullanicisi ile sudo nun calismasini soylersek eger, 
adem@adem-ThinkPad-13-2nd-Gen:~$ sudo -u ademtest whoami
ademtest

sudo -u(user) ademtest(kullanici) whoami
sudo yetkisini kullan, yani root yetkilerini kullan, -u(user) ademtest user inda git whoami aracini calistir
BURDA BIZ ademtest kullanicsini -u ademtest diye belirttgimz icin, whoami ademtest i bulacaktir, ama biz eger hicbirsey belirtmezsek o default olarak root kullanicisini getirecektir!!!!!

!BIR ORNEK!!!
%kali-trusted ALL=(ALL:ALL) NOPASSWD:ALL
bURDA ornegin biz kullanicimzi kali-trusted grubuna dahil edersek,bu gruba dahil olan tum kullanicilara sudo yu kullanma yetkisi root yetksi verilirken ayrica birde NOPASSWD ile, parola sorulmadan, tum kullaniclarda gecerli, tum gruplarda gecerli, tum hostlarda gecerli ve tum komutlar icin gecerli
ALL(ALL HOST)(ALL(ALL USERS):ALL(ALL GROUPS): NOPASSWD ALL(ALL COMMANDS))
YANI TUM KULLANICILARDA DEDIGI ICN ORNEGIN ASAGIDA  adem kullanicisi uzerinde, sudo ile ademtest kullanisinda whoami komutu calistiriliyor, adem kullanici eger kali-trusted grubuna dahil edilrise o zamn, ademtest kullanicisi adem kullanisi uzerinde iken, sifre-parola sormadan, araci sorunsuz calistirabiliyor, ve baska bir kullaniciyi da yani adem kullanicisi uzerinde ademtest kullanicisini sudo araci ile sorunsuz bir sekiklde calistirabiliyor

! BIR KULLANICIDA IKEN , BASKA BIR KULLANICI YETKISI ILE KOMUT CALISTIRMAK!!!!
sudo -u(user) ademtest(kullanici) whoami , ademtest ciktisini aldik , cunku sudo araciligi ile adem kullanicisi kendisine herhangi bir parola sorulmadan, tum kullanicilar gibi 

!BIR KULLANICI UZERINDE IKEN, BASKA BIR GRUP ISMI ILE KOMUT CALISTIRMAK!!

sudo -g grupnam commandname, seklinde kullaniliyor!!!!

!YANI KISACASI /etc/sudoers.d/ dizini altina kali-grant-root.tmp dosyasi olsuturup onun da iceriisne
!%kali-trusted ALL=(ALL:ALL) NOPASSWD:ALL bu sekilde bir konfigrasyon yaparsak zaten, SUDOERS DOSYASI ICINDEKI @includedir /etc/sudoers.d DIRECTORYSI ALTINDAKI TUM DOSYALARI DAHIL EDILDIGI ICIN , kali-grant-root.tmp BOYEL BIR DOSYA DA OTOMATIK DAHIL OLACAKTIR, VE DE BU GRUPA DAHIL ETTIGMZ HERKESE, PAROL BILE SORMADAN TUM YETKILERE SUDO KULLANARAK ERISEBILMELERINI SAGLAMIS OLACAGIZ...!!!!!

!BU KONFIGUYRASYON HIC YOKSA BILE KENDIMZ BOYLE BIR DOSYA OLUSTURP DA BU KONFIGURASYONU KENDIMIZ YAPABILIRZ!!!


!KULLANICIYA OZEL SUDO YETKILERI TANIMLAMAK!!!!!
Sistemimizdeki kullanicilara ozel konfigurasyonlar tanimlayabiliriz
Ornegin sistemmizdeki adem54 kullanicisi icin ozel bir sudo konfigurasyonu tanimlayabiliriz

Biz konfigurasyonumuzu ya /etc/sudoers.d/ dizini altindaki dosyalardan birine, ya da direk sudoers dosyasina ekleyebiliyoruz!Ama tabi ki sudoers dosyasinin kendisi ana konfigurasyon dosyasi oldugu icin, mumkun oldugunca ekstra konfigurasyonlari /etc/sudoers.d/ dizini altinda ayri dosya olusturup ya da /etc/sudoers.d/ dizini altindaki var olan konfigurasyon dosyalari altindakilerde  yapariz. Yani biz yeni bir konfigurasyon dosyasi olusturacgimz icin, bu dogrudan sudoers tarafindan okunacaktir cunku /etc/sudoers.d/ dizini altindaki tum dosyalar include edilmistir sudoers dosyasi icerisinde
adem54@adem:/etc/sudoers.d$ ls
README

! /ETC/SUDOERS.D/ DIZINI ALTINDA YENI KONFIGURASYON DOSYASI OLUSTURARAK KULLANICIYA OZEL KONF. AYARLAMAK

%grupname  grup icin yapilacak konfigurasyonlarda basina % konuluyor ama kullanici icin yapilan konfiguryasonlarda bu yok

adem54 ahost,bhost
adem54 kullanicisinda gecerli olacak konfigurasyon oldugunu belirtiriz ardindan da hangi hostlar icinde gecerlik olacak onu belirtiriz
adem54 ALL=
BU SEKILDE TUM HOSTLAR ICIN GECERLI OLSUN DENILIYOR
adem54 ALL=(user1,user2:group1,group2)
SONRA PARANTEZ ICINDE, HANGI KULLANICI VE HANGI GRUP LARDA CALISACAGNI BELIRTIRIZ!!!
adem54 ALL=(ALL:ALL) ALL TUM HOSTLARDA=(TUM KULLANICI, TUM GRUPLARDA) TUM ARACLARI CALISTIR DEMEKTIR
EGER BIZ OZELLIKLE KULLANICI BELIRTMEZSEK OZAMAN, DEFAULT OLARAK ROOT KULLANICISI ICIN GECERLI OLACAKTIR,  YANI ADEM54 KULLANCISI ROOT YETKILERI ILE GECERLI OLACAKTIR

adem54 ALL = /usr/bin/ls
adem54 kullanicisi tum hostlarda calistirilsin, deniyor ve herhangi bir kullanici ve grup belirtilmemeis boyle durumlarda default olarak root kullanicisinin yetkisni verecek, sonra da hangi araclarda gecerli olsun onu vermemiz gerekir, ALL dersek tum araclar, ama spesifik araclar icin gecerli olmasini istersek ornegin ls araci o zaman da o aracin tam dizin adresini vermemiz gerekir, yani o aracin calistirildigi tam dizin adresini vermemiz gerekir

ls aracinini sistem uzerindeki tam konumunu ogrenmek istersek which aracini kullaniriz

adem@adem:~$ which ls
/usr/bin/ls
adem@adem:~$ 
!ls aracinin sistem uzerindeki dosya karsiligi buymus
adem54 ALL = /usr/bin/ls
adem54 kullanicisi sistem uzerindeki tum hostlarda, root kullanisi default olarak gecerli olacak, ve yalnizca ls aracinda gecerli olacak!!!
sudo ile adem54 kullanicisi root kullanicisi olarak, yalnizca ls aracini kullanabiliyor olacak, bu dosyayi kullanabiliyoru olacak

Bir arac daha ekleyecek olursak

adem@adem:~$ which whoami
/usr/bin/whoami

YORUM SATIRI EKLEYEREK TANIMLANAN YETKI NIN ACIKLAMASI DA YAPILABILIR

#adem54 user authority definition
adem54 ALL= /usr/bin/ls, /usr/bin/whoami

adem@adem:~$ ls /etc/sudoers.d
new-conf  README
adem@adem:~$ 

!BU SEKILDE ADEM54 KULLANICISINA OZEL, SUDO YETKISI TANIMLAMIS OLUYORUZ!!

!SIMDI adem54 kullanicisinda login olalim(su - adem54) ve sudo komutunu calistiralim!! 

adem@adem:~$ su - adem54
Password: 
adem54@adem:~$ whoami
adem54
adem54@adem:~$ sudo whoami
[sudo] password for adem54: 
root

sudo whoami root gelir cunku, asagida adem54 kullanicisina tum hostlarda, /usr/bin/ls, /usr/bin/whoami araclari root kullanicisi ile calisitrma yetkisi vermis oluyoruz, cunku, hic bir kullanici belirtilmediginda default olarak root kullanicisi verilmis oluyor!! 

adem54 ALL= /usr/bin/ls, /usr/bin/whoami
!!Dikkat edelim adem54 kullanicisi kendi basina ls /root a yetkisi yoktur ama sudo ile root yetkisi ile ls aracini calistirabildigi icin sudo kullaninca calistirabilecektir

adem54@adem:~$ ls /root
ls: cannot open directory '/root': Permission denied
adem54@adem:~$ sudo ls /root
snap

!!BURAYA COK DIKKAT, BIZ SINIRLI KOMUTLAR ICIN, SUDO ILE ROOT KULLANICISI YETKISI ILE YETKILENDIRDIGMIZ ICIN, ASAGIDKI SIRADAN NORMAL BIR KOMUTU ECHO KOMUTUNU SUDO ILE CALISTIRMAYACAKTIR, NEDEN CUNKU ASAGIDAKI KOMUTLAR ICIN YETKI VERILMEDI SADECE VE SADECE LS VE WHOAMI KOMUTUNUN ROOT YETKISI ILE CALISTIIRILMASINA IZIIN VERILDI SUDO KULLANILDIGI ZAMAN.... 

adem54@adem:~$ sudo echo deneme
Sorry, user adem54 is not allowed to execute '/usr/bin/echo deneme' as root on adem.
adem54@adem:~$ 

!BURAYA COK DIKKAT NEDEN ASAGIDAKI HATAYI ALDIK CUNKU!!!!
adem54@adem:~$ sudo -u adem whoami
Sorry, user adem54 is not allowed to execute '/usr/bin/whoami' as adem on adem.
adem54@adem:~$ 

!adem54 ALL= /usr/bin/ls, /usr/bin/whoami BURDA ALL= DAN SONRA BOSLUK BIRAKTIK HERHANGI BIR KULLANIC BELIRTMEDIK O ZAMANDA DEFAULT OLARAK SADECE ROOT KULLANICISI ICIN BU YETKI ISLEMINI TANIMLAMIS OLDUK, YANI ADEM54 KULLANICISI ROOT YETKILERI ILE TANIMLANAN KOMUTLARI CALISITIRABILIYOR BUNUN DISINDA, ADEM54 KULLANICISINDA IKEN, HERHANGI BASKA BIR KULLANICI OLARAK LS VE WHOAMI KOMUTLARINI CALISTIRAMIYOR OYLE BIR YETKI VERMEDIK CUNKU!!!!

!AMA TEKRARDAN BIZ KONFIGURASYON DEGISTIRIRSEK EGER 


adem@adem:~$ sudo visudo /etc/sudoers.d/new-conf

  GNU nano 6.2               /etc/sudoers.d/new-conf.tmp                        
#adem54 user authority definition
adem54 ALL=(adem) /usr/bin/ls, /usr/bin/whoami

DIKKAT EDERSEK DIYORUZ KI BU KOMUTLAR ROOT KULLANICISI YETKISI ILE adem54 kullanicsinda oturum acildiginda gecerli olsun ve adem54 kullanciisinda iken adem kullanicisi ile sudo calistirilirse o kullanicida da gecerli olsun deniildigi icin asagida ki ornekte artik adem54 kullanicisinda iken, adem kullanicisi ile sudo yu kullanarak, whoami komutunu calstirdigimzda adem sonucunu aliyoruz


adem54@adem:~$ exit
logout
adem@adem:~$ su - adem54
Password: 
adem54@adem:~$ sudo -u adem whoami
adem
adem54@adem:~$ 

!!BU ASAGIDAKI KISMI ANLAMAK COOOOK ONEMLI , BIR KULLANICI  UZERINDE LOGIN IKEN (adem54@adem:~$ sudo -u adem whoami) BASKA BIR KULLANICI YI KULLANARAK SUDO KOMUTUNU CALISTIRIRMA MANTIGI VE KOONFIGURASYON AYARLARINI TAM OLARAK ANLAMAK ICIN COOOOK ONEMLI BIR KISIMDIR!!!!! 


!adem54 ALL=(adem:adem) /usr/bin/ls, /usr/bin/whoami
BURAYI IZAH EDECEK OLURSAK TEKRARDAN TAM OLARAK OLAYI DOGRU ANLAMAK ADINA
adem54 kullanicsinda login olundugunda, yani adem54 kullanicsi uzerinde iken, ALL(tum hostlarda, tum makinlelerde) (adem:adem) adem kullanicisi ve adem grubu icinde , /usr/bin/ls, /usr/bin/whoami bu komutlari root yetkisi vererek calistirabilme  yetksii verilmis oluyor YANI BU SU DEMEK


adem@adem:~$ SU AN ADEM KULLANICISINDAYIZ
adem@adem:~$ su - adem54
Password:
adem54 kullancisina login oluyoruz burda sonra ise 
adem54 kullanicisnda iken, asagidaki gibi, adem kullanicisina sudo komutu kullanarak whoami komutunu calstirmaya calisiyoruz. Bu durumda ne oluyor hemen sudoers konfiugrasyonn dosyualari inceleniyor ve adem54 kullanicsi icin olan konfiguryasona bakliyor cunku neden adem54 uzerinde login olduk biz, adem54 ALL=(adem:adem) /usr/bin/ls, /usr/bin/whoami bu konfigurasyon, adem54 kullancisi uzerinde login olundugunda gecerli olsun demektir... 

ve adem54 kullanicsinda login olundugunda, adem kullanicisi icin sudo -u adem whoami calistirdigmizda yine adem sonucunu verir cunku biz adem54 ALL=(adem:adem) /usr/bin/ls, /usr/bin/whoami  whoami komutu, adem54 kullanicsinda login iken adem kullanicisi ve adem grubu icinde gecerli olsun , demistik!!! 



adem54@adem:~$ sudo -u adem whoami

SIMDI BURAYA DIKKAT EDELIM 

adem54@adem:~$ sudo whoami
[sudo] password for adem54: 
Sorry, user adem54 is not allowed to execute '/usr/bin/whoami' as root on adem.
adem54@adem:~$ 
!Neden boyle bir sonuc aldik, cunku, 
!adem54 ALL=(adem:adem) /usr/bin/ls, /usr/bin/whoami
!Burda adem54 kullanicsi uzerinde iken, biz adem54 kullanicisin artik, root yetkisi ile degil, adem kullancisinin yetkileri ile calistirabilecegiz, ama  /etc/sudoers.d/new-config dosyasi icinde biz /usr/bin/ls, /usr/bin/whoami bu komutlari sudo kullanarak root yetkisi ile calstir demis oluuyoruz ama adem54 te login olunca, bu komutlar icin biz adem kullanicsinin yetkisi ile calistirilsin diye konfigurasyon yaptigmidan dolayi, ve bu komutlar sadece sudo ile root yetkisi ile calistirilacagi icin, burda root degil adem kullanicisi yetksi ile calistiirlmaya calisilior ondna dolayi da hata aliyoruz


adem54@adem:~$ sudo -u adem whoami
[sudo] password for adem54: 
adem
adem54@adem:~$ 


!KONFIGURASYONDA TEKRAR DEGISIKLIK YAPARSAK ASAGIDAKI GIBI 

adem@adem:~$ sudo visudo /etc/sudoers.d/new-conf

! #adem54 user authority definition 
!adem54 ALL=(ALL:ALL) /usr/bin/ls, /usr/bin/whoami

adem54@adem:~$ exit
logout
adem@adem:~$ su - adem54
Password: 
adem54@adem:~$ whoami
adem54
adem54@adem:~$ sudo whoami
root
adem54@adem:~$ sudo -u adem whoami
adem
adem54@adem:~$ 




BU SEKILDE TUM KULLANICILAR ICIN VE TUM GRUPLAR ICIN GECERLI OLACAKTIR, BU TANIMLAMA SAYESINDE HEM ROOT OLARAK HEM DE SISTEM UZERINDEKI HERHANGI BIR KULLANICI OLARAK, KOMUTLARINI CALISTIRABILIOR OLACAK!!!! 

!adem54 ALL=(ALL:ALL) /usr/bin/ls, /usr/bin/whoami
VARSAYILAN OLARAK ROOT YETKILERI ILE CALISIYOR, ALL DNEILDIGINDE TUM KULLANICILAR DEDIGI ICIN BUNLAR ICIN DE ROOT KULLANICISI DA VAR ONDAN DOLAYI ROOT YETKILERI ILE CALISTIRILACAK!!


!adem54 ALL=(adem:adem) /usr/bin/ls, /usr/bin/whoami
BURDA ISE ADEM54 TE LOGINOLUNCA BU KOMUTLARI TUM HOSTLARDA, ADEM YETKILER ILE CALISTIRACAK, SUDO KOMUTUNU KULLANINCA ROOT ILE CALISTIRMAK ISTEYCEGI ICIN,AMA BURDA ROOT YETKISI DEGIL, ADEM KULLANICISININ YETKILERI ILE CALISTIRILMAYA CALISACAK

SUDO USER BELIRTILMEDIGI ICIN ROOT DA CALISTIRMAK ISTIYOR WHOAMI I AMA ADEM54 KULLANICISI EGER USER OLARAK ADEM BELIRTMIS ISE O ZAMAN BURDA ROOT KULLANCISINI TANIYAMAZ
SUDO WHOAMI DEMEK ASLINDA SUDUR SUDO -U ROOT WHOAMI
adem54@adem:~$ sudo whoami(sudo -u root whoami) 
[sudo] password for adem54: 
Sorry, user adem54 is not allowed to execute '/usr/bin/whoami' as root on adem.
sudo whoami(sudo -u root whoami) gider /etc/sudoers.d/new-config dosyasina ve adem54 ALL=(adem:adem) /usr/bin/ls, /usr/bin/whoami bu konfigurasyonu gorur ve derki ha adem54 kullanicisi adem kullanicisi yetkis i kullanabiliyor, root yetkisi ile whoami i calistiramiyor ve hata mesajini dondurur!!!



BURDA ISE SEN SUDO ILE ADEM YETKILERINI KULLANARAK, WHOAMI YI CALISTIR DIYORUZ VE O ZAMAN NE YAPILIYOR GIDYOR LINUX /etc/sudoers.d/new-config dosyasini inceler, ve orda adem kullanicisina izin verilmis mi whoami komutu iicin ona bakar ve adem kullanicinsini dondurur!!!! 
adem54 ALL=(adem:adem) /usr/bin/ls, /usr/bin/whoami. Burda adem i gorur ve komutu calistirir

adem54@adem:~$ sudo -u adem whoami
adem


!PAROLA SORULMASINI ISTEMEZSEK DE 
!!adem54 ALL=(ALL:ALL) NOPASSWD: /usr/bin/ls, /usr/bin/whoami



Bir kullanıcıya yalnızca belirli bir komutu belirli bir kullanıcı kimliğiyle çalıştırma izni vermek için hangi sudo yetki tanımı kullanılabilir?
Burak ALL=(Ayse) /usr/bin/whoami

Buradaki sudo tanımı ne anlama gelir: Kullanicilar ALL=(ALL) NOPASSWD: /usr/bin/apt-get ?
Kullanicilar kullanicilarina apt-get komutunu parola girmeden calistrirma izni verir

!HESAPLAR ARASI GECIS ICIN SU(switch user) ARACI
Kullanici hesaplari arasinda gecis yapmak icin kullanilan bir aractir

BIR KULLANICIYA GECERKEN
adem@adem:~$ su adem54
Password: 
adem54@adem:/home/adem$ 
O KULLANICIDAN CIKIS YAPMAK ICIN ISE
adem54@adem:/home/adem$ exit
exit
adem@adem:~$ 

SU ARACINI IKI FARKLI SEKILDE KULLANABILIYORUZ

adem@adem:~$ su adem54
Bu komut girildiginde su anda mevcut calismakta olunan bash-shell-kabuk ve uzerinde calismakta oldugmz dizin adem@adem:~$, su adem54, adem54 kullanicisi icin baslatilmis olan bash-shell-kabuguna aktariliyor

Yani, su an calismakta olan mevcut adem kullanicsinin kabugundaki ortam degiskenleri gibi cesitli bilgiler,adem54 kullanicisi icin baslatilmis olan kabuk, mevcut kagugun, adem kabugunun altinda yeni bir kabuk baslatildigi icin aktarilarak, adem54 kullanicisini icin baslatilan kabuga aktariliyor

adem@adem:~$ export test1="global variable"
adem@adem:~$ echo $test1
global variable

export tanimlamasi sayesinde tanimlama sayesinde, alt kabuklarda da test1 isimli degiskene erisebiliyoruz.
Yani test1 degisken i hem mevcut kabuklarda hem de alt kabuklarda gecerli olan bir degiskendir

adem@adem:~$ su adem54
Password: 
adem54@adem:/home/adem$ echo $test1
global variable
adem54@adem:/home/adem$ 

GECISI adem kullanicinin kabugundan yapiyoruz ve gecis yaptgimz adem54 kullanicisinin kabuugna, adem kullanicisin kabugundaki degiskenler export ediliyor...

!Buraya dikkat edersek, biz adem kullanicisi kabugunda, home dizinsinde, yani adem kullanicsinin kendi home u olan /home/adem dizisnde oldugumz icin, adem@adem:~$ , gecis yapgimz adem54 kullanici kabuguda, home dizininde acilacaktir!!!!! 

EGER BIZ ADEM KULLLANICISI KABUGUNDA IKEN SU ILE GECIS YAPARKEN MEVCUT KABUGUN ALT KABUGU BASLATILARAK GECIS YAPILMASINI ISTEMEZ ISEK O ZAMAN SU KOMUTUNU ASAGIDAKI GIBI KULLANARAK, GECIS YAPARIZ 

SU - ADEM54 
O ZAMAN DA TABI KI ARTIK ADEM KULLANICISI KABUGUNDA IKEN EXPORT ILE TANIMLANMIS DEGIKSENLER MEVCUT KABUKTAN GECIS  YAPILAN KABUGA AKTARILAMAYCAKTIR VE, YENI BASLATILAN KABUK, MEVCUT KABUGUN BIR ALT KABUGU DEGIL TAMAMEN AYRI, SIFIRDAN BASLATILMIS BIR KABUK OLARAK BASLATILACAKTIR

adem@adem:~$ echo $test1
global variable
adem@adem:~$ su - adem54
Password: 
adem54@adem:~$ echo $test1

adem54@adem:~$ 

!su - adem54 kullanarak adem kullanicisi icin kullanilan mevcut kabuktan, adem54 kullanicisi ile baslatilan kabuga gecerken, global degiskenler, mevcut calisma dizin gibi bilgiler adem54 kullanici kabuguna aktarilmamis oldu!!
!BU KULLANIM SISTEM YONETICILERI TARAFINDAN GUVENLIK GEREKCESI ILE SIKLIKLA KULLANILIR
CUNKU KULLANICI YANI KABUK DEGISITIRIRKEN, DEGISTIRILEN KABUKTA AKTARILMASI ISTENMEYEN ORTAM DEGISKENLERI TANIMLANMIS  VE BU DEGISKENLER YENI GECILECEK KABUK ICIN GUVENLIK TEHLIKESI OLUSTURUYOR OLABILIR

DAHA GUVENLI OLDUGU ICN KULLANICI GECISLERINDE SU - ADEM54 KOMUTUNU KULLANARAK GECMEK DAHA GUVENLI VE DAHA MANTIKLIDIR

!KULLANICI HESAPLARINI SILMEK!
-r(recursive) kullanarak silinmelidir
sudo userdel -r adem54

adem@adem:~$ sudo userdel -r adem54
userdel: adem54 mail spool (/var/mail/adem54) not found
adem@adem:~$ ls /home
adem  admin
adem@adem:~$

adem@adem:~$ ls /home
adem  admin
adem@adem:~$ grep "adem54" /etc/passwd
SONUC YOK!!!CUNKU adem54 kullanicsi silindi

BU SEKILDE SILINDIGINI DE GOREBILIRIZ

!Bizim sistemmizmideki tum kullanicilari biz ls /home yaparak gorebiliriz, cunku her yeni kullanici olustugunda, /home altinda o kullanici isminde bir klasor olsuturulacaktir!!!! 

BU SILME ISLEMINDE BU adem54 kullanicsina ait /home/ altndaki adem54 diziini ile , bu kullanici ini /etc/passwd icindeki kayit bilgisi siliniyor. 
-Eger sistemin farkli konumlarinda bu kullaniclara ait dosya ve dizinler var ise onlar tabi ki silinmemis oldu.
-Eger silinen kullaniciya ait farkli konumlarda dosya ve dizinleri  de silmek istersek, find aracini kullanabiliriz

!find aracinin kullanicinin olusturmus oldugu dosyalara ozel silme islemi gerceklestirebiliriz.Xargs, find , pipe araclarini kullanarak bu islemi gerceklestirebiliriz.Ama silem islemleri yaparken her zaman dikkatli olmaliyiz, cunku kullanici kendisi silinse bile onu olusturudgu dosya tum sistemin isleyisine katkida bulunan bir dosya ise ve biz onu silersek, sistem e zarar verebiliriz. 
BOYLE SILME ISLEMLERI ONCESINDE NE YAPTIGIMZDAN IYICE EMIN OLMALIYIZ...YOKSA SISTEME ZARAR VERICI HAMLELELER YAPABILIRIZ

!deluser komutu ile de silme islemnini yapabiliriz

!DISK  YONETIMI
Disk islemlerini bizim isletim sistemlerinde cok iyi bilmemiz gerekiyor
Veri nedir, ve nasil olculur:
Bilgisyarlar 0:sinyal yok(dusuk akim), 1:sinyalvar(yuksek akim)
01 lerden olusan veri kumesine binary(ikili kod) diyoruz 
0-1 bunlar bilgisyarin en kucuk veri birimi olan bit ile ifade edilir
bit ifadesi b ile temsil edilir
Her bir 0 veya 1 karakteri 1 bittir
8 tane 0 veya 1 in yanyana gelmesi, yani karisik sirayla da gelebilir, 8 tane 0 ya da 1 karakterinin yanyana gelmesi ile 1 byte olusur

0 1 0 1 0 1 0 1 => 8 bit yanayana gelerek 1 byte i olusturur

bit->b ile temsil edilir
byte->B ile gosterilir, temsil edilir

Dolayisi ile 1 byte 8 bitten olustugundan, Kendi icerisindeki kombinasyondan 
2 uzeri 2^8(2 uzeri 8=256 farkli degeri temsil edebiliyor)
Bu byte lar da ASCII olarak isimlendirilmis standartlarca belirlenmis olan ozel karakterlere karsilik geliyor


  Letter      ASCII CODE      Binary 
  a            097           01100001
  A            065           01000001
  b            098           01100010

  ASCII kodlarinin hesaplanmasinin da bir mantigi var bunu da arastirirsak ogrenebiliriz, eger ihtiyac duyarsak.

  Biz bilgisyarda KLAVYEDE A KARAKTERINE TIKLADIGMZDA BU A KARAKTERI
  A KARAKTERI -8BIT=1BYTE OLAN  01000001 BINARY(IKILI KOD) A KARSILIK GELIYOR

  !BIZ NORMAL SAYILARI 10 LU SISTEM OLAN DECIMAL ILE GOSTERIRIRZ!!!
  !BILGISYARLARDA 2 LI GOSTERIMLE GOSTERILIR BUNUN ADI DA BINARY DIR!!!!

  1024(2^10) bytes = 1 kilobyte
  1024(2^10) kilobyte = 1 Megabyte
  1024(2^10) megabyte = 1 GB
  1024(2^10) gigabyte = 1 TB
  1024(2^10) terabyte = 1 PB(petabyte)
  1024(2^10) petabyte = 1 EB(exabyte)
  1024(2^10) exabyte = 1 ZB(zettabyte)
  1024(2^10) zettabyte = 1 YB(yottabyte)


  disk altinda 'lost+found' isminde bir klsor vardir
  Bu klasor un gorevi, ani sekilde elektrik kesintisi vs sornu yasanir ve aniden eelektrik baglnti kaybedilir ise, disk kontrol edilip kurtarilabilmis veriler, sistem yeniden baslatildiginda, diskte hangi konumda olacagi belirlenememis veriler bu klasore gonderilir. Kaybolan verileri burda bulabiiliriz!!


  Burda bir disk bolumu tek bir konuma bagladik istersek birden fazla konuma da baglayabliriz. Veya baska dizinlere de baglayabiliriz. Bu sekilde bu dizin bolumune birden fazla dizin bolumne de ulasilabilir. Cunku olusturulan klasorler yalnizca bu disk bolumne kolayca ulasilmasini saglayan bir gecit kapisi gorevi goruyor. Yani bu klasorler gecit kapisi gibi oldugu icin birden fazla gecit kapisi da olusturabiliuyoruz

  mkdir new-entrance

  mount /dev/sda1 new-entrance/

  yapabilirz ve bundan sonra tekrar 

  lsblk ile cek edersek artik sda1 in MOUNTPOINTS DEGERINDE 2 AYRI DOSYA KONUMU, YANI GIRISI VERILDIGNI GOREIBLIRIZ!!! YANI BU DISK BOLUMUNUN 2 GIRIS KAPISI VAR GIBI DUSNEBILIRIZ, HER IKI KONUMA DA VERI GONDEREREK BIZ ASLINDA SDA1 DISK BOLUMUNE YAZILMASNI SAGLAMIS OLUYORUZ!!
  AMA BU SEKILDE YAPMAK COK ONERILMEZ, KARMASIKLIGA SEBEP OLMA DURUMUNDAN DOLAYI.
  BU KLASORLER DISK ICIN GIRIS KAPILARI OLDUGU ICIN BIZ BU KLASORLER  UZERIJNE ISLEM YAPTIGMZDA VE YETKILENDIRME YAPTGIMZDA ASLINDA, BU DISK BOLUMU UZERINDE ISLEM YAPIYORUZ, GERCEKTEN BU KLASORLER UZERINDE ISLEM YAPMIYORUZ, SDA1 DISK BOLUMUNU TEMSIL EDEN KLASORLER UZERINDE ISLEM YAPIUYORUZ
  ISLETIM SISTEMI UZERINDEN ERISMEK ICN BU KLSAORLER, BU KONUMLAR(MOUNTPONTSDE GOZUKEN) KULLANILIYOR.BUNLAR YALNIZCA TEMSILDIR..YANI
*/


?>

