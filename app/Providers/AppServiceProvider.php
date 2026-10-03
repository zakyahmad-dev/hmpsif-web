namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Paksa HTTPS jika di lingkungan production (Railway)
        if (config('app.env') === 'production' || app()->environment('production')) {
            URL::forceScheme('https');
        }
    }
}