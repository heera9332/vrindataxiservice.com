@extends('admin.layouts.master')

@section('content')

<div class="content-wrapper">
        @if(session('success'))
    <div class="alert alert-success flash-msg">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger flash-msg">
        {{ session('error') }}
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger flash-msg">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add New Car</h1>
                </div>

                <div class="col-sm-6 text-right">
                    <a href="{{ route('cars.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Back
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">

            <div class="card card-primary">
                
                <div class="card-header">
                    <h3 class="card-title">Car Details</h3>
                </div>

                <form action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">

                        <div class="row">

                            <!-- Car Name -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Car Name</label>
                                    <input type="text"
                                           name="car_name"
                                           class="form-control"
                                           placeholder="Enter Car Name"
                                           value="{{ old('car_name') }}">
                                </div>
                            </div>

                            <!-- Car Image -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Car Image <span class="text-danger">*</span></label>
                                    <div class="custom-file">
                                        <input type="file"
                                               name="car_image"
                                               class="custom-file-input"
                                               id="carImage"
                                               accept="image/*"
                                               onchange="previewCarImage(event)"
                                               required>
                                        <label class="custom-file-label" for="carImage" id="carImageLabel">
                                            Choose file
                                        </label>
                                    </div>
                                    <div class="mt-2" id="imagePreviewContainer" style="display:none;">
                                        <img id="imagePreview" src="#" alt="Preview" style="max-height: 100px; border-radius: 4px;" class="img-thumbnail">
                                    </div>
                                </div>
                            </div>

                            <!-- Passengers -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Seating Capacity</label>
                                    <input type="number"
                                           name="passengers"
                                           class="form-control"
                                           placeholder="Passengers"
                                           value="{{ old('passengers') }}">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Car Model</label>
                                    <input type="text"
                                           name="car_model"
                                           class="form-control"
                                           placeholder="Enter car model"
                                           value="{{ old('car_model') }}">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Transmission Type</label>
                                    <select name="transmission_type" class="form-control" required>
                                        <option value="">-- Select Transmission Type --</option>
                                        <option value="manual" {{ old('transmission_type') == 'manual' ? 'selected' : '' }}>Manual</option>
                                        <option value="automatic" {{ old('transmission_type') == 'automatic' ? 'selected' : '' }}>Automatic</option>
                                        <option value="semi_automatic" {{ old('transmission_type') == 'semi_automatic' ? 'selected' : '' }}>Semi Automatic</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Bags -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Bags</label>
                                    <input type="number"
                                           name="bags"
                                           class="form-control"
                                           placeholder="Bags"
                                           value="{{ old('bags') }}">
                                </div>
                            </div>

                            <!-- AC Type -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>AC Type</label>
                                    <input type="text"
                                           name="ac_type"
                                           class="form-control"
                                           placeholder="AC / Non AC"
                                           value="{{ old('ac_type') }}">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Fuel Type</label>
                                    <select name="fuel_type" class="form-control" required>
                                        <option value="">-- Select Fuel Type --</option>
                                        <option value="petrol" {{ old('fuel_type') == 'petrol' ? 'selected' : '' }}>Petrol</option>
                                        <option value="diesel" {{ old('fuel_type') == 'diesel' ? 'selected' : '' }}>Diesel</option>
                                        <option value="cng" {{ old('fuel_type') == 'cng' ? 'selected' : '' }}>CNG</option>
                                        <option value="petrol_cng" {{ old('fuel_type') == 'petrol_cng' ? 'selected' : '' }}>Petrol + CNG</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Price Per KM -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Price Per KM</label>
                                    <input type="number"
                                           step="0.01"
                                           name="price_per_km"
                                           class="form-control"
                                           placeholder="Enter Price Per KM"
                                           value="{{ old('price_per_km') }}">
                                </div>
                            </div>

                            <!-- Base Fare -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Base Fare</label>
                                    <input type="number"
                                           step="0.01"
                                           name="base_fare"
                                           class="form-control"
                                           placeholder="Enter Base Fare"
                                           value="{{ old('base_fare') }}">
                                </div>
                            </div>

                            <!-- Description -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description"
                                              class="form-control"
                                              rows="4"
                                              placeholder="Enter Description">{{ old('description') }}</textarea>
                                </div>
                            </div>

                            <!-- Status -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Status</label>

                                    <select name="status" class="form-control">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Featured -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Featured Car</label>

                                    <select name="is_featured" class="form-control">
                                        <option value="1">Yes</option>
                                        <option value="0" selected>No</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Save Car
                        </button>

                        <a href="{{ route('cars.index') }}" class="btn btn-default">
                            Cancel
                        </a>
                    </div>

                </form>

            </div>

        </div>
    </section>

</div>

@endsection

@section('scripts')
<script>
    function previewCarImage(event) {
        const input = event.target;
        if (input.files && input.files[0]) {
            const fileName = input.files[0].name;
            const label = document.getElementById('carImageLabel');
            if (label) label.innerText = fileName;

            const reader = new FileReader();
            reader.onload = function(e) {
                const preview = document.getElementById('imagePreview');
                const container = document.getElementById('imagePreviewContainer');
                if (preview && container) {
                    preview.src = e.target.result;
                    container.style.display = 'block';
                }
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    setTimeout(function () {
        let alerts = document.querySelectorAll('.flash-msg');

        alerts.forEach(function (alert) {
            alert.style.transition = "0.5s";
            alert.style.opacity = "0";

            setTimeout(() => {
                alert.style.display = "none";
            }, 500);
        });

    }, 4000); // 4 seconds
</script>
@endsection