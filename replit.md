# Kokostore - Business Management Platform

## Overview
Kokostore is a comprehensive, mobile-first, web-based business management platform inspired by the Bumpa app. It aims to provide small businesses with a robust toolset for managing products, orders, customers, and analytics, featuring extensive store customization and a professional, responsive user interface. The project's ambition is to replicate and enhance the Bumpa app's core functionalities for entrepreneurs.

## User Preferences
I prefer simple language and detailed explanations. I want iterative development with clear communication at each step. Ask before making major changes. I prefer functional programming paradigms where applicable. Do not make changes to the `wp-content/` folder or any files within it.

## System Architecture

### UI/UX Decisions
The platform features a clean, minimalist, and modern design inspired by Bumpa, utilizing a card-based layout for content organization. It implements a responsive design optimized for mobile (780px and below), tablet, and desktop views. Key UI elements include:
- **Mobile-first approach:** Header with quick action icons, professional greeting, and a fixed footer navigation bar with 5 icons for easy access.
- **Desktop/Tablet:** Sidebar navigation, horizontal header navigation with logo and menu items, and a multi-column metrics grid.
- **Customizable Themes:** 6 professional color schemes are available, allowing instant theme application across all UI components via CSS variables for brand consistency.
- **Dashboard:** Features a gradient banner, upgraded total sales card with horizontal value/change layout, period filter dropdown, 4 key metric boxes, a daily report generation button.
- **Professional Tables:** Compact, Shopify/Airtable-style tables with subtle hover effects, optimized badge pills for status indicators, and responsive column handling.
- **Product Management:** Tab navigation for Products and Collections, search functionality, filtering options (All, Published, Unpublished), and empty states with call-to-actions.

### Technical Implementations
- **Technology Stack:** HTML5, CSS3, JavaScript (Vanilla), PHP 8.4.
- **Data Storage:** All application data (products, orders, customers, settings) is persisted locally in the browser using `LocalStorage` in JSON format. Changes are auto-saved on submission, and theme/domain preferences persist across sessions.
- **Core Logic:** Managed by a `BumpaApp` JavaScript class, handling page rendering, metric updates, sales calculations, theme switching, data persistence, and report generation.
- **Performance:** Designed to be lightweight with vanilla JavaScript and a minimal CSS bundle, ensuring fast page loads and smooth transitions.

### Feature Specifications
- **Dashboard:** Real-time sales display, dropdown-based period filtering (Today, This Week, This Month), 4 key performance indicators (Updating Orders, Products Sold, New Customers, Website Visits), and horizontal sales metrics display.
- **Products/Inventory Management:** Add, edit, delete products; track SKU, price, stock levels; categorization; stock status indicators; real-time inventory updates with professional table display.
- **Orders Management:** Create, track, and manage order statuses (Pending, Completed, Cancelled); link customer information; track order history with compact, professional tables.
- **Customer Relationship Management (CRM):** Comprehensive customer database with purchase history, total spending, and contact information in organized tables.
- **Analytics & Reporting:** Tracks revenue trends, average order value, conversion rates, and customer retention metrics.
- **Settings & More:** Store color selection, custom store domain configuration, business information management, payment settings, notifications, and account settings.

### System Design Choices
- **Responsive Breakpoints:** Optimized for Desktop (781px+), Tablet (781-780px), and Mobile (780px and below) with distinct layouts.
- **Modular JavaScript:** `BumpaApp` class encapsulates core functionalities for maintainability.
- **CSS Variable Theming:** Enables dynamic and instant theme switching.
- **Local Persistence:** Utilizes `LocalStorage` for immediate data persistence without server-side dependencies for core features.
- **Desktop Header Navigation:** Visible on desktop (1024px+), hidden on tablet/mobile with dropdown-controlled sales period filters.
- **Professional Table Styling:** Compact padding (0.35rem 0.5rem for cells), subtle borders, hover effects, and optimized badge pills (0.2rem 0.5rem padding, 0.65rem font size).

## Recent Changes (November 26, 2025)
- **Desktop Header Navigation Fixed:** Desktop header nav bar now displays properly on large screens with logo and menu items (Home, Products, Orders, Customers, Analytics, Settings).
- **Footer Navigation Optimization:** Mobile footer navigation now hidden on desktop and tablet views (1024px and above), only visible on mobile (780px and below).
- **Total Sales Card Upgrade:** Enhanced with gradient background (white to light gray), increased typography size (3rem primary color), and professional styling with improved shadows.
- **Period Filter Dropdown:** Converted from button-based filters to dropdown select menu with custom styling and arrow icon for cleaner interface.
- **Horizontal Metrics Alignment:** Sales value and change percentage now arranged horizontally on a single line with proper centering and 1rem spacing.
- **Professional Table Styling:** Tables now feature Shopify/Airtable-inspired compact design with reduced padding, subtle borders, row hover effects (light gray background).
- **Badge Pills Optimization:** Compacted badge pills (padding: 0.2rem 0.5rem, font-size: 0.65rem, line-height: 1) to fit seamlessly in table cells without disrupting layout on any screen size. Added badge-info class for additional status options.
- **JavaScript Error Resolution:** Fixed dropdown filter functionality that was causing "null reading classList" errors by updating updateSalesPeriod method.

## External Dependencies
- Font Awesome 6.4.0 CDN (cdnjs.cloudflare.com) for icon library
- None. The project currently relies solely on client-side browser capabilities and a local PHP development server (beyond Font Awesome icons).
