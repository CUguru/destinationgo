<!-- HEADER SECTION -->

<?php require 'includes/header.php' ?> 

<!-- NAVIGATION & PREFERENCES SECTION -->
    <?php require 'includes/nav.php' ?>

    <!-- Will be changing the div categories to input boxes for the php -->
    <main class='section entireFlax_item' id='preferences-section'>
        <div class="hero-image">
            <!--<div>
                <img src="images/logo.png" alt="Logo" style="width:275px;height:74px;"/>
            </div>-->
            <div id="preference_blackBg">
                <h1 class="font_white">Pick Your Preferences</h1>
                    <form id='preferences-form' action='' name="preferForm">
                        <div class="buttons-row" >
                            <div class='categories-box'>
                                <input type="radio" name="locationType" value="Beaches" id="Beaches"/>
                                <label class="category-button" for="Beaches">
                                    <img src="images/icon_beaches_on.png" alt="Beaches" style="left:0;position:relative;width:115px;height:115px;"/>
                                </label>
                                <input type="radio" name="locationType" value="Mountains" id="Mountains"/>
                                <label class="category-button" for="Mountains">
                                    <img src="images/icon_mountains_off.png" alt="Mountains" style="position:absolute;display:inline;width:115px;height:115px;"/>
                                </label>
                            </div>
                            <div class='categories-box'>
                                <input type="radio" name="activityType" value="Relaxing" id="Relaxing"/>
                                <label class="category-button" for="Relaxing">
                                    <img src="images/icon_relaxing_on.png" alt="Relaxing" style="left:0;position:relative;width:115px;height:115px;"/>
                                </label>
                                <input type="radio" name="activityType" value="NightLife" id="NightLife"/>
                                <label class="category-button" for="NightLife">
                                    <img src="images/icon_nightlife_off.png" alt="NightLife" style="position:absolute;display:inline;width:115px;height:115px;"/>
                                </label>
                            </div>
                            <div class='categories-box'>
                                <input type="radio" name="priceType" value="HighEnd" id="HighEnd"/>
                                <label class="category-button" for="HighEnd">
                                    <img src="images/icon_highend_on.png" alt="HighEnd" style="left:0;position:relative;width:115px;height:115px;"/>
                                </label>
                                <input type="radio" name="priceType" value="Thrifty" id="Thrifty"/>
                                <label class="category-button" for="Thrifty">
                                    <img src="images/icon_thrifty_off.png" alt="Thrifty" style="position:absolute;display:inline;width:115px;height:115px;"/>
                                </label>
                            </div>
                        <!--</div>
                        <div class="buttons-row">-->
                            <div class='categories-box'>
                                <input type="radio" name="landscapeType" value="Urban" id="Urban"/>
                                <label class="category-button" for="Urban">
                                    <img src="images/icon_urban_on.png" alt="Urban" style="left:0;position:relative;width:115px;height:115px;"/>
                                </label>
                                <input type="radio" name="landscapeType" value="Rural" id="Rural"/>
                                <label class="category-button" for="Rural">
                                    <img src="images/icon_rural_off.png" alt="Rural" style="position:absolute;display:inline;width:115px;height:115px;"/>
                                </label>
                            </div>
                            <div class='categories-box'>
                                <input type="radio" name="ageType" value="Kids" id="Kids"/>
                                <label class="category-button" for="Kids">
                                    <img src="images/icon_kidfriendly_on.png" alt="Kids" style="left:0;position:relative;width:115px;height:115px;"/>
                            
                                
                                </label>
                                <input type="radio" name="ageType" value="Adults" id="Adults"/>
                                <label class="category-button" for="Adults">
                                    <img src="images/icon_adults_off.png" alt="Adults" style="position:absolute;display:inline;width:115px;height:115px;"/>
                                </label>
                            </div>
                            <div class='categories-box'>
                                <input type="radio" name="priceType" value="HighEnd" id="HighEnd"/>
                                <label class="category-button" for="HighEnd">
                                    <img src="images/icon_popular_on.png" alt="HighEnd" style="left:0;position:relative;width:115px;height:115px;"/>
                                </label>
                                <input type="radio" name="priceType" value="Thrifty" id="Thrifty"/>
                                <label class="category-button" for="Thrifty">
                                    <img src="images/icon_hidden_off.png" alt="Thrifty" style="position:absolute;display:inline;width:115px;height:115px;"/>
                                </label>
                            </div> <br>
                        </div>
                        <div class="add_space"></div>
                        <button class="button1" type="Submit">FIND YOUR VACATION</button>      
                    </form> <!-- end preferences-form -->
            </div> <!-- preference end -->
        </div> <!-- hero end ---->
    </main> <!-- end preferences-section -->
    
    <!------------ FEATURED DESTINATIONS SECTION ------------>
    
    <div class='section entireFlax_item' id='feat-dest-section'>
        <h1>Featured Destinations</h1>
        <div id='map'>
            <img src='images/world_map_850.png'/>
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


<!-- FOOTER SECTION -->


<?php require 'includes/footer.php' ?>

           