# PHP Job Portal System

A web-based Job Portal System built using PHP, HTML, CSS, and MySQL. This system allows employers to post job vacancies and job seekers to register and apply for listed jobs.

---

## 🧩 Features

### 👤 Job Seeker
- Register and log in
- Update profile
- Search and apply for jobs
- View applied jobs

### 🧑‍💼 Employer
- Register and log in
- Post job vacancies
- Manage posted jobs
- View applications from job seekers

### 🛠️ Admin Panel (Optional)
- Manage users (employers and job seekers)
- Manage job categories
- View job statistics

---

## 🗂️ Project Structure

```
php-job-portal-system/
├── index.php             # Landing page
├── login.php             # Login form
├── register.php          # Registration form
├── dashboard/            # User and employer dashboards
├── post_job.php          # Employer job posting form
├── apply_job.php         # Job seeker application form
├── config/               # Database connection
├── includes/             # Header, footer, sessions
├── assets/               # CSS, JS, images
└── README.md             # Project documentation
```

---

## ⚙️ Installation

1. **Clone the repository or download the ZIP**
   ```bash
   git clone https://github.com/yourusername/php-job-portal-system.git
   ```

2. **Move to your server's root directory**
   For example, `htdocs` in XAMPP:
   ```
   C:/xampp/htdocs/php-job-portal-system
   ```

3. **Import the database**
   - Open `phpMyAdmin`
   - Create a new database (e.g., `job_portal`)
   - Import the provided SQL file (if available)

4. **Configure the database connection**
   - Open `config/db.php` or similar
   - Set your database credentials:
     ```php
     $host = 'localhost';
     $user = 'root';
     $pass = '';
     $db   = 'job_portal';
     ```

5. **Run the app**
   Visit `http://localhost/php-job-portal-system` in your browser

---

## 🧑‍💻 Technologies Used

- **Frontend**: HTML, CSS, Bootstrap (optional)
- **Backend**: PHP
- **Database**: MySQL
- **Server**: Apache (XAMPP, WAMP, etc.)

---

## 📦 Optional Improvements

- Resume upload and preview
- Email notifications
- Admin dashboard with analytics
- Search filters (category, location, type)

---

## 👨‍🎓 Author

**Ayman Dhanshe**  
[Portfolio or GitHub Profile]

---

## 📜 License

This project is open-source and free to use for educational or personal purposes.
