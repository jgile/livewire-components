<?php

namespace JGile\LivewireComponents;

use JGile\LivewireComponents\Views\Components\Modal;
use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LivewireComponentsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('livewire-components')
            ->hasConfigFile()
            ->hasViews()
            ->hasViewComponents(config('livewire-components.prefix', ''), ...[
                Modal::class
            ]);

        $this->registerLivewireComponents();
    }

    public function registerLivewireComponents(): self
    {
        if (!class_exists(Livewire::class)) {
            return $this;
        }

//        Livewire::component('gallery', Gallery::class);

        return $this;
    }
}
