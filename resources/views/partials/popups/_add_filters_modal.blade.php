<div class="modal modal-compact modal-success scrollbar-thin" id="addNewFilter" data-simplebar>

    <div class="modal__overlay" data-dismiss="modal"></div>
    <div class="modal__wrap">
        <div class="modal__window">
            <div class="modal__content">
               
                
                <add-filter></add-filter>
                
                {{--    <form action="">
                    <div class="modal__body">
                        <h4 class="modal-success__title">Add New Filter</h4><br>
                        <div class="modal__container">

                            <input class="input" type="text" value="" placeholder="Enter Filter Name" required="">
                            <div class="text-left mt-1 mb-1">
                                <label for="">Select Entities</label>
                                <select class="input js-input-select input--fluid" multiple="multiple"
                                    data-placeholder="">
                                    <option value="1" selected="selected">Smartwatch</option>
                                    <option value="2" selected="selected">Apple</option>
                                    <option value="3">MacBook</option>
                                    <option value="4" selected="selected">Apple Watch</option>
                                    <option value="5">AirPods</option>
                                    <option value="6">iPhone</option>
                                    <option value="7">IPad</option>
                                </select>
                            </div>
                            <div class="text-left mt-1 mb-1">
                                <label for="">Select/Add Filter Attribute</label>
                                <select class="input js-input-tags" multiple="multiple" data-placeholder="">
                                    <option value="1" selected="selected">Smartwatch</option>
                                    <option value="2" selected="selected">Apple</option>
                                    <option value="3">MacBook</option>
                                    <option value="4" selected="selected">Apple Watch</option>
                                    <option value="5">AirPods</option>
                                    <option value="6">iPhone</option>
                                    <option value="7">IPad</option>
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="modal-compact__buttons">
                        <div class="modal-compact__button-item">
                            <button class="modal-compact__button button" type="submit"><span class="button__text">Add New
                                    Filter</span>
                            </button>
                        </div>
                        <div class="modal-compact__button-item">
                            <button class="modal-compact__button button" data-dismiss="modal"><span
                                    class="button__text">Close</span>
                            </button>
                        </div>
                    </div>
                </form> --}}
            </div>
        </div>
    </div>

</div>
@section('css')
<style>
    .modal-success .modal__wrap {
        max-width: 500px;
    }
</style>
@endsection