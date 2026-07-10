# Product Showcase Laravel

A modern **Product Showcase** web application built with **Laravel 13**. This project demonstrates clean Laravel architecture, product management, category relationships, image uploads, search functionality, and an admin dashboard.

> **Note:** This project is designed as a product presentation website, **not** an e-commerce store. Visitors can browse products and view their details, but purchasing functionality is intentionally excluded.

---

## Features

* Product Management (CRUD)
* Category Management
* Product Image Upload
* Product Image Update
* Automatic Image Deletion
* Product Search
* Category Filter
* Product Detail Page
* Responsive Product Cards
* Admin Dashboard
* Pagination
* Laravel Validation
* Eloquent Relationships
* Clean MVC Architecture

---

## Built With

* Laravel 13
* PHP 8.4
* MySQL
* Blade Template Engine
* HTML5
* CSS3
* Vite

---

## Database Structure

### Products

* Title
* Description
* Image
* Category

### Categories

* Name

Relationship:

* One Category → Many Products
* One Product → One Category

---

## Installation

Clone the repository

```bash
git clone https://github.com/Mobin0gh/product-showcase-laravel.git
```

Go to the project

```bash
cd product-showcase-laravel
```

Install dependencies

```bash
composer install
```

Copy environment file

```bash
cp .env.example .env
```

Generate application key

```bash
php artisan key:generate
```

Configure your database inside `.env`

Run migrations and seeders

```bash
php artisan migrate --seed
```

Install frontend dependencies

```bash
npm install
npm run dev
```

Run the application

```bash
php artisan serve
```

---

## Screenshots

Screenshots will be added soon.

---

## Future Improvements

* Authentication
* User Roles
* Advanced Filtering
* Product Gallery
* REST API
* Admin Dashboard Statistics
* Dark Mode

---

## Project Purpose

This project was developed to strengthen Laravel backend development skills and demonstrate practical knowledge of:

* MVC Architecture
* Eloquent ORM
* Database Relationships
* CRUD Operations
* File Uploads
* Validation
* Routing
* Blade Templates
* Laravel Best Practices

---

## Author

**Mobin Gholamipour**

GitHub: https://github.com/Mobin0gh
