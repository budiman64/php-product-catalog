# Dynamic E-commerce Catalog with PHP and Analytics

> A full-stack project demonstrating a dynamic product catalog where the front-end is rendered by a PHP back-end. The application features scalable JavaScript for tracking user interactions (`add_to_cart`) for analytics.

---

## 🚀 Live Demo

You can view the live project deployed on a PHP-supported host here: **[your-live-demo-link.rf.gd]**

_(Remember to replace the link above with your actual live URL.)_

---

## ✨ Overview

This project simulates a real-world e-commerce catalog page. Unlike a static site, the product information is stored in a PHP array on the server, acting as a simple database. The PHP back-end dynamically generates the HTML for each product, which is then sent to the user's browser.

On the front-end, a single, efficient JavaScript event listener is used to handle "Add to Cart" clicks for any number of products, capturing their specific data and pushing it to the Google Analytics `dataLayer`.

---

## 📋 Key Features

- **Dynamic Content:** Product cards are generated automatically from a centralized PHP array, making the catalog easy to update and manage.
- **Server-Side Rendering:** Uses PHP to build the HTML page on the server before it's delivered to the client.
- **Scalable Event Tracking:** A single JavaScript event handler manages `add_to_cart` events for all products, regardless of how many are on the page.
- **Analytics-Ready:** Pushes structured e-commerce data to the `dataLayer` for use with tools like Google Tag Manager and Google Analytics.

---

## 💻 Tech Stack

- **Back-End:** PHP
- **Front-End:** HTML5, CSS3, JavaScript (ES6+)
- **Analytics:** Google Analytics `dataLayer`
- **Server Environment:** Apache (simulated with XAMPP/MAMP for local development)

---

## 🧠 Core Concepts Demonstrated

This project showcases two fundamental web development concepts:

1.  **Server-Side Templating:** Using a back-end language like PHP to loop through a data source (our array) and dynamically construct the HTML. This is a core principle of most server-driven websites and content management systems.

2.  **Efficient Event Handling:** Instead of creating a separate event listener for each button, this project uses `document.querySelectorAll` to attach a single, scalable listener. The use of `button.closest('.product-card')` demonstrates an efficient method for finding the relevant data container for any element that is clicked.

---

## 🛠️ Local Development Setup

This project requires a local server environment that can interpret PHP.

1.  **Install a server stack** like [XAMPP](https://www.apachefriends.org/index.html) or [MAMP](https://www.mamp.info/en/downloads/).
2.  **Start the Apache server.**
3.  **Place the project folder** inside the server's web root (usually `htdocs` or `www`).
4.  **Access the project** in your browser via `http://localhost/php-product-catalog/`.
5.  **Open the Developer Console** to see the `dataLayer` events being logged in real-time.

---

## ☁️ Deployment

This application is deployed on a shared hosting provider that supports a standard Apache/PHP server environment, demonstrating the ability to deploy applications beyond static site platforms.
