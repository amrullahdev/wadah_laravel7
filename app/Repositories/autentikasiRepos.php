<?php

namespace App\Repositories;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;

class autentikasiRepos extends Controller
{
	public function registrasiAutentikasi($request)
	{
		$data = $request->all();
		$data['kd_user'] =  $this->get_primaryKey(101);
		$data['password'] = Hash::make($data['password']);
		User::create($data);
	}
}
