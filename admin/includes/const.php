<?php

define("SITE_TITLE", "Force of Nature");
define("parPage", 10);

$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
define("page", $page);

$calcpage = (page - 1) * parPage;
define("calcpage", $calcpage);