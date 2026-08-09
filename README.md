# 🛍️ Product Showcase — Laravel

A full-featured product showcase & admin management platform built with **Laravel 13** and **Tailwind CSS 4**. Includes role-based authentication, a complete admin panel, image uploads, search & filtering, and policy-based authorization.

🔗 **Repository:** [github.com/Mobin0gh/product-showcase-laravel](https://github.com/Mobin0gh/product-showcase-laravel)

---

## ✨ Features

### Public side
- Browse products with pagination
- Live search by product title
- Filter products by category
- Sort by name (A–Z / Z–A) or date (newest / oldest)
- Product detail page

### Authentication
- Registration, login, password reset (via Laravel Fortify)
- User profile management (update info, change password, delete account)

### Admin panel
- Role-based access control (Admin vs. regular User)
- Dashboard with live stats (total products, total categories, latest products)
- Full CRUD for **Products** (with image upload, replace, and cleanup)
- Full CRUD for **Categories** (with delete protection when products are linked)
- Server-side validation with custom Persian error messages
- Authorization enforced at two layers: **Middleware** (route-level) and **Policy** (action-level)

---

## 🧰 Tech Stack

| Layer          | Technology                     |
|----------------|---------------------------------|
| Backend        | Laravel 13, PHP 8.4             |
| Auth           | Laravel Fortify                 |
| Database       | MySQL                           |
| Frontend       | Blade, Tailwind CSS 4           |
| Build tool     | Vite                            |
| Version control| Git & GitHub                    |

---

## 🏗️ Architecture Highlights

- **Route Model Binding** for clean, automatic 404 handling
- **Form Request classes** to separate validation logic from controllers
- **Eloquent relationships** (`Category hasMany Product`) with eager loading to avoid N+1 queries
- **Policy-based authorization** (`ProductPolicy`) layered on top of role middleware
- **Idempotent database seeders** using `updateOrCreate` (safe to re-run without duplicating data)

---

## 🚀 Getting Started

### Prerequisites
- PHP >= 8.4
- Composer
- MySQL
- Node.js & npm

### Installation

```bash
# 1. Clone the repository
git clone https://github.com/Mobin0gh/product-showcase-laravel.git
cd product-showcase-laravel

# 2. Install PHP dependencies
composer install

# 3. Install JS dependencies
npm install

# 4. Set up environment
cp .env.example .env
php artisan key:generate

# 5. Configure your database in .env, then run migrations + seeders
php artisan migrate --seed

# 6. Link storage (for uploaded product images)
php artisan storage:link

# 7. Run the app
php artisan serve
npm run dev
```

The app will be available at `http://127.0.0.1:8000`.

### Default seeded accounts

| Role  | Email               | Password   |
|-------|----------------------|-----------|
| Admin | admin@example.com    | 12345678  |

---

## 📁 Project Structure (key folders)

```
app/
├── Http/
│   ├── Controllers/
│   │   ├── Admin/          # Admin-only controllers (Product, Category, Dashboard)
│   │   └── ProfileController.php
│   ├── Middleware/
│   │   └── AdminMiddleware.php
│   └── Requests/
│       └── Admin/          # Form Request validation classes
├── Models/
│   ├── Product.php
│   ├── Category.php
│   └── User.php
├── Policies/
│   └── ProductPolicy.php
resources/
├── views/
│   ├── admin/               # Admin panel views
│   ├── pages/                # Public-facing pages
│   └── partials/              # Shared header/footer
database/
├── migrations/
└── seeders/
```

---

## 🗺️ Roadmap (completed)

- [x] Authentication (Fortify) & user profile
- [x] Role-based Admin middleware
- [x] Admin dashboard with stats
- [x] Product CRUD with image upload
- [x] Category CRUD with relational delete protection
- [x] Form Request validation
- [x] Pagination
- [x] Search & filter
- [x] Policy-based authorization

---

## 📄 License

This project is open-sourced for portfolio and learning purposes.
