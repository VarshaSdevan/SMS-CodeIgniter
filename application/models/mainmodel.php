<?php
class mainmodel extends CI_model
{
	public function strgetuserid($email)
	{
		$this->db->select('id');
		$this->db->from("details2");
		$this->db->where("email",$email);
		return $this->db->get()->row('id');
	}
	public function strverifypass($pass,$qry)
	{
		return password_verify($pass,$qry);
	}

	public function strselectpass($email,$pass)
	{
		$this->db->select('password');
		$this->db->from("details2");
		$this->db->where("email",$email);
		$qry=$this->db->get()->row('password');
		//echo"$qry";exit;
		return $this->strverifypass($pass,$qry);
	}
	
	public function strgetuser($id)
	{
		$this->db->select('*');
		$this->db->from("details2");
		$this->db->where("id",$id);
		return $this->db->get()->row();
	}
	public function inreg($b,$c)
	{
		$this->db->insert("details2",$c);
		$loginid=$this->db->insert_id();
		$b['loginid']=$loginid;
	   $this->db->insert("details",$b);
	}
	public function encpswd($pass)
	{
		return password_hash($pass, PASSWORD_BCRYPT);
	}
	
	public function teacher_insrt($b,$c)
	{
		$this->db->insert("details2",$c);
		$loginid=$this->db->insert_id();
		$b['loginid']=$loginid;
	   $this->db->insert("tdetails1",$b);
	}
	public function update_stud($id)
		{
			//echo"$id";exit;
			$this->db->select('*');
			$this->db->join('details2','details.loginid=details2.id','inner');
			$qry=$this->db->where("loginid",$id);
			$qry=$this->db->get("details");
			return $qry;
		}
	public function studupdate($a,$b,$id)
	   {
		$this->db->select('*');
		$qry=$this->db->where("details.loginid",$id);
		$qry=$this->db->join('details2','details.loginid=details2.id','inner');
		$qry=$this->db->update("details",$a);
		$qry=$this->db->where("details2.id",$id);
		$qry=$this->db->update("details2",$b);
		return $qry;
		}
		public function studview()
	{
		$this->db->select('*');
		$this->db->join('details2','details2.id=details.loginid','inner');
		$qry=$this->db->get("details");
		 return $qry;
	}
	public function newaction()
	{
		$this->db->select('*');
		$this->db->join('details2','details2.id=details.loginid','inner');
		$qry=$this->db->get("details");
        return $qry;
	}
	public function newapprove($id)
	{   $this->db->set('status','1');
		$qry=$this->db->where("id",$id);
		$qry=$this->db->update("details2");
		return $qry;
	}
	public function newreject($id)
	{   $this->db->set('status','2');
		$qry=$this->db->where("id",$id);
		$qry=$this->db->update("details2");
		return $qry;
	}
	
 public function notifymodel($n)
    {
    	$this->db->insert("notify",$n);
    }
    public function noti()
    {
    	$this->db->select('*');
    	$qry=$this->db->get("notify");
    	return $qry;
    }
    public function deletenot($id)
{
    $this->db->where('id',$id);
    $this->db->delete("notify");
}
 public function snview()
 {
 	$this->db->select('*');
 	$qry=$this->db->join('tdetails1','tdetails1.loginid=notify.loginid','inner');
 	$qry=$this->db->get("notify");
 	return $qry;
 }


    
}
?>