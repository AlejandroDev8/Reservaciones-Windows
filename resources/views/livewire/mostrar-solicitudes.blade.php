<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
  @if (count($solicitudes) > 0)
  @foreach ($solicitudes as $solicitud)
  <div class="p-6 text-gray-900 bg-white md:flex justify-between items-center">
    <div class="leading-10 space-y-3">
      <h2 class="text-xl font-bold">
        @if ($solicitud->sala)
        Sala Solicitada: <span class="text-indigo-600 normal-case font-normal">{{ $solicitud->sala->salas
          }}</span>
        @else
        Sin sala asociada
        @endif
      </h2>
      <p class="text-sm text-gray-600 font-bold">Correo electrónico asociado: <span
          class="text-indigo-600 normal-case">{{ $solicitud->email }}</span></p>
      <p class="text-sm text-gray-500 font-bold">Fecha de Inicio de la Reservación: <span
          class="text-indigo-600 normal-case">{{
          \Carbon\Carbon::parse($solicitud->fecha_inicio)->format('d/m/Y') }}
        </span>
      </p>
      <p class="text-sm text-gray-500 font-bold">Fecha de Fin de la Reservación: <span
          class="text-indigo-600 normal-case">{{ \Carbon\Carbon::parse($solicitud->fecha_fin)->format('d/m/Y')
          }}
        </span>
      </p>
      <p>Estado: <span class="text-indigo-600 normal-case">{{$solicitud->estados->estados}}</span></p>
    </div>
    <div class="flex flex-col md:flex-row items-stretch gap-3 mt-5 md:mt-0">
      <button wire:click="$dispatch('mostrarAlerta', {{ $solicitud->id }})"
        class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
        Eliminar
      </button>
    </div>
  </div>
  @endforeach
  @else
  <div class="p-6 text-gray-900 bg-white">
    <p class="text-xl font-bold">No tienes solicitudes actualmente</p>
  </div>
  @endif
  <div class="mt-10">
    {{ $solicitudes->links() }}
  </div>
</div>

@push('scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  Livewire.on('mostrarAlerta', solicitudId => {
      Swal.fire({
      title: '¿Estás seguro de eliminar la solicitud?',
      text: "No podrás revertir esto!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Sí, eliminar!',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
      if (result.isConfirmed) {
        @this.call('eliminarSolicitud', solicitudId)
        Swal.fire(
          'Solicitud eliminada correctamente!',
            'Tu solicitud ha sido eliminada.',
          'success'
        )
      }
    })
    })
  
</script>
@endpush