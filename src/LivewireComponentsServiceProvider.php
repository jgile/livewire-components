<?php

namespace JGile\LivewireComponents;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LivewireComponentsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('livewire-components')
            ->hasConfigFile()
            ->hasViews();
    }

    public function bootingPackage()
    {
        $this->registerComponents([]);
        $this->registerMacros();
        $this->registerBladeDirectives();
    }

    protected function registerBladeDirectives()
    {

    }

    protected function registerMacros()
    {

    }

    protected function registerComponents($components)
    {

    }

}
