
<?php $title = 'Blog'; ?>

<?php ob_start(); ?>

<?php 

  function nicetime($date)
 {
    if(empty($date)) {
      return "No date provided";
    }

$periods         = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
$lengths         = array("60","60","24","7","4.35","12","10");

$now             = time();
$unix_date         = strtotime($date);

   // check validity of date
if(empty($unix_date)) {    
    return "Bad date";
}

// is it future date or past date
if($now > $unix_date) {    
    $difference     = $now - $unix_date;
    $tense         = "ago";

} else {
    $difference     = $unix_date - $now;
    $tense         = "from now";
}

for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
    $difference /= $lengths[$j];
}

$difference = round($difference);

if($difference != 1) {
    $periods[$j].= "s";
}

  return "$difference $periods[$j] {$tense}";
}

$date = "2009-03-04 17:45";
$result = nicetime($date); // 2 days ago

?>


    
<?php

$hier = new DateTime('-1 day');
echo $hier -> format('Y-m-d');

$date = new DateTime('now');

$result = $date->format('Y-m-d');
echo 'result =\'' . $result . '\'<br>';

$date2 = new DateTime($result);
$result2 = $date2->format('Y-m-d');
echo '$result2 = ' .$result2;
echo '---------------------------------------------------------------------------------------------------<br>';

if ($result) { 
    echo $result; 
    echo $result2;
 } else { 
    // format failed 
    echo "Unknown Time"; 
 }
// Définit le fuseau horaire par défaut à utiliser.
date_default_timezone_set('UTC');
echo '<br>';


// Affichage de quelque chose comme : Monday
echo date("l");
echo '<br>';
// Affichage de quelque chose comme : Monday 8th of August 2005 03:12:46 PM
echo date('l jS \of F Y h:i:s A');
echo '<br>';
// Affiche : July 1, 2000 is on a Saturday
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));
echo '<br>';
/* utilise les constantes dans le paramètre format */
// Affichage de quelque chose comme : Wed, 25 Sep 2013 15:28:57 -0700
echo date(DATE_RFC2822);
echo '<br>';
// Affichage de quelque chose comme : 2000-07-01T00:00:00+00:00
echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));
?>



    <div class="events">
    <?php
while ($data = $events->fetch()) {
    ?>


    <?php 
        for ($i = 1; $i <= 7; $i++) {
            $j = $i-4;
            $day = new DateTime(''.$j. ' day');
            ?>
            <div class='event'>
            <div class='event-top'>
                <h1 id="day"><?= $day -> format('d');?> </h1>
                <h4 id="month-year"><?= $day -> format('m-Y');?> </h4>

            </div>
            <div class='event-main'>
            
                <form action="index.php?action=addEvent" method="post">

                    <div class="form-group">
                        <label for="created"></label><br />
                        <input  type="text" 
                                class="form-control" 
                                id="created" 
                                name="created" 
                                value="<?php echo $day -> format('Y-m-d');?>"></input>
                    </div>
                    <div class="form-group">
                        <label for="title">titre</label><br />
                        <input class="form-control" type="text" id="title" name="title" />
                    </div>
                    <div class="form-group">
                        <label for="content">Contenu</label><br />
                        <textarea class="form-control" type="text" id="content" name="content"></textarea>
                    </div>
                    <div>
                        <button class="btn btn-success" type="submit"> Valider </button>
                    </div>
                </form>
            </div>
            </div>
            
            <?php
            
}   ?>
    </div>
    
    <?php
}
    $events->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('memberTemplate.php');
