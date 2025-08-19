### <p align="center"> Migration Important Commands </p>

- **Rest Migration**
- rest migration means to rest all the table that you created recently. Or in simple words rest mean to delete all the migrations. <br><br>
`php artisan migrate:rest`

- **Rollback** 
- Rollback mean when we create multiple tables and we want to remove the last tale so for that we can run rollback command so the rollback command only remove the last one created migration.

- now what about if we want to remove specific amount of migrations so we have to run <br><br>
`php artisan migrate:rollback --step 2 `
--step 2,3,4 this means it will remove the number of migrations.