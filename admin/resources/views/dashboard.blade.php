@extends('layouts.main')
@section('content')
  <section class="section section-stats center">
    <div class="row">
      <div class="col s12 m6 l3">
        <div class="card-panel blue darken-2 white-text center">
          <h5>Monthly Visitor</h5>
          <h3 class="count-animation">18000</h3>
          <div class="progress gray lighten-1">
            <div class="diratminate white" style="width: 40%"></div>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l3">
        <div class="card-panel white darken-2 black-text center">
          <h5>ALL Products</h5>
          <h3 class="count-animation">18000</h3>
          <div class="progress gray lighten-1">
            <div class="diratminate white" style="width: 40%"></div>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l3">
        <div class="card-panel blue darken-2 white-text center">
          <h5>Register Users</h5>
          <h3 class="count-animation">18000</h3>
          <div class="progress gray lighten-1">
            <div class="diratminate white" style="width: 40%"></div>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l3">
        <div class="card-panel white darken-2 black-text center">
          <h5>Orders</h5>
          <h3 class="count-animation">18000</h3>
          <div class="progress gray lighten-1">
            <div class="diratminate white" style="width: 40%"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section section-users blue lighten-4">
    <div class="row">
      <div class="col s12 m6 l8">
        <div class="card-panel">
          <h5 class="card-title">New Products</h5>
          <table class="striped">
            <thead>
              <tr>
                <th>Name</th>
                <th>Item Name</th>
                <th>Item Price</th>
                <th>Details</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>Alvin</td>
                <td>Eclair</td>
                <td>$0.87</td>
                <td>
                  <button class="btn waves-effect waves-light">Details</button>
                </td>
              </tr>
              <tr>
                <td>Alan</td>
                <td>Jellybean</td>
                <td>$3.76</td>
                <td>
                  <button class="btn waves-effect waves-light">Details</button>
                </td>
              </tr>
              <tr>
                <td>Jonathan</td>
                <td>Lollipop</td>
                <td>$7.00</td>
                <td>
                  <button class="btn waves-effect waves-light">Details</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col s12 m6 l4">
        <div class="">
          <ul class="collection with-header">
            <li class="collection-header">
              <h5>Recent Orders</h5>
            </li>
            <li class="collection-item avatar">
              <img src="img/person1.jpg" alt="" class="circle">
              <span class="title">Jon Doe</span>
              <p class="truncate">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam, sapiente voluptatem molestiae ullam nostrum
                officiis ut enim eius ipsum, maxime repellat iste similique neque nobis inventore asperiores cumque et eveniet.</p>
            </li>
            <li class="collection-item avatar">
              <img src="img/person1.jpg" alt="" class="circle">
              <span class="title">Jon Doe</span>
              <p class="truncate">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam, sapiente voluptatem molestiae ullam nostrum
                officiis ut enim eius ipsum, maxime repellat iste similique neque nobis inventore asperiores cumque et eveniet.</p>
            </li>
            <li class="collection-item avatar">
              <img src="img/person1.jpg" alt="" class="circle">
              <span class="title">Jon Doe</span>
              <p class="truncate">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam, sapiente voluptatem molestiae ullam nostrum
                officiis ut enim eius ipsum, maxime repellat iste similique neque nobis inventore asperiores cumque et eveniet.</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
@stop
