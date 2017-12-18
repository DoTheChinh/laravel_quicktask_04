<?php 
namespace App\Http\Middleware;
use Closure;
use App;
class LocaleMiddleware
{
	$language = $request->session()->get('language-select', config('app.locate'));
	App:: setLocale($language);
    return $next($request);
}
?>