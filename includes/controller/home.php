<?php



class HomeController extends Controller{

    public function index(){
        try{
        $this->loader->view('index.php');
        }catch(Exception $e){
            echo 'Message '.$e->getMessage();
        }
    }

    public function about(){
        try{
        $this->loader->view('about.php');
        }catch(Exception $e){
            echo 'Message '.$e->getMessage();
        }
    }

    public function login(){
        try{
        $this->loader->view('login.php');
        }catch(Exception $e){
            echo 'Message '.$e->getMessage();
        }
    }

    public function registration(){
        try{
        $this->loader->view('registration.php');
        }catch(Exception $e){
            echo 'Message '.$e->getMessage();
        }
        
    }

    public function projects(){
        try{
        $this->loader->view('about-projects.php');
        }catch(Exception $e){
            echo 'Message '.$e->getMessage();
        }
    }

    public function charity(){
        try{
        $this->loader->view('about-charity');
        }catch(Exception $e){
            echo 'Message '.$e->getMessage();
        }
    }

    public function sports(){
        try{
        $this->loader->view('about-sports');
        }catch(Exception $e){
            echo 'Message '.$e->getMessage();
        }
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
    
    public function userProfile($user_id){
        $user = (new User)->get_user($user_id);

        $loader = new Loader();
        try{
            $loader->view('userProfile.php',$user);
        }catch(Exception $e){
            echo 'Message'.$e->getMessage();
        }
        
    }

    public function editInfo($user_id){

        $user = (new User)->get_user($user_id);

        $loader = new Loader();

        try{
            $loader->view('editInfo.php',$user);
        }catch(Exception $e){
            echo 'Message'.$e->getMessage();
        }
       
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

        $user->program_id= $_POST['selected_course'];

        $user->gender = $_POST['gender'];
        $user->status = $_POST['maritial_status'];
        $user->mailing_address = $_POST['mailing_address'];
        $user->email_address = $_POST['email'];
        $user->phone_number = $_POST['phonenumber'];
           
        $user->set_password($_POST['password']);
       
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
         $loader = new Loader();
         if(true){
            $loader->view('welcome.php',$user);
           
        
     } 
    }
    public function search(){
      
     $user = new User();

        $array_results= $user->get_user_by_firstname($_GET['search_request']);
    
       

        if(isset($array_results)){
            try{
        $this->loader->view('userProfile.php',$array_results);
        }catch(Exception $e){
            echo 'Message '.$e->getMessage();
        }
        
        }
    }

}
?>