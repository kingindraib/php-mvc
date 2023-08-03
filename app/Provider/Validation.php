<?php 
namespace App\Provider;

class Validation{
    public static function make($credentials, $validationRules) {
        $errors = [];
        foreach ($validationRules as $credential => $rules) {
            if (array_key_exists($credential, $credentials)) {
                $value = $credentials[$credential];
                $rules = explode('|', $rules);
    
                foreach ($rules as $rule) {
                    $parts = explode(':', $rule);
                    $ruleName = $parts[0];
                    $ruleParams = isset($parts[1]) ? explode(',', $parts[1]) : [];
    
                    switch ($ruleName) {
                        case 'required':
                            if (empty($value)) {
                                $errors[$credential] = ucfirst($credential) . ' is required.';
                            }
                            break;
                        case 'min':
                            $minLength = $ruleParams[0] ?? 0;
                            if (strlen($value) < $minLength) {
                                $errors[$credential] = ucfirst($credential) . ' must be at least ' . $minLength . ' characters long.';
                            }
                            break;
                        case 'email':
                            if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                                $errors[$credential] = ucfirst($credential) . ' must be a valid email address.';
                            }
                            break;
                        case 'confirm_password': // New confirmation rule
                            $passwordField = $ruleParams[0] ?? 'password';
                            $passwordValue = $credentials[$passwordField] ?? '';
                            if ($value !== $passwordValue) {
                                $errors[$credential] = ucfirst($credential) . ' must match the ' . $passwordField . '.';
                            }
                            break;
                        // Add more validation rules as needed from here
                        case 'int':
                            if (!is_numeric($value)) {
                                $errors[$credential] = ucfirst($credential) . ' must be an integer.';
                            }
                            break;
                    }
                }
            } else {
                $errors[] = ucfirst($credential) . ' is missing.';
            }
        }
    
        return $errors;
        // session_start();
        // return $_SESSION['errors'] = $errors;
    }

    public static function setold($args)
    {
        session_start();
        $_SESSION['old'] = $args;
        return true;
    }

}