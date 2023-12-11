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
Ornegin isletim sistemimize bir aygit bagladigimizda, bu aygit hakkinda bilgi almak icin

*/





?>

