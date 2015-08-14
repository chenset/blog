<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->url() === route('admin.article.image.upload.post')) {//图片上传的时候跳过检查
            return $this->addCookieToResponse($request, $next($request));
        }

        return parent::handle($request, $next);
    }

}
