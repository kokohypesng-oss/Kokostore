# Kokostore - Business Management Platform (Bumpa-Style)

## Overview
Kokostore is a comprehensive web-based business management platform inspired by the Bumpa app, with advanced mobile-first responsive design and comprehensive store customization features.

**Project Type:** Web Application (Bumpa Replica)  
**Version:** 3.1.0  
**Created:** November 24, 2025  
**Technology Stack:** HTML5, CSS3, JavaScript (Vanilla), PHP 8.4, LocalStorage

## Latest Updates (v3.1.0)
✅ **Mobile Footer Navigation Bar** - Bottom navigation for mobile with Home, Products, Orders, Customers, More  
✅ **Enhanced Mobile Header** - Quick view icon (eye), notifications, and profile icon in horizontal layout  
✅ **Quick View Icon** - Direct access to products page from mobile header  
✅ **Profile Icon** - Direct access to account settings from mobile header  
✅ **Responsive Mobile Navigation** - Proper spacing and styling for all screen sizes  

## Previous Updates (v3.0.0)
✅ **Mobile Header** - Professional greeting header for mobile devices matching Bumpa's mobile UI  
✅ **Desktop Header Navigation Bar** - Horizontal navigation for tablets and desktop views  
✅ **Advanced Color System** - 6 theme colors (Green, Blue, Purple, Pink, Cyan, Orange) with instant theme switching  
✅ **Store Customization** - Choose store color and set custom domain  
✅ **Comprehensive Settings Page** - Business info, payment settings, and branding options  
✅ **Global Theme Application** - All UI elements automatically adapt to selected color scheme  

## Key Features

### 1. Dashboard (Home Page)
- Real-time business statistics (Revenue, Orders, Products, Customers)
- Quick action cards for common tasks
- Recent orders display with status tracking
- Low stock alerts for inventory management
- Performance metrics and growth indicators

### 2. Products/Inventory Management
- Add, edit, and delete products
- Track SKU, price, and stock levels
- Product categorization system
- Stock status indicators (In Stock, Low Stock, Out of Stock)
- Real-time inventory updates

### 3. Orders Management
- Create and track customer orders
- Order status tracking (Pending, Completed, Cancelled)
- Customer information linked to orders
- Order history with total value tracking

### 4. Customer Relationship Management (CRM)
- Comprehensive customer database
- Purchase history tracking
- Total spending calculations per customer
- Contact information management
- Address storage

### 5. Analytics & Reporting
- Revenue tracking and trends
- Average order value calculations
- Conversion rate monitoring
- Customer retention metrics
- Visual performance indicators

### 6. Advanced Settings
- **Store Color Selection**: 6 professional color schemes
  - Green (Bumpa Original)
  - Blue (Professional)
  - Purple (Creative)
  - Pink (Modern)
  - Cyan (Tech)
  - Orange (Energetic)
- **Custom Store Domain**: Input custom domain for your store
- **Business Information**: Name, email, phone, address
- **Payment Settings**: Currency and tax configuration

## Design Features

### Mobile Experience
- **Header with 3 Quick Action Icons**:
  - 👁️ Quick View (access products)
  - 🔔 Notifications
  - 👤 Account Profile (access settings)
- **Footer Navigation Bar**: Home, Products, Orders, Customers, More
- **Professional Greeting Header**: "Hi, [BusinessName]"
- **Bottom Navigation**: Easy thumb-friendly access on mobile
- **Full-screen Sections**: Optimized for touch interaction

### Color Scheme System
- **Customizable Theme**: Select from 6 professional color palettes
- **Instant Theme Application**: All UI elements dynamically update
- **Brand Consistency**: Colors applied to all components (buttons, highlights, badges)
- **CSS Variables**: Global color variables for easy theme switching

### UI/UX Highlights
- Clean, minimalist design inspired by Bumpa
- Card-based layout for content organization
- Responsive sidebar navigation (desktop)
- Mobile header with greeting (mobile)
- Desktop horizontal navigation bar (tablet/desktop)
- Mobile footer navigation bar (mobile)
- Status badges with adaptive colors
- Modal dialogs for data entry
- Empty states with helpful prompts
- Touch-optimized for all devices

### Responsive Breakpoints
- **Desktop (1025px+)**: Full sidebar + desktop header nav + search bar
- **Tablet (769-1024px)**: Collapsible sidebar, horizontal mobile nav
- **Mobile (0-768px)**: Mobile header + footer nav + bottom navigation

## Technical Implementation

### Data Storage
- **LocalStorage**: All data persists in browser localStorage
- **JSON Format**: Products, orders, customers, and settings stored as JSON
- **Auto-save**: Changes saved immediately on submission
- **Settings Persistence**: Theme and domain preferences saved

### Core JavaScript Class: BumpaApp
```javascript
Key Methods:
- loadPage(page)                    // Navigate between pages
- changeStoreColor(colorKey)        // Switch theme color
- updateStoreDomain(domain)         // Save custom domain
- applyTheme()                      // Apply color scheme globally
- updateMobileHeader()              // Update greeting text
- saveSettings()                    // Persist settings to localStorage
- loadSampleData()                  // Load demo data
```

### Color Schemes Object
```javascript
colorSchemes = {
    green: { primary: '#10B981', dark: '#059669', light: '#D1FAE5', name: 'Green' },
    blue: { primary: '#3B82F6', dark: '#1D4ED8', light: '#DBEAFE', name: 'Blue' },
    purple: { primary: '#A855F7', dark: '#7C3AED', light: '#F3E8FF', name: 'Purple' },
    pink: { primary: '#EC4899', dark: '#DB2777', light: '#FCE7F3', name: 'Pink' },
    cyan: { primary: '#06B6D4', dark: '#0891B2', light: '#CFFAFE', name: 'Cyan' },
    orange: { primary: '#F59E0B', dark: '#D97706', light: '#FEF3C7', name: 'Orange' }
}
```

## Project Structure

```
kokostore/
├── index.php                          # Main application
├── app.css                            # Complete stylesheet
├── app.js                             # Application logic
└── wp-content/                        # WordPress theme (legacy)
    └── themes/kokostore/
        ├── style.css
        ├── functions.php
        ├── index.php
        └── js/responsive.js
```

## Current State
✅ PHP 8.4 development server running on port 5000  
✅ Mobile header with 3 quick action icons (quick view, notifications, profile)  
✅ Mobile footer navigation bar with 5 options (Home, Products, Orders, Customers, More)  
✅ Desktop header navigation bar  
✅ Mobile bottom navigation (footer nav bar)  
✅ 6 color theme options with instant switching  
✅ Custom store domain configuration  
✅ Complete business settings panel  
✅ Full responsive design (mobile, tablet, desktop)  
✅ Sample data pre-loaded for demonstration  
✅ LocalStorage persistence for all data  
✅ Theme persistence across sessions  

## Usage

### Mobile View
**Header Section:**
- Left: Professional greeting ("Hi, Kokostore") + subtitle ("Record a sale today 🛒")
- Right: 3 quick action buttons in horizontal line:
  - 👁️ Quick View (eye icon) - Go to Products
  - 🔔 Notifications (bell icon)
  - 👤 Account (profile icon) - Go to Settings

**Footer Navigation:**
- 5 main navigation options at bottom of screen
- Easy thumb access for mobile users
- Active state highlighting

### Tablet/Desktop View
1. Horizontal navigation bar at the top
2. Sidebar with vertical menu (desktop only)
3. Multi-column layouts for better screen usage
4. Search functionality in top bar
5. Professional workspace layout

### Customizing Your Store

#### Change Store Color
1. Go to Settings page
2. Select a color from "Choose Your Store Colour" palette
3. Theme applies instantly across entire application
4. Color preference saved to browser storage

#### Set Custom Domain
1. Go to Settings page
2. Enter your custom domain in "Custom Store Domain"
3. Enter something like: `mystore.bumpa.shop`
4. Domain is displayed and saved for reference

#### Update Business Info
1. Go to Settings page
2. Fill in Business Information section
3. Update payment settings and tax rate
4. Save changes

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
✅ Customizable color branding  
✅ Dashboard with key metrics  
✅ Product/inventory management  
✅ Order tracking  
✅ Customer database  
✅ Analytics and reporting  
✅ Settings and customization  
✅ Mobile-responsive design  
✅ Quick actions for common tasks  
✅ Professional greeting on mobile  
✅ Footer navigation for mobile  

### Key Differences
- **Data Storage**: LocalStorage only (Bumpa uses cloud)
- **Platform**: Web-only (Bumpa has mobile apps)
- **Payments**: Not integrated (Bumpa has Terminal, Wallet)
- **E-commerce**: No store builder (Bumpa creates websites)
- **Integrations**: No third-party integrations yet

## Browser Support
- Chrome/Edge (latest)
- Firefox (latest)
- Safari (latest)
- Mobile Safari (iOS 12+)
- Chrome Mobile (Android 8+)

## Performance
- Lightweight vanilla JavaScript (no heavy frameworks)
- Minimal CSS bundle (~900 lines)
- Fast page loads (<1s)
- Smooth animations and transitions
- Optimized for mobile networks
- Instant theme switching without page reload
- Footer navigation fixed at bottom for easy access

## Future Enhancements

### Planned Features
- Backend API integration with Node.js/Express
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

## Development
- **Server**: PHP 8.4 built-in server
- **Port**: 5000 (bound to 0.0.0.0 for Replit)
- **Environment**: Vanilla HTML5, CSS3, JavaScript
- **Debugging**: Browser DevTools console
- **Storage**: Browser LocalStorage API

## License
GNU General Public License v2 or later

## Credits
Inspired by the Bumpa app (getbumpa.com) - a comprehensive business management platform for African entrepreneurs.

## Notes
- All data is stored locally in the browser using LocalStorage
- Clearing browser data will reset the application
- Sample data loads automatically on first visit
- Theme preferences persist across sessions
- Custom domain and business info saved locally
- No server-side processing for data operations
- Fully functional offline (after initial load)
- Mobile view optimized for touch with footer navigation and quick-access header icons
