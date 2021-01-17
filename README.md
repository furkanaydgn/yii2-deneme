# yii2-deneme

#### Furkan Aydoğan / 180202085 

## Modül Özet

Bu modül online Otobüs Bilet Rezervasyon sayfasının ana ekranı olarak tasarlanmıştır. 
Modül admin tarafından erişilmek üzere tasarlanmıştır. Yolcu veya Otobüs Firması ekleme
çıkartma veya düzenleme işlemlerini sadece admin yapabilir.
Yolcu Bilgi sayfasından "Yeni Kullanıcı" butonuna tıklayarak yeni yolcu eklenebilir
veya hali hazırda eklenmiş olan yolcuların bilgilerine erişim sağlanabilir .Aynı ekrandan 
kullanıcıya ait bilgiler düzenlenebilir veya kullanıcı silme işlemi yapılabilir.
"Bilet Al / Firma Liste" sayfasından "Yeni Firma Ekle " butonu ile yeni bir firma eklenebilir veya
"Bilet Al" butonuna tıklanarak eklenmiş olan firmalardan bilet satın alınabilir.Bilet satın alınırken kullanım kolaylığı için 
DropDownList kullanılarak Firma Id'lerinden Firmaların isimlerine ulaşılarak ekranda firma adı olarak bastırılrı.
Bilet alma işlemi tamamlandıktan sonra Alınan bilet  adedi otomatik olarak firmaya ait "kalan koltuk sayısı" 
adetinden düşürülür ."Alınan Biletler" sayfaısndan alınmış olan biletler görüntülenir.Menüler arası gezinmenin sağlanması için "nav-bar" widgeti eklenmiştir


## Modülün kullanımı
### Kurulum 
[https://github.com/yiisoft/yii2-app-advanced](https://github.com/yiisoft/yii2-app-advanced) adresindeki yönlendirmeler doğrultusunda sanal makine kurulur. advanced/vendor/furkanaydgn/yii2-denemee adresine bu depodan indirilen dosyalar eklenir.  \backend\config\main.php dosyasına aşağıdaki kod eklenir.
```php
    'modules' => [
        'deneme' => [
            'class' => 'furkanaydgn\deneme\Module'
        ],
        
        ],
```
Son olarak modül'ün bulunduğu github deposu composer.json'da tanıtıldıktan sonra modül kullanıma hazırlanmış olur.
### Packagist
Modül [https://packagist.org/packages/furkanaydgn/yii2-deneme](https://packagist.org/packages/furkanaydgn/yii2-deneme) adresinde paket olarak tanımlandı. 
```php
composer require furkanaydgn/yii2-deneme "dev-main"
```
 kodu ile de indirilebilir. 

Modül indirildikten sonra eğer kurulum [https://github.com/yiisoft/yii2-app-advanced](https://github.com/yiisoft/yii2-app-advanced)  adresinden yapılmadıysa gerekli paketlerin yüklenmesi için aşağıdaki kod çalıştırılmalıdır.
```
vagrant ssh
cd /var/www/advanced
composer update

```


### Migration'larla tabloların oluşturulması ve kayıt eklenmesi


Modülün kullanılabilmesi için gerekli tabloların oluşturulması ve örnek kayıtların girilmesi için aşağıdaki kodlar çalıştırılmalıdır. 

```
vagrant ssh
php yii migrate/up yolcu --migrationPath=@vendor/furkanaydgn/yii2-deneme/src/migrate
php yii migrate/up firma --migrationPath=@vendor/furkanaydgn/yii2-deneme/src/migrate
```
Veritabanının kaldırılması için

```
php yii migrate/down yolcu --migrationPath=@vendor/furkanaydgn/yii2-deneme/src/migrate
php yii migrate/down firma --migrationPath=@vendor/furkanaydgn/yii2-deneme/src/migrate
```


Not : Veritabanı çakışmasını engellemek için önceden kurulan modüllere ait veritabanları silinmelidir .

### Veritabanı ve Foreign Key ilişkisi

![enter image description here](https://github.com/furkanaydgn/yii2-deneme/blob/main/src/images/7.png)

### Backend

Bütün modül backend  altında geliştirilmiştir.
furkanaydgn/deneme/migrate adresinde varolan ürün kayıtlarını görebilir, 
###### Nav-Bar 'daki Alınan Biletler Sayfası ile veritabanındaki alınan biletlere erişilir ."Yeni bilet eklemesi admin tarafından yapılabilir.
###### Nav-Bar 'daki Bilet Al / Firma Liste Sayfası ile admin tarafından "Yeni Firma ekle " butonu ile veritabanına yeni bir firma eklenebilir yine aynı şekilde "bilet Al " butonuna tıklanarak bir yolcu için bir veya birden daha fazla bilet alınabilir.
###### Nav-Bar 'daki Yolcu Bilgi Sayfası ile bütün biletleri alınmış yolcuların bilgileri görüntülenebilir ve admin tarafından yeni bir yolcu eklemesi veya düzenleme ,silme işlemleri yapılabilir


Ana Sayfaya erişim için alttaki linke gidilmesi gerekmektedir.
```
http://advanced/backend/web/index.php?r=deneme/firmalistesi
```
##### Alınan Biletler


![enter image description here](https://github.com/furkanaydgn/yii2-deneme/blob/main/src/images/1.png)

###### Alınmış olan bilete ait detaylar


![enter image description here](https://github.com/furkanaydgn/yii2-deneme/blob/main/src/images/5.png)

###### Yolcu Ekleme Sayfası


![enter image description here](https://github.com/furkanaydgn/yii2-deneme/blob/main/src/images/4.png)

###### Otobüs Firmasına Ait Detaylar


![enter image description here](https://github.com/furkanaydgn/yii2-deneme/blob/main/src/images/6.png)


#### Widget


Widget kullanımına örnek olarak gii'nin oluşturduğu gridview özelleştirilerek kullanıldı. Ek olarak Nav-Bar widgetları eklendi.
![enter image description here](https://github.com/furkanaydgn/yii2-deneme/blob/main/src/images/3.png)

#### Home_page


![enter image description here](https://github.com/furkanaydgn/yii2-deneme/blob/main/src/images/2.png)


