# Kokostore - Responsive WordPress Theme

## Overview
Kokostore is a responsive WordPress theme designed specifically for vendor applications and e-commerce platforms. The theme is fully optimized for laptops, tablets, and phones with comprehensive responsive functionality built into the core functions.php file.

**Project Type:** WordPress Theme  
**Version:** 1.0.0  
**Created:** November 24, 2025  
**Technology Stack:** PHP 8.4, WordPress, CSS3, JavaScript (jQuery)

## Purpose
This theme provides a complete responsive solution for vendor marketplaces, ensuring optimal display and functionality across all device types - from large desktop monitors to small mobile phones.

## Project Structure

```
kokostore/
├── index.php                          # Demo page (development preview)
├── wp-content/
│   └── themes/
│       └── kokostore/
│           ├── style.css              # Main stylesheet with responsive breakpoints
│           ├── functions.php          # Core theme functions with device detection
│           ├── index.php              # WordPress template
│           └── js/
│               └── responsive.js      # Client-side responsive features
```

## Key Features

### Responsive Functionality (functions.php)
1. **Device Detection** - Server-side detection for mobile, tablet, and desktop devices
2. **Responsive Image Sizes** - Three custom image sizes optimized for each device type:
   - `kokostore-laptop`: 1200x600px
   - `kokostore-tablet`: 768x500px
   - `kokostore-phone`: 480x320px
3. **Dynamic Excerpt Length** - Adjusts content length based on device:
   - Mobile: 20 words
   - Tablet: 30 words
   - Desktop: 55 words
4. **Viewport Meta Tag** - Automatic insertion for proper mobile scaling
5. **Body Classes** - Device-specific CSS classes for targeted styling
6. **Custom Breakpoints** - Configurable via WordPress Customizer
7. **WooCommerce Support** - Full e-commerce integration with responsive features
8. **Performance Optimization** - Lazy loading, preconnect hints, and resource optimization

### Responsive Design Breakpoints
- **Mobile (Phone):** 0-480px
- **Tablet:** 481-768px
- **Laptop:** 769-1024px
- **Desktop:** 1025px+

### JavaScript Features (responsive.js)
- Automatic viewport detection
- Mobile menu toggle functionality
- Touch event handling for mobile devices
- Orientation change support
- Lazy image loading
- Smooth scroll animations
- Responsive grid adjustments

## Current State
✅ PHP 8.4 installed and configured  
✅ WordPress theme structure created  
✅ functions.php with comprehensive responsive features  
✅ Responsive CSS with mobile-first approach  
✅ JavaScript enhancements for interactivity  
✅ Demo page for testing responsive functionality  
✅ Development server running on port 5000  

## Usage

### Development
The theme is currently running in demo mode. Access the preview to see responsive features in action:
- Resize browser window to test different breakpoints
- Use device emulation in browser DevTools
- The device type and screen width are displayed at the top

### WordPress Integration
To use this theme in a WordPress installation:
1. Copy the `wp-content/themes/kokostore` directory to your WordPress installation
2. Activate the theme in WordPress Admin → Appearance → Themes
3. Configure responsive settings in Customizer → Responsive Settings

## Responsive Features Demonstration

### For Laptops
- Multi-column product grid (up to 4 columns)
- Full navigation menu display
- Larger images and content
- Enhanced hover effects

### For Tablets
- 2-3 column product grid
- Adjusted spacing and padding
- Medium-sized images
- Touch-friendly buttons

### For Phones
- Single column layout
- Collapsible mobile menu
- Optimized images for mobile bandwidth
- Large, touch-friendly tap targets
- Minimal text for better readability

## Theme Functions

### Device Detection Functions
```php
kokostore_detect_device()           // Returns device type information
kokostore_body_classes()            // Adds device classes to body
kokostore_get_responsive_image()    // Returns device-optimized images
```

### Responsive Utilities
```php
kokostore_custom_excerpt_length()   // Device-specific excerpt lengths
kokostore_viewport_meta()           // Adds viewport meta tag
kokostore_responsive_image_sizes()  // Calculates responsive image sizes
```

## Dependencies
- PHP 8.4+
- WordPress 5.0+ (for full functionality)
- Modern browser with JavaScript enabled
- jQuery (included with WordPress)

## Configuration
The theme includes a WordPress Customizer section for responsive settings:
- Mobile breakpoint (default: 768px)
- Tablet breakpoint (default: 1024px)

## Performance
- Lazy loading enabled by default
- DNS prefetch for external resources
- Optimized image sizes per device
- Minimal JavaScript payload
- Cache-friendly markup

## Browser Support
- Chrome/Edge (latest)
- Firefox (latest)
- Safari (latest)
- Mobile Safari (iOS 12+)
- Chrome Mobile (Android 8+)

## License
GNU General Public License v2 or later

## Notes
- The theme is WooCommerce-ready for e-commerce functionality
- Supports WordPress widgets and custom menus
- Includes starter content and demo products
- Fully translatable with text domain 'kokostore'
