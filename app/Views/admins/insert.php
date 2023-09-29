<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My products</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">

    <!-- Custom CSS for center alignment and background -->
    <style>
        /* Center-align the container */
        .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #ffcccc, #000);
        }

        /* Style the form and table */
        .form-container, .table-container {
            background-color: rgba(255, 255, 255, 0.9); /* Light red background with transparency */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
<div class="center-container">
    <div class="form-container container">
        <h1>Create New Product</h1>
        <form action="<?= base_url('create') ?>" method="post" enctype="multipart/form-data" onsubmit="return insertOrUpdateProduct()">
            <input type="hidden" id="productIndex" value="-1">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" id="description" class="form-control">
            </div>
            <div class="form-group">
                <label for="image_url">Image</label>
                <input type="file" name="image_url" id="image_url" class="form-control">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" name="price" id="price" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="reviews">Reviews</label>
                <input type="number" name="reviews" id="reviews" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary" id="submitBtn">Insert Product</button>
            <button type="button" class="btn btn-secondary" id="cancelBtn" onclick="cancelEdit()">Cancel</button>
        </form>
    </div>
</div>
<div class="center-container">
    <div class="table-container container mt-5">
        <h1>Table Footwear</h1>
        <table class="table table-bordered">
            <thead class="thead-dark">
            <tr>
                <th>Name</th>
                <th>Contact</th>
                <th>Image</th>
                <th>Price</th>
                <th>Reviews</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody id="productTableBody">
            <!-- Products will be dynamically added here -->
            </tbody>
        </table>
    </div>
</div>

<!-- Include Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
<script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
<script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
<script>
    // Initialize an array to store product data
    let products = [];

    // Function to insert or update a product
    function insertOrUpdateProduct() {
        const name = document.getElementById("name").value;
        const description = document.getElementById("description").value;
        const image_url = document.getElementById("image_url").value;
        const price = parseFloat(document.getElementById("price").value);
        const reviews = parseInt(document.getElementById("reviews").value);
        const productIndex = parseInt(document.getElementById("productIndex").value);

        if (productIndex === -1) {
            // Insert a new product
            const product = { name, description, image_url, price, reviews };
            products.push(product);
        } else {
            // Update an existing product
            products[productIndex].name = name;
            products[productIndex].description = description;
            products[productIndex].image_url = image_url;
            products[productIndex].price = price;
            products[productIndex].reviews = reviews;
        }

        // Clear the form fields
        document.getElementById("name").value = "";
        document.getElementById("description").value = "";
        document.getElementById("image_url").value = "";
        document.getElementById("price").value = "";
        document.getElementById("reviews").value = "";

        // Change submit button text back to "Insert Product"
        document.getElementById("submitBtn").textContent = "Insert Product";

        // Update the product table
        updateProductTable();

        // Prevent the form from submitting
        return false;
    }

    // Function to populate the form fields for editing
    function editProduct(index) {
        document.getElementById("name").value = products[index].name;
        document.getElementById("description").value = products[index].description;
        document.getElementById("image_url").value = products[index].image_url;
        document.getElementById("price").value = products[index].price;
        document.getElementById("reviews").value = products[index].reviews;
        document.getElementById("productIndex").value = index;

        // Change submit button text to "Update Product"
        document.getElementById("submitBtn").textContent = "Update Product";
    }

    // Function to cancel editing and clear the form
    function cancelEdit() {
        document.getElementById("name").value = "";
        document.getElementById("description").value = "";
        document.getElementById("image_url").value = "";
        document.getElementById("price").value = "";
        document.getElementById("reviews").value = "";
        document.getElementById("productIndex").value = -1;

        // Change submit button text back to "Insert Product"
        document.getElementById("submitBtn").textContent = "Insert Product";
    }

    // Function to delete a product
    function deleteProduct(index) {
        if (confirm("Are you sure you want to delete this product?")) {
            // Remove the product from the array
            products.splice(index, 1);
            // Update the product table
            updateProductTable();
        }
    }

    // Function to update the product table
    function updateProductTable() {
        const tableBody = document.getElementById("productTableBody");
        tableBody.innerHTML = "";

        for (let i = 0; i < products.length; i++) {
            const product = products[i];
            const row = document.createElement("tr");
            row.innerHTML = `
                <td>${product.name}</td>
                <td>${product.description}</td>
                <td>${product.image_url}</td>
                <td>${product.price}</td>
                <td>${product.reviews}</td>
                <td>
                    <button class="btn btn-primary" onclick="editProduct(${i})">Edit</button>
                    <button class="btn btn-danger" onclick="deleteProduct(${i})">Delete</button>
                </td>
            `;
            tableBody.appendChild(row);
        }
    }

    // Initial product table update
    updateProductTable();
    // Your JavaScript code here
</script>
</body>
</html>
