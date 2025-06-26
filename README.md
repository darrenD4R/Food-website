<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NaijaFoodExpress - Nigerian Food Delivery</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        
        body {
            background-color: #f5f5f5;
            color: #333;
        }
        
        header {
            background-color: #690B22;
            color: white;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .logo {
            font-size: 2.0rem;
            font-weight: bold;
        }
        
        nav ul {
            display: flex;
            list-style: none;
        }
        
        nav ul li {
            margin-left: 1.5rem;
        }
        
        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
        }
        
        .cart-icon {
            position: relative;
            cursor: pointer;
        }
        
        .cart-count {
            position: absolute;
            top: -8px;
            right: -8px;
            background-color: #ffcc00;
            color: #333;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 0.7rem;
            font-weight: bold;
        }
        
        .hero {
            background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1604329760661-e71dc83f8f26');
            background-size: cover;
            background-position: center;
            height: 400px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            padding: 0 1rem;
        }
        
        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            max-width: 600px;
        }
        
       
        
        
        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1rem;
        }
        
        .section-title {
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            color: #333;
            text-align: center;
        }
        
        .food-categories {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 1.5rem;
        }
        
        .food-category-card {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s;
            cursor: pointer;
        }
        
        .food-category-card:hover {
            transform: translateY(-5px);
        }
        
        .category-img {
            height: 180px;
            width: 100%;
            object-fit: cover;
            border-radius: 8px;
        }
        
        .category-info {
            padding: 1rem;
            text-align: center;
        }
        
        .category-name {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }
        
        .category-desc {
            color: #666;
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
        }
        
        /* Food Items Page Styles */
        .food-category-header {
            display: flex;
            align-items: center;
            background-color: white;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
        }
        
        .category-icon {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 8px;
            margin-right: 1.5rem;
        }
        
        .category-details h2 {
            font-size: 1.8rem;
            margin-bottom: 0.5rem;
        }
        
        .category-meta {
            color: #666;
            margin-bottom: 0.5rem;
        }
        
        .food-items {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
        }
        
        .food-item {
            display: flex;
            gap: 1rem;
            padding: 1rem;
            border-radius: 8px;
            transition: background-color 0.3s;
            background-color: white;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        
        .food-item:hover {
            background-color: #f9f9f9;
        }
        
        .food-img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 8px;
        }
        #image-preview {
	   width: 150px;
 	   height: 150px;
	   border-radius: 50%;
 	   object-fit: cover;
	   display: none; /* Hidden by default */
	   margin: 10px auto;
}
        .food-details {
           flex: 1;
        }
        
        .food-name {
           font-weight: bold;
           margin-bottom: 0.3rem;
        }
        
        .food-desc {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }
        
        .food-price {
            font-weight: bold;
            color: #690B22;
            margin-bottom: 0.5rem;
        }
        
        .food-actions {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .quantity-control {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            border: 1px solid #ddd;
            border-radius: 20px;
            padding: 0.2rem 0.5rem;
        }
        
        .quantity-btn { add the jpg attached to the <img src>
            background: none;
            border: none;
            font-size: 1rem;
            cursor: pointer;
            color: #666;
        }
        
        .add-to-cart {
            background-color: #690B22;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        
        .add-to-cart:hover {
            background-color: #006b44;
        }
        
        .back-button {
            display: inline-block;
            margin-bottom: 1rem;
            padding: 0.5rem 1rem;
            background-color: #690B22;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        
        .back-button:hover {
            background-color: #006b44;
        }
        
        /* Cart Modal */
        .cart-modal {
            display: none;
            position: fixed;
            top: 0;
            right: 0;
            width: 400px;
            height: 100%;
            background-color: white;
            box-shadow: -2px 0 10px rgba(0,0,0,0.1);
            z-index: 1000;
            overflow-y: auto;
        }
        
        .cart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem;
            border-bottom: 1px solid #eee;
        }
        
        .close-cart {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
        }
        
        .cart-items {
            padding: 1rem;
        }
        
        .cart-item {
            display: flex;
            gap: 1rem;
            padding: 1rem;
            border-bottom: 1px solid #eee;
        }
        
        .cart-item-img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 8px;
        }
        
        .cart-item-details {
            flex: 1;
        }
        
        .cart-item-name {
            font-weight: bold;
            margin-bottom: 0.3rem;
        }
        
        .cart-item-price {
            color: #690B22;
            margin-bottom: 0.5rem;
        }
        
        .cart-item-actions {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .remove-item {
            background: none;
            border: none;
            color: #ff6b6b;
            cursor: pointer;
            font-size: 0.8rem;
        }
        
        .cart-summary {
            padding: 1.5rem;
            border-top: 1px solid #eee;
        }
        
        .cart-total {
            display: flex;
            justify-content: space-between;
            font-weight: bold;
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
        }
        
        /* Checkout Page Styles */
        .checkout-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            margin-top: 2rem;
        }
        
        .checkout-summary, .checkout-form {
            background-color: white;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        
        .checkout-summary h3, .checkout-form h3 {
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid #eee;
        }
        
        #checkout-items {
            margin-bottom: 1.5rem;
        }
        
        .checkout-item {
            display: flex;
            justify-content: space-between;
            padding: 0.5rem 0;
            border-bottom: 1px solid #f5f5f5;
        }
        
        .checkout-total {
            display: flex;
            justify-content: space-between;
            font-weight: bold;
            font-size: 1.2rem;
            padding-top: 1rem;
            border-top: 1px solid #eee;
        }
        
        .form-group {
            margin-bottom: 1rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }
        
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
        }
        
        .payment-methods {
            margin: 1.5rem 0;
        }
        
        .payment-method {
            display: flex;
            align-items: center;
            margin-bottom: 0.8rem;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            cursor: pointer;
        }
        
        .payment-method input {
            margin-right: 0.8rem;
        }
        
        .place-order-btn {
            width: 100%;
            padding: 1rem;
            background-color: #690B22;
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 1rem;
        }
        
        .place-order-btn:hover {
            background-color: #006b44;
        }
        
        /* Order Confirmation Modal */
        .confirmation-modal {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 20px rgba(0,0,0,0.2);
            z-index: 1001;
            max-width: 500px;
            width: 90%;
            text-align: center;
        }
        
        .confirmation-content h2 {
            color: #690B22;
            margin-bottom: 1rem;
        }
        
        .confirmation-content p {
            margin-bottom: 1rem;
            line-height: 1.6;
        }
        
        #order-id {
            font-weight: bold;
            color: #690B22;
        }
        
        .confirmation-buttons {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
        }
        
        .confirmation-buttons button {
            flex: 1;
            padding: 0.8rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }
        
        .confirmation-buttons button:first-child {
            background-color: #690B22;
            color: white;
        }
        
        .confirmation-buttons button:last-child {
            background-color: #f0f0f0;
            color: #333;
        }
        
        /* Order History Styles */
        .order-history {
            margin-top: 2rem;
        }
        
        .order-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            margin-bottom: 1.5rem;
            overflow: hidden;
        }
        
        .order-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            background-color: #f9f9f9;
            border-bottom: 1px solid #eee;
        }
        
        .order-id {
            font-weight: bold;
        }
        
        .order-date {
            color: #666;
            font-size: 0.9rem;
        }
        
        .order-status {
            padding: 0.3rem 0.6rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: bold;
        }
        
        .order-status.processing {
            background-color: #fff3cd;
            color: #856404;
        }
        
        .order-status.completed {
            background-color: #d4edda;
            color: #155724;
        }
        
        .order-summary {
            padding: 1rem;
        }
        
        .order-items {
            margin-bottom: 1rem;
        }
        
        .order-item {
            display: flex;
            justify-content: space-between;
            padding: 0.5rem 0;
            border-bottom: 1px solid #f5f5f5;
        }
        
        .order-total {
            display: flex;
            justify-content: space-between;
            font-weight: bold;
            padding-top: 0.5rem;
            border-top: 1px solid #eee;
            margin-top: 0.5rem;
        }
        .order-status.processing {
    	background-color: #fff3cd;
    	color: #856404;
	}

	.order-status.completed {
   	 background-color: #d4edda;
   	 color: #155724;
	}
        .order-footer {
            padding: 1rem;
            background-color: #f9f9f9;
            border-top: 1px solid #eee;
        }
        
        .delivery-info p {
            margin-bottom: 0.5rem;
            color: #666;
        }
        
        /* Social Icons */
        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 15px;
        }
        
        .social-icons a {
            display: inline-block;
            transition: transform 0.3s;
        }
        
        .social-icons a:hover {
            transform: scale(1.1);
        }
        
        /* Page styles */
        .page-container {
            max-width: 800px;
            margin: 2rem auto;
            padding: 0 1rem;
        }
        
        .page-content {
            background-color: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        
        .page-title {
            font-size: 2rem;
            margin-bottom: 1.5rem;
            color: #690B22;
        }
        
        .page-text {
            line-height: 1.6;
            margin-bottom: 1rem;
        }
        
        footer {
            background-color: #333;
            color: white;
            padding: 2rem 1rem;
            text-align: center;
        }
        
        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            text-align: left;
        }
        
        .footer-column h3 {
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }
        
        .footer-column ul {
            list-style: none;
        }
        
        .footer-column ul li {
            margin-bottom: 0.5rem;
        }
        
        .footer-column ul li a {
            color: #ccc;
            text-decoration: none;
        }
        
        .footer-column ul li a:hover {
            color: white;
        }
        
        .copyright {
            margin-top: 2rem;
            padding-top: 1rem;
            border-top: 1px solid #555;
        }
        
        .checkout-btn {
            width: 100%;
            padding: 1rem;
            background-color: #690B22;
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .checkout-btn:hover {
            background-color: #006b44;
        }
        
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
            z-index: 999;
        }
        
        @media (max-width: 768px) {
            header {
                flex-direction: column;
                padding: 1rem;
            }
            
            .logo {
                margin-bottom: 1rem;
            }
            
            nav ul {
                flex-wrap: wrap;
                justify-content: center;
            }
            
            nav ul li {
                margin: 0.5rem;
            }
            
            .hero h1 {
                font-size: 2rem;
            }
            
            .cart-modal {
                width: 100%;
            }
            
            .checkout-container {
                grid-template-columns: 1fr;
            }
            
            .confirmation-buttons {
                flex-direction: column;
            }
            /* Job Application Form Styles */
.application-form {
    background-color: white;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    max-width: 800px;
    margin: 2rem auto;
}

.application-form h2 {
    color: #690B22;
    margin-bottom: 1.5rem;
    text-align: center;
}

.form-row {
    display: flex;
    gap: 1.5rem;
    margin-bottom: 1rem;
}

.form-row .form-group {
    flex: 1;
}

.file-upload {
    margin-bottom: 1.5rem;
}

.file-upload label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 500;
}

.file-upload input[type="file"] {
    width: 100%;
    padding: 0.8rem;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 1rem;
}

.submit-btn {
    width: 100%;
    padding: 1rem;
    background-color: #690B22;
    color: white;
    border: none;
    border-radius: 8px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s;
    font-size: 1rem;
    margin-top: 1rem;
}

.submit-btn:hover {
    background-color: #006b44;
}
/* Form animation */
#rider-application-form {
    transition: all 0.3s ease-out;
}

/* Button hover effect */
#show-rider-form:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

/* Form styling (ensure these are present) */
.form-row {
    display: flex;
    gap: 1rem;
    margin-bottom: 1rem;
}

.form-group {
    flex: 1;
}

.form-group label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 500;
}

.form-group input,
.form-group select,
.form-group textarea {
    width: 100%;
    padding: 0.8rem;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 1rem;
}
            .food-items {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <header>
       <div class="logo">Daventina's Kitchen</div>
        <nav>
            <ul>
                <li><a href="#" onclick="showHome()">Home</a></li>
                <li><a href="#" onclick="showPage('offers')">Offers</a></li>
                <li><a href="#" onclick="showPage('my-orders')">My Orders</a></li>
                <li><a href="#" onclick="showPage('contact')">Contact</a></li>
                <li class="cart-icon" onclick="toggleCart()">
                    🛒
                    <span class="cart-count">0</span>
                </li>
            </ul>
        </nav>
    </header>
    
    <!-- Home Page -->
    <div id="home-page">
        <section class="hero">
            <h1>Authentic Nigerian Food Delivered Fast</h1>
            <p>Enjoy your favorite dishes prepared with love and delivered to your doorstep in minutes.</p>
      
        </section>
        
        <div class="container">
            <h2 class="section-title">Our Food Categories</h2>
            <div class="food-categories">
                <div class="food-category-card" onclick="showFoodCategory('rice-dishes')">
    <img src="rice-six.jpg" alt="Rice Dishes" class="category-img">
    <div class="category-info">
        <h3 class="category-name">Rice Dishes</h3>
        <p class="category-desc">Jollof, Fried Rice, Coconut Rice, White Rice & Stew</p>
    </div>
</div>
                
                <div class="food-category-card" onclick="showFoodCategory('swallows')">
                    <img src="swallow.jpeg" alt="Swallows" class="category-img">
                    <div class="category-info">
                        <h3 class="category-name">Swallows</h3>
                        <p class="category-desc">Fufu, Amala, Pounded Yam, Eba, Semo</p>
                    </div>
                </div>
                
                <div class="food-category-card" onclick="showFoodCategory('soups')">
                    <img src="https://images.unsplash.com/photo-1547592180-85f173990554" alt="Soups" class="category-img">
                    <div class="category-info">
                        <h3 class="category-name">Soups</h3>
                        <p class="category-desc">Egusi, Ogbono, Vegetable, Okra, Efo Riro</p>
                    </div>
                </div>
                
                <div class="food-category-card" onclick="showFoodCategory('proteins')">
                    <img src="https://images.unsplash.com/photo-1603360946369-dc9bb6258143" alt="Proteins" class="category-img">
                    <div class="category-info">
                        <h3 class="category-name">Proteins</h3>
                        <p class="category-desc">Pepper Soup, Suya, Grilled Fish, Asun, Nkwobi</p>
                    </div>
                </div>
                
                <div class="food-category-card" onclick="showFoodCategory('snacks')">
                    <img src="https://images.unsplash.com/photo-1626082927389-6cd097cdc6ec" alt="Snacks" class="category-img">
                    <div class="category-info">
                        <h3 class="category-name">Snacks</h3>
                        <p class="category-desc">Puff Puff, Akara, Moi Moi, Boli, Chin Chin</p>
                    </div>
                </div>
                
                <div class="food-category-card" onclick="showFoodCategory('drinks')">
                    <img src="https://images.unsplash.com/photo-1551024506-0bccd828d307" alt="Drinks" class="category-img">
                    <div class="category-info">
                        <h3 class="category-name">Drinks</h3>
                        <p class="category-desc">Zobo, Kunu, Palm Wine, Chapman, Nigerian Cocktails</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Food Category Pages -->
    <div id="food-category-page" style="display: none;">
        <div class="container">
            <a href="#" class="back-button" onclick="showHome()">← Back to Categories</a>
            <div class="food-category-header" id="food-category-header">
                <img src="" alt="Category Icon" class="category-icon" id="category-icon">
                <div class="category-details">
                    <h2 id="category-title">Category Name</h2>
                    <p class="category-meta" id="category-meta"></p>
                </div>
            </div>
            
            <div class="food-items" id="food-items-container">
                <!-- Food items will be added here by JavaScript -->
            </div>
        </div>
    </div>
    
    <!-- Other Pages -->
    <div id="other-pages" style="display: none;">
        <div class="page-container">
            <div class="page-content" id="page-content">
                <!-- Page content will be loaded here by JavaScript -->
            </div>
        </div>
    </div>
    
    <!-- Cart Modal -->
    <div class="overlay" id="overlay" onclick="toggleCart()"></div>
    <div class="cart-modal" id="cart-modal">
        <div class="cart-header">
            <h2>Your Cart</h2>
            <button class="close-cart" onclick="toggleCart()">×</button>
        </div>
        <div class="cart-items" id="cart-items">
            <!-- Cart items will be added here by JavaScript -->
        </div>
        <div class="cart-summary">
            <div class="cart-total">
                <span>Total:</span>
                <span id="cart-total">₦0.00</span>
            </div>
            <button class="checkout-btn" onclick="checkout()">Proceed to Checkout</button>
        </div>
    </div>
    
    <!-- Checkout Page -->
    <div id="checkout-page" style="display: none;">
        <div class="container">
            <a href="#" class="back-button" onclick="toggleCart()">← Back to Cart</a>
            <h2 class="section-title">Checkout</h2>
            
            <div class="checkout-container">
                <div class="checkout-summary">
                    <h3>Order Summary</h3>
                    <div id="checkout-items">
                        <!-- Cart items will be displayed here -->
                    </div>
                    <div class="checkout-total">
                        <span>Total:</span>
                        <span id="checkout-total-amount">₦0.00</span>
                    </div>
                </div>
                
                <div class="checkout-form">
                    <h3>Delivery Information</h3>
                    <form id="delivery-form">
                        <div class="form-group">
			    <label for="name">Full Name</label>
			    <input type="text" id="name" required autocomplete="name">
			</div>

			<div class="form-group">
			    <label for="phone">Phone Number</label>
			    <input type="tel" id="phone" required autocomplete="tel">
			</div>

			<div class="form-group">
			    <label for="address">Delivery Address</label>
			    <textarea id="address" rows="3" required autocomplete="street-address"></textarea>
			</div>
                        
                        <div class="form-group">
                            <label for="notes">Delivery Notes (Optional)</label>
                            <textarea id="notes" rows="2"></textarea>
                        </div>
                        
                        <h3>Payment Method</h3>
                        <div class="payment-methods">
                            <label class="payment-method">
                                <input type="radio" name="payment" value="cash" checked>
                                <span>Cash on Delivery</span>
                            </label>
                            
                            <label class="payment-method">
                                <input type="radio" name="payment" value="card">
                                <span>Card Payment</span>
                            </label>
                            
                            <label class="payment-method">
                                <input type="radio" name="payment" value="transfer">
                                <span>Bank Transfer</span>
                            </label>
                        </div>
                        
                        <button type="submit" class="place-order-btn">Place Order</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Order Confirmation Modal -->
    <div class="overlay" id="confirmation-overlay" style="display: none;"></div>
    <div class="confirmation-modal" id="confirmation-modal" style="display: none;">
        <div class="confirmation-content">
            <h2>Order Confirmed!</h2>
            <p id="confirmation-message">Your order has been placed successfully.</p>
            <p>Order ID: <span id="order-id"></span></p>
            <div class="confirmation-buttons">
                <button onclick="viewOrderHistory()">View Order History</button>
                <button onclick="closeConfirmation()">Continue Shopping</button>
            </div>
        </div>
    </div>
    
    <footer>
        <div class="footer-content">
            <div class="footer-column">
                <h3>Company</h3>
                <ul>
                    <li><a href="#" onclick="showPage('about-us')">About Us</a></li>
                    <li><a href="#" onclick="showPage('careers')">Careers</a></li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h3>Help</h3>
                <ul>
                    <li><a href="#" onclick="showPage('help-support')">Help & Support</a></li>
                    <li><a href="#" onclick="showPage('ride')">Ride with us</a></li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h3>Legal</h3>
                <ul>
                    <li><a href="#" onclick="showPage('terms')">Terms & Conditions</a></li>
                    <li><a href="#" onclick="showPage('cookie')">Cookie Policy</a></li>
                    <li><a href="#" onclick="showPage('privacy')">Privacy Policy</a></li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h3>Contact Us</h3>
                <ul>
                    <li><a href="#" onclick="showPage('contact')">Contact</a></li>
                    <li>Phone: 0813-633-4622</li>
                    <li>Email: alanemedaniel15@gmail.com</li>
                    <li class="social-icons">
                        <a href="https://instagram.com/darrend4r" target="_blank" title="Instagram">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/2048px-Instagram_icon.png" alt="Instagram" width="24">
                        </a>
                        <a href="https://wa.me/2348151398595" target="_blank" title="WhatsApp">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/2048px-WhatsApp.svg.png" alt="WhatsApp" width="24">
                        </a>
                        <a href="https://tiktok.com/@darrend4r" target="_blank" title="TikTok">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6V5rC27jl1a8xVcx-1QzgEO5CXqXDO-7_BTQYPz-VcwB6s5VYsO_4nQyTRhE-1Vo2TG4&usqp=CAU" alt="TikTok" width="24">
                        </a>
                        <a href="https://facebook.com/naijafoodexpress" target="_blank" title="Facebook">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/2048px-Facebook_f_logo_%282019%29.svg.png" alt="Facebook" width="24">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="copyright">
           <p>&copy;CoKitchen Workspace Limited. All rights reserved.</p>
        </div>
    </footer>
    
    <script>
        // Sample food data
        const foodCategories = {
            'rice-dishes': {
                name: 'Rice Dishes',
                description: 'Our delicious selection of Nigerian rice dishes',
                icon: 'https://images.unsplash.com/photo-1609780447631-05b93e5a88ea',
                items: [
                    {
                        id: 1,
                        name: 'Jollof Rice',
                        description: 'Classic Nigerian jollof rice with chicken, beef and plantain',
                        price: 2500,
                        image: 'rice-six.jpg'
                    },
                    {
                        id: 2,
                        name: 'Fried Rice',
                        description: 'Special fried rice with assorted meat and vegetables',
                        price: 2800,
                        image: 'https://images.unsplash.com/photo-1604329760661-e71dc83f8f26'
                    },
                    {
                        id: 3,
                        name: 'Coconut Rice',
                        description: 'Fragrant coconut rice with fish and vegetables',
                        price: 2700,
                        image: 'https://images.unsplash.com/photo-1609780447631-05b93e5a88ea'
                    },
                    {
                        id: 4,
                        name: 'White Rice & Stew',
                        description: 'White rice served with Nigerian tomato stew and choice of protein',
                        price: 2200,
                        image: 'https://images.unsplash.com/photo-1609780447631-05b93e5a88ea'
                    }
                ]
            },
            'swallows': {
                name: 'Swallows',
                description: 'Traditional Nigerian swallows with various soups',
                icon: 'swallow.jpeg',
                items: [
                    {
                        id: 5,
                        name: 'Pounded Yam & Egusi',
                        description: 'Soft pounded yam with rich egusi soup',
                        price: 3000,
                        image: 'https://naijastickitchen.com/wp-content/uploads/2024/01/Naijastic-Kitchen-Egusi-Soup-with-Pounded-Yam.png'
                    },
                    {
                        id: 6,
                        name: 'Amala & Ewedu',
                        description: 'Yam flour amala with ewedu and gbegiri soup',
                        price: 2500,
                        image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQspitoeY-QNRiMhdONzALEI1Eie03qiWxkww&s'
                    },
                    {
                        id: 7,
                        name: 'Fufu & Oha Soup',
                        description: 'Cassava fufu with delicious oha soup',
                        price: 2800,
                        image: 'https://pbs.twimg.com/media/GFkg2hsWIAA7Ici?format=jpg&name=large'
                    },
                    {
                        id: 8,
                        name: 'Eba & Okra Soup',
                        description: 'Garri eba with fresh okra soup',
                        price: 2300,
                        image: 'download.jpeg'
                    }
                ]
            },
            'soups': {
                name: 'Soups',
                description: 'Authentic Nigerian soups to accompany your swallows',
                icon: 'https://images.unsplash.com/photo-1547592180-85f173990554',
                items: [
                    {
			id: 9,
                        name: 'Egusi Soup',
                        description: 'Melon seed soup with assorted meat and fish',
                        price: 1800,
                        image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTfojuaO8C2v2szuJB0G5BvKffVqnaoxMn5A&s'
                    },
                    {
                        id: 10,
                        name: 'Ogbono Soup',
                        description: 'African mango seed soup with okra and assorted meat',
                        price: 2000,
                        image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxaI8TH-nCHLGJxBuSwClAvX2QCG6j79sAbg&s'
                    },
                    {
                        id: 11,
                        name: 'Bitterleaf Soup',
                        description: 'Traditional ofe onugbu with assorted meat',
                        price: 2200,
                        image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPKNffJuxp5MbPmmBcw-ZTRJ5UwaU7R8R64jotfPc1mI3ncsaeekP8caMJlKAOgWXp4oA&usqp=CAU'
                    },
                    {
                        id: 12,
                        name: 'Efo Riro',
                        description: 'Vegetable soup with fish and assorted meat',
                        price: 1900,
                        image: 'https://lowcarbafrica.com/wp-content/uploads/2019/08/Efo-Riro-IG-1.jpg'
                    }
                ]
            },
            'proteins': {
                name: 'Proteins',
                description: 'Delicious Nigerian protein dishes',
                icon: 'https://images.unsplash.com/photo-1603360946369-dc9bb6258143',
                items: [
                    {
                        id: 13,
                        name: 'Pepper Soup',
                        description: 'Spicy assorted meat pepper soup',
                        price: 2500,
                        image: 'https://sisijemimah.com/wp-content/uploads/2016/11/Assorted-Meat-Pepper-Soup-1.jpg'
                    },
                    {
                        id: 14,
                        name: 'Suya',
                        description: 'Grilled spicy beef skewers with onions',
                        price: 1500,
                        image: 'https://flawlessfood.co.uk/wp-content/uploads/2023/03/Suya-Beef-Kebabs-22.jpg'
                    },
                    {
                        id: 15,
                        name: 'Grilled Fish',
                        description: 'Whole grilled tilapia with pepper sauce',
                        price: 3500,
                        image: 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg9q-uWXEKyek9Kd4buxXNNK2t8xfk8v89jdJ4XiKxoFAlsqqh8F61y4YGI6La91Y4YhgkB3Xn-p4FIaVasrMPehLCiTCsEyu6GZKSTIDxdlXmjQYteYzWlqzAYfjsbn5K0Z0PrCelvbjI/s1600/1604398361122732-0.png'
                    },
                    {
                        id: 16,
                        name: 'Asun',
                        description: 'Spicy roasted goat meat with onions',
                        price: 2800,
                        image: 'https://cookingwithclaudy.com/wp-content/uploads/2023/09/20230807_112650-scaled-1.jpg'
                    }
                ]
            },
            'snacks': {
                name: 'Snacks',
                description: 'Popular Nigerian snacks and small chops',
                icon: 'https://images.unsplash.com/photo-1626082927389-6cd097cdc6ec',
                items: [
                    {
                        id: 17,
                        name: 'Puff Puff',
                        description: 'Sweet deep-fried dough balls (10 pieces)',
                        price: 500,
                        image: 'https://nicetartes.com/wp-content/uploads/2024/10/African-Puff-Puff.jpg'
                    },
                    {
                        id: 18,
                        name: 'Akara',
                        description: 'Bean cakes with bread (5 pieces)',
                        price: 800,
                        image: 'https://rexclarkeadventures.com/wp-content/uploads/2024/08/akara-e1506724484724.webp'
                    },
                    {
                        id: 19,
                        name: 'Moi Moi',
                        description: 'Steamed bean pudding (2 wraps)',
                        price: 700,
                        image: 'https://www.africanbites.com/wp-content/uploads/2023/12/IMG_4707-650x650.jpg'
                    },
                    {
                        id: 20,
                        name: 'Boli & Fish',
                        description: 'Roasted plantain with grilled fish',
                        price: 2000,
                        image: 'https://scontent-los2-1.xx.fbcdn.net/v/t1.6435-9/202337332_4345183462200384_6243708411079142930_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=3a1ebe&_nc_ohc=jPoecT_6ihgQ7kNvwHILoDq&_nc_oc=AdkFsmkCtkk1J6eTN8ZxYmYEofrydT_vTLEgOvrEzcFvwHYOm8tM8fiME6krl2PAoPFIr3D6xm4h9zkxIfcULSny&_nc_zt=23&_nc_ht=scontent-los2-1.xx&_nc_gid=amRWB04EP5w0A1wmRgLClA&oh=00_AfM_9pqZYrwLoDraRRL0g6EOXlJyoh4zoA3gUAWq_TIJng&oe=6880BDE5'
                    }
                ]
            },
            'drinks': {
                name: 'Drinks',
                description: 'Refreshing Nigerian beverages',
                icon: 'https://images.unsplash.com/photo-1551024506-0bccd828d307',
                items: [
                    {
                        id: 21,
                        name: 'Zobo',
                        description: 'Refreshing hibiscus drink',
                        price: 500,
                        image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWgieruIrdZWhv-kZ-JktUFiZk7pmeSRXeTchcjdT7X9MMdwK_7y_IyIvD_4grY-q2urc&usqp=CAU'
                    },
                    {
                        id: 22,
                        name: 'Kunu',
                        description: 'Traditional millet drink',
                        price: 600,
                        image: 'https://tigernutsrepublicng.com/wp-content/uploads/2025/04/limitless-800x800.webp'
                    },
                    {
                        id: 23,
                        name: 'Palm Wine',
                        description: 'Fresh palm wine (1 liter)',
                        price: 1500,
                        image: 'https://www.ziingofood.com.ng/public/uploads/restaurant/items/item226857365.jpg'
                    },
                    {
                        id: 24,
                        name: 'Chapman',
                        description: 'Nigerian cocktail',
                        price: 800,
                        image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTIZtJPOuYFx9XB1Xi154rcVSbu5CbeMG4Bhg&s'
                    }
                ]
            }
        };

        // Sample page content
        const pageContent = {
            'offers': {
                title: 'Special Offers',
                content: `
                    <h2 class="page-title">Current Special Offers</h2>
                    <div class="page-text">
                        <p>Take advantage of our limited-time offers and save on your favorite Nigerian meals!</p>
                        
                        <div style="margin-top: 2rem; background: #fff8e1; padding: 1.5rem; border-radius: 8px;">
                            <h3 style="color: #ff6f00; margin-bottom: 1rem;">Weekend Special</h3>
                            <p>Get 20% off all rice dishes every Friday to Sunday!</p>
                            <p style="font-weight: bold; margin-top: 0.5rem;">Use code: WEEKEND20</p>
                        </div>
                        
                        <div style="margin-top: 2rem; background: #e8f5e9; padding: 1.5rem; border-radius: 8px;">
                            <h3 style="color: #2e7d32; margin-bottom: 1rem;">Family Pack</h3>
                            <p>Order any 3 main dishes and get 1 free drink!</p>
                            <p style="font-style: italic; margin-top: 0.5rem;">Valid until end of month</p>
                        </div>
                        
                        <div style="margin-top: 2rem; background: #f3e5f5; padding: 1.5rem; border-radius: 8px;">
                            <h3 style="color: #6a1b9a; margin-bottom: 1rem;">First Order Discount</h3>
                            <p>New customers get 15% off their first order!</p>
                            <p style="font-weight: bold; margin-top: 0.5rem;">Use code: WELCOME15</p>
                        </div>
                    </div>
                `
            },
            'my-orders': {
                title: 'My Orders',
                content: `
                    <h2 class="page-title">My Order History</h2>
                    <div class="order-history">
                        <div class="order-card">
                            <div class="order-header">
                                <div>
                                    <span class="order-id">Order #NFE-2023-0012</span>
                                    <span class="order-date"> - 15 June 2023</span>
                                </div>
                                <span class="order-status completed">Completed</span>
                            </div>
                            <div class="order-summary">
                                <div class="order-items">
                                    <div class="order-item">
                                        <span>Jollof Rice with Chicken</span>
                                        <span>₦2,500</span>
                                    </div>
                                    <div class="order-item">
                                        <span>Pounded Yam & Egusi</span>
                                        <span>₦3,000</span>
                                    </div>
                                    <div class="order-item">
                                        <span>Zobo Drink</span>
                                        <span>₦500</span>
                                    </div>
                                </div>
                                <div class="order-total">
                                    <span>Total</span>
                                    <span>₦6,000</span>
                                </div>
                            </div>
                            <div class="order-footer">
                                <div class="delivery-info">
                                    <p>Delivered to: 12 Adeola Odeku St, VI, Lagos</p>
                                    <p>Payment: Cash on Delivery</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="order-card">
                            <div class="order-header">
                                <div>
                                    <span class="order-id">Order #NFE-2023-0011</span>
                                    <span class="order-date"> - 10 June 2023</span>
                                </div>
                                <span class="order-status completed">Completed</span>
                            </div>
                            <div class="order-summary">
                                <div class="order-items">
                                    <div class="order-item">
                                        <span>Fried Rice Special</span>
                                        <span>₦2,800</span>
                                    </div>
                                    <div class="order-item">
                                        <span>Suya (Beef)</span>
                                        <span>₦1,500</span>
                                    </div>
                                    <div class="order-item">
                                        <span>Chapman Drink</span>
                                        <span>₦800</span>
                                    </div>
                                </div>
                                <div class="order-total">
                                    <span>Total</span>
                                    <span>₦5,100</span>
                                </div>
                            </div>
                            <div class="order-footer">
                                <div class="delivery-info">
                                    <p>Delivered to: 12 Adeola Odeku St, VI, Lagos</p>
                                    <p>Payment: Card Payment</p>
                                </div>
                            </div>
                        </div>
                    </div>
                `
            },
            'contact': {
                title: 'Contact Us',
                content: `
                    <h2 class="page-title">Contact Daventina's Kitchen</h2>
                    <div class="page-text">
                        <p>We'd love to hear from you! Reach out to us with any questions, feedback, or special requests.</p>
                        
                        <div style="margin-top: 2rem;">
                            <h3 style="margin-bottom: 1rem;">Customer Support</h3>
                            <p><strong>Phone:</strong> 0813-633-4622</p>
                            <p><strong>Email:</strong> alanemedaniel15@gmail.com</p>
                            <p><strong>WhatsApp:</strong> 0806-628-0711</p>
                        </div>
                        
                        <div style="margin-top: 2rem;">
                            <h3 style="margin-bottom: 1rem;">Corporate Office</h3>
                            <p>Treasure Park and Gardens Phase 1 Simawa, Adron Homes</p>
                            <p>Ogun, Nigeria</p>
                        </div>
                        
                        <div style="margin-top: 2rem;">
                            <h3 style="margin-bottom: 1rem;">Business Hours</h3>
                            <p>Monday - Sunday: 8:00 AM - 10:00 PM</p>
                        </div>
                    </div>
                `
            },
            'about-us': {
                title: 'About Us',
                content: `
                    <h2 class="page-title">About Daventina's Kitchen</h2>
                    <div class="page-text">
                        <p>Daventina's Kitchen is Nigeria's premier food delivery service, bringing authentic Nigerian cuisine to your doorstep with speed and convenience.</p>
                        
                        <h3 style="margin: 1.5rem 0 1rem;">Our Story</h3>
                        <p>Founded in 2023 by a team of food enthusiasts, Daventina's Kitchen was born out of a passion for making authentic Nigerian food more accessible to busy professionals, students, and families.</p>
                        
                        <h3 style="margin: 1.5rem 0 1rem;">Our Mission</h3>
                        <p>We connect customers with the best local restaurants and home chefs specializing in Nigerian cuisine. Our mission is to preserve and promote Nigerian food culture while providing convenient delivery services.</p>
                        
                        <h3 style="margin: 1.5rem 0 1rem;">Why Choose Us?</h3>
                        <ul style="margin-left: 1.5rem; line-height: 1.6;">
                            <li>Authentic Nigerian dishes prepared with traditional recipes</li>
                            <li>Fast and reliable delivery across major cities</li>
                            <li>Support for local restaurants and home chefs</li>
                            <li>Easy online ordering and payment options</li>
                            <li>Excellent customer service</li>
                        </ul>
                    </div>
                `
             },
            'careers': {
	    	title: 'Careers',
	    	content: `
		<h2 class="page-title">Join Our Team</h2>
		<div class="page-text">
		    <p>At Daventina's Kitchen, we're always looking for passionate individuals to join our growing team. If you love food and enjoy delivering excellent customer service, we'd love to hear from you!</p>
		    
		    <h3 style="margin: 1.5rem 0 1rem;">Current Openings</h3>
		    
		    <div style="margin-top: 1.5rem; background: #f5f5f5; padding: 1.5rem; border-radius: 8px;">
			<h4>Delivery Riders</h4>
			<p>We're looking for reliable delivery riders with their own bikes to join our fleet. Flexible hours available.</p>
			<p><strong>Requirements:</strong></p>
			<ul style="margin-left: 1.5rem; margin-bottom: 1rem;">
			    <li>Valid rider's license</li>
			    <li>20 years or older</li>
			    <li>Smartphone</li>
			    <li>Good knowledge of the city</li>
			    <li>Excellent customer service skills</li>
			</ul>
		    </div>
		    
		    <div style="margin-top: 1.5rem; background: #f5f5f5; padding: 1.5rem; border-radius: 8px;">
			<h4>Customer Support Agents</h4>
			<p>Join our customer support team to help resolve customer inquiries and ensure excellent service.</p>
			<p><strong>Requirements:</strong></p>
			<ul style="margin-left: 1.5rem; margin-bottom: 1rem;">
			    <li>Excellent communication skills</li>
			    <li>Problem-solving attitude</li>
			    <li>Ability to work shifts</li>
			    <li>Customer service experience preferred</li>
			</ul>
			
		    </div>
		    
		    <div style="margin-top: 2rem;">
			<h3>Why Work With Us?</h3>
			<ul style="margin-left: 1.5rem; line-height: 1.6;">
			    <li>Competitive pay and bonuses</li>
			    <li>Flexible working hours</li>
			    <li>Opportunities for growth</li>
			    <li>Positive work environment</li>
			    <li>Employee discounts</li>
			</ul>
		    </div>
		    
		    <div style="margin-top: 2rem;">
			<p>Don't see a position that matches your skills? Send us your CV anyway at <strong>careers@daventinaskitchen.com</strong> and we'll keep it on file for future opportunities.</p>
		    </div>
		</div>
	    `
	    },
		'help-support': {
    		title: 'Help & Support',
    		content: `
       	 <h2 class="page-title">Help & Support</h2>
        <div class="page-text">
            <p>We're here to help! Find answers to common questions or contact our support team.</p>
            
            <div style="margin-top: 2rem;">
                <h3>Frequently Asked Questions</h3>
                
                <div style="margin-top: 1.5rem;">
                    <h4>How do I place an order?</h4>
                    <p>Simply browse our menu, add items to your cart, and proceed to checkout. You can pay online or choose cash on delivery.</p>
                </div>
                
                <div style="margin-top: 1.5rem;">
                    <h4>What are your delivery hours?</h4>
                    <p>We deliver daily from 8:00 AM to 10:00 PM. Some restaurants may have different hours which will be shown during ordering.</p>
                </div>
                
                <div style="margin-top: 1.5rem;">
                    <h4>How long does delivery take?</h4>
                    <p>Delivery times vary by location but typically range from 30-60 minutes. You can track your order in real-time once it's on its way.</p>
                </div>
                
                <div style="margin-top: 1.5rem;">
                    <h4>Can I cancel my order?</h4>
                    <p>You can cancel your order free of charge before the restaurant starts preparing your food. After preparation begins, cancellation may not be possible.</p>
                </div>
                
                <div style="margin-top: 1.5rem;">
                    <h4>What payment methods do you accept?</h4>
                    <p>We accept cash on delivery, card payments, and bank transfers.</p>
                </div>
            </div>
            
            <div style="margin-top: 2rem;">
                <h3>Still Need Help?</h3>
                <p>Contact our customer support team:</p>
                
                <div style="margin-top: 1rem; display: flex; flex-wrap: wrap; gap: 1.5rem;">
                    <div style="flex: 1; min-width: 200px; background: #f5f5f5; padding: 1.5rem; border-radius: 8px;">
                        <h4 style="color: #690B22;">Phone Support</h4>
                        <p>0813-633-4622</p>
                        <p>Available 8AM-10PM daily</p>
                    </div>
                    
                    <div style="flex: 1; min-width: 200px; background: #f5f5f5; padding: 1.5rem; border-radius: 8px;">
                        <h4 style="color: #690B22;">Email Support</h4>
                        <p>support@daventinaskitchen.com</p>
                        <p>Response within 24 hours</p>
                    </div>
                   
                </div>
            </div>
        </div>
    `
		},
'ride': {
    title: 'Ride With Us',
    content: `
        <h2 class="page-title">Become a Daventina's Kitchen Rider</h2>
        <div class="page-text">
            <p>Join our fleet of delivery riders and earn money on your own schedule. Whether you're looking for a full-time job or extra income, we've got opportunities for you.</p>
            
            <div style="margin-top: 2rem; display: flex; flex-wrap: wrap; gap: 1.5rem;">
                <div style="flex: 1; min-width: 250px; background: #f5f5f5; padding: 1.5rem; border-radius: 8px;">
                    <h3 style="color: #690B22; margin-bottom: 1rem;">Why Ride With Us?</h3>
                    <ul style="margin-left: 1.5rem; line-height: 1.6;">
                        <li>Flexible hours - work when you want</li>
                        <li>Weekly payments</li>
                        <li>Performance bonuses</li>
                        <li>Supportive rider community</li>
                        <li>Free rider gear</li>
                    </ul>
                </div>
                
                <div style="flex: 1; min-width: 250px; background: #f5f5f5; padding: 1.5rem; border-radius: 8px;">
                    <h3 style="color: #690B22; margin-bottom: 1rem;">Requirements</h3>
                    <ul style="margin-left: 1.5rem; line-height: 1.6;">
                        <li>20 years or older</li>
                        <li>Valid rider's license</li>
                        <li>Smartphone (Android or iPhone)</li>
                        <li>Bike in good condition</li>
                        <li>Knowledge of local areas</li>
                    </ul>
                </div>
            </div>
            
            <div style="margin-top: 2rem;">
                <h3>Frequently Asked Questions</h3>
                
                <div style="margin-top: 1rem; padding: 1rem; border-bottom: 1px solid #eee;">
                    <h4>How much can I earn?</h4>
                    <p>Riders typically earn between ₦25,000 - ₦80,000 per week depending on hours worked and delivery volume.</p>
                </div>
                
                <div style="margin-top: 1rem; padding: 1rem; border-bottom: 1px solid #eee;">
                    <h4>When do I get paid?</h4>
                    <p>Payments are made weekly directly to your bank account.</p>
                </div>
                
                <div style="margin-top: 1rem; padding: 1rem; border-bottom: 1px solid #eee;">
                    <h4>What areas do you operate in?</h4>
                    <p>We currently operate in major cities across Nigeria including Lagos, Abuja, and Ogun.</p>
                </div>
            </div>
        </div>
    `

            },
            'terms': {
                title: 'Terms & Conditions',
                content: `
                    <h2 class="page-title">Terms & Conditions</h2>
                    <div class="page-text">
                        <p>Please read these terms and conditions carefully before using our service.</p>
                        
                        <h3 style="margin: 1.5rem 0 1rem;">1. General</h3>
                        <p>By accessing or using the NaijaFoodExpress service, you agree to be bound by these Terms. If you disagree with any part of the terms, you may not access the service.</p>
                        
                        <h3 style="margin: 1.5rem 0 1rem;">2. Orders</h3>
                        <p>All orders are subject to availability and confirmation of the order price. Dispatch times may vary according to availability and any delays are outside our control.</p>
                        
                        <h3 style="margin: 1.5rem 0 1rem;">3. Pricing</h3>
                        <p>Prices are subject to change without notice. Menu prices on our platform may differ from prices at the restaurant. Delivery fees are calculated based on your location.</p>
                        
                        <h3 style="margin: 1.5rem 0 1rem;">4. Delivery</h3>
                        <p>We aim to deliver within the estimated time frame but cannot guarantee exact delivery times as they may be affected by factors beyond our control.</p>
                        
                        <h3 style="margin: 1.5rem 0 1rem;">5. Cancellations</h3>
                        <p>You may cancel your order free of charge before the restaurant has started preparing your food. Once preparation has begun, cancellation may not be possible.</p>
                        
                        <h3 style="margin: 1.5rem 0 1rem;">6. Privacy</h3>
                        <p>Your use of our service is subject to our Privacy Policy. Please review our Privacy Policy, which also governs the service and informs users of our data collection practices.</p>
                    </div>
                `
                },
		'cookie': {
    		title: 'Cookie Policy',
    		content: `
        <h2 class="page-title">Cookie Policy</h2>
        <div class="page-text">
            <p>This Cookie Policy explains how Daventina's Kitchen uses cookies and similar technologies when you use our website and mobile applications.</p>
            
            <h3 style="margin: 1.5rem 0 1rem;">What Are Cookies?</h3>
            <p>Cookies are small text files that are placed on your device when you visit a website. They are widely used to make websites work more efficiently and to provide information to website owners.</p>
            
            <h3 style="margin: 1.5rem 0 1rem;">How We Use Cookies</h3>
            <p>We use cookies for the following purposes:</p>
            <ul style="margin-left: 1.5rem; line-height: 1.6;">
                <li><strong>Essential Cookies:</strong> Necessary for the website to function properly (e.g., remembering items in your cart)</li>
                <li><strong>Performance Cookies:</strong> Help us understand how visitors interact with our website</li>
                <li><strong>Functionality Cookies:</strong> Allow the website to remember choices you make</li>
                <li><strong>Targeting/Advertising Cookies:</strong> Used to deliver ads more relevant to you</li>
            </ul>
            
            <h3 style="margin: 1.5rem 0 1rem;">Managing Cookies</h3>
            <p>You can control and/or delete cookies as you wish. You can delete all cookies that are already on your computer and set most browsers to prevent them from being placed. However, if you do this, you may have to manually adjust some preferences every time you visit a site and some services and functionalities may not work.</p>
            
            <h3 style="margin: 1.5rem 0 1rem;">Third-Party Cookies</h3>
            <p>We may also use various third-party cookies for analytics, performance monitoring, and advertising purposes. These include services like Google Analytics.</p>
            
            <h3 style="margin: 1.5rem 0 1rem;">Changes to This Policy</h3>
            <p>We may update this Cookie Policy from time to time. We will notify you of any changes by posting the new policy on this page.</p>
        </div>
    `
},
	'privacy': {
  	 title: 'Privacy Policy',
    content: `
        <h2 class="page-title">Privacy Policy</h2>
        <div class="page-text">
            <p>At Daventina's Kitchen, we are committed to protecting your privacy. This Privacy Policy explains how we collect, use, and protect your personal information.</p>
            
            <h3 style="margin: 1.5rem 0 1rem;">Information We Collect</h3>
            <p>We may collect the following types of information:</p>
            <ul style="margin-left: 1.5rem; line-height: 1.6;">
                <li>Personal identification information (name, email, phone number, etc.)</li>
                <li>Delivery address and location data</li>
                <li>Payment information (processed securely by our payment partners)</li>
                <li>Order history and preferences</li>
                <li>Device and usage data</li>
            </ul>
            
            <h3 style="margin: 1.5rem 0 1rem;">How We Use Your Information</h3>
            <p>We use your information to:</p>
            <ul style="margin-left: 1.5rem; line-height: 1.6;">
                <li>Process and deliver your orders</li>
                <li>Improve our services and personalize your experience</li>
                <li>Communicate with you about your orders and promotions</li>
                <li>Ensure the security of our services</li>
                <li>Comply with legal obligations</li>
            </ul>
            
            <h3 style="margin: 1.5rem 0 1rem;">Data Sharing</h3>
            <p>We may share your information with:</p>
            <ul style="margin-left: 1.5rem; line-height: 1.6;">
                <li>Restaurants and delivery partners to fulfill your orders</li>
                <li>Payment processors to complete transactions</li>
                <li>Service providers who assist with our operations</li>
                <li>Legal authorities when required by law</li>
            </ul>
            <p>We never sell your personal information to third parties.</p>
            
            <h3 style="margin: 1.5rem 0 1rem;">Data Security</h3>
            <p>We implement appropriate security measures to protect your personal information from unauthorized access, alteration, or destruction.</p>
            
            <h3 style="margin: 1.5rem 0 1rem;">Your Rights</h3>
            <p>You have the right to:</p>
            <ul style="margin-left: 1.5rem; line-height: 1.6;">
                <li>Access, correct, or delete your personal information</li>
                <li>Object to or restrict processing of your data</li>
                <li>Withdraw consent where applicable</li>
                <li>Lodge a complaint with the relevant authority</li>
            </ul>
            
            <h3 style="margin: 1.5rem 0 1rem;">Changes to This Policy</h3>
            <p>We may update this Privacy Policy from time to time. We will notify you of significant changes through our website or other communication channels.</p>
        </div>
    `

            }
        };

        // Shopping cart
        let cart = [];
        let orderHistory = JSON.parse(localStorage.getItem('orderHistory')) || [];
        
        // DOM elements
        const homePage = document.getElementById('home-page');
        const foodCategoryPage = document.getElementById('food-category-page');
        const otherPages = document.getElementById('other-pages');
        const pageContentElement = document.getElementById('page-content');
        const cartModal = document.getElementById('cart-modal');
        const overlay = document.getElementById('overlay');
        const cartItemsElement = document.getElementById('cart-items');
        const cartTotalElement = document.getElementById('cart-total');
        const cartCountElement = document.querySelector('.cart-count');
        const checkoutPage = document.getElementById('checkout-page');
        const checkoutItemsElement = document.getElementById('checkout-items');
        const checkoutTotalElement = document.getElementById('checkout-total-amount');
        const confirmationModal = document.getElementById('confirmation-modal');
        const confirmationOverlay = document.getElementById('confirmation-overlay');
        const orderIdElement = document.getElementById('order-id');
        const confirmationMessage = document.getElementById('confirmation-message');
        
        // Show home page
        function showHome() {
            homePage.style.display = 'block';
            foodCategoryPage.style.display = 'none';
            otherPages.style.display = 'none';
            checkoutPage.style.display = 'none';
            return false;
        }
        
        // Show food category page
        function showFoodCategory(categoryId) {
    const category = foodCategories[categoryId];
    
    document.getElementById('category-title').textContent = category.name;
    document.getElementById('category-meta').textContent = category.description;
    document.getElementById('category-icon').src = category.icon;
    
    const foodItemsContainer = document.getElementById('food-items-container');
    foodItemsContainer.innerHTML = '';
    
    category.items.forEach(item => {
        const foodItem = document.createElement('div');
        foodItem.className = 'food-item';
        foodItem.dataset.id = item.id;
        foodItem.innerHTML = `
            <img src="${item.image}" alt="${item.name}" class="food-img">
            <div class="food-details">
                <div class="food-name">${item.name}</div>
                <div class="food-desc">${item.description}</div>
                <div class="food-price">₦${item.price.toLocaleString()}</div>
                <div class="food-actions">
                    <div class="quantity-control">
                        <button class="quantity-btn" onclick="updateQuantity(this, ${item.id}, -1)">-</button>
                        <span class="quantity">1</span>
                        <button class="quantity-btn" onclick="updateQuantity(this, ${item.id}, 1)">+</button>
                    </div>
                    <button class="add-to-cart" onclick="addToCart(${item.id})">Add to Cart</button>
                </div>
            </div>
        `;
        foodItemsContainer.appendChild(foodItem);
    });
    
    homePage.style.display = 'none';
    foodCategoryPage.style.display = 'block';
    otherPages.style.display = 'none';
    checkoutPage.style.display = 'none';
}
        
        // Show other pages
        function showPage(pageId) {
    if (pageContent[pageId]) {
        // For order history page, generate dynamic content
        if (pageId === 'my-orders') {
            pageContentElement.innerHTML = generateOrderHistoryContent();
        } else {
            pageContentElement.innerHTML = pageContent[pageId].content;
        }
        
        document.title = `${pageContent[pageId].title} | NaijaFoodExpress`;
        
        homePage.style.display = 'none';
        foodCategoryPage.style.display = 'none';
        otherPages.style.display = 'block';
        checkoutPage.style.display = 'none';
    }
    return false;
}
function generateOrderHistoryContent() {
    if (orderHistory.length === 0) {
        return `
            <h2 class="page-title">My Order History</h2>
            <div class="page-text">
                <p>You haven't placed any orders yet.</p>
            </div>
        `;
    }

    let ordersHTML = `
        <h2 class="page-title">My Order History</h2>
        <div class="order-history">
    `;

	orderHistory.sort((a, b) => b.timestamp - a.timestamp);

    orderHistory.forEach(order => {
        let itemsHTML = '';
        order.items.forEach(item => {
            itemsHTML += `
                <div class="order-item">
                    <span>${item.name} (${item.quantity})</span>
                    <span>₦${(item.price * item.quantity).toLocaleString()}</span>
                </div>
            `;
        });
        
	// Format the date and time nicely
        const orderDate = new Date(order.timestamp);
        const formattedDate = orderDate.toLocaleDateString();
        const formattedTime = orderDate.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
	
        ordersHTML += `
            <div class="order-card">
                <div class="order-header">
                    <div>
                        <span class="order-id">Order #${order.id}</span>
                        <span class="order-date"> - ${formatOrderDate(order.timestamp)}</span>
                    </div>
                    <span class="order-status ${order.status.toLowerCase()}">${order.status}</span>
                </div>
                <div class="order-summary">
                    <div class="order-items">
                        ${itemsHTML}
                    </div>
                    <div class="order-total">
                        <span>Total</span>
                        <span>₦${order.total.toLocaleString()}</span>
                    </div>
                </div>
                <div class="order-footer">
                    <div class="delivery-info">
                        <p>Delivered to: ${order.customer.address}</p>
                        <p>Payment: ${order.paymentMethod}</p>
                        ${order.customer.notes ? `<p>Notes: ${order.customer.notes}</p>` : ''}
                    </div>
                </div>
            </div>
        `;
    });

    ordersHTML += `</div>`;
    return ordersHTML;
}
        
        // Toggle cart modal
        function toggleCart() {
            if (cartModal.style.display === 'block') {
                cartModal.style.display = 'none';
                overlay.style.display = 'none';
            } else {
                updateCartDisplay();
                cartModal.style.display = 'block';
                overlay.style.display = 'block';
            }
        }
        
        // Update quantity in food item
        function updateQuantity(element, itemId, change) {
            const quantityElement = element.parentElement.querySelector('.quantity');
            let quantity = parseInt(quantityElement.textContent);
            quantity += change;
            if (quantity < 1) quantity = 1;
            quantityElement.textContent = quantity;
        }
        
        // Add item to cart
        function addToCart(itemId) {
            // Find the category that contains this item
            let foundItem = null;
            let categoryId = null;
            
            for (const [catId, category] of Object.entries(foodCategories)) {
                const item = category.items.find(i => i.id === itemId);
                if (item) {
                    foundItem = item;
                    categoryId = catId;
                    break;
                }
            }
            
            if (!foundItem) return;
            
            const quantity = parseInt(document.querySelector(`#food-items-container .food-item[data-id="${itemId}"] .quantity`).textContent);
            
            // Check if item already in cart
            const existingItemIndex = cart.findIndex(item => item.id === itemId);
            
            if (existingItemIndex >= 0) {
                // Update quantity
                cart[existingItemIndex].quantity += quantity;
            } else {
                // Add new item
                cart.push({
                    ...foundItem,
                    quantity: quantity,
                    categoryId: categoryId
                });
            }
            
            updateCartCount();
            showToast(`${foundItem.name} added to cart`);
        }
        function formatOrderDate(timestamp) {
    const date = new Date(timestamp);
    const options = { 
        year: 'numeric', 
        month: 'short', 
        day: 'numeric',
        hour: '2-digit', 
        minute: '2-digit',
        hour12: true
    };
    return date.toLocaleString('en-US', options);
}
        // Update cart count display
        function updateCartCount() {
            const count = cart.reduce((total, item) => total + item.quantity, 0);
            cartCountElement.textContent = count;
        }
        
        // Update cart display
        function updateCartDisplay() {
            cartItemsElement.innerHTML = '';
            
            if (cart.length === 0) {
                cartItemsElement.innerHTML = '<p style="text-align: center; padding: 2rem;">Your cart is empty</p>';
                cartTotalElement.textContent = '₦0.00';
                return;
            }
            
            let total = 0;
            
            cart.forEach(item => {
                const itemTotal = item.price * item.quantity;
                total += itemTotal;
                
                const cartItem = document.createElement('div');
                cartItem.className = 'cart-item';
                cartItem.innerHTML = `
                    <img src="${item.image}" alt="${item.name}" class="cart-item-img">
                    <div class="cart-item-details">
                        <div class="cart-item-name">${item.name}</div>
                        <div class="cart-item-price">₦${item.price.toLocaleString()} × ${item.quantity}</div>
                        <div class="cart-item-actions">
                            <button class="remove-item" onclick="removeFromCart(${item.id})">Remove</button>
                        </div>
                    </div>
                    <div style="font-weight: bold;">₦${itemTotal.toLocaleString()}</div>
                `;
                cartItemsElement.appendChild(cartItem);
            });
            
            cartTotalElement.textContent = `₦${total.toLocaleString()}`;
        }
        
        // Remove item from cart
        function removeFromCart(itemId) {
            cart = cart.filter(item => item.id !== itemId);
            updateCartCount();
            updateCartDisplay();
        }
        
        // Proceed to checkout
        function checkout() {
            if (cart.length === 0) {
                showToast('Your cart is empty');
                return;
            }
            
            // Update checkout items display
            checkoutItemsElement.innerHTML = '';
            let total = 0;
            
            cart.forEach(item => {
                const itemTotal = item.price * item.quantity;
                total += itemTotal;
                
                const checkoutItem = document.createElement('div');
                checkoutItem.className = 'checkout-item';
                checkoutItem.innerHTML = `
                    <span>${item.name} (${item.quantity})</span>
                    <span>₦${itemTotal.toLocaleString()}</span>
                `;
                checkoutItemsElement.appendChild(checkoutItem);
            });
            
            checkoutTotalElement.textContent = `₦${total.toLocaleString()}`;
            
            // Show checkout page
            toggleCart();
            homePage.style.display = 'none';
            foodCategoryPage.style.display = 'none';
            otherPages.style.display = 'none';
            checkoutPage.style.display = 'block';
        }
        
        // Handle form submission
        document.getElementById('delivery-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Create order object
    const now = new Date();
    const orderId = 'NFE-' + Date.now().toString().slice(-6);
    const orderTotal = cart.reduce((total, item) => total + (item.price * item.quantity), 0);
    
    const orderData = {
        id: orderId,
        date: now.toLocaleDateString(),
        timestamp: now.getTime(),
        status: 'Processing',
        items: [...cart], // Copy the cart items
        customer: {
            name: document.getElementById('name').value,
            phone: document.getElementById('phone').value,
            address: document.getElementById('address').value,
            notes: document.getElementById('notes').value
        },
        paymentMethod: document.querySelector('input[name="payment"]:checked').value,
        total: orderTotal
    };
    
    // Add to order history
    orderHistory.unshift(orderData); // Add to beginning of array
    localStorage.setItem('orderHistory', JSON.stringify(orderHistory)); 
    
    // Update confirmation display
    orderIdElement.textContent = orderId;
    confirmationMessage.textContent = `Your order (#${orderId}) has been placed successfully and will be delivered soon. Thank you for choosing NaijaFoodExpress!`;
    
    // Clear the cart
    cart = [];
    updateCartCount();
    
    // Hide checkout and show confirmation
    checkoutPage.style.display = 'none';
    confirmationModal.style.display = 'block';
    confirmationOverlay.style.display = 'block';
});
        
        // View order history
        function viewOrderHistory() {
            closeConfirmation();
            showPage('my-orders');
        }
        
        // Close confirmation modal
        function closeConfirmation() {
            confirmationModal.style.display = 'none';
            confirmationOverlay.style.display = 'none';
            showHome();
        }
        
        // Show toast notification
        function showToast(message) {
            const toast = document.createElement('div');
            toast.style.position = 'fixed';
            toast.style.bottom = '20px';
            toast.style.left = '50%';
            toast.style.transform = 'translateX(-50%)';
            toast.style.backgroundColor = '#333';
            toast.style.color = 'white';
            toast.style.padding = '12px 24px';
            toast.style.borderRadius = '4px';
            toast.style.zIndex = '10000';
            toast.style.animation = 'fadein 0.5s, fadeout 0.5s 2.5s';
            toast.textContent = message;
            
            document.body.appendChild(toast);
            
            setTimeout(() => {
                document.body.removeChild(toast);
            }, 3000);
        }
        
        // Initialize the page
        showHome();
        // Toggle rider application form visibility
document.getElementById('show-rider-form')?.addEventListener('click', function() {
    const form = document.getElementById('rider-application-form');
    form.style.display = form.style.display === 'none' ? 'block' : 'none';
    
    // Smooth scroll to form
    if (form.style.display === 'block') {
        form.scrollIntoView({ behavior: 'smooth' });
    }
});

// Form submission handler (keep your existing one)
document.getElementById('rider-form')?.addEventListener('submit', function(e) {
    e.preventDefault();
    // ... your existing form handling code ...
});
    </script>
</body>
</html>
