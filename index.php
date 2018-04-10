<?php

require('app/InstagramAPI.php');
$location = new InstagramAPI();
$location->redirectAuth();
