## Prerequisites
<ul>
<li>After cloning this repository, go to the root folder, run the following command/s,
<pre>
    composer install
    composer update</pre>
</li>
<li>Rename .env.example to .env and provide your database details there.</li>
<li>Laravel manages the frontend tools like vue using npm. So run <code>npm install</code> to get all the required dependencies.</li>
<li>It needs a database table to perform CRUD operations on it. Find and import the sql file located at <code>/resources/assets/vue_crud.sql</code>.</li>
<li>Run <pre>php artisan key:generate</pre> </li>

</ul>

## Working Demo
You can see the demo of the project <a href="http://demos.justlaravel.com/vue-js-crud-laravel/">here</a>

## Reference Post
<a href="https://justlaravel.com/vue-js-crud-laravel/">https://justlaravel.com/vue-js-crud-laravel/
</a>
