<x-frontend.layouts.master>
    <!-- Header Page -->
    <x-frontend.layouts.breadcrumb title="Team">
    </x-frontend.layouts.breadcrumb>


    <!-- Team Page -->
    <section class="sales-team">
        <div class="container">
            <div class="row">
                @foreach ($teams as $team)
                <?php
                    $fullname = explode(' ',$team->name)
                ?>
                    <div class="col-md-6">
                        <figure><img src="{{ $team->image }}" alt="Image">
                            <figcaption>
                                <h4><span>{{$fullname[0]}}</span> {{$fullname[1]??null}}</h4>
                                <small>{{$team->job}}</small>
                                <ul>
                                    <li><a href="{{$team->linkedin}}" target="_blank"><i class="fab fa-linkedin-in"></i>LINKEDIN</a></li>
                                    <li><a href="{{$team->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i>FACEBOOK</a></li>
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
