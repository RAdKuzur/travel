<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <link href="{{ asset('../css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<nav class="navbar navbar-expand-md bg-dark py-3" data-bs-theme="dark">
    <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><span class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon"><svg class="bi bi-bezier" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M0 10.5A1.5 1.5 0 0 1 1.5 9h1A1.5 1.5 0 0 1 4 10.5v1A1.5 1.5 0 0 1 2.5 13h-1A1.5 1.5 0 0 1 0 11.5zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm10.5.5A1.5 1.5 0 0 1 13.5 9h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM6 4.5A1.5 1.5 0 0 1 7.5 3h1A1.5 1.5 0 0 1 10 4.5v1A1.5 1.5 0 0 1 8.5 7h-1A1.5 1.5 0 0 1 6 5.5zM7.5 4a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"></path>
                        <path d="M6 4.5H1.866a1 1 0 1 0 0 1h2.668A6.517 6.517 0 0 0 1.814 9H2.5c.123 0 .244.015.358.043a5.517 5.517 0 0 1 3.185-3.185A1.503 1.503 0 0 1 6 5.5zm3.957 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z"></path>
                    </svg></span><span>Brand</span></a><button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-5"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div id="navcol-5" class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="{{route('avia.index')}}">Авиабилеты</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Отели</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Развлечения</a></li>
            </ul><a class="btn btn-primary ms-md-2" role="button" href="#">Войти</a>
        </div>
    </div>
</nav>
<div id="offcanvas-list" class="offcanvas offcanvas-start" tabindex="-1" data-bs-backdrop="false">
    <div class="offcanvas-header"><a class="link-body-emphasis d-flex align-items-center me-md-auto mb-3 mb-md-0 text-decoration-none" href="/"><svg class="bi bi-bootstrap-fill me-3" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" style="font-size: 25px;">
                <path d="M6.375 7.125V4.658h1.78c.973 0 1.542.457 1.542 1.237 0 .802-.604 1.23-1.764 1.23zm0 3.762h1.898c1.184 0 1.81-.48 1.81-1.377 0-.885-.65-1.348-1.886-1.348H6.375v2.725z"></path>
                <path d="M4.002 0a4 4 0 0 0-4 4v8a4 4 0 0 0 4 4h8a4 4 0 0 0 4-4V4a4 4 0 0 0-4-4h-8zm1.06 12V3.545h3.399c1.587 0 2.543.809 2.543 2.11 0 .884-.65 1.675-1.483 1.816v.1c1.143.117 1.904.931 1.904 2.033 0 1.488-1.084 2.396-2.888 2.396z"></path>
            </svg><span class="fs-4">Sidebar</span></a><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="offcanvas"></button></div>
    <div class="offcanvas-body d-flex flex-column justify-content-between p-0">
        <div>
            <hr class="my-0" />
            <div class="list-group list-group-flush border-bottom scrollarea"><a class="list-group-item list-group-item-action active py-3 lh-tight" href="#" aria-current="true">
                    <div class="d-flex justify-content-between align-items-center w-100"><strong class="mb-1">List group item heading</strong><small>Wed</small></div>
                    <div class="col-10 mb-1 small"><span>Some placeholder content in a paragraph below the heading and date.</span></div>
                </a><a class="list-group-item list-group-item-action py-3 lh-tight" href="#">
                    <div class="d-flex justify-content-between align-items-center w-100"><strong class="mb-1">List group item heading</strong><small class="text-muted">Tues</small></div>
                    <div class="col-10 mb-1 small"><span>Some placeholder content in a paragraph below the heading and date.</span></div>
                </a><a class="list-group-item list-group-item-action py-3 lh-tight" href="#">
                    <div class="d-flex justify-content-between align-items-center w-100"><strong class="mb-1">List group item heading</strong><small class="text-muted">Mon</small></div>
                    <div class="col-10 mb-1 small"><span>Some placeholder content in a paragraph below the heading and date.</span></div>
                </a><a class="list-group-item list-group-item-action py-3 lh-tight" href="#" aria-current="true">
                    <div class="d-flex justify-content-between align-items-center w-100"><strong class="mb-1">List group item heading</strong><small class="text-muted">Wed</small></div>
                    <div class="col-10 mb-1 small"><span>Some placeholder content in a paragraph below the heading and date.</span></div>
                </a><a class="list-group-item list-group-item-action py-3 lh-tight" href="#">
                    <div class="d-flex justify-content-between align-items-center w-100"><strong class="mb-1">List group item heading</strong><small class="text-muted">Tues</small></div>
                    <div class="col-10 mb-1 small"><span>Some placeholder content in a paragraph below the heading and date.</span></div>
                </a><a class="list-group-item list-group-item-action py-3 lh-tight" href="#">
                    <div class="d-flex justify-content-between align-items-center w-100"><strong class="mb-1">List group item heading</strong><small class="text-muted">Mon</small></div>
                    <div class="col-10 mb-1 small"><span>Some placeholder content in a paragraph below the heading and date.</span></div>
                </a><a class="list-group-item list-group-item-action py-3 lh-tight" href="#" aria-current="true">
                    <div class="d-flex justify-content-between align-items-center w-100"><strong class="mb-1">List group item heading</strong><small class="text-muted">Wed</small></div>
                    <div class="col-10 mb-1 small"><span>Some placeholder content in a paragraph below the heading and date.</span></div>
                </a><a class="list-group-item list-group-item-action py-3 lh-tight" href="#">
                    <div class="d-flex justify-content-between align-items-center w-100"><strong class="mb-1">List group item heading</strong><small class="text-muted">Tues</small></div>
                    <div class="col-10 mb-1 small"><span>Some placeholder content in a paragraph below the heading and date.</span></div>
                </a><a class="list-group-item list-group-item-action py-3 lh-tight" href="#">
                    <div class="d-flex justify-content-between align-items-center w-100"><strong class="mb-1">List group item heading</strong><small class="text-muted">Mon</small></div>
                    <div class="col-10 mb-1 small"><span>Some placeholder content in a paragraph below the heading and date.</span></div>
                </a><a class="list-group-item list-group-item-action py-3 lh-tight" href="#" aria-current="true">
                    <div class="d-flex justify-content-between align-items-center w-100"><strong class="mb-1">List group item heading</strong><small class="text-muted">Wed</small></div>
                    <div class="col-10 mb-1 small"><span>Some placeholder content in a paragraph below the heading and date.</span></div>
                </a><a class="list-group-item list-group-item-action py-3 lh-tight" href="#">
                    <div class="d-flex justify-content-between align-items-center w-100"><strong class="mb-1">List group item heading</strong><small class="text-muted">Tues</small></div>
                    <div class="col-10 mb-1 small"><span>Some placeholder content in a paragraph below the heading and date.</span></div>
                </a><a class="list-group-item list-group-item-action py-3 lh-tight" href="#">
                    <div class="d-flex justify-content-between align-items-center w-100"><strong class="mb-1">List group item heading</strong><small class="text-muted">Mon</small></div>
                    <div class="col-10 mb-1 small"><span>Some placeholder content in a paragraph below the heading and date.</span></div>
                </a></div>
        </div>
    </div>
</div>
<div id="offcanvas-menu" class="offcanvas offcanvas-start bg-body" tabindex="-1" data-bs-backdrop="false">
    <div class="offcanvas-header"><a class="link-body-emphasis d-flex align-items-center me-md-auto mb-3 mb-md-0 text-decoration-none" href="/"><svg class="bi bi-bootstrap-fill me-3" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" style="font-size: 25px;">
                <path d="M6.375 7.125V4.658h1.78c.973 0 1.542.457 1.542 1.237 0 .802-.604 1.23-1.764 1.23zm0 3.762h1.898c1.184 0 1.81-.48 1.81-1.377 0-.885-.65-1.348-1.886-1.348H6.375v2.725z"></path>
                <path d="M4.002 0a4 4 0 0 0-4 4v8a4 4 0 0 0 4 4h8a4 4 0 0 0 4-4V4a4 4 0 0 0-4-4h-8zm1.06 12V3.545h3.399c1.587 0 2.543.809 2.543 2.11 0 .884-.65 1.675-1.483 1.816v.1c1.143.117 1.904.931 1.904 2.033 0 1.488-1.084 2.396-2.888 2.396z"></path>
            </svg><span class="fs-4">Sidebar</span></a><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="offcanvas"></button></div>
    <div class="offcanvas-body d-flex flex-column justify-content-between pt-0">
        <div>
            <hr class="mt-0" />
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item"><a class="nav-link active link-light" href="#" aria-current="page"><svg class="bi bi-house-door me-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z"></path>
                        </svg> Home </a></li>
                <li class="nav-item"><a class="nav-link link-body-emphasis" href="#"><svg class="bi bi-speedometer2 me-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4M3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"></path>
                            <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10m8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3"></path>
                        </svg> Dashboard </a></li>
                <li class="nav-item"><a class="nav-link link-body-emphasis" href="#"><svg class="bi bi-calendar-plus me-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7"></path>
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"></path>
                        </svg> Orders </a></li>
                <li class="nav-item"><a class="nav-link link-body-emphasis" href="#"><svg class="bi bi-grid me-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5z"></path>
                        </svg> Products </a></li>
                <li class="nav-item"><a class="nav-link link-body-emphasis" href="#"><svg class="bi bi-people me-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"></path>
                        </svg> Customers </a></li>
            </ul>
        </div>
        <div>
            <hr />
            <div class="dropdown"><a class="dropdown-toggle link-body-emphasis d-flex align-items-center text-decoration-none" aria-expanded="false" data-bs-toggle="dropdown" role="button"><img class="rounded-circle me-2" alt width="32" height="32" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" style="object-fit: cover;" /><strong>User</strong></a>
                <div class="dropdown-menu shadow text-small" data-popper-placement="top-start"><a class="dropdown-item" href="#">New project...</a><a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="#">Profile</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Sign out</a>
                </div>
            </div>
        </div>
    </div>

</div>
<body>
@yield('content')
</body>
