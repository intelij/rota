@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Rotaschedule</div>
                    <div class="panel-body">

                        <div class="table-responsive">
                            <table class="table table-striped custab ">
                                <thead>
                                <tr>
                                    <th> Rota id</th>
                                    <th> Day #</th>
                                    <th> Staff Id</th>
                                    <th>Slot Type</th>
                                    <th>Start time</th>
                                    <th>End time</th>
                                    <th>Work hours</th>
                                    <th>Role type id</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($rotaschedule as $item)

                                    <tr>
                                        <td>{{ $item->rotaid }}</td>
                                        <td>{{ jddayofweek($item->daynumber, 1) }}</td>
                                        <td>{{ $item->staffid }}</td>
                                        <td>{{ $item->slottype }}</td>
                                        <td>{{ $item->starttime }}</td>
                                        <td>{{ $item->endtime }}</td>
                                        <td>{{ $item->workhours }}</td>
                                        <td>{{ $item->roletypeid }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $rotaschedule->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection