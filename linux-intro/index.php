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

!ls -l *.png (uzantisi png olanlari listele)

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

!Skstirilmis arsiv dosyasinin spesiifik bir klasor altinda acilmasi 
!tar -xzvf example.tar.gz -C /home/adem



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

  1024(2^10) - 100MB bytes = 1 kilobyte
  1024(2^10) - 100MB kilobyte = 1 Megabyte
  1024(2^10) - 100MB megabyte = 1 GB
  1024(2^10) - 100MB gigabyte = 1 TB
  1024(2^10) - 100MB terabyte = 1 PB(petabyte)
  1024(2^10) - 100MB petabyte = 1 EB(exabyte)
  1024(2^10) - 100MB exabyte = 1 ZB(zettabyte)
  1024(2^10) - 100MB zettabyte = 1 YB(yottabyte)

  Bunlar bu sekilde internette bulabiliyoruz ama sanilanin aksine 
  1GB 1024 MB degildir 1000MB dir.
  Ornegin sistem uzerine bagladigmz 1TB lik bir disk sistem uzerinde 931Gb olarak gozukuyor. Cunku depolama alaninin buyuklugu TB dan GB a donusturuluyor.
  Bilgisayarlar GB biriminden anliyorlar ve 2 li, yabi binary sayi sistemini kullandiklari icin, 10 luk(decimal) gosterimden 2 lik duzene geciste bu farklar ortya cikabiliyor

  !ONEMLI BIR ACIKLAMA 1GB=1000mb MI YOKSA 1024MB?

  In the context of digital storage, the prefixes for units like kilobyte (KB), megabyte (MB), and gigabyte (GB) are commonly used in two different ways: the binary (base-2) system and the decimal (base-10) system. The difference lies in how these units are defined:

Binary (Base-2) System:
1 kilobyte (KB) = 1024 bytes
1 megabyte (MB) = 1024 kilobytes (KB)
1 gigabyte (GB) = 1024 megabytes (MB)
This is the definition commonly used in computing and digital storage. It's based on powers of 2 (2^10 = 1024), and it's used because computers operate in binary and powers of 2 are convenient for addressing memory locations.

Decimal (Base-10) System:
1 kilobyte (KB) = 1000 bytes
1 megabyte (MB) = 1000 kilobytes (KB)
1 gigabyte (GB) = 1000 megabytes (MB)
The decimal system is more commonly used in the International System of Units (SI), which is the standard system of measurement for most non-computing applications. It's based on powers of 10.

!BU SONUCA GORE BILMEMIZ GEREKEN ONEMLI BIR NOKTA DA SUDUR KI!!!!!

As a result, when you see a file size on your computer or device, it's often reported in binary units (1 MB = 1024 KB), but when manufacturers advertise storage capacities, they may use decimal units (1 GB = 1000 MB).. Based on this explanation, for example if I have a 512Gb disk, it is 500Gb and I can not store the data exacttly 512Gb?

That's correct. When manufacturers advertise storage capacities, they typically use the decimal system (1 GB = 1000 MB) to make the capacity appear larger, which can be somewhat misleading. So, if you have a disk drive that is advertised as 512 GB, it means the manufacturer is using the decimal definition of gigabytes, and the actual storage capacity, when measured in binary gigabytes, will be slightly less.

To calculate the approximate binary gigabyte (GiB) equivalent of a 512 GB disk:

512 GB * (1024 MiB/1 GB) * (1024 KiB/1 MiB) * (1024 B/1 KiB) = approximately 476.84 GiB

So, your 512 GB disk drive will have a usable storage capacity of approximately 476.84 GiB when measured in binary units. This is due to the difference in how storage capacity is defined in the decimal system (used by manufacturers for marketing) and the binary system (used by operating systems and software for storage calculations). Keep this in mind when planning your storage needs and selecting storage devices.

!VERILER NASIL DEPOLANIR
8bit(10101010)=1bytes sektor ismi verilen noktalarda veya kutu larda depolanirlar
Standartta her bir sektor 512byte lik veri tutabiliyor
Sektor birimi haric birde isletim sistemleri icin gruplanmis Blok isminde birimler bulunuyyor
!Blok:Isletim sistemlerinin adressleyebilecegi yani isaret edebilecegi sektorlerden yani sektor grubundan olusuyor.
1 blok 1 sektorden de olusabilir ya da 2 li 4 lu 8 li 16 li gibi birden cok sektorun bir araya gelmesi ile de olusturulabilir
Bllok dosya sisteminin adresleyebilecegi en kucuk depolama birimini temsil eden bir soyutlamadir

Hatirlarsak inode kavramindan bahsederken, inode un verilerin hangi bloklarda yer aldigini soyleyen bir yapi oldugundan bahsetmistik
Verilerin disk uzerinde bloklar halinde tutulmasinin sebebi, diskin en verimli bir sekilde isletim sistemi tarafindan yonetilmesini saglamaktir

Bahsedilen bloklama fiziksell olarak boyle bir gruplama soz konusu degil, bu soyut olarak sektorlerin



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

Disk Yonetimi!
Verilen Nasil Depolanir:
Isletim sisteminin emirleri dogrultusunda bir distken veri okurken veya yazarken veriler bloklar halinde okunyor veya yaziliyor.Bu fiziksel diskte olan birsey degil, bu soyutsal birsey, tamamen isletim sistemi ile donanim arasindaki bir soyutlamadan kaynaklaniyor.
Ornegin linux sisteminin varsayilan dosya sistemi formati olan ext4 un standart boyutu 4096byte
Disk uzerinde en kucuk birim olan tek bir sektor de 512 byte veri tutabildigi icin bize soyutlama katmani sunan ext4 varsayilan olarak ele aldigi en kucuk disk birimi 8 sektorden meydana gelmis olan tek bir blok oluyor.

Yani ext4 dosya sistemine sahip olan disk bolumlerine veriler yazilirken veya bu veriler okunurken, disk uzeirnde 4096 byte a karsilik gelen 8'er sektorluk(her bir sektor 256 byte) birimler kullaniliyor. Bu da her bir veri kumesi icin 4096 byte lik veri bloklarinin kullanilacagi anlamina geliyor

Bir metin belgesi olusturup icerisine sadece 1 karakter yazarsak 'x' diye, bu 1 byte a karsiliik gelir.

ASCII TABLOSUNA BAKARSAK 1 KARAKTER, YANI 
DECIMAL-NORMAL BIZIM ANLADIGMZ ACIDAN 1 KARAKTER 1 BYTE A KARSILIK GELIR AMA 1BYTE=8BIT OLDUGU ICIN 
1 BYTE 256 FARKLI VALUES I TEMSIL EDEBILIR BUNLARIN HEPSI 1 KARAKTERDEN OLUSMUYYOR, BUNLAR ICINDE 3 KARAKTERDEN OLUSAN DA VAR..AMA 1 KARAKTER YAZINCA BU 1 BYTE' A KARSILIK GELIR NETICE ITIBARI ILE , AMA 1 BYTE ILLA KI DE 1 KARAKTER E KARSILIK GELECEK DIYE BIRSEY YOKTUR, 1 BYTE 256 FARKLI DEGER I TEMSIL EDIYOR..

!BURASI COK ONEMLI COKK DOGRU VE IYI ANLAMAK GEREK!

1byte("A")=8bit(0100 0001)
AMA BIZIM ALFABEMIZE GORE DUSUNMEYELIM.. 

BUNLARI ASCII TABLOSUNDAN GOREBILIRIZ..1 BYTE 256 FARKLI DEGERI TEMSIL EDEBILIR!!!!BUNU IYI ANLAYALIM!!!!!

A = 1BYTE=8BIT(0100 0001)
BEL=1BYTE=8BIT(0000 0111)
BS=1BYTE=8BIT(0000 1000)


065	101	41	0100 0001	A
007	007	07	0000 0111	BEL	bell
008	010	08	0000 1000	BS	backspace


Biz bir dosya olusturup icerisine 1 harf girdigimz zaman, bu 1 byte lik yer kapliyor disk uzerinde ama, bunu yazmak icin blok ousturuldugu icin ve bir blok 4096byte yani 8sektor(512byte*8) den olustugu icin, biz sadece 1 byte lik veri yazsak bile, olusturulan dosya ve icine yazilan tek bir karakter disk uzerinde 4096(4kb) lik alan kaplamasina sebep olacaktir!!!!

Cunku mevcut dosya sisteminin kontrol edebilecegi en kucuk  birim 4096 byte lik  bloktur

HEMEN BUNU TEST EDELIM!!!!

adem@adem:~$ cat > mytest
1
adem@adem:~$ cat mytest
1
adem@adem:~$ stat mytest
  File: mytest
  Size: 2(byte)         	Blocks: 8(sektoru temsil ediyor)          IO(input-output) Block: 4096(byte lik yer kapliyor)   regular file
Device: 803h/2051d	Inode: 5690340(disk uzerinde verinin hangi blokta bulundugu bilgisi)     Links: 1
Access: (0664/-rw-rw-r--)  Uid: ( 1000/    adem)   Gid: ( 1000/    adem)
Access: 2024-01-03 10:40:24.146124414 +0100
Modify: 2024-01-03 10:40:19.558069208 +0100
Change: 2024-01-03 10:40:19.558069208 +0100
 Birth: 2024-01-03 10:40:18.482056259 +0100
adem@adem:~$ 

SIMDI SORUMUZ SU: NEDEN BIZ mytest dosyasmiziin icine sadece '1' karakterini  yazmamiza ragmen, bu 1 byte lik degil de 2 byte lik yer kapladi?????????
CUNKU:
Biz '1' karakterini yazdiktan sonra, enter a bastik o satir sonunda  ve, biz enter a basinca, linux de satir sonuna bir alt satira gecmeyi saglayan bir '\n' karakterini eklemis oldu bu da dolayisi le 1 byte lik degil, 2 byte lik yer kaplamasin saglamis oluyor!!!!!!
'1' '\n'(newline character)   

Eger biz newline character olusturmak istemezsek o zaman
echo -n '1' > mytest
bu sekilde girersek, newlince character olusturmadan dosya icine 1 karakterlik veri yazar ve 1 byte olur!!!

TEKRAN ANA KONUMUZA DONECEK OLURSAK, NETICE DE BIZ BIR DOSYA OLUSTURUP ICERISINE TEK BIR KARAKTER GIRDGIMZDE, FARKETMEDEN ENTER A BASINCA SATIR SONU KARAKTERI OLAN '\N' EKLENDIGINDE 2 BYTE LIK YER KAPLAR AMA DISK UZERINDE BU VERI 1 BLOK OLUSTURULUP O BLOK ICINDEKI 8 SEKTOR DEN BIR SEKTORE YAZILACAGI ICIN, HER HARUKARDA DISK UZERINDE 4096BYTE LIK ALAN KAPLANMIS OLACAK!!!!!

BUNDAN EMIN OLMAK ICIN DOSYA BOYUTUNU BIR BLOK U ASACAK SEKILDE ICERISINE DATA YAZARAK KONTROL EDEBILIRIZ!!!!


adem@adem:~$ echo {1..1045} > mytest2

adem@adem:~$ stat mytest2
  File: mytest2
  Size: 4118(byte)      	Blocks: 16         IO Block: 4096   regular file
Device: 803h/2051d	Inode: 5690473     Links: 1
Access: (0664/-rw-rw-r--)  Uid: ( 1000/    adem)   Gid: ( 1000/    adem)
Access: 2024-01-03 10:52:19.842566895 +0100
Modify: 2024-01-03 10:52:14.746507531 +0100
Change: 2024-01-03 10:52:14.746507531 +0100
 Birth: 2024-01-03 10:52:14.742507484 +0100

 DOSYA BOYUTU 4118 BYTE , YANI 1 BLOK=4096 BYTE IDI, 1 BLOKTAN BIRAZCK FAZLA YER TUTTUTU ICIN, Blocks: 16, 16 SEKTORLUK  YER KAPLIYOR(HER SEKTOR 512BYTE, 1 BLOK 4096BYTE IDI)

 VERILERIMIZ DOSYA SISTEMLERININ SAHIP OLDUGU BLOK BOYUTLARINA GORE VERILERIMIZ BLOKLAR HALINDE DISKTE DEPOLANIYOR VE TEKRAR OKUNMALARI GEREKTIGINDE DE BU BLOKLAR UZERINDE OKUNUYOR!!!

 DOSYA SISTEMI BLOKTAN DAHA KUCUK BIR ALANA ADRESLEME YAPAMIYOR, ULASAMIYOR, DAHA KUCUK PARCALARA BOLEMIYOR
 ONDA DOLAYI 1 BYTELIK DOSYA BILE OLSA 4096 BYTE ALAN KAPLAYAN BLOK(8SEKTOR(1SEKTOR=512BYTE)) KULLANILMAK ZORUNDADIR

 stats mytest2

 Inode: 5690473:DOSYANIN HANGI BLOKTA OLDUGUNU SOYLER, INDEX NUMARASIDIR..
 VERI BULUNURKEN BLOK OLARAK ARANIR, VE BLOK BULUNUR... 
 
 Biz kucuk veriler kullanacagimz zaman, Kucuk blok boyut kullanmamiz mantikli iken daha buyuk boyutlu veriler icin ise, Buyuk Blok Boyut kullanilabilir!!!!

 Kucuk Blok Boyutu     -   Buyuk Blok Boyutu 

 Blok sayisi fazla     - Blok sayisi az 
 Verilere ulasim yavas - Verilere ulasim hizli 
Alan tasarrufu         - Alan ziyani

Biz mumkun oldugunca kullandigmz dosya sisteminde varsayilan blok boyutunu tercih etmemiz, tavsiye ediliyor. Herhangi bir degisiklik yapmadan!!!!

BOLUMLENDIRME TABLOSU | MBR - GPT
Fiziksel olarak sahip oldugmuz bu diskleri yazilmisal olarak isletim sistemi ozellikleri ile, istedgimz kadar bolumlendirebiliyoruz.
Hangi disk bolumunun, nerde baslayip nerde bittigini de bolumlendirme tablosu olan MBR - GPT tablolarinda tutuluyor

MBR TABLOSU
Gecmiste kalmis bir tablo olarak bilinir ve hala gunumuzde de fazla ca kullaniliyor
Maksimum 2Tb a kadar olan disk boyutlarini destekleyen bir cozum. Ayrica MBR disk bolumleme tablosu kullanilarak, diskimizi yalnizca 4 adet birincil bolume ayirabiliyoruz
Yine de 1. bolumler cogunlukla yeterli gelmedigi icin genisletilmis bolum kullaniliyor
Maksimum 3 birincil ve 1 genisletilmis bolum uzerinden 1 mantksal bolum olmak uzere toplamn 15 tane bolum olsuturulablir

GPT TABLOSU 
Zaman icerisinde dikslerin artmasi ve disklerin, daha fazla alana bolunmesi ihtiyaci dogrultusunda MBR in yetersiz klaldigi noktada gelistirilmis olan yeni nesil bir disk-bolumleme cozumudur, tablosudur 

8zib e kadar disk boyutlari ni destekler. Yeni nesil buyuklukler icin kullanilabilen bir disk bolumleme tablosudur
Ayrica GPT sayesinde diskmizi 128 bolume ayirmamiz da mumkundur. 
Primary ve extended diye ayrim yoktur, tum bolumler primary olarak ayriliyor!!!!

Ozetle MBR  a oranla GPT hem maksimum boyut hem de bolum sayisi ile cok daha gelismis ve kullanisli bir disk bolumlendirme tablosu ozelligi sunuyor

!! BIOS UEFI HAKKINDA !!!

Bilgisayarimzin baslangic asamasindan sorumlu olan yapilardir!
BIOS daha eski bir  yaklasim, 
UEFI yeni donemin ihtiyaclarina yanit vermek icin  gelistirilmis olan bir cozumdur!!!

ASLINDA BIZ BILGISAYARIMZI BASLATTIGIMIZDA 

BIOS VEYA UEFI(modern sistemlerde UEFI), oncelikle donanimlari kontrol ederler!!
EGer donanimlarda bir sorun yoksa, sorunsuz ise, belirlenmis olan oncelik sirasina gore, konfigurasyonlarda nasil belirledi isek, yani BIOS VEYA UEFI ayarlarnda nasil belirlendi isek, belirlemis oldugumzu oncelik sirasin gore siralamadaki ilk diski baslatiyor!!!

ILK SIRADAKI DISKIMIZ BIOS VEYA UEFI SAYESINDE BASLATILDIKTAN SONRA, BU DISKTEKI BOLUMLENDIRME TABLOSU(MBR VEYA GPT), KONTROL EDILIYOR, BOLUMLENDIRME TABLOSUNDA DA HANGI BOLUM BOOT EDILEDCEK YANI ON YUKLENECEK BOLUM OLARAK ISARETLENMISE, O BOLUMUN ON YUKLENMESI SAGLANIYOR
ZATEN BOOT BOLUMUNDE DE GENELLIKLE BOOT-LOADER OLARAK GECEN, ISLETIM SISTEMININ BASLATILMASI ICIN GEREKLI OLAN CEKIRDEK GIBI YAPILARI YUKLEMEYI SAGLAYAN BIR ARAC BULUNUYOR BU SAYEDE BOOT-LOADER UZERINDEN ILGILI ISLETIM SISTEMI BASLATILMIS OLUYOR
YANI CEKIRDEK YUKLENDIGI ICIN, SISTEMIN BASLATILMASI ICIN GEREKLI OLAN YAPILAR YUKLENDIIGI ICIN, SISTEMIMIZDE BASLATILMIS OLUYOR!!

ORNEGIN BIZDE EGER BIRDEN FAZLA ISLETIM SISTEMI YUKLIU ISE BU BOOTLOADER YAZILIMI UZERINDEN ISTEGIMIZ ISLETIM SISTEMININ BASLATILMASINI SAGLAYABLIYORUZ!!!!
HANGI ISLETIM SISTEMINI BASLATMAK ISTEDGIMMZ BASLANGIC ASAMASINDA SORULUYR BU YAZILIM TARAFINDAN!!!BUNA DENK GELMISIZDIR MUTLAKA, BIR PC DE 1 DEN FAZLA ISLETIM SISTEMI KULLANDI ISEK, ISTE BIZE BU SORGUYU SAGLAYAN BOOT-LOADER EKRANIDIR

LINUX DE GENELLLIKLE BOOT-LOADER OLARAK GRUB ISIMLI ARAC KULLANILIYOR

ISLETIM SISTEMI BIOS KULLANIYOR ISE MBR DISK BOLUMLEME TABLOSU KULLANILIYOR VE ISLETIM SISTEMINI BASLATACGZIM USB DISKLERDE MBR DISK BOLUMLEMEYI I TANIMLAMAMIZ GEREKIYOR 
ISLETIM SISTEMI UEFI ISE GPT DISK BOLUMLEME TABLOSUNU KULLANILIYOR, BURDDA  GPT DISK BOLUMLEME TANIMLAMAMIZ GEREKIYOR
ISLETIM SISTEMI UEFI AYRICA MBR DISK BOLUMLEMEYI DA TANIYOR YENI MODERN YAPILAR ESKI OLAN MBR DISK BOLULEMEYI DE TANIYABILIOYR 

BIOS : SADECE MBR 
UEFI: HEM GPT , HEM DE MBR KULLANILIR 
AMA GENELLIKLE UEFI ILE GPT DISK BOLUMLEME KULLANILIR

DOSYA SISTEMI NEDIR? 

Dosya sistemi olmadan diske yazilan verilere ihtiyacimz oldugunda erisemeyiz.
Dosya sistemi olmaazsa veriler ust uste yiginlar halinde biriktirilecegi icin, herhangi bir sistem olmayacagi icin asagi yukari bu sekilde gozukecek

Dosya sistemi sayesinde veriler duzenli bir seklide yerlestiriliyor ve yazildiklari konumdan tekrar kolay bir sekilde ulasilabiliyor!!
Disklerimize dosya sistemini tanimladigmz icin ve isletim sistemleri de bu dosya sistemlerini tanidigi icin ve bu dosya sistemleirni davranislarni bildigi icin, diskteki verileri nasil okuyacagini, hangi sistemle tutuldugunu bildigi icin, rahatlikla bilebiliyor. Bu sayede veriler yazabiliyor, yazilmis olan verileri de rahatlikla okuyabiliyor. Bu sebeple dosya sistemi olmazsa olmazdir

Veri okuma, yazma, okunan verileri ulasma, bunlar icin bir standarta ihtiyacimz var bunlari da dosya sistemleri sagliyor

Tek bir fiziksel diskimzi yazilimsal olark birden fazla bolume ayirabildigmz icin, de aslnda ayni fiziksel disk uzerinde farkli bolumlerde, birbirinden farkli dosya sistemlerini kullanmamiz da mumkun oluyor. 
Bu sayede ayni disk aygiti uzerinden ihtiyaca yonelik olarak, farkli dosya sistemerlini kullanabiliyoruz. 

Diski bolumledikten sonra isimizi bitmiyor, bu disk bolum u icerisine de hangi dosya sistemini  kullanacagmizi tanimlamamiz gerekiyor, aksi halde mevcut isletim sistemleri uzerinden , diskimz uzerindeki verilere ulasmamiz mumkun olmuyor. Cunk u dosya sistemleri verilerin diske nasil depolandigi ve nasil tekrar erisilebilecegi konusunda isletim sistemlerine izahat veriyor, isletim sisteminin bunu nasil yapabilecegini acikliyor.

Bu dosya sistemi oldugu ve isletim sistemi bu dosya sistemini tanidigi ve kullanabildigi surece, diskmize veri yazip okuyabiliyoruz...CUNKU DOSYA SISTEMLERI ASLINDA BU VERILERIN SISTEMATIK OLARAK NASIL DEPOLANACAGINI BELIRLIYOR DAHA SONRA ISLETIM SISTEMLERI DE BU VERILERIN NASIL SISTEMATIK OLARAK DEPLANDIGINI BILDIGI ICIN AYNI SEKLIDE DOGRU YONETMLERLE BU VERILERE ULASABILIYOR VEYA yazabiliyor


LINUX SISTEMINI DOSYA SISTEMI HIYERARSISI

Tum dosyalar kok dizinden baslar ve kok dizinin alt klasorlerinde hiyerarsik duzende tutuluyor
Tum dosya ve klasorler / kok diizin - root diznin altindadir
/ =>Kok dizin

/var
/etc
/usr 
/tmp
/home 
/bin 
/mnt 
/lib
/sys

Linux sistemini olusturan dosya ve klasorler tek bir kok-root dizin altinda bulunuyor gibi gozukuyor olsa da aslinda linux, farkli dizinlere, farkli disk bolumlerini baglmaayi mumkun kildigi icin, aslinda kok dizin altinda gozuken ancak, birbirinden farkli disk bolumlerinde birbriinden farkli dosya sistemlerine sahip olan klsorlerimimiz bu tek bir dizin hiyerarsisi uzerinde goruntuleyebiliyoruz
Yani hepsi kok dizin icinde gozukuyor olsa da hepsi farkli disk bolumlerinde yer aliyor olabilir
Orneign biz /etc klasorunu farkli bir diskteki farkli bir diks bolumune baglayabiliriz, bu kok-root dizin altinda olsalar bile , alt klasorler farkli diskler uzerinde depolanabiliyor.
Dolayisi ile biz tek bir hiyerarsik yapi goruyoruz ama, aslinda sistem istedgimz olcude dagitabilecegimz, istedgimz disklerde, istedgimz verileri barindirabilecegimz bir yapidadir aslinda. 

WINDOWS DA C(ISLETIM SISTEMI KURULU OLAN ANA DISK),D(EK DISK),E(EK DISK) DISKLERI BULUNUYOR..
EK DISK AYGITLARININ SISTEME BAGLANMASI ILE SISTEM TARAFINDAN TANINIYOR
LINUX SISTEMINDE ISE TUM DISK AYGITLARI KOK DIZIN ALTINDAKI UYGUN KLASORE BAGLANARAK KULLANILABLIYOR!
LINUX SISTEMI WINDOWSTAN FARKLI OLARAK TEKIL HIYEARSI YAPISI NI KULLANDIGI ICIN, SISTEMMIMIZE BAGLAMIS OLDUGMUZ TUM DISK BOLUMLERI DE BU HIYERARSI ICERISINDE UYGUN BIR KONUMA BAGLANIYOR. DOLAYISI ILE TUM DISKLERDE BU TEKIL HIYERARSI ICERISINDE YERINI ALIYOR


Linux sisteminin destekledigi dosya sistemlerini gormek icin:

Linux destekledigi birden fazla  dosya sistemleri vardir: 

adem@adem:~$ cat /proc/filesystems 
nodev	sysfs
nodev	tmpfs
nodev	bdev
nodev	proc
nodev	cgroup
nodev	cgroup2
nodev	cpuset
ext3
ext2
ext4
squashfs
vfat
nodev	ecryptfs
fuseblk

. 
. 
nodev	mqueue
nodev	pstore
nodev	autofs
nodev	binfmt_misc
Bazilari sanal dosya sistemleri, hepsi canli dosya sistemi degil
adem@adem:~$ 

Dolasyisi ile ilgili disk aygiti veya bolumu, linux un destekledigi bu dosya sistemlerinden birini kullaniyor ise,
linux bu diske veri yazip veri okuyabilir.

Dosya sistemleri de ihtiayca gore, kullanilabiliyor. Dosya sistemlerinin de kendi icerisinde farkliliklari vardir, avantajlari ve dezavantajlari gibi..

Biz cok yaygin bir sekilde kullanilan ext4 dosya sistemini  kullanacagiz!!!

DISK ISLEMLERINE HAZIRLIK - DISK UZERINDE ISLEM GERCEKLESTIREBILECEK GUVENLI ORTAMI KURMAK!!

Disk islemleri yaparken, verilerimzin kaybolma riski olusabilir, yapacagimiz hatali disk islemleri sonucunda ondan dolayi da varsa imkan bu disk islemleri ile ilgili daha iyi ogrenmek icin yapacagmiz pratikleri sanal makine uzerinde kurdgumuz linux sisteminde yaparsak, bu risk i ortadan kaldirmis oluruz ve istedgimz gibi uygulama  yapaiblirz

DISK AYGITLARINI LISTELEMEK

lsblk(list blokdevices)

NAME   MAJ:MIN RM(REMOVABLE)   SIZE RO(READONLY) TYPE MOUNTPOINTS
REMOVABLE-1-YES-0-NO
READONLY:1-YES-O-NO
TYPE KISMI ISI DISK IN BIRIMINI BELIRTIYOR
loop0    7:0    0     4K  1 loop /snap/bare/5
loop1    7:1    0  63,9M  1 loop /snap/core20/2105
loop2    7:2    0 302,6M  1 loop /snap/code/147
loop4    7:4    0  63,5M  1 loop /snap/core20/2015
loop5    7:5    0  74,1M  1 loop /snap/core22/1033
loop6    7:6    0  73,9M  1 loop /snap/core22/864
loop7    7:7    0 240,3M  1 loop /snap/firefox/3358
loop8    7:8    0 245,6M  1 loop /snap/firefox/3416
loop9    7:9    0 349,7M  1 loop /snap/gnome-3-38-2004/140
loop10   7:10   0 349,7M  1 loop /snap/gnome-3-38-2004/143
loop11   7:11   0 496,9M  1 loop /snap/gnome-42-2204/132
loop12   7:12   0   497M  1 loop /snap/gnome-42-2204/141
loop13   7:13   0  91,7M  1 loop /snap/gtk-common-themes/1535
loop14   7:14   0   9,6M  1 loop /snap/htop/3758
loop15   7:15   0   9,6M  1 loop /snap/htop/3873
loop16   7:16   0  45,9M  1 loop /snap/snap-store/638
loop17   7:17   0  12,3M  1 loop /snap/snap-store/959
loop18   7:18   0  40,8M  1 loop /snap/snapd/20092
loop19   7:19   0  40,9M  1 loop /snap/snapd/20290
loop20   7:20   0   452K  1 loop /snap/snapd-desktop-integration/83
loop21   7:21   0   428K  1 loop /snap/snapd-desktop-integration/57
loop22   7:22   0 302,6M  1 loop /snap/code/148
sda      8:0    0 476,9G  0 disk 
├─sda1   8:1    0     1M  0 part 
├─sda2   8:2    0   513M  0 part /boot/efi
└─sda3   8:3    0 476,4G  0 part /var/snap/firefox/common/host-hunspell

In your output, the "TYPE" column indicates that the block devices are of type "loop," meaning they are loop devices.

These loop devices are associated with specific snap packages or applications running in isolation using snapd (a package management system). They are used to provide a contained environment for these applications, allowing them to have their own filesystems while sharing resources with the host system.

BU ISIMLER SISTEMIMIZE BAGLI OLAN ISIMLERI TEMSIL EDIYOR

DIKKAT EDELIM! 

sda      8:0    0 476,9G  0 disk 
├─sda1   8:1    0     1M  0 part 
├─sda2   8:2    0   513M  0 part /boot/efi
└─sda3   8:3    0 476,4G  0 part /var/snap/firefox/common/host-hunspell

DISKLERLE ILGLI BAZI KOMUTLRI HATILRYACAK OLURSAK EGER
fdisk -l komutu 
Bize sistemimizdeki diskler hakkinda bilgiler veriyor

df komutu
diskler ile iligli daha ayrintili bilgiler veriyor
df -h(humanreadable)

du komutu
bulundugmuz dizindeki dosyalarin boyutlarini veriyor
 du -h komutu 
 buludngumuz dosya dizinindeki dosyalarin boyutlarini mg-kb cinsiinden degerlerini verir
 free komutu 
 o anlik kullanilan bellek ile ilgili bilgileri veriyor
 toplam bellek, kullanilan miktar vs gibi bilgileri veriyor ve ne kadar musati yer oldugnu da veriyor


 adem@adem:~$ df -h
Filesystem      Size  Used Avail Use% Mounted on
tmpfs           1,6G  2,0M  1,6G   1% /run
/dev/sda3       468G  108G  337G  25% /
tmpfs           7,8G  249M  7,6G   4% /dev/shm
tmpfs           5,0M  4,0K  5,0M   1% /run/lock
/dev/sda2       512M  6,1M  506M   2% /boot/efi
tmpfs           1,6G  132K  1,6G   1% /run/user/1000

sudo fdisk -l 

Disk /dev/sda: 476,94 GiB, 512110190592 bytes, 1000215216 sectors
Disk model: SAMSUNG MZ7TE512
Units: sectors of 1 * 512 = 512 bytes
Sector size (logical/physical): 512 bytes / 512 bytes
I/O size (minimum/optimal): 512 bytes / 512 bytes
Disklabel type: gpt
Disk identifier: F15F2DBD-D9A0-4B38-BBF9-8C06FD56A98A

Device       Start        End   Sectors   Size Type
/dev/sda1     2048       4095      2048     1M BIOS boot
/dev/sda2     4096    1054719   1050624   513M EFI System
/dev/sda3  1054720 1000214527 999159808 476,4G Linux filesystem

isimleri bu sekilde verilmis cunku SATA DISK 
So, "sda3" is simply a way to identify the third partition on the first hard drive in your system, and it's commonly used as the root directory ("/") where the Linux operating system is installed.

Bu isimlendirmeler, LInux cekirdegi tarafindan gerceklestiriliyor 
Ve disklerin turune gore otomatik olarak gerceklestiriliyor.
Ayrica diskleri birden fazla bolumlere ayirabildigimz den dolayi sda diski sda1,sda2,sda3 diye bolumlere ayriliyor
Bu sekilde disk icinde birden fazla bolum olusturabilecegimzi gorebiliriz

lsblk -f ile de -f(file) diyerek filesystem hakkinda bilgi almak istegimzi belirtmis oluruz!

lsblk -f 


adem@adem:~$ lsblk -f
NAME FSTYPE FSVER LABEL UUID                                      FSAVAIL    FSUSE% MOUNTPOINTS  

sda                                                                         
├─sda1
│                                                                           
├─sda2
│    vfat   FAT32       DD16-DBE6                             505,9M     1% /boot/efi
└─sda3
     ext4   1.0         5683671f-c61b-4d45-a7b7-680740cf49ad  336,6G    23% /var/snap/firefox/common/host-hunspell
                                                                            /
sr0   

Gordugmz gibi sda(sata) diski  ext4 u filesystem olarak kullaniyor.

UUID-Her bir diskin ve disk bolumunun benzersiz bir id si bulunuyor. Bu id sayesinde biz sistemimizin herhangi bir yerinde bu diske veya bolumune sistemimiz uzerinden herhangi bir noktada ulasabiliyoruz! 
DISKLERIMZDEN BIR TANESI UZERINDEN KONFIGURASYON GERCEKLESTIRECEGIM ZAMAN BU ID YI KULLANIRIZ. HALI HAZIRDA SDA DIYE BIZ BUNU ISIMLENDIRYORUZ. BU ISIMLENDIRME, SISTEM NASIL BAGLANDI ISE, CEKIRDEKI UYGUN KOSULLRDA SIRASI ILE VERIYOR BURDA SIRA DEGISEBILIYOR.

SADECE SISTEMIIZ UZERINDE KULLANMAK TA OLDUGMUZ SDA DISKININ EXT4 DOSYS SISTEMI MEVCUTTUR
YENI OLUSTURULAN BIR DISK ICIN, EGER ICI BOS VE HERHANGI BIR ISLEM YAPILMAMIS ISE  O DISKLERE AIT DOSYA SISTEMI DE GOREMEYIZ.. 
BU DISKLERE NASIL DOSYA SISTEMI EKLENIR ONA DA BAKACAGIZ!!!


! fdisk araci | DISKLERI BOLUMLEMEK

fdisk hangi aygit uzerinde islem gerceklestireceksek o aygitin sistem uzerindeki, aygit ismini girmemiz gerekiyor!
Ilgili aygitin disk uzerinde sistemimize hangi isimle baglandigini bilmiyor olabiliriz.
Ogrenmek icin sudo fdisk -l yaparsk sistemimize bagli olan tum disklerin dosya karsiligi bilgilsi burda bulanabilir

adem@adem:~$ sudo fdisk -l
[sudo] password for adem: 
Disk /dev/loop0: 4 KiB, 4096 bytes, 8 sectors
Units: sectors of 1 * 512 = 512 bytes
Sector size (logical/physical): 512 bytes / 512 bytes
I/O size (minimum/optimal): 512 bytes / 512 bytes


Disk /dev/loop1: 63,91 MiB, 67014656 bytes, 130888 sectors
Units: sectors of 1 * 512 = 512 bytes
Sector size (logical/physical): 512 bytes / 512 bytes
I/O size (minimum/optimal): 512 bytes / 512 bytes


Disk /dev/sda: 476,94 GiB, 512110190592 bytes, 1000215216 sectors
Disk model: SAMSUNG MZ7TE512
Units: sectors of 1 * 512 = 512 bytes
Sector size (logical/physical): 512 bytes / 512 bytes
I/O size (minimum/optimal): 512 bytes / 512 bytes
Disklabel type: gpt
Disk identifier: F15F2DBD-D9A0-4B38-BBF9-8C06FD56A98A

Device       Start        End   Sectors   Size Type
/dev/sda1     2048       4095      2048     1M BIOS boot
/dev/sda2     4096    1054719   1050624   513M EFI System
/dev/sda3  1054720 1000214527 999159808 476,4G Linux filesystem

Disk /dev/sda:
DISKIMIZIN SISTEM UZERINDEKI DOSYA KARSILIGI ACIKCA BELIRTILMIS
BIZ BU AYGIT UZERINDE ISLEM YAPACAGIMZ ZAMAN BU DOSYA ISMINI KULLANACAGIZ=>/dev/sda:
TOPLAM BOYUT:476,94 GiB
1000215216 sectors KAC SEKTORDEN OLUSTUGU
Sector size (logical/physical): 512 bytes / 512 bytes-1 SEKTORUN BOYUTUNU BELIRTMIS BURDA
Disklabel type: gpt -DISK TYPE I GPT , CUNKU BENIM ISLETIM SISTEMIMI EUFI OLDUGNDAN DOLAYI GPT DISK BOLUMLEME KULLANMIS

Device       Start        End   Sectors   Size Type
Disk bolumlerinin aygit adi,acikca belirtilmis:
/dev/sda1     2048       4095      2048     1M BIOS boot
/dev/sda2     4096    1054719   1050624   513M EFI System
/dev/sda3  1054720 1000214527 999159808 476,4G Linux filesystem

Boot edilebilir olanlar icin Boot * secenegi konuluyor


adem@adem:~$ ls /
bin    dev   lib    libx32      mnt   root  snap      sys  var
boot   etc   lib32  lost+found  opt   run   srv       tmp
cdrom  home  lib64  media       proc  sbin  swapfile  usr
adem@adem:~$ 

Ana dizin altindaki boot dizini bu sistemin on yuklenmesini sagliyor!! Icerisinde sistemin on yuklenmesini ve baslatilmasini  saglayan dosyalari barindirir
Bu su demektir, sistem baslangicinde bir diskte ilk once okunacak, sistemin baslatilacagi bolum olarak gecen bolumdur, boot edilebilir budur

Device       Start        End   Sectors   Size Type
Start:Disk bolumunun disk uzerindeki hangi sektorden basladigini , End ise bu disk bolumumun disk uzerindeki hangi sektorde sonlanacagini gosterir
End deki sektor numarasindan, startdakini sektoru cikarirsak sektors sayisini elde ederiz!
Birde suna dikkat edelim, sda1 in end, sektor sayisindan 1 sonra sda2 nin startsektor sayisi basliyor...yani orda bir gecis var...DISKIN BU SEKILDE BOLUNEBILME IMKANI SUNULUYOR
Sectors, de toplam sektor u belirtir
Size:Toplam boyut
Type

fdisk -l  COK ONEMLI BIR ARAC...SISTEME BAGLI OLAN DISKLER ILE ILGILI CESITLI BILGILER ELDE EDEBILIYORUZ!!
EGER DISK OLUSTURDUK AMA BOLUMLEME YAPMADIK VE DOSYA SISTEMINI EKLEMEDI ISEK O ZAMAN O TARZ DISKLERI FDISK -L ILE GORUNTULEMEYIZ!

ORNEGIN BIZ DIYELIM KI 

BOLUMLDNRIECEGMIZ DISK IN LINUX DE KI ISMIN 
sudo fdisk -l ile buluruz

Disk /dev/sda:

BU DISKI BOLUMLENDIRECEGIZ!!!

sudo fdisk /dev/sda  
command for help geldiginde 'm' tusuna basarsak neler i hangi komutlarla yapabilecegimzi gorebiliriz!!

BIZ BU SEKILDE YENI DISK OLUSTURDUGMZDA, ONCE BOLUMLENDIRME GERCEKLESTIRMELIYZ CUNKU EGER BIZ ONCE DOSYA SISTEMI TANIMLAMA YAPARSAK DA DAHA SONRA DISK BOLUMLENDIRMEYI YAPARSAK VERILERIMZIN SILINMESINE NEDEN OLABILIRIZ!!!
ONDAN DOLAYI, ILK ONCE DIKS BOLUMLENDIRMESI ONDAN SONRA DA BOLUMLEDIGMIZ KISIMLARA DOSYA SISTEMI TANIMLAMASI YAPARIZ!!

BASTA DOSYA SISTEMINI TANIMLAR SONRA DA DOSYA SISTEMINI TANIMLADIGMZ DISKI BOLERSEK, VERILERIMZI PARCALAMIS OLURUZ VE VERILEIRMIZIN

BOLUMLEME ISLEMINI NASIL YAPARIZ

sudo fdisk /dev/sda  
Command:n:

BURDA ACABA ILK ONCE DOSYA SISTEMINI TANIMLASA IDIK NE OLURDU DIYE TEST EDECEK OLURSAK!!

MBR- DOS SEKLINDE GECIYOR ESKI SISTEM OLDUGU IICN 
DOS PARTITION-MBR DISK BOLUMLEME DEMEKTIR 
GPT- BU YENI DISK BOUMLELEME

g-crate a new empty GPT partition table 
o-create a new empty DOS partition table(MBR)

BURDA EGER MBR ISE BIZIM KI VE GPT OLARAK DEGISTIRMEK ISTERSEK
sudo fdisk /dev/sda   bundan sonra -g secenegine basilir
O zaman disk bolumleme tablosunu MBR den GPT  ye degistirecektir..

Sonrasinda tekrar - n secenegini gireriz

GB(Gigabyte) ile GiB(Gibibyte) Farki Nedir? 

GiB (Gibibyte): This is a binary-based unit of digital information storage capacity. 1 Gibibyte is equal to 2^30 bytes, which is 1,073,741,824 bytes. It is commonly used in the context of computer memory and storage devices in operating systems like Linux.

GB (Gigabyte): This is a decimal-based unit of digital information storage capacity. 1 Gigabyte is typically defined as 1,000,000,000 bytes. It is commonly used in the context of computer storage devices like hard drives and SSDs.

The main difference between them is in how the storage capacity is calculated:

In GiB (binary), capacity is calculated in powers of 2, which aligns better with the binary nature of digital storage in computers.
In GB (decimal), capacity is calculated in powers of 10, which is more commonly used in marketing and by storage device manufacturers.
For example:

1 GiB = 1,073,741,824 bytes
1 GB = 1,000,000,000 bytes
This difference becomes more significant when you're dealing with larger storage capacities. Operating systems and storage devices may report capacities in GiB or GB, depending on their conventions. It's important to be aware of this difference when interpreting storage capacities to avoid confusion.

DEVAM EDERSEK DISK I BOLUMLENDIRME!! 

sudo fdisk /dev/sda  
Command:  n

Command (? for help): n
Partition number (1-128, default 1): 2
First sector (34-1000215215, default = 1054720) or {+-}size{KMGTP}:
Last sector (1054720-1000215215, default = 1000215215) or {+-}size{KMGTP}: +50G


Command (? for help): t
Partition number (1-128): 2
Hex code (L to list all codes): 8300  # This sets the partition type to Linux filesystem

Command (? for help): w
w ile biz onay vermis oluyoruz, ve o ana kadar gerceklestirilen islemler disk uzerinde uygulanacaktir, 
ya da q ya basaarak, o ana kadar yapilmis islemleri iptal edebiliriz

fdisk -l  ile de son durumda olusturulan, disk alani gorulebilir, ve incelenebilir!!!

sudo fdisk /dev/sdb

adem@adem:~/utv/test/Linux-works$ sudo fdisk /dev/sda

Welcome to fdisk (util-linux 2.37.2).
Changes will remain in memory only, until you decide to write them.
Be careful before using the write command.

This disk is currently in use - repartitioning is probably a bad idea.
It's recommended to umount all file systems, and swapoff all swap
partitions on this disk.


Command (m for help): m

Help:

  GPT
   M   enter protective/hybrid MBR

  Generic
   d   delete a partition
   F   list free unpartitioned space
   l   list known partition types
   n   add a new partition
   p   print the partition table
   t   change a partition type
   v   verify the partition table
   i   print information about a partition

  Misc
   m   print this menu
   x   extra functionality (experts only)

  Script
   I   load disk layout from sfdisk script file
   O   dump disk layout to sfdisk script file

  Save & Exit
   w   write table to disk and exit
   q   quit without saving changes

  Create a new label
   g   create a new empty GPT partition table
   G   create a new empty SGI (IRIX) partition table
   o   create a new empty DOS partition table
   s   create a new empty Sun partition table


Command (m for help): 

fdisk araci ile mevcut diskleri bolumleme, veya var olan diskleri silme gibi islemler yapabiliyoruz!!!

mkfs | DOSYA SISTEMI TANIMLAMAK

mkfs. yazip tap tusuna basarsak!Sistemimizde yuklu olan dosya sistemlerin gorebiliyoruz

adem@adem:~$ mkfs.
mkfs.bfs     mkfs.ext2    mkfs.ext4    mkfs.fat     mkfs.msdos   mkfs.vfat
mkfs.cramfs  mkfs.ext3    mkfs.f2fs    mkfs.minix   mkfs.ntfs    
adem@adem:~$ mkfs.

mkfs komutu dosya sistemi olusturmak icin kullaniliyor!Bize listede gelen, komutlar biizm ornegin ext4 dosya sistemini kurmak icin mkfs.ext4  bu araci kullanabilecegimiz bilgsini veriyor

lsblk -f dedgimz zaman :

p/code/148
sda                                                                         
├─sda1
│                                                                           
├─sda2
│    vfat   FAT32       DD16-DBE6                             505,9M     1% /boot/efi
└─sda3
     ext4   1.0         5683671f-c61b-4d45-a7b7-680740cf49ad  336,6G    23% /var/snap/firefox/common/host-hunspell
                                                                            /
sr0      

sda1 in bir dosya sistemi yok, olsa idi hemen altinda gorebilirdik
sda2 nin vfat isminde dosya sistemi var 
sda3 un ext4 dosya sistemi var. 

 mkfs.ext4 /dev/sda1 ...
 SEKLINDE DOSYA SISTEMI OLUSTURUYOURZ VE HER DOSYA SISTEMINE DE BENZERSIZ, UNIQ ID VERILIYOR, CUNKU SISTEM BASLANGICINDAN ITITBAREN CEKIRDEK TARAFINDAN ISIM DEGISTIRILEBILIYOR, AMA ID HICBIRZAMAN DEGISMEYECEKTIR!!!

TEKRAR DOSYA SISTEMLERINI KONTROL ETMEK ICIN lsblk -f ile bakarakm, yeni dosya sisteminin ne oldugunu gorebiliriz. Dosya sistemi atamasini yaparak diske, sunu yapiyoruz, artik o diske istedigmz dosyalari atip o dosyalari n okunabilmesini saglayabilecegiz, fakat icerisine veri gondermek ve var olan verileri okuyabilmek icin oncelikle, bu disk bolumumuze nerden ulasabilecegmiizi belirlememiz gerekiyor

YERI BULMAK ICN ISE : sudo lsblk -f ile gelen listede MOUNTPOINT OLARAK NEREYI GOSTETIYORSA, HANGI DIZIN ALTINDA GOSTERIYORSA ORASIDIR


adem@adem:~$ lsblk -f
NAME FSTYPE FSVER LABEL UUID                                 FSAVAIL FSUSE% MOUNTPOINTS
loop0

p/code/148
sda                                                                         
├─sda1
│                                                                           
├─sda2
│    vfat   FAT32       DD16-DBE6                             505,9M     1% /boot/efi
└─sda3
     ext4   1.0         5683671f-c61b-4d45-a7b7-680740cf49ad  336,6G    23% /var/snap/firefox/common/host-hunspell
                                                                            /
sr0        

Mountpoinst ornegin / yani kok dizin alintda ise, bizim bu verileri bir dizin uzerinden disk bolumunu bir dizin uzerinden sistemimize baglamamiz gerekiyor

SISTEMIMIZE DISKLERIMIZI NASIL BAGLIYORUZ

MOUNT | DISKLERIN SISTEME BAGLANMASI 

Su ana kadar:
1-Disk bolumu olusturuldu 
2-Daha sonra bu disk bolumunun, sistemin isletim sistemine erisebilmesi icin, bir dosya sistemine sahip olmsi gerektigini soyledk ve dosya sistemine sahip olmasi gereken dosya sistemini bulup atadik                                                                    Olusturulan disk bolumne dosya sistemi atadik


sda                                                                         
├─sda1  - Eger mountpoints kismi bos ise bu su demektir, herhangi bir filesystem tanimlanmamis demektir!
Filesystem tanimlandiktan sonra, mountpoints / root-kok dizin olarak gelecektir.

3-Fakat diskmiz dosya sistemine sahip olsa bile, bu diskimizi sistemimizin erisilebilir konumda bulunmuyor, biz ornegin sda1  disk bolumune veri gondemrek istersek / kok dizini kullanabiliriz. Bu kok dizine attigimz, her turlu veri aslinda sda1 disk bolumune kaydoluyor. Dolayisi ile benim disk icerisinde veri depolamam gerekiyorsa bunu sistemimzden erisilebilir noktaya baglamam gerekiyor.
Peki bunu nereye baglayacagiz?

Normalde baglmak istedgimz aygit flash-disk ise,  yani cikarilabilir bir flash-disk ise, bize onerilen / kok dizinin altindaki media klasoru alitnda bir dizin, klasor olusturup buraya baglamamizdir. Eger baglamak istedgimz aygit cok daha kalici ise ornegin, bir disk bolumunu baglmak istiyorsak, bir isletim sistemi bolumunu baglamak istiyorsak, bunu da / kok dizin altindaki  mnt dizini altinda olusturmus olusturmus oldugumuz klasore baglamamiz gerekiyor
mnt-mount ifadesinin kisaltmasindan geliyor
Bunlar yaklasimdir, onerilerdir.. 
Zaten bizde baglama islemleri icin mount isimli araci kullaniyor olacagiz

MOUNT ARACI ILE KOK DIZINE KLASOR BAGLAMA 

1-Oncelikle baglamak istedgimz diskin ismini biliyor olmamiz gerekir 
Bunu da  lsblk -f ile ogreniriz

NAME FSTYPE FSVER LABEL UUID                                 FSAVAIL FSUSE% MOUNTPOINTS
loop0

sda                                                                         
├─sda1
│                                                                           
├─sda2
│    vfat   FAT32       DD16-DBE6                             505,9M     1% /boot/efi
└─sda3
     ext4   1.0         5683671f-c61b-4d45-a7b7-680740cf49ad  336,6G    23% /var/snap/firefox/common/host-hunspell
                                                                            /
sr0     

veya sadece lsblk komutunu da gireblriz

sda      8:0    0 476,9G  0 disk 
├─sda1   8:1    0     1M  0 part 
├─sda2   8:2    0   513M  0 part /boot/efi
└─sda3   8:3    0 476,4G  0 part /var/snap/firefox/common/host-hunspell
                                 /
sr0     11:0    1  1024M  0 rom  
adem@adem:~$ 

Ornegin baglmak istedimgz disk imizin ismi sda1
Konumu, dosya konumu 
Bu diski baglamak icin 
/dev(device)
mount /dev/sda1

sda1 in dosya konumunu ve ismini gormek istersek ayni anda:

sudo fdisk -l (BU KOMUT ILE HEM sda1 ismi oldugunu biliriz, hem de konumunun /dev/sda1 konumu oldugunu biliriz!)

Disk /dev/sda: 476,94 GiB, 512110190592 bytes, 1000215216 sectors
Disk model: SAMSUNG MZ7TE512
Units: sectors of 1 * 512 = 512 bytes
Sector size (logical/physical): 512 bytes / 512 bytes
I/O size (minimum/optimal): 512 bytes / 512 bytes
Disklabel type: gpt
Disk identifier: F15F2DBD-D9A0-4B38-BBF9-8C06FD56A98A

Device       Start        End   Sectors   Size Type
/dev/sda1     2048       4095      2048     1M BIOS boot
/dev/sda2     4096    1054719   1050624   513M EFI System
/dev/sda3  1054720 1000214527 999159808 476,4G Linux filesystem


adem@adem:~$ df -h

Filesystem      Size  Used Avail Use% Mounted on
tmpfs           1,6G  2,1M  1,6G   1% /run
/dev/sda3       468G  108G  337G  25% /
tmpfs           7,8G  194M  7,6G   3% /dev/shm
tmpfs           5,0M  4,0K  5,0M   1% /run/lock
/dev/sda2       512M  6,1M  506M   2% /boot/efi
tmpfs           1,6G  128K  1,6G   1% /run/user/1000

Ornegin baglmak istedimgz disk imizin ismi sda1
Konumu, dosya konumu 
Bu diski baglamak icin 
/dev(device)
mount /dev/sda1

Simdi ayrica bu nu nereye hangi klasore baglayacagmizi belirtmeliyiz
Burda istedgmiz klasore baglayabiliriz, hatta yeni klasor olusturup ona da baglayabiliriz

Ornegin yeni olsutrdugmz Desktop altinda disk isimli klasore baglamak istiyoruz
adem@adem:~$ sudo mkdir ~/Desktop/disk
adem@adem:~$ cd disk
bash: cd: disk: No such file or directory
adem@adem:~$ pwd
/home/adem
adem@adem:~$ cd Desktop/
adem@adem:~/Desktop$ cd disk
adem@adem:~/Desktop/disk$ 

sudo mount /dev/sda1 ~/Desktop/disk  KOMUTU ILE BAGLARIZ.. 

PEKI BAGLANDIGINI NERDEN ANLARIZ!!!!!
TABI KI lsblk komutunu calistirsak, MOUNTPOINTS DE BAGLANDIGI DIZINI GOREBILIRIZ,....COK ONEMLI,...EGER BOS ISE HICBIRYERE BAGLANMAMIS DEMEKTIR

adem@adem:~$ lsblk 
NAME   MAJ:MIN RM   SIZE RO TYPE MOUNTPOINTS

sda      8:0    0 476,9G  0 disk 
├─sda1   8:1    0     1M  0 part 
├─sda2   8:2    0   513M  0 part /boot/efi
└─sda3   8:3    0 476,4G  0 part /var/snap/firefox/common/host-hunspell
                                 /
sr0     11:0    1  1024M  0 rom  

SIMDI DE BU DISK ICINE KLASOR OLUSTURARAK BU DISK BOLUMUNE VERI YAZIP YAZAMADIGMIZI ONTROL ETMEK ISTIYORUM
KLASOR OLUSTURMAYA CALISIRKEN, PERMISSION DENIED HATASI ALMAMIZ MUHTEMELDIR CUNKU 
MOUNT ISLEMINDEN ONCE, /Desktop/disk in user-owner i adem kullanici iken mount islminden sonra bu dizin, root a ait, yani owner i root olmus oldu!!!ONDAN DOLAYI DA TABI KI PERMISSION DENIED HATASI ALINACAKTIR!!!
YANLIS ANLASILMASIN, KLASOR YINE KONIUM OLARAK ORNEGIN /home/adem/Desktop/disk pozisyonunda duruyor adem-owner klasorunun altinda durmasina ragmen, owner i artik adem degil!!!!BURAYI IYI ANLAYALIMM...ADEM-USER(OWNER)  DIZIN ALTINDA OLABILRIZ AMA, OWNER I DEGISMIS OLDU ROOT OLDU ARTIK!!!
BU PROBLEMI COZMEK ICIN TABI KI SUDO ARACI KULLANIIRIZ

DISKI BAGLAMIS OLDUGMUZ KLASORUN OWNER I DEGISTIRMEK ISTYORUZ O ZAMAN NE YAPARIZ 
sudo chown adem:adem ~/Desktop/disk  

adem user ve adem grubunu ~/Desktop/disk   bu dizinin owneri yapmis olduk burda, cunku artik hata almiyoruz!!!


ls -ld ~/Desktop/disk 

dersek artik bu disk artik adem kullanicisin in  yetkilerine gececektir... Bir user- owner olarak adem kullancisi  bu ~/Desktop/disk klasorunde artik, kendine veriler chmod yetkileri dahilinde islemler yapabilecektir!!

O ZAMAN BIZ PERMISSION DENIED ALDGIMZDA YAPACAGIMZ 3 SEY VAR 
1.YA SUDO KOMUTUNU KULLANARAK, ROOT YETKIISI ILE O ISLEMI YAPMAK 
2.EGER UZERINDE LOGIN OLDGUMZ KULLANICI O DIZININ OWNER I ISE AMA ONA VERILEN YETKLIERLDE SORUN YASIYOR ISE O ZAMAN, CHMOD ILE VERILEN YETKILERI ARRTTIRABILIRZ CHMOD 777 ~/Desktop/disk ya da chmod ug+rwx ~/Desktop/disk   seklinde yetkilerini arttiririz 
3. EGer uzerinde islem  yapmaya calistigimz kullanici ornegin adem kullanicisi owner degil ise o zaman da adem kullanicisni chown ile owner yaparak bu isi cozebiliriz... 
bIR DIZININI OWNER, GRUOP, PERMISSION LARINI ISE 
stats, ya da ls -l ile gorebiliriz!!!!

VE ARTIK YENI KLSORU ~/DESKTOP/DISK ALTINDA OLUSTURABILIYORUZ! 

mkdir ~/Desktop/disk/new-folder diyerek 
Yeni klasoru  sda1 in mountpontsi olan /home/adem/Destkop/disk bolumu altinda tutuluyor olacak!

IC ICE KLASORLER OLSUTRABILMEK ICIN MKDIR -P KOMUTU KULLANILIYORDU
mkdir -p(parent) adem1/adem2/adem3  bu sekilde ic ice klsorler de olusturabiliriz

!BUNU BILMEK ONEMLI!!!!!
Eger biz icerisinde dosya ve klasor olan bir dizini olusturdugmz bir disk bolumunun giris kapisi, baglanti noktasi olarak ayarlarsak o zaman, bu kullanilan dizinin icinde bulunan dosya ve klasorlere erisemiyor olacagiz..
YANI EGER BIZ DISK BOLUMU KAPISI, VEYA GIRIS NOKTASI OLARAK AYARLMIS ISEK BIR KLASORU O BIZE ARTIK DISK ICINDE NE VARSA ONU GOSTERIR, DISK BOLUMUNUN GIRIS KAPISI OLMADAN ONCE, KENDI ICINDE VAR OLAN DOSYA VE KLASORLERI ARTIK GOSTERMEZ!!

!TEKRARDAN BIZ, DISK GIRIS KAPISI OOLARAK AYARLADGIMZ KLASORUN DAHA ONCE ICERISINDE VAR OLAN, KLASOR VE DOSYALARA ERISMEK ISTERSEK O ZAMAN, BU DIZININ DISK GIRIS KAPISI OLARAK OLUSTRULAN BAGLANTISININ KOPARILMASI GEREKIR!!

!NETICE ITIBARI ILE DAHA ONCE ICERISINDE DOSYA VEYA KLASOR BULUNAN SPESIFIK BIR DOSYAA BAGLAMAK MANTIKLI DEGIL ONUN YERINE, KARMASIKLK DA OLMAMAMSI ICIN 
EGER DISK CIKARILABILIR BIR DISK ISE, USB GIBI, /media klasoru icerisine baglariz 
YOK EGER CIKARILABILIR DEGIL ISE O ZAMAN DA /mnt altina baglariz!!!
VE BU KLASORLER ALTINA YENI BIR KLASOR OLUSTURARAK YAPMAMIZ DAHA MANTIKLIDIR..BU SEKILDE ARADIGMIZDA DA KOLAYCA BULABILIRIZ.BUNU STANDART OLARAK BENIMSEMEMIZ BIZIM ICIN DAHA MANTIKLI VE KOLAY OLACAKTIR!

SU ANA KADAR YAPTIGMIZ BAGLAMA ISLEMLERINDEN HICBIRI KALICI DEGILDIR, BIZ SISTEMIMIZI YENIDEN BASLATTIGMIZ ZAMAN HEPSI SILINECEKTIR!!!

Baglantik kapilarini 
lsblk ile MOUNTPOINTS ALTINDAN GOREBILIYORDUK

EGER DAHA KALICI EKLEME ISLEMI YAPMAK ISTERSEK BUNU /etc/fstab isimli konfigurasyon dosyasinda gerceklestirmemiz gerekiyor.

sudo mount /dev/sda1 new_file seklinde bagladiklarimiz yalnizca sistemimiz acik oldugunda gecerlidir.Sistem yeniden baslsyainca baglantilar silinmis olacak bunu lsblk yi calistirrarak sistemi yeniden baslatinca check edebiliriz
Bizim baglanti kapisi olarak ayarladgimz klasorlerin baglantisi sistem yeniden baslayinca kopmus oluyor

!DISKLERI KALICI OLARAK BAGLAMAK  | /etc/fstab dosyasinda duzenleme yapmak gerekiyor!
Baglantilari  kalici hale getirmek icin /etc/fstab isimli dosyada duzenleme gerceklestirmemiz gerekiyor

adem@adem-ThinkPad-13-2nd-Gen:~$ sudo nano /etc/fstab

# /etc/fstab: static file system information.
#
# Use 'blkid' to print the universally unique identifier for a
# device; this may be used with UUID= as a more robust way to name devices
# that works even if disks are added and removed. See fstab(5).
#
# <file system> <mount point>   <type>  <options>       <dump>  <pass>
# / was on /dev/sda2 during installation
UUID=70cfee18-0040-47ec-891a-e74f1df1ace1 /               ext4    errors=remoun>
# /boot/efi was on /dev/sda1 during installation
UUID=488C-5519  /boot/efi       vfat    umask=0077      0       1
/swapfile                                 none            swap    sw           >


# <file system> <mount point>   <type>  <options>       <dump>  <pass>
# / was on /dev/sda2 during installation
UUID=70cfee18-0040-47ec-891a-e74f1df1ace1(file system)  /(mount point)   ext4(type-filesystem)    errors=remoun>
# /boot/efi was on /dev/sda1 during installation
UUID=488C-5519  /boot/efi       vfat    umask=0077      0       1


DAHA ONCE HATIRLARSAK
adem@adem-ThinkPad-13-2nd-Gen:~$ lsblk -f
NAME FSTYPE FSVER LABEL UUID                                 FSAVAIL FSUSE% MOUNTPOINTS
sda                                                                         
├─sda1
│    vfat   FAT32       488C-5519                              86,5M     7% /boot/efi
├─sda2
│    ext4   1.0         70cfee18-0040-47ec-891a-e74f1df1ace1   86,8G    48% /var/snap/firefox/common/host-hunspell
│                                                                           /
├─sda3
│    ext4   1.0         44681466-61b9-4aef-af6e-57e517525fc8                
└─sda4
     swap   1           9d790e85-3278-4018-8611-5cd78a355ca5                
adem@adem-ThinkPad-13-2nd-Gen:~$ 

Sistemimizde dosya sistemi bulunan(FSTYPE yani ext4,vfat,swap) tum disk bolumlerinin kendisine ait dosya sistemlerine ait benzersiz kimlikleri oldugunu biliyorduk!
Bu kimlik id numaralari uzerinden sistem bsalangicinda bu bolumlerin isimleri degisse bile, rahatlikla bu disk bolumlerinin kastedilmesini, hangi disk bolumlerinn belirtildigini belirleyebiliriz....

/etc/fstab dosyasi icinde de dkkkat edelim id-uzerinden baglayariz


# <file system> <mount point>   <type>  <options>       <dump>  <pass>
# / was on /dev/sda2 during installation
UUID=70cfee18-0040-47ec-891a-e74f1df1ace1 /               ext4    errors=remount-ro 0       1
# /boot/efi was on /dev/sda1 during installation


BAGLAMA ISLEMLERI ICIN

 errors=remount-ro  hata durumunda bu diskin tekrar baglanmasini ama readonly seklinde baglanmasi gerektigini tanimlar
 Kok dizin oldugu icin hata bile alsa, yalnizca veri okunacak formatta bagla...!!!

 Bir diskin standart sekilde baglarken default secenegini kullaniyoruz

       <dump>(yedekleme ile ilgili)  <pass>(bu diskin kontrol edilmesi ile ilgili)  1 oldugu nda her disk in sistem baslangicinda kontrol edilmesi saglaniyr, filesystemcheck kontrolu gerceklestiriliyor
       Ya da 2 de olabilir

       SIMDI KENDIMZ DISK KALICI DISK BAGLAMA ISLEMI YAPALIM

       # <file system> <mount point>   <type>  <options>       <dump>  <pass>

       Once filesystem i yani diskimziin id sini bulalim bunu nerden ogreniz

       lsblk -f  ya da sudo fdisk -l   araclari ile ogrenebiliriz

       Ornegin : 
       ─sda2
│    ext4   1.0         70cfee18-0040-47ec-891a-e74f1df1ace1     87G    48% /var

    70cfee18-0040-47ec-891a-e74f1df1ace1 bu id sidir.

    <file system>  UUID=70cfee18-0040-47ec-891a-e74f1df1ace1
    UUID ile benzersik kimligi oldugunu belirtmis oluruz
   <mount point> Daha sonra hangi kok dizine baglayacagimzi belirtecegiz
  <mount point> /home/adem/Desktop/disk (Burda ~ isaretini kullanamiyoruz, uzun uzun belirtmemiz gerekiyor tam yolu, cunku sistem baglangicinda kullanici biz olmayacagmiz icin, burda ~ isareti kullanirsak bu bizim /home/adem yani bizim ev dizinimize donusturulmeyecek, bundna dolayi tam dizini belirtmemiz gerekiyor)

   <type>  ext4  (bunu da yine lsblk den ogrenebiliyoruz)
   <options> defaults(secenegi yeterli geliyor)
   <dump> 0(yedekleme islemi yapmaycagiz su anlik)
    <pass> 1 seklinde belirtirsek her sistem baslangicinda otomatik olarak kontrol edilmesi saglanir ama 1 seklinde belirtmek uygun olmaz, cunku bir usste(sudo nano /etc/fstab) kok dosya sistemi  yani / 1 seklinde belirtilmis zaten o daha onceliklidir, once onun kontrol edilmesi gerekir, ondan dolayi da 2 rakaminin belirtilmesi daha uygun olacaktir.


    UID=70cfee18-0040-47ec-891a-e74f1df1ace1      /                     ext4    errors=remount-ro 0       1(once bu dosya sistme i kontrol edilecek sistem baslangicinda sonra, pass-2 olan kontrol edilecek sistem baslangicinda)
    UUID=70cfee18-0040-47ec-891a-e74f1df1ace1    home/adem/Desktop/disk ext4    defaults          0       2 

    Neden uniq id leri ile tanimliyorduk, unutmyalaim, sistem baslangicinda isimleri degisebiliyor disklerin...ama uniq id leri hicbirzaman degismez

    Burda degisiklikleri yaptikdan sonra (sudo nano /etc/fstab) asagidaki komutu calistirarak degiskliklerin gecerli olmasi saglanir
    systemctl daemon-reload  
    Ama henuz bu komutu calistirmiyoruz once dosyada cikariz

    Ctrl-X ile sudo nano /etc/fstab bu dosyadan cikariz ve sonra sistemi  yeniden baslatacak olursak, dosyada tanimladimgz sekilde otomatik olarak baglanti islemi gerceklesecektir

    Henz sistemi baslatmadik, diskimiz herhangi bir konuma baglil degil... kontrol edecek olursak 
    lsblk

    Konfigurasyon dosyasi (sudo nano /etc/fstab) sistem baslangicinda okunsun diye ayar yaptik ondan dolayi sistem baslangicinda okunacagi icin, icerisine eklemis oldugum konfigurasyon gecerli olacak, dolayisi ile lsblk da baktigmz disk bolumu de tam olarak isteimgi dizine baglanmis olacak, fakat sistemin yeniden baslatilmasini beklemeden gecerli olmasini istersek degiskliklerin o zaman sudo mount -a komutunu kullanabiliriz. Bu sayede aninda bu konfigurasyonlarin gecerli olmasi saglanabcaj

    sudo mount -a 
    lsblk ile tekrarr calistirip mountpoints e bakacak olursak

    Ayrica konfigurasyon dosyasinda belirtildigi sekilde systemctl daemon-reload   bu komutu calistirarak da degisikligi saglayabilirdik sistemi yeniden baslatmadan 

    sudo systemctl daemon-reload  

    DISKLERI SISTEMDEN CIKARTMAK 

    disk baglamak-mount
    disk i sistemden ayirmak umount,
     diski bagladimigz dizinden bagini kurtarmak iicin, once diskin baglandigi, dosya yolu, yani giris kapisi yani mountpoints ini bluruuz lsblk komutu ile sonra da 

    umount  /home/adem/Desktop/disk

    /home/adem/Desktop/disk(giris kapisi, mountpoint)
    Bu islemden sonra baglantinin koparildigni teyit etmek iicn 
    lsblk aracini calistirarak ilgili disk bolumunun MOUNTPOINTS inde hicbir dosya yolu olmadingi gorebiliriz  

    !DIKKAT! 
    Eğer otomatik olarak bağlanması için konfigüre ettiğiniz disk bölümünü sildiyseniz, /etc/fstab dosyasına eklemiş olduğunu otomatik bağlama konfigürasyon satırını da silmelisiniz. Aksi halde sistem başlangıcında hata alırsınız.
    
    Diks yonetimi ile ilgili temelde bilmemiz gerekenleri ele almis olduk!!!

    !LVM(LOGICAL VOLUME MANAGER) - DISKI GENISLETME VE KUCULTME
    Bu yontem daha modern bir yontemdir, yeni disk olusturma vs bunlar hem zahmet li hem de riskli islemlerdir.. Verileri kaybetme vs durumlari olabilir
    LVM yapisi temel de 3 katmandan olusur

    File System   /boot       /        /home 
    Logical Volume(Volume grubu olusturan sanal disk bolumleridir)
    Volume Group(Fiziksel disklerin birlestirilip sanal olarak temsil ettirdigi grubu temsil ediyor )
    Physical Volume
    Storage Device(3 farkli device)

        Storage Device(3 farkli device)=>  Physical Volume(3 farki volume)=>Volume Group(1 sanal disk)=>Logical Volume(Tekrar sanal disklere ayirabiliyoruz istedigmiz gibi)
        Bu yaklasima gore 1 den fazla diski birbirne baglayabiliyoruz, fiziksel olarak birbirinden ayri olmalarina ragmen birbirlerine baglayabiliyoruz
        Sanki tek bir fiziksel disk mis gibi, daha sonra bunlari istedgiimz gibi bolumendirmemiz de mumkun oluyor, zahmetsizce islemler gerceklestirebiliyoruz
        Zatne kullanmis oldugmuz LVM ypaisi da kucultme buyutme, parcalama konusunda bize kolayliklar sunuyor.Dolayisi ile islemlerimizi rahatlikla yerine getirebiliyoruz
        Yani fizksel olarak tek bir diske sahip olmamiz gerekmiyor, birden fazla olsa bile diskler onlari soyutlayarak, cok daha pratik cozmler uretebiliyoruz. Zaten bu yaklasim sayesinde, yedekleme, snapshot veya diger disk yonetimi ile sorunlarimiza kolayca cozumler bulabilyoruz

        !LVM(Logical Volume Manager) Kurulumu

        Storage Device=>  Physical Volume
        Oncelikle fiziksel olarak sahp oldugumz disk bolumunu fiziksel volume haline getirmemiz gerekiyor
        Fiziksel olarak sahip oldugumz diskleri sanal olarak yonetebilmemiz icin ilk olarak, Storage Device lari Physical Volume haline getirmemiz gerekiyor
        Bunun icinde eger tum diski kullanmak istiyorsak tum diski, yok tum diskin bir bolumunu kullanmak istiyrosak da, kullanmak istedigmz bolumu, physical volume haline getirmemiz gerekiyor

        Oncelikle sahip oldugumz diskleri lsblk araci ile listeleyelim

        lsblk
        adem@adem-ThinkPad-13-2nd-Gen:~$ lsblk
        NAME   MAJ:MIN RM   SIZE RO TYPE MOUNTPOINTS
        loop0    7:0    0     4K  1 loop /snap/bare/5
        loop1    7:1    0  63,5M  1 loop /snap/core20/2015
        loop2    7:2    0  63,9M  1 loop /snap/core20/2105
        loop3    7:3    0  74,1M  1 loop /snap/core22/1033
        loop4    7:4    0  73,9M  1 loop /snap/core22/864
        loop5    7:5    0 240,3M  1 loop /snap/firefox/3290
        loop6    7:6    0 240,3M  1 loop /snap/firefox/3358
        loop7    7:7    0 349,7M  1 loop /snap/gnome-3-38-2004/140
        loop8    7:8    0 349,7M  1 loop /snap/gnome-3-38-2004/143
        loop9    7:9    0   497M  1 loop /snap/gnome-42-2204/141
        loop10   7:10   0 496,9M  1 loop /snap/gnome-42-2204/132
        loop11   7:11   0  91,7M  1 loop /snap/gtk-common-themes/1535
        loop12   7:12   0   9,6M  1 loop /snap/htop/3873
        loop13   7:13   0  45,9M  1 loop /snap/snap-store/638
        loop14   7:14   0  12,3M  1 loop /snap/snap-store/959
        loop16   7:16   0   304K  1 loop /snap/snapd-desktop-integration/49
        loop17   7:17   0  40,9M  1 loop /snap/snapd/20290
        loop18   7:18   0   452K  1 loop /snap/snapd-desktop-integration/83
        loop19   7:19   0  55,7M  1 loop /snap/core18/2812
        loop20   7:20   0 105,8M  1 loop /snap/core/16202
        loop21   7:21   0   140K  1 loop /snap/gtk2-common-themes/13
        loop22   7:22   0  42,6M  1 loop /snap/leafpad/91
        loop23   7:23   0  40,4M  1 loop /snap/snapd/20671
        sda      8:0    0 238,5G  0 disk 
        ├─sda1   8:1    0    94M  0 part /boot/efi
        ├─sda2   8:2    0 188,5G  0 part /var/snap/firefox/common/host-hunspell
        │                                /
        ├─sda3   8:3    0  27,9G  0 part 
        └─sda4   8:4    0   3,3G  0 part 
        adem@adem-ThinkPad-13-2nd-Gen:~$ 

    
        Eger bizim elmizde tum bir disk var ama biz bu tum diski tamamen sanallasitrip kullanmak istemiyorsak o zaman once o diski bolumleme yapariz ondan sonra bolumledgimz diskin istedgimiz bolumunu kullaniriz. 
        Ya da zaten bolumlenmis bir disk var ise onun dogrudan istedigmz bir bolumunu sanallasitririz

        !Bolumleme islemi icin de fdisk aracini kullanarak, istedigimz bir disk bolumunu bolumleyip o bolumu LVM uzerine dahil edebiliriz
        !Physical Volume haline getirmk icinde pvcr(phsyical volume create) aracini kullanabiliirz
        !sudo pvcreate /dev/nvme0n2 /dev/sdb1 
        /dev/nvme0n2, /dev/sdb1 bu diskleri biz lsblk araci ile bulabiliriz...
        
        Disklerin konumu vs bunlari gormek icin, sudo fdisk -l komutunu kullaniriz
        Diskler /dev/ altinda b ulunuyor, device demektir dev, ve de lsblk komutu ile tek bir butun disk olarak karsimza gelen bir disk ismi olarak varsayiyiruz nvme0n1 diskini 

           !sudo pvcreate /dev/nvme0n2 /dev/sdb1  bu sekkilde 2 tane diskimizden fiziksel volume haline getirmek istiyoruz
           !Bize bir uyari verecektir, /dev/sdb1 diski dosya sistemi olarak ext4 u kullandigi ve bu islemi yapinca bu dosya sisteminin silinecegi uyari si veriyor...Bu dosya sistemi ve dolayisi ile bu disk icindeki veriler de silinmis olacaktir.
           Yes dersek ilerleriz ve /dev/nvme0n2 /dev/sdb1  bunlarla ilgili Physical volume ler olusmus olacaktir

           !sudo pvs(physical volume scane) diyerek physical volume haline getridigmz disklerimizin bilgilerini goruntuleyebiliriz

           !Sahip oldugjmz diskleri physical volume haline getirdikten sonra, bu phsyical volume leri kullanabilmek icin ortak bir havuz yani volume group olusturmamiz gerekiyor.OLusturmus oldugmzu phsiycal volume leri tek bir grupta toplayip, daha sonra istedgimz zaman istedgimz kadar bolumleyebiliyor olacagiz. 

           !NASIL VOLUME GROUP OLUSTURURUZ 
           !sudo vgcreate(volume group create) disk-group(kendimiz veriyoruz bu ismi) /dev/nvme0n2  /dev/sdb1(bu dosya yollari da en bastaki disklere ait dosya yollaridir)

           !Volume group un olusup olusmadigini kontrol etmek icin sudo vgs(volume group scane)

           !sudo pvs - sudo vgs  kactane fiziksel volume nin bagli oldugu ve ne kadar yer kapladigi goruluyr
           Sanki tek bir diskm is gibi 2 physical volume u birlestirip 1 tane volume group olusturduk ve artik tek bir disk mis gibi artik uzerinden islem yapabiliyor olacagiz. Tek bir disk gibi islem yapabildgiimz icin de istedgimz kadar parcaya bolebiliyoruz. 
           Bu bolme islemi icind ise logical volume olusturmamiz gerekiyor

           !sudo vlcreate(logical volume create) -L(buyukluk) 3G(Gigabyte) -n test (nerden alinacagi) disk group(volume group ismi)

           !OLusuturulan volume u gormek icin sudo lvs(logical volume scan) 
           LOgical volune olusturmus olduk, olusturdugm logical volume yi kullanabilmek icin, buna bir doays sistemi atamamiz gerekir
           Bunun icin 

           sudo mkfs.ext4 /dev/mapper/disk--group-test(hangi aygitin dosyas sistemi olusturuulacaksa onun dosya yolunu-adresini gir)

           sudo lvs dersek  burda LV=test  VG=disk-group olarak bulundugu icin ondan dolayi burda boyle belirtildi :sudo mkfs.ext4 /dev/mapper/disk--group-test

            sudo mkfs.ext4 /dev/mapper/disk--group-test  bu sekilde yapinca /dev/mapper/disk--group-test logical bolumu belirtmis oluyoruz.
            Dosya sistemini tanimlamis oluyoruz

            lsblk ile kontrol eedelim, nvme0n2 disk inini disk--group-test dosyasini ext4 dosyas sistmeinin olusturuldugunu gorebiliriz
            Boyle likle dosya sistmei olarak ext4 atamis oldugmuz logical volume u sistemde istedigmz bir dizine baglayip kullanabiliriz, icerisine veirler atabiliriz

            !Simdi logical volume yi baglayalim 
            ! mount /dev/mapper/disk--group-test(baglamak istedgimz aygit ismi)  /mnt/(direk buraya baglayabiirz)

            lsblk ile bakacak olursak 
            logical volume ye nvme0n2 de logical volume e bakariz size:3G type-lvm  mountpoints de /mnt oldugunu gorebiliriz
            Yani artik ben 3Gigibyte lik bolumu /mnt/  klasoru uzerinden kullanablirim, istegimz sekilde veriler eklyip sisteme depolayabilirz 
            Tabi biz mount komutu ile bu baglama islemini gecici olarak yapioruz ama kalici yapmak istersek o zaman daha oncdden yaptgimz gibi  sudo /etc/fstab dosyasina bu tanimlamayi daha once ypagimz gibi ekleyebiliirz. Sistem baslangicinda logical volume otomatik olarak bu dizine baglaniyor olacak!!!

            !LVM BOYUTLANDIRMA!!!!
            Boyutlari genisletme kucultme gibi islemler

            !Volume Group a nasil yeni bir disk ekleyebiliriz?

            Storage Device(3 farkli disk)=>Physical Volume(3 phsyical volume)=>Volume Group(1 volume group)=>Logical Volume(istedgmiz kadar bolumlendirebiliriz)

            Bildigmiz gibi diskleri fisizksel diskleri physical volume haline getirmeden volume group a ekleyemiyoruz ,
            
            Oncelkle disklerimiz gormek icin lsblk komutunu calistiririz 
            Diskerlimizden secegimz 1 tanesini volume group a ekleyebilmek icin oncelkle Physical volume haline getirmeliyiz 

            Disklerin yollari /dev/ altindadir zaten, sudo fdisk -l den de gorebiliriz ama lsblk da disklerin isimleri geliyor onlari direk olarak /dev/ altina isimlerini yazarak yollarini bulabiliriz

            sudo pvcreate /dev/sdc(olusturmak istegimz disk in yolu)  
            sudo pvs   ile olusuturlan phsiycal volume u gorebiliriz 

            Olusturudgmz phsiycal volume yi daha once sahip oldugmzu volme group a eklemek istersek

            sudo vgs(volume group scan) volume gruplarini goreblirz 
            disk-group isimli volme grubunu gorebiliriz burda

            Bu gruba olusturgumz phycial volume u eklecek olursak 

            sudo vgextend(volume grup extend) disk-group(hangi grupta genisletme )  /dev/sdc(hangi disk)
            sudo vgs(kontrol et) burdan PV  sayisi 3 den phsical volume sayisini 3 e ciktgini gorebiliriz ve VSize in da artmis oldugnu da gorebiliriz 

            PHYSICAL VOLME UN VOLUME GORUP TAN CIKARMAK ICIN ISE 
            sudo vgreduce disk-group(hangi grupta genisletme ) /dev/sdc(hangi disk)
            sudo vgs(kontrol et) phsical volume sayisini 2 ye dustu, VSize da azaldi

            !ISTERSEK BU ISLEMLERI LOGICAL VOLUME UZERINDE DE GERCEKLESTIREBILIRIZ , eger VOLUME GROUP DA YETERINCE ALAN VAR ISE

            sudo lvextend -L(buyukluk) +2G /dev/mapper/disk--group-test(bu volme ismi) (Hatirlamzsak kontrol edebilirz lsblk ile)
            Alanini genisletmis oluruz 
            sudo lvs(logical volume scale)
            Eklenmis olan alani cikarmak istersek, YANI ALAN AZALTMAK, KUCULTMEK
            sudo lvreduce -L(buyukluk) -1G /dev/mapper/disk--group-test(bu volme ismi) 
            Kuculturken kuculttugumz alan da veriler var ise o veriler kaybolacaktir, bu konud ada bizi uyaracaktir Yes DERSEK devam edebilriz 
            sudo lvs ile kontrol edebliriz
            !BUNU ANLAYALIM IYICE LOGICAL VOLUME DE BU ISLERI GERCEKLESTIREBILMEK ICIN  VOLUME GROUP DA YETERLI ALAN OLMASI GEREKIYOR, YOKSA BUYUTME ISLEMI LOGICAL VOLUME DE GERCEKLESTIREMEYIZ. VOLUME GROUP DA YETERLI ALAN YOK ISE O ZAMAN DA EN BASTAN FIZIKSEL DISK I PHSYICAL VOLUME HALINE GETIRIP ORDAN DA VOLUME GROUP A EKLEYEREK VOLUME GROUP DA ALAN GENISLETMESI YAPABILIRIZ

            !LOGICAL VOLUME SILME ISLEMI DE GERCEKLESTIREBILIRIZ

            sudo lvremove /dev/mapper/disk--group-test 
            Dosya sistemi kullanildigi icin, yani daha once bu logical volume /mnt ye baglandigi icin silemiyor, bunu da zaten 
            lsblk araci ile disk listesinde disk--group-test  un oldugu satirda type:lvm Mountpoints:/mnt den gorebiliriz
            Bunu hemen umount komutu ile ayirabiliriz

            umount /mnt 
            sonra  tekrar lsblk komutu ile kontrol edersek baglntiyi kopardigmiz gorebiliriz
            Simdi silem komutunu tekrarr calistiralim

              sudo lvremove /dev/mapper/disk--group-test 
              Bu sefer bize gercekten silmek isteyip istemedigmizi sorar eger yes dersek o zaman siler, ve icerisindeki h ersey de yok olacaktir
              Silindigini teyiet etmek icin 
              sudo vgs dersek LV karsinda 0 gelecektir, VFree alaninin arttigini da gorebilirz 

              !Istersek Phsiycal volume leri de silip phsycal disklerin eski halleerine donmelerini saglayabliriz

              sudo pvs(phsiycal volume scale) den sahip oldgugumz phsical volume listesini gorebliriz

              Bunlardan /dev/sdc yi silmek istersek

              sudo pvremove /dev/sdc(silmek istedgimz aygitin ismi)
              sudo pvs ile tekrar kontrol ederek goreiblirz silindignini        
              
              !Olusturmus oldugumuz grubu da silebilirz
              sudo vgs ile disk-group isimli volume group u da silebiliriz 

              sudo vgremove disk-group  diyerek silebiliriz

              sudo vgs


              !PROCESS ISLEM YONETIMI 
              Process-islem

              Process- Program calistirildiginda, diskteki data RAM e yuklenir
              Sonra CPU(islemci) RAM deki talimatlari alip isler..Iste islem budur

              Bash(Kabuk) un baslattigi islemler
              Kabuktan bagimsiz olarak baslatilan islemler

              Bash(Kabuk) un baslattigi islemler
              1-Onplandaki(Foreground) islemler(terminal araclarina bagimli islemler-konsol, kullanici etkilesimine bagimli)
              2-Arkaplandaki(Background) islemler(Terminal araclarindan bagimsiz olan islemlerdir. Konsole, Kullnicin etkilesiminden bagimsizdir. KUllanici etkilesimine ihtiyac duymadan bu islemler arka planda calismaya devam ederler, kendi islevlerini yerine getirirler)

              Onplandaki Islem Ornekleri

              !firefox komutunu girersek gidip firefox browser i calistirir va on planda biz bunu actgmz icin, konsole uzerinde firefox aracini calistirmak la mesgul oldugu icin, biz konsoele da baska komutlar calistiramayiz.

              !Ayni firefox komutunu arka planda baslatmak istersek o zaman:
              firefox & komutu ile calistiririz ve firefox acilir, ve biz ayni konsole da ls, echo gibi komutlari calistirabildigmizi gorebiliriz

              !DIKKAT
              adem@adem-ThinkPad-13-2nd-Gen:~$ firefox &
              [1] 240985
              Benzersiz islem numarasini da ekrana bastiriyor arka planda islemi baslattiginda ki biz bu islemi yonetmek icin bu id numarasini kullanabiliriz

              !BASH KABUGUNDA IS KONTROLU | JOB CONTROL

              BAsh kabugu araciligi ile baslatilan islemler yine bash kabugu uzeirnden kontrol edilebiliyor
              
              adem@adem-ThinkPad-13-2nd-Gen:~$ firefox &
              [2](Mevcut Bash kabugu uzerinde temsil edilen islem) 241886(PROCESS ID)
              Bash uzerinde ki islemleri numaralandiriyor..1,2,3 diye ki kac islem varsa ona gore sirayla numara veriyor. Biz kabuk uzerindeki islemleri yonetirken, iste bu bash kabugu uzerinde temsil edilen numarayi kullanacagiz

              !Bash kabugunun-shell arka planda calisan isleerini gormek icin jobs komutu kullanilir
              jobs
              [2]+  Running                 firefox &
              adem@adem-ThinkPad-13-2nd-Gen:~$ 
              
              jobs komutu bash kabugu uzerinde olan bir komuttur.BAsh kabugu kendi kontrolundeki firefox isleminin ciktsini ekrana bsmis oldu
              Su an sistemimiz uzerinde pekcok islem calisiyor ama, bash kabugu  yalnizca jobs yazinca ekrana basilan islemlerden sorumludur

              !ANLAMAK COK ONEMLI BURAYI COK DIKKAT EDELIM
              Biz bu durumu gormek icin yeni bir konsole acariz. Biz yeni bir konsole actigimiz zaman, yeni actigmiz consle un arka da calisan bash kabugu tabi ki, bir onceki console uzerinden jobs yazinca gelen islemlerden olan arkada calisan firefox islemlerinden sorumlu degildir!!!!!!! 
              Is olarak, islem hangi console,  yani hangi bash kabugu tarafindan baslatilmis ise o bash kabugu o islemden sorumludur
              !HER BIR CONSOLE UN ARKADA AYRI BIR BASH KABUGU VARDIR
              Yen i actigmiz console da jobs komutu herhangi bir cikti vermeyecektir. Cunku bu bash kabugu herhangi bir islem baslatmadi henuz!!!!
             adem@adem-ThinkPad-13-2nd-Gen:~$ jobs
             !Peki nasil kontrol edebiliriz...
             
             !Arka plandaki firefox aracni onplana almak icin
               -fg(foreground) 2(Bash kabugunda temsil edilen islem numarasi)
               -fg(foreground) 241886(ProcessId) sini vererek de yapabiliriz

               Islemi onplana aldgini da ayni console veya terminalde herhangi bir komut ornegin ls, echo ..calistiramayiz, ordan anlayabiliriz. Ama arka planda calistigi zaman, console veya terminalde ls,echo... gibi komutlar calistirabiliriz

               !Foreground-ONplanda calisan isi nasil backgrounda aliyoruz!!!

               !Oncelikle durdurmak gerekir- CTRL-Z Ile durdurabiliriz

               !Bash kabuğunda ön planda çalışan bir işlemi kesintiye uğratmak-durdurmak için hangi kısayolu kullanabiliriz ? CTRL-C

               !Bash kabuğunda durdurulmuş bir işlemi arka plana almak için hangi komutu kullanabiliriz ? bg pid(process id)
               Asagidaki gibi sonuc aliriz
                ^Z
                [1]+  Stopped                 firefox

               Sonra da durdurulmus olan islemi arka plan da devam ettirebilmek icin 

               adem@adem-ThinkPad-13-2nd-Gen:~/Linux-works$ bg 1
              [1]+ firefox &
              Artik arka plan da calisiyor, bu nu teyit etmek icin, once gidip firefox a bakariz calisip calismadignina bir de conolse. veya terminale, yani arka planda firefox u calistirmak icin kullandigmz konsole da eger ls, echo komutlrini kullanip cikti aliyorsak o zaman, arka planda calisiyor demektir

              !BU ISLEMI TAMAMEN SONLANDIRMAK ICIN

              kill %1(processnumber)

              adem@adem-ThinkPad-13-2nd-Gen:~/Linux-works$  kill %1
              jobs komutu ile de islemin sonlandirildgini gorebilirz
              adem@adem-ThinkPad-13-2nd-Gen:~/Linux-works$ jobs
              [1]+  Terminated              firefox
              adem@adem-ThinkPad-13-2nd-Gen:~/Linux-works$ 


              !Kabuk kendi baslattgi islemlerini kontrol edebilecegi icin biz bazen bash kabugunun kontrolunden kurtulmak isteyebiliriz

              Arka plan da firefox u baslattigmz zaman

              adem@adem-ThinkPad-13-2nd-Gen:~/Linux-works$ firefox &
              [1](is numarasi) 256204(benzersiz islem numarasi)

            [1](is numarasi):Bu su an mevcut kabugun yonetiminde oldugu numara. Mevcut kabugun baslattigi isi yonetirken burdan yapariz
            256204(benzersiz islem numarasi):Tum sistem genelindeki islemleri yonetirken kullanacagimz numaradir

            Biz bu sekilde firefox arkada calisirken, kapatirsak console veya terminalde herhangi birsey gerceklesmmeyecek
            Eger ben firefox u kapatmadan direk console u kapatacak olursam, mevcut bash-shell kapatilacagi icin, bu firefox aracini baslatan bash  kabugu da bu console a ait oldugu icin, firefox araci da otomatik olarak kapatilacaktir. Cunku bu firefx islemini kontrol eden yapi console veya terminal ile beraber arka planda komutlarimizi yorumlayan bash-shell kabuk yapisiidir. Console kapaninca o an o console da baslatilan islemlerini sahipligi kyabolacagi icin, o islemlerde kapatilcaktir

            !Eger firefox aracini arkada baslattiktan sonra biz console veya terminal i kapatigimzda firefox da kapanmasin ya da firefox un bash kabuguna bagli olmasin,bash kabugunun kontrolunden ciksin istersek, biz console-terminal i kpapatsak bile arac calissin dersek :
            disown %1(Bu is numarali islemi sahiplikten kurtar, yani bash sahipliginden kurtararak, artik console veya terminal kapatilma ile o bash kabugunun baslattigi islemler kapatilmamis olacaktir!)

            !Kabuğun başlattığı bir işlemi, kabuğun kontrolünden çıkarmak için hangi komutu kullanabiliriz ? disown %1
            is numaralarini da muhtemelen jobs araci ile gorebilriz

            Herhangi bir sonuc almayiz cuknku firefox aracini mevcut bash kabugunun job kontrolunden cikarmis olduk
            disown %1
            Yani artik mevcut bash kabugu, bu firefox aracini yonetmiyor..Ondan dolayi jobs bos geliyor
            adem@adem-ThinkPad-13-2nd-Gen:~/Linux-works$ jobs

            !Artik console u biz kapatsak bile, firefox aracim calismaya devam edecektir

            !BASH KABUGU KENDI BASLATTGI ISLEMLER UZERINDE SAHIPLK BILGISI VARDIR ONEMLI!!!!

            !COKLU ISLEMLER BASLATMAK | KOSUL OPERATORLERI
            BIRDEN FAZLA ISLEMI KOSUL OPERATORLERI ILE BASLATMAK
            & Bir islemi arka planda baslatmak icin kullanilir
            mousepad &  diyerek baslatabiliriz

            ||  yada kosulu(ilk komut basarisiz olursa 2. komutun calistirilmasi saglanabilir)
            komut1 || komut2  (1.komut basarili olursa 1.komut claisir, 2. calismaz, ama 1.komut basarisiz olursa o zamanda 2.komut calisir)

            echo bir || echo iki
            bir
            asdf || echo iki
            iki

            && VE operatoru
            Tum komutlar hatali isleme denk gelinceye kadar sirasi ile calistirilir 

           adem@adem-ThinkPad-13-2nd-Gen:~/Linux-works$ echo "one" &&  echo "two" && adfasdf && echo "fire"
            one
            two
            adfasdf: command not found

            && Bu komut genellikle sistemi guncellerken kullanilir!!!!!
            sudo apt update && sudo apt upgrade
            (ONce repostroy ler guncellensin ki, komutlar da guncellenenegi zaman guncellenmis repostoryler uzerinden guncellenmis olsun...yok ilk komut basarisiz olursa da o zaman hic upgrade yapmasin..)
            echo bir && echo iki && asddf && echo dort
            
            ;  BU SEMICOLON ILE DE SIRASI ILE TUM KOMUTLARIN CALISTIRILMASI ICIN KULLANILIR
            echo "bir" ; echo "iki" ; dfadsas;  echo "dort"
            TUM KOMUTLAR HATALI BILE OLSA CALISTIRACAKTIR...HICBIRYERDE DURMAYACAK!!

            adem@adem-ThinkPad-13-2nd-Gen:~/Linux-works$ echo "one" ; echo "two" ; dsaf; echo "four"
            one
            two
            dsaf: command not found
            four
            adem@adem-ThinkPad-13-2nd-Gen:~/Linux-works$ 

            BU MANTIKSAL OPERATORLERI BIRLIKTE DE KULLANABILIRIZ!!!!!

            dfasdfsad || echo "one" ;  sadfad ; echo "two" ; xyzt ; echo "three";
            one
            sadfad not found
            two
            xyzt not found
            three

            echo "one"  || dfasdfsad;  sadfad ; echo "two" ; xyzt ; echo "three";
            one
            sadfad not found
            two
            xyzt not found
            three
            !Buraya dikkat ilk once || isaretine gore 1.komut calistigi icin 2 .komut calismayacak ama, 2. komut u gecince ; ile karsilastigi icin diger komuta gececek calisitirmak icin....Cunku || kosulu sadece onun saginda ve solunda olan komutlar arasinda gecerlidir, ve ondan sonra bakar devaminda baska komutlar var ise sirasi ile onlara devam edecektir!!!
            !AMA BIZ || KOSULUNU BIRDEN FAZLA KOMUTUN KENDI ARASINDAKI DIGER KOSUL OPERATORUNUN SONUCUNDAN CIKAN NETICEYE BAGLAMAK ISTERSEK O ZAMAN DA ONLARI PARANTEZ ICINE ALMAK GEREKIR, BUNA DA KOMUT GRUPLAMA DENIYOR
            echo "one"  || (dfasdfsad;  sadfad ; echo "two" ; xyzt ; echo "three");

            adem@adem-ThinkPad-13-2nd-Gen:~/Linux-works$ echo "one"  || (dfasdfsad;  sadfad ; echo "two" ; xyzt ; echo "three");
            one

            adem@adem-ThinkPad-13-2nd-Gen:~/Linux-works$ pirie  || (dfasdfsad;  sadfad ; echo "two" ; xyzt ; echo "three");
            pirie: command not found
            dfasdfsad: command not found
            sadfad: command not found
            two
            xyzt: command not found
            three

            SEKLINDE CALISTIRABILIRIZ!!!!

            !İlk komut başarılı ise ikinci komutu çalıştıracak komut bütünü hangisidir ?
            komut1&&komut2
            !İlk komut başarısız ise ikinci komutu çalıştıracak komut bütünü hangisidir ?
            komut1||komut2

            !Mevcut bash kabuğunun yönettiği işleri listelemek için hangi komut kullanılır ? jobs komutu

            !ISLEMLERIN TAKIBI
            ONCELIKLE SISTEMSEL ISLEMER YANI SADECE BASH KABUGUNUN KONTROUNDE OLAN DEGIL DE TUM SISTEMSEL ISLEMLERI NASIL TAKIP EDECEGIZ!

            !ANLIK OLARAK ISLEMLERI TAKIP ETMEK - top komutu
            
            PID(ProcessId) USER %CPU(YUZDESEL) %MEM(YUZDESEL) TIME
            BU BILGILERI ALABILIRIZ
            Q YA BASARAK DA CIKARIZ

            !htop araci ile top dan daha gelismis bilgileri alabiliriz,anlik olarak sistemsel islem kontrolu yapabilirz

            Bu arac htop araci dahili bash komutu veya araci degildir ondan dolayi eger sistemimizde bulunmuyor ise bunu oncelikler kurmamiz gerekir sudo apt htop diye...

            F3:SEARCH
            F4:FILTER
            F5:TREE(SECTIGMIZ ISLEMI AGAC GIBI ALT ISLEMLERI ILE GOREBILIRIZ)
            F6:SORTBY
            F7:NICE
            F9:KILL(SECILEN ISLEMI SONLANDIRABILIRIZ)
            F10:QUIT

            !ps(Process Status) araci ile yalnizca sua nda calismakta oldugmuz mevcut bash-shell kabugumz uzerindeki islemler hakkinda bilgi almak icin kullnaabiliriz!!!
            !ps -aux(all user) 
            Tum kullanicilarin user-kullanici bilgilerini de gormek istiyorum ve terminallerle kontrol edilmeyen, yani herhangi bir terminalin kontrolunde olmayan islemleri de gormek icin x secenegini ekleriz.

            !Anlik olarak veri takibi - htop
            !O andaki prosess lerin durumunun ciktisini almak icin de ps -aux  komutu kullanilir

            !ISLEMLERIN YONETIMI | SINYALLER
            Linux isletim sisteminde islemleri yonetmek icin, o islemlerle iletisim kurmak icin, sinyaller gondermemiz gerekir
            Bu sinyal gonderme islemi icinde kill isimli araci kullanabiliriz! 

            !kill araci ile gonderebilecegimiz sinyaller 

            adem@adem-ThinkPad-13-2nd-Gen:~$ kill -l
            1) SIGHUP	 2) SIGINT	 3) SIGQUIT	 4) SIGILL	 5) SIGTRAP
            6) SIGABRT	 7) SIGBUS	 8) SIGFPE	 9) SIGKILL	10) SIGUSR1
            11) SIGSEGV	12) SIGUSR2	13) SIGPIPE	14) SIGALRM	15) SIGTERM
            16) SIGSTKFLT	17) SIGCHLD	18) SIGCONT	19) SIGSTOP	20) SIGTSTP
            21) SIGTTIN	22) SIGTTOU	23) SIGURG	24) SIGXCPU	25) SIGXFSZ
            26) SIGVTALRM	27) SIGPROF	28) SIGWINCH	29) SIGIO	30) SIGPWR
            31) SIGSYS	34) SIGRTMIN	35) SIGRTMIN+1	36) SIGRTMIN+2	37) SIGRTMIN+3
            38) SIGRTMIN+4	39) SIGRTMIN+5	40) SIGRTMIN+6	41) SIGRTMIN+7	42) SIGRTMIN+8
            43) SIGRTMIN+9	44) SIGRTMIN+10	45) SIGRTMIN+11	46) SIGRTMIN+12	47) SIGRTMIN+13
            48) SIGRTMIN+14	49) SIGRTMIN+15	50) SIGRTMAX-14	51) SIGRTMAX-13	52) SIGRTMAX-12
            53) SIGRTMAX-11	54) SIGRTMAX-10	55) SIGRTMAX-9	56) SIGRTMAX-8	57) SIGRTMAX-7
            58) SIGRTMAX-6	59) SIGRTMAX-5	60) SIGRTMAX-4	61) SIGRTMAX-3	62) SIGRTMAX-2
            63) SIGRTMAX-1	64) SIGRTMAX	
            adem@adem-ThinkPad-13-2nd-Gen:~$ 

            BU SINYALLER OZEL AMACLAR VE PROGRAMLAMA ICIN KULLANILIYOR
            TEMEL SISTEM YONETIMI ICIN BUNLARDAN BIRKAC TANESI ISIMIZI GORUR

            !Calismakta olan birislemi duraklatmak istiyorsak, 19 numarali SIGSTOP isimli sinali kullaniriz
            !Calismakta olan birislemi aninda zorla sonlandirmak istiyorsak da , 9 numarali SIGKILL isimli sinali kullaniriz
            !Durdurmus oldugumuz bir islemi devam ettirmek icinde 18 numarali SIGCONT secenegini kullanabiliriz


            Oncelikle gidip libre offici acariz icine bir kelime yazariz
            Sonra ise, su anda calisan status u gormek icin de,  
            ps aux ile 
            adem      262853  0.0  0.0  90820  4864 ?        Sl(Sleep-arka planda oldugu icin)   01:03   0:00 /usr/lib/libreoffice/program/oosplash --writer
            adem      262870  6.1  1.7 1038356 286780 ?      Sl   01:03   0:03 /usr/lib/libreoffice/program/soffice.bin --writer
            PID(PROCESS ID) yi  de bildgimize gore pid uzerinden istegimiz sinyalleri gonderebiliriz

            19 SIGSTOP
            262870 PID 
            adem@adem-ThinkPad-13-2nd-Gen:~$ kill -19 262870
            adem@adem-ThinkPad-13-2nd-Gen:~$ kill -19 262853
            DIYEREK LIBREOFFICE ARACINI DURDURMUS OLURUZ, 
            VE TEKRAR PROCESS STATUSE BAKACAK OLURSAK 

            ps aux 
            adem      263508  0.0  0.0  90820  4736 ?    Tl(Durduruldugunu gosterir)   01:16   0:00 /usr/lib/libreoffice/program/oosplash --writer
            DURDURULAN ISLEMIN KALDIGI YERDEN DEVAM ETTIRMEK ICIN ISE 

            adem@adem-ThinkPad-13-2nd-Gen:~$ kill -18 263508

            ps aux 
            adem      263508  0.0  0.0  90820  4736 ?        Sl   01:16   0:00 /usr/lib/libreoffice/program/oosplash --writer

            LIBRE OFFICE ISLEMINI SONLANDIRMAK ICIN ISE ASAGIDAKI KOMUTU CALISTIRIRIZ
            adem@adem-ThinkPad-13-2nd-Gen:~$ kill -9 263525

            BIRAZ DAHA NAZIK SEKLIDE KAPATMAK VE RAM UZERINDE TEMIZLIK DE YAPMASINI ISTERSEK
            15) SIGTERM
            kill -15 263525

            !NORMALDE BIZ SADECE KILL KOMUTUNU GIRERSEK DE 15 NUMARALI SIGTERM SINAYLI GONDERILEREK NAZIKCE KULLANILAN PROGRAM KAPATILIYOR
            EGER BIR ARAC BU SINYALE YANIT VERMEZSE O ZAMAN -9 NUMARALI SINAYLI GONDEREREK FORCE-ZORLA KAPATTIRMS OLURUZ 
            kill 297346(PID-PROCESS ID NO BUNU ps aux komutu ile o anda calisan process satutsu nde gorebiliriz ya da htop ile gorebiliriz)

          
            Ornegin biz calismakta olan , islemin ismi ile sonlandiradabiliriz
            Cunku islem sonlandirmak icin bizim PROCESS ID -PID  e ihtiyacimz vardi, ve bunu ps aux o anki process statusu ile ya da htop ile gorebiliyorduk...

            Calismakta olan islemin ismi ile ilgli isleme sinyal gondererek islemi sonlandirabiliyoruz bunun icin 
            killall

            Arka planda calismak uzere 3 tane islem baslatiryoruz oncelikle 
            sleep 1000 & sleep 400 & sleep 200 &
            [4] 298162
            [5] 298163
            [6] 298164
            [2]   Exit 1                  sleep
            [3]   Exit 1                  sleep
            adem@adem-ThinkPad-13-2nd-Gen:~/Linux-works$ 

          !Tum islemleri yalnizca isilmeri ile sonlandirmak icin killall isimli araci kullanacagiz 
          !sudo killall -9 sleep(islem ismi sleep olanlari,  sonlandir)

          !Gormek icin ise, jobs komutu kullanilir

          killall -9 sleep komutundan once ;
          adem@adem-ThinkPad-13-2nd-Gen:~/Linux-works$ jobs
          [1]   Running                 sleep 1000 &
          [4]   Running                 sleep 1000 &
          [5]-  Running                 sleep 400 &
          [6]+  Done                    sleep 200

          adem@adem-ThinkPad-13-2nd-Gen:~/Linux-works$ killall -9 sleep
          [1]   Killed                  sleep 1000
          [4]-  Killed                  sleep 1000
          [5]+  Killed                  sleep 400
          adem@adem-ThinkPad-13-2nd-Gen:~/Linux-works$ jobs
          Gordugumz gibi, jobs deyince arkada calisan tum islemleri kaldirdigi icin, hicbir calisan islem goremiyoruz

      adem@adem-ThinkPad-13-2nd-Gen:~/Linux-works$ killall -9 sleep
      BOYLE YAPTIGMZDA HANGI KULLANCIDA CALISIRSA CALISSIN, SLEEP ILE BSALAYAN TUM ISLEMLER TUM KULLANICILARDA SONLANDIRILACAKTIR

      BIZ BU SLEEP ISLEMINI HEM adem hem de ademtest kullanicisinda baslatacak olursam eger : 
      adem@adem-ThinkPad-13-2nd-Gen:~$ sleep 1000 & sleep 400 & sleep 200 &
      [1] 298652
      [2] 298653
      [3] 298654
      adem@adem-ThinkPad-13-2nd-Gen:~$ su -ademtest
      su: invalid option -- 'a'
      Try 'su --help' for more information.
      adem@adem-ThinkPad-13-2nd-Gen:~$ su - ademtest
      Password: 
      ademtest@adem-ThinkPad-13-2nd-Gen:~$ sleep 1000 & sleep 400 & sleep 200 &
      [1] 298669
      [2] 298670
      [3] 298671
      ademtest@adem-ThinkPad-13-2nd-Gen:~$ 

      Ve bu sleep islemelrini yalnizca ademtest kullanicisinda sonlandirmak istersem:

      ! killall -u ademtest -9 sleep yapariz

      ademtest@adem-ThinkPad-13-2nd-Gen:~$ jobs
      [1]   Running                 sleep 1000 &
      [2]-  Running                 sleep 400 &
      [3]+  Running                 sleep 200 &
      ademtest@adem-ThinkPad-13-2nd-Gen:~$ sleep -u ademtest -9 sleep
      sleep: invalid option -- 'u'
      Try 'sleep --help' for more information.
      ademtest@adem-ThinkPad-13-2nd-Gen:~$ killall -u ademtest -9 sleep
      [1]   Killed                  sleep 1000
      [3]+  Killed                  sleep 200
      [2]+  Killed                  sleep 400
      ademtest@adem-ThinkPad-13-2nd-Gen:~$ jobs
      ademtest@adem-ThinkPad-13-2nd-Gen:~$ exit
      logout
      adem@adem-ThinkPad-13-2nd-Gen:~$ jobs
      [1]   Running                 sleep 1000 &
      [2]-  Running                 sleep 400 &
      [3]+  Running                 sleep 200 &
      adem@adem-ThinkPad-13-2nd-Gen:~$ 

      Gordugumz gibi sadece ademtest kullanicisinda sleep ile ilgili komutlari sonlandirmis oldu

      kilall --help diyerek nelere gore filtreleme yapabilecegmizi gorebiliriz

      ! pgrep araci ile process grep, yani islemleri filtrelememizii sagliyor

    sleep islemi ile ilgili tum processleri bu arac ile arayip getirtebiliyoruz ve id lerini  de gormus oluyourz
      adem@adem-ThinkPad-13-2nd-Gen:~$ pgrep sleep
      298652
      [2]-  Done                    sleep 400
      [3]+  Done                    sleep 200
      adem@adem-ThinkPad-13-2nd-Gen:~$ 

      adem@adem-ThinkPad-13-2nd-Gen:~$ kill -9 $(pgrep sleep)
      $(pgrep sleep) bu PROCESS ID YI BIZE VERDIGINDEN DOLAYI...BU SEKILDE YAPABILIYORUZ
      adem@adem-ThinkPad-13-2nd-Gen:~$ jobs
      [1]+  Killed                  sleep 1000
      adem@adem-ThinkPad-13-2nd-Gen:~$ 

       !ISLEMLERIN ONCELIK SIRASI | NICE | RENICE 
       htop veya top aracini run ettgimzde, PRI VEYA PR KOLONU ILE PRIORITY YI GOREBILIYORUZ
      BU ISLEM ONCELIGINI GOSTERIYOR
      NI- DEGERI DE NICE DEGERI YANI BU ISLEMIN NE KADAR KIBAR OLDUGUNU YANI, BASKALARINA NE KADAR ONCELIK VERDGINI GOSTERIR
      NICE-RENICE ARACLARI ILE ILGILI ISLEM ONCELIKILERINI AYARLAYABILYORUZ

      !TMUX ARACI
      Bu arac sayesinde console uzderindeki verimliligimizi arttirabilyoruz
      Bu bash kabugnda inbuilt dahili olmadig i icin bunu sudo apt install tmux ile install etmeliyz
      sudo apt install tmux ile tmux u install ederiz

      Bu arac sayesinde tmux araci ile mevcut konsolumuzu birden fazla parcaya boolerek kullanabiliyoruz

      tmux diyerek calistirabiliriz araci 

      CTRL-B YE BASARIM SONRA DA % ISARETINE BASARSAK 
    AYNI CONSOLE U DIKEY OALRAK IKIYE BOLEREK 2 AYRI ALANDA ACABILMEMIZII SAGLAR

    EGER CONSOLU YATAY OLARAK BOLMEK ISTER VE ALT ALTA CONSOLE LARI KULLANMAK ISTERSEK O ZAMAN DA YINE 
    CTRL-B VE " BASARAK YAPABILIRIZ

    AYNI CONSOLE DA KI FARKLI TERMINALLER ARASINDA GECIS YAPARKEN CTRL-B BASTIKTAN SONRA YON TUSLARI ILE GECIS YAPABILIRIZ
    AYRICA SONLANDIRIP CIKMAK ISTEDGIMZ KONSOLE ICINDE EXIT YAZMAMIZ YETERLIDIR
    KOMUT SATIRINI KAPATMAK ISTEMEYIP DE ARKA PLAN DA CALISMASINI ISTERSEK EGER: BU NE ZAMAN KULLANISLIDIR, BIZ EGER DIREK SERVER I CONSOLE DAN Y ONETIYOR VE GRAFIK ARAYUUZMUZ YOK ISE O ZAMAN, MEVCUT CALISAN CONSOLE U ARKA PLANDA CALISMAYA DEVAM EDERKEN MEVCUT OTURUMUMUZDAN AYIRMAK ISTEYEBILIRIZ
    ORNEGIN top araci, o uzerinde calistirildigi console kapatilirsa duracktir ama biz console u kullanmaya devam etmek ama ayni zamanda top aracinin da calismaya devam etmesini istiyoruz arka planda....bu nasil olacak peki?
    CTRL-B D(detached)  tusanlarna basarsak eger 
    o zaman, tmax aracinin oturumu ayrilmis oluyor, ve top araci arka plan da calismaya devam edecektir..
    tmux attach -t(terminal no bu numara tmux CTRL-B-D ye basildiginda gelecektir zaten)

    CTRL-B-D
    adem@adem-ThinkPad-13-2nd-Gen:~$ tmux
  [detached (from session 0)]   
  adem@adem-ThinkPad-13-2nd-Gen:~$ tmux attach -t 0
  0 session no dur
  yazarak tekrardan top aracinin calisma durumun getirebilirz

  !bu ozellige ozellikle , server lara baglandigmiz da bir oturum actimigmizda bash console da ve o arada top veya htop gibi bir arac calistirip sonra da, o calisan arac calisirken komut yazamiyoruz ama biz hem aracin calismaya devam etmsini hem de mevcut oturumu korumak istiuyoruz, ve komut yazmak istyourz ayni komutta o zaman, mevcut calisan islemi arka plan a iste yukarda tarif ettgimz gibi aliriz

  tmux araci sayesinde, kopyalama islemi yapabiliriz!!
  KOMUT SATIRINDA CALSIRKEN MOUSE KULLANAMIYORZ OZELLIKLE, SERVER A BALANTI YAPTGIMZDA 
  VE MOUSE KULLANILMADIGNDAN KOPYALAMA YAPMAK COK ZORLASIYOR. TMUX ARACI ILE KOPYALAMAYI DA KOLAY YAPABILIIRZ

  CTRL-B [ ARACLARINA BASARSAK KOPLAYALAMA YAPABILIRZ CTRL-SPACE E BASARAK KAVLYE YON TUSLARI ILE ISTEDIGMIZ GIBI SECIM YAPABLIRI
  SECILEN ALANIN KOPYALANMASI IICN CTRL-W YA BASARIZ
  YAPISTIRMAK ICN ISE: CTRL-B ] TUSLARNA BASILIR

!SERVISLERIN YONETIMI
Servisler sistemimize islevsellik saglayan arka plan islevleridir 
Genellikle sistem basladiginda otomatik olarak baslatiliyorlar ve sistem calistigi sure boyunca da , aksini gerektiren bir durum olmadigi muddetce calismaya devam ediyorlar
Ornegin network ayarlari biz her seferinde bir konfigurasyon yapmiyoruz ama bunlar kendisi otomatik olarak baslatiliyor
Yani sistemimiz baslatilirken bizim ihtiyac duydugumuz pekcok yapi arka planda biz farketmden baslatilip calisiyor, biz sistemi kapatan kadar
Bunlar deamon olarak gecen servislerdir, arka planda calisirlar surkeli olarak

!systemd servis yoneticisi ve systemctl araci
!systemd hakkinda
systemd(d-daemon-arka planda calisan yazilim programi veya islem) araci
Bu arac kendi kontrolu altindaki yapiolari unit-birim diye ale aliyor

Unit Type      File Extension

Service unit    .service 
Target           .target 
 ..               .. 

Biz yalnizca  service unit e bakacgiz

!Systemctl araci
Systemd uzerinde servisleri yonetmek istedgimizde systemctl aracimizi kullaniriz

!systemctl list-units => Systemimizde aktif olan tum birimleri listelemk icin 
Karsimiza cok uzun bir liste gelecektir ve sonlarinda . uzantilari ile belirtilmistir, sistemimizde arka planda calisan servis birimleridir, daha dogrusu bircok farkli birim vardir, .service,.timer,.target,.socket....gibi var karsilarinda hangi fonksiyonu yerine getirdgi gorulebilir, ve su anda aktif olarak calisan birimleri gorebiliyoruz
Space tusuna bastikca daha asagi dogru inerek gorebilriiz
Sistemimizde aktif olan ve o anda calisan biirmlerdir bu karsimiza gelen birimler
EGer sistemimizde tum birimleri gormek istersek
!systemctl list-units --all  seklinde komutumuz girebiliriz
SPACE TUSU ILE ASAGI DOGRU ASAGIDA KALAN KISIMLARI GOREBILIRZ 
!systemctl list units --all --state=inactive (Yalnizca durumu inaktif olanlari listele demis oluuyoruz)

!systemctl status apache2.service(Spesifik olarak tek bir birim hakkinda bilgi almak istedgimzde)
apache2.service diye belirtmek gerekiyor cunku, sistem uzerinde apache2 isminde farkli birimlerde olabilir ondan dolayi biz apache2.service yazarak servis brimindekini kastettigmizi belirtmis oluyoruz aslinda

systemctl status apache2.service
 apache2.service - The Apache HTTP Server
     Loaded: loaded (/lib/systemd/system/apache2.service; enabled(Sistem baslatildiginda otomatik olarak baslatilacagini gosteriyor, aktif oldugunu gosteriyor); vendor preset: enabled(sistem baslatildiginda otomatik olarak, varsayilan olarak sistem baslarken baslatilacagini isaret ediyor))
     ilk enabled su anki durumunu aktif mi degil mi onu, 2. enabled ise varsayilan olarak, default olarak baslatilip baslatilmadingi belirtiyor
     /lib/systemd/system/apache2.service; burasi da servisin hangi konfigurasyon dosyasindan yuklendigini belirtir

          Active: active (running) since Thu 2023-12-21 00:59:16 CET; 3 weeks 0 days ago
      Su an aktif olarak calistigini gosteriyor

    !Bir servise nasil baslatilir :sudo systemctl start  dedikten sonra, service ismi girilir
    !sudo systemctl start apache2.service

    !adem@adem-ThinkPad-13-2nd-Gen:~$ sudo systemctl start apache2.service
[sudo] password for adem: 
!adem@adem-ThinkPad-13-2nd-Gen:~$ systemctl status apache2.service(Servisimizin calisip calismadingi ve durumunu bu sekilde kontrol ederiz)
● apache2.service - The Apache HTTP Server
     Loaded: loaded (/lib/systemd/system/apache2.service; enabled; vendor preset: enabled)
     Active: active (running) since Thu 2023-12-21 00:59:16 CET; 3 weeks 0 days ago
       Docs: https://httpd.apache.org/docs/2.4/
       Process: 321375 ExecReload=/usr/sbin/apachectl graceful (code=exited, status=0/SUCCESS)
       (Hangi dizindeki aracin calistirildigi) 
Main PID: 883 (apache2)(Servisin islem numarasi-process id-pid)

!sudo systemctl stop apache2.service(servisimzi durdurmak icin)
!systemctl status apache2.service(diyerek statusu kontrol edecek olursak eger)

adem@adem-ThinkPad-13-2nd-Gen:~$ sudo systemctl stop apache2.service
[sudo] password for adem: 
adem@adem-ThinkPad-13-2nd-Gen:~$ systemctl status apache2.service
○ apache2.service - The Apache HTTP Server
     Loaded: loaded (/lib/systemd/system/apache2.service; enabled; vendor preset: enabled)
     Active: inactive (dead) since Fri 2024-01-12 01:08:21 CET; 8s ago
       Docs: https://httpd.apache.org/docs/2.4/
    Process: 321375 ExecReload=/usr/sbin/apachectl graceful (code=exited, status=0/SUCCESS)
    Process: 325302 ExecStop=/usr/sbin/apachectl graceful-stop (code=exited, status=0/SUCCESS)
   Main PID: 883 (code=exited, status=0/SUCCESS)
        CPU: 2min 38.241s

! sudo systemctl restart apache2.service(Yeniden baslatmak icin)
Birim dosya uzerinde, bir konfigurasyon degsikligi yaptik ve ilgil dosyanin konfigurasyon degisikligi ni okuyup tekrar baslatsin istersek o zaman kullaniriz
Yani kisacasi konfiugrasyonda degiskilik yaptiktan sonra , apache2.service sini yeniden baslatarak degisikligi gorebilmesini sagliyoruz aynen web de sayfa yenileyerek yaptigimz degisikligin gecerli olmasni saglagimz gibi

!sudo systemctl reload apache2.service(Eger servisi yeniden baslatmak istemezsek ama, konfigurasyon degisiklklerinin okunmasini istersek kullaniriz)
Sadece konfigurasyon dosyasinin tekrar okunmasi saglanir, ve surekli calismaya devam eder

!sudo systemctl enable apache2.service(Servisi aktif veya pasif hale getirebilirz, servisin sistem baslangicinda otomaik olarak baslatilip baslatilmaycagini ayarlayabiliriz)

!sudo systemctl disable apache2.service

 Loaded: loaded (/lib/systemd/system/apache2.service; enabled(servisimzin sistem baslangicinda otomaik olarak baslatilacak sekilde konfigure edilmis); vendor preset: enabled)

Biz apache2.service yi aktiflestirdigmz zaman, aslinda baska bir birim altinda baska bir birim dosyasina apache2.service dosyasina sembolik olarak baglandigini goruyoruz. 
Sistemin baslangicinda otomatik olarak baslatilabilmesi icin, hali hazirda aktif olarak otomatik olrak baslatilan bir birim altinda topluyoruz, bir grup altinda topluyoruz ve bu gruba dahil oldugu iincde bu servise baslangicta baslatilmis oluyor

!Disable yapip, tekrar enable a cevirecek olursak 
adem@adem-ThinkPad-13-2nd-Gen:~$ sudo systemctl disable apache2.service
Synchronizing state of apache2.service with SysV service script with /lib/systemd/systemd-sysv-install.
Executing: /lib/systemd/systemd-sysv-install disable apache2
Removed /etc/systemd/system/multi-user.target.wants/apache2.service.
adem@adem-ThinkPad-13-2nd-Gen:~$ systemctl status apache2.service
● apache2.service - The Apache HTTP Server
     Loaded: loaded (/lib/systemd/system/apache2.service; disabled(cunku disabled yaptik systemctl disable apache2.service ile); vendor preset: enabled)
     Active: active (running) since Fri 2024-01-12 01:09:06 CET; 13min ago


     adem@adem-ThinkPad-13-2nd-Gen:~$ sudo systemctl enable apache2.service
Synchronizing state of apache2.service with SysV service script with /lib/systemd/systemd-sysv-install.
Executing: /lib/systemd/systemd-sysv-install enable apache2
Created symlink /etc/systemd/system/multi-user.target.wants/apache2.service → /lib/systemd/system/apache2.service.
adem@adem-ThinkPad-13-2nd-Gen:~$ 

     Biz apache2.service yi aktiflestirdigmz zaman, aslinda baska bir birim altinda baska bir birim dosyasina apache2.service dosyasina sembolik olarak baglandigini goruyoruz. 
Sistemin baslangicinda otomatik olarak baslatilabilmesi icin, hali hazirda aktif olarak otomatik olrak baslatilan bir birim altinda topluyoruz, bir grup altinda topluyoruz ve bu gruba dahil oldugu iincde bu servise baslangicta baslatilmis oluyor

!Created symlink /etc/systemd/system/multi-user.target.wants/apache2.service → /lib/systemd/system/apache2.service.
Dikkat edelim, burda .target biriminden yonlendiriiyyor

systemd uzerinde cesitli target unit-birimleri var. Biz bu gruplara istedgimiz durumda istedgimz birimleri dahil ederek, istedgimz ortami, olusturabiliyoruz 
Ytarget-k.service,b.mount, x.service, apache2.service 
Xtarget-t.service,z.mount,x.service,apache2.service 
target-y.service,z.mount,x.service, apache2.service

Farkli durumlar icin birimlerin sistem acilisinda, otomatik olarak aktiflestirilmesini istedgimz durumlarda systemd uzerinde, target ismi verilern bu birimleri kullaniyoruz
Target sayesinde sistem baslangicinda baslatilmasini istedgimiz tum birimleri, ayni gruba dahil edebiliyoruz
!Target birimleri
poweroff.target(systemd nin tum birimleri sonlandirmasinn sonucu, sistemin kapanmasini saglayan bir grup)
rescue.target()
multi-user.target() 
graphical.target()
reboot.target ()


! systemctl get-default(sistemdeki varsayilan target bilgisini ogrenmek icin)
adem@adem-ThinkPad-13-2nd-Gen:~$ systemctl get-default
graphical.target(Biz bunu kullandgimiz icin otomatik olarak grafik ara yuze sahip olan ve aga baglanabilen cok kullanicisi olan tum birimler baslatilmsi oluyor, )
!Varsayilan target birimini degistirmek icin:
systemctl list-units --type target --all 
ile target birimlerini acariz once...
Network target i(Ag baglnantsini barindiran targettir)

sudo systemctl set-default multi-user.target

sudo systemctl isolate multi-user.target 
sudo systemctl isolate reboot.target(Bu anlik olarak, sistemi  yeniden bslatilcacka seklide birim dosyasini konfigure eder ve aninda sistemi yeniden baslatacaktir) 


In systemd, a target unit is a special kind of unit that represents a specific system state or a group of services rather than a single service. Target units are used to manage the startup or shutdown of services and other units in a more organized and predictable way. 
In Ubuntu and other Linux distributions using systemd, you can use target units to control the system's runlevel and to manage services efficiently. Commonly used target units include multi-user.target (for console-based multi-user mode), graphical.target (for graphical desktop mode), and others for specific purposes.


!SErvisler sudo nano /etc/systemd/system/

!YENI BIR SERVIS OLUSTURULMASI

User
adem@adem-ThinkPad-13-2nd-Gen:~$ cat > time.sh
#! /usr/bin/bash

while true; do
	date >> /home/adem/Desktop/time.log
	sleep 60
done
adem@adem-ThinkPad-13-2nd-Gen:~$ chmod +x time.sh

#!/usr/bin/bash: This is called a shebang line. It tells the system which interpreter to use to execute the script. In this case, it specifies that the Bash shell (/bin/bash) should be used. Bash kjabugunda calistrilmasi icin shebang sekinde belirtmemiz gerekir!!!ONdan dolayi bu sekilde blirtirirz... ve de bash in tabi ki dosya yolu

./time.sh  dersek Desktop altinda time.log dosyamizin olustugunu gorebiliriz ve script dosyamizin sorunsuzca calistigini gorebiliriz

ARka plan da servis olarak calismaya devam etmesi icin kendimize yeni bir servis tanimlayalijm
Yen bir servis tanimlayabilmemiz icin sudo nano /etc/systemd/system/time.service buraya ekliyoruz
sudo nano /etc/systemd/system/time.service/time.service
[Unit](Ilgili servisin ne is  yaptigi aciklamasi)
Description=time.sh script file description 

[Service](Servis ile ilgil konfigurasyonlari tanimalyabilecegim basliktir, bu baslik altinda servisin calisma sekli hakkinda ihtiyaca gore, islemler yapabilirz, git asgidaki dosyayi calistir, script dosyasini calistir)
ExecStart=/home/adem/time.sh

[Install](Bu birimn hangi target ile baslatilcagini soyluyor. Biz standart olark, multi-user.target grubunu belirtiyoruz, bu sayede sistem baslangicinda bu servisi baslatip script dosyasi calistiriliyor olacak..Sistem baslangicinda otomatik baslatilacak olan birim )
WantedBy=multi-user.target

Bu dosyayi kaydedip cikariz:

Bu degisikliklerin systemd uzerinde gecerli olmasi icin, y eni bir servis tanimladigmiz icin, 
!sudo systemctl daemon-reload  diye konfigurasyonlari guncellesin diye calisitririz

!adem@adem-ThinkPad-13-2nd-Gen:~$ systemctl status time.service
○ time.service - time.sh script file description
     Loaded: loaded (/etc/systemd/system/time.service; disabled; vendor preset: enabled)
     Active: inactive (dead)
!adem@adem-ThinkPad-13-2nd-Gen:~$ sudo systemctl enable time.service
Created symlink /etc/systemd/system/multi-user.target.wants/time.service → /etc/systemd/system/time.service.
!adem@adem-ThinkPad-13-2nd-Gen:~$ sudo systemctl status time.service
○ time.service - time.sh script file description
     Loaded: loaded (/etc/systemd/system/time.service; enabled; vendor preset: enabled)
     Active: inactive (dead)
adem@adem-ThinkPad-13-2nd-Gen:~$ sudo systemctl start time.service
!adem@adem-ThinkPad-13-2nd-Gen:~$ sudo systemctl status time.service
● time.service - time.sh script file description
     Loaded: loaded (/etc/systemd/system/time.service; enabled;(Bu olusturumus oldugmz servisimiz multi-user.target isimli birim-unit dosyasi ile iliskili olan dizine sembolik olarak baglanmis oldu.Boylelikle, sistemimiz multi-user.target olarak baslatildiginda time.server birim dosyamizda otomatik olarak baslatilacak. Bu durumu teyit etmek icin sistemi yeniden baslatarak gorebilirz) vendor preset: enabled)
     Active: active (running) since Sun 2024-01-14 18:33:06 CET; 9s ago
   Main PID: 395499 (time.sh)
      Tasks: 2 (limit: 18954)
     Memory: 556.0K
        CPU: 6ms
     CGroup: /system.slice/time.service
             ├─395499 /usr/bin/bash /home/adem/time.sh
             └─395505 sleep 60

jan. 14 18:33:06 adem-ThinkPad-13-2nd-Gen systemd[1]: Started time.sh script file description.
adem@adem-ThinkPad-13-2nd-Gen:~$ 

!Gidip multi-user.target.wants directory sine bakacak olursak asagida time.service dosyasinin oldugnu gorebiliriz
!adem@adem-ThinkPad-13-2nd-Gen:~$ ls /etc/systemd/system/multi-user.target.wants/

!lrwxrwxrwx 1 root root 32 jan.  14 18:32  time.service -> /etc/systemd/system/time.service

 anacron.service                kerneloops.service            snap-core20-2015.mount                  'snap-gnome\x2d3\x2d38\x2d2004-140.mount'        'snap-snap\x2dstore-638.mount'
 apache2.service                ModemManager.service          snap-core20-2105.mount                  'snap-gnome\x2d3\x2d38\x2d2004-143.mount'        'snap-snap\x2dstore-959.mount'
 avahi-daemon.service           mysql.service                 snap-core22-1033.mount                  'snap-gnome\x2d42\x2d2204-132.mount'              systemd-oomd.service
 console-setup.service          networkd-dispatcher.service   snap-core22-864.mount                   'snap-gnome\x2d42\x2d2204-141.mount'              systemd-resolved.service
 cron.service                   NetworkManager.service        snapd.aa-prompt-listener.service        'snap-gtk2\x2dcommon\x2dthemes-13.mount'          thermald.service
 cups-browsed.service           openvpn.service               snapd.apparmor.service                  'snap-gtk\x2dcommon\x2dthemes-1535.mount'         time.service

!Yani ozetle biz, olusturdgmzu time.service dosyasmmizi multi-user.target  a isaret ettgimiz icin, multi-user birimi baslatildiginda, sembolik olarak time.service dosyamizda tetiklenip baslatilacak. Dolayisi ile sistem baslatildiginda  otomatik olarak time.service  dosyasi baslatilmis olacak



!.sh dosyasi nedir?
A .sh file in Linux is a shell script file. Shell scripts are used for automating tasks in a Unix-like operating system such as Linux. These scripts are essentially a series of commands that are executed sequentially by the shell interpreter. Here are some key points about .sh files:
Scripting Language: The commands in a .sh file are written using the syntax of a shell scripting language, usually the Bourne shell (sh) or Bash (Bourne Again SHell).
Execution: To run a .sh file, you can either pass it as an argument to a shell interpreter like bash (e.g., bash script.sh) or execute it directly by setting the execute permission and invoking it (e.g., ./script.sh).
Permissions: For a .sh file to be executable, it must have execute permissions. This can be set using the chmod command (e.g., chmod +x script.sh).
Shebang Line: Often, .sh files start with a shebang line (e.g., #!/bin/bash). This line specifies the path to the interpreter that should be used to run the script. If this line is present, you can run the script directly without having to specify the shell interpreter.
Purpose: Shell scripts can be used for a wide range of tasks, from simple file

manipulations to complex program executions. They are commonly used for system administration tasks, automating repetitive tasks, running a series of commands in sequence, and even for creating simple programs.

Portability and Compatibility: While .sh files are primarily associated with Unix-like operating systems, they can also be run on other platforms that have a compatible shell interpreter, like Bash on Windows (through WSL or Cygwin).
Editing: These scripts can be created and edited using any text editor. Common editors include Vim, Nano, and Gedit.
Debugging: Shell scripts can be debugged using various methods, including echoing variables and commands to the terminal, or using more sophisticated tools like shellcheck.
Environment Variables and Arguments: Shell scripts can access and modify environment variables, and they can take arguments when executed, making them flexible for different runtime conditions.
Environment Variables and Arguments: Shell scripts can access and modify environment variables, and they can take arguments when executed, making them flexible for different runtime conditions.

Comments: In .sh files, comments start with # and are ignored by the shell interpreter. They are useful for explaining parts of the script or for temporarily disabling a command.



In summary, .sh files are a powerful tool in the Linux environment, enabling the automation and scripting of complex tasks in an efficient and effective manner.

!Zamanlasmis Gorevler | systemend timer 
Belirli gorevlerin tanimlandiklari araliklarla calistirilabilmesi icin, kron ismi verilen zamanlasmis gorevler yapisini kullanabiliyoruz
Biz burda kron yapisindan ziyade systemd aracinin sunmus oldugu timer aracina bakacagiz.

Tanimlayacagimz bir servisin, tanimlanan zaman araliginda clismasin timer ile saglayabiliriz

Biz nasil bir servisi tanimyacagimizi yukarda gordgumz icin, bu islem ondan cok da farkli degil zaten

Daha once olusturmus oldugmz servisi kullanarka, script dosyasinin spesifik bir zaman araliginda calismasini istedgimz icin tanimlamada bulunacagiz

adem@adem-ThinkPad-13-2nd-Gen:~$ sudo nano /lib/systemd/system/time.timer

[Unit]
Description=description of time.service

[Timer](Hangi servisin hangi sklikla calisacagini tanimlayacabilecegimz bir kisim)
OnBootSec=1min(systemd aracinin zamanlanmis gorevi sistem basladiktan 1 dakika sonra tetiklemesi gerektigini belirten bir secenektir,aninda gecerli olmasi icn 1 min yerine 0 min yazilir)
OnCalendar=*:*:0/30(Bu birim-unit dosyasini hangi sklikla calisacagini belirtmemizi sagliyor YEAR-MONTH-DAY HOUR:MINUTE:SECOND. Burdaki tanimlama da her gun calistirilacagi icin, kisaca, yalnizca saat tanimi gerceklestirildi. Her 30 saniyede bir calisacak sekilde tanimlandi)
Unit=time.service

[Install]
WantedBy=multi-user.target

!Ornegin 2023 yilinin 12.ayinin 1.gununde 23:59 da calismasini istiyorsak
!OnCalendar=2023-12-01 23:59:00  seklinde belirtilir, /lib/systemd/system/time.timer  dosyasi icerisinde

!Her gun saat 09.30 da calismasini istersek 
! *-*-* 09:30:00 seklnde belirtiriz. Yilin her gunu olmasini istegimz icin, tum yillar, tum aylar, tum gunleri aliyoruz * ifadesi ile

!Her gun sabah 12 ve aksam 12 de calismasini istersek eger, 2 ayri satirda belirtiriz asagidaki gibi
! OnCalendar=*-*-* 12:00:00(Her gun 12 de calisir)
! OnCalendar=*-*-* 00:00:00(Her gece 12 de calisir)

!Her gun her saat calismasini istersek eger:
! OnCalendar=*-*-* *:00:00

!Her gun 2 saatte bir calismasini istersek eger:
! OnCalendar=*-*-* 00/2:00:00(/ forward-slash dan sonraki sayi her gun tekrar edecek olan sayinin katlarini belirtiyor)

!Her gun 30 saniyede bir calismasini istersek eger:(Burdaki tanimlama da her gun calistirilacagi icin, kisaca, yalnizca saat tanimi gerceklestirildi.)
! OnCalendar=*:*:0/30

!Her gun her dakika bir calismasini istersek eger:
! OnCalendar=*-*-* *:*:00

!Her gun 5 dakika bir calismasini istersek eger:
! OnCalendar=*-*-* *:00/5/00(Her saat oldugu icin saate *  koyariz sonra dakikayi 00/5 yaparak dakikayi 5 er 5 er attirimis oluruz)

!Her gun 20 saniyede bir calismasini istersek eger:
! OnCalendar=*-*-* *:*:00/20(Saati ve dakikayi * yapariz, her saat ve her dakika demis oluruz, sonra da saniyeyi 00/20 yaparak, 20 snaiyede bir calismasini saglariz..)

!Pazartesiden-cuma ya her saat calistirilmasini istersek eger:
! OnCalendar=Mon..Fri *-*-*  *:00:00 

!Hafta sonlari 6 saate bir calismaini istersek eger:
! OnCalendar=Sat,Sun *-*-*  00/6:00:00 

!Pazartesi,Carsamba ve cumar gunleri her saat  calismasni istersek eger
OnCalendar=Mon,Wed,Fri *-*-* *:00:00

!Yilin ilk alti ayninda 10 gunde bir calismaini istersek eger
OnCalendar=Jan..Jun/10 *-*-* 00:00:00(10 gunde 1 kez calistirilacagi icin, saat-dakika-saniye 00:00:00 olur) 

!Simdi zamanlanmis gorevi aktiflestirmek icin:
  !sudo systemctl enable time.timer(Zamanlasmis gorev uzantisi .timer idi)
  Sembolik link olusturacaktir...

  !systemctl status time.timer dan durumuna bakacagiz...ARtik otomatik olarak sistem baslatildiginda otomatik olarak sistem basladginda baslayacak, ve belirtilen zaman araliginda ilgili script dosyasi calistiriliyor olacak!


  adem@adem-ThinkPad-13-2nd-Gen:~$ sudo nano /lib/systemd/system/apache2.service
adem@adem-ThinkPad-13-2nd-Gen:~$ sudo systemctl disable /etc/systemd/system/time.service
Warning: Can't execute disable on the unit file path. Proceeding with the unit name.
Removed /etc/systemd/system/multi-user.target.wants/time.service.
adem@adem-ThinkPad-13-2nd-Gen:~$ sudo systemctl enable /etc/systemd/system/time.service
[sudo] password for adem: 
Created symlink /etc/systemd/system/multi-user.target.wants/time.service → /etc/systemd/system/time.service.
adem@adem-ThinkPad-13-2nd-Gen:~$ sudo nano /lib/systemd/system/time.timer
adem@adem-ThinkPad-13-2nd-Gen:~$ sudo nano /lib/systemd/system/time.timer
adem@adem-ThinkPad-13-2nd-Gen:~$ systemctl enable time.timer
Created symlink /etc/systemd/system/multi-user.target.wants/time.timer → /lib/systemd/system/time.timer.
adem@adem-ThinkPad-13-2nd-Gen:~$ systemctl status time.timer
○ time.timer - description of time.service
     Loaded: loaded (/lib/systemd/system/time.timer; enabled; vendor preset: enabled)
     Active: inactive (dead)
    Trigger: n/a
   Triggers: ● time.service
adem@adem-ThinkPad-13-2nd-Gen:~$ systemctl start time.timer
adem@adem-ThinkPad-13-2nd-Gen:~$ systemctl status time.timer
● time.timer - description of time.service
     Loaded: loaded (/lib/systemd/system/time.timer; enabled; vendor preset: enabled)
     Active: active (running) since Sun 2024-01-14 23:32:38 CET; 6s ago
    Trigger: n/a
   Triggers: ● time.service(Burda her 30 saniye de bir tetiklenecekk bunu time.timer i nano ile acarsak gorebiliriz)

jan. 14 23:32:38 adem-ThinkPad-13-2nd-Gen systemd[1]: Started description of time.service.
adem@adem-ThinkPad-13-2nd-Gen:~$ 

!enable yaptiktan sonra bir de time.timer, zamanlanmis gorev servisini, systemctl start ile baslattiktan sonra calismaya basladi. 


!Servisi sistem başlangıcında otomatik olarak başlatılacak şekilde ayarlamak için hangi komutu kullanabiliriz=>systemctl enable apache2.service

!Sistem başlangıcında otomatik olarak başlatılan bir servisin, otomatik başlatılmasını önlemek için hangi komutu kullanabiliriz ?=>systemctl disable apache2.service

!LOG DOSYALARI HAKKINDA
Sistemimizde meydana gelen hatalar, degisiklikler, ve nerdeyse her faaliyet kayit altina alinarak saklaniyor
Kayit altina alinan bu bilgileri log deniyor 

Kontrol edilmesinin kolay olmasi icin, bunlar ayri ayri yerlerde tutuluyor, ve herhangi bir servis veya bir islem ile ilgili hata aldigmz da, gidip log dosyasini okuyarak, hata sebebini gorebiliyoruz

!SORUNLARI,PROBLEMERLI, HATA NEDENLERI TESHIS ETTIGMIZ YERDIR, BIR NEVI LOG DOSYALARI

!LOG KAYIT DOSYALARI 
rsyslogd yapisi kullaniliyor loglari tutmak icin
rsyslogd journald loglama cozumu de bulunyor

!Log Dosyalari Hakkinda(/var/log)
Genellikle istisnalar haric, log dosyalari /var/log/ var dizinin altindaki log klasoru icerisinden ulasabiliyoruz
Burda genellikle, rsyslogd aracinin urettigi log kayitlari bulunmaktadir
!Tabi ki istisna durumlri da bulunabiliyor

bu /var/log altinda kullanmis oldugmz yazilijmlara gore bircok farkli klasor bulunabilir burda ama biz burda rsyslogd aracinin urettigi log dosyalari ve kaytlarina bakacagiz

Bu log dosyalari standart dosyalar olduklari icin, cat,grep,head,tail araclari ile metinsel verileri isleyebiliriz. Cunku tum log kayitlari duz text olarak tutulmaktadir 
Sadece kayitlari okumak icin, y onetici ayricaliklarina sahip olmak gerekiyor!!!!!
!Cunku standart kullanicilarin , yani admin olmayan, kullanicilarin log kayitlarini okumasi, uygun olamdigindan ddolayi...

!syslog - messages
Sistemimiz uzerinde yer alan, cesitli hizmetler uygulamalar veya yapilar tarfindan uretilmis olan cesitli hata mesajlari veya uyari mesajlari gibi cesitli mesajlar genellikle syslog dosyasi icerisine kaydediliyor

!adem@adem-ThinkPad-13-2nd-Gen:/var/log$ sudo nano syslog


!adem@adem-ThinkPad-13-2nd-Gen:/var/log$ ls
syslog ile ilgili asagidaki gibi dosyalar goruruz /var/log directory altinda , bunlar su analama geliyor
Burda syslog dosyasinin numarasiz olan yalin hali en son, en guncel halini temsil ediyor...su an hala bu dosya icerisine veriler ekleniyor, dolayisi ile bu dosyanin herhangi bir uzantisi yok.
Mesela uzantisiz yalin hali ile bulunan syslog dosyasi doluluk oranina ulasinca bu sefer bu dosya da numarandirilip tekrar syslog dosyasi yalin haline en son log kayitlari girilmeye devam edilerek, gecmisteki kayitlar da bu sekilde korunmus oluyor!!!
Dolan dosyalar da belirli bir sure sonra .tar ile arsivlenip .gz ile skstirilarak, daha az yer kaplamasi saglaniyor


syslog
syslog.1
syslog.2.gz
syslog.3.gz
syslog.4.gz

!Tekrardan hatirlatalim, en guncel ve en son kayitlar syslog dosyasinda tutuluyor, syslog dosyasini en yalin hali olan syslog dosyasinda tutuluyor
!BU MANTIK LOG DOSYALARININ HEPSINDE BU SEKILDEDIR!!!!

 dpkg.log(En guncel kayitlar bu dosya altinda bulunmaktadir)
 dpkg.log.1
 dpkg.log.2.gz
 dpkg.log.3.gz
 dpkg.log.4.gz

!AYNI MANTIKTA /var/log/apache2/error.log dosyasi icerisinde buluruz, apache2 web server  en guncel hata kayitlarini

!ORNEGIN BIR LOG DOSYASINDA EN SON URETILMIS 5 CIKTIYI GORMEK ICIN!!
! tail -n 5 /var/log/syslog

adem@adem-ThinkPad-13-2nd-Gen:/var/log$ tail -n 5 syslog
Jan 15 00:17:01 adem-ThinkPad-13-2nd-Gen CRON[410198]: (root) CMD (   cd / && run-parts --report /etc/cron.hourly)
Jan 15 00:17:09 adem-ThinkPad-13-2nd-Gen dbus-daemon[251541]: [session uid=1000 pid=251541] Activating via systemd: service name='org.freedesktop.Tracker3.Miner.Extract' unit='tracker-extract-3.service' requested by ':1.9' (uid=1000 pid=251613 comm="/usr/libexec/tracker-miner-fs-3 " label="unconfined")
Jan 15 00:17:09 adem-ThinkPad-13-2nd-Gen systemd[251509]: Starting Tracker metadata extractor...
Jan 15 00:17:09 adem-ThinkPad-13-2nd-Gen dbus-daemon[251541]: [session uid=1000 pid=251541] Successfully activated service 'org.freedesktop.Tracker3.Miner.Extract'
Jan 15 00:17:09 adem-ThinkPad-13-2nd-Gen systemd[251509]: Started Tracker metadata extractor.
adem@adem-ThinkPad-13-2nd-Gen:/var/log$ 

!Kucuk buyuk harf farketmeksizin, networkmanager(ag yonetiminden sorumlu yapi hakkinda bilgi sahpi olmak istiyorum..Bilgisayarda bu ag ile ilegili mesaj var mi diye bilmek istiyrouz)

adem@adem-ThinkPad-13-2nd-Gen:/var/log$ grep -i "networkmanager" /var/log/syslog 
!Bazen dosyaya anlik olarak o anda eklemey yapildigi icin, grep: /var/log/syslog:binary file match seklinde hata alabiliriz
Boyle bir durumda grep aracinin buldugu dosyayi text dosyasi olarak ele almasi  icin,a option u da ekleriz
adem@adem-ThinkPad-13-2nd-Gen:/var/log$ grep -ia "networkmanager" /var/log/syslog 

Sistemin urettig Network ile ilgili tum log kayitlari gorebiliyoruz... 
Hangi host uzerinde, ne zaman oldugu vs gibi bircok bilgiyi alabiliyoruz...

!Eger biz en son guncel bilgileri degil de en son-guncel bilgilerden bir onceki bilgileri okumak istersek o zaman da syslog.1 dosyasini okuruz 
syslog-en son , en guncel log dosyalari 
syslog.1 en son, en guncel log dosyalarindan bir onceki log dosyalari
syslog.2.gz de syslog.1 den , onceki log kayitlarini gosterir..bu sekilde geriye dogru gideriz
Yani numara arttikca, dosya eskiye dogru gidiyor

! ls -lt /var/log/syslog* (syslog dosyalarini ayrintili bir sekilde tarihlerine gore listeleyelim dersek)
!Burdan da anlariz, ki syslog en guncel, syslog.1 dosyasi syslog dan sonra ve sayi arttikca da dosya eskiye dogru gidiyor
adem@adem-ThinkPad-13-2nd-Gen:/var/log$ ls -l syslog*
-rw-r----- 1 syslog adm  722240 jan.  15 00:49 syslog(En guncel, en yeni log dosyasidir)
-rw-r----- 1 syslog adm 1653499 jan.  14 00:00 syslog.1(En guncel dosyadan sonra gelen dosyadir, bu dosya belirli bir boyuta ulasinca arsivleniyor ve syslog.2.gz oluyor ve digerleri de ona gore 3,4,5..oluyor...)
-rw-r----- 1 syslog adm  175098 jan.   8 00:00 syslog.2.gz
-rw-r----- 1 syslog adm  179943 des.  31 00:00 syslog.3.gz
-rw-r----- 1 syslog adm  215579 des.  24 00:00 syslog.4.gz(En eski log dosyasidir)
adem@adem-ThinkPad-13-2nd-Gen:/var/log$ 


!auth.log | secure 
Oturum acma,kimlik dogrulama gibi islemler hakkinda bilgi alamk istersek, auth.log ismindeki log dosyasini okyabiliriz

adem@adem-ThinkPad-13-2nd-Gen:/var/log$ ls -lt auth.log*
-rw-r----- 1 syslog adm  72137 jan.  15 00:45 auth.log
-rw-r----- 1 syslog adm 295617 jan.  13 23:59 auth.log.1
-rw-r----- 1 syslog adm  11951 jan.   7 23:59 auth.log.2.gz
-rw-r----- 1 syslog adm  21006 des.  30 23:59 auth.log.3.gz
-rw-r----- 1 syslog adm  17436 des.  23 23:59 auth.log.4.gz
adem@adem-ThinkPad-13-2nd-Gen:/var/log$ 


tail -f following
!tail -f secenegi sayesinde bir dosyaya en son eklenen verileri anlik olarak takip edebiliyoruz
!tail -f /var/log/auth.log

adem@adem-ThinkPad-13-2nd-Gen:/var/log$ tail -f /var/log/auth.log
Jan 15 00:35:01 adem-ThinkPad-13-2nd-Gen CRON[410835]: pam_unix(cron:session): session closed for user root
Jan 15 00:39:01 adem-ThinkPad-13-2nd-Gen CRON[410969]: pam_unix(cron:session): session opened for user root(uid=0) by (uid=0)
Jan 15 00:39:01 adem-ThinkPad-13-2nd-Gen CRON[410969]: pam_unix(cron:session): session closed for user root
Jan 15 00:45:01 adem-ThinkPad-13-2nd-Gen CRON[411353]: pam_unix(cron:session): session opened for user root(uid=0) by (uid=0)
Jan 15 00:45:01 adem-ThinkPad-13-2nd-Gen CRON[411353]: pam_unix(cron:session): session closed for user root
Jan 15 00:54:21 adem-ThinkPad-13-2nd-Gen sudo:     adem : TTY=pts/5 ; PWD=/var/log ; USER=root ; COMMAND=/usr/bin/nano auth.log
Jan 15 00:54:21 adem-ThinkPad-13-2nd-Gen sudo: pam_unix(sudo:session): session opened for user root(uid=0) by (uid=1000)
Jan 15 00:54:40 adem-ThinkPad-13-2nd-Gen sudo: pam_unix(sudo:session): session closed for user root
Jan 15 00:55:01 adem-ThinkPad-13-2nd-Gen CRON[412127]: pam_unix(cron:session): session opened for user root(uid=0) by (uid=0)
Jan 15 00:55:01 adem-ThinkPad-13-2nd-Gen CRON[412127]: pam_unix(cron:session): session closed for user root


adem kullanicisindan ademtest kullanicsina gecerek /var/log/auth.log dosyasini takip edecek olursak, anlik olarak log dosyalarinin degisiini ve eklenen kayitlari takip edebilriiz

adem@adem-ThinkPad-13-2nd-Gen:~$ su - ademtest
Password: 
ademtest@adem-ThinkPad-13-2nd-Gen:~$ su - adem
Password: 

! /var/log/auth.log dosyasi ile her turlu login islemleri veya kullanici degisimi gibi islemleri,n hepsini loglar, bu log dosyasna kaydeder

Ornegin biz parolayi yanlis giriyoruz ademtest kullanicisinda iken adem kullanicisina login olurken
ademtest@adem-ThinkPad-13-2nd-Gen:~$ su - adem
Password: 
su: Authentication failure
ademtest@adem-ThinkPad-13-2nd-Gen:~$ 
Bu islemin kaydi hemen /var/log/auth.log  dosyasina basilacaktir

!adem@adem-ThinkPad-13-2nd-Gen:/var/log$ tail -f /var/log/auth.log
Jan 15 01:04:39 adem-ThinkPad-13-2nd-Gen su: pam_unix(su-l:auth): authentication failure; logname= uid=1004 euid=0 tty=/dev/pts/6 ruser=ademtest rhost=  user=adem
Jan 15 01:04:40 adem-ThinkPad-13-2nd-Gen su: FAILED SU (to adem) ademtest on pts/6
Jan 15 01:05:01 adem-ThinkPad-13-2nd-Gen CRON[413139]: pam_unix(cron:session): session opened for user root(uid=0) by (uid=0)
Jan 15 01:05:01 adem-ThinkPad-13-2nd-Gen CRON[413139]: pam_unix(cron:session): session closed for user root

!boot.log
On yukleme, boot asaamasindan(on yukleme) yani sistemimiz baslatilana kadar gerceklestirilmis olan, tum kayitlara /var/log/boot.log uzerinden erisebilriz 
Bu kayitlar onemli , cunku, onyukleme ve boot islemleri genellikle cok hizli gectigi icin, gerektiginde sistem baslangicna dair mesajlari hata mesajlari okumak istersek boot.log dosyasini kontrol edebliriz

adem@adem:~$ sudo cat /var/log/boot.log
adem@adem:~$ sudo nano /var/log/boot.log

!kern.log
Cekirdegin, yani kerneli n urettigi log dosyasidir
Dosya icerigi cok uzun olabiliri o zaman da filtreleme yaparak arariz hata mesajlarini


!grep -i(insensitive search)
   KUCUK BUYUK HARF DUYARLILIGI OLMADAN ARASTIR DERSEK-INSENSITIVE(DUYARSIZ)
    adem@adem:~$ grep -i "ahmet can" names.txt
    Ahmet Can Yazar
    ahmet can durmus
    adem@adem:~$ 
!grep -i "error" /var/log/kern.log 
Ornegin bir surucu  yukledik ve bu surucu dogru sekilde calismiyorsa, bu kayitlari incleyerek nerde hata ypatigmza bakabiliriz
Sistemle ilgili hersey ile ilgili kernel-cekirdek dolayli yonden cikti urettigi icin, bu dosyayi inceleyerek kernel-cekirdegin reaksiyonlarini da inceleyebiliriz

!apt.log 
apt aracinin urettigi ciktilari burdan bulabliriz
!DIKKAT EDELIM ,BAZI ARACLARIN KENDILERINE AIT KLASORLERI VAR, DOSYALAR O KLASORLERIN ALTINDA TUTULUYOR, DIREK /VAR/LOG ALTINDA DEGIL....BU ONEMLI
apt aracinin kendine ati folder i da vardir 

cat /var/log/apt/

adem@adem:/var/log/apt$ ls
eipp.log.xz       history.log.5.gz  term.log.1.gz  term.log.7.gz
history.log       history.log.6.gz  term.log.2.gz  term.log.8.gz
history.log.1.gz  history.log.7.gz  term.log.3.gz  term.log.9.gz
history.log.2.gz  history.log.8.gz  term.log.4.gz
history.log.3.gz  history.log.9.gz  term.log.5.gz
history.log.4.gz  term.log          term.log.6.gz
adem@adem:/var/log/apt$ 

!history.log dosyasini okuyarak en son hangi kayitlar in bulundugunu gorebiliriz
(Son 5 kaydi alabiliriz)
adem@adem:/var/log/apt$ tail -n 5 history.log

Start-Date: 2024-01-12  06:44:35
Commandline: /usr/bin/unattended-upgrade
Remove: linux-modules-extra-6.2.0-39-generic:amd64 (6.2.0-39.40~22.04.1), linux-modules-6.2.0-39-generic:amd64 (6.2.0-39.40~22.04.1)
End-Date: 2024-01-12  06:44:37
adem@adem:/var/log/apt$ 

!dpkg.log 
dpkg araci kullanilarak gerceklestirilmis olan islem kayit lar burda tutuluyor

!wtmp last  | btmp last
!wtmp last:Kullanicilarin ne zaman giris yapip, ne zaman cikis yaptigi ve hangi oturumlari kullandiklarini bu arac sayesinde ogrenebiliriz
Fakat bu kayitlar duz metin sekilde tutulmadiklari icin biz de duz meting gibi okuyamiyoruz

cat /var/log/wtmp dersek anlamisz, tekstler gorecegiz, tum harlfer cevrilememis olarak gelir, cunku wtmp dosyasi standart metin dosyasi olarak tutulmuyor ve ondan dolayi da cat gibi bir arac ile dosya icerigini dogru bir sekilde acamiyoruz
Bu dosyayi bu dosyay ozel olan last isimli arac ile acabiliriz

!last-hatasiz olan oturum bilgileri
adem@adem: last
last komutu sayesinde hatasiz olan,basarili sekilde gerceklestirilmsi olan oturumlarin bilgisni veriyor

adem     tty2         tty2             Fri Mar 31 16:10 - down   (00:08)
reboot   system boot  5.19.0-38-generi Fri Mar 31 16:10 - 16:18  (00:08)
adem     tty2         tty2             Fri Mar 31 14:25 - down   (01:44)
reboot   system boot  5.19.0-38-generi Fri Mar 31 14:25 - 16:09  (01:44)

!lastb(lastbad)-hatali olan oturum bilgileri

adem@adem:~$ sudo lastb
[sudo] password for adem: 
root     pts/2                         Mon Jan  1 11:01 - 11:01  (00:00)

btmp begins Mon Jan  1 11:01:57 2024
adem@adem:~$ 

!Basariz oturum acma kayitlari da /var/log/btmp dosyasinda tutuluyor

Ve normal cat ile acamiyoruz tabi ki... 
adem@adem:~$ sudo cat /var/log/btmp
[sudo] password for adem: 
��pts/22root���ek�adem@adem:~$ 

bu dosyayi da lastb araci ile acabiliyoruz ancak
!sudo lastb -f(file) /var/log/btmp.1

 sudo lastb -f /var/log/btmp.1

btmp.1 begins Mon Jan  1 00:00:04 2024
adem@adem:~$ sudo lastb -f /var/log/btmp
root     pts/2                         Mon Jan  1 11:01 - 11:01  (00:00)

btmp begins Mon Jan  1 11:01:57 2024
adem@adem:~$ 

Bu sekilde lastb araci ile btmp dosyasini nasil acabildigmizi gorebiliriz

last-basarili oturum acma bilgilerini gorebilirz bu aracla
lastb(bad)-basarisiz oturum acma bilgilerini gorebiliriz bu aracla

!cron.log
Eger sistemimizde crontab ile zamanlanmis bir goreve tanimlamis isek, bu zamanlanmis gorev kaytilarini cront.log dosyasi icerisinde gorebiliriz

Gunumuzde kendimiz crontab tanimlamamis isek, cron.log log dosyasi da bulunmayacaktir
Eger biz crontab olusturur da sistemin kayitlarinin tutulmasini istiyrosam, yani log kayitlarini o zaman rsyslog aracina bildirmemiz gerekiyor, bu log islem kaytilarini tutan araca 
sudo nano /etc/rsyslog.conf  dosyasina gideriz 
Bu dosya icerisine tutulmasini istedgimz kayit bilgilerini ekleyebiliriz

cron.*  ~/var/log/cron.log  diye eklememiz gerekir bu dosyaya

!Degsikliklern gecerli olablmesi icin sudo systemctl restart rsyslog.service(kayit tutmayi saglayan rsyslog servisi yeniden baslatilarak, yapilan degisikligi okumus olacak!!!!!)
!Servislerde yapilan degisiklik sonrasinda mutlaka o servisler aynen burda yaptigmiz gibi yeniden baslatilmali ki, degisiklikleri algilayabilsin

!adem@adem:/etc$ sudo nano crontab

sudo nano /etc/crontab a gidip en alt tarafa:* * * * * adem echo "This is a crontab-task"

!dmesg(sistemimizin baslangicindan beri kerne-cekirdegin aygitlarla ilgili uretmis oldugu tum kayitlara ulasmak istersek bu araci kullanabiilirz)

!sudo dmesg
kernel-cekirdegin aygitlarla ilgili urettigi her turlu detay mesaji burdadir
Kayit cok fazla oldugu icn filtreleyerek arama yapabiilriiz 

!adem@adem:~$ sudo dmesg | grep -i "intel"
sudo dmesg one bouyle basliyoruz ki bunun sonucunu grep islemi nde bu gelen sonuc icerisinden arama yapilsin diye!!!!
adem@adem:~$ sudo dmesg | grep -i 'USB'
USB HAKKINDA URETILEN CIKTILARI, BILGILERI OKUYABIILRIIZ.... 

!DIGER LOG KAYITLARI HAKKINDA!

Ornegin biz web sitemiz acilmiyor ve apache2 log kayitlarini okumak istiyoruz onun icin once geliri /var/log altinda apache ile ilgili neler var ona bakariz ve orda apache2 isminde klasor var o klasorun alitna gitigtimzde error.log dosyasinin var oldugunu goruruz iste burdan okuyabiliriz 

Bunun gibi ihityacimz olan log dosylari icin burda arastiririz, aradgimzi burda bulamaz isek de internet arastirmasi yaparak da halledebiliriz.Aslinda internetten kastimz aracin kendi dokumantasyonuna gidip bakabiliriz

!journald | journalctl
icerisinde systemd yi bulunduran modern sistemlerde, kayit tutjmak icn journald serviside mevcuttur
systemd araciinin yonetiminde olan biirmler disinda

!journalctl
En son kayittan ilk kayita dogru tum kayitlar burda siralaniyor
Ve space tusu ile de kaydin devamini bize getirecektir

Eskiden yeniye dogru...en tepe de eski asagi dogru yeni kayitlari goruyorz defaultta ama tam tersi sekilde gormek istersek de 
!journalctl -r(reverse) ters cevirerek goster diyoruz

!Ciktilar systemd tarafindan yonetilen birimlere ek olarak yetkilendirme ve cron gibi ek yapilar hakkinda pekcok kayit bilgsine bu arac uzerinden rahatlikla erisebiliyoruz... 

!Bu tarz cok fazla kayit durumunda biz, filterleme yapmaiz gerekiyor 
journalctl --help diyerek bakabilriz

!journalctl -u NetworkManager.service(aranan kayitlari getirir) Ayni islemi grep ile de y apaibliriz su sekilde 
!journalctl | grep -i "NetworkManager"
-i(insensitive demektir)

!Ekranimizda canli olarak(anlik takip) takip edebiliriz 
!jornalctl -fu(following) NetworkManager.service

!ademtest kullanicisinin oturum acma ve yetkilendirme ile ilgili kayitlarina bakabiliriz

!adem@adem:~$ journalctl -r | grep -i "adem54"
(En guncel kayitlardan guncel olmayanda dogru getir diyoruz -r(reverse), ve grep araci gelen veri icinde calissin demis oluyoruz ve gelen veri icinde adem54 kullanmicisinin loglarini getir bize...)

!Sistemin on  yuklenme-boot olma tarihlerine gore listeleyelim!
adem@adem:~$ journalctl --list-boots

journalctl -b 10(tarihe gore)

journalctl -n 5(kayitlardan 5 tane getir)

!TEMEL AG EGITIMI

!NETWORK TEMEL KAVRAMLAR

Ag-Network nedir?
Ne az iki cihazin(pc) birbirleri ile veri transferi kurmak uzere aralarinda kurmus oldugmz baglantiya verdigmiz genel bir isimdir
Iki olmak zorunda degil 3,4,5 ve daha fazla olabilir
Host nedir?
Ag baglantisi saglamis onlan, veri gonderen veya alan cihazlara biz host diyoruz. Yani her bir cihaz hostdur
Yalnizca pc ler degildir host, ag baglantisi olusturan veri gonderip veri alan, mobilephone, tablet, ipad bunlar da host olabilir
Hatta akilli tv de host olabilir...akilli buzdolabi ag baglantisi kurabiliyordur bu da host olabilir 

Bu hostlarin ag uzerinde, burundukleri roller geregi verilmis isimlerdir
Client:linuxdersler.net web sitesini ben ziyaret ederken, bu istegi sunucuya,server a gonderiyoruz, istek gonderiyoruz.. 
Server:Talebe cevap veren, bu web sistesinnin dosyalrini client a gonderendir...
Server-sunuclar da normal pc gibidir icerisinde cesitli yazillimlar kurularak kendilerine yapilan isteklere dogru cevaplar verilmesi saglaniyor
Kendi pc lerimizden bile biz bir web suncusuyukleyip bir web sitesi sunabiliriz... 
Client-server olma durumu bazen duruma gore degisebiliyor ornegin
Bir server web sitesini sunarken, dosyalarini baska bir server a istek gondererek aliyor ve o dosyalari kullanarak web sistesini sundugu zaman, onun dosyalari almak  icin istek gonderdigi pc ile arasindaki iliskiye bakacak olursak, normal websitesi sunan sunucu o iliski de client rolu almis olurken, dosyalari gonderen file-server ise server rolundedir
File-server da ornegin, gunbcellemleri baska bir update-server dan alabilir, bu durumda da yine update -server server olurken file-server client rolune burunecektir

!LAN(Local Area Network)
Kucuk capli, lokal capli kurulmus olan ag baglantilardir
Bizim internetimiz olmasa bile, kendi evimizdeki pc ler, mobile cihazlari birbirine baglayip ag olusturaibliiriz. Bu sayede bu cihazlar bu ag icerisinde veri trransferi vs  yapacak sekilde birbirleri ile iletisim kurabilirler
Benzer sekilde ofisler de bu yaklasim kullaniliyor 
Ornegin diyelim ki bir ofis agi ve ofisteki cihazlarin hepsi yaziciya bagli, tum cihazlar internet olmasa bile, yaziciya erisebiliyor cunku lokal de tum cihazlar yaziciya bagldir

!WAN - Wide Area Network
Bu ag turu de birden fazla lokal agin birbirine baglanarak daha genis bir ag olusturulmus olma halidir. 
Her bir lokal agdaki cihazlar, birbirleri ile iletisim kurabilmesi icin yapilir ve daha genis bir ag baglantisi olusturuluyor
En buyuk WIDE ARE NETWORKU INTERNETTIR

!IP ADRESI 
Ip adresi cihazlarin ag uzerindeki benzersiz kimlik numaralaridir

Iki cihaz birbiri ile iletisim kurarken, bir server a istek gonderirken o server in ip adresini bilmesi  gerekiyor, kafamiza gore herhangi bir cihazdan talep edilemez. Ayni sekilde iste gonderen pc nin de ip adreini server in bilmesi gerekiyor ki, o istege cevap gondersin, yani her istek gonderene dosyalarai vermez server da onun icin, istek gonderen cihazin ip adresini bilmesi gerekir 
AG uzerinde cihzlar birbilrerini ip adresleri uzerinden ayirt ederler!

Yani pc1 cihazi pc2 cihazina istek gonderdigi zaman 
Kanyak IP:159.132.45.192 
Hedef IP:185.199.108.153(www.linuxdersleri.net) 
istek paketiine hem hedef ip adresini , hem de istegin kimden geldigni belirten kaynak ip adresini de belirtir ki, istek dogru adrese gitsin yerine ulassin

Sunucu istege cevap verirken de response paketine yine 
Kaynak IP:185.199.108.153(www.linuxdersleri.net) 
Hedef IP:159.132.45.192 

hedef ip adresi ve kaynak ip adreslerini ekleyecektir

!IP ADRESLERI NASIL TANIMLANIR 
Binary: 0 1(Bilgisyar dunyasinda en kucuk veri birimi bittir, o da 0 ya da 1 dir)
Ip lerde 32 bit uzunlugunda olabiliyorlar 
Bir ip adresi 32 bitlik deger alabiliyor. Bu 32 bitte 8 er bitlere ayrlimis oktet lerden olusuyor 

Ilk deger: 00000000.00000000.00000000.00000000
00000000-8 bittir ve bir karakteri temsil eder , 1 oktettir
Son deger: 11111111.11111111.11111111.11111111
11111111-8 bittir ve bir karakteri temsil eder, 1 oktettir

Bir ip adresine verebilecegimiz en kucuk deger  00000000 dir yani bu 8 bit 1 karakteri temsil ediyordu
Bir ip adresne verebilecegimz en buyuk degerde  11111111 dir

Peki biz ip adreslerini normal ondalik gosterimde oldugu gibi 185.199.108.153 boyle goruyoruz, nasil bu hale donusturuluyor 
Yani bizim ip adresi olarak okudugmz degerler 185.199.108.153 bunlar, binary(2 li sayi) den decimal(10 lu sayi sistemi) e cevrilmis halidir 
Yani ornegin 
10101010=> sirasi ile soldan saga dogru su sekilde hesaplariz
0*(2 uzeri 0=1)=0
1*(2 uzeri 1=2)=2
0*(2 uzeri 2=4)=0
1*(2 uzeri 3=8)=8
0*(2 uzeri 4=16)=0
1*(2 uzeri 5=32)=32
0*(2 uzeri 6=64)=0
1*(2 uzeri 7=128)=128
Tum sonuclari topladgimzda = 170 yapiyor. 

10101010 binary ifadesi yani 8bit=1byte decimal-ondalik gonsterimde = 170 e karsilik geliyor
11111111 binary ifadesi de ayni mantiklar 8bit decimal-ondalik gostrimde 255 e karsilik geliyor

!185.199.108.153 Boye bir ip adresi her 4 parcadan olusuyor ve arlarinda nokta var. Her bir parca binary olarak 8 bit e karsilik gelen 1 ve 0 lardan olusan 8 bitlk binary nin ondalik-decimal sayi birimine cevrilmis halidir....

En kucuk ip adresi: Binary(ikili) = 00000000  Decimal(ondalik)=0 a karsilik gelirken 
En buyuk ip adresi:Binary(ikili) =  11111111  Decimal(ondalik)=255 e karsilk gelir 

!Bir ip adresinin alabilecegi enckucuk deger veya ilk deger : 0.0.0.0(Bu 0 lardan daha dusuk olamaz) 
!Bir ip adresinin alabilecegi enbuyuk deger veya son deger : 255.255.255.255(Her bir bolum maks 255 olur daha buyuk olamaz...) 

!Tanimlanabilir IP SAYISINA BAKACAK OLURSAK DA Ip adresi decimal-ondalik oalrak 4 bolumden olsuuyor. Her bir bolum binary-8 bitten olusan 1 ve 0 lardan olusuyor dolayisi ile her bir bolumun kendi arasindaki kombinasyondan yola cikilarak 2 uzeri 8 farkli deger alabilir 
Tanimalnabilir IP SAYISI : 2^8 + 2^8 + 2^8 + 2^8=2^32=4.3~ milyar 
Yetersiz IP sayisina cozum olarak, alt ag olusturma yani, subnetting yaklasimi kullaniliyor

Intrenete baglanabilen her turlu telefojn,pc, akilli tv, akilli buzdolabi, nintendo(oyun),tablet, akilli saat her birisinin benzersiz ip adresi almasi gerekiyor

!IP Subnetting
Aglari daha alt aglara bolerek, ip adreslerini daha tasarruflu sekilde kullanabiliyoruz 
Ayni lokal agda bulunan pc ler -LAN(lokal area network) birbirlerinin network numaralari ndan taniyorlar birbirlerini ve host olarak da hepsine sirasi ile 1 ,2 diye degerler ataniyor v ebirbirlerini kolayca taniyabiliyorlar 

x network u once olsturulur ve LAN(LOCALAREANETWORK) kurulur ortamdaki pc ler arasinda
pc-1= 192.168.1.2
pc-2= 192.168.1.3
pc-3= 192.168.1.4

Bu pc ler birbirlerini network numaralarindan tanirlar = 192.168.1
Sonra da sirasi ile host lar numarlarindirilmistir = 192.168.1.2, 192.168.1.3, 192.168.1.4...gibi

Peki Local Area Network icinde olmayan yani kendi iclerinde LAN baglantisi bulunan farkli cihazlarla ise yine ip adreslerini kontrol ediyor, kendi aginda bulunmadigi icin farli bir ip adresine sahip, bu ip adresi ile iletisime gecmek istedigi zaman kendi lokal networkunde olmadigini anlayarak, dis ip adresleri ile nasil iletisime gecmesi gerekiyorsa o sekilde iletisime geciyor...

Y NETWORK 
pc-1= 192.168.5.2
pc-2= 192.168.5.3
pc-3= 192.168.5.4

!Yani bilmemiz gereken aglari daha alt aglara bolerek, ip adreslerini daha tasarruflu sekilde kullanabiliyoruz 

!Ip adresleri yalnizca cihazlarin degil, mevcut cihazlarin bulundugu agin bilgisini de verir
!IP adresine bakinca hem network bilgisi hem de host bilgsi ogrenilmis olur!

!Network ve Host Ayrimi Nasil Yapilir?
network ve host ayrimini yapabilmek icin, subnet mask ya da alt ag maskesi olarak bilinen adrese bakilir

!Bu ip adresi 192.168.1.10 agindaki 10 numarali hosta isaret ediyor
!192.168.1 BURAYA KADAR OLAN KISMI NETWORK BILGISIDIR, YANI ARALARINDA . OLAN ILK 3 BOLUM.
!.10 HOSTS A ISARET EDIYOR 
Ve diyelim ki subnet Mask  degri de : 255.255.255.0 
Subnet mask degeri 255 olan bolumler network adresini belirtiler.Geri kalan kismi host bilgisidir 
!Burdan sunu anlayacagiz Subnet mask degerinde 255 sayisini gordugumzde tam olarak ip adresine karsilik gelen oktet in, aslinda network bilgisni verdigini, simdilik bilmemiz yeterlidir

IP:192.168.1.10
SubnetMask:255.255.255.0

Ip adresi ve SubnetMaski yukardaki gibi olan bir cihazi gordugumzde ne anlariz:
!COOOK ONEMLI BIR BILGI!!!!!
!IP:192.168.1.10 un IP:192.168.1.0 agindaki bir cihaz oldugunu ve bu cihazin bulundugu agda 192.168.1.0 ile 192.168.1.255 degerleri arasinda hostlara-cihazlara ip tanimlanabilecegini anlamis ve ogrenmis oluyoruz!!!


!Dikkat etmemiz gereken bir nokta var.192.168.1.0 - 192.168.1.255 arasindaki ip adreslerinin hepsinin hostlar icin kullanilamayacagi bilgisidir !!!
192.168.1.0 bu adres network-agin kendi adresidir, ondan dolayi hostlar icin kullanilamaz, ayni sekilde 92.168.1.255 adresi de boradcast icin ayrilmis bir adrestir y ine hostlar icin kullanilamaz

192.168.1.0=>Ag(Network) Adresi
92.168.1.255=>Broadcast adresi

!NETICE ITIBARI ILE:IP:192.168.1.10 BOYLE BIR IP AD RESINI GORDUGUMDE SUNU ANLAMALIYIM: 
AG-NETWORK ADRESI:192.168.1.0
TANIMLANABILECEK IP ADRESLERI:192.168.1.1-192.168.1.254 arasindadir 
!192.168.1.0 aginda 192.168.1.1 ile 192.168.1.254 araliginda IP adresi tanimlanabilir

!NETWORK VE HOST AYRIMININ HESAPLANMASI
ip:192.168.1.10 
Subnet Mask:255.255.155.0 
Oncelikle ip adresi ve Subnet adresinin ayrimin yapabilmemiz icin ondalik gosterimden-decimal binary-ikili gosterime cevirmemiz gerekiyor

!ip:192.168.1.10
192=>11000000
168=>10101000
1=>00000001
10=>00001010

!Subnet Mask:255.255.155.0 
255=>11111111
255=>11111111
255=>11111111
0=>00000000

!ip:192.168.1.10 NIN BINARY HALI
11000000.10101000.00000001.00001010:IP ADRESI(BINARY)
!Subnet Mask:255.255.155.0 IN BINARY HALI
11111111.11111111.11111111.00000000:SUBNET MASK(BINARY)

Alt alt ip-subnet in binary halini yazip, matematkte ki and-mantiginda yani programlamadaki and mantiginda 1-true 0 false diye dusunelim--Her ikisi de 1 olursa 1 yok bir tanesi 0 olursa 0 olacak sekilde bir alt alta sonuc cikaririz
            !11000000.10101000.00000001.00001010
            !11111111.11111111.11111111.00000000
!SOUNUC:     11000000.10101000.00000001.00000000

Elde ettigmiz sonucu binary(ikili) den tekra decimal-ondalika cevirecek olursak

Sonuc olarak:
 11000000.10101000.00000001.00000000 = 192.168.1.0(AG ADRESI-NETWORK ADRESINI BIZE VERIR)

 !Yani sonuc olarak bir pc nin ip:192.168.1.10- Subnet Mask:255.255.155.0  bu degerler ise bunun network-ag adresi:192.168.1.0 ve broadcaset adresi:192.168.1.255 oldugunu anlayabiliriz..yukardaki hesabi kafamizda dusunerek

 !Ve de 192.168.1.0 aginda 192.168.1.1-192.168.1.254 araliginda IP adresi tanimlanabilir
 
 !network-ag adresi:192.168.1.0 ve broadcaset adresi:192.168.1.255 -bu degerler agadres-network ve broadcast degerleri oldugu icin IP adresi olarak atanamazlar

 FARKLI ORNEKLERE BAKACAK OLURSAK
 IP:192.168.1.10
 SUBNETMASK:255.255.0.0
 Decimalden binary ye cevirip alt alta and- operatoru ile toplarsak...asgikdaki adres-network adresi oolarak karsimiza cikar
!Ag-networkadressi:192.168.0.0
!Broadcast-adresi:192.168.255.255

Ag-networkadressi:192.168.0.0 aginda-networkunde ip adresi 192.168.1.10 host adresi bu olan bir cihazdir ve 
192.168.0.0 aginda 192.168.0.1-192.168.255.254 araliginda IP adresi tanimlanabilir 
(2bolum var 255-255 her bir bolumun 2^3 farkli alternatifi var)2^3+2^3=16
2^16-2(network-broadcast)=65534 farkli IP ADRESI 192.168.0.0 aginda-networkunde hostlar(65534) atanabilir...


 IP:192.168.1.10
 SUBNETMASK:255.0.0.0

!Ag-networkadressi:192.0.0.0
!Broadcast-adresi:192.255.255.255
192.0.0.0 aginda-networkunde 192.0.0.1-192.255.255.254 araliginda IP ADRESI TANIMLANABILIR

(3bolum var 255-255-255 her bir bolumun 2^3 farkli alternatifi var)2^3+2^3+2^3=24
Dolayisi ile 2^24-2(network-broadcast i cikar) 16777214 farkli IP ADRESI 192.0.0.0 aginda atanabilir

!SUBNET MASK DEGERLERI KISACAS BITLERIN TOPLAMI SEKLINDE DE GOSTERILEBILIR 
255.255.255.0

11111111.11111111.11111111.00000000
11111111=>8
11111111=>8
11111111=>8
00000000=>0
Toplam = 24

!Subnetmask 255.255.255.0 degerini kisaca 24 degeri ile de prefix olarak temsil edebiliyoruz

Ornek Submask degerleinin kisaca prefix olarak gosterimleri

255.255.255.0=>24
255.255.255.255=>32
255.255.0.0=>16
255.0.0.0=>8

!60 HOST ICIN TANIMLANMASI GEREKEN SUBNET MASK?
Ornegn biz bir network olusturacagiz ve bu agda sadece 60 tane ip adresi olsturabilmemiz yeterli
O zaman network adresi ve subnet mask ve ip adresini nasil ve neye gore ayarlamaliyiz?

Subnet Mask degerinde, 255 disindaki 0 olan degerler network-ag adresine karsilik deger le aralarinda AND opearatoru ile kullanildigi icin, ne kadar cok binary de 0 olursa o kadar cok, ip adresi tanimlama firsati elde ediyorduk...IP ADRES SAYISI HESPALAMADA GORMUSTUK 

255.255.255.0
255=>11111111
255=>11111111
255=>11111111
0=>00000000

11111111.11111111.11111111.00000000
Kac tane ip adresi tanimlamak istiyorsam subnet mask degerinde de sondan itibaren o kadar 0 olmasi gerekiyor

soldan saga dogru binary yi decimal e cevirecek olursak 

1-0=>2^0=>1*0=0  ama en soldaki deger 0 degilde  1 olursa 2^0=>1*1=1 
2-0=>2^1=>2*0=0  ama en soldaki deger 0 degilde  1 olursa 2^1=>2*1=2 
3-0=>2^2=>4*0=0  ama en soldaki deger 0 degilde  1 olursa 2^2=>4*1=4 
4-0=>2^3=>8*0=0  ama en soldaki deger 0 degilde  1 olursa 2^3=>8*1=8 
5-0=>2^4=>16*0=0  ama en soldaki deger 0 degilde  1 olursa 2^4=>16*1=16 
6-0=>2^5=>32*0=0  ama en soldaki deger 0 degilde  1 olursa 2^5=>32*1=32 (Tam buraya gelindiginde eger su ana kadar olan hepsi 1 olsa idi su anda toplamda 63(1+2+4+8+16+32) adet ip degeri uretebilecek rakama ulasmis oluyrouz!!!!)
7-0=>2^6=>64*0=0  ama en soldaki deger 0 degilde  1 olursa 2^6=>64*1=64 
8-0=>2^7=>128*0=0  ama en soldaki deger 0 degilde  1 olursa 2^7=>128*1=128 

11111111.11111111.11111111.11000000
!Burdan da sunu anliyoruz , biz 6.0 a geldgimzde 63 tane ip adresi tanimlayabilecek seviyeye gelmistik...Bu da su demektir, bizim bu sayiya erisebilmemiz icin, submask in en son ki 8 bitin son 6 rakamii 0 olmasi gerekiyoir ki, 60 tane daha dogrusu 63 tane ip adrsi tanimlanabilsin!!!!!!!!!!!!!!!
!CUNKU SUBNET MASK DE 1 DEGERLERI NETWORK U TEMSIL EDERKEN, 0 LAR ISE HOST-YANI URETILECEK IP ADRESLERI ICIN AYRILMISTI BUNU ZATEN YUKARDA SOYLEMISTIK

!11111111.11111111.11111111.11000000 => kISACA PREFIX OLRAK GOSTERIRSEK=> 8 + 8 + 8 + 2
Ornegin : 192.168.1.10/26: gosterimi
(Kisa gosterim  26 yi gorunce hemen aklimiza 8+8+8+2 seklinde gelsin ve son 2 ye 1+1 sagdan sola dogru gelecek!!)

192.168.1.0 agindaki 192.168.1.10 IP adresine sahip hostu temsil eder
192.168.1.0 agindaki hostlara 192.168.1.1 ile 192.168.1.62 araliginda IP tanimlamasi yapilabilir 
Yani 192.168.1.0 aginda toplam 62 host icin IP tanimlamasi yapilabilir


  inet 192.168.115.191  netmask 255.255.255.0  broadcast 192.168.115.255
  Ornegin burda   192.168.115.191 ip adresi =>192.168.115.0 network adresi 
  Broadcast=192.168.115.255 Toplam = 254 adet ip adresi kullanilabilir

  !Burda Subnetmask calculater diye aratacak olursak eger internette nasil hesaplanacagini bulabilriz
  !Yani ip adersi ve subnetmask adresini girerek detayli bilgileri alabiliyoruz...Kullnilabilir host-ip adeti, binary subnetmassk-vs gibi bircok bilgi gorebiliriz


  IP:192.168.1.10
  NETWORKADDRESS: 192.168.1.0

  Network Address  Usable Host Range                   Broadcast Address
  192.168.1.0      192.168.1.1  - 192.168.1.62          192.168.1.63
  192.168.1.64     192.168.1.65 - 192.168.1.126         192.168.1.127 
  192.168.1.128    192.168.1.129 - 192.168.1.190        192.168.1.191
  192.168.1.192    192.168.1.193 - 192.168.1.254        192.168.1.255

  !Genel(Public) ve Ozel(Private) Ip Adresleri Hakkinda
  Ozel(private) ip adresleri:
  Internet uzerinde hicbir cihaza verilmeyen, sadece lokal networklerde(LAN-LOKAL-AREA-NETWORK) kullanilabilir
  Bu lokal-ip adrsi veirlen cihaz internet e baglanacagi zaman ona public ip adersi verilmek zorundadir

  Ahmetin EV Networku
  LAN-LOCAL-AREA-NETWORK-LAN-DA IKEN PRIVATE IP ADREESLERI VERILEBILIR
  Cihaz-1=>ip:192.168.1.2
  Cihaz-2=>ip:192.168.1.3
  Cihaz-3=>ip:192.168.1.4

  AMA INTERNETE BAGLANARAK, KENDI LOCAL AREA NETWORKU DISINDA, BASKA BIR NETWORKDEKI BIR CIHAZ ILE INTERNET UZERINDEN ILETIISME GECMEK ISTEDIGINDE, PUBLIC-IP-ADRESI YANI HERKESIN ERISEBILECEGI IP ADRESINE SAHIP OLACAKTIR 
  143.32.44.12 GIBI ORNEGIN
  
  !INTERNET UZERINDEKI TUM CIHAZLAR HEM OZEL(PRIVATE) HEM DE GENEL(PUBLIC) OLMAK UZERE 2 TUR IP ADRESINE SAHIPTIR

  !BU ARADA SUNU ANLAYALIM.. IKI FARKLI LAN(YEREL AG NETWORKUNDE) DA BAGLI OLAN FARKLI CIHAZLAR ORNEGIN AHMET IN NETWORKUNDE BAGLI OLAN BIR CIHAZ ILE AYSE NIN NETWORKUNDE BAGLI OLAN BIR CIHAZ AYNI IP ADRESI KULLANABILIR BUNUN HICBIR ONEMI YOKTUR, CUNKU PRIVATE OLDUGUINDAN DOLAYI , SADECE KENDI LOKAL AGLARINDA-LOCAL-AREA-NETWORK-LAN-LARINDA ILETISIM KURDUKLARI ICIN BU HIC SORUN DEGILDIR, CUNKU BU IP ADRESLERI ILE INTERNET ORTAMINA CIKAMIYORLAR

  Internete baglanirken ornegin cihaz-1 ip adresi public bir ip adresi ile internete cikiyor ki bu cihaza veri gondermek, cihaz la iletisime gecmek isteyenler, bu public ip adresi uzerinden iletisime gecebiliyorlar
!Ancak su nu bi lelim ki internet uzerindeki public ip adresleri tamamen benzersizdir...Yani internete baglanirken kullanilan cihazlarini ip adresleri tamamen benzersizdir!!!!!

!Simdi ornegin bizim evimizde toplam 3 cihazimiz olsun, biz bu cihazlar tek bir ip adresi uzerinden internete cikiyor.Ornegin evimizde ayni internete bagli olan cihaazlarimiz ayni public ip adresi uzerinden internete cikiyorlar

!Hem pc mizde , hem de telefonumuzdan interntten what is my ip adress yazarak ip adreslerimizi karsilastirabliriz


!Ozel IP adresleri-Pviate IP Adresses
Bunlar lokal aglarda kullanim ihtiyaclarina gore ihtiyac duyulabilecek cesitli buyukluklerde bazi IP araliklari ayrilmistir 

10.0.0.0 - 10.255.255.255 = 10.0.0.0/8=>Cok buyuk sirketler icin LAN(private ip adresleri icin)
172.16.0.0 - 172.31.255.255 = 172.16.0.0/12=>Biraz daha buyuk sirketler icinLAN(private ip adresleri icin)
192.168.0.0 - 192.168.255.255 = 192.168.0.0/16=>Kucuk sirket ve evler icinLAN(private ip adresleri icin)

Ev ve ofislermizdeki kucuk aglarda, genellikle

!ip adreslerini asagidaki komutlarla windows-linux de ogrenebiliriz
windowscommand- ipconfig
linux- ifconfig-ia 

!Loopback Adresi:(127.0.0.1):Bu dis aga cikmadan,  yani internete cikmadan, hatta lokal agimiza bile baglanmadan , bilgisayarimzdaki ag kartimizda bilgisyarimiz uzerinden iletisim kurmamizi saglayabiliyor. Ornegin kendi pc miz uzerinden bir https sucunu baslatip websitemizi test ederken, aslinda bu websitemizi kendi agimiz ile acmadan, kendi bilgisyarimiz uzeirnden test edebiliiriz
(127.0.0.1) adresi kendi pc mizi temsil eden, internet baglantisi saglayan ara  yuzumuzun kendisini temsil eden bir ip adresidir
!BroadCast Adresi:(255.255.255.255)

!IPV4-IPV6 NEDIR?

!IPV4(IP VERSION 4)
32BIT UZUNLUK 
2^32 YANI YAKLASIK 43 MILYAR ADRES
ONDALIK SISTEMDE 192.168.1.10
!IPV6(IP VERSION 6)
IPV6 IPV4 UN EKSIKLIKLERINI GIDERMEK UZERE GELISTIRILMIS OLAN BIR COZUMDUR 
128 BIT UZUNLUK 
2^128 YANI YAKLASIK 3.4028237e+38 adres
ONDALIK SISTEMDE 2001:0db8:85a3:0000:0000:8a2e:0370:7334
Toplam 28 bit uzunlugunda, 4 er basamakli, 16 lik gosterimde IPv6 tanimlaniyor

!IPv6, IPv4 ile uyumlu calisacak sekilde  tasarlanmistir
!Ipv6 ile artik tum cihazlara ip tanimlamak mumkun hale gelmistir..

!AG AYGITLARI-AG KARTI, REPEATER, HUB, BRIDGE, SWITCH, ROUTER

VERI ILETIM KANALI


Coaxial-Veriler elektrik sinyalleri yolu ile iletilir
Ethernet-Veriler elektrik sinyalleri yolu ile iletilir(Cat5-Cat6)
Fiber-veriler isik yolu ile iletilir(Smf-single mode- mmf-multi mode)
Wifi-kablosuz, verileri radyou dalgalari ile iletilir

Veri Iletiminde Hangisi Tercih Edilir
Yuksek hiz-cok maliyet-Fiber:Kitalar arasi internet baglantisni saglayan kabolar fiber kablolar
Cok uzun mesafe ye gerek y ok - maliyetsis-Ethernet 
Kablosuz, ve her yerden baglanmak istenirse:Wifi.. eger tracking sistemi takip edeceksek o zaman...wifi.. 
!Yani hangi veri iletisim kaynagi tercih edilecegi:Fiziksel kisitlamalara, maliyete ve ihtiyac a gore degisiklik gosterir..... 

!Network Interface Card(NIC)-Ag arayuz kartlari 
Bu kartlar veri alma ve veri gonderme konusunda bize yardimci olan kartlardir
Eger pc cde wifi teknolojisi yok ise network-interface-cart in usb seklinde olan aygitini alip pc mize takarak wifi teknolojinsi kullanabiliriz

Repeater:Veri iletimini daha  uzun bir alanda gerceklesmesini saglarlar.
Ornegin ethernet kablolu elektrik sinyalleri uzerinden veri iletim 100 mye kadar islev gormektedir, iste repeatar sayesinde bu mesafe daha da uzatilabiliyor
Wifi de de gecerli olabiliyor...Repeatre kendisine iletilen sinyalleri daha guclu bir sekilde kendsine bagli olan kabloya iletebiliyor...Dogru yere konulduklarinda, verilerin cok daha uzun noktalara kadar sorunsuz gonderilmebilmesini saglarlar

!Ornegin evimiz cok buyuk veya 2 katli ve biz wifi cihazi 1.kata koyuyrouz ama 2.katta internet baglnti sorunu yasama gibi durumlarda, repeater harika bir cozum sunuyor bize, uygun bir noktaya koyarak, internet in 1.katta durdugu halde 2.katta da cok verimli bir sekilde kullanilabilmesini saglar
Radyo dalglarini tekrarlayip dah da uzaga gidebilmesin saglar
Almis oldugu sinyalleri veya radyo dalglaarni tkerarlayarak, daha uzak mesafelerden ulasilmasini saglamak 

!Hub:Agdaki cihazlarin birbirne baglamanin kolay ca cozumunu sunar bize 
Cihazlarin Lokal baglanti kurmalarini saglar-LAN
HUB CIHAZINA birbiri ile baglanti kuracak pc leri baglayarak cihazlarin kolay bir sekilde birbiri ile iletisim kurabilmelerini saglamis oluruz
Her cihaz sadece 1 baglanti ile tum networke baglanmis oluyor..
Ornegin cihazlardan birtanesi hub aracilig  i ile bagli oldugu networkteki cihazlardan bir tanesine veri gonderirken yine bu hub uzerinden yapiyor bunu. Yani hub gonderilen veri yi alir kendisine bagli olan diger tum pc ler le paylasir..
Ama bu yaklasim son derece verimsiz bir yaklasimdir.Cunku HUB verilen veriyi kendisne bagli olan tum cihazlara gonderiyor..Ag  uzerinde gerekesiz yuk olsuturarak ag trafiginin olumsuz etkilenmesine neden olyor

!Bridge
Birden fazla lokal agi(LAN) lari birbirine baglyarak (WAN-WIDE AREA NETWORK) bu agdaki cihazlarini birbiri ile iletisim kurmasini VE verialisverisini saglar

Bridge-cihazlarin birisi ornegin kendi LAN-local-area-nwtwork icindeki baska bir cihaza veri gonderiyorsa hub o veri yi o lan icindeki tum cihazlarla paylasir ayni skeilde bu veri bridge e gelir ve bridge de birbirine bagli olan tum LAN- lara icindeki cihaz ip leri var oldugu icin ve veriyi gonderen cihazin kendi lan i icindeki baska bir cihaza gonderidigi icin bridge o verileri bosu bosuna diger LAN lar ile paylasmaz.... 

!Switch
Hub cihazlarinin daha akilli versiyonlaridir
Hub cihazlari bir cihazdan baska bir cihaza gonderilen veriyi o LAN- uzerindeki tum cihazlara ileterek , ag uzerinde gereksiz bir trafik olusturuyordu 
Ama switch bunu yapmiyor bir cihazdan gondeirlen veri o LAN-LOCAL AREA NETWORK DEKI hangi cihaza gonderilmis ise dogrudan o cihaza gonderiyor
Bunu basarmak icn de hangi cihazin hangi porta baglandigini bildigi icinde , cihaz1 cihaz2 ye veri gondermek istedgini switch e  soyluyor ve switch de verinin hedefindeki cihazi hangi portuna bagl i oldugu icin bu veriyi o port uzerinden iligili cihaza yonlendirerek diger cihazlari mesgul etmeden veri alisverisin hedeften hedefe, noktadan noktaya sagliyor

!Switch ile olusturulmus ag lokal bir agdir, kendi lokal agimizi switch aracilgi  ile kurabiliyoruz.LAN(local area network)

Lokal agda baglanan tum cihazlarin benzersiz ip adresleri oluyor
Switch sayesinde, aglarimizi alt aglara bolebiliyoruz

Ag-network: 192.168.1.X Networku  
Cihaz1-ip: .10
Cihaz2-ip: .20
Cihaz3-ip: .30


Ag-network: 192.168.2.X Networku  
Cihaz1-ip: .10
Cihaz2-ip: .20
Cihaz3-ip: .30

Her bir switch aracilig ile biz, ayri LAN-LOCAL AREA NETWORK ORTAMI OLUSTURABILIYORUZ

!ROUTER
Biz im ornegin 2 tane switchimiz var ise biz 2 tane LAN Olusturup her bir LAN da 3 er cihaz oldugunu dusunursek, iki switch ile iki tane LAN ortami-networku kurabiliuyoruz. Peki LAN1 denki cihaz1 LAN2 deki cihaz1 ile iletisim kurmak isterse bunu nasil yaparz, iste burda da router devreye giriyor
Router yonlendirme gorevi ile, switch ler arasinda swictchleri bibrine yonlendirme islemi yaparak, LAN1  deki cihaz1 ile LAN2 deki cihaz1 deki araca veri gonderebilmesini sagliyor 

Router 1 bolumu ile LAN1 deki bir cihaz gibi bu switche baglanarak bu LAN DAKI CIHAZLARDAN BIRI GIBI OLURKEKN AYNI ZAMANDA DA , LAN2 DEKI ORTAMADA SANKI O LAN2 DEKI CIHAZLARDAN BIRI IMIS GIBI DE BAGLANARAK, TABIR I CAIZ ISE, HER IKI LAN DAKI CIHAZLAR ARASINDA BIR GETWAY  GIBI...BIRBIRLERINE GECIS YAPABILMELERINI SAGLIYOR,....

Her iki LAN a bagli olan cihazlar getway-router in default getwway adresini biliyorlar ve 
router in LAN1 icin ornegin DEFAULT GETWAY-LAN1: 192.168.1.1 IKEN LAN2 DEFAULT GETWAY : 192.168.2.254 TUR..BU ROUTER ADRESINI BILDIKLERI ICIN GEREKLI YONLENDIRME DE MUMKUN HALE GELIYOR...ASLINDA AYNI ANDA HEM LAN1 HEM DE LAN2 DEKI NETWORKE SANKI CIHAZ GIBI, DAHIL OLMUS OLUYOR

!BIZ EVLERIMIZDE LOKAL AGIMZDAN, INTERNET-DAHA GENIS BIR AGA CIKARKEN, MODEM(ASLINDA ROOTER) KULLANYORUZ.
!BIZIM LOKAL AGIMIZIN INTERNET UZERINDEKI BIR IP-ADRESINE ULASMASI ICIN YONLENDIRMEYI YAPIYOR 
!BU ROOTER CIHAZINA DA DEFAULT GETWAY diyoruz

!IINTERNETE NASIL BAGLANIYOR!!!!!
Windows da ipconfig ile ip bilgilerini alabiliriz 
Bize 
IPv4 Address.... 
Subnet Mask 
Default Gateway  

192.168.1.1(Bu adres pc mizin internete cikmak icin kullandigi, ip adresidir, yani modem-router a ulasmak icin kullandigi ip adresini tasvir ediyor, aslinda modemin lokal agdaki adresidir... diyebiliriz..)
!INternete cikmak icin kullanilan varsayilan-default-ag gecidi bizim modemimizin ip adresini temsil ediyor!!!!!!
!192.168.1.1 bunu alip eger browser a yazarsak modem-rooteru imizin login sayfasina gidecektir                           
ipconfig-windows
ifconfig-linux

!Router , bizim lokal IP adresimizi ISS tanimladigi public IP adresine NAT ile donusturuuyor(NAT:Network Address Translation)

Oregin local-ip adresi:192.168.1.10 adresli cihazimiz internete baglanmak icin router(modem) a basvuruyor, rooter da internet servis saglayicimizin bize saglamis oldugu public ip adresine  149.144.39.184 lokal ip adresini donusturuyor. Bu sayede bizim lokal agimzida farkli ip adresine sahip olsa da cihazlarimiz, hepsi ayni public ip adresi uzerinden internete cikiyuorlar!!!!
Ancak sunu unutmayalim ki, Router kendisi uzerinden internete cikan her bir cihazin hangi porttan baglandigini bildigi icin cihazlari da ayirt edebiliyor bu sayede
Router da NAT-NETWORK ADRESS TRANSLATION-NETWORK AG-ADRESINI DONUSTURME PROTOTOLKOLU SAYESINDE LOKAL ADRESI-PRIVATE IP ADRESINI PUBLIC IP ADRESINE DONUSTUREREK, CIHAZLARIN INTERNETE CIKMASINI SAGLIYOR
!SUNU UNUTMAYALIM...BIR ORTAMDA BULUNAN CIHAZLAR AYNI MODEM-ROUTER A BAGLI OLDUKLARI ZAMAN HEPSI AYNI PUBLIC IP UZERINDEN INTERNETE CIKARLAR, ROUTER BU CIHAZLARI PORT NUMARLARINDAN AYIRT EDER

ROUTER SAYESINDE AGLAR HIYERARSIK SEKILDE ALLT AGLARA BOLUNUP YONETILEBILIYOR
ORNEGIN ULKE GENELI BIR SIRKETIN FARKLI SEHIRLERDEKI SUBNETWORKLER KULLANABILIRIZ 

SIRKET NETWORK-AGI: 10.X.X.X
ISTANBUL SUBESI: 10.10.X.X
SATIS:10.10.20.X 
PAZARLAMA:10.10.30.X 
MUHASEBE:10.10.40.X 

IZMIR SUBESI:10.20.X.X 
SATIS:10.20.20.X 
PAZARLAMA:10.20.30.X 
MUHASEBE:10.20.40.X 

!Diger Aygitlar 
!Access Point: Kablosuz internet baglantisi saglayan cihaz-aygittir,ve bu baglantinin surdurulmesi...Agimzi  access point ile kabolsuz hale getirerek yayin yapmasini saglayabiliriz
!Firewall:Guvenlik duvari-agimzdaki trafigi inceleyip gerekli kurallari koyarak, belirli ip adreslerinden gelecek istekleri kabul ederi..Normalda rooter lar kendi icinde firewall sunuyor, ip adreslerini izleme ve filtreleme gibi, ama ozellikle sirket hatlari gibi guvenligin onemli oldugu kurumlarda, ve buyuk.-networklerde , firewall gorevi icin ayri cihazlar bulunyor. Bu cihazlarda cok daha fazla konfigurasyon yapilmasi ve cok daha fazla islemin ayni anda yurutulmesi gibi durumlar... 
!Proxy:
!Load Balancer
!Virtual Switch
!IDS/IPS


!OSI - TCP-IP MODEL - TCP UDP  
Network dedgimiz yapinin varliginin amaci, aslinda iletisimi mumkun kulacak protokol saglamak
Protokol kavrami, ortak iletisim yolunu ifade etmek icin kullanilan bir kavramdir

Network uzerinde tum cihazlarin isletim sistemi ve donanimdan bagimsiz olarak iletisimi, aradan akmis olan veriyi anlayip isleyebiliyor olmasi gerekiyor.. 
Biz bir dili anlamamiz icn ornegin o dilin kurallarini, gramerini bilmemiz gerekiyor bu durum aynen network uzerindeki iletisim icin de gecerlidir.  iletisimin herkes tarafindan sorunsuzca ve tarafsizca anlasilabilmesi icin, bu iletisim protokollerinin onceden tanimlanmis olmasi ve iletisime katilan herkesin bu kurallara uyuyor olmasi gerekiyor
Iste bu OSI modeli de protokol kurallarini tanimlayan basit bir modeldir

OSI MODEL KATMANLARI 
1-Layer-1 - Physical
fIZIKSEL KATMANDIR, verileri bitler halinde cihazdan cihaza aktarilmasini saglayan, Coaxial,Ethernet,Fiber,Wifi, Repeater, Hub, gibi teknolojiler bulunuyor
Wifi: Radyo dalgalari ile hat uzerinde veri iletimimni sagliyor
Fiber:Isik akimi, ile...veriler iletiliyor
Ethernet: Verileri elektrik yolu  

Layer-2-Data Link 

MAC media access control -
Bu cihazlar sayesinde bilgisyarimizin fiziksel katmanlar araciligi ile gelen veriyi cihaza aktarilmasini sagliyor
Fiziksel katmanla cihaz imiz arasinda ara birim gorevi goruyor 
Bu cihazlarin kendilerne ozel bir mac- adresi bunlari benzersiz bir mac numarasidir, bu sayede cihazlar birbrinden farkli oluyor ve bu cihazlar bilgisayarlarda gomulu olarak geliyor 
Bu cihazlar sayesinde cihazlar arasi(yani pc,mobile,tv,smart-clock,nintendo) arasinda veri aktarimi mumkun hale gelioyr

Cihaz-1  Cihaz2 ye veri atktarirken Cihaz1 verileri uretiyor ve ag kartina aktariyor ag karti kabolda, verilerin iletilebilecegi, fiziksel katman olan ornegin ethernet te tasinabilecek hale gelmesi icin, gerekli donusumu sagliyor ve verinin Cihaz2 ye iletilmesini sagliyor ki Cihaz2 nin MAC-ag karti sayesinde verinin gidecegi cihaz olan Cihaz2 nin versini aliyor ve cihaza aktarimini sagliyor, yani ethernet araciligi ile veriyi alip cihazin onun alabilmesini sagliyor Mac-ag karti

Switch cihazlari da bu katmanda sayilablir
swich aygitlari kendilerine bagli olan cihazlarin uniq mac adreslerini bildikleri icin, mac adresleri sayesinde gelen verinin hedef pc ye dogrudan gitmesini sagliyor
Mac uniq adresleri ag kartlarinin taninarak, cihazlar tarafindan verilerin birbirleri arasinda gonderilmesine ve verilerin hefef cihazlari bulabilmesine imkan saglamis oluyor

Layer-3-Network 
Network de artik mac adresleri yerine ip adresleri devrye giriyor 
Yani cihazlar arasi iletisimde ip adresleri uzerinden yapiliyor
Veriyi gonderen cihaz veriyi gonderecegi cihazin ip adresini bilir, ve veri gonderirken veri paketini icine kendi ip adresini de koyarkei verinin gittigi cihaz, veri nin kimden geldgini bilsin..
Verinin hat uzerinde tasinmasi icin veri paketinin rooter-modem e iletilmesi gerekiyor,... 
Veri gonderirken modem e gonderen pc veri paketi icine kendi mac-ag karti uniq-numarasini de gonderiyoir ve gonderecegi cihazin mac-uniq adersini veri paketine koyarak gonderiyor
!Rooter-modem kendisine gelen veriyi aldigi zaman orda bu veri hangi ip adresinden gelmis hangi mac adresi ile gelmis hangi ip adresine gidecek ve hangi mac adresine gidecek bunlarin hepsini biliyor....
Rooterlarin network kartlari vardir ve bunlar sayesinde bunlar
MAC-media access control
hem ip hem de mac adresini birlikte kontrol ediyor rooter gonderilen verinin gidecegi cihaza veriyi aktarmadan once ve bu adresler dogru ise eslesir ise o zamn veriyi hedef cihaza iletiyor

Verinin gonderildig i cihazada gelen veriyi kontrol ederken, gelen veri paketi icnde gonderilen-hedef ip-mac adresini kontrl ederek kendisini geldigni anliyor
IP ADRESI SAYESINDE VERIYI GONDERIYORUZ AMA, MAC UNIQ ADRESI SAYESINDE DE, AYNI IP YI KULLANAN FARKLI CIHAZLAR ARASINDAKI FARKLILKLARI AYIRT EDILEBLIYOR 
!BIR VERI BIR CIHAZDAN FARKLI BIR CIHAZ A INTERNET YOLU ILE ILETIRKENK, REQUEST GONDERIRKEN ORNEGIN, IP ADRESI KULLANILIOR AMA MAC-ADRESI(AG ADRESI) SAYESINDE, VERI HEDEF CIHAZA ULASABILIYOR, VE HEDEFINI BULUYOR BUNLAR COOOK ONEMLIDIIR

!CIHAZLAR ARASI VERI ILETILMSI ICIN MAC ADRESLERI KULLANILIRKEN, UZAK AGLAR ARSINDA VERI ILETILEBILMESI ICIN IP ADRESLERI KULLANILIYOR YANI HEM MAC HEM DE IP ADRESLERINI IHTIYAC OLUYOR

LAYER-4-TRANSPORT 
BIZ INERNETTEN AYNI ANDA, HEM FIREFOX UN INTERNET ADRESINE, HEM DISCORDA HEM DE SPOTFIYA BAGLANIYORUZ PEKI NASIL OLUYOR DA TEK HAT UZERINDEN FARKLI FAKRLI ADRESLERE AYNI ANDA BAGLANABILIOYRUZ, BUNLAR NASIL AYIRT EDILEBLIOYR 
CEVAP, PORT ADRESLERI SAYESINDE 
HER BIR PROGRAMIN KENDISINE OZEL OLAN STANDART BIR PORT ADRESI OLUYOR...   BU ADRES SAYESINDE, INTERNET HATTI UZERINDEN HEDEF E ULASTIRILIYOR

ORNEK https://www.linuxdersleri.com adresini ziyaret etmek istedgimz zamn, dogrudan tarayicimz uzerinde rastgele bir port acilioyr
Cihazimiz: 1.1.1.1 ip adresi ve 
1.1.1.1 :1525(port adresi) bu gelen verinin benim cihazima iletilebilmesi icin acilmis olan port numarasidir
Yani kisacasi demis oluyoruz ki bu ip adresi ve port numarasi uzerinden basna veri gonderebilirsiniz demis oluyoruz 
Ornegini react ugyomasi actimgzda 
localhost(127.0.0.1):3000 portunda aciliyor ki, bu ip adresi ve port numarasi uzerinden veri gonderilebilmesi icin, respoinse gonderilebilmesi icn
Request gonderilirken hem clientin hem de server in ip adresnin sonnda port numarasi ile gonderiliyor
Kaynak(Client)=>127.0.0.1:3000
Hedef(Server)=>5.5.5.5:80

!Simdi cok enteresan bir bilgi biz ornegin lokal pc mizden 3 farkli domain-ip adresine  yani bir websitesine baglaniyorsak 3 farkli sekmeden acilmis olan her bir sekme icin, farkli port numaralari kullanilacaktir lokalimzde..HATTA 3 FARKLI SEKMEDE AYNI WEBSITESINE AYNI ANDA 3 SEKMEDEN ISTEK GONDERILRSE LOKAL DE 3 SEKME ICIN DE FAKRLI PORT ADRESLERI VERILECEKTIR 

1.1.1.1:1515 <--> 5.5.5.5:80(www.linuxdersleri.net)
1.1.1.1:2515 <--> 5.5.5.5:80(www.linuxdersleri.net)
1.1.1.1:3515 <--> 5.5.5.5:80(www.linuxdersleri.net)

!Birdaha anlayalim, port numarasi ile birlikte istek gonderen cihaz in bilgisini ipadresi ve port numarasi beraber gonderiliyor ve bu sayede bu port nujamrasina gonderebilirsin diyoruz responsu....Birden fazla sekmeden ayni websitesine ait farkli sayfalarda dolasabliyoruz ve her bir sekme ayni serverdan bu portlar sayedsinde, farkli hizmetle alabiliyorlar

!Bu portlar rastgele belirleniyor... 

!Standart portlar
Http:80
Https:443 
FTP(File Transfer Protocol):21 
SSH(Secure shell):22
Telnet:23
SMTP(simple mail transfer porotocol):25

Bazi konfigurasyonlari bozulmadan kulanilasi icin, bu portlar standart olarak  kullanilablioyr ama bunlar kullanilmak zorunda degil tabi ki...ama ona gore de ayarlarin duzenlenmesi gerekiyor 
Server tarafindan da ayni server in farkli services lerinde kullanilmak icin ozellikle, farkli portlar kullanilaibilir

!Neden serverlar port numarasi kullaniyor?
Web Server and FTP Server on the Same Server:

Imagine you have a single server, Server X, that hosts both a web server and an FTP server.
The web server listens on port 80 for incoming HTTP requests, and the FTP server listens on port 21 for FTP transfers.
When a client wants to access a webpage, it sends an HTTP request to Server X's IP address on port 80.
When the same client wants to perform an FTP file transfer, it sends an FTP request to Server X's IP address on port 21.
Server X, using the port number, directs the requests to the appropriate service (web or FTP) running on the same physical server.
Mail Server with Multiple Protocols:

A single mail server, Server Y, can support multiple email protocols such as SMTP (port 25 for sending emails) and IMAP (port 143 for retrieving emails).
Clients use port 25 to send emails through SMTP to Server Y and port 143 to access their emails using IMAP.
Server Y, based on the port number, knows which email protocol the client intends to use and processes the requests accordingly.
In these examples, a single physical server hosts multiple services, each using a different port number. The port numbers help differentiate between the services, ensuring that incoming requests are directed to the correct service running on the same server.


VERILERIN TASINMA YONTEMLERI 
TCP PROTOKOLOU -TRANSMISSION CONTRL PROTOKOL 

CLIENT-SERVER ARASINDAKI ILETISIMIN DAHA ONCEDEN TEST EDILIP KONTROL EDILMESI GEREKIYOR  
CONNECTION ORIENTED-THREE WAY HANDSHAKE 

1-SYN(SENK) FROM CLIENT TO SERVER
2-RESP(SENK-ACKNOWLEDEG) FROM SERVER TO CLIENT 
3-ACKNOWLEDGE FROM CLIENT TO SERVER 

GENELLIKLE VERITBUTUNLUGUGNUN ONEMLOI OLDUGU DURUMLARDA KULLANILIR 
GONDERLEN EPOST UN ONEMLI BILGI GONDERILDIGI ZAMAN YA DA DOSYA GONDERILME DURUMLARINDA..  

UDP PROTOKOL-USER DATAGRAM PROTOCOL 
HIZIN GEREKLI OLDUGU, GORUNTULU, VE SESLI ILETISIM DE KONUSMLAARDA...GORUNTLU KONUSMALARDA 
ARADA DTA KAYIPLARININ COK PROBLEM OLMADIGI DURUKMLARDA BAZEN SES,GORUNTU KESILEBLIR AMA ILETISIM COK HIZLI GERCEKLESIR 
SUNUCUUNN AYAKTA OLUP OLMADIGIA BAGKMAKSIZIN DOGRUDAN VERI GONDERILIR
EGER KARSIDAKI SUNUCU HAZIR DEGIL ISE, ILETISIM SAGLANABMAYABILIYOR

!EMAILLER TCP PROTOKOLU UZERINDEN GONDERILIR. CUNKU VERI BUTUNLUGU ONEMLI VE VERILERIN YOLDA KAYBOLMADAN EKSIKSIZ GITMESI GEREKTIGINDEN DOLAYI1!!!

!Web Browsing (HTTP/HTTPS - Application Layer):
Use Case: Accessing websites and web applications.
HTTP (Hypertext Transfer Protocol) and its secure counterpart, HTTPS, are used for fetching and rendering web content in web browsers. When you open a web page, your browser communicates with web servers using these protocols.

!Email Communication (SMTP/IMAP/POP3 - Application Layer):
Use Case: Sending and receiving emails.
SMTP (Simple Mail Transfer Protocol) is used for sending emails, while IMAP (Internet Message Access Protocol) and POP3 (Post Office Protocol) are used for retrieving emails from email servers.

!File Transfer (FTP/SFTP - Application Layer):

Use Case: Uploading and downloading files.
FTP (File Transfer Protocol) and SFTP (SSH File Transfer Protocol) are used for secure file transfer between clients and servers. They are commonly used for website maintenance and data exchange.

!Remote Access (SSH/TELNET - Application Layer):
Use Case: Remotely accessing and managing servers and network devices.
SSH (Secure Shell) and TELNET are used to establish secure remote connections to network devices or servers for configuration, administration, and troubleshooting.

!Veriler fiziksel katman yani ethernet-fiber-wifi lerler iletilrken bitler halinde iletiliyor yani 0101100011100110101010 seklinde iletiliyor...

!HOSTLAR NASIL HABERLESIR
!AYNI AGDAKI CIHAZLAR 

Host-bizim pc mizdir. Bir host-pc(mobile,smartklokke,tv..) baska bir hosta veri godnerecegi zaman veri gonderecgi hostun-cihazin IP ve MAC adreslerini bilmek zorundadir. 
Aslinda cihazlarin ip adreslerinden once MAC(media access control) adresleri tanimlaniyor, dogru mac adres eslesmesi olmadan IP adresinin kontrolu de gerceklesmeyecegi icin, oncelikli olarak mac adresinin bilinmesi gerekiyor

Ag baglantsi-Network connection network-ag karti ile gerceklesen birseydir, fiziksel katmandan bitler seklinde iletilen veriler, cihazin ag kartina gonderiliyor, dolayisi ile veri tasinirken veri ag-karti ile yani muhatap oluyor, bu ag kartinin benzersiz kimlik adresleri de MAC adresleri oldugu icin, mac adreslerini bilmmeden verileri dogru makineye-dogru ag kartina yonlendiremeyiz..iletemeyiz
Mac-agkarti adresleri donanimlara dogrudan tanimlanirken, ip adresleri mantiksal olarak tanimlanmistir
!Simdi buraya dikkat, duruma gore zaman icinde ayni cihaza farkli ip adresleri tanimlanabilirken, ama bu cihazin kullandigi ag-karti nin mac adresi herzaman sabittir...Bu sebeple ip adresleri ile mac adresi arasinda dogrudan organik kalici bir bag  yoktur
!Biz ip adresi ni bildgimz bir cihaza kendi cihazimizdan veri gonderebilmemiz icin, gonderilecek cihazin mac adresni bilmemiz, ogrenmemiz gerekiyor.

! Bunun icinde ARP-adress resolution protocol u kullanilabiliyor
Broadcast yayini nedir: It is a one-to-everyone communication method, and all devices within the broadcast domain receive and process the broadcasted message.
Bir cihaz ip adresini bildgi baska bir cihaza veri gonderirken, mac adresini ogrenmek icin once,broadcast yaparak lokal agdaki tum cihazlara bu ip adresine sahip cihazin mac adresi nedir diye soruyor, bu bir sorgu gibi dusunebilirz
Burda ip adresinin sahipp olan cihaz bir tek broadcast yayin sorgusunu yanitliyor, yanitlarken sorgunun geldigi ip-mac adresini ogrendigi icin, o ip-mac adrsini kullanarak, ona kendi mac adresini goneriyor

  Broadcast yayini ile ARP(ADDRESS RESOLUTION PROTOKOL) sorgu mesaji ni gonderiyor
ARP paketi gonderilirken Broadcast yayin ile yani tum cihazlar hedeflenerek gonderiliyor ve  broadcast y ayini icin tanimlanmis bir mac adresi var o kullanildiginda agdaki-network deki tum cihazlar hedeflenmis oluyor

Bir cihaz kendi networkunde olmayan bir cihaz i ip adresi ve submask adresi uzerinden taniyor, yani kendi agindaki cihaz ile kendi aginda olmayan cihaz i kolayca ayirt edebiliyor , diger cihaz la iletisime gecmeye calistigi zaman..

Router(modem) bagli oldugu cihazlarin ip-mac adreslerini kendi tablosunda tutuyor
Routerlar imiz internete baglanirken ki getway- cikis networkumuz...cikis agimz...rooter in ip numarasi ile public ip ile cikiyordu o rooter-modem e bagli cihazlar

Rooter a bagli olan her cihaz, kendi bagli oldugu modem-rooter in ip adresi ni biliyor.... 

Yani network disindaki bir cihaz la iletisime gecilecegi zaman, iletisime geclecek cihaz in ip adresi ile rooter in mac adresi gonderiliyor veri paketinde rooter a 

!Rooter-modem kendine bagli olan cihazlar in ip-mac aderslerini tuttugu icin kendine bagli olan farkli networklerdeki cihazlarin da birbiri ile iletisimini sagliyor..

WAN-WIDE AREAL NETWORK LERDE ORNEGIN...INTERNET BAGLANTISI DURUMUNDA 
CIHAZ1-ROOTER A YANI MODEM E ILETISIME GECECEGI IP ADRES VE MODEM IN MAC ADRESI, YANI BU ISLEMLER ICIN KULLANDIGI ORTAK MAC ADRESI SONRA MODEM-ROUTER DA INTERNET SERVIS SAGLAYACISINI IP ADRESINE YONLENDIRIYOR VE TABI KI GONDERILEN CIHAZ DA BIR MODEM E ROOTER A BAGLI ,, ONUN ROOTER I DA PAKET BILGISNI ALIYOR HANGI IP-MAC ADRESNDEN GELDIGNI BILIYOR VE KIME GIDECEGINI DE BILIYOR 

!SWITCH NASIL CALISIR
LAN(LOCAK AREA NETWORK) AYNI AGDAKKI CIHAZLARIN HABERLESMESINI SAGLIYORDU, HUBDAN FARKLI OLARAK DA BIR CIHAZ AYNI AGDAKI DIGER CIHAZLA ILETISIME GECECEGI ZAMAN, DOGRUDAN HEDEF CIHAZA GONDERIYOR DU DATAYI...

Switch aygitlari ip adresleri ile ilgilenmiyor hangi mac adresinin hangi porta bagli oldugu ile ilgilneiyor ama burdkai port fiziksel portdur
Switch cihazi hemen baglnair baglnamz bu bilgileri almiyor, yani mac-port adreslerini
Switch hostlar(cihazlar) arasinda iletisim gerceklestikce bu kayitlari tutmaya basliyor

Port dedgimz su, her pc ethternet kabolusu araciligi ile switch e baglaniyor ya iste switch e baglanan port adresi var, yani switch girisinin numarasi...baglanti noktasina port diyoruz normalde...

!Switch ler ip adresleri ile ilgilenmiyor, sadece hangi cihaz hangi port girisine baglnamis ona bakar.

VLAN(VIRTUAL LAN AREA NETWORK)
SANAL YEREL AG BAGLANTISI

Fiziksel donanimin  yazilimsal olarak sanal sekilde portlara gruplanarak bu sayede snaki birden fazla switch aygitimiz var gibi, aglara-newtorklere bolup bu networklere ozel konfigurasyon tanimlamasi mumkun oluyor
Sanal olarak bolunseler bile swtich cihazlari iki ayri agi yonettikleri icin kendi mac ve port tablolarini ayri ayri tutuyorlar
Switch ler cihazlarin mac-port numarlarini o cihazlar switch den cikarilana kadar tutarlar

!Router Nasil Calisir!

!Aglar-networkler arasi veri yonlendirilmesi ni mukun kilan aygitlardir.
!Rooter lar kendilerine ait ip adresi ve mac adresini barindiriyorlar, bu sayede cihazlarin icinde bulundugu networke sanki bir cihaz mis gibi dahil oluyorlar

Rooter aygitinin sorumlulugu, kendine bir paket gelirse, bu paket kendi ip sine gonderilmemis ise  bile hangi ip adresine gondeilmis ise o ip adresine gelen paketi yonlendirme yapabiliyor, ama normal 1 cihaz baska bir normal cihaz a boyle bir paket gonderse, eger ip adresi gondeirlen cihaz in ki ile uyusmuyhorsa paketi gonderilen cihaz dusurecektir bu paket bana ait degil diye, ve de herhangi bir yonlendirme yapmayacaktir, cuku oyle bir sorumlulugu yoktur
!Router yonlendirme islemini de sahip oldugu ip ve mac adresleri ile sagliyoir
!Rooter lar ayni anda birden fazla aga katilabilirler ve her ag icin o aga ozel ip-mac numarasi kullanirlar, ve bu sayede aglar arasi networkler arasi veri iletisimini yapabilirler

!Rooterlar kendi icinde  yonelndirme tablosu tutuyorlar...ve burda, kendisine bir ip adresi ve paket gonderildiginde bunun hangi aga bagli oldugnu biilir ve paketi o aga gonderir

!Router lar ilk once dahil oldugu network ip lerini tutuyor ve kendine o agdan bir cihz paket gonderince o cihaz in ip adersinden kendisinin dahil odugu hangi networden bu paketin geldig ve hangi networkteki cihaza iletilecegini bilebiliyor

!Router larin  yonlendirme tablolarinda kendi directly connected oldugu networklerin bigilis i oluuyor, dolayisi ile dogrudan bagli olmadigi networklerin bilgini tu tmuyor
!Bu duruma cozum olarak da static routes,  yani manuel olarak elle ekledgimz ip adreslerini kullanabiliyoruz

!Dynamic Routes daha kullanislidir


!Rooterlar in kendilarine ait ARP tablolari da vardir ve burda tum cihazlarin ip adreslerinin yaninda, mac adresleri de tutulur, cunku sadece ip adresleri ile bir cihazin hanig agda oldugu bilinir ama hangi cihaz oldugu dogrudan h edef cihaz bulunamaz mac adresi olmadan....

!Hem cihaz(hostlar) lar hem de router lar ayri ayri kendi arpt olabolari var onlari tutuyorlar

!Network interace-agkarti varistasi ile hallediyor aslinda

!Sunu da hatirlayalim ,ARP protokolu sayesinde IP adresinden mac adersinin kesfedilmesi mumkun oluyor....

!ZATEN INTERNET DEDIGMZ WIDE AREA NETWORK DE BENZER SEKILDE CALISIYOR
!INTERNET NASIL CALISIR!!!!!

Cihaz1 ornegin rooter a  ip adresini paketin icnde iletiyor hangi ip adresi ile iletisime gecekse yani ornegn bir servera yani y ayinlanmis bir websitesine.. 
Rooter(modem) da ip adersinden gonderilen paketin dis bir aga gondeildigin anliyor ve o dis ag ile de direk bir iletisimi lmadigndan dolayi, diger rooter a teslim ediyor ve rooter lar bu sekilde birbirlerine teslim ede ede en son server in bagli oldugu rooter(modem) a kadar gidiyor veri paketi ip adresine sahip olan ve mac adresiin dogrulandigi cihaza(Bu internet in 3 asamali dogrulama...araci ile mac adresi dogrulaniyor once..daha once bakmistik buna) iletilmis oluyor bu cihaz server oluyor..server da host-cihaz lardan bir tanesidir

!Yani esasinda bizim internete baglnamamiz da bir network olaydiir...cok daha buyuk olcekde bir network connection dir...

!Ag-networkleri router lar sayesinde alt-aglar a bolerek ornegin sirketlerde her bir departman icin bir subnetwork olusturabiliyoruz...
!Neden alt aglara bolunmek istenir cunku, surdurulebilirlik icin, ve herhangi bir depratmanda cikabilecek bir network probleminin sadece o departmanin etkilemesi diger lerinn ondan etkilenmemesi saglanir, eger tum depratmanlar tek bir aga bagli olsa,  her hangi birinin agda yasayacagi problemden tum departmanlar etkilenecektir

!Parent durumndaki routerlar, kendilerine bagli alt-routerlar ve onlara bagli olan cihazlara gelen herhangi bir data paketi, routerlar a oncelikle gelecegi icin, routerlar yonlendirme tablosunda, da  ip adrfresi olarak router in ip si tutuluyor birbirlerinde cunku oncelikel router a iletiliyor paketler


!AG-NETWORK PROTOKOLLERI NEDIR? 
INTERNET ARACILIGI ILE DATA ALISRVSERISLERININ PRENSIPLERI VE YAPACAGIMZ DATA ALISVERISININ TURUNE GORE FARKLI KURALLARI VARDIR....ISTE BUNLAR DIR PROTOKOLLER...

1-ARP PROTOKOLU(ADRESS RESOLUTINO PROTOKOL)
iP ADRESLERI U ZERINDEN MAC ADRESNI OGRENMEMIZI SAGLIYORDU
MAC-AG KARTI ADRESI-KIMLIK NUMARASI- NETWORK INTERFACEID NUMBER

!Iki cihaz iletisime gececegi zaman, switchler vasitasi ile vs, ip adresi ne ARP sorgusu ile o agdaki tum cihazlara broadcast  yayini ile, data paketi gonderecegi ip adresinin mac adresini sorgulayabiliyor ve o ip adresi hangi cihaza ait ise o mac adresini gonderiyor ama ilk basta ip adresine soran hangi cihaz ise o cihaz paket iicnde kendi ip -mac adresini de koydugu icin, kaynak cihaz in ip-mac adresini kendi arp tablosuna kaydediyor, bir daha ki kontak kurma duruumunda direk artik mac-ip adresi bilindigi iicn kontak kuruabliyoalr

!FILE TRANSFER PROTOKOL(FTP)

Lokal bir cihazimiz  uzerinden server-cihazimizdan bir dosya talep ederek bu protokol sayesinde talep ettigmz dosyayi sunucudan alabiliyoruz

(client)10.168.1.10  ->request  172.32.45.55(FTP  Server)
(client)10.168.1.10  text.txt<-request  172.32.45.55(FTP  Server)
Tabi dosya sunucusunun dosyayi isteyn client-in ip adresine acik olmasi gerekiyor

!SMTP-SIMPLE MAIL TRANSFER PROTOCOL 

mail gonderme islemlerinde kullanidgimz bir protokoldur

POP3-IMAP YAKLASIMLARINDAN BIR TANESI  ILE MAIL ICERIGINI GONDEIRLEN CIHAZ KENDI CIHAZINDA GORUNTULEYEBILIYORLAR

email-gonder -> SMTP PROTOCOLU ARACILIGI ILE -> GMAIL SMTP SERVER 172.32.45.55 -> SMTP-INTERNET ARACILIG ILE OUTLOOK SMTP SERVER(CUNKU GONDERILEN MAIL ADRESI OUTLOOK) -> POP3 VEYA IMAP ARACILIG ILE HEDEF PC DEKI KULLANICI MAILL INI ACITGINDA KENDISINE GELEN MAIL I GORUNTULEYEBILECEKTIR VE SONRASINDA DA HER SEFERNE GELEN MAILLERINI GORECEKLERDIR HER SEFERNDE....


!HTTP-HYPER TEXT TRANSFER PROTOCOL 
Her turlu media icegini , RESIM, VIDEO, TEXT icerigi web-internet uzerindnen aktrmamizi  mumknun kilan bir protokoldur 

CIHAZ1(10.168.1.10)
WEB TARAYICI->REQUEST->WEBSERVER CIHAZI(2)(143.32.44.12 = www.linuxdersleri.com-DIREK TARAYICIDA BUNU ACMAK BIR REQUEST GONDERMEKTIR....)REQUEST ILE DIYORUZ KI BIZE SEN 143.32.44.12=www.linuxdersleri.com BU IP LI VE BU DOMAIN ILE SERVER OLARAK BANA WEBSITENIN ICERIGINI GONDER DIYORUZ O DA BIZE TABI KI O WEBSITESININ FRONT-END YANI CLIENT-KULLANICISININ GORTUNTULEYEBILECEGI YANI TARAYICIDA GORUNTULEYEBILECEGI DOSYALAR OLAN INDEX.HTML, CSS VE JAVASCRIPT DOSYALARINI KULLANICINN BROWSER ARACILIGI ILE GORUNTULYEBILMESINI SAGLIYOR....YANI UZAKTA KAYNAGI BULUNAN BIR WEBSITESINI SENIN UZAK WEB SITESINDEN GORUNTULYEBILMENI SAGLIYOR TARAYIC ARACILIGII ILE....
SONRA WEBSERVER DA BU PROTOKOLUNU BILDIGI ICIN...
Bunu saglayan http protocoludur...ag uzerinden veriyi gonderiyoruz..... 

!Bir webserver a istek gonderilmesi yani bir web sayfasnin acilmasi procoess inin detayli incelnemesi

When a client (typically a web browser) accesses a webpage, it engages in HTTP (Hypertext Transfer Protocol) communication with a server. This process involves several steps to display the webpage to the user. Here's a simplified overview of how it works:

1. User Requests a Webpage:
When you type a URL (like https://www.example.com) into your browser and press Enter, the browser interprets this as a request for a webpage.
The browser first needs to find out the IP address of www.example.com. It does this through a DNS (Domain Name System) lookup. DNS translates the human-readable domain name into an IP address that computers can understand.
2. Browser Sends HTTP Request:
Once the browser knows the IP address of the server hosting www.example.com, it sends an HTTP request to that server. This request typically uses the GET method to ask for the content of the webpage.
The request includes various pieces of information, like the URL, type of browser (user agent), types of content the browser can handle (accept headers), and any cookies related to the domain.
3. Server Processes the Request:
The server receives the HTTP request and processes it. This process can involve running server-side scripts (like PHP, Python, or JavaScript in Node.js), accessing a database, or performing other tasks to generate the requested content.
The server then responds with an HTTP response message. This response includes a status code (like 200 for a successful response, 404 for not found, etc.), server information, content type, and the actual content, which is typically an HTML file.
4. Browser Renders the Webpage:
The browser receives the HTTP response and renders the webpage from the HTML it received.
If the HTML references other resources like CSS files, JavaScript files, images, or videos, the browser makes additional HTTP requests to fetch these resources.
Each resource is requested and fetched in a similar manner, with the browser sending an HTTP GET request and the server responding with the content.
5. Additional Interactions:
As you interact with the webpage (like clicking links, submitting forms, etc.), the browser may make additional HTTP requests to the server. These requests can include POST requests (often used for form submissions), AJAX requests (for dynamic content loading without reloading the whole page), and so on.
Example Scenario:
User Action: A user types https://www.example.com in their browser.
DNS Lookup: The browser performs a DNS query to find the IP address of www.example.com.
HTTP Request: The browser sends an HTTP GET request to the server's IP address.
Server Response: The server processes the request, finds or generates the appropriate HTML content, and sends it back.
Rendering: The browser receives the HTML and starts rendering the webpage. It requests additional resources (CSS, JS, images) as needed.
Display: The user sees the fully loaded webpage on their screen.
The entire process happens quite quickly, allowing users to access and interact with webpages seamlessly. Behind the scenes, a combination of networking, server-side processing, and browser rendering works together to make this possible.


Server Response
Processing the Request:

When the server receives the HTTP request, it needs to determine what content to send back. This involves interpreting the URL and any additional data (like headers or cookies) sent by the client.
If the request is for a dynamic page, server-side scripts (e.g., written in PHP, Python, Java, etc.) might run to generate the HTML. This could involve querying databases, processing data, and dynamically creating the HTML content based on various factors (like user data, time of day, etc.).
Sending the Response:

The server prepares an HTTP response that includes a status code (e.g., 200 OK for success), response headers (like content type, caching policies), and the body, which is usually the HTML content of the requested webpage.
If there are errors (like the requested resource doesn't exist), the server sends an error code (e.g., 404 Not Found) and possibly an error page.
Rendering
HTML Parsing and Rendering:

The browser receives the HTML and begins parsing it. Parsing converts the HTML (which is just text) into a Document Object Model (DOM), a tree-like structure representing all the elements of the page.
As the browser parses the HTML, it also encounters references to external resources like CSS files, JavaScript files, images, and videos.
Fetching Additional Resources:

The browser sends additional HTTP requests to fetch these external resources. Each of these is processed by the server similarly to the initial request.
CSS files dictate the styling of the webpage, while JavaScript files can add interactivity and dynamic content.
Executing Scripts and Applying Styles:

Once CSS is loaded, the browser applies the styles to the DOM. The visual layout of the page begins to take shape.
JavaScript is executed, which can manipulate the DOM, alter styles, or even fetch additional data asynchronously (using AJAX).
Display
Rendering to the Screen:

The browser combines the DOM with the CSS styles to render the page. This process involves calculating the layout of each element, applying styles, and painting the content on the screen.
This step is computationally intensive as it involves calculating layouts, styles, and redrawing the page in the browser window.
Dynamic Updates and User Interaction:

As the user interacts with the page (clicking links, filling forms, etc.), JavaScript can respond to these interactions, making changes to the DOM and updating the page dynamically.
The page can make further HTTP requests (like AJAX calls) to load new content without reloading the entire page.
Final Display:

The user sees the fully loaded and interactive webpage. All the content, styles, and scripts have been combined to present the final product.
The page may continue to update dynamically as the user interacts with it or as new data is loaded.
In summary, during the server response, the server processes the client's request and sends back the necessary data (HTML, errors, etc.). During rendering, the browser interprets this data, fetches additional resources, and builds the page visually. Finally, in the display phase, the fully formed webpage is presented to the user, where it can be interacted with and dynamically updated.

When a web browser requests a webpage, like an index.html file, and receives it as a response from a server, the file is not permanently stored in a specific folder on the client's PC like a downloaded file would be. Instead, it is temporarily stored in a part of the computer's memory allocated to the browser. This process involves the following steps:

Temporary Storage in Memory:

The index.html file is held in the browser's memory (RAM). This is a temporary storage that allows the browser to render and display the webpage. The file exists here only as long as it is needed for display and interaction in the browser.
Browser Cache:

The browser may also store the file in its cache, which is a designated space on your hard drive. Caching helps in faster loading of the webpage when you visit it again.
Cached files are stored according to the browser's caching policies and may be deleted when the cache is cleared, or when the browser decides to free up space.
Rendering and Display:

While in memory, the browser parses and processes the index.html file (along with any associated CSS, JavaScript, images, etc.) to render the webpage for display on your screen.
Not a Permanent File:

Unlike files that you download (like a PDF or an image), which are saved to a specific location on your hard drive, the index.html file in this context is not saved in a user-accessible folder. It is only temporarily used for rendering the webpage and is discarded after the browser tab or window is closed, or the cache is cleared.
Privacy and Security:

This temporary nature of webpage storage is also a part of privacy and security measures. It ensures that web content doesn't permanently occupy space on your computer without your explicit action (like downloading a file) and that it can be easily cleared (by clearing the cache).
In summary, the index.html file sent from the server is stored temporarily in the browser's memory and possibly in its cache. It is used for rendering the webpage you see on your screen and does not exist as a permanent file on your PC in a specific folder.


Parsing HTML
HTML Parsing:
The browser reads (or "parses") the HTML file to understand its structure and content. During this process, it converts the text of the HTML file into a structure it can use - the Document Object Model (DOM).
The DOM represents the hierarchical structure of the webpage, making it possible for the browser to understand which HTML elements are where, and how they are nested or related.
Processing CSS
CSS Interpretation:
Along with HTML, the browser also retrieves and parses CSS (Cascading Style Sheets) linked within the HTML. CSS defines how the HTML elements should be displayed visually.
The browser combines information from the CSS with the DOM to create the Render Tree, which represents both the structure of the webpage and its visual style.
JavaScript Execution
Executing JavaScript:
If the webpage includes JavaScript (linked or embedded in the HTML), the browser executes this JavaScript. This can manipulate the DOM, change styles, or even fetch additional data dynamically.
JavaScript execution is a critical part of modern webpages, allowing for interactive and dynamic content.
Layout Calculation
Layout Calculation:
The browser calculates the layout of each visible element on the webpage. This involves determining the exact size and position of each element based on the DOM and CSS rules.
Rendering
Rendering to the Screen:
Finally, the browser paints the webpage on the screen. This process involves drawing the elements, text, images, etc., in their correct positions as defined by the layout calculations.
Dynamic Updates
Dynamic Updates (if applicable):
After the initial rendering, the webpage can be updated dynamically. JavaScript can modify the DOM and CSS styles, leading the browser to re-calculate layout and re-paint the affected parts of the webpage.
In summary, when a browser renders a webpage, it reads and processes the HTML, CSS, and JavaScript to construct the webpage visually. The process involves parsing the HTML to create a DOM, applying styles from CSS, executing JavaScript, calculating layout, and finally painting the webpage on the screen for the user to interact with.


!SSL- TLS PROTOKOLLERI 
!HTTPS(HTTP SECURE)
SSL onceleri cok kullanilirdi ama artik daha cok TLs protokolu kullanilir
Ag  uzerindeki iletisimin guvenli olmasi protokoller 
Gunumuzde daha cok TLS kullanilir 
Veriler ag da tasinirken veirler sifrlenerek, agdaki gozlemcilerin, gormeisni engellemek, cunku http protokolu kendisi bir sifreleme yapmiyor dogrudan acik bir sekilde, veriyi server a ag araciligi ile gonderiyor ... 
Agdaki hacker veya art niyetli gozlemci ag uzerinden gonderilen data yi gortuntuleyebilir

TLS sayesinde http tafigmizi sifreleyerk https haline getierek, verilerimzi sifreli sekilde network uzerinden server a gonderirirz ve bu sayede, agda bulunan hacker,gozlemci ler bu verileri okuyamazlar.. 
Sifrelen verilerin okunabilmesini saglayan anahtar da yalnizca server da bulundugu icin, sadece server da bu clienttan gondeirlen verilerin okunmasi saglanir

Server da ynitinin yine sifreli sekilde gonderiyor https ile 


!FTP + TLS => FTPS(FTP SECURE)
FTP TLS ILE BIRLITKE KULLANILARAK DOSYA TRANSFERININ SIFRELI BIR SEKILDE GERCEKLESTIRILMESINI SAGLIYOR 

!Your connection is not private hatasi aliyorsak bir siteye baglanirken anlaamliyzi ki o sitenin-server inin tls sertifikasi yok-tls  yani o siteye girereken ki o site tarafindan kullanilan her turlu bilgimiz hacker veya gozlemciler taraifdan calinabilir....ondan dolayi da mumkunse yapmak istedgimz islemi bska bir siteden yapalim o zaman


!SSH PROTOKOLU -  SECURE SELL 

Uzaktaki bilgisyarlara-yani server a  guvenli bir sekilde herhangi bir noktadan direk olarak baglanmamizii sagliyor
Baglantiyi ve veri alisverisini guvenli seklde  yapmamizi sagliyor

SSH + FTP = SFTP(SECURE FTP) guvenli veri transferini sagliyor, dosya ttransferini sagliyor 


DNS-DOMAIN NAME SYSTEM
DNS SUNUCUSU - PROTOKOLU 

CLIENT(153.16.119.211)==>WWW.LINUXDERSLERI.COM(185.199.108.153)

!DNS BIZIM ICIN DOMAIN NAME I WWW.LINUXDERSLERI.COM BUNU , O DOMAIN NAME IN IP ADRESINE DONUSTURUYOR, 185.199.108.153....

!DNS SUNUCUSU ISIM LISTESI SEKLIDNE DOMAIN-NAME KARSISINDA IP ADRESLERINI TUTUYOR...KI 

HTTP ISTEGI GONDERILINCE..DNS SUNCUSUNA GELIR ORDA GONDERILEN ADRES- IN HANGI IP ADRESINE KARSILIK GELDIGI BULUNUR VE SONRA REQUEST ISTEGI O IP ADRESINE DOGRU YOLUNA DEVAM EDER...


DEFAULT OLARAK DNS SUNUCUSU INTERNET SAGLAYCIMZ OLUYOR ZATEN, VE BU BAZEN BAZI SITELERE ERISMIMIZI SINIRLAYABILIYOR BOYLE DURUMLARDA GOOGLE IN SUNDUGU 8.8.8.8 DNS SUNUCUSUNU KULLANABILIRIZ


!DNS SERVERLAR BIZIM INTERNET SERVIS SAGLAYACIMIZ OLUYOR DEFAULT OLARAK VE NEDEN BU DNS SERVER DEGISTIRILMEK ISTENIYOR VE ISTENDIGINDE NASIL DEGISTIRILIYOR? 

Your DNS server is a crucial part of how you access the internet, but it's not necessarily provided by your internet service provider (ISP), although that's often the case by default. Let's break down what a DNS server is and why some people choose to change their DNS server settings:

What is a DNS Server?
DNS (Domain Name System) servers translate human-readable domain names (like www.openai.com) into IP addresses that computers use to communicate (like 192.0.2.1).
ISP DNS Servers: By default, your ISP assigns DNS servers for your internet connection. These servers are responsible for resolving domain names into IP addresses when you access websites.
Role: The DNS server is like an address book for the internet, converting easy-to-remember domain names to the numerical IP addresses needed to locate and connect to devices across the network.
Why Some People Change Their DNS Server to Google's 8.8.8.8:
Speed:

Some users find that Google's DNS servers (8.8.8.8 and 8.8.4.4) or other third-party DNS services like Cloudflare (1.1.1.1) are faster than their ISP's DNS servers. Faster DNS resolution can speed up the time it takes to load web pages.
Reliability:

Google's DNS servers are known for their reliability. If an ISP's DNS servers are unreliable or frequently go down, switching to a more reliable DNS service can improve overall internet stability.
Security:

Some alternative DNS providers offer additional security features, such as protection against phishing attacks, malware, and other online threats.
Privacy Concerns:

ISPs can track your browsing history through their DNS servers. Some users switch to alternative DNS services to reduce this kind of tracking, although it's important to note that alternative DNS providers have their own privacy policies.
Bypassing Censorship or Geoblocks:

In some cases, changing the DNS server can help bypass regional internet restrictions or geoblocks, as the DNS request is routed through different servers that might not enforce the same restrictions.
Content Filtering:

Some DNS services offer content filtering options, which can be useful for blocking unwanted content, such as adult websites in family settings.
Considerations:
Trust: When you switch from your ISP's DNS to another provider like Google, you're shifting your trust from one organization to another. It's important to consider the privacy and data handling policies of the DNS provider you choose.
Configuration: Changing DNS settings can be done on individual devices, routers, or even at the network level. Proper configuration is essential to ensure that the new DNS settings are effective and secure.
In summary, your DNS server could be provided by your ISP, but you have the option to change it. People switch to services like Google's DNS for reasons like speed, reliability, security, privacy, and additional features. The choice of DNS server can have a noticeable impact on your internet experience.


!NASIL DNS SERVER DEGISTIRILEBILIR?

Switching from your ISP's DNS server to another provider, like Google's DNS, involves changing the DNS settings on your device or router. Here's how you can do it:

Switching DNS on a Router
Changing the DNS settings on your router will affect all devices connected to that router.

Access Router Settings:

Open a web browser and enter your router’s IP address in the address bar (common addresses are 192.168.1.1 or 192.168.0.1). You may need to check your router’s manual or label for the specific address.
Login to the Router:

Enter your username and password. If you haven’t changed them, the default credentials might be something like admin for both username and password, or provided in the router’s manual.
Find DNS Settings:

Look for a section named “DNS Settings,” “Network Settings,” or something similar.
Enter DNS Server Addresses:

Replace the existing DNS addresses with Google’s DNS addresses: 8.8.8.8 and 8.8.4.4.
Save and Reboot:

Save your changes and reboot the router if necessary.
Switching DNS on Individual Devices
You can also change the DNS settings on individual devices like computers, smartphones, or tablets.

Windows
Control Panel: Open the Control Panel and go to “Network and Sharing Center.”
Change Adapter Settings: Click on “Change adapter settings.”
Properties: Right-click your network connection and select “Properties.”
Internet Protocol Version 4 (TCP/IPv4): Select it and click “Properties.”
Use the Following DNS Server Addresses: Enter 8.8.8.8 and 8.8.4.4 as your preferred and alternate DNS servers, respectively.
Save: Click “OK” to save your changes.
macOS
System Preferences: Open System Preferences and click on “Network.”
Advanced: Select your network (Wi-Fi or Ethernet) and click “Advanced.”
DNS: Go to the “DNS” tab.
Add DNS Servers: Click the + button and add 8.8.8.8 and 8.8.4.4.
Apply: Click “OK” then “Apply.”
Android
Settings: Go to Settings and select “Wi-Fi.”
Modify Network: Tap and hold on your connected Wi-Fi network, then select “Modify network.”
Advanced Options: Show advanced options and change “IP settings” to “Static.”
DNS: Enter 8.8.8.8 and 8.8.4.4 in the DNS fields.
Save: Save the changes.
iOS
Settings: Open Settings and tap on “Wi-Fi.”
Wi-Fi Network: Tap on the i icon next to your Wi-Fi network.
Configure DNS: Tap on “Configure DNS” and select “Manual.”
Add Server: Tap “Add Server” and enter 8.8.8.8 and 8.8.4.4.
Save: Tap “Save.”
Important Notes
After changing DNS settings, it may be necessary to restart your device or clear the DNS cache for the changes to take effect.
Always make sure you trust the DNS provider you are switching to, as DNS plays a crucial role in your internet security and privacy.
If you encounter connectivity issues after changing DNS settings, you can revert to the original settings or try alternative DNS servers.

!DNS  SUNUCULARI FILTRELEMEK VEYA ENGELLEMEK ISTEDIKLERI IP ADRESLERINI, GECERSIZ IP ADRESI ATAYARAY YAPIYORLAR ORNEGIN WWW.EXAMPLE.COM  DOMAIN NAME ININ KARSINA 127.0.0.1 GIBI LOCAK PC NIN DEFAULT IP ADERSIN OLAN SONUCUNDA HICBIRSEY OLMAYAN IP ADRESLERI ATAMASI YAPIYORLAR...

!DHCP - DYNAMIC HOST CONFIGURATION PROTOCOL

INTERNET UZERINDE VERI ALISVERISI ICIN..

1-IP ADRESI(CIHAZIN AG UZERINE KATILABILMESI ICIN IP OLMASI SART)
2-SUBNET MASK DEGERI(IP ADRESLI CIHAZIN HANGI AGDA OLDUGNU BILINMESI ICN GEREKLI-AYNI AGDAKI CIHAZLAR AYNI SUBNET MASK DEGERINE SAHIP ) 
3-DEFAULT GATEWAY BILGISI(LOKAL AGIMIZ DISINDAKI BIR HOST ILE ILETISIME GECMEK ISTEDIGMZDE KULLANIGIMZ ROUTER-MODEM-GATTEWAY IN IP ADRESI DIR)
4-DNS SERVER IP ADRESI(DOMAIN NAME IN HANGI IP YE KARSILK GELDIGNIN BIZE VERECEK OLAN DNS SERVER HIZMETINI BILEMMIZ GEREKYOR , BU GENELLIKLE INTERNET SERVICE PROVIDER BIZE SAGLIYOR...YA DA DEGISTIRILEBILIR GOOGLE IN SUNDUG DNS:8.8.8.8 ILE )


!DHCP DEDGIMZ YAPI BU 4 BILGIYI OTOMAITK OLARAK ADGAKI TUM CIHAZLARA UYHGUN SEKILDE TANIMLAYAN YAPIDIR

!BIR CIHAZ AGA KATILDIGINDA ILK BASTA HICBIR BILGISI YOKTUR, IP,SUBNETMASK,GATEWAY,DNS AGA KATILDIGINDA DHCP SUNUCUSU NA KESIF MESAJI GONDERIYOR CIHAZ, DHCP SUNUSU DA IP,SUBNET,GATEWAY VE DNS BILGILERINI ATAMA YAPIYOR

!DHCP SUNUCUSU EGER EV VEYA KUCUK OFIS TE ISEK MODEM YA DA ROTUER DIR AKSI DURUMLARDA BUYUK ISLETMELERDE DHCP SUNUCUSU KURULUUYOR AYRI OLARAK

!TEMEL AG KOMUTLARI 
!ping araci
bu arac sayesinde agimizdaki-networkumuzdeki cihazlarin erisilebilrlgini ve tepki surelerini kontrol edebiliriz
ping araci hedefteki cihaza kontrol paketi gonderiyor ve bu kontrol paketinin karsi tarafa ulasip ulasmadgi ve paketin ne kadar surede gidip ne kadar surede geri geldigi gibi bilgileri bize sunmasidir. 
Bu sayede aramizda iletisimi agin kontrolunu gerceklestirebiliyoruz

!ping www.linux.com  seklinde kullaniriz 
Ve  biz CTRL-C ile durduruna kadar kontrol etmeye devam edecektir 

adem@adem:~/utv/test/Linux-works$ ping www.linux.com
PING www.linux.com (23.185.0.3) 56(84) bytes of data.
64 bytes from 23.185.0.3 (23.185.0.3): icmp_seq=1 ttl=58 time=4.90 ms
64 bytes from 23.185.0.3 (23.185.0.3): icmp_seq=2 ttl=58 time=4.78 ms
64 bytes from 23.185.0.3 (23.185.0.3): icmp_seq=3 ttl=58 time=5.31 ms
64 bytes from 23.185.0.3 (23.185.0.3): icmp_seq=4 ttl=58 time=5.20 ms
64 bytes from 23.185.0.3 (23.185.0.3): icmp_seq=5 ttl=58 time=5.37 ms
64 bytes from 23.185.0.3 (23.185.0.3): icmp_seq=6 ttl=58 time=5.11 ms
64 bytes from 23.185.0.3 (23.185.0.3): icmp_seq=7 ttl=58 time=5.40 ms
64 bytes from 23.185.0.3 (23.185.0.3): icmp_seq=8 ttl=58 time=5.07 ms
64 bytes from 23.185.0.3 (23.185.0.3): icmp_seq=9 ttl=58 time=5.21 ms
64 bytes from 23.185.0.3 (23.185.0.3): icmp_seq=10 ttl=58 time=5.37 ms
64 bytes from 23.185.0.3 (23.185.0.3): icmp_seq=11 ttl=58 time=5.37 ms
64 bytes from 23.185.0.3 (23.185.0.3): icmp_seq=12 ttl=58 time=4.93 ms
^C

!https kismini yazmiyoruz ping ile bir server  kontrolu yaparken 
adem@adem:~/utv/test/Linux-works$ ping https://www.udemy.com/
ping: https://www.udemy.com/: Name or service not known

!Onun yerine asagidaki gibi www den .com ile biten yere kadar olan kismi yazarz
adem@adem:~/utv/test/Linux-works$ ping www.udemy.com

adem@adem:~/utv/test/Linux-works$ ping www.linux.com
Bu sekilde biz bir paket gonderiyoruz, ve www.linux.com uzerinden gidiyor ip adresini buluyor once DNS server dan ve ordan sonra da o ip adresine paketi ulastiriyor ve de o paket sayesinde biz server in calisip calismadigini, ne sureyle istege karsilik verdigini vs gorebiliyoruz

!ping www.udemy.com komutunu calisitrinca bize gelen yanitlar sunucunun gonderdigi response lardir!!

64 bytes from 23.185.0.3 (23.185.0.3): icmp_seq=1 ttl=58 time=4.90 ms
Serverdan gelen response dan ne anlamaliyiz:
1-64 byte lik yanitlar gelmis
2-23.185.0.3 ip adresinden gelmis  yanitlar
3-Baglanti kontrolu icin server a gonderdigmz data paketinin server a ulasip ulasmadigi bilgisini veriryor, icmp_seq ile , icmp_seq=1, icmp_seq=2, icmp_seq=3 bunlar sirasini veriyor gelen responslarin...Eger gonderilen request e response gelmese idi, yani server  yanit vermiyor olsa idi bu sira bozulacakti ve icmp_seq= bos gelecekti
ttl(time to live)=56 demek bu paket 56 adet router-yonlendiriciden gecebilir daha fazlasindan gecemez... 
Bu paketin ag uzerinde sonsuza kadar ag uzerinde yonlendirilmesin onlemek icin yapiliyor, eger konfigurasyon ayarlarinda hata yapildi ve ttl-time to live icin yasam suresi icin sinir koyulmadi ise o zaman sonsuza karar router lar arasinda gidip gelebilir  ve agi mesgul edebilir gereksiz yere..bunu onlemek icin yapilir bu
Ve de eger router yonlendirme islemi, yonlendirme konusunda basarili olmayiyorsa, bir noktada durdurmak icin, yapilir...
time:ilgili paketin ne kadar surede servera gidip tekrar bize response dondugugnu gosterir

--- www.linux.com ping statistics ---
21 packets transmitted, 21 received, 0% packet loss, time 20029ms
rtt min/avg/max/mdev = 4.879/5.251/5.537/0.172 ms
Ayrica da 21 packet gonderilmis, 21 paket alinmis...

rtt:run treat time-veri paketlerinin gonderilip geri dondurulme suresidir..
min/avg/max/mdev- minimum/ortalama/maximum/standartsampa degeri

!istek sayisini -c option i ile sinirlandirabiliyoruz 
!ping -c 3 www.linux.com

adem@adem:~/utv/NSS-serviceapp$ ping -c 3 www.linux.com
PING www.linux.com (23.185.0.3) 56(84) bytes of data.
64 bytes from 23.185.0.3 (23.185.0.3): icmp_seq=1 ttl=57 time=5.41 ms
64 bytes from 23.185.0.3 (23.185.0.3): icmp_seq=2 ttl=57 time=5.19 ms
64 bytes from 23.185.0.3 (23.185.0.3): icmp_seq=3 ttl=57 time=5.43 ms

--- www.linux.com ping statistics ---
3 packets transmitted, 3 received, 0% packet loss, time 2003ms
rtt min/avg/max/mdev = 5.188/5.342/5.425/0.109 ms
adem@adem:~/utv/NSS-serviceapp$ 

!ping -6 yazarak ipV6 uzerine calismasini sglayabiliriz Cunku default olarak ipV4 olarak calisiyor 

!ip araci
Ag-network arayuzleri hakkinda bilgi alip gerektiginde yapilandirmak icin kullaniriz

!ip a  veya ip addr: VEYA ip address Sistemimize bagli bulunan network-ag arayuzleri hakkinda bilgi almak icin kullanilir

adem@adem:~/utv/NSS-serviceapp$ ip a
1: lo: <LOOPBACK,UP,LOWER_UP> mtu 65536 qdisc noqueue state UNKNOWN group default qlen 1000
    link/loopback 00:00:00:00:00:00 brd 00:00:00:00:00:00
    inet 127.0.0.1/8 scope host lo
       valid_lft forever preferred_lft forever
    inet6 ::1/128 scope host 
       valid_lft forever preferred_lft forever
2: eno1: <BROADCAST,MULTICAST,UP,LOWER_UP> mtu 1500 qdisc fq_codel state UP group default qlen 1000
    link/ether c8:cb:b8:0c:e7:0c brd ff:ff:ff:ff:ff:ff
    altname enp0s25
    inet 172.29.29.92/24 brd 172.29.29.255 scope global dynamic noprefixroute eno1
       valid_lft 62481sec preferred_lft 62481sec
    inet6 fe80::cacb:b8ff:fe0c:e70c/64 scope link 
       valid_lft forever preferred_lft forever
adem@adem:~/utv/NSS-serviceapp$ 

1:lo(localhost) Mevcut pc mizi temsil eden ip adresi, burdaki lokal adresimiz sayesinde biz uzak server a internet uzerinden baglnmadan uygulamalarimzi test edebilioyruz. Kendimize ozel local sunucu ayaga kaldirarak, testlerimizi yapabiliyoruz

2:eno1:Ethernet adresimzi temsil ediyor kablolu baglantimizi temsil ediyor
Baglanti kablosuz-wifi araciligi ile olsa idi burda wlan0 network interface olacakti!!!
ethernet baglantizm ile ilgili dikkat edecegimz bir nokta da state durumu:  state UP yan i su an aktif demektir, yani bu ag arayuzu kullaniliyor aktif mis 
Eger 1 den fazla kablosuz baglatnimz olsa idi wlan0, wlan1 seklinde ilerleyecekti

!Simdi evdeki local-pc mizde ip address diye yazarsak 

adem@adem-ThinkPad-13-2nd-Gen:~/Linux-works$ ip address
1: lo: <LOOPBACK,UP,LOWER_UP> mtu 65536 qdisc noqueue state UNKNOWN group default qlen 1000
    link/loopback 00:00:00:00:00:00 brd 00:00:00:00:00:00
    inet 127.0.0.1/8 scope host lo
       valid_lft forever preferred_lft forever
    inet6 ::1/128 scope host 
       valid_lft forever preferred_lft forever
2: enp0s31f6: <NO-CARRIER,BROADCAST,MULTICAST,UP> mtu 1500 qdisc fq_codel state DOWN group default qlen 1000
    link/ether a8:1e:84:76:90:7b brd ff:ff:ff:ff:ff:ff
3: wlp3s0: <BROADCAST,MULTICAST,UP,LOWER_UP> mtu 1500 qdisc noqueue state UP group default qlen 1000
    link/ether 00:28:f8:a6:7a:7f brd ff:ff:ff:ff:ff:ff
    inet 192.168.57.191/24 brd 192.168.57.255 scope global dynamic noprefixroute wlp3s0
       valid_lft 3042sec preferred_lft 3042sec
    inet6 2a05:9cc4:7a:57eb:999e:efb4:d7b:1417/64 scope global temporary dynamic 
       valid_lft 3362sec preferred_lft 3362sec
    inet6 2a05:9cc4:7a:57eb:ecc1:aa97:cc6c:b186/64 scope global dynamic mngtmpaddr noprefixroute 
       valid_lft 3362sec preferred_lft 3362sec
    inet6 fe80::ecd5:2d82:9941:b9ef/64 scope link noprefixroute 
       valid_lft forever preferred_lft forever


!PEKI BU AG-NETWORK INTERFACE-ARAYUZLERI UZERINDE NASIL ISLEM GERCEKLESTIREBILIRIZ!!!! 

Ethernet baglantimiz up dan down hale cevirirsek o zaman, biz interneti de kapatmis oluruz ona dikkat edelim
!sudo ip link set enp0s31f6 down
(link set arayuzde bir konfigurasyon yapacagimzi belirtmek icin veriyoruz bunu), sonra ilgili araci beliritp sonra da hangi islemi gerceklestirecegimzi belirtiyoruz
!sudo ip link set enp0s31f6 up(tekrardan ethernet arayuzunu i aktif hale getir diyoruz)

!ip route(router ismlerini ogrenmek icin y apariz)
adem@adem-ThinkPad-13-2nd-Gen:~$ ip route
default via 192.168.57.166 dev wlp3s0 proto dhcp metric 600 
169.254.0.0/16 dev wlp3s0 scope link metric 1000 
192.168.57.0/24 dev wlp3s0 proto kernel scope link src 192.168.57.191 metric 600 
adem@adem-ThinkPad-13-2nd-Gen:~$ 
default via 192.168.57.166 dev wlp3s0 proto dhcp metric 600  =>Varsayilan ag-network gecidinin(getway) bu oldugunu belirtiyor 
!Default dedigi pc mizin interete baglnirken baglandigi modem- in ip sidir. Hatirlarsak, modem-router pc nin internete cikarken router ip sini alarak internete cikiyordu!!! YANI BU ADRES BIZIM MODEM-ROUTER IMIZI TEMSIL EDEN IP ADRESIDIR!!!! 
default via 192.168.57.166 dev wlp3s0 proto dhcp metric 600   wlp3s0 wiress varsayilan router-modem dir.. 
dhcp protokolu belirtilmis protokol olarak, bu ag arayuzu uzernden otomatik olarak ip adresi alabiliyor musum
192.168.57.0/24 ICINDE BULUNDUGMZ NETWORKU BELIRTEN SUBNET TIR...  192.168.57.191 BU MEVCUT CIHAZIN BU AGDAKI IP ADERSIMZI VERIYOR

ip route dedgimz zaman default olarak gelen ip numarasi, bizim ip address, ip a , da bizim UP Olan network-ag i bizimn internete bagli oldugmz agdir
Aktif olan ag-network interface - arayuzu bilgisine bakacak olursk.. ip a dan.. ip route da da gelen default ip adresi ile ayni
 wlp3s0: <BROADCAST,MULTICAST,UP,LOWER_UP> mtu 1500 qdisc noqueue state UP group default qlen 1000
 inet 192.168.57.191/24 brd 192.168.57.255
inet 192.168.57.191/24-SUB NET DEGERI  BU DA BROADCAST-brd 192.168.57.255 YANI 192.168.57.1-192.168.57.254 ARASINDA IP ADERSLERI DAGITILMIS...
BROADCAST ADRESI HERKESE YAYIN YAPMAK ICIN IP UZERINDEN MAC ADERSI SORGULAMAK ICIN KULLANILAN IP ADRESIDIR BU HATIRLAYACAK OLURSAK

!192.168.57.191 burda sunu unutmayalim ki her bir bolum maksimum 256 olabiliyordu cunku 8 bitlik binary yi decimal-10 lu birime cevirnce 8 bitin hepsi 1 olursa o zaman 256 oluyordu ondan dolayi...

!ip araci sadece bilgi almak icin degil ayni zamanda ip ve route gibi konfigurasyonlari duzenlemek icinde kullanlaibliyor

!ip araci ile  yapilan hic bir islem kalici degildir, yani pc yeniden baslatildiginda yapilan deigsiklikler sifirlanacaktir. Ondan dolayi da kalici degisiklikler yapmak istersek bunu ip araci ile  yapamayiz....

!nmtui & nmtui | Network Manager
nmcli(network manager command line) araci sayesinde
Komut satiri uzerinden network ile ilgili cesitli islemleri gerceklestirmemiz mumkun oluyor.
Fakat genellikle nmtui(network manager terminal user interface) araci olarak bilinen arac kullaniliyor
!nmtui(network manager terminal userinterface): Bu arac bize komut satiri uzerinde grafiksel arayuze benzer bir arayuz sunuyor
Bu sayede bu arayuzde klavyemizde,ki yon tuslari ile islemlerimizi gerceklestirebiliyoruz

Edit a connection-> bagli oldgumz network interface bilgisi yer aliyor
Burasi cok kritiktir...Cunku burda biz, herhangi bir ethernet baglantisi veya wifi baglantisi ekleyebilioyoruz...BUNU OZELLIKLE YANLISLIKLA BAZEN  INTERNET BAGLANTISI KOPMUS OLUYOR AYARLAR KALKMIS OLUYOR BOYLE DURUMLARDA....BU ISLEMLER COK ISIMIZE YARAYACAKTIR
BAGLANTILARIMIZDAN ORNEGIN ETHENETI TIKLAYIP UZERINE GIDIP, ACTIVATE YAZAN KISMI DEAKTIF YAPMAK ICIN ETHERNET BAGLANTISI-INTERFACE I UZERINE GIDIP ENTERE BAASARSAK DEAKTIF HALE GELIRKEN, TEKRAR BIR DAHA TIKLRASAK DA BU SEFER DE AKTIF HALE GELECEKTIR
Activate Connection uzerinde active-deactive yapabiliyoruz 
Birde setSystemhostname uzerinden de sistemimizn yani pc nin, hostname ini duzenleyebiliyoruz..yani hostname server hostname i ne ise onu degistirebiliyoruz....BURASI ONEMLI.....AMA HOSTNAME GIBI DEGISIKLIKLER COK HASSADTIR BUNU BILMEDEN SAKIN DEGISTIRMEYELIM... 
!Gunluk hayatta ihtiyac duyulan temel network konfigurasyonlari icin biz nmtui(network manager terminal userinterface) aracini kolaylikla kullanabiliyoruz

!nmtui in yaptigi benzer konfigurasyonlari ayri bir grafik arayuzu acmadan dogrudan komut satiri uzerinde yapmak icin ise nmcli aracini kullaniriz
nmcli --help ile neler yapabilecegimzi gorebiliriz

bURDA GERCEKLESTIRIGIMZ KONFIGURASYONLAR TAM OLARAK, ASAGIDAKI ADRESTE DUZENLENIYOR
sudo cat /etc/NetworkManager/system-connections/Ethernet\ connection \ 1nmconnection

Dikkat edelim , bizim connectionslairmiz internet de hangi router-modem isimlerine baglandi isek onlari burda goruruz
!adem@adem-ThinkPad-13-2nd-Gen:/etc/NetworkManager/system-connections$ ls
AndroidAPE.nmconnection  CL-guest.nmconnection  Nixus.nmconnection

!MUTHIS BIR BILGI RESMEN ROUTE-MODEM ILE ILGILI HER TURLU BILGIYI VERMIS BIZE....
adem@adem-ThinkPad-13-2nd-Gen:/etc/NetworkManager/system-connections$ sudo cat AndroidAPE.nmconnection 
[sudo] password for adem: 
[connection]
id=AndroidAPE
uuid=c5db790f-311a-40d4-a747-58493503fd82
type=wifi
interface-name=wlp3s0

[wifi]
mode=infrastructure
ssid=AndroidAPE

[wifi-security]
auth-alg=open
key-mgmt=wpa-psk
psk=Adem12345678

[ipv4]
method=auto

[ipv6]
addr-gen-mode=stable-privacy
method=auto

[proxy]
adem@adem-ThinkPad-13-2nd-Gen:/etc/NetworkManager/system-connections$ 

!Bizim burda nmcli araci ile  wifi baglantisi ile, gerceklestirdgimz degisiklikler, bu adresteki dosya da degisiklik gerceklestiriyor adem@adem-ThinkPad-13-2nd-Gen:/etc/NetworkManager/system-connections$ sudo cat AndroidAPE.nmconnection  ve de bu dgeisiklikler gerceklstirilen kalici oluyor ve sistem baslangicinda, bu degisiklikler gecerli olmaya devam ediyor, ip aracindaki gibi yeniden baslatilince degisiklikler gecerliligin i yitirmiyor...  
Demekki kalici bir degisiklik yapacagimz zaman nmcli araci ile yapariz ki degisiklilkerimiz kalici olarak gerceklestirilmis olsun...

MEVCUT NETWORK ARA YUZUNU YANI INTERNET BAGLANTISINI GERCEKLESTIRIDMGZ WIFI, ETHERNET... INTERFACE LARINI ISTEDGIMZ GIBI DUZENLEYEIBLRIZ, YENI BIR CIHAZ BAGLADI ISEK BUNUN BAGLNTISINI GERCEKLESTIREBILIRIZ, KONFIGUURASYONLARI YAPABILIRZ VE SITEMIMIZIN HOSTNAME BILGINI DUZENLEYEBILIRIZ... 
HOSTNAME BILGISI ISE BIZIM KOMUT SATIRIMZDA DEFAULT OLARAK GELEN KISIMDIR ASLINDA
Hostname:adem@adem-ThinkPad-13-2nd-Gen:~$ 

!ssh-Secure Shell protokolu 
Bu protokol sayesinde uzaktaki server lara guvenli bir sekilde baglanti kurup yonetmemiz, ve baglnti gerceklestirmemiz mumkun oluyor  

Ssh aradaki iletisimi sifreleyen guvenli hale getiren bir protokoldur

ARA BIR BILGI GIRIYHORUZ BURAYA
!DIZIN ALTINDA GREP ARACI ILE ARAMA YAPMAK ICIN
  grep -r "bashrc" /etc/  2>/dev/null
    "bashr" yi git /etc/ dizini altinda ara(mutlaka -r kullanmaliyiiz dizin altinda arama  yapabilmek icin )
    Ama hatali olan sonuclari listeden cikar diyrouz 2 > dev/null(hatali sonuc-permission denied olanlari)
    
    grep -r(-r secenegini belirtmeden dizin altinda arama yapmaya calisirsak asagidaki sonuc elde edilir..)
    adem@adem:~$ grep  "bashrc" /etc/
    grep: /etc/: Is a directory
    adem@adem:~$ 

ssh in iki farkli sekilde kullanilmasi soz konusudur 
1-ssh client- local den uzak server la baglanti kurmak icin 
2-ssh server - uzak server veya uzak pc lerden bizim pc mize baglanti kurmak icin(bizde bu yok ondan dolayi da systemctl status ssh.service yazinca bulunamadi geliyor)
Biz su anda sadece kendi server imiza baglandigmz icin de ssh server a  ihtiyacimz yok , cunku bizde zaten ssh client mevcut

If you are already able to connect to other servers using SSH from your machine, it means you have the SSH client installed and working correctly. The confusion here seems to be between the SSH client and the SSH server, and their respective roles:

SSH Client (Already Working for You)
Your Current Situation: You have the SSH client installed on your machine (OpenSSH_8.9p1 as indicated by the ssh -V output). This client allows you to initiate SSH connections to other machines that are running an SSH server.
Usage Example: When you run a command like ssh user@remote-server.com, you are using the SSH client on your machine to connect to a remote server.
SSH Server (Not Currently Installed)
Error Message: The "Unit ssh.service could not be found" error indicates that the SSH server is not installed on your machine.
Function of SSH Server: An SSH server is used to accept incoming SSH connections. If you want other machines to be able to connect to your machine via SSH, you would need the SSH server installed and running.
Installation: Running sudo apt-get install openssh-server installs the SSH server, which is not necessary if you only need to SSH out to other machines.
Do You Need to Install openssh-server?
If You Only Connect Outward: If you're only using your machine to connect to other servers and do not need to accept incoming SSH connections on your machine, you do not need to install the SSH server (openssh-server).
If You Want to Accept Connections: If you want your machine to be accessible to others via SSH (for example, if it's a server that others need to access remotely), then you should install openssh-server.
Summary
Your Current Capability: You can connect to other servers using SSH (outgoing connections).
No Need for openssh-server: If you don’t need to accept incoming SSH connections on your machine, there's no need to install openssh-server.
Install openssh-server Only If Needed: Only if you want your machine to accept incoming SSH connections should you consider installing the SSH server.

!Windows makinemizden linux makinemize baglanmak istersek eger!
1-One baglanacagimzin pc nin ip adresi kullanici adi ve passwordunu bilmemiz gerekir 
ip addr-ip a - ip address yazarak ip adre sini ogreneb iliriz 
ifconfig

adem@adem:~$ ip a
1: lo: <LOOPBACK,UP,LOWER_UP> mtu 65536 qdisc noqueue state UNKNOWN group default qlen 1000
    link/loopback 00:00:00:00:00:00 brd 00:00:00:00:00:00
    inet 127.0.0.1/8 scope host lo
       valid_lft forever preferred_lft forever
    inet6 ::1/128 scope host 
       valid_lft forever preferred_lft forever
2: eno1: <BROADCAST,MULTICAST,UP,LOWER_UP> mtu 1500 qdisc fq_codel state UP group default qlen 1000
    link/ether c8:cb:b8:0c:e7:0c brd ff:ff:ff:ff:ff:ff
    altname enp0s25
    inet 172.29.29.92/24 brd 172.29.29.255

   Burdan anliyoruz ki linux makinemiziin ip adresi :  172.29.29.92 

   Biz herhangi bir telfonfdan da uzaktaki bir server-pc ye baglanabiliriz 
   Uzak baglantilar icin ozellikle dikkat etmemiz gereken nokta, public ip adersinini kullanmlaiyiz, ip adresinin uzaktan erisilebilen bir ip adresi olmasi gerekir..
   Yoksa uzaktan baglnamk mumkun olmayacaktir...
!scp araci!
secure copy protocol 
Dosyalari guvenli bir sekilde uzak server dan kopyalamak, indirmek veya oraya dosya gondermek icin kullaniriz 
Once IP ADRESINI BULURUZ ip addr- ip a 
Sonra ssh servisinin aktif olmasi gerekir onu kontrol edelim 

systemctl status ssh.service

!adem@adem:~$ scp ~/text/my-text.txt username@example.no: .
home altinda text klasoru altindaki my-text.txt dosyasini git httest2 serverinin nss kullanicisina login olarak ordaki login olunca girilen home directory sune kopyala diyoruz : . yazarak...
!adem@adem:~$ scp ~/text/my-text.txt username@example.no: ~/logs/
git server daki logs klarosu altina kopyala diyrouz burda da ...

!adem@adem:~$ scp ~/text/my-text.txt nss@example.no:/home/pc/Desktop/mytest.txt 
Eger dosya ismini istedigmz gibi girersek dosya ismin degistirerek gonderecektir...
windows bilgisyara gonderdigmz i dusunursek de 

!scp (gonderilecek dosya konumu ) username@serveripaddress:(serverdadosyanin nereyegelecegi )

!UZAK SERVERDAN LOKAL IMIZE DE DOSYA GONDEREBILIRZ TABI KI
scp  username@example.no:/logs/mytext.txt /home/adem/test/

httest2 adresimde logs klarosu altindaki mytext.txt dosyasini al, mevcut lokal pc mde  onu /home/adem/test/ klasoru altina kopyala, veya indir demis oluyoruz!!

!SCP ILE IKI LOKAL PC MIZI DIREK BIRBIRNE BAGLAYAMASAK BILE EGER HER IKI LOKALINDE BAGLANABILDIGI BIR SERVER VAR ISE O ZAMAN ORNEGIN MAC PC MIZDEN SERVER A ISTEDGIMZ DOSYALARI GONDERIP ONU LINUX PC MIZDEN AYNI SERVER DAN LINUX PC MIZE INDIREREK PC LER ARASINDA DOSYA ALISVERISINI DE BU SEKILDE HIZLICA YAPABILRIZ 

LOKALIMZDEN DOSYA GONDERMEK ICN
!scp *.png username@example.no:. 
BIZIM LOKAL PC MIZDE O ANDA UZERINDE BULUNDGUMZ DIRECTORY DEKI TUM PNG DOSYALARINI AL example.no SERVER ININ USERNAME INDE GIRIS YAPARAK DIREK HOME DIRECTORYSUNE(:.) YERLESTIR BU DOSYAYI 

!scp * username@example.no:.(O AN UZERINDE BULUNDGUMZU DIRECTORY DEKI TUM DOSYALARI DEMIS OLURZ) 

SERVERDAN LOKALIMIZE DOSYA INDIRIRKEN 

!scp username@example.no:/home/username/*.png /home/adem/
uzak serverdaki username kullanici directory si altindaki tum png uzantili dosyalari al, lokal pc mizde adem kullanicimizin home klasoru altina at... demis oluyoruz

!wget araci
url uzerinden dosya indirmeyi mumkun kilan harika bir aractir!!!!
Ozellikle server da ornegin geoserver vs kurarken bizim bazi indirmeler yapmamiz gerekiyor, ki server da biz im herhangi bir grafiksel arayuzumuz olmadigi icin , browser acip da indirelim deme gibi bir sansimiz yok ondan dolayi da tabi ki biz wget araci uzerinden yapariz o tarz islemlerimizi ki cok kritik oneme sahiptir

Biz url su sekilde buluruz, browser da tikladgimizda indirmeyi saglayan button hangisi ise o buttona saga tiklayip o buton tiklaninca ki, link-url i kopyalariz ve gelip wget in devamina yazarak ayni islemi server uzerinde de yapabilmeyi saglariz

!Yani bizim browser uzernden linux ubuntuya herhangi yeni bir program yuklelerken once o programin indirme dosyalari indirliyordu, iste bu tarz islemlerin hepsini dosya indirme islemlerinin hepsini bu wget araci yapabiliyor....BU COOOK ONEMLIDIR...

!wget https://......  yapnca biz hangi dizin altinda isek oraya indirecektir dosyalari ama eger spesifik bir dizine indirmesini istersek o zaman -O(output) option i kullanarak yapariz bu islemi 
Burda -O kullaninca biz indirilecek icerigi getir benim kendi dosyamin icine kaydet diyoruz -O ILE SADECE DIZIN DE BELIRTEBILIRZ TEK URL INDIRIRKEN......Ama TOPLU INDIRMELERDE BIRDEN FAZLA URL I DOSYA ICINDEN OKURKEN getir benim belirttigm dizin altina  indir dosyalari dersek o zaman da P secenegini kullanacagiz..
!wget https://........ -P ~/Documents 

!wget https://........  -O ~/Documents/  
!wget https://........  -O ~/Documents/myfile   

wget --help ile hangi durumlarda kullanacagmiza bakabiliriz 
!Toplu sekilde ilgili dosyalari indirebilmemize imkan sagliyor 
Bunu su sekilde yapiyoruz , bir dosya acip icerisine tum url leri alt alta yapistiririz ve ornegin indir.txt dosy asi icinde indirme yapilacak url ler var... 
!wget -i(input) ~/indir.txt
wget araci dosya icindeki linkleri tek tek taraycak ve hepsi ile ilgili indirmeyi toplu sekilde yapacaktir. Ama yine konum belirtmedigmz icin o an uzeirnde bulundgumz mevcut dizine indiriyor dosyalari 

Hedef dizini toplu sekilde dizin adresini P sayesinde, belirtilen dizin adreisne indirebiliriz
!wget -i(input) ~/indir.txt -P /Documents 


!DNS HAKKINDA 
Domain name -DNS sorgusu gerceklestirmek icin, bizim mevcut agimizdaki modem-rooter cihazimiza ip adresine sorgu gonderiiliyor 
Name server lari sorgulamak icin nslookup araci kullaniliyor
!nslookup www.google.com (Dns sunucusune bu adresin ip adresi nedir diye soruyoruz)

adem@adem-ThinkPad-13-2nd-Gen:~$ nslookup www.google.com
Server:		127.0.0.53(Bu sorgunun hangi DNS sunucus uzerinde gerceklestirildigi cevabidir, bu bizim router-modem imize soruldugundan dolayi modem-rotuer in ip adresi dir bu)
Address:	127.0.0.53#53(Dns sorgularini sunucular 53 numarali port uzerinden kabul ederler)

Non-authoritative answer: Bu bizim verdigmz domainname e karsilik gelen, ip adresi ile ilgili cevap
Name:	www.google.com
Address: 142.250.74.132
Name:	www.google.com
Address: 2a00:1450:400f:804::2004

adem@adem-ThinkPad-13-2nd-Gen:~$ 

Biz modem-router imizi dns sunucus olarak kullanmak zorunda degiliz 
!DNS sunucusu aslinda /etc/resolv.conf dosyasi tarafindan gerceklesiyor

nameserver 127.0.0.53
options edns0 trust-ad
search .
adem@adem-ThinkPad-13-2nd-Gen:~$ 
Burdaki adres, bizim DNS adresimizdir, bu adrese alan adlari sorularak o alan adinin ip adresine erisilebiliyor 

! nslookup ve ping i kullanarak biz, domain ismini verddimgz server in ip adresine erisebiliyoruz 

!Biz eger ki  /etc/resolv.conf dosyasi icindeki DNS adresinden degisiklk yapacak olursak, bu default olarak bizim modem-router imzdir, o zaman degisklik yapip router imiz yerne baska ip adresi girdikten sonra, sudo systemctl restart systemd-resolved.service diyerek bu service yi yenilemezsek yaptgimz degisiiklik uygulanmayacaktir!!!!!! Ama bu dosya uzerindeki degisklik pc yeniden baslatilinca gecerli olmayacaktir ondan dolayi... biz eger kalici degisklk yapmak istersek dns suncusu ile ilgili o zaman nmtui(network manager terminal user interface) uzerinden yapabiliriz

!nmtui(network manager user interface)

!HOSTNAME 
Ag uzerinde ip alabilen cihazlara host diyoruz 
hostname de localagimzdaki cihazlarimizin ip adresini hatirlamadan hostname ler ile ayirt etmemizi sagliyor 

hostnamectl ile kullandgimz hostname bilgisini alabilirz

adem@adem-ThinkPad-13-2nd-Gen:~$ hostnamectl
 Static hostname: adem-ThinkPad-13-2nd-Gen
       Icon name: computer-laptop
         Chassis: laptop
      Machine ID: ff5025c833274718ba01a35ef3aff0a0
         Boot ID: 6a2f1c63886d4abea64bd080827288cf
Operating System: Ubuntu 22.04.3 LTS              
          Kernel: Linux 6.2.0-39-generic
    Architecture: x86-64
 Hardware Vendor: Lenovo
adem@adem-ThinkPad-13-2nd-Gen:~$ 

hostname i degistirmek istersek eger: 
!sudo hostnamectl hostname mynewhostname    diyerek hostname i degistirebiliyoruz
hostname ismin i bu sekilde degistirdik ama birde /etc/hosts dosyasi altinda da degisiklikleri eklememiz gerekiyor. Cunku bu /etc/hosts dosyasi local olarak adres cozumlemesi saglayan konfigurasyon dosyasidir.

adem@adem-ThinkPad-13-2nd-Gen:~$ cat /etc/hosts
127.0.0.1	localhost
127.0.1.1	adem-ThinkPad-13-2nd-Gen

# The following lines are desirable for IPv6 capable hosts
::1     ip6-localhost ip6-loopback
fe00::0 ip6-localnet
ff00::0 ip6-mcastprefix
ff02::1 ip6-allnodes
ff02::2 ip6-allrouters
adem@adem-ThinkPad-13-2nd-Gen:~$ 

Bu /etc/hosts dosyasinda keni pc mizi temsil eden 127.0.1.1 ip adresi hostname adresimiz ile eslestirilmis oluyor bu sayede hostname uzerinden dogrudan ip adresi de temsil edilmis oluyor. 
Bu hostname bilgisi de pek cok arac tarafindan kullaniliyor ondan dolayi da hostname degisiyorsa bunu hosts aracinda da uygulamamiz gerekiyor

!BU COOOK KRITIK BIR NOKTADIR....UNUTMAYALIM..HOSTNAME DE BIR DEGISIKLIK OLMUS ISE BUNU GIDIP /ETC/HOSTS DOSYASINDA DA UYGULAMALIYIZ
!HATTA SOYLE SOYLEYELIM, EGER HOSTNAME I DEGISTIRMEYI DUSUNUYORSAK ILK ONCE BUNU /ETC/HOSTS ICERISINDE YAPACAGIZ ONDAN SONRA, GIDIP HOSTNAME I DEGSTIRECEGIZ BU SEKILDE... sudo hostnamectl hostname mynewhostname 

!BAZEN SUDO ARACINI DA KULLANAMAYABILIYORUZ(sudo: unable to resolve host .... TEmporary failure in name resolution-- sudo: error initializing audit plugijn sudoers_audit)....BOYLE DURUMLARDA PROBLEM I COZMEK ICIN YAPACAGIMZ ISLEM SUDUR
ROOT KULLANICISINA GECIS YAPMAK 
SU ROOT ILE.... duzenleyemedigmz /home/adem/etc/host dosyasini duzenleyebiliriz

!DOMAINNAME 
Ag-Network uzerinde birden fazla sunucu var ise bunu hostname ile birbirinden ayiriyoruz, hostname bilgisine ek olarak bu sunucularin ayni agda oldugunu belirtmek icin domain name de kullanabiliriz
Ornegin: 
web - web.linuxdersleri.net - 10.16.11.5/24
mail - mail.linuxdersleri.net - 10.16.11.7/24 

Dolayisi ile bu sayde hangi sunucunun hangi amacla kullanildigini kolaylikla buluruz ve bunlarin da ip adreslerini hatirlamamiza gerek kalmadan, cozumlmis oluruz
Burda hem domainame hem de hostname i birlikte tanimlamaya yarayan bu yapiya FQDN(FULL QUALIFIED DOMAIN NAME)deniyor ve aralarinda nokta ile ayriliyor,  hostname.domainname 


sudo nano /etc/hosts 

adem@adem-ThinkPad-13-2nd-Gen:~$ cat /etc/hosts
127.0.0.1	localhost
127.0.1.1	adem-ThinkPad-13-2nd-Gen.mylocaldomain.net(hostname.domainname) seklinde duzenledikten sonra hostname bilginsi de degsitrirecek olursak 
!hostnamectl hostname adem-ThinkPad-13-2nd-Gen.mylocaldomain.net
seklinde degistirecek olursak eger
!hostnamectl(ile kontrol ederiz)

!dnsdomainname(diye arama yaparak da bizim etc/hosts icinde ekledgimz ve hostnamectl ile de alabildigmz domainname i alabiliriz)

!BU MANTIK EGER, LOKAL AGIMIZDA-NETWORKUMUZDE BIRDEN FAZLA SUNUCU VAR ISE HER BIRISINE FARKLI HOSTNAMELER LER VERECEK SEKLILDE BU IP ADRESLERINI N DE BIRBRIDINEN AYRILMASINI VE DE DAHA ANLASILIR OLMASINI ASGLAYABILIRIZ 

192.168.5.55 --> my-device.linux-dersleri.net 
192.168.5.15 --> mail.linux-dersleri.net
192.168.5.16 --> web.linux-dersleri.net

BU ISLEMI YAPABILMEMIZ ICIN LOCALAGDAKI CIHAZLARIN AYNI DNS I KULLANIYOR OLMASI VE DNS IN DE O HOSTNAME VE IP ADRESILERNI  TANIYHOR LMASI GEREKIR, BUNUN ICINDE ROUTER DA BIR KONFIGURASYON YAPMAK GEREKIR YA DA DNS ICIN FARKLI BIR SUNUCU BILE KURULABILIR 
NORMALDE DNS HIZMETINI ROUTER-MODEM CIHAZIMIZ SAGLIYOR, DEFUALT OLARAK..KI ROTUER UZERINDEN KONFIUGRASYON DA  YAPILABILIR

! /etc/hosts
hosts dosyamiz sistemimizdeki local dns gorevini ustlenen konfigurasyon dosyasidir
adem@adem-ThinkPad-13-2nd-Gen:~$ cat /etc/hosts
127.0.0.1	localhost
127.0.1.1	adem-ThinkPad-13-2nd-Gen

Ornegin biz bir hosta gitmek istedgimz zaman ornegin adem-ThinkPad-13-2nd-Gen hostuna gitmek istedigi zaman, sistemimiz oncleikli olarak etc/hosts dosyasini kontrol ediyor, eger bu dosya icerisinde bu adem-ThinkPad-13-2nd-Gen hostu ile ilgli bilgi var ise dogurdan bu host a karsilik gelen ip adresine yonlendirme yapiyor.. Bu sayede harici olarak bir DNS sunucusuna sorulmadan once sistemimizde kayitli ise bu host ilgili adrese yonlendirm islemini zaten gerceklestiriyor

em-ThinkPad-13-2nd-Gen:/etc/apache2$ sudo nano /etc/hosts
127.0.0.1       localhost
127.0.1.1       adem-ThinkPad-13-2nd-Gen
127.0.1.2       ademtest

diyerek ag-networkumuz verebilecegi ip adreslerinden birine ademtest isminde bir host atamasi yaparsak o zaman, local pc miz de biz ping ile hostname i aradigmz da bize o hostname karsilik yazdigmz ip adresini verecektir

!ping veya nslookup ile hostname imizin ip adresini gormek istersek asagidaki gibi gorecegimz uzere ademtest e karsilik olarak bizim /etc/hosts dosyasindaki gibi 127.0.1.2 gelecektir

adem@adem-ThinkPad-13-2nd-Gen:~$ ping -c 3 ademtest
PING ademtest (127.0.1.2) 56(84) bytes of data.
64 bytes from ademtest (127.0.1.2): icmp_seq=1 ttl=64 time=0.069 ms
64 bytes from ademtest (127.0.1.2): icmp_seq=2 ttl=64 time=0.069 ms
64 bytes from ademtest (127.0.1.2): icmp_seq=3 ttl=64 time=0.074 ms

--- ademtest ping statistics ---
3 packets transmitted, 3 received, 0% packet loss, time 2053ms
rtt min/avg/max/mdev = 0.069/0.070/0.074/0.002 ms
adem@adem-ThinkPad-13-2nd-Gen:~$ 

adem@adem-ThinkPad-13-2nd-Gen:~$ nslookup ademtest
Server:		127.0.0.53
Address:	127.0.0.53#53

Name:	ademtest
Address: 127.0.1.2

!Eger biz herhangi bir domainname i engellemek istersek, ornegin kullanicilar benim pc den google.com a gidemesin dersek, o zaman biz karsiliginda bizim pc miz e yonlendirecek, localhost un ip sini o domainname e atayarak , bazi websitelerini yasaklayabiliriz
Ornegin: 

sudo nano /etc/hosts 
127.0.0.1       localhost
127.0.1.1       adem-ThinkPad-13-2nd-Gen
127.0.1.2       ademtest
127.0.1.1       www.google.com

ping www.google.com dersek bu ne yapiyor once /etc/hosts  a bakar ve burda eger ki aradgigi domain i bulursa burda, ki ip adresine gider  yok bulamazsa o zaman ne yapar gider DNS protokolune sorarak, www.google.com un ip adresini alip , o ip adrsine istek gonderir

! /etc/hosts dosyamiz bir nevi lokal-dns gorevi goruyor isletim sistemimiz DNS  e gitmeden once buraya gelir burda eger aranan host var ise o zaman o hosta karsilik gelen ip adresini kullanir, eger burda o hostu bulamaz ise o zaman DNS SUNCUUSNA GIDIP ORDA ARAR IP ADRESINI

!DHCP 
DHCP agdaki tum cihzlara ip, subnet, getway ve dns bilgilerini otomatik olaran sunuyor
Bu sayede biz, client- yani host lara ip ve diger bilgileri tanimlamala ugrasmiyoruz 
Ama her zaman bu tanimlamalari otomatk yapilmasini istemeyebiliriz ve bazen ip adresleri sabitlemek isteyebiliriz, bazi suncularimizin surekli ip adresinin degismesi bizim isimize gelmeyebilir. DHCP  ip adrslerini otomatik atadigi icin, her seferinde uniq farkli bir ip adresi atayabilir...Biz de 
!ip r - ip route ile sistemimizdeki route-gateway tanimlammasini gorebiliriz


adem@adem:~/utv/NSS-hyttetjenester$ ip r
default via 172.29.29.1 dev eno1 proto dhcp metric 100 
169.254.0.0/16 dev eno1 scope link metric 1000 
172.29.29.0/24 dev eno1 proto kernel scope link src 172.29.29.92 metric 100 
adem@adem:~/utv/NSS-hyttetjenester$ ip route
default via 172.29.29.1 dev eno1 proto dhcp metric 100 
169.254.0.0/16 dev eno1 scope link metric 1000 
172.29.29.0/24 dev eno1 proto kernel scope link src 172.29.29.92 metric 100 
adem@adem:~/utv/NSS-hyttetjenester$ 

!ip a - ip addr - ip address - ifconfig -  ip r - ip route BIZ IP ADRESIMZI NASIL OGRENIYORUZ

User
adem@adem:~/utv/NSS-hyttetjenester$ ip a
1: lo: <LOOPBACK,UP,LOWER_UP> mtu 65536 qdisc noqueue state UNKNOWN group default qlen 1000
    link/loopback 00:00:00:00:00:00 brd 00:00:00:00:00:00
    inet 127.0.0.1/8 scope host lo
       valid_lft forever preferred_lft forever
    inet6 ::1/128 scope host 
       valid_lft forever preferred_lft forever
2: eno1: <BROADCAST,MULTICAST,UP,LOWER_UP> mtu 1500 qdisc fq_codel state UP group default qlen 1000
    link/ether c8:cb:b8:0c:e7:0c brd ff:ff:ff:ff:ff:ff
    altname enp0s25
    inet 172.29.29.92/24 brd 172.29.29.255 scope global dynamic noprefixroute eno1
       valid_lft 47367sec preferred_lft 47367sec
    inet6 fe80::cacb:b8ff:fe0c:e70c/64 scope link 
       valid_lft forever preferred_lft forever
adem@adem:~/utv/NSS-hyttetjenester$ 
which one is my pc 's ip address.....and when i run this command also adem@adem:~/utv/NSS-hyttetjenester$ ip route
default via 172.29.29.1 dev eno1 proto dhcp metric 100 
169.254.0.0/16 dev eno1 scope link metric 1000 
172.29.29.0/24 dev eno1 proto kernel scope link src 172.29.29.92 metric 100 
how can I know which one is right when i need to learn my pc 's ip address

adem@adem:~/utv/NSS-hyttetjenester$ ifconfig
eno1: flags=4163<UP,BROADCAST,RUNNING,MULTICAST>  mtu 1500
        inet 172.29.29.92  netmask 255.255.255.0  broadcast 172.29.29.255
        inet6 fe80::cacb:b8ff:fe0c:e70c  prefixlen 64  scopeid 0x20<link>
        ether c8:cb:b8:0c:e7:0c  txqueuelen 1000  (Ethernet)
        RX packets 17044228  bytes 20539939764 (20.5 GB)
        RX errors 0  dropped 3287  overruns 0  frame 0
        TX packets 8282584  bytes 1642579047 (1.6 GB)
        TX errors 0  dropped 0 overruns 0  carrier 0  collisions 0
        device interrupt 20  memory 0xf7d00000-f7d20000  

lo: flags=73<UP,LOOPBACK,RUNNING>  mtu 65536
        inet 127.0.0.1  netmask 255.0.0.0
        inet6 ::1  prefixlen 128  scopeid 0x10<host>
        loop  txqueuelen 1000  (Local Loopback)
        RX packets 23363214  bytes 23293075456 (23.2 GB)
        RX errors 0  dropped 0  overruns 0  frame 0
        TX packets 23363214  bytes 23293075456 (23.2 GB)
        TX errors 0  dropped 0 overruns 0  carrier 0  collisions 0

adem@adem:~/utv/NSS-hyttetjenester$ 

ChatGPT
Based on the output of the ip a and ip route commands you ran on your Linux machine, here's how you can identify your PC's IP address:

IP Address (ip a Command):
In the output of ip a, the IP address of your machine on the network is listed under the eno1 interface (which is typically an Ethernet connection).
The line inet 172.29.29.92/24 brd 172.29.29.255 scope global dynamic noprefixroute eno1 shows your IP address:
IP Address: 172.29.29.92
This is the address that your machine is using on your local network.
Loopback Address:
The lo interface is the loopback interface, with the IP address 127.0.0.1. This is a special address used by the system to communicate with itself and is not used for external communication.
Default Gateway (ip route Command):
The output of ip route shows the default gateway and routing information.
The line default via 172.29.29.1 dev eno1 proto dhcp metric 100 indicates that your default gateway (typically your router's IP address on the local network) is 172.29.29.1.
This is the address through which your computer accesses the internet and communicates with devices outside your local network.
Conclusion:
Your PC's IP address on the network is 172.29.29.92.
The loopback address (127.0.0.1) is for internal system communication.
Your network's gateway address is 172.29.29.1.
When you need to know your PC's IP address for networking purposes, such as setting up an SSH connection from another machine, you'll use 172.29.29.92. This is the address that other devices on your local network will use to communicate with your machine.

!DIKKAT
172.29.29.1. Bu internet olmadigi zaman, ki lokal aglar arasinda kullanilan ip adresidir... private ip adresi
172.29.29.92: Bu ise cihazimz internete ciktigi zaman gateway, yani route-modem in ip adresini kullanarak internete public ip adresi ile cikiyordu

!127.0.0.1 - 172.29.29.92 - 172.29.29.1 can you explain me what are theier differences

ChatGPT
Certainly! Let's break down the differences between these three IP addresses: 127.0.0.1, 172.29.29.92, and 172.29.29.1.

1. 127.0.0.1 - The Loopback Address
Type: Loopback (localhost) address.
Purpose: Used for internal testing on the local machine. When you access this address, you're communicating with the local host (your own computer) itself.
Common Use: Testing network services on your own machine. For example, if you're running a web server on your computer, accessing http://127.0.0.1 will connect to that server. It's a way to specify "this computer" or the local system in network software.
Accessibility: It is not accessible from outside your computer. This address is only used for communication within your own system.
2. 172.29.29.92 - Your Computer's Local Network IP
Type: Private network IP address.
Purpose: This is the IP address assigned to your computer on your local network (LAN). It's used for communication over your local network.
Common Use: If other devices on your local network (like other computers, printers, or servers) want to communicate with your computer, they would use this IP address.
Accessibility: It's only reachable within your local network and is not directly accessible from the internet.
3. 172.29.29.1 - Your Gateway (Router) IP
Type: Gateway or router IP address on your local network.
Purpose: This is the IP address of your network's gateway, typically your router. It's used by devices on your local network to send data to the internet.
Common Use: When your computer wants to send data to the internet, it sends the data to this IP address. The router then forwards the data to the internet.
Accessibility: Like your computer's local IP, it's accessible only within your local network and is the local address for your router.
Summary
127.0.0.1: Loopback address, referring to the local machine itself. Used for internal communications and testing on the same computer.
172.29.29.92: Your specific computer’s IP address on the local network. Used for communication with other devices within the same local network.
172.29.29.1: The gateway/router address in your local network. It's the address through which your computer communicates with the internet.
These IP addresses represent different layers and types of network communication, from internal and local to broader network interactions.

!ip route- ip r
adem@adem:~/utv/NSS-hyttetjenester$ ip route
default via 172.29.29.1 dev eno1 proto dhcp metric 100 
169.254.0.0/16 dev eno1 scope link metric 1000 
172.29.29.0/24 dev eno1 proto kernel scope link src 172.29.29.92 metric 100 
default olarak 172.29.29.1 bunu gateway olara kullandigi soy leniyor
Demekki, bizim kullandigmz ethernet arayuzu, aga baglnti saglayan ag karti, dhcp tarafindan tanimlanan ip adresidir otomatik olarak, 

Ama ip adresimzin, bizim gateway olarak kullandigmiz router-ethernet imizin ip adresinin sabit kalmasini istersek 
!nmtui ile ara y uzumuzu acariz
Edit connection - enter 
Ethernet connection 1 -  enter 
IPV4 configuration da automatik yerine manuel i seceriz  ve
IP ADDRESSES:  192.168.1.15/24 
Gateway : 192.168.1.1(bu default idi ben bunun sabit olmasini istiyorum)
Bunu yaptiktan sonra bir kez daha ip route komutunu calistirirsak eger artik dhcp  yerine static yazacak
!ip route- ip r
adem@adem:~/utv/NSS-hyttetjenester$ ip route
default via 172.29.29.1 dev eno1 proto static metric 100 
169.254.0.0/16 dev eno1 scope link metric 1000 
172.29.29.0/24 dev eno1 proto kernel scope link src 172.29.29.92 metric 100 

!BU COK HASSAS BIR DEGISIKLIKTIR , BURDA EGER DOGRU IP TANIMLAMASI YAPILMAZ, VE IP ADRESLERINDE CAKISMA GIBI VS LER OLURSA O ZAMAN INTERNET BAGLANTISINI DE KOPARABILIRIZ..ONDAN DOLAYI COK HASSAS BIR DEGISIKLIKTIR...NE YAPTIGMIZI BILMEDEN BU AYAR ILE OYNAMAMAK GEREKIYOR
!EN KOLAYI DHCP NIN OTOMATIK OLARAK TANIMLANMASIDIR... 

!ARP
Ag  uzerindeki cihazlarin diger cihazlarla iletisim kurmak iicin ihtiyac duydugu ip-mac bilgilerini kendi arp tablolarinda tuttugunu daha once gormustuk
Arp tablosu sayedinde her bir cihaz iletisim kurabilecegi cihazlarin ip-mac bilgilerini bildigi icin, kolayca iletisim kurabiliyor ve daha sonra kullanmak icin, bu bilgileri kendi arp tablosunda tutabiliyor 

!Biz hostlar ile iletisim kurdukca arp tablosu dolduruluyor olacak 
adem@adem:~/utv/NSS-hyttetjenester$ arp
Address                  HWtype  HWaddress           Flags Mask            Iface
172.29.29.228            ether   78:f8:82:d0:f9:ed   C                     eno1
172.29.29.180            ether   80:ce:62:53:40:63   C                     eno1
172.29.29.195            ether   f8:94:c2:79:d9:b6   C                     eno1
172.29.29.94             ether   e4:e7:49:9e:af:bd   C                     eno1
172.29.29.212            ether   dc:fb:48:77:17:17   C                     eno1
172.29.29.124            ether   dc:fb:48:77:17:17   C                     eno1
_gateway                 ether   00:1a:8c:f0:b5:e4   C                     eno1
169.254.169.254                  (incomplete)                              eno1
adem@adem:~/utv/NSS-hyttetjenester$ 

! Address - ip veya host adresi verir 
! HWaddress- mac a dresini verir

Bu arp tablosu biz sistemizi kapatip ag baglantisini kapatana kadar tutuluyor, ve tekrar tekrar sorulmak zorunda kalinmiyor
Normalde bildgimz gbi sadece ip adresi var ise cihazimizda bu arp tablosu o ip adresi uzerinden ip adresine sahip cihazin mac adresini ogrenip onun kaydini tutuyor ve tekrar tekrar ogrenmeye gerek k almiyor

Default gateway modem-router bilgisi neden bulunuyor cunku biz internete ciktik ve internete cikarken default gateway-router iin ip adre sini kullandik..
Modemimizdeki switch ozelligi, local pc ler kendi arsinda iletisime gercerken router ozelligi kullanilmadan iletisim saglaniyor ve o zaman da defualt-gateway  kullanilmamis oluyor
Ama biz internetteki bir adres ile yani kendi lokal agimiz disinda bir ip adresi  ile iletisim e gecse idik o zaman biz router imiz-gateway imizin public ip si uzerinden internete cikacaktik, router da internet service saglayicisi tarafindan, ilgili ip adresine pc mizden giden paketin gonderilmesini saglamis oluyor

!Sunu iyi bilelim...router imizin ve lokal cihazlarimizin ip adresleri otomatik olark dhcp tarafindan atandigi icin ip adresinin olmasi gerektigi aralikta surekli degisebilir...ip adresi olmasi gereken aralikta olduktan sonra, bu sorun teskil etmeyecektir herhangi bir cakisma vs yasanmadiktan sonra....

ARP vs Routing: ARP is used for mapping IP addresses to physical network addresses within the local network (LAN). It's not used for routing internet traffic. Your internet connectivity (like pinging www.google.com or 1.1.1.1) involves routing beyond the local network, which doesn't necessarily update your local ARP table with the router's IP.
ARP Table's Dynamic Nature: The ARP table dynamically changes based on network activity and communication with different devices on the local network.
In summary, the absence of your router's IP address in the ARP table doesn't indicate a problem, especially if your internet connection is working fine. The ARP table's contents can vary based on recent network activities and interactions between devices on the local network.

Arp tablosu netowrk interface kartina bagli biz su an ethernet kullaniyoruz, ve arp tablosu ona gore tutuluyor, ama wifi kullanirsak o zaman da wifi aracinin network interface e gore tutacaktir arp tablosunu 

!EGer ethernet user interface i kapatmak istersek: sudo ip link set eno1 down
!Etherneti tekrar acmak icin de:udo ip link set eno1 up
!Ethernet imizin calistigin konrtol etmek icin de ip a - ip addr- ip address

!ROUTE
Kullanmakta oldugumz network-userinterface in ornegin ethernet ara yuzunun dis cihzla iletisime gecegi zaman sistemimizde var olan gateway-router bilgisini ogrnemk icin  ip r - ip route ile ogrenebiliriz 
!ip r - ip route 

adem@adem:~/utv/NSS-hyttetjenester$ ip  route
default via 172.29.29.1 dev eno1 proto dhcp metric 100 
169.254.0.0/16 dev eno1 scope link metric 1000 
172.29.29.0/24 dev eno1 proto kernel scope link src 172.29.29.92 metric 100 
adem@adem:~/utv/NSS-hyttetjenester$ 
Lokal ag disinda bir cihaz la iletisime gecedgimz zaman, kullanacagmz varsayilan aggecidi-gateway-router ip   adresidir:172.29.29.1 
dev eno1- device ethernet eno1 imis 
!Dogrudan route tablosunu gormek iicin: route(komutu kullanabilirz)
adem@adem:~/utv/NSS-hyttetjenester$ route
Kernel IP routing table
Destination     Gateway         Genmask         Flags Metric Ref    Use Iface
default         _gateway        0.0.0.0         UG    100    0        0 eno1
link-local      0.0.0.0         255.255.0.0     U     1000   0        0 eno1
172.29.29.0     0.0.0.0         255.255.255.0   U     100    0        0 eno1
adem@adem:~/utv/NSS-hyttetjenester$ 
!Ya da isim-cozumlemesi yapilmadan dogrudan sayisal adresleri gormek isterde -  route -n 
adem@adem:~/utv/NSS-hyttetjenester$ route -n
Kernel IP routing table
Destination     Gateway         Genmask         Flags Metric Ref    Use Iface
0.0.0.0         172.29.29.1     0.0.0.0         UG    100    0        0 eno1
169.254.0.0     0.0.0.0         255.255.0.0     U     1000   0        0 eno1
172.29.29.0     0.0.0.0         255.255.255.0   U     100    0        0 eno1
adem@adem:~/utv/NSS-hyttetjenester$ 

!172.29.29.1   bu bizm gateway-router ip adersimzdir, ve biz bu ip adresi ile internete cikariz.. Internet uzerinde herhangi bir adres ile irtibata gececegimz zaman, ilgili paketimiz default gateway olarak belirtilmis olan bu adresteki ciahaza 172.29.29.1, teslim ediliyor , bu cihaz da rooter aygtigmiz oldugu icin paketin hedefe ulastilrilmasi icin gerekli yonlendirmeleri y aparak internet servis saglayacimza bu paketi teslim ediyor
2.satirdaki destination ise 172.29.29.0, bizim su an mevcut bagli oldugjmz network un sinrlarini goruyoruz 255.255.255.0 ile....
Local area network deki pc ler veya cihazlar, birbirleri ile iletisime gecerken rooter a ugramlaarina gerek kalmiyor SWITCH VASITASI ILE DOGRUDAN ILGILI CIHAZA.AKTARILABILIYOR IP-MAC ADRES BILGILERI SAYESINDE....DEMEKTIR GATEWAY DEKI 0.0.0.0   DEGERLER ...

!0.0.0.0 INTERNET GIBI GENIS BIR IP ARALGINI TEMSIL ETMEK ICIN TANIMLANAN IP ADRESIDRI, BU SAYEDE INTERNETTEKI TUM IP ADRESLERINI TEMSIL ETMIS OLUYOR...

!sudo ip route add 10.0.0.0/24 via 192.168.1.2 (Eger 10.0.0.0/24(subnetmask) ip araldinda bir ip adresi hedeflenirse bunu al 192.168.1.2  bu adrese, adresteki ip li cihaza yonlendir demis oluyoruz..)

Bunu ekledigmz zaman route -n yaparsak o zaman tablomuzda 
Destination   Gatewat       Genmask
10.0.0.0     192.168.1.2    255.255.255.0

192.168.1.2 boyle birooter cihazimiz yok ama biz varsayarak yapiyoruz... 

!Tekrardan eklenen root adresini silerken de 
!sudo ip route del 10.0.0.0/24 via 192.168.1.2

!Bu degisiklikler tabi ki kalici olmuyyor, bunun la ilgili kalici degisklikleri icin nmtui den router a gidip ordan destination,...next hop(yonlendirmenin yapilacagi ip) burdak i ayarlari yuaparak, kalici degisiklikler yapabiliriz

!traceroute araci(komutu) 
Peketlerin agdaki yolculugunu izlemk istersek bu komutu kullaniriz

adem@adem:~$ traceroute 8.8.8.8
traceroute to 8.8.8.8 (8.8.8.8), 30 hops max, 60 byte packets
 1  _gateway (172.29.29.1)(ilk olarak buraya geldi router-modem ip numarasi cunku internete cikarken public ip olan router ip sini kullaniyordu)  1.045 ms  1.003 ms  0.988 ms
 2  79.160.72.1.static.lyse.net(internet-service saglay icis) (79.160.72.1)  2.164 ms  2.424 ms  2.412 ms
 3  79.160.176.161.static.lyse.net (79.160.176.161)  1.693 ms  2.390 ms  2.641 ms
 4  * 252.109-247-30.customer.lyse.net (109.247.30.252)  16.074 ms  15.565 ms
 5  108.213-167-114.customer.lyse.net (213.167.114.108)  10.634 ms  10.623 ms  10.854 ms
 6  72.14.204.150 (72.14.204.150)  17.484 ms  17.630 ms  17.111 ms
 7  * * *
 8  dns.google (8.8.8.8)  17.205 ms  17.194 ms  16.524 ms
adem@adem:~$ 

Zaten biz route -n komutu calistirinca, bizim gateway-ip adresimizi gorebiliyoruz 

adem@adem:~$ route -n
Kernel IP routing table
Destination     Gateway         Genmask         Flags Metric Ref    Use Iface
0.0.0.0         172.29.29.1     0.0.0.0         UG    100    0        0 eno1
169.254.0.0     0.0.0.0         255.255.0.0     U     1000   0        0 eno1
172.29.29.0     0.0.0.0         255.255.255.0   U     100    0        0 eno1
adem@adem:~$ 

!Burda harici, bir aga, y ani internete cikarken gateway- yani router-modem in ip sinin kullanildigni da burda ispat etmis oluyhoruz bir nevi....

Ama biz direk kendi pc mizin ip adresini verirsek bu kendi lokal agindaki bir ip oldugu icin, bunun icin router-gateway- ip sine basvurmayacak...dogrudan ilgili ip adresine gidecek... 

adem@adem:~$ traceroute 172.29.29.92
traceroute to 172.29.29.92 (172.29.29.92), 30 hops max, 60 byte packets
 1  adem (172.29.29.92)  0.038 ms  0.008 ms  0.007 ms
adem@adem:~$ 

!traceroute komutu ile router cihazi tam olarak calismaz ise, baglanti kopar ise hata nin nerden kaynaklandigini gormek icin bu araci kullanabiliriz!!!!! En azindan lokal agimizda hata nin nerden kaynaklandigini bulabiliriz...Lokal agdaki router cihazlarin calismasini takip etmek icin
!PRTLAR HAKKINDA | ss
ip adreslerine ek olarak, sistemimiz uzerindeki tum araclarin sorunsuz bir sekilde ayni anda veri alisverisinde bulunabilmesi icin portlar kullaniliyor
Portlar olmasa ayni ip adresi uzerinden birden fazla araci kullanmamiz mumkun olmazdi
Network yonetimi icin, gerektiginde portlar hakkinda teml seviye bilgi ediniyor olmamiz ve, onlari ihtiyac durumunda kontrol edior olmamiz, cok onemlidir

!ss(sistemimizdeki aktif portlari sorgulamak icin kullaniriz, sistemimiz uzerindeki tum socket bilgileri)
Burda bahsi gecen socket ler islemler arasi haberlesme icin kullanilan ozel dosyalar aslinda, linux uzerindeki socket yapiisi bu amc icin kullaniliyor
Ayni cihaz uzerindeki islemler veya ag baglantisi bulunan farkli hostlardaki islemler arasinda, haberlesmed e socket ler kulaniliyor, bu socketler yardimi ile veri iletisimi mumkun oluyor
!ss komutu asiri uzun bir liste getiriyor bizde gelen listeyi filtreleriz 
!adem@adem-ThinkPad-13-2nd-Gen:~$ ss | grep "26882"
u_str ESTAB      0      0                                            * 26882                                           * 27857         
u_str ESTAB      0      0                  /run/dbus/system_bus_socket 27857                                           * 26882         

!ss -tuln(tciport udport listening number)

adem@adem-ThinkPad-13-2nd-Gen:~$ ss -tuln
Netid                State                 Recv-Q                Send-Q                                Local Address:Port                                  Peer Address:Port                Process                
udp                  UNCONN                0                     0                                       224.0.0.251:5353                                       0.0.0.0:*                                          
udp                  UNCONN                0                     0                                       224.0.0.251:5353                                       0.0.0.0:*                                          
udp                  UNCONN                0                     0                                           0.0.0.0:5353                                       0.0.0.0:*                                          
udp                  UNCONN                0                     0                                     127.0.0.53%lo:53                                         0.0.0.0:*                                          
udp                  UNCONN                0                     0                                           0.0.0.0:631                                        0.0.0.0:*                                          
udp                  UNCONN                0                     0                                           0.0.0.0:58956                                      0.0.0.0:*                                          
udp                  UNCONN                0                     0                                              [::]:52727                                         [::]:*                                          
udp                  UNCONN                0                     0                                              [::]:5353                                          [::]:*                                          
tcp                  LISTEN                0                     151                                       127.0.0.1:3306                                       0.0.0.0:*                                          
tcp                  LISTEN                0                     128                                       127.0.0.1:631                                        0.0.0.0:*                                          
tcp                  LISTEN                0                     4096                                  127.0.0.53%lo:53                                         0.0.0.0:*                                          
tcp                  LISTEN                0                     70                                        127.0.0.1:33060                                      0.0.0.0:*                                          
tcp                  LISTEN                0                     244                                       127.0.0.1:5432                                       0.0.0.0:*                                          
tcp                  LISTEN                0                     511                                               *:80                                               *:*                                          
tcp                  LISTEN                0                     128                                           [::1]:631                                           [::]:*                                          
adem@adem-ThinkPad-13-2nd-Gen:~$ 

!ss -tuna(yalnizca listening degil, all diye dinlenen leri degil hepsini getir diyoruz)

!netcat | nc  araci
Bu arac sayesinde tcp ve udp uzerinden hedefteki sunucu uzerinden veri alisverisinde bulunaarak baglanti testlerimzi gerceklestirebiliyoruz

!TCP ve UDP nedir bir hatirlayalim...
TCP (Transmission Control Protocol)
Connection-Oriented: TCP is a connection-oriented protocol, meaning that it establishes a connection between the sender and receiver before data is sent. This involves a handshake process to initiate a session.
Reliable: TCP ensures the reliable delivery of data. It uses acknowledgments, retransmissions, and sequence numbers to ensure that data is received in order and without errors.
Flow Control: TCP implements flow control mechanisms to prevent overwhelming the receiver by adjusting the rate of data transmission based on the receiver's ability to process the data.
Congestion Control: It also incorporates congestion control algorithms to reduce the data transmission rate when the network is congested, minimizing packet loss and ensuring stable network performance.
Use Cases: Due to its reliability and order guarantee, TCP is commonly used for applications where data integrity is critical, such as web browsing (HTTP/HTTPS), email (SMTP, IMAP, POP3), and file transfers (FTP).
UDP (User Datagram Protocol)
Connectionless: UDP is a connectionless protocol, which means it does not establish a connection before sending data. It sends data as independent packets known as datagrams.
Unreliable: UDP does not guarantee the delivery of packets, their order, or their integrity. There is no acknowledgment mechanism to confirm receipt of data, and packets that fail to reach their destination are not retransmitted.
Lightweight: It has minimal overhead, making it faster in scenarios where speed is more critical than reliability.
No Flow or Congestion Control: UDP does not implement flow or congestion control, so it cannot adjust its data transmission rate based on network conditions or receiver capabilities.
Use Cases: UDP is suitable for applications where speed and efficiency are more critical than reliability, such as streaming media (video and audio streaming), online gaming, and some real-time communication applications (VoIP).

En temel kulanmi hedef ip ve port sayesinde baglanti kurulmasi
!python3 -m http.server 8080
8080 portunda calisan bir http sunucus olusturmus oluyoruz 

!Test etmek icin 1 tane python sunucusu baslatalim 
adem@adem-ThinkPad-13-2nd-Gen:~$ nc 192.168.250.191 8080
Su anda biz kendi pc mizin sundugu server in 8080 portuna bagli bulunmaktadir...

!ss -tuna ile (hangi port lar ile server imiza baglantilar var bunlari gormek istersek onu goruruz)
Asagida gordugmz gibi baglanti saglanmis... 

tcp            ESTAB               0               0                                                192.168.250.191:8080                                            192.168.250.191:43760  

!nc -l(listen) -p(port) 9999 -e /bin/bash 

!nc 192.168.1.15 9999(Bir pc den diger pc deki bash-shelle erisip onu kontrol edebiliyoruz..)Bu yaklasim guvenlik testlerinde sizilmis olan sisteme disardan erisilebildigini gostermek icin kullaniliyor...Bu yaklasim baglanti sorunlarinda ki hatayi bulmak icin de kullaniliyor 
!nc -l -p 9999 -e /bin/bash ile dinleneme moduna gecip sonra dinleme modundaki hedefe nc 192.168.1.15 9999 ile baska pc den baglanmaya calisiiyoruz, eger baglanabilirsek, sorun yokktur, eger baglanamazsak aramizdaki baglanti problemdir... 
!nc araci ile hedefteki ip adresindeki portlari tarama ve dosya gonderme islemleri de yapmak mumkundur

!iptables firewalld 
Sistemimize gelen ve sistemimizden cikan tum paketlerin istenilen kosullara gore filtrlenebilmesi icin, iptables veya firewalld araclarini kullanabiliyoruz...

<<<<<<< HEAD
!LINUX COMMANDS
!ls -l *.png (uzantisi png olanlari listele)
=======
!UBUNTU KOMUTLARI..SIK KULLANILAN VE IVAR IN VE BENIM IHTIYAC HALINDE KULLANDGIMZ KOMUTLAR

adem@adem:~/Android$ htop			
adem@adem:~/Android$ ps -A			
    PID TTY          TIME CMD			
      1 ?        00:00:01 systemd			
      2 ?        00:00:00 kthreadd			
      3 ?        00:00:00 rcu_gp			
      4 ?        00:00:00 rcu_par_gp			
      5 ?        00:00:00 slub_flushwq			

      adem@adem:~/Android$ ps -A | grep java				
   6889 pts/2    00:03:06 java				
adem@adem:~/Android$ sudo kill -9 6889				


ls -la ~ | grep '\.AndroidStudio'
find ~ -name "android-studio.desktop"
find /usr/share/applications/ -name "android-studio.desktop"

tar -xzvf example.tar.gz -C /home/adem

!sudo ls -R / | grep 'pattern'
Using ls -R piped into grep is a method to search for filenames that match a certain pattern within a directory structure, but it's not typically used to search inside the contents of files. 
!sudo find / -type f | xargs grep -H 'search_term'
To search for a specific word in all files under the root directory using a pipe (|), you can combine the grep command with a command that generates a list of files, like find. The pipe is used to pass the output of one command as input to another command. Here's an example using find to generate a list of files and then grep to search within those files:

  sudo: Runs the command with superuser privileges, which is often necessary when searching through all files under the root directory.
find /: Starts the search from the root directory /.
-type f: Specifies that you want to search in files (not directories).
|: The pipe character passes the output of the find command to the next command.
xargs: Takes input from the previous command and uses it as arguments for the next command. In this case, it takes the list of files found by find and passes them to grep.
grep -H 'search_term': Uses grep to search for 'search_term' in the files provided by xargs. The -H option makes grep print the filename for each match.

Android studio yu acmaya calistik acilmadi, o zaman demekki arkada ki process de bir cakisma oluyor dedik ve de, arka process de studio ile ilgili calisan birsey var mi diye kontrol ettik
!ps aux | grep studio

kill 49820 50258
# Or, if necessary
kill -9 49820 50258
>>>>>>> 30e2af8b8845c5536be3b8e0a6aaec5b477febdb


!WINDOWS CMD-COMMAND PROMPT-KOMUT SATIRI
Windows isletim sistemlerinde bulunur 
Komutlari otomatik scriptleri veya batch tabanli islemleri cmd komut satirinda komutlar yardimici ile komut satirinda da yapabiliriz

Ozetle windows isletim sisteminde, grafik araa yuzu ile yapabildigimz herseyi cmd-commandpropmt aracilig ile de  yapabiliriz
Grafical user interfaces-grafik ara yuzleri

cmd yi arama

!cd-change directory
!cd foldername(grilen foldername e giderz)
!cd .. bir alt directory ye ilerleriz
!dir(icinde bulundgum dizinin tum dosyalarini goruruz)

 Directory of C:\Users\ae_netsense.no\utv\test\Linux-works

22.03.2023  12:17    <DIR>          .
22.03.2023  12:17    <DIR>          ..
29.01.2024  09:35    <DIR>          linux-intro
23.10.2023  14:57    <DIR>          test1
               0 File(s)              0 bytes
               4 Dir(s)  11 790 544 896 bytes free

C:\Users\ae_netsense.no\utv\test\Linux-works>

!dir e tam yolu vererek de alt klasor ve dosyalari gorebiliriz

 Directory of C:\Users\ae_netsense.no\utv\test\Linux-works

22.03.2023  12:17    <DIR>          .
22.03.2023  12:17    <DIR>          ..
29.01.2024  09:35    <DIR>          linux-intro
23.10.2023  14:57    <DIR>          test1
               0 File(s)              0 bytes
               4 Dir(s)  11 739 303 936 bytes free

C:\Users\ae_netsense.no>

!C den baslarken veya herhangi bir disk den baslarken C:\Users\ae_netsense...seklinde yazarz. Birde dikkat etti isek linux un aksine ters-back-slash kullaniyoruz..windows da

<DIR> bu klasor oldugunu gosterir 
Dosyalar ise direk isimleri ile listelenir dir komutu ile
.  Var olan dizini bize referanslar
!C:\Users\ae_netsense.no>cd .
C:\Users\ae_netsense.no>
! .. ise bir alt dizini referans eder..
C:\Users\ae_netsense.no>cd ..

C:\Users>

!cls-ekrani temizleyebiliriz

!help dir diyerek istedigmz komutlar hakkinda bilgi alabilirz

C:\Users\ae_netsense.no\Desktop>help dir
Displays a list of files and subdirectories in a directory.=>Ne ise  yaradigndan bahseder

DIR [drive:][path][filename] [/A[[:]attributes]] [/B] [/C] [/D] [/L] [/N]
  [/O[[:]sortorder]] [/P] [/Q] [/R] [/S] [/T[[:]timefield]] [/W] [/X] [/4]=nasil kullanilacagindan bahseder

  Asagida da parmetrelerin ne ise yaradigini gosterir
   [drive:][path][filename]
              Specifies drive, directory, and/or files to list.

  /A          Displays files with specified attributes.
  attributes   D  Directories                R  Read-only files
               H  Hidden files               A  Files ready for archiving
               S  System files               I  Not content indexed files
               L  Reparse Points             O  Offline files
               -  Prefix meaning not
  /B          Uses bare format (no heading information or summary).
  /C          Display the thousand separ

   /L          Uses lowercase.

C:\Users\ae_netsense.no\Desktop>dir /L  tum dosya dizin isimlerini lowercase ile gosterir

!C:\Users\ae_netsense.no\Desktop>dir /AD sadece klasorleri gosterir 
!C:\Users\ae_netsense.no\Desktop>dir /AH sadece gizli klasorleri gosterir 

!dir /?  yazarak da yine dir ile ilgili nasil kullanilacagi vs gibi help dir ile aldgimz sonucu aliriz

!listelenen dosya ve klasorleri sort etmek icin kullanilir ve dikkat edelim O OPTION VEYA PAREMTRESININ ATTRIBUT LERI VAR
  /O          List by files in sorted order.
  sortorder    N  By name (alphabetic)       S  By size (smallest first)
               E  By extension (alphabetic)  D  By date/time (oldest first)
               G  Group directories first    -  Prefix to reverse order

 C:\Users\ae_netsense.no\Desktop>dir /ON   ISME GORE SIRALAMA AZDAN COKA DOGRU... A DAN Z YE..     
 
 C:\Users\ae_netsense.no\Desktop>dir /O-N  AZALAN SEKILDE-REVERSE SEKILDE SIRLAAMAK, Z-DAN A YA COKTAN AZA

 !mkdir test ile, test klasoru olusturabilirz ya da arasinda bolsuk olan isimli bir klasor olusturmak istersek  mkdir "my test" seklinde olusturabiliriz

!help mkdir diyerek da daha detayli nasil kullaniriz onlara bakabiliriz

C:\Users>help mkdir
Creates a directory.

MKDIR [drive:]path
MD [drive:]path

If Command Extensions are enabled MKDIR changes as follows:

MKDIR creates any intermediate directories in the path, if needed.
For example, assume \a does not exist then:

    mkdir \a\b\c\d

is the same as:

    mkdir \a
    chdir \a
    mkdir b
    chdir b
    mkdir c
    chdir c
    mkdir d
  
 !mkdir \a\b\c\d  => Gordugumz gibi ic ice recursive seklinde klasoru bu sekilde olsutrabiliyor musuz  

!mkdir ile birden fazla klasoru 1 kere de olusturmak istersek

!mkdir folder1 folder2 folder3 - mkdir folder1. folder2. folder3.  nokta koyunca da koymayinca da oluyor


!rmdir - rd ile klasor ve dosyalari silme islemi yapabiliriz, ayni islemi yapiyorlar birbirlerinin alyaslaridir

C:\Users\ae_netsense.no\Desktop>rmdir folder1

C:\Users\ae_netsense.no\Desktop>cd folder1
The system cannot find the path specified.

C:\Users\ae_netsense.no\Desktop>rd folder2

C:\Users\ae_netsense.no\Desktop>cd folder2
The system cannot find the path specified.


C:\Users\ae_netsense.no\Desktop>help rmdir
Removes (deletes) a directory.

RMDIR [/S] [/Q] [drive:]path
RD [/S] [/Q] [drive:]path

    /S      Removes all directories and files in the specified directory
            in addition to the directory itself.  Used to remove a directory
            tree.

    /Q      Quiet mode, do not ask if ok to remove a directory tree with /S

C:\Users\ae_netsense.no\Desktop>

!Resursive sekilde tum alt klasor ve dosyalari silmek istersek...
!rmdir /S foldername  ile recursive bir sekidle , klasorun altindaki tum dosya ve klasorler ile silinmesini saglar

!C:\Users\ae_netsense.no\Desktop\test1\test11>echo . > test1.txt  => YENI BOS BIR DOSYA OLUSTURURKEN

C:\Users\ae_netsense.no\Desktop\test1\test11>dir
 Volume in drive C is Windows
 Volume Serial Number is FC24-CDDF

 Directory of C:\Users\ae_netsense.no\Desktop\test1\test11

29.01.2024  10:58    <DIR>          .
29.01.2024  10:58    <DIR>          ..
29.01.2024  10:58                 4 test1.txt
               1 File(s)              4 bytes
               2 Dir(s)  10 406 330 368 bytes free

!C:\Users\ae_netsense.no\Desktop>rmdir /S test1
test1, Are you sure (Y/N)? y

C:\Users\ae_netsense.no\Desktop>cd test1
The system cannot find the path specified.

C:\Users\ae_netsense.no\Desktop>

YENI BOS BIR DOSYA OLUSTURMAK ICIN
!C:\Users\ae_netsense.no\Desktop\test1\test11>echo . > test1.txt  => YENI BOS BIR DOSYA OLUSTURURKEN
! echo "My text content" > textfile.txt daha once text var ise onu siler, yok ise zaten sifrdan yazar,boyle bir dosya yok ise de dosyayi olusturur
! echo "is here!!!!" >> textfile.txt  seklinde... var olan text i silmeden ekleyebilir 
!type nul > filename.txt


!copy komutu ile bir dosyayi baska bir konuma kopyalama 

!copy source destination


!To copy a single file from one location to another:
copy C:\path\to\file.txt D:\destination\

!To copy a single file from one location to another with different name:
C:\Users\ae_netsense.no\Desktop>copy newfile.txt C:\Users\ae_netsense.no\Desktop\newfile1.txt
        1 file(s) copied.


!To copy multiple files into a single destination folder:
copy C:\path\to\file1.txt C:\path\to\file2.txt D:\destination\

!To copy all text files from one directory to another:
copy C:\source\*.txt D:\destination\

!To copy a file to another place by changing file name
copy test1.txt test2.txt

!move komutu ile de bir dosyayi baska bir konuma tasima..
move source destination

!To move a file from one location to another:
move C:\path\file.txt D:\destination\

!To move a directory to a new location:
move C:\source\folder D:\destination\

!To rename a file using the move command:
move C:\path\oldname.txt C:\path\newname.txt
!To rename a file using the move command:
rename test1.txt test2.txt
!ayni islemi ren komutu ile de  yapariz
ren test1.txt test2.txt

!Asagidaki sekillerde de direk olarak sadece dosyalarin ismini degistiriyoruz
C:\Users\ae_netsense.no\Desktop>rename newfile1.txt newfile11.txt
C:\Users\ae_netsense.no\Desktop>ren newfile.txt newfile2.txt

!Yeni bir dosya olusturmak ve silmek
C:\Users\ae_netsense.no\Desktop>echo . > test1.txt =>Yeni dosya olustururken
C:\Users\ae_netsense.no\Desktop>del test1.txt =>Olusturulan dosyayi silerken
C:\Users\ae_netsense.no\Desktop>erase newfile2.txt

!Iki dosyayi ayni anda silmek
del text1.txt text2.txt

!Herhangi bir dosyanin notepadde acilmasi
C:\Users\ae_netsense.no\Desktop>notepad newfile.txt
C:\Users\ae_netsense.no\Desktop>notepad newfile1.txt


!Delete islemi yaparken yani silme
del test1.txt 
erase test1.txt

!Ayni anda birden fazla dosya da silebiliriz 
del test1.txt test2.txt

!!wildcart(*) karatkterini kullanarak silme islemi
del test1.txt test11.txt test2.txt test22.txt yerine 
!del test*.txt yaparak kolayca silebiliriz 

!dir *.txt  sadece txt dosyalarini listele demektir
!adem@adem:~$ ls -l *.tar. aynisini linux de de kullaniriz
!dir *.jpg sadece jpg uzantili dosyalari goster 

!echo ile yazilan bir mesaji farkli bir dosya icine yazmak 
!echo "Test test " > test1.txt 
notepad test1.txt dersek test1.txt nin icerigini gorebiliriz 
Ama echo "Test test " > test1.txt , bu sekilde test1.txt nin kendi icerigini silip echo ile bizim verdgimzi yazacak
!test1.txt nin kendi icerginide koruyarak yazdirmak icin ise:
!echo "Test test " >> test1.txt 

!echo "Test test " > test11.txt
Gidip test11.txt dosyasi arar eger bulamaz ise kendisi yeni bir dosya olusturarak, test11.txt ismini verir

!Bir dosyanin icerigini gormek icin ise type komutunu kullaniriz 
!type test1.txt(linux deki cat komutu gibi)

C:\Users\ae_netsense.no\Desktop>type test1.txt 
"TEST-test"
"add this text message also"

!Direk olarak txt dosyasinin kendisini acmak icin ise :
direk olarak test1.txt ya da notepad test1.txt diyerek acabiliriz
!C:\Users\ae_netsense.no\Desktop>test1.txt(Bu sekilde varsayilan olarak hangi editorle ayarlanmis lar ise o editorde acar)
!C:\Users\ae_netsense.no\Desktop>notepad test1.txt 

!dir > newfile.txt (newfile.txt icerisine o anda uzerinde bulundugmz directory de bulunan dosya ve klasor isim listesini yazariz) 

!systeminfo komutu ile windows sistemimiz ile ilgili detayli bilgiyi aliriz
!systeminfo > test1.txt(systeminfo komutu ciktisini yazdirabiliriz)(komut satirina cikti veren komutlarin ciktlarini yazdirabiliyoruz dikkat edelim)

!WINDOWS TA BIR UYGULAMAYI KOMUT SATIRINDAN NASIL AYGA KALDIRIRIZ, NASIL RUN-EXECUTE EDERIZ NASIL CALISTIRIRIZ

!C:\Users\ae_netsense.no\Desktop> dir 
Visual Studio 2022.Ink  dosyasi ni ornegin acmak istiyoruz..desktop da 

!C:\Users\ae_netsense.no\Desktop> "Visual Studio 2022.Ink " (enter a basarak acariz, arada bosluk oldugu icin tirnak icinde calistiriz)
Ama bir cok uygulamanin windows ta calistirma dosyasi olan .exe uzantili dosyalar genellikle uygualmarin klasorlerinin bulundugu dosya da kisa yol oalrak bulunurlar
Masaustundeki bir uygulama ya saga tiklayip properties deyince ordan target a bakarak o uygulamanin klsorlerinn nerde oldugunu goruruz
Opera nun uzerine gidip saga tiklayinca, adresini goruruz target ta : C:\Users\ae_netsense.no\AppData\Local\Programs\Opera
cd C:\Users\ae_netsense.no\AppData\Local\Programs\Opera 
C:\Users\ae_netsense.no\AppData\Local\Programs\Opera dir *.exe 
opera.exe 
C:\Users\ae_netsense.no\AppData\Local\Programs\Opera  opera.exe(diyerek opearyi calistiriz, komut satiri uzerinden) 

!PATH KAVRAMI....COOK ONEMLI....
!PEKI NASIL BIZ ISTEDGIMZ HER DIRECTORY SEVIYESINDE CALISTIRMAK ISTEDGIMIZ UYGULAMALARI CALISTIRACAGIZ 
ENVIRONMENT-VARIABLE BURDA DEVREYE GIRIYOR 
!path komutunu yazarsak karsimiza arlarinda ; bulunan(windows da ; , linux da ;)
Windowsda arama ya env yazarak , ya da Environment yazarsak karsimiza gelir tiklayarak gidince ustteki pencerede path basligina tiklayinca, Edit environment variable diyerek bircok path oldugunu gorebiliriz
Yani biz windows cmd de path yazinca ekrana Environment variable da, path de bulunan liste aralarinda ; olacak seklde karsimiza cikti olarak gelir 
!Biz ornegin  C:\Users\ae_netsense.no\Desktop  opera.exe    dedgimz zaman ilk once Desktop altinda opera.exe varmi ona bakar, eger burda bulamaz ise o zaman da Environement variable daki path listesini tek tek kontrol eder..ki aslinda Environemnt variable path demek windows da global olarak , hangi directory den olursa olsun yazildiginda direk calismasi istenilen programlarin path leri burada bulunur ki, boyle durumlarda, ozellile projeler ayaga kaldirilirken veribabani bilgieri gibi onemli konfigurasyon bilgileri enviornment variable a kaydedilip ordan okunurki global tutulusn ve ornegin proje 5 farkli pc de bulunsa bile her pc icin ayri ayri farkli yollarda tutmaya calismak yerine cunku her pc nin username i vs var kendine ozel, environemnt variabla da tutarak biz sadece pc lerde enviornemnt variable path e eklenmesi gereken path i yani dosyasinin yolunu ekkleriz sonra zaten direk olarak projede path deki dosyayi bir fonksiyon aracilgil ile okuyabiliriz...

Ornegin biz opera browser ini pc de command prompt uzerinden istedgimz her yerden,  yani directory olarak nerdde olursak olalim bir komutla operayi acmak istiyorsak operanin .exe dosyasinin buludngu konumu opera ninkisa yolu uzerinde saga tklayip properties deyince gelen pencrede target ten buluruz ve sonrasinda da o opera.exe nin bulundugu yolu kopyalayip environment variable alttaki pencerede pathe tiklayip edit deriz sonra da new diyerek o yolu path olarak eklersek sonra da kaydedip cikariz ve eger acik bir command prompt var ise o command promptun yeni eklkenen pathi tanimasi icin acilip kapatilmasi gerekir ve biz o  sekilde yapip tekrar command promptu acarsak o zaman, artik nerde olursak olalim direk olarak opera veya opera.exe yazdgiimz da artik opeara acilacaktir...COOOOK ONEMLI BIR BILGIDIR BU!!!
!Cunku biz operayi sistem degiskeni olarak pathe ekledik...

!systeminfo ile calisilan pc hakkinda genel bilgiler elde ederiz

!find ile bir dosya iceriginde arama yapma

C:\Users\ae_netsense.no\Desktop>find "Microsoft" test1.txt		
		
--------- TEST1.TXT'		
09.10.2023  11:58             2 450 Microsoft Teams classic.lnk		
06.07.2023  11:50             1 282 Microsoft Visual Basic 6.0.lnk		
03.07.2023  12:58             1 446 Microsoft Visual Studio 2008.lnk		
29.03.2023  21:23                 0 New Microsoft Word Document.docx		
		
C:\Users\ae_netsense.no\Desktop>		
		
!help find
!find /? ile hangi optionslarla birlikte kullanabiliriz bunu gorebiliriz

color /?  vye help color diyerek color ile ilgili neler yapabilirz onu goruruz
color 07(background black- foreground white default ta budur)
Bize color cmd terminali icin kullanbilecegimz renkleri color /? diyerek gorebiliriz
!tasklist ile calisan uygulamalari listesini alma
!taskkill /PID 25516 diyerek ornegin notepad i kapatabiliyoruz(25516 Yi tasklist deyince gelen listede PID-processid sini aliriz)
!taskkill /IM notepad.exe

!Cmd komut satirini admin yetkileri ile birlikte acmak icin  arama kutucugunda cmd dedikten sonra cmd ye saga tiklayip run as administrator ile acariz

!PROMPT KOMUTU 
prompt $D  su anki date i verir
prompt $T su anki time i verir 

!title newtitle dieyerek cmd nin sol ustteki baslgi degistirebiliriz

!ATTRIB diyerek uzerinde bulundugmuz dizindeki dosya ve klasorleri dosya larin ozellikleri ile goruruz A-ARCHIVE H-HIDDEN R-READONLY
!ATTRIB -R python.jpg  bu sekilde hem +H dosya hidden hale getirilir hem de uzantisi degistirilmis oluyor
!ATTRIB -H -R python.jpg hem hidden ozelligi hem de readonly ozelligi kaldirilir 
!DOSKEY /HISTORY DIEYERK DAHA ONCE YAZLAN KOMUTLARI GOREBILIRIZ


!OZEL SISTEM UZMANLIGI IP ADRESLERI VE BILGISYAR AGLARI-NETWERK
IP adresleri networkun alfabesdir, cook iyi bilinmesi gerekir

!IP ADRESLERI 
Bilgisayalrin kendi aralarinda iletism kurmak icin bu ip numaralarini kullaniyorlar

!IP ADRESI NEDIR:
32 bitlik bir sayidir 
0,1 her bir karakter 1 bittir 
32 tane 0-1 lerden olusan sayi bir ip adresini verir
32 lik binary-2 li (0-1) lerden olusan sisteme goredir 

32 bitlik sayi daha kolay okumak icin 4 parcaya ayiriyoruz ve ikilik-binary duzenindeki sayiyi 10 luk duzene ceviriyoruz 

11000000.10101000.00000001.11010110  binary sini(2lik sayi sistemi sadece 0-1 kullanabilir)
onluk duzene cevirirsek  yani decimal e 
192.168.1.214 olarak gelecektir ve bu parcalardan her birine 192-168-1-214 ten her birine octet denir
Octet aslinda ayni 1 byte gibidir ve 8 bite karsilik gelir.
192.168.1.214 ipv4 adresinin 
1.octet:192 - 11000000=>2^7=128+2^6=64=>  192
2.octet 168 - 10101000=>2^7+2^5 + 2^3 =>168
3.octet 1   - 00000001 => 2^0=>1
4.octet 214 tur diyebiliriz - 11010110 => 2^7=128+2^6=64 + 2^4=16 + 2^2=4 + 2^1=2=>214
Ilk oktet:192
son oktet:214 

!Binary to Decimal(2 lik ten 10 luga cevirme)
!11000000=>2^7=128+2^6=64=>  192 bu islemin adi binary to decimal dir bunlari tabi ki elle yapmayacagz, ihtiyac durumunda online-converter ler ile yapabiliriz

!KULLANANABILECEGIMZ MAKSIMUM OKTET DEGERI KACTIR? 
11111111=>255
!BIR OKTETIN ALABILECEGI ENKUCUK DEGER NEDIR? 
00000000=>0

!IP ADRESLERINDE  
! 1.KURAL IP AADRESI OKTET LER MAKS:255(1111111) MIN:0(00000000) OLABILIR

!O ZAMAN BIR IP ADRESI YAZMAK ISTEDIMGZ ZAMAN SINIRLARIMZI BILIYORUZ...BU COOOK ONEMLIDIR, HER BIR OKTET MAKSIMUM 255 OLABILIR DAHA FAZLA OLAMAZ, BUNU COK IYI  BILMELIYIZ, CUNKU BUNA COK IHTIYACIMZ OLACAK

!ASAGIDAKI IP ADRESLERINDEN HANGISI IP ADRESI FORMATINDA DEGIL SIMDI ONLARI GOZLEMLEYELIM!!!

 22.256.10.78 => bu ip adres formatina uymamaktadir ve bir ip adresi degildir cunku 2.oktet 255 degerinden buyuktur, ip adreslerinin oktetleri maksimum 255 minumum 0 olabilirler
 19.65.323.222 bu adres te ip adresi olarak kullanilamaz, cunku 3.oktet 323 255 den buyuktur 

! 2.KURAL: HICBIR IP ADRESININ SON OKTETI 255 ILE BITEMEZ.. 
 98.255.10.255 =>bu ip adresi olarak kullanilamaz...bunu da bilelim, cunku son oktet 255 tir..

! 3.KURAL: HICBIR IP ADRESININ SON OKTETI 0 ILE DE BITMEZ 
 67.21.233.0 => bu ip adersi olarak kullanilamaz cunku, son oktet 0 dir

!IP ADRESLERI NEYE GORE, HANGI MANTIGA GORE PC LERE VERILIYOR...

!IP ADRES SINIFLARI(Iki pc nin ortak bir netwerk kurabilmesi icin ip uzerindedn ayni adres sinfindan olmalari gerekir)

!EGER IP ADRESININ ILK OKTETI:
0-127 arasi classA, 128-191- classB, 192-223 arasi classC, 224-239 arasi classD, 240-255 arasi classE  
RANGE FOR FIRST BYTE(ILK OKTET)
class A 0-127
class B 128-191
class C 192-223 
class D 224-239
class E 240-255
 
! D ve E sinifli IP adreslerini gunluk yasamimizda kullanmiyoruz, bu ip adresleri deneysel amaclar icin kullaniliyor , uzay arastirmalari icin ya da multicasting denilen birden fazla noktaya ayni anda iletisim saglamk icin bazi yapilari icin kullaniliyor

!4.KURAL: ILK OKTETI 224 TEN BUYUK IP ADRESLERI GUNLUK YASAMIMIZDA KULLANILMAZ...DOLAYISI ILE DEMEKKI BIZIM KULLANACAGIMZ IP ADRESLERININ ILK OKTETI DE 224 TEN BUYUK OLMAMALIDIR!!!!
!5.KURAL - BIRBIRI ILE ILETISIME GECECEK IP ADRESLERI AYNI SINIFTA OLMALIDIR, YANI ILK OKTETLERI NE BAKARAK HANGI SINIFTA OLDUKLARINI ANLIYORDUK...

!Bizim kullanabilecegimz A,B ve  C class ip adresleridir ve de iki bilgisayarin iletisime gecebilmesi icin her iki pc nin de ayni class icersindeki ip adreslerine sahip olmalidir
! Bu arada bilgisayarlarini sayisi farketmez eger ayni sifinta A,B,C siniflarindan ayni sinifta olan 2 bilgisyar veya 100 bilgisayar birbrileri ile iletisime gecebilir, ayni sinif ip lerine sahip 2 bilgisayar ile ayni sinif ip lerine sahip 100 bilgisayrin birbiri ile iletisime gecmesi ayni seydir

!Asagidaki ip adresleri hangi siniflardadir ve hangileri ayni siniftadir ?
!HATIRLAYALIM NEREYE BAKIYORUZ ILK OKTETINE BAKIYORUZ IP ADRESININ
123.55.8.21 - 123 - A     98.255.10.155-A 
192.168.0.200 - C   165.187.54.128-B
34.35.129.214 -A    244.234.10.78 -D(Gunluk yasamda kullanilmaz)

!NETWORK ID VE HOST ID NEDIR?
Bir agda 2 bilgisyarin birbirleri ile iletisim kurabilmeleri icin ayni agda olmalari gerekir. Iki bilgisyarin ayni agda olmasi demek, network id lerinin esit olmasi demektir
Network id sinin ayni olmasi ne demektir?
Networkumuzde, agimizda A-B-C siniflarindan istedigmz bir sinif ip lerini kullanabiliriz.Ornegin ip adresi olarak, C class ip adresleri ni seciyourz pc ler iicn  yani ilk okteti 192-224 arasi olanlar. 
!6.KURAL - Eger networkumuzde-agimizda C sinifi(ilk oktet 192-224 arasi) ip adreslerini secmis isek , iki veya daha fazla pc lerini birbiri ile iletisime gecebilmeleri icin bilgisayarlara verilen ip adreslerinin ilk 3 oktetleri esit olmalidir. Iste C sinifi bir ip adresi icin ilk 3 oktete o agin network id si diyoruz, son oktete de host id adresi diyoruz 

Ornegn 
192.168.1.76 - ilk okteti 192 oldugu icin C sinifi bir ip adresidir
NETWORKID:192.168.1
HOSTID:76 
!DIKKAT EDELIM 192.168.1.76 BOYLE BIR IP ADRESI C SINIF(ILK OKTET 192- (192-224 ARASINDAIDIR)) OOLDUGU ICIN , ILK 3 OKTET SABIT TUTULUR VE NETWORK ID SIDIR ILK 3 OKTET, SON OKTET ISE HOST ID DIR..
IP ADRESI 192.168.1.76  OLAN PC MIZ 192.168.1 NETWORK ID SINDEDIR VEYA AGIMZDAKI DIGER TUM PC LERDE 192.168.1 NETWORK ID SINE SAHIPTIR VE HOST ID:76 DIR. YANI  IP ADRESI 192.168.1.76 OLAN PC, 192.168.1 NUMARALI NETWORKUNUN 76 NUMARALI BILGISAYARDIR DIYORUZ..  

!7.KURAL: SONUC OLARAK BIR IP ADRESI NIN HER ZAMAN 2 BOLUMU VARDIR, 1.BOLUM NETWORK ID BOLUMUDUR, 2.BOLUM HOST ID BOLUMUDUR VE SINIFLARA GORE DE ASGIDAKI GIBI AYRILMISTIR, ORTAK AGDA-NETWORK DE BULUNAN YANI ILETISIME GECECEK OLAN PC LERIN NETWORK ID LERI AYNI OLMALIDIR
C SINIFI IP ADRESLERI ICIN 
IP ADRESININI ILK 3 OKTETI NETWORKID YI SON OKTET I ISE PC NIN HOST ID SIDR  
!BIR C SINIF IP ADRESLERININ BIRBIRLERI ILE ILETISIME GECEBILMELERI ICIN AYNI NETWORK DE -AGDA OLMALARI GEREKIR, VE BUNUN ICINDE NETWORK ID SININ ESIT OLMASI GEREKIR, BUNUN ICIN DE C SINIFI BIR IP YE SAHIP PC LERIN ILK 3 OKTET LERININ ESIT OLMALARI GEREKIR
B SINIFI IP ADRESLERI ICIN 
IP ADRESININ ILK 2 OKTETI NETWORKID YI SON 2 OKTET I ISE PC NIN HOST ID SIDIR 
A SINIFI IP ADRESLERI ICIN ISE 
IP ADRESININ ILK OKTETI NETWORKID YI SON 3 OKTETI ISE P NIN HOST ID SIDIR

!C sinif ip leri kullanan birisinin 1.pc nin ip adresi ne olur? ve kac tane pc ye ip adresi dagitabilir?
!Cevap:1- 1.ip adresi :  192.168.1.1, 192.168.1.2, 192.168.1.3 ..... 192.168.1.254 TOPLAM 254 ADET PC YE IP ADRESI VEREBILIR!!! EGER C SINIFI BIR IP ADRESI OLACAKLAR ISE BIRBRI ILE TEMASA GECECEK OLAN PC LER  
!O ZAMAN BURDAN SUNU ANLIYORUZ KU C SINIFI IP ADRESLERI KUCUK NETWORKLER ICIN KULLANILIR...

PEKI KULLANICI 254 DEN FAZLA IP ADRESI KULLANMAK ISTIYOR VE C SINIFI IP LER KULLANMAK ISTIYOR O ZAMAN YAPILACAK OLAY SUDUR 
192.168.1.254 TEN SONRA 192.168.2.1 E ATLAYARAK NETWORK U BIR SONRAKI NETWORKE GECEREK BU SEFER IP ADRESI VERMEYE BASLIYOR DIKKAT EDELIM C SINIF IP ADRESLERI 1 NETWORK DE MAKS 254 IP ADRESI DAGITABILIYOR  

!192.168.1.0 NETWORKU DIYE TANIMLANIR, NETWORKLER C SINIF IP ADRESLERINDE ILK 3 OKTET I ALINIRDI VE NETWORK OLDUGU ICIN 4.OKTET 0 OLARAK VERILIR NETWORK TANIMLANIRKEN 
192.168.1.0 NETWORKU 192.168.1.1, 192.168.1.2, 192.168.1.3 ..... 192.168.1.254(SON OKTET LERDE 0 VE 255 KULLANILMAZ) 
192.168.1.1 NETWORKU 192.168.2.1, 192.168.1.2, 192.168.2.3 ..... 192.168.2.254

!B SINIFI IP VERILECEK PC LER ICIN IP ADRESININ ILK 2 OKTETI SABIT TUTMAK GEREKIYOR VE ILK 2 OKTETI NETWORKU TEMSIL EDIYOR...VE PC LERIN BAGLANTI KURABILMELERI ICIN B CLASS INDA OLMALARI GEREKIYOR DU ZATEN ILK ONCE SONRA DA NETWORK-AG LARININ AYNI OLMASI GEREKIYOR DOLAYISI ILE B SNIFI ICIN IP ADRESI VERILECEK BIRBRI ILE ILETISIME GECECEK PC LERIN ILK 2 OKTETI SABIT OLMALIDIR...AMA SON 2 OKTET HOST U YANI IP VERILECEK PC LERI TEMSIL EDIYOR VE SON 2 OKTET 1-254(254 DAHIL) ARASINDA ISTEDGMIZ DEGERI ALABILIR DOLAYISI ILE 254*254 FARKLI IP ADRESI DAGITABILIRIZ

!B SINIIFI IP LERDE ILK 2 OKTET SABIT-VE AYNI OLAN PC LER BIBRILERINI GOREBILIRLER
NEDEN B SINIF BIR IP KULLANIRIZ CUNKU AYNI AGDA EGER 254 TEN FAZLA PC MIZ OLLACAKSA B YA DA A SINIFI IP KULLANMAK ZORUNDAYIZ CUNKU C SINIFINDA BIR NETWORK DE MAKS 254 PC NINI BIRBINIRI GORMESI SAGLANABILIYOR, AMA B SINIFI PC DE 254*254=64516 TANE IP ADRESI TANIMLANABILIR
!172.16.99.240 BIR B SINIF IP SIDIR CUNKU 1.OKTETI 172 DIR (128-192 ARASINDADIR), ILK 2 KISMI NETWORK, SON 2 OKTETI HOST-PC LERE VERILECEK IP ICIN
!172.16.0.0  NETWORKUNDE 172.16.1.1, 172.16.1.2 ..... 172.16.254.254 E KADAR TOPLAM 64500 CIVARI  IP ADRESI VERILEREK BU KADAR PC NIN BIRBIRI ILE ILETISIME GECMESI SAGLANABILIR B CLASS IP LERINDE

!A SINIFI IP LER IN BIRBIRNI GORMESI ICN ISE ILK OKTETLERI AYNI VE SABIT OLMALIDIR. 1.OKTET NETWORK ICIN SON 3 OKTET TE HOST- YANI PC LERE VERILECEKI IP ADRESLERI ICINDIR 
!10.0.0.0 NETWORK ID SINDE, 10.1.1.1, 10.1.1.2, 10.1.1.3... 10.254.254.254 E KADAR 254*254*254 YANI YAKLASIK 16 MILYON CIVARI FARKLI PC LERI ,FARKLI IP ADRSINI TEK BIR NETWORK DE , BIRBIRI ILE ILETISME GECMESI SAGLANAIBLIR A CLASS IP LER ICIN
!BILGISYARLAR ILETISIME GECINCE, DOSYA-KLASOR ALISVERISI YAPABILIRLER, BIRBIRLERINIE BAGLANABILIRLER
!A SINIFI IP LER COK BUYUK YAPILAR ICIN KULLANILIR, TABI KI ISTERSERK KUCUK YAPILAR ICIN DE KULLANABILIRIZ

!A CLASS BIR NETWORKID: 10.0.0.0 seklindedir
!A class bir ip icin HostId gosterim ise : 10.255.255.255 tir, 255 ile gosterilen oktetlere 1-254 arasi herhangi bir deger girilebilir anlamindadir
! A sinifi ip lerde kac adet network belirlenebilir: A sinifi ilk okteti 1-127 arasi idi , dolayisi ile 127 farkli network belirlenebilir, ve her bir network icin 254*254*254 ip-pc birbiri ile iletisime gecebilir

!IP ADRESIMIZI BULMA
 !cmd de ipconfig-WINDOWS TA - ifconfig linux de
    Connection-specific DNS Suffix  . :
   Link-local IPv6 Address . . . . . : fe80::2543:8bf9:3ccc:7dc%8
   IPv4 Address. . . . . . . . . . . : 172.29.29.94
   Subnet Mask . . . . . . . . . . . : 255.255.255.0
   Default Gateway . . . . . . . . . : 172.29.29.1

   172.29.29.94 ip adresimiz
   1.oktet 172-(128-191) B SINIFI DOLAYISI ILE 172.29.255.255 HOST-PC IP YANI 255 YERINE 1-254 ARASI IP LER DAGITILABILIR DEMEKTIR
  172.29.0.0 MODEMIMIZ--networku BU ADRESTEN IP VERMIS
  IP LER IN HANGI ARALIKTA OLDUGUNU BIKIYORUZ AMA NEDEN BANA ORNEGIN  172.29.29.94 BU IP VERILMIS BU DA MODEMIN-NETWORKUN MARKASINA VE YAPISINA GORE DEGISIR

  !internette whatis myip adres yazarsak: 
  My IP Address is:
IPv4: ? 79.160.72.2
IPv6: ? Not detected
My IP Information:
ISP: Netsense AS
City: Skien
Region: Vestfold og Telemark
Country: Norway

!neden ipconfig de gelen ip adresi ile internette whatismyip yazinca gelen ip adresleri farklidir?


The difference in IP addresses that you're seeing — one from an online "What is my IP" service (79.160.72.2) and another from your computer's ipconfig command (172.29.29.94) — can be explained by how networks and IP addresses work.

Public IP Address (79.160.72.2):

The IP address you see from an online service is your public IP address. This is the address assigned to your internet connection by your Internet Service Provider (ISP).
This public IP address is what websites and online services see when you connect to them. It's used for communication over the internet.
If you're behind a router or a modem at home or work, all devices on your local network share this public IP address when accessing the internet.
Private IP Address (172.29.29.94):

The IP address you see with the ipconfig command in the Command Prompt is your private IP address. This address is used within your local network (LAN).
Private IP addresses are assigned by your router and are not reachable directly from the internet. They allow multiple devices to connect to your router and share the single public IP address.
The range 172.29.29.x falls within one of the IP ranges designated for private use (others include 10.x.x.x and 192.168.x.x). These addresses are used internally on networks and are not routable on the internet.
Why They Are Different:
NAT (Network Address Translation): Your router uses NAT to manage the connection between your private network and the internet. It translates requests from private IP addresses (like 172.29.29.94) to your public IP address (79.160.72.2) and keeps track of these translations to ensure responses from the internet reach the correct device on your local network.
Security and Efficiency: This system provides a layer of security, as devices on the internet cannot directly access devices on your private network. It also allows for efficient use of IP addresses, enabling multiple devices to share a single public IP.
So, the reason you're seeing two different IP addresses is that one represents your device's address within your local network, and the other is the address your ISP assigns to your network for accessing the internet.



!Public IP Address (79.160.72.2):  whatismyip diye arattirdigimzda gelen ip- DIS IP -WAN(WIDELY AREA NETWORK)
!Private IP ADRESS (172.29.29.94) BU da lokal baglanti -LAN(LOKAL AREA NETWORK) -IC IP
EVIMIZDE VEYA SIRKETIMIMZDE OLAN KENDI ARALRINDAKI ETKILESIM ICIN PRIVATE-ICERDEKI IP ADRESI KULLANILIR VE BUNU BIZ BELIRLERIZ, KENDIMIZE GORE AYARLAYABILIRIZ 
AMA INTERNETE CIKTIMIZDA ISE PUBLIC IP, VE INTERNETTE KULLANDIGIMIZ IP YI BIZ BELIRLEYEMEYIZ, INTERNET SERVIS SAGLAYICIMIZ VERIR YANI MODEMIMIZ VERIR

!BU ARADA BIR EVDE BULUNAN MODEM,PC,MOBILE TELEFON, TABLET, PRINTER, SMARTTV,SMARTCLOCK, ROBOTSTØVSUGER,SMARTBEYAZ ESYA, KLIMA, GUVENLIK KAMERASI,KOMBI, OYUN KONSOLLERI, NINTENDOSWITCH, PLAYSTATION,OKULLARDAKI AKILLI TAHTALAR GIBI CIHAZLARIN HEPSININ BIR IP ADRESI VARDIR VE MOBIL ETELEFON UZERINDEN TAKIP EDILMESI, BASLATILIP DURDURULMASI VE UPDATE EDILMESI AYNI INTERNETE BAGLANABILMELERINDEN DOLAYI YAPILMAKTADIR, DOLAYISI ILE IP ADRESLERI VARDIR HEPSININ VE BU IP ADRESI UZERINDEN YONETILIR

!NAT(NETWORK ADDRESS TRANSLATION)=> PUBLIC IP LER VE PRIVATE IP LER
255.255.255.255 255*255*255*255 YAKLASIK 4MILYAR KUSUR VE BU DUNYADAKI CIHAZLARA IP DAGITMAK ICIN(PUBLIC.DIS) YETERSIZ KALMIS VE BU PROBLEM NAT ILE COZULMUS
HER BINA DA VEYA ISYERINDEE BIRCOK PC,TABLET,GIBI INTERNETE BAGLANMASI GEREKEN YANI IP  ADRESI OLMASI GEREKEN CIHAZ BULUNMAKTADIR, VE DUNYADA BU KADAR COK CIHAZA IP VERMEK MUMKUN OLMADIGI ICIN COZUM OLARAK HER MEKANA BIR IP VERELIM DENILMIS YANI BIR MODEM VERILEREK MODEMLERE OZEL IP LER VERILIYOR, VE HER MEKAN ICINDEKI CIHAZLAR INTERNETE CIKARKEN MODEM IP SINI KULLANARAK CIKARKEN YANI PUBLIC IP, KENDI ARLARINDA ISE, BENZERSIZ OLAN PRIVATE IP LER KULLANIRLAR. ISTE PRIVATE IP LERI PUBLIC IP YE 


!Private IP ADRESS (172.29.29.94) BU da lokal baglanti -LAN(LOKAL AREA NETWORK) -IC IP
172-B SINIFI BIR IP DIR(128-192 ARASI) VE B SINIFI IP LERDE ISE 172.29.0.0 DIR NETWORK IP SI, AMA HOST IP LERI ISE 172.29.255.255 YANI 172.29 AYNIDIR SONRASI 1-254 ARASI DEGERLER ALACAKTIR..BU COOK ONEMLI! YANI AYNI LOCAL AREA NETWORKDE BULUNANLAR BU ARALIKLARDA IP ALACAKLARDIR AMA BU SADECE ICERIYE OZEL, ICERDE YANI LOKAL AREA DA GECERLIDIR, INTERNETE GIRERKEN DEGIL TABI KI

!Public IP Address (79.160.72.2):  whatismyip diye arattirdigimzda gelen ip- DIS IP -WAN(WIDELY AREA NETWORK)
BU IP ISE BIZIM INTERNETE GIRERKEN, YANI DISARYA CIKTIGIMDA KULLANDGIMIZ IP MIZDIR, BU IP YI BIZE INTERNET SERVICE SAGLAYICMIZ OLAN ORNEGIN TELIA-TELENOR BIZE OZEL BAGLIYOR VE EVIMIZDEN INTERNETE BAGLANAN TUM IP ALABILECEK CIHAZLAR MODEM-IN IP SI OLAN PUBLIC IP YI KULLANARAK BAGLANIYOR
VE BU PUBLIC IP NIN KIMLIK BILGILERINDE BIZIM EV IIN ADRESI HER TURLU BILGISI MEVCUTTUR. YANI BIZ INTERNETTE BIRINE MAIL GONDERDIGIMZDE, BIR TWEET AILDIGINDA, BIR POST GONDERILDIGINDE BUNUN HANGI IP DEN GONDERILDIGI BELLIDIR, VE O IP NIN BAGLI OLDUGU ADRES BIZIM EV ADRESIMIZDIR. BUNDAN DOLAYI INTERNETTE YAPTIGIMZ HERSEY ASLINDA IP ADRESMIZ UZERINDEN HANGI ADRESTEN YAPILMIS BELLIDR . NASIL KI BIR CEVAPSIZ CAGRI YAPINCA TEL NO MUZU BIRAKIYORSAK, HERHANGI BIR SITEYE GIRDIGIMZDE, POST ATTIGIMZDA, M AIL TWIT, GONDERDIGIMZ DE DE IP ADRESIMIZI BIRAKIYORUZ
PUBLIC(DIS)-PRIVATE(IC) IP LERI SAYESINDE, IP LERIN YETMEME SORUNU COZULMUS OLUYOR NAT-NETWORK ADRESS TRANSLATION SAYESINDE  COK DAHA AZ IP KULLANARAK ISLER HALLOLMUS OLUYOR

!PRIVATE IP LER(ICERDE KULLANILAN IPLER)- PUBLIC IP LER(DISARDA KULLANILAN IP LER)
EVIMIZDE VEYA ISYERIMIZDE BIR MODEMIMIZ VAR,
!MODEMIMIZIN BIR DIS KAPISI VARDIR(PUBLIC IPLER):
 BIZ INTERNETE BAGLANDIGIMZ ZAMAN MODEMIMIZ IN IP ADRESI ILE DISARI CIKARIZ, AYNI EVDE VEYA ISYERINDEKI TUM CIHAZLAR MODEM IN IP SI ILE INTERNETE BAGLANIRLAR VE BU BIZIM GERCEK IP MIZDIR BUNU DA INTERNETE WHAT IS MY IP ADRESS DERSEK ORDAN GOREBILIRIZ
BU MODEM IN IP SI. BIZ EVE INTERNET BAGLATTIGMIZDA BIZE TELIA-TELENOR TARAFINDAN VERILMIS MODEM E VERILMIS IP ADRESIDIR
!MODEMIMIZIN BIR DE IC KAPISI VARDIR(PRIVATE IP LER):
ICERDE DIYELIM KI IP LERIMIZI BILGISYARLARMIZA KENDIMIZ ATADIK DIYELIM KI, VE ICERDEKI CIHAZLARIN IP LERINI KENDIMIZ VERDIK DIYELIM VE LAN-LOCAL NETWORK AREA DA BIRBIRLERI ILE GORUSEBILIYORLAR PEKI BU ICERDEKI CIHAZLAR DISARI NASIL CIKACAKLAR, YANI EVIN DISINA DIYELIM YANI INTERNETE NASIL BAGLANACAK....BUNUN ICIN MEVCUT KULLANILAN LOCAL-PRIVATE-IP(ICERIYE BAKAN) LERINDEN CIKMAMIZ GEREKIR, BUNU DA MODEM IN O CIHAZLARA CIKIS KAPISI OLARAK , YANI PUBLIC-DISARIYA YANI INTERNETE BAGLANMK ICIN GOSTERMEMIZ GEREKIR
!PEKI DISARI INTERNETE GIRMEK ISTEYEN BIRISI, MODEM DEN ICERI-PRIVATE IP YI ALMADAN INTERNETE GIREBILIR MI???????BU COKK ONEMLI
ORNEGIN BIR ISYERINDEKI BILGISYARLARDAN INTERNETE BAGLNMAK ISTEYENLERE ILK ONCE SIRKETIN SAHIP OLDUGU MODEM IN ICERIYE BAKAN-PRIVATE IP ADRESINI VERMEK ZORUNDAYIZ, MODEM TARAFINDAN VERILMIS OLAN IP ADRESINE SAHIP OLMAYAN HIC BIR BILGISAYAR SIRKET DISINDA, DISARIYA INTERNETE CIKAMAYACAKTIR
INTERNETE BAGLNMAK ISTEYEN TUM CIHAZLARA BINANIN MODEM ININ ICE BAKAN BACAGINI-YANI ICERDE(PRIVATE) KULLANACAGI IP SINI GOSTERMEK ZORUNDAYIZ
MODEM IN ICE BAKAN IP SI HER NE ISE BILGISAYARLARA GIDIP DEFAULT GATEWAY DENILEN BOLUME MODEM IN IP SINI GIRMEMIZ GEREKIYOR

   Connection-specific DNS Suffix  . :
   Link-local IPv6 Address . . . . . : fe80::2543:8bf9:3ccc:7dc%8
   IPv4 Address. . . . . . . . . . . : 172.29.29.94
   Subnet Mask . . . . . . . . . . . : 255.255.255.0
   Default Gateway . . . . . . . . . : 172.29.29.1

!YANI BIZ INTERNETE BAGLANACAGIMZDE ONCELIK LE MODEM IN ICERIYE BAKAN YANI PRIVATE OLARAK IP YI ALMAMIZ GEREKIYOR BUNUN ICINDE PC MIZIN DEFAULT GATEWAY KISMINDA MODEM IMIZIN IP ADRESI YAZMASI GEREKIYOR 

!MODEMLERIN ICERDE BULUNAN CIHAZLARA IP DAGITMASI

!BILGISAYARLARA PRIVATE IP ADRESLERINI MODEM IMIZ AKTIF OLDUGU ANDA ORTAMDA BULUNAN HER BIR CIHAZA OTOTMATIK OLARAK IP ADRESI VERECEKTIR VE BU IP LER ICERDE KULLANILACAK OLAN IP LERDEN OLACAKTIR, AYRICA MODEM KENDISINI DE BILGISAYARLARA CIKIS KAPISI OLARAK DA BILGILENDIRECEK. MODEMLER BUNU OTOMATIK OLARAK YAPIYOR BU YUZDEN EVE GELINCE TELEFONLARIMZ HEMEN INTERNETE BAGLANIYOR, BILGISYAR ACILIR ACILMAZ INTERNETE BAGLANIYOR
MODEMLER ICERIDE BULUNAN CIHAZLARA ICERDE KULLANILMAK UZERE REZERVE EDILMIS IP LERI VERIYOR, VE IP VERDIGI CIHAZLARA DA DISARI CIKMAK ISTERSEN BENI KULLAN DIYOR
!MODEM ICERIYE IP YI NASIL DAGITIYOR 
CIHAZLAR ACILDIGI ANDA ORTAMA SESLENIR BENIM IP ADRESIM YOK BANA IP ADRESI VERECEK MODEM-ROUTER YOK MU DIYE, WIFI ETHERNET KARTI OLDUGU ICIN PC LERDE VE CIHAZLARDA BUNLAR KABLOSUZ OLARAK ORTAM DA CIHAZLAR ARASI KONUSULMASINI SAGLAR
EVDE MODE MIMIZ VAR ISE BU KABLOSUZ OLARAK YAPILAN KONUSMAYI DUYAR VE IP ATANMAMIS CIHAZLARA HEMEN IP LOCAK-PRIVATE IP LERI ATAMA YAPAR VE ONLARA INTERNETE BAGLANACKLARI ZAMAN PUBLIC- 
!MODEM IN SAHIP OLDUGU DHCP SERVISI SAYESINDE PRIVATE-PUBLIC IP ATAMASI SAGLANMIS OLUR
YANI DISARI CIKACAKLARI ZAMAN DA ONA DIS IP VEREBILECEGINI HABER VERMIS OLUR YANI MODEM ORTAMDA BULUNAN CIHAZLARIN IHTIYAC I OLAN PRIVATE-PUBLIC IP VS NE VARSA VERIR, ISTE MODEM IN ORTAMDAKI CIHAZLARIN IHTIAYCI OLAN PRIVATE-PUBLIC IP ADRESLERINI VERDIGI SERVISIN ADI DHCP SERVISIDIR VE HER MODEM IN ICERISINDE BULUNUR, KENDI IP KONFIGURASYONUNU YAPAMAYANLAR ICIN HAZIR KONFIGURASYONLARI CIHAZLARA VERIRLER

TUM PC LER, CIHAZLAR OTOMATIK OLARAK IP AL AYARINDADIR BUNDAN DOLAYI DA KENDILERI GIRDIKLER I ORTAMDAKI MODEM E HEMEN SESLENIRLER BENIM IP ADRSIM YOK BANA IP ADRESI VER DIYE

!DEFAULT GATEWAY NEDIR?
! ISP(INTERNET SERVICE PROVIDER(TELIA-TELENOR))=>MODEM(2 TANE IP ADRESI VAR 1-ICE BAKAN YANI PRIVATE(192.168.0.1), 2-DISA BAKAN PUBLIC(82.10.250.19))
MODEMIMIZ BU SEKILDE VE EVIMZDEKI CIHAZLARIN HER BIRISINE MODEM ILK OLARAK LOCAL-AREAL-NETWORK PRIVATE IP ADRESI DAGITIR  
 MODEMIN PRIVATE IP SI:192.168.0.1 BU OLDUGU ICIN BURDA 192.168.0.255 YANI 192.168.0.(1-254) ARASI IPLERI DAGITIR   
!C CLASS BIR IP ADRESIDIR VE HATIRLAYALIM C CLASS IP LERDE CIHAZLARIN, IP LERININ BIRBIRINI GORMESI ICIN GEREKLI OLAN ILK SART ILK OKTETININ ESIT OLMASI IDI...

PC-1 - 192.168.0.101
PC-2 - 192.168.0.104
PRINTER - 192.168.0.11
NINTENDO - 192.168.0.10
MOBILE-1 - 192.168.0.100
MOBILE-2 - 192.168.0.102
TABLET-1 - 192.168.0.109

VE VERDIGI IP ADRESLERININ YANINDA DA DERKI BENIM IP ADRESIM DE 192.168.0.1 BU IP ADRESINI KULLLANARAK DA DISARI CIKABILIRSINIZ DER, VE MODEM BURDA NAT ISLEMIN  YAPAR YANI NETWORK ADRES TRANSLATION YAPAR, YANI ICERDE KULLANILAN IP ADRESINI ALIYOR DISARDA KULLANILACAK IP ADRESINE CEVIRIYOR, YANI MODEM DEN PRIVATE IP YI ALAN CIHAZLAR INTERNETE BAGLANACAKLARI ZAMAN MODEM IN LOKALDEKI IP SINI BULUYORLAR 192.168.0.1, SONRA MODEM BU IP ADRESINI ALIYOR NETWORK ADRESS TRANSLATIO ILE BUNU 82.10.250.19 A YAN I PUBLIC IP ADRESLERINE CEVIREREK INTERNETE CIKACAK OLAN CIHAZLARIN HEPSINE PUBLIC IP ADRESI VEREREK INTERNETE BAGLANABILMELERINI SAGLIYOR
ISTE MODEM IN LOKAL IP ADRESINI DAGITIRKEN KI IP ADRESI OLAN : 192.168.0.1 TUM CIHAZLARIN INTERNETE CIKABILMELERI ICIN HEDEF KAPILARIDIR..YANI DEFAULT GATEAWAY
CIHAZIN KENDI NETWORKUNDEN BASKA BIR NETWORKE CIKMAK ICIN KULLANDIGI KAPIYA DEFAULT GATEWAY DIYORUZ. YANI PC NIN LOKAL NETWORKDEN(LOKAL-AREA-NETWORK) , INTERNETE(WIDELY AREAL NETWORKE) CIKMAK ICIN KULLANDIGI KAPIYA DEFAULT GATEWAY-VARSAYILAN AG GECIDI-CIKIS KAPISI DENIYOR  

!INTERNETE BAGLANABILMEK ICIN!!!!
!DEFAULT GATEWAY MODEM IMIZIN LOKA IP ADRESIDIR VE ORTAMDA BULUNAN CIHAZLAR MODEM I TANIMALARI ICN DEFAULT GATEWAY OLARAK MODEM IN LOKAL IP SI YANI DEFULT GATEWAY I GIRMEK ZORUNDAYIZ...BU COOOK ONEMLIDIR
MODEMIN DEFAULT GATEWAY IP ADRESI KENDISINDE BULUNAN TUM CIHAZLARI MODEM INTERNETE CIKARACAKTIR

!MODEM IN ARKASINDA PORT LAR VARDIR KABLOLU BIR SEKILDE , DE KABLOSUZ BIR SEKILDE DE INTERNETE BAGLANABILMEYI SAGLAMAKTADIR

!ICERDE KULLANILAN MODEM IP ARALIKLARI - DEFAULT GATEWAY .. YANI MODEM IN LOKAL IP SI 
CLASS              PRIVATE ADDRESS RANGES 
Class A            10.0.0.0 - 10.255.255.255(her zaman 10 la baslar ve son 3 oktet pc lere verilecek olan ip adresleri icindir)
Class B            172.16.0.0 - 172.31.255.255(172.16.0.0- 172.17.0.0-172.18.0.0...son iki oktet host-pc ler icindir)  
Class C            192.168.0.0(192.168.1.0- 192.168.2.0..bu sekilde network icin ip adresleri verilir 254 adet, son oktet bilgisayarlara verilen oktetir ) - 192.168.255.255(ilk 3 oktetin esit olmasi gerekiyordu ve son oktet te bilgisyarlara verilen oktetti)  
!ISTE BU ICERISI ICIN PRIVATE ICIN REZERVE EDILMIS IP LER DISINDAKI TUM IP LER INTERNETTE KULLANILAN Y ANI PUBLIC-DISARSI ICIN KULLANILAN IP LERDIR

!Bilgisyarlara verilecek bolumler 255 ile ifade ediliyor, networker ip adresi ise 0 ile  yazilir ki, bu 0 olan yerde once ip adresinin class ina bakilir ve o class a gore once kac oktetin sabit olmasi gerektigi belli edilir ve host-pc lere verilecek kisimlar alanlar disindaki 0 ise network icindir..

!Loopback adresi: Fiziksel olarak hat guzergahini kontrol etmek icin kullanilir bu cok fazla kullanilmayacak

!SANAL BILGISARLAR NASIL KURULUR VE AYARLARI
BURDA PC MIZE VIRTUALBOX KURULUR, WINDOWS ISO DOSYASI INDIRLIR VE 2 TANE SANAL MAKINE KURULUMU YAPILDIKTAN SONRA, HER IKI SANAL MAKINEYE DE WINDOWS ISLETIM SISTEMI YUKLENIR


!IKI BILGISAYARIN BIRBIRINE BAGLANMASI VE MANUEL OALRAK IP ATAMA YAPILMASI
Dikkat edelim benim pc min ip adresine bakacak olursak 

   Connection-specific DNS Suffix  . :
   Link-local IPv6 Address . . . . . : fe80::2543:8bf9:3ccc:7dc%8
   IPv4 Address. . . . . . . . . . . : 172.29.29.94-
   !(Class B  172.16.0.0 - 172.31.255.255(172.16.0.0- 172.17.0.0-172.18.0.0...son iki oktet host-pc ler icindir)) yani network 172.16.0.0,172.17.0.0, 172.18.0.0 .... 172.31.0.0 e kadar olabilir!!!! Iste bizim ip adresimz de dikkat edersek B class bir ip den secilmistir... 

   Subnet Mask . . . . . . . . . . . : 255.255.255.0
   Default Gateway . . . . . . . . . : 172.29.29.1

   !Biz iki pc yi birbiri ile gorusturmek istiyoruz, yani birbirleri ile dosya alisverisinde bulunabilmelerini, ya da birbirlerine uzak masaustu baglanti yapabilmelerini istiyoruz 
   ! Iki bilgisayarin birbiri ile gorusebilmeleri icin ilk olarak bizim bu bilgisayarlara birbirleri ile gorusmeye uygun olacak IP atamalari yapmamiz gerekiyor
   Simdi biz burda cok fazla pc ile calismayacagimz icin C sinifi bir ip atamasi  yapmak istiyoruz... O zaman C sinifi ip ler icin rezerve edilmis ip bilgiler i ne idi hemen onu hatirlayalim

   !BU TABLO COOK ONEMLI IP ATAMALARINDA, BU TABLOYA GORE IP ATAYABILIRIZ..BU IP LER ICERI-PRIAVATE ATAMALAR ICIN AYRILMISTIR

   CLASS              PRIVATE ADDRESS RANGES 
Class A            10.0.0.0 - 10.255.255.255(her zaman 10 la baslar ve son 3 oktet pc lere verilecek olan ip adresleri icindir)
Class B            172.16.0.0 - 172.31.255.255(172.16.0.0- 172.17.0.0-172.18.0.0...son iki oktet host-pc ler icindir)  
Class C            192.168.0.0(192.168.1.0- 192.168.2.0..bu sekilde network icin ip adresleri verilir 254 adet, son oktet bilgisayarlara verilen oktetir ) - 192.168.255.255(ilk 3 oktetin esit olmasi gerekiyordu ve son oktet te bilgisyarlara verilen oktetti)  
!ISTE BU ICERISI ICIN PRIVATE ICIN REZERVE EDILMIS IP LER DISINDAKI TUM IP LER INTERNETTE KULLANILAN Y ANI PUBLIC-DISARSI ICIN KULLANILAN IP LERDIR

!Class C            192.168.0.0(192.168.1.0- 192.168.2.0..bu sekilde network icin ip adresleri verilir 254 adet, son oktet bilgisayarlara verilen oktetir ) - 192.168.255.255(ilk 3 oktetin esit olmasi gerekiyordu ve son oktet te bilgisyarlara verilen oktetti)  

!C sinifi ip adreslernde ip lerin-pc lerin birbrini gorebilmeleri icin ilk 3 oktet in ayni olmasi gerekiyordu...cunku ilk 3 oktet netwerki temsil ediyordu
Adem pc- 192.168.1.100
Zeynep pc- 192.168.1.101

!ICERDE-PRIVATE KULLANILACAK-LAN(LOKAL AREAL NETWORK) ICIN KULLANILMASI ICIN ASAGIDAKI IP LER REZERVER EDILMISTIR, BU REZERVE EDILMIS IP LER DISINDA GERIYE KALAN TUM IP LER PUBLIC-DISARYA CIKARKEN  YANI INTERNETE BAGLANIRKEN(WIDELY AREAL NETWORK) KULLANILACAK OLAN IP ADRESLERI ICINDIR
!Class C ise kesinlikle bu araliklar takip edilmelidir 192.168.0.0 netwerk icin ve netwerk 192.168.1.0, 192.168.2.0...ve ip icin ise  192 .168.1.1, 192.168.1.2, 192.168.1.3 ...192.168.1.254(her bir netwerkte 254 adet)    

!Class B ise kesinlikle bu araliklar takip edilmelidir 172.16.0.0 - 172.31.255.255 netwerk icin ve netwerk 172.16.0.0, 172.17.0.0... 172.32.0.0 ve ip icin ise  172.32.1.0, 172.32.2.0,......172.32.254.254(her bir netwerk icin yaklasik 64.000)

!Class A ise kesinlikle bu araliklar takip edilmelidir 10.0.0.0 - 10.255.255.255  netwerk icin ve netwerk her zaman 10.0.0.0 ve ip icin ise  10.1.0.0, 10.1.0.0,......10.254.254.254..olmak uzere(16 milyon...farkli ip kullanilabilir)

!BU SEKILDE PRIVATE-ICERISI ICIN REZERVE

!ASAGIDAKI IKI CIHAZIMIZA ONCE MANUEL IP ADRESLERI ATAMASI YAPALIM
Adem pc- 192.168.1.100
Zeynep pc- 192.168.1.101

!SORU CEVAP-BILGISAYAR ILK ISLETIM SISTEMI YUKLENDIGINDE HERHANGI BIR MODEM E BAGLANMADI ISE IP ADRESI NEYE GORE ATANIR..? 
PEKI BEN 2 TANE SANAL BILGISAYAR OLUSTRDUM WINDOWS  ISLETIM SISTEMI YUKLEDIM VE HENUZ HERHANGI BIR INTERNET BAGLANTISI YOK BU 2 SANAL BILGISAYAR ACTIM VE CMD YI ACARAK IPCONFIG YAZDIGIMDA PC-1 Autoconfiguration IPv4 169.254.134.20  gelirken diger pc-2 de ise Autoconfiguration IPv4 169.254.88.28  degerlerini goruyorum..peki bizim bu bilgisayar nasil olmus da 192.168....ile baslayan bir deger almamis ve neden boyle bir deger almis..eger rezerver olan degerlerimz benim yazdigim degerler gibi ise o zaman neden bu iki pc bu private-icerisi icin rezerve edilmis ip adreslerine uymamis 


IP adresleri 169.254.x.x aralığındaysa, bu, sanal bilgisayarların bir DHCP sunucusundan otomatik olarak geçerli bir IP adresi alamadığını gösterir. Bu tür IP adresleri, "APIPA" (Automatic Private IP Addressing) veya "Link-Local" adresleri olarak bilinir. APIPA, bir ağ cihazı DHCP sunucusundan IP adresi alamadığında ağ cihazının kendisine otomatik olarak atadığı bir IP adresidir.

Neden APIPA Adresleri Kullanılır?
DHCP Sunucusuna Erişim Yok: Eğer ağ üzerinde bir DHCP sunucusu yoksa veya sanal bilgisayar DHCP sunucusuyla iletişim kuramıyorsa, APIPA mekanizması devreye girer ve otomatik olarak bir 169.254.x.x aralığından bir IP adresi atar.

Ağ Yapılandırması Sorunları: Ağ yapılandırmasında bir sorun varsa (örneğin, yanlış subnet maskesi veya ağ geçidi ayarları), sanal bilgisayarlar DHCP sunucusundan IP adresi alamayabilir ve APIPA adresleri kullanabilir.

Geçici Ağ Sorunları: Ağdaki geçici sorunlar veya ağ bağlantısındaki kesintiler de DHCP adreslemenin başarısız olmasına ve APIPA adreslerinin atanmasına neden olabilir.

APIPA Adreslerinin Özellikleri:
Otomatik Atama: Cihazlar, 169.254.0.1 ile 169.254.255.254 arasında rastgele bir adres seçer (ilk ve son 256 adet adres hariçtir).
Yerel Bağlantı: Bu adresler sadece yerel ağ içinde iletişim kurmak için kullanılabilir ve ağın dışına çıkamaz.
Geçici Çözüm: APIPA adresleri geçici bir çözümdür. DHCP sunucusu tekrar erişilebilir hale geldiğinde, cihazlar normalde DHCP'den geçerli bir adres alır.
Çözüm Yolları:
DHCP Sunucusunu Kontrol Edin: Sanal ağınızda bir DHCP sunucusu olup olmadığını ve düzgün çalışıp çalışmadığını kontrol edin.
Ağ Ayarlarını Gözden Geçirin: Sanal ağ adaptörlerinin doğru yapılandırıldığından ve sanal bilgisayarların DHCP sunucusuna ulaşabileceği bir ağda olduklarından emin olun.
Ağ Bağlantısını Kontrol Edin: Sanal bilgisayarların ağ bağlantısının düzgün kurulduğundan ve ağ geçidi, subnet maskesi gibi diğer ağ ayarlarının doğru yapılandırıldığından emin olun.
Manuel IP Ataması: APIPA adresleriyle ilgili sorunlar devam ederse ve DHCP sunucusuyla ilgili sorunları çözemezseniz, sanal bilgisayarlara manuel olarak bir IP adresi atayabilirsiniz. Bu durumda, 192.168.x.x, 10.x.x.x, veya 172.16.x.x - 172.31.x.x gibi özel IP aralıklarını kullanabilirsiniz.

!ASAGIDAKI IKI CIHAZIMIZA ONCE MANUEL IP ADRESLERI ATAMASI YAPALIM
Adem pc- 192.168.1.100
Zeynep pc- 192.168.1.101

IP ADRESLERINI ETHTERNET KARTLARINA GIRIYORUZ

BILGISAYAR IN AG AYARLARINA GIDERLIM-NETWORK AYARLARI INSTILLINGER FOR NETWORK OG INTERNET-ETHERNET-ENDRE KONTROLL ALTERNATIVER- GELEEN PC ICONLU ETHERNET E CIFT TIKLA-EGENSKAPER E TIKLA-INTERNET PROTOCOL VERSION 4 E TIKLA-- VE ARTIK KARSIMIZA GELEN PENCERE DE MANUEL OLARK  IP-ADRESSE:  NETWERKSMASKE(SUBNETMASK) -STANDART GATEWAY(DEFAULT GATEWAY)  AMA BU DEGERLERI MANUEL OLARAK KENDIMZ GIREBILMEK ICIN BRUK FØLGENDE IP-ADDRESSA CHECKBOX INA TIKLARIZ

!ORTAM DA EGER DHCP SERVISI YOK ISE YANI MODEM YOK ISE(YA KAPALI YA DA HIC YOK) O ZAMAN, ORTAMA CIKAN PC LER BENIM IP ADRESIM YOK BANA IP ADRESI VEREEK BIRISI LAZIM DIYE ORTAMA MESAJ GONDERIYOR, ORTAMDAN MESAJINA KARSILIK ALAMAZSA YANI BU CEVABI VERECEK MODEM(DHCP SERVISI) O ZAMAN DA PC KENDI KENDINE OTOMATIK IP ATAMASI YAPIYOR

ADEM PC SI NIN ATADIGI OTOMATIK IP ADRES:
 Autoconfiguration IPv4 169.254.134.20 
ZEYNEP PC SI NIN ATADIGI OTOMATIK IP ADRES:
 Autoconfiguration IPv4 169.254.88.28 

 !EGER IP ADRESI 169 ILE BASLIYORSA BU IP APIPA(AUTOMATIC PRIVATE IP ADDRESING) TARAFINDAN PC KENDI KENDINE ATAMISTIR, CUNKU ORTAMDA DHCP SERVISI YANI MODEM BULAMAMISTIR
 !BU APIPA IP SI KULLANILMIYOR SADECE BIR GOSTERGEDEN IBARETTIR
!INTERNETE BAGLANMA SORUNLARINDAN BIR TANESI DE BUDUR, BAZEN PC LER OTOMATIK YAPILANDIRMA DA OLABILIR VE MODEM I GORMUYOR OLABILIR, O ZAAMAN MODEM KONTROL EDILMELI VE MODEM IN CALISTIGINDAN EMIN OLUNMALI

!ASAGIDAKI IKI CIHAZIMIZA ONCE MANUEL IP ADRESLERI ATAMASI YAPALIM

IP-ADRESS KISMINA -
Adem pc- 192.168.1.100
Zeynep pc- 192.168.1.101

BU ADRESLERI GIRIP DE OKE BASARSAK HEMEN UYARI VERECEKTIR ALT-AGMASKESI EKSIK DIYE-YA DA SUBNETMASK(NETVERKSMASKE EKSIK DIYE) 
!BIR BILGISAYARA IP ADRESI VERIRKEN SUBNETMASK DA VERMEK ZORUNDAYIZ 

!SUBNETMASK NEDIR VE NEDEN GEREKLIDIR ? 
BIR BILGISAYAR KENDISINE VERILEN IP NIN NETWORK ID SINI BERLILEMEK ICIN SUBNETMASK A IHTIYAC DUYAR-NETWORK ID SINI HATIRLAYALIM C SINIFI IP LERDE NETWORK U ILK OKTET NETWORK ID SINI BELIRLIYORDU

!IP ADRESINI VERDIKTEN SONRA BILGISAYAR OTOMATIKMEN BIR SUBNETMASK OLUSTRURUR

Adem pc- 192.168.1.100
SUBNETMASK: 255.255.255.0
Zeynep pc- 192.168.1.101
SUBNETMASK: 255.255.255.0

!VE BILGISIAYAR O SUBNETMASK A BAKARAK, IP ADRESININ HANGI NETWORK ID DE OLDUGUNU ANLAR

EGER BIZ B SINIF BIR IP ADRESI VERSE IDIK PC LERE 
Adem pc- 172.16.1.100
SUBNETMASK: 255.255.0.0
Zeynep pc- 172.16.1.101
SUBNETMASK: 255.255.0.0

EGER BIZ A SINIF BIR IP ADRESI VERSE IDIK PC LERE 
Adem pc- 10.100.100.100
SUBNETMASK: 255.0.0.0
Zeynep pc- 10.100.100.101
SUBNETMASK: 255.0.0.0

C sinifi icin 
Adem pc- 192.168.1.100
SUBNETMASK: 255.255.255.0
Zeynep pc- 192.168.1.101
SUBNETMASK: 255.255.255.0

!SEKLINDE SUBNMET MASK ATAMASINI A-B-C CLASS IP LERINE GORE BU SEKILDE ATAYACAKTIR BIZ IP ADRESINI GIRP DE TAB TUSUNA BASITIGMZDA 

DEMEKKI:

C SINI IPLERDE STANDART SUBNETMASK: 255.255.255.0
B SINI IPLERDE STANDART SUBNETMASK: 255.255.0.0
A SINI IPLERDE STANDART SUBNETMASK: 255.0.0.0


C sinifi icin 
Adem pc- 192.168.1.100
SUBNETMASK: 255.255.255.0
Zeynep pc- 192.168.1.101
SUBNETMASK: 255.255.255.0

!Adem pc-IPADRESS- 192.168.1.100 - ILK 3 OKTET I IP ADRESININ NETWORK ADRESI DEMEKTIR...HATIRLAYALIM..192.168.1.0 - HOSTLAR ICIN ISE HATIRLAYALIM  4.OKTET YANI SON OKTET1-254 ARASI OLMALIDIR, SOK OKTET 0 VE 255 OLMAZDI

!BIR IP ADRESININ SUBNETMASK UZERINDEN NETWORK ADRESI NASIL BELIRLENIYOR

IP(decimal-10luk duzen)-192.168.1.100 ONLUK DUZENDEKI HALI-her bir bolume oktet diyoruz
BINARY(2lik duzen)- 11000000.10101000.00000001.01100100
Bilgisayarlar kendi aralarinda onluk duzende iletisime gecerler 

192.168.1.100 ip adresini bunu verdikten sonra tab a basinca  subnetmask otomatik olarak 255.255.255.0 olarak geldi 
 255.255.255.0 bunun binary-ikilik duzendeki karsiligi- 11111111.11111111.11111111.00000000  dir    
 Bilgisayarlar kendi iclerinde and-carpma islemi gerceklestiriyorlar ip adresine bakiyorlar binary formdaki ve subnetmaskina bakiyorlar binary form daki ve her bir basamagi  bir birleri ile carpiyor  

 IP         11000000.10101000.00000001.01100100
 SUBNETMASK 11111111.11111111.11111111.00000000

 RESULT     11000000.10101000.00000001.00000000  
 !CIKAN SONUCU ONLUK DUZENE CEVIRIRSEK NETWORK ID YI BIZE VERECEKTIR... KI BU DA  192.168.1.0 DIR-NETWORKADRESININ BULUNUSU BU SEKILDEDIR 

 ! 192.168.1.0 C SINIFI BIR IP DIR VE C SNIFI BIR IP DE ILK 3 OKTET AYNI OLUR VE NETWORK ID YI BELIRLER

 !SON DURUMDA ETHERNET E CIFT TIKLAYIP IP YI ACTIK VE 
 ADEM : IP: 192.168.1.100
 SUBNETMASK:  255.255.255.0 
 
 ADEM : IP: 192.168.1.101
 SUBNETMASK:  255.255.255.0

 !LAN-LOCAL-AREAL-NETWORK ICIN NE GEREKIYORDU NETWORK ID LERI YANI C SINIFI IP LER ICIN ILK 3 OKTET NETWORKID-AYNI OLMASI GEREKIYORDU BUNU UNUTMAYALIM
 
 !DEFAULTGATEWAY(STANDART GATEWAY)-VARSAYILAN AG GECIDI VERECEK MIYIZ?
 DEFAULTGATEWAY MODEMIMIZDI HATIRLAYACAK OLURSAK 
 SU ANDA INTERNETE CIKMAYACAGIMZ ICIN VE SADECE PC LER LOKAL AREAL NETWORK-LAN BIRBIRINE BAGLAYACAGIM ICIN DEFAULT GATEWAY E HERHANGI BIR SEY VERMIYORUM 
 OK E BASIP CIKIYORUZ ADEM-ZEYNEP PC LERINDE

 !SIMDI ADEM-ZEYNEP PC SININ BIRBIRINE BAGLANTININ ARKA PLAN DA GERCEKLESIP GERCEKLESMEDIGINI TEST EDELIM
 ORNEGIN ELIMIZDE 2 TELEFON NUMARASI VARKEN NE YAPARIZ, TELEFONLARI BIRBIRINI ARAYIP TEST EDERIZ...ISTE AYNI MANTIGI BURDA YAPACAGIZ   
 BU ISLEMI !PING KOMUTU ILE YAPARIZ  

 !ADEM-PC DEN CMD YI ACARIZ VE ZEYNEB E BAGLANTI KURABILIYOR MU DIYE ADEM PC DEN ZEYNEP PC YE REQUEST GONDERIRIZ PING ARACILIGI ILE 

 !ping 192.168.1.101  (ADEM DEN ZEYNEBE)

 Result: Requested timed out diye gelir  
 Bunun sebebi windows defender network ayar inin aktif olmasidir windows defender dan new Microsof Defender Brannmur(Firewall) i deaktif edersek o zaman bekledigmiz sonuc gelecektir  

 Reply from 192.168.1.101: bytes=32 time<1ms TTL=128
 Reply from 192.168.1.101: bytes=32 time<1ms TTL=128
 Reply from 192.168.1.101: bytes=32 time<1ms TTL=128
 Reply from 192.168.1.101: bytes=32 time<1ms TTL=128 

!ZEYNEP PC DEN ADEM E REQUEST GONDEREREK BAGLANTI TESTI YAPARIZ
!ping  192.168.1.100(ZEYNEP TEN ADEM E)

 Reply from 192.168.1.100: bytes=32 time<1ms TTL=128
 Reply from 192.168.1.100: bytes=32 time<1ms TTL=128
 Reply from 192.168.1.100: bytes=32 time<1ms TTL=128
 Reply from 192.168.1.100: bytes=32 time<1ms TTL=128 

 !BU SEKILDE ADEM VE ZEYNEP PC LERININI BIRBIRLERI ILE BAGLANTILARI OLDUGUNU GORMUS OLDUK!!!

 !Bir pc de ip adresini ogrenmek icin ya ipconfig ya da direk ethernet-internet ayarlarina gidip aktif ethernete cift ya da saga tikalariz properties den gorebiliriz

 !PEKI BIZ ADEM PC SININ IP ADRESINDE NETWORK U DEGISTIRIRSEK 
 !192.168.1.100 u 192.168.2.100 olarak degistirirsek eger o zaman Zeynep pc sinden ping ile Adem Pc sine request gonderirsek 
 
 ping 192.168.1.100 
 result: Reply from 192.168.1.101: Destination host unreachable 
 boyle bir host a ulasilmaadi  
 
 ping 192.168.2.100
 PING: transmit failed. General failure.
 !Cunku Adem Zeynep Pc lerinin network adresleri degisti Adem(192.168.2.100)Zeynep(192.168.1.101) ve artik baglanti kuramiyorlar normalde C sinif ip lerde ilk3 oktet network id idi ve 4.oktet 0 olarak gosterilirdi network id de ve biz bunu degistirdigmz icin iki pc artik baglanti kuramaz hale geldi!!!!  

 !ping -t 192.168.1.101 dersek bu da sonsuza kadar istek gonderir
 Bu komutu anlik olarak bir pc nin diger bir pc ye baglantisinin aktif pasif oldugunu takip etmek icin kullaniriz...Eger ip adresleri nde network id leri esit olursa o zaman baglanti oldugu sonucunu aliriz, yok network id leri farkli ise o zman da network id lerinin ayni olmadigni anlariz 
 ping -t den cikmak icin CTRL-C ile cikariz

 !BAGLATNTI SORUNLARINA COZUMLER

 result: Reply from 192.168.1.101: Destination host unreachable 
 Boyle bir sonuc aliyorsak ve ping request gonderdigimz ip adresinin var oldugunu biliyorsak o zaman, ulasmak istedigmz pc kapali olabilir
 Ethernet kablosunun kablosu cimis olabilir bunu da Internet-network/Ethernet(pc iconu) uzerinde kirmizi carpi isareti gelir
 Ip adresi nin networku farkli olabillir
 
 Ethernet karti kontrol edildi, pc acik ip adresleri de ayni o zaman bir sonraki secenek Firewall dan kaynaklaniyor olabilir 
 Denetim Masasi-Windows Guvenlik Duvari(Bilgisayarlar ilk kurulduklarinda diger pc lerden gelecek olan ping requestlere karsi kapalidirlar, bunu Windows Firewall dan Advance settings den)

 Advance settings-Incomingrules-Inkommende regeer-> Fil og skriverdeling (ekkoforespørsel-yanki istegi) 4 satirda bulunan hepsi birden secilir saga tiklanarak aktivate the rule yapilarak, artik ping ile disardan gelen isteklere acmis oluruz
 Veya windows defender firewalll diyoruz- offentlig netwerk  i pasifize ederiz..

 !ping 192.168.1.100  den eger hicbir bilgi alamiyorsak hicbir sonuc gelmezse o zaman bu ethernet kartinin goremedigi anlamina gelir cunku  
  ping 192.168.1.100 komutuna cevabi ethernet kartinin aktif olmasi ile alabiliyoruz..Zaten gidip ethernet kartina bakarsak internet ayarlarindan , renginin gri oldugunu goruruz
  !DenetimMasasi-Ag ve Internet- Ethernet karti gri ise ssaga tiklariz etkinlestir deriz ve ethernet kartini aktiflestiririz

  !Ethernet karti tanimlaniyor.... tanimlanamayan ag  gibi seyler gorursek gidip hemen ipconfig i kontrol ederiz ve orda 169.254.147.161 ip sini goruyoruz yani APIPA yani pc herhangi bir dhcp(modem-router) servisi bulup ondan ip almaya calismis ama bulamamis.. ve ne yapmis APIPA-BILGISAYAR KENDI KENDISINE IP VERMIS

  !EN SON ETHERNET KART TESTI  YAPILABILIR 127 ILE BASLAYAN 127.0.0.1 IP ADRESI BIZIM PC MIZIN ETHERNET KARTIMIZI TEMSIL EDER...PING ILE KENDI ETHERNET KARTIMZI YANI KENDI LOKAL PC MIZIN IP ADRESI TEST EDILEBILIR 
  
  !HATIRLAYACAK OLURSAK
  A SINIFI IP LER=>0-127 ARASI IDI 127 ILE BASLAYAN IP LER KULLANILAMAZ TEST AMACLIDIR.. 
  B SINIFI IP LER=> 128-191 
  C SINIFI IP LER=> 192-223 
  D SINIFI IP LER=> 224-239 
  E SINIFI IP LER=>240-255

  !SANAL VE GERCEK BILGISAYARLARIMIZ ARASINDAKI ILETISIM 
  KENDI PC MIZE IPCONFIG YAZARSAK BIRKAC TANE IP ADRESI GELEBILIR BUNUN NEDENI NEDIR BIZDE DEMEKKI BIRDEN FAZLA EHTERNET KARTI VAR 

  1-ETHERNET(KABLOLUDUR BUNU ICON DAN ANLARIZ)
  2-WIFI (KABLOSUZDUR BUNU DA WIFI ISMINDEN ANLARIZ)
  3-ETHERNET 2(VIRTUALBOX HOST-ONLY NETWORK)(BU SANAL PC LERLE GECEK PC NIN ILETIISM KURABILMESI ICIN, ORTAMDA SANAL BIR EHTERNET KARTIDIR VE VIRTUALBOX KURDUGUMUZ ZAMAN GORURUZ) 

  Gercek bilgsiayarimizin ip adresini gormek icin gelirsek
  ipconfig yazinca karsimiza gelen ciktiyi inceleyecek olursak 

  Tunel adapter local Area connection ..Tunel ile geliyorsa bu virtual ethernet kartidir
!IP mizi bulmak icn nerye bakariz, internete biz eger wifi  uzerinden baglanmis isek wifi basliginin altindaki ip ye bakariz ama kablolu ethernet uzerinden baglandi isek o zaman da ehternet basligina bakariz...burdan hangisi uzerinden baglandigmzi da internet ayarlarinda gidip kontrollpanel-network-internet-internet connections altinda gorebilriz
  Wireless LAN adapter Wi-Fi:
  ALTINDA ip adresini gorebilriz

  !Link-local IPv6 Address .....  : fe80::79b6:45f4:f117:2e51%10(bu kullanilmiyor su an)
  !ipv4 Address: 172.29.29.102
  SubnetMask 255 255 255.0
  Default Gateway  172.29.29.1(bu eger internete bagli isek gelir, internete giris kapsidir)(Bu adres pc mizin internete cikmak icin kullandigi, ip adresidir, yani modem-router a ulasmak icin kullandigi ip adresini tasvir ediyor, aslinda modemin lokal agdaki adresidir... diyebiliriz..bu adres uzerinden modem e ulasir ve modem NAT islemi yaparak internete cikis ip sine cevirir)
    
  !yapilmasi gereken sey adem ve zeynep pc sinden bu ipv4 Addressine( 172.29.29.102) ping atmak:
  !ping atmadan once bu ip adresi B sinifi bir ip adresi ve dikkkat edlim...B sinifi ip lerde network kismi ilk 2 oktet ti ve pc lerin lokal areal network baglantisi icin, birbirlerini tanimalari icin ilk 2 oktet in esit olmasi gerekirdi, o zaman biz adem,zeynep pc sinin ip adreslerini ona gore ayarlamamaiz gerekir, B sinifi bir ip  ve network id leri ayni olan 172.29.0.0 network id 
  Adempc sindene 172.29.29.103 olaarak atadik ve SUBNET mask biz tab a basinca bu B snifi bir ip oldugu icin 255.255.0.0 olarak subnetmask in atamasini yapiyor normalde..ama biz yine de subnetmask i bir onceki 192.168.1.100 den kalan C sinifi ip adresi gibi biraktik.. ve de ping atiyoruz adem virtual pc sinden gercek pc mize

  ping 172.29.29.102 
  Request timed out. geliyor sonuc 
  !Bu durumda 
  !1-Gercek pc nin network-firewall ayarlarinda yukarda gosterdigimz ayarlarin duzenlenmesi, disardan gelen ip lerin istek atmasi izin verilmesi
 !Virtual pc lerin settingslerinde network de host-only adapter degil, bridge adapter secilmelidir cunku host-only adapter ile sadece virtual pc ler kendi aralarinda gorusebilirler. Ama biz virtual-pc yi biz bridge adapter secersek o zaman virtual pc ler gercek pc gibi davranarak eger ortamda bir modem var ise o modem den ipalirlar...
 !Biz adem pc sini yi bridge adapter yapmamiza ragmen, gidip ip adresini ipconfig den kontrol edince bizim atadigmz manuel ip adresini goruyoruz yine, modem den atanan ip degil neden cunku...biz ip yi static yaptik ve manuel atadik, bundan dolayi da ilk once adem inpc sini yine ip yi atadimgz yerde  automatik e almaliyiz ve de gitsin modem den ip adresi alsin, tabki burda modem e eger baglatnisi var ise o zaman ip adresi alabilir...yani daha dogrusu wifi-modem inin DHCP servisi atar ip yi, ya da kablolu baglatni ise orda da ethernet DHCP SERVISI ip yi atar, kablolu baglanti gerceklestiginde.Eger hicbir DHCP servisi ile baglnti kuramazsa o zamanda APIPA-Pc nin kendisi kendisine gecici otomatik bir ip adres atmasi yapar(169.254.x.x)
  Bunu yapinca ademin pc den gercek pc ye ping atabildik ve sonuc alabildik 
  !VIRTUAL BOX INTERNET BAGLANTI COZUMU!!!!!!!!!!!!
  !Virtual box daki internet baglanti sorunu cozumu...Virtual box uzerinden Adem pc sinin settings lerine gidersek orda  Atached to Bridget Adapter yaptiktan sonra, Advanced da Promiscuous Mode ise Allow All yapmamiz gerekiyor
  !Bunlari yapmamiza ragmen internete yine de baglanmiyor ve modemin DHCP servisinden ip adresi alamiyorsa biz automatik yapmamiza ragmen o zaman bu durumlarda, biz ip adresini elle atayacagiz, neye gore tabi ki gercek pc mizin ip sine bakarak ayni network id si olacak sekilde... 
  Gercek pc mizin ip adresi: 172.29.29.102 biz adem pc:172.29.29.103 yaptiktan sonra subnetmask i da gercek pc nin ki gibi 255.255.255.0 yapariz ardaindan da Default Gateaway i de yine gercek pc nin ki ne ise aynisini veririz neden cunku bu ne idi iste bu modem in lokal ip si idi hatirlayalim...internete baglanilmasi icin gerekli idi ayrica yine gercek pc nin ayarlarindan orda Dns1,Dns2 degerlerini de alip yine adem pc sinde manuel olarak ayni dns1,dns2 degerlerini gireriz ve bu sekilde internet baglantisi sorunu cozulmus olacaktir 
  BU BIR COZUM YOLU OLABILIR AMA BIZ MANTIK OLARAK VIRTUAL BOX SETTINGS AYARLARI YAPTIKTAN SONRA IP ADRESI OTOTMATIK ATA DIYE AYAR YAPARIZ SORNA WIFIMODEM I UZERINDEN IP SI OTOMATIK OLARAK ATANACAKTIR
  !Otomatik olarak ip atamasin i ayarladiktan sonra adem pc si wifiye baglandiginda modem adem pc sine 
  ip,subnetmask,default gateway adreslerinin hepsinin atamasini yapacaktir ve ip yi de gercek pc mizin ip si ile ayni network de ve gercek pc ip sinin devami olarak atamasini bekliyoruz... ve sonra da artik adem-zeynep pc sinden gercekpc ye baglanti gerceklestirebiliriz

  !Zeynep pc yi ise 172.29.1.10 ip sini atadik B sinifi oldugu icn ilk 2 oktet i network idi ve bilgisayarlarin baglanti kurabilmeleri icin network id leri ayni olmasi gerekiyrdu B sinif ip lerde ve subnetmask icin ise tab a basark 255.255.0.0 olustrdu kendisi.. ve de bu ayari yaparak istek gonderdik gercek pc mize zeynep virtual pc sinden ve sonuc
  ping 172.29.29.102 
  Request timed out
  !NEDENINI BULDUM CUNKU SUBNETMASK ILE BIZ SUNU ANLARIZ ORNEGIN IP:172.29.29.102 SUBNETMASK 255.255.255.0 BU BIZIM INTERNETE BAGLI GERCEK PC MIZI IPCONFIG DEN BAKINCA GELEN IP-SUBNETMASK INFOSU AYRICA DA DEFAULT GATEWAY:172.29.29.1 BURDAN NE ANLIYRUZ BU EVET B CLASS BIR IP ADRESI ANCAK DHCP SERVISI IP-SUBNETMASK-DEFAULTGATEWAY VERIRKEN SUBNETMASK 255.255.255.0 ILE SUNU DIYOR SENIN IP ADRESININ 172.29.29 KISMI SABIT OLACAK SEN, 4.OKTETI DEGISTIREREK AYNI NETWORK DE IP ADRESI ATAYABILIRSINL... KI BUNU ZATEN MODEMIN LOKAL IP SI OLAN DEFULTGATEWAY DEN DE ANLIYROUZ...DEFAULT-GATEWAY:172.29.29.1  
  
  SIMDI DE GERCEK PC MIZDEN VIRTUAL ADEM-ZEYNEP PC SINE BAGLNMAYA CALISALIM BAGLANTININ GERCEKLESTIGINI ASAGIDAKI GIBI GOREBILIRIZ

  C:\Users\ae_netsense.no>ping 172.29.29.103

Pinging 172.29.29.103 with 32 bytes of data:
Reply from 172.29.29.103: bytes=32 time=95ms TTL=128
Reply from 172.29.29.103: bytes=32 time=2ms TTL=128
Reply from 172.29.29.103: bytes=32 time=3ms TTL=128
Reply from 172.29.29.103: bytes=32 time=2ms TTL=128

Ping statistics for 172.29.29.103:
    Packets: Sent = 4, Received = 4, Lost = 0 (0% loss),
Approximate round trip times in milli-seconds:
    Minimum = 2ms, Maximum = 95ms, Average = 25ms

C:\Users\ae_netsense.no>ping 172.29.29.104

Pinging 172.29.29.104 with 32 bytes of data:
Reply from 172.29.29.104: bytes=32 time=70ms TTL=128
Reply from 172.29.29.104: bytes=32 time=1ms TTL=128
Reply from 172.29.29.104: bytes=32 time=2ms TTL=128
Reply from 172.29.29.104: bytes=32 time=2ms TTL=128

Ping statistics for 172.29.29.104:
    Packets: Sent = 4, Received = 4, Lost = 0 (0% loss),
Approximate round trip times in milli-seconds:
    Minimum = 1ms, Maximum = 70ms, Average = 18ms

C:\Users\ae_netsense.no>

!DHCPS SERVISI -  MODEMLE ILETISIM KURMAK...-MODEM BAGLANTI SORUNU VE COZUMU
Biz bir bilgisayarda ip mizi ogrenirken ipconfig yazarak sadece kendi ip sini degil modem in ip sini de Default gateway e atnan deger den ogrenebilir
    ipconfig

   Connection-specific DNS Suffix  . :
   Link-local IPv6 Address . . . . . : fe80::2543:8bf9:3ccc:7dc%8
   IPv4 Address. . . . . . . . . . . : 172.29.29.94
   Subnet Mask . . . . . . . . . . . : 255.255.255.0
   Default Gateway . . . . . . . . . : 172.29.29.1

  Bu bilgiye bakarak anlamamiz gerkenler sunlardir 
  1-Benm network id adresim: (default gateway adresine bakarak) 172.29.29.0 adresidir, neden bu onemli cunku eger ip adresi tanimlamasi yapacaksam o zaman iste bu network e gore yapmamiz gerekir...172.29.29.0 - 172.29.29.1, 172.29.29.2,... 172.29.29.254 e kadar ip tanimlamasi yapabilirz ayni networkde 
  2-

 !Hemen real hayattan ornek le daha da netlestirelim 
 Class - lokal areal network icin atanabilecek ip adresleri siniflarina gore bu sekilde idi, YANI ICERDE KULLANILABILECEK IP LER
 A    10.0.0.0
 B    172.16.0.0-172.32.0.0
 C    192.168.0.0

 ISP(INTERNET SERVICE PROVIDER)TELIA-TELENOR=>MODEM E INTERNETI GONDERIR 
 MODEM(72.141.137.29) TELIA MODEM IN DIS BACAGINA YANI INTERNETE CIKACAGI KISMINA BIR IP ADRESI ATAMASI YAPIYOR VE O MODEM E BAGLANAN TUM CIHAZLAR, PC,MOBILE,TABLET,SMARTPHONE,VSS HEPSI internete baglanirken modem in ip si ile baglanirlarki, bu modem ip sinden internete baglanan cihazlar tarafindan herhangi bir illegal islem yapilma durumunda, telia bu islemin bu modem e verilen ip den internete cikan bir cihazin bunu yaptigini bilir ve hemen adresi tespit edebilir..
 !MODEM I PC LER NEDEN GOREMEYEBILIR!!!!
 !ornegin 3 tane pc miz var ve 1 modemimiz var modemimizin ic-lokal-privat-ipsi:172.29.29.102 - disabakan-public ip si:72.141.137.29
 !Ama biz geldik pc1:10.10.10.100 pc2:10.10.10.101 pc3:10.10.10.102 ip atamalarini yaparsak tamam bu 3 pc kendi aralarinda iletisime gecebilir ama internete baglanabilmek icin default gateway leri yani modem in lokal ip adresi ile ayni network de olmak zorundadirlar...ISTE KIMI ZAMAN INTERNET PROBLEMINDEN DOLAYI EGER BAGLANTI SORUNU YASANIYORSA O ZAMAN MODEM IN LOKAL IP SI KONTROL EDILMELI VE PC LERIN DEFAULT GATEWAY LERI MODEM IN LOKAL IP SI ILE AYNI MI VE DE BILGSAYARLARIN IP ADRESLERI DE MODEM IN LOKAL IP ADRESI ILE AYNI NETWORKDE MI.....COOK ONEMLI BIR BILGIDIR

 !INTERNET BAGLANTISINN GERCEKLESEBILMESI ICIN....
 !COOOOOK ONEMLI.... TUM CIHAZLARIN INTERNET BAGLANTISININ GERCKLESEBILMESI ICIN MODEM I TANIYABILMELERI ICIN MODEM ILE AYNI NETWORK DE OLMALARI GEREKIR.....MODEM IN IP ADRESI YANI INTERNET BAGLI OLDUGUNDA IPCONFIG ILE GELEN DEFAULT GATEWAY DEGERI MODEM IN LOKAL IP ADRESI, ILE AYNI NETWORK DE OLMASI GEREKIYOR MODEM E BAGLANACAK PC LERIN DOLAYISI ILE BUU COOOK ONEMLIDIR
 CIHAZLAR A MANEL IP ATARKEN MODEM ILE ILETISIM KURACAK VE AYNI NETWORK DE IP LER ATMAK GEREKLIDIR VE BU SEKILDE CIHAZLAR MODEM I TANIDIKTAN SONRA MODEM CIHAZLARIN MAC ADRESLERI UZERINDEN CIHAZLARI TANIR VE LOKAL IP ADRESINI-PRIVATE-ICERDEKI,   PUBLIC-INTERNETE CIKMA-DISARI IP ADRESINE DONSTURUR(NAT) VE TUM KENDISI ILE LOKAL DDE AYNI NETWORK DE BULUNAN KENDISINE BAGLANABILEN CIHAZLARI INTERNETE CIKARACAKTIR 

LOKAL-ipsi:172.29.29.102 OLAN MODEM E KARSILIK pc lere eger pc1:172.29.28.1 pc1:172.29.28.2 verirsek yine modem e baglanamazlar cunku ayni sinifta olmalarna ragmen, ayni network de degillerdir...BUNLARI KARISTIRMAAYLIM...COOOK ONEMLIDIR!!!

!PC LERE AYNI NETWORK DEKI IP ADRESLER ATADIKTAN VE INTERNET BAGLANTISI GERCEKLESTIKTEN SONRA ORNEGIN PC1 INTERNTETTE GOOGLE.COM YAZIP ENTERE BASARAK A ISTEK GONDERDIGINDE , MODEM BU ISTEGI PC NIN LOKAL IP SI UZERINDEN ALIR VE MODEM KENDI LOKAL IP ADRESI YANI PCLERIN DEFAULTGATEWAY ADRESINI PRIVATE-IP(172.29.29.102) YI PUBLIC, INTERNETE CIKABILECEK IP(79.160.72.2) ADRESINE CEVIREREK TUM CIHAZLARI BU PUBLIC IP ADRESI UZERINDEN INTERNETE CIKARACAKTIR
 

 DNS SERVISINI ANLAMAK
 ping ile biz sadece ip adreslerine degil domain adreslerine de request gonderebiliriz..ki zaten 
 
 ping www.google.com
C:\Users\ae_netsense.no>ping www.google.com

Pinging www.google.com [142.250.74.100] with 32 bytes of data:
Reply from 142.250.74.100: bytes=32 time=12ms TTL=58
Reply from 142.250.74.100: bytes=32 time=14ms TTL=58
Reply from 142.250.74.100: bytes=32 time=12ms TTL=58
Reply from 142.250.74.100: bytes=32 time=12ms TTL=58

Ping statistics for 142.250.74.100:
    Packets: Sent = 4, Received = 4, Lost = 0 (0% loss),
Approximate round trip times in milli-seconds:
    Minimum = 12ms, Maximum = 14ms, Average = 12ms

    !Dikkat edelim google.com a ping ile request gonderdik ve bu google.com hizmet veren serverin aktif olup olmadignin kontrol etmek icin ve de ayni zamanda biz connection kurabiliyor muyuz onu gorebilmek icin ve bize google.com un ip adresini de veriyor burda dikkat edlim
    zaten https:://www.google.com domain adresidir ve DNS serverinde bu domain adresi google.com un ip sine karsilik geldigi icin biz ping ile sorgulayinca o zaten once DNS SERVER A GIDER VE ORDA 
    !DEMEKKI WEBSITELERINE PING ATARAK WEBSITELERININ IP ADRESLERINI OGRENEBILIYORUZ
    !ht123.no olan kendi serverimizin domain ine ping atinca kendi serverimizin ip adresini almis oluruz
C:\Users\ae_netsense.no>ping ht123.no

Pinging ht123.no [79.160.72.43] with 32 bytes of data:
Reply from 79.160.72.43: bytes=32 time<1ms TTL=64
Reply from 79.160.72.43: bytes=32 time<1ms TTL=64
Reply from 79.160.72.43: bytes=32 time<1ms TTL=64
Reply from 79.160.72.43: bytes=32 time=1ms TTL=64

Ping statistics for 79.160.72.43:
    Packets: Sent = 4, Received = 4, Lost = 0 (0% loss),
Approximate round trip times in milli-seconds:
    Minimum = 0ms, Maximum = 1ms, Average = 0ms

!ping ataklari
!Bazi sitelere ping atinca request timed out gelir bunun sebebi o siteler-serverlar ping e kapatmis lar istekleri firewall uzerinden, firewall a ping istekleri gelirse ona cevap verme demis....
!ping ataklarina maruz kalmamak icinde yapabilirler ping -t 142.250.74.100 dedigmzde biz durduruna kadar surekli olarak bu ip adresine istek gonderir duru ve bunu 1000 pc de ayni anda yaparsak ne yapar o zaman da gidip surekli olarak bu ip adresli server i mesgul ederk ona ping ataklari gerceklestirir

!ip adress domain..
Biz browser a gidip www.google.com yerine ping ile ogrendigmz google in ip adresini girdigmz zamanda (142.250.74.100) gorecegiz ki google sayfasina gidebilecegiz
DNS IP ADRESLERINI DOMAINLERE, DOMAIN ADRESLERINI IP ADRESLERINE CEVIRIYOR...BUNU BILELIM...
BILGISAYARLAR IP ADRESLERI UZERINDEN HABERLESEBILIRLER YANI SERVER LARDA BIR PC DIR ZATEN...DOLAYISI ILE DE TUM HIZMET VEREN WEBSITELERI ESASINDA BIR SERVER DAN BIR PC DEN HIZMET SUNARLAR VE IPI ADRESLERI UZERINDEN SUNARLAR VE DNS BIZ WWW.GOOGLE.COM YAZDIGMZ DA ONCE DNS SERVER A GIDER DNS SERVER WWW.GOOGLE.COM A KARSILK GELEN IP YI BULUR VE O IP LI SERVER A YONLENDIRIR ISTEGI VE BU SEKILDE GONDERILMIS OLAN ISTEK SERVER A GITMIS OLUR VE DE SERVER RESPONSE VEREREK BIZE GOOGLE UN SAYFASININ ONUMUZE GELMESINI SAGLAR
!YANI KISACA IP-ADDRESS COZUMLEMESI YAPAR DNS, DOMAIN(ISIM) LERI IP ADRESLERINE, IP ADRESLERINI DE DOMAINLERE CEVRILMESINE YARAR

!windows ta
!ipconfig - ipconfig /all ile daha detayli ip bilgisi elde edebiliriz

!ipconfig /all
Ethernet adapter Ethernet:

   Connection-specific DNS Suffix  . :
   Description . . . . . . . . . . . : Intel(R) Ethernet Connection (4) I219-V
   Physical Address. . . . . . . . . : E4-E7-49-9E-AF-BD
   DHCP Enabled. . . . . . . . . . . : Yes
   Autoconfiguration Enabled . . . . : Yes
   Link-local IPv6 Address . . . . . : fe80::2543:8bf9:3ccc:7dc%8(Preferred)
   IPv4 Address. . . . . . . . . . . : 172.29.29.94(Preferred)
   Subnet Mask . . . . . . . . . . . : 255.255.255.0
   Lease Obtained. . . . . . . . . . : fredag 5. april 2024 08:40:23
   Lease Expires . . . . . . . . . . : lørdag 6. april 2024 08:40:19
   Default Gateway . . . . . . . . . : 172.29.29.1
   DHCP Server . . . . . . . . . . . : 172.29.29.1
   DHCPv6 IAID . . . . . . . . . . . : 115664713
   DHCPv6 Client DUID. . . . . . . . : 00-01-00-01-2A-E3-5C-02-E4-E7-49-9E-AF-BD
   DNS Servers . . . . . . . . . . . : 172.16.3.11
                                       172.16.3.12
   NetBIOS over Tcpip. . . . . . . . : Enabled

!Ilk olarak default gateway e bakacak olursak Default Gateway . . . . . . . . . : 172.29.29.1  bu modem in lokal ip sidir ve buna bakarak biz direk network id mizin 172.29.29.0 oldugunu anlariz 

!DNS SUNUCU BILGLERIMIZE BAKALIM 

DNS Servers . . . . . . . . . . . : 172.16.3.11
                                    172.16.3.12
YANI DNS SUNUCUSU-SERVER ININ IP ADRESI DE BUDUR BU COK KRITIKTIR COK ONEMLIDIR...DOMAIN -IP COZUMLEME ISLEMINI YAPAN DNS SERVER IP SI DIR BU
YANI DNS SERVER IP ADRESI BURDA , VE BURDAKI DNS SERVER IP UZERINDEN , BIZ HERHANGI BIR WEBSITESI ISMINI GOOGLE -CHROME DA ARADGIMZDA REQUEST GONDERDIMGZ DE ILK ONCE DEVREYE DNS SERVER GIRER DNS SERVER IP SININ BILGISAYARIMIZ MODEM DEN MODEM E BAGLANDIGINDA ALIR VE ILK OLARAK DNS SERVER A GIDER ISTEGIMZ DNS SERVER IP UZERNDEN DNS SERVER BULUNUR SONRA DA ORDA ORNEGIN WWW.GOOGLE.COM DOMAIN NAME ININ HANGI IP E KARSILK GELDIGNI BULUNR VE ORDAN DA BULUNAN WWW.GOOGLE.COM UN IP ADRESINE YONLENDIRIR

!AMA BU NORMALDE DNS SERVER IP ADRESI DE MODEM IN IP ADRESI ILE AYNI OLUYOR, KI MODEM BU ISLEMMI BIZIM ICIN GERCEKLESTIRMIS OLUR....

!KI BIZ KENDIMIZ IP ADRESININ MANUEL OLARAK GIRERKEN BIZ DEN 
!IP,SUBNETMASK, DEFAULT GATEWAY, PREFERRED DNS SERVER(FORETRUKKET DNS-SERVER), ALTERNATE(ALTERNATIV) DNS SERVER

! EGER IP ADRESINI ELLE VERECEKSEK KENDIMIZ MANUEL OLARAK O ZAMAN.... INTERNETE BAGLANIRKEN DIKKKKAT EDECEGIMMZ NOKTALAR 
1-IP ADRESIMIZ MODEM ILE AYNI NETWORK DE OLMALIDIR
2- SUBNETMASK TI TAB A BASINCA KENDISI VERIYOR 
3-DEFAULT GATEWAY MODEM IN LOKAL IP SI OLACAK INTERNETE BIZI CIKARABILMESI IICIN
4-DNS SERVER- MODEM BENI INTERNETE CIKARDIKTAN SONRA, INTERNETTE GEZINMEMI SAGLAYACAK OLAN IP ADRESI VE BU DA EGER AYRI BIR MODEM IP SI BULAMIYORSAK O ZAMAN MODEM IN IP SINI YINE DNS SERVERIP YE GIRERIZ KI, BIZIM INTERNETTE GEZINMEMIZI VE IP-DOMAIN COZUMLENMESINI SAGLASIN

! DHCP 
Biz ip leri manuel oalrak vermek istemezsek zaten pc miz ortama ciktiginda acildiginda hemen ip bilgilerini alabilecek bir DHCP SERVISI YANI modem arayacaktir ve BU SERVISI BULDUGUNDA TUM IP-SUBNETMASK-DEFAULT GATEWAY - DNS SERVER BILGILERINI ALACAKTIR
!DHCP SERVISI MODEMLERIN ICINDE BULUNUR
!HEMEN MODEMIMIZIN IP SINI BULALIM NASIL BULUYORDUK IPCONFIG /all veya ipconfig DEFAULT GATEWAY IP ADRESI MODEMIMIZIN LOKAL IP ADRESIDIR 


Ethernet adapter Ethernet:

   Connection-specific DNS Suffix  . :
   Link-local IPv6 Address . . . . . : fe80::2543:8bf9:3ccc:7dc%8
   IPv4 Address. . . . . . . . . . . : 172.29.29.94
   Subnet Mask . . . . . . . . . . . : 255.255.255.0
   Default Gateway . . . . . . . . . : 172.29.29.1

   Modem ip adresimz budur: Default Gateway . . . . . . . . . : 172.29.29.1
   !BU BILGIYE DAYANARAK BIZ NETWORK ID SINI DE BULABILIRIZ 172.29.29.0 DIR NETWORK ID SI
   !GENELLIKLE NETWORK ID SININ ILK IP SI MODEM E VERILIR ONDAN DOLAYI DA MODEM 172.29.29.1 BU SEKILDE GELIR BIZE...

   !MODEMIMIZIN ARAYUZUNE NASIL ERIRIZI MODEMIMIZIN IP ADRESINI BROWSER A GIREREK MODEMIN ARA YUZUNE ULASIRIZ
   172.29.29.1 BUNU GIRDIK KULLANICI ADI VE SIFFRE GELECKTIR BUNLARI MODEM IN KITAPCIGINDAN EDINEBILIRIZ, LOGIN OLURUZ
   MENU DE DOLASAARK DHCP NIN NERDE OLDUGUNU BULABILIRIZ 
   DHCP IP ATAMASI YAPIYORDU , IP DAGITIMI YAPIYORDU UNUTMAYALIM 
   !asagida veirlen adres bilgileri ornek vermek icindir
   DHCP START IP  192.168.0.10  
   DHCP END IP  192.168.0.200  GORURSEK ANLARIZ KI BU DHCP IP LERI 192.168.0.10  DAN BASLAYARAK 192.168.0.200 A KADAR DAGITIYOR  - 190 TANE IP DAGITIYOR---AMA BUNLAR DEGISTIRILEBILIR...
   KENDI IP ADRESINI DE PRIVATE LAN IP ADDRESS:192.168.0.1  ve Subnetmask 255.255.255.0 ORNEGI GIBI GOREBILIRIZ

   !modem de verilmis olan network id sini degistirmemeliiyiz problemler yasaabiliriz buna dikkat edelim!!!
   !Ama modem de hangi araliklarda ip dagitacagini degistirebiliyorduk onu da  diyelim ki 
   DHCP START IP  192.168.0.10  
   DHCP END IP  192.168.0.200 dan 
   DHCP START IP  192.168.0.100  
   DHCP END IP  192.168.0.200 ' e degistirip modem ara yuzunden ciktik mesela sonra ne yapariz  

   ipconfig ile kendi ip mizi buluruz ve 
   orneign kendi ipmiz 192.168.0.11 olsun 

   ipconfig /release  diyerek ip yi birak deriz ve karsimiza hicbir ip adresi getirmez cunku ip adresimizi birakmis oldu 
   ipconfig /renew diyerek de ip adresimzi yenile diyoruz yeniden ip adresi veriyor 

   !Bu islemleri yapmadan once, ip verme islemini manuel den otomatige cevirmemiz gerekiyor yoksa kendisi ip atamaz, venormalde de bizim ipconif relase-ipconfig renew demesek de bilgisayar kapatip actimgzde veya yeniden baslattigimizda otomatk olarak yeni pc ip alacaktir zaten
   !Ve aslinda eski ip yi ceek, yeni bir ip ver demis olduk 
   
   !YANI KISACASI DHCP NIN IP ARALAGINDA YAPTIGMZ DEGISIKLKIN PC LERI ACIP KAPATINCA YA DA IPCONFIG RELEASE-IPCONFIG RENEW YAPARAK GUNCELLENE IP ARALGININ NASIL PC LERE VERILDGINI GOREBILIRIZ

   !ARTIK PC LERE IP ATAMALRI YAPARAK BIRBIRLERI ILE GORUSEBILMELERINI SAGLAYABILIYORUZ
   
   !UZAK MASAUSTU BAGLANTISI GERCEKLESTIRMEK 
  
   Baglanmak istedgimz pc nin ip adresini biliyorsak, o pc ye uzaktan baglanabiliriz

   1.Baglanilmak istenen pc de uzak masaustu baglanti ayari etkin hale getirilmelidir, uzak baglanti ayarlari-izin ver(tillat eksterne tilkoblinger til denne datamaskinen(bunu arama cubugunda arayarak bulabiliriz))
   2-Ilk yaparken, once ping ile baglanilmak istene pc ye baglanti var mi ping 172.29.29.103
   3-Uzak masaustu baglantiya gideriz..Baslattan veya windows-r(mstsc yaz) (Tilkobling til ekstern skrivebord)
   4-Baglanmak istenilen pc nin ip adresi yazilir ve karsimiza brukernavn-password istegi gelir..ki baglanilmak istenen pc de var olan bir kullanici adi ve password girilmesi beklenir, oraya kullanici adi Zeynep deriz kullanici adina gidip bakalim o pc de pc altina users altinda bulunan klasor isimleri kullanici adi dir...password de pc acilirken istenen paswworddur...Bu bilgiler de girilince artik baglanti gerceklesecektir ve biz Zeynebin pc sine baglandigmz icin bizi login yaparken Zeynebin kendsini otomatik olarak logout olacaktir
   5-Uzak pc den baglandigmz bilgisyar in ip adresi baglandimgz pc de ekranin ust tarafinda gozukur ona tiklarsak pc mizin ekraninda 
   6-Baglandgmiz uzak pc nin kullanicis kendi pc sine girerse bizim uzaktan baglanti oturumumuz sonlanacaktir, yada kendimz de oturumun x isaretine basarsak uzak-pc baglnti oturumunu sonlandirmis oluruz
   7.Dosya tranferleri nasil uzak pc den yapabiliriz, oncelikle bizim yereldiskleri de paylasmamiz gerekiyor pc ler arasinda, uzak baglanti yaptgimz pc nin C-D yerel diskini de pc mizde gorursek o zaman uzak pc nin dosyalarini kendi pc me alabilirm
   8.Uzak pc baglantisini gerceklestirmeden uzakpc baglantisi icin gelen ekranda (Tilkobling til ekstern skrivebord) sol altta vis alternativer-secenekelri goster e tiklariz, sonra menu elemanlarindan lokale ressurser-yerel kaynaklar, ordan da Mer(Daha fazla bolumu), Suruculer(Statsjoner) + ya  tiklariz ve ordan da C,D ne varsa seceriz OK DERIZ...SONRA UZAK PC YE BAGLANIRIZ VE ARDINDAN DA, PC YE C DISKININ OLDUGU EYRE GIDINCE ARTIK UZAK PC NIN DE DISKININ ORAYA GELDIGNI GORURUZ VE ORDAN UZAK MASAUSTU DISKINE GIRIP ISTEDGIMZ HERHANGI BIR DOSYAYI COPY YAPIP KENDI MASUSTUMUJZE YAPISTIRABILIRIZ
  
!SIMDI BU BAGLANTI LOCAL DE YANI PRIVATE IP LER ICINDI YANI INTERNETE CIKMAMIS, PUBLIC OLMAYAN IP LER ARASINDA PC LER ARASINDAKI BAGLANTI IDI BU BAGLANTIMZ, SIMDI DE PUBLIC IP LI PC LERE, YANI INTERNETE CIMIS PC LERE BAGLANACAGIZ 

  BIZ IP LERI MANUEL OLARAK VERMISTIK AMA ZATEN BIZ MANUEL BILEREK VERDIK NORMALDE MODEM DEN ALIYORLAR IP LERI , MODEM VERIYOR IP LERI.... 
   
  !SIMDI DE SUNU YAPALIM... BIZ KENDI EVIMIZDEN, BASKA SEHIR DE VEYA ULKEDEKI BIR PC YE NASIL BAGLANIRIZ!!!!!!!!!
  SIMDI BIZ NORMALDE BAGLANIRKEN WINDOS-R YE MSTSC YAZIP UZAK MASAUSTU BAGLANTISI GERCKEKLESTIRIDIGMZDE GIRILE IP ADRESINI VERDIGMZDE BIZ IP ADRESI OLARAK PRIVATE IP ADRESI VERDIGMIZDE ORNEGIN 172.29.29.103 O ZAMAN BU IP ADRESINI ICERDE, LOKALDE ARAYACAKTIR, PRIVATE IP ADRESI OLDUGU ICN, BUNU GIDIP DE DISARDA, YANI INTERNETE BAGLANAN INTERNETI OLAN PC LERDE ARAMAZ....CUNKU IP OLARAK BIZ PRIVATE --ICERDE KULLANILAN IP YI ARADIK, 
  
  !ASAGIDA GORDUGMZ IP ADRESLERI ICERDE KULLANILAN PRIVATE IP ADRESLERIDIR...MODEM TARAFINDAN ATANIRLAR YA DA KENDIMZ MANUEL DE ATAYABILIRIZ, ORTAM DA MODEM YOKSA NE OLUYORDU PC VEYA CIHAZ KENDISI GECICI OLARAK APIPA ATIYRDU(Autoconfiguration IPv4 169.254.134.20 169.254 ILE BASLADIGINDAN ANLARIZ ATANAN IP NIN APIPA OLDUGUNU )
  !192.168.0.1, 192.168.0.2,...  
  !172.16.0.1, 172.16.0.2,172.16.0.3...172.32.0.1, 172.32.0.2..., 10.0.0.1,10.0.0.2...  

  ONCELIKLE BULUNDUGMZ YERDE INTERNETE BAGLANDGIMIZ ANDA O ORTAMDA BULUNAN MODEM-DHCP SERVISI BIZE BIR LOKAL-PRIVATE IP ADRESI ATAMASI YAPAR VE DISARI CIKMAK ICIN YANI INTERNETE BAGLNMAK ICINDE PUBLIC MODEM IN KENDI IP ADRESINI KULLANABILECEGIMZI SOYLER PC YE...
  UZAK MASAUSTU BAGLANTISINI BIZ BULUNDUGUMZ YERDEN BASKA SEHIRDE BIR PC YE YAPARKENM, YANI ORNEGIN BIZ TATILE GITTIK ISPANYA YA VE ORDAN KENDI EVIMIZDEKI PC MIZE BAGLANMAMIZ GEREKTI...O ZAMAN ONCELIKLE KENDI EVIMIZIN MODEM-IP YANI DISARIYA CIKARKEN KULLANILAN PUBLIC IP SI NE ISE ONU KULLANARAK BAGLANMAYA CALISIRIZ KENDI PC MIZE...MODEM IN IP ADRESI DE INTERNET SERVIS SAGLAYCISI TARAFINDAN ATANIR KI ORNEGIN TELIA-TELENOR.. VE BU SERVIS SAGLAYICILAR DA EGER HERHANGI BIR BANKA VEYA WEBSITESINE KENDI VERDIGI IP UZERINDEN BIR YASAL OLMAYAN ISLEM YAPILMIS ISE O ADRESI BULUR VE ILGILI YERLERE BUNU ILETIR

  SIMDI BIZ AYNI CATININ ALTINDA IKEN, ICERDEYIZ OK ONDAN DOLAYI LOKAL IP LER ICIN AYRILMIS IP ADRESLERI UZERINDEN BAGLANTI GERCEKLESETIREBILIYORDUK, AMA BIZ UZAK BIR  YERDEN EVIMIZE BAGLANIRKEN ONCE BIZIM EVIMIZE BAGLNMAYA CALISIRKEN BIZ EVIN MODEM ININ IP ADRESI  UZERINDEN BAGLANMAYA CALISIRIZ VE BIZ BAGLANIRKEN EV KOMPLE BIR BINA OLARAK DUSUNELIM... BIZI MODEM KARSILAR DAHA EVE GIRMEDEN....VE BIZ O MODEM IN IP ADRESINI VERIRSEK MODEM E DIYORUZ KI BEN SANA BU IP DEN GELIYORUM... DER..ISTE BURDA MODEM ONCESINDEN DISARDAN MASAUSTU BAGLANTI ISTEGI GELIRSE ONU ICERDEKI PC LERDEN ORNEGIN BENIM PC ME YONLENDIR GIBI BIR AYARLAMA YAPMAMIZ GEREKIR...BUNUN ADI PORTFORWARDING..UZAK MASAUSTU BAGLANTI ICIN PORT FORWARDING(YONLENDIRME)..NORMALDE MODEM IN DISARDAN GELEN HER ISTEK ICIN BELIRLI KAPILARI VARDIR, BU KAPILARA PORT DIYORUZ..NORMALDE MODEM DE BINLERECE KAPI VARDIR, BIZIM BASVURAAGIMZ KAPI UZAK MASAUSTU BAGLANTI ISTEKLERINI KARSILAYAN KAPIDIR..YANI PORTTUR.. BU PORTTA 3389 NUMARALI PORT OLDUGUNU VARSAYALIM MESELA..TABI KI BU AYARLAMA NASIL GERCEKLESECEK, MODEM AAYARLARINDAN BU MODEM IP SINE 3389 PORT NUMARASI ILE GELEN ISTEKLERIN BENIM PC ME YONLENDIRILMESI GEREKTIGI AYARI YAPILMALIDIR..KI MODEM DE KENDINE GELEN BU ISTEGI N PORT NUMARASINDAN NEREYE GOTURMESI GEREKTIGINI BILSIN
  UZAK MASAUSTU BAGLANTILARI HER ZAMAN 3389 NO LU PORT U TIKLATIRLAR...
  !The port number 3389 is commonly used for the Remote Desktop Protocol (RDP), which allows users to connect to and control another computer remotely. This functionality is often used in various environments, including corporate networks, for remote administration, and for accessing systems across the internet or within private networks.

  BU KONUYU TAM OLARAK ANLAYALIM, MODEM DE BU AYARLAR YAPILMAZ ISE DISARDAN HICBIR MODEME REMOTE-CONNECTIN YAPAMAYIZ, CUNKU BU TEHLIKELIDIR...ANCAK KENDIMIZE AIT MODEM VE PC ICIN YAPABILIRIZ BOYLE SEYLERI
  MODEMDE AYAR OLARAK SUNU DEMEMIZ GEREKIYOR SANA ISTEK 3389 PORT NO ILE YAPILMIS ISE ONU SEN BENIM SU IP LI PC ME YONLENDIR DIYECEGIZ 

  !MODEMIMIIZE NASIL ERISIYORDUIK..HATIRLAYALIM...DEFAULT GATEWAY-VARSAYILAN AG GECIDI UZERINDEN ERISIYORDUK

  
Wireless LAN adapter Wi-Fi:

   Connection-specific DNS Suffix  . :
   Link-local IPv6 Address . . . . . : fe80::ffe0:e356:e935:e989%10
   IPv4 Address. . . . . . . . . . . : 172.29.29.83
   Subnet Mask . . . . . . . . . . . : 255.255.255.0
   !Default Gateway . . . . . . . . . : 172.29.29.1
    (!Default Gateway . . . . . . . . . : 172.29.29.1)ISTE BU ADRES MODEM IN IP ADRESIDIR, 
    BUNU ADRES CUBUGUNA YAZARAK MODEM E LOGIN OLUJRUZ SONRA DA MODEM DEN PORT YONLENDIRMESINI BULURUZ-PORT FORWARDING....
    UZAK MASAUSTU BAGLANTILARI TCP PROTOKOLUNU KULLANIR BUNU BILELIM
    PUBLIC PORT RANGE-PRIVATE PORT RANGE BUNLMARIN IKISI DE 3389 NO
    LOCAL IP ADRESS OLARAK DA HANGI PC YE YONLENDIRMEK ISTERSEK UZAK MASAUSTU BAGLANTI REQUESTINI ONU YAZARIZ...
    MODEM UZERIJDEN YINE HER TURLU REMOTE ADDRESI KABUL ET DE DIYEBILIRIZ YA DA SPESIFIK DIYEREK SADECE BELLI IP ADRESLERININ GONDERECEGI ISTEKLER KABUL EDILSIN DIYEBILIRIZ

    https://whatismyipaddress.com/
    ? 79.160.72.2 GENELLIKLE DISARI CIKARKEN KULLANILAN IP ADRESI MODEM IP ADRESININ(DEFAULT GATEWAY) IN 1 FAZLASIDIR
  
    !BU BILGI COOOOK ONEMLI BUNU BILELIMMM.SABIT IP ADRES UYELIMIGMZ YOK ISE IP MIZ GUN VE GUN DEGISECEKTIR...
  !MODEM LERRE INTERNET SERVIS SAGLAYICILAR TARAFINDAN VERILEN IP ADRESLERI KONUSUNDA DA SUNU BILMELIYIZ KI EGER BIZ OZELLIKLE PARA VERIP SABIT BIR IP ADRESI SATIN ALMAMIS ISEK, INTERNET SERVIS SAGLAYICIMIZ, MODEM E VERILEN IP ADRESINI GUNDEN GUNE DEGISTIRECEKTIR ONDAN DOLAYI ZATEN BIZ DISA BAKAN  IP ADRESIMIZI OGRENMEK ICIN WHAT IS MY IP ADRESS YAZARIZ INTERNETE VE ORDAN OGRENIRIZ PUBLIC-DISABAKAN, INTERNETE CIKARKEN KULLANDGIMZ IP ADRESIMIZI

  !NOT : UZAK MASAUSTU BAGLANTILARA SIFRE KONULMAMIS PC LERE GERCEKLESMIYOR BU WINDOWSUN BIR PRENSIBIDIR

  MODEM-POINTER-ROUTER...HEPSI AYNIDIR

  IP-MODEM-VS ILE HIC UGRASMADAN UZAK PC YE BAGLANMAK- TEAMVIEWER VEYA DIGER PROGRAMLARI KULLANARAK BAGLANABILMEK!!!!!!!!!!!

  !MAC ADRESLERI NEDIR NEDEN MAC ADRESLERINI BILMELIYIZ

  MODEM IN 1 TANE ICERIYE BAKAN BIR DE DISARIYA BAKAN KAPISID VARDIR... DOLAYISI ILE  
   Wireless LAN adapter Wi-Fi:

   Connection-specific DNS Suffix  . :
   Link-local IPv6 Address . . . . . : fe80::ffe0:e356:e935:e989%10
   IPv4 Address. . . . . . . . . . . : 172.29.29.83
   Subnet Mask . . . . . . . . . . . : 255.255.255.0
   Default Gateway . . . . . . . . . : 172.29.29.1 

   DEFAULT GATEWAY-DEFAULT GECIS KAPISI BU MODEM IN ICERIYE BAKAN IP ADRESIDIR...VE BU IP ADRESI SAYESINDE MODEM ORTAMDAKI CIHAZLAR KENDISINE INTERNETE BAGLANMAYA GELDIKLERINDE ONLARLI TANIR VE ONMLARI INTERNETE CIKARIR...NAT.... (NAT:Network Address Translation) ILE DONUSTURUR..
   WHAT IS MY IP DEDGIMZ DE ISE MODEM UZERINDEN INTERNETE CIKARKEN KULLANILAN PUBLIC IP ADRESI GELECEKTIR KARSIMIZA 
  https://whatismyipaddress.com/
    ? 79.160.72.2 GENELLIKLE DISARI CIKARKEN KULLANILAN IP ADRESI MODEM IP ADRESININ(DEFAULT GATEWAY) IN 1 FAZLASIDIR

  79.160.72.1 ISE MODE MIN DISA BASKAN IP ADRESIDIR...

!TEKRAR ICDERDEKI BIR PC NIN INTERNETE BAGLANIRKEN KI SERUVENINE BAKACAK OLURSAK!!!!!!!!!!!!!!!!
  User
  Connection-specific DNS Suffix  . :
   Link-local IPv6 Address . . . . . : fe80::ffe0:e356:e935:e989%10
   IPv4 Address. . . . . . . . . . . : 172.29.29.83
   Subnet Mask . . . . . . . . . . . : 255.255.255.0
   Default Gateway . . . . . . . . . : 172.29.29.1    ,   https://whatismyipaddress.com/
     79.160.72.2  , AND modem's ip adress:79.160.72.1   But what i don't understand modem has two different ip adresss or???????

ChatGPT
Yes, what you are observing are indeed two different types of IP addresses that your modem is using, and this is completely normal. Here’s a breakdown to help clarify how your modem can have multiple IP addresses:

Local/Private IP Address (172.29.29.83):
This is the IP address assigned to your computer within your local network. It’s in the range of IP addresses reserved for private networks (172.16.0.0 - 172.31.255.255 for Class B private addresses). This type of IP is used for communication within a local network and is not routable on the internet.
Modem’s Local IP Address (172.29.29.1):
This is typically the default gateway for your local network, which is the IP address of your router or modem. All devices on your local network send their requests to the internet through this IP. It acts as an intermediary, routing traffic between your local network and the internet.
Public/External IP Address (79.160.72.2):
This is the IP address assigned to your modem by your Internet Service Provider (ISP). It is used on the internet to ensure that data reaches your network from outside and vice versa. This is the IP address that websites and other online services see when you connect from your network.
ISP Modem’s IP Address (79.160.72.1):
This is likely the next hop or gateway IP address provided by your ISP, which is outside of your home network. It is the ISP’s router to which your modem connects. Data from your modem is sent to this IP next before it reaches the broader internet.
How These IPs Work Together:
Internal Communications: Devices within your home use the private IP addresses (like 172.29.29.83 and 172.29.29.1) to talk to each other and to the modem/router, which manages local network traffic.
External Communications: When data needs to go to the internet, it is directed from your device to the modem/router (172.29.29.1), which then sends it out via its public IP address (79.160.72.2). Incoming data from the internet follows this path in reverse.
Routing Between ISPs and Your Network: The ISP’s infrastructure uses its own IP addresses (like 79.160.72.1) to route the data through multiple nodes in their network until it reaches your modem and then your internal device.


!!!!!LOKAL DE KI PC LERIMIZ INTERNETE BAGLANIRKEN - DISARI CIKARKEN NELER OLUYOR BAKALIM SIMDI -----  !!!!

!!!!!!!BIZ BIR OFISTE CALISIYORUZ VE BIZIM PC MIZIN LOKAL IP ADRESI 192.168.1.5  OLARAK VERILDIGINI FARZEDELIM SONRA  DEFAULT GATEWAY YANI- MODEM IN ICE BAKAN IP SI - 192.168.1.1 OLDUGUNU PC MIZIN IP SINDEN ZATEN ANLAYABILIRIZZZZ, SONRA INTERNETE CIHAZIMDAN BBAGLENIRKEN MODE MIMIZ BIZE PUBLIC IP YI VEREK BIZIINTEREE GONDERIR..ORNEGIN BU PC DEN FACEBOOK-INSTAGRAM VS GIRIP UYGUN OLMAYAN , HAKARET ICERIKLI BIR YORUM YAZILDI YANI SUC OLAN DIYELIMM.. PEKI O ZAMAN MADEM KI HERKES INTERNETE CIKARKEN MODEM IN IP SINI KULLANIRSA BIR IS YERINDE 20 TANE PC VAR ISE BUNLAR NASIL BIRBIRINDE AYIRT EDEIBLIRIZ KIM HANGI PC DEN INTERNETTE NERELERDE GEZINIYOR BUNU NASIL  ANLARIZ !!!COK ONEMLI 
!SUNU DA BILELIM ICERDEKI IP ADRESLERI TESPIT EDILEMEZ, CUNKU GUVENILIR DEGILDIR ZATEN, CUNKU DEGISIME ACIKTIR INSAN KENDISI ICERDKEI IP ADRESINI MANUEL OLARAK DEGSTIRILEBILIR...BIRDE SUNU UNUTMAYALIM KI HER GUN PC YI TEKRAR ACARKEN MODEM PC MIZE YENI BIR IP ADRESI ATADIGI ICIN, HERGUN BIZIM PC NIN LOKAL IP SI DE DEGISECEKTIR

!KIMLIK TESPTINDE MAC ADRESININ KRITIK ONEMI 
EVET INTERNET SERVICE PROVIDER BIZIM MODEMIZE AIT IP UZERINDEN YASA DISI VEYA SUC OLAN YORUMLAR YAZILDIGNI BULDU AMA BU MODEM ALTINDA 20 TANE PC VAR, BU PC LERIN LOKAL DEKI IP ADRESLERI SUREKLI DEGISIYOR ONDAN DOLAYI LOKAL IP ADRESINE BAKILMAZ, ONUN  YERINE HER PC NIN UNIQ MAC ADRESI VARDIR, MAC ADRESI BILGISAYARLRIM ETHERNET KARTLARINDA BULUNAN UNIQ DEGERDIR, ETHERNET KARTI UZERINDE BULUNAN UNIQ SERI NUMARASI DIR VE BIR PC MODEM IP SI UZERINDEN INTERNETE CIKSA BILE, BIRAZ DETAYLI BIR INCELEMEDE INTERNETTE BAGLANILAN WEBSITGELERINDE PUBLICIIP ADRESI ILE BERABER HANGI MAC ADRESI ILE BAGLANILMIS ODA GORULUR YANI HANGI UNIQ ETHERNET KARTI MAC ADRESI ILE BAGLANILMIS, YANI HANGI PC ILE O WEBSITESINE BAGLANILMIS O HEMENCECIK TESPIT EDILEBILIR. YETKILI KISI INTERNET SERVICE SAGLAYICISINDAN GELDI, DIYELIM KI SIRKETE GELDI , CUNKU MODEM IN IP SINI BILDIGI ICIN SIRKETIN ADRESINI HEMEN BULUP GELIR VE SONRA DA ELINDE MAC ADRES NUMARASI DA OLDUGU ICIN PCLERI CHECK EDEREK MAC ADRESININ HANGI PC DEN YAPILDIGINI DA BULABILECEKTIR

!BU ARADA TABI KI KABLOSUZ INTERNET BAGLANTILARDA DA, LAPTOPLARDA ETHERNET KARTI VARDIR VE BILGISYAARLARIN ARKASINDA WIFI-CARD -WIRELESS ADAPTER CARD DIR VE BU NI INCELERSEK BU WIRELESS ADAPTER CARD UZERINDE, UNIQ MAC: NUMARASINI GOREBILIRIZ, 48 BITLIK BIR ADRESTIR...2^48 ADET(COK BUYUK BIR RAKAM) MAC ADRESI VARDIR DUNYA UZERINDE HER CIHAZIN SORUNSUZ BIR SEKILDE UNIQ BIR MAC ADRESI ALABILIR. MAC ADRESI INTERNETE BAGLANAN CIHAZIN UNIQ SERINUMARASIDIR VE DOGRUDAN ISTE INTERNETE MODEM IN IP UZERINDEN INTERNTE CIKAN CIHAZ IN HANGI CIHAZ OOLDGUNUN BULUNMASI MAC ADRESI UZERINDEN GERCEKLESIR

!INTERNET SERVICE SAGLAYICISININ ELINDE YASAL OMLAYAN ISLEMI IP SI VE YASAL OLMAYAN ISLEMIN YAPILDIGI MAC ADRESI BULUNUR , YASAL OLMAYAN ISLEMI YAPAN IP ADRESININ ONCE HANGI MODEME AIT OLDUGUNU BULUP  O MODEMI TESPIT EDER VE SONRA O MODEM NERDE ISE ORAYA GIDER VE ORDAN DA MAC ADRES NUMARASINDAN O MODEM UZERIDNEN INTERNETE BAGLANAN HANGI PC DEN OLDGUNU MAC ADRESINI CHECK EDEREK BULUR

ARABALARDA PLAKA DEGSITIRILEBILIR ORNEGIN ARAC EGER BIZ SATIN ALMADAN ONCE BIR SUCA KARSIMIS ISE, AMA SASE NUMARASI HICBIRZAMAN DEGISTIRILEMEZ, CUNKU URETIMDEN ITITBAREN VERILMISTIR... PLAKA BURDA LOKAL IP ADRESI GIBDIR, MAC ADRESI ISE SASE NUMARASI GIBIDIR

!MAC ADRESINE PCMIZDEN NASIL ULASIRIZ ONA BAKALIM
!MAC ADRESI FABRIKADA CIHAZ URETILIRKEN CIHAZIN UZERINE DIREK BASILIR VE O CIHAZ NERYE GIDERSE GITSIN O MAC ADRESI ARTIK DEGISMEZDIR

!ipconfig /all
komutunu yazarsak cmd de 

Wireless LAN adapter Wi-Fi:

   Connection-specific DNS Suffix  . :
   Description . . . . . . . . . . . : Intel(R) Dual Band Wireless-AC 8265
   !Physical Address. . . . . . . . . : 1C-1B-B5-13-4A-84
   DHCP Enabled. . . . . . . . . . . : Yes
   Autoconfiguration Enabled . . . . : Yes
   Link-local IPv6 Address . . . . . : fe80::ffe0:e356:e935:e989%10(Preferred)
   IPv4 Address. . . . . . . . . . . : 172.29.29.83(Preferred)
   Subnet Mask . . . . . . . . . . . : 255.255.255.0
   Lease Obtained. . . . . . . . . . : torsdag 25. april 2024 08:41:29
   Lease Expires . . . . . . . . . . : lørdag 27. april 2024 08:41:17
   Default Gateway . . . . . . . . . : 172.29.29.1
   DHCP Server . . . . . . . . . . . : 172.29.29.1
   DHCPv6 IAID . . . . . . . . . . . : 136059829
   DHCPv6 Client DUID. . . . . . . . : 00-01-00-01-2A-E3-5C-02-E4-E7-49-9E-AF-BD
   DNS Servers . . . . . . . . . . . : 172.16.3.11
                                       172.16.3.12
   NetBIOS over Tcpip. . . . . . . . : Enabled

Ethernet adapter Bluetooth Network Connection:

   !Physical Address. . . . . . . . . : 1C-1B-B5-13-4A-84
    ISTE BU ADRES BIZIM, MAC ADRESIIMZDIR, Physical Address cunku fabrika uretiminde uzerine basilmis ve degistirilemez..ONDAN DOLAYI SUNU IYI BILELIM KI BIZ ISLEM YAPRKEN KIMLIGIMZ HICBIR ZAMAN GIZLI DEGILDIR VE YAPTIGMIZ TUM ISLEMLER ARKA PLANDA BIR YERLERDE LOGLANIYOR VE ZAMANI GELDIGINDE EGER YAPTGIMZ ISLEMLERDE BIR SORUN VAR ISE BUNLAR KARSIMIZA MUTLAKA CIKACAKTIR BUNU IYI BILELIM!!!!!!!!
    !WINDOWS ARAYUZUNDE INTERNET SETTINGS-AG VE BAGDASTIRICI AYARLARI - ETHERNET KARTINMIZE GELIP CIFT TIKLA AYRINTILARA GELIRSEK ORDA DA PHYSICAL ADDRES DIYE YAZAN MAC ADREZIMIZI GOREBILIRIZ

!YA ETHERNET KARTINI YA DA WIRELESS ADAPTERKARTINI CIKARIRSINIZ KIMLIGNIZI GIZLEMEK ICIN YA DA TASINABILIR WIRELESS USB ETHERNET ANTENTLERI-KARTLARI KULLANARAK INTRNETE BAGLANIP SONRA BU KARTI YOK EDERSENIZ O ZAMAN SIZI BULAMAZLAR

!PEKI INTERNET KAFE DE NASIL TESPIT EDEBILIRLER SIZI...SADECE SUNU BULURLAR SIZIN HANGI PC DE HANGI SAATTE ISLEM YAPTGIGNIZI BULURLAR VE KAMERA KAYTILARINDAN DA O PC YE O SAATTE KIM GELMIS ONU GORURLER...VE DE TELEFON SINAYLINDEN DE O SAATLARDE KIMLER VARMIS KAFE DE ONU GOREBILIRILER...VE YUZ TESPTI VS DEN COK KOLAY BIR SEKIKLDE BULABILIRLER 

!BU ARADA MODEM E AIT IP ADRESINDEN YAPILAN YASAL OLMAYAN BIR ISTE SORUMULUUK O MODEM-IP ADRESI KIMIN UZERNE ISE ONA AITTIR...ONDAN DOLAYI DA BU KONU DA WIFI SIFREMIZI HERKESLE PAYLASMAMAKTA FAYDA VARDIR

!OFIS AGI - OFIS NETWORKU NASIL KURULUR 
BILGISAYAR, ETHERNET KABLOLAR, MODEM
!Ofislerdeki bilgisayar aglarni,networklerini kurma islemini tamamen ip lerle yapiyoruz
!Ip adreslemeyi yapabiliyorsak, bilgisayarlara ip nasil verilir bunu biliyorsak, ortamdaki modem uzerinden-(gateway) uzerinden internete cikacagiz, bunlari da biliyor sak , o zaman biz bir ofiste pc leri  birbirlerine baglayabiliriz 

!Ihtiyacimz olan sey, modem, internet ve bilgisayarlar 

!1-Oncelikle modem in ip adresini ogrenmeliyiz, bulmaliyiz
!Modem in ip adresini nasil ogreniyorduk hatirlayalim
!ipconfig yazariz pc ye 
Wireless LAN adapter Wi-Fi:

   Connection-specific DNS Suffix  . :
   Link-local IPv6 Address . . . . . : fe80::ffe0:e356:e935:e989%10
   IPv4 Address. . . . . . . . . . . : 172.29.29.83
   Subnet Mask . . . . . . . . . . . : 255.255.255.0
   Default Gateway . . . . . . . . . : 172.29.29.1
!Iste burdaki Default Gateway degeri modem in icerdeki ip adresidir..internete cikmadan onceki

!2.Modem in ip sini ogrendigmize gore o zaman sunu anliyoruz, modem(Dhcp servisi) pc lere ip adresi atamasi yapacak su sekilde 172.29.29.2, 172.29.29.3, 172.29.29.4....
!Peki biz modem imizin mi pc lere ip atamasi yapmasini isteriz yoksa, kendimiz manuel olarak ip atamasi mi yapacagiz
!Eger ofiste bilgisuyar sayisi cok fazla degil ise 10-15 adet ise o zaman ip leri kendimiz vermemiz daha iyi olur...Yok cok fazla pc var ise o zaman artik modem(DHCP SERVISINE) in kendsinin atamasini saglariz.
SIRASI ILE PC LERE IP ADRES ATAMASI YAPALIM...BUNU DA ZATEN INERTNET AYARLARINDAN YAPABILDIGMIZI BILIYOURUZ income-btn
!PC LERE IP ATAMASI YAPARKEN AYNI NETWORKDE OLACAK SEKILDE IP ATAMASI YAPACAKTIK UNUTMAYALIM...CUNKU BIRBIRLERI ILE NETWORK-BAGLANTI OLUSTURACGIZ..

PC-1
NETWORK : 192.168.1.0 
IP ADDRESS: 192.168.1.2 
Subnet mask: 255.255.255.0
Default Gateway: 192.168.1.1(modem)
DNS:192.168.1.1(MODEMI VERIYORUZ MODEM BIZM ICIN DNS SERVER I HANDLE EDECEKKI KULLANICILAR ISTEDIKLERI WEB SITESINE BAGLANABILSIN)
!Bildigimiz gibi ip adresini verdikten sonra tab a basinca subnetmask i kendisi atiyor zaten
!Bilgisyarin internete cikabilmesi icin Default gateway i dogru verilmesi ve Dns in dogru verilmesi sarttir bunu unutmayalim..

PC-1
NETWORK : 192.168.1.0 
IP ADDRESS: 192.168.1.3 
Subnet mask: 255.255.255.0
Default Gateway: 192.168.1.1(modem)
DNS:192.168.1.1(MODEMI VERIYORUZ MODEM BIZM ICIN DNS SERVER I HANDLE EDECEKKI KULLANICILAR ISTEDIKLERI WEB SITESINE BAGLANABILSIN)

!Bilgisyarlara ip atamalarini yaptik, peki bundan sonra pc lerin birbiri ile network baglantisi kurabilmemiz icin, bilgisayarlar arasinda bir baglnti kujrulmasi gerekiyor...Yani bilgisayarlarin 

!Once sunu anlayalim, bizim sirketimizde 1 tane modemimiz var ve modem lerin 4-5 tane portu olur ethernet kablolari icin, ancak, sirkette ornegin var 15 pc , bu durumda ne yapariz peki. Boyle durumlar icin ise : 
Netwerk kablolarinin adi Cat5 kablolaridir, bu saniyede 100 mbit veri transferi gerceklestirebilirler, Cat6 lar daha hizli olanidir ve 1 Gbit hizinda hizmet verir, yani saniyede 1 Gbit veri transferi gerceklestirebilirler

!Bit denildigi anda, verinin hizindan bahsediliyor, byte denildiginde ise veri niin buuyuklugunden bahsediliyor bunu bilelim
!Modem de yeterli port olmadigindan dolayi bir sorun ile karsilasiyoruz araya bir network cihazi koyuyoruz bunun adi switch cihazi, ve bu swtich cihazi sayesinde modem den switche swtich den de pc lere baglanti kurulmus oluyor(Eskiden swithc yerine hub kullanilirdi)
Swtich cihazlari, her bir portuna baglanan pc nin ip adresini biliyorlar ama eskiden hub kullanildiginda hub cihazlari bilemiyorlardi
Biz switch in bir portuna bagladgimz pc den yine swtichin diger bir portuna baglanan pc yi birbirine baglarken switch her iki pc nin ip sini bildigi icin hizli bir sekilde pc leri birbirne baglyablir.ama hub lar ise gelip port lara tek tek soruyordu cek ediuyordu, ve bu da ekstra yuk getiriyordu eskiden 
!Modem imiz yeterli portu saglayamayacagi icin her zaman sirketlerde modem den swtiche kablo ile baglanti saglanip sonra pc ler switch portuna baglanirlar
!Kisaca modemimiz, de pc ler de hepsi switch uzerinde toplanmis oluuyor ve burda bilgisayarlar birbirlerini gorebiliyor, bilgisyalar modem i gorebiliyorlar cunku ayni ortamdalar, tum cihazlari ayni havuzda toplayarak bize bu ortami switch cihazlari saglamis oluyor

!KISACASI NE YAPTIK, 1 PC LERE AYNI NETWORDDE OLACAK SEKKILDE IP LERINI VERDIK VE DE TUM PC LERI MODEM LER BIRLITKE SWTICH CIHAZI KULLANIARAK AYNI ORTAMDA BULUSTURMUS OLDUK VE BU SEKILDEE BIZ BIR OFISTE BILGISAYAR NETWORK I NASIL KURULUR BUNU GORMUJS OOLDUK

!LOCAL AREA NETWORK - LAN(TEK BIR CATI ALTINDAKI PC LER ARASINDA KURULAN NETWORKDUR)
!WIDE AREA NETWORK -WAN(AMA BIR SIRKETIN ULKENIN FARKLI SEHIRLERINDE OFISLERI VAR VE BURALARDAKI PC LER UZAKTAN AYNI NETWORK LERI OLDUGUNU DUSUNELIM BURDA BANKALAR BUNA GUZEL BIR ORNEKTIR )

!KATLI YAPILARDA NETWORK YAPILANDIRMASI 
BURDA DA ORNEGIN 5 KATLI BIR BINANIN HER KATINA BUYUKK OFISLER VAR VE HER OFISTE 50 PC VAR VE HER KATTA BIR SWTICH VASITASIYLA PC LERI BIRBIRNE BAGLADIK VE DE HER KATTAKI PC LER AYNI NETWORK ALTINDA IP ADRESLERI ATAMASI YAPILDI... BUNU HER KAT ICIN YAPTIK, SONRA ISE BIZ BU 5 KATTAKI TOPLAM 250 PC NIN DE BIRBINE BAGLI OLMASINI ISTIYORUZ O ZAMAN NE YAPARIZ O ZMAN DA BU BINANIN BIR IT ODASI VARDIR O IT ODASINDA DA 5 FARKLI KATTA BULUNAN 5 FARKLI SWTICH CIHAZININ HEPSINI BINANIN IT ODASINA DA BIR TANE SWITCH KOYUP O SWTICH DE TOPLARIZ DIGER TUM SWITCH LERI YANI TEK BIR SWITCHE BAGLARIZ, DOLAYISI ILE TUM YAPIYI TEK BIR SWITCH UZERINDE TOPOLAMIS OLUSRUZ VE MODEM IMIZI DE BU ANA SWITCHE BAGLARIZ
DHCP SERVISI SUNAN CIHAZ MODEM, ROOTER, INTERNET SERVIS SAGLAYICISININ SUNMUS OLDUGU FARKLI BIR CIHAZ DA OLABILIR AMA MESELE DHCP 

!BIR AGDA DOSYA VE KLASORLER NASIL PAYLASTIRILIR?
BIR SENARYO UZERINDEN KONUSALIM...
3 ARKADAS BIR EVDE BULUSTULAR VE HER BIRININ 1 PC SI VAR VE AHMETPC SINDE FILMER VAR, AYSEPC SINDE MANZARA RESIMLERI VAR, MEHMETPC SINDE DE MUZIKLER VAR , VE BU UC ARKADAS KENDILERINDE BULUNAN DOSYALARI BIRBIRLERI ILE PAYLASMAK ISTIYORLAR, BUNU NASIL YAPACAKLAR
!BU UC PC AYNI ORTAMDA MODEM IN OLDUGU BIR ORTAMDE ACILIYOR VE ACILDIGI ANDA ORTAMDAKI PC LERE MODEM TARAFINDAN PRIVATE IP LER, AYNI NETWORK ALTINDA PRIVATE IP LER ATANMIS OLUYOR
!YAPMAMIZ GEREKEN TEK SEY SU, PAYLASILMAK ISTENILEN KLASORLER PAYLASIMA ACILMALIDIR, KLASOR UZERINDE SAGA TIKLANIP OZELLIKLER E GIDERIZ, MENU TAB INDA PAYLASIM-ADVANCE VE BI KKLASORU PAYLAS DERIZ VE EVERYONE E TAM YETKI VERIRIZ KI ARTIK BU KLASORU HERKES GOREBILSIN.... 
YANI BIZ BIR PC DEN DIGER 3 PC YE UZAK-YEREL BAGLANTI TOOL UNU ARMAA YAPIP

windows-r ye tiklayarak, bilgisyalar ayni network de olduklari zaman, birbirleri ile paylasilan klasor ve dosyalara erismek cok zor degildir,
    \\(baglanmak istedgimz pc nin ip adresini gireriz)
    girecegimz, baglanacagimzi pc nin ip adresini de ipconfig den ogrenebiliriz 
    \\192.168.0.14 diyerek bu pc ye baglanabiliriiz 
    pc bizden username-password isteyecek
    !Baglanacagmiz pc de ana kullanici haricinde de bir baska kullanici olusturmak icin ise mypc-saga tiklanip yonet dendikten sonra lokal-brukere ogr upper e tiklayip ordan brukere nin uzerine tikla yuip o sayfada saga tiklayip yeni bruker olustur diyerek yeni kullanici olustururuz, kullanici adi ve password veririz

    !PEKI BIZ BAGLANDGIMZ DIGER PC YE KULLANICI ADI VE SIFREYI GIRDIKTEN SONRA, YETKI SORUNU YASADIK, YANI KLASOR PAYLASILMIS AMA KLASOR ICERIISNE GIRME VE O KLASORDE BULUNAN DOSYA LARI KENDISINE ALMA YETKISI YOK, ONDAN DOLAYI KLASOR PAYLASIMA ACMANIN YANINDA BIR DE KLASORE KLASOR U OKUMA,GORUNTULEME DIGER YETKILERINDE VERILMESI GEREKIR....
    
    !KAYNAK PAYLASIMLARINDA YETKI VE IZINI ATAMALARI NASIL YAPILIR
    IZIN ATAMALARI YAPILIRKEN,  KLASORUMUZE SAG TIKLAYIP PROPERTIES DEDIKTEN SONRA GELEN MENU DE GUVENLIK-SECURITY KISMI VAR , UST BOLUME KULLANICIYI EKLEMMIZ GEREKIR, IZIN VERECEGMZ KULLANICI UST KISMDA DUZENLE-EKLE DIYEREK EKLERIZ SONRA DA ALT KISM DA DA O KULLANICIYA DOSYA YETKI IZINLERINI VERIRIZ, kullanici adi windows da USERS altidna nasil isimlendirilmis ise o isimi yazariz ve zaten kendisi sonrasinda otomaik olarak getirmesi gerekir
    DOSYA IZINLERINDE YAZMA IZNI VERDIGMIZ ZAMAN AYNI ZAMANDA YENI DOSYA VE KLASOR OLUSTURMA IZNI DE VERILMIS OLUYOR ASLINDA, YANI NORMMAL OLARAK VAR OLAN DOSYA ICERISINE YAZABILMENIN YANINDA
    YINE IZINLERDE EXECUTE IZNI VARDIR BUDA ULASINAN KAYNKTA EGER .EXE UZANTILI DOSYA VAR ISE YANI RUN EDILEBILIR BIR DOSYA VAR ISE BU TARZ DOSYALARIN RUN EDILMESI YETKISNIN VERILMESI ANLAMINA GELIR, BIR NEVI .SH UZANTILI DOSYA GIBI LINUX-UBUNTU DAKI

    DEGISTIRME IZNI ISE OKUMA, YURUTME, YAZMA, LISTELEME GIBI IZINLERIN HEPSINE SAHIP OLAN IZINDIR, EKSTRA OLARAK SILME IZNI DE VEREN IZINDIR

    PAYLASMAYA ACTGIMGZ KAYNAKLARIMIZ UZERINDE BIZIM VERDGIMZ IZINLER OLCUSUNDE ISLEM YAPACAKTIR KULLANICILAR

    !Tam denetim izni tehlike li bir izindir, onun icin herkese verilmez, cunku diger kullanicilarin izinlerine mudahele edilebilecek bir yetkidir
    !Sadece klasorlerimizin kullanicinin kendi pc sine cekmesi icin verilmesi gereken izinler, sadece klasor icerigini listeleme ve okuma izni yeterlidir..Bu izinloer verilmesi ile kullanici dosyalari kendi pc sine surukle birak yontemi ile gonderebilir

    ! HATIRLAYALIM WINDOWS+R YAPIP \\192.168.0.104 diye hangi ip adrsni girersek o ip adresine girebiliyorduk eger ayni network de isek.... ve klasor paylasiminda bu sekilde yapabiliyorduk hatirlayalim...


    !IP ADRESLERININ SOUNDAKI SAYILAR NE ANLAMA GELIR
    Bu sayilar ip adresinin CIDR degeridir, yani subnetmask ini da verir, yani alt ag maskesini vermis olur

    IP: 192.168.1.100\24 :  Bu 24 bize sunu verir, Bu ip adresinin subnet maskindaki bitlerin soldan saga 24 tanesini degeri 1 dir diyor ona gore bunu sen hesapla diyor, sonuc ta subnet mask da ip adresi gibi 32 bitlik bir sayidir, 24 sayisi bize soldan saga dogru subnetmaskin 24 tanesi 1 dir geri kalani 0 dir demis oluyor

    !192.168.1.100\24 

    SubnetMask: 11111111.11111111.11111111.00000000(binary)=>255.255.255.0(decimal-onluk duzen) YANI DEMEKKI C SINIFI IP ADRESLERINDE, STANDART SUBNETMASK 255.255.255.0 BU IMIS

    IP ADRESI: 172.16.10.100\16 => BU DA B SINIFI BIR IP ADRESIDIR VE STANDART SUBNETMASK DEGERI 255.255.0.0 DIR KI ZATEN 16 DEMEK SOLDAN SAGA DOGRU 16 TANESI 1 GERISI O DIR DEMEKTIR KI BUNUN DA ZATEN ONLUK DUZENDE KARSILIGI 255.255.0.0 OLUYOR BUNU DA MANUEL OLARAK IP AADRES ATAMASI YAPARKEN TAB A BASINCA OTOOMATIK GELECEKTIR
    11111111.11111111.00000000.00000000=> 255.255.0.0

    IP: 192.168.1.100\20 (SOLDAN SAGA DOGRU 20 ADET 1 gerisi 0  DEMEKTIR)
    11111111.11111111.11110000.00000000=>255.255.240.0 SUBNET MASK BUDUR

    !CIDR-STANDART SUBNET MASK 

    C sinifi \24  255.255.255.0 
    B Sinifi \16  255.255.0.0
    A Sinifi \8  255.0.0.0

    !Subnet mask ile ilgili 24,16,8 goruyorsak, hersey yolundadir, ama bu sayilardan farkli sayilar gorursek, o zaman ip ile oynanmis demektir o zaman da devreye subnetting girer ve bu da apayri bir konudur buna ihityacimz oldugunda ekstra ogrenmemiz gerekir 

    !BAYT- BIT - BUYUKLUK VE HIZ BIRIMLERI 

    !BYTE-BUYUKLUK
    !Harddisk kapasitesi 500 gigabyt 
    !Bu video dosyasi 50 megabayt buyuklugunde

    !HIZ-BIT
    !Internet hizim 20megabit hizinda 
    !Fiber internete gectim 100 megabit hizim var

    
    1 bit = 1 ya da 0 dir, bilgisayarin anladigi binary ikili sayi sisteminde ki tek bir karakter 1 ya da 0 iste bu bittir 
    1 byte = 8bit 
    !Bizim icn 1 bit in hic bir anlami yoktur ama 8bit=1byte bizim icin bir karakteri temsil ediyor ama tabi ki 8 bit-1byte a karsilik gelen 128 tane ASCI TABLOSUNDAN BILDIGIMZ KARAKTERLER VARDIR AMA BU KARAKTERLERIN HEPSI 1 KARAKTERDEN OLUSMUYOR...BAZI 8BIT-1BYTE LAR 2 VEYA 3 KARAKTERDEN OLUSABILIYOR, AMA SAYILAR, OPERATORLER, SEMBOLLER, YANI KLAVYEDE BULUNAN SEMBOLLLER BUNLAR 1 KARAKTERDIR...  ASCCI TABLOSUNU INCELERSEK BU NU DAHA IYI ANLARIZ
    1 kilobyte = 1024 byte
    1 megabyte = 1024 kilobyte 
    1 gigabyte = 1024 megabayt
    1 terabyte = 1024 gigabyte

    !bIR METIN BELGESI ACINCA O METIN BELGESINE GIDIP ISMIMIZI YAZALIM VE SONRA PROPERTIES DEN BU DOSYA BUYUKLUGUNE BAKARSAK, ADEM  YAZARSAK 4BYTE LIK YER KAPLADIKLARINI ANLARIZ 
    A->1BYTE SPACE-BOSLUK KARAKTERI 1 BYTE DIR, ; BIR BYTE DIR.. 1 SAYISI BYTEDIR 

    !100 Mbps - 779,-/md. MEGABIT PER SEKUND . BU SU DEMEK SANIYEDE 100 MEGABIT HIZINDA,  YANI SANIYEDE YAKLASIK 12 MEGABYTE LIK VERI INDIREBILIRSIN...

    !CAT-5 ETHERNET KABLOSU SANIYEDE 100MEGABIT HIZ SUNARLAR- YANI 100Mbps-100 megabit per second , YANI YAKLASIK 12MEGABYTE BUYUKLUGUNDE VERI TRANSFERI VERI INDIRILEBILIR SANIYEDE 
    !CAT-6 ISE ETHERNET KABLOSU ISE SANIYEDE 1GBPS- GIGABIT PERSECOND INTERNET SUNARLR, YANI SANIYEDE YAKLASIK 120 MEGABYTE LIK VERI TRASNFERI SAGLAR, VERI INDIRILEBILIR DEMEKTIR
!CAT6 KABLOSUNU BIR PC DEN DIGER PC YE BAGLARSAM 1 GB LIK FILMI BIR PC DEN DIGERINE YAKLASIK 10 SANIYEDE TRANSFER EDEBILIRM DEMEKTIR, AMA CAT-5  KABLOSU KULLANIRSAM TOTAL DE 100 SANIYE SURECEKTIR YANI YAKLASIK 2 DAKIKAYI BULACAKTIR

!SISTEM VE NETWORK MUHENDISLIGI

BIT-0,1 DEN HERHANGI BIR TANESI 1 BITTIR, BILGISAYARIN ANLAYABILECEGI EN KUCUK VERI MIKTARIDIR
NIBBLE- 4 BITTEN OLUSUR
BYTE 1 KARAKTERLIK BILGIYI IFADE EDEN 8 ADET BITTEN OLUSUR, KLAVYEDE BASILAN HER TUS 1 BYTTE DIR
WORD 16 ADET BITTEN OLUSUR
!ORNEK VERECEK OLURSAK BIR DOSYA OLUSTURALIM .TXT DOSYASI VE ICERISINDE IKEN KLAVYEDE HERHANGI BIR KARATERE BASIP KAYDEDIP SONRA O DOSYANIN PROPERTIES LERINE BAKARSAK 1 BYTE OLDUGUNU, EGER 2 KARAKJTER GIRERSEK ONUN DA 2BYTE OLDUGUNU, BU ARADA EGER SPACE TUSUNA BASILIRSA BU BIZIM ICN BOSLUKTUR AMA PC ICIN KARAKTERI IFADE EDER ONDAN DOLAYI 1 2 YAZARSAK ARAYA BOSLUK TUSUNA BASMIS ISEK O ZAMAN DOSYA SAGA TIKLAYIP PROPERTIES DE GENERAL DAN KAPLADIGI ALANA BAKARSAK 3 BYTE OLARAK KARSIMIZA GELECEKTIR
BU ARADA BIR SATIR A YAZDIKTAN SONRA SATIR ATLAMA EOL(END OF LINE) 2 BYTE OLARAK KABUL EDILIR

!KLAVYEDE BASILAN HER HARF VEYA RAKAM 1 BYTTE DIR
HARF VEYEA RAKAMLAR BILGISAYAR DILINDE BYTE LAR ILE IFADE EDILIR 

ORNEGIN A HARFI 1 BYTE DIR 
VE BINARY-IKILI SAYI SISTMINDE 01000001 SEKLINDE GOSTERILIR, ONLUK SAYI SISTEMINDE DECIMAL->65 E ESITTIR
!YANI BILGISAYAR A,B,C BILMEZ TEK BILDIGI  01000001 BUDUR, BILGISAYARIN A DAN ANLADIGI BUDUR..BUNA A DIYEN BIZIZ, HUMANREADABLE KARSILIGIDIR A
  
?,!, ;..GIBI KARAKTERLER DE 1 BYTTE DIR TABI KI, SPACE-BOSLUK KARAKTERI DE 

!ASCI,UTA STANDARTLARINDA TABI KI 01000001 KARSILIG A DIR DECIMAL KARSILIGI DA 65 TIR
!UTF8 DE 1 KARAKTER 1 BYTTE DIR, STANDARTTA DA BU KULLANILIR
!AMA UTF16 DA 1 KARAKTER 2 BYTTE DIR - 16BITT
!UTF32 DE 1 KARAKTER 4BYTTE DIR-32 BITTIR

!WINDOWS STANDARTLARINA BOYLEDIR AMA LINUX,MACOS..GIBI STANDART OLMAYAN BIRIMLERDE FARKLILKIKLAR OLABILIR

  1BYTE=8BIT
  1KILOBYTE-KB = 1024BYTE
  1MEGABYTE-MG = 1024KB
  1GIGABYTE-GB = 1024MB  
  1TERABYTE-TB = 1024GB  
  1PETABYTE-PB = 1024TB
  1EKSABYTE-EB= 1024PB
  1ZETTABYTE =  10224EB

!8GBRAM 8192 MB TIR
!1GBITLIK ETTHERNET SANIYEDE 0.125GB VERI AKTARABILIR
!100MBIT INTERNET(8BIT 1BYTE ISE 100/8=12.5) 12.5GBITLIK VERI TRANSFER EDEBILIR SANIYEDE(100 Mbps-10 MEGABIT PER SEKUND DEMEKTIR YANI SANIYEDE 12.5MBYTE LIK BUYUKLUKTE VERI INDIREBBILIR DEMEKTIR)

!COK KRITIK BILGI: bit kucuk b harfi ile;Byte buyuk B harfi ile gosterilir.
!INTERNET HIZI, ETHERNET, WIRESS HIZI SOZ KONUSU OLDUGUNDA KESINLIKE TEK AKLMIZAZ GELECEK OLAN SEY BITTIR VE Mbps-Megabit per second, persecond, her saniyede transfer edilebilecek veri buyktugunu gosterir ama bunun bit deyince hizini anlatmak icin soylenir, byte denince buyklugunju anlatmk icin kullanilir

!3 PBYTE LIK VERI 100Mbps lik internet hatti ile kac gunde cloud daki server imiza gider diye bize sorabilirler?
!VEYA 3PETABYTE LIK VERMIZI CLOUDDAN DIGER SUBEYE 35 GUNFR  AKTARABILMEK ICIN MINUMU KAC Mbps hizda ethernet-kablo-internett hatti gereklidir?

ASCII-AMERICAN STANDART CODE OF INFORMATION INTERCHANGE
PC YE 01000001 IN KARSILIGI A HARFI OLDUGUNU SOYELEYN ISTE ASCII'DIR.
1960-61 YILLARNDA BUNLARI PC LERE OGRETIP STANDARTLARI OLUSTURMUSLAR 

ASCII METIN KARAKTERLERIN IKILI-BINARY SAYI SISTEMINDEKI DEGERLERIDIR 
!INGILIZCE ALFABEDEKI TUM HARFLERI DE KAPSAYAN 128 KODDAN OLUSUR
!ORNEGIN 0 KARAKTERININ ASCII KODU 00110000 DIR DECIMAL KARSILIGI DA 48
!ORNEGIN 1 KARAKTERININ ASCII KODU 00110000 DIR DECIMAL KARSILIGI DA 49
!ORNEGIN % KARAKTERININ ASCII KODU, 00100101 DIR DECIMAL KARSILIGI 37 DIR

!ASCII TABLOSUNDA GOREBILIRIZ

WINDOWS TA BIR METIN EDITORUNDE:
ALT TUSU BASILI IKEN 49 A BASIP BIRAKIRSAK 1 KARAKTERINI GORURUZ
ALT TUSU BASILI IKEN 48 E BASIP BIRAKIRSAK DA 0 KARAKTERINI GORURUZ

!AMA BU ISLEMLERI MACOS-LINUX TE DENEMEK MANTIKSIZDIR CUNKU LINUX-MAXCOS UNICODE KULLANIYOR,ASCII KULLANMIYORLAR

!VERI YOLU(DATA BUS)
BIZ KLAVYDE DE HERHANGI BIR KARAKTERE BASINCA ORNEGIN A YA BASINCA 8 BIT LIK OLAN 01000001 BITIN TRANSFER EDILDIGI YOLLAR VAR ISTE BU YOL DATA BUS-VERI YOLUDUR. SONUCTA KLAVYEDEN BASIYORUZ EKRANA GELIYOR BURDA BIR VERI TRANSFERI GERCEKLESIYOR
ISTE BU YOLLARIN GENISLIGI-DATA BUS IN GENISLIGI PC NIN AYNI ANDA NE KADAR VERI ILETEBILECEGINI GOSTERIR 

32 BITLIK VERI YOLU AYNI ANDA 32 BIT VERI ILETEBILIRKEN(SADECE GIDIS-VERI ILETIR)
64 BITLIK VERI YOLU AYNI ANDA 64 BIT VERI ILETEBILIR(HEM GIDIS HEM GELIS- HEM VERI ILETIR HEM VERI ALIR)
!ISTE BUNDAN DOLAYI DIR KI 32 BITLIK ISLETIM SISTEMIK 64 BITLIK OLAN DAN DAHA YAVASTIR
!64 BITTEN TAM VERIM ALINABILMESI ICIN ONCELKLE ISLETIM SISTEMININ BUNU DESTEKLEMESI GEREKIR KI BIZ ISLETIM SISTEMINI BILIRIZ, DONANIM LA ISIMIZ OLMAZ, AYRICA DA HEM CPU NUN, HEM ANAKARTIN VS 64 BITI DESTEKLEMESI GEREKIR TAM VERIM ALNABILMESI ICIN

BILGISAYARDAKI TUM CIHAZLAR VE DONANIMLAR, BIRBIRLERI ILE VERI YOLU-BUS ILE ILETISIM KURARLAR
VERI YOLU-DATA BUS BIRBIRINE BAGLIDIRLAR

ELEKTRIK SINYALI VAR-1, ELEKTRIKSINYALI YOK-0 
ELEKTRIK SINYALLERI VERI OLABILMESI ICIN DONUSTURULUYORDU, DATA-BUS LAR UZERINDEN AKAR ELEKTRIK SINYALLERI

!VERIYI KAYDEDERSEK DISK E ALINIR KAYDETMEZSEK RAM DE KAYITLI DURUR..TABI RAM DE PC KKAPANANAN KADAR...VEYA BIZ O UYGULAMAYI KAPATANA KADAR DURUR.RAM-GECICI BELLEK

!BILGISYARLARDA VERILERIN ISLEM ASAMASI 
1-INPUT-KLAVYEDEN A' YA BASILDIGINDA(ASLINDA ILK ASAMADA BIZ ELEKTRIKSINYALI GONDERIRIZ AMA ONLAR VERIYE DONSTURULEREK ALINIR PC TARAFINDAN)
VEYA FARE-MOUSE A TIKLANDIGINDA 
VEYA TOUCHPAD, JOYISTICK, MIKROFONDAN KONSULDUGUNDA SES GIRISI YAPILIR 
2-PROCESS-ISLEM- BILGISAYAR ISLEM YAPAR
ISLEMCI, BELLEK,ANAKART,EKRANKARTI,AG KARTI
3-OUTPUT-BILGISAYAR ISLEM SONUCUNU GOSTERIR
MONITOR,YAZICI,HOPERLOR

!IC VE DIS HER BILGISAYAR PARCASI BU 3 ASAMANIN BIRISINDE MUTLAKA GOREV ALIR

!Webcam ve Tarayıcı (Scanner) için hangi aşamanın birimleri olduğunu doğru sıralamada seçiniz-INPUT-INPUT

!ISLEMCI-CPU-CENTRAL PROCESSING UNIT-MERKEZI ISLEM BIRIMI-ISLEMCI VE MIKROISLEMCI BIRIMLERI 
INTELCORE I7, INTELCORE I5, AMD RYZEN ...

BILGISAYAR ACILDIGINDA HICBIRSEY YAPMASAK,DA VEYA SADECE MUZIK DINLESEK BILE, CPU-ISLEMCI BIR BEYIN GIBIDIR SUREKLI OLARAK HESAPTADIR HESAP YAPAR, KARAR MEKANIZMASI VE MATEMATIK DEHASIDIR KENDISI. ISLETIM SISTEMININ ACILMASINA DA KAPANMASINA DA O KARAR VERIR

!CPU-MERKEZI ISLEM BIRMI(CPU-CENTRAL PROCESSING UNIT)
ISLEMCI ISLEMLERI PARCALARA BOLEREK ISLER
BU PARCALARA DONGU DENIR 

ISLEMCININ BU DONGULERI ISLEMSI BIR MIKTAR VAKTINI ALIR 
1 SANIYEDE ISLENEBILEN DONGU SAYISI, ISLEMCININ HIZINI BELIRLER

ORNEGIN 3 GHZ HIZINDA CALISAN BIR ISLEMCI SANIYEDE 3 MILYAR DONGU ISLEYEBILIR 

ORNEGIN BIR TOPLAMA ISLEMININ 10 DONGU GEREKTIGNI VARSYARSAK, BU ISLEMCI SANIYEDE 300 MILYON TOPLAMA ISLEMI YAPABILIR

!CPU NUN KAPAGININ ALTINDA MIKROISLEMCI VARDIR VE ISLEMLER BURDA 7 ADET TEMEL BIRIM TARAFINDAN GERCEKLESTIRILIR
SADECE MATEMATIK HESAPLAMASI YAPMAZ AMA HER YAPILAN ISLEMDE BIR MATEMATIKSEL HESAPLAMA YAPACAKTIR, ORNEGIN BIZ GOOGLE I ACMAYA CALISIRKEN BILE ONUN NEOLDUGUNU ANLAMAYA CALISIRKEN HESAPLAMA YAPACAKTIR

!RAM CPU NUN DISKI GIBIDIR 
ISLEMCI VERILERI RAM DAN ALIR VE ISLEMINI YAPTIKTAN SONRA TEKRAR ISLEMI RAM A BIRAKIR
ISLEMCI CUNKU RAM DEN OKUR VE YAZAR
!BUNDAN DOLAYI RAM SECERKEN BOYUT ODAKLI DEGIL PERFORMANS ODAKLI OLMAKTA FAYDA VARDIR

!CL I 8 OLAN 8GB LIK RAM MI YOKSA CL I 16 I OLAN 16GB LIK OLAN RAM MI DESELER 8GB LIK OLANI SECERIMZ NEDEN CUNKU CL-I YANI GECIKME SURESI DAHA AZDIR, DAHA PEROFRMANSLI CALISACAKTIR 16GB DAN, 8GB OLMASINA RAGMEN

!RAM IN EN FAZLA KULLANILABILECEGI SADECE RAM BOYUTUNA DEGIL, CPU NUN ADRES BOYUTUNA DA BAGLIDIR, RAM BOYUTU COK FAZLA OLABILIR AMA ISLEMCININ ADRES YOLU KISITLI ISE O RAM IN HEPSINI KULLANAMAYABILIIR

!MAKSIMUM BELLEK BOYTU DIYE BIRSEY VARDIR..seleron islemci ornegn, ISLEMCI TARAFINDAN DESTEKLENEN MAKSIMUM BELLEK BOYUTU(BELLEK TURUNE BAGLIDIR) 8GB ISE EGER, ISLEMCI BU SEKILDE 8GB BIR RAM DESTEKLIYORSA MAKS, O ZAMAN SIZDE 16GB RAM OLMASININ ANLAMI YOKTUR ZATEN
Adresleyebilecegi teknoloji ddr3 

ama i3 islmciye bakacak olusrsak maksimum desteke digi boyut 64gb dir ve , ADRESS BU BELLEKTURU DDR4 VE HIZINI DA BAKARSAK BIRINDE 58 IKIEN DIGERINDE
ADRESLEMEYI KULLANARAK VERILERI ISLER, CPU...RAM DA TUTULAN VERIYI ALIR ISLER SONRA RAM A GERI BIRAKIR

!ANAKART-VUCUDUN SINR SISTEMI GIBIDR

TUM DONANIMSLARIN, BIRBIRILERI ILE HABERLESMESIN SAGLAR O YUZDEN PC TOPLANIRKEN ANAKARTTAN BASLANIR

!RAM-BIR BELLEK TURUDUR AMA BELLEK DEGILDIR-ROM

HIZLI ERISIMLER, SABIT BILGIER VE ACILIS SURECLERI ICINCIR
ISLEMCININ ICINDE KENDI CACHESI BITINCE RAM A BASVURUYORDU
RAM LER ELEKTRIK KESINISNDE ICINDEKI BILGILERI UNUTURLAR VE 

RAM-RANDOM ACESS MEMORY 
ISLEMCI NIN KENDI CACHE LERI BITINCE RAM A BASVURUYORDU 
RAM DE YER BITER VEYA ASIRI MESGUL OLDUGU ICIN DISKE BASVURURDU AMA DISK RAM A GORE COK YAVAS DIR
BIOS UN GUNEL OLMASI RAM IN HIZLI CALISABILMESI ICN MUTHIS ONEMLIDIR
!VERIYI ELEKTRIKSEL ORTAMDA GECICI OLARAK TUTABILIYOR, STATIK VE DINAMIK OLARAMAK UZERE CALISMA PRENSIBI IKIYE AYRILIRLAR 


!MICROSOFT SERVER 2017 GIBI GORDGUMUZ IFADELER MICROSOFT ISLETIM SISTEMMININ 2017 NIN YANI SERVER DONANIMLARINDA DA KULLANILABILECEGINI IFADE EDER

BOTTLENECK-PERFORMANS TERIMIDIR, SISENIN AGZI NE KADAR DAR ISE SISENIN BOSALMASI O KADAR UZUN ZAMAN ALIR...YANI PERFORMANS TIKANKLIGINI IFADE ETMEK ICINDIR, DONANIMSAL VE YAZILIMSAL MIMARILIER SERVER LARDA, BU PROBLEMI COZMEK ICIN VARDIR

!SERVER DA EN ONEMLI PARAMETRELERINDEN BIRISI STABILLIKTIR, BU CIHAZLAR UZUN SURE ACIK KALMAK VE CALIMSAYA DEVAM EDEBILMEYE YONELIK YAPILMISTIR, KESINTIYE UGRAMAMSAI ICIN..DOLAYISI ILE YUKSEK ERISIRLILIK, STABILLIK(UZUN SURE VE PERFORMANSLI CALISMASI DEMEKTIR), 

!AG PROTOKOLLERI VE MIMARILERI 
NETWORKUN YARARLARI¨

PROGRAM PAYLASIMI
DOSYA PAYLASIMI
YAZICI PAYLASIMI(MALIYET ACISINDAN ONEMLIDIR)
GUVENLIK(kimlik dogrulamasi,kaynaklar yetkiler dahilinde kullanilmasi saglanir)
MERKEZI YONETIM(sistem yoneticileri tarafindan tum cihazlar ve bilgisyarlar uzaktan yonetilebilir..uzaktan pc nin ekrani izlemek, yedegini almak, ve o pc kullanicisina sinirli izinler vermek, onun kullanim yetkilerini kontrol etmek)

!SERVER TARAFINDAN BASKA SERVER DA BULUNAN VERITABANININ KULLANILMASI
!KOLLEKTIF CALISMAYI SAGLAMAK, TAKIM CALISMASI

!NIC-NETWORK INTERFACE CART, ETHERNETIN KULLANDIGI KARTA VERILEN ISIMDIR, ETHERNET ARAYUZDUR

!AG ORTAMINDA CALISAN ISLETIM SISTEMLERI 2 FARKLI ROL USTLENIR 
1-SERVER - AG KAYNAKLARI ELINDE TUTAN VE DIGER BILGSAYRLARA YETKILER DAHILINDE SUNAN ISLETIM SISTEMIDIR 
2-CLIENT - SUNULAN KAYNAKLARA ERISEBILEN ISLETIM SISTEMLERIDIR 

HOST-EVSAHIBI 
SERVER LARDAN BAZEN HOST DIYE BAHSEDILEBILIR..
!MODEM SEMBOLU USTUNDE HOST YAZABILIR, INTERNET VERDIGI VE IP DAGITTIGI ICIN 
!AHMET IN PC SINDEN FATMA NIN PC SINE DOSYA PAYLASIP, DOSYA VERIRSE BURDA AHTMET PC SI HOST OLMUS OLUR..AMA AHMET IN PC SI SERVER DIR DIYEMEYIZ 

!AG BILESENLERI VE MIMARISI 
AG ARAYUZ KARTI-NETWORK INTERFACE CARD
AGA BAGLNMAK ISTYEN HER CIHAZDA OLMASI ZORUNLU BIR DONANIMDIR
!AGA GONDERILECEK VERIYI ELEKTRIK SINAYLINE DONUSTURUP KABLO VE ANTENE ILETIR 
!GUNUMUZDE ANAKRTA TUMLESIK-ONBOARDA DE URETILIRLER 

!REPEATER(TEKRARLAYICI) VE HUBMERKEZI 
AGDA KULLANILAN KABLOLARIN MAKSIMUM ERISIM MESAFELERI VARDIR
ORNEGIN UTP KABLO SINYALI MAX 100 METRE MESAFEYE TASIYABILIR. DAHA UZAK MESAFEYE TASINMASI ICIN ARAYA REPEATER VEYA HUB KONULMASI GEREKIR
REPEATER VE HUB AZALAN SINYAL GUCUNU YUKSELTEREK DAHA UZAK MESAFEYE VERI ILETIMINI SAGLAR
REPEATER TEK PORTLU
HUB COK PORTLU

!NETWORK SWITCH
BILGISAYAR VE DIGER DONANIMLARI BIRBIRINE BAGLANMASI SAGLANIR

EV MODEMLERININ ARKASINDAKI PORTLAR SWITCH GIBI DAVRANIR YAZILMSAL OLLARAK 
SWITCHLER KOMUT ARAYUZU-CLI VEYA WEBARAYUZU HTTP UZERINDEN KONFIGURE EDILEBILIR

!ROUTER-YONLENDIRICI - WAN(WIDE ARE NET)
GENIS AGLARDA VE INTERNETTE KULLANILIR
YAPISI BIRBIRINDEN FARKLI NETWORKLERI HABERLESTIRIR

VERILERI BIR NETWORKDEN DIGERINE YONLENDIRIR 
KENDSINE GELEN VERIYI HEDEFE EN KISA YOLDAN ERISTIRME HSAPLAMALARI YAPAR

!MODEM
ETHERNET KARTINDAN GONDERILEN VERIYI INTERNET SAGLAYICIDAN(INTERNET SERVICE PROVIDER) KIRALANAN HATTIN TURUNE GORE DONUSUM YAPAR 

!FIREWALL(GUVENLIK DUVARI) VE ONEMI 
BILGISAYARDAKI ANTIVIRUS NE YAPIYORSA NETWORKDEKI FIREWALL ONU YAPAR 
YAZILIMSAL-DONANIMSAL OLARAK IKIYE AYRILIR 
!YAZILIMSAL OLANLAR ISLETIM SISTEMLERI UZERINE UYGULAMA OLARAK KURULABILIRLER 
IC VE DIS AG ARASINDA GELEN-GIDEN VERILERIN(PAKETLERIN) KONTROLUNU YAPAR.ZARARLI VERILERI VE SIBER TEHDITLERI BLOKLAR income-btn
DOGRU YAPILANDIRILMASI GEREKIR, SISTEM YONETICISI TARAFINDAN
WEB ARAYUZU VEYA KOMUT ARAYUZU(CLI) ILE YAPILANDIRILABILIR
BIRDEN COK GUVENLIK ONLEMI ALABILME OZELLGIINE SAHIP PLAN FIREWALL LAR DA VARDIR 
ROUTER GIBI DE DAVRANABILIR VERILERIN -PAKETLERIN YONLENDIIRLMESINI SAGLAYABILIR

!YAZILMSAL FIREWALLAR HIRSIZ EVE GIRDIKTEN SONRA ODAYI KORUMAYA CALISIR
!DONANIMSAL FIREWALL DA BAHCEYI, DIS KAPIYI KORUR

!VERILER NETWORK ARASINDA DOLASIRKEN PAKET HALINDE DOLASIRLAR 
!ATAKLAR HERZAMAN DISARDAN GELMEZ, GELEN BIR MAILE TIKLANMASI ILE YAYILAN BIR VIRUS ICERDEN YAYILABILIR, VEYA USB ILE

!FIREWALL SUZ NETWORK YONETILMEZ...BU COOK ONEMLIDIR
!Networkumuzu disariya karsi koruyan network cihazlari
!Onceden belirlenmis guvenlik kurallarina gore , networke gelen giden trafigi izleyen ve kontrol eden donanim ve yazilim tabanli network sistemidir firewall

!DONANIIMSAL FIREWALL LAR VE YAZILIMSAL FIREWALL LAR MEVCUTTUR 
ORNEGIN BILGISAYARIN ISLETIM ISTEMI DE INTERNETTEN GELEBILECEK TEHDITLERE KARSI KORUMAK ICIN YAZILMISAL TABANLI GUUVENLIK DUVARLARI ICEREBILIYOR, WINDOWS,MACOS..KENDI ICERISINDE YAZILIMSAL FIREWALLAR ICERIYOR..
!BIZIM SU AN ASAGIDA YAZDIGIMZ DONANIMSAL FIREWALL
FIREWALL WAN-WIDER AREA NETWERK YANI INTERNET ILE LAN-LOCAL AREA NETWORK ARASINA YERLESTIRILEREK, LOCAL NETWORKUMUZ KORUMAK AMACI ILE KULLANAILABILIYOR
LAN-SWITCH-ROUTER-FIREWALL-INTERNET SEKLKINDE YA DA 
LAN-SWITCH-FIREWALL-ROUTER-INTERNET OLACAK SEKILDE DE YERLESTIRILEBILIYOR
TEMEL OLARAK NETWORK UZERINDEN KENDISINE GELEN PAKETLERIN ONCEDEN KENDISINE TANIMLANMIS KURALLARA GORE GECIP GECMEYECEGINE KARAR VERIYOR
KURALLARA UYMAYAN PAKETLERE IZIN VERMIYOR 
BIRCOK FARKLI FILTRELEME OZELLIGI IILE NETWORKUN, GELEN VE GIDEN PAKETLERINI KONTROL ALTINDA TUTUYOR
!IP FILTRLEME, PORT FILTRELEME, WEB FILTRELEME, ICERIK FILTRELEM GIBI FARKLI FILTRELEME YAPABILIYOR 
1-FIRST GENERATION FIREWALL-PACKET FILTERING FIREWALL:BU SADECE PAKET BASLIGINA GORE HAREKETE EDIYOR 
2.SECOND GENERATION FIREWALL-STATEFULL INSPECTION FIREWALL: PAKETLERIN BASLIKLARININ YANINDA ICERIKLERINI DE KONTOL EDIYOR 
BU ILK 2 FIREWALL LAR GUNUMUZDEKI NETWERK TEHDITLERI ILE BASA CIKMAK ICIN YETERSIZ KLAMAKTADIR
3.3.GENERATION FIREWALL:NEXT GENERATION FIREWALL(NGFW): 
IDS:INTRUSION DETECTION SYSTEM:SALDIRILARI TESPIT EDIP LOGLAR
IPS:INSTRUSION PREVENTION SYSTEM:SALDIRI DURDURMA VE ONLEME SISTEMI 

!ORNEGIN SIRKETIMIZDE HTTP 80 PORTUNU INTERNETE ERISMEK ICIN, ERISIME ACABILIORUZ VE 80 PORTUNDAN ARTIK BAKA UYGULAMLARDA GECEBILIYOR VE 1. VE 2. GENERATION FIREWALL LAR BUNU ONLEYEMIYOR ONDAN DOLAYI 3.GENERATION FIREWALL LAR KULLANLIYOR CUNKU, 3.GENERATION FIREWALL LAR UYGULAMA KATMANININ FILTERLIYOR VE DIREK FTP, DNS, GIBI UYGULAMALARI ANLAYABILIYOR VE ISTENMEYEN UYGULAMALARI FARKEDEBILIYOR, BIR PORTUN KOTUYE KULLANILIP KULLANILAMAYCAGINI DA ANLAYABILIYORLAR 
LOG YONETIMI,VPN, VS GIBI ISLEMLER ICIN DE KULLANILABILIIYOR 
FIREWALL NERELERDE KULLANILIR 
NETWORK TRAFIGININ YOGUN OLDUGU VE GUVENLIK IHTIYACI DUYULAN ISYERLERINDE KULLANILIR 
FIREWALL OLMADAN NETWORK MIMARIS NASIL OLUYOR 
MODEMLER NE YAPIYOR INTERNETI SERVIS SAGLAYICIDAN ALIR VE ISYERINDEKI PC LERE BIR LOCAL NETWERK OLUSTURUR GOREVI BUDUR, YA DA MODEM YERINE BU ISLEMI SWTICH LER YAPAR
MODEM VEYA SWITCH LER GUVENLIGI YETERLI DUZEYDE SAGLAYAMADIKLARI ICIN FIREWALL A IHTIYAC DUYARIZ..
MODEM-INTERNETI ALIR DAGITIR, IP ADRESLERINI ALIR DAGITIR, PORT ACMA ISLEMI YAPAR, IP SABITLEME VS BUNLARI YAPAR AMA PROFESYONEL BIR NETWERK ALT YAPISINI MODEM VE SWTICH ILE YAPAMAYIZ
SWITCH YA DA MODEM FIREWALL A KABLO ILE BAGLANIYOR, VE MODEM ARTIK SORNRASINDA NETWORK ISLEVINI YITIRIYOR O ISLEVI FIREWALL A AKTARIYOR SADECE INTRNET HATTINI AYATKTA TUTUMAKLA GOREVI OLUYOR...VE NETWORKK YONETIMINI FIREWALL A BIRAKIYOR
FIREWALL SERVER A BENZER BIR CIHAZDIR.
FIREWALL KORUMA ISLEMINI YANINDA DAHA KAPSAMLI NETWORK YONETIMI YAPILABILMESINI SAGLIYOR
GUVENLIK ITIBARI ILE PERSONALLERDEN BAZILARININ , YONETIMIN KULLANDIGI SERVER I KULLANMALARINI ISTEMEZ ISEK, FIREWALL VASITASI ILE,  2 BIRBIRINDEN BAGIMSZIZ NETWORK OLUSTURARAK, PERSONELIN KULLANDIGI NETOWRK I FARKLI BIR NETWORK, SERVERLARIN KULLANDIGI NETOWRKU DE FARKLI BIR NETWORK YAPABILIYORUZ,AYNI NETWORK ALTINDA OLUNMASINA RAGMEN, SANKI PERSONELIMIZ ILE SERVER LARIMZ FARKLI MODEMLERDEN FARKLI NETWERKLERE SAHIP GIBI DAVRANMASINI SAGLAYABILIOYRUZ

MISAFIR AGI ICIN DE GECERLIDIR 
MISAFIR HATTI OLMADAN WIRESS SIFRESI NI DIREK VERDIGMZ DE EGER NETWORK BILGISI IYI ISE MISAFIR SERVER A BAGLANIP ORDAN ISTEDIGI DOSYAYI CEKEBILIR...VS AMA FIREWALL SYESINDE MISAFIRE OZEL SIFRELI BIR NETWORK OLUSTURURSAK SADECE ONLARA AYRIDGIMZ NETWORKE BAGLANABILECEKLER VE BU SEKIKLDE SISTGEMIMIIZ KORUYABLMIS OLACAGIZ
RESTARUANTTA YONETIMIN KULLANDIGI, WIRELESS VARDIR BIR DE MUSTERILERE VERILEN WIRESS VARDIR, BUNLAR AYNI DEGILDIR TABI KI, YOKSA COK GUVENLIK PROBLEMI OLACAKTIR
!FIREWALL COK KRITIK ONEME SAHIP OLAN LOG TUTMA ISINI YAPARAK, GERIYE DONUK KONTROL EDEREK NERDE PROBLEM VAR, KIM NERDE YAPMIS...BUNU GOREBILIRIZ
!FIREWALL ILE ERISIM KISITLAMA , FIREWALL ILE FARKLI GRUPLAR OLUSTURLUYOR PERSONEL GRUBU ORNEGIN, ONLARI ICIN MESELA FACEBOOK GIRISI KAPATILABILIYOR PERSONEL IN GIRDIGI CIHAZLARDAN VE BU SAYEEDE PERSONEL KENDI BILGISYARLARINDAN GIRIDIGNDE FIREWALL UN ONLARA SUNDUGU AYRI NETWORK DEN GIRDIKLERI ICIN, ERISIM KISITLANMIS BIR SEKILDE OLDUGUNDAN DOLAYI ARTIK ONLARA KISITLANAN SITELERE GIREMEYCEKLERDIR

!INTERNET KESILME DURUMUNDA, ORNEGIN BIZ 2-3 HAT ALDIK AYRI AYRI, VE FIREWALL A DA BIR KURAL TANIMLIYORUZ EGER 1.HATTA INTERNET KESILME DURUMU OLURSA, 2.HATTI DEVREYE SOK, O DA GIDERSE 3.HATTI DEVREYE SOK DIYE KURAL YAZABILIRIZ..KI BU HARIKA BIR STABILLIK KAZANDIRIYOR BIZE..

!FIREWALL CIHAZINA DIUYELIM KI, ISYERINDEKI PC LERI TANIMLADIK MAC ADRSLERINI TANIMADIK VE BU CIHZLAR DISINDA BASKA BIR PC, VE CIHAZLA NETWERKIMIZE GIRILMESIN DIYE KURAL YAZARSAK, O ZAMAN ISTE BASKA CIHAZLARDAN NETWORKUMUZ KORUMUS OLURUZ

AG KABLOLARI(NETWORK CABLES)
AG MIMARISI(NETWORK ARCHITECTURE) VE PROTOKOLLERI
!TUM NETWORKU ANLAMAYA BASLADIGMIZ YER, PROBLEMIN GELECEGI YER BURASIDIR BURAYI COK IYI BILIRSEK, PROBLEMLERI COZEBILIRIZ

Bir agin mimarisini belirleyen 2 temel ozellik vardir 
1)Network topolojisi:Cihazlarin kablo ve baglanti yerlesim haritasi gibi dusunulebilir
!En onemllisi Star Toplojisi
2)Networkun buyuklugu
1-LAN
2-WAN(COGRAFI OLARAK BIRBIRINDEN UZAK LAN LARIN BIRLESTIRILMESI ILE OLUSAN AGDIR, ORNEGIN INTERNET NETWORK)
!EGER BIR DAIRE LAN ISE APARTMAN WANDIR. EGER BIR APARTMAN LAN ISE , SITE WAN DIR
!BIR SIRKETIN AYNI ULKE ICINDE FARKLI SEHIRLERDEKI OFISLERINDE BULUNAN LAN NETWORKLERI BIRBIRINE BIRLESTIREN DE WAN DIR

!2 FARKLI NETWORKUN HABERLESMESINI SAGLAYAN CIHAZIN ADI ROUTER DIR, MODEMLER KIMI ZAMAN ROUTER GOREVI DE GORURLER...BUNU DA BILELIM
!ROUTER LAR INTERNET ARACILIGI ILE FARKLI LAN NETWORKLERINI BIRLESTIREREK O CHIAZLARIN BIRBIRLERI ILE ILETISIME GERCMESINI SAGLAYABILIIR...
!MODEM-ROUTER ARKASINDAKI PORTLARIN 4 TANESI ILE ORNEGIN 4 PC YE HIZMET VERIRKEN, 1 PORTU ILE DE WAN A HZMET VERIYOR, VE ROUTER ROLU ILE HER IKI LAN I BIRBIRI ILEBIRLESTIRIYOR

!NETWORK PROTOKOLU
Agda calisan cihazlarin iletisim kurabilmeleri icin gerekli kurallar butunudur
Ag protokollerini dillere benzetebilriiz, insanlarin anlasabilmesi gibi bilgisyarlarinda anlasabilmeleri icin ayni protokolleri kullanip anlasabillmeleri gerekir
!Gunumuzde en yaygin protokol TCP/IP(Transmisson Control Protocol/Internet Protocoldur).TCP/IP her turlu agda kullanilabilen esnek,gelismis ve hizli bir protokoldur 
!Kullanilmak istenen protokolu isletim sistemleri saglar
!Bu kurallar IETF(INTERNET ENGINEERING TASK FORCE) tarafindan RFC(Request for Comments) bildirileri ileberlilenir ve standartlasitrilir
!ARTIK HER TURLU AGDA TCP/IP PROGOTOKOLU KULLANILIYOR...NETWORK CIHZLARINDA KENDI ICLERINDE KULLANDILARI DILLER FARKLI OLABILIR TIPKI ISLETIM SISTEMLERI GIBI NETWORKDE KULLANDIKLARI DIL AYNIDIR, BU DIL TCP/IP DIR... SADECE BU YOK, TCP/IP DEN ONCE OSI REFERANS MODELI VARDI, TCP/IP ISE ONA ALTERNATIF OLARAK GELISTIRILDI, HER TURLU AGDA KULLANILABILLEN ESNEK, HIZLI VE GELISMIS BIR PROTOKOLDUR

KULLANILMAK ISTENEN PROTOKOLU ISLETIM SISTEMLERI SAGLAR
!TCP/IP MODEL

Step-by-Step Process of Streaming a Video
1. Application Layer
Protocols Involved: HTTP (or HTTPS for secure communication).
What Happens: When you select a movie on Netflix, your browser or app sends an HTTP request to Netflix’s servers. This request is formatted according to the HTTP protocol’s rules, specifying what resource (video data) is being requested.
Role in Streaming: Netflix uses adaptive bitrate streaming technology (like HLS or MPEG-DASH) which operates over HTTP. This technology divides the movie into small chunks or segments. Based on your current internet speed, it determines which quality of video to send you (low, medium, or high resolution).
2. Transport Layer
Protocols Involved: TCP (Transmission Control Protocol), occasionally UDP for other types of streams (like live broadcasts).
What Happens: TCP takes the HTTP request generated by your application and breaks it down into smaller packets that are sent across the Internet. TCP ensures that these packets are reliably delivered to Netflix’s server and that the packets received back (video data) are in the correct order and without errors.
Role in Streaming: TCP manages the flow of data packets between your device and Netflix’s servers, using mechanisms like congestion control and error correction to adjust to varying network conditions. This ensures a smooth streaming experience without interruptions.
3. Internet Layer
Protocol Involved: IP (Internet Protocol), including routing functionalities with protocols like ICMP (Internet Control Message Protocol) for diagnostic or error messages.
What Happens: IP is responsible for taking the TCP packets and delivering them to the right destination. Each packet is tagged with source and destination IP addresses. Routers along the path use this information to forward packets to the destination.
Role in Streaming: IP routes each video packet from Netflix’s servers back to your device. It handles the addressing and routing across various networks that the packets must travel through.
4. Link Layer (Network Interface Layer)
Protocols Involved: Ethernet, Wi-Fi (802.11 protocols), and others depending on your connection type.
What Happens: This layer is where the physical transmission of data occurs. If you are connected via Wi-Fi, the Link Layer protocols manage how data is encoded into radio signals transmitted by your router and received by your device.
Role in Streaming: Handles the actual data transmission over your local network, ensuring that the packets are delivered between your device and the local router/modem.
Illustrative Example:
Application Layer: You click "Play" on a movie. Your device sends an HTTP request to fetch the video stream.
Transport Layer: TCP takes this request and divides it into packets, managing the data transfer to ensure all packets reach Netflix's server correctly.
Internet Layer: The packets are sent across various network paths using IP. They travel across multiple routers and networks until they reach the server.
Link Layer: The first and last leg of this journey involves the physical network connections, like your home Wi-Fi and Netflix’s data center infrastructure.
Visualization
plaintext
Kopier kode
[Your Device] ---HTTP Request---> [Application Layer] ---TCP Segmentation---> [Transport Layer]
---IP Routing---> [Internet Layer] ---Physical Signals---> [Link Layer] ---> [Netflix Server]
And the response follows the reverse path:

plaintext
Kopier kode 
!TCP/IP TEK BIR PROTOKOL DEGILDIR, BUNYESINDE COK FAZLA PROTOKOL VARDIR, HEPSININ AYRI ISLEVLERI VARDIR
TCP/IP PROTOKOLLERIN TOPLANMIS HALIDIR
PEKI DIGER PROTOKOLLERDEN FARKI NEDIR?

TCP/IP KULLANILAN BIR NETWERK DE CIHAZLAR UC PARAMETRE ILE TANIMLANIR

1-CIHAZ ADI(PC LERE KENDI KOYDUGMZ PC ADLARI)
2-IP ADRESI
3-MAC ADRESI

!IP ADRESI YALNIZCA TCP/IP PROTOKOLUNE OZELDIR, DIGER PROTOKOLLERDE IP ADRESI BULUNMAZ
!NETWORK UZERINDEKI ILETISIM, YALNIZCA MAC ADRESLERI ILE GERCEKLESIR. BU YUZDEN "CIHAZ ADLARININ IP ADRESLERINE, IP ADRESLERININ DE MAC ADRESLERINE DONUSTURLMESI GEREKIYOR"

!TCP/IP KULLANAN 2 PC NASILHABERLESTIGINE BAKARSAK 
CIHAZ ADI-ADEMPC  CIHAZ ADI IP ADRESINE DONUSTURULUR,
IP ADRESI:192.168.0.154  IP ADRESI MAC ADRESINE DONUSTURULUR
MAC:00:46:9A:B5:2A:CB MAC ADRESI ILE DE ARTIK NETWORK UZERINDE AYNI NETWORK DE BULUNAN BASKA BIR PC ILE ILETISIME GECEBILIRIZ 

CIHAZ ADI-ZEYNEPC  CIHAZ ADI IP ADRESINE DONUSTURULUR,
IP ADRESI:192.168.0.151  IP ADRESI MAC ADRESINE DONUSTURULUR
MAC:00:1B:63:84:45:E6

!PEKI IP ADRESI BILINEN MAC ADRESI BILINMEYEN BIR CIHAV VAR ISE O ZAMANDA DEVREYE ARP-ADRESS RESOLUTION PROTOCOL DEVERYE GIRER
SOURCEIP: GONDREN IP , YI VERIRIZ, SONRA DEST:0.0.0.0 VE ALICI, YANI IP ADRESI OLAN PC NIN IP ADRESINI VERIRIZ VE BIZE MAC ADRESNI YOLLSMASI GEREKGIGINI SOYLERIZ
BROADCAST(TUM AGA-NETWERKE GONDERILEN MESAJLAR ICIN KULLANILIR, BROADCAST SANKI SOYLE DUSUNLEIM, BAGIRARAK KONUSRAK SESI HER TARAFA YAYILMIS, YANI TABIR I CAIZSE BAGIARARAK HOPERLORLE DUYURU YAPAN INSAN GIBI DUSUNELIM), IP ADRESI UZERINDEN BLUNAN PC DONUS OLARAK, HEDEF IP YE MAC ADRESINI GONDERIYHOR BROADCAST  YAPMIYOR BUNA DIIKKAT EDELIM

!Bilgisayar bir ortama girdigi zaman ortamdaki tum cihazlara, 1-dhcp-discover paketini broadcast yapar, yani tum cihazlara gonderir ki ortamda dhcp var mi onu ogrenip ondan ipi alabilmek icin,sonra dhcp sunucusu bilgi veriyor ve ben sana ip-subnet-dns-default gateway hepsini vereblirim diye 2-dhcp-offer response gondriyor, ve sonra da pc miz dhcp yi ogrenince, direk olarak dhcp ye request gonderir 3-dchp request ve tekrardan dhcp de 4.asama da ip ve diger adresleri alabiliyor

1-Source ip:0.0.0.0(ip yok) SourceMac:00:1B:63:84:45:F6(kendi mac adresini gonderir)
Dest Ip:255.255.255.255(Broadcast yapilacagi zaman ip bu sekidle verilir)
Dest Mac:FF:FF:FF:FF:FF:FF (Direk hedef Mac adresi bilinmeyip de broadcast atilacagi zaman bu sekilde yapilir)
2-DHCp kendi ip ve mac adresini gonderir DestIP henuz olmaidig icin 0.0.0.0 ve des mac adresini de ip talep eden pc den geldigi icin onu da bilir,dest-mac:00:1B:63:84:45:F6
3-
4-


!TCP/IP NIN 4 KATMANI VARDIR 
1-APPLICATION(UYGULAMA)
2-TRANSPORT(ILETISIM/TASIMA)
3-INTERNET
4-NETWORK


!TCP/IP INTERNETIN DILI OLARAK ADLANDIRILIR 
CIHAZLARA IP KATMANI, IP ADRESLERI SAGLAYARAK CIHAZLARIN BIRBIRLERI ILE KOLAYCA ILETISIMI VE KENDI ARALARINDA GUVENLI, ESNEK VE KOLAYCA PAKET ALISVERISI YAPILABILMESINI SAGLAR.
TCP KATMANI EN USTTE BULUNUR, IP KATMANI UZERINDE BULUNUR TCP KATMANI 
TCP KATMANI DA TUM VERILERIN, BOZULMADAN HATASIZ OLARAK TESLIM EDILMESINI SAGLAR..AYRICA GUVENLIR
!TCP/IP protokol mimarisi, internet üzerinden iletişim ve veri aktarımı için güvenilir ve güvenli bir temel sağlar. Tüm bilgisayar sistemlerinde kullanılan, farklı ağlar ve cihazlar arasında kolay birlikte çalışabilirlik sağlayan açık ve yaygın olarak benimsenen bir standarttır. TCP/IP mimarisi güvenlik konusunda da önemli bir rol oynamaktadır

!TCP/IP mimarisi aynı zamanda yönlendirme ve ağ adresleme protokolleri gibi ağlar üzerindeki bilgi ve kaynakların yönetiminden de sorumludur. Bu protokoller, her bağlantıyı manuel olarak yapılandırmak zorunda kalmadan veri ve bilgilerin bir ağ üzerinden gönderilmesini sağlar. Bu, büyük ölçekli, heterojen ağların yönetimini kolaylaştırır ve tüm verilerin güvenilir, güvenli ve hızlı bir şekilde iletilmesini sağlar. Protokoller ayrıca verilerin aktarım sırasında kaybolmamasını veya bozulmamasını ve uygulamaların farklı ağlar üzerinden birbirleriyle konuşabilmesini sağlamaya yardımcı olur.

!TCP/IP modeli olmasaydı, dünyadaki tüm farklı cihazların birbirleriyle iletişim kurması imkansız olurdu. Model, bilgisayarların birbirleriyle konuşmaları için standart bir yol sağlar, bu nedenle modern ağlar için önemlidir.

!Ayrıca, görevleri yönetilmesi ve anlaşılması daha kolay olan daha küçük aşamalara ayırarak iki sistem arasındaki iletişimin karmaşıklığını azaltmaya yardımcı olur. Bu, video akışı veya çevrimiçi oyun gibi daha karmaşık uygulamaların gecikme veya kesinti olmadan gerçekleştirilmesini mümkün kılar.

TCP Nedir?
 

TCP, bilgisayarlar arasındaki iletişimin, küçük paketler halinde ve kayıpsız olarak gerçekleşmesini sağlayan bir protokol olarak tanımlanabilir. TCP protokolünün en önemli özelliği kimlik doğrulaması yapması ve veriyi karşı tarafa gönderip alırken veri bütünlüğünü korumasıdır. Günlük hayatta sık sık kullanılan HTTP, HTTPS, POP3, SSH, SMTP gibi protokollerin veri aktarımı TCP aracılığı ile gerçekleşir. TCP port nedir konusu ise bu bilgiler ışığında kimlik doğrulaması sağlayan bir port türü olarak nitelendirilebilir. TCP bağlantısı nedir sorusunun cevabı ise veri bütünlüğü sağlanmış bir bağlantı türü olarak verilebilir.


IP Nedir?
 

İnternet protokolü olarak isimlendirilen IP, bilgisayarların birbiri ile iletişimindeki en önemli nokta olan ağ adreslemesinde kullanılan düzeni ifade eder. Bir nevi yönlendirme protokolü olan IP veri için gerekli olan yönlendirmelerin kurallarını belirler.

 

TCP / IP Protokolleri Nedir?
 

TCP / IP protokolleri nedir konusunu merak edenler için TCP ve IP protokollerinin birleşmesi ile ortaya çıkmış internet üzerindeki bir iletişim metodu olduğunu söyleyebiliriz. Bu metot sayesinde internete bağlı tüm cihazların birbiri ile haberleşmesi mümkün hale gelir. Kısacası TCP/IP protokolü bilgisayarlar arası veri iletişiminin kurallarını belirleyen bir iletişim protokolleri bütünüdür. Bilgisayarlar arası iletişim farklı protokol aileleri üzerinden gerçekleşir. Bu protokolleri birbirinden ayıran özellik ise kullanım amaçlarıdır. Örneğin FTP bir dosya iletim protokolü iken SMTP e-posta iletmek için kullanılır.  TCP IP katmanları nedir konusu ise merak edilen bir diğer nokta. Bu katmanlar “Ağ, İnternet, Taşıma ve Uygulama” olmak üzere 4 adettir. Bu katmanların her birinde farklı protokoller bulunur. Örneğin uygulama katmanında bulunan en önemli protokoller DNS protokolleridir. DNS sayesinde alan adları çözülür ve bu alan adlarına karşılık gelen IP adresleri belirlenir. Aynı zamanda HTTP ve HTTPS protokolleri de bu katmanda yer alır.

TCP/IP BILGISAYARLAR ILE VERI ILETMEK/ALMA BIRIMLERI ARASINDA ORGANIZASYONU SAGLAYAN, BOYLECE BIRYERDEN DIGERINE VERI ILETISMINI OLANAKLI KILAN PEK COK VERI ILETISIM PROTOKOLUNE VERILEN GENEL ADDIR. KISACA TCP/IP PROTOKOLLERI BILGISAYARLAR ARASI VERI ILETISIMININ KURALLARINI ORTAYA KOYAR
!TCP/IP PROTOKOL KUMESI 
ALTI CEKIRDEK VE 5 PROTOKOLDEN OLUSUR 
-TCP-TRANSMISSION CONTROL PROTOCOL
-UDP-USER DATAGRAM PROTOCOL
-IP-INTERNET PROTOCOL
-ICMP-INTERNET CONTROL MESSAGE PROTOCOL
-IGMP-INTERNET GROUP MANANGEMENT PROTOCOL 
ARP-ADDRESS RESOLUTION PROTOCOL 

TEMEL TCP/IP PROTOKOLLERI

FTP(FILE TRANSFER PROTOCOL)
TFTP(TRIVIAL FILE TRANSFER PROTOCOL)
HTTP(HYPERTEXT TRANSFER PROTOCOL)
HTTPS(SECURE HYPERTEXT TRANSFER PROTOCOL)
SMTP(SIMPLE MAIL TRANSFER PROTOCOL)


In the TCP/IP model, which is designed to facilitate communications across diverse networks using standard protocols, the layers are structured from the bottom up as follows:

Bottom Layer: Link Layer
Also Known As: Network Interface Layer
Purpose: This layer handles the physical and data link aspects of network communication. It deals with the actual physical connection between the network devices and the medium over which the data travels, such as Ethernet cables, Wi-Fi signals, etc.
Role in the Stack: It is responsible for getting data across one particular link or network segment, including addressing, framing, error detection, and more.
Second Layer: Internet Layer
Core Protocol: Internet Protocol (IP)
Purpose: This layer is responsible for routing the packets of data from the source to the destination. Essentially, it moves packets across multiple networks (internetworking) and helps achieve host-to-host communication.
Role in the Stack: It handles the logical addressing part through which it is possible to identify every device uniquely on the network through an IP address.
Third Layer: Transport Layer
Core Protocols: Transmission Control Protocol (TCP) and User Datagram Protocol (UDP)
Purpose: The Transport Layer is crucial for managing the delivery of data packets between computers and hosts. It provides services such as connection-oriented data stream support, reliability, flow control, and multiplexing.
Role in the Stack: It ensures that data are transferred from point A to point B reliably and without errors. TCP provides a connection-oriented service, and UDP provides a connectionless service.
Top Layer: Application Layer
Examples of Protocols: Hypertext Transfer Protocol (HTTP), File Transfer Protocol (FTP), Simple Mail Transfer Protocol (SMTP), and more.
Purpose: This layer is where end-user software applications interact with the network stack. It defines protocols for specific data-communication services according to the application’s requirements.
Role in the Stack: It provides process-to-process communication services for applications. It is the layer where user-intended operations like browsing the web, sending an email, or transferring files are initiated and managed.
Hierarchical Summary:
Top Layer: Application Layer
Third Layer: Transport Layer
Second Layer: Internet Layer
Bottom Layer: Link Layer
This structure illustrates that data handling starts at the top layer in applications, moves down through the layers gaining the necessary header information and error checking at each step, travels across the network at the bottom layers, and then moves back up through the layers on the receiving end. Each layer serves distinct roles but works collectively to ensure seamless, efficient, and reliable network communication.


!---- TUM SURECI BASTAN SONA BURDAN OKUYABILIRIZ 

 The TCP/IP model organizes network communication into layers, with each layer having specific protocols that perform distinct tasks. The entire process of data communication from one device to another involves these layers working sequentially, where each layer has a unique role in ensuring the data reaches its destination correctly and efficiently. Here’s a breakdown to reinforce your understanding:

Overview of the TCP/IP Model:
Application Layer:

Role: This is where network applications operate. The application layer deals with protocol details that are specific to different types of data and applications, such as web browsing, emailing, file transfer, etc.
Protocols: HTTP (for web browsing), SMTP (for email), FTP (for file transfers), etc.
Function: These protocols format the data in a way that is understood by the application receiving it on the other end. For instance, HTTP structures data into web pages, while SMTP structures data into email formats.
Transport Layer:

Role: Provides communication session management between host computers. It divides the data into smaller units if needed, ensures the data segments are reliably networked, and error-checks the assembled data segments.
Protocols: TCP (Transmission Control Protocol) and UDP (User Datagram Protocol).
Function: TCP provides reliable, ordered, and error-checked delivery of a stream of data so that programs on the networked devices can manage data transmission smoothly. UDP, in contrast, focuses on low-latency transmission without built-in error checking and correction.
Internet Layer:

Role: Handles the packing of data into data packets known as IP datagrams, which contain source and destination address information that is used to forward the datagrams between hosts and across networks.
Protocols: IP (Internet Protocol), ICMP (Internet Control Message Protocol), etc.
Function: IP ensures that datagrams are routed across network boundaries from the source to the destination which may involve traversing multiple networks (routing).
Link Layer (sometimes referred to as the Network Interface Layer):

Role: Concerns itself with the media data actually travels over. This layer defines the protocol details that operate directly on the hardware itself and are specific to the hardware interface and media that are being used.
Protocols: Ethernet, Wi-Fi, and others that operate on a more physical level, handling connections to the hardware itself and transmission across it.
Function: Transmits the datagrams to and receives them from the network.
How It All Works Together:
When you send an email, play an online game, or request a web page, your request starts at the Application layer. Depending on the task, it will use protocols like HTTP, SMTP, or others.
The request then goes down to the Transport layer where it is segmented and verified for reliability via TCP or for speed via UDP.
It then moves to the Internet layer where it is packaged into IP datagrams and routed across various network paths to its destination.
Finally, it reaches the Link Layer where it is actually transmitted over physical media.
Each layer in the TCP/IP model abstracts certain details of how data is transmitted over the network, allowing each layer to perform its task independently yet interactively, supporting the layers above and below seamlessly. This abstraction makes the model not just functional but also incredibly flexible and robust for internet communications.

!----


!TCP/IP DE OSI GIBI UST USTE SIRALANMIS KATMANLARDAN OLUSUR
!OSI MODELI 7 KATMANA, TCP/IP MODELI 4 KATMANA SAHPTIR

!TCP DATA NIN SAGLIKLI ULASIP ULASMADIGINI TAKIP EDER, YAPTIGI ISIN ARKASINI TAKIP EDER. VERI ALICIYA ULASMAZ ISE VERIYI BIR DAHA GONDERIR. BAGLANTI TEMELLII GUVENILIR BIR ILETISIM PROTOKOLUDUR YANI STABILLIGI GOZETIR. VERI ILETIMINE BASLAMADAN ONCE, GONDERICI VE ALICI ARASINDA ANLASMA SAGLAR(THREE-WAY HANDSHAKE), YANI 3 LU EL SKSMA..ALICIYA ULASMAYAN VERIYI, TEKRAR GONDEREBILMEK ICIN BUNU YAPAR
!UDP GONDERIR GECER, VERI ULASTI MI ULASMADI MI BUNLARLA ILGILENMEZ ONDAN DOLAYI TCP DEN DAHA HIZLIDIR. HIZIN, GUVENLIRLIK VE STABILLIKTEN DAHA ONEMLI OLDUGU BAGLANTILARDA KULLANILIR. STREAMING YAPARKEN, YANI YAYINCISINIZ VE YAYIN YAPIYORUSUNUZ, WEBCAM DE GORUNTULU GORUSURKEN DE DIYEBILIRIZ PAKETLERDEN 100 TANEDEN 3-5 I ULASMAZSA GORUNTUDEN BIRSEY KAYBEDILMEZ VE BIR SORUN YASANMAZ, EN KOTU IHTIMALLE GORUNTU BIRAZ BOZULUR AMA TEKRAR KALDGI YERDEN DEVAM EDER..EGER BU ISLEMI TCP YAPMIS OLSA IDI, GORUNTU VE SES DONDUGU YERDE KALIR TEKRAR BASLAMAZDI..CUNKU TCP DATA NIN TAM OLARAK ULASMASINI PESINI DE TAKIP ETTIGI ICIN ONU BIR SONRAKI ASAMAYA GECIRMEZDI, BOZULAN PAKETI TEKRAR GETIRILENE KADAR BEKLEMMEK ZORUNDA KALNIRDI. TCP GORUNTUYU DURDURUP BEKLETIP SONRA O VERIYI BOZULAN VERIYI GIDIP ALIP GELMEYE CALISIRDI VE CANLI GORUNTULERI CANLI GIBI IZLEYEMEZDIK, ADAM IN 10 DAKIKA ONCE YAPTIGI HAREKETLERI ANCA ALABILRDIK
!CANLI GORUNTULU YAYINLARDA PAKETIN GIDIP GITMESINDEN ZIYADE ASIL ODAK HIZLI GITMESIDIR ONDAN DOLAYI DA GORUNTULU KONUSMALARDA UDP PROTOKOLU KULLANLIR. BIRKAZ PAKET KAYBI BUYUK SORUN DEGILDIR, YA SES AZ GIDER, YINE DE ANLASILABILIR YA GORUNTU BIRAZ BOZULURU AMA SORUN YASANMAZ YA DA KARSIDAKI BIR KEZ DAHA SORAR EN FAZLA
!PEKI YA DOSYA TRANSFER EDIYOR OLSA IDIK , ISTE O ZAMAN DA DATA KAYBI COK KRITIKTIR, BURDA DA TCP TERCIH EDILIR...COOK ONEMLIDIR, EKSIK BILGI ILE GONDERILMESI ISTENMEZ...

!PORT VE PROTOKOLU DOGRU ANLAMA!
PORT U BIR APARTMAN GIBI DUSUNURSEK 
HTTP ONUN ISMIDIR YANI PROTOKOLU, NUMARASI:80 PORT NUMARASIDIR  
BU APARMANA GIDILEN YOLLAR ISE UDP,ICMP,TCP GIBI FARKLI YOLLARLA GIDILEBILIR 

!YOLLARIN, YANI TCP,UDP,ICMP GIBI PROTOKOLLERIN PORTU OLMAZ, AMA PORTUN PROTOKOLUU VARDIR
PROTOKOLLER PORT KULLANMAYABILIR AMA PORT LAR PROTOKOL KULLANMAK ZORUNDADIR
APARMTANIN ISMI OLARAK DA HTTP,DNS...GIBI DUSUNEBILIRIZ
!PROTOKOLLERI YOL OLARAK DUSUNUERSEK YOL UN UZERINDE, HTTP NO:80, FTP NO:21, POP3 NO:110 GIBI APARMTNLAR VARDIR YOLLARDA CUNKU BU UDP.TCP BUNLAR TRANFSERDEN SORUMLUDUR, HTTP,FTP BUNLAR APPLICATION LAYERDE VE GELECEK ISTEKLERI ALIP GERI DONDURURLER, VE PORTLARI VARDIR, TCP,UDP BUNLAR YOLLARDIR YOLLARDAN GIDEREK, DATLARI HTTP,FTP...GIBI PROTOKOLLERE ULASTIRIRLAR...

!PORT NEDIR 
PORTLAR BILGISYALARIN, NETWERKELERIN, SUNUCULARIN GIRIS KAPILARDIR
TCP VEYA UPD BAGLANTILAR, VERRIYI UST KATMANLARA TASIMAK VEYA UYGULAMAYA ILETMEK ICIN(HTTP,FTP..) PORT NUMARALARI KULLANIRLAR 
PORT NUMARALARI AYNI ANDA YAPILAN FARKLI ILETISILMLERIE AYIRTEDEBILMEK ICIN KULLANILIR
HER APPLICATION KATMANI SERVISI, BELIRLI BIR PORTTAN SUNULUR(CUNKU SERVERLARDAN SUNULUR BUNLAR, HTTP,FTP.)
BIR BILGISAYARDA 65536 ADET PORT VARDIR. 1024 TANESI IYI BILINENDIR

APPLICATION KATMANINDA BULUNANLAR
BUNLAR ASLINDA SERVICE DIR... 

 PORT NUMBER       PROTOCOL                        APPLICATION
  20                TCP                        FTP DATA 
  21               TCP                        FTP CONTROL 
  22              TCP                        SSH
  23                TCP                        TELNET
  25              TCP                        SMTP
  53                UDP,TCP                        DNS
  67.68                UDP                        DHCP
  69                UDP                        TFTP
  80                 TCP                        HTTP
  110                TCP                        POP3
  161                UDP                        SNMP
  443                TCP                        SSL
  16,384-32,767                UDP         RTP-BASED VOICE AND VIDEO


  Port Numbers
Definition: Port numbers are used by the TCP/IP protocols (TCP and UDP) to identify specific applications or services running on a networked device. Each port number identifies a specific service that can be provided by a server, with the protocol (TCP or UDP) specifying how data is transmitted.
Protocols
TCP (Transmission Control Protocol) and UDP (User Datagram Protocol) are core protocols of the Internet protocol suite, defining how data should be packetized, addressed, transmitted, routed, and received at the destination.
Protocols Listed: In your list, TCP and UDP are mentioned explicitly, indicating the type of transport protocol used for the respective services.
Applications/Services
The terms "application" and "service" in the context of networking often refer to higher-level protocols or software that use specific port numbers and transport protocols to communicate over a network.
Services as Protocols/Applications:
For example, FTP (File Transfer Protocol) uses port 21 for control commands and port 20 for data transfer, operating over TCP to ensure reliable communication.
SMTP (Simple Mail Transfer Protocol), used for email transmission, also operates over TCP on port 25, ensuring reliable delivery of email messages.
What They Do: Each service/application listed performs a specific role in network communications, from transferring files (FTP) to handling secure web traffic (SSL on port 443).
Clarification: Are They Services or Protocols?
Protocols and Services: Most of the entries in your list can be considered both protocols and services. Protocols define the rules for communication, while services are the actual implementation of these protocols on network devices to perform specific functions.
Why They Might Be Called Services: In many practical networking contexts, the implementation of a protocol to perform a specific task (like HTTP serving web pages on port 80) is referred to as a "service." This is because the protocol is in service of a particular function or application layer task.
Example Explanation
HTTP on Port 80: HTTP is a protocol, but when running on a web server on port 80, it is providing a web service. Thus, HTTP is both a protocol and when implemented on a server, it becomes a service that serves web pages.
Expert Perspective
An expert might refer to these as services particularly from an IT infrastructure point of view, where managing network services (like DNS, DHCP, FTP) involves ensuring these specific protocols are properly configured to run on their designated ports to serve network clients effectively.
This nuanced understanding helps in various practical IT and networking tasks, from configuring firewalls and routers to setting up servers and troubleshooting network issues. Each "service" or "protocol" has a designated role, ensuring efficient and standardized communication across the internet and within private networks.

When I say that protocols like FTP and SMTP operate "over TCP," it means they use TCP (Transmission Control Protocol) as the underlying transport mechanism to manage and ensure the delivery of data between devices on a network. Here's a breakdown of what it means for these protocols to operate "over TCP":

TCP - Transmission Control Protocol
TCP is one of the main protocols in the TCP/IP suite and provides reliable, ordered, and error-checked delivery of a stream of data between applications running on hosts communicating via an IP network. Protocols operating "over TCP" leverage its capabilities to ensure data is transmitted correctly. Here’s how TCP supports these protocols:

Reliability: TCP manages message acknowledgment and retransmissions in case of lost or corrupted packets. When data segments are sent over the network, the sender retains a copy until the receiver sends back an acknowledgment of receipt. If an acknowledgment is not received within a certain timeframe, TCP will retransmit the data.

Ordered Delivery: TCP numbers each segment with a sequence number, which is used to order segments at the receiving end. This ensures data is reconstructed in the correct order, even if it arrives out of order.

Error Checking: Each TCP segment includes a checksum that is used to detect errors in the data that might occur during transmission. If a segment fails the checksum test at the destination, it is discarded, and TCP arranges for retransmission.

Flow Control: TCP uses windowing and other techniques to control how much data is transmitted before requiring an acknowledgment. This prevents fast senders from overwhelming slower receivers.

How FTP and SMTP Use TCP
FTP (File Transfer Protocol): FTP uses two TCP connections to handle file transfers. One connection (on port 21) is used for sending control commands between the client and server, such as login credentials, commands to change the directory, and commands to initiate file transfer. The other connection (on port 20) is used for the actual data transfer. Using TCP ensures that commands and data are delivered reliably and in order, which is crucial for accurate and complete file transfers.

SMTP (Simple Mail Transfer Protocol): SMTP uses a single TCP connection on port 25 for sending email messages from one server to another or from a client to a server. SMTP commands and responses, as well as the actual email messages, are sent over this connection. TCP’s reliability ensures that emails are correctly delivered from sender to receiver without data corruption.

Summary
Saying that these protocols operate "over TCP" highlights that they utilize the TCP transport protocol to achieve reliable, ordered, and error-free communication. This is essential for functions such as transferring files and emails, where loss or disorder can corrupt files or lose information in emails. TCP's features like connection-oriented sessions, reliable transmission, and error detection make it suitable for these tasks.

!PORT NUMARALARI SAYESINDE HTTP ILE WEB SAYFASINA GIRERKEN HEM DE SMTP ILE MAILLERIMIZ ALIP GONDEREBILMEK ISTERIZ.. AYNI ANDA HTTP-SMPT YE TCP VERILERI GUVENILIR BIR SEKILDE GONDEREBILMEK ICIN FARKLI FARKLI PORTLARDAN HIZMET VERIRLER, SMTP-PORT:25, HTTP-PORT:80

! Ports enable a single server to handle multiple connections from many users at the same time, each potentially requesting different pages or performing different actions, even if all those connections are using the same service, like HTTP.

How Ports Enable Multiple Connections
When discussing HTTP and web servers, port 80 is the standard port for HTTP traffic. The ability of a server to handle multiple connections simultaneously through the same port involves a combination of the port number along with the IP address of the users (source IP) and their ports (source ports). This combination is crucial and is known as a "socket."

Understanding Sockets
Socket: A socket is an endpoint of a two-way communication link between two programs running on the network. A socket is bound to a port number so that the TCP layer can identify the application that data is destined to be sent to.
Example:
Multiple users might be accessing http://example.com. Each user's browser will connect to example.com (which resolves to the server's IP address) on port 80. However, each user's connection is uniquely identified by their source IP and source port.

Scenario:

User A connects from IP 192.168.1.10 using a random source port, say 49562.
User B connects from IP 192.168.1.15 using another random source port, say 51340.
Although both requests are sent to the same server IP and port (server's IP and port 80), the server is able to distinguish between these two connections using the combination of source IP, source port, destination IP, and destination port. This combination allows the server to manage multiple incoming connections effectively, each potentially engaging in a different session or request.

Role of the Transport Layer Protocols
TCP (Transmission Control Protocol) is particularly well-suited for managing multiple connections because it is connection-oriented and ensures reliable delivery of data. TCP handles each unique connection (socket) as a distinct data stream, maintaining separate sessions for each user.
Practical Implications
Web Servers: A web server can serve thousands of clients simultaneously on the same port because of its ability to manage different sockets efficiently. Each client (browser) connects using a different socket (source IP + source port to server IP + server port).
Load Management: Servers employ various strategies (like load balancers, multi-threading, etc.) to manage the load because, despite the capability to handle multiple connections, each connection still consumes resources.
Conclusion
The use of ports, particularly in combination with IP addresses and protocols like TCP, enables servers to handle multiple concurrent connections, allowing many users to use web services simultaneously without conflict. This is fundamental to the functioning of the internet as it allows for scalability and flexibility in network communications.


How Multiple Connections Work on a Single Port
A server listening on a port, like port 80 for HTTP, can handle many concurrent connections through the same port thanks to the combination of four key elements:

Source IP Address: The IP address of the client (user's device).
Source Port: A temporary port number automatically assigned to the client's connection by their device's operating system. This is not the same as the server's port and is chosen from a range of ephemeral ports.
Destination IP Address: The IP address of the server.
Destination Port: The port number on which the server is listening (e.g., 80 for HTTP).
Each combination of these four elements creates a unique "socket" or "session," which the server uses to differentiate between each client's connection. This allows a single server port to handle connections from multiple clients, even if those clients are interacting with the server at the same time.

Practical Example
Imagine a web server configured to serve HTTP content on port 80. Here's how it can manage multiple client requests simultaneously:

User 1 (IP: 192.168.1.100) uses their browser to access the server. Their operating system might assign the connection a source port of 49152. The connection is identified by the tuple (192.168.1.100, 49152, Server_IP, 80).
User 2 (IP: 192.168.1.101) also accesses the server at the same time. Their device picks a different source port, say 49153, resulting in the tuple (192.168.1.101, 49153, Server_IP, 80).
Multiple Users: Each new connection from a different user or even additional connections from the same user (different tabs or refreshes) will use different source ports, or combinations of IP and port, allowing the server to handle each as a unique session.
Technical Explanation
TCP, the protocol commonly used for services like HTTP, is designed to distinguish between these connections based on the combination of source IP, source port, destination IP, and destination port. This multiplexing allows a single server port number to support many connections without confusion.

Conclusion
You don't need additional ports for additional users; rather, you leverage the ability of network protocols to effectively manage multiple connections through the same server port. This efficient use of ports underpins much of the scalability of modern web servers and services.

Scenario: Hosting Multiple Websites on a Single Server
Imagine you are running a web hosting service where you have a single physical server, but you need to host several websites, each for a different customer. Each website is a separate HTTP service, but they all reside on the same server.

Requirements:
Each website should be accessible via the standard HTTP protocol.
Each website might have its own security requirements, content, and even perhaps a need for different server configurations.
Problem:
Using the standard HTTP port (port 80) for all websites can work perfectly if you are using virtual hosts to differentiate between the sites based on the domain name. However, suppose you need to run different versions of a web server software (like different versions of Apache or a different configuration that cannot coexist on the same server instance), or you want to isolate the network traffic of each website for security and performance monitoring reasons. In these cases, running all sites on the same port is not feasible.

Solution: Use Different Ports
You decide to assign each website its unique port number along with the standard port 80. Here's how you could set it up:

Website A: Standard HTTP traffic on port 80.
Website B: Custom HTTP traffic on port 8080.
Website C: Further custom HTTP traffic on port 8081.
This setup allows you to run separate instances of the web server software for each site on the same physical server without interference between them. Each site can be accessed by specifying the port number in the URL, like http://websiteb.com:8080 and http://websitec.com:8081.

How This Helps:
Configuration Flexibility: Each server instance can be configured independently, allowing custom settings, different server versions, or special modules for each site.
Security Isolation: By separating the traffic on different ports, it's easier to apply specific firewall rules or monitor traffic for each site independently, enhancing security.
Performance Management: Traffic and performance can be monitored and optimized individually for each port, helping to troubleshoot and ensure that each website is performing optimally without affecting others.
Practical Considerations:
User Accessibility: Users typically expect to access websites via standard ports (80 for HTTP and 443 for HTTPS). Using non-standard ports can sometimes lead to accessibility issues, such as firewalls blocking these ports or users needing to remember to type the port number in the URL.
SEO and Usability: Search engines and general web usability practices favor standard ports for accessibility. Non-standard ports might affect the site's visibility and user experience.
Conclusion
While the default scenario for HTTP services is to run everything on port 80 (or 443 for HTTPS), there are practical reasons to use different ports, particularly when dealing with complex hosting environments, security requirements, or specific performance monitoring needs. This flexibility is a powerful feature of network design, allowing administrators to tailor their setups to the specific needs of each service or client.

Indeed, without port numbers, the TCP protocol would not be able to distinguish between different types of services like SMTP and HTTP. Port numbers play a crucial role in the TCP/IP networking model by allowing the correct routing of network messages to their intended application processes on a host. Here’s a more detailed explanation of why port numbers are essential:

Role of Port Numbers in TCP/IP Networking
Service Identification: Each type of network service (like SMTP for email or HTTP for web traffic) is assigned a specific port number. These port numbers are used by the operating system to direct incoming traffic to the correct application. For example, web servers typically listen on port 80 for HTTP and port 443 for HTTPS, while mail servers listen on port 25 for SMTP.

Multiple Services on One Host: Port numbers allow a single server to offer multiple services simultaneously. For instance, a server could be hosting an SMTP service and an HTTP service. Without port numbers, the server wouldn’t know which service to send incoming data to, as all data would arrive with the same destination address (the IP address).

Process Multiplexing and Demultiplexing: Port numbers enable a process on the network called multiplexing (sending multiple streams of data over a single connection) and demultiplexing (splitting data from a single connection into multiple streams). This process is crucial because it allows a single server to handle connections from multiple clients to the same service (like a web server handling multiple browsers) and differentiate services for each connection.

Hypothetical Without Port Numbers
Lack of Distinction: If TCP did not have port numbers, it would only be able to differentiate connections based on the IP address. This limitation would mean a device could only reliably run one network service accessible from the outside network, severely limiting the functionality and efficiency of network communications.

Challenges in Managing Connections: Managing multiple client connections would be extremely problematic. For instance, if multiple users were trying to access a web service, without port numbers, the server would not be able to distinguish individual HTTP requests because all requests would appear the same.

No Simultaneous Services: Running multiple services such as a web server and an email server on the same machine would be infeasible without assigning different IP addresses for each service, which would be highly inefficient and not scalable.

Conclusion
Port numbers are integral to the functioning of TCP/IP networks. They provide the necessary mechanism for servers to offer multiple types of services and for clients to connect to these services correctly. Without port numbers, modern network architectures and the internet as we know it would not function effectively, as there would be no efficient way to route traffic to the correct processes based on the type of service being requested.



!PORT KULLANIIMINDA NE DEMEK ISTEMIYORUZ ASLINDA 

When multiple clients send requests to the same server, even if the requests are for different URLs (like /home, /products, /categories on http://websiteb.com:8080), you do not need separate ports for each type of request. The server can handle all these requests on the same port because of the way TCP and the HTTP protocol manage connections and distinguish between different client requests. Here’s how it works:

TCP Connections and HTTP Requests
TCP Connections:

Each client connecting to a server establishes a TCP connection using a unique combination of their IP address and a source port with the server’s IP address and the destination port (in this case, 8080).
The source port is selected from an ephemeral range typically used for client connections. This source port, along with the client’s IP address, helps ensure that each TCP connection is unique.
Multiple requests from different clients or even different requests from the same client can be distinguished and managed based on these unique connections.
HTTP Protocol Handling:

HTTP, which operates on top of TCP, handles application-level routing. When a client requests a page like /home or /products, the path is part of the HTTP request header, not the TCP segment.
The server receives the HTTP requests on the same TCP port and reads the HTTP headers to determine which resource the client is requesting. It then processes these requests accordingly, all within the same port.
Example of HTTP Request Handling
When a client sends a request to http://websiteb.com:8080/home, the HTTP GET request might look like this:
vbnet
Kopier kode
GET /home HTTP/1.1
Host: websiteb.com:8080
The server listens on port 8080, receives this request, and based on the request path (/home), it retrieves the home page and sends it back to the client.
The same process applies for other URLs. The server uses the path specified in the HTTP headers to route the request internally to the correct resource or service.
Why Not Different Ports?
Using different ports for different services or pages on the same website would complicate the network architecture unnecessarily and is not supported by standard HTTP practices.
Managing multiple ports can lead to increased administrative overhead and might complicate firewall and network configuration.
Most web servers are capable of handling thousands of simultaneous connections on a single port through efficient use of multi-threading and connection handling mechanisms.
Conclusion
In conclusion, a single port can efficiently manage numerous different requests by utilizing TCP’s connection management and HTTP’s request routing capabilities. The distinction between different types of requests is handled at the application layer (HTTP) through URLs and not at the transport layer (TCP) through ports. This design keeps web communications simple and efficient across the Internet.

!KAVRAMLARI DOGRU SEKILDE KAFADA OTURMAK COOK ONEMLI!

So, when we say we need the ports because we need to create diffrerent connections at the same time, we mean connection from tcp or upd to http,smtp...like that, not connections from differnt clients to same http server , is it right?

When discussing the need for different port numbers, it's not about creating different connections from TCP or UDP to application protocols like HTTP or SMTP, but rather about distinguishing different types of services running on a server, allowing those services to operate simultaneously without interfering with each other.

Here’s a more detailed breakdown to clarify this concept:

TCP/UDP and Application Protocols
TCP (Transmission Control Protocol) and UDP (User Datagram Protocol) are transport protocols that facilitate communication between hosts on a network by managing data packets' transmission. They serve as channels through which higher-level protocols (like HTTP or SMTP) send their data.
Each application protocol typically listens for incoming connections on a specific port, which identifies that service on the server:
HTTP often uses port 80.
HTTPS uses port 443.
SMTP for sending emails uses port 25.
FTP for file transfers uses ports 21 (control) and 20 (data).
Different Connections on the Same Port
When we talk about needing ports to create different connections at the same time, this usually refers to different services (like HTTP and SMTP) that might need to operate simultaneously on the same server. Each service listens on its designated port.
Within the same service (e.g., an HTTP server on port 80), the server can handle multiple connections from different clients simultaneously on that single port. Here, TCP distinguishes between different client connections using a combination of source IP, source port, destination IP, and destination port. This allows the server to manage multiple individual sessions through the same port.
Example Scenario
If a server is running a web service (HTTP) and an email service (SMTP), it will use at least two ports:
Port 80 for HTTP to handle all web traffic.
Port 25 for SMTP to handle all email sending operations.
Multiple Clients to Same HTTP Server:
Numerous clients can access the server's HTTP service simultaneously on port 80. Each client connection is uniquely identified by the client’s source IP and port. This allows the server to handle each request independently, even though they are all coming through the same server port (80).
Summary
The need for different ports is primarily about service differentiation on a server — allowing multiple types of services (application protocols) to run concurrently without collisions in their network communications.
Connections from different clients to the same service (like HTTP) on a server are managed through unique combinations of source and destination ports (along with IP addresses), enabling multiple, simultaneous connections on the same service port. Each client’s request is isolated and managed independently by the server, all under the same port.
Thus, ports are crucial for defining what service is accessed, while the combination of IP addresses and port numbers are crucial for maintaining multiple, simultaneous client connections to these services

!PORTLAR LA ILGILI DE DON OLARAK , BIZ HERHANGI BIR WEBSITESINE GIRDIGIMZDE, ADRES CUBUGUNDA HERHANGI BIR PORT GOREMIYOURUZ... NEDEN..BU O SERVER-IP ADRESININ PORT KULLANMADIGINI MI GOSTERIR YOKSA? 
When you access a website like google.com without specifying a port in the URL, you are indeed using a port, but it's just not visible because it defaults to standard ports that the browser automatically assumes based on the protocol used. Here’s a breakdown of how this works and why you often don't see the port specified:

Default Ports
HTTP and HTTPS:
HTTP (Hypertext Transfer Protocol) typically uses port 80. When you type http:// in front of a domain name, the browser automatically assumes that it should connect to port 80.
HTTPS (HTTP Secure) uses port 443. When you type https:// in front of a domain, the browser automatically connects to port 443.
Because these ports are defaults for their respective protocols, browsers don't require you to manually specify them when entering a URL. For instance, accessing https://google.com implicitly uses port 443.
Why Ports Are Not Visible
User Convenience: Hiding standard ports in the URL streamlines the web browsing experience, reducing complexity and clutter in the browser's address bar.
Protocol Standards: The use of default ports for HTTP and HTTPS is a standardized practice understood across all web browsers and servers, which helps maintain consistency and predictability in web communications.
Specifying Non-Standard Ports
If a website uses a non-standard port, then you must specify it in the URL. For example, if a web server is set up to listen for HTTP traffic on port 8080, you would access it by typing http://example.com:8080 into your browser.
Example of How Ports Are Used Implicitly
When you enter google.com in your browser:
The browser checks the protocol. If it’s HTTPS (which is common for most modern websites for security reasons), it defaults to port 443.
The browser then makes a connection to the server hosting google.com on port 443.
The server, listening on port 443, responds, and the HTTPS traffic is securely exchanged.
Conclusion
Every time you access a website, there is indeed a port involved in the process. The reason you don't typically need to specify or even see this port is due to the conventions and defaults established to make web browsing simpler and more streamlined. This setup allows both users and website administrators to rely on these standard ports for routine web access while still having the flexibility to use other ports when necessary.



!TCP ORNEGIN SSH, HTTP, SMTP...BU SERVICE LERE DATA GETIRME GOTURME ISLEMLERI YAPARKEN, EGER PORT NUMARASI OLMAZSA, BURALARA AYNI ANDA DATA GOTUREMEZ DI ONDAN DOLAYIDIR KI PORT NUMARALARI ONEMLIDIR
!HEM HTTP ILE WEB SAYFASINA GIRERKEN KULLANICI AYNI ANDA BIR TARAFINDAN DA MAIL INDEKI MAILLLERI GORUNTULEYIP YENI MAIL GONDEREBILIR...AYNI BROWSER IN FARKLI SAYFALARINDA BU ISLEMLERI AYNI ANDA YAPABILIR
!BIR BILGISAYARDA 65536 ADET PORT VARDIR, 1024 TANESI IYI BILINENDIR(WELL-KNOWN)

!DNS- HEM TCP  HEM DE UDP KULLANIR, IP ISTEYEN IP ALAMAZSA BIR DAHA ISTEYEBILSIN DIYE..

!arp -a (Cihazimizin bulundugu agdaki iletisim kurdugu cihazlarin ip adresleri)
ARP Tablosu Girişlerini Anlamak
IP Adresleri:

"İnternet Adresi" olarak görüntülenir: Bunlar, bilgisayarınızın yerel ağınızda iletişim kurduğu cihazların IP adresleridir. Bu yalnızca diğer bilgisayarları değil, yönlendiriciler, yazıcılar, akıllı telefonlar vb. gibi ağdaki tüm cihazları da içerir.
Bilgisayarınızın IP'sini Belirleme: Bilgisayarınızın IP adresi doğrudan arp -a çıkışında gösterilmez. Ancak ayrı bir komut çalıştırarak bilgisayarınızın IP adresini tanımlayabilirsiniz:
Windows'ta: ipconfig
MacOS/Linux'ta: ifconfig veya ip a
Diğer IP Adresleri: ARP tablosunda listelenen ve bilgisayarınızın IP adresi olmayan herhangi bir IP adresi, ağdaki diğer cihazlara aittir.
Fiziksel Adresler (MAC Adresleri):

!IP ADRESLERI 
Networklerde bilgisayarlar olmasa bile, ip ler vardir , router larin, modem lerin kendilerine ait bir ip leri vardir. 

!binary-2lik 0,1 olmak uzere 2 rakamdam olusu
Kayhan isminden ikilk(binary) duzende anladigi sudur:01001011 01111001 011010000110000001...
!decimal-10luk
0,1,2,3,4,5,6,7,8,9 olmak uzere 10 rakamdan olusur
Kaynhan isminden ondalik-decimal duzende anladigi sudur: 075 097 121 104

!hexadecimal-16lik :
0,1,2,3,4,5,6,7,8,9,A,B,C,D,E,F olmak uzere 16 karakterden olusur ORN: 68:7F:74:12:34:56. Kayhan isminden onaltilik(hexadecimal) duzende anladigi sudur: 48 61 79 68 61 6E
MAC ADRESLERINE HEXADECIMAL DERIZ CUNKU GOSTERM BU MANTIKTADIR...PHYSICAL ADDRESS-MAC ADRESININ

!ALFABETIK SIRALAMA DA BINARY NIN DECIMAL DEN ONCE GELMESI 2 NIN 10 DAN ONCE GELMESIG GIBI DIR

PEKI BIIZIM ICIN ANLAMLI BIR IFADENIN KARSILIKLARINI BINARY,DECIMAL VE HEXEDECIMAL OLARAK NASIL BULUYORUZ...ASCII TABLOSUNDAN TABI KI....
!KUCUK VE BUYUK HARF E KARSILIK GELEN BINARY,DECIMAL VE HEX DEGERLERI FARKLIDIR 

!IP ADRESLERI CIHAZLARIN NETWOERK DEKI YERLERINI BELIRTIR, HANGI AGDA OLDUGUNU VE AGDAKI KIMLIGINI BELIRTIR 
!IP ADRESLERI 32 BITLIK, BINARY DUZENDE ALAN MANTIKSAL BIR SAYIDIR
! 4 PARCA  VE 8 ER BITLIK PARCALRDAN OLUSUR VE HER BIR PARCAYA OKTET ISMII VERILIR

!HER OKTET MINIMUM 0, MAXIMUM 255 DEGERI ALIR, SONOKTET 0 ALAMAZ

IP LER 
-IP ADRESLERI 2 KISIMDAN OLUSUR

IP ADRESI: 192.168.1.34

1.KISIM:NETWORKID- NETWORKUN KENDSIIE AIT OLAN ID DIR VE, BU IC AYNI AGDA-NETWORKDE OLAN CIHAZLARDA AYNI OLMAK ZORUNDADIR 
2.KISIM :HOSTID:CIHAZIN AGDA KENDISINI TANIMLAYAN IDDIR. AYNI NETWORKDE OLAN CIHAZLARIN HOST ID LERI FARKLI OLMAK ZORUNDADIR.
!HOST ID SI, YANI 4.OKTET KISMI MAKSIMUM 254 OLABILIR, MINIMUM DA 1 OLABILIR, 0 OLAMAZ..
!NORMALDE BIR IP ADRESINDE OKTETLERI ICERISINDE 255 TEN BUYUK RAKAM OLAMAZ...AMA 4.OKTETTE ISE MINIMUM 1, MAKSIMUM 254 OLABILIR
!HOST CIHAZIN KENDISIDIR 
!AYNI AGDAKI-NETWERKTE OLAN, CIHAZLAR BIRBIRI ILE ILETISIM KURABILIR..NETWERK ID LERI AYNI OLMAK ZORUNDADIR
!AYNI NETWERKTEKI CIHAZLAR DA AYNI HOST ID SINI ALAMAZLAR, IP CAKISMASI YASANIR

CLASS-C
IP ADRESI: 221.138.62.1
NETWERKID:221.138.62 HOSTID:1 SUBNETMASK:255.255.255.0

CLASS-C
IP ADRESI: 192.168.1.34
NETWERKID:192.168.1  HOSTID:34  SUBNETMASK:255.255.255.0

CLASS-B
IP ADRESI: 172.16.1.1
NETWERKID:172.16  HOSTID:1.1  SUBNETMASK:255.255.0.0

CLASS-A
IP ADRESI: 16.1.1.1
NETWERKID:16  HOSTID:1.1.1  SUBNETMASK:255.0.0.0

!IP TEKBASINA BIR ISE YARAMAZ, KESINLIKLE SUBNETMASKI OLMAASI GEREKIR..
!IP ADRESLERININ NETWERK ID VE HOST ID SINI BELIRLEYEN FAKTOR, SUBNET MASK(ALT AG MASKESIDIR)
!SUBNET MASKI BELIRLEYEN DE IP ADRESI SINIFLARDIR 
!HER IP NIN SUBNET MASK I VE CLASS I VARDIR

!YANI NETWERKIN KAC OCTET OLACAGINI BELIRLEYEN DE SUBNET MASK OLUYOR SUBNET MASK DA EGER 1 TANE(A CLASS) 255(255.0.0.0) VAR DIGERLERI 0 ISE O ZAMAN 1. OKTET NETWERK ID SI, 2 TANE(B CLASS) 255(255.255.0.0) O ZAMAN DA ILK 2 OKTET NETWERK ID SIDIR, 3 TANE(C CLASS) 255(255.255.255.0) ISE O ZAMAN DA ILK 3 OKTET NETWERK ID SIDIR

!A SINIFI IP LER - 1-126 ARASI ILE BASLAR 1.OCTET 
!DIKKAT EDERSEK 127 YOK, SEBEBI 127 HER PC NIN LOKAL IP SI ICIN AYRILMISTIR, DAGITILAMAZ VE KULLANILAMAZ, NETWERKTE HER PC NIN KENDISINI TEMSIL ETTIGI IP DIR 
!B SINIFI 128-191 DIR 1.OKTET B SINIFI IPI LERI ICIN
!C SINIFI 192-223 ARSIDIR C SINIFII IP LERI ICIN 

!AYRICA SPESIFIK IHTIYACA GORE SINIFSIZ IP DAGITIMI DIYE BIRSEY DE VARDIR, BU DA DAHA ILERI DE KARSIMIZA CIKACAKTIR

!223 TEN BUYUK RAKAMLI IP LER KULLANILAMAZ. 224-255 ARASINNDAKI BU ARALIK , NETWORKSEL ISLEMLER VE OTOMATIK ILETISIMLER ICINDIR(ORNEGIN BROADCAST YAPMAK GIBI) 


*/


?>

