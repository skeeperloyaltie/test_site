# Simple Product Management System

This project demonstrates a simple product management system with features like adding products to a database and displaying them. The project uses HTML for front-end, PHP for server-side scripting, and MySQL for database management.

## Getting Started

Follow the steps below to set up the project on your local machine.

### Prerequisites

Make sure you have the following software installed:

- [XAMPP](https://www.apachefriends.org/index.html) or a similar local server environment.
- A web browser (e.g., Chrome, Firefox).

### Installation

    ```bash
    git clone https://github.com/your-username/simple-product-management.git
    ```

1. Start your XAMPP server and ensure that Apache and MySQL are running.
   
   ```bash
   sudo /opt/lampp/lampp start
   ```

2. Create a MySQL database named `shoe_store`.

    ```sql
    CREATE DATABASE shoe_store;
    USE shoe_store;
    ```

3. Create a `products` table in the database.

    ```sql
    CREATE TABLE products (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        price DECIMAL(10, 2) NOT NULL
    );
    ```
### Import The sql file to the database ```shoe_store```


4. Copy the project files to your XAMPP's `htdocs` directory.

5. Open your web browser and navigate to `http://localhost/web/index.php`.

6. Use the provided form to add products to the database.

## Usage

- `insert_product.html`: HTML file with a form for adding products.
- `insert_product.php`: PHP file that processes the form data and inserts products into the database.

## Contributing

Feel free to contribute to the project by opening issues or submitting pull requests.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
