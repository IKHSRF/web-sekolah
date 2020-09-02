<footer class="footer">
    <div class="footer_background" style="background-image:url({{asset('assets/images/footer_background.png')}})"></div>
    <div class="container">
        <div class="row footer_row">
            <div class="col">
                <div class="footer_content">
                    <div class="row">

                        <div class="col-lg-4 footer_col">

                            <!-- Footer About -->
                            <div class="footer_section footer_about">
                                <div class="footer_logo_container">
                                    <a href="#">
                                        <div class="footer_logo_text">Wikrama<span></span></div>
                                    </a>
                                </div>
                                <div class="footer_about_text">
                                    <p>Ilmu yang Amaliah, Amal yang Ilmiah, Akhlakul Karimah.</p>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4 footer_col">

                            <!-- Footer Contact -->
                            <div class="footer_section footer_contact">
                                <div class="footer_title">Contact Us</div>
                                @foreach($kontak as $konta)
                                <div class="footer_contact_info">
                                    <ul>
                                        <li>Email: {{$konta->email}}</li>
                                        <li>Phone: {{$konta->hotline}}</li>
                                        <li>{{$konta->alamat}}</li>
                                    </ul>
                                </div>
                                @endforeach
                            </div>

                        </div>

                        <div class="col-lg-4 footer_col">

                            <!-- Footer links -->
                            <div class="footer_section footer_links">
                                <div class="footer_title">Contact Us</div>
                                <div class="footer_links_container">
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="#">Features</a></li>
                                        <li><a href="courses.html">Courses</a></li>
                                        <li><a href="#">Events</a></li>
                                        <li><a href="#">Gallery</a></li>
                                        <li><a href="#">FAQs</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row copyright_row">
            <div class="col">
                <div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
                    <div class="cr_text">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());

                        </script>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                    <div class="ml-lg-auto cr_links">
                        <ul class="cr_list">
                            <li><a href="#">Copyright notification</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
