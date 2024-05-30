@extends('master.layout')

@section('content')

<section id="student" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="student-mf">
            <div id="student" class="box-shadow-full">
              <div class="row">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      List of Student
                    </h5>
                  </div>

                  <button type="button" class="btn btn-primary" onclick="location.href='/add-student'">Add Student</button>

                  <div>
                    <table class="table table-striped">
                    </thead>
                    <tr>
                        <th scope="col">Matric No</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone No</th>
                      </tr>
                    <tbody>
                        @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->matric_id}}</td>
                            <td>{{ $student->first_name}}</td>
                            <td>{{ $student->last_name}}</td>
                            <td>{{ $student->email}}</td>
                            <td>{{ $student->phone_no}}</td>
                        </tr>
                        @endforeach

{{--
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Aina</td>
                            <td>Najwa</td>
                            <td>aina@gmail.com</td>
                            <td>0173651980</td>
                            <td>2212708</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>fat@gmail.com</td>
                            <td>0111234789</td>
                            <td>123456</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>Bird</td>
                            <td>twitter@gmail.com</td>
                            <td>0111234678</td>
                            <td>6977098</td>

                          </tr>
                        </tbody> --}}
                      </table>
                    </div>

                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

  </section>

@endsection
