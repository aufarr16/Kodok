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
		background: 'palegreen',
		type: 'success',
		title: '{{session('success')}}',
		timerProgressBar: true,
	})
@endif
</script>
@endpush