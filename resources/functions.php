<?php

function redirect($location)
{
    header("Location: $location");
}

function query($sql)
{
    global $connection;
    return mysqli_query($connection, $sql);
}

function confirm($result)
{
    global $connection;

    if(!$result)
    {
        die("QUERY FAILED " . mysqli_error($connection));
    }

}

function escape_string($string)
{
    global $connection;
    return mysqli_real_escape_string($connection, $string);
}

function fetch_array($result)
{
    global $connection;
    return mysqli_fetch_array($result);
}


