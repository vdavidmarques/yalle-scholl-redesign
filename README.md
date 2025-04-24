## Yale Art School Redesign

A redesign of the Yale School of Art website.

*   **Original Site:** [art.yale.edu](https://art.yale.edu/)
*   **UI Design (Figma):** [Yale School of Art - Figma](https://www.figma.com/file/rnX2TausVQWrb9xW3OUl16/YALE-SCHOOL-%C2%ADOF-ART)

## 🚀 Features

*   **Laravel** for Backend and Frontend
*   **Tailwind CSS** for utility-first styling.

## 🛠️ Requirements

To run this project, make sure you have the following installed:

*   **PHP:** Version 8.1 or higher (check Laravel documentation for the specific version)
*   **Composer:** PHP dependency manager
*   **Node.js:** Version 18.x or higher
*   **NPM** or **Yarn:** Node.js package manager
*   **MySQL** (or another DBMS configured in `.env`)
*   **Git**

## 📦 Installation & Setup

Follow these steps to set up the development environment:

1.  **Clone the Repository:**
    ```bash
    git clone https://github.com/vdavidmarques/yale-art-school.git
    cd yale-art-school
    ```

2.  **Install PHP Dependencies (Composer):**
    ```bash
    composer install
    ```

3.  **Install Node.js Dependencies (NPM or Yarn):**
    ```bash
    npm install
    # or
    # yarn install
    ```

4.  **Configure Environment File:**
    *   Copy the example `.env.example` file to `.env`:
        ```bash
        cp .env.example .env
        ```
    *   Generate the Laravel application key:
        ```bash
        php artisan key:generate
        ```
    *   **Important:** Open the `.env` file and configure your environment variables, especially the database connection details (`DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`). Ensure the database (`DB_DATABASE`) already exists in your DBMS.

5.  **Run Database Migrations:**
    *   This command will create the tables in your configured database.
    ```bash
    php artisan migrate
    ```
    *   (Optional) If the project has seeders to populate the database with initial data:
    ```bash
    php artisan db:seed
    ```

6.  **Compile Assets (CSS/JS with Vite):**
    *   For development (with hot-reloading and auto-refresh):
        ```bash
        npm run dev
        ```
    *   To build optimized assets for production:
        ```bash
        npm run build
        ```

7.  **Start the Laravel Development Server:**
    *   Keep the `npm run dev` command running in one terminal if you are in development mode.
    *   In another terminal, start the PHP server:
    ```bash
    php artisan serve
    ```

    The application will typically be available at `http://127.0.0.1:8000`.

## 🚀 Usage

After following the installation steps and with the `npm run dev` (if applicable) and `php artisan serve` commands running, access the URL provided by `php artisan serve` (usually `http://127.0.0.1:8000`) in your browser.
