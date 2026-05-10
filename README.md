# ⚡ QuickPOS — Landing Page

> A pixel-perfect, responsive landing page for the QuickPOS Point of Sale system. Built with PHP, HTML5, CSS3, and vanilla JavaScript.

---

## 📋 Table of Contents
- [Project Overview](#project-overview)
- [Tech Stack](#tech-stack)
- [Getting Started](#getting-started)
- [Project Structure](#project-structure)
- [Branching Strategy](#branching-strategy)
- [Jira Integration](#jira-integration)
- [Team Roles](#team-roles)

---

## Project Overview

QuickPOS is a cloud-native Point of Sale platform. This repository contains the marketing landing page featuring:

- ⚡ **Hero Section** — Headline, CTA, animated dashboard mockup
- 🔧 **Features Section** — 4 key feature cards
- 💳 **Pricing Section** — 3-tier pricing table (Basic / Pro / Enterprise)
- 📬 **Contact Form** — PHP POST handler with validation + redirect
- 📄 **Footer** — Social links and copyright

---

## Tech Stack

| Layer      | Technology          |
|------------|---------------------|
| Backend    | PHP 8.x             |
| Markup     | HTML5               |
| Styles     | CSS3 (custom props) |
| Scripts    | Vanilla JS (ES6+)   |
| Fonts      | Google Fonts (Syne + DM Sans) |
| Server     | Apache / Nginx      |

---

## Getting Started

### Prerequisites
- PHP 8.0 or higher
- Apache or Nginx web server
- A browser (Chrome, Firefox, Safari, Edge)

### Option 1 — PHP Built-in Server (Recommended for Development)

```bash
# Clone the repository
git clone https://github.com/YOUR_USERNAME/quickpos-landing.git
cd quickpos-landing

# Start the PHP development server
php -S localhost:8000

# Open in browser
open http://localhost:8000
```

### Option 2 — XAMPP / WAMP / LAMP

1. Copy the project folder to `htdocs/` (XAMPP) or `www/` (WAMP)
2. Start Apache from your control panel
3. Visit `http://localhost/quickpos-landing/`

### Option 3 — Nginx/Apache Production

```nginx
# nginx.conf snippet
server {
    listen 80;
    server_name quickpos.yourdomain.com;
    root /var/www/quickpos-landing;
    index index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.0-fpm.sock;
        include fastcgi_params;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
    }
}
```

---

## Project Structure

```
quickpos-landing/
├── index.php          # Main landing page
├── contact.php        # Form POST handler + validation
├── thank-you.php      # Success page after form submission
├── style.css          # All styles (single-file, CSS variables)
├── script.js          # Interactions, animations, client validation
├── submissions.log    # Form submissions log (auto-created, gitignored)
├── .gitignore
└── README.md
```

---

## Branching Strategy (GitFlow)

```
main           ← Production-ready. Never commit directly.
│
develop        ← Integration branch. Merge features here first.
│
├── feature/POS-101-navbar-header
├── feature/POS-102-hero-section
├── feature/POS-103-features-section
├── feature/POS-104-pricing-section
├── feature/POS-105-contact-form
├── feature/POS-106-footer
└── bugfix/POS-201-form-validation-fix
```

### Rules
- ❌ **No direct commits to `main`**
- ✅ All work on `feature/` or `bugfix/` branches
- ✅ All merges via **Pull Request** with at least 1 reviewer
- ✅ Every commit message must include the Jira ticket number:
  ```
  [POS-102] Add hero section headline and CTA buttons
  ```

---

## Jira Integration

All work maps to Jira tickets:

| Epic | Epic Name              | Stories |
|------|------------------------|---------|
| EP-1 | Navigation & Header    | POS-101 |
| EP-2 | Hero Section           | POS-102 |
| EP-3 | Features Section       | POS-103 |
| EP-4 | Pricing Section        | POS-104 |
| EP-5 | Contact Us Form        | POS-105 |
| EP-6 | Footer                 | POS-106 |

---

## Team Roles

| Role                  | Responsibilities |
|-----------------------|-----------------|
| **Project Manager/QA** | Jira board, sprint planning, test cases, bug logging |
| **Tech Lead**          | GitHub repo, branching strategy, code review, primary dev |

---

## License

MIT © 2025 QuickPOS Team
