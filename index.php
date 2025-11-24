<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
    <title>Kokostore - Responsive Vendor Theme Demo</title>
    <link rel="stylesheet" href="wp-content/themes/kokostore/style.css">
    <style>
        .mobile-menu-toggle {
            display: none;
            background: transparent;
            border: none;
            cursor: pointer;
            padding: 10px;
            flex-direction: column;
            gap: 4px;
        }
        
        .menu-bar {
            width: 25px;
            height: 3px;
            background: white;
            display: block;
            transition: 0.3s;
        }
        
        .device-info {
            background: #3498db;
            color: white;
            padding: 1rem;
            text-align: center;
            margin-bottom: 1rem;
        }
        
        .pagination {
            margin-top: 2rem;
            text-align: center;
        }
        
        @media (max-width: 768px) {
            .mobile-menu-toggle {
                display: flex;
            }
            
            nav ul {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: #2c3e50;
                padding: 1rem;
            }
            
            nav ul.active {
                display: flex;
            }
        }
    </style>
</head>
<body class="<?php
    $user_agent = $_SERVER['HTTP_USER_AGENT'] ?? '';
    if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', $user_agent)) {
        echo 'device-tablet';
    } elseif (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', $user_agent)) {
        echo 'device-mobile';
    } else {
        echo 'device-desktop';
    }
?>">

<header>
    <div class="container">
        <h1>Kokostore</h1>
        <nav>
            <button class="mobile-menu-toggle" aria-label="Toggle Menu" onclick="toggleMenu()">
                <span class="menu-bar"></span>
                <span class="menu-bar"></span>
                <span class="menu-bar"></span>
            </button>
            <ul id="primary-menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#products">Products</a></li>
                <li><a href="#vendors">Vendors</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<main>
    <div class="container">
        <div class="device-info">
            <h2>Responsive Theme Demo</h2>
            <p>Current Device: <strong id="device-type">Detecting...</strong></p>
            <p>Screen Width: <strong id="screen-width"></strong>px</p>
        </div>
        
        <h2 style="margin-bottom: 1rem; color: #2c3e50;">Featured Products</h2>
        
        <div class="product-grid">
            <?php
            $products = [
                ['name' => 'Premium Laptop', 'description' => 'High-performance laptop for professionals', 'price' => '$1,299'],
                ['name' => 'Wireless Headphones', 'description' => 'Crystal clear sound quality', 'price' => '$199'],
                ['name' => 'Smart Watch', 'description' => 'Track your fitness and stay connected', 'price' => '$349'],
                ['name' => 'Tablet Pro', 'description' => 'Perfect for work and entertainment', 'price' => '$799'],
                ['name' => 'Bluetooth Speaker', 'description' => 'Portable and powerful audio', 'price' => '$149'],
                ['name' => 'Smartphone', 'description' => 'Latest technology in your pocket', 'price' => '$899'],
                ['name' => 'Camera', 'description' => 'Capture life\'s moments in HD', 'price' => '$599'],
                ['name' => 'Gaming Console', 'description' => 'Next-gen gaming experience', 'price' => '$499'],
            ];
            
            foreach ($products as $index => $product):
            ?>
                <article class="product-card">
                    <img src="https://via.placeholder.com/400x300/3498db/ffffff?text=<?php echo urlencode($product['name']); ?>" 
                         alt="<?php echo htmlspecialchars($product['name']); ?>"
                         loading="lazy">
                    <div class="product-info">
                        <h3><?php echo htmlspecialchars($product['name']); ?></h3>
                        <p><?php echo htmlspecialchars($product['description']); ?></p>
                        <div class="price"><?php echo htmlspecialchars($product['price']); ?></div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</main>

<footer>
    <div class="container">
        <p>&copy; <?php echo date('Y'); ?> Kokostore. All rights reserved.</p>
        <p>Responsive WordPress Theme for Vendors</p>
    </div>
</footer>

<script>
function detectDevice() {
    const width = window.innerWidth;
    let deviceType = '';
    
    if (width <= 480) {
        deviceType = 'Phone (Mobile)';
    } else if (width <= 768) {
        deviceType = 'Tablet';
    } else if (width <= 1024) {
        deviceType = 'Laptop';
    } else {
        deviceType = 'Desktop';
    }
    
    document.getElementById('device-type').textContent = deviceType;
    document.getElementById('screen-width').textContent = width;
}

function toggleMenu() {
    const menu = document.getElementById('primary-menu');
    menu.classList.toggle('active');
}

detectDevice();
window.addEventListener('resize', detectDevice);
window.addEventListener('orientationchange', function() {
    setTimeout(detectDevice, 200);
});

document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.product-card');
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '0';
                entry.target.style.transform = 'translateY(20px)';
                setTimeout(function() {
                    entry.target.style.transition = 'opacity 0.5s, transform 0.5s';
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, 100);
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1
    });
    
    cards.forEach(function(card) {
        observer.observe(card);
    });
});
</script>

</body>
</html>
