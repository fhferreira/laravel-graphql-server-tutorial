<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class 
 extends Controller {
	/**
	 * Create a new user.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		$data = $this->validate($request, [
			'email' => ['email', 'unique:users'],
			'password' => ['min:6'],
		]);

		$user = \App\User::create($data);

		return response()->json(['user' => $user]);
	}
}
