# Introduction
Attempt to solve the problem faced by Window user that cannot override the COMPOSER_MIRROR_PATH_REPOS value from command line.
Add this step to the build step in vapor and remove the override code `php artisan build:composer-mirror`.

This will allow different environments still able to have COMPOSER_MIRROR_PATH_REPOS override to true only at deploy build step.

The update will look like this
Before
```yaml
build:
    - 'COMPOSER_MIRROR_PATH_REPOS=1 composer install --no-dev'
```
After
```yaml
build:
    - 'php artisan build:composer-mirror'
    - 'composer install --no-dev'
```
# To do
- [ ] Installation command

