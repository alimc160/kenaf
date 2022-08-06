<div class="modal modal-compact modal-success scrollbar-thin" id="addProductSuccess" data-simplebar>
    <div class="modal__overlay" data-dismiss="modal"></div>
    <div class="modal__wrap">
        <div class="modal__window">
            <div class="modal__content">
                <div class="modal__body">
                    <div class="modal__container">

                        <form action="{{route('user.add.project')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="float-left font-weight-bold">Create Project</label>
                                <input type="text" name="title" placeholder="Enter Project title" class="form-control" value="{{old('title')}}">
                            </div>
                            <button class="button button--primary" type="submit"><span class="button__text">Add Project</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>