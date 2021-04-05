@switch($data->id_pstat)
  @case(1)
    <small class="badge bg-warning"><i class="fas fa-hourglass-half"></i>&nbsp Reserved</small>
    @break
  @case(2)
    <small class="badge bg-success"><i class="fas fa-spinner"></i>&nbsp On Progress</small>
    @break
  @case(3)
    <small class="badge bg-info"><i class="fas fa-check"></i>&nbsp Pengujian Done</small>
    @break
  @case(4)
    <small class="badge bg-purple"><i class="fas fa-binoculars"></i>&nbsp Monitoring</small>
    @break
  @case(5)
    <small class="badge bg-black"><i class="fas fa-check-double"></i>&nbsp Project Done</small>
    @break
  @case(6)
    <small class="bade bg-orange"><i class="fas fa-history"></i>&nbsp Hold</small>
    @break
  @case(7)
    <small class="badge bg-danger"><i class="fas fa-times"></i>&nbsp Drop</small>
    @break
  @default
    @break
@endswitch