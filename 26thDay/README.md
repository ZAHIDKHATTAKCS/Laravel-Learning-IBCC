## <p align='center'>Laravel Maintenance Mode</p>

### <p align='center'>what is Maintenance Mode</p>

- Maintenance mode in laravel means temporarily putting your website offline so that visitors see a "Service Unavailable" or custom maintenance page, while you (developer) can safely update fix or test the application without disturbing users.

- its means that it will turned off your application and show to the users that the software is on building process and if there is an error of `404` so it will not show the error page instead of it, it will show maintenance page.

- so for that you have to run this command 

    ```js
    php artisan down
    // this will show service unavailable page on screen whenever users visit your website
    ```

- now what if we want to show back the website for that we have to run 

    ```js
    php artisan up
    // this will run back our website
    ```
- now what if we want to down our website for all the users and want to show for specific users for testing purpose we allow some developers to keep an aye on our website so for that we have to generate a secret code by run this command 

```js
php artisan down --secret="zahid" 
// so now if you put zahid after the host link so it will be available for all those who visit with zahid secret code 
```