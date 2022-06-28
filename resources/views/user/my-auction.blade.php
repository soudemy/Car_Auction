@extends('user.layout.layout')


@section('title')
My Auction
@endsection

@section('css')

@endsection



@section('main')

    <a href="{{route('user.add-auction')}}" class="button green right">Add Auction</a>

    <div class="utf_dashboard_list_box table-responsive recent_booking">
        <h4>Auction List</h4>
        <div class="dashboard-list-box table-responsive invoices with-icons">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Marker</th>
                    <th>Model</th>
                    <th>Year</th>
                    <th>Country</th>
                    <th>City</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($ads as $ad)
                    @if($ad != null)

                        <tr>
                            <td>{{$loop->iteration}}</td>
                            @if($ad->images()->where('main',1)->first() != null)
                                <td><img width="120px" height="70" src="{{asset($ad->images()->where('main',1)->first()->image  ?? null)}}" alt=""></td>
                            @else
                                <td><img width="120px" height="70" src="{{asset($ad->images()->first()->image ?? null)}}" alt=""></td>
                            @endif
                            <td>{{$ad->maker->title}}</td>
                            <td>{{$ad->model->title}}</td>
                            <td>{{$ad->year}}</td>
                            <td>{{$ad->country->title}}</td>
                            <td>{{$ad->city->title}}</td>
                            <td>{{$ad->user->username}}</td>
                            <td>{{$ad->user->email}}</td>
                            <td>
                                <a href="{{route('user.edit-auction',$ad->id)}}" class="button yellow ">Edit</a>
                                <form style="display: inline-block;"
                                      onsubmit="return confirm('Are you sure you want to delete this ad?');"
                                      action="{{route('user.delete-auction',$ad->id)}}">
                                    <button class="btn btn-danger">Delete</button>
                                </form>

                            </td>

                        </tr>
                    @endif
                @endforeach
                </tbody>
                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('script')

@endsection



