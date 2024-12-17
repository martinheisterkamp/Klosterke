# Klosterke

## Installing and running the original assignment
`cd ./casus`

`composer install`

`./vendor/bin/kahlan`

## Installing and running the completed assignment
`cd ./assignment`

`composer install`

`./vendor/bin/kahlan`

## Installing and running the Laravel+Vue App
`cd ./klosterke-laravel`

`composer install`

`npm install`

`npm run dev`

### Task list
* Create models and migrations
* Send data to Vue components as props via the controller
* Create static info table component displaying each product and its supplier
* Create dynamic table showing products
  * Create inputs to add products with their expiry date
  * With left and right arrow buttons marking each day, so the flourish / decay of each item can be tracked 