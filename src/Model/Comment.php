<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends model
{
	use SoftDeletes;
	protected $dates = ['deleted_ad'];
}