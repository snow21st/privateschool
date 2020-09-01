<x-backend>
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Subject Form
                <div class="btn-actions-pane-right">
                    <div role="group" class="btn-group-sm btn-group">

                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    
                                    <form action="{{route('backside.subject.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                         <div class="input-group">
                                  <div class="input-group-prepend"><span class="input-group-text" style="width: 100px">Subject</span>
                                  </div>
                                   <input type="text" class="form-control" name="name">
                                     <div class="text-danger form-control-feedback">
                                          {{$errors->first('name')}}
                                      </div>
                               </div>
                                <br>
                                            <button type="submit" class="mt-1 btn btn-primary">Save</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    </div>
                    </div>
                    </div>
</x-backend>