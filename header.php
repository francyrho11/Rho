<?php

namespace Rho;

/*
|------------------------------------------------------------------
| Header Controller
|------------------------------------------------------------------
|
| Controller for outputting layout's opening markup. Template
| rendered here should include `wp_head()` function call.
|
*/

use function Rho\template;

/**
 * Renders layout's header.
 *
 * @uses resources/templates/layout/header.tpl.php
 */
template('layout/header');