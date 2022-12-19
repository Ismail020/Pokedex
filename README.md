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

# ! When you are done with setting up the .env file proceed

# Add a local database matching DB_DATABASE in .env — default: 'laravel'

#### Start Environment
php artisan serve
```
