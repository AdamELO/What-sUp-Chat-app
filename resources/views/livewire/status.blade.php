<label class="switch" data-role="toggle-spoil">
    <input type="checkbox" wire:click="changeStatus"  {{ Auth::user()->status == 1 ? 'checked' : '' }}>
    <div class="rounded"></div>
</label>