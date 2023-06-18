<?php
namespace App\Session;

class Session {
  public function __construct() {
    session_start();
  }

  public static function set($key, $value) {
    $_SESSION[$key] = $value;
  }

  public static function get($key) {
    if(isset($_SESSION[$key])) {
      return $_SESSION[$key];
    }
    return null;
  }

  public function delete($key) {
    if(isset($_SESSION[$key])) {
      unset($_SESSION[$key]);
    }
  }

  public static function has($key) {
    return isset($_SESSION[$key]);
  }
}


// public function setMessage($type, $message) {
//   $this->set('message', array('type' => $type, 'text' => $message));
// }


// $session = new SessionManager();

// if($session->has('message')) {
//   $message = $session->get('message');
//   echo '<div class="' . $message['type'] . '">' . $message['text'] . '</div>';
// }


// $session->delete('message');
// $session = new SessionManager();
// $session->setMessage('success', 'Your account has been created successfully!');
