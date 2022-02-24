<div class="content-area">

    <!-- BREADCRUMBS -->
    <section class="page-section breadcrumbs">
        <div class="container">
            <div class="page-header">
                <h1>My profile</h1>
            </div>
            <ul class="breadcrumb"></ul>
        </div>
    </section>
    <!-- /BREADCRUMBS -->

    <!-- PAGE -->
    <section class="page-section color">
        <div class="container">
            <hr class="page-divider">
            <div class="row " style="display: flex;">
                <div class="col-md-6 " style="margin: auto">
                    <div class="thumbnail thumbnail-team no-border no-padding ">
                        <div class="media ">
                            <img class="img-circle m-auto" src="assets/img/preview/team/team-1.jpg" alt="" style="margin: auto;">
                        </div>
                        <div class="caption">
                            <h4 class="caption-title">{{ $user->name }}<small>{{ $user->email }} </small></h4>
                        </div>
                        <a type="submit" href="{{ route('profile.show') }}" class="btn btn-theme" data-loading-text="Loading..."> Edit Profile</a>

                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- /PAGE -->

</div>