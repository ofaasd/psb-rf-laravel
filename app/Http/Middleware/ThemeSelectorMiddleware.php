<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class ThemeSelectorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Allow switching via query parameter ?theme=modern or ?theme=classic
        if ($request->has('theme')) {
            $requestedTheme = $request->query('theme') === 'classic' ? 'classic' : 'modern';
            session(['ui_theme' => $requestedTheme]);
        }

        // Default to modern redesign
        $currentTheme = session('ui_theme', 'modern');

        $finder = View::getFinder();
        $originalPaths = $finder->getPaths();
        $redesignPath = resource_path('views/redesign');

        if ($currentTheme === 'modern') {
            // Ensure redesign path is the first path searched
            if (!in_array($redesignPath, $originalPaths)) {
                $newPaths = array_merge([$redesignPath], $originalPaths);
                $finder->setPaths($newPaths);
            } elseif ($originalPaths[0] !== $redesignPath) {
                $filtered = array_values(array_filter($originalPaths, fn($p) => $p !== $redesignPath));
                $finder->setPaths(array_merge([$redesignPath], $filtered));
            }
        } else {
            // Classic mode: remove redesign path so only old views are used
            $filtered = array_values(array_filter($originalPaths, fn($p) => $p !== $redesignPath));
            $finder->setPaths($filtered);
        }

        View::share('current_ui_theme', $currentTheme);

        return $next($request);
    }
}

