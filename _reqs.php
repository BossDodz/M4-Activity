<?php
function getStory($storyID)
{
    if (file_exists("./partials/s$storyID.php") && is_readable("./partials/s$storyID.php")) {
            include("./partials/s$storyID.php");
         } else {
        echo "Story not found";
    }
}
