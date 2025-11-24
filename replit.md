# Kokostore - Business Management Platform (Bumpa-Style)

## Overview
Kokostore is a comprehensive web-based business management platform inspired by the Bumpa app. It provides small businesses and vendors with tools to manage inventory, orders, customers, analytics, and more - all from a single, modern dashboard.

**Project Type:** Web Application (Bumpa Replica)  
**Version:** 2.0.0  
**Created:** November 24, 2025  
**Technology Stack:** HTML5, CSS3, JavaScript (Vanilla), PHP 8.4, LocalStorage

## Purpose
This platform replicates the core functionality and design of the Bumpa app for web, providing vendors and small businesses with:
- Complete inventory management
- Order processing and tracking
- Customer relationship management (CRM)
- Business analytics and insights
- Settings and configuration management

## Project Structure

```
kokostore/
├── index.php                          # Main application HTML
├── app.css                            # Application styles (Bumpa-inspired design)
├── app.js                             # Application logic and functionality
└── wp-content/                        # WordPress theme (legacy, not actively used)
    └── themes/
        └── kokostore/
            ├── style.css
            ├── functions.php
            ├── index.php
            └── js/
                └── responsive.js
```

## Key Features

### 1. Dashboard (Home Page)
- **Real-time Statistics**: Total Revenue, Orders, Products, Customers
- **Quick Actions**: One-click access to add products, create orders, add customers
- **Recent Orders**: View latest transactions
- **Low Stock Alerts**: Monitor inventory levels
- **Performance Metrics**: Track growth and trends

### 2. Products/Inventory Management
- Add, edit, and delete products
- Track SKU, price, and stock levels
- Product categorization
- Stock status indicators (In Stock, Low Stock, Out of Stock)
- Real-time inventory updates
- Low stock alerts and notifications

### 3. Orders Management
- Create and track customer orders
- Order status tracking (Pending, Completed, Cancelled)
- Customer information linked to orders
- Order history and total value tracking
- Quick order lookup and filtering

### 4. Customer Relationship Management (CRM)
- Customer database with contact information
- Purchase history tracking
- Total spending per customer
- Customer segmentation
- Email and phone number storage
- Address management

### 5. Analytics & Reporting
- Revenue tracking and trends
- Average order value calculations
- Conversion rate monitoring
- Customer retention metrics
- Visual performance indicators
- Growth statistics (% change month-over-month)

### 6. Settings
- Business information management
- Payment and currency settings
- Tax configuration
- Contact details
- Business profile customization

## Design Features

### Color Scheme (Bumpa-Inspired)
- **Primary Green**: #10B981 (brand color)
- **Dark Green**: #059669 (hover states)
- **Light Green**: #D1FAE5 (backgrounds, highlights)
- **Gray Scale**: Modern neutral palette for text and backgrounds
- **White**: Clean, minimalist base

### UI/UX Highlights
- Clean, minimalist design
- Card-based layout for content organization
- Responsive sidebar navigation
- Icon-based menu items
- Status badges with color coding
- Modal dialogs for data entry
- Empty states with helpful prompts
- Mobile-first responsive design

### Responsive Breakpoints
- **Desktop**: 1025px+ (full sidebar, multi-column layouts)
- **Tablet**: 769-1024px (collapsible sidebar, 2-column grids)
- **Mobile**: 0-768px (hamburger menu, single column, touch-optimized)

## Technical Implementation

### Data Storage
- **LocalStorage**: All data persists in browser localStorage
- **JSON Format**: Products, orders, and customers stored as JSON
- **Auto-save**: Changes saved immediately on submission

### Core JavaScript Class: BumpaApp
```javascript
Methods:
- loadPage(page)           // Navigate between pages
- renderProductsPage()     // Display products table
- renderOrdersPage()       // Display orders table
- renderCustomersPage()    // Display customers table
- addProduct(e)            // Add new product
- addOrder(e)              // Create new order
- addCustomer(e)           // Add new customer
- updateStats()            // Refresh dashboard statistics
- loadSampleData()         // Initialize with demo data
```

### Features
- **Single Page Application (SPA)**: No page reloads, smooth navigation
- **Modal System**: Add/edit forms in overlay modals
- **Real-time Updates**: Stats refresh automatically
- **Sample Data**: Pre-loaded demo products, orders, and customers
- **Form Validation**: Required fields and data validation

## Current State
✅ PHP 8.4 development server running on port 5000  
✅ Bumpa-style dashboard with full navigation  
✅ Products management (CRUD operations)  
✅ Orders tracking system  
✅ Customer management (CRM)  
✅ Analytics and reporting  
✅ Settings panel  
✅ Responsive design (mobile, tablet, desktop)  
✅ Sample data pre-loaded for demonstration  
✅ LocalStorage persistence  

## Usage

### Getting Started
1. Access the application through your browser
2. The app loads with sample data (4 products, 3 orders, 3 customers)
3. Navigate using the sidebar menu:
   - **Home**: Dashboard overview
   - **Products**: Manage inventory
   - **Orders**: Track sales
   - **Customers**: CRM
   - **Analytics**: Business insights
   - **Settings**: Configuration

### Adding Products
1. Click "Products" in sidebar or "Add Product" quick action
2. Click "+ Add Product" button
3. Fill in product details (name, SKU, price, stock, category)
4. Submit to add to inventory

### Creating Orders
1. Navigate to Orders page or use "New Order" quick action
2. Click "+ New Order"
3. Enter customer name, order total, and status
4. Submit to record the sale

### Managing Customers
1. Go to Customers page
2. Click "+ Add Customer"
3. Enter customer details (name, email, phone, address)
4. Submit to save customer

### Mobile Usage
- Tap the hamburger menu (≡) to open navigation
- All features fully accessible on mobile
- Touch-optimized interface
- Single-column layouts for small screens

## Sample Data Included

### Products
- T-Shirt (Blue) - ₦5,000 (25 in stock)
- Sneakers - ₦15,000 (8 in stock - Low Stock Alert)
- Backpack - ₦12,000 (5 in stock - Low Stock Alert)
- Phone Case - ₦3,000 (50 in stock)

### Orders
- Order #ORD001 - John Doe - ₦20,000 (Completed)
- Order #ORD002 - Jane Smith - ₦15,000 (Pending)
- Order #ORD003 - Mike Johnson - ₦8,000 (Completed)

### Customers
- John Doe - 5 orders, ₦45,000 total spent
- Jane Smith - 3 orders, ₦28,000 total spent
- Mike Johnson - 2 orders, ₦15,000 total spent

## Comparison with Bumpa App

### Similarities
✅ Clean, modern interface  
✅ Green brand color scheme  
✅ Dashboard with key metrics  
✅ Product/inventory management  
✅ Order tracking  
✅ Customer database  
✅ Analytics and reporting  
✅ Settings panel  
✅ Mobile-responsive design  
✅ Quick actions for common tasks  

### Key Differences
- **Platform**: Web-only (Bumpa has mobile apps)
- **Payment Processing**: Not integrated (Bumpa has Bumpa Terminal, Wallet)
- **E-commerce**: No store builder (Bumpa creates websites)
- **Integrations**: No third-party integrations (Bumpa has WhatsApp, Instagram, logistics)
- **Data Storage**: LocalStorage only (Bumpa uses cloud database)

## Future Enhancements

### Planned Features
- Backend API integration
- Database persistence (PostgreSQL)
- User authentication and multi-user support
- Payment gateway integration (Paystack, Flutterwave)
- Invoice generation and PDF export
- Email/SMS notifications
- WhatsApp integration
- Inventory import/export (CSV, Excel)
- Chart.js integration for visual analytics
- Product image uploads
- Advanced search and filtering
- Bulk operations
- Dark mode theme

## Browser Support
- Chrome/Edge (latest)
- Firefox (latest)
- Safari (latest)
- Mobile Safari (iOS 12+)
- Chrome Mobile (Android 8+)

## Performance
- Lightweight vanilla JavaScript (no heavy frameworks)
- Minimal CSS bundle
- Fast page loads
- Smooth animations
- Optimized for mobile networks

## Development
- **Server**: PHP 8.4 built-in server
- **Port**: 5000 (bound to 0.0.0.0 for Replit compatibility)
- **Hot Reload**: Manual refresh required
- **Debugging**: Browser DevTools console

## License
GNU General Public License v2 or later

## Credits
Inspired by the Bumpa app (getbumpa.com) - a business management platform for African entrepreneurs.

## Notes
- All data is stored locally in the browser
- Clearing browser data will reset the application
- Sample data loads automatically on first visit
- No server-side processing for data operations
- Designed for demonstration and prototype purposes
