<?php
    function checkPassword($subject)
    {
        $pattern = '/^[0-9A-z]{5,}$/';
        return preg_match($pattern, $subject);
    }
    
    function checkEmail($subject)
    {
        $pattern = '/^\w+(\.\w+)*@\w+(\.\w+)*$/';
        return preg_match($pattern, $subject);
    }

    function isExist($formValue, $column)
    {
        $query = "SELECT $column FROM apartemen WHERE $column = '$formValue'";
        $result = mysql_query($query);
        if (mysql_num_rows($result) > 0)
            return true;
        return false;
    }
?>
