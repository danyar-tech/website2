<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        color: #333;
        line-height: 1.6;
        background: white;
    }

    /* Header */
    header {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        background: white;
        padding: 20px 60px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        z-index: 1000;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }

    .logo {
        font-size: 24px;
        font-weight: 300;
        letter-spacing: 4px;
        color: #000;
        text-decoration: none;
    }

    .header-right {
        display: flex;
        align-items: center;
        gap: 30px;
    }

    .language {
        font-size: 14px;
        font-weight: 500;
        color: #000;
        cursor: pointer;
    }

    .menu-icon {
        width: 30px;
        height: 20px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        cursor: pointer;
        position: relative;
        z-index: 1001;
    }

    .menu-icon span {
        width: 100%;
        height: 2px;
        background: #000;
        transition: all 0.3s ease;
        transform-origin: center;
    }

    .menu-icon.active span:nth-child(1) {
        transform: translateY(9px) rotate(45deg);
    }

    .menu-icon.active span:nth-child(2) {
        opacity: 0;
    }

    .menu-icon.active span:nth-child(3) {
        transform: translateY(-9px) rotate(-45deg);
    }

    /* Menu Overlay */
    .menu-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #f0f0f0;
        z-index: 999;
        display: none;
        padding-top: 80px;
        overflow-y: auto;
    }

    .menu-overlay.active {
        display: block;
    }

    .menu-close {
        position: absolute;
        top: 20px;
        right: 60px;
        font-size: 30px;
        cursor: pointer;
        color: #000;
        background: none;
        border: none;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .menu-close:hover {
        opacity: 0.6;
    }

    .menu-content {
        max-width: 1400px;
        margin: 0 auto;
        padding: 40px 60px;
    }

    .menu-search {
        margin-bottom: 60px;
        position: relative;
    }

    .menu-search input {
        width: 100%;
        padding: 20px 40px 20px 0;
        border: none;
        border-bottom: 2px solid #333;
        background: transparent;
        font-size: 16px;
        outline: none;
    }

    .menu-search input::placeholder {
        color: #666;
    }

    .menu-search::after {
        content: '🔍';
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 18px;
        color: #333;
        pointer-events: none;
    }

    .menu-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 80px;
    }

    .menu-column {
        display: flex;
        flex-direction: column;
        gap: 50px;
    }

    .menu-section h3 {
        font-size: 11px;
        font-weight: 600;
        letter-spacing: 1.5px;
        color: #666;
        margin-bottom: 20px;
    }

    .menu-section ul {
        list-style: none;
    }

    .menu-section ul li {
        margin-bottom: 12px;
    }

    .menu-section ul li a {
        color: #000;
        text-decoration: none;
        font-size: 16px;
        font-weight: 400;
        transition: opacity 0.3s;
    }

    .menu-section ul li a:hover {
        opacity: 0.6;
    }

    /* Newsletter Section */
    .newsletter {
        background: white;
        padding: 100px 60px;
        text-align: center;
        border-top: 1px solid #e0e0e0;
    }

    .newsletter h2 {
        font-size: 24px;
        font-weight: 300;
        letter-spacing: 2px;
        margin-bottom: 20px;
    }

    .newsletter p {
        font-size: 14px;
        color: #666;
        margin-bottom: 40px;
    }

    .checkbox-group {
        display: flex;
        justify-content: center;
        gap: 60px;
        margin-bottom: 40px;
    }

    .checkbox-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
    }

    .checkbox-item input[type="checkbox"] {
        width: 20px;
        height: 20px;
        cursor: pointer;
    }

    .checkbox-item label {
        font-size: 14px;
        color: #333;
    }

    .email-input {
        max-width: 400px;
        margin: 0 auto 30px;
    }

    .email-input input {
        width: 100%;
        padding: 15px 0;
        border: none;
        border-bottom: 2px solid #ddd;
        font-size: 14px;
        text-align: center;
        outline: none;
        transition: border-color 0.3s;
    }

    .email-input input::placeholder {
        color: #999;
    }

    .email-input input:focus {
        border-bottom-color: #000;
    }

    .submit-btn {
        background: #000;
        color: white;
        padding: 12px 40px;
        border: none;
        border-radius: 25px;
        font-size: 14px;
        letter-spacing: 2px;
        cursor: pointer;
        transition: background 0.3s;
    }

    .submit-btn:hover {
        background: #333;
    }

    /* Footer */
    footer {
        background: #f5f5f5;
        padding: 60px 60px 40px;
    }

    .footer-content {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 40px;
        margin-bottom: 40px;
        max-width: 1400px;
        margin-left: auto;
        margin-right: auto;
    }

    .footer-column h3 {
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 20px;
        letter-spacing: 1px;
    }

    .footer-column ul {
        list-style: none;
    }

    .footer-column ul li {
        margin-bottom: 10px;
    }

    .footer-column ul li a {
        color: #666;
        text-decoration: none;
        font-size: 14px;
        transition: color 0.3s;
    }

    .footer-column ul li a:hover {
        color: #000;
    }

    .footer-column p {
        font-size: 14px;
        color: #666;
        margin-bottom: 8px;
    }

    .contact-info {
        margin-top: 15px;
    }

    .contact-info a {
        color: #000;
        text-decoration: none;
        font-weight: 500;
    }

    .social-icons {
        display: flex;
        gap: 15px;
        margin-top: 20px;
    }

    .social-icon {
        width: 35px;
        height: 35px;
        border: 1px solid #000;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #000;
        text-decoration: none;
        font-size: 16px;
        transition: all 0.3s;
    }

    .social-icon:hover {
        background: #000;
        color: white;
    }

    /* Search Results */
    .search-results {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: white;
        border: 1px solid #e0e0e0;
        border-top: none;
        max-height: 300px;
        overflow-y: auto;
        z-index: 100;
        display: none;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .search-results.active {
        display: block;
    }

    .search-result-item {
        padding: 12px 20px;
        cursor: pointer;
        font-size: 14px;
        color: #333;
        text-decoration: none;
        display: block;
        border-bottom: 1px solid #f0f0f0;
        transition: background 0.2s;
    }

    .search-result-item:hover {
        background: #f5f5f5;
    }

    .search-result-item .result-category {
        font-size: 11px;
        color: #999;
        letter-spacing: 1px;
        margin-top: 2px;
    }

    .search-no-results {
        padding: 20px;
        text-align: center;
        color: #999;
        font-size: 14px;
    }

    /* RTL Overrides */
    [dir="rtl"] header {
        flex-direction: row-reverse;
    }

    [dir="rtl"] .header-right {
        flex-direction: row-reverse;
    }

    [dir="rtl"] .menu-close {
        right: auto;
        left: 60px;
    }

    [dir="rtl"] .menu-search input {
        padding: 20px 0 20px 40px;
        text-align: right;
    }

    [dir="rtl"] .menu-search::after {
        right: auto;
        left: 10px;
    }

    [dir="rtl"] .menu-section h3,
    [dir="rtl"] .menu-section ul li a {
        text-align: right;
    }

    [dir="rtl"] .menu-section ul {
        text-align: right;
    }

    [dir="rtl"] .footer-column {
        text-align: right;
    }

    [dir="rtl"] .social-icons {
        justify-content: flex-end;
    }

    [dir="rtl"] .breadcrumb {
        text-align: right;
    }

    [dir="rtl"] .breadcrumb a {
        margin-right: 0;
        margin-left: 10px;
    }

    [dir="rtl"] .newsletter h2,
    [dir="rtl"] .newsletter p {
        direction: rtl;
    }

    [dir="rtl"] .email-input input {
        text-align: center;
    }

    /* Responsive */
    @media (max-width: 1024px) {
        .products-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 768px) {
        header {
            padding: 20px 30px;
        }

        .product-grid {
            grid-template-columns: 1fr;
        }

        .product-card {
            height: 40vh;
        }

        main {
            padding: 40px 30px;
        }

        .products-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .info-sections {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .checkbox-group {
            flex-direction: column;
            gap: 20px;
        }

        .footer-content {
            grid-template-columns: repeat(2, 1fr);
        }

        .newsletter {
            padding: 60px 30px;
        }

        .menu-content {
            padding: 40px 30px;
        }

        .menu-grid {
            grid-template-columns: 1fr;
            gap: 40px;
        }

        .menu-close {
            right: 30px;
        }

        [dir="rtl"] .menu-close {
            right: auto;
            left: 30px;
        }
    }
    
    /* ------ */
    
    /* --- Hero Overlay Actions --- */
.hero-bottom-actions {
    position: absolute;
    bottom: 40px;
    left: 60px;
    z-index: 10; /* Ensures buttons stay above video */
    display: flex;
    gap: 15px;
}

.hero-action-btn {
    position: relative;
    display: block;
    width: 220px;
    aspect-ratio: 220 / 140; /* keeps the ratio */
    height: auto; /* remove fixed height */
    border: 1px solid rgba(255, 255, 255, 0.4);
    overflow: hidden;
    text-decoration: none;
}

/* Force image to show and fill space */
.hero-action-btn img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 1; /* Image at the back */
    display: block;
    transition: transform 0.6s ease;
}

/* Subtle gradient so white text is readable */
.hero-action-btn::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.7) 0%, transparent 60%);
    z-index: 2; /* Gradient over image */
    pointer-events: none;
}

.btn-title {
    position: absolute;
    bottom: 15px;
    left: 20px;
    color: #ffffff;
    font-size: 14px;
    font-weight: 500;
    letter-spacing: 2px;
    text-transform: uppercase;
    z-index: 3; /* Text on very top */
}

/* Hover Effects */
.hero-action-btn:hover {
    border-color: #fff;
}

.hero-action-btn:hover img {
    transform: scale(1.1);
}

[dir="rtl"] .hero-bottom-actions {
    left: auto;
    right: 60px;
}
[dir="rtl"] .btn-title {
    left: auto;
    right: 20px;
}

/* Mobile Responsive */
@media (max-width: 1024px) {
    .hero-bottom-actions {
        left: 30px;
        gap: 10px;
    }
    .hero-action-btn {
        width: 180px;
    }
}

@media (max-width: 768px) {
    .hero-bottom-actions {
        bottom: 100px; 
        left: 20px;
        flex-wrap: wrap;
        width: calc(100% - 40px);
    }
    [dir="rtl"] .hero-bottom-actions {
        right: 20px;
    }
    .hero-action-btn {
        width: calc(50% - 5px);
    }
}

/* Flags responsive */
.flags-container {
    display: flex;
    gap: 15px;
    align-items: center;
    flex-grow: 1;
    margin: 0 20px;
    direction: ltr;
    
    /* The magic — fixed height hides wrapped flags */
    flex-wrap: wrap;
    height: 25px;
    overflow: hidden;
    flex-shrink: 1;
    min-width: 0;
}

.flag-img {
    height: 25px;
    width: auto;
    object-fit: contain;
    flex-shrink: 0;
}

</style>
