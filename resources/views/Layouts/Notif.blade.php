@push('styles')
<link href="{{ url('') }}/css/Plugin/Sweetalert/sweetalert2.min.css" rel="stylesheet" />
@endpush

@push('scripts')
<script src="{{ url('') }}/js/plugins/Sweetalert/sweetalert2.min.js"></script>
<script>
 	@if(session('success'))
		Swal({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 4000,
			background: '#a3ffa3',
			type: 'success',
			title: '{{session('success')}}',
			timerProgressBar: true,
		})
	@endif

 	@if(session('info'))
		Swal({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 4000,
			background: '#B4F5F0',
			type: 'info',
			title: '{{session('info')}}',
			timerProgressBar: true,
		})
	@endif

 	@if(session('error'))
		Swal({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 4000,
			background: 'bisque',
			type: 'error',
			title: '{{session('error')}}',
			timerProgressBar: true,
		})
	@endif
</script>
@endpush