<div class="card">
    <div class="card-header">
        <h4 class="card-title">Table Striped</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-responsive-sm">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Slug</th>
                        <th>Cor</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($tags as $tag)
                        <tr>
                            <th class="sorting_1">{{ $loop->iteration }}</th>
                            <td><a href="{{ route('dashboard.tags.show', ['tag' => $tag->id]) }}">{{ $tag->name }}</a></td>
                            <td>{{ $tag->slug }}</td>
                            <td>{{ $tag->color }}</td>
                            <td>
                                <div class="dropdown ml-auto">
                                    <div class="btn-link" data-toggle="dropdown" aria-expanded="false">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(-96px, 25px, 0px); top: 0px; left: 0px; will-change: transform;">
                                        <a class="dropdown-item text-black" href="{{ route('dashboard.tags.show', ['tag' => $tag->id]) }}">Ver</a>
                                        <a class="dropdown-item text-black" href="{{ route('dashboard.tags.edit', ['tag' => $tag->id]) }}">Editar</a>
                                        <a class="dropdown-item text-black" href="javascript:void(0);">Deletar</a>
                                    </div>
                                </div>
                            </td>                        
                        </tr>
                    @empty
                        <tr><th colspan="5"><p class="text-center">No tags</p></th></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>