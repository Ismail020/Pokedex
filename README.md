# Pokedex

## Setup

### For local development

#### First time Setup

```bash
# Clone the repository to your device.
git clone https://github.com/Ismail020/Pokedex.git

# Copy the .env.example and change the copied file name to .env
cp .env.example .env

# Install composer packages with
composer install

# Generate an app key (dont use on production or staging)
php artisan key:generate

#### Start Environment
php artisan serve
```
