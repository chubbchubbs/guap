<?php

/**
 * SimpleRegistrationForm class.
 * SimpleRegistrationForm is the data structure for keeping
 * user registration form data. It is used by the 'registration' action of 'UserController'.
 */
class SimpleRegistrationForm extends User
{

	public function rules()
	{
		$rules = array(
		);

		return $rules;
	}

}