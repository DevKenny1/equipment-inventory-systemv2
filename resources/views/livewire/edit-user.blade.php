<x-bladewind::modal show_action_buttons="false" type="blank" name="edit-user" size="large" blur_size="none">
    <form action="">
        <h1 class="text-center">Edit Users</h1>
        <x-bladewind::input wire:model="name" />
        <x-bladewind::input wire:model="username" />
        <x-bladewind::input wire:model="role" />
        <x-bladewind::input wire:model="status" />
    </form>
</x-bladewind::modal>