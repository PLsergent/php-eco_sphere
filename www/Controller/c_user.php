<?

class c_user {
    private $userManager;
    private $user;
    private $db;

    public function __construct($db1) {
        require('./Model/User.php');
        require_once('./Model/UserManager.php');
        $this->userManager = new UserManager($db1);
        $this->db = $db1;
    }

    public function signup() {
        require('./View/v_form.php');
    }

    public function doCreate() {
        if (isset($_POST['email'])
            && isset($_POST['password'])
            && isset($_POST['lastName']) 
            && isset($_POST['firstName']) 
            && isset($_POST['address']) 
            && isset($_POST['postalCode']) 
            && isset($_POST['city'])) {
                
            $alreadyExist = $this->userManager->findByEmail($_POST['email']);
                
            if (!$alreadyExist) {
                $newUser = new User($_POST);
                $this->userManager->create($newUser);
                header('Location: index.php?ctrl=user&action=login');
                exit();
            } else {
                header('Location: index.php?ctrl=user&action=signup&error=email');
                exit();
            }
        }
    }

    public function login() {
        require('./View/v_login.php');
    }

    public function doLogin() {
        $user = $this->userManager->findByEmail($_POST['email']);

        if (!$user) {
            header('Location: index.php?ctrl=user&action=login&error=email');
            exit();
        } else {
            // Password
            if ($user[0][2] == sha1($_POST['password'])) {
                $_SESSION["user"] = $user[0][3]; // FirstName
                header('Location: index.php?ctrl=home&action=display');
                exit();
            } else {
                header('Location: index.php?ctrl=user&action=login&error=password');
                exit();
            }
        }
    }

    public function logout() {
        unset($_SESSION["user"]);
        header('Location: index.php?ctrl=user&action=login');
        exit();
    }
}