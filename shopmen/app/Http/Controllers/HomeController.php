<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function uploadSubmit(Request $request)
	{
       
		if($request->hasFile('photos')) {
			
			$files = $request->file('photos');
            
			
                // lưu product
				
                // duyệt từng ảnh và thực hiện lưu
				foreach ($request->photos as $photo) {
				echo	$filename = $photo->store('photos');
					
				}
				echo "Upload successfully";
			
		}
	}
}
