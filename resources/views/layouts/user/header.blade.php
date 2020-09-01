<header class="header">
    <!-- Top Bar -->
    <div class="top_bar">
        <div class="top_bar_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                            @foreach($kontak as $konta)
                            <ul class="top_bar_contact_list">
                                <li>
                                    <div class="question">Have any questions?</div>
                                </li>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <div>{{$konta->hotline}}</div>
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    <div>{{$konta->email}}</div>
                                </li>
                            </ul>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Content -->
    <div class="header_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start">
                        <div class="logo_container">
                            <a href="#">
                                <div class="logo_text">WIKRAMA<span></span></div>
                            </a>
                        </div>
                        <nav class="main_nav_contaner ml-auto">
                            <ul class="main_nav">
                                <li class="active"><a href="#">Home</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Profil
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{route('user.profile.sejarah')}}">Sejarah</a>
                                        <a class="dropdown-item" href="{{route('user.profile.visimisi')}}">Visi, Misi dan moto</a>
										<a class="dropdown-item" href="{{route('user.profile.kemitraan')}}">Kemitraan</a>
										<a class="dropdown-item" href="{{route('user.profile.prestasi')}}">Prestasi</a>
										<a class="dropdown-item" href="{{route('user.profile.guru')}}">Guru</a>
										<a class="dropdown-item" href="{{route('user.profile.stuktur')}}">Stuktur Organisasi</a>
										<a class="dropdown-item" href="{{route('user.profile.statistik')}}">Statistik Sekolah</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Jurusan
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        @foreach($jurusan as $jurusa)
                                        <a class="dropdown-item" href="{{route('user.jurusan, $jurusa->nama_jurusan')}}">{{$jurusa->nama_jurusan}}</a>
                                        @endforeach
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Kurikulum
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{route('user.kurikulum.stuktur')}}">Stuktur Kurikulum</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Kesiswaan
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{route('user.kesiswaan.mading')}}">Mading Siswa</a>
                                    </div>
                                </li>
                                <li><a href="{{route('user.sarana')}}">Sarana dan Prasarana</a></li>
                                <li><a href="{{route('user.gallery')}}">Galery</a></li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Search Panel -->
    <div class="header_search_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_search_content d-flex flex-row align-items-center justify-content-end">
                        <form action="#" class="header_search_form">
                            <input type="search" class="search_input" placeholder="Search" required="required">
                            <button
                                class="header_search_button d-flex flex-column align-items-center justify-content-center">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
