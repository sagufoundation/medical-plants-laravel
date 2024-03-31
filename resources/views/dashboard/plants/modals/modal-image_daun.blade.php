<!-- Modal -->
<div class="modal fade" id="modalDaun" tabindex="-1" aria-labelledby="modalDaunLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalDaunLabel">Daun</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- form start -->
            <form action="{{ route('dashboard.plants.update_images', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                
                <div class="modal-body">
                    @if(empty($data->image_daun))
                        <img src="{{ asset('images/plants/00-single.jpg') }}" alt="Image empty" class="border shadow w-100 mb-3" id="preview-image_daun">
                    @else
                        <img src="{{ asset('images/plants/' . $data->id . '/' . $data->image_daun) }}" alt="{!! $data->image_daun !!}" class="border shadow w-100 mb-3" id="preview-image_daun">
                    @endif
                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="image_daun" accept="image/*">
                        <label class="custom-file-label" for="customFile">Select image</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary rounded-0" name="submit" value="daun">
                        <i class="fa-solid fa-save"></i> Save
                    </button>                
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    @if(!empty($data->image_daun))
                    <button type="submit" class="btn btn-outline-secondary" name="remove" value="image_daun">Remove</button>
                    @endif
                </div>
            </form> <!-- form end -->
        </div>
    </div>
</div>