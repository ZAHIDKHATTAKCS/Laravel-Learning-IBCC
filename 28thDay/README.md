### <p align='center'>Laravel Mutators</p>
- Mutators are the functions that are used for modifying data before storing it into database. It's like the opposite of the Accessor while Accessor modify formate of the data while fetch.

- Mutators in laravel are functions you create inside a model to automatically change the value of an attribute before saving it into database. In order to do it we have to create model and controller and we have to code in model like.

```js
    function setNameAttribute($val){
        $this->attributes['name']=ucfirst($val);
    }

    function setEmailAttribute($val){
        $this->attributes['email']=ucfirst($val);
    }

    function setPhoneAttribute($val){
        $this->attributes['phone']='+92-'.$val;
    }
```