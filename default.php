<!-- HEADER SECTION -->

<?php require 'includes/header.php' ?> 

<!-- NAVIGATION & PREFERENCES SECTION -->

<main class='section' id='preferences-section'>

    <?php require 'includes/nav.php' ?>
    <!-- Will be changing the div categories to input boxes for the php -->
    <div id='preferences-container'>
        <h3>Pick Your Preferences</h3>
        <form id='preferences-form' action=''>
            <div class='categories'>
                <div>
                    <label>
                        <input type="radio" name="weather" value="beaches">
                        <img src='images/placeholder.png'/>
                        <p>Beaches</p>
                    </label>
                </div>
                <div>
                    <label>
                        <input type="radio" name="weather" value="mountains">
                        <img src='images/placeholder.png'/>
                        <p>Mountains</p>
                    </label>
                </div>
            </div> 
            <div class='categories'>
                <div>
                    <label>
                        <input type="radio" name="activity" value="relaxing">
                        <img src='images/placeholder.png'/>
                        <p>Relaxing</p> 
                    </label>
                </div>
                <div>
                    <label>
                        <input type="radio" name="activity" value="nightlife">
                        <img src='images/placeholder.png'/>
                        <p>Nightlife</p>
                    </label>
                </div>
            </div> 
            <div class='categories'>
                <div>
                    <label>
                        <input type="radio" name="cost" value="high">
                        <img src='images/placeholder.png'/>
                        <p>High-End</p>
                    </label>
                </div>
                <div>
                    <label>
                        <input type="radio" name="cost" value="low">
                        <img src='images/placeholder.png'/>
                        <p>Thrifty</p>
                    </label>
                </div>
            </div> 
            <div class='categories'>
                <div>
                    <label>
                        <input type="radio" name="location" value="urban">
                        <img src='images/placeholder.png'/>
                        <p>Urban</p>
                    </label>
                </div>
                <div>
                    <label>
                        <input type="radio" name="location" value="rural">
                        <img src='images/placeholder.png'/>
                        <p>Rural</p>
                    </label>
                </div>
            </div> 
            <div class='categories'>
                <div>
                    <label>
                        <input type="radio" name="family" value="kids">
                        <img src='images/placeholder.png'/>
                        <p>Kid-Friendly</p>
                    </label>
                </div>
                <div>
                    <label>
                        <input type="radio" name="family" value="adults">
                        <img src='images/placeholder.png'/>
                        <p>Adults</p>
                    </label>
                </div>
            </div> 
            <div class='categories'>
                <div>
                    <label>
                        <input type="radio" name="popularity" value="popular">
                        <img src='images/placeholder.png'/>
                        <p>Popular</p>
                    </label>
                </div>
                <div>
                    <label>
                        <input type="radio" name="popularity" value="hidden">
                        <img src='images/placeholder.png'/>
                        <p>Hidden Treasures</p>
                    </label>
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