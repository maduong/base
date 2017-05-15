# Edutalk default theme - Triangle

### How to use
- Install Edutalk
- Download these plugins: `contact-form` and `captcha` from [github.com/Edutalk-plugins](https://github.com/Edutalk-plugins)
- Overwrite the `composer.json` of Edutalk by the file `composer.sjon` in `sample-data` folder.
- Overwrite the database by the file in `sample-data/Edutalk_triangle_theme.sql`.
- Run
```$xslt
php artisan vendor:publish --tag=Edutalk-public-assets --force
```
- Enjoy~