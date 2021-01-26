<?php
    function sanitizeFormPassword($inputText) {
        $inputText = strip_tags($inputText);
        return $inputText;
    }

    function sanitizeFormUsername($inputText) {
        //strip tags removes all HTML tags in an input
        $inputText = strip_tags($inputText);
        //str_replace replaces the first value w/ second, 3rd argument is the var
        $inputText = str_replace(' ', '', $inputText);
        return $inputText;
    }
    
    function sanitizeFormString($inputText) {
        //strip tags removes all HTML tags in an input
        $inputText = strip_tags($inputText);
        //str_replace replaces the first value w/ second, 3rd argument is the var
        $inputText = str_replace(' ', '', $inputText);
        // strtolower(variable) will lowercase the entire string
        //ucfirst will uppercase the first letter after the inner function
        $inputText = ucFirst(strToLower($inputText));
        return $inputText;
    } 


    //if register button 'name' was pressed and sent a POST request
    if (isset($_POST['registerButton'])) {
        $username = sanitizeFormUsername($_POST['username']);
        
        $firstName = sanitizeFormString( $_POST['firstName']);
        $lastName = sanitizeFormString( $_POST['lastName']);
        $email = sanitizeFormString( $_POST['email']);
        $email2 = sanitizeFormString( $_POST['email2']);
        $password = sanitizeFormPassword( $_POST['password']);
        $password2 = sanitizeFormPassword( $_POST['password2']);

        $account -> register(
            $firstName, $lastName, $email, $email2, $password, $password2
        );
    }   
?>
