### <p align='center'> How to Add Css and Javascript</p>

- write css and js
- use css and js in a view
- use css and js with the layout 
- use internal css and js

- in order to create external css file in the public folder so we have to create css folder inside the public folder and than create a file of ```style.css``` same goes fo ```javascript``` create js folder in public folder and than create ```custom.js``` file inside it 

- now in order to link it with the main layout file so just go to head of the layout file and insert as a link like 
    ```js
    <link rel="stylesheet" href="/css/style.css"> // so here you don't have to mentioned public folder instead of it just directly enter the name of the folder where you stored your file and than file name with extension
    ```
<br>

---- 

### <p align='center'> Layouts using template Inheritence</p>

- Make Layout
- Add common code in layout
- pass dynamic data
- use common style with layout
- use bootstrap with layout

- first of all we have to create a common layout and we can use it on different files as like we using components that we can use in other files 

- we can create a common layout and call it in different files using extends , for example you created a common file like ```layout``` which consist of `navbar` and ```footer``` and you want to use it in all the files so all you have to do as include this file in all the other files using extends like

    ```js
    // like this is the about us page now we want to insert the layout file so to do this ,

    @extends('layout') // this will render all the data of layout file in the about us file 

    // what if the layout file is inside the other folder so for that we have to do

    @extends('Common.layout') // this means that layout file is inside a folder Common
    ```

- now what if you want to pass dynamic data from the about page to layout so for that we have to use `@section('title','About Page')` you have to write this code in the specific file like `AboutUs` page or contact file in order to show this in a common file you have to code like
    ```js
    <title>@yield('title')</title> 

    // this will show About Page
    ```

- so the use of `section`  we can pass small data what if we want to send big data using `@section` so have to do like 

    ```js
    @section('main')
    <div>
    // code here it will be pass as a section main
    </div>
    @endsection
    ```
- now in order to show this data in the common file all we have to do as 
    ```js
    @section('main')
    @show // this @show must be used it will show the main content using section main
    ```