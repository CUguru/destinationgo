<?php 

$file = $_SERVER['PHP_SELF'];

$start = strrpos($file, '/') + 1; // string position of '/' on $file plus one
$end = strrpos($file, '.');
$len = $end - $start;
$page_name = substr($file, $start, $len);
$page_name = str_replace("_", " ", $page_name);

//echo strtolower($page_name);

function isCurrentPage($page) {
    global $page_name;
    if (strtolower($page_name) == $page) {
        echo "id='current'";
    } 
}
?>

<header class="entireFlax_item">
    <nav id='navigation'>
        <ul id='log-in'>
            <a href='#'><li>Sign Up</li></a>
            <span id='divider'>|</span>
            <a href='#'><li>Log In</li></a>
        </ul>
        <a href='default.php'>
            <div id='navigation-container'>
                <img id='logo' src='images/logo.png'/>
            </div>
        </a>
        <ul id='main-nav'>
            <!-- <a href='about_us.php'><li <?php isCurrentPage('about us')?> ABOUT US</li></a> -->
            <a href='about_us.php'><li> ABOUT US</li></a>
            <a href='default.php#feat-dest-section'><li>FEATURED LOCATIONS</li></a>
            <!-- <a href='reviews.php'><li <?php isCurrentPage('reviews')?> REVIEWS</li></a> -->
            <a href='reviews.php'><li> REVIEWS</li></a>
            <a href='default.php#contact-section'><li>CONTACT US</li></a>
        </ul>
    </nav>
</header>