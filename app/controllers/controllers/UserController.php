<?php
	class UserController extends BaseController
	{
		// get the view for the regoster page
		public function getCreate()
		{
			return "register page";
		}

		// get the view for the login page
		public function getLogin()
		{
			return "login pages";
		}
	}
?>