# 🔐 PHP Login & User Management System

A secure, Bootstrap-powered authentication system built with PHP and MySQL. This project features a modern UI, automated database setup, and follows security best practices by protecting sensitive information.

## 🚀 Getting Started

To get this project running locally on XAMPP, follow these steps:

### 1. Clone the Project

Place the project folder in your XAMPP directory:
`C:\xampp\htdocs\php_demo\`

### 2. Configure Database (Security Rule)

Following GitHub's sensitive information rules, the main `db.php` is ignored by Git.

1. Navigate to `Login/config/`.
2. Duplicate `db.example.php` and rename it to **`db.php`**.
3. Open `db.php` and ensure the credentials match your local MySQL settings.

### 3. Automated Database Setup

You don't need to manually import SQL files.

1. Start **Apache** and **MySQL** in XAMPP.
2. Visit: `http://localhost/php_demo/Login/setup.php`
3. Once you see "✅ Setup Successful!", the database `php_login` and table `users` are ready.

---

## 🎨 Features & Design

- **Modern UI:** Developed with **Bootstrap 5** for a professional look and feel.
- **Security:** \* Passwords are encrypted using `password_hash()`.
  - Database credentials are kept private via `.gitignore`.
- **User Management:** A styled table in `users.php` allows for easy viewing of registered accounts.

---

## 📂 Project Structure

```text
php_demo/
├── .gitignore           # Prevents sensitive info (db.php) from being pushed
├── database.sql         # Manual database schema backup
├── README.md            # Project documentation
└── Login/
    ├── config/          # Connection settings
    │   ├── db.php       # Private local config (Ignored by Git)
    │   └── db.example.php # Template for public view
    ├── register.php     # Bootstrap registration form
    ├── login.php        # Bootstrap login form
    ├── users.php        # List of all users
    └── setup.php        # Database auto-installer script
```
