<?php
include_once 'models/User.php';

class UserController {
    public function list() {
        $firstnameSearch = $_GET['firstnameSearch'] ?? '';
        $lastnameSearch = $_GET['lastnameSearch'] ?? '';
        $emailSearch = $_GET['emailSearch'] ?? '';

        $users = User::getAll($firstnameSearch, $lastnameSearch, $emailSearch);

        include 'views/users/list.php';
    }

    public function detail($id) {
        $user = User::getById($id);

        if (!$user) {
            echo "Utilisateur non trouvé.";
            exit;
        }

        include 'views/users/detail.php';
    }
    public function update($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
    
            User::update($id, $firstname, $lastname, $email);
    
            header('Location: index.php?action=detail&id=' . $id);
            exit;
        }
    
        $this->detail($id);
    }    
}
?>
