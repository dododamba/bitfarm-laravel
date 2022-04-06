php artisan crud:generate Country --fields="name:string,iso:string,indicatif:integer"
php artisan crud:generate Region --fields="name:string,description:text"
php artisan crud:generate Site --fields="name:string,region_id:integer,area:double,areaUnity:string,lat:string,lng:string,description:string"
php artisan crud:generate Pomp --fields="name:string,site_id:integer,atmospheric_pression:double,temperature:double,lat:string,lng:string,status:boolean"

php artisan crud:generate TypeCulture --fields="name:string,description:text"
php artisan crud:generate TypePartner --fields="name:string,description:text"
php artisan crud:generate Plan --fields="name:string,description:text,price:double,promotionDueDate:date,promotionDueDate:date,startDate:date,dueDate:date,promotionPrice:double,project_id:integer"

php artisan crud:generate Project --fields="name:string,description:text,device:string,dueDate:date,estimatedBudget:double,realBudget:double,startDate:date"
php artisan crud:generate Enterprise --fields="name:string,description:text,city:string,facebook:string,twitter:string,instagram:string,telephone:string,logo:string,website:string,user_id:integer,verified:boolean,lng:string,lat:string"
php artisan crud:generate User --fields="firstName:string,lastName:string,avatar:string,birth:date,country_id:string,email:string,password:string,telephone:string"
php artisan crud:generate Role --fields="name:string"
php artisan crud:generate Partner --fields="name:string,description:text"
php artisan crud:generate Picture --fields="name:string,url:text,alt:string"

php artisan make:migration:pivot users roles
php artisan make:migration:pivot sites types_cultures
php artisan make:migration:pivot projects partners
php artisan make:migration:pivot projects sites

php artisan make:migration:pivot plans type_cultures

php artisan make:migration:pivot sites typecultures

php artisan crud:generate Post --fields="content:text,user_id:integer"
php artisan crud:generate Like --fields="user_id:integer,post_id:integer"
php artisan crud:generate Comment --fields="content:text,user_id:integer,post_id:integer"
php artisan crud:generate Share --fields="user_id:integer,post_id:integer,shared_on:integer"
php artisan crud:generate View --fields="user_id:integer,post_id:integer"

php artisan crud:generate Ceritification  --fields="document:string,status:boolean,certified_at:date,user_id:integer"
