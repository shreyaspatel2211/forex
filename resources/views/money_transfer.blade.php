@include('header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Exchange in India Made Easy</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<style>
    /* General styles */
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f7fb;
        color: #333;
    }

    .container-1 {
        max-width: 1200px;
        margin: 40px auto;
        padding: 40px;
        display: flex;
        justify-content: space-between;
        background: linear-gradient(135deg, #001e37 0%, #0D8478 100%);
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    /* Left content styles */
    .left-content {
        flex-basis: 50%;
        padding-right: 40px;
        color: white;
    }

    .header h1 {
        font-size: 40px;
        font-weight: bold;
        margin-bottom: 20px;
        color: white;
        line-height: 1.2;
    }

    .header p {
        font-size: 18px;
        color: #f1f1f1;
        margin-bottom: 30px;
        line-height: 1.5;
    }

    .features {
        display: flex;
        flex-direction: column;
        margin-top: 40px;
    }

    .feature {
        display: flex;
        align-items: center;
        margin-bottom: 24px;
        padding: 10px 0;
        border-bottom: 1px solid #e0e0e0;
    }

    .feature i {
        font-size: 32px;
        color: #f1f1f1;
        margin-right: 20px;
        transition: transform 0.3s ease;
    }

    .feature i:hover {
        transform: scale(1.1);
    }

    .feature h3 {
        font-size: 22px;
        font-weight: 600;
        margin-bottom: 8px;
        color: #f1f1f1;
    }

    .feature p {
        font-size: 16px;
        color: #ccc;
        line-height: 1.4;
    }

    /* Main container styling */
.trust-info {
    display: flex;
    /* flex-wrap: wrap; */
    justify-content: space-around;
    background: linear-gradient(135deg, #0D8478, #1C5553);
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.2);
    color: #ffffff;
    gap: 20px;
}

/* Individual trust item styling */
.trust-item {
    text-align: center;
    
    flex: 1 1 300px;
    padding: 20px;
    border-radius: 8px;
    background-color: rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

/* Hover effect */
.trust-item:hover {
    transform: translateY(-10px);
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.4);
}

/* Trust heading */
.trust-heading {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 10px;
}

/* Trust details */
.trust-details {
    font-size: 16px;
    margin-bottom: 15px;
}

/* Trust rating styling */
.trust-rating {
    font-size: 20px;
    font-weight: bold;
    display: flex;
    flex-direction: column;
    align-items: center;
}

/* Trust score */
.trust-score {
    color: #FFD700; /* Gold for ratings */
    font-size: 22px;
    margin-bottom: 5px;
}

/* Trust source */
.trust-source {
    font-size: 14px;
    color: #e0e0e0;
}

    /* Exchange form styles */
    .exchange-form {
    margin-top: 70px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 12px rgba(0, 0, 0, 0.1);
    padding: 80px;
    display: flex;
    flex-direction: column;
    align-items: center; /* Center the entire form horizontally */
    justify-content: center; /* Center content vertically if needed */
    text-align: center;
}
    .form-section{
        width: 100%
        
    }

    .form-group {
        width: 100%;
        margin-bottom: 20px;
    }

    .form-group label {
        font-size: 16px;
        font-weight: bold;
        display: block;
        margin-bottom: 8px;
        color: #333;
    }

    .form-group input,
    .form-group select {
        width: 100%;
        padding: 12px 16px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        transition: border 0.3s ease;
    }

    .form-group input:focus,
    .form-group select:focus {
        border: 1px solid #009688;
        outline: none;
    }

    .exchange-info {
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 16px;
        font-size: 18px;
        color: #333;
    }

    .btn-primary {
        background-color: #0D8478;
        color: #fff;
        font-size: 16px;
        font-weight: bold;
        padding: 12px 24px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        margin-top: 50px
    }

    .btn-primary:hover {
        background-color: #001e37;
    }
    .customer-heading {
    text-align: center; /* Center the heading */
    color: #0D8478; /* Apply the desired color */
    font-weight: bold; /* Ensure the heading is bold */
    font-size: 2rem; /* Adjust the font size as needed */
    margin-bottom: 2rem; /* Add space below the heading */
    text-transform: capitalize; /* Optional: Capitalize each word */
}

    

    
    
                .reason {
                    background-color: #001e37; /* Default box color */
                    color: white;             /* Text color */
                    transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease; /* Smooth transition */
                }
            
                .reason:hover {
                    background-color: #0D8478; /* Hover box color */
                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
                    cursor: pointer;          /* Pointer cursor on hover */
                    transform: translateY(-10px); /* Slight lift effect */
                }
            
                .experience {
                    background-color: #001e37; /* Default box color */
                    color: white;              /* Text color */
                    transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease; /* Smooth transition */
                }
            
                .experience:hover {
                    background-color: #0D8478; /* Hover box color */
                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Subtle shadow effect */
                    cursor: pointer;          /* Pointer cursor on hover */
                    transform: translateY(-10px); /* Slight lift effect */
                }
            
    /* Responsive styles */
    @media (max-width: 768px) {
        .container-1 {
            flex-direction: column;
            padding: 20px;
        }

        .left-content {
            flex-basis: 100%;
            padding-right: 0;
            margin-bottom: 30px;
        }

        .exchange-form {
            flex-basis: 100%;
        }

        .features {
            margin-top: 20px;
        }

        .feature {
            flex-direction: column;
            align-items: flex-start;
        }

        .exchange-info {
            flex-direction: column;
            align-items: flex-start;
        }
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
                    <h3 class="trust-heading">Trusted By</h3>
                    <p class="trust-details">Over 125,000 happy users</p>
                    <div class="trust-rating">
                        <span class="trust-score">4.9/5</span>
                        <span class="trust-source">Trustpilot</span>
                    </div>
                </div>
                <div class="trust-item">
                    <h3 class="trust-heading">Google</h3>
                    <p class="trust-details">Rated highly by our users</p>
                    <div class="trust-rating">
                        <span class="trust-score">4.7/5</span>
                        <span class="trust-source">Google Reviews</span>
                    </div>
                </div>
                <div class="trust-item">
                    <h3 class="trust-heading">Our Users</h3>
                    <p class="trust-details">Join a growing community</p>
                    <div class="trust-rating">
                        <span class="trust-score">125,000+</span>
                        <span class="trust-source">Happy Customers</span>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="exchange-form">
            <!-- Tab Section -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <div id="forexTab" data-tab="forex" class="tab-button text-center p-3 tab-active cursor-pointer">
                        Forex Card & Cash
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="sendTab" data-tab="send" class="tab-button text-center p-3 tab-inactive cursor-pointer">
                        Send Money
                    </div>
                </div>
            </div>
    
            <!-- Forex Form -->
            <div id="forexForm" class="form-section">
                <div class="row">
                    <div class="form-group">
                        <label for="travelDestination" class="form-label">Travel Destination</label>
                        <select id="travelDestination" class="form-select">
                            <option value="">Select Destination </option>
                            <option value="USA">United States</option>
                            <option value="UK">United Kingdom</option>
                            <option value="AUS">Australia</option>
                            <option value="CAN">Canada</option>
                            <!-- Add more countries -->
                        </select>
                        <div id="destinationChips" class="mt-2"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="forexProduct" class="form-label">Product</label>
                        <select id="forexProduct" class="form-select">
                            <option value="">Select Product</option>
                            <option value="currency">Currency</option>
                            <option value="forex-card">Forex Card</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="forexCurrency" class="form-label">Currency</label>
                        <select id="forexCurrency" class="form-select">
                            <option value="">Select Currency</option>
                            <option value="USD">USD</option>
                            <option value="AUD">AUD</option>
                            <option value="EUR">EUR</option>
                            <option value="JPY">JPY</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="buyAmount" class="form-label">Buy Amount</label>
                        <input type="number" id="buyAmount" class="form-control" placeholder="Enter amount">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button id="forexSubmit" class="btn btn-primary w-100">Exchange Now</button>
                    </div>
                </div>
            </div>
    
            <!-- Send Money Form (Initially Hidden) -->
            <div id="sendForm" class="form-section" style="display:none;">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="sendCountry" class="form-label">Send Money To</label>
                        <select id="sendCountry" class="form-select">
                            <option value="">Select Country</option>
                            <option value="USA">United States</option>
                            <option value="UK">United Kingdom</option>
                            <option value="AUS">Australia</option>
                            <option value="CAN">Canada</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="remittancePurpose" class="form-label">Purpose of Remittance</label>
                        <select id="remittancePurpose" class="form-select">
                            <option value="">Select Purpose</option>
                            <option value="tuition">Tuition Fees</option>
                            <option value="gift">Gift</option>
                            <option value="personal">Personal</option>
                            <option value="business">Business</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="sendAmount" class="form-label">Send Amount</label>
                        <input type="number" id="sendAmount" class="form-control" placeholder="Enter amount">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <button id="sendSubmit" class="btn btn-primary w-100">Send Money</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container py-10">
        <div class="container-2">
            <!-- Why People Prefer Extravel Money Section -->
            <div class="why-prefer p-10 rounded-lg shadow-xl" style="background-color: #0D8478; color: #ffffff;">
                <h2 class="font-bold text-4xl mb-6 text-center">
                    Why People Prefer and Trust <span style="color: #FFD700;">Extravel Money</span>
                </h2>
                <p class="text-center text-lg mb-10">
                    We offer the most competitive rates, fastest delivery, and top-notch customer support. Here's why our users trust us:
                </p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Reason 1 -->
                    <div class="reason p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105" style="background-color: #001e37; color: #ffffff;">
                        <h3 class="font-semibold text-xl mb-3" style="color: #FFD700;">Best Exchange Rates</h3>
                        <p class="text-base">Our rates are consistently better than market rates, helping you save more money when you exchange currency.</p>
                    </div>
                    <!-- Reason 2 -->
                    <div class="reason p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105" style="background-color: #001e37; color: #ffffff;">
                        <h3 class="font-semibold text-xl mb-3" style="color: #FFD700;">Fast and Reliable</h3>
                        <p class="text-base">Quick transactions and guaranteed delivery within 48 working hours, ensuring a smooth exchange process.</p>
                    </div>
                    <!-- Reason 3 -->
                    <div class="reason p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105" style="background-color: #001e37; color: #ffffff;">
                        <h3 class="font-semibold text-xl mb-3" style="color: #FFD700;">Expert Support</h3>
                        <p class="text-base">Our team of professionals is always available to assist you and answer your queries at every step of the process.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
            
            <!-- User Experiences Section -->
            <div class="user-experiences mt-16 p-8 rounded-lg shadow-lg" style="background-color: white; color: black;">
                <h2 class="customer-heading">What Our Customers Say</h2>

                <div class="flex flex-wrap justify-center gap-8">
                    <!-- Customer Experience Boxes -->
                    <div class="experience p-6 rounded-lg shadow-lg w-72 transition-all transform hover:scale-105">
                        <p class="text-lg">"I used Extravel Money to get USD for my trip. The rates were great, and the process was so simple!"</p>
                        <p class="font-semibold mt-3 text-xl">John Doe</p>
                    </div>
                    <div class="experience p-6 rounded-lg shadow-lg w-72 transition-all transform hover:scale-105">
                        <p class="text-lg">"Fantastic service! The currency was delivered to my doorstep in just 24 hours. Highly recommend!"</p>
                        <p class="font-semibold mt-3 text-xl">Jane Smith</p>
                    </div>
                    <div class="experience p-6 rounded-lg shadow-lg w-72 transition-all transform hover:scale-105">
                        <p class="text-lg">"I needed foreign currency for my business trip, and Extravel Money made it incredibly easy. Excellent customer support!"</p>
                        <p class="font-semibold mt-3 text-xl">Mike Johnson</p>
                    </div>
                </div>
            </div>
            
            <!-- CSS -->
            
            
<div class="press-section p-8 text-center bg-white">
    <h2 class="text-3xl font-bold mb-6">Excerpts From the Press</h2>
    <div class="quotes-container grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Quote 1 -->
        <div class="quote-box p-6 rounded-lg shadow-md transition-transform transform hover:scale-105 bg-theme-dark text-white">
            <p class="text-lg italic mb-4">"Travelers can compare the rates of various dealers in their city and get forex delivered."</p>
            <p class="font-semibold text-sm">— Forbes</p>
        </div>
        <!-- Quote 2 -->
        <div class="quote-box p-6 rounded-lg shadow-md transition-transform transform hover:scale-105 bg-theme-dark text-white">
            <p class="text-lg italic mb-4">"Extravelmoney ensures a smooth experience for customers while transferring money abroad."</p>
            <p class="font-semibold text-sm">— The Economic Times</p>
        </div>
        <!-- Quote 3 -->
        <div class="quote-box p-6 rounded-lg shadow-md transition-transform transform hover:scale-105 bg-theme-dark text-white">
            <p class="text-lg italic mb-4">"Competition among the different forex providers on the platform leads to better deals for customers."</p>
            <p class="font-semibold text-sm">— The New Indian Express</p>
        </div>
    </div>
</div>

<!-- CSS -->
<style>
    :root {
        --theme-dark: #001e37;
        --theme-accent: #0D8478;
    }

    .press-section h2 {
        color: var(--theme-dark);
        text-transform: uppercase;
        border-bottom: 2px solid var(--theme-accent);
        display: inline-block;
        padding-bottom: 5px;f
    }

    .quote-box {
        background-color: var(--theme-dark);
        color: white;
        text-align: center;
        border: 2px solid var(--theme-accent);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .quote-box:hover {
        transform: scale(1.05);
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
    }

    .quote-box p {
        margin: 0;
    }

    .quotes-container {
        display: grid;
        gap: 1.5rem;
    }

    @media (min-width: 768px) {
        .quotes-container {
            grid-template-columns: repeat(3, 1fr);
        }
    }
</style>
<div class="currency-exchange-section">
    <h2 class="section-title">Foreign Currency Exchange in India</h2>
    <div class="currency-exchange-content">
        <div class="content-block">
            <h3 class="content-title">How It Works</h3>
            <p>Compare rates from trusted forex dealers, select the best deal, and book online. Get doorstep delivery or collect from nearby branches.</p>
        </div>
        <div class="content-block">
            <h3 class="content-title">Benefits of Using Our Platform</h3>
            <ul>
                <li>Transparent pricing with no hidden charges.</li>
                <li>Doorstep delivery for convenience.</li>
                <li>24/7 customer support for queries.</li>
            </ul>
        </div>
        <div class="content-block">
            <h3 class="content-title">Trusted By Millions</h3>
            <p>We have served over 1 million customers across India, offering the best exchange rates and unparalleled service quality.</p>
        </div>
    </div>
</div>
<style>
    :root {
        --theme-dark: #001e37;
        --theme-accent: #0D8478;
        --theme-light: #f9f9f9;
    }

    /* Section Styling */
    .currency-exchange-section {
        background-color: var(--theme-light);
        padding: 2rem 1.5rem;
        text-align: center;
        border: 1px solid var(--theme-accent);
        border-radius: 8px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

    /* Heading Styling */
    .section-title {
        color: var(--theme-dark);
        font-size: 2rem;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
        display: inline-block;
        border-bottom: 3px solid var(--theme-accent);
        margin-bottom: 2rem;
        padding-bottom: 0.3rem;
    }

    /* Content Styling */
    .currency-exchange-content {
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }

    .content-block {
        background-color: var(--theme-dark);
        color: white;
        padding: 1.5rem;
        border-radius: 10px;
        text-align: left;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .content-block:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
    }

    .content-title {
        font-size: 1.5rem;
        font-weight: bold;
        color: var(--theme-accent);
        margin-bottom: 0.8rem;
    }

    .content-block ul {
        list-style: inside square;
        padding-left: 0;
    }

    .content-block ul li {
        margin: 0.5rem 0;
        color: white;
    }
</style>
            
<div class="procedure-section">
    <h2>How to Exchange Currency</h2>
    <div class="procedure-steps">
        <div class="step">
            <i class="fas fa-search-dollar"></i>
            <h3>Step 1: Choose Your Currency</h3>
            <p>Select the currency you need for your travel destination and the product (currency or forex card) you wish to exchange.</p>
        </div>
        <div class="step">
            <i class="fas fa-credit-card"></i>
            <h3>Step 2: Select Payment Option</h3>
            <p>Choose your preferred payment method. We accept various payment options for your convenience.</p>
        </div>
        <div class="step">
            <i class="fas fa-truck"></i>
            <h3>Step 3: Confirm & Book</h3>
            <p>Review your selected options, confirm the exchange, and book it with a click of a button.</p>
        </div>
        <div class="step">
            <i class="fas fa-home"></i>
            <h3>Step 4: Receive Delivery</h3>
            <p>Your exchange will be delivered directly to your address in 48 hours or less.</p>
        </div>
    </div>
</div>

<style>
    /* General Section Styling */
    .procedure-section {
        background-color: #f4f7fb;
        padding: 60px 20px;
        text-align: center;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        max-width: 1200px;
        margin: 40px auto;
    }

    .procedure-section h2 {
        font-size: 36px;
        font-weight: 600;
        margin-bottom: 40px;
        color: #003b5c;
    }

    .procedure-steps {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        gap: 30px;
    }

    .step {
        background-color: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        width: 220px;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .step:hover {
        transform: translateY(-10px);
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.2);
    }

    .step i {
        font-size: 50px;
        color: #007bff;
        margin-bottom: 20px;
        transition: transform 0.3s ease;
    }

    .step:hover i {
        transform: scale(1.1);
    }

    .step h3 {
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 10px;
        color: #003b5c;
    }

    .step p {
        font-size: 16px;
        color: #666;
        line-height: 1.4;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .procedure-steps {
            flex-direction: column;
            align-items: center;
        }

        .step {
            width: 90%;
            margin-bottom: 20px;
        }
    }
</style>
<div class="documents-section">
    <h2>Documents Required for Exchange</h2>
    <div class="documents-list">
        <div class="document-item">
            <i class="fas fa-id-card"></i>
            <h3>Identity Proof</h3>
            <p>Provide a government-issued ID such as a passport, Aadhar card, or driver's license.</p>
        </div>
        <div class="document-item">
            <i class="fas fa-file-invoice"></i>
            <h3>Proof of Address</h3>
            <p>Submit a utility bill or bank statement dated within the last three months.</p>
        </div>
        <div class="document-item">
            <i class="fas fa-calendar-alt"></i>
            <h3>Travel Itinerary</h3>
            <p>Provide your flight booking or travel plans for the upcoming trip.</p>
        </div>
        <div class="document-item">
            <i class="fas fa-money-bill-wave"></i>
            <h3>Proof of Funds</h3>
            <p>Show your bank statement or other financial documents as proof of available funds.</p>
        </div>
    </div>
</div>

<style>
    /* General Section Styling */
    .documents-section {
        background-color: #e9f7f2;
        padding: 60px 20px;
        text-align: center;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        max-width: 1200px;
        margin: 40px auto;
    }

    .documents-section h2 {
        font-size: 36px;
        font-weight: 600;
        margin-bottom: 40px;
        color: #004d40;
    }

    .documents-list {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        gap: 30px;
    }

    .document-item {
        background-color: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        width: 220px;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .document-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.2);
    }

    .document-item i {
        font-size: 50px;
        color: #009688;
        margin-bottom: 20px;
        transition: transform 0.3s ease;
    }

    .document-item:hover i {
        transform: scale(1.1);
    }

    .document-item h3 {
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 10px;
        color: #004d40;
    }

    .document-item p {
        font-size: 16px;
        color: #666;
        line-height: 1.4;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .documents-list {
            flex-direction: column;
            align-items: center;
        }

        .document-item {
            width: 90%;
            margin-bottom: 20px;
        }
    }
</style>
<div class="top-cities-section">
    <h2 class="section-title">Top Cities in India We Serve</h2>
    <div class="cities-list">
        <div class="city-item">
            <div class="city-icon">&#9733;</div> <!-- Star Icon -->
            <h3>Mumbai</h3>
            <p>The financial capital of India, known for its vibrant nightlife and Bollywood.</p>
        </div>
        <div class="city-item">
            <div class="city-icon">&#9733;</div> <!-- Star Icon -->
            <h3>Delhi</h3>
            <p>The capital city with a rich history and modern infrastructure.</p>
        </div>
        <div class="city-item">
            <div class="city-icon">&#9733;</div> <!-- Star Icon -->
            <h3>Bangalore</h3>
            <p>The tech hub of India, known for its startups and cool weather.</p>
        </div>
        <div class="city-item">
            <div class="city-icon">&#9733;</div> <!-- Star Icon -->
            <h3>Chennai</h3>
            <p>Known for its cultural heritage and stunning coastal beauty.</p>
        </div>
        <div class="city-item">
            <div class="city-icon">&#9733;</div> <!-- Star Icon -->
            <h3>Kolkata</h3>
            <p>The cultural capital, famous for its colonial architecture and literary heritage.</p>
        </div>
        <div class="city-item">
            <div class="city-icon">&#9733;</div> <!-- Star Icon -->
            <h3>Hyderabad</h3>
            <p>Known for its historical sites and the world-famous Hyderabadi biryani.</p>
        </div>
    </div>
</div>


<style>
    /* General Section Styling */
    .top-cities-section {
    background-color: #f8f9fa; /* Light gray background */
    color: #333; /* Text color */
    padding: 40px 20px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    text-align: center;
    max-width: 800px;
    margin: 0 auto; /* Center align */
}

.section-title {
    font-size: 28px;
    font-weight: bold;
    color:#009688; /* Highlight color */
    margin-bottom: 30px;
}

.cities-list {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center; /* Center items */
}

.city-item {
    background-color: #ffffff; /* White box */
    border: 2px solid#009688; /* Border color to match highlight */
    border-radius: 8px;
    padding: 20px;
    width: 250px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Light shadow */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.city-item:hover {
    transform: translateY(-5px); /* Lift on hover */
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); /* Intense shadow */
}

.city-icon {
    font-size: 32px;
    color: #ffc107; /* Gold color for icons */
    margin-bottom: 10px;
}

.city-item h3 {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 10px;
    color: #007bff; /* Highlight color */
}

.city-item p {
    font-size: 16px;
    line-height: 1.5;
    color: #555; /* Softer text color */
}


    /* Responsive Design */
    @media (max-width: 768px) {
        .top-cities-section {
            padding: 40px 20px;
        }

        .cities-list {
            grid-template-columns: 1fr 1fr;
        }

        .city-item {
            width: 90%;
        }
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const forexTab = document.getElementById('forexTab');
        const sendTab = document.getElementById('sendTab');
        const forexForm = document.getElementById('forexForm');
        const sendForm = document.getElementById('sendForm');
        const travelDestination = document.getElementById('travelDestination');
        const destinationChips = document.getElementById('destinationChips');
    
        // Tab switching
        forexTab.addEventListener('click', () => {
            forexTab.classList.add('tab-active');
            forexTab.classList.remove('tab-inactive');
            sendTab.classList.remove('tab-active');
            sendTab.classList.add('tab-inactive');
            forexForm.style.display = 'block';
            sendForm.style.display = 'none';
        });
    
        sendTab.addEventListener('click', () => {
            sendTab.classList.add('tab-active');
            sendTab.classList.remove('tab-inactive');
            forexTab.classList.remove('tab-active');
            forexTab.classList.add('tab-inactive');
            sendForm.style.display = 'block';
            forexForm.style.display = 'none';
        });
    
        // Multi-select for Travel Destinations with Chips
        travelDestination.addEventListener('change', (e) => {
            Array.from(e.target.selectedOptions).forEach(option => {
                // Check if this option is already present as a chip
                const existingChip = Array.from(destinationChips.querySelectorAll('.chip-close'))
                    .find(closeBtn => closeBtn.dataset.value === option.value);
                
                if (!existingChip) {
                    const chip = document.createElement('span');
                    chip.classList.add('chip');
                    chip.innerHTML = `
                        ${option.text} 
                        <span class="chip-close" data-value="${option.value}">×</span>
                    `;
                    destinationChips.appendChild(chip);

                    // Add click event to chip close button
                    chip.querySelector('.chip-close').addEventListener('click', () => {
                        const valueToRemove = option.value;
                        const optionToUnselect = Array.from(travelDestination.options)
                            .find(opt => opt.value === valueToRemove);
                        if (optionToUnselect) {
                            optionToUnselect.selected = false;
                        }
                        chip.remove();
                    });
                }
            });

            // Reset the select input
            travelDestination.selectedIndex = 0;
        });
    
        // Form submission handlers (just console log for now)
        document.getElementById('forexSubmit').addEventListener('click', () => {
            const destinations = Array.from(travelDestination.selectedOptions).map(opt => opt.text);
            const product = document.getElementById('forexProduct').value;
            const currency = document.getElementById('forexCurrency').value;
            const amount = document.getElementById('buyAmount').value;
    
            console.log('Forex Submission:', { destinations, product, currency, amount });
        });
    
        document.getElementById('sendSubmit').addEventListener('click', () => {
            const country = document.getElementById('sendCountry').value;
            const purpose = document.getElementById('remittancePurpose').value;
            const amount = document.getElementById('sendAmount').value;
    
            console.log('Send Money Submission:', { country, purpose, amount });
        });
    });
    </script>
</body>
</html>
@include('footer')

        