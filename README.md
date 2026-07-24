# Realome - Real Estate and Realtor Block Theme

Introducing the modern Realome block theme for real estate agencies, and realtors! Realome WordPress block theme designed to help you tell your story and showcase your property best. With its clean and tidy design, this theme will be perfect for any business that needs to look professional and stand out and win everyone’s attention.

Here’s a link if you wish to view the [Realome documentation.](https://energeticthemes.com/docs/realome/)

Realome theme builds around full site editing features. What is full site editing? Full site editing (or FSE for short), is a set of new WordPress features: Block themes, template editing, site blocks, and global styles, that focus on styling blocks and using blocks to build all parts of the website, not only the content area.

The property listing functionality is built using Custom Post Type UI (CPT UI) and Advanced Custom Fields (AFC) plugins which means you can easily customize and extend as much you want.

![Realome showcase](https://energeticthemes.com/realome/wp-content/uploads/sites/93/2022/05/showcase.png)

Key Features:
- Full Site Editing
- Listing Search Filter
- Listing with Google Map
- Portfolio with Filter
- WooCommerce

Ideal for: 
- Real Estate Agencies
- Realtors and Property Brokers
- Rentals Directories
- Blog
- Interior Design and Architecture Studios

Theme Features: 
- SEO friendly
- Mobile ready
- Fresh patterns
- Gutenberg Page Builder
- Compatible with the WooCommerce plugin for eCommerce
- Property Listing block with map
- Property Listing block with map side by side
- Property Listing type
- Listing Taxonomies Locations, Property types, and Amenities. You can add more using CPT UI.
- ACF field block to get field value
- Realome Block Slider
- Accordion Block
- Listing Search Block
- Listings Block
- Portfolio Block
- Testimonials Block
- Blog
- Blog 3 col layout
- and much more

**Sources and Credits**
- Tailwind
- Fonts: Inter | Google Fonts
- Images and graphics content from: unsplash.com
Note: Images are not included in Main Download File.

---

## 🛠️ Developer Guide & Antigravity IDE Documentation

### Recent Custom Block Patterns & Style Updates

1. **Formats Grid Pattern (`inc/patterns/formats-grid.php` & `patterns/03-formats-grid.php`)**
   - **Component**: 3-column responsive format cards grid (`.vhs-formats-grid`).
   - **Dark Exclusive Card (`.vhs-format-card-dark`)**: Represents the "Living Memories" service card. Spans 2 grid columns (`grid-column: span 2 !important; width: 100% !important; max-width: 100% !important;`).
   - **Card Description (`.vhs-card-desc`)**: Set to `max-width: 100% !important;` to ensure full-width text alignment without unwanted line breaks or empty gaps before `.vhs-format-card-dashed` ("See all services").

2. **Hero Dark Pattern (`inc/patterns/hero-dark.php`)**
   - **Component**: Client Homepage Hero Section (`vhs-sections`, `hero`, `featured`).
   - **Structure**: 2-column hero layout with `#16324F` dark navy background, H1 heading, call-to-action buttons, right-side media preview box, and 5 format pills bottom bar.

3. **Global Custom Styles (`style.css`)**
   - Contains custom CSS rules for `.vhs-format-card`, `.vhs-format-card-dark`, `.vhs-format-card-dashed`, `.vhs-hero-format-pills`, and responsive `@media` query breakpoints (`992px` and `782px`).

