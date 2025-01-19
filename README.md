# Events Admin

Yet Another FilamentPHP Admin Panel

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Introduction

Events Admin is a robust admin panel built using FilamentPHP. It provides a user-friendly interface to manage events efficiently.

## Features

- Simple, intuitive UI for managing events.
- Integration with FilamentPHP for seamless operation.
- Extensible and customizable to fit your needs.

## Installation

To get started with Events Admin, follow these steps:

1. Clone the repository:
   ```bash
   git clone https://github.com/basementdevs/events-admin.git
   cd events-admin
   ```

2. Install the dependencies:
   ```bash
   composer install
   ```

3. Set up the environment variables:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Run the migrations:
   ```bash
   php artisan migrate
   ```

## Usage

To start the application, use the following command:
```bash
php artisan serve
```

Then, open your browser and navigate to `http://localhost:8000`.

## Contributing

We welcome contributions to improve Events Admin. Please follow these steps to contribute:

1. Fork the repository.
2. Create a new branch for your feature or bugfix.
3. Make your changes and commit them.
4. Push your changes to your fork.
5. Create a pull request.

## License

Events Admin is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

