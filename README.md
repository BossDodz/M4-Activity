#######################

# USAGE

#######################

1. Each story is located in the partials folder as "\_\partials\sn.php, where n is the story number
2. After modifying the stories, check out \_reqs.php in the
   root directory of the folder; it contains a function to include the stories in itself just before it's included in the index.php
3. The require_once is a function that states that we only have to include the \_reqs.php file once for the whole program. To change how the layout of the stories in the table, change the parameters of the getStory() function in the td -> USAGE: getStory(story number)
