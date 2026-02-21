<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CleanInputs
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Clean all input data
        $input = $request->all();
        $cleaned = $this->cleanData($input);
        $request->merge($cleaned);

        return $next($request);
    }

    /**
     * Recursively clean array/string data from XSS
     */
    private function cleanData($data)
    {
        if (is_array($data)) {
            return array_map([$this, 'cleanData'], $data);
        }

        if (is_string($data)) {
            return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
        }

        return $data;
    }
}
