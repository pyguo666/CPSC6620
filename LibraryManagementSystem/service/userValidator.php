<?php
/**
 * Created by PhpStorm.
 * User: yguo
 * Date: 2016/11/16
 * Time: 18:14
 */
//validation for user role
session_start();
if(!isset($_SESSION["username"])&&strcmp($_SESSION["role"],"user"))
header("Location: ../login.php");