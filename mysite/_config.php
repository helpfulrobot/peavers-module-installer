<?php

global $project;
$project = 'portfolio-silverstripe-base';

global $database;
$database = 'SS_portfolio-silverstripe-base';

require_once('conf/ConfigureFromEnv.php');

// Set the site locale
i18n::set_locale('en_US');
