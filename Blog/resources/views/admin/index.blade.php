@extends("admin-layout")

@section("content")
<h1>Admin Home page</h1>
<footer>
    <h1>Footer</h1>
    <form method="POST" action="/admin/footer/edit">
        @csrf
        <!-- Email Input -->
        <div class="mb-3">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
        </div>

        <!-- Address Input -->
        <div class="mb-3">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" name="address" class="form-control" id="address" placeholder="Enter your address">
        </div>

        <!-- Phone Number Input -->
        <div class="mb-3">
            <label for="inputPhoneNumber" class="form-label">Phone Number</label>
            <input type="tel" name="phone" class="form-control" id="phone" placeholder="Enter your phone number">
        </div>

        <!-- About Us Textarea -->
        <div class="mb-3">
            <label for="inputAboutUs" class="form-label">About Us</label>
            <textarea name="about_us" class="form-control" id="about_us" rows="3" placeholder="Tell us about yourself"></textarea>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</footer>

@endsection
