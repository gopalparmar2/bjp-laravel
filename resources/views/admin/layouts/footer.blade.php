<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>document.write(new Date().getFullYear())</script> © {{ config('app.name') }}.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    Develop by <a href="{{ \Config::get('app.instagramUrl') }}" target="_blank"> Gopal Parmar </a>
                </div>
            </div>
        </div>
    </div>
</footer>
