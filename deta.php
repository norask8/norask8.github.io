<?php
require_once('team.php');

$real = new Team('レアル・マドリード','football/real.jpg',$real_odds,$real_result);
$atle = new Team('アトレティコ','football/atle.jpg',$atle_odds,$atle_result);
$leicester = new Team('レスター','football/leicester.jpg',$leicester_odds,$leicester_result);
$mainz = new Team('マインツ','football/mainz.jpg',$mainz_odds,$mainz_result);

$teams = array($real,$atle,$leicester,$mainz);


?>
