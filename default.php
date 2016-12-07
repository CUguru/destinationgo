<!-- test comment -->
<!------------ HEADER SECTION ------------>

<?php require 'includes/header.php' ?>
        
<!------------ NAVIGATION & PREFERENCES SECTION ------------>

<main class='section' id='preferences-section'>

    <?php require 'includes/nav.php' ?>

    <div id='preferences-container'>
        <h3>Pick Your Preferences</h3>
        <form id='preferences-form' action=''>
            <div class='categories'>
                <div>
                    <img src='images/placeholder.png'/>
                    <p>Beaches</p>
                </div>
                <div>
                    <img src='images/placeholder.png'/>
                    <p>Mountains</p>
                </div>
            </div> 
            <div class='categories'>
                <div>
                    <img src='images/placeholder.png'/>
                    <p>Relaxing</p>
                </div>
                <div>
                    <img src='images/placeholder.png'/>
                    <p>Nightlife</p>
                </div>
            </div> 
            <div class='categories'>
                <div>
                    <img src='images/placeholder.png'/>
                    <p>High-End</p>
                </div>
                <div>
                    <img src='images/placeholder.png'/>
                    <p>Thrifty</p>
                </div>
            </div> 
            <div class='categories'>
                <div>
                    <img src='images/placeholder.png'/>
                    <p>Urban</p>
                </div>
                <div>
                    <img src='images/placeholder.png'/>
                    <p>Rural</p>
                </div>
            </div> 
            <div class='categories'>
                <div>
                    <img src='images/placeholder.png'/>
                    <p>Kid-Friendly</p>
                </div>
                <div>
                    <img src='images/placeholder.png'/>
                    <p>Adults</p>
                </div>
            </div> 
            <div class='categories'>
                <div>
                    <img src='images/placeholder.png'/>
                    <p>Popular</p>
                </div>
                <div>
                    <img src='images/placeholder.png'/>
                    <p>Hidden Treasures</p>
                </div>
            </div> 
        </form> <!-- end preferences-form -->
        <input type='submit' value='Find Your Vacation'>
    </div> <!-- end preferences-container -->
</main> <!-- end preferences-section -->

<!------------ FEATURED DESTINATIONS SECTION ------------>

<div class='section' id='feat-dest-section'>
    <h3>Featured Destinations</h3>
    <div id='map'>
        <img src='images/map.png'/>
    </div>
    <img class='pin' id='pin-1' src='images/location.svg'/>
    <div class='pin-box' id='pin-1-box'>
        <div class='pin-image' id='pin-1-image'></div>
        <h4>Destination Name</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc efficitur velit eget ipsum auctor, nec vulputate purus dapibus.</p>
    </div>
</div> <!-- end feat-dest-section -->

<!------------ NEWSLETTER SECTION ------------>

<?php require 'includes/newsletter.php' ?>

<!------------ CONTACT SECTION ------------>

<?php require 'includes/contact.php' ?>

<!------------ FOOTER SECTION ------------>

<script src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>

<?php require 'includes/footer.php' ?>