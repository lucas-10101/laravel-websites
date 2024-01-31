@extends('template')

@section('page-title', 'Home page')

@section('page-navbar')
    @include('components.navbar')
@endsection

@section('page-footer')
    @include('components.footer')
@endsection

@section('page-body')

    <div class="container-fluid my-5">
        <figure>
            <img src="{{ asset('assets/images/nerses-khachatryan-f-G9evV04QE-unsplash.jpg') }}" alt="Unsplash photo"
                class="img-fluid home-banner rounded-5 mx-auto d-block">
            <figcaption class="opacity-50 text-center">
                Foto de <a
                    href="https://unsplash.com/pt-br/@brookecagle?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Brooke
                    Cagle</a> na <a
                    href="https://unsplash.com/pt-br/fotografias/mulher-sentada-na-frente-da-mesa-de-madeira-marrom-NoRsyXmHGpI?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Unsplash</a>
            </figcaption>
        </figure>
    </div>
    <div class="container mx-auto my-5 row border border-primary-subtle p-2 pt-4 rounded bg-primary-subtle w-md-75 w-xl-50">
        <figure class="col-12 col-md-6 col-xl-5">
            <img src="{{ asset('assets/images/brooke-cagle-NoRsyXmHGpI-unsplash.webp') }}" class="img-fluid"
                alt="Unsplash photo">
            <figcaption class="opacity-50 text-center">
                Foto de <a
                    href="https://unsplash.com/pt-br/@brookecagle?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Brooke
                    Cagle</a> na <a
                    href="https://unsplash.com/pt-br/fotografias/mulher-sentada-na-frente-da-mesa-de-madeira-marrom-NoRsyXmHGpI?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Unsplash</a>
            </figcaption>
        </figure>
        <div class="col-12 col-md-6 col-xl-7 py-0 py-md-5">
            <p class="text-center fs-30 text-white ff-primary fw-bold">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima autem eligendi consectetur mollitia! Eius,
                inventore. Suscipit impedit similique, laudantium libero eum quibusdam inventore quo ipsam excepturi harum
                perspiciatis fugiat quisquam.
            </p>
        </div>
        <span class="my-5"></span>
        <div class="container row col-12 justify-content-around">
            <div class="card col-12 col-md-4 col-xl-3">
                <img src="{{ asset('assets/images/project-management.png') }}" class="card-img-top" alt="Flaticon image">
                <figure>
                    <figcaption class="opacity-25 text-center">
                        <a href="https://www.flaticon.com/free-icons/digital-transformation"
                            title="digital transformation icons">Digital transformation icons created by dDara -
                            Flaticon</a>
                    </figcaption>
                </figure>
                <div class="card-body text-center">
                    <h5 class="card-title">Lorem ipsum</h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    <a href="#" class="btn btn-primary mx-auto">dolor sit amet</a>
                </div>
            </div>
            <div class="card col-12 col-md-4 col-xl-3">
                <img src="{{ asset('assets/images/teamwork.png') }}" class="card-img-top" alt="Flaticon image">
                <figure>
                    <figcaption class="opacity-25 text-center">
                        <a href="https://www.flaticon.com/free-icons/teamwork" title="teamwork icons">Teamwork icons created
                            by Flat Icons - Flaticon</a>
                    </figcaption>
                </figure>
                <div class="card-body text-center">
                    <h5 class="card-title">Lorem ipsum</h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    <a href="#" class="btn btn-primary mx-auto">dolor sit amet</a>
                </div>
            </div>
            <div class="card col-12 col-md-4 col-xl-3">
                <img src="{{ asset('assets/images/time.png') }}" class="card-img-top" alt="Flaticon image">
                <figure>
                    <figcaption class="opacity-25 text-center">
                        <a href="https://www.flaticon.com/free-icons/management" title="management icons">Management icons
                            created by Freepik - Flaticon</a>
                    </figcaption>
                </figure>
                <div class="card-body text-center">
                    <h5 class="card-title">Lorem ipsum</h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    <a href="#" class="btn btn-primary mx-auto">dolor sit amet</a>
                </div>
            </div>
        </div>

        <span class="my-5"></span>
    </div>
@endsection
