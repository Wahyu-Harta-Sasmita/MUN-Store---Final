<x-dashboard>
    @livewireStyles
    <div class="w-full">
        @livewire('transaction-component')
    </div>
    @livewireScripts
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        window.addEventListener('swal:modal', event => {
            Swal.fire({
                title: event.detail.title,
                text: event.detail.text,
                icon: event.detail.type,
            });
        });
    </script>
</x-dashboard>