## Yale Scholl Redesign
Redesigning do website da Yale School - Escola de arte. Você pode encontrar o site original nessa url: www.art.yale.edu/
You can see the ui project at https://www.figma.com/file/rnX2TausVQWrb9xW3OUl16/YALE-SCHOOL-%C2%ADOF-ART

## 🚀 Features
- **ReactJS** for dynamic frontend development.
- **WordPress** serves as the CMS with ACF, WP REST API, and Safe SVG plugins.
- **TailwindCSS** for utility-first styling.

## 🛠️ Requirements
To run this project, make sure you have the following:

- **Node.js**: Version 16 or above
- **PHP**: Version 7.4 or above
- **WordPress**: Latest version
- **MySQL**: Database for WordPress

## 📦 Installation
### 0. Create those folders

````bash
mkdir backend
mkdir 
````

### 1. Clone the Repository
```bash
git clone https://github.com/yourusername/blank-wordpress-template.git
cd blank-wordpress-template

``` 
### 2. Install WordPress
- Download the latest version of WordPress.
- Extract it into your project directory.
- Configure the wp-config.php file with your database credentials.

``
### 3. Set Up ReactJS (Frontend)
- Go to the frontend directory:
```bash
cd frontend
npm install
npm start
```
### 4. Install WordPress Plugins
WP REST API: This will enable WordPress to interact with the React and Laravel setup.
ACF PRO (Advanced Custom Fields): For creating custom content fields within WordPress.
Safe SVG: Allows the safe upload and use of SVG files in WordPress.
Contact Form 7
You can install these plugins directly via the WordPress admin dashboard or download and place them in the wp-content/plugins directory.

### 7. Set Up TailwindCSS
Install TailwindCSS:
````bash

npm install -D tailwindcss
npx tailwindcss init

````
Configure tailwind.config.js to suit your project's needs.

### 8. Run the Project

````bash
cd frontend
npm start

````
### 9. Wordpress configs
- Active the theme and all the presets plugins
- Urls examples at rest api
/index.php?rest_route=/wp/v2/pages&slug=homepage
/index.php?rest_route=/wp/v2/pages&slug=pages&slug=about
