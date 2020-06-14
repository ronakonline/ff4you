<?php

if(!function_exists('check_login_status')){
	function check_login_status(){
		if(!isset($_SESSION['admin'])){
			redirect(base_url('admin/login'));
		}else{
			return;
		}
	}
}

if(!function_exists('error_msg')){
	function error_msg(){
		if(isset($_SESSION['error'])){
			echo "<script>alertify.error('".$_SESSION['error']."')</script>";
			unset($_SESSION['error']);
		}
	}
}

if(!function_exists('success_msg')){
	function success_msg(){
		if(isset($_SESSION['success'])){
			echo "<script>alertify.success('".$_SESSION['success']."')</script>";
			unset($_SESSION['success']);
		}
	}
}
