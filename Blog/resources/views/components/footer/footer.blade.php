<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <span class="text-muted">Muted text.</span>
        <div class="row">
            <div class="col-md-6 footer-menu">footer-menu</div>
            <div class="col-md-6 contact-info">
                {{ !empty($footer->email) ? $footer->email : "test@gmail.com" }}
                {{ !empty($footer->address) ? $footer->address : "test address" }}
                {{ !empty($footer->phone) ? $footer->phone : "999 999 999" }}
                {{ !empty($footer->about_us) ? $footer->about_us : "test about us" }}
            </div>
            <div class="col-md-12">
                <div class="text-center">
                    <p>Copyright {{ now()->year }}&copy;</p>
                </div>
            </div>
        </div>
    </div>
</footer>