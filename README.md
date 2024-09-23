# Lead Yönetim Sistemi

## Ön koşullar
- **Node.js**
- **npm**
- **Laravel**

## Kurulum

Aşağıdaki adımları takip edin
```bash
git clone git@github.com:keildra/lms.git
```
komutu ile projeyi istediğiniz dizine klonlayın. 
 
```bash
cd lms
```
ile projenin olduğu dizinin içine girin. 

```bash
npm install
```
ile bağımlılıkları yükleyin. 

mysql sunucunuzu başlatın. 

```bash
npm run dev
```
ile geliştirme sunucusunu başlatın. 

```bash
php artisan serve
```
ile laravel geliştirme sunucusunu başlatın. 

```bash
php artisan migrate
```
komutu ile veritabanı migrasyonlarını gerçekleştirin. 

```bash
php artisan migrate:fresh --seed
```
ile veritabanınızı doldurun.