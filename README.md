# The Hyrulian Cookbook

A web aplication where users can view recipes from The Legend Of Zelda franchise.

## Getting Started

### Prerequisites

Make sure you have the following installed:

-   [PHP](https://www.php.net/) (>= 7.3)
-   [Composer](https://getcomposer.org/)
-   [Node.js](https://nodejs.org/)
-   [npm](https://www.npmjs.com/)
-   [MySQL](https://www.mysql.com/) or another database of your choice

### Installation

1. Clone the repository:

```bash
git clone https://github.com/MartijnKerpentier/hyrulian_cookbook.git
```

2. Install dependencies:

```bash
    cd my_folder
    composer install
    npm install
```

### Configuration

1. Create a copy of the .env.example file and rename it to .env. Configure your database connection in the .env file

1. Generate the application key:

```bash
    php artisan key generate
```

3. Run migrations to create the necessary tables:

```bash
    php artisan migrate
```

4. Seed the database with sample categories, recipes and ingredients:

```bash
    php artisan db:seed
```

### Usage

Run the development server:

```bash
    php artisan serve
    npm run dev
```

Visit http://localhost:8000 in your browser to see the application.

## Database Structure

- 'categories': Contains recipe categories.
- 'ingredients': Contains recipe ingredients.
- 'recipes': Contains recipes with a category_id relating to the corresponding category.
- 'ingredient_recipe': Pivot table to relations between recipes and ingredients.

## Further Notes

At this point in time, the application is still in development. Other featurs, pages, or tables could be added in the future, I try to commit regularly, so when cloning this project, make sure you have the latest version.