<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kokostore - Business Management Platform</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="app.css">
</head>
<body>
    <!-- Mobile Header -->
    <div class="mobile-header">
        <div class="mobile-header-greeting">
            <h2 id="mobile-header-name">Hi, Adeoye</h2>
            <p>Welcome back, we are happy to see you again<i class="fa-solid fa-handwave"></i></p>
            <div class="mobile-header-buttons">
                <button class="mobile-header-btn" title="Visit Store">
                    <i class="fa-solid fa-globe"></i>
                    <span>Visit store</span>
                </button>
                <button class="mobile-header-btn" title="Share Link">
                    <i class="fa-solid fa-share"></i>
                    <span>Share link</span>
                </button>
            </div>
        </div>
        <div class="mobile-header-actions">
            <button class="mobile-header-action" title="Quick View" onclick="app.loadPage('products')">
                <i class="fa-solid fa-eye eye-icon"></i>
                <i class="fa-solid fa-circle status-icon"></i>
            </button>
            <button class="mobile-header-action" title="Notifications">
                <i class="fa-solid fa-bell"></i>
            </button>
            <button class="mobile-header-action" title="Account" onclick="app.loadPage('settings')">
                <i class="fa-solid fa-user"></i>
            </button>
        </div>
    </div>

    <div class="app-container">
        <div class="app-main">
            <!-- Sidebar -->
            <aside class="sidebar">
                <div class="sidebar-header">
                    <a href="#" class="logo">
                        <i class="fa-solid fa-store"></i>
                        Kokostore
                    </a>
                </div>
                
                <nav class="nav-menu">
                    <a class="nav-item active" data-page="home">
                        <i class="nav-icon fa-solid fa-house"></i>
                        <span>Home</span>
                    </a>
                    
                    <a class="nav-item" data-page="products">
                        <i class="nav-icon fa-solid fa-tag"></i>
                        <span>Products</span>
                    </a>
                    
                    <a class="nav-item" data-page="orders">
                        <i class="nav-icon fa-solid fa-cart-shopping"></i>
                        <span>Orders</span>
                    </a>
                    
                    <a class="nav-item" data-page="customers">
                        <i class="nav-icon fa-solid fa-users"></i>
                        <span>Customers</span>
                    </a>
                    
                    <a class="nav-item" data-page="analytics">
                        <i class="nav-icon fa-solid fa-chart-line"></i>
                        <span>Analytics</span>
                    </a>
                    
                    <a class="nav-item" data-page="settings">
                        <i class="nav-icon fa-solid fa-gear"></i>
                        <span>Settings</span>
                    </a>
                </nav>
            </aside>
            
            <!-- Main Content -->
            <main class="main-content">
                <!-- Desktop Header Nav -->
                <header class="desktop-header">
                    <div class="desktop-header-left">
                        <a href="#" class="desktop-header-logo">
                            <i class="fa-solid fa-store"></i>
                            Kokostore
                        </a>
                        <nav>
                            <ul class="desktop-nav-menu">
                                <li><a class="desktop-nav-item active" data-page="home" onclick="app.loadPage('home'); return false;">Home</a></li>
                                <li><a class="desktop-nav-item" data-page="products" onclick="app.loadPage('products'); return false;">Products</a></li>
                                <li><a class="desktop-nav-item" data-page="orders" onclick="app.loadPage('orders'); return false;">Orders</a></li>
                                <li><a class="desktop-nav-item" data-page="customers" onclick="app.loadPage('customers'); return false;">Customers</a></li>
                                <li><a class="desktop-nav-item" data-page="analytics" onclick="app.loadPage('analytics'); return false;">Analytics</a></li>
                                <li><a class="desktop-nav-item" data-page="settings" onclick="app.loadPage('settings'); return false;">Settings</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="desktop-header-right">
                        <button class="icon-btn">
                            <i class="fa-solid fa-bell"></i>
                            <span class="badge">3</span>
                        </button>
                        <div class="user-profile">
                            <div class="avatar">KS</div>
                        </div>
                    </div>
                </header>
                
                <!-- Page Content -->
                <div class="content-area">
                    <!-- Home Page -->
                    <div id="home-page" class="page-content">
                        <!-- Page Title and Subtitle (Above Banner) -->
                        <div class="page-header" style="margin-bottom: 0;">
                            <h1 class="page-title">Dashboard</h1>
                            <p class="page-subtitle">Welcome back! Here's your business performance overview.</p>
                        </div>
                        
                        <!-- 1. Banner Section -->
                        <div class="home-banner">
                            <img src="professional_e-comme_24a4667a.jpg" alt="E-commerce Dashboard Banner" class="banner-image">
                        </div>
                        
                        <!-- 2. Total Sales Section with Filter -->
                        <div class="card total-sales-card" style="margin-bottom: 1.5rem;">
                            <div class="card-header">
                                <h2 class="card-title">Total Sales</h2>
                                <div class="period-dropdown-wrapper">
                                    <select class="period-dropdown" id="period-select" onchange="app.updateSalesPeriod(this.value)">
                                        <option value="today">Today</option>
                                        <option value="week">This Week</option>
                                        <option value="month">This Month</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-body total-sales-body">
                                <div class="total-sales-value" id="total-sales">₦0</div>
                                <div class="total-sales-change" id="sales-change">↗ 12% from previous period</div>
                            </div>
                        </div>
                        
                        <!-- 3. Four Metric Boxes in a Row -->
                        <div class="metrics-container">
                            <div class="metric-box">
                                <div class="metric-label">Updating Orders</div>
                                <div class="metric-value" id="metric-orders">0</div>
                                <div class="metric-change">↗ 8% increase</div>
                            </div>
                            <div class="metric-box">
                                <div class="metric-label">Products Sold</div>
                                <div class="metric-value" id="metric-products">0</div>
                                <div class="metric-change">↗ 12% increase</div>
                            </div>
                            <div class="metric-box">
                                <div class="metric-label">New Customers</div>
                                <div class="metric-value" id="metric-customers">0</div>
                                <div class="metric-change">↗ 5% increase</div>
                            </div>
                            <div class="metric-box">
                                <div class="metric-label">Website Visits</div>
                                <div class="metric-value" id="metric-visits">2.4K</div>
                                <div class="metric-change">↗ 3% increase</div>
                            </div>
                        </div>
                        
                        <!-- 4. Daily Report Button -->
                        <div style="margin: 1.5rem 0; text-align: center;">
                            <button class="btn btn-primary" onclick="app.generateDailyReport()" style="padding: 0.75rem 2rem; font-weight: 600;">Generate Daily Report</button>
                        </div>
                        
                        <!-- 4a. Quick Actions Section -->
                        <div class="quick-actions-section">
                            <h3 class="quick-actions-title">Quick Actions</h3>
                            <div class="quick-actions">
                                <button class="quick-action-btn quick-action-yellow" title="Add Product">
                                    <div class="quick-action-icon-circle">
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                    <span>Add Product</span>
                                </button>
                                <button class="quick-action-btn quick-action-blue" title="Add Order">
                                    <div class="quick-action-icon-circle">
                                        <i class="fa-solid fa-cart-plus"></i>
                                    </div>
                                    <span>Add Order</span>
                                </button>
                                <button class="quick-action-btn quick-action-teal" title="Add Customer">
                                    <div class="quick-action-icon-circle">
                                        <i class="fa-solid fa-user-plus"></i>
                                    </div>
                                    <span>Add Customer</span>
                                </button>
                                <button class="quick-action-btn quick-action-purple" title="Create Invoice">
                                    <div class="quick-action-icon-circle">
                                        <i class="fa-solid fa-file-invoice"></i>
                                    </div>
                                    <span>Create Invoice</span>
                                </button>
                                <button class="quick-action-btn quick-action-orange" title="Add Expense">
                                    <div class="quick-action-icon-circle">
                                        <i class="fa-solid fa-money-bill-wave"></i>
                                    </div>
                                    <span>Add Expense</span>
                                </button>
                            </div>
                        </div>
                        
                        <!-- 4b. Slider Widget -->
                        <div class="slider-container">
                            <div class="slider-wrapper">
                                <div class="slider-track">
                                    <div class="slider-slide active" style="background-image: url('attached_assets/stock_images/e-commerce_promotion_65827025.jpg'); background-size: cover; background-position: center;">
                                        <div class="slide-overlay"></div>
                                        <div class="slide-content">
                                            <p class="slide-title">Introducing</p>
                                            <h2 class="slide-subtitle">Kokostore makes growth and advancement to your business</h2>
                                            <p class="slide-description">Transform your e-commerce business with our comprehensive platform. Manage inventory, track orders, and engage customers effortlessly. Scale your business efficiently with all the tools you need......</p>
                                            <button class="btn btn-primary slide-read-more">Read More</button>
                                        </div>
                                    </div>
                                    <div class="slider-slide" style="background-image: url('attached_assets/stock_images/e-commerce_promotion_79036d95.jpg'); background-size: cover; background-position: center;">
                                        <div class="slide-overlay"></div>
                                        <div class="slide-content">
                                            <p class="slide-title">Introducing</p>
                                            <h2 class="slide-subtitle">Boost sales with smart inventory management tools</h2>
                                            <p class="slide-description">Track every product in real-time with our advanced inventory system. Never miss sales due to stockouts. Monitor stock alerts and optimize inventory levels automatically for perfect balance......</p>
                                            <button class="btn btn-primary slide-read-more">Read More</button>
                                        </div>
                                    </div>
                                    <div class="slider-slide" style="background-image: url('attached_assets/stock_images/e-commerce_promotion_71290c8c.jpg'); background-size: cover; background-position: center;">
                                        <div class="slide-overlay"></div>
                                        <div class="slide-content">
                                            <p class="slide-title">Introducing</p>
                                            <h2 class="slide-subtitle">Connect with customers and increase loyalty</h2>
                                            <p class="slide-description">Build lasting relationships with customers through personalized communication and rewards. Track behavior, manage preferences, and create targeted campaigns that convert. Understand buying patterns and deliver exceptional service......</p>
                                            <button class="btn btn-primary slide-read-more">Read More</button>
                                        </div>
                                    </div>
                                    <div class="slider-slide" style="background-image: url('attached_assets/stock_images/e-commerce_promotion_1d3d3b99.jpg'); background-size: cover; background-position: center;">
                                        <div class="slide-overlay"></div>
                                        <div class="slide-content">
                                            <p class="slide-title">Introducing</p>
                                            <h2 class="slide-subtitle">Analytics and insights to drive smart decisions</h2>
                                            <p class="slide-description">Get detailed analytics on business performance with comprehensive reports. Track revenue, orders, and growth metrics in real-time. Make data-driven decisions that accelerate growth and maximize profitability......</p>
                                            <button class="btn btn-primary slide-read-more">Read More</button>
                                        </div>
                                    </div>
                                </div>
                                <button class="slider-btn slider-prev" onclick="app.prevSlide()">
                                    <i class="fa-solid fa-chevron-left"></i>
                                </button>
                                <button class="slider-btn slider-next" onclick="app.nextSlide()">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </button>
                            </div>
                            <div class="slider-dots">
                                <button class="dot active" onclick="app.goToSlide(0)"></button>
                                <button class="dot" onclick="app.goToSlide(1)"></button>
                                <button class="dot" onclick="app.goToSlide(2)"></button>
                                <button class="dot" onclick="app.goToSlide(3)"></button>
                            </div>
                        </div>
                        
                        <!-- 5. Official Info & Team Section -->
                        <div class="info-team-container">
                            <!-- Left Column: Official Info & Founder Name -->
                            <aside class="widget widget_block info-column">
                                <h5 class="widget-title"><span class="title-underline">Official</span> Info</h5>
                                <div class="wp-widget-group__inner-blocks">
                                    <div class="inf_list">
                                        <div class="inf_item">
                                            <a href="#">
                                                <i aria-hidden="true" class="inf_icon fas fa-user"></i><div class="founder-info"><span class="founder-name-text">Adeyanju ADEOYE</span><p class="founder-subtitle">The organisation founder and MD</p></div>
                                            </a>
                                        </div>
                                        <div class="inf_item">
                                            <a href="#">
                                                <i aria-hidden="true" class="inf_icon fas fa-map-marker-alt"></i><span class="inf_text">Abule Otun Junction, Owode-Mowe <br>Motor Road, Owode Egba Ogun State.</span>
                                            </a>
                                        </div>
                                        <div class="inf_item">
                                            <a href="#">
                                                <i aria-hidden="true" class="inf_icon fas fa-phone-alt"></i><span class="inf_text">+2348129440095</span>
                                            </a>
                                        </div>
                                        <div class="inf_item">
                                            <a href="#">
                                                <i aria-hidden="true" class="inf_icon fas fa-envelope"></i><span class="inf_text">kokohypesng@gmail.com</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </aside>

                            <!-- Right Column: Founder Passport -->
                            <div class="team-column">
                                <div class="founder-card">
                                    <img src="attached_assets/stock_images/professional_busines_6164952e.jpg" alt="Founder" class="founder-photo">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Products Page -->
                    <div id="products-page" class="page-content hidden">
                        <!-- Tab Navigation -->
                        <div style="display: flex; gap: 1rem; margin-bottom: 1.5rem; border-bottom: 1px solid var(--gray-200); padding-bottom: 1rem;">
                            <button class="products-tab active" data-tab="products" onclick="this.classList.add('active'); document.querySelector('[data-tab=collections]').classList.remove('active');">
                                Products
                            </button>
                            <button class="products-tab" data-tab="collections" onclick="this.classList.add('active'); document.querySelector('[data-tab=products]').classList.remove('active');">
                                Collections
                            </button>
                        </div>
                        
                        <!-- Search and Actions Bar -->
                        <div style="display: flex; gap: 1rem; margin-bottom: 1.5rem; align-items: center;">
                            <div style="flex: 1; position: relative;">
                                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="position: absolute; left: 0.75rem; top: 50%; transform: translateY(-50%); color: var(--gray-400);">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                </svg>
                                <input type="text" placeholder="Search products..." style="width: 100%; padding: 0.75rem 1rem 0.75rem 2.5rem; border: 1px solid var(--gray-300); border-radius: 0.5rem; font-size: 0.875rem;">
                            </div>
                            <button class="icon-btn" title="Help" style="width: 40px; height: 40px; border: 1px solid var(--gray-300); border-radius: 0.5rem; display: flex; align-items: center; justify-content: center;">
                                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </button>
                            <button class="btn btn-primary" onclick="app.openModal('add-product-modal')" style="width: 40px; height: 40px; padding: 0; border-radius: 0.5rem; display: flex; align-items: center; justify-content: center;">
                                <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 4a1 1 0 011 1v6h6a1 1 0 110 2h-6v6a1 1 0 11-2 0v-6H5a1 1 0 110-2h6V5a1 1 0 011-1z"/>
                                </svg>
                            </button>
                        </div>
                        
                        <!-- Filter Tabs -->
                        <div style="display: flex; gap: 1rem; margin-bottom: 1.5rem; flex-wrap: wrap;">
                            <button class="filter-tab active" data-filter="all" style="background: var(--store-primary); color: white;">All</button>
                            <button class="filter-tab" data-filter="published" style="background: transparent; color: var(--gray-700);">Published</button>
                            <button class="filter-tab" data-filter="unpublished" style="background: transparent; color: var(--gray-700);">Unpublished</button>
                        </div>
                        
                        <!-- Products Content -->
                        <div id="products-content" style="min-height: 400px;">
                            <!-- Will be populated by JavaScript or show empty state -->
                        </div>
                    </div>
                    
                    <!-- Orders Page -->
                    <div id="orders-page" class="page-content hidden">
                        <div class="page-header" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem;">
                            <div>
                                <h1 class="page-title">Orders</h1>
                                <p class="page-subtitle">Track and manage all your customer orders</p>
                            </div>
                            <button class="btn btn-primary" onclick="app.openModal('add-order-modal')">+ New Order</button>
                        </div>
                        
                        <div class="card">
                            <div class="card-body">
                                <div class="table-container">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Customer</th>
                                                <th>Date</th>
                                                <th>Total</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody id="orders-tbody"></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Customers Page -->
                    <div id="customers-page" class="page-content hidden">
                        <div class="page-header" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem;">
                            <div>
                                <h1 class="page-title">Customers</h1>
                                <p class="page-subtitle">Manage customer relationships and data</p>
                            </div>
                            <button class="btn btn-primary" onclick="app.openModal('add-customer-modal')">+ Add Customer</button>
                        </div>
                        
                        <div class="card">
                            <div class="card-body">
                                <div class="table-container">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Orders</th>
                                                <th>Total Spent</th>
                                            </tr>
                                        </thead>
                                        <tbody id="customers-tbody"></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Analytics Page -->
                    <div id="analytics-page" class="page-content hidden">
                        <div class="page-header">
                            <h1 class="page-title">Analytics</h1>
                            <p class="page-subtitle">Business insights and performance metrics</p>
                        </div>
                        
                        <div class="stats-grid">
                            <div class="stat-card">
                                <div class="stat-header">
                                    <div>
                                        <div class="stat-label">Gross Revenue</div>
                                        <div class="stat-value" id="stat-revenue-analytics">₦0</div>
                                    </div>
                                </div>
                                <div class="stat-change positive"><span>↗</span> 12% increase</div>
                            </div>
                            
                            <div class="stat-card">
                                <div class="stat-header">
                                    <div>
                                        <div class="stat-label">Average Order Value</div>
                                        <div class="stat-value">₦7,333</div>
                                    </div>
                                </div>
                                <div class="stat-change positive"><span>↗</span> 5% increase</div>
                            </div>
                            
                            <div class="stat-card">
                                <div class="stat-header">
                                    <div>
                                        <div class="stat-label">Conversion Rate</div>
                                        <div class="stat-value">3.2%</div>
                                    </div>
                                </div>
                                <div class="stat-change negative"><span>↘</span> 0.3% decrease</div>
                            </div>
                            
                            <div class="stat-card">
                                <div class="stat-header">
                                    <div>
                                        <div class="stat-label">Customer Retention</div>
                                        <div class="stat-value">68%</div>
                                    </div>
                                </div>
                                <div class="stat-change positive"><span>↗</span> 2% increase</div>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title">Sales Overview</h2>
                            </div>
                            <div class="card-body">
                                <div style="text-align: center; padding: 3rem; color: var(--gray-500);">
                                    <div style="font-size: 3rem; margin-bottom: 1rem;">📊</div>
                                    <p>Chart visualization coming soon</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Settings Page -->
                    <div id="settings-page" class="page-content hidden">
                        <div class="page-header">
                            <h1 class="page-title">Settings</h1>
                            <p class="page-subtitle">Manage your account and business preferences</p>
                        </div>
                        
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title">Choose Your Store Colour</h2>
                            </div>
                            <div class="card-body">
                                <p style="margin-bottom: 1.5rem; color: var(--gray-600);">Select a color scheme that represents your brand:</p>
                                <div class="color-palette" id="color-palette"></div>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title">Custom Store Domain</h2>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label">Store Domain</label>
                                    <input type="text" id="store-domain-input" class="form-input" placeholder="your-store.bumpa.shop" onblur="app.updateStoreDomain(this.value)">
                                    <p style="font-size: 0.875rem; color: var(--gray-600); margin-top: 0.5rem;">Your customers will access your store at this domain</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title">Business Information</h2>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label class="form-label">Business Name</label>
                                        <input type="text" class="form-input" value="Kokostore" placeholder="Your business name">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Business Email</label>
                                        <input type="email" class="form-input" value="contact@kokostore.com" placeholder="business@example.com">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Phone Number</label>
                                        <input type="tel" class="form-input" value="+234 800 000 0000" placeholder="+234 800 000 0000">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Business Address</label>
                                        <textarea class="form-textarea" placeholder="Enter your business address">Lagos, Nigeria</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </form>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title">Payment Settings</h2>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label">Currency</label>
                                    <select class="form-select">
                                        <option value="NGN">Nigerian Naira (₦)</option>
                                        <option value="USD">US Dollar ($)</option>
                                        <option value="GBP">British Pound (£)</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Tax Rate (%)</label>
                                    <input type="number" class="form-input" value="7.5" placeholder="0">
                                </div>
                                <button type="submit" class="btn btn-primary">Save Settings</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- More Page -->
                <div id="more-page" class="page-content hidden">
                    <div class="page-header">
                        <h1 class="page-title">More</h1>
                        <p class="page-subtitle">Additional tools and features</p>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Notifications & Alerts</h2>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="form-label">
                                    <input type="checkbox" checked> Low Stock Alerts
                                </label>
                                <p style="font-size: 0.875rem; color: var(--gray-600); margin-top: 0.25rem;">Get notified when products run low</p>
                            </div>
                            <div class="form-group">
                                <label class="form-label">
                                    <input type="checkbox" checked> Order Updates
                                </label>
                                <p style="font-size: 0.875rem; color: var(--gray-600); margin-top: 0.25rem;">Receive notifications for new orders</p>
                            </div>
                            <div class="form-group">
                                <label class="form-label">
                                    <input type="checkbox" checked> Weekly Reports
                                </label>
                                <p style="font-size: 0.875rem; color: var(--gray-600); margin-top: 0.25rem;">Get weekly business summary</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Account Settings</h2>
                        </div>
                        <div class="card-body">
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1.5rem;">
                                <button class="btn btn-secondary" style="width: 100%;">Change Password</button>
                                <button class="btn btn-secondary" style="width: 100%;">Two-Factor Auth</button>
                            </div>
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                                <button class="btn btn-secondary" style="width: 100%;">Export Data</button>
                                <button class="btn btn-secondary" style="width: 100%;">Backup Settings</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">App Information</h2>
                        </div>
                        <div class="card-body">
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1.5rem;">
                                <div>
                                    <div style="font-size: 0.875rem; color: var(--gray-600); margin-bottom: 0.25rem;">Version</div>
                                    <div style="font-weight: 600;">3.1.0</div>
                                </div>
                                <div>
                                    <div style="font-size: 0.875rem; color: var(--gray-600); margin-bottom: 0.25rem;">Last Updated</div>
                                    <div style="font-weight: 600;">Nov 24, 2025</div>
                                </div>
                            </div>
                            <div style="padding-top: 1rem; border-top: 1px solid var(--gray-200);">
                                <p style="font-size: 0.875rem; color: var(--gray-600); margin-bottom: 1rem;">Need help? Visit our help center or contact support</p>
                                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                                    <button class="btn btn-outline" style="width: 100%;">Help Center</button>
                                    <button class="btn btn-outline" style="width: 100%;">Contact Support</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">App Preferences</h2>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="form-label">Theme</label>
                                <select class="form-select">
                                    <option value="light">Light</option>
                                    <option value="dark">Dark (Coming Soon)</option>
                                    <option value="auto">Auto</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Language</label>
                                <select class="form-select">
                                    <option value="en">English</option>
                                    <option value="yo">Yoruba (Coming Soon)</option>
                                    <option value="ha">Hausa (Coming Soon)</option>
                                </select>
                            </div>
                            <button class="btn btn-primary" style="width: 100%;">Save Preferences</button>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Danger Zone</h2>
                        </div>
                        <div class="card-body">
                            <p style="font-size: 0.875rem; color: var(--gray-600); margin-bottom: 1.5rem;">These actions cannot be undone. Please proceed with caution.</p>
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                                <button class="btn btn-secondary" style="width: 100%;">Clear Local Data</button>
                                <button class="btn" style="width: 100%; background: var(--red); color: white; border: none;">Delete Account</button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    
    <!-- Mobile Footer Navigation -->
    <nav class="mobile-footer-nav">
        <ul class="mobile-footer-nav-list">
            <li>
                <button class="mobile-footer-nav-item active" data-page="home" onclick="app.loadPage('home'); this.classList.add('active'); document.querySelectorAll('.mobile-footer-nav-item').forEach(el => el !== this && el.classList.remove('active'));">
                    <i class="mobile-footer-nav-icon fa-solid fa-house"></i>
                    <span class="mobile-footer-nav-label">Home</span>
                </button>
            </li>
            <li>
                <button class="mobile-footer-nav-item" data-page="products" onclick="app.loadPage('products'); this.classList.add('active'); document.querySelectorAll('.mobile-footer-nav-item').forEach(el => el !== this && el.classList.remove('active'));">
                    <i class="mobile-footer-nav-icon fa-solid fa-tag"></i>
                    <span class="mobile-footer-nav-label">Products</span>
                </button>
            </li>
            <li>
                <button class="mobile-footer-nav-item" data-page="orders" onclick="app.loadPage('orders'); this.classList.add('active'); document.querySelectorAll('.mobile-footer-nav-item').forEach(el => el !== this && el.classList.remove('active'));">
                    <i class="mobile-footer-nav-icon fa-solid fa-cart-shopping"></i>
                    <span class="mobile-footer-nav-label">Orders</span>
                </button>
            </li>
            <li>
                <button class="mobile-footer-nav-item" data-page="customers" onclick="app.loadPage('customers'); this.classList.add('active'); document.querySelectorAll('.mobile-footer-nav-item').forEach(el => el !== this && el.classList.remove('active'));">
                    <i class="mobile-footer-nav-icon fa-solid fa-users"></i>
                    <span class="mobile-footer-nav-label">Customers</span>
                </button>
            </li>
            <li>
                <button class="mobile-footer-nav-item" data-page="more" onclick="app.loadPage('more'); this.classList.add('active'); document.querySelectorAll('.mobile-footer-nav-item').forEach(el => el !== this && el.classList.remove('active'));">
                    <i class="mobile-footer-nav-icon fa-solid fa-ellipsis"></i>
                    <span class="mobile-footer-nav-label">More</span>
                </button>
            </li>
        </ul>
    </nav>
    
    <!-- Modals -->
    <!-- Add Product Modal -->
    <div id="add-product-modal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Add New Product</h3>
                <button class="close-btn close-modal">&times;</button>
            </div>
            <div class="modal-body">
                <form onsubmit="app.addProduct(event)">
                    <div class="form-group">
                        <label class="form-label">Product Name *</label>
                        <input type="text" name="name" class="form-input" required placeholder="e.g., T-Shirt">
                    </div>
                    <div class="form-group">
                        <label class="form-label">SKU</label>
                        <input type="text" name="sku" class="form-input" placeholder="e.g., TS001">
                    </div>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                        <div class="form-group">
                            <label class="form-label">Price (₦) *</label>
                            <input type="number" name="price" class="form-input" required placeholder="0">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Stock Quantity *</label>
                            <input type="number" name="stock" class="form-input" required placeholder="0">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Category</label>
                        <select name="category" class="form-select">
                            <option value="">Select category</option>
                            <option value="Clothing">Clothing</option>
                            <option value="Footwear">Footwear</option>
                            <option value="Accessories">Accessories</option>
                            <option value="Electronics">Electronics</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-textarea" placeholder="Product description..."></textarea>
                    </div>
                    <div style="display: flex; gap: 0.75rem; justify-content: flex-end;">
                        <button type="button" class="btn btn-secondary close-modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Add Order Modal -->
    <div id="add-order-modal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Create New Order</h3>
                <button class="close-btn close-modal">&times;</button>
            </div>
            <div class="modal-body">
                <form onsubmit="app.addOrder(event)">
                    <div class="form-group">
                        <label class="form-label">Customer Name *</label>
                        <input type="text" name="customer" class="form-input" required placeholder="Customer name">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Order Total (₦) *</label>
                        <input type="number" name="total" class="form-input" required placeholder="0">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Status *</label>
                        <select name="status" class="form-select" required>
                            <option value="pending">Pending</option>
                            <option value="completed">Completed</option>
                            <option value="cancelled">Cancelled</option>
                        </select>
                    </div>
                    <div style="display: flex; gap: 0.75rem; justify-content: flex-end;">
                        <button type="button" class="btn btn-secondary close-modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Create Order</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Add Customer Modal -->
    <div id="add-customer-modal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Add New Customer</h3>
                <button class="close-btn close-modal">&times;</button>
            </div>
            <div class="modal-body">
                <form onsubmit="app.addCustomer(event)">
                    <div class="form-group">
                        <label class="form-label">Full Name *</label>
                        <input type="text" name="name" class="form-input" required placeholder="Customer name">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-input" placeholder="customer@example.com">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Phone Number *</label>
                        <input type="tel" name="phone" class="form-input" required placeholder="+234 800 000 0000">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Address</label>
                        <textarea name="address" class="form-textarea" placeholder="Customer address..."></textarea>
                    </div>
                    <div style="display: flex; gap: 0.75rem; justify-content: flex-end;">
                        <button type="button" class="btn btn-secondary close-modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Customer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="app.js"></script>
</body>
</html>
