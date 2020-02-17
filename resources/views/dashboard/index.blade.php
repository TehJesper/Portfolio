@extends('layout')
@section('content')

    <main class="page projects-page">
        <section class="portfolio-block projects-cards">
            <div class="container">
                <div class="heading">
                    <h2></h2>
                </div>

                <table class="table table-border">
                    <tr>
                        <td>
                            <a href="/dashboard/createcourse">
                                <i class="ion-plus ion-lg"></i>
                            </a>
                        </td>
                    </tr>
                    <tr style="font-size: 1.5em">
                        <th>cursus</th>
                        <th>ec</th>
                        <th>naam</th>
                        <th>weging</th>
                        <th>resultaat</th>
                    </tr>

                @foreach($courses as $course)
{{--                        <br>{{ App\Course::find($course->id) }}<br>--}}
{{--                    {{ $count = \App\Assignment::where('course_id','=', $course->id)->count() + 1 }}--}}
                        <tr>
                            <td class="table-dark"{{--rowspan="{{ $count = \App\Assignment::where('course_id','=', $course->id)->count() + 1 }}"--}}>{{$course->name}}</td>
                            <td class="table-dark"{{--rowspan="{{ $count = \App\Assignment::where('course_id','=', $course->id)->count() + 1 }}"--}}>{{$course->ecs}}</td>
                            <td class="table-dark"></td>
                            <td class="table-dark"></td>
                            <td class="table-dark"></td>
                            <td class="table-dark"></td>
                            <td class="table-dark">
                                <a href="/dashboard/{{$course->id}}/edit"  style="display: block; text-decoration: none;">
                                    <i class="icon ion-android-create text-danger"></i>
                                </a>
                            </td>
                            <td class="table-dark">
                                <a onclick="return confirm('Are you sure?')" href="/dashboard/{{ $course->id }}/destroy" style="display: block; text-decoration: none;">
                                    <i class="icon ion-android-close text-danger"></i>
                                </a>
                            </td>
                        </tr>
{{--                        {{ $course->assignments }}<br>--}}
                    @foreach($course->assignments as $grade)
                            {{--                                {{ (App\Course::find($course->id)->assignments) }}--}}
{{--                        {{$grade->name}}--}}
                        <tr>
                            <td></td>
                            <td></td>
                            <td>{{$grade->name}}</td>
                            <td>{{$grade->weight}}%</td>
                            <td>{{$grade->grade}}</td>
                            <td>
                                <a href="/dashboard/createassignment" style="display: block; text-decoration: none;">
                                    <i class="icon ion-plus"></i>
                                </a>
                            </td>  <td>
                                <a href="/dashboard/{{$course->id}}/edit" style="display: block; text-decoration: none;">
                                    <i class="icon ion-android-create"></i>
                                </a>
                            </td>
                            <td>
                                <a onclick="return confirm('Are you sure?')" href="/dashboard/{{ $course->id }}/destroy" style="display: block; text-decoration: none;">
                                    <i class="icon ion-android-close"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    @endforeach
                </table>
            </div>
        </section>
    </main>
@endsection
