    @extends('layouts.app')
 
@section('content')

<div class="row">
    <center><h2>Daftar Tamu</h2>
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-success float-right" href="{{ route('tamus.create') }}"> Create New Tamu</a>
        </div>
    </div>
    </center>
</div>

   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     <p style="margin-top:5%;" >Total Jumlah Undangan : {{ $count_tamu }}</p>
    <table class="table table-bordered" style=" width:100%; margin-top:5%;">
        <tr>
            <th>Name</th>
            <th>Kalimat Undangn</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($tamus as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td id="copyText" > <b> Halo {{ $product->name }}  </b>, aku aileen cordially inviting you to my sweet seventeen birthday party. Here’s the link for your invitation http://aileensweet17party.my.id/?inviteto={{ $product->name }}
            </td>
            <td>
                <form action="{{ route('tamus.destroy',$product->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $tamus->links() !!}
      
@endsection