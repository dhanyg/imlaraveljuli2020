@extends('layouts.app')
@section('content')
<div class="row p-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Table</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>                  
                          <tr>
                            <th style="width: 10px">#</th>
                            <th>Task</th>
                            <th>Progress</th>
                            <th style="width: 40px">Label</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1.</td>
                            <td>Update software</td>
                            <td>
                              <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                              </div>
                            </td>
                            <td><span class="badge bg-danger">55%</span></td>
                          </tr>
                          <tr>
                            <td>2.</td>
                            <td>Clean database</td>
                            <td>
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-warning" style="width: 70%"></div>
                              </div>
                            </td>
                            <td><span class="badge bg-warning">70%</span></td>
                          </tr>
                          <tr>
                            <td>3.</td>
                            <td>Cron job running</td>
                            <td>
                              <div class="progress progress-xs progress-striped active">
                                <div class="progress-bar bg-primary" style="width: 30%"></div>
                              </div>
                            </td>
                            <td><span class="badge bg-primary">30%</span></td>
                          </tr>
                          <tr>
                            <td>4.</td>
                            <td>Fix and squish bugs</td>
                            <td>
                              <div class="progress progress-xs progress-striped active">
                                <div class="progress-bar bg-success" style="width: 90%"></div>
                              </div>
                            </td>
                            <td><span class="badge bg-success">90%</span></td>
                          </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection