<?php 
    $text = ' Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
    Ullam placeat voluptatibus, repellendus error possimus veniam fugiat et.
    laborum eaque esse incidunt voluptas alias ratione mollitia unde illum.
    tempore, blanditiis qui?';

    $pieces = explode(".", $text);

    for( $i = 0; $i < count($pieces); $i++){
        $element = $pieces[$i];
        echo '<p>';
        echo $element;
        echo '</p>';
    }

?>