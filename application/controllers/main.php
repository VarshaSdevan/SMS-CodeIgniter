<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}
    public function login()
    {
        $this->load->view('login');

}
    public function logins()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("email","email",'required');
        $this->form_validation->set_rules("Password","password",'required');
            if($this->form_validation->run())
            {
                $this->load->model('mainmodel');
                $email=$this->input->post("email");
                $pass=$this->input->post("Password");
                $rslt=$this->mainmodel->strselectpass($email,$pass);
                if($rslt)
                {
                    $id=$this->mainmodel->strgetuserid($email);
                    $user=$this->mainmodel->strgetuser($id);
                    $this->load->library(array('session'));
                    $this->session->set_userdata(array('id'=>$user->id,'status'=>$user->status,'usertype'=>$user->usertype));
                    if($_SESSION['status']=='1' && $_SESSION['usertype']=='1')
                    {
                                redirect(base_url().'main/tchrhome');
                    }
                    elseif($_SESSION['status']=='1' && $_SESSION['usertype']=='0')
                    {
                            redirect(base_url().'main/studhome');
                   }
                  
                   else
                    {
                        echo "Waiting for Approval";
                    }
                }
                    else
                    {
                        echo "invalid user";
                    }
                }
                else1
                {
                    redirect('main/login','refresh');
                }
        }

public function studhome()
{
    $this->load->view('studhome');
}
public function tchrhome()
{
    $this->load->view('tchrhome');
}
public function studreg()
{
    $i=12;
    $j=0;
    $no=$i+1;
    $fsno='anu';
    $sno=$fsno.$no;
    echo"$sno";exit;
    $this->load->view('studreg');
}
public function insrtreg()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("fname","fname",'required');
        $this->form_validation->set_rules("lname","lname",'required');
        $this->form_validation->set_rules("address","address",'required');
        $this->form_validation->set_rules("district","district",'required');
        $this->form_validation->set_rules("pin","pin",'required');
        $this->form_validation->set_rules("number","number",'required');
        $this->form_validation->set_rules("dob","dob",'required');
        $this->form_validation->set_rules("gender","gender",'required');
        $this->form_validation->set_rules("education","education",'required');
        $this->form_validation->set_rules("email","email",'required');
        $this->form_validation->set_rules("password","password",'required');
        if($this->form_validation->run())
        {
        $this->load->model('mainmodel');
        $pass=$this->input->post("password");
        $encpass=$this->mainmodel->encpaswdz($pass);
        $b=array("fname"=>$this->input->post("fname"),
                 "lname"=>$this->input->post("lname"),
                "address"=>$this->input->post("address"),
                "district"=>$this->input->post("district"),
                "pin"=>$this->input->post("pin"),
                "number"=>$this->input->post("number"),
                "dob"=>$this->input->post("dob"),
                "gender"=>$this->input->post("gender"),
                "education"=>$this->input->post("education")
               );
         $c=array( "email"=>$this->input->post("email"),
                "password"=>$encpass,
                "usertype"=>'0');
        $this->mainmodel->inreg($b,$c);    
        redirect(base_url().'main/logins'); 
        }
}
 public function treg()
    {
        $this->load->helper('string');
        echo random_string('alnum',15);
        $this->load->view('teacherreg');
    }
    public function teacher_insrt()
    {
         $this->load->library('form_validation');
        $this->form_validation->set_rules("name","name",'required');
        $this->form_validation->set_rules("address","address",'required');
        $this->form_validation->set_rules("district","district",'required');
        $this->form_validation->set_rules("pin","pin",'required');
        $this->form_validation->set_rules("number","number",'required');
        $this->form_validation->set_rules("gender","gender",'required');
        $this->form_validation->set_rules("age","age",'required');
        $this->form_validation->set_rules("subject","subject",'required');
        $this->form_validation->set_rules("email","email",'required');
        $this->form_validation->set_rules("password","password",'required');
        if($this->form_validation->run())
        {

        $this->load->model('mainmodel');
        $pass=$this->input->post("password");
        $encpass=$this->mainmodel->encpswd($pass);
        $b=array("name"=>$this->input->post("name"),
                "address"=>$this->input->post("address"),
                "district"=>$this->input->post("district"),
                "pin"=>$this->input->post("pin"),
                "number"=>$this->input->post("number"),
                "gender"=>$this->input->post("gender"),
                "age"=>$this->input->post("age"),
                "subject"=>$this->input->post("subject")
                );
         $c=array( "email"=>$this->input->post("email"),
                "password"=>$encpass,"status"=>'1',
                "usertype"=>'1');
        $this->mainmodel->teacher_insrt($b,$c);    
        redirect(base_url().'main/login');  
        }
    }
     public function update()
        {
            $id=$this->session->id;
            $this->load->model('mainmodel');
            $data['user_data']=$this->mainmodel->update_stud($id);
            $this->load->view("updatestud",$data);
        }
public function updateaction()
    {
        $a = array("fname"=>$this->input->post("fname"),
            "lname"=>$this->input->post("lname"),
            "address"=>$this->input->post("address"),
            "district"=>$this->input->post("district"),
            "pin"=>$this->input->post("pin"),
            "number"=>$this->input->post("number"),
            "gender"=>$this->input->post("gender"),
            "dob"=>$this->input->post("dob"),
            "education"=>$this->input->post("education"));
            $b=array("email"=>$this->input->post("email") );
        $this->load->model('mainmodel');
       // $id=$this->uri->segment(3);
       // $data['user_data']=$this->mainmodel->single_data($id);
        //$this->mainmodel->single_select();
        //$this->load->view('updatestud',$data);
        if($this->input->post("update"))
        {
            $id=$this->session->id;
            $this->mainmodel->studupdate($a,$b,$id);
            redirect('main/studhome','refresh');
        }
    }
    
    public function newaction()
    {
        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel->newaction();
        $this->load->view('newview',$data);
    }   
    public function newapprove()
    {
        $this->load->model('mainmodel');
        
        $id=$this->uri->segment(3);
        $this->mainmodel->newapprove($id);
        redirect('main/newaction','refresh');
    }   
    public function newreject()
    {
        $this->load->model('mainmodel');
        
        $id=$this->uri->segment(3);
        $this->mainmodel->newreject($id);
        redirect('main/newaction','refresh');
    }
    public function not()
{
    $this->load->view('notification');
}
public function notify_action()
{
     $this->load->library('form_validation');
        $this->form_validation->set_rules("notification","notification",'required');
            if($this->form_validation->run())
            {
              
                $this->load->model('mainmodel');
                 $id=$this->session->id;
                $n=array("notification"=>$this->input->post("notification"),
                    "currentdate"=>date('y-m-d'),"loginid"=>$id);
                $this->mainmodel->notifymodel($n);
                redirect('main/not','refresh');
            }


}
public function tviewnot()
{
    $this->load->model('mainmodel');
    $data['n']=$this->mainmodel->noti();
    $this->load->view('viewnotify',$data);
}
 public function deletenotify()
 {
    $this->load->model('mainmodel');
    $id=$this->uri->segment(3);
    $this->mainmodel->deletenot($id);
    redirect('main/not','refresh');
 }
 public function sviewnot()
 {
      $this->load->model('mainmodel');
      $data['n']=$this->mainmodel->snview();
      $this->load->view('sviewnotify',$data);
 }
   


}
	?>