<?php

namespace App;

use App\Model\Admin;

class rootConfig 
{
	public $DEVELOPER_MODE=false;

	public function adminLogin()
	{
		return Admin::where('fk_kd_user',auth('api')->user()->kd_user)->first();
	}

	public function userLogin()
	{
		return auth('api')->user()->kd_user;
	}

	public function df200()
	{
		return ['hasil'=>200,'text'=>'Proses berhasil di lakukan'];
	}

}
