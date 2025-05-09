<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metro Essence | Luxury Perfumes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        /* General Styling */
        body {
            font-family: 'Arial', sans-serif;
            color: #333;
            background-color: #fff;
        }
        
        .btn-primary {
            background-color: #6a4c93;
            border-color: #6a4c93;
            border-radius: 0;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            padding: 8px 20px;
        }
        
        .btn-primary:hover {
            background-color: #5a3d83;
            border-color: #5a3d83;
        }
        
        .section-title {
            text-align: center;
            font-size: 1.5rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 2rem;
            font-weight: normal;
        }
        
        /* Header Styling */
        .header-top {
            background-color: #fff;
            padding: 8px 0;
            border-bottom: 1px solid #f1f1f1;
        }
        
        .search-container {
            display: flex;
            align-items: center;
        }
        
        .search-input {
            border: none;
            outline: none;
            font-size: 0.9rem;
            color: #555;
            width: 180px;
        }
        
        .search-icon {
            color: #777;
            font-size: 0.9rem;
        }
        
        .signin-link {
            font-size: 0.85rem;
            color: #555;
            text-decoration: none;
        }
        
        .signin-link:hover {
            color: #000;
        }
        
        /* Logo area */
        .logo-container {
            text-align: center;
            padding: 10px 0;
        }
        
        .logo-text {
            font-family: 'Times New Roman', Times, serif;
            font-size: 1.8rem;
            letter-spacing: 1px;
            color: #333;
            text-decoration: none;
            text-transform: uppercase;
        }
        
        .metro {
            font-weight: normal;
        }
        
        .essence {
            font-weight: lighter;
        }
        
        .dot-com {
            font-size: 0.7rem;
            vertical-align: super;
            font-weight: lighter;
        }
        
        /* Main Navigation */
        .main-nav {
            background-color: #fff;
            border-top: 1px solid #f1f1f1;
            border-bottom: 1px solid #f1f1f1;
            text-align: center;
            padding: 8px 0;
        }
        
        .main-nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: inline-flex;
        }
        
        .main-nav li {
            margin: 0 15px;
        }
        
        .main-nav a {
            color: #555;
            text-decoration: none;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            transition: color 0.2s ease;
        }
        
        .main-nav a:hover {
            color: #000;
        }
        
        /* Hero Section */
        .hero {
            position: relative;
            height: 400px;
            overflow: hidden;
            margin-bottom: 3rem;
        }
        
        .hero-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .hero-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #333;
        }
        
        .hero-title {
            font-size: 2rem;
            font-weight: lighter;
            margin-bottom: 1rem;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        
        /* Featured Section */
        .featured-section {
            padding: 3rem 0;
            text-align: center;
        }

        .featured-title {
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 2rem;
            font-size: 1.5rem;
            font-weight: normal;
        }
        
        .featured-product {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
        }
        
        .featured-image {
            width: 40%;
            padding: 1rem;
        }
        
        .featured-image img {
            max-width: 100%;
            height: auto;
        }
        
        .featured-info {
            width: 60%;
            text-align: left;
            padding: 1rem;
        }
        
        .featured-description {
            font-size: 0.9rem;
            line-height: 1.6;
            color: #555;
            margin-bottom: 1rem;
        }
        
        /* Product Cards */
        .product-card {
            margin-bottom: 2rem;
            text-align: center;
        }
        
        .product-image {
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
        }
        
        .product-image img {
            max-height: 100%;
            max-width: 100%;
        }
        
        .product-name {
            font-size: 0.95rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 0.5rem;
            color: #333;
        }
        
        .product-brand {
            font-size: 0.85rem;
            color: #777;
            margin-bottom: 0.5rem;
        }
        
        .product-price {
            font-size: 0.9rem;
            color: #333;
            margin-bottom: 1rem;
        }
        
        .best-seller-section {
            padding: 3rem 0;
            background-color: #f9f9f9;
        }
        
        .promo-box {
            border: 1px solid #e0e0e0;
            padding: 1.5rem;
            margin: 1rem 0;
            background-color: #f9f9f9;
        }
        
        .promo-box.highlight {
            border: 1px solid #a0d2eb;
            background-color: #f0f9ff;
        }
        
        .promo-title {
            font-size: 1rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .header-container {
                padding: 0 15px;
            }
            
            .main-nav ul {
                flex-direction: column;
                gap: 10px;
            }
            
            .logo-text {
                font-size: 1.5rem;
            }
            
            .mobile-menu-btn {
                background: none;
                border: none;
                color: #555;
                font-size: 1.2rem;
            }
            
            .main-nav {
                display: none;
            }
            
            .main-nav.show {
                display: block;
            }
            
            .featured-product {
                flex-direction: column;
            }
            
            .featured-image, .featured-info {
                width: 100%;
            }
            
            .hero {
                height: 300px;

            
            .hero-title {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header Top - Search and Sign In -->
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <div class="search-container">
                        <input type="text" class="search-input" placeholder="Hey, what are you looking for?">
                        <i class="fas fa-search search-icon ms-2"></i>
                    </div>
                </div>
                <div class="col-auto">
                    <a href="#" class="signin-link">Sign in</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Logo Area -->
    <div class="logo-container">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <a href="#" class="logo-text">
                        <span class="metro">METRO</span> <span class="essence">ESSENCE</span><span class="dot-com">.com</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Main Navigation -->
    <nav class="main-nav">
        <div class="container">
            <div class="d-md-none text-end py-2">
                <button class="mobile-menu-btn" id="toggleMenu">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <ul id="mainMenu" class="d-none d-md-inline-flex">
                <li><a href="#">PERFUMES</a></li>
                <li><a href="#">BEST SELLER</a></li>
                <li><a href="#">ABOUT US</a></li>
                <li><a href="#">CONTACT US</a></li>
            </ul>
        </div>
    </nav>
    
    <!-- Hero Section -->
    <section class="hero">
        <img src="images/perfume.jpg" alt="Elegance in every bottle" class="hero-image">
        <div class="hero-content">
            <h1 class="hero-title">Elegance in every bottle</h1>
            <a href="#" class="btn btn-primary">SHOP NOW</a>
        </div>
    </section>
    
    <!-- Featured Products Section -->
    <section class="featured-section">
        <div class="container">
            <h2 class="section-title">SHOP OUR FAVORITES</h2>
            
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="featured-product">
                        <div class="featured-image">
                            <img src="images/CAPTIVATING/p8.png" alt="See by Chloé Perfume">
                        </div>
                        <div class="featured-info">
                            <p class="featured-description">
                                Blush Enchanté is a mesmerizing blend of sweet vanilla and luscious berries, creating a scent that feels both playful and sophisticated. Its delicate yet captivating aroma lingers beautifully, making it perfect for those who love a touch of elegance with a hint of sweetness. Whether worn for a casual day out or a special evening, this fragrance adds a charming and radiant aura.
                            </p>
                            <a href="#" class="btn btn-primary">CAPTIVATING</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="featured-product">
                        <div class="featured-image">
                            <img src="images/INTENSE/p11.png" alt="Rituals Perfume">
                        </div>
                        <div class="featured-info">
                            <p class="featured-description">
                                Vortex Edge is a bold and mysterious fragrance that exudes confidence and sophistication. The deep, smoky richness of oud blends seamlessly with the warm sweetness of vanilla, creating an irresistible balance of intensity and allure. This scent lingers with a magnetic presence, making it perfect for those who embrace both power and elegance.
                            </p>
                            <a href="#" class="btn btn-primary">INTENSE</a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Best Seller Section -->
    <section class="best-seller-section">
        <div class="container">
            <h2 class="section-title">BEST SELLER</h2>
            
            <div class="row">
                <div class="col-6 col-md-3">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="images/CAPTIVATING/p1.png" alt="Chloé Perfume">
                        </div>
                        <h3 class="product-name">Rose Mystique</h3>
                        <p class="product-brand">CAPTIVATING</p>
                        <p class="product-price">₱1000</p>
                        <a href="#" class="btn btn-primary btn-sm">ADD TO CART</a>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="images/INTENSE/p4.png" alt="Gentleman Perfume">
                        </div>
                        <h3 class="product-name">Midnight Ember</h3>
                        <p class="product-brand">INTENSE</p>
                        <p class="product-price">₱1000</p>
                        <a href="#" class="btn btn-primary btn-sm">ADD TO CART</a>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="images/CAPTIVATING/p8.png" alt="See By Chloé Eau Fraîche">
                        </div>
                        <h3 class="product-name">Sapphire Wisper</h3>
                        <p class="product-brand">CAPTIVATING</p>
                        <p class="product-price">₱1000</p>
                        <a href="#" class="btn btn-primary btn-sm">ADD TO CART</a>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="images/INTENSE/p1.png" alt="Rêve d'Ange">
                        </div>
                        <h3 class="product-name">Eclipse Noir</h3>
                        <p class="product-brand">INTENSE</p>
                        <p class="product-price">₱1000</p>
                        <a href="#" class="btn btn-primary btn-sm">ADD TO CART</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="bg-light py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Customer Service</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none text-muted">Contact Us</a></li>
                        <li><a href="#" class="text-decoration-none text-muted">FAQs</a></li>
                        <li><a href="#" class="text-decoration-none text-muted">Shipping & Returns</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>About Us</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none text-muted">Our Story</a></li>
                        <li><a href="#" class="text-decoration-none text-muted">Blog</a></li>
                        <li><a href="#" class="text-decoration-none text-muted">Careers</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <div class="d-flex gap-2">
                        <a href="#" class="text-decoration-none text-muted"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-decoration-none text-muted"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-decoration-none text-muted"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#" class="text-decoration-none text-muted"><i class="fab fa-twitter"></i></a>
                    </div>
                    <div class="mt-3">
                        <h6>Newsletter</h6>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Your email">
                            <button class="btn btn-dark" type="button">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col text-center">
                    <p class="text-muted small">© 2025 Metro Essence. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Add Bootstrap JS and mobile menu script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Mobile menu toggle
        document.getElementById('toggleMenu').addEventListener('click', function() {
            const mainMenu = document.getElementById('mainMenu');
            mainMenu.classList.toggle('d-none');
            mainMenu.classList.toggle('d-block');
        });
    </script>
</body>
</html>