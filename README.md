# DYNAMIC FAQ Accordion Widget For Elementor

## فارسی

### معرفی
افزونه **DYNAMIC FAQ Accordion Widget For Elementor** یک افزونه وردپرس است که یک ویجت سفارشی برای المنتور ایجاد می‌کند. این ویجت به شما امکان می‌دهد یک آکاردئون سوالات متداول (FAQ) بسازید که محتوای آن از یک فیلد متنی (در ویجت یا متاباکس پست) گرفته می‌شود. سوالات با تگ `<h2>` و پاسخ‌ها با محتوای زیر آن‌ها تعریف می‌شوند. همچنین، این افزونه امکان تنظیم استایل‌های پیشرفته مانند رنگ، فونت، حاشیه، و فاصله‌ها را فراهم می‌کند.

### ویژگی‌ها
- **ویجت المنتوری**: یک آکاردئون FAQ زیبا با قابلیت باز و بسته شدن.
- **منبع محتوا**: محتوای FAQ می‌تواند از فیلد متنی ویجت یا متاباکس پست گرفته شود.
- **استایل‌دهی پیشرفته**:
  - رنگ متن و پس‌زمینه برای سوالات و پاسخ‌ها.
  - تنظیم نوع، ضخامت، رنگ، و شعاع حاشیه.
  - تنظیم فونت، padding، و margin.
- **متاباکس سفارشی**: اضافه کردن فیلد `faq_content` به همه پست‌تایپ‌ها برای وارد کردن محتوای FAQ.
- **حالت ویرایش**: نمایش پیام خطا در ویرایشگر المنتور در صورت نبود محتوا؛ نمایش خالی در سایت.

### نصب
1. افزونه را از این مخزن کلون کنید و به فایل زیپ تبدیل کنید یا مستقیما از [این لینک](https://github.com/majidnazari65/dynamic-faq-accordion-for-elementor/archive/refs/heads/main.zip) فایل زیپ را دانلود نمایید.
2. 
3. از پنل مدیریت وردپرس، افزونه را فعال کنید.
4. اطمینان حاصل کنید که المنتور روی سایت شما نصب و فعال است.

### استفاده
1. **تنظیم متاباکس**:
   - در صفحه ویرایش هر پست (یا هر پست‌تایپ)، بخش "FAQ Content" را مشاهده می‌کنید.
   - محتوای FAQ را با تگ‌های `<h2>` برای سوالات و محتوای زیر آن برای پاسخ‌ها وارد کنید.
2. **استفاده از ویجت در المنتور**:
   - در ویرایشگر المنتور، ویجت "FAQ Accordion" را به صفحه اضافه کنید.
   - در تب "Content"، محتوای FAQ را وارد کنید یا آن را خالی بگذارید تا از متاباکس پست استفاده شود.
   - در تب "Style"، استایل‌های دلخواه (رنگ، حاشیه، فونت و غیره) را تنظیم کنید.
3. **نمایش**:
   - در حالت ویرایش المنتور، اگر محتوا وجود نداشته باشد، پیام خطا نمایش داده می‌شود.
   - در سایت، اگر محتوا وجود نداشته باشد، چیزی نمایش داده نمی‌شود.

### پیش‌نیازها
- وردپرس نسخه 5.0 یا بالاتر
- المنتور نسخه 3.0 یا بالاتر

### توسعه‌دهندگان
- برای تغییر رفتار آکاردئون، می‌توانید فایل CSS (`faq-accordion.css`) را ویرایش کنید.
- برای افزودن قابلیت‌های جدید، فایل `faq-accordion-widget.php` را تغییر دهید.

---

## English

### Introduction
The **DYNAMIC FAQ Accordion Widget For Elementor** is a WordPress plugin that creates a custom Elementor widget for building an FAQ accordion. The widget pulls content from a text field (either in the widget or a post metabox), using `<h2>` tags for questions and the following content for answers. It also provides advanced styling options, including colors, fonts, borders, and spacing.

### Features
- **Elementor Widget**: A sleek FAQ accordion with toggle functionality.
- **Content Source**: FAQ content can be sourced from the widget's text field or a post metabox.
- **Advanced Styling**:
  - Text and background colors for questions and answers.
  - Customizable border style, width, color, and radius.
  - Typography, padding, and margin settings.
- **Custom Metabox**: Adds a `faq_content` field to all post types for FAQ content input.
- **Edit Mode Handling**: Displays error messages in Elementor’s editor if content is missing; shows nothing on the frontend.

### Installation
1. Copy the plugin files to the `wp-content/plugins/faq-accordion-widget` directory.
2. Clone this repository and zip it or [download zip file](https://github.com/majidnazari65/dynamic-faq-accordion-for-elementor/archive/refs/heads/main.zip) directly.
3. Activate the plugin from the WordPress admin panel.
4. Ensure Elementor is installed and active on your site.

### Usage
1. **Metabox Setup**:
   - In the edit screen of any post (or post type), you’ll see a "FAQ Content" metabox.
   - Enter FAQ content using `<h2>` tags for questions and subsequent content for answers.
2. **Using the Widget in Elementor**:
   - In the Elementor editor, add the "FAQ Accordion" widget to your page.
   - In the "Content" tab, enter FAQ content or leave it empty to use the post metabox content.
   - In the "Style" tab, customize styles (colors, borders, fonts, etc.).
3. **Display**:
   - In Elementor’s edit mode, an error message is shown if no content is found.
   - On the frontend, nothing is displayed if no content is available.

### Requirements
- WordPress 5.0 or higher
- Elementor 3.0 or higher

### Developers
- To modify accordion behavior, edit the CSS file (`faq-accordion.css`).
- For additional functionality, modify `faq-accordion-widget.php`.
