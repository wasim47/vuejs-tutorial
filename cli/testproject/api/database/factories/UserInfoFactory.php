<?php

namespace Database\Factories;

use App\Models\UserInfo;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserInfoFactory extends Factory
{
    protected $model = UserInfo::class;

    public function definition(): array
    {
    	return [
    	    'name' =>"Mohammad Wasim",
			'dob' =>"22-05-2021",
			'contact' =>"01922002381",
			'email' =>"wasim.html@gmail.com",
			'profile' =>"I am a software developer",
			'status' =>1,
    	];
    }
}
