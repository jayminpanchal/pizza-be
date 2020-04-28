#Pizza-BE  Services 

Instructions to Run

### Instructions to Run

- Make sure you are using XAMPP, WAMPP or any other Web Server with MySQL enabled for this application to work, the Server should be up and running.
- Clone the project and put it inside htdocs (or whatever directory your server is using).

Don't forget the following commands:


      ```
      composer install
      composer update
      php artisan key:generate
      php artisan migrate
      php artisan passport:install
      php artisan passport:client --personal
      php artisan db:seed
      
      ```

You can start the server by running ``php artisan serve`` in the project directory.

The API will be up on `localhost:8000/api`