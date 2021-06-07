<?php
    $json = file_get_contents('https://discord.com/api/guilds/851393992058077184/widget.json');
    $array = json_decode($json, TRUE);

    header('Location: ' . $array["instant_invite"]);
?>
