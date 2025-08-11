#### <p align='center'>Learn About Components in Laravel</p>

- Building layout with component
- what is layout
- Make Home and About Page
- Make Component for Layout

#### <p align='center'>What is Layout</p>
- Layout is a common template to reuse code, reuse common UI, reuse style and it makes the website look and feel same, like if we create 2 pages 1 is Homepage and other is contactPage if we styled one page and copy the same page and paste to the other page so its not the perfect way to do so and for that we have an option of component so in order to create component we have to run this command 

    ```js
    php artisan make:component layout // this will create a folder of components in resources folder in which it will create a component of layout 
    ```
- now what if we want to make something dynamic so in order to do it we hae to pass a variable like now if we want to make the name dynamic so we have to write code like in page, 
    ```js
    <x-layout>
        <x-slot name="title">HomePage</x-slot> // here it is the title will pass to the component so
    <x-layout>
    ```

    ```js
    // here is how we can get it in the page
    <title>Homepage</title> 
    // instead of this just write the down one so it will detect the name dynamically from the component
    <title>{{$title}}</title> 
    ```
- you can create anything in component and call it with $ sign like we passing a variable
