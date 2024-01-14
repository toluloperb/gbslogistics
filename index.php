<?php
    include('includes/header.php');
    include('includes/navbar.php');
    include('includes/slider.php');
?>

<!-- <div class="main-body">
    <div class="content">
        <img src="images/welcome-back.png" alt="">
        <p>Join over 50,000 Customers to easily move packages anywhere, anytime!</p>
    </div>

    <div class="content2">
        <p><strong>Follow us for more:</strong></p>
        <div class="icons">
            <a href="https://facebook.com/falconrushltd"><img src="images/facebook.png" alt=""></a>
            <a href="https://instagram.com/falconrushltd"><img src="images/instagram.png" alt=""></a>
        </div>
    </div>
</div> -->

<div class="main-body">
    <div class="main-body-box">
        <p>Join over <strong class="special-text">50,000+</strong> Customers to easily move your packages anywhere, anytime!</p>
    </div>
</div>

<div class="title">
    <h2>Our services</h2>
</div>

<div class="flex-container" id="services">
    <div class="flex-box">
        <img src="images/air-freight.jpg" alt="">
        <h2>Freight Services</h2>
        <p>Global Resources Limited provides a turnkey service for your international air
            transport needs. We work with the world’s leading commercial local and
            international freight airlines (Emirates Skycargo, United Airline, KLM
            Airfrance, British Airways Cargo,...</p>
        <a href="freight-services.php"><button>Learn more</button></a>
    </div>
    <div class="flex-box">
        <img src="images/ocean-freight-service.jpg" alt="">
        <h2>Sea Freight Services</h2>
        <p>Global Resources Limited’s sea freight services are the best way to handle
            large-scale international logistics needs. We have operations at major
            international ports in Nigeria and several ports of discharge around the
            world, and we work with... </p>
        <a href="sea-freight.php"><button>Learn more</button></a>
    </div>
    <div class="flex-box">
        <img src="images/road-freight.jpg" alt="">
        <h2>Road Freight Services</h2>
        <p>Global Resources Limited oers full transportation arrangements and support
            for all of your road freight needs. We support local & interstate cargo
            dispatch, and international road freight transport, including solo and
            combined transports,...</p>
        <a href="road-freight.php"><button>Learn more</button></a>
    </div>
    <div class="flex-box">
        <img src="images/warehousing.jpg" alt="">
        <h2>Freight Warehousing Services</h2>
        <p>Third-party warehousing services are provided by Global Resources Limited in
            the following locations:
            NAHCO WAREHOUSE Ikeja, Lagos Nigeria.
            SACO WAREHOUSE Ikeja, Lagos
            ...</p>
        <a href="warehousing.php"><button>Learn more</button></a>
    </div>
</div>

<br><br>

<section class="quotings" id="quotings">
    <div class="quoteContainer">
        <div class="quoteTitle">
            <h1>Book a Shipment now</h1>
        </div>
        <div class="quoteform">
            <div class="quotes">
                <div>
                    <h3>Complete the form fields</h3>
                </div>
                <form action="functions/userFunctions.php" method="post">
                    <input type="text" name="fullname" placeholder="Your Fullname" style="width: 98%;"><br>
                    <input type="text" name="email" placeholder="Email">
                    <input type="text" name="tel" placeholder="Your telephone number"><br><br>
                    <input type="text" name="package" placeholder="What are you shipping?" style="width: 98%;"><br>
                    <input type="text" name="quantity" placeholder="Quantity">
                    <input type="text" name="weight" placeholder="Weight in kg"><br>
                    <input type="text" name="fromlocation" placeholder="Where are you sending from?">
                    <input type="text" name="tolocation" placeholder="Where are you sending to?">
                    <input type="submit" value="Get a Quote" name="getQuote" id="quoteBtn" style="padding:0;">
                </form>
            </div>
        </div>
    </div>
</section>

<!-- <div class="whyContainer">
    <div class="title">
        <h2 style="color: #fff;">Why Choose Us?</h2>
    </div>
    <div class="card">
        <div class="imgBx">
            <img src="images/warehousing.jpg" alt="">
        </div>
        <div class="content">
            <h2>Expertise</h2><br>
            <p>Global Resources Limited has dedicated experts, experienced in the industry, making us one of the most competitive
            companies in the logistical space in Nigeria. <br> <br>
            When working in this industry, you not only need skills to make a task happen, but you also need an established
            network, which only comes with experience
            <br>
            <br>
            Our team consists of carefully chosen group of experts who have the necessary knowledge to successfully
                    complete your tasks. <br> <br>
            To ensure we have a systematic approach when handling your company's logistics, in addition to the
            expertise of having a great team on board, we have also enlisted the help of the best tech in our space, such as
            state-of-the-art workstations, modern oce facilities, and a seamless tracking and correspondence process.</p>
        </div>
    </div>

    <div class="card">
        <div class="imgBx">
            <img src="images/warehousing.jpg" alt="">
        </div>
        <div class="content">
            <h2>Communication</h2> <br>
            <p>Communication is our top priority, ensuring that every development, big and small, is quickly conveyed to you.</p>
        </div>
    </div>

    <div class="card">
        <div class="imgBx">
            <img src="images/warehousing.jpg" alt="">
        </div>
        <div class="content">
            <h2>Flexibility</h2><br>
            <p>Although we create a tailor-made approach that’s specific to your needs and requirements, we are also flexible.
                Rest assured that Global Resources Limited will be there to cover for you in every situation because we realize that
                working in the logistical space often involves slight interruptions and changes</p>
        </div>
    </div>

    <div class="card">
        <div class="imgBx">
            <img src="images/warehousing.jpg" alt="">
        </div>
        <div class="content">
            <h2>Affordable rate</h2><br>
            <p>We also pride ourselves on oering some of the most aordable rates in the industry. In some situations, we will
            also oer to pre match!.</p>
        </div>
    </div>

    <div class="card">
        <div class="imgBx">
            <img src="images/warehousing.jpg" alt="">
        </div>
        <div class="content">
            <h2>We are everywhere just for you</h2><br>
            <p>We're not just present in the country; we also have a network in place and conduct business in some of the
            world's busiest ports, including those in Africa, the United Kingdom, North and South America, Asia, and
            Australia.</p>
        </div>
    </div>
    <div class="space"></div>
</div> -->

</body>

<script>
    function myFunction() {
        var x = document.getElementById("myLinks");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }
</script>

<?php
    include('includes/footer.php')
?>
</html>