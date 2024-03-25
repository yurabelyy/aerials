<?php
setcookie('log', '', time() - 3600 * 24 * 30, '/');
setcookie('pass', '', time() - 3600 * 24 * 30, '/');
echo true;
