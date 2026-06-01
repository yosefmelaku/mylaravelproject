# 🎓 Student Management System

A complete Student Management System built with Laravel 12 and Bootstrap 5. This application allows you to manage student records with full CRUD (Create, Read, Update, Delete) operations.

## ✨ Features

- ✅ **Add New Students** - Create student records with validation
- ✅ **View All Students** - Display students in a paginated table
- ✅ **Edit Students** - Update student information
- ✅ **Delete Students** - Remove student records with confirmation
- ✅ **Search Functionality** - Search students by name or email
- ✅ **Responsive Design** - Built with Bootstrap 5
- ✅ **Form Validation** - Server-side validation for all inputs
- ✅ **Clean MVC Architecture** - Following Laravel best practices

## 📋 Student Fields

- First Name
- Last Name
- Email (unique)
- Phone Number
- Department

## 🛠️ Technologies Used

- **Backend:** Laravel 12.61.0
- **Frontend:** Bootstrap 5.3, Bootstrap Icons
- **Database:** MySQL
- **PHP Version:** 8.2+

## 📦 Installation

### Prerequisites

- PHP >= 8.2
- Composer
- MySQL
- XAMPP or similar local server

### Step 1: Clone the Repository

```bash
git clone https://github.com/yourusername/mylaravelproject.git
cd mylaravelproject
```

### Step 2: Install Dependencies

```bash
composer install
```

### Step 3: Configure Environment

1. Copy the `.env.example` file to `.env`:
```bash
copy .env.example .env
```

2. Generate application key:
```bash
php artisan key:generate
```

3. Update `.env` file with your database credentials:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=student_management
DB_USERNAME=root
DB_PASSWORD=
```

### Step 4: Create Database

Create a database named `student_management` in phpMyAdmin or MySQL:
```sql
CREATE DATABASE student_management;
```

### Step 5: Run Migrations

```bash
php artisan migrate
```

### Step 6: Start the Development Server

```bash
php artisan serve
```

Visit: `http://localhost:8000`

## 📸 Screenshots

### Dashboard
![Dashboard](https://via.placeholder.com/800x400?text=Student+Dashboard)

### Add Student
![Add Student](https://via.placeholder.com/800x400?text=Add+Student+Form)

### Edit Student
![Edit Student](https://via.placeholder.com/800x400?text=Edit+Student+Form)

## 🚀 Usage

1. **Add a Student:** Click "Add New Student" button and fill in the form
2. **View Students:** All students are displayed on the main dashboard
3. **Search Students:** Use the search box to find students by name or email
4. **Edit Student:** Click the "Edit" button next to any student
5. **Delete Student:** Click the "Delete" button (confirmation required)

## 📁 Project Structure

```
mylaravelproject/
├── app/
│   ├── Http/Controllers/
│   │   └── StudentController.php
│   └── Models/
│       └── Student.php
├── database/
│   └── migrations/
│       └── 2026_06_01_144606_create_students_table.php
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       └── students/
│           ├── index.blade.php
│           ├── create.blade.php
│           └── edit.blade.php
└── routes/
    └── web.php
```

## 🔧 Routes

| Method | URI | Action | Description |
|--------|-----|--------|-------------|
| GET | `/` | Redirect | Redirect to students list |
| GET | `/students` | index | Display all students |
| GET | `/students/create` | create | Show add student form |
| POST | `/students` | store | Save new student |
| GET | `/students/{id}/edit` | edit | Show edit student form |
| PUT | `/students/{id}` | update | Update student |
| DELETE | `/students/{id}` | destroy | Delete student |

## 🎯 Learning Objectives

This project demonstrates:
- Laravel MVC architecture
- Eloquent ORM
- Database migrations
- Form validation
- Blade templating
- Resource controllers
- CRUD operations
- Bootstrap integration

## 👨‍💻 Author

Built as a learning project for Laravel internship preparation.

## 📝 License

This project is open-source and available under the [MIT License](LICENSE).

## 🙏 Acknowledgments

- Laravel Framework
- Bootstrap
- Bootstrap Icons
