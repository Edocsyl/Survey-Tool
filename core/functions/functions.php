<?php

/**
 * @author Kaj Bossard <kaj@edocsyl.ch>
 * @version 1.0
 * @category Functions file
 * @copyright Copyright (c) 2014, gigaIT.net
 */

class Functions extends Database {
	
	/**
	 * Logout the user
	 */
	public function logoutUser(){
		$this->log($_SESSION['userid'], "logout");
		session_destroy();
		$this->alertSuccess("Erfolgreich ausgeloggt.");
		header("Location: " . $this->_config['basepath']);
		exit();
	}
	
	/**
	 * If the user is logged in, you get redirected. 
	 */
	public function ifLoginLeave(){
		if($this->isLoggedIn() != false){
			header("Location: " . $this->_config['basepath']);
			exit();
		}
	}
	
	/**
	 * If no user is logged in, you get redirected
	 */
	public function ifLogoutLeave(){
		if($this->isLoggedIn() == false){
			header("Location: " . $this->_config['basepath']);
			exit();
		}
	}
	
	/**
	 * Checks if user is logged in
	 * @return boolean|userid
	 */
	public function isLoggedIn(){
		if($_SESSION['userid'] == null){
			return false;
		} else {
			return $_SESSION['userid'];
		}
	}
	
	/**
	 * Shows success alerts
	 * @param string $msg
	 */
	public function alertSuccess($msg){
		echo '<div class="alert alert-success">'.$msg.'</div>';
	}
	
	/**
	 * Shows error alerts
	 * @param string $msg
	 */
	public function alertError($msg){
		echo '<div class="alert alert-error">'.$msg.'</div>';
	}
	
}

?>