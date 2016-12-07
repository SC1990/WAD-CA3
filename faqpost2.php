<?php
/*
$message = '';
$error = '';
if(isset($_POST["submit"])){
	if(empty($_POST["name"])){
		$error = "<label class='text-danger'>Enter Name</label>";
	}
	else if(empty($_POST["email"])){
		$error = "<label class='text-danger'>Enter Email</label>";
	}
	else if(empty($_POST["comments"])){
		$error = "<label class='text-danger'>Enter Comment</label>";
	}
	else{
		if(file_exists('faqdata.json')){
			$current_data = file_get_contents('faqdata.json');
			
			$array_data = json_decode($current_data, true);
			$extra = array(
				'name' => $_POST["name"],
				'email' => $_POST["email"],
				'comments' => $_POST["comments"]
			);
			$array_data[] = $extra;
			$final_data = json_encode($array_data);
			
			if(file_put_contents('faqdata.json', $final_data)){
				$message = "<label class='text-success'>Comment added successfully</label>";
				
			}
		}
		else{
			$error='JSON file does not exist';
		}
	}
}*/
?>