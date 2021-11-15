<?php

include ("variables.php") ;
$postData = $_POST;

if (isset($postData['email']) && isset($postData['password'])) {
    foreach ($users as $user) {
        if (
            $user['email'] === $postData['email'] && $user['password'] === $postData['password']
        ) {
            $loggedUser = [
                'email' => $user['email'],
                $_SESSION['LOGGED_USER'] = $loggedUser['email'];
                header('Location: /projet_sport_amelie/entrainement.php'); 
            ];

            /* Cookie qui expire dans un an*/
            setcookie(
                'LOGGED_USER',
                $loggedUser['email'],
                [
                    'expires' => time() + 365*24*3600,
                    'secure' => true,
                    'httponly' => true,
                ]
            );
            
        } else {
            $errorMessage = sprintf('Les informations envoyées ne permettent pas de vous identifier : (%s/%s)',
                $postData['email'],
                $postData['password']
            );
        }
    }
}

// Si le cookie ou la session sont présentes
if (isset($_COOKIE['LOGGED_USER']) || isset($_SESSION['LOGGED_USER'])) {
    $loggedUser = [
        'email' => $_COOKIE['LOGGED_USER'] ?? $_SESSION['LOGGED_USER'],
    ];}

 if(!isset($loggedUser)): 

 else
    
    {
        header('Location: /projet_sport_amelie/entrainement.php'); 
    }
    
    ?>
   
<?php endif; ?>

