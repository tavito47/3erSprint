@extends('layouts.app')

@section('template_title')
    Fase
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Fase') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('fases.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Representante</th>
										<th>Semestre</th>
										<th>Documento</th>
										<th>Documento2</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fases as $fase)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $fase->nombre }}</td>
											<td>{{ $fase->representante }}</td>
											<td>{{ $fase->semestre }}</td>
											<td>{{ $fase->documento }}</td>
											<td>{{ $fase->documento2 }}</td>

                                            <td>
                                                <form action="{{ route('fases.destroy',$fase->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('fases.show',$fase->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('fases.edit',$fase->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $fases->links() !!}
            </div>
        </div>
    </div>
@endsection
