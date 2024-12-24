### 🚀 PHP RESTful API for CRUD Operations

- This project demonstrates a PHP-based RESTful API for performing CRUD operations on three independent database tables: Users, Products, and Orders. The API is developed with modular folder organization, follows REST principles, and includes error handling with JSON responses.

### 📁 Project Structure
```dart
📂 project-directory
├── 📂 controllers     # Contains logic for handling API requests
├── 📂 models          # Database connection and query functions
├── 📂 routes          # API endpoints and routing configuration
├── 📂 config          # Configuration files (e.g., database connection)
├── index.php          # Entry point for the API
├── README.md          # Project documentation
└── database.sql       # SQL script to set up the database schema
```

### 🛠️ Features
- Users API:
- ➕ Add a new user (POST /users)
- 📄 Retrieve all users (GET /users)

### Products API:
- ➕ Add a new product (POST /products)
- ✏️ Update a product price (PUT /products/:id)

### Orders API:
- ➕ Add a new order (POST /orders)
- ❌ Delete an order by ID (DELETE /orders/:id)

### Error Handling: Validation errors, missing parameters, server errors with descriptive JSON messages.

### 📂 Database Schema

#### 1. Users Table
```dart
Field	Type	Description
id	INT (PK, AI)	Unique user ID
name	VARCHAR(255)	User's full name
email	VARCHAR(255)	User's email
phone	VARCHAR(15)	User's phone number

```

```dart
2. Products Table
Field	Type	Description
id	INT (PK, AI)	Unique product ID
product_name	VARCHAR(255)	Name of the product
price	DECIMAL(10,2)	Price of the product

```

```dart
3. Orders Table
Field	Type	Description
id	INT (PK, AI)	Unique order ID
order_date	DATE	Date of the order
status	VARCHAR(50)	Status of the order
```

### 📲 API Endpoints
- HTTP Method	Endpoint	Description	Payload
- POST	/users	Add a new user	{ "name": "John", "email": "john@example.com", "phone": "1234567890" }
- GET	/users	Retrieve all users	N/A
- POST	/products	Add a new product	{ "product_name": "Laptop", "price": 999.99 }
- PUT	/products/:id	Update product price by ID	{ "price": 899.99 }
- POST	/orders	Add a new order	{ "order_date": "2024-01-01", "status": "Pending" }
- DELETE	/orders/:id	Delete an order by ID	N/A
  
### 🧪 Testing
- Use Postman to test the APIs.

- Import the database using the provided database.sql file.
- Start the PHP server and test endpoints with appropriate payloads and HTTP methods.
- Validate JSON responses and error handling.
  
### 🎥 Video Overview

https://drive.google.com/drive/folders/1jzDCm_4PBuBUvKnAny9s9KCAAjPSABoH?usp=sharing




