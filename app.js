// Bumpa Web App JavaScript

class BumpaApp {
    constructor() {
        this.currentPage = 'home';
        this.products = JSON.parse(localStorage.getItem('products')) || [];
        this.orders = JSON.parse(localStorage.getItem('orders')) || [];
        this.customers = JSON.parse(localStorage.getItem('customers')) || [];
        this.settings = JSON.parse(localStorage.getItem('settings')) || this.getDefaultSettings();
        
        this.colorSchemes = {
            green: { primary: '#10B981', dark: '#059669', light: '#D1FAE5', name: 'Green' },
            blue: { primary: '#3B82F6', dark: '#1D4ED8', light: '#DBEAFE', name: 'Blue' },
            purple: { primary: '#A855F7', dark: '#7C3AED', light: '#F3E8FF', name: 'Purple' },
            pink: { primary: '#EC4899', dark: '#DB2777', light: '#FCE7F3', name: 'Pink' },
            cyan: { primary: '#06B6D4', dark: '#0891B2', light: '#CFFAFE', name: 'Cyan' },
            orange: { primary: '#F59E0B', dark: '#D97706', light: '#FEF3C7', name: 'Orange' }
        };
        
        this.init();
    }
    
    getDefaultSettings() {
        return {
            storeColor: 'green',
            storeDomain: 'kokostore.bumpa.shop',
            businessName: 'Kokostore',
            businessEmail: 'contact@kokostore.com',
            businessPhone: '+234 800 000 0000',
            userName: 'Oyin'
        };
    }
    
    init() {
        this.setupEventListeners();
        this.applyTheme();
        this.updateMobileHeader();
        this.loadPage('home');
        this.updateStats();
        
        if (this.products.length === 0) {
            this.loadSampleData();
        }
    }
    
    setupEventListeners() {
        document.querySelectorAll('.nav-item').forEach(item => {
            item.addEventListener('click', (e) => {
                e.preventDefault();
                const page = item.dataset.page;
                this.loadPage(page);
            });
        });
        
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        if (mobileMenuBtn) {
            mobileMenuBtn.addEventListener('click', () => {
                document.querySelector('.sidebar').classList.toggle('open');
            });
        }
        
        document.querySelectorAll('.close-modal').forEach(btn => {
            btn.addEventListener('click', () => this.closeAllModals());
        });
        
        document.querySelectorAll('.modal').forEach(modal => {
            modal.addEventListener('click', (e) => {
                if (e.target === modal) {
                    this.closeAllModals();
                }
            });
        });
    }
    
    loadPage(page) {
        this.currentPage = page;
        
        document.querySelectorAll('.nav-item').forEach(item => {
            item.classList.remove('active');
            if (item.dataset.page === page) {
                item.classList.add('active');
            }
        });
        
        document.querySelectorAll('.page-content').forEach(content => {
            content.classList.add('hidden');
        });
        
        const pageContent = document.getElementById(`${page}-page`);
        if (pageContent) {
            pageContent.classList.remove('hidden');
        }
        
        this.updateIconBounce();
        
        switch(page) {
            case 'home':
                this.renderHomePage();
                break;
            case 'products':
                this.renderProductsPage();
                break;
            case 'orders':
                this.renderOrdersPage();
                break;
            case 'customers':
                this.renderCustomersPage();
                break;
            case 'analytics':
                this.renderAnalyticsPage();
                break;
            case 'settings':
                this.renderSettingsPage();
                break;
            case 'more':
                this.renderMorePage();
                break;
        }
        
        if (window.innerWidth < 780) {
            document.querySelector('.sidebar').classList.remove('open');
        }
    }
    
    updateIconBounce() {
        // Remove bounce from all nav icons
        document.querySelectorAll('.nav-icon').forEach(icon => {
            icon.classList.remove('fa-bounce');
        });
        
        document.querySelectorAll('.mobile-footer-nav-icon').forEach(icon => {
            icon.classList.remove('fa-bounce');
        });
        
        // Add bounce to active nav item icon
        const activeNavItem = document.querySelector('.nav-item.active');
        if (activeNavItem) {
            const icon = activeNavItem.querySelector('.nav-icon');
            if (icon) {
                icon.classList.add('fa-bounce');
            }
        }
        
        // Add bounce to active mobile footer nav item icon
        const activeMobileItem = document.querySelector('.mobile-footer-nav-item.active');
        if (activeMobileItem) {
            const icon = activeMobileItem.querySelector('.mobile-footer-nav-icon');
            if (icon) {
                icon.classList.add('fa-bounce');
            }
        }
    }
    
    renderHomePage() {
        this.updateStats();
        this.updateMetrics();
        this.updateSalesDisplay();
        this.updateWebsiteSummary();
    }
    
    updateWebsiteSummary() {
        const viewsElement = document.getElementById('website-views');
        const statusElement = document.getElementById('website-status');
        const linkElement = document.getElementById('website-link');
        
        if (viewsElement) {
            viewsElement.textContent = '2,340';
        }
        
        if (statusElement) {
            statusElement.textContent = 'Online';
            statusElement.classList.add('website-status-online');
        }
        
        if (linkElement) {
            linkElement.textContent = this.settings.storeDomain;
        }
    }
    
    updateMetrics() {
        // Update metric boxes
        document.getElementById('metric-orders').textContent = this.orders.length;
        document.getElementById('metric-products').textContent = this.products.length;
        document.getElementById('metric-customers').textContent = this.customers.length;
        
        // Calculate products sold (all products total stock change or simple count)
        const totalProductsSold = this.orders.reduce((sum) => sum + 1, 0);
        document.getElementById('metric-products').textContent = this.products.reduce((sum, p) => sum + (parseInt(p.stock) || 0), 0);
    }
    
    updateSalesDisplay() {
        // Calculate total sales for today
        const totalSales = this.orders.reduce((sum, order) => sum + parseFloat(order.total || 0), 0);
        document.getElementById('total-sales').textContent = '₦' + totalSales.toLocaleString();
    }
    
    updateSalesPeriod(period) {
        // In a real app, this would filter data by date range
        const totalSales = this.orders.reduce((sum, order) => sum + parseFloat(order.total || 0), 0);
        document.getElementById('total-sales').textContent = '₦' + totalSales.toLocaleString();
        
        const changeText = {
            today: '↗ 12% from yesterday',
            week: '↗ 8% from last week',
            month: '↗ 5% from last month'
        };
        document.getElementById('sales-change').textContent = changeText[period] || '↗ 12% from last period';
    }
    
    generateDailyReport() {
        alert('Daily Report Generated!\n\nDate: ' + new Date().toLocaleDateString() + '\n\nTotal Orders: ' + this.orders.length + '\nTotal Sales: ₦' + this.orders.reduce((sum, o) => sum + parseFloat(o.total || 0), 0).toLocaleString() + '\nNew Customers: ' + this.customers.length);
    }
    
    renderProductsPage() {
        const container = document.getElementById('products-content');
        if (!container) return;
        
        if (this.products.length === 0) {
            container.innerHTML = `
                <div class="products-empty-state">
                    <div class="products-empty-icon">📦</div>
                    <div class="products-empty-title">You have no products yet</div>
                    <div class="products-empty-description">Start by adding your first product</div>
                    <button class="btn btn-primary" onclick="app.openModal('add-product-modal')" style="padding: 0.75rem 1.5rem;">Add Product</button>
                </div>
            `;
            return;
        }
        
        const table = `
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
                            <tbody>
                                ${this.products.map((product, index) => `
                                    <tr>
                                        <td>
                                            <div style="display: flex; align-items: center; gap: 0.75rem;">
                                                <div class="product-image-card" style="width: 48px; height: 48px; background: var(--gray-100); border-radius: 0.5rem; overflow: hidden;">
                                                    ${product.image ? `<img src="${product.image}" style="width: 100%; height: 100%; object-fit: cover;">` : '📦'}
                                                </div>
                                                <strong>${product.name}</strong>
                                            </div>
                                        </td>
                                        <td>${product.sku || '-'}</td>
                                        <td>₦${parseFloat(product.price).toLocaleString()}</td>
                                        <td>${product.stock || 0}</td>
                                        <td><span class="badge-pill ${product.stock > 10 ? 'badge-success' : product.stock > 0 ? 'badge-warning' : 'badge-danger'}">${product.stock > 10 ? 'In Stock' : product.stock > 0 ? 'Low Stock' : 'Out of Stock'}</span></td>
                                        <td>
                                            <button class="btn btn-secondary" style="padding: 0.375rem 0.75rem; font-size: 0.75rem;" onclick="app.editProduct(${index})">Edit</button>
                                            <button class="btn btn-outline" style="padding: 0.375rem 0.75rem; font-size: 0.75rem; color: var(--red);" onclick="app.deleteProduct(${index})">Delete</button>
                                        </td>
                                    </tr>
                                `).join('')}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        `;
        container.innerHTML = table;
    }
    
    renderOrdersPage() {
        const tbody = document.getElementById('orders-tbody');
        if (!tbody) return;
        
        if (this.orders.length === 0) {
            tbody.innerHTML = `
                <tr>
                    <td colspan="6">
                        <div class="empty-state">
                            <div class="empty-title">No orders yet</div>
                            <div class="empty-description">Your orders will appear here</div>
                            <button class="btn btn-primary" onclick="app.openModal('add-order-modal')">
                                + New Order
                            </button>
                        </div>
                    </td>
                </tr>
            `;
            return;
        }
        
        tbody.innerHTML = this.orders.map((order, index) => `
            <tr>
                <td><strong>#${order.id}</strong></td>
                <td>${order.customer}</td>
                <td>${new Date(order.date).toLocaleDateString()}</td>
                <td>₦${parseFloat(order.total).toLocaleString()}</td>
                <td><span class="badge-pill ${order.status === 'completed' ? 'badge-success' : order.status === 'pending' ? 'badge-warning' : 'badge-danger'}">${order.status}</span></td>
                <td>
                    <button class="btn btn-secondary" style="padding: 0.375rem 0.75rem; font-size: 0.75rem;" onclick="app.viewOrder(${index})">View</button>
                </td>
            </tr>
        `).join('');
    }
    
    renderCustomersPage() {
        const tbody = document.getElementById('customers-tbody');
        if (!tbody) return;
        
        if (this.customers.length === 0) {
            tbody.innerHTML = `
                <tr>
                    <td colspan="5">
                        <div class="empty-state">
                            <div class="empty-title">No customers yet</div>
                            <div class="empty-description">Your customers will appear here</div>
                            <button class="btn btn-primary" onclick="app.openModal('add-customer-modal')">
                                + Add Customer
                            </button>
                        </div>
                    </td>
                </tr>
            `;
            return;
        }
        
        tbody.innerHTML = this.customers.map((customer, index) => `
            <tr>
                <td>
                    <div style="display: flex; align-items: center; gap: 0.75rem;">
                        <div class="avatar" style="width: 32px; height: 32px; font-size: 0.875rem;">${customer.name.charAt(0)}</div>
                        <strong>${customer.name}</strong>
                    </div>
                </td>
                <td>${customer.email || '-'}</td>
                <td>${customer.phone}</td>
                <td>${customer.orders || 0}</td>
                <td>₦${parseFloat(customer.totalSpent || 0).toLocaleString()}</td>
            </tr>
        `).join('');
    }
    
    renderAnalyticsPage() {
        this.updateStats();
    }
    
    renderSettingsPage() {
        this.renderStoreColorSettings();
        this.renderStoreDomainSettings();
    }
    
    renderMorePage() {
        // More page is static in HTML
    }
    
    renderStoreColorSettings() {
        const container = document.getElementById('color-palette');
        if (!container) return;
        
        container.innerHTML = Object.entries(this.colorSchemes).map(([key, scheme]) => `
            <div class="color-option ${this.settings.storeColor === key ? 'selected' : ''}" onclick="app.changeStoreColor('${key}')">
                <div class="color-swatch" style="background: ${scheme.primary};"></div>
                <div class="color-name">${scheme.name}</div>
            </div>
        `).join('');
    }
    
    renderStoreDomainSettings() {
        const domainInput = document.getElementById('store-domain-input');
        if (domainInput) {
            domainInput.value = this.settings.storeDomain;
        }
    }
    
    changeStoreColor(colorKey) {
        this.settings.storeColor = colorKey;
        this.saveSettings();
        this.applyTheme();
        this.renderStoreColorSettings();
    }
    
    updateStoreDomain(domain) {
        this.settings.storeDomain = domain;
        this.saveSettings();
    }
    
    applyTheme() {
        const scheme = this.colorSchemes[this.settings.storeColor];
        if (scheme) {
            document.documentElement.style.setProperty('--store-primary', scheme.primary);
            document.documentElement.style.setProperty('--store-dark', scheme.dark);
            document.documentElement.style.setProperty('--store-light', scheme.light);
        }
    }
    
    updateMobileHeader() {
        // Keep the default mobile header name from HTML as-is
    }
    
    saveSettings() {
        localStorage.setItem('settings', JSON.stringify(this.settings));
    }
    
    updateStats() {
        // Check if old stat elements exist before updating
        const statRevenue = document.getElementById('stat-revenue');
        const statOrders = document.getElementById('stat-orders');
        const statProducts = document.getElementById('stat-products');
        const statCustomers = document.getElementById('stat-customers');
        
        if (!statRevenue && !statOrders && !statProducts && !statCustomers) {
            // Old stats layout doesn't exist, skip
            return;
        }
        
        const totalRevenue = this.orders.reduce((sum, order) => sum + parseFloat(order.total || 0), 0);
        const totalOrders = this.orders.length;
        const totalProducts = this.products.length;
        const totalCustomers = this.customers.length;
        
        if (statRevenue) statRevenue.textContent = `₦${totalRevenue.toLocaleString()}`;
        if (statOrders) statOrders.textContent = totalOrders;
        if (statProducts) statProducts.textContent = totalProducts;
        if (statCustomers) statCustomers.textContent = totalCustomers;
    }
    
    renderRecentOrders() {
        const container = document.getElementById('recent-orders');
        if (!container) return;
        
        const recentOrders = this.orders.slice(0, 5);
        
        if (recentOrders.length === 0) {
            container.innerHTML = '<div class="empty-state"><div class="empty-description">No recent orders</div></div>';
            return;
        }
        
        container.innerHTML = recentOrders.map(order => `
            <tr>
                <td><strong>#${order.id}</strong></td>
                <td>${order.customer}</td>
                <td>₦${parseFloat(order.total).toLocaleString()}</td>
                <td><span class="badge-pill ${order.status === 'completed' ? 'badge-success' : 'badge-warning'}">${order.status}</span></td>
            </tr>
        `).join('');
    }
    
    renderLowStockAlerts() {
        const container = document.getElementById('low-stock-alerts');
        if (!container) return;
        
        const lowStockProducts = this.products.filter(p => p.stock < 10);
        
        if (lowStockProducts.length === 0) {
            container.innerHTML = '<div class="empty-state"><div class="empty-description">All products are well stocked</div></div>';
            return;
        }
        
        container.innerHTML = lowStockProducts.map(product => `
            <tr>
                <td><strong>${product.name}</strong></td>
                <td>${product.stock} units</td>
                <td><span class="badge-pill ${product.stock > 5 ? 'badge-warning' : 'badge-danger'}">${product.stock > 5 ? 'Low Stock' : 'Critical'}</span></td>
            </tr>
        `).join('');
    }
    
    openModal(modalId) {
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.classList.add('active');
        }
    }
    
    closeAllModals() {
        document.querySelectorAll('.modal').forEach(modal => {
            modal.classList.remove('active');
        });
    }
    
    addProduct(e) {
        e.preventDefault();
        const form = e.target;
        const formData = new FormData(form);
        
        const product = {
            name: formData.get('name'),
            sku: formData.get('sku'),
            price: formData.get('price'),
            stock: formData.get('stock'),
            category: formData.get('category'),
            description: formData.get('description')
        };
        
        this.products.push(product);
        localStorage.setItem('products', JSON.stringify(this.products));
        
        form.reset();
        this.closeAllModals();
        this.renderProductsPage();
        this.updateStats();
    }
    
    deleteProduct(index) {
        if (confirm('Are you sure you want to delete this product?')) {
            this.products.splice(index, 1);
            localStorage.setItem('products', JSON.stringify(this.products));
            this.renderProductsPage();
            this.updateStats();
        }
    }
    
    addOrder(e) {
        e.preventDefault();
        const form = e.target;
        const formData = new FormData(form);
        
        const order = {
            id: `ORD${Date.now()}`,
            customer: formData.get('customer'),
            total: formData.get('total'),
            status: formData.get('status'),
            date: new Date().toISOString()
        };
        
        this.orders.push(order);
        localStorage.setItem('orders', JSON.stringify(this.orders));
        
        form.reset();
        this.closeAllModals();
        this.renderOrdersPage();
        this.updateStats();
    }
    
    addCustomer(e) {
        e.preventDefault();
        const form = e.target;
        const formData = new FormData(form);
        
        const customer = {
            name: formData.get('name'),
            email: formData.get('email'),
            phone: formData.get('phone'),
            address: formData.get('address'),
            orders: 0,
            totalSpent: 0
        };
        
        this.customers.push(customer);
        localStorage.setItem('customers', JSON.stringify(this.customers));
        
        form.reset();
        this.closeAllModals();
        this.renderCustomersPage();
        this.updateStats();
    }
    
    loadSampleData() {
        this.products = [
            { name: 'T-Shirt (Blue)', sku: 'TS001', price: 5000, stock: 25, category: 'Clothing' },
            { name: 'Sneakers', sku: 'SN001', price: 15000, stock: 8, category: 'Footwear' },
            { name: 'Backpack', sku: 'BP001', price: 12000, stock: 5, category: 'Accessories' },
            { name: 'Phone Case', sku: 'PC001', price: 3000, stock: 50, category: 'Electronics' }
        ];
        
        this.orders = [
            { id: 'ORD001', customer: 'John Doe', total: 20000, status: 'completed', date: new Date().toISOString() },
            { id: 'ORD002', customer: 'Jane Smith', total: 15000, status: 'pending', date: new Date().toISOString() },
            { id: 'ORD003', customer: 'Mike Johnson', total: 8000, status: 'completed', date: new Date().toISOString() }
        ];
        
        this.customers = [
            { name: 'John Doe', email: 'john@example.com', phone: '08012345678', orders: 5, totalSpent: 45000 },
            { name: 'Jane Smith', email: 'jane@example.com', phone: '08087654321', orders: 3, totalSpent: 28000 },
            { name: 'Mike Johnson', email: 'mike@example.com', phone: '08011112222', orders: 2, totalSpent: 15000 }
        ];
        
        localStorage.setItem('products', JSON.stringify(this.products));
        localStorage.setItem('orders', JSON.stringify(this.orders));
        localStorage.setItem('customers', JSON.stringify(this.customers));
    }
}

let app;
document.addEventListener('DOMContentLoaded', () => {
    app = new BumpaApp();
});
