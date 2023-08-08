
Location Finder API

From the parameters of latitude, longitude, and radius, this API returns all the locations that fall within that radius.

This will base on the data that is provided in data.csv.

1. Create a database named "locations"

2. Run "php artisan migrate" to create a table which contains the columns location_name, latitude, and longitude.

3. Run "php artisan db:seed --class=LocationSeeder" to populate the columns with the data from data.csv (inside database\csv) folder.

4. Run the app by executing "php artisan serve" and accessing the API from http://127.0.0.1:8000/api/locations.

Sample: http://127.0.0.1:8000/api/locations?latitude=52&longitude=-2&radius=100

5. Test directly from the URL or Postman or cURL.


References:

https://laravel.com/docs/9.x

https://talltips.novate.co.uk/laravel/find-nearby-locations-using-the-haversine-formula-in-eloquent-query

https://laracasts.com/discuss/channels/eloquent/haversine-query-using-eloquent

https://www.twilio.com/blog/repository-pattern-in-laravel-application