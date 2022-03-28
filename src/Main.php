<?php

require_once 'Functions.php';
require_once 'Data.php';

echo file_get_contents("../index.html");

class Main
{
    public function main()
    {
        if (!empty($_POST)) {
            $functions = new Functions();
            $load = $functions->load(Data::fields());
            //$functions->debug($load);
            $errors = $functions->validation($load);
            if ($errors) {
                $result = ['answer' => 'error', 'errors' => $errors];
            } else {
                $result = ['answer' => 'ok', 'data' => $load];
            }
            exit(json_encode($result));
        }
    }
}

$main = new Main();
$main->main();

