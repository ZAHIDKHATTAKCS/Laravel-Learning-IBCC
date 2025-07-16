### <p align='center'>Localization in Laravel </p>

- Localization in laravel means making your app speak different languages. Instead of writing different languages. Instead of writing all your text ( Like 'welcome' , 'login' , 'Profile saved' ) , directly in your views, you put them in a special languages file. Laravel then pick the right language. for Example , 
English : "Welcome" while in 
spanish : "iBienvenido",

- in short the localization showing your apps text in the users language.


### <p align='center'>Publish Localization in Laravel </p>

- in the old version of the laravel the localization folders are build-in with the project creation , but in the latest version we have to publish it by using command , for localization we have to run the command 
```js
php artisan lang:publish 

// and this will create folder "lang/en' 
```

- this will create the folder lang and inside the lang folder it creates en folder which means english. 

- now in order to apply languages all we have to do , create a file inside that folder like **Welcome.php** in which we can write code , so the lan file should contain keys and value in a return array like 
```js

```

- the lang file should be in .php file and php starting and closing tag should be clearly define. so after it 
```js
<?php
    return[
        "heading1"=>"hello, how are you",
        "subHeading"=>"this is welcome page",
        "home"=>"Home",
        "contactUs"=>"Contact Us",
    ]
?>
```

- now this file is for english and if you want to create it in hindi file so all the key should be same like if there is a key "heading 1" in a file it should be same in hindi file but the values can be different . 
- **Note** the file name and keys should be same like if the file name in eng folder is **Welcome.php** so the same file name should be in hindi folder and key also only the values should be changed. once you changed and ready to go so by default laravel application language is english if you want to change it so go to **.env** file where you will see **APP_Local = en** that is localization en->english folder so change it to **hi** mean hindi so default language will be hindi. if you don't have the **locale:en** in **.env** file so go to **"config/app"** so here it must be present. change it from there