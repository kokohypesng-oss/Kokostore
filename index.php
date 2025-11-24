<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kokostore - Business Management Platform</title>
    <link rel="stylesheet" href="app.css">
</head>
<body>
    <!-- Mobile Header -->
    <div class="mobile-header">
        <div class="mobile-header-greeting">
            <h2 id="mobile-header-name">Hi, Kokostore</h2>
            <p>Record a sale today 🛒</p>
        </div>
        <div class="mobile-header-actions">
            <button class="mobile-header-action" title="Quick View" onclick="app.loadPage('products')">
                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                </svg>
            </button>
            <button class="mobile-header-action" title="Notifications">
                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                </svg>
            </button>
            <button class="mobile-header-action" title="Account" onclick="app.loadPage('settings')">
                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </button>
        </div>
    </div>

    <div class="app-container">
        <div class="app-main">
            <!-- Sidebar -->
            <aside class="sidebar">
                <div class="sidebar-header">
                    <a href="#" class="logo">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20 7h-9M14 17H5M6 3v7m0 7v7m8-14v7m8 4v7"/>
                        </svg>
                        Kokostore
                    </a>
                </div>
                
                <nav class="nav-menu">
                    <a class="nav-item active" data-page="home">
                        <svg class="nav-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                        <span>Home</span>
                    </a>
                    
                    <a class="nav-item" data-page="products">
                        <svg class="nav-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                        </svg>
                        <span>Products</span>
                    </a>
                    
                    <a class="nav-item" data-page="orders">
                        <svg class="nav-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                        <span>Orders</span>
                    </a>
                    
                    <a class="nav-item" data-page="customers">
                        <svg class="nav-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                        <span>Customers</span>
                    </a>
                    
                    <a class="nav-item" data-page="analytics">
                        <svg class="nav-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                        <span>Analytics</span>
                    </a>
                    
                    <a class="nav-item" data-page="settings">
                        <svg class="nav-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
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
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20 7h-9M14 17H5M6 3v7m0 7v7m8-14v7m8 4v7"/>
                            </svg>
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
                            <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                            </svg>
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
                        <div class="page-header">
                            <h1 class="page-title">Dashboard</h1>
                            <p class="page-subtitle">Welcome back! Here's what's happening with your business today.</p>
                        </div>
                        
                        <div class="stats-grid">
                            <div class="stat-card">
                                <div class="stat-header">
                                    <div>
                                        <div class="stat-label">Total Revenue</div>
                                        <div class="stat-value" id="stat-revenue">₦0</div>
                                    </div>
                                    <div class="stat-icon" style="background: var(--store-light); color: var(--store-dark);">💰</div>
                                </div>
                                <div class="stat-change positive">
                                    <span>↗</span> 12% from last month
                                </div>
                            </div>
                            
                            <div class="stat-card">
                                <div class="stat-header">
                                    <div>
                                        <div class="stat-label">Total Orders</div>
                                        <div class="stat-value" id="stat-orders">0</div>
                                    </div>
                                    <div class="stat-icon" style="background: #DBEAFE; color: #1D4ED8;">📦</div>
                                </div>
                                <div class="stat-change positive">
                                    <span>↗</span> 8% from last month
                                </div>
                            </div>
                            
                            <div class="stat-card">
                                <div class="stat-header">
                                    <div>
                                        <div class="stat-label">Products</div>
                                        <div class="stat-value" id="stat-products">0</div>
                                    </div>
                                    <div class="stat-icon" style="background: #FEF3C7; color: #D97706;">🏷️</div>
                                </div>
                                <div class="stat-change positive">
                                    <span>↗</span> 4 new this week
                                </div>
                            </div>
                            
                            <div class="stat-card">
                                <div class="stat-header">
                                    <div>
                                        <div class="stat-label">Customers</div>
                                        <div class="stat-value" id="stat-customers">0</div>
                                    </div>
                                    <div class="stat-icon" style="background: #E9D5FF; color: #7C3AED;">👥</div>
                                </div>
                                <div class="stat-change positive">
                                    <span>↗</span> 2 new today
                                </div>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title">Quick Actions</h2>
                            </div>
                            <div class="card-body">
                                <div class="quick-actions">
                                    <div class="action-card" onclick="app.openModal('add-product-modal')">
                                        <div class="action-icon">📦</div>
                                        <div class="action-title">Add Product</div>
                                        <div class="action-description">Add new items to inventory</div>
                                    </div>
                                    
                                    <div class="action-card" onclick="app.openModal('add-order-modal')">
                                        <div class="action-icon">🛒</div>
                                        <div class="action-title">New Order</div>
                                        <div class="action-description">Record a new sale</div>
                                    </div>
                                    
                                    <div class="action-card" onclick="app.openModal('add-customer-modal')">
                                        <div class="action-icon">👤</div>
                                        <div class="action-title">Add Customer</div>
                                        <div class="action-description">Save customer details</div>
                                    </div>
                                    
                                    <div class="action-card" onclick="app.loadPage('analytics')">
                                        <div class="action-icon">📊</div>
                                        <div class="action-title">View Analytics</div>
                                        <div class="action-description">Business insights</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem;">
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="card-title">Recent Orders</h2>
                                    <a href="#" onclick="app.loadPage('orders'); return false;" class="btn btn-secondary" style="padding: 0.5rem 1rem; font-size: 0.875rem;">View All</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-container">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Order</th>
                                                    <th>Customer</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody id="recent-orders"></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="card-title">Low Stock Alerts</h2>
                                    <a href="#" onclick="app.loadPage('products'); return false;" class="btn btn-secondary" style="padding: 0.5rem 1rem; font-size: 0.875rem;">View All</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-container">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Stock</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody id="low-stock-alerts"></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Products Page -->
                    <div id="products-page" class="page-content hidden">
                        <div class="page-header" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem;">
                            <div>
                                <h1 class="page-title">Products</h1>
                                <p class="page-subtitle">Manage your inventory and product catalog</p>
                            </div>
                            <button class="btn btn-primary" onclick="app.openModal('add-product-modal')">+ Add Product</button>
                        </div>
                        
                        <div class="card">
                            <div class="card-body">
                                <div class="table-container">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>SKU</th>
                                                <th>Price</th>
                                                <th>Stock</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody id="products-tbody"></tbody>
                                    </table>
                                </div>
                            </div>
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
                    <svg class="mobile-footer-nav-icon" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V20a1 1 0 001 1h5a1 1 0 001-1v-6h2v6a1 1 0 001 1h5a1 1 0 001-1v-9.586l.707.707a1 1 0 001.414-1.414l-7-7z"/>
                    </svg>
                    <span class="mobile-footer-nav-label">Home</span>
                </button>
            </li>
            <li>
                <button class="mobile-footer-nav-item" data-page="products" onclick="app.loadPage('products'); this.classList.add('active'); document.querySelectorAll('.mobile-footer-nav-item').forEach(el => el !== this && el.classList.remove('active'));">
                    <svg class="mobile-footer-nav-icon" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" opacity="0.3"/>
                        <path d="M7 12.5c-.28 0-.5.22-.5.5s.22.5.5.5.5-.22.5-.5-.22-.5-.5-.5zm5-3c-.28 0-.5.22-.5.5s.22.5.5.5.5-.22.5-.5-.22-.5-.5-.5zm5 5c-.28 0-.5.22-.5.5s.22.5.5.5.5-.22.5-.5-.22-.5-.5-.5z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm3.5 6.5l-8 8m-3-3l6-6"/>
                    </svg>
                    <span class="mobile-footer-nav-label">Products</span>
                </button>
            </li>
            <li>
                <button class="mobile-footer-nav-item" data-page="orders" onclick="app.loadPage('orders'); this.classList.add('active'); document.querySelectorAll('.mobile-footer-nav-item').forEach(el => el !== this && el.classList.remove('active'));">
                    <svg class="mobile-footer-nav-icon" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/>
                    </svg>
                    <span class="mobile-footer-nav-label">Orders</span>
                </button>
            </li>
            <li>
                <button class="mobile-footer-nav-item" data-page="customers" onclick="app.loadPage('customers'); this.classList.add('active'); document.querySelectorAll('.mobile-footer-nav-item').forEach(el => el !== this && el.classList.remove('active'));">
                    <svg class="mobile-footer-nav-icon" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM9 12a3 3 0 11-6 0 3 3 0 016 0zm7-5a3 3 0 11-6 0 3 3 0 016 0zm2 9a7 7 0 11-14 0 7 7 0 0114 0zM12 15a1 1 0 100-2 1 1 0 000 2z"/>
                    </svg>
                    <span class="mobile-footer-nav-label">Customers</span>
                </button>
            </li>
            <li>
                <button class="mobile-footer-nav-item" data-page="more" onclick="app.loadPage('more'); this.classList.add('active'); document.querySelectorAll('.mobile-footer-nav-item').forEach(el => el !== this && el.classList.remove('active'));">
                    <svg class="mobile-footer-nav-icon" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>
                    </svg>
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
