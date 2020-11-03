<div>
    <section style="padding-top: 60px">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{session('message')}}
                    </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h3>Upload Images</h3>
                        </div>
                        <div class="card-body">
                            <form wire:submit.prevent="uploadImages" id="upload-images" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="images">Choose Images</label>
                                    <input type="file" class="form-control" name="images" wire:model="images" multiple>
                                </div>
                                <button type="submit" class="btn btn-success float-right">Upload</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>