<?php

require_once '../pdo.php';
require_once '../helper.php';

delete_product(['id' => $_POST['id']]);

redirectCategoryHome();
