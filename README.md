# Get started
`cp .env.example .env`

`composer install`

`yarn install`

`yarn build`


## compléter le .env avec ses configurations 
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=<database>
    DB_USERNAME=<username>
    DB_PASSWORD= <password>

`php artisan migrate --seed`

# Le projet
 - Il s'agit de dévelloper un outil qui puisse permettre de gérer un configurateur de devis de pressage de vinyle selon les besoins de pressagedisques.

## Les étapes du projet 

1 - seeder les données des models des variables d'un vinyle avec les tarifs de maintenant 

2 - construire un bo filament pour rendre ces données accessibles et modifiables dans un crud

3 - créer un formulaire de création d ´un vinyle avec toutes les données qui correspondent aux conditions métiers qui vont bien 

4 - rentrer tout dans une api (graphql peut être ?) 

5 - création d'une app web voire  mobile si je suis foufou 

