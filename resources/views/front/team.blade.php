<x-frontend.layouts.master>
    <!-- Header Page -->
    <x-frontend.layouts.breadcrumb title="{{__('dashboard.team')}}">
    </x-frontend.layouts.breadcrumb>


    <!-- Team Page -->
    <section class="sales-team">
        <div class="container">
            <div class="row">
                @foreach ($teams as $team)
                <?php
                    $fullname = explode(' ',$team->name);
                    $firstname = $fullname[0];
                    unset($fullname[0]);
                    $name = implode(" ",$fullname);
                ?>
                    <div class="col-md-6">
                        <figure><img src="{{ $team->image }}" alt="Image">
                            <figcaption>
                                <h4><span>{{$firstname}}</span> {{$name??null}}</h4>
                                <small>{{$team->job}}</small>
                                <ul>
                                    <li><a href="{{$team->linkedin}}" target="_blank"><i class="fab fa-linkedin-in"></i>LinkedIn</a></li>
                                    <li><a href="{{$team->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i>Facebook</a></li>
                                </ul>
                            </figcaption>
                        </figure>
                    </div>
                @endforeach

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

</x-frontend.layouts.master>
