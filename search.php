<?php

    if ( !$_SERVER['REQUEST_METHOD'] == 'POST')
    { 
        header("Location: index.php");
    }
    else
    {
        $value = $_POST["txtSearch"];
        $rdyValue = preg_replace('/\s+/', '', $value);

        include_once 'php/connect.php';

        $query = "SELECT * FROM products where prodName = '$value'";
        $resultSet = mysql_query($query);
        if (!$resultSet) die("<ERROR: Cannot execute $query>");
        $fetchedRow = mysql_fetch_assoc($resultSet);

        if ($fetchedRow != null)
        {
            $id = $fetchedRow["prodId"];
            header("Location: prodInfo.php?prodId=$id");
        }
        else
        {
            $query = "SELECT * FROM products where prodId = '$value'";
            $resultSet = mysql_query($query);
            if (!$resultSet) die("<ERROR: Cannot execute $query>");
            $fetchedRow = mysql_fetch_assoc($resultSet);

            if ($fetchedRow != null)
            {
                header("Location: prodInfo.php?prodId=$value");
            }
            else if (preg_match("/^([A-Z0-9]*)(chair)([A-Z0-9]*)$/i", $rdyValue))
            {
                header("Location: prodList.php?prodType=chair");
            }
            else if (preg_match("/^([A-Z0-9]*)(bed)([A-Z0-9]*)$/i", $rdyValue))
            {
                header("Location: prodList.php?prodType=bed");
            }
            else if (preg_match("/^([A-Z0-9]*)(chest)([A-Z0-9]*)$/i", $rdyValue))
            {
                header("Location: prodList.php?prodType=chest");
            }
            else 
            {
                header("Location: prodInfo.php");
            }
        }
    }
?>
