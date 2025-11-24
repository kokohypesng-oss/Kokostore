// Bumpa Web App JavaScript

class BumpaApp {
    constructor() {
        this.currentPage = 'home';
        this.products = JSON.parse(localStorage.getItem('products')) || [];
        this.orders = JSON.parse(localStorage.getItem('orders')) || [];
        this.customers = JSON.parse(localStorage.getItem('customers')) || [];
        
        this.init();
    }
    
    init() {
        this.setupEventListeners();
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
        }
        
        if (window.innerWidth < 768) {
            document.querySelector('.sidebar').classList.remove('open');
        }
    }
    
    renderHomePage() {
        this.updateStats();
        this.renderRecentOrders();
        this.renderLowStockAlerts();
    }
    
    renderProductsPage() {
        const tbody = document.getElementById('products-tbody');
        if (!tbody) return;
        
        if (this.products.length === 0) {
            tbody.innerHTML = `
                <tr>
                    <td colspan="6">
                        <div class="empty-state">
                            <div class="empty-title">No products yet</div>
                            <div class="empty-description">Add your first product to get started</div>
                            <button class="btn btn-primary" onclick="app.openModal('add-product-modal')">
                                + Add Product
                            </button>
                        </div>
                    </td>
                </tr>
            `;
            return;
        }
        
        tbody.innerHTML = this.products.map((product, index) => `
            <tr>
                <td>
                    <div style="display: flex; align-items: center; gap: 0.75rem;">
                        <div style="width: 48px; height: 48px; background: var(--gray-100); border-radius: 0.5rem; overflow: hidden;">
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
        `).join('');
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
        // Settings page is static for now
    }
    
    updateStats() {
        const totalRevenue = this.orders.reduce((sum, order) => sum + parseFloat(order.total), 0);
        const totalOrders = this.orders.length;
        const totalProducts = this.products.length;
        const totalCustomers = this.customers.length;
        
        document.getElementById('stat-revenue').textContent = `₦${totalRevenue.toLocaleString()}`;
        document.getElementById('stat-orders').textContent = totalOrders;
        document.getElementById('stat-products').textContent = totalProducts;
        document.getElementById('stat-customers').textContent = totalCustomers;
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
