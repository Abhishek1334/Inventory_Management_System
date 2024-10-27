<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShelfWise</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Header and Navigation Bar -->
    <header class="header">
        <h1 class="logo">ShelfWise</h1>
        <nav>
            <button class="nav-button">DASHBOARD</button>
            <button class="nav-button">STOCK REPORT</button>
            <a href="../auth/logout.php" class="nav-button">LOGOUT</a>

        </nav>
    </header>

    <!-- Greeting Section -->
    <section class="greeting">
        <h2>Hi, USERNAME</h2>
    </section>

    <!-- Unified box for sidebar and product list -->
    <div class="unified-container">
        <!-- Sidebar -->
        <div class="sidebar">
            <a href="#">PRODUCT LIST</a>
            <a href="#">SUPPLIERS LIST</a>
            <a href="#">LOW STOCK ITEMS</a>
            <a href="#">OUT OF STOCK ITEMS</a>
            <a href="#">PURCHASE HISTORY</a>
        </div>

        <!-- Product List -->
        <div class="product-list-container">
            <h3 class="section-title">PRODUCT LIST</h3>
            <hr class="divider">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>PRODUCT NAME</th>
                        <th>UNITS</th>
                        <th>PRICE PER UNIT</th>
                        <th>SUPPLIER NAME</th>
                        <th><button class="add-button"><i class="fas fa-plus"></i></button></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Samsung Television</td>
                        <td>15</td>
                        <td>45000</td>
                        <td>ABC Suppliers</td>
                        <td class="action-buttons">
                            <i class="fas fa-eye"></i>
                            <i class="fas fa-edit"></i>
                            <i class="fas fa-trash"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Samsung Television</td>
                        <td>15</td>
                        <td>45000</td>
                        <td>ABC Suppliers</td>
                        <td class="action-buttons">
                            <i class="fas fa-eye"></i>
                            <i class="fas fa-edit"></i>
                            <i class="fas fa-trash"></i>
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>  
