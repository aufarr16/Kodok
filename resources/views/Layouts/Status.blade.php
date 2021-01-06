@switch($data->id_pstat)
  @case(1)
    <small class="label label-reserved"><i class="fa fa-hourglass-half fa-sm"></i>&nbsp Reserved</small>
    @break
  @case(2)
    <small class="label label-onprogress"><i class="fas fa-spinner fa-sm"></i>&nbsp On Progress</small>
    @break
  @case(3)
    <small class="label label-done"><i class="fa fa-check fa-sm"></i>&nbsp Pengujian Done</small>
    @break
  @case(5)
    <small class="label label-projectdone"><i class="fas fa-clipboard-check fa-sm"></i>&nbsp Project Done</small>
    @break
  @case(6)
    <small class="label label-hold"><i class="fa fa-history fa-sm"></i>&nbsp Hold</small>
    @break
  @case(7)
    <small class="label label-drop"><i class="fa fa-times fa-sm"></i>&nbsp Drop</small>
    @break
  @default
    @break
@endswitch