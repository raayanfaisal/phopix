@extends('layouts.app')

@section('content')
<section>
  <div class="container">
      <h3 class="text-center mt-5 mb-4">Choose the plan that is more suitable to you!</h3>
      <table class="table mt-5">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Plan features</th>
          <th scope="col">Basic Package</th>
          <th scope="col">Plus Package</th>
          <th scope="col">Premium package</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>No of page's</td>
          <td>2</td>
          <td>5</td>
          <td>15</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Commercial Usage</td>
          <td>yes</td>
          <td>yes</td>
          <td>yes</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>No of revisions</td>
          <td>5</td>
          <td>10</td>
          <td>15</td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td>Web site maintanance</td>
          <td>No</td>
          <td>2 months</td>
          <td>5 months</td>
        </tr>
        <tr>
          <th scope="row">5</th>
          <td>Custom logo</td>
          <td>No</td>
          <td>Yes</td>
          <td>Yes</td>
        </tr>
        <tr>
          <th scope="row">6</th>
          <td>Responsive layout</td>
          <td>Yes</td>
          <td>Yes</td>
          <td>Yes</td>
        </tr>
        <tr>
          <th scope="row">6</th>
          <td>design customization</td>
          <td>No</td>
          <td>Yes</td>
          <td>Yes</td>
        </tr>
        <tr>
          <th scope="row">6</th>
          <td>Website Updates</td>
          <td>No</td>
          <td>Yes</td>
          <td>Yes</td>
        </tr>
        <tr>
          <th scope="row">6</th>
          <td>E-Commerce Functionality</td>
          <td>No</td>
          <td>No</td>
          <td>Yes</td>
        </tr>
      </tbody>
    </table>
    <div class="text-center">
      <a href="" class="btn btn-primary btn-lg">Continue</a>
    </div>
  </div>
<section>
@endsection
