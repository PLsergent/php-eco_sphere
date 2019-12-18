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
        $page = 'signup';
        require('./View/v_form.php');
    }

    public function doCreate() {
        if (isset($_POST['email'])
            &&isset($_POST['password'])
            &&isset($_POST['lastName']) 
            &&isset($_POST['firstName']) 
            &&isset($_POST['address']) 
            &&isset($_POST['postalCode']) 
            &&isset($_POST['city'])) {
                
            $alreadyExist = $this->userManager->findByEmail($_POST['email']);
                
            if (!$alreadyExist) {
                $newUser = new User($_POST);
                $this->userManager->create($newUser);
                $page = 'login';
            } else {
                $error = "ERROR : This email (" . $_POST['email'] . ") is used by another user";
                $page = 'create';
            }
        }
    }
}