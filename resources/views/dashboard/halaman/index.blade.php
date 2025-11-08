   @extends('dashboard.layout')

   @section('konten')
      <p class="card-title">List Pendaftar</p>
      <div class="pb-3"><a href="{{ route('dashboard.halaman.create')}}"class="btn btn-primary">+ Tambah Halaman</a></div>
                  <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="col-1">No</th>
                                <th>Judul</th>
                                <th class="col-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach ($data as $item)
  <tr>
                                <td>{{ $i}}</td>
                                <td>{{ $item->judul}}</td>
                                <td>
                                    <a href='{{ route('dashboard.halaman.edit', $item->id)}}' class="btn btn-sm btn-warning">Edit</a>
                                    <form onsubmit="return confirm ('Apakah yakin anda ingin menghapus?')"
                                    action="{{ route('dashboard.halaman.destroy', $item->id)}}" class="d-inline" method="POST">
                                    @csrf
                                    @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" name='submit'>Del</button>
                                    </form>

                                </td>
                            </tr>
                                <?php $i++; ?>
                            @endforeach
                          
                        </tbody>
                    </table>

                  </div> 
   @endsection

   