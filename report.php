<?php
/**
 * Created by PhpStorm.
 * User: shadow
 * Date: 2018/1/17
 * Time: 下午10:42
 */
$when_it_happened = $_POST['whenithappened'];
$how_long = $_POST['howlong'];
$allen_description = $_POST['aliendescription'];
$fang_spotted = $_POST['fangspotted'];
$email = $_POST['email'];

echo 'Thanks for submiting the form.<br/>';
echo 'you were abducted' . $when_it_happened;
echo 'and where gone for' . $how_long . '<br/>';
echo 'Describe them:' . $allen_description . '<br/>';
echo 'Was Fang there?' . $fang_spotted . '<br/>';
echo 'Your email address is' . $email;
echo 'Your email address is' . $email;