<?php

require_once 'config.php';

require_once 'Services/Digg2.php';

$sd = new Services_Digg2;
$sd->setVersion('2.0');

$result = $sd->comment->getInfo(array(
    'comment_ids' => '20100729223726:4fef610331ee46a3b5cbd740bf71313e'
));

echo "Comment has: {$result->comments[0]->diggs}.\n";

?>
