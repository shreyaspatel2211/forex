@include('header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Exchange in India Made Easy</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container-1 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px;
            display: flex;
            justify-content: space-between;
            background-color: #001e37;
            color:white
            
        }
        .exchange-form{
            background-color: #0D8478;
        }

        /* Left content styles */
        .left-content {
            flex-basis: 50%;
            padding-right: 40px;
            color: white;
            
        }

        .header h1 {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 16px;
            color: white
        }

        .header p {
            font-size: 18px;
            color: #666;
            color: white
        }

        .features {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-top: 40px;
            color: white
        }

        .feature {
            display: flex;
            align-items: center;
            margin-bottom: 24px;
        }

        .feature i {
            font-size: 36px;
            color:  #0D8478;
            margin-right: 16px;
        }

        .feature h3 {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .feature p {
            font-size: 16px;
            color: #666;
        }
       

        .trust-info {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-top: 40px;
        }

        .trust-item {
            display: flex;
            align-items: center;
            margin-bottom: 16px;
        }

        .trust-item p {
            font-size: 16px;
            font-weight: bold;
            margin-right: 16px;
        }

        .trust-rating,
        .trust-users {
            display: flex;
            align-items: center;
        }

        .trust-icon {
            width: 24px;
            height: 24px;
            margin-right: 8px;
        }

        .trust-score {
            font-size: 18px;
            font-weight: bold;
            color: #007bff;
        }

        /* Exchange form styles */
        .exchange-form {
            flex-basis: 50%;
            background-color: #f5f5f5;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            padding: 24px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .form-group {
            width: 100%;
            margin-bottom: 16px;
        }

        .form-group label {
            font-size: 16px;
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 12px 16px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .exchange-info {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 16px;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            padding: 12px 24px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .chat-button {
            text-align: right;
            margin-top: 16px;
        }

        .btn-chat {
            background-color: #28a745;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container-1">
        <div class="left-content">
            <div class="header">
                <h1>Currency Exchange in India Made Easy</h1>
                <p>Get the best exchange rates from money changers near you! Book foreign currency & forex cards online with doorstep delivery from RBI-authorized money changers.</p>
            </div>
            <div class="features">
                <div class="feature">
                    <i class="fas fa-piggy-bank"></i>
                    <div>
                        <h3>Save More</h3>
                        <p>5%+ better than market rates.</p>
                    </div>
                </div>
                <div class="feature">
                    <i class="fas fa-shipping-fast"></i>
                    <div>
                        <h3>Fast Credit</h3>
                        <p>Credit/Delivery in 48 working hours.</p>
                    </div>
                </div>
                <div class="feature">
                    <i class="fas fa-headset"></i>
                    <div>
                        <h3>Expert Help</h3>
                        <p>Professional support, every step.</p>
                    </div>
                </div>
            </div>
            <div class="trust-info">
                <div class="trust-item">
                    <p>Trusted By</p>
                    <div class="trust-rating">
                        <img src="trustpilot.png" alt="Trustpilot" class="trust-icon">
                        <span class="trust-score">4.9/5</span>
                    </div>
                </div>
                <div class="trust-item">
                    <p>Google</p>
                    <div class="trust-rating">
                        <img src="google.png" alt="Google" class="trust-icon">
                        <span class="trust-score">4.7/5</span>
                    </div>
                </div>
                <div class="trust-item">
                    <p>125000+ Users</p>
                    <div class="trust-users">
                        <img src="user.png" alt="User" class="trust-icon">
                        <img src="user.png" alt="User" class="trust-icon">
                        <img src="user.png" alt="User" class="trust-icon">
                        <img src="user.png" alt="User" class="trust-icon">
                        <img src="user.png" alt="User" class="trust-icon">
                    </div>
                </div>
            </div>
        </div>
        <div class="exchange-form">
            <div class="form-group">
                <label for="destination">Choose your Travel Destination</label>
                <select id="destination" name="destination">
                    <option value="">Select Your Travel Destination</option>
                    <!-- Add options for travel destinations -->
                </select>
            </div>
            <div class="form-group">
                <label for="product">Choose Product</label>
                <select id="product" name="product">
                    <option value="currency">Currency</option>
                    <!-- Add options for other products -->
                </select>
            </div>
            <div class="form-group">
                <label for="currency">Choose Currency</label>
                <select id="currency" name="currency">
                    <option value="usd">US Dollar</option>
                    <!-- Add options for other currencies -->
                </select>
            </div>
            <div class="form-group">
                <label for="amount">Buy USD</label>
                <input type="number" id="amount" name="amount" value="1000">
            </div>
            <div class="exchange-info">
                <p>is approximately 85,210 INR</p>
                <button class="btn-primary">Get Best Rates</button>
            </div>
        </div>
    </div>
    <a href="#" class="btn-chat">Chat with us</a>
</div>

{{-- <div class="bg-theme2 p-3 py-5 md:py-0 md:p-[64px]"> --}}
    <div class="container">
        <div class="container-2">
            <!-- Tab Section -->
            <div class="flex flex-col md:flex-row">
                <div data-tab="forex" class="tab-button flex items-center justify-center w-full md:w-1/2 p-3 text-center tab-active cursor-pointer">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-3">
                        <path d="M1 12.1999C1 7.55615 4.7562 3.8 9.4 3.8L8.2002 6.19957M29 17.7998C29 22.4435 25.2438 26.1997 20.6 26.1997L21.7998 23.8001M22 7.29995H22.0126M8 22.6997H8.0126M22.35 1.72243C24.912 0.665447 27.1688 1.01684 28.391 1.24084C28.7396 1.30524 29 1.64683 29 2.04303V11.0869C29 11.5601 28.6332 11.9129 28.216 11.8401C26.9616 11.6175 24.7958 11.3431 22.35 12.3511C19.7208 13.4361 17.0748 13.6391 15.63 13.5943C15.2716 13.5831 15 13.2443 15 12.8383V3.7944C15 3.32821 15.357 2.96141 15.7714 2.96841C17.2414 2.99641 19.8034 2.77242 22.35 1.72243ZM8.35 17.1222C10.912 16.0652 13.1674 16.4166 14.391 16.6406C14.7396 16.705 15 17.0466 15 17.4428V26.4867C15 26.9599 14.6332 27.3127 14.216 27.2399C12.9616 27.0173 10.7958 26.7429 8.35 27.7523C5.7208 28.8358 3.0748 29.0402 1.63 28.994C1.2716 28.9828 1 28.644 1 28.238V19.1928C1 18.7266 1.357 18.3598 1.7714 18.3668C3.2414 18.3948 5.8034 18.1722 8.35 17.1222Z" stroke="#0D8478" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    Forex Card &amp; Cash
                </div>
                <div data-tab="send" class="tab-button w-full md:w-1/2 p-3 flex items-center justify-center tab-inactive cursor-pointer">
                    <svg class="mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.1065 0.893318C22.8543 0.642874 22.5379 0.466813 22.1921 0.384484C21.8463 0.302155 21.4845 0.316745 21.1465 0.426651L1.63984 6.93332C1.27807 7.04795 0.958381 7.26723 0.721156 7.56344C0.483932 7.85966 0.339811 8.21953 0.306997 8.59761C0.274183 8.9757 0.363878 9.34092 0.56323 9.55253L9.10673 18.1055C9.23804 18.3349 9.45126 18.4559 9.68368 18.4562L19.3181 18.4571C19.5505 18.4568 19.7637 18.3352 19.895 18.1054L28.4385 9.55247C28.6379 9.34086 28.7275 8.97563 28.6947 8.59757C28.6619 8.2195 28.5178 7.85963 28.2806 7.56342C28.0434 7.26721 27.7237 7.04792 27.3629 6.93329L7.85523 0.426641C7.51725 0.316735 7.15544 0.302145 6.80968 0.384473C6.46391 0.466802 6.14751 0.642864 5.8953 0.893318L23.1065 0.893318Z" stroke="#0D8478" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    Send Money Online
                </div>
            </div>

            <!-- Why People Prefer Extravel Money Section -->
            {{-- <div class="why-prefer us bg-theme2 p-8 rounded shadow-md"> --}}
                <h2 class="font-bold mb-8">Why People Prefer and Trust Extravel Money</h2>
                <p class="mb-8">We offer the most competitive rates, fastest delivery, and top-notch customer support. Here's why our users trust us:</p>
                <div class="flex flex-wrap justify-center gap-8">
                    <!-- Add a few reasons for preference -->
                    <div class="reason p-5 rounded shadow-md bg-theme3">
                        <h3 class="font-semibold mb-3">Best Exchange Rates</h3>
                        <p>Our rates are consistently better than market rates, helping you save more money when you exchange currency.</p>
                    </div>
                    <div class="reason p-5 rounded shadow-md bg-theme3">
                        <h3 class="font-semibold mb-3">Fast and Reliable</h3>
                        <p>Quick transactions and guaranteed delivery within 48 working hours, ensuring a smooth exchange process.</p>
                    </div>
                    <div class="reason p-5 rounded shadow-md bg-theme3">
                        <h3 class="font-semibold mb-3">Expert Support</h3>
                        <p>Our team of professionals is always available to assist you and answer your queries at every step of the process.</p>
                    </div>
                </div>
            </div>

            <!-- User Experiences Section -->
            <div class="user-experiences mt-12 bg-theme3 p-8 rounded shadow-md">
                <h2 class="font-bold mb-8">What Our Customers Say</h2>
                <div class="flex flex-wrap justify-center gap-8">
                    <!-- Add customer experience examples -->
                    <div class="experience p-5 rounded shadow-md w-72 bg-theme3">
                        <p>"I used Extravel Money to get USD for my trip. The rates were great, and the process was so simple!"</p>
                        <p class="font-semibold mt-3">John Doe</p>
                    </div>
                    <div class="experience p-5 rounded shadow-md w-72 bg-theme3">
                        <p>"Fantastic service! The currency was delivered to my doorstep in just 24 hours. Highly recommend!"</p>
                        <p class="font-semibold mt-3">Jane Smith</p>
                    </div>
                    <div class="experience p-5 rounded shadow-md w-72 bg-theme3">
                        <p>"I needed foreign currency for my business trip, and Extravel Money made it incredibly easy. Excellent customer support!"</p>
                        <p class="font-semibold mt-3">Mike Johnson</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>
@include('footer')

        