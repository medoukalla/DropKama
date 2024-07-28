<div class="modal fade" id="editRoleModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-add-new-role">
        <div class="modal-content p-3 p-md-5">
        <button type="button" class="btn-close btn-pinned" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body">
            <div class="text-center mb-4">
            <h3 class="role-title mb-2">Modifier le rôle '{{ $role->display_name }}'</h3>
            <p class="text-muted">Définir les autorisations de rôle</p>
            </div>
            <!-- Add role form -->
            <form action="{{ route('voyager.roles.update', $role->id) }}"  method="POST" enctype="multipart/form-data" id="addRoleForm" class="row g-3" >

                <!-- CSRF TOKEN -->
                {{ csrf_field() }}

                @if (count($errors) > 0)
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            {{ $error }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                        </div>
                    @endforeach
                @endif


                <div class="form-floating">
                    <select name="roles" id="" class="form-control" >
                        @foreach ( $roles as $role )
                            <option value="{{ $role->id }}">{{ $role->display_name }}</option>
                        @endforeach
                    </select>
                    <label for="floatingInput">Sélectionnez le rôle à modifier</label>
                </div>
                
                <div class="form-floating">
                    <input type="text" class="form-control" required="" id="floatingInput" name="name" placeholder="Name" aria-describedby="floatingInputHelp" value="">
                    <label for="floatingInput">Nom de rôle</label>
                </div>

                <div class="form-floating">
                    <input type="text" class="form-control" required="" id="floatingInput" name="display_name" placeholder="Display Name" aria-describedby="floatingInputHelp" value="">
                    <label for="floatingInput">Afficher un nom</label>
                </div>

                
                <div class="col-12 ">
                    <h5>Role Permissions</h5>
                    <!-- Permission table -->
                    <div class="table-responsive">
                    <table class="table table-flush-spacing">
                        <tbody>
                            @foreach(Voyager::model('Permission')->all()->groupBy('table_name') as $table => $permission)
                                <tr>
                                    <td class="text-nowrap fw-medium">{{\Illuminate\Support\Str::title(str_replace('_',' ', $table))}}</td>
                                    <td>
                                        <div class="d-flex">
                                            @foreach($permission as $perm)
                                                <div class="form-check me-3 me-lg-2">
                                                    <input class="form-check-input" type="checkbox"  id="permission-{{$perm->id}}" name="permissions[{{$perm->id}}]" value="{{$perm->id}}"  />
                                                    <label class="form-check-label" for="permission-{{$perm->id}}" >
                                                        {{\Illuminate\Support\Str::title(str_replace('_', ' ', $perm->key))}}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        
                        </tbody>
                    </table>
                    </div>
                    <!-- Permission table -->
                </div>
                <div class="col-12 text-center mt-4">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                    <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                </div>
            </form>
            <!--/ Add role form -->
        </div>
        </div>
    </div>
</div>