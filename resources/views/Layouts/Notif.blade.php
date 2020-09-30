@push('styles')
<link href="{{ url('') }}/css/Plugin/Sweetalert/sweetalert2.min.css" rel="stylesheet" />
@endpush

@push('scripts')
<script src="{{ url('') }}/js/plugins/Sweetalert/sweetalert2.min.js"></script>
<script>
 @if(session('submit_success'))
	Swal({
		toast: true,
		position: 'top-end',
		showConfirmButton: false,
		timer: 4000,
		background: 'palegreen',
		type: 'success',
		title: '{{session('submit_success')}}',
		timerProgressBar: true,
	})
@endif

 @if(session('update_success'))
	Swal({
		toast: true,
		position: 'top-end',
		showConfirmButton: false,
		timer: 4000,
		background: 'palegreen',
		type: 'success',
		title: '{{session('update_success')}}',
		timerProgressBar: true,
	})
@endif

@if(session('delete_success'))
	Swal({
		toast: true,
		position: 'top-end',
		showConfirmButton: false,
		timer: 4000,
		background: 'palegreen',
		type: 'success',
		title: '{{session('delete_success')}}',
		timerProgressBar: true,
	})
@endif
</script>
@endpush