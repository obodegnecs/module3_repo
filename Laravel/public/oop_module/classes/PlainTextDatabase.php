<?php

class PlainTextDatabase implements DatabaseInterface
{
    public function write($str)
    {
        $handle = fopen("log.txt", "w");
        if (!$handle) {
            echo "Cannot open file (log.txt)";
            exit;
        } else {
            fwrite($handle, $str);
            fclose($handle);
        }
    }
}
