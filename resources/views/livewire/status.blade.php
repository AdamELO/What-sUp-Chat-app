<label class="switch">
    <input type="checkbox" wire:click="changeStatus" {{$user->status == 1 ? 'checked' : '' }}>
    <div class="rounded"></div>
</label>