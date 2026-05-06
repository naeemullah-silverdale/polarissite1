# Polaris Wellbeing Visits

This is the official website for Polaris Wellbeing Visits Ltd.

## Deployment to WordPress

This application is built as a static site. To use it on WordPress:

1.  **Generate Static Files:** Run `npm run build` in your development environment (this has already been done in the provided `dist` folder if applicable).
2.  **Upload to WordPress:**
    *   You can upload the contents of the `dist` folder to your WordPress server via FTP/SFTP.
    *   Alternatively, you can use a "Static HTML Output" plugin or simply embed the static files as needed.
3.  **No Node.js Required:** Once built, the application consists of standard HTML, CSS, and JavaScript files. It does **not** require Node.js to run on your WordPress server.

## Technologies Used

*   React
*   Tailwind CSS (v4)
*   Lucide Icons
*   Motion

## Project Structure

*   `src/pages/`: Contains all the page components.
*   `src/components/`: Reusable UI components like Header and Footer.
*   `public/`: Static assets.
