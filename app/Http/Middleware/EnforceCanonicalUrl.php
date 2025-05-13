<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnforceCanonicalUrl
{
    public function handle(Request $request, Closure $next)
    {
        $url = $request->fullUrl();

        // Canonical base domain
        $canonicalHost = 'www.sthreeengineers.com';

        // Redirect to HTTPS and www
        if (
            $request->getHost() !== $canonicalHost ||
            !$request->isSecure() ||
            str_contains($url, '/public/') ||
            str_contains($url, '/public/index.php/')
        ) {
            $cleanPath = str_replace(['/public/index.php', '/public'], '', $request->getRequestUri());
            $cleanUrl = 'https://' . $canonicalHost . $cleanPath;

            return redirect($cleanUrl, 301);
        }

        return $next($request);
    }
}
