@extends('frontend.layout.main')

@section('content')

<section class="event-section">
    <div class="container-fluid flex-row d-flex">
        <div class="offcanvas myoffcanvas" style="position: relative;" data-bs-scroll="true"
            data-bs-backdrop="false" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Filter</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="pt-3">
                    <h6>Tanggal Pelaksanaan</h6>
                    <ul>
                        <li>
                            <label for="">From</label>
                            <input type="date" class="form-control" name="fromdate" id="">
                        </li>
                        <li>
                            <label for="">To</label>
                            <input type="date" class="form-control" name="todate" id="">
                        </li>
                    </ul>
                </div>
                <div class="pt-3">
                    <h6>Status</h6>
                    <ul>
                        <li>
                            <input type="checkbox" class="form-check-input" checked name="" id="">
                            <label for="" class="form-check-label">Berlangsung</label>
                        </li>
                        <li>
                            <input type="checkbox" class="form-check-input" name="" id="">
                            <label for="" class="form-check-label">Selesai</label>
                        </li>
                    </ul>
                </div>
                <div class="pt-3">
                    <h6>Partispasi</h6>
                    <ul>
                        <li>
                            <input type="checkbox" class="form-check-input" checked name="" id="">
                            <label for="" class="form-check-label">Join</label>
                        </li>
                        <li>
                            <input type="checkbox" class="form-check-input" checked name="" id="">
                            <label for="" class="form-check-label">Not Join</label>
                        </li>
                    </ul>
                </div>
                <div class="">
                    <button type="button" class="btn btn-primary">Terapkan</button>
                    <button type="button" class="btn btn-danger">Batalkan</button>
                </div>
            </div>
        </div>
        <div class="container">
            <button class="btn btn-sm btn-outline-success" style="max-height: 2rem;" type="button"
                data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
                aria-controls="offcanvasScrolling">Filter</button>
            <div class="row pt-1">
                <div class="col-sm-4 pb-2">
                    <div class="card backgr card-event">
                        <div class="card-body">
                            <img src="{{ asset('frontend/aset/dummy/example.jpg') }}" class="card-img-top" alt="...">
                            <h5 class="card-title">Special title treatment</h5>
                            <ul>
                                <li>
                                    <img src="{{ asset('frontend/aset/locate-event.svg') }}" width="20px" alt=""> Random
                                </li>
                                <li>
                                    <img src="{{ asset('frontend/aset/Time-event.svg') }}" width="20px" alt=""> 30 Agustus 2012
                                </li>
                            </ul>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content. Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, facere?
                            </p>
                            <div class="d-flex justify-content-between">
                                <a href="#" class="btn btn-sm btn-outline-danger"
                                    style="max-height: 2rem;">Unjoin</a>
                                <div class="">
                                    <img src="{{ asset('frontend/aset/joins-event.png') }}" width="30px" alt="">
                                    <small>123 Orang</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 pb-2">
                    <div class="card backgr card-event">
                        <div class="card-body">
                            <img src="{{ asset('frontend/aset/dummy/exapml.jpg') }}" class="card-img-top" alt="...">
                            <h5 class="card-title">Special title treatment</h5>
                            <ul>
                                <li>
                                    <img src="{{ asset('frontend/aset/locate-event.svg') }}" width="20px" alt=""> Random
                                </li>
                                <li>
                                    <img src="{{ asset('frontend/aset/Time-event.svg') }}" width="20px" alt=""> 30 Agustus 2012
                                </li>
                            </ul>
                            <p class="card-text">With supporting text below as a natural lead-in to additional Lorem
                                ipsum dolor, sit amet consectetur adipisicing elit. Molestiae, molestias!
                                content.
                            </p>
                            <div class="d-flex justify-content-between">
                                <a href="#" class="btn btn-sm btn-outline-success"
                                    style="max-height: 2rem;">Join</a>
                                <div class="">
                                    <img src="{{ asset('frontend/aset/joins-event.png') }}" width="30px" alt="">
                                    <small>123 Orang</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 pb-2">
                    <div class="card backgr card-event">
                        <div class="card-body">
                            <img src="{{ asset('frontend/aset/dummy/example.jpg') }}" class="card-img-top" alt="...">
                            <h5 class="card-title">Special title treatment</h5>
                            <ul>
                                <li>
                                    <img src="{{ asset('frontend/aset/locate-event.svg') }}" width="20px" alt=""> Random
                                </li>
                                <li>
                                    <img src="{{ asset('frontend/aset/Time-event.svg') }}" width="20px" alt=""> 30 Agustus 2012
                                </li>
                            </ul>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content. Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, facere?
                            </p>
                            <div class="d-flex justify-content-between">
                                <a href="#" class="btn btn-sm btn-outline-danger"
                                    style="max-height: 2rem;">Unjoin</a>
                                <div class="">
                                    <img src="{{ asset('frontend/aset/joins-event.png') }}" width="30px" alt="">
                                    <small>123 Orang</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 pb-2">
                    <div class="card backgr card-event">
                        <div class="card-body">
                            <img src="{{ asset('frontend/aset/dummy/exapml.jpg') }}" class="card-img-top" alt="...">
                            <h5 class="card-title">Special title treatment</h5>
                            <ul>
                                <li>
                                    <img src="{{ asset('frontend/aset/locate-event.svg') }}" width="20px" alt=""> Random
                                </li>
                                <li>
                                    <img src="{{ asset('frontend/aset/Time-event.svg') }}" width="20px" alt=""> 30 Agustus 2012
                                </li>
                            </ul>
                            <p class="card-text">With supporting text below as a natural lead-in to additional Lorem
                                ipsum dolor, sit amet consectetur adipisicing elit. Molestiae, molestias!
                                content.
                            </p>
                            <div class="d-flex justify-content-between">
                                <a href="#" class="btn btn-sm btn-outline-success"
                                    style="max-height: 2rem;">Join</a>
                                <div class="">
                                    <img src="{{ asset('frontend/aset/joins-event.png') }}" width="30px" alt="">
                                    <small>123 Orang</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 pb-2">
                    <div class="card backgr card-event">
                        <div class="card-body">
                            <img src="{{ asset('frontend/aset/dummy/example.jpg') }}" class="card-img-top" alt="...">
                            <h5 class="card-title">Special title treatment</h5>
                            <ul>
                                <li>
                                    <img src="{{ asset('frontend/aset/locate-event.svg') }}" width="20px" alt=""> Random
                                </li>
                                <li>
                                    <img src="{{ asset('frontend/aset/Time-event.svg') }}" width="20px" alt=""> 30 Agustus 2012
                                </li>
                            </ul>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content. Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, facere?
                            </p>
                            <div class="d-flex justify-content-between">
                                <a href="#" class="btn btn-sm btn-outline-danger"
                                    style="max-height: 2rem;">Unjoin</a>
                                <div class="">
                                    <img src="{{ asset('frontend/aset/joins-event.png') }}" width="30px" alt="">
                                    <small>123 Orang</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 pb-2">
                    <div class="card backgr card-event">
                        <div class="card-body">
                            <img src="{{ asset('frontend/aset/dummy/exapml.jpg') }}" class="card-img-top" alt="...">
                            <h5 class="card-title">Special title treatment</h5>
                            <ul>
                                <li>
                                    <img src="{{ asset('frontend/aset/locate-event.svg') }}" width="20px" alt=""> Random
                                </li>
                                <li>
                                    <img src="{{ asset('frontend/aset/Time-event.svg') }}" width="20px" alt=""> 30 Agustus 2012
                                </li>
                            </ul>
                            <p class="card-text">With supporting text below as a natural lead-in to additional Lorem
                                ipsum dolor, sit amet consectetur adipisicing elit. Molestiae, molestias!
                                content.
                            </p>
                            <div class="d-flex justify-content-between">
                                <a href="#" class="btn btn-sm btn-outline-success"
                                    style="max-height: 2rem;">Join</a>
                                <div class="">
                                    <img src="{{ asset('frontend/aset/joins-event.png') }}" width="30px" alt="">
                                    <small>123 Orang</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- pageinasi -->
            <div class="">
                <nav aria-label="Page navigation example">
                    <ul class="pagination flex-row justify-content-center">
                      <li class="page-item disabled">
                        <a class="page-link">Previous</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                      </li>
                    </ul>
                  </nav>
            </div>
        </div>
    </div>

</section>
@endsection