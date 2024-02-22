<x-action-section>
  <x-slot name="title">
    {{ __('Delete Tenant') }}
  </x-slot>

  <x-slot name="description">
    {{ __('Permanently delete this Tenant.') }}
  </x-slot>

  <x-slot name="content">
    <p class="text-muted">
      {{ __('Once a tenant is deleted, all of its resources and data will be permanently deleted.') }}
    </p>

    <x-danger-button wire:click="$toggle('confirmingTeamDeletion')" wire:loading.attr="disabled">
      {{ __('Delete Tenant') }}
    </x-danger-button>

    <!-- Delete Team Confirmation Modal -->
    <x-confirmation-modal wire:model.live="confirmingTeamDeletion">
      <x-slot name="title">
        {{ __('Delete Tenant') }}
      </x-slot>

      <x-slot name="content">
        {{ __('Are you sure you want to delete this Tenant? Once a tenant is deleted, all of its resources and data will be permanently deleted.') }}
      </x-slot>

      <x-slot name="footer">
        <x-secondary-button wire:click="$toggle('confirmingTeamDeletion')" wire:loading.attr="disabled">
          {{ __('Cancel') }}
        </x-secondary-button>

        <x-danger-button wire:click="deleteTeam" wire:loading.attr="disabled">
          {{ __('Delete Tenant') }}
        </x-danger-button>
      </x-slot>
    </x-confirmation-modal>
  </x-slot>
</x-action-section>
