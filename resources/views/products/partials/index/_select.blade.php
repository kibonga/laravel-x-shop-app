<div class="row">
    {{--                    <div class="col-md-6">--}}
    {{--                        <ul class="list-inline shop-top-menu pb-3 pt-1">--}}
    {{--                            <li class="list-inline-item">--}}
    {{--                                <a class="h3 text-dark text-decoration-none mr-3" href="#">All</a>--}}
    {{--                            </li>--}}
    {{--                            <li class="list-inline-item">--}}
    {{--                                <a class="h3 text-dark text-decoration-none mr-3" href="#">Men's</a>--}}
    {{--                            </li>--}}
    {{--                            <li class="list-inline-item">--}}
    {{--                                <a class="h3 text-dark text-decoration-none" href="#">Women's</a>--}}
    {{--                            </li>--}}
    {{--                        </ul>--}}
    {{--                    </div>--}}
    <div class="col-md-6 pb-4">
        <div class="d-flex">
            <select class="form-control">

                @foreach($options as $option)
                    <option value="{{$option['value']}}">{{$option['name']}}</option>
                @endforeach

            </select>
        </div>
    </div>
</div>
