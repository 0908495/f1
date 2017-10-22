@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Drivers</div>

                    <div class="panel-body">
                        Here is an overview of the all the drivers that have been on the grid this year.
                        <?php
                        foreach ($drivers as $driver) {?>
                            <tr>
                                <td> <?= $driver->name;?> </td>
                                <td> <?= $driver->age;?> </td>
                                <td> <?= $driver->country;?> </td>
                                <td> <?= $driver->team;?> </td>
                                <td> <?= $driver->number;}?></td>
                            </tr>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
