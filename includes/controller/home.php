<?php



class HomeController extends Controller{

    public function index(){
        $this->loader->view('index');
    }

    public function about(){
        $this->loader->view('about');
    }

    public function login(){
        $this->loader->view('login');
    }

    public function registration(){
        $this->loader->view('registration');
    }

    public function projects(){
        $this->loader->view('about-projects');
    }

    public function charity(){
        $this->loader->view('about-charity');
    }

    public function sports(){
        $this->loader->view('about-sports');
    }

    public function userhome($user_id=""){
         $loader = new Loader();
         $user = (new User())->get_user($user_id);
        
       
        try{
        $loader->view('home.php',$user);
        }catch(Exception $e){
            echo 'Message:'.$e->getMessage();
        }
        
        
        
       
    }
    
    public function userProfile(){
        require('./public/view/userProfile.php');
    }

    public function editInfo(){
        require('./public/view/editInfo.php');
    }
    public function profile(){
        require('./public/view/home.php');
    }
    public function register(){
        $loader = new Loader();
        
        $user = new User();
        $user->first_name= $_POST['firstname'];
        
        $user->last_name = $_POST['lastname'];
        $user->reg_number= $_POST['reg_number'];
        //$user-> = $_POST['degree_program'];
        $user->gender = $_POST['gender'];
        $user->status = $_POST['maritial_status'];
        //$user-> = $_POST['mailing_address'];
        $user->email_address = $_POST['email'];
        $user->phone_number = $_POST['phonenumber'];
        
        $user->reg_number = $_POST['reg_number'];
        
       // $user->password = $_POST['password'];
        $user->set_password($_POST['password']);
       
        //$repeatPassword = $_POST['repeatedPassword'];
        
         if($user->add_user()){
            
            $session = new Session();
            $db = new Database();
            
            $reg_number = $db->db_escape_values($_POST['reg_number']);
	    $password = $db->db_escape_values($_POST['password']);
            
            
            $member = $user->authenticate($reg_number,$password);
         
            if(isset($member)){
		$session->login($member);
                try{
                  
                $loader->view('welcome.php',$member);
                }catch(Exception $e){
                    echo 'Message'.$e->getMessage();
                }
            }
         }
    }

    public function editUser(){

       require('./includes/model/user.php');
        
        $user = new User();
        $user->first_name= $_POST['firstname'];
        
        $user->last_name = $_POST['lastname'];
        $user->reg_number= $_POST['reg_number'];
        //$user-> = $_POST['degree_program'];
        $user->gender = $_POST['gender'];
        $user->status = $_POST['maritial_status'];
        //$user-> = $_POST['mailing_address'];
        $user->email_address = $_POST['email'];
        $user->phone_number = $_POST['phonenumber'];
        $skill = $_POST['skills'];
        $hobbies = $_POST['hobbies'];
       // $user->password = $_POST['password'];
        //$user->set_password($_POST['password']);
       
        //$repeatPassword = $_POST['repeatedPassword'];

        echo 'firs reg no'.$user->reg_number;
        
        $query_user = $user->get_user_by_reg_number($user->reg_number);

        echo 'query user id '.$query_user->id;
        $user->edit_user($query_user->id);
        
         
         echo "error ".User::$user_error;
         if(true){
            require('./public/view/welcome.php');
        
     } 
    }

}
?>