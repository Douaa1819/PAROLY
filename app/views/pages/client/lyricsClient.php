<div class="button-add-student float-end me-4">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
            data-bs-whatever="@mdo">Add Lyrics</button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Lyrics</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="./traitement/addcategory.php" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="Lyrics" class="col-form-label">Lyrics:</label>
                                <input type="text" class="form-control" name="Lyrics">
                            </div>
                            <div class="mb-3">
                                <label for="imgLyrics" class="col-form-label">Image:</label>
                                <input type="file" class="form-control" name="imgLyrics">
                            </div>
                            <div class="mb-3">
                                <label for="dateLyrics" class="col-form-label">Image:</label>
                                <input type="date" class="form-control" name="dateLyrics">
                            </div>
                            <div class="mb-3">
                                <label for="StatusLyrics" class="col-form-label">Status:</label>
                                <input type="text" class="form-control" name="StatusLyrics">
                            </div>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="submit" class="btn btn-primary">Add Lyrics</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>