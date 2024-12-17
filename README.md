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

`php artisan migrate:fresh --seed`

`npm run dev`

### Task list
- [x] Finish the unit tests according to the assignment
- [x] Come up with a design
- [x] Set up Laravel project
- [x] Add Vue 3
- [x] Add Inertia
- [ ] Create models and migrations
- [ ] Send data to Vue components as props via the controller
- [ ] Create static info table component displaying each product and its supplier
- [ ] Create dynamic table showing products
  - [ ] Create inputs to add products with their expiry date
  - [ ] With left and right arrow buttons marking each day, so the flourish / decay of each item can be tracked 