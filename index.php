<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="wrapper">


        <!-- 
        Section 1
        Make an if statement of any kind to check for a variable and echo a result based on that being true
        run an elseif to check against the variable not being true or being equal to and echo out a different result
        run an else statement in case all else fails and echo out some other result as a default
        -->

        <h2>Section 1:</h2>

        <?php

            $dinnerTime = 6;

            if ($dinnerTime == 7) {
                echo "Time to eat dinner";
            } else if ($dinnerTime > 7) {
                echo "It's too late for dinner";
            } else {
                echo "It's too early for dinner";
            }

        ?>
        <br />
        <hr />

        <!--
        Section 2
        Run a switch statement with 3 cases and 1 default. 
        If needed make sure to run multiple cases for different ways of spelling the same thing.
        Echo out the result
        -->

        <h2>Section 2:</h2>
        <?php

            $catsFeedingTime = 2;

            switch ($catsFeedingTime) {
                case $catsFeedingTime == 6:
                    echo "It's time to feed the cat";
                    break;

                case $catsFeedingTime == 5:
                    echo "It's feeding time soon";
                    break;

                case $catsFeedingTime == 8:
                    echo "It's an hour late to feed the cat";
                    break;

                default:
                    echo "Don't spoil the cat";
            }

        ?>
        <br />
        <hr />


        <!--
        Section 3
        Make a link as a variable and pass it through an echo into an a tag.
        Echo out print it out        
        -->


        <h2>Section 3:</h2>

        <?php

            $link_name = "Google";
            $link_url = "https://www.google.com";
            $link_description = "Google's Website";
        ?>
        <h4>
            A link to : 
            <a href="<?php echo $link_url?>">
                <?php echo $link_name?>
            </a>
        </h4>
        <p>
            <?php echo $link_description?>
        </p>

        <br />
        <hr />


    </div>

</body>

</html>