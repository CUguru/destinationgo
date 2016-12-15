<!-- HEADER SECTION -->

<?php require 'includes/header.php' ?> 

<!-- NAVIGATION & PREFERENCES SECTION -->
<?php require 'includes/nav.php' ?>

<main class='section entireFlax_item' id='preferences-section'>
    <div class="hero-image">
        <div id="preference_blackBg">
            <h1 class="font_white">Pick Your Preferences</h1>
                <form id='preferences-form' action='search_results.php' method='get' name="preferForm">
                    <div class="buttons-row" >
                        <div class='categories-box'>
                            <input type="radio" name="weather" value="beach" id="beach"/>
                            <label class="category-button" for="beach">
                                <img id="icon_beaches" src="images/icon_beaches_on.png" onmouseover="lt_normalImg(this)" onmousedown="lt_normalImg(this)" alt="Beaches" style="left:0;position:relative;width:115px;height:115px;"/>
                            </label>
                            <input type="radio" name="weather" value="mountain" id="mountain"/>
                            <label class="category-button" for="mountain">
                                <img id="icon_mountains"src="images/icon_mountains_off.png" onmouseover="lt_hoverImg(this)" onmousedown="lt_hoverImg(this)" alt="Mountains" style="position:absolute;display:inline;width:115px;height:115px;"/>
                            </label>
                            <script>
                                function lt_hoverImg(x) {
                                    document.getElementById("icon_beaches").src = "images/icon_beaches_off.png";
                                    document.getElementById("icon_mountains").src = "images/icon_mountains_on.png";
                                }
                                function lt_normalImg(x) {
                                    document.getElementById("icon_beaches").src = "images/icon_beaches_on.png";
                                    document.getElementById("icon_mountains").src = "images/icon_mountains_off.png";
                                }
                            </script>
                        </div>
                        <div class='categories-box'>
                            <input type="radio" name="activity" value="relaxing" id="relaxing"/>
                            <label class="category-button" for="relaxing">
                                <img id="icon_relaxing" src="images/icon_relaxing_on.png" onmouseover="at_normalImg(this)" onmousedown="at_normalImg(this)" alt="Relaxing" style="left:0;position:relative;width:115px;height:115px;"/>
                            </label>
                            <input type="radio" name="activity" value="nightlife" id="nightlife"/>
                            <label class="category-button" for="nightlife">
                                <img id="icon_nightlife" src="images/icon_nightlife_off.png" onmouseover="at_hoverImg(this)" onmousedown="at_hoverImg(this)" alt="nightLife" style="position:absolute;display:inline;width:115px;height:115px;"/>
                            </label>
                            <script>
                                function at_hoverImg(x) {
                                    document.getElementById("icon_relaxing").src = "images/icon_relaxing_off.png";
                                    document.getElementById("icon_nightlife").src = "images/icon_nightlife_on.png";
                                }
                                function at_normalImg(x) {
                                    document.getElementById("icon_relaxing").src = "images/icon_relaxing_on.png";
                                    document.getElementById("icon_nightlife").src = "images/icon_nightlife_off.png";
                                }
                            </script>
                        </div>
                        <div class='categories-box'>
                            <input type="radio" name="cost" value="high" id="high"/>
                            <label class="category-button" for="high">
                                <img id="icon_highend" src="images/icon_highend_on.png" onmouseover="pt_normalImg(this)" onmousedown="pt_normalImg(this)" alt="HighEnd" style="left:0;position:relative;width:115px;height:115px;"/>
                            </label>
                            <input type="radio" name="cost" value="low" id="low"/>
                            <label class="category-button" for="low">
                                <img id="icon_thrifty" src="images/icon_thrifty_off.png" onmouseover="pt_hoverImg(this)" onmousedown="pt_hoverImg(this)" alt="Thrifty" style="position:absolute;display:inline;width:115px;height:115px;"/>
                            </label>
                            <script>
                                function pt_hoverImg(x) {
                                    document.getElementById("icon_highend").src = "images/icon_highend_off.png";
                                    document.getElementById("icon_thrifty").src = "images/icon_thrifty_on.png";
                                }
                                function pt_normalImg(x) {
                                    document.getElementById("icon_highend").src = "images/icon_highend_on.png";
                                    document.getElementById("icon_thrifty").src = "images/icon_thrifty_off.png";
                                }
                            </script>
                        </div>
                    <!--</div>
                    <div class="buttons-row">-->
                        <div class='categories-box'>
                            <input type="radio" name="location" value="urban" id="urban"/>
                            <label class="category-button" for="urban">
                                <img id="icon_urban" src="images/icon_urban_on.png" onmouseover="lst_normalImg(this)" onmousedown="lst_normalImg(this)" alt="Urban" style="left:0;position:relative;width:115px;height:115px;"/>
                            </label>
                            <input type="radio" name="location" value="rural" id="rural"/>
                            <label class="category-button" for="rural">
                                <img id="icon_rural" src="images/icon_rural_off.png" onmouseover="lst_hoverImg(this)" onmousedown="lst_hoverImg(this)" alt="Rural" style="position:absolute;display:inline;width:115px;height:115px;"/>
                            </label>
                            <script>
                                function lst_hoverImg(x) {
                                    document.getElementById("icon_urban").src = "images/icon_urban_off.png";
                                    document.getElementById("icon_rural").src = "images/icon_rural_on.png";
                                }
                                function lst_normalImg(x) {
                                    document.getElementById("icon_urban").src = "images/icon_urban_on.png";
                                    document.getElementById("icon_rural").src = "images/icon_rural_off.png";
                                }
                            </script>
                        </div>
                        <div class='categories-box'>
                            <input type="radio" name="family" value="kids" id="kids"/>
                            <label class="category-button" for="kids">
                                <img id="icon_kids" src="images/icon_kidfriendly_on.png" onmouseover="aget_normalImg(this)" onmousedown="aget_normalImg(this)" alt="Kids" style="left:0;position:relative;width:115px;height:115px;"/>                            
                            </label>
                            <input type="radio" name="family" value="adults" id="adults"/>
                            <label class="category-button" for="adults">
                                <img id="icon_adults" src="images/icon_adults_off.png" onmouseover="aget_hoverImg(this)" onmousedown="aget_hoverImg(this)" alt="Adults" style="position:absolute;display:inline;width:115px;height:115px;"/>
                            </label>
                            <script>
                                function aget_hoverImg(x) {
                                    document.getElementById("icon_kids").src = "images/icon_kidfriendly_off.png";
                                    document.getElementById("icon_adults").src = "images/icon_adults_on.png";
                                }
                                function aget_normalImg(x) {
                                    document.getElementById("icon_kids").src = "images/icon_kidfriendly_on.png";
                                    document.getElementById("icon_adults").src = "images/icon_adults_off.png";
                                }
                            </script>
                        </div>
                        <div class='categories-box'>
                            <input type="radio" name="popularity" value="popular" id="popular"/>
                            <label class="category-button" for="popular">
                                <img id="icon_popular" src="images/icon_popular_on.png" onmouseover="popt_normalImg(this)" onmousedown="popt_normalImg(this)" alt="Popular" style="left:0;position:relative;width:115px;height:115px;"/>
                            </label>
                            <input type="radio" name="popularity" value="hidden" id="hidden"/>
                            <label class="category-button" for="hidden">
                                <img id="icon_hidden" src="images/icon_hidden_off.png" onmouseover="popt_hoverImg(this)" onmousedown="popt_hoverImg(this)" alt="Hidden Treasures" style="position:absolute;display:inline;width:115px;height:115px;"/>
                            </label>
                            <script>
                                function popt_hoverImg(x) {
                                    document.getElementById("icon_popular").src = "images/icon_popular_off.png";
                                    document.getElementById("icon_hidden").src = "images/icon_hidden_on.png";
                                }
                                function popt_normalImg(x) {
                                    document.getElementById("icon_popular").src = "images/icon_popular_on.png";
                                    document.getElementById("icon_hidden").src = "images/icon_hidden_off.png";
                                }
                            </script>
                        </div> <br>
                    </div>
                    <div class="add_space"></div>
                    <button class="button1" type="Submit">FIND YOUR VACATION</button>      
                </form> <!-- end preferences-form -->
        </div> <!-- preference end -->
    </div> <!-- hero end ---->
</main> <!-- end preferences-section -->

<!------------ FEATURED LOCATIONS SECTION ------------>

<div class='section entireFlax_item' id='feat-dest-section'>
    <h1>Featured Destinations</h1>
    <div id='map'>

        <div id='map-box'>
            <img id='map-img' src='images/world_map1.png'/>

            <!-- pin-1 -->
            <img class='pin' id='pin-1' src='images/location.png'/>
            <div class='pin-box' id='pin-1-box'>
                <div class="each_popularPic p_pic1"></div>
                <h2>Destination Name</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                <a href='#'><div class='buttonSmall'>READ MORE</div></a>
            </div> 
            <div class='arrow-right' id='arrow-1'></div>

            <!-- pin-2 -->
            <img class='pin' id='pin-2' src='images/location.png'/>
            <div class='pin-box' id='pin-2-box'>
                <div class="each_popularPic p_pic2"></div>
                <h2>Destination Name</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                <a href='#'><div class='buttonSmall'>READ MORE</div></a>
            </div> 
            <div class='arrow-left' id='arrow-2'></div>

            <!-- pin-3 -->
            <img class='pin' id='pin-3' src='images/location.png'/>
            <div class='pin-box' id='pin-3-box'>
                <div class="each_popularPic p_pic3"></div>
                <h2>Destination Name</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                <a href='#'><div class='buttonSmall'>READ MORE</div></a>
            </div> 
            <div class='arrow-right' id='arrow-3'></div>

        </div> <!-- end map-box -->

    </div> <!-- end map -->

</div> <!-- end feat-dest-section -->
    

<!-- NEWSLETTER SECTION -->

<?php require 'includes/newsletter.php' ?>


<!-- FOOTER SECTION -->

<?php require 'includes/footer.php' ?>         