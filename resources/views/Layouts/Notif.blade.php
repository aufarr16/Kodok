@push('scripts')
<script>
 	@if(session('success'))
		Swal.fire({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 4000,
			background: '#a3ffa3',
			icon: 'success',
			title: '{{session('success')}}',
			timerProgressBar: true,
		})
	@endif

 	@if(session('info'))
		Swal.fire({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 4000,
			background: '#B4F5F0',
			icon: 'info',
			title: '{{session('info')}}',
			timerProgressBar: true,
		})
	@endif

 	@if(session('error'))
		Swal.fire({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 4000,
			background: 'bisque',
			icon: 'error',
			title: '{{session('error')}}',
			timerProgressBar: true,
		})
	@endif
</script>
@endpush