# ApexPlanet Task 2 — Responsive Login & Registration UI

Created for ApexPlanet Full Stack Web Development Internship Task 2.

## Requirements covered
- Bootstrap 5 grid, rows, columns and breakpoints
- Responsive navbar, buttons and modal
- Custom color palette
- Smooth scrolling, hover effects, transitions and animations
- Google Fonts and icons
- Login and registration form validation
- Password match check
- Show/hide password
- Password strength indicator
- AJAX username availability check using PHP
- Reusable navbar and footer
- Mobile-first layout

## Structure
ApexPlanet_Task2_Responsive_Login_Registration/
- index.html
- register.html
- css/style.css
- js/components.js
- js/script.js
- php/check_user.php
- DEMO-SCRIPT.md
- TASK-2-CHECKLIST.md
- README.md

## Run PHP AJAX with XAMPP
1. Start Apache in XAMPP.
2. Copy this folder into `C:\xampp\htdocs\`.
3. Open `http://localhost/ApexPlanet_Task2_Responsive_Login_Registration/`.
4. Open Register and use the Check button beside Username.
5. The request goes to `php/check_user.php` without reloading the page.

Demo taken usernames: admin, vyshnavi, testuser. Other 4+ character usernames are available.

## GitHub Pages note
GitHub Pages hosts the HTML/CSS/JavaScript portion but does not execute PHP. The JavaScript includes a small fallback for the username check on static hosting. The actual PHP AJAX endpoint should be demonstrated locally through XAMPP.
