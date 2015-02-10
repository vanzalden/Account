<?php

class HomeController extends BaseController {
	public function home()
	{
		/*Mail::send('emails.auth.activate', array('name' => 'Tilo'), function($message)
		{
			$message->to('tilovanzalden@gmail.com', 'Tilo Van Zalden')->subject('Test email');
		});*/
		return View::make('home');
	}
}
