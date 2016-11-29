<?php
session_start();
$rating = $_SESSION['user-rating'];

// round down to get number of whole stars needed
$wholeStars = floor( $rating );

// double, round, take modulo.
// this will be 1 if you have a half-rating, 0 if not.
$halfStar = round( $rating * 2 ) % 2;

// this will hold your html markup
$HTML = "";

// write img tags for each whole star
for( $i=0; $i<$wholeStars; $i++ ){
    $HTML .= "<img src='images/star.png'>";
}
// write img tag for half star if needed
if( $halfStar ){
    $HTML .= "<img src='images/half-star.png'>";
}

// all done
print $HTML;

?>