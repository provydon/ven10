<div class="row">

    <div class="col-md-12 mb-4 table-responsive">
        <table class="table table-bordered">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Country</th>
                <th scope="col">Car Model</th>
                <th scope="col">Car Model Year</th>
                <th scope="col">Car Color</th>
                <th scope="col">Gender</th>
                <th scope="col">Job Title</th>
                <th scope="col">Bio</th>
              </tr>
            </thead>
            <tbody class="list-group-scroll">
                @foreach ($car_owners as $owner)
                    <tr>
                        <th scope="row">{{$owner->id}}</th>
                        <td>{{$owner->first_name}}</td>
                        <td>{{$owner->last_name}}</td>
                        <td>{{$owner->country}}</td>
                        <td>{{$owner->car_model}}</td>
                        <td>{{$owner->car_model_year}}</td>
                        <td>{{$owner->car_color}}</td>
                        <td>{{$owner->gender}}</td>
                        <td>{{$owner->job_title}}</td>
                        <td>{{$owner->bio}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
