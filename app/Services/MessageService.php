<?php
/*
Copyright © Magd Almuntaser, OneXGen Technology. All rights reserved.
Project: MPWA Whatsapp Gateway | Multi Device
Licensed under the CC BY-NC-ND 4.0 License.
For details, visit https://creativecommons.org/licenses/by-nc-nd/4.0/.
*/

namespace App\Services;

use App\Services\Impl\MessageServiceImpl;

interface MessageService
{
    public function formatText($text, $footer = '') : array;
	
	public function formatLocation($latitude, $longitude) : array;
	
	public function formatVcard($name, $phone) : array;

    public function formatImage($image, $caption = '') : array;

    public function formatButtons ($text, $buttons , $urlimage = '' ,$footer = '') : array;

    public function formatTemplates ($text, $buttons , $urlimage = '' ,$footer = '') : array;

    public function formatLists ($text,$lists,$title,$name,$buttonText,$footer = '') : array;

    public function format ($type, $data) : array;

    
}

  
?>