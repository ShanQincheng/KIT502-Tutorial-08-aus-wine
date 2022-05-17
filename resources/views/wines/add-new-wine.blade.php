<!-- Modal for Registration -->
<form action="{{ url('/wines') }}" method="POST">
    @csrf
    <div class="modal fade" id="addNewWineModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registrationFormLabel">Add a new wine</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="name-add-new-wine" class="mb-1">Wine Name</label>
                    <input id="name-add-new-wine" name="name-add-new-wine" type="text" class="col-sm-12 form-control" required>

                    <label for="type-add-new-wine" class="col-sm-5 col-form-label">Type of Wine</label>
                    <select id="type-add-new-wine" name="type-add-new-wine" class="col-sm-12 form-select" aria-label="Default select example">
                        <option selected>Select the wine type</option>
                        <option value="Red Wine">Red Wine</option>
                        <option value="White Wine">White Wine</option>
                        <option value="Sparkling">Sparkling</option>
                    </select>

                    <label for="qty-add-new-wine" class="col-sm-2 col-form-label">Quantity</label>
                    <input id="qty-add-new-wine" name="qty-add-new-wine" type="text" class="col-sm-12 form-control" required>

                    <label for="price-add-new-wine" class="col-sm-2 col-form-label">Price</label>
                    <input id="price-add-new-wine" name="price-add-new-wine" type="text" class="col-sm-12 form-control" required>

                    <label for="region-add-new-wine" class="col-sm-5 col-form-label">Region of wine</label>
                    <select id="region-add-new-wine" name="region-add-new-wine" class="col-sm-12 form-select" aria-label="Default select example">
                        <option selected>Select the region of wine</option>
                        <option value="SA">SA</option>
                        <option value="TAS">TAS</option>
                        <option value="NSW">NSW</option>
                        <option value="VIC">VIC</option>
                        <option value="NSW">NSW</option>
                        <option value="QLD">QLD</option>
                        <option value="WA">WA</option>
                        <option value="ACT">ACT</option>
                        <option value="JBT">JBT</option>
                        <option value="NT">NT</option>
                    </select>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </div>
        </div>
    </div>
</form>