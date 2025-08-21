<?php
// This PHP array acts as our simple "database"
$products = [
    [
        "id" => "TS-001",
        "name" => "Classic Cotton Tee",
        "price" => 55.00,
        "image_url" => "https://placehold.co/600x400/7B8D8E/white?text=T-Shirt"
    ],
    [
        "id" => "JN-002",
        "name" => "Slim Fit Jeans",
        "price" => 180.00,
        "image_url" => "https://placehold.co/600x400/3E4A61/white?text=Jeans"
    ],
    [
        "id" => "SK-003",
        "name" => "Canvas Sneakers",
        "price" => 120.00,
        "image_url" => "https://placehold.co/600x400/966B56/white?text=Sneakers"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Product Catalog</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Our Latest Collection</h1>
    </header>

    <main class="product-grid">
        <?php foreach ($products as $product): ?>
            <div class="product-card" 
                 data-product-id="<?php echo htmlspecialchars($product['id']); ?>" 
                 data-product-name="<?php echo htmlspecialchars($product['name']); ?>" 
                 data-price="<?php echo htmlspecialchars($product['price']); ?>">
                
                <img src="<?php echo htmlspecialchars($product['image_url']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
                
                <div class="product-info">
                    <h3><?php echo htmlspecialchars($product['name']); ?></h3>
                    <p class="price">RM <?php echo number_format($product['price'], 2); ?></p>
                    <button class="add-to-cart-btn">Add to Cart</button>
                </div>
            </div>
        <?php endforeach; ?>
        </main>

    <script src="app.js"></script>
</body>
</html>