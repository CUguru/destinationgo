<!-- HEADER SECTION -->

<!-- <?php require 'includes/header.php' ?> -->
        
<!-- NAVIGATION & PREFERENCES SECTION -->

<main class='section' id='preferences-section'>

    <?php require 'includes/nav.php' ?>
<!-- Will be changing the div categories to input boxes for the php -->
    <div id='preferences-container'>
        <h3>Pick Your Preferences</h3>
        <form id='preferences-form' action=''>
            <div class='categories'>
                <div>
                    <label><input type="radio" name="weather" value="beaches">Beaches</label>
                    <img src='images/placeholder.png'/>
                    <p>Beaches</p>
                </div>
                <div>
                    <label><input type="radio" name="weather" value="mountains">Mountains</label>
                    <img src='images/placeholder.png'/>
                    <p>Mountains</p>
                </div>
            </div> 
            <div class='categories'>
                <div>
                    <label><input type="radio" name="activity" value="relaxing">Relaxing</label>
                    <img src='images/placeholder.png'/>
                    <p>Relaxing</p>
                </div>
                <div>
                    <label><input type="radio" name="activity" value="nightlife">Nightlife</label>
                    <img src='images/placeholder.png'/>
                    <p>Nightlife</p>
                </div>
            </div> 
            <div class='categories'>
                <div>
                    <label><input type="radio" name="cost" value="high">High_End</label>
                    <img src='images/placeholder.png'/>
                    <p>High-End</p>
                </div>
                <div>
                    <label><input type="radio" name="cost" value="low">Low-End</label>
                    <img src='images/placeholder.png'/>
                    <p>Thrifty</p>
                </div>
            </div> 
            <div class='categories'>
                <div>
                    <label><input type="radio" name="location" value="urban">Urban</label>
                    <img src='images/placeholder.png'/>
                    <p>Urban</p>
                </div>
                <div>
                    <label><input type="radio" name="location" value="rural">Rural</label>
                    <img src='images/placeholder.png'/>
                    <p>Rural</p>
                </div>
            </div> 
            <div class='categories'>
                <div>
                    <label><input type="radio" name="family" value="kids">Kid-Friendly</label>
                    <img src='images/placeholder.png'/>
                    <p>Kid-Friendly</p>
                </div>
                <div>
                    <label><input type="radio" name="family" value="adults">Adults-Only</label>
                    <img src='images/placeholder.png'/>
                    <p>Adults</p>
                </div>
            </div> 
            <div class='categories'>
                <div>
                    <label><input type="radio" name="popularity" value="popular">Popular</label>
                    <img src='images/placeholder.png'/>
                    <p>Popular</p>
                </div>
                <div>
                    <label><input type="radio" name="popularity" value="hidden">Hidden Treasure</label>
                    <img src='images/placeholder.png'/>
                    <p>Hidden Treasures</p>
                </div>
            </div> 
        </form> <!-- end preferences-form -->
        <input type='submit' value='Find Your Vacation'>
    </div> <!-- end preferences-container -->
</main> <!-- end preferences-section -->

<!-- FEATURED DESTINATIONS SECTION -->

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

<!-- NEWSLETTER SECTION -->

<?php require 'includes/newsletter.php' ?>

<!--CONTACT SECTION -->

<?php require 'includes/contact.php' ?>

<!-- FOOTER SECTION -->

<script src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>

<?php require 'includes/footer.php' ?>