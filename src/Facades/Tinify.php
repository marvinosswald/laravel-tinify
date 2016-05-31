<?php 
namespace marvinosswald\LaravelTinify\Facades;
use Illuminate\Support\Facades\Facade;
class Tinify extends Facade {
	protected static function getFacadeAccessor(){
		return 'tinify';
	}
}