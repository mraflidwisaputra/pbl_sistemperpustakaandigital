<?php

namespace App\Providers;

use App\Models\Notifikasi;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer(['components.profilanggota', 'components.profiladmin'], function ($view) {
            $userId = session('user_id');

            if (!$userId) {
                $view->with([
                    'notifikasis' => collect(),
                    'jumlahNotifikasi' => 0,
                ]);

                return;
            }

            $query = Notifikasi::query()
                ->where(function ($query) use ($userId) {
                    $query->where('user_id', $userId)
                        ->orWhereNull('user_id');
                });

            $view->with([
                'notifikasis' => (clone $query)->latest()->take(5)->get(),
                'jumlahNotifikasi' => (clone $query)->where('status', 'belum_dibaca')->count(),
            ]);
        });
    }
}
