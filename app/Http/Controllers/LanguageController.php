<?php 
namespace App\Http\Controlers;
use App;
use Illuminate\Http\Request;
use App\Http\Requests\RequestForm;

class LanguageController extends Controller
{
	public function changeLanguage( Request $request, $languae)
	{
		$request->session()->put('language-select', $languae);
		App::setLocale($languae);

		return redirect()->back();
	}
}
?>