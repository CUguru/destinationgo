<!-- HEADER SECTION -->

<?php require 'includes/header.php' ?> 

<!-- NAVIGATION SECTION -->
<?php require 'includes/nav.php' ?>

<!-- MAIN_SEARCH SECTION -->
<?php require 'includes/main_search.php' ?>

<!------------ SEARCH RESULTS SECTION ------------>

<main class='section entireFlax_item' id='search-results-section'>  
    
    <h1 class='margin_b2'>Search Results</h1>
    
    <div id='search-results-bg'>
        <div class="margin_b2"></div>
        <div class='results-container'>
            
            <div class='results-image-container'>
                <img src='images/<?php echo $picture ?>.jpg'/>
            </div> <!-- end results-image -->
            
            <div class='results-text'>
                <h2><?php echo $destination; ?></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras hendrerit massa et dictum scelerisque. Pellentesque ac quam porta, tempor lacus vitae, accumsan libero. Curabitur eu laoreet ante. Morbi a vulputate massa, vitae mollis orci. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                <p>Nam facilisis id est et maximus. Duis et convallis risus, aliquet maximus quam. Vivamus vel mi varius, tincidunt velit commodo, scelerisque tortor. Duis a commodo lectus. Etiam tincidunt ipsum id nunc sodales, ut vehicula urna fringilla. Nunc non finibus ante. Fusce in venenatis dolor. Aenean consequat metus consectetur, rhoncus augue non, pharetra sem. Fusce efficitur ipsum fermentum, tristique urna eget, hendrerit neque. Vivamus id felis ut massa lobortis luctus ut sit amet risus. Quisque in rhoncus nunc. Phasellus eget eleifend orci. Nunc enim justo, suscipit vitae fermentum in, auctor tristique ex.</p>
                <a href='#'><div class='read-more read_float'>READ MORE</div></a>
            </div> <!-- end results-text -->

            
        </div> <!-- end results-container -->
        <a href='default.php' id="back-to-search">
            <div id='back-to-search-page'>
                BACK TO SEARCH
            </div>
        </a>
    </div> <!-- end search-results-bg -->
</main>

<!-- FOOTER SECTION -->

<?php require 'includes/footer.php' ?>