# Kokostore - Business Management Platform

## Overview
Kokostore is a comprehensive, mobile-first, web-based business management platform inspired by the Bumpa app. It aims to provide small businesses with a robust toolset for managing products, orders, customers, and analytics, featuring extensive store customization and a professional, responsive user interface. The project's ambition is to replicate and enhance the Bumpa app's core functionalities for entrepreneurs.

## User Preferences
I prefer simple language and detailed explanations. I want iterative development with clear communication at each step. Ask before making major changes. I prefer functional programming paradigms where applicable. Do not make changes to the `wp-content/` folder or any files within it.

## System Architecture

### UI/UX Decisions
The platform features a clean, minimalist, and modern design inspired by Bumpa, utilizing a card-based layout for content organization. It implements a responsive design optimized for mobile (780px and below), tablet, and desktop views. Key UI elements include:
- **Mobile-first approach:** Header with quick action icons, professional greeting, and a fixed footer navigation bar with 5 icons for easy access.
- **Desktop/Tablet:** Sidebar navigation, horizontal header navigation, and a multi-column metrics grid.
- **Customizable Themes:** 6 professional color schemes are available, allowing instant theme application across all UI components via CSS variables for brand consistency.
- **Dashboard:** Features a gradient banner, total sales analytics with period filters, 4 key metric boxes, a daily report generation button, and 4 analytics sliders with visual bar charts for 6-day trend visualization.
- **Product Management:** Tab navigation for Products and Collections, search functionality, filtering options (All, Published, Unpublished), and empty states with call-to-actions.

### Technical Implementations
- **Technology Stack:** HTML5, CSS3, JavaScript (Vanilla), PHP 8.4.
- **Data Storage:** All application data (products, orders, customers, settings) is persisted locally in the browser using `LocalStorage` in JSON format. Changes are auto-saved on submission, and theme/domain preferences persist across sessions.
- **Core Logic:** Managed by a `BumpaApp` JavaScript class, handling page rendering, metric updates, sales calculations, theme switching, data persistence, and report generation.
- **Performance:** Designed to be lightweight with vanilla JavaScript and a minimal CSS bundle, ensuring fast page loads and smooth transitions.

### Feature Specifications
- **Dashboard:** Real-time sales display, period-based filtering (Today, Week, Month), 4 key performance indicators (Updating Orders, Products Sold, New Customers, Website Visits), and visual trend analytics for revenue, orders, customer growth, and traffic.
- **Products/Inventory Management:** Add, edit, delete products; track SKU, price, stock levels; categorization; stock status indicators; real-time inventory updates.
- **Orders Management:** Create, track, and manage order statuses (Pending, Completed, Cancelled); link customer information; track order history.
- **Customer Relationship Management (CRM):** Comprehensive customer database with purchase history, total spending, and contact information.
- **Analytics & Reporting:** Tracks revenue trends, average order value, conversion rates, and customer retention metrics.
- **Settings & More:** Store color selection, custom store domain configuration, business information management, payment settings, notifications, and account settings.

### System Design Choices
- **Responsive Breakpoints:** Optimized for Desktop (781px+), Tablet (781-780px), and Mobile (780px and below) with distinct layouts.
- **Modular JavaScript:** `BumpaApp` class encapsulates core functionalities for maintainability.
- **CSS Variable Theming:** Enables dynamic and instant theme switching.
- **Local Persistence:** Utilizes `LocalStorage` for immediate data persistence without server-side dependencies for core features.

## Recent Changes (November 24, 2025)
- **Font Awesome Icon Update:** All 18 icons updated to use `fa-thin` style with `fa-bounce` animation, increased size by 10px (1.5rem) for better visibility across navigation, headers, and footers.
- **Home Page Banner Redesign:** Title and subtitle moved above the banner to separate page header from visual banner. Banner now displays as a 100% width × 100px height gradient SVG with centered welcome message. Banner uses store primary color gradient.
- **Banner Image Structure:** Created SVG-based banner with gradient background (green gradient from primary to dark color) featuring centered white text "Welcome to Kokostore Dashboard".

## External Dependencies
- Font Awesome 6.4.0 CDN (cdnjs.cloudflare.com) for icon library
- None. The project currently relies solely on client-side browser capabilities and a local PHP development server (beyond Font Awesome icons).