<?php

/**
 * @author          sameer
 * @email            sam.nyx@live.com
 * Facebook          www.facebook.com/sam0hack
 * Github               www.github.com/codex8
 * @param Get  $length and Generate random password
 * @return string
 */
function Generator()
{
$length=5;
$chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $count = mb_strlen($chars);

    for ($i = 0, $result = ''; $i < $length; $i++) {
        $index = rand(0, $count - 1);
        $result .= mb_substr($chars, $index, 1);


    }
return $result;
}
?>