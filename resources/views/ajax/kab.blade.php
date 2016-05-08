<option value="">- Pilih Kabupaten -</option>
@foreach($kabs as $kab)
    <option value="{{$kab->city_id}}">{{$kab->type}} {{$kab->city_name}}</option>
@endforeach