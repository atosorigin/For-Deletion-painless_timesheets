<?php
        include(dirname(__FILE__) . '/header.php');
?>
            <div id="banner"></div>
            <div id="strap">
                Get home fast and in safety. Before getting into that mini cab, make
                sure its licensed with TFL. Enter the registration number here
                or text <stronger><FONT color=#00bb00>check</FONT></stronger> and the <stronger><FONT color=#00bb00>registration number</FONT></stronger> to 88866 (for example "<stronger><FONT color=#00bb00>check A123 ABC</FONT></stronger>"), and we can
                tell you if your cabbie is legit. 
		<br>
		Please see our <a href="terms_and_conditions.php">terms and conditions</a> for more information.
		</br>
            <div></div>
            <div id="car_reg_form">
                <form method="GET" >
                    <input id="text" name="Text" type="text" value="<?php echo $car_registration ?>" class="search">
                    <input type="submit" value="GO" class="submit">
                </form>
                
            </div>
            Check-out our iPhone application  <a href="http://itunes.apple.com/app/check-a-ride/id402439756?mt=8"><img id="icon" height="40" width="40" align="absmiddle" src="images/icon.png"> here</a> to "check a ride" whilst you are out and about.
		</p>
            </div>
            <div id="result">
<?php
    if (!$car_registration){
?>
                <div>
                    <p>
                        To find out if your cabbie is licensed with TFL just type part of the car registration number into the above box and press go.
                    </p>
                </div>
<?php
    }
    else if (empty($cars)){
?>
                <div id="warning"  class="result warning">
                    <h1>Bad News</h1>
                    <p>This does not look like a licenced London mini cab. Be careful.</p>
                </div>
<?php
    }
    else if(count($cars)>1){
?>
                <div id="warning"  class="result warning">
                    <h1>Bad News</h1>
                    <h2>We found more than one mini cab</h2>
                    <p>We found <?php echo count($cars) ?> cars with this in the
                    licence plate, try again entering more characters</p>
                </div>
<?php

    }
    else{
//        foreach($cars as $car)
//            echo html_entity_decode($car->get_html());
?>
                <div class="result">
                    <h1>Good News</h1>
                    <h1>Your ride is a London mini cab. Reg <?php echo html_entity_decode($cars[0]->reg); ?>.</h1>
                    <p>check that it is the following make and model</p>
                    <?php echo html_entity_decode($cars[0]->get_html()); ?>
                </div>
<?php

    }

?>
            </div>
<?php
        include(dirname(__FILE__) . '/footer.php');
?>
