<?php

namespace Intervention\Message;

use Session, View;

class Message
{
    public function add($message)
    {
        $messages = array();
        
        if (Session::has('messages')) {
            $messages = Session::get('messages');
        }

        $messages[] = $message;

        Session::flash('messages', $messages);
    }

    public function display()
    {
    	if (Session::has('messages')) {
    		return View::make('message::message', array(
    			'messages' => Session::get('messages')
    		));
    	}
    }
}