# Polaris Wellbeing Visits - WordPress Theme

This is a custom WordPress theme converted from the Polaris Wellbeing Visits React application.

## Installation

1.  **Download the Theme:** Download the `polaris-wp-theme` folder.
2.  **Zip the Folder:** Create a `.zip` archive of the `polaris-wp-theme` folder (e.g., `polaris-theme.zip`).
3.  **Upload to WordPress:**
    *   Go to your WordPress Dashboard.
    *   Navigate to **Appearance > Themes**.
    *   Click **Add New > Upload Theme**.
    *   Choose your `polaris-theme.zip` and click **Install Now**.
    *   **Activate** the theme.

## Setup Instructions

This theme uses Custom Page Templates to replicate the high-fidelity design.

1.  **Create Pages:** In WordPress, go to **Pages > Add New**.
2.  **Assign Templates:** For each page, use the **Page Attributes** sidebar to select the corresponding template:
    *   **About Us** -> Select "About Us Template"
    *   **Services** -> Select "Services Template"
    *   **Pricing** -> Select "Pricing Template"
    *   **Safeguarding** -> Select "Safeguarding Template"
    *   **Referrals** -> Select "Referrals Template"
    *   **Contact** -> Select "Contact Template"
    *   **Policies** -> Select "Policies Template"
3.  **Home Page:** Go to **Settings > Reading** and set "Your homepage displays" to "A static page", then select your "Home" page.

## Features Included

*   **Tailwind CSS:** Pre-configured via CDN (no Node.js build required on your server).
*   **Lucide Icons:** Integrated via CDN.
*   **Responsive Design:** Mobile-friendly navigation and layouts.
*   **Performance:** Lightweight PHP templates with minimal dependencies.

## Customization

You can edit the `front-page.php` and other `template-*.php` files directly to change hardcoded text, or use the WordPress Editor to add content which will appear in the `index.php` fallback if needed.
