<x-laravel-exceptions-renderer::layout :$exception>
    <div class="renderer container mx-auto lg:px-8">
        <x-laravel-exceptions-renderer::navigation :$exception />

        <main class="px-6 pb-12 pt-6" style="height:90vh !important;overflow: scroll;">
            <div class="container mx-auto">
                <x-laravel-exceptions-renderer::header :$exception />

                <x-laravel-exceptions-renderer::trace-and-editor :$exception />

                <x-laravel-exceptions-renderer::context :$exception />
            </div>
        </main>
    </div>
</x-laravel-exceptions-renderer::layout>
