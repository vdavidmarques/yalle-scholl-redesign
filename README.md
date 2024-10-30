## Yale Scholl Redesign
Redesigning do website da Yale School - Escola de arte. Você pode encontrar o site original nessa url: www.art.yale.edu/
You can see the ui project at https://www.figma.com/file/rnX2TausVQWrb9xW3OUl16/YALE-SCHOOL-%C2%ADOF-ART

## 🚀 Features
- **ReactJS** for dynamic frontend development.
- **NextJs** for server-side rendering and SEO optimization.
- **WordPress** serves as the CMS with ACF, WP REST API, and Safe SVG plugins.
- **TailwindCSS** for utility-first styling.

## 🛠️ Requirements
To run this project, make sure you have the following:

- **Node.js**: Version 16 or above
- **NPM** ou **Yarn**
- **NextJs**: Latest version
- **ReactJS**: Latest version
- **PHP**: Version 7.4 or above
- **WordPress**: Latest version
- **MySQL**: Database for WordPress

## 📦 Installation
``
### 1. Clone the Repository
```bash
git clone https://github.com/vdavidmarques/yale-scholl.git
cd yale-scholl
mkdir backend
``` 
### 2. Install WordPress
- Download the latest version of WordPress.
- Extract it into your backend directory.
- Configure the wp-config.php file with your database credentials.

``
### 3. Set Up NextJs (Frontend)
- Return to default directory
```bash
npx create-next-app frontend
```

### 4. Install WordPress Plugins
WP REST API: This will enable WordPress to interact with the React and Laravel setup.
ACF PRO (Advanced Custom Fields): For creating custom content fields within WordPress.
Safe SVG: Allows the safe upload and use of SVG files in WordPress.
Contact Form 7
You can install these plugins directly via the WordPress admin dashboard or download and place them in the wp-content/plugins directory.

- Active the theme and all the presets plugins
- Urls examples at rest api

- Pages
/index.php?rest_route=/wp/v2/pages&slug=homepage
/index.php?rest_route=/wp/v2/pages&slug=about

- Singles
/index.php?rest_route=/wp/v2/courses&slug=graphic-design

- Menus
index.php?rest_route=/custom-api/v1/menu/main-menu

### 6. Run the Project

````bash
cd frontend
npm run dev
