<?php
require_once "../model/contact-class.php";

// global variable
$action['page'] = 'Contact_Control';
$action['subpage'] = isset($_GET['subpage']) ? $_GET['subpage'] : 'Form';

session_start();
if (isset($_GET['function'])) {
    // instantiate controller
    new activeContact_Control($action);
}else{
    new Contact_Control($action);
}

class activeContact_Control
{
        private $page = '';
    private $subpage = '';
    protected $Contact = '';

    public function __construct($action)
    {
        $this->page = $action['page'];
        $this->subpage = $action['subpage'];
        $this->Contact = new Contact();
       
        $this->{$_GET['function']}();
    }


    function Submit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'subject' => $_POST['subject'],
                'message' => $_POST['message']
            ];
                $submit = $this->Contact->insertMessage($data);
            if ($submit) {
              echo "<script>alert('Message sent successfully!')</script>";
            } else {
                $_SESSION['message'] = "<div class='alert alert-danger'>Message sending failed!</div>";
            }

        }
        include "../sidenav/contact.php"; // show form
    }

    function List()
    {
        $messages = $this->Contact->getMessages();
        include "../views/contact-list.php"; // display messages
    }
}

class Contact_Control{

    
    private $page = '';
    private $subpage = '';
    protected $Contact = '';

    public function __construct($action)
    {
        $this->page = $action['page'];
        $this->subpage = $action['subpage'];
        $this->Contact = new Contact();


        $this->{$action['subpage']}(); // call method dynamically
    }

    function Form()
    {
        include "../sidenav/contact.php"; // show form
    }
}
