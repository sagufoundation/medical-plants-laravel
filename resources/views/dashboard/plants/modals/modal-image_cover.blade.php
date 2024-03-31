<!-- Modal -->
<div class="modal fade" id="modalCover" tabindex="-1" aria-labelledby="modalCoverLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalCoverLabel">Cover</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- form start -->
            <form action="{{ route('dashboard.plants.update_images', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                
                <div class="modal-body">
                    @if(empty($data->image_cover))
                        <img src="{{ asset('images/plants/00-single.jpg') }}" alt="Image empty" class="border shadow w-100 mb-3" id="preview-image_cover">
                    @else
                        <img src="{{ asset('images/plants/' . $data->id . '/' . $data->image_cover) }}" alt="{!! $data->image_cover !!}" class="border shadow w-100 mb-3" id="preview-image_cover">
                    @endif
                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="image_cover" accept="image/*">
                        <label class="custom-file-label" for="customFile">Select image</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary rounded-0" name="submit" value="cover">
                        <i class="fa-solid fa-save"></i> Save
                    </button>                
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    @if(!empty($data->image_cover))
                    <button type="submit" class="btn btn-outline-secondary" name="remove" value="image_cover">Remove</button>
                    @endif
                </div>
            </form> <!-- form end -->
        </div>
    </div>
</div>

<script>
       
</script>