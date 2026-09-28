<?php 

$produk = [
    [
        "nama" => "Smartphone X Pro",
        "kategori" => "Elektronik",
        "harga" => 3500000,
        "stok" => 5
    ],
    [
        "nama" => "Mechanical Keyboard",
        "kategori" => "Aksesoris",
        "harga" => 850000,
        "stok" => 10
    ],
    [
        "nama" => "Gaming Mouse RGB",
        "kategori" => "Aksesoris",
        "harga" => 450000,
        "stok" => 0
    ],
    [
        "nama" => "Monitor 24 Inch",
        "kategori" => "Elektronik",
        "harga" => 1800000,
        "stok" => 4
    ],
    [
        "nama" => "TWS Earbuds",
        "kategori" => "Audio",
        "harga" => 600000,
        "stok" => 8
    ],
    [
        "nama" => "Laptop Productivity",
        "kategori" => "Elektronik",
        "harga" => 8500000,
        "stok" => 3
    ]
];

$total_produk = count($produk);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cia Store</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #ffffff;
            padding: 15px 40px;
            border-bottom: 1px solid #ddd;
        }

        .logo {
            font-size: 20px;
            font-weight: bold;
            color: #111;
        }

        .nav-links {
            display: flex;
            gap: 20px;
            list-style: none;
        }

        .nav-links a {
            text-decoration: none;
            color: #555;
        }

        .hero {
            background-color: #171923;
            color: white;
            padding: 60px 40px;
            border-radius: 10px;
            max-width: 1100px;
            margin: 30px auto;
        }

        .hero h4 {
            font-size: 12px;
            letter-spacing: 1px;
            margin-bottom: 10px;
            color: #a0aec0;
        }

        .hero h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .hero p {
            color: #cbd5e0;
            margin-bottom: 20px;
        }

        .hero a {
            display: inline-block;
            background: white;
            color: #171923;
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
        }

        .container {
            max-width: 1180px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .catalog-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .catalog-title h2 {
            font-size: 14px;
            color: #718096;
            margin-bottom: 2px;
        }

        .catalog-title h1 {
            font-size: 24px;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            margin-bottom: 50px;
        }

        .product-card {
            background: white;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: transform 0.2s ease;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .card-top {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 15px;
        }

        .category {
            font-size: 12px;
            background: #edf2f7;
            padding: 4px 8px;
            border-radius: 4px;
            color: #4a5568;
        }

        .status {
            font-size: 12px;
            padding: 4px 8px;
            border-radius: 20px;
            font-weight: bold;
        }

        .tersedia { 
            background: #c6f6d5; 
            color: #22543d; 
        }

        .habis { 
            background: #fed7d7; 
            color: #742a2a; 
        }

        .product-name {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .price-box {
            margin: 15px 0;
        }

        .normal-price {
            font-size: 16px;
            font-weight: bold;
            color: #2b6cb0;
        }

        .price-strikethrough {
            font-size: 14px;
            color: #a0aec0;
            text-decoration: line-through;
        }

        .final-price {
            font-size: 18px;
            font-weight: bold;
            color: #e53e3e;
        }

        .discount-badge {
            background: #fed7d7;
            color: #9b2c2c;
            font-size: 10px;
            padding: 2px 6px;
            border-radius: 3px;
            font-weight: bold;
            display: inline-block;
            margin-bottom: 5px;
        }

        .stock-info {
            font-size: 13px;
            color: #718096;
            margin-bottom: 15px;
        }

        .btn-buy {
            display: block;
            width: 100%;
            background: #3182ce;
            color: white;
            text-align: center;
            padding: 10px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            border: none;
            cursor: pointer;
        }

        .btn-buy:hover { 
            background: #2b6cb0; 
        }
        
        .btn-disabled {
            background: #e2e8f0;
            color: #a0aec0;
            cursor: not-allowed;
        }

        footer {
            text-align: center;
            padding: 20px;
            border-top: 1px solid #ddd;
            color: #718096;
            background: #fff;
        }

        @media (max-width: 900px) {
            .product-grid { grid-template-columns: repeat(2, 1fr); }
        }
        
        @media (max-width: 600px) {
            .product-grid { grid-template-columns: 1fr; }
            .hero { padding: 40px 20px; }
        }
    </style>
</head>
<body>
    <header class="navbar">
        <div class="logo">Cia Store</div>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">About</a></li>
        </ul>
    </header>

    <section class="hero">
        <h4>CIA STORE</h4>
        <h1>Simple Tech Store.</h1>
        <p>Temukan berbagai perangkat dan aksesoris teknologi untuk kebutuhanmu.</p>
        <a href="#katalog">Lihat Produk</a>
    </section>

    <main class="container" id="katalog">
        <div class="catalog-header">
            <div class="catalog-title">
                <h2>OUR PRODUCTS</h2>
                <h1>Katalog Produk</h1>
            </div>
            <div>
                <strong>Total Produk: <?= $total_produk; ?></strong>
            </div>
        </div>

        <div class="product-grid">
            <?php 
            foreach ($produk as $p): 
                $nama = $p['nama'];
                $kategori = $p['kategori'];
                $harga_asli = $p['harga'];
                $stok = $p['stok'];

                if ($stok > 0) {
                    $status_text = "Tersedia";
                    $status_class = "tersedia";
                } else {
                    $status_text = "Stok Habis";
                    $status_class = "habis";
                }

                $dapat_diskon = ($harga_asli >= 1000000);
                if ($dapat_diskon) {
                    $diskon_harga = $harga_asli * 0.10;
                    $harga_akhir = $harga_asli - $diskon_harga;
                }
            ?>
                <div class="product-card">
                    <div>
                        <div class="card-top">
                            <span class="category"><?= $kategori; ?></span>
                            <span class="status <?= $status_class; ?>"><?= $status_text; ?></span>
                        </div>
                        
                        <div class="product-name"><?= $nama; ?></div>
                        <div class="stock-info">Stok: <?= $stok; ?></div>

                        <div class="price-box">
                            <?php if ($dapat_diskon): ?>
                                <span class="discount-badge">DISKON 10%</span><br>
                                <span class="price-strikethrough">Rp <?= number_format($harga_asli, 0, ',', '.'); ?></span>
                                <div class="final-price">Rp <?= number_format($harga_akhir, 0, ',', '.'); ?></div>
                            <?php else: ?>
                                <div class="normal-price">Rp <?= number_format($harga_asli, 0, ',', '.'); ?></div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div>
                        <?php if ($stok > 0): ?>
                            <a href="#" class="btn-buy">Beli Sekarang</a>
                        <?php else: ?>
                            <button class="btn-buy btn-disabled" disabled>Stok Habis</button>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

    <footer>
        <p>&copy; 2026 Cia Store. All rights reserved.</p>
    </footer>
</body>
</html>