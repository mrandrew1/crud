# crud laravel app with api
This is a laravel crud app made with blades and ajax

to use this app:
1. clone git or download the .zip-file in your directory 
2. write "composer update" in your directory 
3. There is the SQL file in the package. You should dump it into your database
4. you can use app or api


This app also has an api. You can 
There are endpoints:

//to get the table:

GET('/children')

//to add a note: it returns whole table after adding new note

you should add params:  name, lastname, city

POST('/children')

//to delete a note: it returns whole table after deleting the note

DELETE('/children/{id}')

//to change a note: it returns whole table after deleting the note

PUT('/children/{id}')




