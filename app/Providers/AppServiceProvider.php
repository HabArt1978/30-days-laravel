<?php

namespace App\Providers;

use App\Models\Job;
use App\Models\User;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Gate;
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
        // Проверяем среду выполнения кода
        $isProduction = $this->app->environment('production');
        // Включает защиту во всех средах, кроме production
        Model::preventLazyLoading(!$isProduction);

        // Кастомизация ошибки (опционально)
        Model::handleLazyLoadingViolationUsing(function ($model, $relation) {
            $class = get_class($model);
            throw new \Exception("Обнаружена ленивая загрузка: [{$relation}] в модели [{$class}] ID [{$model->getKey()}]");
        });
    }
}
