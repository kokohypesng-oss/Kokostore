<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kokostore - Business Management Platform</title>
    <link rel="stylesheet" href="app.css">
</head>
<body>
    <div class="app-container">
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
                    Home
                </a>
                
                <a class="nav-item" data-page="products">
                    <svg class="nav-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                    </svg>
                    Products
                </a>
                
                <a class="nav-item" data-page="orders">
                    <svg class="nav-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                    Orders
                </a>
                
                <a class="nav-item" data-page="customers">
                    <svg class="nav-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                    Customers
                </a>
                
                <a class="nav-item" data-page="analytics">
                    <svg class="nav-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                    Analytics
                </a>
                
                <a class="nav-item" data-page="settings">
                    <svg class="nav-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    Settings
                </a>
            </nav>
        </aside>
        
        <!-- Main Content -->
        <main class="main-content">
            <!-- Top Bar -->
            <div class="top-bar">
                <button id="mobile-menu-btn" class="mobile-menu-btn">
                    <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
                
                <div class="search-bar">
                    <svg class="search-icon" width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                    <input type="text" placeholder="Search products, orders, customers...">
                </div>
                
                <div class="top-bar-actions">
                    <button class="icon-btn">
                        <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                        </svg>
                        <span class="badge">3</span>
                    </button>
                    
                    <div class="user-profile">
                        <div class="avatar">KS</div>
                        <span style="font-weight: 500; display: none;">Admin</span>
                    </div>
                </div>
            </div>
            
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
                                <div class="stat-icon" style="background: #D1FAE5; color: #059669;">
                                    💰
                                </div>
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
                                <div class="stat-icon" style="background: #DBEAFE; color: #1D4ED8;">
                                    📦
                                </div>
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
                                <div class="stat-icon" style="background: #FEF3C7; color: #D97706;">
                                    🏷️
                                </div>
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
                                <div class="stat-icon" style="background: #E9D5FF; color: #7C3AED;">
                                    👥
                                </div>
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
                        <button class="btn btn-primary" onclick="app.openModal('add-product-modal')">
                            + Add Product
                        </button>
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
                        <button class="btn btn-primary" onclick="app.openModal('add-order-modal')">
                            + New Order
                        </button>
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
                        <button class="btn btn-primary" onclick="app.openModal('add-customer-modal')">
                            + Add Customer
                        </button>
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
                                    <div class="stat-value" id="stat-revenue">₦0</div>
                                </div>
                            </div>
                            <div class="stat-change positive">
                                <span>↗</span> 12% increase
                            </div>
                        </div>
                        
                        <div class="stat-card">
                            <div class="stat-header">
                                <div>
                                    <div class="stat-label">Average Order Value</div>
                                    <div class="stat-value">₦7,333</div>
                                </div>
                            </div>
                            <div class="stat-change positive">
                                <span>↗</span> 5% increase
                            </div>
                        </div>
                        
                        <div class="stat-card">
                            <div class="stat-header">
                                <div>
                                    <div class="stat-label">Conversion Rate</div>
                                    <div class="stat-value">3.2%</div>
                                </div>
                            </div>
                            <div class="stat-change negative">
                                <span>↘</span> 0.3% decrease
                            </div>
                        </div>
                        
                        <div class="stat-card">
                            <div class="stat-header">
                                <div>
                                    <div class="stat-label">Customer Retention</div>
                                    <div class="stat-value">68%</div>
                                </div>
                            </div>
                            <div class="stat-change positive">
                                <span>↗</span> 2% increase
                            </div>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Sales Overview</h2>
                        </div>
                        <div class="card-body">
                            <div style="text-align: center; padding: 3rem; color: var(--gray-500);">
                                <div style="font-size: 3rem; margin-bottom: 1rem;">📊</div>
                                <p>Chart visualization will be displayed here</p>
                                <p style="font-size: 0.875rem; margin-top: 0.5rem;">Integrate with Chart.js or similar library for detailed analytics</p>
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
        </main>
    </div>
    
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
