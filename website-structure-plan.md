# Zigma Global Wear - Website Structure Implementation Plan
*Date: 15 August 2025*

## Project Overview
**Company:** Zigma Global Wear  
**Focus:** Premium Kids' Clothing & Textiles Specialist  
**Website Type:** Simple 3-page brochure website  
**Target Pages:** Home, Kids Clothing, Contact  

---

## 1. Site Architecture

### 1.1 Overall Structure
```
Zigma Global Wear Website
├── Home (Landing Page)
├── Kids Clothing (Product Showcase)
└── Contact (Business Information & Contact)
```

### 1.2 Navigation Strategy
- **Primary Navigation:** Simple 4-item sticky navigation (Home, Kids Clothing, About, Contact)
- **Mobile Navigation:** Hamburger menu for responsive design
- **Three-Part Header:** Utility bar, logo section, and sticky navigation

---

## 2. Page Structure Breakdown

### 2.1 Homepage Structure

#### Header Section (Three-Part Layout)
**Part 1: Utility Header**
- **Links:** Blog, Contact Us, About Us (left side)
- **Account:** My Account, Sign In (right side)
- **Contact Number:** 07440 268282 (top-right)

**Part 2: Logo Header (Center)**
- **Logo:** Zigma Global Wear branding (centered, prominent display)
- **Search Bar:** Kids' clothing search functionality

**Part 3: Simple Navigation (Becomes Sticky on Scroll)**
- **Clean Navigation Menu:** Simple horizontal navigation
- **Main Items:** 
  - Home
  - Kids Clothing
  - About
  - Contact
- **Simple Design Features:**
  - Clean, minimal layout
  - Focused on kids' wear specialization
  - Easy mobile navigation
- **Sticky Behavior:** Navigation bar sticks to top when scrolling past logo section

#### Hero Section
- **Headline:** "Premium Kids' Clothing & Textiles"
- **Subheadline:** Safe, comfortable, and stylish children's clothing
- **Hero Image/Video:** [Content container - kids' clothing imagery]
- **Primary CTA:** "Shop Kids Clothing"

#### About/Overview Section
- **Company Introduction:** [Content container - kids' wear specialist story]
- **Kids' Clothing Focus:** [Content container - emphasis on child safety and comfort]
- **Age Range Coverage:** [Content container - baby to teen clothing solutions]
- **Quality Commitments:** [Content container - safety, durability, comfort standards]

#### Key Features Section
- **Child Safety:** [Content container - safe materials and construction]
- **Comfort First:** [Content container - soft, breathable fabrics]
- **Durability:** [Content container - long-lasting quality]
- **Fun Designs:** [Content container - appealing to kids and parents]

#### Trust Indicators
- **Certifications:** [Content container - UK textile standards, industry certifications]
- **Experience:** [Content container - years in business]
- **Client Testimonials:** [Content container - customer quotes if available]

#### Call-to-Action Section
- **Secondary CTA:** "Browse Kids Clothing" or "Contact Us"
- **Contact Information:** Phone: 07440 268282, Email: info@zigmaglobalwear.com

### 2.2 Kids Clothing Page Structure

#### Page Header (Sticky Navigation)
- **Page Title:** "Kids Clothing Collections"
- **Breadcrumb:** Home > Kids Clothing

#### Age-Based Categories
- **Baby & Toddler (0-4 years)**
  - [Content container - baby clothing descriptions]
  - [Content container - safety features]
  - [Content container - organic materials]
- **School Age (5-12 years)**
  - [Content container - school clothing options]
  - [Content container - durability features]
- **Teen Fashion (13-16 years)**
  - [Content container - teen style options]
  - [Content container - trendy designs]
- **Special Occasions**
  - [Content container - formal wear options]
  - [Content container - seasonal collections]

#### Product Features Grid
For each age category:
- **Images/Videos:** [Content container - high-resolution clothing imagery]
- **Size Ranges:** [Content container - available sizes]
- **Material Safety:** [Content container - child-safe fabrics]
- **Care Instructions:** [Content container - washing and care]
- **Features:** [Content container - comfort and durability details]
- **Age Appropriateness:** [Content container - developmental considerations]

#### Safety & Quality Standards
- **Material Safety:** [Content container - non-toxic, hypoallergenic materials]
- **Construction Quality:** [Content container - reinforced seams, safe fastenings]
- **Compliance:** [Content container - UK safety standards for children's clothing]

#### Size & Fit Information
- **Size Guides:** [Content container - detailed sizing charts by age]
- **Fit Descriptions:** [Content container - loose, fitted, or adjustable fits]
- **Growth Considerations:** [Content container - room for growth features]
- **Customer Support:** [Content container - sizing assistance and exchanges]

### 2.3 Contact Page Structure

#### Contact Header (Sticky Navigation)
- **Page Title:** "Get in Touch"
- **Subtitle:** "Ready to discuss your textile needs?"

#### Contact Information Block
- **Business Address:** [Content container - full UK address]
- **Phone Number:** 07440 268282
- **Email Addresses:** info@zigmaglobalwear.com, sales@zigmaglobalwear.com
- **Business Hours:** [Content container - operating schedule]

#### Contact Form
- **Name** (required)
- **Company** (optional)
- **Email** (required)
- **Phone** (optional)
- **Inquiry Type:** Dropdown (General, Product Info, Custom Order, Partnership)
- **Message** (required)
- **Submit Button:** "Send Inquiry"

#### Business Information
- **Company Registration:** [Content container - UK business details]
- **VAT Number:** [Content container - if applicable]
- **Years in Business:** [Content container - experience]
- **Certifications & Memberships:** [Content container - industry associations]

#### Location Map
- **Google Maps Embed:** [Content container - embedded map showing business location]
- **Directions Link:** Interactive map with directions functionality

---

## 3. Technical Implementation Strategy

### 3.1 Technical Stack & CMS
- **Content Management System:** WordPress
- **Purpose:** Enable easy future editing of website content and files
- **Theme:** Custom WordPress theme built for Zigma Global Wear Kids' Clothing
- **Admin Access:** Full WordPress dashboard for content management
- **Specialization:** Optimized for kids' clothing and children's safety requirements

### 3.2 WordPress File Structure
```
zigma-global-wear/ (WordPress Installation)
├── wp-content/
│   └── themes/
│       └── zigma-theme/
│           ├── index.php (Homepage template)
│           ├── page-products.php (Kids Clothing template)
│           ├── page-contact.php (Contact template)
│           ├── header.php (Three-part header: utility, logo, navigation)
│           ├── footer.php
│           ├── functions.php
│           ├── style.css
│           ├── css/
│           │   ├── responsive.css
│           │   ├── components.css
│           │   └── sticky-header.css
│           ├── js/
│           │   ├── main.js
│           │   ├── sticky-header.js
│           │   └── form-validation.js
│           └── images/
│               ├── hero/ (empty - content containers)
│               ├── products/ (empty - content containers)
│               ├── logos/ (empty - content containers)
│               └── backgrounds/ (empty - content containers)
├── wp-content/uploads/ (Media library)
└── [Standard WordPress core files]
```

### 3.3 WordPress Editing Capabilities
- **Content Management:** Easy text editing via WordPress editor
- **Media Management:** Upload/manage images through WordPress media library
- **Page Editing:** Edit page content without touching code
- **Contact Form:** Manageable through WordPress admin
- **Menu Management:** Easy navigation updates
- **Plugin Support:** Future functionality additions via plugins

### 3.4 Responsive Design Breakpoints
- **Mobile:** 320px - 768px
- **Tablet:** 769px - 1024px
- **Desktop:** 1025px+

### 3.5 Performance Considerations
- **WordPress Optimization:** Caching plugins for speed
- **Image Optimization:** WebP format with fallbacks
- **CSS Minification:** Compressed stylesheets
- **Database Optimization:** WordPress database management
- **Fast Loading Times:** Target under 3 seconds

---

## 4. Content Requirements

### 4.1 Text Content Needed (Content Containers)

#### 4.1.1 Homepage Content Files
**Filename: `homepage-content.txt`**
- **Company description** [150-200 words]
- **Hero headline and subheadline** [2-3 lines each]
- **Value proposition** [50-75 words]
- **About section** [100-150 words]
- **Quality commitments** [75-100 words]

#### 4.1.2 Products Content Files
**Filename: `products-content.txt`**
- **Cotton & Natural Fibers description** [100-125 words]
- **Synthetic & Blended Fabrics description** [100-125 words]
- **Specialty Textiles description** [100-125 words]
- **Custom Fabric Solutions description** [100-125 words]
- **Technical specifications** [detailed data sheets]

#### 4.1.3 Contact & Business Information Files
**Filename: `business-info.txt`**
- **Complete UK business address** [full postal address]
- **Business hours** [operating schedule]
- **Company registration details** [UK business registration]
- **VAT number** [if applicable]
- **Years in business** [experience statement]
- **Certifications & memberships** [industry associations]

### 4.2 Visual Content Needed (Content Containers)

#### 4.2.1 Logo and Branding Files
**Folder: `logos/`**
- `zigma-logo-main.png` [Primary logo - high resolution]
- `zigma-logo-white.png` [White version for dark backgrounds]
- `zigma-logo-favicon.ico` [Website favicon]
- `zigma-logo-social.png` [Square format for social media]

#### 4.2.2 Hero Section Images
**Folder: `hero-images/`**
- `hero-main.jpg` [Primary hero image - 1920x1080px minimum]
- `hero-mobile.jpg` [Mobile optimized version - 768x1024px]
- `hero-background.jpg` [Alternative background option]
- `hero-video.mp4` [Optional video background - max 2MB]

#### 4.2.3 Product Category Images
**Folder: `products/`**

**Cotton & Natural Fibers:**
- `cotton-main.jpg` [Main category image]
- `cotton-detail-1.jpg` [Texture close-up]
- `cotton-detail-2.jpg` [Quality showcase]
- `cotton-applications.jpg` [Usage examples]

**Synthetic & Blended Fabrics:**
- `synthetic-main.jpg` [Main category image]
- `synthetic-detail-1.jpg` [Texture close-up]
- `synthetic-detail-2.jpg` [Quality showcase]
- `synthetic-applications.jpg` [Usage examples]

**Specialty Textiles:**
- `specialty-main.jpg` [Main category image]
- `specialty-detail-1.jpg` [Technical features]
- `specialty-detail-2.jpg` [Quality showcase]
- `specialty-applications.jpg` [Industry applications]

**Custom Solutions:**
- `custom-main.jpg` [Main category image]
- `custom-process.jpg` [Development process]
- `custom-samples.jpg` [Sample variations]
- `custom-consultation.jpg` [Consultation imagery]

#### 4.2.4 Business and Facility Images
**Folder: `business/`**
- `facility-exterior.jpg` [Business location exterior]
- `facility-interior.jpg` [Interior workspace/warehouse]
- `team-photo.jpg` [Optional - team or founder photo]
- `quality-control.jpg` [Quality testing/manufacturing process]
- `certifications.jpg` [Certificates and awards display]

#### 4.2.5 Background and Supporting Images
**Folder: `backgrounds/`**
- `textile-pattern-1.jpg` [Subtle background pattern]
- `textile-pattern-2.jpg` [Alternative pattern]
- `uk-manufacturing.jpg` [UK manufacturing theme]
- `quality-texture.jpg` [Quality-focused background]

### 4.3 Technical Content (Content Containers)

#### 4.3.1 Product Specifications
**Folder: `specifications/`**
- `cotton-specs.pdf` [Cotton fabric technical data]
- `synthetic-specs.pdf` [Synthetic fabric technical data]
- `specialty-specs.pdf` [Specialty textile specifications]
- `custom-capabilities.pdf` [Custom solution capabilities]
- `compliance-standards.pdf` [Industry compliance information]

#### 4.3.2 Certification Documents
**Folder: `certifications/`**
- `uk-textile-standards.pdf` [UK textile standard certificates]
- `quality-certifications.pdf` [Quality assurance certificates]
- `industry-memberships.pdf` [Professional association memberships]
- `environmental-compliance.pdf` [Environmental standards]

### 4.4 Content File Organization Structure

#### 4.4.1 Recommended Folder Structure
```
content-files/
├── text/
│   ├── homepage-content.txt
│   ├── products-content.txt
│   ├── business-info.txt
│   └── seo-keywords.txt
├── images/
│   ├── logos/
│   │   ├── zigma-logo-main.png
│   │   ├── zigma-logo-white.png
│   │   ├── zigma-logo-favicon.ico
│   │   └── zigma-logo-social.png
│   ├── hero-images/
│   │   ├── hero-main.jpg
│   │   ├── hero-mobile.jpg
│   │   ├── hero-background.jpg
│   │   └── hero-video.mp4
│   ├── products/
│   │   ├── cotton-main.jpg
│   │   ├── cotton-detail-1.jpg
│   │   ├── cotton-detail-2.jpg
│   │   ├── cotton-applications.jpg
│   │   ├── synthetic-main.jpg
│   │   ├── synthetic-detail-1.jpg
│   │   ├── synthetic-detail-2.jpg
│   │   ├── synthetic-applications.jpg
│   │   ├── specialty-main.jpg
│   │   ├── specialty-detail-1.jpg
│   │   ├── specialty-detail-2.jpg
│   │   ├── specialty-applications.jpg
│   │   ├── custom-main.jpg
│   │   ├── custom-process.jpg
│   │   ├── custom-samples.jpg
│   │   └── custom-consultation.jpg
│   ├── business/
│   │   ├── facility-exterior.jpg
│   │   ├── facility-interior.jpg
│   │   ├── team-photo.jpg
│   │   ├── quality-control.jpg
│   │   └── certifications.jpg
│   └── backgrounds/
│       ├── textile-pattern-1.jpg
│       ├── textile-pattern-2.jpg
│       ├── uk-manufacturing.jpg
│       └── quality-texture.jpg
├── documents/
│   ├── specifications/
│   │   ├── cotton-specs.pdf
│   │   ├── synthetic-specs.pdf
│   │   ├── specialty-specs.pdf
│   │   ├── custom-capabilities.pdf
│   │   └── compliance-standards.pdf
│   └── certifications/
│       ├── uk-textile-standards.pdf
│       ├── quality-certifications.pdf
│       ├── industry-memberships.pdf
│       └── environmental-compliance.pdf
└── optimization/
    ├── compressed/
    └── web-ready/
```

#### 4.4.2 Image Size and Format Guidelines

**Logo Files:**
- **Format:** PNG with transparent background
- **Main logo:** 300x100px minimum, scalable vector preferred
- **Favicon:** 32x32px, ICO format
- **Social media:** 400x400px square format

**Hero Images:**
- **Format:** JPG, high quality (80-90% compression)
- **Desktop:** 1920x1080px minimum
- **Mobile:** 768x1024px portrait orientation
- **File size:** Under 500KB each after optimization

**Product Images:**
- **Format:** JPG for photos, PNG for graphics with transparency
- **Resolution:** 800x600px minimum for main images
- **Detail shots:** 600x400px minimum
- **File size:** Under 200KB each after optimization

**Background Images:**
- **Format:** JPG, optimized for web
- **Resolution:** 1920x1080px for full backgrounds
- **Patterns:** Seamless tiling, 500x500px minimum
- **File size:** Under 300KB each

#### 4.4.3 Content Quality Standards

**Text Content Requirements:**
- **Tone:** Professional, confident, quality-focused
- **UK Focus:** Emphasize British manufacturing heritage
- **Keywords:** Include textile industry terms naturally
- **Length:** Concise but informative (word counts specified above)
- **Format:** Plain text files, UTF-8 encoding

**Image Quality Requirements:**
- **Resolution:** High resolution originals (300 DPI minimum)
- **Lighting:** Professional, well-lit photography
- **Composition:** Clean, focused, brand-appropriate
- **Color:** True-to-life colors, consistent color profile
- **Background:** Clean, uncluttered backgrounds preferred

**Document Requirements:**
- **Format:** PDF for technical documents
- **Quality:** Professional presentation
- **Size:** Optimized for web viewing (under 2MB per file)
- **Content:** Current, accurate technical information

---

## 5. SEO & Marketing Considerations

### 5.1 Primary Keywords
- "kids clothing UK"
- "children's clothing"
- "premium kids wear"
- "safe children's clothing"
- "UK kids fashion"

### 5.2 Page Titles & Meta Descriptions
- **Homepage:** "Zigma Global Wear - Premium Kids' Clothing & Children's Textiles"
- **Kids Clothing:** "Kids Clothing Collections - Safe, Comfortable Children's Wear"
- **Contact:** "Contact Zigma Global Wear - Kids' Clothing Specialists | 07440 268282"

### 5.3 Local SEO
- **Google My Business** integration
- **UK business directory** listings
- **Local textile industry** associations

---

## 6. User Experience Flow

### 6.1 Primary User Journey
1. **Landing on Homepage** → Learn about company & general textile solutions
2. **Navigate to Products** → Explore textile collections & capabilities
3. **Contact Page** → Submit inquiry, call 07440 268282, or view location

### 6.2 Secondary Flows
- **Direct to Products** → Immediate product exploration
- **Contact from Homepage** → Quick inquiry path via sticky header
- **Mobile Experience** → Streamlined navigation with sticky header
- **Phone Contact** → Direct call from any page via header number

---

## 7. Call-to-Action Strategy

### 7.1 Primary CTAs
- **"View Our Collections"** (Homepage → Products)
- **"Request Quote"** (Products → Contact)
- **"Get in Touch"** (Contact form submission)

### 7.2 Secondary CTAs
- **Phone number** (click-to-call on mobile)
- **Email address** (mailto links)
- **"Learn More"** buttons for product details

---

## 8. Technical Features

### 8.1 Essential Features
- **WordPress CMS** for easy content editing
- **Custom WordPress theme** for Zigma Global Wear Kids' Clothing
- **Simple Clean Navigation** with sticky behavior
- **Three-part header layout** (utility bar + logo + navigation)
- **Kids' clothing focused design** with child-friendly aesthetics
- **Mobile-responsive navigation** with hamburger fallback
- **WordPress contact form** with validation
- **Google Maps integration**
- **Content containers** for kids' clothing imagery
- **WordPress admin dashboard** access
- **Fast loading times** (important for parent users)
- **Cross-browser compatibility**

### 8.2 Enhanced Features (Optional)
- **Product inquiry forms** on individual items
- **Downloadable product catalogs** (PDF)
- **Click-to-call functionality** for mobile
- **Newsletter signup**

---

## 9. Next Steps for Implementation

### 9.1 Content Gathering (Task 6)
- Collect all required text content
- Gather high-quality product images
- Obtain business photography
- Compile technical specifications

### 9.2 Design Phase (Task 7)
- Create wireframes based on this structure
- Design visual mockups
- Plan color scheme and typography
- Define spacing and layout grids

### 9.3 Development Phase (Task 8)
- Install and configure WordPress
- Build custom WordPress theme for Zigma Global Wear
- Create page templates (Home, Products, Contact)
- Implement CSS styling and responsive design
- Add JavaScript functionality for sticky header
- Integrate WordPress contact form
- Set up WordPress admin access and training

---

## 10. Project Costs & Pricing Breakdown

### 10.1 Website Development Cost
- **Labour Cost:** £250 (standalone website/online brochure)
- **Timeline:** Approximately 1 week total including testing
- **Scope:** 3-page brochure website with basic functionality

### 10.2 Basic WordPress Package Includes
- **Custom WordPress Theme:** Tailored for Zigma Global Wear
- **Pages:** Home, Products, Contact with detailed information
- **WordPress Admin Access:** Full content management capabilities
- **Form Connectivity:** WordPress contact form connected to email
- **Google Integration:** Google Maps, basic SEO setup
- **Mobile Responsive:** All pages optimized for mobile devices
- **Content Containers:** Ready for future content placement
- **Easy Editing:** Update content without technical knowledge

### 10.3 Additional Required Costs (Monthly/Annual)

#### Domain & Hosting
- **Domain Registration:** £10/year (e.g., .co.uk or .com)
- **WordPress Hosting:** £5-20/month (WordPress-optimized hosting required)
  - Basic WordPress: £5-8/month (suitable for small business sites)
  - Standard WordPress: £10-15/month (better performance, backups)
  - Premium WordPress: £20/month (enhanced features, staging sites)
- **WordPress Requirements:** PHP, MySQL database, WordPress-compatible hosting

#### Professional Email
- **Gmail Business:** £6/month per user
- **Professional email addresses:** info@zigmaglobalwear.com, sales@zigmaglobalwear.com

#### Optional Enhancements
- **Additional Features:** Approximately £30+/month
  - Premium themes/styling
  - Enhanced functionality
  - Additional integrations
  - Analytics tools
  - Security features

### 10.4 Total First Year Cost Estimate
- **Setup Cost:** £250 (one-time WordPress development)
- **Domain:** £10/year
- **WordPress Hosting:** £60-96/year (£5-8/month basic)
- **Gmail Business:** £72/year (£6/month)
- **Basic Total Year 1:** £392-428

### 10.5 Advanced Features (Additional Costs)
- **E-commerce Integration:** Online shopping with card payments
- **Cookie Tracking:** Marketing and analytics purposes
- **Advanced SEO:** Enhanced search optimization
- **Custom Integrations:** CRM, inventory systems
- **Enhanced Security:** SSL certificates, security monitoring

*Note: Advanced features pricing to be reviewed based on specific requirements*

### 10.6 Industry Context & Competitors

#### Reference Websites
- **Make it British:** Professional directory-style layout with clean typography
- **UK Fashion & Textile Association:** Industry-standard presentation
- **British textile manufacturers:** Focus on heritage, quality, and technical specifications

#### Design Inspiration Features
- **Clean, professional layouts** similar to Make it British manufacturers
- **Heritage storytelling** emphasizing UK manufacturing quality
- **Technical specification presentations** for B2B clients
- **Simple navigation** with clear calls-to-action
- **Industry credibility** through certifications and associations

---

## 11. Success Metrics

### 11.1 User Engagement
- **Time on site:** Target 2+ minutes average
- **Page views per session:** Aim for 2-3 pages
- **Contact form submissions:** Track inquiry conversion

### 11.2 Technical Performance
- **Page load speed:** Under 3 seconds
- **Mobile usability:** 100% mobile-friendly
- **SEO ranking:** Target first page for key terms

---

*This implementation plan provides a comprehensive structure for the Zigma Global Wear website, focusing on the company's specialization in premium kids' clothing and children's textiles. The structure features a clean, simple navigation design with three-part header layout, content containers ready for kids' clothing imagery, and clear contact paths including the primary phone number 07440 268282. The design prioritizes child safety, parent usability, and mobile-friendly navigation.* 