<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath."/../libs/CrudOperation.php");
include_once ($filepath."/../helpers/Format.php");
include_once ($filepath."/../libs/Session.php");

/**
* Users class for registration and login, user profiles and others.
*/
class SampleUser
{
	private $db;
	private $fm;

	function __construct()
	{
		$this->db = new CrudOperation();
		$this->fm = new Format();
	}

	function showPath(){
		return realpath(dirname(__FILE__));
	}
	function insertData($data){


		if (empty($data['firstname']) || empty($data['lastname']) || empty($data['email']) || empty($data['password']) || empty($data['confpassword'])) {
			$msg = "<span class='error'>Les champs ne doivent pas être vides .</span>";
	 		return $msg;
		}else{
			
			$firstname = $this->fm->validation($data['firstname']);
			$lastname = $this->fm->validation($data['lastname']);
			$email = $this->fm->validation($data['email']);

			if($data['password']!= $data['confpassword']){
				header("Location: register.php");
			}else{
				$password = $this->fm->validation(password_hash($data['password'], PASSWORD_DEFAULT));
			}
			$sql = "INSERT INTO users(firstname,lastname,email,password,is_admin) VALUES('$firstname','$lastname','$email','$password',false)";
			$inserted = $this->db->insert($sql);

			if ($inserted) {
			   $msg = "<span class='error'>Inserted !.</span>";
			   return $msg;
			}else{
			//    $msg = "<span class='error'>Not Inserted !.</span>";
			//    return $msg;
			   header("Location: ajoutUser.php");
			}
	 		
		}
		

	}
	function uploadUser($data){


		if (empty($data['firstname']) || empty($data['lastname']) || empty($data['email']) || empty($data['password'])) {
			$msg = "<span class='error'>Les champs ne doivent pas être vides .</span>";
	 		return $msg;
		}else{
			
			$firstname = $this->fm->validation($data['firstname']);
			$lastname = $this->fm->validation($data['lastname']);
			$email = $this->fm->validation($data['email']);
			$password = $this->fm->validation(password_hash($data['password'], PASSWORD_DEFAULT));
			$sql = "INSERT INTO users(firstname,lastname,email,password,is_admin) VALUES('$firstname','$lastname','$email','$password',true)";
			$inserted = $this->db->insert($sql);

			if ($inserted) {
			   $msg = "<span class='error'>Inserted !.</span>";
			   return $msg;
			}else{
			   $msg = "<span class='error'>Not Inserted !.</span>";
			   return $msg;
			   header("Location: ajoutuser.php");
			}
	 		
		}
		

	}

	public function userLogin($data){
		$email = $data['email'];
		$password = $data['password'];
		$email = mysqli_real_escape_string($this->db->link, $email);

	    if (empty($email) or empty($password))
		{
			$msg = "<span class='error'>Fields must not be empty !.</span>";
			return $msg;
		}else{
			$sql = "SELECT * FROM users WHERE email='$email'";
			$result = $this->db->select($sql);
			if ($result != false) {
				$value = mysqli_fetch_assoc($result);
				$dbpassword = $value['password'];
				$dbIsAdmin = $value['is_admin'];
				if(password_verify($password, $dbpassword))
				{
					if($dbIsAdmin == false){
						Session::set("userid",$value["id"]);
            			Session::set("firstname",$value["firstname"]);
						Session::set("lastname",$value["lastname"]);
						header("Location: profil.php");
						
					}else{
						// Session::set("userid",$value["id"]);
						session_start();
						$_SESSION['userid'] = '1';
            			Session::set("firstname",$value["firstname"]);
            			Session::set("lastname",$value["lastname"]);
						header("Location: admin/dashboard.php");
					}
				}else{
					$msg = "<span class='error'>email or password not matched !.</span>";
					return $msg;
				}

				// Session::set("cslogin",true);
				// Session::set("csid",$value['csId']);
				// Session::set("csname",$value['name']);
				
			}
		}
	}

	public function uploadFesti($data)
	{
	if (empty($data['date']) || empty($data['nom']) || empty($data['localisation']) || empty($data['description']) || empty($data['email']) || empty($data['telephone'])) {
		$msg = "<span class='error'>Les champs ne doivent pas être vides.</span>";
		return $msg;
	} else {

		if (isset($_FILES['photo'])) {

			$img_name = $_FILES['photo']['name'];
			$img_size = $_FILES['photo']['size'];
			$tmp_name = $_FILES['photo']['tmp_name'];
			$error = $_FILES['photo']['error'];
		
			if ($error === 0) {
				if ($img_size > 400000) {
					$msg = "<span class='error'>La taille de l'image est trop grande.</span>";

				}else {
					$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
					$img_ex_lc = strtolower($img_ex);
		
					$allowed_exs = array("jpg", "jpeg", "png"); 
		
					if (in_array($img_ex_lc, $allowed_exs)) {
						$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
						$img_upload_path = '../uploads/'.$new_img_name;
						move_uploaded_file($tmp_name, $img_upload_path);
						$date = $this->fm->validation($data['date']);
						$nom = $this->fm->validation($data['nom']);
						$localisation = $this->fm->validation($data['localisation']);
						$description = $this->fm->validation($data['description']);
						$email = $this->fm->validation($data['email']);
						$telephone = $this->fm->validation($data['telephone']);
						
						$sql = "INSERT INTO festivals(date,nom,localisation,photo,description,email,telephone) VALUES('$date','$nom','$localisation','$new_img_name','$description','$email','$telephone')";
					 	$inserted = $this->db->insert($sql);
						if ($inserted) {
						   $msg = "<span class='error'>Inserted !.</span>";
						   return $msg;
						}else{
						   $msg = "<span class='error'>Not Inserted !.</span>";
						   return $msg;
						   header("Location: ajoutfesti.php");
						}
				}else {
					$msg = "<span class='error'>Tu ne peux pas insérer ce type d'image.</span>";

					}
				}
			}
		
		}
	}
}

public function reservationcovoit($data){
	/* table associative user et covoit, servira a enregistre une reservation id user et id coivoit seront
des cles etrangeres et on va verifier si le lien existe si oui on ne fais rien, sinon on enregistre une nouvelle
reservation*/
}

public function uploadCovoi($data)
	{
	if (empty($data['type']) || empty($data['date_aller']) || empty($data['date_retour']) || empty($data['nombre_places'])) {
		$msg = "<span class='error'>Les champs ne doivent pas être vides.</span>";
		return $msg;
	} else {
		
		if (isset($_FILES['photo'])) {
	
			$img_name = $_FILES['photo']['name'];
			$img_size = $_FILES['photo']['size'];
			$tmp_name = $_FILES['photo']['tmp_name'];
			$error = $_FILES['photo']['error'];
		
			if ($error === 0) {
				if ($img_size > 400000) {
					$msg = "<span class='error'>La taille de l'image est trop grande.</span>";

				}else {
					$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
					$img_ex_lc = strtolower($img_ex);
		
					$allowed_exs = array("jpg", "jpeg", "png"); 
		
					if (in_array($img_ex_lc, $allowed_exs)) {
						$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
						$img_upload_path = '../uploads/'.$new_img_name;
						move_uploaded_file($tmp_name, $img_upload_path);					
						$type = $this->fm->validation($data['type']);
						$date_aller = $this->fm->validation($data['date_aller']);
						$date_retour = $this->fm->validation($data['date_retour']);
						$nombre_places = $this->fm->validation($data['nombre_places']);
						$sql = "INSERT INTO covoiturages(type,nombre_places,date_aller,date_retour,photo) VALUES('$type','$nombre_places','$date_aller','$date_retour','$new_img_name')";
					 	$inserted = $this->db->insert($sql);
						if ($inserted) {
						   $msg = "<span class='error'>Inserted !.</span>";
						   return $msg;
						   header("Location: listecovoi.php");
						}else{
						   $msg = "<span class='error'>Not Inserted !.</span>";
						   return $msg;
						   header("Location: ajoutfesti.php");
						}
				}else {
					$msg = "<span class='error'>Tu ne peux pas insérer ce type d'image.</span>";

					}
				}
			}
		
		}
	}
}

	
function getNames($table_name){
	$sql = "SELECT * FROM $table_name";
	$names = $this->db->select($sql);
	return $names;
}

	
public function deleteUser($data){
	$id = $data['id'];
	$sql = "DELETE FROM users WHERE id ='$id'";
	$del = $this->db->delete($sql);
	var_dump($del);
	if ($del) {
		return "Successfully Deleted !";
	}else{
		return "Not deleted";
	}
}
public function deleteFestival($id){
	$sql = "DELETE FROM festivals WHERE id ='$id'";
	$del = $this->db->delete($sql);
	if ($del) {
		return "Successfully Deleted !";
	}else{
		return "Not deleted";
	}
}
public function deleteCovoi($id){
	$sql = "DELETE FROM covoiturages WHERE id ='$id'";
	$del = $this->db->delete($sql);
	if ($del) {
		return "Successfully Deleted !";
	}else{
		return "Not deleted";
	}
}

public function getNameById($id, $table_name){
	$sql = "SELECT * FROM $table_name WHERE id='$id'";
	$name = $this->db->select($sql);
	return $name;
}


	public function updateDataCovoi($data){

		if (isset($_FILES['photo'])) {
			$img_name = $_FILES['photo']['name'];
			$img_size = $_FILES['photo']['size'];
			$tmp_name = $_FILES['photo']['tmp_name'];
			$error = $_FILES['photo']['error'];

			if ($error === 0) {

				if ($img_size > 400000) {
					$msg = "<span class='error'>La taille de l'image est trop grande.</span>";

				}else {
					$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
					$img_ex_lc = strtolower($img_ex);
		
					$allowed_exs = array("jpg", "jpeg", "png"); 
		
					if (in_array($img_ex_lc, $allowed_exs)) {
						$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
						$img_upload_path = '../uploads/'.$new_img_name;
						move_uploaded_file($tmp_name, $img_upload_path);

						$type = $this->fm->validation($data['type']);
						$id=$data['id'];
						$date_aller = $this->fm->validation($data['date_aller']);
						$nombre_places = $this->fm->validation($data['nombre_places']);
						$sql = "UPDATE covoiturages SET type='$type', nombre_places = '$nombre_places', date_aller = '$date_aller', photo='$new_img_name' WHERE id='$id' ";
						var_dump($sql);
						$updated = $this->db->insert($sql);
						if ($updated) {
							$msg = "<span class='error'>Updated !.</span>";
							return $msg;
						}else{
							$msg = "<span class='error'>Not Not Updated !.</span>";
							return $msg;
							header("Location: ajoutfesti.php");
						}
				}else {
					$msg = "<span class='error'>Tu ne peux pas insérer ce type d'image.</span>";

					}
				}
			}
		
		}
	}
	

public function updateDataFesti($data){

	if (isset($_FILES['photo'])) {
		$img_name = $_FILES['photo']['name'];
		$img_size = $_FILES['photo']['size'];
		$tmp_name = $_FILES['photo']['tmp_name'];
		$error = $_FILES['photo']['error'];

		if ($error === 0) {

			if ($img_size > 400000) {
				$msg = "<span class='error'>La taille de l'image est trop grande.</span>";

			}else {
				$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
				$img_ex_lc = strtolower($img_ex);
				$allowed_exs = array("jpg", "jpeg", "png"); 

				if (in_array($img_ex_lc, $allowed_exs)) {
					$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
					$img_upload_path = '../uploads/'.$new_img_name;
					move_uploaded_file($tmp_name, $img_upload_path);
					$id = $data['id'];
					$date = $this->fm->validation($data['date']);
					$nom = $this->fm->validation($data['nom']);
					$localisation = $this->fm->validation($data['localisation']);
					$description = $this->fm->validation($data['description']);
					$email = $this->fm->validation($data['email']);
					$telephone = $this->fm->validation($data['telephone']);
					$sql = "UPDATE festivals SET date='$date', nom='$nom', localisation = '$localisation', photo='$new_img_name', description='$description', email='$email', telephone='$telephone'  WHERE id='$id' ";
					var_dump($sql);
					$updated = $this->db->insert($sql);
					if ($updated) {
						$msg = "<span class='error'>Updated !.</span>";
						return $msg;
					}else{
						$msg = "<span class='error'>Not Updated !.</span>";
						return $msg;
						header("Location: ajoutfesti.php");
					}
			}else {
				$msg = "<span class='error'>Tu ne peux pas insérer ce type d'image.</span>";

				}
			}
		}

	}
}
	

	public function updateDataUser($data){		
		$firstname = $this->fm->validation($data['firstname']);
		$lastname = $this->fm->validation($data['lastname']);
		$email = $this->fm->validation($data['email']);
		$id = $data['id'];
		$password = $this->fm->validation(password_hash($data['password'], PASSWORD_DEFAULT));
		$sql = "UPDATE users SET firstname='$fir', lastname = '$nom', email='$email' WHERE id='$id' ";
		$inserted = $this->db->insert($sql);

		if ($inserted) {
		   $msg = "<span class='error'>Inserted !.</span>";
		   return $msg;
		}else{
		   $msg = "<span class='error'>Not Inserted !.</span>";
		   return $msg;
		   header("Location: ajoutuser.php");
		}
	}
	

	}
?>